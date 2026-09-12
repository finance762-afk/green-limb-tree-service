<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$pageTitle       = "Cookie Policy | $siteName";
$metaDescription = "How $siteName uses cookies and tracking technologies on our website. Learn what cookies we use and how to control them.";
$canonicalUrl    = $siteUrl . '/cookie-policy/';
$ogImage         = $siteUrl . '/assets/images/logo.png';
$currentPage     = 'cookie-policy';
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
        ['@type' => 'WebPage', '@id' => $canonicalUrl . '#webpage', 'url' => $canonicalUrl, 'name' => $pageTitle, 'description' => $metaDescription],
        ['@type' => 'BreadcrumbList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $siteUrl . '/'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Cookie Policy', 'item' => $canonicalUrl],
        ]],
    ]
];
$schemaMarkup = '<script type="application/ld+json">' . json_encode($schemaGraph, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<main id="main-content">

<section class="hero hero--legal" aria-label="Cookie Policy">
    <div class="hero__copy">
        <span class="eyebrow-label">Legal</span>
        <h1>Cookie Policy</h1>
        <span class="section-subtitle">how we use cookies</span>
        <p class="hero__phone">Last Updated: <?php echo $lastUpdated; ?></p>
    </div>
</section>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <div class="container">
        <ol>
            <li><a href="/">Home</a></li>
            <li class="breadcrumb-sep" aria-hidden="true">›</li>
            <li aria-current="page">Cookie Policy</li>
        </ol>
    </div>
</nav>

<article class="legal-prose">

    <h2>1. What Are Cookies?</h2>
    <p>Cookies are small text files stored on your device when you visit a website. They are used to make websites work more efficiently and provide information to site owners about how visitors use the site.</p>

    <h2>2. Cookies We Use</h2>

    <h3>Strictly Necessary</h3>
    <p>Essential for site functionality (form submission, security). These cannot be disabled. Example: session cookies during form submission.</p>

    <h3>Analytics (Google Analytics 4)</h3>
    <p>We use Google Analytics 4 to understand how visitors use our site. GA4 sets cookies prefixed with _ga and _gid. Data is anonymized via IP truncation. These cookies help us:</p>
    <ul>
        <li>Count visitors and see how they navigate the site</li>
        <li>Understand which pages are most popular</li>
        <li>Identify technical issues and improve site performance</li>
        <li>Understand traffic sources (organic search, social media, direct visits)</li>
    </ul>

    <h3>Third-Party Embeds</h3>
    <p>Our site may embed tools and content from third parties:</p>
    <ul>
        <li><strong>Google Maps:</strong> displays our service area and directions</li>
        <li><strong>Social media widgets:</strong> links to our profiles on Facebook, LinkedIn, etc.</li>
        <li><strong>Review platforms:</strong> displays customer reviews from Google Business Profile or other platforms</li>
    </ul>
    <p>These services may set their own cookies subject to their own privacy policies.</p>

    <h2>3. How to Control Cookies</h2>
    <p>Most browsers allow you to view, delete, or block cookies:</p>
    <ul>
        <li><strong>View cookies:</strong> most browsers provide a list of cookies stored on your device in their settings</li>
        <li><strong>Delete cookies:</strong> you can clear all cookies or delete specific ones through browser settings</li>
        <li><strong>Block cookies:</strong> you can block third-party cookies or block all cookies (note: some site functionality may break)</li>
    </ul>
    <p>Browser-specific instructions:</p>
    <ul>
        <li><a href="https://support.google.com/chrome/answer/95647" target="_blank" rel="noopener">Google Chrome</a></li>
        <li><a href="https://support.mozilla.org/en-US/kb/cookies-information-websites-store-on-your-computer" target="_blank" rel="noopener">Mozilla Firefox</a></li>
        <li><a href="https://support.apple.com/guide/safari/manage-cookies-sfri11471/mac" target="_blank" rel="noopener">Apple Safari</a></li>
        <li><a href="https://support.microsoft.com/en-us/microsoft-edge/delete-cookies-in-microsoft-edge-63947406-40ac-c3b8-57b9-2a946a29ae09" target="_blank" rel="noopener">Microsoft Edge</a></li>
    </ul>

    <h2>4. Opt Out of Google Analytics</h2>
    <p>You can opt out of GA4 tracking site-wide by installing the Google Analytics Opt-out Browser Add-on at <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">https://tools.google.com/dlpage/gaoptout</a>.</p>

    <h2>5. Our Cookie Notice</h2>
    <p>We display a brief banner notifying visitors of our cookie use. Once dismissed, the banner is suppressed for future visits via localStorage. You can re-enable the banner by clearing your browser's site data.</p>

    <h2>6. Changes to This Policy</h2>
    <p>We may update this Cookie Policy from time to time. The "Last Updated" date at the top will reflect the most recent change. Material changes will be prominently posted on the site.</p>

    <h2>7. Contact Us</h2>
    <p>For questions about cookies or this policy:</p>
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
