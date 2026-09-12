<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ── Page-level setup ─────────────────────────────────────────────────────── */
$pageType        = 'about';
$currentPage     = 'about';
$pageTitle       = 'About Green Limb Tree Service | Family-Owned Tree Care in Greensboro, NC';
$pageDescription = 'Meet the Green Limb Tree Service team — a family-owned Greensboro, NC tree care company serving the Piedmont with expert removals, trimming, pruning, and 24/7 storm response.';
$canonicalUrl    = $siteUrl . '/about/';

/* Breadcrumb + WebPage schema */
$breadcrumbs = [
    ['name' => 'Home', 'url' => '/'],
    ['name' => 'About', 'url' => '/about/'],
];
$schemaGraph = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'WebPage',
            '@id'   => $canonicalUrl . '#webpage',
            'url'   => $canonicalUrl,
            'name'  => $pageTitle,
            'description' => $pageDescription,
            'isPartOf' => ['@id' => $siteUrl . '/#website'],
            'about' => ['@id' => $siteUrl . '/#organization'],
            'breadcrumb' => ['@id' => $canonicalUrl . '#breadcrumb'],
        ],
        [
            '@type' => 'BreadcrumbList',
            '@id'   => $canonicalUrl . '#breadcrumb',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $siteUrl . '/'],
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'About', 'item' => $canonicalUrl],
            ],
        ],
    ],
];
$schemaMarkup = '<script type="application/ld+json">' . json_encode($schemaGraph, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<?php echo $schemaMarkup; ?>

<style>
/* ============================================================================
   About page composition (Green Limb Tree Service)
   ============================================================================ */

/* Hero: interior compact pattern */
.about-hero { padding: calc(var(--nav-height) + clamp(2rem, 5vw, 3.5rem)) 0 clamp(2.5rem, 6vw, 4rem); }
.about-hero .container { max-width: var(--max-width); }
.about-hero-lead { font-size: var(--fs-lead); color: var(--color-ink-2); margin-top: var(--space-3); max-width: 60ch; }

/* Story grid: asymmetric two-column with image pull */
.story-grid { display: grid; grid-template-columns: 1.2fr 1fr; gap: clamp(2rem, 5vw, 4rem); align-items: start; margin-top: var(--space-8); }
.story-media { position: relative; }
.story-media img { width: 100%; height: auto; border-radius: var(--radius-lg); }
.story-stat { position: absolute; bottom: -20px; right: -20px; background: var(--color-surface); border: 3px solid var(--color-white); border-radius: var(--radius); padding: var(--space-4); box-shadow: var(--shadow-lg); }
.story-stat b { display: block; font-family: var(--font-accent); font-size: 2.5rem; line-height: 1; color: var(--color-primary); text-transform: uppercase; letter-spacing: .05em; }
.story-stat span { font-size: var(--fs-small); color: var(--color-muted); }
@media (max-width: 900px) {
    .story-grid { grid-template-columns: 1fr; }
    .story-stat { bottom: 10px; right: 10px; }
}

/* Values: three-col grid */
.values-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: var(--space-6); margin-top: var(--space-6); }
.value-card { background: var(--color-paper-2); border: 1px solid var(--color-line); border-radius: var(--radius-lg); padding: clamp(1.5rem, 3vw, 2rem); }
.value-card svg { width: 40px; height: 40px; color: var(--color-accent); margin-bottom: var(--space-3); }
.value-card h3 { font-size: var(--fs-h4); margin-bottom: var(--space-2); }
.value-card p { color: var(--color-ink-2); line-height: 1.65; }

/* Certifications / credentials row */
.credentials-row { display: flex; flex-wrap: wrap; gap: var(--space-4); margin-top: var(--space-6); }
.credential-badge { display: inline-flex; align-items: center; gap: var(--space-2); background: var(--color-surface); border: 2px solid var(--color-primary); border-radius: var(--radius); padding: var(--space-2) var(--space-4); font-family: var(--font-accent); font-weight: 700; font-size: var(--fs-small); text-transform: uppercase; letter-spacing: .06em; color: var(--color-primary); }
.credential-badge svg { width: 20px; height: 20px; }

/* CTA band: proof-led dark */
.about-cta { position: relative; overflow: hidden; }
.about-cta .floating-ring { top: -100px; right: -100px; opacity: .08; }
</style>

<!-- ═══════════════════════ HERO ═══════════════════════ -->
<section class="section section--light about-hero" aria-label="About Green Limb Tree Service">
    <div class="container">
        <div class="reveal-up">
            <span class="eyebrow-label">Our Story</span>
            <h1>Family-run tree care rooted in the Greensboro community</h1>
            <p class="about-hero-lead">Green Limb Tree Service is a local, family-owned crew — not a call-center franchise. When you call, you reach the people who show up, climb the tree, and rake the yard before they leave. We've been keeping Greensboro's canopy safe, healthy, and beautiful one job at a time.</p>
        </div>
    </div>
</section>

