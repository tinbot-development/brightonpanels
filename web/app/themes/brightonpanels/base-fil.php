<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <div class="wrap" role="document">
      <div class="content row">
        <main class="main">
          <div class="container">
            <?php include Wrapper\template_path(); ?>
          </div>
          <?php if ( is_page('home')) : ?>
            <div class="c0ntent-repair-bg">
              <div class="container">
                <div class="row">
                  <?php
                  // check if the flexible content field has rows of data
                  if( have_rows('content') ):
                  ?>
                  <?php while ( have_rows('content') ) : the_row();
                  $image= get_sub_field('image');
                  ?>
                  <?php if( get_row_layout() == 'blocks' ): ?>

                    <div class="col-sm-6">
                    <p>
                      <?php the_sub_field('content'); ?>
                    </p>
                    </div>
                    <div class="col-sm-6">
                      <?php echo '<img class="img-responsive" src="' . $image['url'] . '" alt="' . $image['alt'] . '" />'; ?>
                    </div>

                  <?php
                  endif;
                  endwhile;
                  else :
                  // no layouts found
                  endif;
                  ?>
                </div>
              </div>

            </div>
            <?php else: ?>
            <?php endif; ?>

          <div class="container">
            <div class="row padding-row">
              <div class="col-sm-6 instagram-text">
              <?php
              // check if the flexible content field has rows of data
              if( have_rows('content') ):
              ?>
              <?php while ( have_rows('content') ) : the_row();
              $image= get_sub_field('image'); ?>
              <?php if( get_row_layout() == 'instagram' ): ?>
              <h1><?php the_sub_field('title'); ?></h1>
              <p>
              <?php the_sub_field('content'); ?>
              </p>
              <?php echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" />'; ?>
              <?php
              endif; ?>
              <?php
              endwhile;
              else :
              // no layouts found
              endif;
              ?>
              </div>
              <div class="col-sm-6 news-text">
              <?php
              // check if the flexible content field has rows of data
              if( have_rows('content') ):
              ?>
              <?php while ( have_rows('content') ) : the_row();
              $image= get_sub_field('image'); ?>

              <?php if( get_row_layout() == 'news' ): ?>
              <h1><?php the_sub_field('title'); ?></h1>
              <p>
              <?php the_sub_field('content'); ?>
              </p>
              <?php echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" />'; ?>
              <?php
              endif; ?>
              <?php
              endwhile;
              else :
              // no layouts found
              endif;
              ?>
              </div>
            </div>
          </div>
        </main><!-- /.main -->
        <?php  get_template_part('templates/bottom');?>
        <?php if (Setup\display_sidebar()) : ?>
          <aside class="sidebar">
            <?php include Wrapper\sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        <?php endif; ?>
      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
