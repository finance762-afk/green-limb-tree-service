<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ── Page-level setup ─────────────────────────────────────────────────────── */
$pageType    = 'service';
$serviceSlug = 'storm-work';
$currentPage = 'services';

$pageTitle       = 'Storm Damage & Emergency Tree Work Greensboro NC | Green Limb Tree Service';
$metaDescription = '24/7 emergency storm tree removal in Greensboro, NC. Green Limb Tree Service clears trees off homes & drives with insurance-friendly photo documentation.';
$canonicalUrl    = $siteUrl . '/services/storm-work/';

/* Service-specific FAQ (drives the visible FAQ + FAQPage schema) */
$faqs = [
    [
        'q' => 'How fast can Green Limb respond after a storm in Greensboro?',
        'a' => 'Green Limb Tree Service answers emergency calls 24 hours a day, Monday through Saturday, and prioritizes trees on homes, cars, and blocked driveways first. Response time depends on storm volume across the Piedmont Triad, but our crew moves as fast as safely possible to get a hazard stabilized or removed.',
    ],
    [
        'q' => 'A tree just fell on my house — what should I do first?',
        'a' => "Get everyone out of the house and away from the damaged area, then call Green Limb Tree Service right away. Avoid walking on or under the tree until our crew arrives to assess stability. We'll stabilize the hazard, remove the tree safely, and document the damage before cleanup begins.",
    ],
    [
        'q' => 'Does Green Limb work with insurance companies for storm damage?',
        'a' => "Green Limb Tree Service doesn't file insurance claims for you, but we document every storm job with photos of the damage and the completed work so you have what you need to support your own claim. We're glad to talk through the scope of work with your adjuster if it helps.",
    ],
    [
        'q' => 'What does after-hours emergency tree service cost in Greensboro?',
        'a' => "Emergency after-hours calls typically cost more than a scheduled daytime removal because of the urgency and crew availability, but Green Limb Tree Service gives you a clear price before any work starts, even in the middle of the night. There's never a surprise bill once you've approved the estimate.",
    ],
    [
        'q' => 'Is it safe to leave a fallen or leaning tree until morning?',
        'a' => 'It depends on what the tree is resting against. A tree fully on the ground away from structures can often wait for daylight, but a tree leaning on your roof, car, or power line is unstable and can shift without warning. Green Limb Tree Service can advise by phone on whether your situation needs immediate attention.',
    ],
    [
        'q' => 'A broken limb is touching a power line — what should I do?',
        'a' => 'Stay well back and call your utility company or 911 immediately — never touch a tree or limb in contact with a power line. Once the utility confirms the line is safe, Green Limb Tree Service can remove the limb and any remaining hazard from your Greensboro property.',
    ],
];

/* Related services shown in the "Other Services" grid (never the current page) */
$otherServices = [
    [
        'name' => 'Tree Removal', 'slug' => 'tree-removal', 'photo' => '1000000569', 'tint' => 1,
        'alt'  => 'Green Limb crew sectioning a storm-damaged tree down on a Greensboro property',
        'desc' => 'Already leaning or split? We take the whole tree down safely.',
        'bullets' => ['Hazardous trees taken down safely', 'Careful rigging near structures', 'Debris hauled & site raked'],
        'icon' => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m17 14 3 3.3a1 1 0 0 1-.7 1.7H4.7a1 1 0 0 1-.7-1.7L7 14h-.3a1 1 0 0 1-.7-1.7L9 9h-.2A1 1 0 0 1 8 7.3L12 3l4 4.3a1 1 0 0 1-.8 1.7H15l3 3.3a1 1 0 0 1-.7 1.7H17Z"/><path d="M12 22v-3"/></svg>',
    ],
    [
        'name' => 'Junk Removal', 'slug' => 'junk-removal', 'photo' => '1000005749', 'tint' => 2,
        'alt'  => 'Green Limb crew hauling storm brush and yard debris from a Greensboro property',
        'desc' => 'We haul off storm brush, limbs, and yard debris fast.',
        'bullets' => ['Brush & debris hauled off', 'Clears yard clutter fast', 'One less thing to handle'],
        'icon' => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 6h18"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6"/><path d="M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/><line x1="10" y1="11" x2="10" y2="17"/><line x1="14" y1="11" x2="14" y2="17"/></svg>',
    ],
    [
        'name' => 'Tree Trimming', 'slug' => 'tree-trimming', 'photo' => '1000000129', 'tint' => 3,
        'alt'  => 'Large canopy tree being trimmed from a bucket truck over a Greensboro back yard',
        'desc' => "Trim weak limbs now to prevent the next storm's damage.",
        'bullets' => ['Reduces future storm damage', 'Clears weak, hanging limbs', 'Improves canopy health'],
        'icon' => '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="6" cy="6" r="3"/><path d="M8.12 8.12 12 12"/><path d="M20 4 8.12 15.88"/><circle cx="6" cy="18" r="3"/><path d="M14.8 14.8 20 20"/></svg>',
    ],
];

