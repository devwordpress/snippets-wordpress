<?php
/**
 * Plugin Name: Assign Custom Taxonomies
 * Plugin URI: http://desenvolvedorwordpress.com
 * Description: Did a good job creating your post types and taxonomies? Get them together now!.
 * Version: 1.0
 * Author: Eric Gruby
 * Author URI: http://desenvolvedorwordpress.com
 */

 /*
"slug_post_type_singular"=>array("slug_tax_plural", "slug_tax_plural-2"); etc etc.
*/
 $assing_taxonomies = array(
   "post_type"=>array(
     "custom_taxonomies",
     "special_taxonomies"
   )
 );
 function assign_taxonomies(){
 	global $assing_taxonomies;
 	foreach($assing_taxonomies as $post_type => $taxes){
     foreach($taxes as $tax){
 		    register_taxonomy_for_object_type($tax, $post_type);
     }
 	}
 }
 add_action( 'init', 'assign_taxonomies');
?>
