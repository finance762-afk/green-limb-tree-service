<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ── Page-level setup ─────────────────────────────────────────────────────── */
$pageType        = 'contact';
$currentPage     = 'contact';
$pageTitle       = 'Contact Green Limb Tree Service | Free Estimates in Greensboro, NC';
$pageDescription = 'Contact Green Limb Tree Service for a free tree service estimate in Greensboro, NC. Call (336) 254-7993 or fill out our form for same-day response on tree removal, trimming, and storm work.';
$canonicalUrl    = $siteUrl . '/contact/';

/* Breadcrumb + WebPage schema */
$breadcrumbs = [
    ['name' => 'Home', 'url' => '/'],
    ['name' => 'Contact', 'url' => '/contact/'],
];
$schemaGraph = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'WebPage',
            '@id'   => $canonicalUrl . '#webpage',
            'url'   => $canonicalUrl,
            'name'  => $pageTitle,
            'description' => $pageDescription,
            'isPartOf' => ['@id' => $siteUrl . '/#website'],
            'about' => ['@id' => $siteUrl . '/#organization'],
            'breadcrumb' => ['@id' => $canonicalUrl . '#breadcrumb'],
        ],
        [
            '@type' => 'BreadcrumbList',
            '@id'   => $canonicalUrl . '#breadcrumb',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $siteUrl . '/'],
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'Contact', 'item' => $canonicalUrl],
            ],
        ],
    ],
];
$schemaMarkup = '<script type="application/ld+json">' . json_encode($schemaGraph, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<?php echo $schemaMarkup; ?>

<style>
/* ============================================================================
   Contact page composition (Green Limb Tree Service)
   ============================================================================ */

/* Hero: interior compact pattern */
.contact-hero { padding: calc(var(--nav-height) + clamp(2rem, 5vw, 3.5rem)) 0 clamp(2.5rem, 6vw, 4rem); background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%); color: var(--color-white); position: relative; overflow: hidden; }
.contact-hero::before { content: ''; position: absolute; inset: 0; background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100"><filter id="n"><feTurbulence baseFrequency=".9" numOctaves="3"/></filter><rect width="100" height="100" filter="url(%23n)" opacity=".05"/></svg>'); opacity: .4; mix-blend-mode: overlay; }
.contact-hero .container { position: relative; z-index: 1; max-width: var(--max-width); }
.contact-hero h1 { color: var(--color-white); }
.contact-hero-lead { font-size: var(--fs-lead); color: color-mix(in srgb, var(--color-white) 90%, transparent); margin-top: var(--space-3); max-width: 60ch; }

/* Contact grid: form + sidebar */
.contact-grid { display: grid; grid-template-columns: 1.4fr 1fr; gap: clamp(2.5rem, 5vw, 4rem); align-items: start; margin-top: var(--space-8); }
@media (max-width: 900px) { .contact-grid { grid-template-columns: 1fr; } }

/* Contact form */
.contact-form-card { background: var(--color-surface); border: 1px solid var(--color-line); border-radius: var(--radius-lg); padding: clamp(1.75rem, 4vw, 2.5rem); box-shadow: var(--shadow-lg); }
.contact-form-card h2 { font-size: var(--fs-h3); margin-bottom: var(--space-2); }
.contact-form-card .form-intro { color: var(--color-ink-2); margin-bottom: var(--space-5); }

/* Contact sidebar */
.contact-sidebar { display: flex; flex-direction: column; gap: var(--space-6); }

/* Contact info card */
.contact-info-card { background: var(--color-paper-2); border: 1px solid var(--color-line); border-radius: var(--radius-lg); padding: clamp(1.5rem, 3vw, 2rem); }
.contact-info-card h3 { font-size: var(--fs-h4); margin-bottom: var(--space-4); }
.contact-info-list { display: flex; flex-direction: column; gap: var(--space-3); list-style: none; padding: 0; margin: 0; }
.contact-info-item { display: flex; align-items: flex-start; gap: var(--space-3); }
.contact-info-item svg { width: 20px; height: 20px; color: var(--color-primary); flex-shrink: 0; margin-top: 2px; }
.contact-info-item a { color: var(--color-primary); font-weight: 600; text-decoration: none; }
.contact-info-item a:hover { text-decoration: underline; }
.contact-info-item .info-text { line-height: 1.6; }

/* Map embed */
.map-embed { border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow); }
.map-embed iframe { width: 100%; height: 360px; border: none; display: block; }
.directions-link { display: inline-flex; align-items: center; gap: var(--space-2); margin-top: var(--space-3); padding: var(--space-2) var(--space-4); background: var(--color-primary); color: var(--color-white); border-radius: var(--radius); font-weight: 600; text-decoration: none; transition: var(--transition); }
.directions-link:hover { background: var(--color-primary-dark); transform: translateY(-1px); }
.directions-link svg { width: 18px; height: 18px; }

