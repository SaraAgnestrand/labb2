<?php

//Krok som lägger till texten 
add_action( 'woocommerce_breadcrumb', 'my_function' );

function my_function(){
   echo "Bästa sportbutiken";
}

//Funktion med krok både före och efter loop med produkter, som tar bort texten 
//för antal resultat vid sortering 
function remove_result_count() {
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
    remove_action( 'woocommerce_after_shop_loop', 'woocommerce_result_count', 20 );
}
add_action( 'init', 'remove_result_count' );



?>



