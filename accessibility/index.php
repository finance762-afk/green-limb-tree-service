<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$pageTitle       = "Accessibility Statement | $siteName";
$pageDescription = "Our commitment to ensuring digital accessibility for people with disabilities. WCAG 2.1 Level AA conformance information.";
$canonicalUrl    = $siteUrl . '/accessibility/';
$ogImage         = $siteUrl . '/assets/images/logo-v2.png';
$currentPage     = 'accessibility';
$pageType        = 'other';

$companyName       = $siteName;
$companyEmail      = $email;
$companyPhone      = $phone;
$companyPhoneE164  = $phoneRaw;
$companyAddress    = $address['street'] . ', ' . $address['city'] . ', ' . $address['state'] . ' ' . $address['zip'];
$lastUpdated       = date('F j, Y');

$schemaGraph = [
    '@context' => 'https://schema.org',
    '@graph' => [
        ['@type' => 'WebPage', '@id' => $canonicalUrl . '#webpage', 'url' => $canonicalUrl, 'name' => $pageTitle, 'description' => $pageDescription],
        ['@type' => 'BreadcrumbList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $siteUrl . '/'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Accessibility', 'item' => $canonicalUrl],
        ]],
    ]
];
$schemaMarkup = '<script type="application/ld+json">' . json_encode($schemaGraph, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<main id="main-content">

<section class="hero hero--legal" aria-label="Accessibility Statement">
    <div class="hero__copy">
        <span class="eyebrow-label">Legal</span>
        <h1>Accessibility Statement</h1>
        <span class="section-subtitle">our commitment to inclusion</span>
        <p class="hero__phone">Last Updated: <?php echo $lastUpdated; ?></p>
    </div>
</section>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <div class="container">
        <ol>
            <li><a href="/">Home</a></li>
            <li class="breadcrumb-sep" aria-hidden="true">›</li>
            <li aria-current="page">Accessibility</li>
        </ol>
    </div>
</nav>

<article class="legal-prose">

    <h2>1. Our Commitment</h2>
    <p><?php echo $companyName; ?> is committed to ensuring digital accessibility for people with disabilities. We continually improve the user experience for everyone and apply relevant accessibility standards to <?php echo $domain; ?>.</p>

    <h2>2. Conformance Status</h2>
    <p>This site is designed to conform with Web Content Accessibility Guidelines (WCAG) 2.1 Level AA. WCAG defines requirements for designers and developers to improve accessibility for people with disabilities. Our site partially conforms with WCAG 2.1 Level AA, meaning some content does not yet fully meet the standard. We are working to address all known issues.</p>

    <h2>3. Accessibility Features</h2>
    <ul>
        <li><strong>Semantic HTML5 markup</strong> with proper landmark regions (header, nav, main, footer)</li>
        <li><strong>Skip-to-content link</strong> at the top of every page</li>
        <li><strong>Visible keyboard focus indicators</strong> on all interactive elements</li>
        <li><strong>Alt text on all meaningful images</strong> (decorative images use empty alt attributes)</li>
        <li><strong>Sufficient color contrast</strong> for body text and interactive elements</li>
        <li><strong>Responsive design</strong> that works across screen sizes and zoom levels</li>
        <li><strong>prefers-reduced-motion support</strong> — animations disabled for users who request reduced motion</li>
        <li><strong>ARIA labels</strong> on navigation and form elements</li>
        <li><strong>Form field labels</strong> associated with inputs</li>
        <li><strong>Logical heading hierarchy</strong> (H1 → H2 → H3) on every page</li>
    </ul>

    <h2>4. Known Issues</h2>
    <p>We are aware of these areas needing improvement:</p>
    <ul>
        <li><strong>Third-party embeds</strong> may not fully meet WCAG standards. We provide alternative ways to access this information (call us, email us).</li>
        <li><strong>Some PDF documents</strong> may not be fully accessible. Contact us for alternative formats.</li>
    </ul>

    <h2>5. Feedback and Reporting Issues</h2>
    <p>If you encounter an accessibility barrier on this site, please tell us. We aim to respond to accessibility feedback within 5 business days.</p>
    <p>Please provide:</p>
    <ul>
        <li>The page URL where you encountered the issue</li>
        <li>A description of the barrier</li>
        <li>Your contact information (email or phone)</li>
    </ul>

    <h2>6. Alternative Contact Methods</h2>
    <p>If our website is not accessible to you, you can reach us by phone or mail. We will provide service information in alternative formats on request.</p>
    <p>
        <strong>Phone:</strong> <a href="tel:<?php echo $companyPhoneE164; ?>"><?php echo $companyPhone; ?></a><br>
        <strong>Email:</strong> <a href="mailto:<?php echo $companyEmail; ?>"><?php echo $companyEmail; ?></a><br>
        <strong>Mail:</strong> <?php echo $companyAddress; ?>
    </p>

    <h2>7. Technical Specifications</h2>
    <p>Accessibility of <?php echo $domain; ?> relies on the following technologies to work with the particular combination of web browser and any assistive technologies or plugins installed on your computer:</p>
    <ul>
        <li>HTML</li>
        <li>WAI-ARIA</li>
        <li>CSS</li>
        <li>JavaScript</li>
    </ul>
    <p>These technologies are relied upon for conformance with the accessibility standards used.</p>

    <h2>8. Assessment Approach</h2>
    <p><?php echo $companyName; ?> assessed the accessibility of <?php echo $domain; ?> through self-evaluation and automated testing tools. We are committed to ongoing improvement and welcome feedback from users.</p>

    <h2>9. Changes to This Statement</h2>
    <p>We may update this Accessibility Statement from time to time. The "Last Updated" date at the top will reflect the most recent change.</p>

    <h2>10. Contact Us</h2>
    <p>For questions or feedback about the accessibility of this site:</p>
    <p>
        <strong><?php echo $companyName; ?></strong><br>
        Email: <a href="mailto:<?php echo $companyEmail; ?>"><?php echo $companyEmail; ?></a><br>
        Phone: <a href="tel:<?php echo $companyPhoneE164; ?>"><?php echo $companyPhone; ?></a><br>
        Address: <?php echo $companyAddress; ?>
    </p>

    <div class="legal-disclaimer">
        General template; recommend attorney review.
    </div>

</article>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
