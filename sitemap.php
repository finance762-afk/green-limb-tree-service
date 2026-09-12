<?php
/**
 * sitemap.php — Dynamic XML sitemap for Green Limb Tree Service.
 *
 * Serves at /sitemap.xml via .htaccess rewrite. Lists all indexable pages with
 * <loc>, <lastmod>, <changefreq>, <priority>. The blog-data.php registry is the
 * single source for blog post URLs — never hardcode post slugs here.
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/blog-data.php';

header('Content-Type: application/xml; charset=utf-8');

// Last modified timestamp (current date)
$lastmod = date('Y-m-d');

// Build the page registry
$pages = [];

// Homepage
$pages[] = [
    'loc'        => $siteUrl . '/',
    'lastmod'    => $lastmod,
    'changefreq' => 'weekly',
    'priority'   => '1.0',
];

// Main section pages
$pages[] = [
    'loc'        => $siteUrl . '/about/',
    'lastmod'    => $lastmod,
    'changefreq' => 'monthly',
    'priority'   => '0.8',
];

$pages[] = [
    'loc'        => $siteUrl . '/contact/',
    'lastmod'    => $lastmod,
    'changefreq' => 'monthly',
    'priority'   => '0.8',
];

$pages[] = [
    'loc'        => $siteUrl . '/faq/',
    'lastmod'    => $lastmod,
    'changefreq' => 'monthly',
    'priority'   => '0.7',
];

// Services main page
$pages[] = [
    'loc'        => $siteUrl . '/services/',
    'lastmod'    => $lastmod,
    'changefreq' => 'weekly',
    'priority'   => '0.9',
];

// Individual service pages
foreach ($services as $service) {
    $pages[] = [
        'loc'        => $siteUrl . '/services/' . $service['slug'] . '/',
        'lastmod'    => $lastmod,
        'changefreq' => 'monthly',
        'priority'   => '0.8',
    ];
}

// Service areas main page
$pages[] = [
    'loc'        => $siteUrl . '/service-areas/',
    'lastmod'    => $lastmod,
    'changefreq' => 'weekly',
    'priority'   => '0.9',
];

// Individual service area pages
foreach ($serviceAreas as $area) {
    $areaSlug = getAreaSlug($area);
    $areaPath = '/service-areas/' . $areaSlug . '/';
    // Only include if the directory exists
    if (is_dir($_SERVER['DOCUMENT_ROOT'] . $areaPath)) {
        $pages[] = [
            'loc'        => $siteUrl . $areaPath,
            'lastmod'    => $lastmod,
            'changefreq' => 'monthly',
            'priority'   => '0.7',
        ];
    }
}

// Blog index
$pages[] = [
    'loc'        => $siteUrl . '/blog/',
    'lastmod'    => $lastmod,
    'changefreq' => 'weekly',
    'priority'   => '0.8',
];

// Blog posts (from registry — SINGLE SOURCE)
foreach ($blogPosts as $post) {
    $pages[] = [
        'loc'        => $siteUrl . '/blog/' . $post['slug'] . '/',
        'lastmod'    => $post['dateISO'],
        'changefreq' => 'monthly',
        'priority'   => '0.7',
    ];
}

// Legal / compliance pages (v6.1+ requirement)
$legalPages = [
    'privacy-policy'  => 'Privacy Policy',
    'terms'           => 'Terms of Service',
    'cookie-policy'   => 'Cookie Policy',
    'accessibility'   => 'Accessibility Statement',
];

foreach ($legalPages as $slug => $name) {
    $legalPath = '/' . $slug . '/';
    if (is_dir($_SERVER['DOCUMENT_ROOT'] . $legalPath)) {
        $pages[] = [
            'loc'        => $siteUrl . $legalPath,
            'lastmod'    => $lastmod,
            'changefreq' => 'yearly',
            'priority'   => '0.3',
        ];
    }
}

// Output XML
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($pages as $page): ?>
  <url>
    <loc><?php echo htmlspecialchars($page['loc']); ?></loc>
    <lastmod><?php echo htmlspecialchars($page['lastmod']); ?></lastmod>
    <changefreq><?php echo htmlspecialchars($page['changefreq']); ?></changefreq>
    <priority><?php echo htmlspecialchars($page['priority']); ?></priority>
  </url>
<?php endforeach; ?>
</urlset>
