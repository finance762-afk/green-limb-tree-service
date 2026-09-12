<?php
/**
 * includes/config.php — Central site configuration for Green Limb Tree Service.
 *
 * Populated from build-plan.json (Phase 1 scaffold). Every page includes this file
 * FIRST (before head.php) so all shared site variables are available. It ends by
 * requiring attribution.php, which sets the first-touch lead-attribution cookie
 * before any output. Do not emit HTML from this file.
 */

/* ── Lucide icon helper ───────────────────────────────────────────────────── */
require_once __DIR__ . '/icons.php';

/* ── Identity ─────────────────────────────────────────────────────────────── */
$slug     = 'green-limb-tree-service';           // exact build directory name
$siteName = 'Green Limb Tree Service';
$tagline  = 'Family-Owned Tree Care in Greensboro, NC';
$industry = 'Tree service';

/* ── Contact ──────────────────────────────────────────────────────────────── */
$phone          = '(336) 254-7993';
$phoneRaw       = '13362547993';                 // tel:/sms: E.164-style digits
$phoneSecondary = '';
$email          = 'holdingtreeservice1@gmail.com';

$address = [
    'street' => '3515 Irwin St',
    'city'   => 'Greensboro',
    'state'  => 'NC',
    'zip'    => '27405',
];
$addressPublic = false;                          // client opted address private
$businessHours = '24 hours, Mon–Sat';

/* ── Domain / URLs ────────────────────────────────────────────────────────────
 * build-plan.json has no production_domain (its "domain" value is the slug), so
 * $domain defaults to the preview URL "<slug>.pageone.cloud". NEVER blank.
 * Each page sets its own $canonicalUrl from $siteUrl + path before head.php. */
$domain  = 'green-limb-tree-service.pageone.cloud';
$siteUrl = 'https://' . $domain;

/* ── SEO keywords ─────────────────────────────────────────────────────────── */
$primaryKeyword    = 'tree service Greensboro NC';
$secondaryKeywords = [
    'tree removal Greensboro NC',
    'tree trimming Greensboro NC',
    'tree pruning Greensboro NC',
    'stump grinding Greensboro NC',
    'storm damage cleanup Greensboro NC',
    'land clearing Greensboro NC',
    'emergency tree removal Greensboro',
    'arborist Greensboro NC',
];

/* ── Services ───────────────────────────────────────────────────────────────
 * name/slug/keywords are authoritative from build-plan.json; descriptions are
 * concise config-level summaries the copywriter refines in later phases. */
$services = [
    [
        'name'        => 'Tree Service',
        'slug'        => 'tree-service',
        'description' => 'Full-service tree care for Greensboro homes and businesses — pruning, removal, cleanup, and ongoing canopy health.',
        'keywords'    => 'tree service Greensboro NC',
    ],
    [
        'name'        => 'Tree Removal',
        'slug'        => 'tree-removal',
        'description' => 'Safe removal of hazardous, dead, or overgrown trees with careful rigging to protect nearby structures and landscaping.',
        'keywords'    => 'tree removal Greensboro NC',
    ],
    [
        'name'        => 'Tree Trimming',
        'slug'        => 'tree-trimming',
        'description' => 'Precision trimming that clears structures and power lines while keeping your trees balanced and healthy.',
        'keywords'    => 'tree trimming Greensboro NC',
    ],
    [
        'name'        => 'Tree Pruning',
        'slug'        => 'tree-pruning',
        'description' => 'Structural and health pruning timed to the season to strengthen limbs and extend the life of mature trees.',
        'keywords'    => 'tree pruning Greensboro NC',
    ],
    [
        'name'        => 'Land Clearing',
        'slug'        => 'land-clearing',
        'description' => 'Lot and brush clearing for new construction, expansions, and reclaiming overgrown property across the Piedmont.',
        'keywords'    => 'land clearing Greensboro NC',
    ],
    [
        'name'        => 'Storm Work',
        'slug'        => 'storm-work',
        'description' => 'Same-day emergency response for fallen trees and storm-damaged limbs, with full debris cleanup.',
        'keywords'    => 'storm work Greensboro NC',
    ],
    [
        'name'        => 'Junk Removal',
        'slug'        => 'junk-removal',
        'description' => 'Hauling and disposal of yard debris, brush piles, and property clutter left behind after a job.',
        'keywords'    => 'junk removal Greensboro NC',
    ],
    [
        'name'        => 'Snow Removal',
        'slug'        => 'snow-removal',
        'description' => 'Seasonal snow and ice clearing to keep driveways, walkways, and access routes safe.',
        'keywords'    => 'snow removal Greensboro NC',
    ],
    [
        'name'        => 'Stump Grinding',
        'slug'        => 'stump-grinding',
        'description' => 'Below-grade stump grinding that removes trip hazards and reclaims usable yard space.',
        'keywords'    => 'stump grinding Greensboro NC',
    ],
];

