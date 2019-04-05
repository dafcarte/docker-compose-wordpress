<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything upto navigation menu.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />

		<!-- Mobile Specific Data -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class( 'sticky-header' ); ?>>

	  	<header class="site-header">
	        <div class="container">
	            <div class="row clearfix">
		                <div class="site-branding">
			                    <?php
									if ( has_custom_logo() ) {
										if ( function_exists( 'the_custom_logo' ) ) {
											the_custom_logo();
										}
									} else {
								?>
									<h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
								<?php
									}
			                    ?>
		                </div><!-- /.site-branding -->

	                	<?php
	                		if ( has_nav_menu( 'header_menu' ) ) :

			                	wp_nav_menu( array(
									'theme_location' => 'header_menu',
									'container' => 'nav',
									'container_class' => 'menu-all-pages-container',
									'menu_class' => 'main-nav',
								) );

							endif;
						?>
						 <div class="mobile-navigation">
						 	<?php if ( !has_custom_logo() ) : ?>
				    			<i class="fa fa-bars menubar-right"></i>
				    		<?php else : ?>
				    			<i class="fa fa-bars menubar-right has-logo"></i>
				    		<?php endif; ?>

			        		<nav class="nav-parent">
						        <i class="fa fa-close menubar-close"></i>
								<?php
									if ( has_nav_menu( 'mobile_menu' ) ) :
										wp_nav_menu( array(
											'theme_location'	=> 'mobile_menu',
											'container'			=> false,
											'menu_class'		=> 'mobile-nav',
											'depth'				=> '4',
											'walker'			=> new Minimalist_Blog_Dropdown_Toggle_Walker_Nav_Menu()
										) );
									endif;
								?>
			        		</nav>
						</div> <!-- /.mobile-navigation -->

	            </div><!-- /.row -->
	        </div><!-- /.container -->
	    </header>
