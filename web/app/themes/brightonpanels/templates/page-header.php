<?php use Roots\Sage\Titles; ?>
<?php if ( is_page('home')) : ?>
  <?php else : ?>
    <div class="page-header">
      <h1><?= Titles\title(); ?></h1>
    </div>
  <?php endif; ?>
