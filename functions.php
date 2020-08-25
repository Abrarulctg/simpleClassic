<?php 
    // create style.css globally;
    function hello(){
        wp_enqueue_style('style', get_stylesheet_uri());
    }

    add_action('wp_enqueue_scripts', 'hello');

        register_nav_menus(array(
            "primary" => "Primary Menu",
            "footer" => "Footer Menu",
            // "sidebar" => "Sidebar Menu"
        ));

        
        // add Featured Image for posts
        add_theme_support('post-thumbnails');


        register_sidebar(array(
            "name" => "Header",
            "id" => "social_icon"
        ));
        register_sidebar(array(
            "name" => "Header2",
            "id" => "search"
        ));
        register_sidebar(array(
            "name" => "Sidebar",
            "id" => "sidebar1"
        ));
        register_sidebar(array(
            "name" => "Footer One",
            "id" => "footer1"
        ));
        register_sidebar(array(
            "name" => "Footer Two",
            "id" => "footer2"
        ));
        register_sidebar(array(
            "name" => "Footer Three",
            "id" => "footer3"
        ));
        register_sidebar(array(
            "name" => "Footer Four",
            "id" => "footer4"
        ));
      


?>