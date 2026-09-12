<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ── Page-level setup ─────────────────────────────────────────────────────── */
$pageType    = 'service';
$serviceSlug = 'snow-removal';
$currentPage = 'services';

$pageTitle       = 'Snow & Ice Removal Greensboro NC | Green Limb Tree Service';
$pageDescription = 'On-call snow & ice clearing for driveways, walkways and access routes in Greensboro, NC. Green Limb Tree Service also clears ice-downed limbs after Piedmont winter storms.';
$canonicalUrl    = $siteUrl . '/services/snow-removal/';

/* Service-specific FAQ (drives the visible FAQ + FAQPage schema) */
$faqs = [
    [
        'q' => 'Do you plow driveways in Greensboro?',
        'a' => "Green Limb Tree Service isn't a plowing fleet — we don't run trucks with mounted blades. What we do is clear snow and ice by hand and with small equipment from driveways, walkways, and access routes so your Greensboro property is reachable after a winter storm.",
    ],
    [
        'q' => 'How fast can you get to my property after a storm?',
        'a' => "Response depends on storm severity and how many calls come in across Guilford and Alamance counties, but Green Limb Tree Service works through our list as roads clear, prioritizing driveways blocking essential access. Call as soon as the snow stops for the best place in line.",
    ],
    [
        'q' => 'What happens if the storm brings down limbs along with the snow?',
        'a' => "Ice storms are common in the Piedmont and often snap limbs along with dropping snow. Green Limb Tree Service handles both with the same crew and visit — clearing downed or hanging ice-loaded limbs first for safety, then opening up your driveway and walkways.",
    ],
    [
        'q' => 'Do you clear snow for businesses as well as homes?',
        'a' => "Yes. Green Limb Tree Service clears residential driveways and walkways as well as small commercial lots and access routes for businesses around Greensboro, so employees, customers, and deliveries aren't blocked out after a snow or ice event.",
    ],
    [
        'q' => 'Is this a seasonal contract or an on-call service?',
        'a' => "It's on-call, not a standing seasonal contract. The Piedmont only sees a handful of snow and ice events most winters, so Green Limb Tree Service responds when a storm actually hits rather than billing you for a plow route that may never run.",
    ],
    [
        'q' => 'Do you put down salt or ice melt?',
        'a' => "We can apply ice melt to walkways, steps, and other high-traffic spots on request when we clear a property, which helps prevent refreeze overnight. Let us know when you call and we'll bring it along with the rest of the equipment.",
    ],
];

/* Related services shown in the "Other Services" grid (never the current page) */
$otherServices = [
    [
        'name' => 'Storm Work', 'slug' => 'storm-work', 'photo' => 'storm-fallen-pine', 'tint' => 1,
        'alt'  => 'Storm-fallen pine cut into sections on a Greensboro property',
        'desc' => 'Same-day help when a tree comes down on your home or drive.',
        'bullets' => ['24/7 emergency call-out', 'Trees off homes & drives', 'Full debris cleanup'],
        'icon' => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.7 7.7a2.5 2.5 0 1 1 1.8 4.3H2"/><path d="M9.6 4.6A2 2 0 1 1 11 8H2"/><path d="M12.6 19.4A2 2 0 1 0 14 16H2"/></svg>',
    ],
    [
        'name' => 'Tree Service', 'slug' => 'tree-service', 'photo' => 'lift-tall-oak-takedown', 'tint' => 2,
        'alt'  => 'Spider lift taking down a tall oak on a Greensboro property',
        'desc' => 'Full-service tree care beyond the storm — pruning, removal & health.',
        'bullets' => ['Removal, trimming & pruning', 'Year-round canopy care', 'One crew, every visit'],
        'icon' => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22v-5"/><path d="M9 8V2"/><path d="M15 8V2"/><path d="M18 8v0a6 6 0 0 1-6 6 6 6 0 0 1-6-6"/></svg>',
    ],
    [
        'name' => 'Junk Removal', 'slug' => 'junk-removal', 'photo' => 'log-trailer-haul-away', 'tint' => 3,
        'alt'  => 'Trailer loaded with logs for haul-away after a Green Limb removal',
        'desc' => 'Storm brush, old limbs & yard clutter hauled off in one trip.',
        'bullets' => ['Brush & debris hauled', 'Clears storm leftovers', 'One-visit cleanup'],
        'icon' => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 6h18"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6"/><path d="M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>',
    ],
];

