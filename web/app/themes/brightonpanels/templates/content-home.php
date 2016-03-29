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
<?php the_content(); ?>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
