<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ── Page-level setup ─────────────────────────────────────────────────────── */
$pageType    = 'other';
$currentPage = 'service-areas';

$pageTitle       = 'Tree Service Areas in Guilford & Alamance Counties | Green Limb Tree Service';
$pageDescription = 'Green Limb Tree Service provides tree removal, trimming, pruning, and storm cleanup across Greensboro, High Point, Burlington, and surrounding Piedmont communities.';
$canonicalUrl    = $siteUrl . '/service-areas/';

/* Breadcrumb schema */
$breadcrumbs = [
    ['name' => 'Home', 'url' => '/'],
    ['name' => 'Service Areas', 'url' => '/service-areas/'],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<?php echo generateBreadcrumbSchema($breadcrumbs); ?>

<style>
/* Service Areas Overview — page-specific styles */
.areas-hero {
  background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%);
  color: var(--color-white);
  padding: calc(var(--nav-height) + 4rem) 0 4rem;
  position: relative;
  overflow: hidden;
}
.areas-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none"><path d="M0,50 Q300,100 600,50 T1200,50 L1200,120 L0,120 Z" fill="rgba(255,255,255,0.03)"/></svg>') repeat-x bottom;
  background-size: 1200px 120px;
  opacity: 0.6;
  pointer-events: none;
}
.areas-hero .container { position: relative; z-index: 1; max-width: 800px; text-align: center; }
.areas-hero .breadcrumb { justify-content: center; margin-bottom: 1.5rem; }
.areas-hero .breadcrumb a { color: rgba(255,255,255,0.8); }
.areas-hero .breadcrumb a:hover { color: var(--color-white); }
.areas-hero h1 { font-size: clamp(2rem, 5vw, 2.75rem); margin-bottom: 1rem; color: var(--color-white); }
.areas-hero .breadcrumb span, .areas-hero .breadcrumb [aria-current] { color: rgba(255,255,255,0.95); }
.areas-hero p { font-size: 1.125rem; line-height: 1.6; color: rgba(255,255,255,0.9); max-width: 65ch; margin: 0 auto 2rem; }

.areas-grid-section { padding: 4rem 0; background: var(--color-bg); }
.areas-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 1.5rem; margin-top: 3rem; }
.area-card {
  background: var(--color-white);
  border-radius: var(--radius);
  padding: 1.5rem;
  box-shadow: var(--shadow-sm);
  transition: var(--transition);
  border: 1px solid var(--color-border);
  display: flex;
  flex-direction: column;
}
.area-card:hover {
  box-shadow: var(--shadow);
  transform: translateY(-2px);
  border-color: var(--color-primary);
}
.area-card h3 {
  font-size: 1.25rem;
  margin-bottom: 0.5rem;
  color: var(--color-primary);
  display: flex;
  align-items: center;
  gap: 0.5rem;
}
.area-card h3 svg { flex-shrink: 0; }
.area-card p { font-size: 0.9375rem; line-height: 1.6; color: var(--color-text-light); margin-bottom: 1rem; flex-grow: 1; }
.area-card .btn {
  align-self: flex-start;
  padding: 0.5rem 1.25rem;
  font-size: 0.875rem;
}

.coverage-map {
  background: var(--color-white);
  border-radius: var(--radius);
  padding: 2rem;
  box-shadow: var(--shadow-sm);
  margin-top: 3rem;
}
.coverage-map h3 { margin-bottom: 1rem; }
.coverage-map ul {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 0.75rem 1.5rem;
  list-style: none;
  padding: 0;
  margin: 0;
}
.coverage-map li {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  font-size: 0.9375rem;
  color: var(--color-text);
}
.coverage-map li svg { flex-shrink: 0; color: var(--color-accent); }

@media (max-width: 768px) {
  .areas-hero { padding: calc(var(--nav-height) + 2rem) 0 2rem; }
  .areas-grid { grid-template-columns: 1fr; gap: 1rem; }
  .coverage-map ul { grid-template-columns: 1fr; }
}
</style>

<!-- ═══════════════════════════ HERO ════════════════════════════════ -->
<section class="areas-hero">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a><span class="breadcrumb-sep">/</span>
      <span aria-current="page">Service Areas</span>
    </nav>
    <h1>Tree Care Across Greensboro & the Piedmont Triad</h1>
    <p>Green Limb Tree Service operates throughout Guilford and Alamance Counties, providing professional tree removal, trimming, pruning, and emergency storm cleanup from the rolling hills of Brown Summit to the historic neighborhoods of Graham.</p>
    <a href="tel:<?php echo $phoneRaw; ?>" class="btn btn-primary btn-lg">Call <?php echo htmlspecialchars($phone); ?></a>
  </div>
