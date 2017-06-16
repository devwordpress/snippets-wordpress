<?php
/**
 * Plugin Name: Add Custom Taxonomies
 * Plugin URI: http://desenvolvedorwordpress.com
 * Description: Create custom taxonomies to enhace your custom post type functionalities.
 * Version: 1.0
 * Author: Eric Gruby
 * Author URI: http://desenvolvedorwordpress.com
 */

 /*
Add your custom taxonomies on the following array. ("Plural"=>"Singular");
 */
 $custom_taxonomies = array(
   "New Categories"=>"New Category",
   "Tests"=>"Test"
 );

 function create_custom_taxonomies() {
 	global $custom_taxonomies;
 	foreach ($custom_taxonomies as $plural => $singular) {
 		$labels = array(
 			"name"              => _x( $plural, "taxonomy general name", "textdomain" ),
 			"singular_name"     => _x( $singular, "taxonomy singular name", "textdomain" ),
 			"search_items"      => __( "Pesquisar {$plural}", "textdomain" ),
 			"all_items"         => __( "Ver {$plural}", "textdomain" ),
 			"parent_item"       => __( "Parent {$singular}", "textdomain" ),
 			"parent_item_colon" => __( "Parent {$singular}:", "textdomain" ),
 			"edit_item"         => __( "Editar {$singular}", "textdomain" ),
 			"update_item"       => __( "Atualizar {$singular}", "textdomain" ),
 			"add_new_item"      => __( "Adicionar {$singular}", "textdomain" ),
 			"new_item_name"     => __( "Adicionar {$singular}", "textdomain" ),
 			"menu_name"         => __( $singular, "textdomain" ),
 		);
 		$args = array(
 			'hierarchical'      => true,
 			'labels'            => $labels,
 			'show_ui'           => true,
 			'show_admin_column' => true,
 			'query_var'         => true,
 			'rewrite'           => array( 'slug' => sanitize_title($singular) ),
 		);
 		register_taxonomy(sanitize_title($plural), array(), $args);
 	}
 }
 add_action( 'init', 'create_custom_taxonomies');
?>
