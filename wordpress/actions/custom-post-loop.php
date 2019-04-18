<?php
/**
* Action to show custom post loop.
* @organization: Psicografici
* @organization url: https://github.com/Psicografici
* @author: Tiex84
* @author url: https://github.com/Tiex84
* 
*/

// DO ACTION IN TEMPLATE 
//do_action ('ps_custompost_loop', 'POST_TYPE', 'POST_PER_PAGE', 'ORDER', 'ORDERBY'); 


add_action('ps_custompost_loop', 'custom_post_loop', 10, 4);

function custom_post_loop($slug, $perpage, $order, $orderby)
{
    // WP_Query arguments
    $args = array(
        'post_type'      => array($slug),
        'posts_per_page' =>  $perpage,
        'order'          => $order,
        'orderby'        => $orderby,
    );

    // The Query
    $query = new WP_Query($args);

    // The Loop
    if ($query->have_posts()) {

        while ($query->have_posts()) {
            $query->the_post();

            // Variabili post
            $title = get_the_title();
            $permalink = get_permalink();
            $image = get_the_post_thumbnail_url();
            $content = get_the_content();
            $excerpt = get_the_excerpt();

            // CONTENUTO LOOP
            echo $title;
            // Create loop layout
        }
    }

    // Restore original Post Data
    wp_reset_postdata();
}


?> 
