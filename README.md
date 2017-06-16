# Wordpress Really Quick & Simple Snippets
Hello World,

For now, you will be able to create custom post types, custom taxonomies, and get them together in order to customize your Wordpress theme/plugin/whatever/etc :)

## 1st Step
#### Add custom post types
Simply put the "add_post_types.php" file in your plugins directory and activate  it on the Wordpress panel.
Then, edit the file adding lines on the array "$post_types". Just like `"Plural name"=>"Singular Name"`.
**e.g.:**
`$post_types = array(
  "Post Types"=> "Post Type",
  "Lorems"=>"Lorem"
);`

## 2nd Step
#### Add custom taxonomies
Install the "add_custom_taxonomies.php" on your plugins directory and activate it.
Edit the file adding lines on the array "$custom_taxonomies". As above, as below, do it like `"Plural name"=>"Singular Name"`.
**e.g.:**
`$custom_taxonomies = array(
   "New Categories"=>"New Category",
   "Tests"=>"Test"
);`

## 3rd Step
#### Get custom post types and taxomonies together
Put "assign_taxonomies.php" on your plugins directory and activate it.
Edit the array "$assing_taxonomies".
**e.g.:**
` $assing_taxonomies = array(
   "post_type"=>array( // post type slug goes here
     "custom_taxonomies", // taxonomy plural slug goes here
     "special_taxonomies" // taxonomy plural slug goes here
   ),
      "post_type_2"=>array( // post type slug goes here
     "custom_taxonomies_2", // taxonomy plural slug goes here
     "special_taxonomies_2" // taxonomy plural slug goes here
   ),
   // and it goes on and on...
 );`


----------


### It didn't work?
Please contact me!
[eric@desenvolvedorwordpress.com](mailto:eric@desenvolvedorwordpress.com)
