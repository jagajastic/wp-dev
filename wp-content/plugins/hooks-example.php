<?php

/**
 * Plugin Name: Hooks example
 *
 */

// function ju_title($title)
// {
//     return 'Hooked ' . $title;
// }

// function ju_footer_shoutout()
// {
//     echo "Example footer here <br />";
// }

// function ju_footer_shoutout_v2()
// {
//     echo "Example footer here version 2 <br />";
// }

// add_filter('the_title', 'ju_title');
// add_action('wp_footer', 'ju_footer_shoutout');
// add_action('wp_footer', 'ju_footer_shoutout_v2');

function ju_footer()
{
    do_action('ju_custom_footer');
}

function ju_kill_wp()
{
    echo 'Hello from ju_kill_wp';
}

add_action('wp_footer', 'ju_footer');
add_action('ju_custom_footer', 'ju_kill_wp');