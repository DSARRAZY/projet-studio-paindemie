<?php
get_header();
?>

<section class="single_artist">
  <div class="container container_single_artist">
      <div class="row landing-page">
        <div class="vinyl-container col">
          <div class="album-cover">
            <?php the_post_thumbnail(); ?>
          </div>
          <div class="vinyl-record">
            <img class="rotating" src="<?php echo get_theme_file_uri('assets/images/vinyl.png'); ?>"alt="vinyl"/></div>
          </div>
          <div class="text-container col-md-4 offset-md-4">
            <div class="title_single_group"><?php the_title() ?></div>
            <div class="ordernow"><img src="<?php echo get_theme_file_uri('assets/images/pre-order-button.png'); ?>"alt="pre_order"/></div>
            <a href="<?php the_field('reference_url_site'); ?>" class="linkWeb">Site officiel du groupe</a><br>
            <a href="<?php echo get_post_type_archive_link('references');?>"class="linkWeb">Retour page de tous les groupes</a></br>
            <div class="extract"> Ecoutez un extrait </div>
            <div><?php echo do_shortcode( get_post_meta($post->ID, 'reference_extract_music', true)  .'');?> </div>
      
        </div>
      </div>
  </div>
</section>

<?php
get_footer();
