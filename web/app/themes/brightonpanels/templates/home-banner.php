<?php get_template_part('templates/section','accreditation');?>
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
            <div class="embed-container">
              <?php
              // get iframe HTML
              $iframe = get_field('video_embed');
              // use preg_match to find iframe src
              preg_match('/src="(.+?)"/', $iframe, $matches);
              $src = $matches[1];
              // add extra params to iframe src
              $params = array(
                  'controls'    => 0,
                  'showinfo'    => 0,
                  'rel'        => 0,
                  'hd'        => 1
              );
              $new_src = add_query_arg($params, $src);
              $iframe = str_replace($src, $new_src, $iframe);
              // add extra attributes to iframe html
              $attributes = 'frameborder="0"';

              $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

              // echo $iframe
              echo $iframe;
              ?>
            </div>
           <p class="above-video"><i class="fa fa-video-camera"></i><?php the_field('video_caption');?></p>
          </div><?php
        endif;
      endwhile;
      else :
        // no layouts found
      endif;
      ?>
    </div>
  </div>

</div>
