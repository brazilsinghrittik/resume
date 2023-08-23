<?php
global $gridx_options;
/**
 * Header file for the gridx WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gridx
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php  wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


 <main class="main-aboutpage">

<!-- Header -->
<header class="header-area">
    <div class="container">
        <div class="gx-row d-flex align-items-center justify-content-between">
            <a href="<?php echo esc_html($gridx_options['logo_link']); ?>" class="logo">
<?php 	if( class_exists( 'ReduxFrameworkPlugin' ) ) { 

    global $gridx_options; 
			if($gridx_options['gridx_color_switcher_options'] == 1) : ?>				
<img src="<?php echo esc_url($gridx_options['main-logo']['url']); ?>" alt="<?php echo esc_attr__( 'Logo', 'gridx' )?>">
				
<?php elseif($gridx_options['gridx_color_switcher_options'] == 2) : ?>	
<img src="<?php echo esc_url($gridx_options['main-logo-dark']['url']); ?>" alt="<?php echo esc_attr__( 'Logo', 'gridx' )?>">
						
<?php endif; } ?>
            </a>

            <!-- Collect the nav links, forms, and other content for toggling -->

            <?php 
                    wp_nav_menu( array(
                    'theme_location'  => 'main-menu',
                    'depth'           => 3, // 1 = no dropdowns, 2 = with dropdowns.
                    'container'       => 'nav',
                    'container_class' => 'navbar',
                    'menu_class'      => 'menu',
                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                    'items_wrap'      => '<ul data-in="#" data-out="#" class="%2$s" id="%1$s">%3$s</ul>',
                    'walker'          => new gridx_Bootstrap_Navwalker(),
                    ) );
                    
                ?>
                

            <a href="<?php echo esc_html($gridx_options['butn_link']); ?>" class="theme-btn"><?php echo esc_html($gridx_options['button_name']); ?></a>

            <!-- End Navigation -->

            <div class="show-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</header>

   <!-- Credentials -->
        <section class="credential-area">
            <div class="container">
                <div class="gx-row d-flex">

                    <div class="credential-sidebar-wrap" data-aos="zoom-in">
                        <div class="credential-sidebar text-center">
                            <div class="shadow-box">
<?php 	if( class_exists( 'ReduxFrameworkPlugin' ) ) { 

    global $gridx_options; 
			if($gridx_options['gridx_color_switcher_options'] == 1) : ?>
				
<img src="<?php echo esc_url($gridx_options['bgimg']['url']); ?>" alt="BG" class="bg-img">
				
<?php endif; } ?>
                                <div class="img-box">
                                    <img src="<?php echo esc_url($gridx_options['heroimg']['url']); ?>" alt="About Me">
                                </div>
                                <h2><?php echo esc_html($gridx_options['heading']); ?></h2>
                                <p><?php echo esc_html($gridx_options['subheading']); ?></p>
        
                                <ul class="social-links d-flex justify-content-center">
                                    <li><a href="<?php echo esc_html($gridx_options['icon_link1']); ?>"><i class="<?php echo esc_attr($gridx_options['class1']);?>
                                    "></i></a></li>
                                    <li><a href="<?php echo esc_html($gridx_options['icon_link2']); ?>"><i class="iconoir-twitter"></i></a></li>
                                    <li><a href="<?php echo esc_html($gridx_options['icon_link3']); ?>"><i class="iconoir-instagram"></i></a></li>
                                    <li><a href="<?php echo esc_html($gridx_options['icon_link4']); ?>"><i class="iconoir-facebook-tag"></i></a></li>
                                </ul>
        
                                <a href="<?php echo esc_html($gridx_options['buttonlink']); ?>" class="theme-btn"><?php echo esc_html($gridx_options['buttonname']); ?></a>
                            </div>
                        </div>
                    </div>

                    