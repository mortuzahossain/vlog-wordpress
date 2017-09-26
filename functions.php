<?php

if (!function_exists('vlog_style_js')) {
    function vlog_style_js() {
        
        wp_enqueue_style( 'google-fonts', 'http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,500,700,700italic,900,900italic', array(), '1.0', 'all'  );
        wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0', 'all'  );
        wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '1.0', 'all'  );
        wp_enqueue_style( 'material', get_template_directory_uri() . '/css/material.min.css', array(), '1.0', 'all'  );
        wp_enqueue_style( 'ripples', get_template_directory_uri() . '/css/ripples.min.css', array(), '1.0', 'all'  );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all'  );
        wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css', array(), '1.0', 'all'  );

        wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.0.0', false );
        wp_enqueue_script( 'material', get_template_directory_uri() . '/js/material.min.js', array('jquery'), '1.0.0', false );
        wp_enqueue_script( 'ripples', get_template_directory_uri() . '/js/ripples.min.js', array('jquery'), '1.0.0', false );
        wp_enqueue_script( 'jquery.scrolly', get_template_directory_uri() . '/js/jquery.scrolly.js', array('jquery'), '1.0.0', false );
        wp_enqueue_script( 'jquery.particleground', get_template_directory_uri() . '/js/jquery.particleground.min.js', array('jquery'), '1.0.0', false );
        wp_enqueue_script( 'mailchimp', get_template_directory_uri() . '/js/mailchimp.js', array('jquery'), '1.0.0', false );
        wp_enqueue_script( 'jquery.main', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', false );
        
    }
    add_action( 'wp_enqueue_scripts', 'vlog_style_js' );
}

if (!function_exists('vlog_ie_support')) {
    function vlog_ie_support(){
    	?>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    	<?php
    }
    add_action('wp_head', 'vlog_ie_support');
}

if (! function_exists('vlog_theme_support')) {
    function vlog_theme_support()
    {
        add_theme_support( 'menus' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'custom-background' );
        add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
        ) );
    }
    add_action( 'after_setup_theme' , 'vlog_theme_support' );
}



if ( function_exists('register_nav_menu')) {
    register_nav_menu( 'main-menu', 'Main Menu' );
}

// Striping Content 

if (! function_exists('readMore')) {
    function readMore(){
        $post_content = explode( ' ' , get_the_content() );
        $less_content = array_slice($post_content, 0,100);
        echo implode(' ', $less_content).' ...';

    }
}



function volg_widgets_init() {
    register_sidebar( array(
        'name'          => 'Bottom Widget Area',
        'id'            => 'bottom-1',
        'description'   => 'Select Calender for showing this month posts.(No need to provide any title)',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h2 class="wid-title">',
        'after_title'   => '</h2>'
    ) );
}
add_action( 'widgets_init', 'volg_widgets_init' );


// Including ShortCode


if ( file_exists( dirname( __FILE__ ) . '/inc/vlog-shortcode.php' ) ) {
    require_once( dirname( __FILE__ ) . '/inc/vlog-shortcode.php' );
}

// Including Special CSS


if ( file_exists( dirname( __FILE__ ) . '/inc/vlog-special-css.php' ) ) {
    require_once( dirname( __FILE__ ) . '/inc/vlog-special-css.php' );
}

// OPTION PARTS --- REDUX

if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/inc/redux-framework/ReduxCore/framework.php' ) ) {
    require_once( dirname( __FILE__ ) . '/inc/redux-framework/ReduxCore/framework.php' );
}
if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/inc/vlog-options.php' ) ) {
    require_once( dirname( __FILE__ ) . '/inc/vlog-options.php' );
}

// Removing Redux Framework From tools .The value must be over 10

add_action( 'admin_menu', 'remove_redux_menu',12 );
    function remove_redux_menu() {
    remove_submenu_page('tools.php','redux-about');
}