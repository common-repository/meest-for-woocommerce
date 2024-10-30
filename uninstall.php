<?php
if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit;
}

global $wpdb;

delete_option(MEEST_PLUGIN_NAME.'_plugin');
delete_option(MEEST_PLUGIN_NAME.'_api');

$wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}meest_parcels;");
$wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}meest_pickups;");
$wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}meest_pickup_parcel;");
