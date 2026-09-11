<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ── Page-level setup ─────────────────────────────────────────────────────── */
$pageType        = 'home';
$currentPage     = 'home';
$pageTitle       = 'Tree Service in Greensboro, NC | Green Limb Tree Service';
$metaDescription = 'Green Limb Tree Service is a family-owned tree service in Greensboro, NC — tree removal, trimming, pruning, stump grinding & 24/7 storm cleanup. Free estimates.';
$canonicalUrl    = $siteUrl . '/';

/* Hero LCP image (allocator gave the logo as hero; the logo is not a usable
   photo, so per the manifest fallback we use the strongest real work photo:
   the bucket-truck takedown beside a Greensboro home). */
$heroImage = '1000001503';
$heroPreload = [
    'srcset' => '/assets/images/' . $heroImage . '-480.avif 480w, /assets/images/' . $heroImage . '-960.avif 960w, /assets/images/' . $heroImage . '-1600.avif 1600w',
    'sizes'  => '(max-width: 900px) 100vw, 620px',
];

/* Homepage FAQ — sourced from the research brief + service-area facts. */
$faqs = [
    [
        'q' => 'Do you provide emergency storm damage cleanup?',
        'a' => 'Yes. Green Limb Tree Service offers same-day emergency response for fallen trees and storm-damaged limbs across Greensboro and the surrounding Piedmont. Our line is answered around the clock, Monday through Saturday.',
    ],
    [
        'q' => 'How much does stump grinding cost in Greensboro?',
        'a' => 'Stump grinding pricing depends on the stump size and how accessible it is. Most residential stumps in Greensboro run $150–$400, and Green Limb Tree Service gives you a firm on-site quote before any grinding starts.',
    ],
    [
        'q' => "What's the best time to remove a tree?",
        'a' => 'Winter, during dormancy, is usually ideal in North Carolina, but Green Limb Tree Service can safely remove trees year-round. We advise on timing based on the tree\'s health, nearby hazards, and your schedule.',
    ],
    [
        'q' => 'How often should my trees be pruned?',
        'a' => 'Most mature trees benefit from pruning every three to five years for health and safety. Green Limb Tree Service assesses each tree during a free consultation and lays out a care timeline that fits your property.',
    ],
    [
        'q' => 'Are your crews licensed and insured?',
        'a' => 'Yes. Green Limb Tree Service carries liability insurance on every job, and our crews follow industry rigging and climbing safety practices for removals near homes and power lines. We\'re glad to share proof of insurance before work begins.',
    ],
    [
        'q' => 'What areas around Greensboro do you serve?',
        'a' => 'Green Limb Tree Service covers Greensboro and the wider Piedmont Triad — Guilford and Alamance counties, including High Point, Jamestown, Pleasant Garden, Brown Summit, Burlington, Graham, Haw River, and Mebane. Call and we\'ll confirm you\'re in range.',
    ],
];
$faqSchema = generateFAQSchema($faqs);

/* Homepage services grid (9 services → orphan rule: featured 2x2 first card).
   icon = inline lucide SVG (never data-lucide). Tints rotate 1→2→3. Every card
   carries a real client photo from the manifest. */