</section>

<!-- ═══════════════════════ SERVICE AREAS GRID ═══════════════════════ -->
<section class="areas-grid-section">
  <div class="container">
    <h2 class="section-title">Cities & Communities We Serve</h2>
    <p class="section-subtitle">Same-day estimates, year-round availability, and fully insured crews in every service area.</p>

    <div class="areas-grid">
      <?php
      $areaCards = [
        [
          'name'  => 'Greensboro',
          'slug'  => 'greensboro-nc',
          'desc'  => 'Our home base. Serving every Greensboro neighborhood from Fisher Park to Lake Brandt, with same-day emergency response across the city.',
          'county' => 'Guilford County',
        ],
        [
          'name'  => 'High Point',
          'slug'  => 'high-point-nc',
          'desc'  => 'Tree care across the Furniture Capital—from historic Quaker communities to new developments along Eastchester Drive.',
          'county' => 'Guilford County',
        ],
        [
          'name'  => 'Burlington',
          'slug'  => 'burlington-nc',
          'desc'  => 'Full-service tree work in Alamance County\'s largest city, from downtown Burlington to Morgantown and Lakeview.',
          'county' => 'Alamance County',
        ],
        [
          'name'  => 'Brown Summit',
          'slug'  => 'brown-summit-nc',
          'desc'  => 'Rural tree care on wooded lots and acreage in the rolling countryside northeast of Greensboro.',
          'county' => 'Guilford County',
        ],
        [
          'name'  => 'Jamestown',
          'slug'  => 'jamestown-nc',
          'desc'  => 'Tree removal and trimming in this historic Quaker town between Greensboro and High Point.',
          'county' => 'Guilford County',
        ],
        [
          'name'  => 'Pleasant Garden',
          'slug'  => 'pleasant-garden-nc',
          'desc'  => 'Serving large-lot homes and rural properties from Steeple Chase to Randleman Road corridors.',
          'county' => 'Guilford County',
        ],
        [
          'name'  => 'Graham',
          'slug'  => 'graham-nc',
          'desc'  => 'County-seat tree services—removal, trimming, and storm work around the Alamance County Courthouse district.',
          'county' => 'Alamance County',
        ],
        [
          'name'  => 'Mebane',
          'slug'  => 'mebane-nc',
          'desc'  => 'Tree care in the "Positively Charming" city straddling Alamance and Orange Counties.',
          'county' => 'Alamance County',
        ],
        [
          'name'  => 'Haw River',
          'slug'  => 'haw-river-nc',
          'desc'  => 'Small-town tree work along the Haw River corridor in western Alamance County.',
          'county' => 'Alamance County',
        ],
      ];

      foreach ($areaCards as $card):
        $areaPath = '/service-areas/' . $card['slug'] . '/';
        $pageExists = is_dir($_SERVER['DOCUMENT_ROOT'] . $areaPath);
      ?>
      <div class="area-card">
        <h3>
          <svg aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>
          <?php echo htmlspecialchars($card['name']); ?>
        </h3>
        <p><?php echo htmlspecialchars($card['desc']); ?></p>
        <span class="footnote" style="margin-bottom: 1rem; display: block; color: var(--color-accent);"><?php echo htmlspecialchars($card['county']); ?></span>
        <?php if ($pageExists): ?>
          <a href="<?php echo $areaPath; ?>" class="btn btn-secondary">Learn More</a>
        <?php else: ?>
          <a href="#estimate" class="btn btn-secondary">Get Free Estimate</a>
        <?php endif; ?>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- Coverage Map Summary -->
    <div class="coverage-map">
      <h3>Full County Coverage</h3>
      <ul role="list">
        <?php foreach ($serviceAreas as $area): ?>
        <li>
          <svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
          <?php echo htmlspecialchars($area); ?>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>

<!-- ═══════════════════════════ CTA BAND ═══════════════════════════ -->
<section class="cta-band">
  <div class="container">
    <div class="cta-band-inner">
      <div class="cta-band-copy">
        <h2>Not Sure If We Serve Your Area?</h2>
        <p>We work throughout the Piedmont Triad. If you're near Greensboro, High Point, or Burlington, chances are we can help. Call us or request a free on-site estimate.</p>
      </div>
      <div class="cta-band-actions">
        <a href="tel:<?php echo $phoneRaw; ?>" class="btn btn-primary btn-lg">Call <?php echo htmlspecialchars($phone); ?></a>
        <button type="button" class="btn btn-secondary btn-lg" data-open-estimate>Request Estimate</button>
      </div>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
