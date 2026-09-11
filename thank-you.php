<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$pageTitle       = "Thank You | $siteName";
$metaDescription = "Thank you for contacting $siteName. We'll respond to your inquiry within 1 business day.";
$canonicalUrl    = $siteUrl . '/thank-you';
$ogImage         = $siteUrl . '/assets/images/logo.png';
$currentPage     = 'thank-you';
$noindex         = true;  // Do not index thank-you pages

$schemaMarkup = ''; // No schema on thank-you

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<main id="main-content">
    <section class="section" style="background: var(--color-bg); padding: var(--space-4xl) 0; min-height: 60vh; display: flex; align-items: center;">
        <div class="container text-center">
            <div style="max-width: 700px; margin: 0 auto;">
                <!-- Success Icon -->
                <div style="width: 80px; height: 80px; margin: 0 auto var(--space-xl); background: rgba(var(--color-primary-rgb), 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <svg aria-hidden="true" width="40" height="40" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"/><path d="m9 12 2 2 4-4"/></svg>
                </div>

                <h1 style="font-size: 2.5rem; margin-bottom: var(--space-md);">Thank You!</h1>
                <p style="font-size: 1.25rem; color: var(--color-text-light); margin-bottom: var(--space-2xl);">We've received your request and will respond within 1 business day.</p>

                <div style="background: var(--color-bg-alt); padding: var(--space-2xl); border-radius: var(--radius); margin-bottom: var(--space-3xl); text-align: left;">
                    <h2 style="font-size: 1.5rem; margin-bottom: var(--space-lg); text-align: center;">What Happens Next?</h2>
                    <ol style="margin: 0; padding-left: var(--space-xl); display: grid; gap: var(--space-md);">
                        <li style="line-height: 1.6;"><strong>We'll review your request</strong> and gather details about your property and tree care needs.</li>
                        <li style="line-height: 1.6;"><strong>We'll contact you</strong> within 1 business day to schedule a free on-site consultation.</li>
                        <li style="line-height: 1.6;"><strong>We'll provide a detailed estimate</strong> with photography, a breakdown of work, and a 5-year care plan.</li>
                        <li style="line-height: 1.6;"><strong>You decide</strong> — no pressure, no upsells. Just honest advice and transparent pricing.</li>
                    </ol>
                </div>

                <div style="margin-bottom: var(--space-3xl);">
                    <p style="font-size: 1.125rem; margin-bottom: var(--space-lg);"><strong>Need immediate assistance?</strong></p>
                    <a href="tel:<?php echo $phoneRaw; ?>" class="btn btn-primary" style="font-size: 1.25rem; padding: 16px 32px;">
                        <svg aria-hidden="true" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" /></svg>
                        Call <?php echo htmlspecialchars($phone); ?>
                    </a>
                    <p style="margin-top: var(--space-sm); font-size: 0.9rem; color: var(--color-text-light);">Same-day emergency service available for storm damage</p>
                </div>

                <div style="display: flex; gap: var(--space-md); justify-content: center; flex-wrap: wrap;">
                    <a href="/" class="btn btn-secondary">Return to Homepage</a>
                    <a href="<?php echo htmlspecialchars($reviewRequestUrl); ?>" target="_blank" rel="noopener" class="btn btn-secondary">
                        Leave Us a Google Review
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
