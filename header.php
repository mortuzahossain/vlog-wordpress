<?php
    global $vlog;
    $upload_facivon = $vlog['upload-facivon'];
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        
        <link rel="shortcut icon" href="<?php
        if($upload_facivon == '1' && !empty($vlog['favicon']['thumbnail'])){
            echo $vlog['favicon']['thumbnail'];
        } else {
            echo get_template_directory_uri().'/img/apple-touch-icon.png';
        }
        ?>">

        <?php wp_head(); ?>


    </head>
    <body <?php body_class(); ?>>
        
        <header class="header">
            <div data-velocity="-.4" id="particles" class="header-bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="social-links">
                            
<?php if(isset($vlog['contact_social']) && !empty($vlog['contact_social'][0]['title'])){ ?>
    <?php foreach ($vlog['contact_social'] as $key) { ?>
                            <a class="btn social-link" target="_blank" href="<?php echo $key['url']; ?>"><i class="fa <?php echo $key['title']; ?>"></i> <div class="ripple-wrapper"></div></a>
<?php } } else { ?>
                            <a class="btn social-link" href="javascript:void(0)"><i class="fa fa-facebook"></i> <div class="ripple-wrapper"></div></a>
                            <a class="btn social-link" href="javascript:void(0)"><i class="fa fa-twitter"></i> <div class="ripple-wrapper"></div></a>
                            <a class="btn social-link" href="javascript:void(0)"><i class="fa fa-google-plus"></i> <div class="ripple-wrapper"></div></a>
                            <a class="btn social-link" href="javascript:void(0)"><i class="fa fa-youtube"></i> <div class="ripple-wrapper"></div></a>
                            <a class="btn social-link" href="javascript:void(0)"><i class="fa fa-linkedin"></i> <div class="ripple-wrapper"></div></a>
<?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="site-title-table">
                <div class="site-title-tablecell">
                    <div class="slide-text">
                        <h2><a href="<?php bloginfo( 'home' ); ?>"><span><?php bloginfo( 'name' ); ?></span></a></h2>
                        <p><?php bloginfo( 'description' ); ?></p>

                        <div class="search_form">
                            <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <input type="text" name="s" placeholder="Search" value="<?php echo get_search_query() ?>">
                                <button type="submit"><span class="glyphicon glyphicon-search"></span></button>
                            </form> 
                        </div>



                    </div>

                </div>
            </div>
        </header>


        
<section class="maincontent-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="maincotnent shadow-z-1">

                    <div class="mainmenu">
                        <div class="navbar navbar-nobg">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse">
                <?php
                    wp_nav_menu(array(
                            'theme-location' => 'main-menu',
                            'container'      => false,
                            'menu_class'     => 'nav navbar-nav',
                        ));
                ?>
                            </div>     
                        </div> 
                    </div> 