/* Hours badge */
.hours-badge { display: inline-flex; align-items: center; gap: var(--space-2); background: color-mix(in srgb, var(--color-accent) 15%, transparent); border: 2px solid var(--color-accent); border-radius: var(--radius); padding: var(--space-2) var(--space-3); font-family: var(--font-accent); font-weight: 700; font-size: var(--fs-small); text-transform: uppercase; letter-spacing: .06em; color: var(--color-accent-dark); margin-top: var(--space-4); }
.hours-badge svg { width: 18px; height: 18px; }
</style>

<!-- ═══════════════════════ HERO ═══════════════════════ -->
<section class="contact-hero" aria-label="Contact Green Limb Tree Service">
    <div class="container">
        <div class="reveal-up">
            <span class="eyebrow-label" style="color: var(--color-accent);">Get in Touch</span>
            <h1>Ready to talk about your tree project?</h1>
            <p class="contact-hero-lead">Green Limb Tree Service responds the same day to every inquiry. Fill out the form below or call directly — we'll get you a firm on-site estimate scheduled fast.</p>
        </div>
    </div>
</section>

<!-- ═══════════════════════ CONTACT GRID ═══════════════════════ -->
<section class="section section--light" aria-label="Contact form and information">
    <div class="container">
        <div class="contact-grid">

            <!-- Contact Form -->
            <div class="contact-form-card">
                <h2>Send us a message</h2>
                <p class="form-intro">Tell us about the job and we'll reply with next steps — usually within a few hours.</p>

                <form action="<?php echo htmlspecialchars($formAction); ?>" method="POST" class="contact-form">
                    <!-- Honeypot -->
                    <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">

                    <!-- Hidden redirect -->
                    <input type="hidden" name="_next" value="<?php echo htmlspecialchars($siteUrl); ?>/thank-you">

                    <!-- Attribution fields -->
                    <?php echo p1_attribution_fields('contact'); ?>

                    <!-- Consent metadata -->
                    <input type="hidden" name="consent_version" value="v2.1">
                    <input type="hidden" name="consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">

                    <!-- Form fields -->
                    <div class="form-grid">
                        <div class="field">
                            <label for="contact-name">Your Name <span class="required-star">*</span></label>
                            <input id="contact-name" type="text" name="name" autocomplete="name" required>
                        </div>
                        <div class="field">
                            <label for="contact-phone">Phone <span class="required-star">*</span></label>
                            <input id="contact-phone" type="tel" name="phone" autocomplete="tel" required>
                        </div>
                        <div class="field">
                            <label for="contact-email">Email <span class="required-star">*</span></label>
                            <input id="contact-email" type="email" name="email" autocomplete="email" required>
                        </div>
                        <div class="field">
                            <label for="contact-service">Service Needed</label>
                            <select id="contact-service" name="service">
                                <option value="">Select a service</option>
                                <?php foreach ($services as $svc): ?>
                                <option value="<?php echo htmlspecialchars($svc['name']); ?>"><?php echo htmlspecialchars($svc['name']); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="field full">
                            <label for="contact-message">Project Details</label>
                            <textarea id="contact-message" name="message" rows="5" placeholder="Tell us about the trees, location on the property, any hazards or deadlines, when you'd like the work done&hellip;"></textarea>
                        </div>
                    </div>

                    <!-- Three separate consent checkboxes (v2.1 TCPA pattern) -->
                    <fieldset class="form-consent-fieldset">
                        <legend class="form-consent-legend">Communication Consent</legend>

                        <!-- Email opt-in (optional) -->
                        <label class="form-consent-item">
                            <input type="checkbox" name="email_opt_in" value="yes">
                            <span class="consent-label"><strong>Email updates (optional):</strong> I agree to receive emails from Green Limb Tree Service about my inquiry, services, and promotions. I can unsubscribe anytime via the link in any email or by emailing <?php echo htmlspecialchars($email); ?>.</span>
                        </label>

                        <!-- SMS opt-in (optional) -->
                        <label class="form-consent-item">
                            <input type="checkbox" name="sms_opt_in" value="yes">
                            <span class="consent-label"><strong>SMS/Text messages (optional):</strong> I agree to receive text messages from Green Limb Tree Service at the number I provided (appointment reminders, service updates, offers). Message frequency varies. Message and data rates may apply. Reply STOP to unsubscribe, HELP for help. <strong>Consent is not a condition of purchase.</strong></span>
                        </label>

                        <!-- Terms acceptance (REQUIRED) -->
                        <label class="form-consent-item form-consent-required">
                            <input type="checkbox" name="terms_accepted" value="yes" required>
                            <span class="consent-label">I have read and agree to the <a href="/privacy-policy/">Privacy Policy</a> and <a href="/terms/">Terms of Service</a>. <span class="required-star">*</span></span>
                        </label>
                    </fieldset>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary btn-block">Send my message</button>
                    </div>
                </form>
            </div>

            <!-- Contact Sidebar -->
            <div class="contact-sidebar">

                <!-- Contact Information -->
                <div class="contact-info-card">
                    <h3>Reach us directly</h3>
                    <ul class="contact-info-list">
                        <li class="contact-info-item">
                            <svg aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
                            <div class="info-text">
                                <strong>Phone</strong><br>
                                <a href="tel:<?php echo $phoneRaw; ?>"><?php echo htmlspecialchars($phone); ?></a>
                            </div>
                        </li>
                        <li class="contact-info-item">
                            <svg aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"/><rect x="2" y="4" width="20" height="16" rx="2"/></svg>
                            <div class="info-text">
                                <strong>Email</strong><br>
                                <a href="mailto:<?php echo htmlspecialchars($email); ?>"><?php echo htmlspecialchars($email); ?></a>
                            </div>
                        </li>
                        <?php if (!empty($address['street']) && $addressPublic): ?>
                        <li class="contact-info-item">
                            <svg aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>
                            <div class="info-text">
                                <strong>Address</strong><br>
                                <?php echo htmlspecialchars($address['street']); ?><br>
                                <?php echo htmlspecialchars($address['city']); ?>, <?php echo htmlspecialchars($address['state']); ?> <?php echo htmlspecialchars($address['zip']); ?>
                            </div>
                        </li>
                        <?php endif; ?>
                        <li class="contact-info-item">
                            <svg aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                            <div class="info-text">
                                <strong>Hours</strong><br>
                                <?php echo htmlspecialchars($businessHours); ?>
                            </div>
                        </li>
                    </ul>

                    <div class="hours-badge">
                        <svg aria-hidden="true" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.7 7.7a2.5 2.5 0 1 1 1.8 4.3H2"/><path d="M9.6 4.6A2 2 0 1 1 11 8H2"/><path d="M12.6 19.4A2 2 0 1 0 14 16H2"/></svg>
                        24/7 Emergency Line
                    </div>
                </div>

                <!-- Map -->
                <div>
                    <h3 style="margin-bottom: var(--space-3);">Find us</h3>
                    <div class="map-embed">
                        <?php echo $gbpMapEmbed; ?>
                    </div>
                    <a href="<?php echo htmlspecialchars($directionsUrl); ?>" class="directions-link" target="_blank" rel="noopener">
                        <svg aria-hidden="true" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="10" r="3"/><path d="M12 21.7C17.3 17 20 13 20 10a8 8 0 1 0-16 0c0 3 2.7 6.9 8 11.7z"/></svg>
                        Get directions
                    </a>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- ═══════════════════════ SERVICE AREAS CTA ═══════════════════════ -->
