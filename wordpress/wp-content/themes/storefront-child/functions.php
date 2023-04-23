<!-- add action remove action -->
<?php
add_action( 'homepage', 'storefront_popular_products', 50 );
function remove_storefront_popular_products (){
    remove_action( 'homepage', 'storefront_popular_products', 50  );
}

add_action( 'init', 'remove_storefront_popular_products' );

// add_action( 'woocommerce_after_shop_loop', 'woocommerce_pagination', 10 );

// function add_text_after_shop_loop(){


//     add_action( 'woocommerce_after_shop_loop', 'woocommerce_pagination', 10 );

?>