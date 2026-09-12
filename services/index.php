<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ── Page-level setup ─────────────────────────────────────────────────────── */
$pageType    = 'service';
$currentPage = 'services';

$pageTitle       = 'Tree Services in Greensboro, NC | Green Limb Tree Service';
$pageDescription = 'The full range of tree services in Greensboro, NC from Green Limb Tree Service — tree removal, trimming, pruning, stump grinding, land clearing & 24/7 storm cleanup. Free estimates.';
$canonicalUrl    = $siteUrl . '/services/';

/* Services grid (9 services → orphan rule: featured 2x2 first card). Photos and
   icons come from the client manifest; tints rotate 1→2→3. */
$listServices = [
    [
        'name' => 'Tree Service', 'slug' => 'tree-service', 'photo' => '1000001917', 'tint' => 1, 'featured' => true,
        'alt'  => 'Green Limb crew working a large shade tree from a tracked lift beside a Greensboro home',
        'desc' => 'Full-service tree care for Greensboro homes and businesses, start to finish.',
        'bullets' => ['Pruning to full removals', 'Residential & commercial', 'Site raked clean after'],
        'icon' => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 10v.2A3 3 0 0 1 8.9 16H5a3 3 0 0 1-1-5.8V10a3 3 0 0 1 6 0Z"/><path d="M7 16v6"/><path d="M13 19v3"/><path d="M12 19h8.3a1 1 0 0 0 .7-1.7L18 14h.3a1 1 0 0 0 .7-1.7L16 9h.2a1 1 0 0 0 .8-1.7L13 3l-1.4 1.5"/></svg>',
    ],
    [
        'name' => 'Tree Removal', 'slug' => 'tree-removal', 'photo' => '1000000569', 'tint' => 2,
        'alt'  => 'Dead standing tree being sectioned down with a bucket truck on a Greensboro property',
        'desc' => 'Safe takedown of hazardous, dead, or overgrown trees near structures.',
        'bullets' => ['Careful rigging near homes', 'Dead & storm-weakened trees', 'Debris hauled away'],
        'icon' => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 10V5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v5"/><path d="M14 6a6 6 0 0 1 6 6v3"/><path d="M4 15v-3a6 6 0 0 1 6-6"/><rect x="2" y="15" width="20" height="4" rx="1"/></svg>',
    ],
    [
        'name' => 'Tree Trimming', 'slug' => 'tree-trimming', 'photo' => '1000000129', 'tint' => 3,
        'alt'  => 'Large canopy tree being trimmed from a bucket truck over a Greensboro back yard',
        'desc' => 'Trimming that clears roofs and lines while keeping trees balanced.',
        'bullets' => ['Clears roofs & power lines', 'Improves light and shape', 'Reduces limb-failure risk'],
        'icon' => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="6" cy="6" r="3"/><path d="M8.12 8.12 12 12"/><path d="M20 4 8.12 15.88"/><circle cx="6" cy="18" r="3"/><path d="M14.8 14.8 20 20"/></svg>',
    ],
    [
        'name' => 'Tree Pruning', 'slug' => 'tree-pruning', 'photo' => '1000001917', 'tint' => 1,
        'alt'  => 'Arborist pruning the upper canopy of a mature tree from an aerial lift in Greensboro',
        'desc' => 'Structural and health pruning timed to the season for stronger trees.',
        'bullets' => ['Dormant-season timing', 'Removes weak, crossing limbs', 'Extends the life of oaks'],
        'icon' => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 20h10"/><path d="M10 20c5.5-2.5.8-6.4 3-10"/><path d="M9.5 9.4c1.1.8 1.8 2.2 2.3 3.7-2 .4-3.5.4-4.8-.3-1.2-.6-2.3-1.9-3-4.2 2.8-.5 4.4 0 5.5.8z"/><path d="M14.1 6a7 7 0 0 0-1.1 4c1.9-.1 3.3-.6 4.3-1.4 1-1 1.6-2.3 1.7-4.6-2.7.1-4 1-4.9 2z"/></svg>',
    ],
    [
        'name' => 'Land Clearing', 'slug' => 'land-clearing', 'photo' => '1000001648', 'tint' => 2,
        'alt'  => 'Skid steer and bucket truck clearing a lot of trees and brush in the Greensboro area',
        'desc' => 'Lot and brush clearing for builds, expansions, and reclaiming land.',
        'bullets' => ['New-construction lots', 'Brush & undergrowth', 'Grapple + skid-steer crew'],
        'icon' => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m10 11 11 .9a1 1 0 0 1 .8 1.1l-.665 4.158a1 1 0 0 1-.988.842H20"/><path d="M16 18h-5"/><path d="M18 5a1 1 0 0 0-1 1v5.573"/><path d="M3 4h8.129a1 1 0 0 1 .99.863L13 11.246"/><path d="M4 11V4"/><path d="M7 15h.01"/><path d="M8 10.1V4"/><circle cx="18" cy="18" r="2"/><circle cx="7" cy="15" r="5"/></svg>',
    ],
    [
        'name' => 'Storm Work', 'slug' => 'storm-work', 'photo' => '1000001533', 'tint' => 3,
        'alt'  => 'Green Limb crew cutting up a large fallen tree after a storm in a Greensboro yard',
        'desc' => 'Same-day response for fallen trees and storm-damaged limbs.',
        'bullets' => ['24/7 emergency call-out', 'Trees off homes & drives', 'Full debris cleanup'],
        'icon' => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.7 7.7a2.5 2.5 0 1 1 1.8 4.3H2"/><path d="M9.6 4.6A2 2 0 1 1 11 8H2"/><path d="M12.6 19.4A2 2 0 1 0 14 16H2"/></svg>',
    ],
    [
        'name' => 'Junk Removal', 'slug' => 'junk-removal', 'photo' => '1000005749', 'tint' => 1,
        'alt'  => 'Flatbed truck loaded with cut hardwood logs hauled off a Greensboro job site',
        'desc' => 'Hauling and disposal of yard debris, brush piles, and log wood.',
        'bullets' => ['Brush piles & log wood', 'Post-storm cleanup hauls', 'Left clean and hauled off'],
        'icon' => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2"/><path d="M15 18H9"/><path d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.624l-3.48-4.35A1 1 0 0 0 17.52 8H14"/><circle cx="17" cy="18" r="2"/><circle cx="7" cy="18" r="2"/></svg>',
    ],
    [
        'name' => 'Snow Removal', 'slug' => 'snow-removal', 'photo' => '1000001648', 'tint' => 2,
        'alt'  => 'Green Limb work truck and equipment staged on a cleared Greensboro-area property',
        'desc' => 'Seasonal snow and ice clearing to keep access routes safe.',
        'bullets' => ['Driveways & walkways', 'Ice-storm access clearing', 'Same equipment, same crew'],
        'icon' => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="2" x2="22" y1="12" y2="12"/><line x1="12" x2="12" y1="2" y2="22"/><path d="m20 16-4-4 4-4"/><path d="m4 8 4 4-4 4"/><path d="m16 4-4 4-4-4"/><path d="m8 20 4-4 4 4"/></svg>',
    ],
    [
        'name' => 'Stump Grinding', 'slug' => 'stump-grinding', 'photo' => '1000000569', 'tint' => 3,
        'alt'  => 'Base of a removed tree ready for stump grinding on a Greensboro lawn',
        'desc' => 'Below-grade grinding that clears trip hazards and reclaims lawn.',
        'bullets' => ['Ground below grade', 'Removes trip hazards', 'Reclaims usable yard'],
        'icon' => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83Z"/><path d="m22 17.65-9.17 4.16a2 2 0 0 1-1.66 0L2 17.65"/><path d="m22 12.65-9.17 4.16a2 2 0 0 1-1.66 0L2 12.65"/></svg>',
    ],
];

