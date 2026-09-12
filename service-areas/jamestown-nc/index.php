<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ── Research sources (2026-09-11) ─────────────────────────────────────────
 * - Wikipedia: Jamestown, North Carolina
 * - Elevation: 820 ft (verified)
 * - Historic Quaker community founded 1762
 * - Richard Mendenhall Homeplace (1811 brick Federal home)
 * - Jamestown Friends' Meeting House (Quaker meetinghouse, active since 1762)
 * - Between Greensboro and High Point along US-311
 * ────────────────────────────────────────────────────────────────────────── */

/* ── Page-level setup ─────────────────────────────────────────────────────── */
$pageType    = 'city';
$citySlug    = 'jamestown-nc';
$currentPage = 'service-areas';

$pageTitle       = 'Tree Service in Jamestown, NC | Green Limb Tree Service';
$pageDescription = 'Professional tree removal, trimming, and storm cleanup in Jamestown, NC. Green Limb Tree Service serves the historic Quaker community from Mendenhall Homeplace to US-311. Free estimates.';
$canonicalUrl    = $siteUrl . '/service-areas/jamestown-nc/';

$heroFormTitle = 'Free estimate in Jamestown';

/* Breadcrumb schema */
$breadcrumbs = [
    ['name' => 'Home', 'url' => '/'],
    ['name' => 'Service Areas', 'url' => '/service-areas/'],
    ['name' => 'Jamestown, NC', 'url' => '/service-areas/jamestown-nc/'],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<?php echo generateBreadcrumbSchema($breadcrumbs); ?>

<style>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/service-page.css'; ?>
.city-jamestown .sp-intro { background: color-mix(in srgb, var(--color-primary) 6%, var(--color-bg)); }
</style>

<!-- ═══════════════════════ HERO (interior + lead form) ═══════════════════════ -->
<section class="hero hero--interior sp-hero city-jamestown" id="estimate" aria-label="Tree service in Jamestown, NC">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a><span class="breadcrumb-sep">/</span>
      <a href="/service-areas/">Service Areas</a><span class="breadcrumb-sep">/</span>
      <span aria-current="page">Jamestown, NC</span>
    </nav>
    <div class="hero-grid hero-grid--form">

      <div class="hero-copy">
        <span class="eyebrow">Tree Service &middot; Jamestown, NC</span>
        <h1 class="hero-title">Tree Service in Jamestown, NC</h1>
        <p class="hero-answer">Green Limb Tree Service provides tree removal, trimming, and emergency storm work in Jamestown—the historic Quaker community between Greensboro and High Point. We handle tree care on properties from the Richard Mendenhall Homeplace district to neighborhoods along US-311 and Oakdale Road.</p>
        <div class="hero-actions">
          <button type="button" class="btn btn-primary btn-lg hero-form-open" data-open-estimate>Get a free estimate</button>
          <a class="link-call" href="tel:<?php echo $phoneRaw; ?>">
            <svg aria-hidden="true" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
            or call <?php echo htmlspecialchars($phone); ?>
          </a>
        </div>
        <ul class="hero-chips">
          <li><svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>Fully insured</li>
          <li><svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v4"/><path d="m6.8 6.8-2.9-2.9"/><path d="M2 12h4"/><path d="M12 22a8 8 0 0 0 0-16"/></svg>Same-day estimates</li>
          <li><svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>Historic district experience</li>
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
    <h2 class="sp-section-title">Tree Care in Jamestown's Historic Quaker Community</h2>
    <div class="answer-block">
      <p><strong>Green Limb Tree Service handles tree removal, trimming, and storm cleanup in Jamestown, the historic Quaker settlement founded in 1762 that sits between Greensboro and High Point.</strong> We work on properties near the Richard Mendenhall Homeplace—a Federal brick home built in 1811—and throughout the neighborhoods that have grown around the Jamestown Friends' Meeting House, which has anchored the community for more than 260 years.</p>
    </div>
    <p>Jamestown sits at 820 feet elevation in southern Guilford County along US-311. The town's Quaker heritage left a legacy of mature oak canopies shading the historic district, and newer residential developments along Oakdale Road and Main Street carry the same Piedmont hardwood stands that define the area. When a tree leans toward a historic structure or a Bradford pear splits in a storm, Green Limb Tree Service responds with the rigging and sectioning techniques needed to work safely near close-set homes and preservation-district properties.</p>
    <p>Jamestown shares the same USDA zone 8a climate and red-clay soil as Greensboro and High Point—warm summers, occasional ice storms in winter, and spring thunderstorms that test tree structure. We've trimmed canopies away from rooflines on older homes near the meetinghouse, removed hazard trees from backyards along the greenway, and cleared storm debris after wind events. Based in Greensboro, Green Limb Tree Service offers same-day estimates throughout Jamestown and southern Guilford County.</p>
  </div>
</section>

<!-- ═══════════════════════ SERVICES IN JAMESTOWN ═══════════════════════ -->
<section class="sp-services">
  <div class="container">
    <h2 class="sp-section-title">What We Do in Jamestown</h2>
    <div class="sp-services-grid">
      <div class="sp-service-item">
        <svg aria-hidden="true" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="6" cy="6" r="3"/><path d="M8.12 8.12 12 12"/><path d="M20 4 8.12 15.88"/><circle cx="6" cy="18" r="3"/><path d="M14.8 14.8 20 20"/></svg>
        <h3>Tree Removal</h3>
        <p>Safe takedowns of hazardous and storm-damaged trees near historic homes and close-set properties, sectioned and rigged from the top down.</p>
      </div>
      <div class="sp-service-item">
        <svg aria-hidden="true" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"/><path d="M10 10.3c.2-.4.5-.8.9-1a2.1 2.1 0 0 1 2.6.4c.3.4.5.8.5 1.3 0 1.3-2 2-2 2"/><path d="M12 17h.01"/></svg>
        <h3>Tree Trimming & Pruning</h3>
        <p>Clearance cuts to lift canopies off roofs and away from power lines, plus structural pruning to extend the life of mature oaks.</p>
      </div>
      <div class="sp-service-item">
        <svg aria-hidden="true" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83Z"/><path d="m22 17.65-9.17 4.16a2 2 0 0 1-1.66 0L2 17.65"/><path d="m22 12.65-9.17 4.16a2 2 0 0 1-1.66 0L2 12.65"/></svg>
        <h3>Stump Grinding</h3>
        <p>Below-grade grinding that removes stumps, eliminates regrowth, and reclaims lawn space.</p>
      </div>
      <div class="sp-service-item">
        <svg aria-hidden="true" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.7 7.7a2.5 2.5 0 1 1 1.8 4.3H2"/><path d="M9.6 4.6A2 2 0 1 1 11 8H2"/><path d="M12.6 19.4A2 2 0 1 0 14 16H2"/></svg>
        <h3>Emergency Storm Cleanup</h3>
        <p>24/7 response for trees down on homes, driveways, and historic structures, with same-day service across Jamestown.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════ LOCAL SPECIFICS ═══════════════════════ -->
<section class="sp-local-details">
  <div class="container">
    <div class="sp-split">
      <div class="sp-split-copy">
        <h2>Why Jamestown Trees Need Professional Care</h2>
        <p>Jamestown's historic district carries mature canopy trees planted generations ago—oaks that shade the Mendenhall Homeplace and the streets around the Friends' Meeting House. These trees define the character of the community, but age and storm exposure mean limb failures and trunk splits that threaten rooflines and driveways. Preventive trimming can extend their lifespan by decades; neglect leads to emergency removals after the tree has already failed.</p>
        <p>Newer neighborhoods along US-311 and Oakdale Road face the same challenges as the rest of the Triad—Bradford pears reaching failure age, shallow-rooted pines toppling in saturated red clay, and ice storms that snap limbs weighted with accumulation. Green Limb Tree Service handles both preservation-minded trimming on historic properties and full removals when a tree is too far gone to save.</p>
        <p>We've worked throughout Jamestown—clearance cuts on mature oaks near the meetinghouse, hazard removals on residential streets, and storm cleanup after wind events. Based minutes away in Greensboro, Green Limb Tree Service offers free on-site estimates and same-day emergency response anywhere in Jamestown.</p>
      </div>
      <div class="sp-split-image">
        <?php echo renderPicture('lift-backyard-removal', 'Backyard tree removal with a spider lift in Greensboro', 600, 400, '(min-width: 768px) 50vw, 100vw', []); ?>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════ CTA BAND ═══════════════════════════ -->
<section class="cta-band">
  <div class="container">
    <div class="cta-band-inner">
      <div class="cta-band-copy">
        <h2>Need Tree Work in Jamestown?</h2>
        <p>Same-day estimates, year-round availability, and fully insured crews. Call us or request a free on-site assessment.</p>
      </div>
      <div class="cta-band-actions">
        <a href="tel:<?php echo $phoneRaw; ?>" class="btn btn-primary btn-lg">Call <?php echo htmlspecialchars($phone); ?></a>
        <button type="button" class="btn btn-secondary btn-lg" data-open-estimate>Request Estimate</button>
      </div>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
