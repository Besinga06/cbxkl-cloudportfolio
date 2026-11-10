
<?php

// Set up theme features
function cbkl_theme_setup()
{
    // Allow WordPress to manage the page title
    add_theme_support('title-tag');

    // Enable featured images
    add_theme_support('post-thumbnails');

    // Register the main navigation menu
    register_nav_menus(array(
        'primary' => 'Main Navigation Menu'
    ));
}
add_action('after_setup_theme', 'cbkl_theme_setup');


// Load the main website CSS
function cbkl_load_styles()
{
    $main_css_path = get_stylesheet_directory() . '/style.css';

    wp_enqueue_style(
        'cbkl-style',
        get_stylesheet_uri(),
        array(),
        file_exists($main_css_path) ? filemtime($main_css_path) : '1.0'
    );
}
add_action('wp_enqueue_scripts', 'cbkl_load_styles');


// Load About Us CSS
function cbkl_enqueue_about_styles()
{
    // Check if the current page uses aboutus.php
    if (is_page_template('about.php')) {

        $about_css_path = get_template_directory() . '/about.css';

        // Load CSS only if the file exists
        if (file_exists($about_css_path)) {

            wp_enqueue_style(
                'cbkl-about-style',
                get_template_directory_uri() . '/about.css',
                array('cbkl-style'),
                filemtime($about_css_path)
            );
        }
    }
}
add_action('wp_enqueue_scripts', 'cbkl_enqueue_about_styles', 20);



// Load Cesar Profile CSS
function cbkl_enqueue_profile_styles()
{
    if (is_page_template('cesar-profile.php')) {

        $profile_css_path = get_template_directory() . '/profile.css';

        if (file_exists($profile_css_path)) {

            wp_enqueue_style(
                'cbkl-profile-style',
                get_template_directory_uri() . '/profile.css',
                array('cbkl-style'),
                filemtime($profile_css_path)
            );
        }
    }
}
add_action('wp_enqueue_scripts', 'cbkl_enqueue_profile_styles', 20);

function cbkl_enqueue_kimprofile_styles()
{
    if (is_page_template('kim-profile.php')) {

        $profile_css_path = get_template_directory() . '/kim.css';

        if (file_exists($profile_css_path)) {

            wp_enqueue_style(
                'cbkl-profile-style',
                get_template_directory_uri() . '/kim.css',
                array('cbkl-style'),
                filemtime($profile_css_path)
            );
        }
    }
}
add_action('wp_enqueue_scripts', 'cbkl_enqueue_kimprofile_styles', 20);

?>
