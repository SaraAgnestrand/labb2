<?php 
/*Plugin Name: My plugin 1 */

add_action('init', 'text_halloj');

function text_halloj(){
    echo 'Halloj!';
}
?>