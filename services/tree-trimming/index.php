<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ── Page-level setup ─────────────────────────────────────────────────────── */
$pageType    = 'service';
$serviceSlug = 'tree-trimming';
$currentPage = 'services';

$pageTitle       = 'Tree Trimming Greensboro NC | Green Limb Tree Service';
$metaDescription = 'Tree trimming in Greensboro, NC. Green Limb Tree Service clears roofs, gutters & power lines, thins canopies for light, and removes deadwood. Free estimates.';
$canonicalUrl    = $siteUrl . '/services/tree-trimming/';

/* Service-specific FAQ (drives the visible FAQ + FAQPage schema) */
$faqs = [
    [
        'q' => 'How often should trees be trimmed in Greensboro?',
        'a' => 'Most Greensboro shade trees do well with a trim every two to three years, while faster-growing species and trees near rooflines or driveways often need a look every year. Green Limb Tree Service can set a schedule that matches your specific trees during your free on-site estimate.',
    ],
    [
        'q' => "What's the difference between tree trimming and tree pruning?",
        'a' => 'Trimming is routine shaping and clearance work — cutting limbs back from roofs, gutters, driveways, and power lines and thinning the canopy for light and airflow. Structural pruning is a more targeted cut that corrects weak limb attachments or crossing branches on a maturing tree. Green Limb Tree Service offers both and will recommend the right one on site.',
    ],
    [
        'q' => 'Can trimming prevent storm damage to my willow oak or maple?',
        'a' => "Yes, in many cases. Willow oaks and maples with dense, top-heavy canopies catch more wind and are more likely to drop limbs in a Piedmont storm. Green Limb Tree Service thins the crown and removes deadwood so wind passes through instead of tearing branches loose.",
    ],
    [
        'q' => 'Will trimming keep branches off my roof and power lines?',
        'a' => 'That is one of the most common reasons Greensboro homeowners call us. Green Limb Tree Service cuts limbs back to a clean line along the roof edge and coordinates with the utility company on anything touching a service line, so the clearance holds until the next scheduled visit.',
    ],
    [
        'q' => 'What time of year is best for trimming trees in the Piedmont?',
        'a' => 'Late winter, while trees are dormant and bare, is ideal for most structural cuts because the branch pattern is easy to see. Deadwood removal and clearance trimming near roofs or lines are safe any time of year, and Green Limb Tree Service schedules those jobs year-round across Greensboro.',
    ],
    [
        'q' => "Does trimming harm a tree's health?",
        'a' => "Proper trimming should improve a tree's health, not harm it. Green Limb Tree Service makes clean cuts at the branch collar rather than stubbing or topping limbs, which keeps pines, maples, and oaks sealing over quickly and growing back stronger instead of sending up weak, storm-prone regrowth.",
    ],
];

/* Related services shown in the "Other Services" grid (never the current page) */
$otherServices = [
    [
        'name' => 'Tree Pruning', 'slug' => 'tree-pruning', 'photo' => '1000001917', 'tint' => 1,
        'alt'  => 'Green Limb crew making a structural pruning cut on a mature tree in Greensboro',
        'desc' => 'Targeted structural cuts that correct weak limbs on a maturing tree.',
        'bullets' => ['Corrects weak attachments', 'Timed to the season', 'Extends tree lifespan'],
        'icon' => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22v-5"/><path d="M9 8V2"/><path d="M15 8V2"/><path d="M18 8v0a6 6 0 0 1-6 6 6 6 0 0 1-6-6"/></svg>',
    ],
    [
        'name' => 'Tree Removal', 'slug' => 'tree-removal', 'photo' => '1000000569', 'tint' => 2,
        'alt'  => 'Green Limb Tree Service sectioning a large tree down beside a Greensboro home',
        'desc' => "When a tree is past saving, we take it down safely.",
        'bullets' => ['Controlled sectional takedowns', 'Insured near homes & lines', 'Stump grinding available'],
        'icon' => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83Z"/><path d="m22 17.65-9.17 4.16a2 2 0 0 1-1.66 0L2 17.65"/><path d="m22 12.65-9.17 4.16a2 2 0 0 1-1.66 0L2 12.65"/></svg>',
    ],
    [
        'name' => 'Storm Work', 'slug' => 'storm-work', 'photo' => '1000001533', 'tint' => 3,
        'alt'  => 'Green Limb crew clearing a large fallen tree after a storm in Greensboro',
        'desc' => 'Same-day help when a tree comes down on your home or drive.',
        'bullets' => ['24/7 emergency call-out', 'Trees off homes & drives', 'Full debris cleanup'],
        'icon' => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.7 7.7a2.5 2.5 0 1 1 1.8 4.3H2"/><path d="M9.6 4.6A2 2 0 1 1 11 8H2"/><path d="M12.6 19.4A2 2 0 1 0 14 16H2"/></svg>',
    ],
];

