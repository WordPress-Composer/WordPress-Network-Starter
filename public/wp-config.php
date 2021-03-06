<?php
/**
 * WordPress Config file
 */

// Include Composer Dependencies
require __DIR__ . '/../vendor/autoload.php';

// Load the DotEnv Package to access settings with the .env environment file
$dotenv = new Dotenv\Dotenv(__DIR__ . '/../');
$dotenv->load();

/**
 * Database name
 */
define('DB_NAME', getenv('DATABASE_NAME'));

/**
 * Database user
 */
define('DB_USER', getenv('DATABASE_USER'));

/**
 * Database user password
 */
define('DB_PASSWORD', getenv('DATABASE_PASSWORD'));

/**
 * Database host
 */
define('DB_HOST', getenv('DATABASE_HOST'));

/**
 * WordPress DB Charset (is setup this way when the tables are made)
 */
define( 'DB_CHARSET', 'utf8' );

/**
 * WordPress DB Collation (is setup this way when the tables are made)
 */
define( 'DB_COLLATE', 'utf8_general_ci' );

/**
 * WordPress home URL (for the front-of-site)
 */
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '');

define('WP_ADMIN_DIR', '/wordpress');

/**
 * WordPress site URL (which is for the admin)
 */
define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . WP_ADMIN_DIR);

/**
 * WordPress content directory
 */
define('WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content');

/**
 * WordPress plugins url
 */
define('WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp-content');

/**
 * WordPress plugins directory
 */
define('WP_PLUGIN_DIR', dirname(__FILE__) . '/wp-content/plugins');

/**
 * WordPress plugins url
 */
define('WP_PLUGIN_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp-content/plugins');

/**
 * Controls the error reporting. When true, it sets the error reporting level
 * to E_ALL. 
 */
define('WP_DEBUG', filter_var(getenv('DEBUG'), FILTER_VALIDATE_BOOLEAN));

/**
 * If error logging is enabled, this determines whether the error
 * is logged or not in the debug.log file inside /wp-content.
 */
define('WP_DEBUG_LOG', filter_var(getenv('DEBUG_LOG'), FILTER_VALIDATE_BOOLEAN));

/**
 * If error logging is enabled, this determines whether the error is
 * shown on the site (in-browser)
 */
define('WP_DEBUG_DISPLAY', filter_var(getenv('DEBUG_DISPLAY'), FILTER_VALIDATE_BOOLEAN));

/**
 * This disables live edits of theme and plugin files on the WordPress
 * administration area. It also prevents users from adding, 
 * updating and deleting themes and plugins.
 */
define('DISALLOW_FILE_MODS', true);

/**
 * Prevents WordPress core updates, as this is controlled through
 * Composer.
 */
define( 'WP_AUTO_UPDATE_CORE', false );

/**
 * Switches on multisite editing
 */
define( 'WP_ALLOW_MULTISITE', filter_var(getenv('ALLOW_MULTISITE'), FILTER_VALIDATE_BOOLEAN));

define('IS_MULTISITE', filter_var(getenv('IS_MULTISITE'), FILTER_VALIDATE_BOOLEAN));

if (IS_MULTISITE) {
	define('MULTISITE', true);
	define('SUBDOMAIN_INSTALL', false);
	define('DOMAIN_CURRENT_SITE', WP_HOME);
	define('WP_CORE_DIRECTORY', WP_ADMIN_DIR);
	define('SITE_ID_CURRENT_SITE', 1);
	define('BLOG_ID_CURRENT_SITE', 1); 

	define('COOKIE_DOMAIN', $_SERVER['HTTP_HOST']);
	define('ADMIN_COOKIE_PATH', '/');
}

/**
 * WordPress table prefix
 */
$table_prefix = 'wp_';

/* Authentication Unique Keys and Salts. */
/* https://api.wordpress.org/secret-key/1.1/salt/ */
define('AUTH_KEY',         getenv('AUTH_KEY'));
define('SECURE_AUTH_KEY',  getenv('SECURE_AUTH_KEY'));
define('LOGGED_IN_KEY',    getenv('LOGGED_IN_KEY'));
define('NONCE_KEY',        getenv('NONCE_KEY'));
define('AUTH_SALT',        getenv('AUTH_SALT'));
define('SECURE_AUTH_SALT', getenv('SECURE_AUTH_SALT'));
define('LOGGED_IN_SALT',   getenv('LOGGED_IN_SALT'));
define('NONCE_SALT',       getenv('NONCE_SALT'));


/* Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/public');

/* Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');