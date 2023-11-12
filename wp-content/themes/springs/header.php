<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Springs
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>

    <!-- <link rel="shortcut icon" type="image/png" href="https://static.ladipage.net/59c37957ca5667ffb5872972/xa-bong-nghe-3-gigapixel-2-20210127080327.jpg"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/vendor/libs/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/vendor/css/main.css">

    <style>
        p {
            margin-bottom: 0;
        }
    </style>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Menu mobile -->
<div class="offcanvas offcanvas-start" id="menu-mobile">
        <div class="offcanvas-header">
            <button type="button" data-bs-dismiss="offcanvas">
                <svg xmlns="http://www.w3.org/2000/svg" width="37" height="43" viewBox="0 0 37 43" fill="none">
                    <path d="M1 11L36.5 32" stroke="white" />
                    <path d="M36.7183 11.3781L0.781726 31.622" stroke="white" />
                </svg>
            </button>
        </div>
        <div class="offcanvas-body">
            <?php 
                wp_nav_menu( array( 'theme_location'=>'my-custom-menu', 'container' => 'ul','menu_class'=>'navbar-nav' ) );
            ?>
            <p><a href="<?php echo esc_url(home_url('/')); ?>/#contact">お問合わせ</a></p>
        </div>
    </div>

    <!-- Header -->
    <header id="header">
        <div class="container-c">
            <nav class="navbar navbar-expand-sm navbar-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php bloginfo('template_directory'); ?>/vendor/imgs/logo.png" alt="Avatar Logo" class="logo">
                        <img src="<?php bloginfo('template_directory'); ?>/vendor/imgs/img-footer.svg" alt="Avatar Logo" class="logo-mobile">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#menu-mobile">
                        <svg xmlns="http://www.w3.org/2000/svg" width="39" height="19" viewBox="0 0 39 19" fill="none">
                            <path d="M0 1H38.5M0 9.5H38.5M0 18.5H38.5" stroke="black" />
                        </svg>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <?php 
                            wp_nav_menu( array( 'theme_location'=>'my-custom-menu', 'container' => 'ul','menu_class'=>'navbar-nav' ) );
                        ?>
                        <a class="btn btn-primary btn-contact" href="<?php echo esc_url(home_url('/')); ?>/#contact">お問合わせ</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>