<?php


/** Enqueue scripts and styles */
  // enqueue script
  
function law_corp_secondary_scripts() {
    

    wp_enqueue_style( 'law-corp-custom-style', get_template_directory_uri() . '/css/navigation.css' );
    wp_enqueue_style( 'law-corp-about', get_template_directory_uri() . '/css/about.css' );
    wp_enqueue_style( 'law-corp-fonts', get_template_directory_uri() . '/css/fonts.css' );
    wp_enqueue_style( 'law-corp-pages-style', get_template_directory_uri() . '/css/pages.css' );
    wp_enqueue_script( 'law-corp-index', get_template_directory_uri() . '/js/index.js', array('law-corp-slick-js'), '2017', true );
    wp_enqueue_style( 'law-corp-jquery-ui', get_template_directory_uri() . '/js/jquery-ui-1.12.1.custom/jquery-ui.css' );
    // Enqueue Slick Slider 
    wp_enqueue_style( 'law-corp-slick-style', get_template_directory_uri() . '/js/slick/slick.css'  );
    wp_enqueue_style( 'law-corp-slick-style-theme', get_template_directory_uri() . '/js/slick/slick-theme.css'  );
    wp_enqueue_script( 'law-corp-slick-js', get_template_directory_uri() . '/js/slick/slick.min.js', array('jquery'), '2017', true );
   

    //jQuery UI (custom)
    wp_enqueue_script('accordion', get_template_directory_uri() . '/js/accordion.js', array(), true);
    if ( !is_admin() ) {
     wp_enqueue_script('jquery-ui-accordion');
     wp_enqueue_script(
     'custom-accordion',
     get_stylesheet_directory_uri() . '/js/accordion.js',
     array('jquery')
     );
     }
    
    wp_enqueue_script( 'jquery-ui', get_template_directory_uri() . '/js/jquery-ui-1.12.1.custom/jquery-ui.min.js', array('jquery'), '1.12.1'  );
    wp_enqueue_style( 'ui-css', 'https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css' );
    wp_enqueue_script('accordion', get_template_directory_uri() . '/js/accordion.js', array('jquery'), '1.12.1');
    
    // Enqueue Font Awesome for menu icons always
    wp_enqueue_script( 'font-awesome-cdn', 'https://use.fontawesome.com/affc2627e0.js', array(),'4.7.0');
    


   
   
   
    
}
add_action( 'wp_enqueue_scripts', 'law_corp_secondary_scripts' );


  
?>

