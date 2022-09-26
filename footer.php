</html>
  <!--============================
=            Footer            =
=============================-->
<?php global $theme_option; ?>
<footer class="footer-main">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block text-center">
            <div class="footer-logo">
              <!-- Footer Logo Dimensions -->
              <img src="<?php if ($theme_option['footer-logo']['url']){
          echo $theme_option['footer-logo']['url']; 
        }  ?>" alt="logo" class="img-fluid"  height="<?php if ($theme_option['footer-Logo-dimensions']['height']){
          echo $theme_option['footer-Logo-dimensions']['height']; 
        }  ?>"  width="<?php if ($theme_option['footer-Logo-dimensions']['width']){
          echo $theme_option['footer-Logo-dimensions']['width']; 
        }  ?>"

        <?php if ($theme_option['switch-on-footer']==0) { ?> height="<?php if ($theme_option['footer-Logo-dimensions-Pre']['height']){
          echo $theme_option['footer-Logo-dimensions-Pre']['height']; 
        }  ?>" <?php } ?> <?php if ($theme_option['switch-on-footer']==0) {  ?>  width="<?php if ($theme_option['footer-Logo-dimensions-Pre']['width']){
          echo $theme_option['footer-Logo-dimensions-Pre']['width']; 
        }  ?>"<?php } ?>>
            </div>
            <ul class="social-links-footer list-inline">
              <li class="list-inline-item">
              <?php
            if ( is_active_sidebar( 'custom-footer-widget' ) ) : ?>
                <?php dynamic_sidebar( 'custom-footer-widget' ); ?>
        <?php endif; ?>
              </li>
              <!-- <li class="list-inline-item">
                <a href="#"><i class="fa fa-twitter"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#"><i class="fa fa-instagram"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#"><i class="fa fa-rss"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#"><i class="fa fa-vimeo"></i></a>
              </li> -->
            </ul>
          </div>
          
        </div>
      </div>
    </div>
</footer>
<!-- Subfooter -->
<footer class="subfooter">
  <div class="container">
    <div class="row">
      <div class="col-md-6 align-self-center">
        <div class="copyright-text">
          <p><a href="#">Eventre</a> &#169; 2017 All Right Reserved</p>
        </div>
      </div>
      <div class="col-md-6">
          <a href="#" class="to-top"><i class="fa fa-angle-up"></i></a>
      </div>
    </div>
  </div>
</footer>
<div class="fixed-tfn-main position-fixed fixed-bottom ">
    <a class="container fixed-tfn-i text-white call-tfn d-block">
        <div class="row mx-0 align-items-center">
            <div class="col-lg-6 d-none d-lg-block">
                <h4 class="fixed-tfn-4 mb-0">
                    Cta-heading
                </h4>
                <p class="mb-0">cta-description</p>
            </div>
            <div class="col-lg-6">
                <div class="d-flex py-2 justify-content-lg-end justify-content-center">
                    <span class="fixed-mb-icon mr-3"><img class="mw-100" src="<?php echo get_template_directory_uri(); ?>/images/cta-phone-image.png" alt="cablecustomerservices"></span> <span class="fixed-tfn text-white">1-855-858-0771</span>
                </div>
            </div>
        </div>
    </a>
</div>
<?php wp_footer(); ?>
</body>

</html>