<?php

define( 'APP_ENV', 'dev' );

// Configuration path
$config_path = __DIR__ . '/../config/wp-config-' . APP_ENV . '.php';
require_once $config_path;

define( 'WP_HOME', 'http://' . APP_DOMAIN );
define( 'WP_SITEURL', 'http://' . APP_DOMAIN . '/wp' );

define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' );

define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

define( 'DISALLOW_FILE_EDIT', true );

// Define WordPress table prefix.
$table_prefix = 'wp_';

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );
}

// Load WP Settings.
require_once( ABSPATH . 'wp-settings.php' );