/* ── Schema: Service (@id) + BreadcrumbList + FAQPage ─────────────────────── */
$serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $canonicalUrl . '#service',
    'serviceType' => 'Emergency Storm Damage Tree Service',
    'name'        => 'Storm Work in ' . $address['city'] . ', ' . $address['state'],
    'url'         => $canonicalUrl,
    'description' => '24/7 emergency response for storm-damaged and fallen trees in Greensboro, NC, including safe removal from homes and vehicles, hazard stabilization, and full debris cleanup.',
    'provider'    => ['@id' => $siteUrl . '/#organization'],
    'areaServed'  => array_map(function ($a) { return ['@type' => 'City', 'name' => $a]; }, $serviceAreas),
    'offers'      => ['@type' => 'Offer', 'availability' => 'https://schema.org/InStock', 'priceCurrency' => 'USD'],
];
$breadcrumbs = [
    ['name' => 'Home', 'url' => '/'],
    ['name' => 'Services', 'url' => '/services/'],
    ['name' => 'Storm Work', 'url' => '/services/storm-work/'],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<script type="application/ld+json"><?php echo json_encode($serviceSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?></script>
<?php echo generateBreadcrumbSchema($breadcrumbs); ?>
<?php echo generateFAQSchema($faqs); ?>

<style>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/service-page.css'; ?>
/* Storm Work — page-specific accents */
.sp-storm .pull-quote { color: var(--color-white); }
.sp-storm .sp-expert-figure { background: color-mix(in srgb, var(--color-accent) 10%, var(--color-surface)); }
.sp-storm .sp-sign--warning { border-color: color-mix(in srgb, var(--color-accent) 45%, var(--color-line)); background: color-mix(in srgb, var(--color-accent) 8%, var(--color-surface)); }
.sp-storm .sp-sign--warning .sp-sign__icon { color: var(--color-accent-dark); background: color-mix(in srgb, var(--color-accent) 22%, var(--color-white)); }
</style>

<!-- ═══════════════════════ HERO (interior + lead form) ═══════════════════════ -->
<section class="hero hero--interior sp-hero sp-storm" id="estimate" aria-label="Storm damage tree work in Greensboro, NC">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a><span class="breadcrumb-sep">/</span>
      <a href="/services/">Services</a><span class="breadcrumb-sep">/</span>
      <span aria-current="page">Storm Work</span>
    </nav>
    <div class="hero-grid hero-grid--form">

      <div class="hero-copy">
        <span class="eyebrow">Storm Work &middot; Greensboro, NC</span>
        <h1 class="hero-title">Emergency Storm Tree Work in Greensboro, NC</h1>
        <p class="hero-answer">When a storm drops a tree on your home, car, or driveway, Green Limb Tree Service answers the call day or night across Greensboro and the Piedmont Triad. Our crew safely removes trees from structures, stabilizes hanging limbs, documents the damage with photos for your insurance claim, and clears every bit of debris.</p>
        <div class="hero-actions">
          <button type="button" class="btn btn-primary btn-lg hero-form-open" data-open-estimate>Get emergency help now</button>
          <a class="link-call" href="tel:<?php echo $phoneRaw; ?>">
            <svg aria-hidden="true" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
            or call <?php echo htmlspecialchars($phone); ?>
          </a>
        </div>
        <ul class="hero-chips">
          <li><svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>Answered 24/7, Mon&ndash;Sat</li>
          <li><svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.7 7.7a2.5 2.5 0 1 1 1.8 4.3H2"/><path d="M9.6 4.6A2 2 0 1 1 11 8H2"/><path d="M12.6 19.4A2 2 0 1 0 14 16H2"/></svg>Trees off homes, cars &amp; drives</li>
          <li><svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.5 4h-5L7 7H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-3l-2.5-3z"/><circle cx="12" cy="13" r="3"/></svg>Photos for your insurance claim</li>
        </ul>
      </div>

      <aside class="hero-form-card">
        <h2>Need help right now?</h2>
        <p class="hero-form-tagline">Emergency crews answered Mon&ndash;Sat, day or night.</p>
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
          <button type="submit" class="btn btn-primary btn-block">Send my emergency request</button>
        </form>
      </aside>

    </div>
  </div>
</section>

<!-- ═══════════════════════ PROBLEM STATEMENT ═══════════════════════ -->
<section class="section section--light" aria-label="What to do when a tree comes down in a storm">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">Storm hazards</span>
      <h2>What should you do when a tree comes down in a storm?</h2>
    </div>
    <p class="answer-block reveal-up">When a tree comes down in a Greensboro storm, get everyone away from the tree and any sagging power lines, then call Green Limb Tree Service. Our Piedmont Triad crew responds fast to stabilize hazards, safely remove trees from homes and vehicles, and document the damage before cleanup begins.</p>

    <div class="sp-problem-grid">
      <div class="reveal-left">
        <p class="pull-quote">A tree on the roof or a widow-maker limb overhead won't wait for a convenient time.</p>
        <p class="sp-problem-lead">Storm damage rarely announces itself politely &mdash; a fallen tree can block your driveway, crush a car, or leave a cracked limb hanging over the yard. Green Limb Tree Service treats every one of these as urgent, because in Greensboro weather a hazard left alone rarely stays the same size.</p>
      </div>
      <div class="sp-signs reveal-right">
        <div class="sp-sign">
          <div class="sp-sign__icon"><svg aria-hidden="true" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9.5 12 3l9 6.5"/><path d="M5 8v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V8"/></svg></div>
          <h3>Tree on the roof or house</h3>
          <p>A trunk or canopy resting on the roofline can be shifting weight onto framing it was never built to hold.</p>
        </div>
        <div class="sp-sign">
          <div class="sp-sign__icon"><svg aria-hidden="true" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22v-5"/><path d="M9 8V2"/><path d="M15 8V2"/><path d="M18 8v0a6 6 0 0 1-6 6 6 6 0 0 1-6-6"/></svg></div>
          <h3>Hanging &ldquo;widow-maker&rdquo; limbs</h3>
          <p>Broken limbs caught in the canopy overhead can drop without warning long after the wind dies down.</p>
        </div>
        <div class="sp-sign">
          <div class="sp-sign__icon"><svg aria-hidden="true" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m13 2-2 8h4l-3 12"/></svg></div>
          <h3>Uprooted or leaning tree</h3>
          <p>A root plate lifted out of the ground means the tree could go over completely with the next gust.</p>
        </div>
        <div class="sp-sign sp-sign--warning">
          <div class="sp-sign__icon"><svg aria-hidden="true" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"/><path d="M12 9v4"/><path d="M12 17h.01"/></svg></div>
          <h3>Limb touching a power line</h3>
          <p>Never touch a tree in contact with a line &mdash; call the utility company or 911 first, then call us.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════ EXPERT POSITIONING ═══════════════════════ -->
<section class="section" aria-label="Why choose Green Limb for storm response">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">Why Green Limb</span>
      <h2>Why call Green Limb for storm damage instead of waiting?</h2>
    </div>
    <p class="answer-block reveal-up">Storm damage isn't a standard tree job, it's triage. Green Limb Tree Service is a family-owned Greensboro crew trained to size up an unstable tree fast, stabilize what's dangerous, and remove it without causing more damage to your home, vehicle, or the power lines running through your Piedmont Triad yard.</p>

    <div class="sp-expert-grid">
      <div class="sp-expert-figure reveal-left">
        <span class="eyebrow-label">Around the clock</span>
        <span class="big-number">24/7</span>
        <p>Emergency storm calls answered Monday through Saturday across Greensboro and the Piedmont Triad &mdash; when a tree comes down, we're already on the way.</p>
      </div>
      <ul class="sp-diffs reveal-right">
        <li class="sp-diff">
          <div class="sp-diff__icon"><svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg></div>
          <b>Fast, prioritized dispatch</b>
          <span>Trees on homes, cars, and blocked driveways move to the front of the line the moment you call.</span>
        </li>
        <li class="sp-diff">
          <div class="sp-diff__icon"><svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg></div>
          <b>Safe hazard stabilization</b>
          <span>We assess lean, tension, and lines before a saw starts, so an unstable tree doesn't become a second accident.</span>
        </li>
        <li class="sp-diff">
          <div class="sp-diff__icon"><svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.5 4h-5L7 7H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-3l-2.5-3z"/><circle cx="12" cy="13" r="3"/></svg></div>
          <b>Photos for your insurance claim</b>
          <span>We document the damage and the completed work so you have what you need to support your own claim.</span>
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- ═══════════════════════ SERVICE BREAKDOWN ═══════════════════════ -->
<section class="section section--light slant-top" aria-label="What a storm work response includes">
  <div class="container">
    <div class="sp-breakdown-grid">
      <div>
        <div class="section-head reveal-up">
          <span class="eyebrow-label">The scope</span>
          <h2>What's included in Green Limb's storm response?</h2>
        </div>
        <p class="answer-block reveal-up">A Green Limb Tree Service storm call covers the full emergency: fast dispatch, an on-site hazard assessment, safe removal of trees off homes and vehicles, and complete debris haul-off. Every Greensboro job includes photos of the damage so you have documentation to support your insurance claim.</p>
        <ul class="sp-include-grid reveal-up">
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Same-day emergency dispatch</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>On-site hazard assessment</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Trees removed off homes, cars &amp; drives</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Hanging limbs stabilized or removed</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Driveway &amp; access clearing</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Photos for your insurance claim</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Full debris haul-off</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Site raked before we leave</li>
        </ul>
      </div>
      <div class="sp-breakdown-media reveal-right">
        <div class="about-image-primary">
          <?php echo renderPicture('1000001533', 'Green Limb Tree Service crew clearing a large fallen tree after a Piedmont Triad storm', 720, 620, '(max-width: 900px) 100vw, 460px'); ?>
        </div>
      </div>
    </div>

    <div class="section-head reveal-up" style="margin-top: var(--space-16);">
      <span class="eyebrow-label">How it works</span>
      <h3>How does emergency storm response work?</h3>
    </div>
    <ol class="process-steps reveal-up">
      <li>
        <b>Call</b>
        <span>Reach Green Limb Tree Service any hour, any day but Sunday, and describe what's down and where.</span>
      </li>
      <li>
        <b>Assess hazards</b>
        <span>We check for power-line contact, tension, and lean before anyone gets close to the tree.</span>
      </li>
      <li>
        <b>Stabilize &amp; clear</b>
        <span>Hanging limbs come down first, then the tree is sectioned and removed off your home, car, or drive.</span>
      </li>
      <li>
        <b>Document &amp; clean up</b>
        <span>We photograph the damage and the finished work, haul every limb and log, and rake the site before we go.</span>
      </li>
    </ol>
  </div>
</section>

<!-- ═══════════════════════ PROOF / REVIEWS ═══════════════════════ -->
<section class="section" aria-label="Greensboro customer reviews">
  <div class="container-narrow">
    <div class="section-head prose-centered reveal-up" style="margin-inline: auto;">
      <span class="eyebrow-label">Proof</span>
      <h2>What do Greensboro homeowners say about our storm response?</h2>
    </div>
    <p class="answer-block reveal-up" style="margin-inline: auto;">Green Limb Tree Service is rated by real customers on Google. The reviews below come straight from that verified profile &mdash; Greensboro and Piedmont Triad neighbors describing the storm calls and emergency removals we've handled near their homes. Read them, then <a href="<?php echo htmlspecialchars($googleBusinessProfile); ?>" target="_blank" rel="noopener">see the full listing on Google</a>.</p>
    <div class="reviews-embed reveal-up"><?php echo $elfsightEmbed; ?></div>
  </div>
</section>

<!-- ═══════════════════════ COMPARISON ═══════════════════════ -->
<section class="section section--light" aria-label="Green Limb compared to a cut-rate storm crew">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">The difference</span>
      <h2>What makes Green Limb different in an emergency?</h2>
    </div>
    <p class="answer-block reveal-up">The difference shows up when it matters most, at 2 a.m. with a tree on your car. Green Limb Tree Service shows up insured, stabilizes the hazard safely, and cleans up completely, so a stressful storm night in Greensboro doesn't turn into a second disaster from a rushed, uninsured crew.</p>
    <div class="sp-compare">
      <div class="sp-compare-col sp-compare-col--them reveal-left">
        <span class="sp-compare-tag">A cut-rate crew</span>
        <h3>What a storm-chasing crew usually leaves out</h3>
        <ul>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>No after-hours availability when it matters most</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>No documentation of the damage for your records</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>Trees pulled down without a stabilization plan</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>Debris left in your yard overnight</li>
        </ul>
      </div>
      <div class="sp-compare-col sp-compare-col--us reveal-right">
        <span class="sp-compare-tag" style="color: var(--color-primary);">Green Limb Tree Service</span>
        <h3>How we handle a storm call</h3>
        <ul>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Answered 24/7, Monday through Saturday</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Damage photographed for your insurance claim</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Hazards stabilized before anything is cut</li>
          <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Yard cleared and raked the same visit</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════ RECENT WORK ═══════════════════════ -->
<section class="section sp-gallery" aria-label="Recent storm cleanups">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">Recent work</span>
      <h2>What do our Greensboro storm cleanups look like?</h2>
    </div>
    <div class="sp-gallery-grid" data-p1-dynamic>
      <figure class="sp-gallery-item reveal-scale">
        <?php echo renderPicture('1000001533', 'Green Limb crew clearing a large fallen tree after a storm in Greensboro', 760, 900, '(max-width: 700px) 100vw, 55vw'); ?>
        <figcaption>Storm-felled tree cleared from a Greensboro property</figcaption>
      </figure>
      <figure class="sp-gallery-item reveal-scale reveal-delay-1">
        <?php echo renderPicture('1000001503', 'Large storm-damaged tree removed with a bucket truck beside a Greensboro home', 520, 400, '(max-width: 700px) 100vw, 30vw'); ?>
        <figcaption>Bucket-truck takedown of a storm-damaged hazard tree</figcaption>
      </figure>
      <figure class="sp-gallery-item reveal-scale reveal-delay-2">
        <?php echo renderPicture('1000000569', 'Tree sectioned and removed after storm damage on a Greensboro property', 520, 400, '(max-width: 700px) 100vw, 30vw'); ?>
        <figcaption>Storm-damaged tree sectioned down safely</figcaption>
      </figure>
    </div>
  </div>
</section>

<!-- ═══════════════════════ FAQ ═══════════════════════ -->
<section class="section section--light" aria-label="Storm work FAQs">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">Good to know</span>
      <h2>What else should I know about storm damage cleanup?</h2>
      <p>Straight answers on response time, safety, and insurance documentation for Greensboro storm damage.</p>
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
<section class="closing-cta texture-grain edge-curve-top sp-final" aria-label="Request emergency storm tree work">
  <span class="grain-layer" aria-hidden="true"></span>
  <span class="floating-ring" aria-hidden="true"></span>
  <div class="container">
    <div>
      <span class="eyebrow-label">Emergency response</span>
      <h2>Ready to get that storm damage handled safely?</h2>
      <p>Tell Green Limb Tree Service what came down and where, and we'll get back to you the same day &mdash; day or night &mdash; with next steps for your Greensboro property.</p>
      <ul class="sp-final-points">
        <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>24/7 response</li>
        <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>Insured crews</li>
        <li><svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.5 4h-5L7 7H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-3l-2.5-3z"/><circle cx="12" cy="13" r="3"/></svg>Photos for your claim</li>
      </ul>
    </div>
    <div class="actions">
      <a href="tel:<?php echo $phoneRaw; ?>" class="btn btn-accent btn-lg">Call <?php echo htmlspecialchars($phone); ?></a>
      <button type="button" class="btn btn-outline-white btn-lg" data-open-estimate>Request emergency help</button>
    </div>
  </div>
</section>

<!-- ═══════════════════════ OTHER SERVICES ═══════════════════════ -->
<section class="section" aria-label="Other tree services">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">What we do</span>
      <h2>What other tree work can we handle after the storm?</h2>
      <p>Once the immediate hazard is down, ask about these while we're already on site.</p>
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
