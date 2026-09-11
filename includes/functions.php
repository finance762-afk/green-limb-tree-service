<?php
/**
 * includes/functions.php — Helper functions for Green Limb Tree Service.
 *
 * Loaded by config.php before any output. Provides page-detection, schema generation,
 * SEO helpers, and formatting utilities that templates use.
 */

/**
 * Check if current page matches the given slug (for active nav states).
 *
 * @param string $page  Page slug to test against (e.g., 'home', 'about', 'services')
 * @return bool         True if on this page
 */
function isActivePage($page) {
    $currentPath = trim($_SERVER['REQUEST_URI'], '/');

    if ($page === 'home') {
        return empty($currentPath) || $currentPath === 'index.php';
    }

    return strpos($currentPath, $page) === 0;
}

/**
 * Format phone number for display.
 * Converts raw digits to (XXX) XXX-XXXX format.
 *
 * @param string $phone  Raw phone number (e.g., '13362547993')
 * @return string        Formatted phone (e.g., '(336) 254-7993')
 */
function formatPhone($phone) {
    $clean = preg_replace('/[^0-9]/', '', $phone);

    if (strlen($clean) === 11 && substr($clean, 0, 1) === '1') {
        $clean = substr($clean, 1);
    }

    if (strlen($clean) === 10) {
        return '(' . substr($clean, 0, 3) . ') ' . substr($clean, 3, 3) . '-' . substr($clean, 6, 4);
    }

    return $phone;
}

/**
 * Convert service name to URL slug.
 *
 * @param string $name  Service name (e.g., 'Tree Removal')
 * @return string       URL slug (e.g., 'tree-removal')
 */
function getServiceSlug($name) {
    return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $name), '-'));
}

/**
 * Convert city/area name to URL slug.
 *
 * @param string $city  City name (e.g., 'High Point NC')
 * @return string       URL slug (e.g., 'high-point-nc')
 */
function getAreaSlug($city) {
    return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $city), '-'));
}

/**
 * Generate LocalBusiness JSON-LD schema for homepage.
 * Uses global config.php variables.
 *
 * @global string $siteName
 * @global string $siteUrl
 * @global string $phone
 * @global string $email
 * @global array  $address
 * @global bool   $addressPublic
 * @global string $businessHours
 * @global string $googleBusinessProfile
 * @global array  $geo
 * @global array  $services
 * @return string  JSON-LD script tag
 */
function generateLocalBusinessSchema() {
    global $siteName, $siteUrl, $phone, $email, $address, $addressPublic, $businessHours, $googleBusinessProfile, $geo, $services;

    // Build postal address (omit street if address_public is false)
    $postalAddress = [
        '@type' => 'PostalAddress',
        'addressLocality' => $address['city'],
        'addressRegion' => $address['state'],
        'postalCode' => $address['zip'],
        'addressCountry' => 'US'
    ];

    if ($addressPublic) {
        $postalAddress['streetAddress'] = $address['street'];
    }

    // Service offerings
    $serviceList = array_map(function($svc) {
        return $svc['name'];
    }, $services);

    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'TreeCareService',
        '@id' => $siteUrl . '#organization',
        'name' => $siteName,
        'url' => $siteUrl,
        'telephone' => $phone,
        'email' => $email,
        'address' => $postalAddress,
        'geo' => [
            '@type' => 'GeoCoordinates',
            'latitude' => $geo['lat'],
            'longitude' => $geo['lng']
        ],
        'hasMap' => $googleBusinessProfile,
        'openingHours' => 'Mo-Sa 00:00-24:00',
        'description' => 'Family-owned tree care company providing professional tree removal, trimming, pruning, and emergency storm cleanup services in Greensboro, NC and surrounding areas.',
        'areaServed' => [
            '@type' => 'City',
            'name' => $address['city'] . ', ' . $address['state']
        ],
        'priceRange' => '$$',
        'image' => $siteUrl . '/assets/images/logo-mark.png'
    ];

    if (!empty($serviceList)) {
        $schema['knowsAbout'] = $serviceList;
    }

    return '<script type="application/ld+json">' . "\n" . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . "\n" . '</script>';
}

