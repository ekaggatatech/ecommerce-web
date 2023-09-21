<?php
//Load stylesheets
function load_css(){
    wp_register_style('bootstrap', get_template_directory_uri() .'/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() .'/css/main.css', array(), false, 'all');
    wp_enqueue_style('main');
}
add_action('wp_enqueue_scripts','load_css');
//Load JavaScript
function load_js(){
    wp_enqueue_script('jquery');
    wp_register_script('bootstrap', get_template_directory_uri() .'/js/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts','load_js');
//Theme options
add_theme_support('menus');
add_theme_support('widgets');
add_theme_support('post-thumbnails');


//Menus
register_nav_menus(
    array (
        'topbar-menu' => 'TopBar Menu Locations',
        'Mobile-menu' => 'Mobile Menu Locations',
        'Footer-menu' => 'Footer Menu Locations',
    )
);

//Menu descriptions

class Custom_Menu_Walker extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = null) {
        // Start the unordered list.
        $output .= "\n<ul class=\"sub-menu\">\n";
    }

    function end_lvl(&$output, $depth = 0, $args = null) {
        // End the unordered list.
        $output .= "</ul>\n";
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        // Start the list item.
        $output .= $indent . '<li id="menu-item-' . $item->ID . '" class="menu-item menu-item-' . $item->ID;

        // Add current class to the current menu item.
        if ($item->current) {
            $output .= ' current-menu-item';
        }

        // Add a class for menu items with descriptions.
        if (!empty($item->description)) {
            $output .= ' menu-item-has-description';
        }

        $output .= '">';
        $output .= '<a href="' . esc_url($item->url) . '">' . $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after . '</a>';

        // Display the menu item description if available.
        if (!empty($item->description)) {
            $output .= '<div class="menu-description">' . esc_html($item->description) . '</div>';
        }

        // Close the list item.
        $output .= "</li>\n";
    }

    function end_el(&$output, $item, $depth = 0, $args = null) {
        // End the list item.
        $output .= "\n";
    }
}

//Custom image sizes
add_image_size('blog-large', 800, 600, false);
add_image_size('blog-small', 200, 100, true);

function my_first_post_type()
{

	$args = array(


		'labels' => array(

					'name' => 'Items',
					'singular_name' => 'Item',
		),
		'hierarchical' => false,
		'public' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-images-alt2',
		'supports' => array('title', 'editor', 'thumbnail','custom-fields'),
		//'rewrite' => array('slug' => 'cars'),	

	);


	register_post_type('items', $args);


}
add_action('init', 'my_first_post_type');

function my_first_taxonomy()
{

			$args = array(

					'labels' => array(
							'name' => 'Categories',
							'singular_name' => 'Category',
					),

					'public' => true,
					'hierarchical' => true,

			);


			register_taxonomy('Categories', array('items'), $args);

}
add_action('init', 'my_first_taxonomy');

