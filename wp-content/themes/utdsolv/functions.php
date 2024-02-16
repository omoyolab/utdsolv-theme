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

 function custom_search_filter($query) {
    if (!is_admin() && $query->is_main_query() && is_page('page-search-result')) {
        $args = array(); // Initialize the $args array
        
        // Keyword Search for post title
        if (isset($_GET['keyword_search']) && !empty($_GET['keyword_search'])) {
            $keyword_search = sanitize_text_field($_GET['keyword_search']);
            $args['s'] = $keyword_search; // Set search parameter for post title
            $args['sentence'] = true; // Ensure that the search phrase is treated as a sentence
            $args['post_type'] = 'project'; // Specify the post type to search within
        }

        // Other Filtering Parameters
        if (isset($_GET['sponsor_name']) && !empty($_GET['sponsor_name'])) {
            $sponsor_name = sanitize_text_field($_GET['sponsor_name']);
            $args['meta_query'][] = array(
                'key' => 'project_sponsor_name', // Change to your actual custom field key
                'value' => $sponsor_name,
                'compare' => 'LIKE'
            );
        }
        // Add more filtering parameters here as needed...

        // Set the modified query arguments
        $query->set('posts_per_page', -1); // Show all results
        $query->set('orderby', 'title');
        $query->set('order', 'ASC');
        $query->set('meta_query', isset($args['meta_query']) ? $args['meta_query'] : array());
        $query->set('s', isset($args['s']) ? $args['s'] : '');
        $query->set('sentence', isset($args['sentence']) ? $args['sentence'] : '');
        $query->set('post_type', isset($args['post_type']) ? $args['post_type'] : 'any');
    }
}
add_action('pre_get_posts', 'custom_search_filter');





add_action('wp_enqueue_scripts','UTDSolv_Files');
add_action('after_setup_theme', 'UTDSolv_Features');


?>