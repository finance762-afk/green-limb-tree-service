<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ── Page-level setup ─────────────────────────────────────────────────────── */
$pageType        = 'other';
$currentPage     = '404';
$pageTitle       = 'Page Not Found (404) | Green Limb Tree Service';
$pageDescription = 'This page could not be found. Browse our tree services or contact Green Limb Tree Service in Greensboro, NC.';
$canonicalUrl    = $siteUrl . '/404/';
$noindex         = true;  // Do not index 404 pages

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
.error-hero { min-height: 70vh; display: flex; align-items: center; justify-content: center; text-align: center; background: linear-gradient(135deg, var(--color-paper) 0%, var(--color-surface) 100%); }
.error-hero .container { max-width: 600px; }
.error-code { font-family: var(--font-accent); font-size: clamp(5rem, 15vw, 10rem); line-height: 1; color: var(--color-accent); font-weight: 700; margin-bottom: var(--space-2); opacity: 0.3; }
.error-hero h1 { margin-bottom: var(--space-3); }
.error-hero p { font-size: var(--fs-lead); color: var(--color-ink-2); margin-bottom: var(--space-6); }
.error-links { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: var(--space-3); margin-top: var(--space-8); max-width: 600px; margin-inline: auto; }
.error-link { background: var(--color-surface); border: 1px solid var(--color-line); border-radius: var(--radius-lg); padding: var(--space-4); text-align: center; transition: all var(--transition); text-decoration: none; color: var(--color-ink); }
.error-link:hover { border-color: var(--color-primary); transform: translateY(-2px); box-shadow: var(--shadow); }
.error-link svg { width: 32px; height: 32px; color: var(--color-accent); margin-bottom: var(--space-2); }
.error-link strong { display: block; font-size: var(--fs-h5); color: var(--color-ink); margin-bottom: var(--space-1); }
.error-link span { font-size: var(--fs-small); color: var(--color-muted); }
</style>

<main id="main-content">
    <section class="error-hero">
        <div class="container">
            <div class="error-code">404</div>
            <h1>Page not found</h1>
            <p>The page you're looking for doesn't exist or has been moved. Try one of these instead:</p>

            <div class="error-links">
                <a href="/" class="error-link">
                    <svg aria-hidden="true" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                    <strong>Home</strong>
                    <span>Start over</span>
                </a>

                <a href="/services/" class="error-link">
                    <svg aria-hidden="true" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 10v.2A3 3 0 0 1 8.9 16H5a3 3 0 0 1-1-5.8V10a3 3 0 0 1 6 0Z"/><path d="M7 16v6"/><path d="M13 19v3"/><path d="M12 19h8.3a1 1 0 0 0 .7-1.7L18 14h.3a1 1 0 0 0 .7-1.7L16 9h.2a1 1 0 0 0 .8-1.7L13 3l-1.4 1.5"/></svg>
                    <strong>Services</strong>
                    <span>Browse tree services</span>
                </a>

                <a href="/contact/" class="error-link">
                    <svg aria-hidden="true" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
                    <strong>Contact</strong>
                    <span>Get in touch</span>
                </a>

                <a href="/faq/" class="error-link">
                    <svg aria-hidden="true" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/></svg>
                    <strong>FAQ</strong>
                    <span>Common questions</span>
                </a>
            </div>

            <p style="margin-top: var(--space-8); font-size: var(--fs-base);">Or call us at <a href="tel:<?php echo $phoneRaw; ?>" style="color: var(--color-primary); font-weight: 600;"><?php echo htmlspecialchars($phone); ?></a></p>
        </div>
    </section>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
