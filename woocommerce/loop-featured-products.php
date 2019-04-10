<?php
/**
* Loop function to show Woocommerce Featured Product.
* @organization: Psicografici
* @organization url: https://github.com/Psicografici
* @author: Tiex84
* @author url: https://github.com/Tiex84
* 
*/

    $args = array(
        'post_type' => 'product',
        'posts_per_page' => 4,
        'tax_query' => array(
                array(
                    'taxonomy' => 'product_visibility',
                    'field'    => 'name',
                    'terms'    => 'featured',
                ),
            ),
        );
    $loop = new WP_Query( $args );
    if ( $loop->have_posts() ) {
        while ( $loop->have_posts() ) : $loop->the_post();
            wc_get_template_part( 'content', 'featured' );
        endwhile;
    } else {
        echo __( 'No products found' );
    }
    wp_reset_postdata();
?>