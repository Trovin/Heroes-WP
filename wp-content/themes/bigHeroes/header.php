<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php get_template_part( 'template-parts/head' ); ?>
</head>

<body <?php body_class("page-body"); ?>>

	<header class="header header-default">

        <div class="header-flex">
            <!-- logo image -->
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <img src="<?php echo get_field( 'logo_image', 'option' ); ?>" class="logo-image" alt="logo-image">
            </a>

            <!--mobile menu nav-->
            <div class="menu-action">
                <span class="menu-action__item"></span>
                <span class="menu-action__item"></span>
                <span class="menu-action__item"></span>
            </div>

            <!-- main navigation -->
            <nav class="main-nav main-nav_header" role="navigation">
                <div class="main-nav__wrapp">
                    <?php
                        wp_nav_menu(array('walker' => new mainMenuWalker(), 'container'=>false, 'echo' => true, 'menu_class' => 'main-nav__list', 'theme_location'=>'menu-1', 'fallback_cb'=>false, 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'depth' => 2, ));
                    ?>
                </div>
            </nav>
        </div>

	</header>
