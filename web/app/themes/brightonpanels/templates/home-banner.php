<?php if ( function_exists( 'soliloquy' ) ) { soliloquy( '25' ); } ?>


<div class="container">
  <div class="row logo-padding">
    <div class="col-xs-12 col-sm-6 col-md-6">
        <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/images/repair-logo.png" alt="logo">
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 table-padding">
        <table>
          <tr>
            <td>
              <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/images/logo-img1.png" alt="logo">
            </td>
            <td>
              <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/images/logo-img2.png" alt="logo">
            </td>
            <td>
              <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/images/logo-img3.png" alt="logo">
            </td>
            <td>
              <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/images/logo-img4.png" alt="logo">
            </td>
          </tr>
        </table>
        <table>
          <tr>
            <td>
              <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/images/logo-img5.png" alt="logo">
            </td>
            <td>
                <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/images/logo-img6.png" alt="logo">
            </td>
            <td>
                <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/images/logo-img7.png" alt="logo">
            </td>
            <td>
              <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/images/logo-img8.png" alt="logo">
            </td>
          </tr>
        </table>

    </div>
  </div>
</div>

<div class="content-repair-bg">
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
