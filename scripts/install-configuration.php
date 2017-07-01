<?php
/**
 * Install project configuration files.
 */

// Include composer assets.
require_once __DIR__ . '/../vendor/autoload.php';

// Define project root path.
$root_path = __DIR__ . '/../';

// Instantiate the configuration installer.
$installer = new WPOrbit\DecoupledConfiguration\Setup\Install( $root_path );
$installer->run();