/* ── Schema: Service (@id) + BreadcrumbList + FAQPage ─────────────────────── */
$serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $canonicalUrl . '#service',
    'serviceType' => 'Tree Trimming',
    'name'        => 'Tree Trimming in ' . $address['city'] . ', ' . $address['state'],
    'url'         => $canonicalUrl,
    'description' => 'Routine and corrective tree trimming in Greensboro, NC that clears roofs, gutters, driveways, and power lines, thins dense canopies, and removes deadwood.',
    'provider'    => ['@id' => $siteUrl . '/#organization'],
    'areaServed'  => array_map(function ($a) { return ['@type' => 'City', 'name' => $a]; }, $serviceAreas),
    'offers'      => ['@type' => 'Offer', 'availability' => 'https://schema.org/InStock', 'priceCurrency' => 'USD'],
];
$breadcrumbs = [
    ['name' => 'Home', 'url' => '/'],
    ['name' => 'Services', 'url' => '/services/'],
    ['name' => 'Tree Trimming', 'url' => '/services/tree-trimming/'],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<script type="application/ld+json"><?php echo json_encode($serviceSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?></script>
<?php echo generateBreadcrumbSchema($breadcrumbs); ?>
<?php echo generateFAQSchema($faqs); ?>

<style>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/service-page.css'; ?>
/* Tree Trimming — page-specific accents */
.sp-trimming .pull-quote { color: var(--color-white); }
.sp-trimming .sp-expert-figure { background: color-mix(in srgb, var(--color-accent) 10%, var(--color-surface)); }
</style>

<!-- ═══════════════════════ HERO (interior + lead form) ═══════════════════════ -->
<section class="hero hero--interior sp-hero sp-trimming" id="estimate" aria-label="Tree trimming in Greensboro, NC">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a><span class="breadcrumb-sep">/</span>
      <a href="/services/">Services</a><span class="breadcrumb-sep">/</span>
      <span aria-current="page">Tree Trimming</span>
    </nav>
    <div class="hero-grid hero-grid--form">

      <div class="hero-copy">
        <span class="eyebrow">Tree Trimming &middot; Greensboro, NC</span>
        <h1 class="hero-title">Tree Trimming in Greensboro, NC</h1>
        <p class="hero-answer">Green Limb Tree Service trims Greensboro trees to clear roofs, gutters, driveways, and power lines, thin dense canopies for light and airflow, and cut out deadwood before it fails. Routine trimming keeps willow oaks, maples, and pines healthy and safe &mdash; and if a tree needs more, we offer structural pruning too.</p>
        <div class="hero-actions">
          <button type="button" class="btn btn-primary btn-lg hero-form-open" data-open-estimate>Get a free estimate</button>
          <a class="link-call" href="tel:<?php echo $phoneRaw; ?>">
            <svg aria-hidden="true" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
            or call <?php echo htmlspecialchars($phone); ?>
          </a>
        </div>
        <ul class="hero-chips">
          <li><svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>Fully insured crews</li>
          <li><svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v4"/><path d="m6.8 6.8-2.9-2.9"/><path d="M2 12h4"/><path d="M12 22a8 8 0 0 0 0-16"/></svg>Roof, gutter &amp; line clearance</li>
          <li><svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Deadwood removed on sight</li>
        </ul>
      </div>

      <aside class="hero-form-card">
        <h2>Want a free estimate?</h2>
        <p class="hero-form-tagline">No obligation. Same-day reply, Mon&ndash;Sat.</p>
        <form action="<?php echo htmlspecialchars($formAction); ?>" method="POST" class="hero-form">
          <input type="hidden" name="_next" value="<?php echo htmlspecialchars($siteUrl); ?>/thank-you">
          <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
          <?php echo p1_attribution_fields('hero'); ?>
          <input type="hidden" name="consent_version" value="v2.1">
          <input type="hidden" name="consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">
          <div class="form-row"><label class="sr-only" for="hero-name">Name</label><input id="hero-name" type="text" name="name" placeholder="Name" autocomplete="name" required></div>
          <div class="form-row"><label class="sr-only" for="hero-phone">Phone</label><input id="hero-phone" type="tel" name="phone" placeholder="Phone" autocomplete="tel" required></div>
          <div class="form-row"><label class="sr-only" for="hero-email">Email</label><input id="hero-email" type="email" name="email" placeholder="Email" autocomplete="email" required></div>
          <div class="form-row"><label class="sr-only" for="hero-service">Service needed</label>
            <select id="hero-service" name="service">
              <?php foreach ($services as $heroOpt): ?>
              <option value="<?php echo htmlspecialchars($heroOpt['name']); ?>"<?php echo $heroOpt['slug'] === $serviceSlug ? ' selected' : ''; ?>><?php echo htmlspecialchars($heroOpt['name']); ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <label class="consent"><input type="checkbox" name="terms_accepted" value="yes" required><span>I agree to the <a href="/terms/" target="_blank" rel="noopener">Terms</a> &amp; <a href="/privacy-policy/" target="_blank" rel="noopener">Privacy Policy</a> and consent to be contacted. *</span></label>
          <button type="submit" class="btn btn-primary btn-block">Get my free estimate</button>
        </form>
      </aside>

    </div>
  </div>
</section>

<!-- ═══════════════════════ PROBLEM STATEMENT ═══════════════════════ -->
<section class="section section--light" aria-label="Signs a tree needs trimming">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">Know the signs</span>
      <h2>How do you know your trees need trimming?</h2>
    </div>
    <p class="answer-block reveal-up">A Greensboro tree usually needs trimming when limbs reach the roof or lines, the canopy gets so dense it blocks light, or branches start rubbing against each other in the wind. Green Limb Tree Service checks for these signs on every estimate across Greensboro and the Piedmont before recommending a cut plan.</p>

    <div class="sp-problem-grid">
      <div class="reveal-left">
        <p class="pull-quote">Limbs on the roofline, a canopy too thick to let light through, branches rubbing in every breeze &mdash; your trees are telling you it's time to trim.</p>
        <p class="sp-problem-lead">None of these signs mean a tree has to come down. Caught early, routine trimming clears the hazard, opens the canopy back up, and keeps a healthy willow oak, maple, or pine exactly where it belongs.</p>
      </div>
      <div class="sp-signs reveal-right">
        <div class="sp-sign">
          <div class="sp-sign__icon"><svg aria-hidden="true" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 6h18"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6"/><path d="M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg></div>
          <h3>Limbs over the roof or lines</h3>
          <p>Branches reaching the shingles, gutters, or a service line need clearance before the next storm.</p>
        </div>
        <div class="sp-sign">
          <div class="sp-sign__icon"><svg aria-hidden="true" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="4"/><path d="M12 2v2"/><path d="M12 20v2"/><path d="m4.93 4.93 1.41 1.41"/><path d="m17.66 17.66 1.41 1.41"/><path d="M2 12h2"/><path d="M20 12h2"/><path d="m6.34 17.66-1.41 1.41"/><path d="m19.07 4.93-1.41 1.41"/></svg></div>
          <h3>Dense, unlit canopy</h3>
          <p>A crown so thick the lawn underneath stays shaded and damp needs thinning for light and airflow.</p>
        </div>
        <div class="sp-sign">
          <div class="sp-sign__icon"><svg aria-hidden="true" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 3v18"/><path d="M18 3v18"/><path d="M6 12h12"/></svg></div>
          <h3>Rubbing or crossing branches</h3>
          <p>Limbs that cross and rub wear through bark, opening the tree up to decay and insects.</p>
        </div>
        <div class="sp-sign">
          <div class="sp-sign__icon"><svg aria-hidden="true" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22v-5"/><path d="M9 8V2"/><path d="M15 8V2"/><path d="M18 8v0a6 6 0 0 1-6 6 6 6 0 0 1-6-6"/></svg></div>
          <h3>Deadwood in the crown</h3>
          <p>Bare, brittle limbs with no leaves in season are the branches most likely to drop next.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════ EXPERT POSITIONING ═══════════════════════ -->
<section class="section" aria-label="Why choose Green Limb for trimming">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">Why Green Limb</span>
      <h2>Why trust Green Limb with trimming close to your roofline?</h2>
    </div>
    <p class="answer-block reveal-up">Because a clean trim is about where the cut goes, not just what comes off. Green Limb Tree Service cuts at the branch collar, reaches roof-high limbs with a bucket truck or by climbing, and knows how Greensboro's willow oaks, maples, and pines respond &mdash; so the canopy heals fast and grows back the right shape.</p>

    <div class="sp-expert-grid">
      <div class="sp-expert-figure reveal-left">
        <span class="eyebrow-label">Around the clock</span>
        <span class="big-number">24/7</span>
        <p>Storm-driven trimming calls answered Monday through Saturday across the Greensboro metro when a limb won't wait.</p>
      </div>
      <ul class="sp-diffs reveal-right">
        <li class="sp-diff">
          <div class="sp-diff__icon"><svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22v-5"/><path d="M9 8V2"/><path d="M15 8V2"/><path d="M18 8v0a6 6 0 0 1-6 6 6 6 0 0 1-6-6"/></svg></div>
          <b>Cuts at the branch collar</b>
          <span>No stubbing or topping &mdash; every cut is placed so the tree seals over cleanly and grows back strong, not weak and bushy.</span>
        </li>
        <li class="sp-diff">
          <div class="sp-diff__icon"><svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg></div>
          <b>Bucket truck &amp; climbing reach</b>
          <span>Roof-high limbs and lines near the street are handled from a bucket truck or by climbing &mdash; whichever gets a cleaner cut safely.</span>
        </li>
        <li class="sp-diff">
          <div class="sp-diff__icon"><svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="6" cy="6" r="3"/><path d="M8.12 8.12 12 12"/><path d="M20 4 8.12 15.88"/><circle cx="6" cy="18" r="3"/><path d="M14.8 14.8 20 20"/></svg></div>
          <b>Trimming and structural pruning, both offered</b>
          <span>If routine clearance isn't enough, we'll say so and offer structural pruning for weak limb attachments instead of overselling either one.</span>
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- ═══════════════════════ SERVICE BREAKDOWN ═══════════════════════ -->
<section class="section section--light slant-top" aria-label="What a tree trimming visit includes">
  <div class="container">
    <div class="sp-breakdown-grid">
      <div>
        <div class="section-head reveal-up">
          <span class="eyebrow-label">The scope</span>
          <h2>What's included in a Green Limb tree trimming visit?</h2>
        </div>
        <p class="answer-block reveal-up">Every Green Limb Tree Service trim covers the full canopy, not just the branches you can see from the driveway. A free assessment, a written estimate, roof and line clearance, canopy thinning, and deadwood removal are all part of the same visit for Greensboro customers &mdash; with structural pruning added if the tree needs it.</p>
        <ul class="sp-include-grid reveal-up">
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Free on-site canopy assessment</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Written, firm estimate</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Roof, gutter &amp; driveway clearance</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Power line clearance, coordinated</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Canopy thinning for light &amp; airflow</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Deadwood removal</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Structural pruning available</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Debris chipped, hauled &amp; raked</li>
        </ul>
      </div>
      <div class="sp-breakdown-media reveal-right">
        <div class="about-image-primary">
          <?php echo renderPicture('1000000129', 'Large canopy tree being trimmed from a bucket truck over a Greensboro back yard', 720, 620, '(max-width: 900px) 100vw, 460px'); ?>
        </div>
      </div>
    </div>

    <div class="section-head reveal-up" style="margin-top: var(--space-16);">
      <span class="eyebrow-label">How it works</span>
      <h3>How does a trimming visit actually go?</h3>
    </div>
    <ol class="process-steps reveal-up">
      <li>
        <b>Walk &amp; assess</b>
        <span>We look at every tree on the property, note what's touching the roof or lines, and hand you a firm written estimate.</span>
      </li>
      <li>
        <b>Plan the cuts</b>
        <span>We map which limbs come out for clearance, which for canopy thinning, and which need a structural pruning cut instead.</span>
      </li>
      <li>
        <b>Trim &amp; clear</b>
        <span>Cuts are made at the branch collar from a bucket truck or by climbing, with roofs, gutters, and beds protected below.</span>
      </li>
      <li>
        <b>Chip, haul &amp; walk it</b>
        <span>Brush is chipped or hauled, the lawn is raked, and we walk the finished canopy shape with you before we leave.</span>
      </li>
    </ol>
  </div>
</section>

<!-- ═══════════════════════ PROOF / REVIEWS ═══════════════════════ -->
<section class="section" aria-label="Greensboro customer reviews">
  <div class="container-narrow">
    <div class="section-head prose-centered reveal-up" style="margin-inline: auto;">
      <span class="eyebrow-label">Proof</span>
      <h2>What do Greensboro homeowners say about our trimming work?</h2>
    </div>
    <p class="answer-block reveal-up" style="margin-inline: auto;">Green Limb Tree Service is rated by real customers on Google. The reviews below come straight from that verified profile &mdash; Greensboro and Piedmont neighbors describing trimming and clearance work we've done near their homes. Read them, then <a href="<?php echo htmlspecialchars($googleBusinessProfile); ?>" target="_blank" rel="noopener">see the full listing on Google</a>.</p>
    <div class="reviews-embed reveal-up"><?php echo $elfsightEmbed; ?></div>
  </div>
</section>

<!-- ═══════════════════════ COMPARISON ═══════════════════════ -->
<section class="section section--light" aria-label="Green Limb compared to a cut-rate trim crew">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">The difference</span>
      <h2>What makes Green Limb different from a cut-rate trim crew?</h2>
    </div>
    <p class="answer-block reveal-up">The gap shows up in how the tree looks a year later. Green Limb Tree Service cuts to preserve the tree's shape and health, while a rushed crew often leaves a Greensboro yard with a topped, stubbed tree that grows back weaker and needs work again sooner.</p>
    <div class="sp-compare">
      <div class="sp-compare-col sp-compare-col--them reveal-left">
        <span class="sp-compare-tag">A cut-rate crew</span>
        <h3>What a low bid usually leaves out</h3>
        <ul>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>Trees topped or stubbed, not cut at the collar</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>Ladders only &mdash; roof-high limbs skipped</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>Brush and clippings left in the yard</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>No plan for lines or structural weak spots</li>
        </ul>
      </div>
      <div class="sp-compare-col sp-compare-col--us reveal-right">
        <span class="sp-compare-tag" style="color: var(--color-primary);">Green Limb Tree Service</span>
        <h3>How we do a trim</h3>
        <ul>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Clean collar cuts that heal and hold shape</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Bucket truck &amp; climbing for full-canopy reach</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Debris chipped, hauled &amp; yard raked</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Structural pruning flagged, never skipped</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════ RECENT WORK ═══════════════════════ -->
<section class="section sp-gallery" aria-label="Recent tree trimming work">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">Recent work</span>
      <h2>What does our Greensboro trimming work look like?</h2>
    </div>
    <div class="sp-gallery-grid" data-p1-dynamic>
      <figure class="sp-gallery-item reveal-scale">
        <?php echo renderPicture('1000000129', 'Large canopy tree being trimmed from a bucket truck over a Greensboro back yard', 760, 900, '(max-width: 700px) 100vw, 55vw'); ?>
        <figcaption>Bucket-truck clearance trim over a Greensboro back yard</figcaption>
      </figure>
      <figure class="sp-gallery-item reveal-scale reveal-delay-1">
        <?php echo renderPicture('1000001917', 'Green Limb crew making a structural pruning cut on a mature tree in Greensboro', 520, 400, '(max-width: 700px) 100vw, 30vw'); ?>
        <figcaption>Structural pruning cut on a mature shade tree</figcaption>
      </figure>
      <figure class="sp-gallery-item reveal-scale reveal-delay-2">
        <?php echo renderPicture('1000001503', 'Crew thinning a dense canopy tree near a Greensboro home', 520, 400, '(max-width: 700px) 100vw, 30vw'); ?>
        <figcaption>Canopy thinned for light and airflow near a home</figcaption>
      </figure>
    </div>
  </div>
</section>

<!-- ═══════════════════════ FAQ ═══════════════════════ -->
<section class="section section--light" aria-label="Tree trimming FAQs">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">Good to know</span>
      <h2>What else should I know before scheduling a trim?</h2>
      <p>Straight answers on timing, technique, and tree health for Greensboro tree trimming.</p>
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

<!-- ═══════════════════════ FINAL CTA ═══════════════════════ -->
<section class="closing-cta texture-grain edge-curve-top sp-final" aria-label="Request a tree trimming estimate">
  <span class="grain-layer" aria-hidden="true"></span>
  <span class="floating-ring" aria-hidden="true"></span>
  <div class="container">
    <div>
      <span class="eyebrow-label">Free estimate</span>
      <h2>Ready to get your trees trimmed before storm season?</h2>
      <p>Tell Green Limb Tree Service what's overgrown, overhanging, or dead and we'll reply the same day with a free on-site estimate for your Greensboro trim &mdash; no obligation, no pressure.</p>
      <ul class="sp-final-points">
        <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>Same-day reply</li>
        <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>Insured crews</li>
        <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>Free written quote</li>
      </ul>
    </div>
    <div class="actions">
      <a href="tel:<?php echo $phoneRaw; ?>" class="btn btn-accent btn-lg">Call <?php echo htmlspecialchars($phone); ?></a>
      <button type="button" class="btn btn-outline-white btn-lg" data-open-estimate>Request an estimate</button>
    </div>
  </div>
</section>

<!-- ═══════════════════════ OTHER SERVICES ═══════════════════════ -->
<section class="section" aria-label="Other tree services">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">What we do</span>
      <h2>What other tree services pair well with trimming?</h2>
      <p>Most Greensboro trims turn up one of these &mdash; ask about bundling on your estimate.</p>
    </div>
    <div class="services-grid" style="grid-template-columns: repeat(3, 1fr);">
      <?php foreach ($otherServices as $oi => $svc): ?>
      <article class="service-card-with-image card-tint-<?php echo $svc['tint']; ?> reveal-up reveal-delay-<?php echo $oi + 1; ?>">
        <div class="service-card__image">
          <?php echo renderPicture($svc['photo'], $svc['alt'], 480, 288, '(max-width: 720px) 100vw, 360px'); ?>
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

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
