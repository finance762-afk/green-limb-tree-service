<?php
/**
 * includes/blog-data.php — Blog post registry for Green Limb Tree Service.
 *
 * SINGLE source of truth for all blog posts. The blog index, homepage preview,
 * related-articles blocks, and sitemap.php ALL read from this $blogPosts array.
 * Hardcoded post lists anywhere else are a QA fail.
 *
 * Each post requires:
 *   - slug: URL slug (directory name)
 *   - title: Post title (≤60 chars for SEO)
 *   - excerpt: One-sentence summary for cards
 *   - image: Basename (without extension) from /assets/images/
 *   - alt: Descriptive alt text
 *   - date: Display date (e.g., 'September 11, 2026')
 *   - dateISO: ISO 8601 date for schema (e.g., '2026-09-11')
 *   - category: Post category (e.g., 'Tree Care', 'Seasonal', 'Cost Guide')
 *   - readtime: Estimated read time (e.g., '5 min read')
 */

$blogPosts = [
    [
        'slug'     => 'how-much-does-tree-removal-cost-greensboro-nc',
        'title'    => 'How Much Does Tree Removal Cost in Greensboro, NC?',
        'excerpt'  => 'Tree removal costs in Greensboro range from a few hundred dollars for small trees to several thousand for large hardwoods over homes.',
        'image'    => '1000001648',
        'alt'      => 'Tree removal equipment and crew working on a large oak in a Greensboro neighborhood',
        'date'     => 'September 12, 2026',
        'dateISO'  => '2026-09-12',
        'category' => 'Cost Guide',
        'readtime' => '6 min read',
    ],
    [
        'slug'     => 'when-to-prune-trees-in-north-carolina',
        'title'    => 'When to Prune Trees in North Carolina',
        'excerpt'  => 'Most North Carolina trees benefit from pruning in late winter while dormant, though timing varies by species and pruning goal.',
        'image'    => '1000000129',
        'alt'      => 'Arborist pruning a large tree canopy from a bucket truck in late winter',
        'date'     => 'September 12, 2026',
        'dateISO'  => '2026-09-12',
        'category' => 'Seasonal',
        'readtime' => '5 min read',
    ],
];
