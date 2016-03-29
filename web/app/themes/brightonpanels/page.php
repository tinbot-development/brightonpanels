<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
  <div class="row">
    <aside class="col-md-12 after-page-content-cta">
      <a href="<?php echo home_url('/contact/')?>" class="btn btn-primary btn-lg">Contact Us</a>
      <?php
      $after_main_content_image = get_field('after_main_content_image');

      if( !empty($after_main_content_image) ): ?>
        <img src="<?php echo $after_main_content_image['url']; ?>" alt="<?php echo $after_main_content_image['alt']; ?>" class="img-responsive"/>
      <?php endif; ?>
    </aside>
  </div>
<?php endwhile; ?>
