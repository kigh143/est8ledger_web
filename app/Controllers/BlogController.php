<?php

namespace App\Controllers;

use Parsedown;

class BlogController extends BaseController
{
    private $blogsPath;
    private $parsedown;

    public function __construct()
    {
        $this->blogsPath = ROOTPATH . 'blogs/';
        $this->parsedown = new Parsedown();
        $this->parsedown->setSafeMode(true); // Enable safe mode for security
    }

    public function index()
    {
        $blogs = $this->getAllBlogs();
        
        $data = [
            'title' => 'Blog - Latest Insights on Security Deposits & Rental Management',
            'description' => 'Stay updated with the latest insights on security deposit management, rental technology, and property management best practices.',
            'keywords' => 'rental blog, security deposit tips, property management insights, blockchain rentals, tenant advice',
            'blogs' => $blogs
        ];

        return view('pages/blogs', $data);
    }

    public function show($slug)
    {
        $blog = $this->getBlogBySlug($slug);
        
        if (!$blog) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Blog post not found');
        }

        // Increment view count
        $this->incrementViewCount($blog['id']);
        
        // Get updated blog data with new view count
        $blog = $this->getBlogBySlug($slug);

        // Format the blog content before passing to view
        $blog['formatted_content'] = $this->formatBlogContent($blog['content']);

