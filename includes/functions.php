<?php
/**
 * includes/functions.php — Helper functions for Green Limb Tree Service.
 *
 * Loaded by config.php. Provides utilities for navigation, schema generation,
 * SEO helpers, and inline SVG icons. Do not emit HTML from this file.
 */

/**
 * Check if a given page is the current active page.
 *
 * @param  string $page  The page slug to check (e.g., 'home', 'services', 'about')
 * @return bool          True if current page matches, false otherwise
 */
function isActivePage($page) {
    global $currentPage;
    return isset($currentPage) && $currentPage === $page;
}

/**
 * Format phone number for tel: link (strips formatting).
 *
 * @param  string $phone  Formatted phone number
 * @return string         E.164 style digits (e.g., '+13362547993')
 */
function formatPhone($phone) {
    return '+1' . preg_replace('/[^0-9]/', '', $phone);
}

/**
 * Generate URL-safe slug from service/area name.
 *
 * @param  string $name  Service or area name
 * @return string        URL-safe slug
 */
function getServiceSlug($name) {
    return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $name), '-'));
}

function getAreaSlug($city) {
    return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $city), '-'));
}

/**
 * Generate LocalBusiness or Service JSON-LD schema.
 *
 * @param  array  $service  Service array from config.php (name, description, keywords)
 * @return string           JSON-LD script tag
 */
function generateServiceSchema($service) {
    global $siteName, $siteUrl, $phone, $address, $geo;

    $schema = [
        '@context' => 'https://schema.org',
        '@type'    => 'Service',
        '@id'      => $siteUrl . '/services/' . $service['slug'] . '/#service',
        'name'     => $service['name'],
        'description' => $service['description'],
        'provider' => [
            '@id' => $siteUrl . '/#organization'
        ],
        'areaServed' => [
            '@type' => 'City',
            'name'  => $address['city'],
        ],
        'serviceType' => $service['name']
    ];

    return '<script type="application/ld+json">' . "\n" . json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . "\n" . '</script>';
}

/**
 * Generate FAQPage JSON-LD schema.
 *
 * @param  array  $faqs  Array of FAQ items with 'q' and 'a' keys
 * @return string        JSON-LD script tag
 */
function generateFAQSchema($faqs) {
    global $siteUrl;

    $mainEntity = [];
    foreach ($faqs as $faq) {
        $mainEntity[] = [
            '@type' => 'Question',
            'name'  => $faq['q'],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => $faq['a']
            ]
        ];
    }

    $schema = [
        '@context'   => 'https://schema.org',
        '@type'      => 'FAQPage',
        'mainEntity' => $mainEntity
    ];

    return '<script type="application/ld+json">' . "\n" . json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . "\n" . '</script>';
}

/**
 * Generate meta tags for SEO (title, description, canonical).
 *
 * @param  string $title       Page title
 * @param  string $description Meta description
 * @param  string $canonical   Canonical URL
 * @return string              HTML meta tags
 */
function generateMetaTags($title, $description, $canonical) {
    $tags = '';
    $tags .= '<title>' . htmlspecialchars($title) . '</title>' . "\n";
    $tags .= '<meta name="description" content="' . htmlspecialchars($description) . '">' . "\n";
    $tags .= '<link rel="canonical" href="' . htmlspecialchars($canonical) . '">';

    return $tags;
}

/**
 * Inline SVG icon from references/lucide-icons.
 * v6.2 — NO runtime injection; paste SVG at build time.
 *
 * @param  string $name  Icon name (matches filename without .svg)
 * @param  int    $size  Width/height in pixels (default 24)
 * @return string        Inline SVG markup
 */
function icon($name, $size = 24) {
    $iconPath = $_SERVER['DOCUMENT_ROOT'] . '/../crm/references/lucide-icons/' . $name . '.svg';

    if (!file_exists($iconPath)) {
        return '<!-- Icon not found: ' . htmlspecialchars($name) . ' -->';
    }

    $svg = file_get_contents($iconPath);

    // Add aria-hidden and size attributes
    $svg = str_replace('<svg', '<svg aria-hidden="true" width="' . $size . '" height="' . $size . '"', $svg);

    return $svg;
}
