<?php
// load css into the website's front-end
function taaj_script_enqueue() {
    wp_enqueue_style( 'taajstyle', get_template_directory_uri(). '/css/style.css',array(),'1.0.0' );
    wp_enqueue_script( 'taajjs', get_template_directory_uri(). '/js/main.js',array(),'1.0.0',true );
}
add_action( 'wp_enqueue_scripts', 'taaj_script_enqueue' );

?>