        return view('pages/blog', ['blog' => $blog]);
    }

    public function addComment()
    {
        $blogId = $this->request->getPost('blog_id');
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $comment = $this->request->getPost('comment');

        // Validate input
        if (empty($blogId) || empty($name) || empty($email) || empty($comment)) {
            return redirect()->back()->with('error', 'All fields are required.');
        }

        if (strlen($comment) > 200) {
            return redirect()->back()->with('error', 'Comment must be 200 characters or less.');
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return redirect()->back()->with('error', 'Please enter a valid email address.');
        }

        // Add comment to blog
        $success = $this->addCommentToBlog($blogId, $name, $email, $comment);
        
        if ($success) {
            return redirect()->back()->with('success', 'Comment added successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to add comment. Please try again.');
        }
    }

    private function getAllBlogs()
    {
        $blogs = [];
        
        if (!is_dir($this->blogsPath)) {
            return $blogs;
        }

        $files = glob($this->blogsPath . 'blog_*.json');
        
        foreach ($files as $file) {
            $content = file_get_contents($file);
            $blog = json_decode($content, true);
            
            if ($blog) {
                $blogs[] = $blog;
            }
        }

        // Sort by published date (newest first)
        usort($blogs, function($a, $b) {
            return strtotime($b['published_date']) - strtotime($a['published_date']);
        });

        return $blogs;
    }

    private function getBlogBySlug($slug)
    {
        $blogs = $this->getAllBlogs();
        
        foreach ($blogs as $blog) {
            if ($blog['slug'] === $slug) {
                return $blog;
            }
        }

        return null;
    }

    private function incrementViewCount($blogId)
    {
        $filename = $this->blogsPath . 'blog_' . $blogId . '.json';
        
        if (file_exists($filename)) {
            $content = file_get_contents($filename);
            $blog = json_decode($content, true);
            
            if ($blog) {
                $blog['views']++;
                file_put_contents($filename, json_encode($blog, JSON_PRETTY_PRINT));
            }
        }
    }

    private function addCommentToBlog($blogId, $name, $email, $comment)
    {
        $filename = $this->blogsPath . 'blog_' . $blogId . '.json';
        
        if (file_exists($filename)) {
            $content = file_get_contents($filename);
            $blog = json_decode($content, true);
            
            if ($blog) {
                $newComment = [
                    'id' => uniqid(),
                    'name' => htmlspecialchars($name, ENT_QUOTES, 'UTF-8'),
                    'email' => htmlspecialchars($email, ENT_QUOTES, 'UTF-8'),
                    'comment' => htmlspecialchars($comment, ENT_QUOTES, 'UTF-8'),
                    'date' => date('Y-m-d H:i:s')
                ];
                
                $blog['comments'][] = $newComment;
                
                return file_put_contents($filename, json_encode($blog, JSON_PRETTY_PRINT)) !== false;
            }
        }

        return false;
    }

    private function formatBlogContent($content)
    {
        // Use Parsedown to convert markdown to HTML
        $html = $this->parsedown->text($content);
        
        // Apply Tailwind CSS classes to the generated HTML elements
        $html = $this->applyTailwindClasses($html);
        
        return $html;
    }

    private function applyTailwindClasses($html)
    {
        // Apply Tailwind classes to various HTML elements
        $replacements = [
            // Headers
            '/<h1([^>]*)>/' => '<h1$1 class="text-4xl font-bold text-primary-900 mt-12 mb-8">',
            '/<h2([^>]*)>/' => '<h2$1 class="text-3xl font-bold text-primary-900 mt-10 mb-6">',
            '/<h3([^>]*)>/' => '<h3$1 class="text-2xl font-bold text-secondary-900 mt-8 mb-4">',
            '/<h4([^>]*)>/' => '<h4$1 class="text-xl font-bold text-secondary-900 mt-6 mb-3">',
            '/<h5([^>]*)>/' => '<h5$1 class="text-lg font-bold text-secondary-900 mt-4 mb-2">',
            '/<h6([^>]*)>/' => '<h6$1 class="text-base font-bold text-secondary-900 mt-3 mb-2">',
            
            // Paragraphs
            '/<p([^>]*)>/' => '<p$1 class="mb-6 leading-relaxed text-secondary-700">',
            
            // Links
            '/<a([^>]*href[^>]*)>/' => '<a$1 class="text-primary-600 hover:text-primary-700 underline font-medium" target="_blank">',
            
            // Strong/Bold text
            '/<strong([^>]*)>/' => '<strong$1 class="font-semibold text-secondary-900">',
            
            // Emphasis/Italic text
            '/<em([^>]*)>/' => '<em$1 class="italic">',
            
            // Unordered lists
            '/<ul([^>]*)>/' => '<ul$1 class="list-disc list-inside space-y-2 mb-6 ml-4">',
            '/<ul([^>]*class="[^"]*")([^>]*)>/' => '<ul$1 space-y-2 mb-6 ml-4"$2>',
            
            // Ordered lists
            '/<ol([^>]*)>/' => '<ol$1 class="list-decimal list-inside space-y-2 mb-6 ml-4">',
            '/<ol([^>]*class="[^"]*")([^>]*)>/' => '<ol$1 space-y-2 mb-6 ml-4"$2>',
            
            // List items
            '/<li([^>]*)>/' => '<li$1 class="mb-2">',
            
            // Blockquotes
            '/<blockquote([^>]*)>/' => '<blockquote$1 class="border-l-4 border-primary-300 pl-6 py-4 mb-6 bg-primary-50 italic text-primary-800">',
            
            // Code blocks (pre)
            '/<pre([^>]*)><code([^>]*)>/' => '<pre$1 class="bg-gray-100 border border-gray-200 rounded-lg p-4 mb-6 overflow-x-auto"><code$2 class="text-sm">',
            '/<pre([^>]*)>/' => '<pre$1 class="bg-gray-100 border border-gray-200 rounded-lg p-4 mb-6 overflow-x-auto">',
            
            // Inline code
            '/<code([^>]*)>/' => '<code$1 class="bg-gray-100 px-2 py-1 rounded text-sm font-mono">',
            
            // Tables
            '/<table([^>]*)>/' => '<table$1 class="min-w-full divide-y divide-gray-200 mb-6">',
            '/<thead([^>]*)>/' => '<thead$1 class="bg-gray-50">',
            '/<tbody([^>]*)>/' => '<tbody$1 class="bg-white divide-y divide-gray-200">',
            '/<th([^>]*)>/' => '<th$1 class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">',
            '/<td([^>]*)>/' => '<td$1 class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">',
            
            // Horizontal rules
            '/<hr([^>]*)>/' => '<hr$1 class="my-8 border-gray-300">',
        ];
        
        foreach ($replacements as $pattern => $replacement) {
            $html = preg_replace($pattern, $replacement, $html);
        }
        
        return $html;
    }
}
