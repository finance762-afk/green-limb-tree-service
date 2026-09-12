<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ── Page-level setup ─────────────────────────────────────────────────────── */
$pageType    = 'service';
$serviceSlug = 'land-clearing';
$currentPage = 'services';

$pageTitle       = 'Land Clearing Greensboro NC | Green Limb Tree Service';
$pageDescription = 'Land clearing in Greensboro, NC for lots, driveways & overgrown acreage. Green Limb Tree Service clears, grinds stumps, hauls debris & grades. Free estimates.';
$canonicalUrl    = $siteUrl . '/services/land-clearing/';

/* Service-specific FAQ (drives the visible FAQ + FAQPage schema) */
$faqs = [
    [
        'q' => 'What determines the cost of land clearing in Greensboro?',
        'a' => 'Land-clearing cost depends on acreage, how dense the trees and brush are, whether stumps need grinding or full removal, and how far debris has to be hauled. Green Limb Tree Service walks every property before quoting so the written estimate reflects your actual lot, not a per-acre guess.',
    ],
    [
        'q' => 'How much land can you clear in a day?',
        'a' => 'A skid-steer and grapple crew can typically clear a half-acre to a full acre of light-to-moderate brush and small trees in a day; larger hardwoods, heavy undergrowth, or multiple acres take longer. Green Limb Tree Service gives you a realistic timeline with your estimate, not a generic average.',
    ],
    [
        'q' => "What's the difference between selective and full clearing?",
        'a' => 'Selective clearing removes brush, undergrowth, and specific trees while keeping the ones you want &mdash; often used along fence lines or around a home site. Full clearing takes everything down to bare, graded ground for a building pad or pasture. Green Limb Tree Service scopes which fits your Greensboro project.',
    ],
    [
        'q' => 'Do I need a permit to clear land in Guilford or Alamance County?',
        'a' => "Residential lot clearing usually doesn't require a county permit, but larger acreage, sites near streams or wetlands, and any new-construction parcel may trigger erosion-control or grading requirements. Green Limb Tree Service flags anything that needs a permit or erosion plan during your on-site assessment.",
    ],
    [
        'q' => 'How long does a land-clearing project take?',
        'a' => 'A residential lot or fence line typically takes one to two days; multi-acre parcels for construction or pasture can run several days to a week depending on tree density and hauling distance. Green Limb Tree Service gives you a firm timeline with the written estimate before work starts.',
    ],
    [
        'q' => 'What happens to the trees, brush, and stumps you clear?',
        'a' => "Green Limb Tree Service grapples logs and brush onto trucks and hauls it off your Greensboro property, and stumps are ground below grade or pulled out completely &mdash; your choice. Nothing gets left in piles or buried on site.",
    ],
];

/* Related services shown in the "Other Services" grid (never the current page) */
$otherServices = [
    [
        'name' => 'Junk Removal', 'slug' => 'junk-removal', 'photo' => '1000005749', 'tint' => 1,
        'alt'  => 'Cleared brush and debris staged for haul-off on a Piedmont property',
        'desc' => 'Already clearing brush? Let us haul the rest of the property clutter away too.',
        'bullets' => ['Yard debris hauled off', 'Property clutter removed', 'One trip, one crew'],
        'icon' => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 6h18"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6"/><path d="M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/><line x1="10" y1="11" x2="10" y2="17"/><line x1="14" y1="11" x2="14" y2="17"/></svg>',
    ],
    [
        'name' => 'Stump Grinding', 'slug' => 'stump-grinding', 'photo' => '1000000569', 'tint' => 2,
        'alt'  => 'Ground stump and mulch after grinding on a Greensboro lawn',
        'desc' => "Left a few stumps in the clear? We'll grind them below grade.",
        'bullets' => ['Ground below grade', 'Removes trip hazards', 'Chips raked or hauled'],
        'icon' => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83Z"/><path d="m22 17.65-9.17 4.16a2 2 0 0 1-1.66 0L2 17.65"/><path d="m22 12.65-9.17 4.16a2 2 0 0 1-1.66 0L2 12.65"/></svg>',
    ],
    [
        'name' => 'Storm Work', 'slug' => 'storm-work', 'photo' => '1000001533', 'tint' => 3,
        'alt'  => 'Green Limb crew clearing a large fallen tree after a storm in Greensboro',
        'desc' => 'Storm knocked trees over on the same lot? We handle that too.',
        'bullets' => ['24/7 emergency call-out', 'Trees off homes & drives', 'Full debris cleanup'],
        'icon' => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.7 7.7a2.5 2.5 0 1 1 1.8 4.3H2"/><path d="M9.6 4.6A2 2 0 1 1 11 8H2"/><path d="M12.6 19.4A2 2 0 1 0 14 16H2"/></svg>',
    ],
];

