<?php
/** Loop News CPT
 */

get_template_part('templates/page', 'header');

       if(have_posts()):

       while ( have_posts() ) : the_post();
            echo '<div class="news-content-holder">';
                echo '<h4 class="entry-title"><a href="'.get_permalink().'">'.get_the_title().'</a></h4>';
                echo '<div class="entry-content">';
                    the_excerpt();
                echo '</div>';
            echo '</div>';
       endwhile;
       echo paginate_links();

           wp_reset_query();
   endif;



