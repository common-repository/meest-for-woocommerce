<?php

namespace MeestShipping\Modules;

if (!defined('ABSPATH')) {
    exit;
}

class Activator
{
    public function init()
    {
        register_activation_hook(MEEST_PLUGIN_BASENAME, [$this, 'activation']);
    }

    public function activation()
    {
        global $wpdb;

        $collate = $wpdb->get_charset_collate();

        $wpdb->query("CREATE TABLE IF NOT EXISTS {$wpdb->prefix}meest_parcels (
            id int(11) NOT NULL AUTO_INCREMENT,
            order_id int(11) NULL,
            parcel_id CHAR(36) NULL,
            pack_type_id CHAR(36) NULL,
            sender JSON NULL,
            receiver JSON NULL,
            pay_type TINYINT NULL,
            receiver_pay TINYINT NULL,
            cod DECIMAL(8,2) NULL,
            insurance DECIMAL(8,2) NULL,
            weight DECIMAL(8,2) NULL,
            lwh JSON NULL,
            notation VARCHAR(255) NULL,
            barcode VARCHAR(16) NULL,
            cost_services DECIMAL(8,2) NULL,
            delivery_date DATE NULL,
            is_email TINYINT NULL,
            created_at DATETIME NOT NULL,
            updated_at DATETIME NOT NULL,
            PRIMARY KEY (id)
        ) $collate");

        $wpdb->query("CREATE TABLE IF NOT EXISTS {$wpdb->prefix}meest_pickups (
            id int(11) NOT NULL AUTO_INCREMENT,
            sender JSON NULL,
            pay_type TINYINT NULL,
            receiver_pay TINYINT NULL,
            notation VARCHAR(255) NULL,
            expected_date DATE NULL,
            expected_time_from TIME NULL, 
            expected_time_to TIME NULL, 
            register_number char(16) NOT NULL, 
            register_id char(36) NOT NULL,
            register_date date NOT NULL,
            created_at DATETIME NOT NULL,
            updated_at DATETIME NOT NULL,
            PRIMARY KEY (id)
        ) $collate");

        $wpdb->query("CREATE TABLE IF NOT EXISTS {$wpdb->prefix}meest_pickup_parcel (
            pickup_id int(11) NOT NULL,
            parcel_id int(11) NOT NULL
        ) $collate");
    }
}
