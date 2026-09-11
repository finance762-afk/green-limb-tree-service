<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    // Every page sets $pageTitle, $metaDescription, $canonicalUrl before including head.php
    $fullTitle = isset($pageTitle) ? $pageTitle : $siteName . ' | ' . $primaryKeyword . ' | ' . $address['city'] . ', ' . $address['state'];
    $description = isset($metaDescription) ? $metaDescription : 'Professional tree service in ' . $address['city'] . ', ' . $address['state'] . '. ' . $siteName . ' provides expert tree removal, trimming, pruning, and emergency storm cleanup.';
    $canonical = isset($canonicalUrl) ? $canonicalUrl : $siteUrl . $_SERVER['REQUEST_URI'];
    ?>

    <title><?php echo htmlspecialchars($fullTitle); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($description); ?>">
    <link rel="canonical" href="<?php echo htmlspecialchars($canonical); ?>">

    <?php if (isset($noindex) && $noindex): ?>
    <meta name="robots" content="noindex, nofollow">
    <?php endif; ?>

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo htmlspecialchars($fullTitle); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($description); ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars($canonical); ?>">
    <meta property="og:image" content="<?php echo $siteUrl; ?>/assets/images/logo.png">
    <meta property="og:site_name" content="<?php echo htmlspecialchars($siteName); ?>">
    <meta property="og:locale" content="en_US">

    <!-- Favicons -->
    <link rel="icon" type="image/svg+xml" href="/assets/images/favicon.svg">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon-16x16.png">

    <!-- Font preload (self-hosted v6.2 — NO Google Fonts CDN) -->
    <link rel="preload" href="/assets/fonts/bricolage-grotesque.woff2" as="font" type="font/woff2" crossorigin>

    <?php if (isset($heroPreload) && !empty($heroPreload)): ?>
    <!-- Hero image preload (v6.3 — avif srcset, fetchpriority high) -->
    <link rel="preload" as="image" type="image/avif" imagesrcset="<?php echo $heroPreload['srcset']; ?>" imagesizes="<?php echo $heroPreload['sizes']; ?>" fetchpriority="high">
    <?php endif; ?>

    <!-- Critical CSS inline (v6.3 — above-the-fold subset) -->
    <style><?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/critical.css'; ?></style>

    <!-- Framework CSS (v6.3 — async preload + noscript fallback) -->
    <link rel="preload" href="/assets/css/framework.css?v=<?php echo $cssVersion; ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="/assets/css/framework.css?v=<?php echo $cssVersion; ?>"></noscript>

    <!-- Google Analytics (placeholder — replace post-launch) -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $googleAnalyticsId; ?>"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', '<?php echo $googleAnalyticsId; ?>');
    </script> -->

    <?php
    // LocalBusiness schema (homepage only)
    if (!isset($currentPage) || $currentPage === 'home'):
        $businessSchema = [
            '@context' => 'https://schema.org',
            '@type'    => 'TreeService',
            '@id'      => $siteUrl . '/#organization',
            'name'     => $siteName,
            'url'      => $siteUrl,
            'telephone' => $phone,
            'email'    => $email,
            'description' => 'Professional tree care services in ' . $address['city'] . ', ' . $address['state'] . '. Expert tree removal, trimming, pruning, stump grinding, and emergency storm cleanup.',
            'address'  => [
                '@type' => 'PostalAddress',
                'addressLocality' => $address['city'],
                'addressRegion'   => $address['state'],
                'postalCode'      => $address['zip'],
                'addressCountry'  => 'US'
            ],
            'geo' => [
                '@type'     => 'GeoCoordinates',
                'latitude'  => $geo['lat'],
                'longitude' => $geo['lng']
            ],
            'hasMap'      => $googleBusinessProfile,
            'openingHours' => 'Mo-Sa 00:00-23:59',
            'image'        => $siteUrl . '/assets/images/logo.png',
            'priceRange'   => '$$',
            'areaServed'   => array_map(function($area) {
                return ['@type' => 'City', 'name' => $area];
            }, $serviceAreas),
            'serviceOffered' => array_map(function($svc) use ($siteUrl) {
                return [
                    '@type' => 'Service',
                    'name'  => $svc['name'],
                    'description' => $svc['description']
                ];
            }, $services)
        ];

        echo '<script type="application/ld+json">' . "\n";
        echo json_encode($businessSchema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . "\n";
        echo '</script>' . "\n";
    endif;
    ?>
</head>
<body>
