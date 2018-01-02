<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package undercover
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
            <div class="footer-image-top"> <img src="<?php the_field("footer_image_top"); ?>"> </div>
            
            <p class="footer-text"> <?php the_field("footer_text"); ?> </p>
            
            <nav id="footer-navigation" class="footer-navigation">
                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'menu-2',
                        'menu_id' => 'footer-menu',
                    ) );
                ?>
            </nav>
            <div class="footer-image-bottom"> <img src="<?php the_field("footer_image_bottom"); ?>"> </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