/* ── Schema: Service (@id) + BreadcrumbList + FAQPage ─────────────────────── */
$serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $canonicalUrl . '#service',
    'serviceType' => 'Land Clearing',
    'name'        => 'Land Clearing in ' . $address['city'] . ', ' . $address['state'],
    'url'         => $canonicalUrl,
    'description' => 'Lot and acreage clearing in Greensboro, NC for new construction, driveways, fence lines, and pastures, with selective or full clearing, stump grinding, and debris haul-off across Guilford and Alamance counties.',
    'provider'    => ['@id' => $siteUrl . '/#organization'],
    'areaServed'  => array_map(function ($a) { return ['@type' => 'City', 'name' => $a]; }, $serviceAreas),
    'offers'      => ['@type' => 'Offer', 'availability' => 'https://schema.org/InStock', 'priceCurrency' => 'USD'],
];
$breadcrumbs = [
    ['name' => 'Home', 'url' => '/'],
    ['name' => 'Services', 'url' => '/services/'],
    ['name' => 'Land Clearing', 'url' => '/services/land-clearing/'],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<script type="application/ld+json"><?php echo json_encode($serviceSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?></script>
<?php echo generateBreadcrumbSchema($breadcrumbs); ?>
<?php echo generateFAQSchema($faqs); ?>

<style>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/service-page.css'; ?>
/* Land Clearing — page-specific accents */
.sp-clearing .pull-quote { color: var(--color-white); }
.sp-clearing .sp-expert-figure { background: color-mix(in srgb, var(--color-primary) 8%, var(--color-surface)); }
</style>

<!-- ═══════════════════════ HERO (interior + lead form) ═══════════════════════ -->
<section class="hero hero--interior sp-hero sp-clearing" id="estimate" aria-label="Land clearing in Greensboro, NC">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a><span class="breadcrumb-sep">/</span>
      <a href="/services/">Services</a><span class="breadcrumb-sep">/</span>
      <span aria-current="page">Land Clearing</span>
    </nav>
    <div class="hero-grid hero-grid--form">

      <div class="hero-copy">
        <span class="eyebrow">Land Clearing &middot; Greensboro, NC</span>
        <h1 class="hero-title">Land Clearing in Greensboro, NC</h1>
        <p class="hero-answer">Green Limb Tree Service clears lots and acreage across Greensboro and the Piedmont for new construction, additions, driveways, fence lines, and pastures. Our skid-steer, grapple, and bucket-truck crew removes trees, brush, and stumps, then hauls debris and grades the site &mdash; leaving a clean, buildable lot, backed by a free on-site estimate.</p>
        <div class="hero-actions">
          <button type="button" class="btn btn-primary btn-lg hero-form-open" data-open-estimate>Get a free estimate</button>
          <a class="link-call" href="tel:<?php echo $phoneRaw; ?>">
            <svg aria-hidden="true" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
            or call <?php echo htmlspecialchars($phone); ?>
          </a>
        </div>
        <ul class="hero-chips">
          <li><svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>Selective or full clearing</li>
          <li><svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2"/><path d="M15 18H9"/><path d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.624l-3.48-4.35A1 1 0 0 0 17.52 8H14"/><circle cx="17" cy="18" r="2"/><circle cx="7" cy="18" r="2"/></svg>Stumps ground, debris hauled</li>
          <li><svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>Guilford &amp; Alamance counties</li>
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
<section class="section section--light" aria-label="When land needs to be cleared">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">Know the signs</span>
      <h2>How do you know your property is ready to be cleared?</h2>
    </div>
    <p class="answer-block reveal-up">A Greensboro lot is ready for clearing when construction plans, overgrown brush, or unusable acreage make the ground impossible to build on, walk, or farm. Green Limb Tree Service walks the property, flags trees worth keeping, and decides whether selective thinning or a full clear best fits your building plans, fence lines, or pasture across the Piedmont.</p>

    <div class="sp-problem-grid">
      <div class="reveal-left">
        <p class="pull-quote">Dense brush, standing dead trees, and stumps in the way are the land telling you it's time to clear.</p>
        <p class="sp-problem-lead">Not every wooded acre needs to be cleared &mdash; but the ones blocking a build, a fence line, or a food plot rarely open up on their own. Clearing it right the first time saves you from redoing site work later.</p>
      </div>
      <div class="sp-signs reveal-right">
        <div class="sp-sign">
          <div class="sp-sign__icon"><svg aria-hidden="true" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M3 9h18"/><path d="M9 21V9"/></svg></div>
          <h3>Building or expanding soon</h3>
          <p>A new home, addition, driveway, or outbuilding needs a clear, graded footprint before the first shovel goes in.</p>
        </div>
        <div class="sp-sign">
          <div class="sp-sign__icon"><svg aria-hidden="true" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22v-5"/><path d="M9 8V2"/><path d="M15 8V2"/><path d="M18 8v0a6 6 0 0 1-6 6 6 6 0 0 1-6-6"/></svg></div>
          <h3>Overgrown brush and undergrowth</h3>
          <p>Vines, saplings, and years of undergrowth have swallowed a fence line, pasture, or side yard you used to walk.</p>
        </div>
        <div class="sp-sign">
          <div class="sp-sign__icon"><svg aria-hidden="true" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8.5 14.5A2.5 2.5 0 0 0 11 12c0-1.38-.5-2-1-3-1.072-2.143-.224-4.054 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 1 1-14 0c0-1.153.433-2.294 1-3a2.5 2.5 0 0 0 2.5 2.5z"/></svg></div>
          <h3>Dead brush is fuel waiting</h3>
          <p>Dry undergrowth and deadfall next to a home or barn is fire and pest fuel that only gets thicker each season.</p>
        </div>
        <div class="sp-sign">
          <div class="sp-sign__icon"><svg aria-hidden="true" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 22h20"/><path d="M6.87 22 8 16m9.13 6L16 16"/><path d="m8 16 4-11 4 11"/><path d="M9.5 12h5"/></svg></div>
          <h3>Acreage you can't use</h3>
          <p>Back acreage, a future food plot, or pastureland stays useless until the trees, brush, and stumps standing on it come out.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════ EXPERT POSITIONING ═══════════════════════ -->
<section class="section" aria-label="Why choose Green Limb for land clearing">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">Why Green Limb</span>
      <h2>Why trust Green Limb with clearing land this size?</h2>
    </div>
    <p class="answer-block reveal-up">Because clearing an acre wrong means stumps left behind, a lot that won't pass grading, or trees taken out you wanted to keep. Green Limb Tree Service runs skid-steer and grapple equipment alongside a bucket-truck crew, scoping every job as selective or full clearing before a blade touches your Greensboro property.</p>

    <div class="sp-expert-grid">
      <div class="sp-expert-figure reveal-left">
        <span class="eyebrow-label">Around the clock</span>
        <span class="big-number">24/7</span>
        <p>Emergency and scheduled clearing calls answered Monday through Saturday across Guilford and Alamance counties &mdash; when a project timeline is tight, we work around it.</p>
      </div>
      <ul class="sp-diffs reveal-right">
        <li class="sp-diff">
          <div class="sp-diff__icon"><svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83Z"/><path d="m22 17.65-9.17 4.16a2 2 0 0 1-1.66 0L2 17.65"/><path d="m22 12.65-9.17 4.16a2 2 0 0 1-1.66 0L2 12.65"/></svg></div>
          <b>Skid-steer &amp; grapple equipment</b>
          <span>Heavy equipment moves brush, logs, and stumps fast on full-acreage jobs instead of hand-clearing everything piece by piece.</span>
        </li>
        <li class="sp-diff">
          <div class="sp-diff__icon"><svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg></div>
          <b>Selective or full clearing</b>
          <span>Keep the specimen oaks and property-line trees you want and clear only what's in the way &mdash; or take it all down to bare, graded ground.</span>
        </li>
        <li class="sp-diff">
          <div class="sp-diff__icon"><svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="m9 12 2 2 4-4"/></svg></div>
          <b>We leave a lot you can use</b>
          <span>Debris hauled off site, stumps ground or pulled, and the ground graded level before we walk it with you.</span>
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- ═══════════════════════ SERVICE BREAKDOWN ═══════════════════════ -->
<section class="section section--light slant-top" aria-label="What a land clearing includes">
  <div class="container">
    <div class="sp-breakdown-grid">
      <div>
        <div class="section-head reveal-up">
          <span class="eyebrow-label">The scope</span>
          <h2>What's included in a Green Limb land clearing?</h2>
        </div>
        <p class="answer-block reveal-up">Every Green Limb Tree Service land-clearing job covers the full scope: an on-site walk of the property, a written estimate, the clearing itself, and hauling and grading when the crew leaves. Whether it's a half-acre building pad or several acres of Piedmont pasture, the price you approve up front is the price you pay.</p>
        <ul class="sp-include-grid reveal-up">
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Free on-site property walk</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Written, firm estimate</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Selective or full clearing plan</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Trees, brush &amp; undergrowth removed</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Stump grinding or removal</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Skid-steer, grapple &amp; bucket-truck equipment</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Debris hauled off site</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Graded, buildable lot left behind</li>
        </ul>
      </div>
      <div class="sp-breakdown-media reveal-right">
        <div class="about-image-primary">
          <?php echo renderPicture('1000001648', 'Skid-steer clearing brush and small trees from a Greensboro building lot', 720, 620, '(max-width: 900px) 100vw, 460px'); ?>
        </div>
      </div>
    </div>

    <div class="section-head reveal-up" style="margin-top: var(--space-16);">
      <span class="eyebrow-label">How it works</span>
      <h3>How does a land-clearing job actually go?</h3>
    </div>
    <ol class="process-steps reveal-up">
      <li>
        <b>Walk &amp; mark</b>
        <span>We walk the acreage with you, mark keep and clear lines, flag utilities and property boundaries, and note access for equipment.</span>
      </li>
      <li>
        <b>Plan the clear</b>
        <span>We decide selective thinning or full clearing, map where the skid-steer and grapple truck will work, and confirm the scope in writing.</span>
      </li>
      <li>
        <b>Clear &amp; haul</b>
        <span>Trees come down, brush and undergrowth get cleared, stumps come out, and everything gets grappled up and hauled off site.</span>
      </li>
      <li>
        <b>Grade &amp; walk it</b>
        <span>We grade the cleared ground level, rake the site, and walk the finished lot with you before we call it done.</span>
      </li>
    </ol>
  </div>
</section>

<!-- ═══════════════════════ PROOF / REVIEWS ═══════════════════════ -->
<section class="section" aria-label="Greensboro customer reviews">
  <div class="container-narrow">
    <div class="section-head prose-centered reveal-up" style="margin-inline: auto;">
      <span class="eyebrow-label">Proof</span>
      <h2>What do Greensboro landowners say about our clearing work?</h2>
    </div>
    <p class="answer-block reveal-up" style="margin-inline: auto;">Green Limb Tree Service is rated by real customers on Google. The reviews below come straight from that verified profile &mdash; Guilford and Alamance County landowners describing lots, driveways, and acreage we've cleared for them. Read them, then <a href="<?php echo htmlspecialchars($googleBusinessProfile); ?>" target="_blank" rel="noopener">see the full listing on Google</a>.</p>
    <div class="reviews-embed reveal-up"><?php echo $elfsightEmbed; ?></div>
  </div>
</section>

<!-- ═══════════════════════ COMPARISON ═══════════════════════ -->
<section class="section section--light" aria-label="Green Limb compared to a bare-bones clearing crew">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">The difference</span>
      <h2>What makes Green Limb different from a bare-bones clearing crew?</h2>
    </div>
    <p class="answer-block reveal-up">The gap shows up in what's missing from a rock-bottom bid: grading, stump removal, and a real haul-off. Green Limb Tree Service prices the whole land-clearing job up front so a cheap quote doesn't turn into stumps still in the ground and brush piles you're stuck burning yourself.</p>
    <div class="sp-compare">
      <div class="sp-compare-col sp-compare-col--them reveal-left">
        <span class="sp-compare-tag">A bare-bones crew</span>
        <h3>What a low bid usually leaves out</h3>
        <ul>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>No proof of insurance on heavy equipment</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>Stumps left standing in the clear</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>Brush and logs piled, not hauled</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>No grading &mdash; you're left with ruts</li>
        </ul>
      </div>
      <div class="sp-compare-col sp-compare-col--us reveal-right">
        <span class="sp-compare-tag" style="color: var(--color-primary);">Green Limb Tree Service</span>
        <h3>How we do a land clearing</h3>
        <ul>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Insured equipment operators, proof on request</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Stumps ground or pulled out</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Debris grappled up &amp; hauled off</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Site graded level &amp; walkable</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════ RECENT WORK ═══════════════════════ -->
<section class="section sp-gallery" aria-label="Recent land clearing projects">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">Recent work</span>
      <h2>What do our Greensboro land-clearing projects look like?</h2>
    </div>
    <div class="sp-gallery-grid" data-p1-dynamic>
      <figure class="sp-gallery-item reveal-scale">
        <?php echo renderPicture('1000001648', 'Skid-steer clearing brush and small trees from a Greensboro building lot', 760, 900, '(max-width: 700px) 100vw, 55vw'); ?>
        <figcaption>Full clear of a wooded lot ahead of new construction</figcaption>
      </figure>
      <figure class="sp-gallery-item reveal-scale reveal-delay-1">
        <?php echo renderPicture('1000005749', 'Cleared brush and debris staged for haul-off on a Piedmont property', 520, 400, '(max-width: 700px) 100vw, 30vw'); ?>
        <figcaption>Brush and debris grappled up and hauled off site</figcaption>
      </figure>
      <figure class="sp-gallery-item reveal-scale reveal-delay-2">
        <?php echo renderPicture('1000001503', 'Bucket truck removing trees along a property line being cleared near Greensboro', 520, 400, '(max-width: 700px) 100vw, 30vw'); ?>
        <figcaption>Selective clearing along a fence line, keeping specimen trees</figcaption>
      </figure>
    </div>
  </div>
</section>

<!-- ═══════════════════════ FAQ ═══════════════════════ -->
<section class="section section--light" aria-label="Land clearing FAQs">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">Good to know</span>
      <h2>What else should I know before clearing my land?</h2>
      <p>Straight answers on cost, acreage, permits, and timing for Greensboro land clearing.</p>
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
<section class="closing-cta texture-grain edge-curve-top sp-final" aria-label="Request a land clearing estimate">
  <span class="grain-layer" aria-hidden="true"></span>
  <span class="floating-ring" aria-hidden="true"></span>
  <div class="container">
    <div>
      <span class="eyebrow-label">Free estimate</span>
      <h2>Ready to get your Greensboro lot cleared?</h2>
      <p>Tell Green Limb Tree Service what you're clearing &mdash; a building lot, a fence line, or overgrown acreage &mdash; and we'll reply the same day with a free on-site estimate for your Guilford or Alamance County property.</p>
      <ul class="sp-final-points">
        <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>Same-day reply</li>
        <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>Insured equipment operators</li>
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
      <h2>What other services pair with a land-clearing project?</h2>
      <p>Most Greensboro clearing jobs pair naturally with these &mdash; ask about bundling on your estimate.</p>
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
