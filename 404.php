<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$pageTitle       = "Page Not Found | $siteName";
$metaDescription = "The page you're looking for doesn't exist. Return to our homepage or contact us for assistance with tree care services in Greensboro, NC.";
$canonicalUrl    = $siteUrl . '/404/';
$ogImage         = $siteUrl . '/assets/images/logo.png';
$currentPage     = '404';
$noindex         = true;  // Do not index 404 pages

$schemaMarkup = ''; // No schema on 404

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<main id="main-content">
    <section class="section" style="background: var(--color-bg); padding: var(--space-4xl) 0; min-height: 60vh; display: flex; align-items: center;">
        <div class="container text-center">
            <div style="max-width: 600px; margin: 0 auto;">
                <div style="font-size: 6rem; font-weight: 900; color: rgba(var(--color-primary-rgb), 0.1); line-height: 1; margin-bottom: var(--space-lg); font-family: var(--font-heading);">404</div>

                <h1 style="font-size: 2rem; margin-bottom: var(--space-md);">Page Not Found</h1>
                <p style="font-size: 1.125rem; color: var(--color-text-light); margin-bottom: var(--space-2xl);">The page you're looking for doesn't exist or has been moved. Let's get you back on track.</p>

                <div style="display: flex; gap: var(--space-md); justify-content: center; flex-wrap: wrap; margin-bottom: var(--space-3xl);">
                    <a href="/" class="btn btn-primary">Go to Homepage</a>
                    <a href="/contact/" class="btn btn-secondary">Contact Us</a>
                </div>

                <div style="background: var(--color-bg-alt); padding: var(--space-xl); border-radius: var(--radius); text-align: left;">
                    <h2 style="font-size: 1.25rem; margin-bottom: var(--space-md);">Popular Pages</h2>
                    <ul style="list-style: none; padding: 0; margin: 0; display: grid; gap: var(--space-sm);">
                        <li><a href="/services/" style="color: var(--color-primary); display: flex; align-items: center; gap: var(--space-xs); transition: transform var(--transition);">
                            <svg aria-hidden="true" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14" /><path d="m12 5 7 7-7 7" /></svg>
                            Our Services
                        </a></li>
                        <li><a href="/services/tree-removal/" style="color: var(--color-primary); display: flex; align-items: center; gap: var(--space-xs); transition: transform var(--transition);">
                            <svg aria-hidden="true" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14" /><path d="m12 5 7 7-7 7" /></svg>
                            Tree Removal
                        </a></li>
                        <li><a href="/services/tree-trimming/" style="color: var(--color-primary); display: flex; align-items: center; gap: var(--space-xs); transition: transform var(--transition);">
                            <svg aria-hidden="true" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14" /><path d="m12 5 7 7-7 7" /></svg>
                            Tree Trimming
                        </a></li>
                        <li><a href="/services/stump-grinding/" style="color: var(--color-primary); display: flex; align-items: center; gap: var(--space-xs); transition: transform var(--transition);">
                            <svg aria-hidden="true" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14" /><path d="m12 5 7 7-7 7" /></svg>
                            Stump Grinding
                        </a></li>
                        <li><a href="/about/" style="color: var(--color-primary); display: flex; align-items: center; gap: var(--space-xs); transition: transform var(--transition);">
                            <svg aria-hidden="true" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14" /><path d="m12 5 7 7-7 7" /></svg>
                            About Us
                        </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
