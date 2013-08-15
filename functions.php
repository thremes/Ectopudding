<?php
/**
 * This is your child theme functions file.  In general, most PHP customizations should be placed within this
 * file.  Sometimes, you may have to overwrite a template file.  However, you should consult the theme
 * documentation and support forums before making a decision.  In most cases, what you want to accomplish
 * can be done from this file alone.  This isn't a foreign practice introduced by parent/child themes.  This is
 * how WordPress works.  By utilizing the functions.php file, you are both future-proofing your site and using
 * a general best practice for coding.
 *
 * All style/design changes should take place within your style.css file, not this one.
 *
 * The functions file can be your best friend or your worst enemy.  Always double-check your code to make
 * sure that you close everything that you open and that it works before uploading it to a live site.
 *
 * @package Ectopudding
 * @subpackage Functions
 */

// adds the child theme setup function to the 'after_setup_theme' hook
add_action('after_setup_theme', 'ectopudding_theme_setup', 11);

/**
 * Setup function.  All child themes should run their setup within this function.  The idea is to add/remove
 * filters and actions after the parent theme has been set up.  This function provides you that opportunity.
 *
 * @since 0.1.0
 */
function ectopudding_theme_setup()
{
    // get the theme prefix
    $prefix = hybrid_get_prefix();

    // register and enqueue needed styles
    add_action('wp_enqueue_scripts', 'ectopudding_enqueue_styles');

    // example action
    // add_action( "{$prefix}_header", 'ectopudding_example_action' );

    // example filter
    // add_filter( "{$prefix}_site_title", 'ectopudding_example_filter' );
}

/**
 * Enqueue needed styles for the current theme.
 *
 * @since 0.1.1
 */
function ectopudding_enqueue_styles()
{
    // enqueue needed styles
    wp_enqueue_style(
        'chunkfive-webfont',
        trailingslashit(get_stylesheet_directory_uri()) . 'css/chunkfive-webfont.css'
    );
}