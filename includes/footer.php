</main>

<footer class="site-footer">
    <div class="footer-top">
        <div class="container">
            <div class="footer-grid">
                <!-- Column 1: About / Logo -->
                <div class="footer-col">
                    <img src="/assets/images/logo-mark.png" alt="<?php echo htmlspecialchars($siteName); ?>" class="footer-logo" width="80" height="80">
                    <p class="footer-tagline"><?php echo htmlspecialchars($tagline); ?></p>
                    <p class="footer-desc">Professional tree care services serving <?php echo htmlspecialchars($address['city']); ?> and surrounding areas. Expert tree removal, trimming, pruning, and emergency storm cleanup.</p>

                    <!-- Trust badges -->
                    <div class="footer-badges">
                        <span class="badge">Licensed & Insured</span>
                        <span class="badge">24/7 Emergency Service</span>
                        <span class="badge">Free Estimates</span>
                    </div>
                </div>

                <!-- Column 2: Services -->
                <div class="footer-col">
                    <h3 class="footer-heading">Our Services</h3>
                    <ul class="footer-links" role="list">
                        <?php
                        // Show first 6 services
                        $footerServices = array_slice($services, 0, 6);
                        foreach ($footerServices as $footSvc):
                        ?>
                        <li><a href="/services/<?php echo $footSvc['slug']; ?>/"><?php echo htmlspecialchars($footSvc['name']); ?></a></li>
                        <?php endforeach; ?>
                        <?php if (count($services) > 6): ?>
                        <li><a href="/services/" class="link-arrow">View All Services
                            <svg aria-hidden="true" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14" /><path d="m12 5 7 7-7 7" /></svg>
                        </a></li>
                        <?php endif; ?>
                    </ul>
                </div>

                <!-- Column 3: Service Areas -->
                <div class="footer-col">
                    <h3 class="footer-heading">Service Areas</h3>
                    <ul class="footer-links" role="list">
                        <?php
                        // Show first 6 areas with links when pages exist
                        $footerAreas = array_slice($serviceAreas, 0, 6);
                        foreach ($footerAreas as $footArea):
                            $areaSlug = getAreaSlug($footArea);
                            $areaPath = '/areas/' . $areaSlug . '/';
                            if (is_dir($_SERVER['DOCUMENT_ROOT'] . $areaPath)):
                        ?>
                        <li><a href="<?php echo $areaPath; ?>"><?php echo htmlspecialchars($footArea); ?></a></li>
                        <?php else: ?>
                        <li><a href="/service-areas/#<?php echo $areaSlug; ?>"><?php echo htmlspecialchars($footArea); ?></a></li>
                        <?php
                            endif;
                        endforeach;
                        ?>
                        <li><a href="/service-areas/" class="link-arrow">View All Areas
                            <svg aria-hidden="true" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14" /><path d="m12 5 7 7-7 7" /></svg>
                        </a></li>
                    </ul>

                    <!-- Quick Links -->
                    <h3 class="footer-heading" style="margin-top: 2rem;">Quick Links</h3>
                    <ul class="footer-links" role="list">
                        <li><a href="/about/">About Us</a></li>
                        <li><a href="/blog/">Blog</a></li>
                        <li><a href="/faq/">FAQ</a></li>
                        <li><a href="/contact/">Contact</a></li>
                    </ul>
                </div>

                <!-- Column 4: Contact Info -->
                <div class="footer-col">
                    <h3 class="footer-heading">Get In Touch</h3>

                    <div class="footer-contact">
                        <a href="tel:<?php echo formatPhone($phone); ?>" class="contact-item">
                            <svg aria-hidden="true" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" /></svg>
                            <span><?php echo htmlspecialchars($phone); ?></span>
                        </a>

                        <a href="mailto:<?php echo htmlspecialchars($email); ?>" class="contact-item">
                            <svg aria-hidden="true" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7" /><rect x="2" y="4" width="20" height="16" rx="2" /></svg>
                            <span><?php echo htmlspecialchars($email); ?></span>
                        </a>

                        <div class="contact-item">
                            <svg aria-hidden="true" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" /><circle cx="12" cy="10" r="3" /></svg>
                            <span>
                                <?php if ($addressPublic): ?>
                                    <?php echo htmlspecialchars($address['street']); ?><br>
                                <?php endif; ?>
                                <?php echo htmlspecialchars($address['city']); ?>, <?php echo htmlspecialchars($address['state']); ?> <?php echo htmlspecialchars($address['zip']); ?>
                            </span>
                        </div>

                        <div class="contact-item">
                            <svg aria-hidden="true" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10" /><path d="M12 6v6l4 2" /></svg>
                            <span><?php echo htmlspecialchars($businessHours); ?></span>
                        </div>
                    </div>

                    <a href="#estimate" class="btn btn-primary" style="margin-top: 1.5rem;">Request Free Estimate</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Entity Block (AEO) -->
    <div class="footer-entity">
        <div class="container">
            <div itemscope itemtype="https://schema.org/TreeService">
                <meta itemprop="name" content="<?php echo htmlspecialchars($siteName); ?>">
                <meta itemprop="url" content="<?php echo $siteUrl; ?>">
                <meta itemprop="telephone" content="<?php echo htmlspecialchars($phone); ?>">
                <p>
                    <strong><?php echo htmlspecialchars($siteName); ?></strong> is a professional tree service company based in
                    <?php echo htmlspecialchars($address['city']); ?>, <?php echo htmlspecialchars($address['state']); ?>.
                    We provide expert tree removal, tree trimming, tree pruning, stump grinding, land clearing, and emergency storm cleanup
                    throughout <?php echo htmlspecialchars($address['city']); ?> and surrounding areas.
                    Our licensed arborists deliver safe, reliable tree care services with a focus on customer satisfaction and environmental stewardship.
                </p>
            </div>
        </div>
    </div>

    <!-- Footer Legal Row (MANDATORY v6.1+) -->
    <div class="footer-legal-row">
        <div class="container">
            <nav aria-label="Legal">
                <a href="/privacy-policy/">Privacy Policy</a>
                <span class="footer-legal-divider">|</span>
                <a href="/terms/">Terms of Service</a>
                <span class="footer-legal-divider">|</span>
                <a href="/cookie-policy/">Cookie Policy</a>
                <span class="footer-legal-divider">|</span>
                <a href="/accessibility/">Accessibility</a>
                <span class="footer-legal-divider">|</span>
                <a href="/privacy-policy/#ccpa-rights">Do Not Sell or Share My Personal Information</a>
                <span class="footer-legal-divider">|</span>
                <a href="/sitemap.xml">Sitemap</a>
            </nav>
        </div>
    </div>

    <!-- Footer Bottom Bar -->
    <div class="footer-bottom">
        <div class="container">
            <p class="footer-copyright">&copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars($siteName); ?>. All rights reserved.</p>
            <p class="footer-credit">
                <a href="https://pageoneinsights.com" rel="dofollow" target="_blank">Web Design & Hosting by Page One Insights, LLC</a>
            </p>
        </div>
    </div>
</footer>

<!-- Mobile Floating CTA Bar (visible below 768px) -->
<div class="mobile-cta-bar" aria-label="Contact options">
    <a href="tel:<?php echo formatPhone($phone); ?>" class="mobile-cta-button">
        <svg aria-hidden="true" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" /></svg>
        <span>Call Now</span>
    </a>
    <a href="#estimate" class="mobile-cta-button mobile-cta-button--primary">
        <span>Free Estimate</span>
    </a>
</div>

<!-- Back to Top Button -->
<button type="button" class="back-to-top" aria-label="Back to top" id="back-to-top">
    <svg aria-hidden="true" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6" /></svg>
</button>

<!-- Scripts (v6.3 — ALL defer) -->
<script src="/assets/js/main.js" defer></script>
<script src="/assets/js/animations.js" defer></script>

<!-- Back-to-top inline script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const backToTop = document.getElementById('back-to-top');
    if (!backToTop) return;

    // Show button on scroll
    window.addEventListener('scroll', function() {
        if (window.scrollY > 400) {
            backToTop.classList.add('visible');
        } else {
            backToTop.classList.remove('visible');
        }
    });

    // Smooth scroll to top
    backToTop.addEventListener('click', function() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
});
</script>

</body>
</html>
