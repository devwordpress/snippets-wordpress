<?php
/**
 * Plugin Name: Add Post Types
 * Plugin URI: http://desenvolvedorwordpress.com
 * Description: You are free to add how many post types you want! Just add new post types editing the plugin main file.
 * Version: 1.0
 * Author: Eric Gruby
 * Author URI: http://desenvolvedorwordpress.com
 */

/*
Simply add your post types on the following array. ("Plural"=>"Singular")
$translate_domain remains for translation variables. You're supoused to change that too.
*/

$post_types = array(
  "Post Types"=> "Post Type",
  "Lorems"=>"Lorem"
);
$translate_domain = "theme-domain";

function add_post_types(){
	global $post_types;
	foreach($post_types as $plural=>$singular){
		$labels = array(
			"name"               => _x( "{$plural}", "post type general name", $translate_domain ),
			"singular_name"      => _x( "{$singular}", "post type singular name", $translate_domain ),
			"menu_name"          => _x( "{$plural}", "admin menu", $translate_domain ),
			"name_admin_bar"     => _x( "{$singular}", "add new on admin bar", $translate_domain ),
			"add_new"            => _x( "Adicionar {$singular}", sanitize_title($singular), $translate_domain ),
			"add_new_item"       => __( "Adicionar {$singular}", $translate_domain ),
			"new_item"           => __( "Adicionar {$singular}", $translate_domain ),
			"edit_item"          => __( "Editar {$singular}", $translate_domain ),
			"view_item"          => __( "Ver {$singular}", $translate_domain ),
			"all_items"          => __( "Ver {$plural}", $translate_domain ),
			"search_items"       => __( "Buscar {$plural}", $translate_domain ),
			"parent_item_colon"  => __( "Parent {$plural}:", $translate_domain ),
			"not_found"          => __( "Nada encontrado.", $translate_domain ),
			"not_found_in_trash" => __( "Nada encontrado na lixeira.", $translate_domain )
		);
		$args = array(
			"labels"             => $labels,
	    "description"        => __( "Description.", $translate_domain ),
			"public"             => true,
			"publicly_queryable" => true,
			"show_ui"            => true,
			"show_in_menu"       => true,
			"query_var"          => true,
			"rewrite"            => array( "slug" => sanitize_title($singular) ),
			"capability_type"    => "post",
			"has_archive"        => true,
			"hierarchical"       => false,
			"menu_position"      => null,
			"supports"           => array( "title", "editor", "author", "thumbnail", "excerpt", "comments" )
		);
		register_post_type( sanitize_title($singular), $args );
	}
}
add_action( 'init', 'add_post_types' );
?>
