<header class="banner">
  <div class="top-header desktop-only">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 top-nav">
          <p>
            <i class="fa fa-map-marker"></i>&nbsp;4 Bignell Road, Moorabbin VIC 3189&nbsp;&nbsp;&nbsp;&nbsp;<a href="tel:0395553522">&nbsp;<i class="fa fa-phone"></i> 03 9555 3522</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="mailto:info@brightonpanelworks.com.au"> <i class="fa fa-envelope-o"></i>&nbsp;info@brightonpanelworks.com.au</a>
          </p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 top-social pull-right">
          <?php if(!dynamic_sidebar('header-right')): ?>
            <ul class="social-icons desktop-only">
              <li><a target="_blank" href="<?php the_field('facebook_url', 'option'); ?>" class="hvr-bob"><i class="fa fa-facebook"></i></a></li>
              <li><a target="_blank" href="<?php the_field('instagram_url', 'option'); ?>" class="hvr-bob"><i class="fa fa-instagram"></i></a></li>
              <li><a target="_blank" href="<?php the_field('youtube_url', 'option'); ?>" class="hvr-bob"><i class="fa fa-youtube"></i></a></li>
              <li><a target="_blank" href="<?php the_field('pinterest_url', 'option'); ?>" class="hvr-bob"><i class="fa fa-pinterest"></i></a></li>
              <li><a target="_blank" href="<?php the_field('twitter_url', 'option'); ?>" class="hvr-bob"><i class="fa fa-twitter"></i></a></li>
            </ul>
          <?php endif;?>
        </div>
      </div>
    </div>
  </div>
  <div class="main-nav logo-holder">
    <div class="row">
      <div class="col-sm-12 background-logo">
        <div class="col-sm-12 logo">
      <a href="<?php echo home_url();?>"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/images/comp-logo.jpg" alt="banner"></a>
      </div>
    </div>
    <div class="container desktop-only">
      <div class="col-sm-12 main-right">
        <nav class="navbar navbar-default">
        <?php
        if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav']);
        endif;
        ?>
      </nav>
      </div>
      </div>
    </div>
  </div>
</header>

