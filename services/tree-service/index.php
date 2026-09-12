<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ── Page-level setup ─────────────────────────────────────────────────────── */
$pageType    = 'service';
$serviceSlug = 'tree-service';
$currentPage = 'services';

$pageTitle       = 'Tree Service Greensboro NC | Green Limb Tree Service';
$pageDescription = 'Full-service tree care in Greensboro, NC — pruning, trimming, removals, stump grinding, storm cleanup & land clearing from one insured Green Limb crew.';
$canonicalUrl    = $siteUrl . '/services/tree-service/';

/* Service-specific FAQ (drives the visible FAQ + FAQPage schema) */
$faqs = [
    [
        'q' => 'What tree services does Green Limb Tree Service offer in Greensboro?',
        'a' => 'Green Limb Tree Service handles the full range of tree care for Greensboro properties: pruning, trimming, hazardous and routine removals, stump grinding, storm damage cleanup, and land clearing. Most customers combine two or three of these into a single scheduled visit rather than hiring a different company for each task.',
    ],
    [
        'q' => 'How much does tree service cost in Greensboro?',
        'a' => 'Cost depends entirely on which services you need — a pruning visit runs far less than a large removal with stump grinding and land clearing combined. Green Limb Tree Service walks the property, prices each task individually, and gives you one written estimate covering everything before any work begins.',
    ],
    [
        'q' => 'How often should Piedmont trees be pruned or trimmed?',
        'a' => 'Most mature shade trees in the Greensboro area benefit from structural pruning every two to three years, while young trees and trees near rooflines or power lines often need a look every year. Green Limb Tree Service can set up a maintenance schedule during your first visit so nothing gets overlooked.',
    ],
    [
        'q' => 'Do you work on commercial properties as well as homes?',
        'a' => 'Yes. Green Limb Tree Service maintains trees and clears land for homeowners, HOAs, and Greensboro businesses alike, scheduling larger commercial jobs around your operating hours. The same insured crew and written estimate process applies regardless of property size.',
    ],
    [
        'q' => 'Can you combine multiple tree services into one visit?',
        'a' => "Absolutely — it's how most jobs are booked. A single visit might prune three trees, remove one dead one, grind its stump, and clear a brush pile, all priced on one estimate and finished by the same Green Limb Tree Service crew in one trip.",
    ],
    [
        'q' => 'What happens during a free tree service estimate?',
        'a' => 'A Green Limb Tree Service crew member walks your Greensboro property, looks at every tree, stump, or overgrown area you\'re concerned about, and explains what each option costs and why. You leave with a written price for exactly the work you want — no pressure to book more.',
    ],
];

/* Related services shown in the "Other Services" grid (never the current page) */
$otherServices = [
    [
        'name' => 'Tree Removal', 'slug' => 'tree-removal', 'photo' => '1000000569', 'tint' => 1,
        'alt'  => 'Green Limb Tree Service crew sectioning a hazardous tree down beside a Greensboro home',
        'desc' => 'Already know a tree has to come down? We handle the takedown safely.',
        'bullets' => ['Hazard & dead tree takedowns', 'Rigging near homes & lines', 'Debris hauled same day'],
        'icon' => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 10v.2A3 3 0 0 1 8.9 16H5a3 3 0 0 1-1-5.8V10a3 3 0 0 1 6 0Z"/><path d="M7 16v6"/><path d="M13 19v3"/><path d="M12 19h8.3a1 1 0 0 0 .7-1.7L18 14h.3a1 1 0 0 0 .7-1.7L16 9h.2a1 1 0 0 0 .8-1.7L13 3l-1.4 1.5"/></svg>',
    ],
    [
        'name' => 'Tree Trimming', 'slug' => 'tree-trimming', 'photo' => '1000000129', 'tint' => 2,
        'alt'  => 'Large canopy tree being trimmed from a bucket truck over a Greensboro back yard',
        'desc' => 'Keep healthy trees healthy with routine shaping and clearance.',
        'bullets' => ['Clears roofs & power lines', 'Improves shape & sun access', 'Reduces limb-failure risk'],
        'icon' => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="6" cy="6" r="3"/><path d="M8.12 8.12 12 12"/><path d="M20 4 8.12 15.88"/><circle cx="6" cy="18" r="3"/><path d="M14.8 14.8 20 20"/></svg>',
    ],
    [
        'name' => 'Stump Grinding', 'slug' => 'stump-grinding', 'photo' => '1000001503', 'tint' => 3,
        'alt'  => 'Stump being ground below grade on a Greensboro property',
        'desc' => 'Grind the leftover stump and get the yard back to usable space.',
        'bullets' => ['Ground below grade', 'Removes trip hazards', 'Chips raked or hauled'],
        'icon' => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83Z"/><path d="m22 17.65-9.17 4.16a2 2 0 0 1-1.66 0L2 17.65"/><path d="m22 12.65-9.17 4.16a2 2 0 0 1-1.66 0L2 12.65"/></svg>',
    ],
];

