<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ── Research sources (2026-09-11) ─────────────────────────────────────────
 * - Wikipedia: Graham, North Carolina
 * - Elevation: 594 ft (verified)
 * - Alamance County seat
 * - Alamance County Courthouse built 1923 (Classical Revival)
 * - Graham Historic District, North Main Street Historic District
 * ────────────────────────────────────────────────────────────────────────── */

/* ── Page-level setup ─────────────────────────────────────────────────────── */
$pageType    = 'city';
$citySlug    = 'graham-nc';
$currentPage = 'service-areas';

$pageTitle       = 'Tree Service in Graham, NC | Green Limb Tree Service';
$pageDescription = 'Professional tree removal, trimming, and storm cleanup in Graham, NC. Green Limb Tree Service serves the Alamance County seat from the Historic District to North Main Street. Free estimates.';
$canonicalUrl    = $siteUrl . '/service-areas/graham-nc/';

$heroFormTitle = 'Free estimate in Graham';

/* Breadcrumb schema */
$breadcrumbs = [
    ['name' => 'Home', 'url' => '/'],
    ['name' => 'Service Areas', 'url' => '/service-areas/'],
    ['name' => 'Graham, NC', 'url' => '/service-areas/graham-nc/'],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<?php echo generateBreadcrumbSchema($breadcrumbs); ?>

<style>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/service-page.css'; ?>
.city-graham .sp-intro { background: color-mix(in srgb, var(--color-primary) 6%, var(--color-bg)); }
</style>

<!-- ═══════════════════════ HERO (interior + lead form) ═══════════════════════ -->
<section class="hero hero--interior sp-hero city-graham" id="estimate" aria-label="Tree service in Graham, NC">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a><span class="breadcrumb-sep">/</span>
      <a href="/service-areas/">Service Areas</a><span class="breadcrumb-sep">/</span>
      <span aria-current="page">Graham, NC</span>
    </nav>
    <div class="hero-grid hero-grid--form">

      <div class="hero-copy">
        <span class="eyebrow">Tree Service &middot; Graham, NC</span>
        <h1 class="hero-title">Tree Service in Graham, NC</h1>
        <p class="hero-answer">Green Limb Tree Service provides tree removal, trimming, and emergency storm work in Graham—the Alamance County seat. We handle tree care from the Graham Historic District to North Main Street, on properties near the 1923 Classical Revival courthouse and throughout the neighborhoods that surround downtown.</p>
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
    <h2 class="sp-section-title">Tree Care in Graham—Alamance County's Historic Seat</h2>
    <div class="answer-block">
      <p><strong>Green Limb Tree Service handles tree removal, trimming, and storm cleanup throughout Graham, the Alamance County seat at 594 feet elevation.</strong> We work on properties from the Graham Historic District to North Main Street Historic District, near the Classical Revival courthouse built in 1923, and throughout the residential neighborhoods that surround downtown. Every job starts with a free on-site estimate.</p>
    </div>
    <p>Graham's status as county seat since 1849 left a legacy of mature canopy trees shading the courthouse square and the streets radiating from downtown. Oak and maple trees planted in the late 1800s and early 1900s now overhang rooflines and driveways on close-set lots where rigging and sectioning are the only safe way to bring a tree down without collateral damage.</p>
    <p>Green Limb Tree Service is based in Greensboro and runs tree work throughout Graham and Alamance County. We've trimmed canopies away from historic homes in the North Main Street district, removed hazard trees from residential streets near the courthouse, and cleared storm debris after wind events. When you need tree work in Graham, Green Limb Tree Service offers same-day estimates and 24/7 emergency response.</p>
  </div>
</section>

<!-- ═══════════════════════ SERVICES IN GRAHAM ═══════════════════════ -->
<section class="sp-services">
  <div class="container">
    <h2 class="sp-section-title">What We Do in Graham</h2>
    <div class="sp-services-grid">
      <div class="sp-service-item">
        <svg aria-hidden="true" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="6" cy="6" r="3"/><path d="M8.12 8.12 12 12"/><path d="M20 4 8.12 15.88"/><circle cx="6" cy="18" r="3"/><path d="M14.8 14.8 20 20"/></svg>
        <h3>Tree Removal</h3>
        <p>Safe takedowns of hazardous trees near historic structures and close-set homes, sectioned and rigged from the top down.</p>
      </div>
      <div class="sp-service-item">
        <svg aria-hidden="true" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"/><path d="M10 10.3c.2-.4.5-.8.9-1a2.1 2.1 0 0 1 2.6.4c.3.4.5.8.5 1.3 0 1.3-2 2-2 2"/><path d="M12 17h.01"/></svg>
        <h3>Tree Trimming & Pruning</h3>
        <p>Clearance and structural cuts to preserve mature trees, reduce failure risk, and keep canopies clear of roofs and lines.</p>
      </div>
      <div class="sp-service-item">
        <svg aria-hidden="true" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83Z"/><path d="m22 17.65-9.17 4.16a2 2 0 0 1-1.66 0L2 17.65"/><path d="m22 12.65-9.17 4.16a2 2 0 0 1-1.66 0L2 12.65"/></svg>
        <h3>Stump Grinding</h3>
        <p>Below-grade grinding that removes stumps, eliminates regrowth, and reclaims lawn and streetscape space.</p>
      </div>
      <div class="sp-service-item">
        <svg aria-hidden="true" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.7 7.7a2.5 2.5 0 1 1 1.8 4.3H2"/><path d="M9.6 4.6A2 2 0 1 1 11 8H2"/><path d="M12.6 19.4A2 2 0 1 0 14 16H2"/></svg>
        <h3>Emergency Storm Cleanup</h3>
        <p>24/7 response for fallen trees and storm damage, with same-day service across Graham and Alamance County.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════ LOCAL SPECIFICS ═══════════════════════ -->
<section class="sp-local-details">
  <div class="container">
    <div class="sp-split">
      <div class="sp-split-copy">
        <h2>Why Graham Trees Need Professional Care</h2>
        <p>Graham's historic districts carry canopy oaks and maples that have stood for a century or more—shade trees that define the character of the courthouse square and North Main Street but have outlived their structural prime. Limbs extend past their balance point, deadwood accumulates in the crown, and root plates lift in saturated clay soil. When a tree this old fails, it rarely falls without hitting a historic structure, a parked car, or a fence.</p>
        <p>Newer residential streets outside the historic core face the same challenges as the rest of Alamance County—Bradford pears splitting under their own weight, shallow-rooted pines toppling in summer storms, and ice accumulation that snaps limbs and brings down canopies. Green Limb Tree Service handles both preventive trimming to extend the life of trees worth saving and emergency removals when a tree has already failed.</p>
        <p>We've worked throughout Graham—on historic properties near the courthouse, on residential streets radiating from downtown, and in the newer subdivisions along the edges of the city limits. Based in Greensboro, Green Limb Tree Service offers free on-site estimates and same-day emergency response anywhere in Alamance County.</p>
      </div>
      <div class="sp-split-image">
        <?php echo renderPicture('bucket-truck-tree-trimming', 'Green Limb bucket truck crew trimming a tall tree over a Greensboro yard', 600, 400, '(min-width: 768px) 50vw, 100vw', []); ?>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════ CTA BAND ═══════════════════════════ -->
<section class="cta-band">
  <div class="container">
    <div class="cta-band-inner">
      <div class="cta-band-copy">
        <h2>Need Tree Work in Graham?</h2>
        <p>Free on-site estimates, same-day emergency response, fully insured crews. Call or request a quote online.</p>
      </div>
      <div class="cta-band-actions">
        <a href="tel:<?php echo $phoneRaw; ?>" class="btn btn-primary btn-lg">Call <?php echo htmlspecialchars($phone); ?></a>
        <button type="button" class="btn btn-secondary btn-lg" data-open-estimate>Request Estimate</button>
      </div>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
