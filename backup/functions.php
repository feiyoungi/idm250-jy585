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
        'idm-main-style',
        get_template_directory_uri() . '/styles/main.css',
        [], 
        filemtime(get_template_directory() . '/styles/main.css')
    );
}

add_action('wp_enqueue_scripts', 'theme_styles_and_scripts');
?>






<!-- // function theme_setup()
// {
//     // Enable support for Post Thumbnails
//     add_theme_support('post-thumbnails');

//     // Register navigation menus
//     register_nav_menus([
//         'primary-menu' => 'Primary Menu',
//     ]);
// }

// add_action('after_setup_theme', 'theme_setup');

//  -->
