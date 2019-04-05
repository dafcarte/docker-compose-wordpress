<?php

/**
 * All theme custom functions are delared here
 */

/*************************************************************************************************************************
 * Loads google fonts to the theme
 * Thanks to themeshaper.com
 ************************************************************************************************************************/

if ( ! function_exists( 'minimalist_blog_fonts_url' ) ) :

function minimalist_blog_fonts_url() {
  $minimalist_blog_fonts_url  = '';
  $minimalist_blog_lora   = _x( 'on', 'Lora font: on or off', 'minimalist-blog' );
  $minimalist_blog_rubik = _x( 'on', 'Rubik font: on or off', 'minimalist-blog' );

  if ( 'off' !== $minimalist_blog_lora || 'off' !== $minimalist_blog_rubik ) {
    $minimalist_blog_font_families = array();

    if ( 'off' !== $minimalist_blog_lora ) {
      $minimalist_blog_font_families[] = 'Lora:700i';
    }

    if ( 'off' !== $minimalist_blog_rubik ) {
      $minimalist_blog_font_families[] = 'Rubik:400,500,700';
    }
  }

  $minimalist_blog_query_args = array(
    'family' => urlencode( implode( '|', $minimalist_blog_font_families ) ),
    'subset' => urlencode( 'cyrillic-ext,cyrillic,vietnamese,latin-ext,latin' )
  );

  $minimalist_blog_fonts_url = add_query_arg( $minimalist_blog_query_args, 'https://fonts.googleapis.com/css' );

  return esc_url_raw( $minimalist_blog_fonts_url );
}

endif;

/*************************************************************************************************************************
 * Set the content width
 ************************************************************************************************************************/

if ( ! isset( $content_width ) ) {
  $content_width = 900;
}

/*************************************************************************************************************************
 *  Adds a span tag with dropdown icon after the unordered list
 *  that has a sub menu on the mobile menu.
 ************************************************************************************************************************/

class Minimalist_Blog_Dropdown_Toggle_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_lvl( &$minimalist_blog_output, $minimalist_blog_depth = 0, $minimalist_blog_args = array() ) {
        $minimalist_blog_indent = str_repeat( "\t", $minimalist_blog_depth );
        if( 'mobile_menu' == $minimalist_blog_args->theme_location ) {
            $minimalist_blog_output .='<i class="fa fa-ellipsis-v dropdown-toggle"></i>';
        }
        $minimalist_blog_output .= "\n$minimalist_blog_indent<ul class=\"sub-menu\">\n";
    }
}
