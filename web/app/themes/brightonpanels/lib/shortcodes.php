<?php
//allow shortcodes on text widgets
add_filter('widget_text', 'do_shortcode');

//shortcode for the install directory
function site_url_shortcode(){
    return site_url();
}
add_shortcode( 'site_url', 'site_url_shortcode' );

//shortcode for the upload directory
function upload_url_shortcode(){
    $upload_dir = wp_upload_dir();
    return $upload_dir['baseurl'];
}
add_shortcode( 'upload_url', 'upload_url_shortcode' );

//shortcode for the theme directory
function theme_url_shortcode(){
    return get_stylesheet_directory_uri();
}
add_shortcode( 'theme_url', 'theme_url_shortcode' );

//shortcode for the assets DIST DIR URL
function dist_url_shortcode(){
    return get_stylesheet_directory_uri().'/dist';
}
add_shortcode( 'dist_url', 'dist_url_shortcode' );
//Testmonial Widget
function testimonial_carousel_shortcode($atts){
    $a = shortcode_atts( array(
        'excerpt' => 'false',
    ), $atts );


    $testimonials_args = array(
        'post_status' => 'published',
        'post_type'   => 'testimonial'
    );

    $testimonials = new WP_Query( $testimonials_args );

    if($testimonials->have_posts()):
        $slideNumber = 0;
        $content = '<section id="testimonial-carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
                    <div class="carousel-inner">';
        while ( $testimonials->have_posts() ) : $testimonials->the_post();
            $testimonial = ($a['excerpt'] == "true")? wp_trim_words(get_the_content(),25) : get_the_content();
            $active_class = ($slideNumber == 0)? 'active' :'';

                $content .=  '<blockquote class="item '.$active_class.'">';
                $content .=     '<a href="'.get_permalink().'">';
                $content .=         $testimonial;
                $content .=     '</a>';
                $content .=  '<footer><cite>'. get_the_title().'</cite></footer></blockquote>';

            $slideNumber++;
        endwhile;

        $content .=     '</div>
                </section>';

        return $content;
    endif;
}


add_shortcode( 'testimonial_carousel', 'testimonial_carousel_shortcode' );


//Testmonial Archive Content
function testimonial_archive_shortcode(){

    $testimonials_args = array(
        'order' => 'ASC',
        'post_per_page' => -1,
        'post_status' => 'published',
        'post_type'   => 'testimonial'
    );

    $testimonials = new WP_Query( $testimonials_args );

    if($testimonials->have_posts()):

        $content = '<section id="testimonials" class="testimonials-archive">';
        while ( $testimonials->have_posts() ) : $testimonials->the_post();
            $content .=  '<blockquote class="testimonial">';
            $content .=        get_the_content();
            $content .=  '<footer><cite>'. get_the_title().'</cite></footer></blockquote>';

        endwhile;

        $content .=     '</section>';

        return $content;
    endif;
}

add_shortcode( 'testimonial_archive', 'testimonial_archive_shortcode' );
