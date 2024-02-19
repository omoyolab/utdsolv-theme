<?php

 function UTDSolv_Files(){
     
    wp_register_script('jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js', false, null);
	 wp_enqueue_script('jquery');
     
     
    wp_enqueue_script('UTDSolv_build_script',get_theme_file_uri('/build/main.js'), array(), '1.0.0', true);
 
       
     
    wp_enqueue_style('UTDSolvstyles-1', get_theme_file_uri('/build/main.css'));
    
 }

 function UTDSolv_Features(){
    add_theme_support('title-tag');
   //  register_nav_menu('headerMenuLocation', 'Header Menu Location');
 }




add_action('wp_enqueue_scripts','UTDSolv_Files');
add_action('after_setup_theme', 'UTDSolv_Features');


?>