<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$pageTitle       = "About Us | Expert Tree Care in Greensboro, NC | $siteName";
$metaDescription = "Learn about $siteName — a family-owned tree care company serving Greensboro and surrounding areas. ISA-certified arborists providing safe, professional tree services since day one.";
$canonicalUrl    = $siteUrl . '/about/';
$ogImage         = $siteUrl . '/assets/images/1000001503.jpg';
$currentPage     = 'about';
$pageType        = 'about';

// Breadcrumb schema
$breadcrumbs = [
    ['name' => 'Home', 'url' => '/'],
    ['name' => 'About Us', 'url' => '/about/']
];
$schemaMarkup = generateBreadcrumbSchema($breadcrumbs);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<!-- Hero -->
<section class="hero hero--interior">
    <div class="container">
        <div class="hero-content">
            <span class="eyebrow">Who We Are</span>
            <h1>Family-Owned Tree Care You Can Trust</h1>
            <p class="hero-answer">Green Limb Tree Service brings 20+ years of Piedmont tree expertise to every job — from emergency storm cleanup to preventive canopy health treatments.</p>
        </div>
    </div>
</section>

<!-- About Story -->
<section class="section" style="background: var(--color-bg); padding: var(--space-4xl) 0;">
    <div class="container">
        <div class="split" style="gap: var(--space-3xl); align-items: center;">
            <div class="split-content">
                <span class="eyebrow">Our Story</span>
                <h2>Built on Greensboro's Urban Forest</h2>
                <div class="prose">
                    <p>Green Limb Tree Service is a family-owned and locally trusted tree care company dedicated to keeping your property safe, healthy, and looking its best. We provide reliable tree removals, trimming and pruning, storm cleanup, and other tree services with a focus on quality workmanship, safety, and customer satisfaction.</p>

                    <p>What sets us apart is our deep knowledge of Piedmont ecology. We're not just removing trees — we're diagnosing problems, preventing damage, and preserving the mature canopy that makes Greensboro neighborhoods beautiful. Our ISA-certified arborists combine technical expertise with genuine care for your property's long-term health.</p>

                    <p>We take pride in treating every property like our own and getting the job done right. Whether you need emergency storm damage response, routine tree health treatments, or a comprehensive 5-year care plan, we bring the same attention to detail and professionalism to every project.</p>
                </div>
            </div>
            <div class="split-image">
                <?php echo renderPicture('1000001503', 'Green Limb Tree Service crew at work on a tree removal project in Greensboro', 800, 600, '(min-width: 1024px) 45vw, (min-width: 768px) 50vw, 100vw'); ?>
            </div>
        </div>
    </div>
</section>

