<?php
/**
 * Blog Index — Green Limb Tree Service
 * Page One Insights Premium Build
 */
$pageTitle       = 'Tree Care Blog | Green Limb Tree Service | Greensboro, NC';
$pageDescription = 'Expert tree care tips, seasonal pruning guides, and cost breakdowns from Green Limb Tree Service — Greensboro\'s family-owned tree service since 2019.';
$currentPage     = 'blog';

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
$canonicalUrl    = $siteUrl . '/blog/';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/blog-data.php';

$schemaMarkup = json_encode([
    '@context'        => 'https://schema.org',
    '@type'           => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $siteUrl . '/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Blog', 'item' => $siteUrl . '/blog/'],
    ],
], JSON_UNESCAPED_SLASHES);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* Blog index page styles — shared .blog-card styles live in framework.css */
.blog-index-hero { background: var(--color-primary); padding-top: calc(var(--nav-height) + var(--space-3xl)); padding-bottom: var(--space-3xl); position: relative; overflow: hidden; }
.blog-index-hero::before { content: ''; position: absolute; inset: 0; background: linear-gradient(135deg, rgba(var(--color-secondary-rgb), 0.4) 0%, transparent 70%); pointer-events: none; }
.blog-index-hero::after { content: ''; position: absolute; inset: 0; background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.05'/%3E%3C/svg%3E"); background-size: 200px 200px; pointer-events: none; }
.blog-index-hero__inner { position: relative; z-index: 1; }
.blog-index-hero__breadcrumb { display: flex; align-items: center; gap: var(--space-sm); font-size: var(--fs-small); color: rgba(255,255,255,0.6); margin-bottom: var(--space-xl); flex-wrap: wrap; }
.blog-index-hero__breadcrumb a { color: rgba(255,255,255,0.6); text-decoration: none; transition: color var(--transition-fast); }
.blog-index-hero__breadcrumb a:hover { color: var(--color-accent); }
.blog-index-hero__breadcrumb-sep { color: rgba(255,255,255,0.3); }
.blog-index-hero h1 { font-family: var(--font-heading); font-size: clamp(2rem, 4vw, 3rem); font-weight: 800; letter-spacing: -0.025em; color: #fff; text-wrap: balance; margin-bottom: var(--space-lg); line-height: 1.1; }
.blog-index-hero h1 em { color: var(--color-accent); font-style: normal; }
.blog-index-hero p { font-size: clamp(0.95rem, 1.5vw, 1.05rem); color: rgba(255,255,255,0.75); max-width: 55ch; line-height: 1.65; }
.divider-blog-hero { background: var(--color-paper); line-height: 0; }
.divider-blog-hero svg { display: block; width: 100%; }
.blog-grid-section { background: var(--color-paper); padding: var(--space-4xl) 0; }
.blog-empty { text-align: center; padding: var(--space-3xl); color: var(--color-muted); }
.blog-cta { background: var(--color-paper-2); border-radius: var(--radius-lg); padding: var(--space-2xl) var(--space-xl); display: flex; align-items: center; gap: var(--space-2xl); margin-top: var(--space-3xl); border: 1px solid var(--color-line); }
.blog-cta__icon { width: 64px; height: 64px; min-width: 64px; background: var(--color-accent); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; }
.blog-cta__icon svg { width: 28px; height: 28px; }
.blog-cta__copy { flex: 1; }
.blog-cta__copy h3 { font-family: var(--font-heading); font-size: clamp(1.05rem, 1.8vw, 1.25rem); font-weight: 800; color: var(--color-primary); margin-bottom: var(--space-xs); text-wrap: balance; }
.blog-cta__copy p { font-size: var(--fs-small); color: var(--color-muted); line-height: 1.6; margin: 0; }
/* Blog card overrides */
.blog-card__image-wrap { position: relative; aspect-ratio: 16 / 10; overflow: hidden; }
.blog-card__image-wrap img { width: 100%; height: 100%; object-fit: cover; transition: transform var(--transition-slow); }
.blog-card:hover .blog-card__image-wrap img { transform: scale(1.05); }
.blog-card__category-badge { position: absolute; top: var(--space-md); left: var(--space-md); background: var(--color-accent); color: #fff; font-family: var(--font-accent); font-size: 0.7rem; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase; padding: 0.35rem 0.7rem; border-radius: var(--radius-sm); }
.blog-card__meta { display: flex; gap: var(--space-md); font-size: var(--fs-small); color: var(--color-muted); margin-bottom: var(--space-sm); }
.blog-card__meta-item { display: flex; align-items: center; gap: 0.3rem; }
.blog-card__meta-item svg { width: 14px; height: 14px; }
.blog-card h2 { font-size: 1.15rem; margin: var(--space-sm) 0; line-height: 1.3; }
.blog-card h2 a { color: var(--color-ink); text-decoration: none; transition: color var(--transition-fast); }
.blog-card h2 a:hover { color: var(--color-accent-dark); }
.blog-card__excerpt { font-size: 0.92rem; color: var(--color-ink-2); margin: 0 0 var(--space-md); line-height: 1.6; }
.blog-card__read-more { display: inline-flex; align-items: center; gap: 0.4rem; font-weight: 600; font-size: 0.9rem; color: var(--color-primary); text-decoration: none; transition: gap var(--transition-fast); }
.blog-card__read-more svg { width: 16px; height: 16px; }
.blog-card__read-more:hover { gap: 0.6rem; color: var(--color-accent-dark); }
@media (max-width: 1024px) {
  .blog-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 767px) {
  body { padding-bottom: 70px; }
  .blog-grid { grid-template-columns: 1fr; }
  .blog-cta { flex-direction: column; text-align: center; }
}
</style>

<!-- ════════════════════════════════════════════════════
     BLOG HERO
════════════════════════════════════════════════════ -->
<section class="blog-index-hero" aria-label="Blog">
  <div class="blog-index-hero__inner">
    <div class="container">

      <nav class="blog-index-hero__breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span class="blog-index-hero__breadcrumb-sep" aria-hidden="true">›</span>
        <span>Blog</span>
      </nav>

      <h1>
        Tree Care Tips from <em>the Experts</em>
      </h1>
      <p>
        Practical advice on tree removal costs, seasonal pruning, storm cleanup, and
        keeping your Greensboro trees healthy year-round.
      </p>

    </div>
  </div>
</section>

<!-- SVG divider -->
<div class="divider-blog-hero" aria-hidden="true">
  <svg viewBox="0 0 1440 50" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 C360,50 1080,0 1440,30 L1440,50 L0,50 Z" fill="var(--color-primary)"/>
  </svg>
</div>

<!-- ════════════════════════════════════════════════════
     BLOG GRID
════════════════════════════════════════════════════ -->
<section class="blog-grid-section" aria-label="Blog posts">
  <div class="container">

    <div class="section-title reveal-up">
      <span class="eyebrow-label">Latest Articles</span>
      <h2>Expert Tree Care <em style="color:var(--color-accent-dark);font-style:normal">Knowledge</em></h2>
    </div>

    <?php if (!empty($blogPosts)): ?>
    <div class="blog-grid">
      <?php foreach ($blogPosts as $idx => $blogPost): ?>
      <article class="blog-card reveal-up reveal-delay-<?php echo min($idx + 1, 3); ?>" aria-label="<?php echo htmlspecialchars($blogPost['title']); ?>">

        <div class="blog-card__image-wrap">
          <img
            src="/assets/images/<?php echo htmlspecialchars($blogPost['image']); ?>-960.webp"
            srcset="/assets/images/<?php echo htmlspecialchars($blogPost['image']); ?>-480.webp 480w,
                    /assets/images/<?php echo htmlspecialchars($blogPost['image']); ?>-960.webp 960w"
            sizes="(max-width: 768px) 100vw, (max-width: 1024px) 50vw, 33vw"
            alt="<?php echo htmlspecialchars($blogPost['alt']); ?>"
            width="800"
            height="500"
            loading="<?php echo $idx === 0 ? 'eager' : 'lazy'; ?>">
          <span class="blog-card__category-badge"><?php echo htmlspecialchars($blogPost['category']); ?></span>
        </div>

        <div class="blog-card__body">
          <div class="blog-card__meta">
            <div class="blog-card__meta-item">
              <?php echo lucide_icon('calendar'); ?>
              <time datetime="<?php echo htmlspecialchars($blogPost['dateISO']); ?>"><?php echo htmlspecialchars($blogPost['date']); ?></time>
            </div>
            <div class="blog-card__meta-item">
              <?php echo lucide_icon('clock'); ?>
              <span><?php echo htmlspecialchars($blogPost['readtime']); ?></span>
            </div>
          </div>

          <h2>
            <a href="/blog/<?php echo htmlspecialchars($blogPost['slug']); ?>/">
              <?php echo htmlspecialchars($blogPost['title']); ?>
            </a>
          </h2>

          <p class="blog-card__excerpt"><?php echo htmlspecialchars($blogPost['excerpt']); ?></p>

          <a href="/blog/<?php echo htmlspecialchars($blogPost['slug']); ?>/" class="blog-card__read-more">
            Read Article <?php echo lucide_icon('arrow-right'); ?>
          </a>
        </div>

      </article>
      <?php endforeach; ?>
    </div><!-- /.blog-grid -->
    <?php else: ?>
    <div class="blog-empty">
      <p>Check back regularly for tree care tips and expert guidance from our team.</p>
    </div>
    <?php endif; ?>

    <!-- CTA -->
    <div class="blog-cta reveal-up">
      <div class="blog-cta__icon" aria-hidden="true">
        <?php echo lucide_icon('tree-pine'); ?>
      </div>
      <div class="blog-cta__copy">
        <h3>Need Tree Service in Greensboro?</h3>
        <p>Green Limb Tree Service provides expert tree removal, trimming, pruning, and emergency storm cleanup across Greensboro and Guilford County. Contact us for a free estimate.</p>
      </div>
      <a href="/contact/" class="btn btn-primary">
        <?php echo lucide_icon('clipboard-list'); ?>
        Get a Free Estimate
      </a>
    </div>

  </div>
</section>

<?php if (!empty($schemaMarkup)): ?>
<script type="application/ld+json"><?php echo $schemaMarkup; ?></script>
<?php endif; ?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
