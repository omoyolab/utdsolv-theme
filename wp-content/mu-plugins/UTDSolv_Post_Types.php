<?php
function UTDSolv_Post_Types() {
   //Project
   register_post_type('project', array(
      'public' => true,
      'rewrite'=>array('slug' =>'project'),
      'has_archive' => true,    	
      'taxonomies'  => array( 'category' ),
      'labels' => array(
         'name' => 'Projects',
         'add_new_item' => 'Add New Project',
         'edit_item' => 'Edit Project',
         'all_Items' => 'All Projects',
         'singular_name' => 'Project'
      ),
      'menu_icon' => 'dashicons-hammer'
   ));


}
add_action('init','UTDSolv_Post_Types');

?>