<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ── Research sources (2026-09-11) ─────────────────────────────────────────
 * - Wikipedia: Browns Summit, North Carolina
 * - Elevation: 804 ft (245 m) — verified, highest point on Richmond & Danville Railroad
 * - Friendship Glen subdivision along Friendship Church Road near NC-150
 * - Jesse Brown acquired land 1858, railroad named it Browns Summit 1863
 * ────────────────────────────────────────────────────────────────────────── */

/* ── Page-level setup ─────────────────────────────────────────────────────── */
$pageType    = 'city';
$citySlug    = 'brown-summit-nc';
$currentPage = 'service-areas';

$pageTitle       = 'Tree Service in Brown Summit, NC | Green Limb Tree Service';
$metaDescription = 'Tree removal, land clearing, and storm cleanup in Brown Summit, NC. Green Limb Tree Service handles wooded lots and acreage in the rolling countryside northeast of Greensboro.';
$canonicalUrl    = $siteUrl . '/service-areas/brown-summit-nc/';

$heroFormTitle = 'Free estimate in Brown Summit';

/* Breadcrumb schema */
$breadcrumbs = [
    ['name' => 'Home', 'url' => '/'],
    ['name' => 'Service Areas', 'url' => '/service-areas/'],
    ['name' => 'Brown Summit, NC', 'url' => '/service-areas/brown-summit-nc/'],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<?php echo generateBreadcrumbSchema($breadcrumbs); ?>

<style>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/service-page.css'; ?>
.city-brown-summit .sp-intro { background: color-mix(in srgb, var(--color-primary) 6%, var(--color-bg)); }
</style>

<!-- ═══════════════════════ HERO (interior + lead form) ═══════════════════════ -->
<section class="hero hero--interior sp-hero city-brown-summit" id="estimate" aria-label="Tree service in Brown Summit, NC">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a><span class="breadcrumb-sep">/</span>
      <a href="/service-areas/">Service Areas</a><span class="breadcrumb-sep">/</span>
      <span aria-current="page">Brown Summit, NC</span>
    </nav>
    <div class="hero-grid hero-grid--form">

      <div class="hero-copy">
        <span class="eyebrow">Tree Service &middot; Brown Summit, NC</span>
        <h1 class="hero-title">Tree Service in Brown Summit, NC</h1>
        <p class="hero-answer">Green Limb Tree Service provides tree removal, land clearing, and storm work in Brown Summit—the rural community northeast of Greensboro at the highest point of the old Richmond and Danville Railroad line. We handle wooded lots, acreage, and storm cleanup on properties from Friendship Glen to Yanceyville Road.</p>
        <div class="hero-actions">
          <button type="button" class="btn btn-primary btn-lg hero-form-open" data-open-estimate>Get a free estimate</button>
          <a class="link-call" href="tel:<?php echo $phoneRaw; ?>">
            <svg aria-hidden="true" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
            or call <?php echo htmlspecialchars($phone); ?>
          </a>
        </div>
        <ul class="hero-chips">
          <li><svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3.6 3.6A9 9 0 1 1 14.65 14.65"/><path d="M14.7 9.3 12 12l7 7"/></svg>Land clearing & lot work</li>
          <li><svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v4"/><path d="m6.8 6.8-2.9-2.9"/><path d="M2 12h4"/><path d="M12 22a8 8 0 0 0 0-16"/></svg>Wooded acreage experience</li>
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

<!-- ═══════════════════════ INTRO / ANSWER BLOCK ═══════════════════════ -->
<section class="sp-intro">
  <div class="container-narrow">
    <h2 class="sp-section-title">Rural Tree Care in Brown Summit</h2>
    <div class="answer-block">
      <p><strong>Green Limb Tree Service handles tree work in Brown Summit, the unincorporated community in northeast Guilford County that sits at 804 feet elevation—the highest point on the old Richmond and Danville Railroad line.</strong> We take down hazard trees on wooded lots, clear land for new construction, and respond to storm damage on properties from Friendship Glen subdivision to farms along Friendship Church Road and NC Highway 150.</p>
    </div>
    <p>Brown Summit is a growing rural area with a mix of established neighborhoods and new housing developments spreading west from Yanceyville Road. Lots here run larger than city subdivisions—one to five acres is common—and mature hardwood stands border backyards, driveways, and home sites. When a tree leans toward a house or a property owner wants to clear brush and reclaim land, Green Limb Tree Service brings the equipment and crew to handle it safely.</p>
    <p>The elevation and rolling terrain here mean wind exposure on ridgelines and saturated clay soil in the hollows. Pines drop in ice storms, oaks fail when their canopies overextend past the root plate, and Bradford pears split under their own weight. We've cleared fallen trees from driveways after storms, sectioned hazardous leaners near homes, and ground stumps flush so yards can be mowed clean.</p>
  </div>
</section>

<!-- ═══════════════════════ SERVICES ═══════════════════════ -->
<section class="sp-services">
  <div class="container">
    <h2 class="sp-section-title">What We Do in Brown Summit</h2>
    <div class="sp-services-grid">
      <div class="sp-service-item">
        <svg aria-hidden="true" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="6" cy="6" r="3"/><path d="M8.12 8.12 12 12"/><path d="M20 4 8.12 15.88"/><circle cx="6" cy="18" r="3"/><path d="M14.8 14.8 20 20"/></svg>
        <h3>Tree Removal</h3>
        <p>Safe removal of hazardous trees on wooded lots, sectioned and rigged to avoid structures, fences, and neighboring trees.</p>
      </div>
      <div class="sp-service-item">
        <svg aria-hidden="true" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3.6 3.6A9 9 0 1 1 14.65 14.65"/><path d="M14.7 9.3 12 12l7 7"/></svg>
        <h3>Land Clearing</h3>
        <p>Lot and brush clearing for new home sites, expansions, and reclaiming overgrown property—trees felled, stumps ground, debris hauled.</p>
      </div>
      <div class="sp-service-item">
        <svg aria-hidden="true" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83Z"/><path d="m22 17.65-9.17 4.16a2 2 0 0 1-1.66 0L2 17.65"/><path d="m22 12.65-9.17 4.16a2 2 0 0 1-1.66 0L2 12.65"/></svg>
        <h3>Stump Grinding</h3>
        <p>Below-grade grinding that removes stumps, eliminates regrowth, and reclaims the yard or pasture.</p>
      </div>
      <div class="sp-service-item">
        <svg aria-hidden="true" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.7 7.7a2.5 2.5 0 1 1 1.8 4.3H2"/><path d="M9.6 4.6A2 2 0 1 1 11 8H2"/><path d="M12.6 19.4A2 2 0 1 0 14 16H2"/></svg>
        <h3>Storm Cleanup</h3>
        <p>Emergency response for fallen trees and limbs, with same-day service across northeast Guilford County.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════ LOCAL SPECIFICS ═══════════════════════ -->
<section class="sp-local-details">
  <div class="container">
    <div class="sp-split">
      <div class="sp-split-copy">
        <h2>Why Brown Summit Properties Need Professional Tree Care</h2>
        <p>Brown Summit sits in rolling Piedmont terrain where wooded lots mean mature hardwood stands close to homes. Oaks and maples that were saplings when the subdivision was platted are now overextending canopies, leaning toward rooflines, and dropping limbs in summer storms. The same wind exposure that made Jesse Brown's farm the high point of the railroad line in 1863 still tests tree structure today.</p>
        <p>Red clay soil holds water poorly when saturated, so root plates lift and trees topple in storms. Ice accumulation snaps pines and splits Bradford pears, and when a tree comes down on a fence or blocks a driveway, access for removal equipment matters. Green Limb Tree Service handles tight-access jobs and open acreage alike—bucket truck work near homes and chainsaw felling on back lots.</p>
        <p>We've worked throughout the Friendship Church Road corridor and along NC-150, clearing land for expansions, removing hazard trees before they fail, and grinding stumps so lawns can be reclaimed. If you're in Brown Summit or anywhere in northeast Guilford County, Green Limb Tree Service offers free on-site estimates and same-day emergency response.</p>
      </div>
      <div class="sp-split-image">
        <?php echo renderPicture('1000001917', 'Tree removal equipment on a wooded property in rural Guilford County', 600, 400, '(min-width: 768px) 50vw, 100vw', []); ?>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════ CTA BAND ═══════════════════════════ -->
<section class="cta-band">
  <div class="container">
    <div class="cta-band-inner">
      <div class="cta-band-copy">
        <h2>Need Tree Work in Brown Summit?</h2>
        <p>Free on-site estimates for removal, land clearing, and storm cleanup. Call or request a quote online.</p>
      </div>
      <div class="cta-band-actions">
        <a href="tel:<?php echo $phoneRaw; ?>" class="btn btn-primary btn-lg">Call <?php echo htmlspecialchars($phone); ?></a>
        <button type="button" class="btn btn-secondary btn-lg" data-open-estimate>Request Estimate</button>
      </div>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
