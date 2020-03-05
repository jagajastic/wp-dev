<?php

function r_activate_plugin()
{
    if (version_compare(get_bloginfo('version'), '5.0', '<')) {

        wp_die(__("You must update Wordpress to use this plugin.", 'recipe'));

    }

    global $wpdb;
    $createSQL = "
    CREATE TABLE `" . $wpdb->prefix . "_recipe_ratings` (
        `ID` bigint(20) NOT NULL,
        `recipe_id` bigint(20) NOT NULL,
        `rating` float(3,2) NOT NULL,
        `user_ip` varchar(50) NOT NULL
      ) ENGINE=InnoDB " . $wpdb->get_charset_collate() . ";
    ";

    require ABSPATH . "/wp-admin/includes/upgrade.php";
    dbDelta($createSQL);
}