/* Services-page FAQ */
$faqs = [
    [
        'q' => 'What tree services does Green Limb offer in Greensboro?',
        'a' => 'Green Limb Tree Service handles tree removal, trimming, pruning, stump grinding, land clearing, junk and debris hauling, seasonal snow and ice clearing, and 24/7 storm cleanup across Greensboro and the Piedmont Triad — for both homes and businesses.',
    ],
    [
        'q' => 'Do you handle both residential and commercial tree work?',
        'a' => 'Yes. Green Limb Tree Service works on everything from a single back-yard oak to full commercial lots and land clearing. Whatever the size, you get the same insured local crew and a free written estimate before the work begins.',
    ],
    [
        'q' => 'Is the estimate really free?',
        'a' => 'Yes. Green Limb Tree Service provides a free, no-obligation on-site estimate for every service. We walk the property, flag any hazards, and give you a firm written price — there is no charge just to have us look at the job.',
    ],
    [
        'q' => 'Which areas around Greensboro do you cover?',
        'a' => 'Green Limb Tree Service serves Greensboro and the wider Triad — Guilford and Alamance counties, including High Point, Jamestown, Pleasant Garden, Brown Summit, Burlington, Graham, Haw River, and Mebane. Call and we will confirm you are in range.',
    ],
];