<!-- ═══════════════════════ STORY SPLIT ═══════════════════════ -->
<section class="section" aria-label="How we work">
    <div class="container">
        <div class="story-grid">

            <div class="story-copy reveal-left">
                <h2>Local tree experts who know how Greensboro trees grow — and fail</h2>
                <p>The Piedmont's mix of towering willow oaks, loblolly pines, and ice-loaded winters is hard on trees. We know how these species fail, when they're safe to work, and how to take one down cleanly between a house and a fence line.</p>
                <p>Owner <strong>Woan Y</strong> started Green Limb Tree Service to bring honest, skilled tree care to Greensboro homeowners and businesses. We're not just removing trees — we're diagnosing problems, preventing damage, and preserving the mature canopy that makes Greensboro neighborhoods beautiful.</p>
                <p>Every crew member is trained in rigging and climbing safety, and we carry full liability insurance on every job. From a single dead limb to an entire lot clearing, we scope it, price it fairly, and leave the site clean.</p>

                <div class="credentials-row">
                    <span class="credential-badge">
                        <svg aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>
                        Fully Insured
                    </span>
                    <span class="credential-badge">
                        <svg aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                        24/7 Storm Response
                    </span>
                    <span class="credential-badge">
                        <svg aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 11 18-5v12L3 14v-3z"/><path d="M11.6 16.8a3 3 0 1 1-5.8-1.6"/></svg>
                        Free Estimates
                    </span>
                </div>
            </div>

            <div class="story-media reveal-right">
                <?php echo renderPicture('lift-tall-oak-takedown', 'Spider lift taking down a tall oak on a Greensboro property', 720, 900, '(max-width: 900px) 100vw, 460px'); ?>
                <div class="story-stat">
                    <b>Same Day</b>
                    <span>Emergency call-outs</span>
                </div>
            </div>

        </div>
    </div>
</section>

<?php $ctaBandId = 'cta-band'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/cta-band.php'; ?>

<!-- ═══════════════════════ VALUES ═══════════════════════ -->
<section class="section section--light" aria-label="Our values">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="eyebrow-label">Why Choose Us</span>
            <h2>What sets Green Limb Tree Service apart</h2>
            <p>We bring hands-on knowledge of Piedmont trees, careful rigging, and a family-business commitment to every job.</p>
        </div>

        <div class="values-grid">
            <div class="value-card reveal-up reveal-delay-1">
                <svg aria-hidden="true" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                <h3>Family-owned &amp; Local</h3>
                <p>We're not a call-center franchise. When you call Green Limb Tree Service, you reach the crew that shows up — no middleman, no upsells, no runaround.</p>
            </div>

            <div class="value-card reveal-up reveal-delay-2">
                <svg aria-hidden="true" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>
                <h3>Safety First</h3>
                <p>Every crew member is trained in rigging and climbing safety. We carry full liability insurance on every job and follow industry best practices for removals near homes and power lines.</p>
            </div>

            <div class="value-card reveal-up reveal-delay-3">
                <svg aria-hidden="true" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"/></svg>
                <h3>Clear Communication</h3>
                <p>We walk the property, flag hazards, and give you a firm written estimate before any work starts. You'll know the price, the timeline, and what to expect — no surprises.</p>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════ SERVICE AREA ═══════════════════════ -->
<section class="section" aria-label="Service area">
    <div class="container-narrow">
        <div class="prose-centered reveal-up">
            <span class="eyebrow-label">Where We Work</span>
            <h2>Serving the Greensboro metro &amp; wider Piedmont</h2>
            <p>Green Limb Tree Service covers Greensboro and the Piedmont Triad across Guilford and Alamance counties. We're local to this region — we know the soil, the species, the weather patterns that break branches, and the tight lot lines that demand careful rigging.</p>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: var(--space-2); margin-top: var(--space-6); text-align: left; font-size: var(--fs-small); color: var(--color-ink-2);">
                <?php foreach ($serviceAreas as $area): ?>
                <div>• <?php echo htmlspecialchars($area); ?></div>
                <?php endforeach; ?>
            </div>

            <p style="margin-top: var(--space-6);">If your city isn't listed, call us — we often travel a bit further for the right job.</p>
        </div>
    </div>
</section>

<!-- ═══════════════════════ CTA BAND ═══════════════════════ -->
<section class="cta-banner texture-grain edge-curve-top about-cta" aria-label="Get started">
    <span class="grain-layer" aria-hidden="true"></span>
    <span class="floating-ring" aria-hidden="true"></span>
    <div class="container">
        <div>
            <span class="eyebrow-label">Ready to Get Started?</span>
            <h2>Let's talk about your trees</h2>
            <p>Tell us about the job and we'll reply the same day — usually with an on-site quote scheduled fast. No pressure, no upsells, just a clear price and a timeline you can trust.</p>
        </div>
        <div class="actions">
            <a href="tel:<?php echo $phoneRaw; ?>" class="btn btn-accent btn-lg">Call <?php echo htmlspecialchars($phone); ?></a>
            <a href="#estimate" class="btn btn-outline-white btn-lg">Request a free estimate</a>
        </div>
    </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