/**
 * Generate BreadcrumbList schema for inner pages.
 *
 * @param array $crumbs  Array of ['name' => 'Label', 'url' => '/path/'] arrays
 * @return string        JSON-LD script tag
 */
function generateBreadcrumbSchema($crumbs) {
    global $siteUrl;

    $items = [];
    foreach ($crumbs as $index => $crumb) {
        $items[] = [
            '@type' => 'ListItem',
            'position' => $index + 1,
            'name' => $crumb['name'],
            'item' => $siteUrl . $crumb['url']
        ];
    }

    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => $items
    ];

    return '<script type="application/ld+json">' . "\n" . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . "\n" . '</script>';
}

/**
 * Generate FAQPage schema from FAQ array.
 *
 * @param array $faqs  Array of ['q' => 'Question?', 'a' => 'Answer.'] arrays
 * @return string      JSON-LD script tag
 */
function generateFAQSchema($faqs) {
    $questions = [];
    foreach ($faqs as $faq) {
        $questions[] = [
            '@type' => 'Question',
            'name' => $faq['q'],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => $faq['a']
            ]
        ];
    }

    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => $questions
    ];

    return '<script type="application/ld+json">' . "\n" . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . "\n" . '</script>';
}

/**
 * Render a responsive <picture> for an on-disk /assets/images/ photo.
 *
 * The build pipeline pre-generates -480/-960/-1600 .avif and .webp variants for
 * every manifest photo. This emits an AVIF <source> first, then a WebP <img>
 * fallback with srcset — the v6.3 image standard. Colors/animation are untouched.
 *
 * @param string $base    Photo basename without extension (e.g. '1000001503')
 * @param string $alt     Descriptive alt text
 * @param int    $width   Intrinsic width attribute (CLS guard)
 * @param int    $height  Intrinsic height attribute (CLS guard)
 * @param string $sizes   The `sizes` attribute
 * @param array  $opts    ['eager'=>bool] hero LCP image (eager + fetchpriority); default lazy
 * @return string         <picture> HTML
 */
function renderPicture($base, $alt, $width, $height, $sizes, $opts = []) {
    $eager = !empty($opts['eager']);
    $dir   = '/assets/images/';
    $avif  = $dir . $base . '-480.avif 480w, ' . $dir . $base . '-960.avif 960w, ' . $dir . $base . '-1600.avif 1600w';
    $webp  = $dir . $base . '-480.webp 480w, ' . $dir . $base . '-960.webp 960w, ' . $dir . $base . '-1600.webp 1600w';
    $loading = $eager ? 'eager' : 'lazy';
    $priority = $eager ? ' fetchpriority="high"' : ' decoding="async"';

    return '<picture>'
        . '<source type="image/avif" srcset="' . $avif . '" sizes="' . htmlspecialchars($sizes) . '">'
        . '<img src="' . $dir . $base . '.jpg" srcset="' . $webp . '" sizes="' . htmlspecialchars($sizes) . '"'
        . ' alt="' . htmlspecialchars($alt) . '" width="' . (int)$width . '" height="' . (int)$height . '"'
        . ' loading="' . $loading . '"' . $priority . '>'
        . '</picture>';
}

/**
 * Generate Service schema for individual service pages.
 *
 * @param string $serviceName  Service name (e.g., 'Tree Removal')
 * @param string $description  Service description
 * @return string              JSON-LD script tag
 */
function generateServiceSchema($serviceName, $description) {
    global $siteName, $siteUrl, $address;

    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'serviceType' => $serviceName,
        'name' => $serviceName . ' in ' . $address['city'] . ', ' . $address['state'],
        'description' => $description,
        'provider' => [
            '@id' => $siteUrl . '#organization'
        ],
        'areaServed' => [
            '@type' => 'City',
            'name' => $address['city'] . ', ' . $address['state']
        ]
    ];

    return '<script type="application/ld+json">' . "\n" . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . "\n" . '</script>';
}