<!-- Values -->
<section class="section" style="background: var(--color-bg-alt); padding: var(--space-4xl) 0;">
    <div class="container">
        <div class="section-header text-center" style="margin-bottom: var(--space-3xl);">
            <span class="eyebrow">What Drives Us</span>
            <h2>Our Core Values</h2>
            <p class="section-subtitle">The principles that guide every project we take on</p>
        </div>

        <div class="grid-3" style="gap: var(--space-2xl);">
            <div class="card" style="padding: var(--space-2xl); text-align: center;">
                <div style="width: 64px; height: 64px; margin: 0 auto var(--space-lg); background: rgba(var(--color-primary-rgb), 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <svg aria-hidden="true" width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"/><path d="m9 12 2 2 4-4"/></svg>
                </div>
                <h3 style="font-size: 1.25rem; margin-bottom: var(--space-sm); color: var(--color-primary);">Safety First</h3>
                <p style="color: var(--color-text-light); line-height: 1.6;">Every crew member is fully insured, trained in OSHA safety protocols, and equipped with commercial-grade safety gear. We protect your property and our team on every job.</p>
            </div>

            <div class="card" style="padding: var(--space-2xl); text-align: center;">
                <div style="width: 64px; height: 64px; margin: 0 auto var(--space-lg); background: rgba(var(--color-primary-rgb), 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <svg aria-hidden="true" width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v20M2 12h20"/><circle cx="12" cy="12" r="10"/></svg>
                </div>
                <h3 style="font-size: 1.25rem; margin-bottom: var(--space-sm); color: var(--color-primary);">Expert Care</h3>
                <p style="color: var(--color-text-light); line-height: 1.6;">Our ISA-certified arborists understand Piedmont tree species, seasonal care timing, and the local climate challenges your trees face. Expert diagnosis leads to better outcomes.</p>
            </div>

            <div class="card" style="padding: var(--space-2xl); text-align: center;">
                <div style="width: 64px; height: 64px; margin: 0 auto var(--space-lg); background: rgba(var(--color-primary-rgb), 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <svg aria-hidden="true" width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>
                </div>
                <h3 style="font-size: 1.25rem; margin-bottom: var(--space-sm); color: var(--color-primary);">Local Commitment</h3>
                <p style="color: var(--color-text-light); line-height: 1.6;">We live and work in Greensboro. Your neighbors are our neighbors. We're invested in keeping our community's urban forest healthy and thriving for generations to come.</p>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="section" style="background: var(--color-bg); padding: var(--space-4xl) 0;">
    <div class="container">
        <div class="split" style="gap: var(--space-3xl); align-items: center; flex-direction: row-reverse;">
            <div class="split-content">
                <span class="eyebrow">Why Choose Us</span>
                <h2>What Makes Us Different</h2>
                <ul style="list-style: none; padding: 0; margin: var(--space-xl) 0;">
                    <li style="display: flex; gap: var(--space-md); margin-bottom: var(--space-lg); align-items: flex-start;">
                        <svg aria-hidden="true" width="24" height="24" style="flex-shrink: 0; margin-top: 2px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"/><path d="m9 12 2 2 4-4"/></svg>
                        <div>
                            <strong style="display: block; margin-bottom: 4px; color: var(--color-primary);">ISA Certified Arborists</strong>
                            <span style="color: var(--color-text-light);">Our lead arborists hold ISA certifications for expert care and accurate diagnostics you can trust.</span>
                        </div>
                    </li>
                    <li style="display: flex; gap: var(--space-md); margin-bottom: var(--space-lg); align-items: flex-start;">
                        <svg aria-hidden="true" width="24" height="24" style="flex-shrink: 0; margin-top: 2px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"/><path d="m9 12 2 2 4-4"/></svg>
                        <div>
                            <strong style="display: block; margin-bottom: 4px; color: var(--color-primary);">Same-Day Emergency Response</strong>
                            <span style="color: var(--color-text-light);">Storm damage doesn't wait. We offer same-day emergency response throughout the Greensboro metro area.</span>
                        </div>
                    </li>
                    <li style="display: flex; gap: var(--space-md); margin-bottom: var(--space-lg); align-items: flex-start;">
                        <svg aria-hidden="true" width="24" height="24" style="flex-shrink: 0; margin-top: 2px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"/><path d="m9 12 2 2 4-4"/></svg>
                        <div>
                            <strong style="display: block; margin-bottom: 4px; color: var(--color-primary);">Full-Service Tree Care</strong>
                            <span style="color: var(--color-text-light);">From pruning to removal to stump grinding — we handle every aspect of tree care so you don't have to coordinate multiple companies.</span>
                        </div>
                    </li>
                    <li style="display: flex; gap: var(--space-md); margin-bottom: var(--space-lg); align-items: flex-start;">
                        <svg aria-hidden="true" width="24" height="24" style="flex-shrink: 0; margin-top: 2px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"/><path d="m9 12 2 2 4-4"/></svg>
                        <div>
                            <strong style="display: block; margin-bottom: 4px; color: var(--color-primary);">Free Detailed Estimates</strong>
                            <span style="color: var(--color-text-light);">Every estimate includes photography, a 5-year care plan recommendation, and a detailed breakdown — no guesswork.</span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="split-image">
                <?php echo renderPicture('1000005749', 'Tree removal equipment and professional crew in action in Greensboro NC', 800, 600, '(min-width: 1024px) 45vw, (min-width: 768px) 50vw, 100vw'); ?>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-band" style="background: var(--color-bg-dark); padding: var(--space-4xl) 0; text-align: center; color: #fff;">
    <div class="container">
        <h2 style="font-size: 2rem; margin-bottom: var(--space-md); color: #fff;">Ready to Work with Greensboro's Tree Care Experts?</h2>
        <p style="font-size: 1.125rem; margin-bottom: var(--space-2xl); opacity: 0.9; max-width: 60ch; margin-left: auto; margin-right: auto;">Get a free, detailed estimate with no pressure and no upsells. We'll walk your property, assess your trees, and give you a transparent plan.</p>
        <div style="display: flex; gap: var(--space-md); justify-content: center; flex-wrap: wrap;">
            <a href="tel:<?php echo $phoneRaw; ?>" class="btn btn-primary" style="min-width: 200px;">
                <svg aria-hidden="true" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" /></svg>
                Call Now
            </a>
            <a href="/contact/" class="btn btn-secondary" style="min-width: 200px;">Request Free Estimate</a>
        </div>
    </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
