<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

/**
 * Public property listings, fetched server-side from the est8Ledger API
 * (GET /public/property-listings). Fetching here rather than in the browser
 * keeps the pages indexable and sidesteps the API's CORS allow-list.
 */
class ListingsController extends BaseController
{
    private const PER_PAGE = 12;

    private function apiUrl(string $path): string
    {
        $base = rtrim(env('est8ledger.apiURL', 'https://api.est8ledger.com/api'), '/');

        return $base . $path;
    }

    /**
     * @return array{0:int,1:array|null} HTTP status and decoded body (null on failure)
     */
    private function fetch(string $path, array $query = []): array
    {
        try {
            $response = service('curlrequest')->get($this->apiUrl($path), [
                'query'       => $query,
                'timeout'     => 8,
                'http_errors' => false,
                'headers'     => ['Accept' => 'application/json'],
            ]);

            return [$response->getStatusCode(), json_decode($response->getBody(), true)];
        } catch (\Throwable $e) {
            log_message('error', 'Listings API request failed: ' . $e->getMessage());

            return [0, null];
        }
    }

    public function index()
    {
        $page = max(1, (int) ($this->request->getGet('page') ?? 1));
        $q    = trim((string) $this->request->getGet('q'));

        $query = ['page' => $page, 'limit' => self::PER_PAGE];
        if ($q !== '') {
            $query['q'] = mb_substr($q, 0, 100);
        }

        [$status, $body] = $this->fetch('/public/property-listings', $query);

        $data = [
            'title'       => 'Houses & Apartments for Rent',
            'description' => 'Browse rental properties advertised by verified est8Ledger landlords in Uganda & East Africa. Every tenancy comes with deposit protection and digital inspections.',
            'keywords'    => 'houses for rent Uganda, apartments for rent Kampala, rental listings East Africa, rent a house, est8Ledger listings',
            'listings'    => $body['data'] ?? [],
            'currentPage' => $body['pagination']['page'] ?? $page,
            'totalPages'  => $body['pagination']['totalPages'] ?? 0,
            'total'       => $body['pagination']['total'] ?? 0,
            'q'           => $q,
            'loadFailed'  => $status !== 200,
        ];

        return view('pages/listings', $data);
    }

    public function show($id)
    {
        if (! ctype_digit((string) $id)) {
            throw PageNotFoundException::forPageNotFound('Listing not found');
        }

        [$status, $listing] = $this->fetch('/public/property-listings/' . $id);

        if ($status === 404) {
            throw PageNotFoundException::forPageNotFound('This listing is no longer available');
        }
        if ($status !== 200 || ! is_array($listing)) {
            throw new \RuntimeException('Could not load listing ' . $id);
        }

        $property = $listing['property'] ?? [];
        $location = implode(', ', array_filter([$property['city'] ?? null, $property['district'] ?? null]));

        $data = [
            'title'       => ($property['name'] ?? 'Rental property') . ($location ? ' – ' . $location : ''),
            'description' => mb_substr(trim((string) ($listing['description'] ?? '')), 0, 155),
            'keywords'    => 'house for rent ' . $location . ', rental property ' . ($property['country'] ?? 'Uganda') . ', est8Ledger listing',
            'og_image'    => $listing['images'][0] ?? null,
            'listing'     => $listing,
            'location'    => $location,
        ];

        return view('pages/listing', $data);
    }
}
