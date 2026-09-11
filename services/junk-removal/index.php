<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ── Page-level setup ─────────────────────────────────────────────────────── */
$pageType    = 'service';
$serviceSlug = 'junk-removal';
$currentPage = 'services';

$pageTitle       = 'Junk & Debris Removal Greensboro NC | Green Limb Tree Service';
$metaDescription = 'Green Limb Tree Service hauls brush piles, cut log wood, storm debris & yard clutter off Greensboro, NC properties. Loading included, free estimates, 24/7.';
$canonicalUrl    = $siteUrl . '/services/junk-removal/';

/* Service-specific FAQ (drives the visible FAQ + FAQPage schema) */
$faqs = [
    [
        'q' => 'What kinds of junk and debris does Green Limb Tree Service haul away?',
        'a' => 'Green Limb Tree Service hauls brush piles, cut logs and log wood, storm-blown limbs, old fencing and landscaping debris, leaf and limb piles, and general yard clutter left on a Greensboro property. We are the haul-off arm of a tree crew, not a household-junk franchise, so we focus on outdoor and yard-adjacent debris.',
    ],
    [
        'q' => 'Do you load the debris, or do I have to pile it myself?',
        'a' => 'Loading is always included. A Green Limb crew walks your Greensboro property, loads brush, logs, and debris onto our flatbed or grapple truck, and hauls it off the same visit. You do not need to drag anything to the curb or stack a pile for us in advance.',
    ],
    [
        'q' => 'Will you take heavy cut logs and log wood, not just bagged brush?',
        'a' => "Yes. Our grapple and flatbed trucks are built for exactly that — rounds, splits, and full logs that a standard pickup or a bagged-waste service can't move. Green Limb Tree Service regularly clears log wood left over from a removal along with the lighter brush and leaf debris on the same property.",
    ],
    [
        'q' => 'How is junk removal priced — by the load or by volume?',
        'a' => 'Green Limb Tree Service prices junk and debris removal by load size and volume after a quick on-site look at your Greensboro property. A single truckload of brush costs less than a full flatbed of logs and fencing, and you get a firm price before we load anything.',
    ],
    [
        'q' => 'Can you haul debris away the same day I call?',
        'a' => 'Often, yes. Green Limb Tree Service runs debris haul-off alongside our tree and storm crews across Guilford and Alamance counties, so a same-day or next-day pickup is common for brush piles, storm debris, and log wood already sitting on your property.',
    ],
    [
        'q' => 'What happens to the debris after you haul it away?',
        'a' => "Wood, brush, and green waste are disposed of responsibly, with usable logs and chippable material routed to recycling or mulching outlets rather than a landfill whenever possible. Green Limb Tree Service handles the disposal end so a Greensboro homeowner doesn't have to find a drop-off site themselves.",
    ],
];

/* Related services shown in the "Other Services" grid (never the current page) */
$otherServices = [
    [
        'name' => 'Land Clearing', 'slug' => 'land-clearing', 'photo' => '1000001648', 'tint' => 1,
        'alt'  => 'Cleared and graded lot after land clearing work near Greensboro',
        'desc' => 'Clearing brush and trees for new construction or overgrown lots.',
        'bullets' => ['Lots & overgrown acreage', 'Brush & tree clearing', 'Site graded and ready'],
        'icon' => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 22h20"/><path d="M6.36 17.4 4 17l-2-4 1.1-.55a2 2 0 0 1 1.8 0l.17.1a2 2 0 0 0 1.8 0L8 12 5 6l.9-.45a2 2 0 0 1 2.09.2l4.02 3a2 2 0 0 0 2.1.2l4.19-2.06a2.41 2.41 0 0 1 1.73-.17L21 7a1.4 1.4 0 0 1 .87 1.99l-.38.76c-.23.46-.6.84-1.07 1.08L7.58 17.2a2 2 0 0 1-1.22.18Z"/></svg>',
    ],
    [
        'name' => 'Storm Work', 'slug' => 'storm-work', 'photo' => '1000001533', 'tint' => 2,
        'alt'  => 'Green Limb crew clearing a large fallen tree after a storm in Greensboro',
        'desc' => 'Same-day help when a tree comes down on your home or drive.',
        'bullets' => ['24/7 emergency call-out', 'Trees off homes & drives', 'Full debris cleanup'],
        'icon' => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.7 7.7a2.5 2.5 0 1 1 1.8 4.3H2"/><path d="M9.6 4.6A2 2 0 1 1 11 8H2"/><path d="M12.6 19.4A2 2 0 1 0 14 16H2"/></svg>',
    ],
    [
        'name' => 'Stump Grinding', 'slug' => 'stump-grinding', 'photo' => '1000000569', 'tint' => 3,
        'alt'  => 'Ground stump and mulch after grinding on a Greensboro lawn',
        'desc' => 'Grind the leftover stump below grade and reclaim the lawn.',
        'bullets' => ['Ground below grade', 'Removes trip hazards', 'Chips raked or hauled'],
        'icon' => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83Z"/><path d="m22 17.65-9.17 4.16a2 2 0 0 1-1.66 0L2 17.65"/><path d="m22 12.65-9.17 4.16a2 2 0 0 1-1.66 0L2 12.65"/></svg>',
    ],
];

