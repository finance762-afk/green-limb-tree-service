<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$pageTitle       = "Contact Us | $siteName | Greensboro, NC";
$metaDescription = "Contact $siteName for free tree care estimates in Greensboro and surrounding areas. Call " . $phone . " or submit our online form for same-day response.";
$canonicalUrl    = $siteUrl . '/contact/';
$ogImage         = $siteUrl . '/assets/images/logo.png';
$currentPage     = 'contact';
$pageType        = 'contact';

// Breadcrumb schema
$breadcrumbs = [
    ['name' => 'Home', 'url' => '/'],
    ['name' => 'Contact', 'url' => '/contact/']
];
$schemaMarkup = generateBreadcrumbSchema($breadcrumbs);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<!-- Hero -->
<section class="hero hero--interior">
    <div class="container">
        <div class="hero-content">
            <span class="eyebrow">Get In Touch</span>
            <h1>Request Your Free Tree Care Estimate</h1>
            <p class="hero-answer">Fill out the form below or call us directly. We respond to all inquiries within 1 business day and offer same-day emergency service for storm damage.</p>
        </div>
    </div>
</section>

<!-- Contact Form & Info -->
<section class="section" style="background: var(--color-bg); padding: var(--space-4xl) 0;">
    <div class="container">
        <div class="split" style="gap: var(--space-3xl); align-items: flex-start;">
            <!-- Contact Form -->
            <div class="split-content" style="flex: 2;">
                <h2 style="margin-bottom: var(--space-lg);">Send Us a Message</h2>
                <p style="margin-bottom: var(--space-2xl); color: var(--color-text-light);">Tell us about your tree care needs and we'll get back to you with a detailed estimate and timeline.</p>

                <form action="<?php echo htmlspecialchars($formAction); ?>" method="POST" style="background: #fff; padding: var(--space-2xl); border-radius: var(--radius); box-shadow: var(--shadow);">
                    <!-- Honeypot -->
                    <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">

                    <!-- Hidden fields -->
                    <input type="hidden" name="_next" value="<?php echo htmlspecialchars($siteUrl); ?>/thank-you">
                    <?php echo p1_attribution_fields('contact'); ?>
                    <input type="hidden" name="form_location" value="contact_page">
                    <input type="hidden" name="consent_version" value="v2.1">
                    <input type="hidden" name="consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">

                    <div class="form-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: var(--space-lg); margin-bottom: var(--space-lg);">
                        <div class="field">
                            <label for="contact-name" style="display: block; margin-bottom: var(--space-xs); font-weight: 600;">Your Name *</label>
                            <input id="contact-name" type="text" name="name" autocomplete="name" required style="width: 100%; padding: 12px 16px; border: 1px solid var(--color-border); border-radius: var(--radius-sm); font-family: var(--font-body); font-size: 1rem;">
                        </div>
                        <div class="field">
                            <label for="contact-phone" style="display: block; margin-bottom: var(--space-xs); font-weight: 600;">Phone *</label>
                            <input id="contact-phone" type="tel" name="phone" autocomplete="tel" required style="width: 100%; padding: 12px 16px; border: 1px solid var(--color-border); border-radius: var(--radius-sm); font-family: var(--font-body); font-size: 1rem;">
                        </div>
                    </div>

                    <div class="field" style="margin-bottom: var(--space-lg);">
                        <label for="contact-email" style="display: block; margin-bottom: var(--space-xs); font-weight: 600;">Email *</label>
                        <input id="contact-email" type="email" name="email" autocomplete="email" required style="width: 100%; padding: 12px 16px; border: 1px solid var(--color-border); border-radius: var(--radius-sm); font-family: var(--font-body); font-size: 1rem;">
                    </div>

                    <div class="field" style="margin-bottom: var(--space-lg);">
                        <label for="contact-service" style="display: block; margin-bottom: var(--space-xs); font-weight: 600;">Service Needed</label>
                        <select id="contact-service" name="service" style="width: 100%; padding: 12px 16px; border: 1px solid var(--color-border); border-radius: var(--radius-sm); font-family: var(--font-body); font-size: 1rem;">
                            <option value="">Select a service</option>
                            <?php foreach ($services as $svc): ?>
                            <option value="<?php echo htmlspecialchars($svc['name']); ?>"><?php echo htmlspecialchars($svc['name']); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="field" style="margin-bottom: var(--space-xl);">
                        <label for="contact-message" style="display: block; margin-bottom: var(--space-xs); font-weight: 600;">Tell us about your project</label>
                        <textarea id="contact-message" name="message" rows="5" style="width: 100%; padding: 12px 16px; border: 1px solid var(--color-border); border-radius: var(--radius-sm); font-family: var(--font-body); font-size: 1rem; resize: vertical;"></textarea>
                    </div>

                    <!-- TCPA Consent (THREE checkboxes) -->
                    <fieldset class="form-consent-fieldset" style="border: 1px solid var(--color-border); border-radius: var(--radius); padding: var(--space-lg); margin-bottom: var(--space-xl); background: rgba(0,0,0,0.02);">
                        <legend class="form-consent-legend" style="padding: 0 var(--space-sm); font-weight: 600; font-size: 0.95rem;">Communication Consent</legend>

                        <label class="form-consent-item" style="display: flex; gap: var(--space-sm); align-items: flex-start; margin-bottom: var(--space-md); cursor: pointer;">
                            <input type="checkbox" name="email_opt_in" value="yes" class="consent-checkbox" style="width: 18px; height: 18px; margin-top: 3px; flex-shrink: 0; accent-color: var(--color-primary); cursor: pointer;">
                            <span class="consent-label" style="font-size: 0.9rem; line-height: 1.5; color: var(--color-text-light);"><strong>Email updates (optional):</strong> I agree to receive emails from <?php echo htmlspecialchars($siteName); ?> about my inquiry and services. I can unsubscribe anytime by emailing <?php echo htmlspecialchars($email); ?>.</span>
                        </label>

                        <label class="form-consent-item" style="display: flex; gap: var(--space-sm); align-items: flex-start; margin-bottom: var(--space-md); cursor: pointer;">
                            <input type="checkbox" name="sms_opt_in" value="yes" class="consent-checkbox" style="width: 18px; height: 18px; margin-top: 3px; flex-shrink: 0; accent-color: var(--color-primary); cursor: pointer;">
                            <span class="consent-label" style="font-size: 0.9rem; line-height: 1.5; color: var(--color-text-light);"><strong>SMS/text messages (optional):</strong> I agree to receive texts from <?php echo htmlspecialchars($siteName); ?> at the number provided. Message frequency varies. Message and data rates may apply. Reply STOP to unsubscribe, HELP for help. <strong>Consent is not a condition of purchase.</strong></span>
                        </label>

                        <label class="form-consent-item form-consent-required" style="display: flex; gap: var(--space-sm); align-items: flex-start; cursor: pointer;">
                            <input type="checkbox" name="terms_accepted" value="yes" class="consent-checkbox" required style="width: 18px; height: 18px; margin-top: 3px; flex-shrink: 0; accent-color: var(--color-primary); cursor: pointer;">
                            <span class="consent-label" style="font-size: 0.9rem; line-height: 1.5; color: var(--color-text-light);">I have read and agree to the <a href="/privacy-policy/" target="_blank" rel="noopener" style="color: var(--color-primary); text-decoration: underline;">Privacy Policy</a> and <a href="/terms/" target="_blank" rel="noopener" style="color: var(--color-primary); text-decoration: underline;">Terms of Service</a>. <span class="required-star" style="color: var(--color-accent);">*</span></span>
                        </label>
                    </fieldset>

                    <button type="submit" class="btn btn-primary btn-block" style="width: 100%; padding: 16px; font-size: 1.125rem;">Send My Request</button>
                </form>
            </div>

            <!-- Contact Info Sidebar -->
            <div class="split-content" style="flex: 1;">
                <div style="background: var(--color-bg-alt); padding: var(--space-2xl); border-radius: var(--radius); position: sticky; top: calc(var(--nav-height) + 20px);">
                    <h3 style="margin-bottom: var(--space-lg); font-size: 1.5rem;">Contact Information</h3>

                    <div style="margin-bottom: var(--space-2xl);">
                        <h4 style="font-size: 0.875rem; text-transform: uppercase; letter-spacing: 0.05em; color: var(--color-text-light); margin-bottom: var(--space-sm); font-family: var(--font-accent);">Phone</h4>
                        <a href="tel:<?php echo $phoneRaw; ?>" style="display: flex; align-items: center; gap: var(--space-sm); font-size: 1.25rem; color: var(--color-primary); font-weight: 700; transition: opacity var(--transition);">
                            <svg aria-hidden="true" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" /></svg>
                            <?php echo htmlspecialchars($phone); ?>
                        </a>
                    </div>

                    <div style="margin-bottom: var(--space-2xl);">
                        <h4 style="font-size: 0.875rem; text-transform: uppercase; letter-spacing: 0.05em; color: var(--color-text-light); margin-bottom: var(--space-sm); font-family: var(--font-accent);">Email</h4>
                        <a href="mailto:<?php echo htmlspecialchars($email); ?>" style="display: flex; align-items: center; gap: var(--space-sm); color: var(--color-primary); transition: opacity var(--transition); word-break: break-all;">
                            <svg aria-hidden="true" width="20" height="20" style="flex-shrink: 0;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7" /><rect x="2" y="4" width="20" height="16" rx="2" /></svg>
                            <?php echo htmlspecialchars($email); ?>
                        </a>
                    </div>

                    <div style="margin-bottom: var(--space-2xl);">
                        <h4 style="font-size: 0.875rem; text-transform: uppercase; letter-spacing: 0.05em; color: var(--color-text-light); margin-bottom: var(--space-sm); font-family: var(--font-accent);">Service Area</h4>
                        <div style="display: flex; align-items: flex-start; gap: var(--space-sm);">
                            <svg aria-hidden="true" width="20" height="20" style="flex-shrink: 0; margin-top: 2px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" /><circle cx="12" cy="10" r="3" /></svg>
                            <span><?php echo htmlspecialchars($address['city']); ?>, <?php echo htmlspecialchars($address['state']); ?> <?php echo htmlspecialchars($address['zip']); ?><br>and surrounding areas</span>
                        </div>
                    </div>

                    <div style="margin-bottom: var(--space-2xl);">
                        <h4 style="font-size: 0.875rem; text-transform: uppercase; letter-spacing: 0.05em; color: var(--color-text-light); margin-bottom: var(--space-sm); font-family: var(--font-accent);">Hours</h4>
                        <div style="display: flex; align-items: flex-start; gap: var(--space-sm);">
                            <svg aria-hidden="true" width="20" height="20" style="flex-shrink: 0; margin-top: 2px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10" /><path d="M12 6v6l4 2" /></svg>
                            <span><?php echo htmlspecialchars($businessHours); ?></span>
                        </div>
                    </div>

                    <div style="padding: var(--space-lg); background: rgba(var(--color-accent-rgb, 224, 167, 44), 0.1); border-radius: var(--radius-sm); border-left: 4px solid var(--color-accent);">
                        <p style="margin: 0; font-size: 0.9rem; line-height: 1.5;"><strong style="color: var(--color-accent);">Emergency Service:</strong> Same-day response available for storm damage and hazardous tree situations. Call us immediately.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Google Maps -->
