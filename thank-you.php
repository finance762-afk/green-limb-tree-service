<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ── Page-level setup ─────────────────────────────────────────────────────── */
$pageType        = 'other';
$currentPage     = 'thank-you';
$pageTitle       = 'Thank You | Green Limb Tree Service';
$pageDescription = 'Thank you for contacting Green Limb Tree Service. We\'ll reply within one business day.';
$canonicalUrl    = $siteUrl . '/thank-you/';
$noindex         = true;  // Do not index thank-you pages

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
.thank-you-hero { min-height: 75vh; display: flex; align-items: center; justify-content: center; text-align: center; background: linear-gradient(135deg, color-mix(in srgb, var(--color-primary) 5%, var(--color-surface)) 0%, var(--color-surface) 100%); position: relative; overflow: hidden; }
.thank-you-hero::before { content: ''; position: absolute; inset: 0; background: radial-gradient(circle at 50% 0%, color-mix(in srgb, var(--color-accent) 10%, transparent), transparent 70%); pointer-events: none; }
.thank-you-hero .container { position: relative; max-width: 700px; z-index: 1; }
.thank-you-icon { width: 80px; height: 80px; color: var(--color-accent); margin-bottom: var(--space-4); display: inline-block; animation: checkPop 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55); }
@keyframes checkPop { 0% { transform: scale(0) rotate(-45deg); opacity: 0; } 50% { transform: scale(1.1) rotate(5deg); } 100% { transform: scale(1) rotate(0deg); opacity: 1; } }
.thank-you-hero h1 { margin-bottom: var(--space-3); }
.thank-you-hero p { font-size: var(--fs-lead); color: var(--color-ink-2); margin-bottom: var(--space-2); }
.thank-you-hero .what-next { background: var(--color-surface); border: 1px solid var(--color-line); border-radius: var(--radius-lg); padding: var(--space-5); margin-top: var(--space-8); max-width: 500px; margin-inline: auto; text-align: left; }
.thank-you-hero .what-next h2 { font-size: var(--fs-h4); margin-bottom: var(--space-4); text-align: center; }
.thank-you-hero .what-next ol { margin: 0; padding: 0; list-style: none; }
.thank-you-hero .what-next li { display: flex; gap: var(--space-3); margin-bottom: var(--space-3); }
.thank-you-hero .what-next li:last-child { margin-bottom: 0; }
.thank-you-hero .what-next .step-num { flex-shrink: 0; width: 32px; height: 32px; background: var(--color-primary); color: var(--color-white); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: var(--fs-small); }
.thank-you-hero .what-next .step-text { flex: 1; color: var(--color-ink-2); line-height: 1.6; }
.thank-you-cta { display: flex; gap: var(--space-3); justify-content: center; flex-wrap: wrap; margin-top: var(--space-6); }
</style>

<main id="main-content">
    <section class="thank-you-hero">
        <div class="container">
            <svg class="thank-you-icon" aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"/><path d="m9 12 2 2 4-4"/></svg>

            <h1>Thank you!</h1>
            <p>We received your message and will get back to you within one business day — usually much faster.</p>
            <p style="font-size: var(--fs-base); color: var(--color-muted);">Check your email for a confirmation.</p>

            <div class="what-next">
                <h2>What happens next</h2>
                <ol>
                    <li>
                        <span class="step-num">1</span>
                        <span class="step-text">We'll call you back the same day to understand the job and answer quick questions.</span>
                    </li>
                    <li>
                        <span class="step-num">2</span>
                        <span class="step-text">We schedule a free on-site visit to walk the property and put a firm price in writing.</span>
                    </li>
                    <li>
                        <span class="step-num">3</span>
                        <span class="step-text">We get it done cleanly — rigged, raked, and hauled before we leave.</span>
                    </li>
                </ol>
            </div>

            <div class="thank-you-cta">
                <a href="/" class="btn btn-primary">Back to Home</a>
                <a href="/services/" class="btn btn-secondary">Browse Services</a>
            </div>

            <p style="margin-top: var(--space-8); font-size: var(--fs-base); color: var(--color-muted);">Need immediate help? Call <a href="tel:<?php echo $phoneRaw; ?>" style="color: var(--color-primary); font-weight: 600;"><?php echo htmlspecialchars($phone); ?></a></p>
        </div>
    </section>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