/* ── Schema: Service (@id) + BreadcrumbList + FAQPage ─────────────────────── */
$serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $canonicalUrl . '#service',
    'serviceType' => 'Junk Removal',
    'name'        => 'Junk & Debris Removal in ' . $address['city'] . ', ' . $address['state'],
    'url'         => $canonicalUrl,
    'description' => 'Hauling and disposal of brush piles, cut log wood, storm debris, old fencing and landscaping debris, and yard clutter from Greensboro, NC properties, with loading included.',
    'provider'    => ['@id' => $siteUrl . '/#organization'],
    'areaServed'  => array_map(function ($a) { return ['@type' => 'City', 'name' => $a]; }, $serviceAreas),
    'offers'      => ['@type' => 'Offer', 'availability' => 'https://schema.org/InStock', 'priceCurrency' => 'USD'],
];
$breadcrumbs = [
    ['name' => 'Home', 'url' => '/'],
    ['name' => 'Services', 'url' => '/services/'],
    ['name' => 'Junk Removal', 'url' => '/services/junk-removal/'],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<script type="application/ld+json"><?php echo json_encode($serviceSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?></script>
<?php echo generateBreadcrumbSchema($breadcrumbs); ?>
<?php echo generateFAQSchema($faqs); ?>

<style>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/service-page.css'; ?>
/* Junk Removal — page-specific accents */
.sp-junk .pull-quote { color: var(--color-white) }; }
.sp-junk .sp-expert-figure { background: color-mix(in srgb, var(--color-primary) 8%, var(--color-surface)); }
</style>

<!-- ═══════════════════════ HERO (interior + lead form) ═══════════════════════ -->
<section class="hero hero--interior sp-hero sp-junk" id="estimate" aria-label="Junk and debris removal in Greensboro, NC">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a><span class="breadcrumb-sep">/</span>
      <a href="/services/">Services</a><span class="breadcrumb-sep">/</span>
      <span aria-current="page">Junk Removal</span>
    </nav>
    <div class="hero-grid hero-grid--form">

      <div class="hero-copy">
        <span class="eyebrow">Junk Removal &middot; Greensboro, NC</span>
        <h1 class="hero-title">Junk &amp; Debris Removal in Greensboro, NC</h1>
        <p class="hero-answer">Green Limb Tree Service hauls off brush piles, cut logs, storm debris, and yard clutter left behind on Greensboro properties. Our flatbed and grapple trucks load everything on site and haul it away responsibly, so your yard is clear without you lifting a branch &mdash; starting with a free on-site estimate.</p>
        <div class="hero-actions">
          <button type="button" class="btn btn-primary btn-lg hero-form-open" data-open-estimate>Get a free estimate</button>
          <a class="link-call" href="tel:<?php echo $phoneRaw; ?>">
            <svg aria-hidden="true" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
            or call <?php echo htmlspecialchars($phone); ?>
          </a>
        </div>
        <ul class="hero-chips">
          <li><svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Loading included</li>
          <li><svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.7 7.7a2.5 2.5 0 1 1 1.8 4.3H2"/><path d="M9.6 4.6A2 2 0 1 1 11 8H2"/><path d="M12.6 19.4A2 2 0 1 0 14 16H2"/></svg>Flatbed &amp; grapple hauling</li>
          <li><svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 6h18"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6"/><path d="M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>Responsible disposal</li>
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
<section class="section section--light" aria-label="What debris piles up after tree and yard work">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">Know the pile-up</span>
      <h2>What's actually piling up in your Greensboro yard?</h2>
    </div>
    <p class="answer-block reveal-up">Brush, logs, and storm debris rarely clear themselves. Green Limb Tree Service sees the same pile-ups across Greensboro and the Piedmont &mdash; a cut-up tree left in the yard, a storm's worth of limbs, or fencing and landscaping debris nobody has hauled off &mdash; and clears them in one visit.</p>

    <div class="sp-problem-grid">
      <div class="reveal-left">
        <p class="pull-quote">A brush pile by the fence line or a stack of cut logs by the drive doesn't clear itself &mdash; and it only grows with the next storm.</p>
        <p class="sp-problem-lead">Most of what we haul isn't household junk &mdash; it's the outdoor debris that builds up after tree work, a storm, or a yard project: wood, brush, and clutter sitting on the property with nowhere to go.</p>
      </div>
      <div class="sp-signs reveal-right">
        <div class="sp-sign">
          <div class="sp-sign__icon"><svg aria-hidden="true" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.7 7.7a2.5 2.5 0 1 1 1.8 4.3H2"/><path d="M9.6 4.6A2 2 0 1 1 11 8H2"/><path d="M12.6 19.4A2 2 0 1 0 14 16H2"/></svg></div>
          <h3>Brush piles</h3>
          <p>Cut limbs and leaf brush stacked up after trimming, pruning, or clearing a bed line.</p>
        </div>
        <div class="sp-sign">
          <div class="sp-sign__icon"><svg aria-hidden="true" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83Z"/><path d="m22 17.65-9.17 4.16a2 2 0 0 1-1.66 0L2 17.65"/></svg></div>
          <h3>Log wood &amp; rounds</h3>
          <p>Heavy cut logs from a removal that are too much for a pickup truck to haul.</p>
        </div>
        <div class="sp-sign">
          <div class="sp-sign__icon"><svg aria-hidden="true" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22v-5"/><path d="M9 8V2"/><path d="M15 8V2"/><path d="M18 8v0a6 6 0 0 1-6 6 6 6 0 0 1-6-6"/></svg></div>
          <h3>Storm debris</h3>
          <p>Snapped limbs and windblown branches scattered across the yard after a Piedmont storm.</p>
        </div>
        <div class="sp-sign">
          <div class="sp-sign__icon"><svg aria-hidden="true" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 6h18"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6"/><path d="M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg></div>
          <h3>Overgrown clutter</h3>
          <p>Old fencing, landscaping debris, and yard clutter that's built up over time.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════ EXPERT POSITIONING ═══════════════════════ -->
<section class="section" aria-label="Why call Green Limb for junk removal">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">Why Green Limb</span>
      <h2>Why call a tree crew for junk and debris removal?</h2>
    </div>
    <p class="answer-block reveal-up">Because heavy yard debris needs heavy equipment, not a pickup truck. Green Limb Tree Service already runs grapple and flatbed trucks built for logs and brush on every tree job, so hauling that same debris off a Greensboro property &mdash; on its own or right after a removal &mdash; is work we're already set up for.</p>

    <div class="sp-expert-grid">
      <div class="sp-expert-figure reveal-left">
        <span class="eyebrow-label">Around the clock</span>
        <span class="big-number">24/7</span>
        <p>Debris and haul-off calls answered Monday through Saturday across Guilford and Alamance counties.</p>
      </div>
      <ul class="sp-diffs reveal-right">
        <li class="sp-diff">
          <div class="sp-diff__icon"><svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.7 7.7a2.5 2.5 0 1 1 1.8 4.3H2"/><path d="M9.6 4.6A2 2 0 1 1 11 8H2"/><path d="M12.6 19.4A2 2 0 1 0 14 16H2"/></svg></div>
          <b>Grapple &amp; flatbed hauling</b>
          <span>Equipment built for full logs, brush piles, and fencing debris &mdash; loads a bagged-waste service or pickup truck can't move.</span>
        </li>
        <li class="sp-diff">
          <div class="sp-diff__icon"><svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg></div>
          <b>Insured and safety-first</b>
          <span>Liability coverage on every job and careful loading around your driveway, beds, and lawn &mdash; proof available on request.</span>
        </li>
        <li class="sp-diff">
          <div class="sp-diff__icon"><svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="6" cy="6" r="3"/><path d="M8.12 8.12 12 12"/><path d="M20 4 8.12 15.88"/><circle cx="6" cy="18" r="3"/><path d="M14.8 14.8 20 20"/></svg></div>
          <b>One crew for the whole job</b>
          <span>The same team that trims, removes, or clears your trees hauls the debris off &mdash; no second company or second appointment to schedule.</span>
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- ═══════════════════════ SERVICE BREAKDOWN ═══════════════════════ -->
<section class="section section--light slant-top" aria-label="What a junk removal includes">
  <div class="container">
    <div class="sp-breakdown-grid">
      <div>
        <div class="section-head reveal-up">
          <span class="eyebrow-label">The scope</span>
          <h2>What's included in a Green Limb junk removal?</h2>
        </div>
        <p class="answer-block reveal-up">Every Green Limb Tree Service haul-off covers loading, hauling, and disposal in one visit. There's no separate loading fee and no dump run left to you &mdash; the firm estimate you approve for your Greensboro property is the whole job, start to finish.</p>
        <ul class="sp-include-grid reveal-up">
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Free on-site load estimate</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Brush &amp; limb pile haul-off</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Cut log &amp; wood removal</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Storm debris cleanup</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Old fencing &amp; landscaping debris</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Flatbed &amp; grapple truck loading</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Loading included, nothing for you to lift</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Responsible disposal &amp; recycling</li>
        </ul>
      </div>
      <div class="sp-breakdown-media reveal-right">
        <div class="about-image-primary">
          <?php echo renderPicture('1000005749', 'Green Limb Tree Service crew loading brush and debris onto a flatbed truck in Greensboro', 720, 620, '(max-width: 900px) 100vw, 460px'); ?>
        </div>
      </div>
    </div>

    <div class="section-head reveal-up" style="margin-top: var(--space-16);">
      <span class="eyebrow-label">How it works</span>
      <h3>How does a junk haul-off day work?</h3>
    </div>
    <ol class="process-steps reveal-up">
      <li>
        <b>Assess &amp; quote</b>
        <span>We walk the property, size up the load by volume, and hand you a firm price &mdash; no guessing over the phone.</span>
      </li>
      <li>
        <b>Load &amp; haul</b>
        <span>Our grapple or flatbed crew loads brush, logs, and debris directly &mdash; you don't touch a single piece.</span>
      </li>
      <li>
        <b>Sort &amp; dispose</b>
        <span>Wood and green waste are routed to recycling or mulching outlets whenever possible instead of a landfill.</span>
      </li>
      <li>
        <b>Final walk-through</b>
        <span>We rake the cleared area and walk the property with you before we leave.</span>
      </li>
    </ol>
  </div>
</section>

<!-- ═══════════════════════ PROOF / REVIEWS ═══════════════════════ -->
<section class="section" aria-label="Greensboro customer reviews">
  <div class="container-narrow">
    <div class="section-head prose-centered reveal-up" style="margin-inline: auto;">
      <span class="eyebrow-label">Proof</span>
      <h2>What do Greensboro customers say about our haul-offs?</h2>
    </div>
    <p class="answer-block reveal-up" style="margin-inline: auto;">Green Limb Tree Service is rated by real customers on Google. The reviews below come straight from that verified profile &mdash; neighbors across Greensboro and the Triad describing debris and junk removal we've handled on their properties. Read them, then <a href="<?php echo htmlspecialchars($googleBusinessProfile); ?>" target="_blank" rel="noopener">see the full listing on Google</a>.</p>
    <div class="reviews-embed reveal-up"><?php echo $elfsightEmbed; ?></div>
  </div>
</section>

<!-- ═══════════════════════ COMPARISON ═══════════════════════ -->
<section class="section section--light" aria-label="Green Limb compared to a general junk hauler">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">The difference</span>
      <h2>What makes Green Limb different from a general junk hauler?</h2>
    </div>
    <p class="answer-block reveal-up">A general hauler is built for boxes and furniture, not a yard full of logs and brush. Green Limb Tree Service runs the equipment and crew that Greensboro tree work already requires, so heavier debris gets loaded and gone in one visit instead of a second call.</p>
    <div class="sp-compare">
      <div class="sp-compare-col sp-compare-col--them reveal-left">
        <span class="sp-compare-tag">A general junk hauler</span>
        <h3>What a general hauler usually can't do</h3>
        <ul>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>No grapple or flatbed for heavy logs</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>Dump fees added on after pickup</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>No experience with storm-downed limbs</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>Separate company for the tree work itself</li>
        </ul>
      </div>
      <div class="sp-compare-col sp-compare-col--us reveal-right">
        <span class="sp-compare-tag" style="color: var(--color-primary);">Green Limb Tree Service</span>
        <h3>How we handle a haul-off</h3>
        <ul>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Grapple &amp; flatbed built for logs and brush</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Firm all-in price, loading included</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Comfortable with storm debris and log wood</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Same crew as your tree work, one call</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════ RECENT WORK ═══════════════════════ -->
<section class="section sp-gallery" aria-label="Recent junk and debris removal">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">Recent work</span>
      <h2>What does a Green Limb debris haul-off look like?</h2>
    </div>
    <div class="sp-gallery-grid" data-p1-dynamic>
      <figure class="sp-gallery-item reveal-scale">
        <?php echo renderPicture('1000005749', 'Green Limb Tree Service crew loading brush and debris onto a flatbed truck in Greensboro', 760, 900, '(max-width: 700px) 100vw, 55vw'); ?>
        <figcaption>Flatbed loaded with brush and cut wood from a Greensboro property</figcaption>
      </figure>
      <figure class="sp-gallery-item reveal-scale reveal-delay-1">
        <?php echo renderPicture('1000001648', 'Cleared and graded lot after debris and brush removal near Greensboro', 520, 400, '(max-width: 700px) 100vw, 30vw'); ?>
        <figcaption>Lot cleared of brush and clutter, ready to use again</figcaption>
      </figure>
      <figure class="sp-gallery-item reveal-scale reveal-delay-2">
        <?php echo renderPicture('1000001533', 'Crew hauling storm debris off a Piedmont property', 520, 400, '(max-width: 700px) 100vw, 30vw'); ?>
        <figcaption>Storm debris hauled off the same day it came down</figcaption>
      </figure>
    </div>
  </div>
</section>

<!-- ═══════════════════════ FAQ ═══════════════════════ -->
<section class="section section--light" aria-label="Junk and debris removal FAQs">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">Good to know</span>
      <h2>What else should I know about junk and debris removal?</h2>
      <p>Straight answers on what we haul, pricing, and timing for Greensboro debris removal.</p>
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
<section class="closing-cta texture-grain edge-curve-top sp-final" aria-label="Request a junk removal estimate">
  <span class="grain-layer" aria-hidden="true"></span>
  <span class="floating-ring" aria-hidden="true"></span>
  <div class="container">
    <div>
      <span class="eyebrow-label">Free estimate</span>
      <h2>Ready to get that debris pile hauled off?</h2>
      <p>Tell Green Limb Tree Service what's piled up and we'll reply the same day with a free on-site estimate to haul it off your Greensboro property &mdash; no obligation, no pressure.</p>
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
      <h2>What else can the Green Limb crew clear from your property?</h2>
      <p>Most Greensboro haul-offs pair naturally with these &mdash; ask about bundling on your estimate.</p>
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
