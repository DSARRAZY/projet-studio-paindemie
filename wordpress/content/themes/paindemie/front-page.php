<?php
get_header();
?>

<!--<div class="wrapper">-->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v10.0" nonce="9LIAp3ae"></script>

<!-- Studio part -->
<section id="studio">
  <div class="studio-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12col-md-12 col-sm-12 textStudio">
          <h2 class="titleSection">Le studio</h2>
        </div>
        <div class="col-lg-5 col-md-12 col-sm-12 textStudio">
          <div class="studioDescription">
            <div class="containerStudioPart">
              <span class="studioTeaserText">
                <?php echo get_theme_mod('paindemie_theme_studio_accroche1'); ?>
              </span>
              <br>
              <p class="studioText">
                <?php echo get_theme_mod('paindemie_theme_studio_texte1'); ?>
              </p>
            </div>
            <div class="containerStudioPart">
              <span class="studioTeaserText">
                <?php echo get_theme_mod('paindemie_theme_studio_accroche2'); ?>
              </span>
              <p class="studioText">
                <?php echo get_theme_mod('paindemie_theme_studio_texte2'); ?>
              </p>
            </div>
            <div class="containerStudioPart">
              <span class="studioTeaserText">
                <?php echo get_theme_mod('paindemie_theme_studio_accroche3'); ?>
              </span>
              <p class="studioText">
                <?php echo get_theme_mod('paindemie_theme_studio_texte3'); ?>
              </p>
            </div>
            <div class="containerStudioPart">
              <span class="studioTeaserText">
                <?php echo get_theme_mod('paindemie_theme_studio_accroche4'); ?>
              </span>
              <p class="studioText">
                <?php echo get_theme_mod('paindemie_theme_studio_texte4'); ?>
              </p>
            </div>
          </div>
        </div>
        <!-- Carousel section-->
        <div class="col-lg-7 col-md-12 col-sm-12 imagesStudio text-center">
          <div id="studioCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#studioCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#studioCarousel" data-slide-to="1"></li>
              <li data-target="#studioCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">

              <?php $slider = get_posts(array('post_type' => 'slider', 'posts_per_page' => 30)); ?>
              <?php $count = 0; ?>
              <?php foreach ($slider as $slide) : ?>
                <div class="carousel-item <?php echo ($count == 0) ? 'active' : ''; ?>">
                  <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($slide->ID)) ?>" class="d-block w-100" />
                  <div class="carousel-caption d-none d-md-block">
                    <h5><?php echo get_the_title($slide->ID); ?></h5>
                    <p><?php echo get_the_excerpt($slide->ID); ?></p>
                  </div>
                </div>
                <?php $count++; ?>
              <?php endforeach; ?>
            </div>

            <a class="carousel-control-prev" href="#studioCarousel" role="button" data-slide="prev">
              <span><i class="fa fa-angle-left" aria-hidden="true"></i></span>
              <span class="sr-only">Retour</span>
            </a>
            <a class="carousel-control-next" href="#studioCarousel" role="button" data-slide="next">
              <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
              <span class="sr-only">Suivant</span>
            </a>

          </div>
          <div class="StudioButton">
            <a href="<?php bloginfo('url'); ?>/equipements/" type="button" class="btn btn-primary customButton">Voir les equipements </button></a>
            <a href="<?php bloginfo('url'); ?>/contact/" type="button" class="btn btn-primary customButton">Contactez-nous</button></a>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>

<!-- actuality part-->

<section id="actuality">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 title">
        <h2 class="titleSection"> Notre actualité </h2>
      </div>
      <div class="col-lg-9 col-md-12 col-sm-12 facebook">
        <div class="fb-page" data-href="https://www.facebook.com/LePainDeMieStud" data-tabs="timeline, events" data-width="500" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
          <blockquote cite="https://www.facebook.com/LePainDeMieStud" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/LePainDeMieStud">Le Pain de Mie</a></blockquote>
        </div>
      </div>

      <div class="col-lg-3 col-md-12 col-sm-12 bottom">
        <div class='row'>
          <div class='col-lg-12 col-md-12 col-sm-12 animation'>
            <div id="bars">
              <div class="bar"></div>
              <div class="bar"></div>
              <div class="bar"></div>
              <div class="bar"></div>
              <div class="bar"></div>
              <div class="bar"></div>
              <div class="bar"></div>
              <div class="bar"></div>
              <div class="bar"></div>
              <div class="bar"></div>
            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 Mybut">
          <a href="<?php bloginfo('url'); ?>/references/" type="button" class="btn btn-primary customButton">Consultez nos references</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>

  <?php
  get_footer();
  ?>