</main>
<footer>
    <div class="contenaireFooter">
        <div class="row ">
            <div class="col-lg-4 col-md-12 col-sm-12 footerInfoContact">
                <div class="col-lg-12 col-md-12 col-sm-12 footerTitles">
                    <p>Besoin d'information ?</p>
                </div>
                <div class='row'>
                    <div class="col-lg-6 col-md-12 col-sm-12 footerInfoContactTel">
                        <div><a href="tel:+0608271057" class="contactlogoTel"><i class="fas fa-mobile-alt"></i><a></div>
                        <div class="Tel"><?php echo get_theme_mod('paindemie_theme_footer_phone');?></div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 footerInfoContactEmail">
                        <!-- Todo insert ide page contact -->
                        <div> <a href="<?php bloginfo('url'); ?>/contact/" class="contactlogoEmail"><i class="fas fa-envelope"></i></a></div>
                        <div><?php echo get_theme_mod('paindemie_theme_footer_email'); ?></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 footerInfoAddress">
                <div class="col-lg-12 col-md-12 col-sm-12 footerTitles">
                    <p>Où nous sommes ?</p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 footerInfoAddressDetails">
                    <div><a href="https://goo.gl/maps/EodqA7aouDM55RAK8" class="AdressLink"> <i class="fas fa-map-marked"></i></a></div>
                    <div>
                        <p><?php echo get_theme_mod('paindemie_theme_footer_address'); ?>
                            <br><?php echo get_theme_mod('paindemie_theme_footer_postalcode'); ?> <?php echo get_theme_mod('paindemie_theme_footer_city'); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 footerInfoSocial">
                <div class="col-lg-12 col-md-12 col-sm-12 footerTitles">
                    <p>Suivez nous :</p>
                </div>
                <div class='row'>
                    <div class="col-lg-6 col-md-6 col-sm-6 footerInfoSocialFB">
                        <a href="https://www.facebook.com/LePainDeMieStud" class="socialLinksFb"><i class="fab fa-facebook-square"></i></a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 footerInfoSocialInsta">
                        <a href="" class="socialLinksInsta"><i class="fab fa-instagram-square"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footerLinks">
            <div class='row align-items-center'>
                <div class=" col footerLink1"> <a class="footerLink" href="<?php $permalink = get_permalink($id); ?>">Plan du site</a></div>
                <div class="col footerLink2"> <a class="footerLink" href="<?php $permalink = get_permalink($id); ?>">Mentions légales</a></div>
                <div class=" col footerLink3"> <a class="footerLink" href="<?php $permalink = get_permalink($id); ?>">Copyright</a></div>
            </div>

        </div>
    </div>

</footer>
<?php
wp_footer();
?>
</body>

</html>