/* ── Schema: Service (@id) + BreadcrumbList + FAQPage ─────────────────────── */
$serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $canonicalUrl . '#service',
    'serviceType' => 'Snow Removal',
    'name'        => 'Snow & Ice Removal in ' . $address['city'] . ', ' . $address['state'],
    'url'         => $canonicalUrl,
    'description' => 'On-call snow and ice clearing for driveways, walkways, and access routes in Greensboro, NC, paired with ice-downed limb cleanup after Piedmont winter storms.',
    'provider'    => ['@id' => $siteUrl . '/#organization'],
    'areaServed'  => array_map(function ($a) { return ['@type' => 'City', 'name' => $a]; }, $serviceAreas),
    'offers'      => ['@type' => 'Offer', 'availability' => 'https://schema.org/InStock', 'priceCurrency' => 'USD'],
];
$breadcrumbs = [
    ['name' => 'Home', 'url' => '/'],
    ['name' => 'Services', 'url' => '/services/'],
    ['name' => 'Snow Removal', 'url' => '/services/snow-removal/'],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<script type="application/ld+json"><?php echo json_encode($serviceSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?></script>
<?php echo generateBreadcrumbSchema($breadcrumbs); ?>
<?php echo generateFAQSchema($faqs); ?>

<style>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/service-page.css'; ?>
/* Snow & Ice Removal — page-specific accents */
.sp-snow .pull-quote { color: var(--color-white) }; }
.sp-snow .sp-expert-figure { background: color-mix(in srgb, var(--color-secondary) 10%, var(--color-surface)); }
</style>

<!-- ═══════════════════════ HERO (interior + lead form) ═══════════════════════ -->
<section class="hero hero--interior sp-hero sp-snow" id="estimate" aria-label="Snow and ice removal in Greensboro, NC">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a><span class="breadcrumb-sep">/</span>
      <a href="/services/">Services</a><span class="breadcrumb-sep">/</span>
      <span aria-current="page">Snow Removal</span>
    </nav>
    <div class="hero-grid hero-grid--form">

      <div class="hero-copy">
        <span class="eyebrow">Snow &amp; Ice Removal &middot; Greensboro, NC</span>
        <h1 class="hero-title">Snow &amp; Ice Removal in Greensboro, NC</h1>
        <p class="hero-answer">When a Piedmont winter storm actually hits, Green Limb Tree Service clears snow and ice from driveways, walkways, and access routes so your home or business stays reachable. The same crew and equipment that handle storm cleanup respond on call &mdash; not a standing plow route.</p>
        <div class="hero-actions">
          <button type="button" class="btn btn-primary btn-lg hero-form-open" data-open-estimate>Get a free estimate</button>
          <a class="link-call" href="tel:<?php echo $phoneRaw; ?>">
            <svg aria-hidden="true" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
            or call <?php echo htmlspecialchars($phone); ?>
          </a>
        </div>
        <ul class="hero-chips">
          <li><svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>Fully insured crews</li>
          <li><svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v4"/><path d="m6.8 6.8-2.9-2.9"/><path d="M2 12h4"/><path d="M12 22a8 8 0 0 0 0-16"/></svg>On-call after storms</li>
          <li><svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Ice-downed limbs cleared too</li>
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
<section class="section section--light" aria-label="What a Piedmont winter storm leaves behind">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">Know the signs</span>
      <h2>What does a snow or ice event actually block in Greensboro?</h2>
    </div>
    <p class="answer-block reveal-up">A few times most winters, snow or ice locks down driveways and walkways across Greensboro and the Piedmont Triad. Green Limb Tree Service clears the access points that matter most &mdash; the driveway, the front walk, and the ice-loaded limbs a storm often drops along with the snow.</p>

    <div class="sp-problem-grid">
      <div class="reveal-left">
        <p class="pull-quote">A snowed-in driveway or an ice-glazed walkway turns a normal morning into a hazard.</p>
        <p class="sp-problem-lead">The Piedmont doesn't get snow often, but when it does, most households have no equipment for it. A blocked drive or a slick front step is a real problem for anyone who has to leave for work, school, or a medical appointment.</p>
      </div>
      <div class="sp-signs reveal-right">
        <div class="sp-sign">
          <div class="sp-sign__icon"><svg aria-hidden="true" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg></div>
          <h3>Snowed-in driveway</h3>
          <p>Several inches of snow across the drive with no way to get a car out safely.</p>
        </div>
        <div class="sp-sign">
          <div class="sp-sign__icon"><svg aria-hidden="true" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19h16"/><path d="m6 15 4-8 4 8"/><path d="M15 15l3-6 3 6"/></svg></div>
          <h3>Iced-over walkway</h3>
          <p>A refrozen front walk or steps that turns into a slip hazard for anyone coming or going.</p>
        </div>
        <div class="sp-sign">
          <div class="sp-sign__icon"><svg aria-hidden="true" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18"/><path d="m19 9-5 5-4-4-3 3"/></svg></div>
          <h3>Blocked access for work or care</h3>
          <p>A caregiver, delivery, or commute that can't reach the property until the drive is cleared.</p>
        </div>
        <div class="sp-sign">
          <div class="sp-sign__icon"><svg aria-hidden="true" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22v-5"/><path d="M9 8V2"/><path d="M15 8V2"/><path d="M18 8v0a6 6 0 0 1-6 6 6 6 0 0 1-6-6"/></svg></div>
          <h3>Ice-loaded limbs down</h3>
          <p>Branches weighted with ice that snap and land across the same driveway you need cleared.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════ EXPERT POSITIONING ═══════════════════════ -->
<section class="section" aria-label="Why call Green Limb for winter access clearing">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">Why Green Limb</span>
      <h2>Why call a tree crew instead of a plow service?</h2>
    </div>
    <p class="answer-block reveal-up">Because there usually isn't a plow service to call. Green Limb Tree Service is a family-owned Greensboro crew that already runs the equipment and manpower needed for storm response &mdash; so when a winter storm hits, we can shift that same crew to clearing your access on call.</p>

    <div class="sp-expert-grid">
      <div class="sp-expert-figure reveal-left">
        <span class="eyebrow-label">Available</span>
        <span class="big-number">24/7</span>
        <p>On-call response Monday through Saturday across the Greensboro metro when winter weather blocks access.</p>
      </div>
      <ul class="sp-diffs reveal-right">
        <li class="sp-diff">
          <div class="sp-diff__icon"><svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.7 7.7a2.5 2.5 0 1 1 1.8 4.3H2"/><path d="M9.6 4.6A2 2 0 1 1 11 8H2"/><path d="M12.6 19.4A2 2 0 1 0 14 16H2"/></svg></div>
          <b>Same crew as storm response</b>
          <span>No separate seasonal outfit &mdash; the people who clear storm-fallen trees also handle winter access clearing.</span>
        </li>
        <li class="sp-diff">
          <div class="sp-diff__icon"><svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg></div>
          <b>Insured and safety-first</b>
          <span>Liability coverage on every job, whether we're clearing ice-loaded limbs or a snowed-in driveway &mdash; proof available on request.</span>
        </li>
        <li class="sp-diff">
          <div class="sp-diff__icon"><svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83Z"/><path d="m22 17.65-9.17 4.16a2 2 0 0 1-1.66 0L2 17.65"/><path d="m22 12.65-9.17 4.16a2 2 0 0 1-1.66 0L2 12.65"/></svg></div>
          <b>Honest about what this is</b>
          <span>We won't sell you a seasonal plow contract for a region that rarely needs one &mdash; you call when a storm actually hits.</span>
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- ═══════════════════════ SERVICE BREAKDOWN ═══════════════════════ -->
<section class="section section--light slant-top" aria-label="What snow and ice removal includes">
  <div class="container">
    <div class="sp-breakdown-grid">
      <div>
        <div class="section-head reveal-up">
          <span class="eyebrow-label">The scope</span>
          <h2>What's included when Green Limb clears snow and ice?</h2>
        </div>
        <p class="answer-block reveal-up">A Green Limb Tree Service winter call covers the access points a Greensboro property actually needs open: the driveway, the walkway, and any ice-loaded limbs blocking either one. We scope it on the call so you know what to expect before the crew arrives.</p>
        <ul class="sp-include-grid reveal-up">
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Driveway snow &amp; ice cleared</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Walkways &amp; front steps cleared</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Ice-downed limbs removed</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Small commercial lots &amp; entries</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Optional ice melt on walkways</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Debris hauled from limb cleanup</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>On-call, no seasonal contract</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Priced on the call, no surprises</li>
        </ul>
      </div>
      <div class="sp-breakdown-media reveal-right">
        <div class="about-image-primary">
          <?php echo renderPicture('bucket-truck-winter-removal', 'Bucket truck removal of a bare winter tree in Greensboro', 720, 620, '(max-width: 900px) 100vw, 460px'); ?>
        </div>
      </div>
    </div>

    <div class="section-head reveal-up" style="margin-top: var(--space-16);">
      <span class="eyebrow-label">How it works</span>
      <h3>How does a winter access call actually go?</h3>
    </div>
    <ol class="process-steps reveal-up">
      <li>
        <b>Call when the storm hits</b>
        <span>Reach us as soon as snow or ice stops falling &mdash; the sooner you're on the list, the sooner we can get to you.</span>
      </li>
      <li>
        <b>We scope the access</b>
        <span>We confirm what needs clearing &mdash; driveway, walkway, downed limbs &mdash; and give you a straight answer on timing.</span>
      </li>
      <li>
        <b>Clear it safely</b>
        <span>Crew clears snow and ice by hand and with equipment, removing any ice-loaded limbs blocking the route first.</span>
      </li>
      <li>
        <b>Confirm access is open</b>
        <span>We check the driveway and walkway are passable before we leave, so you can get in or out safely.</span>
      </li>
    </ol>
  </div>
</section>

<!-- ═══════════════════════ PROOF / REVIEWS ═══════════════════════ -->
<section class="section" aria-label="Greensboro customer reviews">
  <div class="container-narrow">
    <div class="section-head prose-centered reveal-up" style="margin-inline: auto;">
      <span class="eyebrow-label">Proof</span>
      <h2>What do Greensboro customers say about Green Limb?</h2>
    </div>
    <p class="answer-block reveal-up" style="margin-inline: auto;">Green Limb Tree Service is rated by real customers on Google. The reviews below come straight from that verified profile &mdash; neighbors across Greensboro and the Triad describing work we've handled near their homes. Read them, then <a href="<?php echo htmlspecialchars($googleBusinessProfile); ?>" target="_blank" rel="noopener">see the full listing on Google</a>.</p>
    <div class="reviews-embed reveal-up"><?php echo $elfsightEmbed; ?></div>
  </div>
</section>

<!-- ═══════════════════════ COMPARISON ═══════════════════════ -->
<section class="section section--light" aria-label="Green Limb compared to waiting it out">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">The difference</span>
      <h2>What's the alternative to calling Green Limb after a storm?</h2>
    </div>
    <p class="answer-block reveal-up">Most Greensboro households don't own snow equipment because they rarely need it &mdash; which usually means waiting out the storm or improvising with a shovel and rock salt. Green Limb Tree Service brings the crew and equipment so you don't have to.</p>
    <div class="sp-compare">
      <div class="sp-compare-col sp-compare-col--them reveal-left">
        <span class="sp-compare-tag">Waiting it out</span>
        <h3>What most homeowners are left with</h3>
        <ul>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>No equipment for a rare event</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>Ice-loaded limbs left where they fall</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>Days stuck until it melts on its own</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>Slip risk on an unshoveled walk</li>
        </ul>
      </div>
      <div class="sp-compare-col sp-compare-col--us reveal-right">
        <span class="sp-compare-tag" style="color: var(--color-primary);">Green Limb Tree Service</span>
        <h3>How we handle it instead</h3>
        <ul>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Crew &amp; equipment already in place</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Ice-loaded limbs cleared same visit</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Access opened, not left to melt</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Ice melt available on request</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════ RECENT WORK ═══════════════════════ -->
<section class="section sp-gallery" aria-label="Green Limb crew and equipment">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">Recent work</span>
      <h2>What does Green Limb's winter-ready crew look like?</h2>
    </div>
    <div class="sp-gallery-grid" data-p1-dynamic>
      <figure class="sp-gallery-item reveal-scale">
        <?php echo renderPicture('crew-truck-log-haul', 'Green Limb truck and trailer hauling cut logs from a Greensboro job', 760, 900, '(max-width: 700px) 100vw, 55vw'); ?>
        <figcaption>Equipment staged and ready for on-call winter response (no snow shown)</figcaption>
      </figure>
      <figure class="sp-gallery-item reveal-scale reveal-delay-1">
        <?php echo renderPicture('chip-truck-fleet', 'Green Limb chip truck and crew on a residential job site', 520, 400, '(max-width: 700px) 100vw, 30vw'); ?>
        <figcaption>The same crew that clears ice-downed limbs after a winter storm</figcaption>
      </figure>
      <figure class="sp-gallery-item reveal-scale reveal-delay-2">
        <?php echo renderPicture('cleared-front-yard', 'Front yard raked clean after a Green Limb tree removal in Greensboro', 520, 400, '(max-width: 700px) 100vw, 30vw'); ?>
        <figcaption>Storm-response work &mdash; the same team on call for winter access clearing</figcaption>
      </figure>
    </div>
  </div>
</section>

<!-- ═══════════════════════ FAQ ═══════════════════════ -->
<section class="section section--light" aria-label="Snow and ice removal FAQs">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">Good to know</span>
      <h2>What else should I know about winter access clearing?</h2>
      <p>Straight answers on plowing, response time, ice storms, and pricing for Greensboro winter calls.</p>
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
<section class="closing-cta texture-grain edge-curve-top sp-final" aria-label="Request winter access clearing">
  <span class="grain-layer" aria-hidden="true"></span>
  <span class="floating-ring" aria-hidden="true"></span>
  <div class="container">
    <div>
      <span class="eyebrow-label">Free estimate</span>
      <h2>Storm on the way and worried about access?</h2>
      <p>Tell Green Limb Tree Service what needs clearing and we'll reply the same day about getting your Greensboro driveway, walkway, or lot opened up &mdash; no seasonal contract, no pressure.</p>
      <ul class="sp-final-points">
        <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>Same-day reply</li>
        <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>Insured crews</li>
        <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>On-call, no contract</li>
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
      <h2>What other work can Green Limb handle for you?</h2>
      <p>Most winter calls pair naturally with these &mdash; ask about bundling when you call.</p>
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
