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



/* News Shortcode */
function latest_news_carousel_shortcode($atts){
    $a = shortcode_atts( array(
        'excerpt' => 'true',
    ), $atts );


    $news_args = array(
        'posts_per_page' => -1,
        'post_status' => 'published',
        'post_type'   => 'news'
    );


    $latest_news = new WP_Query( $news_args );

    if( $latest_news->have_posts() ):

        $slideNumber = 0;
        $content = '<section id="news-carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
                    <div class="carousel-inner">';

        while ( $latest_news->have_posts() ) : $latest_news->the_post();
            $news_content = ($a['excerpt'] == "true")? wp_trim_words(get_the_content(),60,'<a href="'. get_permalink() .'"> ...Read More</a>') : get_the_content();
            $active_class = ($slideNumber == 0)? 'active' :'';

            $content .=  '<aside class="item '.$active_class.'">';
            $content .=  '<a href="'.get_permalink().'"><h4 class="news-title">'. get_the_title().'</h4></a>';
            $content .=     $news_content;
            $content .=  '</aside>';

            $slideNumber++;
        endwhile;

        $content .=     '</div>
                </section>';
        wp_reset_query();
        return $content;

    endif;



}


add_shortcode( 'latest_news_carousel', 'latest_news_carousel_shortcode' );


/* News Shortcode */
function latest_news_widget_shortcode($atts){
    $a = shortcode_atts( array(
        'excerpt' => 'true',
        'post_per_page' => 2
    ), $atts );


    $news_args = array(
        'posts_per_page' => $a['post_per_page'],
        'post_status' => 'published',
        'post_type'   => 'news'
    );


    $latest_news = new WP_Query( $news_args );

    if( $latest_news->have_posts() ):

        $slideNumber = 0;
        $content = '<section class="news-widget"> ';

        while ( $latest_news->have_posts() ) : $latest_news->the_post();
            $news_content = ($a['excerpt'] == "true")? wp_trim_words(get_the_content(),60,'<a href="'. get_permalink() .'"> ...Read More</a>') : get_the_content();
            $content .=  '<aside class="news-item">';
            $content .=  '<a href="'.get_permalink().'"><h4 class="news-title">'. get_the_title().'</h4></a>';
            $content .=     $news_content;
            $content .=  '</aside>';

            $slideNumber++;
        endwhile;
        $content .=     '<a class="read-more btn btn-primary pull-right" href="'.get_post_type_archive_link('news').'">View All</a>';
        $content .=     '</section>';
        wp_reset_query();
        return $content;

    endif;



}


add_shortcode( 'latest_news_widget', 'latest_news_widget_shortcode' );

function header_contact_info_shortcode($atts){
    $a = shortcode_atts( array(
        'address' => '4 Bignell Road, Moorabbin VIC 3189',
        'telephone' => '03 9555 3522',
        'email' => 'info@brightonpanelworks.com.au'
    ), $atts );

    $content = '<ul class="contact-info">
                    <li>'.$a['address'].'<i class="fa fa-map-marker"></i></li>
                    <li><a href="'.$a['telephone'].'">'.$a['telephone'].'<i class="fa fa-phone"></i></a></li>
                    <li class="desktop-only"><a href="mailto:'.$a['email'].'">'.$a['email'].'<i class="fa fa-envelope-o"></i></a></li>
                </ul>';

    return $content;
}


add_shortcode( 'header_contact_info', 'header_contact_info_shortcode' );