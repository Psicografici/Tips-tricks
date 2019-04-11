<?php
/**
* Get Id of every Woocommerce page, is very usefull to print category image.
* @organization: Psicografici
* @organization url: https://github.com/Psicografici
* @author: Bradley-D
* @author url: https://gist.github.com/Bradley-D
* @modifyby: Tiex84 - https://gist.github.com/Tiex84
*/

get_option( 'woocommerce_shop_page_id' ); 
get_option( 'woocommerce_cart_page_id' ); 
get_option( 'woocommerce_checkout_page_id' );
get_option( 'woocommerce_pay_page_id' ); 
get_option( 'woocommerce_thanks_page_id' ); 
get_option( 'woocommerce_myaccount_page_id' ); 
get_option( 'woocommerce_edit_address_page_id' ); 
get_option( 'woocommerce_view_order_page_id' ); 
get_option( 'woocommerce_terms_page_id' ); 

// An Example
function get_shop_featured_image() {
  if( is_shop() ) {
    $shop = get_option( 'woocommerce_shop_page_id' );
    if( has_post_thumbnail( $shop ) ) {

        // Echo image like element img //
        echo get_the_post_thumbnail( $shop );
        
        // echo div element with background cover // 
        $height = "350px";
        $size = "cover";
        echo "<div style='background:url(".get_the_post_thumbnail_url( $shop ).") center center no-repeat; background-size: ".$size."; height:".$height.";'></div>";

    }
  }
}

//  Call these function into template page
//  to show The WooCommerce Shop Featured Image

get_shop_featured_image();

?>