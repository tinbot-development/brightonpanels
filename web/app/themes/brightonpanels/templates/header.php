<header class="banner">
  <div class="top-header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 top-nav">
          <p>
            4 Bignell Road, Moorabbin VIC 3189  |  <a href="tel:0395553522">03 9555 3522</a>  |  <a href="mailto:info@brightonpanelworks.com.au">info@brightonpanelworks.com.au</a>
          </p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 top-social">
          <?php dynamic_sidebar('header-right'); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="main-nav">
    <div class="row">
      <div class="col-sm-12">
      <a href="home"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/images/comp-logo.png" alt="banner"></a>
      </div>
    </div>
    <div class="container">
      <div class="col-sm-12 main-right">
        <nav class="navbar navbar-default">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        </div>
        <?php
        if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav']);
        endif;
        ?>
      </nav>
      </div>
    </div>
  </div>
</header>
  <?php get_template_part('templates/page-banner', 'page'); ?>