/* ── Schema: Service (@id) + BreadcrumbList + FAQPage ─────────────────────── */
$serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $canonicalUrl . '#service',
    'serviceType' => 'Tree Service',
    'name'        => 'Tree Service in ' . $address['city'] . ', ' . $address['state'],
    'url'         => $canonicalUrl,
    'description' => 'Full-service residential and commercial tree care in Greensboro, NC, including pruning, trimming, removals, stump grinding, storm cleanup, and land clearing from one insured local crew.',
    'provider'    => ['@id' => $siteUrl . '/#organization'],
    'areaServed'  => array_map(function ($a) { return ['@type' => 'City', 'name' => $a]; }, $serviceAreas),
    'offers'      => ['@type' => 'Offer', 'availability' => 'https://schema.org/InStock', 'priceCurrency' => 'USD'],
];
$breadcrumbs = [
    ['name' => 'Home', 'url' => '/'],
    ['name' => 'Services', 'url' => '/services/'],
    ['name' => 'Tree Service', 'url' => '/services/tree-service/'],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<script type="application/ld+json"><?php echo json_encode($serviceSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?></script>
<?php echo generateBreadcrumbSchema($breadcrumbs); ?>
<?php echo generateFAQSchema($faqs); ?>

<style>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/service-page.css'; ?>
/* Tree Service (umbrella) — page-specific accents */
.sp-treeservice .pull-quote { color: var(--color-white) }; }
.sp-treeservice .sp-expert-figure { background: color-mix(in srgb, var(--color-accent) 10%, var(--color-surface)); }
.sp-treeservice .sp-diff__icon { background: color-mix(in srgb, var(--color-secondary) 12%, white); color: var(--color-secondary); }
</style>

<!-- ═══════════════════════ HERO (interior + lead form) ═══════════════════════ -->
<section class="hero hero--interior sp-hero sp-treeservice" id="estimate" aria-label="Tree service in Greensboro, NC">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a><span class="breadcrumb-sep">/</span>
      <a href="/services/">Services</a><span class="breadcrumb-sep">/</span>
      <span aria-current="page">Tree Service</span>
    </nav>
    <div class="hero-grid hero-grid--form">

      <div class="hero-copy">
        <span class="eyebrow">Tree Service &middot; Greensboro, NC</span>
        <h1 class="hero-title">Tree Service in Greensboro, NC</h1>
        <p class="hero-answer">Green Limb Tree Service is Greensboro's full-service tree care crew &mdash; pruning, trimming, removals, stump grinding, storm cleanup, and land clearing under one insured local team. Instead of calling a different contractor for every job, Piedmont homeowners and businesses get the whole property handled in one visit, starting with a free on-site estimate.</p>
        <div class="hero-actions">
          <button type="button" class="btn btn-primary btn-lg hero-form-open" data-open-estimate>Get a free estimate</button>
          <a class="link-call" href="tel:<?php echo $phoneRaw; ?>">
            <svg aria-hidden="true" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
            or call <?php echo htmlspecialchars($phone); ?>
          </a>
        </div>
        <ul class="hero-chips">
          <li><svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>Fully insured crews</li>
          <li><svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83Z"/><path d="m22 17.65-9.17 4.16a2 2 0 0 1-1.66 0L2 17.65"/><path d="m22 12.65-9.17 4.16a2 2 0 0 1-1.66 0L2 12.65"/></svg>Pruning to land clearing</li>
          <li><svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Family-owned, local crew</li>
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
<section class="section section--light" aria-label="Signs your property needs tree service">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">Know the signs</span>
      <h2>How do you know your trees need attention this season?</h2>
    </div>
    <p class="answer-block reveal-up">Most Greensboro properties need more than one kind of tree work at once &mdash; a crowded canopy here, a dead limb there, an old stump nobody's dealt with. Green Limb Tree Service looks at the whole yard during one visit and flags everything that's overdue, from routine pruning to a hazard that needs to come down now.</p>

    <div class="sp-problem-grid">
      <div class="reveal-left">
        <p class="pull-quote">Overgrown limbs, a stump in the yard, and storm debris rarely get fixed by three different phone calls.</p>
        <p class="sp-problem-lead">Homeowners and property managers often collect a list of small tree problems and put off calling anyone until one of them becomes an emergency. Handling the whole list in one visit is usually faster and cheaper than tackling each item separately.</p>
      </div>
      <div class="sp-signs reveal-right">
        <div class="sp-sign">
          <div class="sp-sign__icon"><svg aria-hidden="true" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"/><path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/></svg></div>
          <h3>Canopy crowding the roofline</h3>
          <p>Branches scraping shingles or blocking gutters usually mean it's past time for a trim.</p>
        </div>
        <div class="sp-sign">
          <div class="sp-sign__icon"><svg aria-hidden="true" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.7 7.7a2.5 2.5 0 1 1 1.8 4.3H2"/><path d="M9.6 4.6A2 2 0 1 1 11 8H2"/><path d="M12.6 19.4A2 2 0 1 0 14 16H2"/></svg></div>
          <h3>Storm-damaged or dead limbs</h3>
          <p>Broken wood left hanging after a Piedmont storm is a hazard until it's cut down and hauled off.</p>
        </div>
        <div class="sp-sign">
          <div class="sp-sign__icon"><svg aria-hidden="true" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83Z"/><path d="m22 17.65-9.17 4.16a2 2 0 0 1-1.66 0L2 17.65"/><path d="m22 12.65-9.17 4.16a2 2 0 0 1-1.66 0L2 12.65"/></svg></div>
          <h3>Old stumps eating up the yard</h3>
          <p>A stump left from a prior removal keeps mowers and landscaping plans off that patch of lawn.</p>
        </div>
        <div class="sp-sign">
          <div class="sp-sign__icon"><svg aria-hidden="true" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 12h4"/><path d="M10 8h4"/><path d="M14 21v-3a2 2 0 0 0-4 0v3"/><path d="M6 10H4a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-2"/><path d="M6 21V5a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v16"/></svg></div>
          <h3>Land overgrown before a project</h3>
          <p>A lot or lawn overgrown ahead of a build, sale, or expansion needs clearing before anything else can start.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════ EXPERT POSITIONING ═══════════════════════ -->
<section class="section" aria-label="Why choose Green Limb for full-service tree care">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">Why Green Limb</span>
      <h2>Why should Greensboro properties trust Green Limb with the whole job?</h2>
    </div>
    <p class="answer-block reveal-up">Because juggling separate companies for pruning, removal, and cleanup wastes time and multiplies risk. Green Limb Tree Service is a family-owned Greensboro crew that carries the same insurance and safety standards across every service it offers, so one call covers a property's entire tree-care list instead of three.</p>

    <div class="sp-expert-grid">
      <div class="sp-expert-figure reveal-left">
        <span class="eyebrow-label">Under one roof</span>
        <span class="big-number">6+</span>
        <p>Core tree services &mdash; pruning, trimming, removal, stump grinding, storm cleanup, and land clearing &mdash; from one Greensboro crew, so nothing falls through the cracks between contractors.</p>
      </div>
      <ul class="sp-diffs reveal-right">
        <li class="sp-diff">
          <div class="sp-diff__icon"><svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="6" cy="19" r="3"/><path d="M9 19h8.5a3.5 3.5 0 0 0 0-7h-11a3.5 3.5 0 0 1 0-7H15"/><circle cx="18" cy="5" r="3"/></svg></div>
          <b>One crew, every tree task</b>
          <span>Pruning, trimming, removals, stump grinding, storm cleanup, and land clearing get scheduled together instead of juggling separate companies for each job.</span>
        </li>
        <li class="sp-diff">
          <div class="sp-diff__icon"><svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg></div>
          <b>Insured on every visit</b>
          <span>The same liability coverage and safety practices apply whether we're shaping one ornamental tree or clearing a half-acre lot &mdash; proof available on request.</span>
        </li>
        <li class="sp-diff">
          <div class="sp-diff__icon"><svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
          <b>Ready when storms aren't scheduled</b>
          <span>Routine care fits your calendar; emergency response is available Monday through Saturday, around the clock, when a tree can't wait.</span>
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- ═══════════════════════ SERVICE BREAKDOWN ═══════════════════════ -->
<section class="section section--light slant-top" aria-label="What Green Limb's full tree service includes">
  <div class="container">
    <div class="sp-breakdown-grid">
      <div>
        <div class="section-head reveal-up">
          <span class="eyebrow-label">The scope</span>
          <h2>What's included in Green Limb's full tree service?</h2>
        </div>
        <p class="answer-block reveal-up">A Green Limb Tree Service visit starts with a walk of the entire property, not just the one tree you called about. Every hazard, overgrown area, and old stump gets noted, priced, and combined into a single written estimate so a Greensboro property owner sees the whole picture before any work begins.</p>
        <ul class="sp-include-grid reveal-up">
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Free whole-property walkthrough</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Pruning &amp; structural trimming</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Hazard &amp; dead tree removal</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Stump grinding below grade</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Storm damage cleanup</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Land &amp; brush clearing</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Debris hauled, site raked</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>One written estimate, no surprises</li>
        </ul>
      </div>
      <div class="sp-breakdown-media reveal-right">
        <div class="about-image-primary">
          <?php echo renderPicture('1000001917', 'Green Limb Tree Service crew working a tall shade tree from a bucket lift in Greensboro', 720, 620, '(max-width: 900px) 100vw, 460px'); ?>
        </div>
      </div>
    </div>

    <div class="section-head reveal-up" style="margin-top: var(--space-16);">
      <span class="eyebrow-label">How it works</span>
      <h3>How does a full-service tree care job actually go?</h3>
    </div>
    <ol class="process-steps reveal-up">
      <li>
        <b>Walk &amp; assess</b>
        <span>We walk the whole property, note every tree, stump, and overgrown area, and rank issues by hazard first.</span>
      </li>
      <li>
        <b>Plan &amp; quote</b>
        <span>Every service you need &mdash; pruning, removal, grinding, clearing &mdash; goes into one written estimate and one schedule.</span>
      </li>
      <li>
        <b>Do the work</b>
        <span>The crew works the property in the sequence that protects structures, beds, and anything nearby.</span>
      </li>
      <li>
        <b>Clean &amp; walk it</b>
        <span>Wood, brush, and stump grindings are hauled, the site is raked, and we walk it with you before we leave.</span>
      </li>
    </ol>
  </div>
</section>

<!-- ═══════════════════════ PROOF / REVIEWS ═══════════════════════ -->
<section class="section" aria-label="Greensboro customer reviews">
  <div class="container-narrow">
    <div class="section-head prose-centered reveal-up" style="margin-inline: auto;">
      <span class="eyebrow-label">Proof</span>
      <h2>What do Greensboro property owners say about our tree work?</h2>
    </div>
    <p class="answer-block reveal-up" style="margin-inline: auto;">Green Limb Tree Service is rated by real customers on Google. The reviews below come straight from that verified profile &mdash; homeowners and businesses across Greensboro and the Triad describing pruning, removal, and cleanup work we've done on their property. Read them, then <a href="<?php echo htmlspecialchars($googleBusinessProfile); ?>" target="_blank" rel="noopener">see the full listing on Google</a>.</p>
    <div class="reviews-embed reveal-up"><?php echo $elfsightEmbed; ?></div>
  </div>
</section>

<!-- ═══════════════════════ COMPARISON ═══════════════════════ -->
<section class="section section--light" aria-label="Green Limb compared to hiring separate crews">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">The difference</span>
      <h2>What sets Green Limb apart from hiring around town?</h2>
    </div>
    <p class="answer-block reveal-up">Piecing together tree work from whoever's available usually costs more in the long run. Green Limb Tree Service prices the whole property once, sends one insured crew, and finishes what a patchwork of side jobs and one-off contractors typically leaves half-done.</p>
    <div class="sp-compare">
      <div class="sp-compare-col sp-compare-col--them reveal-left">
        <span class="sp-compare-tag">Hiring around town</span>
        <h3>What piecing it together usually costs you</h3>
        <ul>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>No proof of insurance from a side crew</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>A different company for every task</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>Debris left in a pile "for you to haul"</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>Quotes that change once the truck shows up</li>
        </ul>
      </div>
      <div class="sp-compare-col sp-compare-col--us reveal-right">
        <span class="sp-compare-tag" style="color: var(--color-primary);">Green Limb Tree Service</span>
        <h3>How we handle the whole property</h3>
        <ul>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Insured for every service, proof on request</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>One crew for pruning, removal, grinding &amp; cleanup</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Wood, brush &amp; stumps hauled before we leave</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Firm written price before work starts</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════ RECENT WORK ═══════════════════════ -->
<section class="section sp-gallery" aria-label="Recent tree service work">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">Recent work</span>
      <h2>What does our tree work look like around Greensboro?</h2>
    </div>
    <div class="sp-gallery-grid" data-p1-dynamic>
      <figure class="sp-gallery-item reveal-scale">
        <?php echo renderPicture('1000001917', 'Bucket-truck crew working a mature shade tree above a Greensboro yard', 760, 900, '(max-width: 700px) 100vw, 55vw'); ?>
        <figcaption>Bucket-truck crew shaping a mature shade tree</figcaption>
      </figure>
      <figure class="sp-gallery-item reveal-scale reveal-delay-1">
        <?php echo renderPicture('1000001503', 'Hazard tree removed beside a Greensboro home', 520, 400, '(max-width: 700px) 100vw, 30vw'); ?>
        <figcaption>Hazard tree removed beside a Greensboro home</figcaption>
      </figure>
      <figure class="sp-gallery-item reveal-scale reveal-delay-2">
        <?php echo renderPicture('1000000129', 'Canopy trimmed back from rooflines and power lines on a Greensboro property', 520, 400, '(max-width: 700px) 100vw, 30vw'); ?>
        <figcaption>Canopy trimmed clear of rooflines and power lines</figcaption>
      </figure>
    </div>
  </div>
</section>

<!-- ═══════════════════════ FAQ ═══════════════════════ -->
<section class="section section--light" aria-label="Tree service FAQs">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">Good to know</span>
      <h2>What else should you know about tree service in Greensboro?</h2>
      <p>Straight answers on cost, scheduling, and scope for full-service tree care in Greensboro.</p>
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
<section class="closing-cta texture-grain edge-curve-top sp-final" aria-label="Request a tree service estimate">
  <span class="grain-layer" aria-hidden="true"></span>
  <span class="floating-ring" aria-hidden="true"></span>
  <div class="container">
    <div>
      <span class="eyebrow-label">Free estimate</span>
      <h2>Ready to get your trees handled the right way?</h2>
      <p>Tell Green Limb Tree Service everything on your list &mdash; pruning, a removal, a stump, storm debris &mdash; and we'll reply the same day with one free estimate for your Greensboro property.</p>
      <ul class="sp-final-points">
        <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>Same-day reply</li>
        <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>Insured crews</li>
        <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>One written quote</li>
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
      <h2>What other tree work can Green Limb handle for you?</h2>
      <p>Already know exactly what you need? Jump straight to the service page below.</p>
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
