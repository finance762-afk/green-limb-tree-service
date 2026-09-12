<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ── Page-level setup ──────────────────────────────────────────────────────── */
$pageType        = 'faq';
$currentPage     = 'faq';
$pageTitle       = 'Tree Service FAQ | Green Limb Tree Service Greensboro NC';
$metaDescription = 'Answers to common questions about tree removal, trimming, pruning, stump grinding, and storm cleanup in Greensboro, NC. Pricing, permits, timing, and safety.';
$canonicalUrl    = $siteUrl . '/faq/';

/* Comprehensive FAQ organized by category */
$faqSections = [
    'General' => [
        [
            'q' => 'Do you provide emergency storm damage cleanup?',
            'a' => 'Yes. Green Limb Tree Service offers same-day emergency response for fallen trees and storm-damaged limbs across Greensboro and the surrounding Piedmont. Our line is answered around the clock, Monday through Saturday.',
        ],
        [
            'q' => 'What areas do you serve?',
            'a' => 'Green Limb Tree Service covers Greensboro and the wider Piedmont Triad — Guilford and Alamance counties, including High Point, Jamestown, Pleasant Garden, Brown Summit, Burlington, Graham, Haw River, and Mebane. Call and we\'ll confirm you\'re in range.',
        ],
        [
            'q' => 'Are you licensed and insured?',
            'a' => 'Yes. Green Limb Tree Service carries liability insurance on every job, and our crews follow industry rigging and climbing safety practices. We are glad to provide proof of insurance before work begins on your Greensboro property.',
        ],
        [
            'q' => 'How much do you charge for an estimate?',
            'a' => 'Nothing. Green Limb Tree Service provides free on-site estimates throughout our Greensboro service area. We walk the property, flag hazards, and put a firm price in writing before any work starts.',
        ],
    ],
    'Tree Removal' => [
        [
            'q' => 'How much does tree removal cost in Greensboro?',
            'a' => 'Tree removal in Greensboro typically runs from a few hundred dollars for a small tree to several thousand for a large hardwood over a house. Green Limb Tree Service prices each job on site by size, lean, access, and proximity to structures — and the written estimate is free.',
        ],
        [
            'q' => 'Do I need a permit to remove a tree in Greensboro?',
            'a' => 'Trees on private residential lots in Greensboro usually do not need a city permit, but protected trees, street trees, and some HOA or commercial sites do. Green Limb Tree Service will flag anything that needs approval during your free on-site assessment.',
        ],
        [
            'q' => 'Can you remove a tree that is close to my house or power lines?',
            'a' => 'Yes. Tight removals are most of what we do. Green Limb Tree Service sections the tree from the top down and lowers each piece with rigging so nothing drops on your roof, fence, or landscaping. For trees touching service lines we coordinate with the utility first.',
        ],
        [
            'q' => 'What\'s the best time of year to remove a tree?',
            'a' => 'Dormant winter months are ideal because bare canopies are lighter and easier to rig, but Green Limb Tree Service removes trees safely year-round. A dead, split, or leaning tree over a target is a hazard in any season and should not wait for winter.',
        ],
    ],
    'Tree Trimming & Pruning' => [
        [
            'q' => 'How often should my trees be pruned?',
            'a' => 'Most mature trees benefit from pruning every three to five years for health and safety. Green Limb Tree Service assesses each tree during a free consultation and lays out a care timeline that fits your property.',
        ],
        [
            'q' => 'What\'s the difference between trimming and pruning?',
            'a' => 'Trimming typically clears roofs, lines, and sight lines for safety and function. Pruning is more selective — removing weak, crossing, or diseased limbs to improve the tree\'s health and structure. Green Limb Tree Service does both.',
        ],
        [
            'q' => 'Will trimming my tree damage it?',
            'a' => 'Not when done correctly. Over-trimming or "topping" can harm trees, but proper selective pruning by Green Limb Tree Service strengthens the canopy and reduces hazards without stressing the tree.',
        ],
    ],
    'Stump Grinding & Cleanup' => [
        [
            'q' => 'How much does stump grinding cost in Greensboro?',
            'a' => 'Stump grinding pricing depends on the stump size and how accessible it is. Most residential stumps in Greensboro run $150–$400, and Green Limb Tree Service gives you a firm on-site quote before any grinding starts.',
        ],
        [
            'q' => 'Will you grind the stump and haul the wood away?',
            'a' => 'Stump grinding and full debris haul-off are available on every removal. Many Greensboro customers bundle grinding with the takedown so the whole job — tree, wood, brush, and stump — is finished in one visit and the site is raked clean before we leave.',
        ],
        [
            'q' => 'What do you do with the wood and debris?',
            'a' => 'Green Limb Tree Service can haul everything off site, leave firewood neatly stacked if you want it, or chip brush into mulch. We discuss options during the estimate and leave the property clean.',
        ],
    ],
];

/* Build flat FAQ array for FAQPage schema */
$allFaqs = [];
foreach ($faqSections as $cat => $items) {
    foreach ($items as $item) {
        $allFaqs[] = $item;
    }
}
$faqSchema = generateFAQSchema($allFaqs);

