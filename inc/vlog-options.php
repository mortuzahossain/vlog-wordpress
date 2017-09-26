<?php
    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    $opt_name = "vlog";

    $theme = wp_get_theme();
    $args = array(
        'opt_name'             => $opt_name,
        'display_name'         => $theme->get( 'Name' ),
        'display_version'      => $theme->get( 'Version' ),
        'menu_type'            => 'menu',
        'allow_sub_menu'       => true,

        'menu_title'           => __( 'VLOG Options', 'redux-framework-demo' ),
        'page_title'           => __( 'VLOG Options', 'redux-framework-demo' ),
        'dev_mode'             => false,
        'admin_bar_priority'   => 60,
        'page_icon'            => 'icon-themes',
        'menu_icon'            => '',
        'page_priority'        => 60,
        
        'google_api_key'       => '',
        'google_update_weekly' => false,
        'async_typography'     => true,
        'admin_bar'            => true,
        'admin_bar_icon'       => 'dashicons-portfolio',
        'global_variable'      => '',
        'update_notice'        => true,
        'customizer'           => true,
        'page_parent'          => 'themes.php',
        'page_permissions'     => 'manage_options',
        'last_tab'             => '',
        'page_slug'            => '_options',
        'save_defaults'        => true,
        'default_show'         => false,
        'default_mark'         => '',
        'show_import_export'   => true,
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        'output_tag'           => true,
        'database'             => '',
        'use_cdn'              => true,

        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    $args['share_icons'][] = array(
        'url'   => 'https://github.com/mortuzahossain',
        'title' => 'Visit me on GitHub',
        'icon'  => 'el el-github'
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/mdmortuza.hossain',
        'title' => 'Find me on Facebook',
        'icon'  => 'el el-facebook'
    );


    Redux::setArgs( $opt_name, $args );

    // For General Setting
    Redux::setSection( $opt_name, array(
        'title'            => __( 'General Settings', 'redux-framework-demo' ),
        'id'               => 'basic',
        'icon'             => 'el el-cogs',
        'fields'           => array(
            array(
                'id'       => 'upload-facivon',
                'type'     => 'switch',
                'title'    => 'Upload Favicon',
                'default'  => false
            ),
            array(
                'id'        => 'favicon',
                'type'      => 'media',
                'title'     => __( 'Favicon Icon', 'redux-framework-demo' ),
                'required' => array( 'upload-facivon', '=', true )
            ),
            array(
                'id'        => 'header-background',
                'type'      => 'media',
                'title'     => __( 'Header Background', 'redux-framework-demo' ),
                'default'  => array(
                    'url'=> get_template_directory_uri().'/img/header-bg'
                ),
            ),
            array(
                'id'        => 'copyright-text',
                'type'      => 'text',
                'title'     => __( 'Copyright Text', 'redux-framework-demo' ),
                'default'   => '© 2015 Avengers - All Rights Reserved. Coded with <i class="fa fa-heart"></i> by <a href="http://wpexpand.com" target="_blank">WP Expand</a>'
            ),
        )
    ) );


    // For Social Link
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Social Links', 'redux-framework-demo' ),
        'id'               => 'social',
        'icon'             => 'el el-thumbs-up',
        'fields'           => array(
             array(
                'id'          => 'contact_social',
                'type'        => 'slides',
                'title'       => __('Social Links', 'redux-framework-demo'),
                'subtitle'       => __('You can get social icon name from <a href="http://fontawesome.io/icons/" target="_blank">here</a>', 'redux-framework-demo'),
                'placeholder' => array(
                    'title'           => __('Icon Name (fa-pinterest)', 'redux-framework-demo'),
                    'url'           => __('URL', 'redux-framework-demo'),
                ),
                'show' => array(
                    'title' => true,
                    'url' => true,
                ),
            ),
        )
    ) );

    // For Subscription
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Subscribe', 'redux-framework-demo' ),
        'id'               => 'subscription',
        'icon'             => 'el el-bell',
        'fields'           => array(
            array(
                'id'        => 'subscribtion_header',
                'type'      => 'text',
                'title'     => __( 'Subscribe Header', 'redux-framework-demo' ),
                'default'   => 'Newsletter'
            ),
                
            array(
                'id'        => 'subscribtion_message',
                'type'      => 'editor',
                'title'     => __( 'Subscribe Message', 'redux-framework-demo' ),
                'default'   => 'Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.',
                'args'    => array(
                    'wpautop'       => false,
                    'media_buttons' => false,
                    'textarea_rows' => 15,
                    'teeny'         => false,
                    'quicktags'     => false,
                ),
            ),

            array(
                'id'        => 'subscribe_link',
                'type'      => 'textarea',
                'title'    => __( 'MailChimp', 'redux-framework-demo' ),
                'desc'     => 'Paste mailchimp form action link',
                'default'   => 'http://facebook.us16.list-manage.com/subscribe/post?u=3c6471708ddac41170d516748&amp;id=0e879c373c',
                'subtitle'  => 'If you need some help to do this then please contact with <a href="http://www.facebook.com/mdmortuza.hossain/">me</a>.',
            ),
        )
    ) );
    // For Subscription
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Contact', 'redux-framework-demo' ),
        'id'               => 'contact',
        'icon'             => 'el el-comment-alt',
        'fields'           => array(
            array(
                'id'        => 'admin-email',
                'type'      => 'text',
                'title'     => __( 'Contact Page Recive Email:', 'redux-framework-demo' ),
                'default'   => 'mortuzahossain1997@gmail.com'
            ),

            array(
                'id'        => 'contact-map-lat',
                'type'      => 'text',
                'title'     => __( 'Map Latatude :', 'redux-framework-demo' ),
                'default'   => '18.013764'
            ),
            array(
                'id'        => 'contact-map-lon',
                'type'      => 'text',
                'title'     => __( 'Map Londitude :', 'redux-framework-demo' ),
                'default'   => '-76.801992'
            ),
            array(
                'id'        => 'map-marker-logo',
                'type'      => 'media',
                'title'     => __( 'Map Marker', 'redux-framework-demo' ),
                'default'  => array(
                    'url'=> get_template_directory_uri().'/img/map-marker.png'
                ),
            ),
        )
    ) );