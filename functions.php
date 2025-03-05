<?php 

function theme_styles_and_scripts() 
{
    wp_enqueue_style(
        'idm-normalize',
        'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css',
        [],
        '8.0.1'
    );

    wp_enqueue_style(
        'google-fonts',
        "https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900&family=Poppins:wght@100..900&display=swap",
        [], 
        filemtime(get_template_directory() . '/styles/main.css')
    );

    wp_enqueue_style(
        'idm-main-style',
        get_template_directory_uri() . '/styles/main.css',
        [], 
        filemtime(get_template_directory() . '/styles/main.css')
    );

}

add_action('wp_enqueue_scripts', 'theme_styles_and_scripts');

function theme_setup()
{
    // Enable support for Post Thumbnails
    add_theme_support('post-thumbnails');

    // Register navigation menus
    register_nav_menus([
        'primary-menus' => 'Primary Menu',
    ]);
}

add_action('after_setup_theme', 'theme_setup');

function register_custom_post_types()
{
    $post_type_name = 'projects';

    $args = [
        'labels' => [
            'name' => 'Projects',
            'singular_name' => 'Project',
            'add_new' => 'Add New Project',
            'add_new_item' => 'Add New Project',
            'edit_item' => 'Edit Project',
            'new_item' => 'New Project',
            'view_item' => 'View Project',
            'search_items' => 'Search Projects',
            'not_found' => 'No Projects found',
            'not_found_in_trash' => 'No Projects found in Trash',
        ],
        'public' => true,             // Makes it accessible on the front and back end
        'has_archive' => true,             // Enables an archive page
        'rewrite' => ['slug' => 'projects'], // URL slug
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt'], // Enabled post features
        'menu_position' => 5,                // Position in WP admin menu
        'menu_icon' => 'dashicons-portfolio', // Optional: Custom icon for the post type
        'show_in_rest' => true,             // Enables Gutenberg support
        // 'taxonomies'  => ['project-categories'], // Uncomment if you have a custom taxonomy
    ];

    register_post_type($post_type_name, $args);
}

add_action('init', 'register_custom_post_types');