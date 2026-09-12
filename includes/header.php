<!-- Skip to main content (accessibility) -->
<a href="#main-content" class="skip-link">Skip to main content</a>

<header class="site-header site-header--dark" data-header>
    <nav class="navbar" aria-label="Main navigation">
        <div class="navbar-inner container">
            <!-- Logo -->
            <a href="/" class="site-logo" aria-label="<?php echo htmlspecialchars($siteName); ?> Home">
                <img src="/assets/images/logo-mark-v2.png" alt="<?php echo htmlspecialchars($siteName); ?>" width="95" height="88">
                <span class="logo-text" aria-hidden="true"><span class="logo-name">Green Limb</span><span class="logo-tagline">Tree Service &middot; Greensboro</span></span>
            </a>

            <!-- Desktop Navigation -->
            <ul class="navbar-links" role="list">
                <li><a href="/" <?php if(isActivePage('home')) echo 'aria-current="page"'; ?>>Home</a></li>

                <!-- Services Dropdown -->
                <li class="has-dropdown">
                    <button type="button" class="dropdown-toggle" aria-expanded="false" aria-haspopup="true">
                        Services
                        <svg aria-hidden="true" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6" /></svg>
                    </button>
                    <ul class="dropdown" role="menu" style="display:none">
                        <?php foreach ($services as $navSvc): ?>
                        <li role="none"><a href="/services/<?php echo $navSvc['slug']; ?>/" role="menuitem"><?php echo htmlspecialchars($navSvc['name']); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </li>

                <!-- Service Areas Dropdown (Premium) -->
                <li class="has-dropdown">
                    <button type="button" class="dropdown-toggle" aria-expanded="false" aria-haspopup="true">
                        Service Areas
                        <svg aria-hidden="true" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6" /></svg>
                    </button>
                    <ul class="dropdown" role="menu" style="display:none">
                        <?php
                        // Show first 8 areas in dropdown, link to main page for all
                        $displayAreas = array_slice($serviceAreas, 0, 8);
                        foreach ($displayAreas as $navArea):
                            $areaSlug = getAreaSlug($navArea);
                            $areaPath = '/service-areas/' . $areaSlug . '/';
                            // Gate links until pages exist
                            if (is_dir($_SERVER['DOCUMENT_ROOT'] . $areaPath)):
                        ?>
                        <li role="none"><a href="<?php echo $areaPath; ?>" role="menuitem"><?php echo htmlspecialchars($navArea); ?></a></li>
                        <?php
                            endif;
                        endforeach;
                        ?>
                        <li role="none" class="dropdown-divider"></li>
                        <li role="none"><a href="/service-areas/" role="menuitem" class="dropdown-all">View All Areas</a></li>
                    </ul>
                </li>

                <li><a href="/about/" <?php if(isActivePage('about')) echo 'aria-current="page"'; ?>>About</a></li>
                <li><a href="/blog/" <?php if(isActivePage('blog')) echo 'aria-current="page"'; ?>>Blog</a></li>
                <li><a href="/contact/" <?php if(isActivePage('contact')) echo 'aria-current="page"'; ?>>Contact</a></li>
            </ul>

            <!-- Desktop CTA -->
            <div class="navbar-cta">
                <a href="tel:<?php echo formatPhone($phone); ?>" class="btn navbar-phone btn-outline-white">
                    <svg aria-hidden="true" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" /></svg>
                    <?php echo htmlspecialchars($phone); ?>
                </a>
                <a href="#estimate" class="btn btn-accent">Free Estimate</a>
            </div>

            <!-- Mobile Hamburger -->
            <button type="button" class="hamburger" aria-label="Toggle navigation" aria-expanded="false" aria-controls="mobile-menu">
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
            </button>
        </div>
    </nav>
</header>

<!-- Mobile Menu (OUTSIDE header to avoid backdrop-filter containment) -->
<div class="mobile-menu" id="mobile-menu" aria-hidden="true">
    <div class="mobile-menu-inner">
        <ul class="mobile-menu-links" role="list">
            <li><a href="/" <?php if(isActivePage('home')) echo 'aria-current="page"'; ?>>Home</a></li>

            <!-- Services (all, no dropdown) -->
            <li class="mobile-menu-section">
                <span class="mobile-menu-label">Services</span>
                <ul class="mobile-submenu" role="list">
                    <?php foreach ($services as $navSvc): ?>
                    <li><a href="/services/<?php echo $navSvc['slug']; ?>/"><?php echo htmlspecialchars($navSvc['name']); ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </li>

            <li><a href="/service-areas/" <?php if(isActivePage('service-areas')) echo 'aria-current="page"'; ?>>Service Areas</a></li>
            <li><a href="/about/" <?php if(isActivePage('about')) echo 'aria-current="page"'; ?>>About</a></li>
            <li><a href="/blog/" <?php if(isActivePage('blog')) echo 'aria-current="page"'; ?>>Blog</a></li>
            <li><a href="/faq/" <?php if(isActivePage('faq')) echo 'aria-current="page"'; ?>>FAQ</a></li>
            <li><a href="/contact/" <?php if(isActivePage('contact')) echo 'aria-current="page"'; ?>>Contact</a></li>
        </ul>

        <div class="mobile-menu-cta">
            <a href="tel:<?php echo formatPhone($phone); ?>" class="btn btn-primary btn-block">
                <svg aria-hidden="true" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" /></svg>
                <?php echo htmlspecialchars($phone); ?>
            </a>
            <a href="#estimate" class="btn btn-secondary btn-block">Free Estimate</a>
        </div>
    </div>
</div>

<main id="main-content">