<section class="section" style="padding: 0;">
    <div class="map-embed" style="position: relative; width: 100%; height: 450px; overflow: hidden;">
        <?php echo $gbpMapEmbed; ?>
        <div style="position: absolute; bottom: 20px; left: 50%; transform: translateX(-50%); z-index: 10;">
            <a href="<?php echo htmlspecialchars($directionsUrl); ?>" target="_blank" rel="noopener" class="btn btn-primary" style="box-shadow: 0 4px 12px rgba(0,0,0,0.3);">
                <svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.106 5.553a2 2 0 0 0 1.788 0l3.659-1.83A1 1 0 0 1 21 4.619v12.764a2 2 0 0 1-.211.894l-4.553 8.38a2 2 0 0 1-1.788 1.106h-4.894a2 2 0 0 1-1.788-1.106l-4.553-8.38A2 2 0 0 1 3 17.383V4.619a1 1 0 0 1 1.447-.894z" /><path d="m12 6 3 3-3 3-3-3z" /></svg>
                Get Directions
            </a>
        </div>
    </div>
</section>

<!-- Service Areas -->
<section class="section" style="background: var(--color-bg-alt); padding: var(--space-4xl) 0;">
    <div class="container text-center">
        <h2 style="margin-bottom: var(--space-md);">Proudly Serving the Greater Greensboro Area</h2>
        <p style="margin-bottom: var(--space-2xl); color: var(--color-text-light); max-width: 60ch; margin-left: auto; margin-right: auto;">We provide professional tree care services throughout Greensboro and surrounding communities in Guilford and Alamance Counties.</p>

        <div style="display: flex; flex-wrap: wrap; gap: var(--space-md); justify-content: center; max-width: 800px; margin: 0 auto;">
            <?php foreach ($serviceAreas as $area): ?>
            <span style="padding: 8px 16px; background: #fff; border-radius: 20px; font-size: 0.9rem; box-shadow: 0 2px 4px rgba(0,0,0,0.08);"><?php echo htmlspecialchars($area); ?></span>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
