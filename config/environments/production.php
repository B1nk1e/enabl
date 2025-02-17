<?php
/**
 * Configuration overrides for WP_ENV === 'production'
 */

use Roots\WPConfig\Config;

Config::define( 'WP_DEBUG', false );
Config::define( 'WP_DEBUG_DISPLAY', false );
Config::define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true );
Config::define( 'SCRIPT_DEBUG', true );

ini_set( 'display_errors', '0' );

// Enable plugin and theme updates and installation from the admin
Config::define( 'DISALLOW_FILE_MODS', false );