<section class="section" aria-label="Service areas" style="background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%); color: var(--color-white); position: relative; overflow: hidden;">
    <div style="content: ''; position: absolute; inset: 0; background: url('data:image/svg+xml,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;100&quot; height=&quot;100&quot;><filter id=&quot;n&quot;><feTurbulence baseFrequency=&quot;.9&quot; numOctaves=&quot;3&quot;/></filter><rect width=&quot;100&quot; height=&quot;100&quot; filter=&quot;url(%23n)&quot; opacity=&quot;.05&quot;/></svg>'); opacity: .4; mix-blend-mode: overlay;"></div>
    <div class="container" style="position: relative; z-index: 1;">
        <div class="prose-centered reveal-up">
            <h2 style="color: var(--color-white);">Serving the Greensboro area</h2>
            <p style="color: color-mix(in srgb, var(--color-white) 90%, transparent); margin-top: var(--space-3);">Green Limb Tree Service covers Greensboro and the wider Piedmont Triad — including <?php echo implode(', ', array_slice($serviceAreas, 0, 5)); ?>, and surrounding areas across Guilford and Alamance counties.</p>
            <a href="tel:<?php echo $phoneRaw; ?>" class="btn btn-outline-white btn-lg" style="margin-top: var(--space-5);">Call <?php echo htmlspecialchars($phone); ?></a>
        </div>
    </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
