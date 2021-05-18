<?php

    // THUMBNAILS
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'thumb', 240, 99999 ); 
    add_image_size( 'post', 735, 415, array( 'left', 'top' ) ); 

    // REGISTRA OS MENUS
    register_nav_menus( array(
        'main_menu' => 'Main Menu',
    ) );

    // cria o post type dos produtos no banner inferior
    function create_post_type() {
        register_post_type( 'attorneys',
            array(
                'labels' => array(
                    'name' => __( 'Attorneys' ),
                    'singular_name' => __( 'Attorney' )
                ),
                'public' => true,
                'has_archive' => false,
                'menu_icon'   => 'dashicons-nametag',
                'menu_position' => 5,
                'supports' => array( 'title', 'editor', 'thumbnail', )
            )
        );
    }
    add_action( 'init', 'create_post_type' );
?>