/* ── Schema: BreadcrumbList + ItemList of services ────────────────────────── */
$breadcrumbs = [
    ['name' => 'Home', 'url' => '/'],
    ['name' => 'Services', 'url' => '/services/'],
];
$itemList = [
    '@context' => 'https://schema.org',
    '@type'    => 'ItemList',
    'name'     => 'Tree Services in Greensboro, NC',
    'itemListElement' => array_map(function ($svc, $i) use ($siteUrl) {
        return [
            '@type'    => 'ListItem',
            'position' => $i + 1,
            'name'     => $svc['name'],
            'url'      => $siteUrl . '/services/' . $svc['slug'] . '/',
        ];
    }, $listServices, array_keys($listServices)),
];
$faqSchema = generateFAQSchema($faqs);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<script type="application/ld+json"><?php echo json_encode($itemList, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?></script>
<?php echo generateBreadcrumbSchema($breadcrumbs); ?>
<?php echo $faqSchema; ?>

<style>
/* Services hub — token-only page composition */
.svcx-intro .section-head { max-width: 60ch; }
.svcx-why { align-items: center; }
.svcx-why .about-image-primary { aspect-ratio: 4 / 3.2; }
.svcx-why .about-image-primary img,
.svcx-why .about-image-primary picture { width: 100%; height: 100%; object-fit: cover; }
.svcx-points { display: grid; gap: 1rem; margin: var(--space-4) 0 0; padding: 0; list-style: none; }
.svcx-point { display: grid; grid-template-columns: 44px 1fr; gap: .1rem .9rem; align-items: start; }
.svcx-point__icon { grid-row: span 2; width: 44px; height: 44px; border-radius: 12px; display: grid; place-items: center; color: var(--color-primary); background: color-mix(in srgb, var(--color-primary) 12%, white); }
.svcx-point__icon svg { width: 24px; height: 24px; }
.svcx-point b { font-family: var(--font-heading); font-size: 1.02rem; }
.svcx-point span { color: var(--color-ink-2); font-size: .92rem; }
</style>

<!-- ═══════════════════════ HERO (interior + lead form) ═══════════════════════ -->
<section class="hero hero--interior sp-hero" id="estimate" aria-label="Tree services in Greensboro, NC">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a><span class="breadcrumb-sep">/</span>
      <span aria-current="page">Services</span>
    </nav>
    <div class="hero-grid hero-grid--form">
      <div class="hero-copy">
        <span class="eyebrow">Tree Services &middot; Greensboro, NC</span>
        <h1 class="hero-title">Tree Services in Greensboro, NC</h1>
        <p class="hero-answer">Green Limb Tree Service is a family-owned crew covering the full range of tree work across Greensboro and the Piedmont Triad &mdash; removals, trimming, pruning, stump grinding, land clearing, hauling, and 24/7 storm cleanup, each backed by a free on-site estimate.</p>
        <div class="hero-actions">
          <button type="button" class="btn btn-primary btn-lg hero-form-open" data-open-estimate>Get a free estimate</button>
          <a class="link-call" href="tel:<?php echo $phoneRaw; ?>">
            <svg aria-hidden="true" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
            or call <?php echo htmlspecialchars($phone); ?>
          </a>
        </div>
        <ul class="hero-chips">
          <li><svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>Family-owned &amp; insured</li>
          <li><svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>24/7 storm response</li>
          <li><svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Free on-site estimates</li>
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
              <option value="">What do you need?</option>
              <?php foreach ($services as $heroOpt): ?>
              <option value="<?php echo htmlspecialchars($heroOpt['name']); ?>"><?php echo htmlspecialchars($heroOpt['name']); ?></option>
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

<!-- ═══════════════════════ SERVICES GRID ═══════════════════════ -->
<section class="section section--light svcx-intro" aria-label="All tree services">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">What we do</span>
      <h2>Which <span class="text-accent">tree service</span> does your Greensboro property need?</h2>
      <p class="hero-answer">Green Limb Tree Service covers everything a Greensboro property owner needs to keep trees safe and the lot usable — from a single hazardous removal to full land clearing. Pick a service below for details, or tell us the job and we'll point you the right way.</p>
    </div>

    <div class="services-grid services-grid--featured">
      <?php foreach ($listServices as $i => $svc):
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
  </div>
</section>

<!-- ═══════════════════════ WHY GREEN LIMB ═══════════════════════ -->
<section class="section" aria-label="Why choose Green Limb">
  <div class="container">
    <div class="split svcx-why">
      <div class="reveal-left">
        <span class="eyebrow-label">Why Green Limb</span>
        <h2>Why hire one local crew for all your tree work?</h2>
        <p class="answer-block">Because one insured Greensboro crew that knows your property beats juggling three subcontractors. Green Limb Tree Service handles removals, pruning, stump grinding, and cleanup in-house, so the whole job is coordinated, the site is left clean, and you have one number to call next season.</p>
        <ul class="svcx-points">
          <li class="svcx-point">
            <div class="svcx-point__icon"><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg></div>
            <b>Family-owned and insured</b>
            <span>The people who quote the job are the people who show up and do it — with liability coverage on every visit.</span>
          </li>
          <li class="svcx-point">
            <div class="svcx-point__icon"><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
            <b>Around-the-clock storm response</b>
            <span>When a Piedmont storm drops a tree, we answer 24/7, Monday through Saturday, across the Greensboro metro.</span>
          </li>
          <li class="svcx-point">
            <div class="svcx-point__icon"><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg></div>
            <b>Free written estimates</b>
            <span>Every service starts with an on-site look and a firm written price — no obligation and no surprises.</span>
          </li>
        </ul>
      </div>
      <div class="about-image reveal-right">
        <div class="about-image-primary">
          <?php echo renderPicture('1000001503', 'Green Limb Tree Service crew removing a large tree beside a Greensboro home', 720, 560, '(max-width: 900px) 100vw, 520px'); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════ FAQ ═══════════════════════ -->
<section class="section section--light slant-top" aria-label="Tree services FAQs">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">Good to know</span>
      <h2>What should Greensboro homeowners know about our services?</h2>
      <p>Quick answers on what we cover, who we serve, and how estimates work.</p>
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
<section class="closing-cta texture-grain edge-curve-top" aria-label="Request an estimate">
  <span class="grain-layer" aria-hidden="true"></span>
  <span class="floating-ring" aria-hidden="true"></span>
  <div class="container">
    <div>
      <span class="eyebrow-label">Free estimate</span>
      <h2>Not sure which service you need?</h2>
      <p>Tell Green Limb Tree Service what you're looking at and we'll recommend the right approach and send a free on-site estimate the same day — anywhere in Guilford and Alamance County.</p>
    </div>
    <div class="actions">
      <a href="tel:<?php echo $phoneRaw; ?>" class="btn btn-accent btn-lg">Call <?php echo htmlspecialchars($phone); ?></a>
      <button type="button" class="btn btn-outline-white btn-lg" data-open-estimate>Request an estimate</button>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
