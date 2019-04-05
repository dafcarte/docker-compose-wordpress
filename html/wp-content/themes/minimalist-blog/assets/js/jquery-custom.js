	/**
	 * Table of Contents:
	 *
	 * 1.0 - Mobile Menu
	 * 2.0 - Sticky Header
	 * 3.0 - Masonry Layout
	 */

	( function($) {

		/**
		 * 1.0 - Mobile menu
		 */

		$( '.dropdown-toggle' ).on( 'click', function(){
			$( this ).toggleClass( 'toggled' );
		 	$( this ).next().slideToggle();
		} );

		// Function to show the menu
		function show_menu() {
			$( '.nav-parent' ).addClass( 'mobile-menu-open' );
		}

		// Function to hide the menu
		function hide_menu(){
			$( '.nav-parent' ).removeClass( 'mobile-menu-open' );
		}

		$( '.menubar-right' ).on( 'click', show_menu );
		$( '.mobile-menu-overlay' ).on( 'click', hide_menu );
		$( '.menubar-close' ).on( 'click', hide_menu );

		/**
		 * 2.0 - Sticky Header
		 */

		$( window ).on( 'scroll', function() {
			if ( $( window ).scrollTop() ) {
				$( '.site-header' ).addClass( 'stuck' );
			} else {
				$( '.site-header' ).removeClass( 'stuck' );
			}
		} );

		/**
		 * 3.0 - Masonry Layout
		 */

		var $grid = $( '.grid' ).masonry( {
			// options
			itemSelector: '.grid-item'
		} );

		// layout Masonry after each image loads
		$grid.imagesLoaded().progress( function() {
			$grid.masonry( 'layout' );
		});

	} )( jQuery );
