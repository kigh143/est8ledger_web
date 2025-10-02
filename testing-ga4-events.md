# Testing GA4 Events in DebugView

## 1. Enable Debug Mode
Debug mode is automatically enabled when `ENVIRONMENT === 'development'` in your CodeIgniter app.

## 2. Access GA4 DebugView
1. Go to Google Analytics 4
2. Navigate to **Configure** > **DebugView**
3. You should see your debug events in real-time

## 3. Test Each Event Type

### Form Submissions
**Test:** Fill out and submit the waiting list form
**Expected Events:**
- `modal_interaction` (action: open)
- `form_submit` (form_type: waiting_list)

### CTA Clicks
**Test:** Click any primary button
**Expected Events:**
- `cta_click` (cta_name: button text, cta_location: section)

### Navigation
**Test:** Click menu items
**Expected Events:**
- `navigation_click` (link_text: menu item, nav_type: main_nav)

### Blog Interactions
**Test:** Visit /blogs and click on a blog post
**Expected Events:**
- `blog_interaction` (action: blog_click, blog_title: post title)

### Survey Interactions
**Test:** Start and complete a survey
**Expected Events:**
- `survey_interaction` (action: survey_started)
- `survey_interaction` (action: question_answered)
- `survey_interaction` (action: survey_submitted)

### Scroll Depth
**Test:** Scroll down the page
**Expected Events:**
- `scroll_depth` (scroll_percentage: 25, 50, 75, 90)

## 4. Debug Console Logging
When in development mode, all events are logged to the browser console:
```javascript
// Open browser DevTools > Console to see:
GA4 Event Tracked: form_submit {form_type: "waiting_list", form_id: "demoForm", ...}
```

## 5. Verify Event Parameters
In DebugView, click on any event to see its parameters:
- `page_title`: Current page title
- `page_location`: Current URL
- `timestamp`: Event timestamp
- Custom parameters specific to each event

## 6. Common Issues & Solutions

### Events Not Showing
- Check if gtag is loaded: `typeof gtag !== 'undefined'`
- Verify GA4 Measurement ID is correct
- Ensure debug_mode is enabled

### Missing Parameters
- Check browser console for parameter values
- Verify form data is being captured correctly
- Ensure event names are under 40 characters

### Testing Checklist
- [ ] Page view enhanced tracking
- [ ] Waiting list form submission
- [ ] Contact form submission
- [ ] CTA button clicks
- [ ] Navigation menu clicks
- [ ] Modal open/close
- [ ] Blog post clicks
- [ ] Survey interactions
- [ ] Scroll depth tracking
- [ ] Error tracking