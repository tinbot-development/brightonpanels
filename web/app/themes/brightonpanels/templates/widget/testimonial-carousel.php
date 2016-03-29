<?php

$args = array(
    'post_status' => 'published',
    'post_type'   => 'testimonial'
);
$testimonials = new WP_Query( $args );

if($testimonials->have_posts()):
    $slideNumber = 0;
    ?>
    <section id="carousel" class="carousel slide carousel-fade" data-ride="carousel">

        <!-- Carousel items -->
        <div class="carousel-inner">

            <?php while ( $testimonials->have_posts() ) : $testimonials->the_post();
                ?>
                <blockquote class="item <?php echo ($slideNumber == 0)? 'active' :''; ?>">
                    <?php the_content();?>
                    <footer><cite title="Source Title"><?php the_title();?></cite></footer>
                </blockquote>
                <?php
                $slideNumber++;
            endwhile; ?>
        </div>
    </section>
<?php endif;
