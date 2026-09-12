<?php
/* Mid-page estimate band (v6.3) — About, FAQ and blog posts. Compact three-up
   form, same leads endpoint + consent as the hero form. Pages set $ctaBandId. */
$ctaBandId = $ctaBandId ?? 'cta-band';
$ctaBandHeading = $ctaBandHeading ?? 'Get a free on-site estimate';
$ctaBandCopy = $ctaBandCopy ?? 'Tell us what the tree is doing and where it sits. We walk the property, flag hazards, and hand you a firm written price — no phone-only guesses.';
?>
<section class="cta-band" id="estimate" aria-label="Request a free estimate">
  <div class="container">
    <div class="cta-band__grid">
      <div class="cta-band__copy">
        <span class="eyebrow-label">Free Estimates</span>
        <h2><?php echo htmlspecialchars($ctaBandHeading); ?></h2>
        <p><?php echo htmlspecialchars($ctaBandCopy); ?></p>
        <a class="link-call" href="tel:<?php echo formatPhone($phone); ?>">
          <svg aria-hidden="true" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
          or call <?php echo htmlspecialchars($phone); ?>
        </a>
      </div>
      <div class="cta-band__card">
        <h3>Same-day reply, Mon&ndash;Sat</h3>
        <form action="<?php echo htmlspecialchars($formAction); ?>" method="POST" class="cta-band__form">
          <input type="hidden" name="_next" value="<?php echo htmlspecialchars($siteUrl); ?>/thank-you">
          <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
          <?php echo p1_attribution_fields($ctaBandId); ?>
          <input type="hidden" name="consent_version" value="v2.1">
          <input type="hidden" name="consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">
          <div class="form-row"><label class="sr-only" for="<?php echo $ctaBandId; ?>-name">Name</label><input id="<?php echo $ctaBandId; ?>-name" type="text" name="name" placeholder="Name" autocomplete="name" required></div>
          <div class="form-row"><label class="sr-only" for="<?php echo $ctaBandId; ?>-phone">Phone</label><input id="<?php echo $ctaBandId; ?>-phone" type="tel" name="phone" placeholder="Phone" autocomplete="tel" required></div>
          <div class="form-row"><label class="sr-only" for="<?php echo $ctaBandId; ?>-email">Email</label><input id="<?php echo $ctaBandId; ?>-email" type="email" name="email" placeholder="Email" autocomplete="email" required></div>
          <div class="form-row form-row--wide"><label class="sr-only" for="<?php echo $ctaBandId; ?>-service">Service needed</label>
            <select id="<?php echo $ctaBandId; ?>-service" name="service">
              <option value="">What do you need?</option>
              <?php foreach ($services as $bandOpt): ?>
              <option value="<?php echo htmlspecialchars($bandOpt['name']); ?>"><?php echo htmlspecialchars($bandOpt['name']); ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Get my free estimate</button>
          <label class="consent"><input type="checkbox" name="terms_accepted" value="yes" required><span>I agree to the <a href="/terms/" target="_blank" rel="noopener">Terms</a> and <a href="/privacy-policy/" target="_blank" rel="noopener">Privacy Policy</a> and consent to be contacted. *</span></label>
        </form>
      </div>
    </div>
  </div>
</section>