/* ── Service areas ────────────────────────────────────────────────────────── */
$serviceAreas = [
    'Guilford County NC',
    'Alamance County NC',
    'Greensboro NC',
    'Brown Summit NC',
    'High Point NC',
    'Jamestown NC',
    'Pleasant Garden NC',
    'Burlington NC',
    'Graham NC',
    'Haw River NC',
    'Mebane NC',
];

/* ── Social / profiles ────────────────────────────────────────────────────── */
$socialLinks           = [];                     // none provided in intake
$googleBusinessProfile = 'https://maps.google.com/?cid=16420824580482585847';

/* ── Google Business Profile / maps (integrations) ────────────────────────── */
$gbpPlaceId       = 'ChIJfzv92LOcfG0R99SqZvR84uM';
$gbpMapEmbed      = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d430383.5581646414!2d-79.77908765000001!3d36.0972205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d7c9cb3d8fd3b7f%3A0xe3e27cf466aad4f7!2sGreen%20Limb%20Tree%20Service!5e1!3m2!1sen!2sus!4v1789166948715!5m2!1sen!2sus" loading="lazy" allowfullscreen referrerpolicy="no-referrer-when-downgrade"></iframe>';
$directionsUrl    = 'https://www.google.com/maps/dir/?api=1&destination=place_id:ChIJfzv92LOcfG0R99SqZvR84uM';
$reviewRequestUrl = 'https://search.google.com/local/writereview?placeid=ChIJfzv92LOcfG0R99SqZvR84uM';
$geo              = ['lat' => 36.0972205, 'lng' => -79.77908765000001];
$elfsightEmbed    = '<div class="elfsight-app-c90fa706-11ab-44c2-a07e-14790c4c3792" data-elfsight-app-lazy data-elfsight-src="https://static.elfsight.com/platform/platform.js"></div>'; // platform.js is injected by main.js when this block nears the viewport (third-party JS off the critical path, 2026-09-12)
$acceptsSms       = false;

/* ── Analytics (placeholder — replaced post-launch) ───────────────────────── */
$googleAnalyticsId = 'G-XXXXXXXXXX';

/* ── Brand colors ──────────────────────────────────────────────────────────
 * Placeholders pending Phase 0 logo analysis; the authoritative tokens live in
 * framework.css. Update here and in framework.css when the palette is locked. */
$colors = [
    'primary'   => '#2e6b3e',   // deep leaf green
    'secondary' => '#1b3a29',   // forest / bark dark
    'accent'    => '#e0a72c',   // warm amber
];

/* ── Company facts ────────────────────────────────────────────────────────── */
$yearEstablished = null;                          // not supplied in intake
$yearsInBusiness = null;                          // not supplied in intake
$ownerName       = 'Woan Y';

/* ── Assets / CSS cache-bust ──────────────────────────────────────────────────
 * SINGLE source of the framework.css cache-bust. Pages must NEVER set their own
 * $cssVersion — bump this value on every framework.css change. */
$cssVersion = '20260912a';

/* ── Lead form ────────────────────────────────────────────────────────────── */
$formAction = 'https://db.pageone.cloud/functions/v1/leads/green-limb-tree-service';

/* ── Lead attribution (v6.3) — sets the first-touch cookie before any output ── */
require_once __DIR__ . '/attribution.php';
