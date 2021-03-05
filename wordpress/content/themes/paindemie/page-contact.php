<?php
get_header();
?>
<section class="contact-image">
</section>
<section class="image-contact">
  <div class="section-content">
    <h2 class="section-header"><?php echo get_theme_mod('paindemie_theme_contact_title'); ?></h2>
    <h3 class="section-subtitle"><?php echo get_theme_mod('paindemie_theme_contact_subtitle'); ?></h3>
  </div>

  <div class="row contact_form">
    <div class="col-sm-12 col-md-6 col-lg-6 left">
      <?php echo do_shortcode('[contact-form-7 id="50" title="formulaire de contact last"]'); ?>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-6 right_contact row justify-content-center">
      <div class="adress_tel">
        <div class="tel">
          <div><i class="fas fa-mobile-alt"></i></div>
          <div>
            <p><?php echo get_theme_mod('paindemie_theme_contact_phone'); ?></p>
          </div>
        </div>

        <div class="social">
          <a href="https://www.facebook.com/LePainDeMieStud" <i class="fab fa-facebook-square"></i></a>
          <a href="" <i class="fab fa-instagram-square"></i></a>
        </div>

        <div class="adress">
          <div><i class="fas fa-map-marked"></i></div>
          <div>
            <P>Le Pain de Mie</P>
            <P> 8 rue Auguste DAIX </p>
            <P> 94260 Fresnes </P>
            <P> France </p>
          </div>
        </div>

        <div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2630.457425920189!2d2.317181115960155!3d48.75406037927745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6777ea2132361%3A0xf0d5ec4001561542!2sLe%20Pain%20de%20Mie%20Studio!5e0!3m2!1sfr!2sfr!4v1614508663415!5m2!1sfr!2sfr" width="200" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
?>