$homeServices = [
    [
        'name' => 'Tree Service', 'slug' => 'tree-service', 'photo' => '1000001917',
        'alt'  => 'Green Limb crew working a large shade tree from a tracked spider lift beside a Greensboro home',
        'desc' => 'Full-service tree care for Greensboro homes and businesses, start to finish.',
        'bullets' => ['Pruning to full removals', 'Residential & commercial', 'Site raked clean after'],
        'icon' => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 10v.2A3 3 0 0 1 8.9 16H5a3 3 0 0 1-1-5.8V10a3 3 0 0 1 6 0Z"/><path d="M7 16v6"/><path d="M13 19v3"/><path d="M12 19h8.3a1 1 0 0 0 .7-1.7L18 14h.3a1 1 0 0 0 .7-1.7L16 9h.2a1 1 0 0 0 .8-1.7L13 3l-1.4 1.5"/></svg>',
        'tint' => 1, 'featured' => true,
    ],
    [
        'name' => 'Tree Removal', 'slug' => 'tree-removal', 'photo' => '1000000569',
        'alt'  => 'Dead standing tree being sectioned down with a bucket truck on a Greensboro property',
        'desc' => 'Safe takedown of hazardous, dead, or overgrown trees near structures.',
        'bullets' => ['Careful rigging near homes', 'Dead & storm-weakened trees', 'Debris hauled away'],
        'icon' => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 10V5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v5"/><path d="M14 6a6 6 0 0 1 6 6v3"/><path d="M4 15v-3a6 6 0 0 1 6-6"/><rect x="2" y="15" width="20" height="4" rx="1"/></svg>',
        'tint' => 2,
    ],
    [
        'name' => 'Tree Trimming', 'slug' => 'tree-trimming', 'photo' => '1000000129',
        'alt'  => 'Large canopy tree being trimmed from a bucket truck over a Greensboro back yard',
        'desc' => 'Trimming that clears roofs and lines while keeping trees balanced.',
        'bullets' => ['Clears roofs & power lines', 'Improves light and shape', 'Reduces limb-failure risk'],
        'icon' => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="6" cy="6" r="3"/><path d="M8.12 8.12 12 12"/><path d="M20 4 8.12 15.88"/><circle cx="6" cy="18" r="3"/><path d="M14.8 14.8 20 20"/></svg>',
        'tint' => 3,
    ],
    [
        'name' => 'Tree Pruning', 'slug' => 'tree-pruning', 'photo' => '1000001917',
        'alt'  => 'Arborist pruning the upper canopy of a mature tree from an aerial lift in Greensboro',
        'desc' => 'Structural and health pruning timed to the season for stronger trees.',
        'bullets' => ['Dormant-season timing', 'Removes weak, crossing limbs', 'Extends the life of oaks'],
        'icon' => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 20h10"/><path d="M10 20c5.5-2.5.8-6.4 3-10"/><path d="M9.5 9.4c1.1.8 1.8 2.2 2.3 3.7-2 .4-3.5.4-4.8-.3-1.2-.6-2.3-1.9-3-4.2 2.8-.5 4.4 0 5.5.8z"/><path d="M14.1 6a7 7 0 0 0-1.1 4c1.9-.1 3.3-.6 4.3-1.4 1-1 1.6-2.3 1.7-4.6-2.7.1-4 1-4.9 2z"/></svg>',
        'tint' => 1,
    ],
    [
        'name' => 'Land Clearing', 'slug' => 'land-clearing', 'photo' => '1000001648',
        'alt'  => 'Skid steer and bucket truck clearing a lot of trees and brush in the Greensboro area',
        'desc' => 'Lot and brush clearing for builds, expansions, and reclaiming land.',
        'bullets' => ['New-construction lots', 'Brush & undergrowth', 'Grapple + skid-steer crew'],
        'icon' => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m10 11 11 .9a1 1 0 0 1 .8 1.1l-.665 4.158a1 1 0 0 1-.988.842H20"/><path d="M16 18h-5"/><path d="M18 5a1 1 0 0 0-1 1v5.573"/><path d="M3 4h8.129a1 1 0 0 1 .99.863L13 11.246"/><path d="M4 11V4"/><path d="M7 15h.01"/><path d="M8 10.1V4"/><circle cx="18" cy="18" r="2"/><circle cx="7" cy="15" r="5"/></svg>',
        'tint' => 2,
    ],
    [
        'name' => 'Storm Work', 'slug' => 'storm-work', 'photo' => '1000001533',
        'alt'  => 'Green Limb crew cutting up a large fallen tree after a storm in a Greensboro yard',
        'desc' => 'Same-day response for fallen trees and storm-damaged limbs.',
        'bullets' => ['24/7 emergency call-out', 'Trees off homes & drives', 'Full debris cleanup'],
        'icon' => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.7 7.7a2.5 2.5 0 1 1 1.8 4.3H2"/><path d="M9.6 4.6A2 2 0 1 1 11 8H2"/><path d="M12.6 19.4A2 2 0 1 0 14 16H2"/></svg>',
        'tint' => 3,
    ],
    [
        'name' => 'Junk Removal', 'slug' => 'junk-removal', 'photo' => '1000005749',
        'alt'  => 'Flatbed truck loaded with cut hardwood logs hauled off a Greensboro job site',
        'desc' => 'Hauling and disposal of yard debris, brush piles, and log wood.',
        'bullets' => ['Brush piles & log wood', 'Post-storm cleanup hauls', 'Left clean and hauled off'],
        'icon' => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2"/><path d="M15 18H9"/><path d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.624l-3.48-4.35A1 1 0 0 0 17.52 8H14"/><circle cx="17" cy="18" r="2"/><circle cx="7" cy="18" r="2"/></svg>',
        'tint' => 1,
    ],
    [
        'name' => 'Snow Removal', 'slug' => 'snow-removal', 'photo' => '1000001648',
        'alt'  => 'Green Limb work truck and equipment staged on a cleared Greensboro-area property',
        'desc' => 'Seasonal snow and ice clearing to keep access routes safe.',
        'bullets' => ['Driveways & walkways', 'Ice-storm access clearing', 'Same equipment, same crew'],
        'icon' => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="2" x2="22" y1="12" y2="12"/><line x1="12" x2="12" y1="2" y2="22"/><path d="m20 16-4-4 4-4"/><path d="m4 8 4 4-4 4"/><path d="m16 4-4 4-4-4"/><path d="m8 20 4-4 4 4"/></svg>',
        'tint' => 2,
    ],
    [
        'name' => 'Stump Grinding', 'slug' => 'stump-grinding', 'photo' => '1000000569',
        'alt'  => 'Base of a removed tree ready for stump grinding on a Greensboro lawn',
        'desc' => 'Below-grade grinding that clears trip hazards and reclaims lawn.',
        'bullets' => ['Ground below grade', 'Removes trip hazards', 'Reclaims usable yard'],
        'icon' => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83Z"/><path d="m22 17.65-9.17 4.16a2 2 0 0 1-1.66 0L2 17.65"/><path d="m22 12.65-9.17 4.16a2 2 0 0 1-1.66 0L2 12.65"/></svg>',
        'tint' => 3,
    ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<!-- FAQPage schema (LocalBusiness is emitted by head.php on the homepage) -->
<?php echo $faqSchema; ?>

<style>
/* ============================================================================
   Homepage-specific composition (Green Limb Tree Service). Token-only:
   framework.css owns the component library; this styles the page's layout.
   ============================================================================ */

/* Hero: give the visual column its own object framing + a lower-left tag */
.gl-hero-tag { position: absolute; left: 1rem; bottom: 1rem; z-index: 2; }
@media (max-width: 900px) { .gl-hero-tag { position: static; margin-top: var(--space-3); } }

/* Ticker items: leaf-mark separators inherit the accent face from framework */
.gl-ticker svg { color: var(--color-accent-dark); width: 16px; height: 16px; }

/* Proof strip: keep the accent underscore mark under each figure */
.gl-proof .stat-item { align-content: start; }

/* Services intro width + featured tile copy */
.gl-services .section-head { max-width: 54ch; }

/* About / Process — the page's asymmetric signature section */
.gl-about { grid-template-columns: 1.35fr 1fr; align-items: start; gap: clamp(2rem, 5vw, 4.5rem); }
.gl-about-copy .eyebrow { margin-bottom: var(--space-2); }
.gl-about-lead { font-size: var(--fs-lead); color: var(--color-ink-2); }
.gl-about-media .about-image-primary { aspect-ratio: 4 / 4.6; }
.gl-about-media .about-image-primary img,
.gl-about-media .about-image-primary picture { width: 100%; height: 100%; object-fit: cover; }
.gl-about-stat b { display: block; font-family: var(--font-accent); font-size: 2rem; line-height: 1; color: var(--color-primary); }
.gl-about-stat span { font-size: var(--fs-small); color: var(--color-muted); }
@media (max-width: 900px) { .gl-about { grid-template-columns: 1fr; } }

/* Storm / urgency dark band (framework .texture-grain already lightens text) */
.gl-storm .gl-storm-points { display: flex; flex-wrap: wrap; gap: var(--space-2) var(--space-4); margin: var(--space-4) 0 0; padding: 0; list-style: none; }
.gl-storm .gl-storm-points li { display: inline-flex; align-items: center; gap: var(--space-2); font-family: var(--font-accent); letter-spacing: .06em; text-transform: uppercase; font-size: var(--fs-small); color: color-mix(in srgb, var(--color-white) 90%, transparent); }
.gl-storm .gl-storm-points svg { width: 18px; height: 18px; color: var(--color-accent-bright); }
.gl-storm .floating-ring { top: -80px; right: -60px; opacity: .1; }
.gl-storm .gl-ring-2 { top: auto; bottom: -120px; right: auto; left: -80px; }

/* Reviews (Elfsight) — real Google reviews, never wrapped in reveal classes */
.gl-reviews .reviews-embed { margin-top: var(--space-6); }

/* Estimate: the right rail sits in a tinted card */
.gl-estimate-aside { background: var(--color-paper-2); border: 1px solid var(--color-line); border-radius: var(--radius-lg); padding: clamp(1.25rem, 3vw, 2rem); }
.gl-estimate-aside h3 { font-size: var(--fs-h3); margin-bottom: var(--space-3); }
.gl-estimate .form-actions { margin-top: var(--space-4); }
.gl-estimate .btn-block { width: 100%; }
</style>

<!-- ═══════════════════════ HERO (warm-human, photo-forward) ═══════════════════════ -->
<section class="hero hero--light">
  <div class="container">
    <div class="hero-grid hero-grid--visual">

      <div class="hero-text">
        <span class="eyebrow">Greensboro, NC &middot; Guilford &amp; Alamance County</span>
        <h1 class="hero-title">Family-run tree service in Greensboro, NC</h1>
        <p class="hero-answer">Green Limb Tree Service is a family-owned crew removing hazardous trees, trimming canopies, and clearing storm damage across Greensboro and the Piedmont &mdash; with same-day emergency response.</p>
        <div class="hero-actions">
          <a class="btn btn-primary btn-lg hero-form-open" href="#estimate">Get a free estimate</a>
          <a class="link-call" href="tel:<?php echo $phoneRaw; ?>">
            <svg aria-hidden="true" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
            or call <?php echo htmlspecialchars($phone); ?>
          </a>
        </div>
        <ul class="hero-chips">
          <li>
            <svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>
            Family-owned &amp; insured
          </li>
          <li>
            <svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            24/7 storm response
          </li>
          <li>
            <svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
            Free on-site estimates
          </li>
        </ul>
      </div>

      <div class="hero-visual">
        <div class="hero-visual__img">
          <?php echo renderPicture($heroImage, 'Green Limb Tree Service crew removing a large storm-damaged tree from a bucket truck beside a Greensboro home', 900, 1200, '(max-width: 900px) 100vw, 620px', ['eager' => true]); ?>
        </div>
        <div class="photo-stack__tag gl-hero-tag">
          <b>Recent work</b>
          <span>Hazard oak takedown &middot; Greensboro</span>
        </div>

        <aside class="hero-form-card" id="estimate-form">
          <h2>Get a free estimate</h2>
          <p class="hero-form-tagline">No obligation. Same-day reply.</p>
          <form action="<?php echo htmlspecialchars($formAction); ?>" method="POST" class="hero-form">
            <input type="hidden" name="_next" value="<?php echo htmlspecialchars($siteUrl); ?>/thank-you">
            <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
            <?php echo p1_attribution_fields('hero'); ?>
            <input type="hidden" name="consent_version" value="v2.1">
            <input type="hidden" name="consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">
            <div class="form-row"><label class="sr-only" for="hero-name">Name</label><input id="hero-name" type="text" name="name" placeholder="Name" autocomplete="name" required></div>
            <div class="form-row"><label class="sr-only" for="hero-phone">Phone</label><input id="hero-phone" type="tel" name="phone" placeholder="Phone" autocomplete="tel" required></div>
            <div class="form-row"><label class="sr-only" for="hero-service">Service needed</label>
              <select id="hero-service" name="service">
                <option value="">What do you need?</option>
                <?php foreach ($services as $heroOpt): ?>
                <option value="<?php echo htmlspecialchars($heroOpt['name']); ?>"><?php echo htmlspecialchars($heroOpt['name']); ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <label class="consent"><input type="checkbox" name="terms_accepted" value="yes" required><span>I agree to the <a href="/terms/" target="_blank" rel="noopener">Terms</a> and <a href="/privacy-policy/" target="_blank" rel="noopener">Privacy Policy</a> and consent to be contacted. *</span></label>
            <button type="submit" class="btn btn-primary btn-block">Get my free estimate</button>
          </form>
        </aside>
      </div>

    </div>
  </div>
</section>

<!-- ═══════════════════════ TRUST TICKER ═══════════════════════ -->
<div class="ticker-strip gl-ticker" aria-hidden="true">
  <div class="ticker-track">
    <?php
    $tickerItems = ['Family-Owned &amp; Local', 'Tree Removal', '24/7 Storm Response', 'Tree Trimming &amp; Pruning', 'Stump Grinding', 'Land Clearing', 'Free On-Site Estimates', 'Serving Guilford &amp; Alamance', 'Fully Insured Crews', 'Debris Hauled &amp; Cleaned'];
    $leaf = '<svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"/><path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/></svg>';
    // Duplicate the set for a seamless CSS loop
    for ($d = 0; $d < 2; $d++) {
        foreach ($tickerItems as $t) {
            echo '<span>' . $leaf . $t . '</span>';
        }
    }
    ?>
  </div>
</div>

<!-- ═══════════════════════ PROOF STRIP (verifiable facts) ═══════════════════════ -->
<section class="stats-band texture-grain slant-top gl-proof" aria-label="Why Greensboro chooses Green Limb">
  <span class="grain-layer" aria-hidden="true"></span>
  <div class="container">
    <div class="stats-row">
      <div class="stat-item">
        <span class="stat-number">Family-<span>Owned</span></span>
        <span class="stat-label">Local crew, not a franchise</span>
      </div>
      <div class="stat-item">
        <span class="stat-number">24/<span>7</span></span>
        <span class="stat-label">Emergency storm response</span>
      </div>
      <div class="stat-item">
        <span class="stat-number">2 <span>Counties</span></span>
        <span class="stat-label">Guilford &amp; Alamance served</span>
      </div>
      <div class="stat-item">
        <span class="stat-number">Free <span>Estimates</span></span>
        <span class="stat-label">On-site, no obligation</span>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════ SERVICES ═══════════════════════ -->
<section class="section section--light gl-services" aria-label="Tree services in Greensboro">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">What We Do</span>
      <h2>Which <span class="text-accent">tree service</span> does your Greensboro property need?</h2>
      <p class="hero-answer">From routine pruning to emergency removals after a Piedmont thunderstorm, Green Limb Tree Service handles the full range of tree work for Greensboro homeowners and businesses. Every job opens with a free on-site estimate and ends with the site raked clean.</p>
    </div>

    <div class="services-grid services-grid--featured">
      <?php foreach ($homeServices as $i => $svc):
        $delay = (($i % 3) + 1);
        $featured = !empty($svc['featured']);
      ?>
      <article class="service-card-with-image card-tint-<?php echo $svc['tint']; ?> reveal-up reveal-delay-<?php echo $delay; ?>"<?php echo $featured ? ' data-featured-label="Most requested"' : ''; ?>>
        <div class="service-card__image">
          <?php echo renderPicture($svc['photo'], $svc['alt'], 600, 360, '(max-width: 768px) 100vw, ' . ($featured ? '600px' : '360px')); ?>
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><?php echo $svc['icon']; ?></div>
          <h3><?php echo htmlspecialchars($svc['name']); ?></h3>
          <p class="service-card__desc"><?php echo htmlspecialchars($svc['desc']); ?></p>
          <ul>
            <?php foreach ($svc['bullets'] as $b): ?>
            <li><?php echo htmlspecialchars($b); ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="/services/<?php echo $svc['slug']; ?>/" class="service-card__cta">Learn more</a>
        </div>
      </article>
      <?php endforeach; ?>
    </div>

    <div class="text-center" style="margin-top: var(--space-8);">
      <a href="/services/" class="btn btn-secondary">View all <?php echo count($services); ?> services
        <svg aria-hidden="true" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
      </a>
    </div>
  </div>
</section>

<!-- ═══════════════════════ ABOUT / PROCESS (asymmetric signature) ═══════════════════════ -->
<section class="section gl-about-section" aria-label="About Green Limb Tree Service">
  <div class="container">
    <div class="about-split gl-about">

      <div class="about-copy gl-about-copy reveal-left">
        <span class="eyebrow">Why Green Limb</span>
        <h2>We treat every Greensboro property like it's our own</h2>
        <p class="gl-about-lead">Green Limb Tree Service is a family-owned, locally run crew &mdash; not a call-center franchise. When you call, you reach the people who show up, climb the tree, and rake the yard before they leave.</p>
        <p>The Piedmont's mix of towering willow oaks, loblolly pines, and ice-loaded winters is hard on trees. We know how these species fail, when they're safe to work, and how to take one down cleanly between a house and a fence line. Safety, a fair price, and getting the job done right is the whole point.</p>

        <ol class="process-steps">
          <li>
            <b>Free on-site assessment</b>
            <span>We walk the property, flag hazards, and give you a firm written estimate &mdash; no guesswork over the phone.</span>
          </li>
          <li>
            <b>Plan &amp; protect</b>
            <span>We map the rigging, protect nearby structures and beds, and schedule around your week.</span>
          </li>
          <li>
            <b>Cut, climb &amp; remove</b>
            <span>Our crew works the tree in sections with careful rigging, keeping people and property safe.</span>
          </li>
          <li>
            <b>Clean walk-through</b>
            <span>We grind stumps if needed, haul the debris, rake the site, and walk it with you before we go.</span>
          </li>
        </ol>
      </div>

      <div class="about-image gl-about-media reveal-right">
        <div class="about-image-primary">
          <?php echo renderPicture('1000001533', 'Green Limb Tree Service crew sectioning a large fallen tree after a storm in Greensboro', 720, 900, '(max-width: 900px) 100vw, 460px'); ?>
        </div>
        <div class="about-stat-card gl-about-stat">
          <b>Same day</b>
          <span>Emergency storm call-outs</span>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ═══════════════════════ STORM / URGENCY (dark band) ═══════════════════════ -->
<section class="cta-banner texture-grain edge-curve-top gl-storm" aria-label="Emergency storm response">
  <span class="grain-layer" aria-hidden="true"></span>
  <span class="floating-ring" aria-hidden="true"></span>
  <span class="floating-ring gl-ring-2" aria-hidden="true"></span>
  <div class="container">
    <div>
      <span class="eyebrow-label">Storm damage?</span>
      <h2>A tree on your house can't wait until Monday</h2>
      <p>When a Piedmont storm drops a limb across your roof or driveway, Green Limb Tree Service answers around the clock, Monday through Saturday. We stabilize the hazard, get the tree off your home, and clear the debris fast.</p>
      <ul class="gl-storm-points">
        <li><svg aria-hidden="true" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>Same-day response</li>
        <li><svg aria-hidden="true" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>Insured crews</li>
        <li><svg aria-hidden="true" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2"/><path d="M15 18H9"/><path d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.624l-3.48-4.35A1 1 0 0 0 17.52 8H14"/><circle cx="17" cy="18" r="2"/><circle cx="7" cy="18" r="2"/></svg>Full debris cleanup</li>
      </ul>
    </div>
    <div class="actions">
      <a href="tel:<?php echo $phoneRaw; ?>" class="btn btn-accent btn-lg">Call <?php echo htmlspecialchars($phone); ?></a>
      <a href="#estimate" class="btn btn-outline-white btn-lg">Request an estimate</a>
    </div>
  </div>
</section>

<!-- ═══════════════════════ REVIEWS (Elfsight — real Google reviews) ═══════════════════════ -->
<section class="section section--light gl-reviews" aria-label="Customer reviews">
  <div class="container-narrow">
    <div class="section-head prose-centered reveal-up" style="margin-inline: auto;">
      <span class="eyebrow-label">Reviews</span>
      <h2>What Greensboro homeowners say</h2>
      <p>Green Limb Tree Service is rated by real customers on Google. Here's what neighbors across Greensboro and the Triad have to say about the work.</p>
    </div>
    <div class="reviews-embed">
      <?php echo $elfsightEmbed; ?>
    </div>
  </div>
</section>

<!-- ═══════════════════════ FAQ ═══════════════════════ -->
<section class="section gl-faq" aria-label="Frequently asked questions">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">Good to Know</span>
      <h2>Tree service questions, answered for Greensboro</h2>
      <p>Straight answers on cost, timing, storms, and how Green Limb Tree Service works.</p>
    </div>
    <div class="faq-grid">
      <?php foreach ($faqs as $fi => $faq): ?>
      <details class="faq"<?php echo $fi < 2 ? ' open' : ''; ?>>
        <summary><?php echo htmlspecialchars($faq['q']); ?></summary>
        <p><?php echo htmlspecialchars($faq['a']); ?></p>
      </details>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══════════════════════ ESTIMATE ═══════════════════════ -->
<section class="section section--light gl-estimate" id="estimate" aria-label="Request a free estimate">
  <div class="container">
    <div class="estimate">

      <div class="card">
        <span class="eyebrow-label">Free Estimate</span>
        <h2>Tell us about the job</h2>
        <p>Send a few details and Green Limb Tree Service will reply the same day &mdash; usually with a firm on-site quote scheduled fast.</p>

        <form action="<?php echo htmlspecialchars($formAction); ?>" method="POST" class="estimate-form">
          <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
          <input type="hidden" name="_next" value="<?php echo htmlspecialchars($siteUrl); ?>/thank-you">
          <?php echo p1_attribution_fields('estimate'); ?>
          <input type="hidden" name="consent_version" value="v2.1">
          <input type="hidden" name="consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">

          <div class="form-grid">
            <div class="field">
              <label for="est-name">Your Name</label>
              <input id="est-name" type="text" name="name" autocomplete="name" required>
            </div>
            <div class="field">
              <label for="est-phone">Phone</label>
              <input id="est-phone" type="tel" name="phone" autocomplete="tel" required>
            </div>
            <div class="field">
              <label for="est-email">Email</label>
              <input id="est-email" type="email" name="email" autocomplete="email" required>
            </div>
            <div class="field">
              <label for="est-service">Service Needed</label>
              <select id="est-service" name="service">
                <option value="">Select a service</option>
                <?php foreach ($services as $estOpt): ?>
                <option value="<?php echo htmlspecialchars($estOpt['name']); ?>"><?php echo htmlspecialchars($estOpt['name']); ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="field full">
              <label for="est-message">Project Details</label>
              <textarea id="est-message" name="message" rows="4" placeholder="Number of trees, location on the property, any hazards or deadlines&hellip;"></textarea>
            </div>
          </div>

          <fieldset class="form-consent-fieldset">
            <legend class="form-consent-legend">Communication Consent</legend>
            <label class="form-consent-item">
              <input type="checkbox" name="email_opt_in" value="yes">
              <span class="consent-label"><strong>Email updates (optional):</strong> I agree to receive emails from Green Limb Tree Service about my inquiry, services, and promotions. I can unsubscribe anytime via the link in any email or by emailing <?php echo htmlspecialchars($email); ?>.</span>
            </label>
            <label class="form-consent-item">
              <input type="checkbox" name="sms_opt_in" value="yes">
              <span class="consent-label"><strong>SMS/Text messages (optional):</strong> I agree to receive text messages from Green Limb Tree Service at the number I provided (appointment reminders, service updates, offers). Message frequency varies. Message and data rates may apply. Reply STOP to unsubscribe, HELP for help. <strong>Consent is not a condition of purchase.</strong></span>
            </label>
            <label class="form-consent-item form-consent-required">
              <input type="checkbox" name="terms_accepted" value="yes" required>
              <span class="consent-label">I have read and agree to the <a href="/privacy-policy/">Privacy Policy</a> and <a href="/terms/">Terms of Service</a>. <span class="required-star">*</span></span>
            </label>
          </fieldset>

          <div class="form-actions">
            <button type="submit" class="btn btn-primary btn-block">Send my request</button>
          </div>
        </form>
      </div>

      <aside class="gl-estimate-aside">
        <h3>What happens next</h3>
        <ol class="next-steps">
          <li><strong>We call you back the same day</strong> to understand the job and answer quick questions.</li>
          <li><strong>Free on-site estimate</strong> &mdash; we walk the property, flag hazards, and put a firm price in writing.</li>
          <li><strong>We schedule and get it done</strong> &mdash; cleanly rigged, hauled, and raked before we leave.</li>
        </ol>

        <div class="nap">
          <div>
            <svg aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
            <a href="tel:<?php echo $phoneRaw; ?>"><?php echo htmlspecialchars($phone); ?></a>
          </div>
          <div>
            <svg aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"/><rect x="2" y="4" width="20" height="16" rx="2"/></svg>
            <a href="mailto:<?php echo htmlspecialchars($email); ?>"><?php echo htmlspecialchars($email); ?></a>
          </div>
          <div>
            <svg aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            <span><?php echo htmlspecialchars($businessHours); ?> &middot; 24/7 emergency line</span>
          </div>
        </div>

        <p class="footnote">Serving Greensboro, High Point, Jamestown, Pleasant Garden, Burlington, and the rest of Guilford &amp; Alamance County.</p>
      </aside>

    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