/* Breadcrumb + WebPage schema */
$breadcrumbs = [
    ['name' => 'Home', 'url' => '/'],
    ['name' => 'FAQ', 'url' => '/faq/'],
];
$schemaGraph = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'WebPage',
            '@id'   => $canonicalUrl . '#webpage',
            'url'   => $canonicalUrl,
            'name'  => $pageTitle,
            'description' => $metaDescription,
            'isPartOf' => ['@id' => $siteUrl . '/#website'],
            'breadcrumb' => ['@id' => $canonicalUrl . '#breadcrumb'],
        ],
        [
            '@type' => 'BreadcrumbList',
            '@id'   => $canonicalUrl . '#breadcrumb',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $siteUrl . '/'],
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'FAQ', 'item' => $canonicalUrl],
            ],
        ],
    ],
];
$schemaMarkup = '<script type="application/ld+json">' . json_encode($schemaGraph, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<?php echo $schemaMarkup; ?>
<?php echo $faqSchema; ?>

<style>
/* ============================================================================
   FAQ page composition (Green Limb Tree Service)
   ============================================================================ */

.faq-hero { padding-block: clamp(3rem, 8vw, 5rem); background: var(--color-paper); }
.faq-hero .container { max-width: var(--max-width-narrow); text-align: center; }
.faq-hero-lead { font-size: var(--fs-lead); color: var(--color-ink-2); margin-top: var(--space-3); max-width: 60ch; margin-inline: auto; }

/* FAQ sections */
.faq-section { margin-top: var(--space-8); }
.faq-section:first-child { margin-top: var(--space-10); }
.faq-category { font-family: var(--font-accent); font-size: var(--fs-h4); text-transform: uppercase; letter-spacing: .06em; color: var(--color-primary); margin-bottom: var(--space-4); border-bottom: 2px solid var(--color-line); padding-bottom: var(--space-2); }

.faq { background: var(--color-surface); border: 1px solid var(--color-line); border-radius: var(--radius-lg); margin-bottom: var(--space-3); overflow: hidden; }
.faq summary { cursor: pointer; padding: var(--space-4); font-size: var(--fs-h5); font-weight: 600; color: var(--color-ink); display: flex; align-items: center; gap: var(--space-3); list-style: none; }
.faq summary::-webkit-details-marker { display: none; }
.faq summary::before { content: '+'; font-size: 1.5rem; font-weight: 400; color: var(--color-accent); flex-shrink: 0; transition: transform var(--transition); }
.faq[open] summary::before { content: '−'; }
.faq summary:hover { color: var(--color-primary); }
.faq p { padding: 0 var(--space-4) var(--space-4); color: var(--color-ink-2); line-height: 1.7; }

/* Still have questions CTA */
.faq-cta { background: var(--color-primary); color: var(--color-white); border-radius: var(--radius-lg); padding: clamp(2rem, 5vw, 3rem); text-align: center; margin-top: var(--space-10); }
.faq-cta h2 { color: var(--color-white); margin-bottom: var(--space-3); }
.faq-cta p { color: rgba(255,255,255,0.9); margin-bottom: var(--space-5); }
</style>

<!-- ═══════════════════════ HERO ═══════════════════════ -->
<section class="section faq-hero" aria-label="Frequently asked questions">
    <div class="container">
        <div class="reveal-up">
            <span class="eyebrow-label">Good to Know</span>
            <h1>Tree service questions, answered for Greensboro</h1>
            <p class="faq-hero-lead">Straight answers on cost, timing, storms, permits, and how Green Limb Tree Service works. If you don't find what you need here, call us — we're glad to walk through it.</p>
        </div>
    </div>
</section>

<!-- ═══════════════════════ FAQ GRID ═══════════════════════ -->
<section class="section section--light" aria-label="All questions">
    <div class="container-narrow">
        <?php foreach ($faqSections as $category => $faqs): ?>
        <div class="faq-section">
            <h2 class="faq-category"><?php echo htmlspecialchars($category); ?></h2>
            <?php foreach ($faqs as $fi => $faq): ?>
            <details class="faq"<?php echo $fi < 1 ? ' open' : ''; ?>>
                <summary><?php echo htmlspecialchars($faq['q']); ?></summary>
                <p><?php echo htmlspecialchars($faq['a']); ?></p>
            </details>
            <?php endforeach; ?>
        </div>
        <?php endforeach; ?>

        <!-- Still have questions? -->
        <div class="faq-cta">
            <h2>Still have questions?</h2>
            <p>Every property is different. Call Green Limb Tree Service and we'll walk through your specific situation — no pressure, just clear answers.</p>
            <div style="display: flex; gap: var(--space-3); justify-content: center; flex-wrap: wrap;">
                <a href="tel:<?php echo $phoneRaw; ?>" class="btn btn-accent btn-lg">Call <?php echo htmlspecialchars($phone); ?></a>
                <a href="#estimate" class="btn btn-outline-white btn-lg">Request a free estimate</a>
            </div>
        </div>
    </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
