<?php


/** Enqueue scripts and styles */
function law_corp_secondary_scripts() {
    

    wp_enqueue_style( 'law-corp-custom-style', get_template_directory_uri() . '/css/navigation.css' );
    

    // Enqueue Font Awesome for menu icons always
    wp_enqueue_script( 'font-awesome-cdn', 'https://use.fontawesome.com/affc2627e0.js', array(),'4.7.0');

   
   
    
}
add_action( 'wp_enqueue_scripts', 'law_corp_secondary_scripts' );
?>