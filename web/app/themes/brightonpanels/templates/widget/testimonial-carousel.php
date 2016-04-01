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
                    <?php
                    $trimmed_content = wp_trim_words( get_the_content(), 15, '<a href="'. get_permalink() .'"> ...Read More</a>' );
                    echo $trimmed_content;
                    ?>
                    <footer><cite title="Source Title"><?php the_title();?></cite></footer>
                </blockquote>
                <?php
                $slideNumber++;
            endwhile; ?>
        </div>
    </section>
<?php endif;
