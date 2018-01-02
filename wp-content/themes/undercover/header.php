<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <header id="masthead" class="site-header">
        <div class="site-branding">
            
            <?php the_custom_logo(); ?>

            <div class="header-menu-container">
                <div class="menu-toggle" onclick="toggle_menu();"> <i id="toggle_symbol" class="fa fa-bars"></i> </div>
                <div id="menu_id" class="header-menu menu_toggled_off">
                    <div id="menu_items" class="menu_items menu_items_off">
                        <div class="menu-heading"><h1> <?php the_field("menu_heading"); ?> </h1></div>
                        <nav id="site-navigation" class="main-navigation">
                            <div class="menu-links">
                                <?php
                                    wp_nav_menu( array(
                                        'theme_location' => 'menu-1',
                                        'menu_id'        => 'primary-menu',
                                    ) );
                                ?>

                                <?php if( have_rows('sign_upin') ): ?>
                                    <div class="sign-up-in">
                                        <?php while ( have_rows('sign_upin') ) : the_row(); ?>
                                        <p> <?php the_sub_field('sign_up'); ?> </p>
                                        <p> <?php the_sub_field('sign_in'); ?> </p>    
                                        <a href="#feedback"> <?php the_sub_field('send_message'); ?> </a>    
                                        <?php endwhile; else : endif; ?>
                                    </div>
                            </div>
                            <div class="menu-search"> <?php get_search_form(); ?> </div>
                        </nav>
                    </div>
                </div>    
            </div>
            
            <figure class="custom-header-image"><?php the_header_image_tag(); ?></figure>
            
            <?php $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) : ?>
                    <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
            <?php endif; ?>

            <div class="scroll-down-container">
                <div class="scroll-down-text"> <?php the_field("scroll_down_text"); ?> </div>
                <div> <img src="<?php the_field("scroll_down_image"); ?>" > </div>
            </div> 
                    
        </div>
    </header>
<div id="content" class="site-content">
