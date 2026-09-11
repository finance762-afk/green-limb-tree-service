<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$pageTitle       = "Frequently Asked Questions | Tree Care FAQ | $siteName";
$metaDescription = "Get answers to common questions about tree removal, trimming, pruning, and stump grinding in Greensboro, NC. Expert advice from $siteName.";
$canonicalUrl    = $siteUrl . '/faq/';
$ogImage         = $siteUrl . '/assets/images/logo.png';
$currentPage     = 'faq';
$pageType        = 'faq';

// FAQ data from research brief
$faqs = [
    [
        'q' => 'How often should my trees be pruned?',
        'a' => 'Most mature trees benefit from pruning every 3-5 years for health and safety. We assess each tree individually during a free consultation and provide a customized care timeline.'
    ],
    [
        'q' => 'Do you provide emergency storm damage cleanup?',
        'a' => 'Yes. We offer same-day emergency response for fallen trees and storm-damaged branches in Greensboro and surrounding areas. Call our emergency line 24/7.'
    ],
    [
        'q' => 'What\'s the best time to remove a tree?',
        'a' => 'Winter (dormant season) is typically ideal in North Carolina, but we can safely remove trees year-round. We\'ll advise on timing based on tree health, location hazards, and your schedule.'
    ],
    [
        'q' => 'How much does stump grinding cost?',
        'a' => 'Stump grinding pricing depends on size and location accessibility. We provide free estimates on-site. Most residential stumps in Greensboro run $150–$400.'
    ],
    [
        'q' => 'Are your arborists insured and licensed?',
        'a' => 'Yes. All crew members are fully insured, and our lead arborists hold ISA certifications. We carry liability and workers\' comp on every job.'
    ],
    [
        'q' => 'Do I need a permit to remove a tree in Greensboro?',
        'a' => 'It depends on the tree\'s size, location, and local ordinances. We\'ll assess your property during the estimate and advise on permitting requirements. In most residential cases, permits are not required for hazardous or dead trees.'
    ],
    [
        'q' => 'What\'s the difference between tree trimming and tree pruning?',
        'a' => 'Tree trimming focuses on clearing structures, power lines, and overgrowth for safety and aesthetics. Tree pruning is more targeted — removing specific branches to improve tree health, structure, and longevity. Both are important for different reasons.'
    ],
    [
        'q' => 'How long does tree removal take?',
        'a' => 'Most residential tree removals take 2-6 hours depending on tree size, location, and access. Large trees near structures or power lines require more time for safe rigging. We\'ll provide a time estimate during your free consultation.'
    ],
    [
        'q' => 'Can you remove a tree close to my house or power lines?',
        'a' => 'Yes. We specialize in tight-access removals using careful rigging techniques to protect nearby structures, landscaping, and power lines. Our ISA-certified arborists handle complex removals safely.'
    ],
    [
        'q' => 'What do you do with the wood after tree removal?',
        'a' => 'We haul and chip all debris by default. If you\'d like to keep the firewood or logs, just let us know during the estimate and we can cut it to your preferred length and stack it on-site.'
    ],
    [
        'q' => 'Do you offer free estimates?',
        'a' => 'Yes. Every estimate includes an on-site assessment, photography, a detailed breakdown of work, and a 5-year care plan recommendation. No pressure, no upsells.'
    ],
    [
        'q' => 'What areas do you serve?',
        'a' => 'We serve Greensboro and surrounding communities throughout Guilford County and Alamance County, including High Point, Jamestown, Pleasant Garden, Brown Summit, Burlington, Graham, Haw River, and Mebane.'
    ],
    [
        'q' => 'How much does tree removal cost in Greensboro?',
        'a' => 'Tree removal costs vary based on size, location, and access. Small trees (under 30 ft) typically run $300–$700. Medium trees (30-60 ft) run $700–$1,500. Large trees (over 60 ft) or complex removals near structures can run $1,500–$4,000+. We provide transparent, itemized estimates.'
    ],
    [
        'q' => 'What payment methods do you accept?',
        'a' => 'We accept cash, check, and all major credit cards. Payment is due upon project completion unless otherwise arranged during contracting.'
    ],
    [
        'q' => 'Are you licensed and insured?',
        'a' => 'Yes. We are fully licensed to operate in North Carolina and carry comprehensive liability and workers\' compensation insurance. We provide proof of insurance on request.'
    ]
];

// FAQPage schema
$schemaGraph = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'FAQPage',
            'mainEntity' => array_map(function($faq) {
                return [
                    '@type' => 'Question',
                    'name' => $faq['q'],
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => $faq['a']
                    ]
                ];
            }, $faqs)
        ],
        [
            '@type' => 'BreadcrumbList',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $siteUrl . '/'],
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'FAQ', 'item' => $canonicalUrl]
            ]
        ]
    ]
];
$schemaMarkup = '<script type="application/ld+json">' . json_encode($schemaGraph, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<!-- Hero -->
<section class="hero hero--interior">
    <div class="container">
        <div class="hero-content">
            <span class="eyebrow">Questions & Answers</span>
            <h1>Frequently Asked Questions</h1>
            <p class="hero-answer">Everything you need to know about tree care services in Greensboro — from emergency storm cleanup to routine pruning and stump grinding.</p>
        </div>
    </div>
</section>

<!-- FAQ List -->
<section class="section" style="background: var(--color-bg); padding: var(--space-4xl) 0;">
    <div class="container" style="max-width: 900px;">
        <div class="faq-list">
            <?php foreach ($faqs as $index => $faq): ?>
            <div class="faq-item" style="background: #fff; padding: var(--space-xl); border-radius: var(--radius); margin-bottom: var(--space-lg); box-shadow: 0 2px 8px rgba(0,0,0,0.06); border-left: 4px solid var(--color-primary);">
                <h3 style="font-size: 1.125rem; margin-bottom: var(--space-md); color: var(--color-primary); display: flex; align-items: flex-start; gap: var(--space-sm);">
                    <svg aria-hidden="true" width="20" height="20" style="flex-shrink: 0; margin-top: 2px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10" /><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" /><path d="M12 17h.01" /></svg>
                    <?php echo htmlspecialchars($faq['q']); ?>
                </h3>
                <div class="faq-answer" style="color: var(--color-text); line-height: 1.7; padding-left: 28px;">
                    <p style="margin: 0;"><?php echo htmlspecialchars($faq['a']); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Still Have Questions CTA -->
<section class="section" style="background: var(--color-bg-dark); padding: var(--space-4xl) 0; text-align: center; color: #fff;">
    <div class="container">
        <h2 style="font-size: 2rem; margin-bottom: var(--space-md); color: #fff;">Still Have Questions?</h2>
        <p style="font-size: 1.125rem; margin-bottom: var(--space-2xl); opacity: 0.9; max-width: 60ch; margin-left: auto; margin-right: auto;">We're here to help. Call us or submit a question through our contact form and we'll get back to you within 1 business day.</p>
        <div style="display: flex; gap: var(--space-md); justify-content: center; flex-wrap: wrap;">
            <a href="tel:<?php echo $phoneRaw; ?>" class="btn btn-primary" style="min-width: 200px;">
                <svg aria-hidden="true" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" /></svg>
                Call <?php echo htmlspecialchars($phone); ?>
            </a>
            <a href="/contact/" class="btn btn-secondary" style="min-width: 200px;">Send Us a Message</a>
        </div>
    </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
