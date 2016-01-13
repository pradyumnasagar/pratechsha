<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'u817352479_anema');

/** MySQL database username */
define('DB_USER', 'u817352479_uhusy');

/** MySQL database password */
define('DB_PASSWORD', 'eGubateVag');

/** MySQL hostname */
define('DB_HOST', 'mysql');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'T4P9GheorGZODI3T8XaXwOMGU7XFngJS6LbWOESDOzVS4twO94CXl4CCxxSOd50o');
define('SECURE_AUTH_KEY',  'FUUyeFymiC3jvkKamTzfkHMP4WTEsMhQrI6b3T7BpMth9MlLfYqNQk4cFa6qdF1i');
define('LOGGED_IN_KEY',    '8eQ5P1vdSAZpCAgI5zjPlOTZht413Ryha2Gywn3jC6iWfUpLiN6KPrQhQKtOi41f');
define('NONCE_KEY',        'Ryffaho3p4iNuDCHmndR3KSN2GvFmOKjJEsWo71V9fa4mfOXuWdqgvySWos2gbrM');
define('AUTH_SALT',        'oYBXK17o65adw580rGG6sE5ovfuxUHqs0HwXL2yfbEYUmdyN6Q5bvTGSeAkHZbpl');
define('SECURE_AUTH_SALT', 'ES93Vs1CBcP9bhZcBMnhKOvVxdDHyKEW6D3VxAnc2i0W09nBWrlpMdfxYV8w2i9f');
define('LOGGED_IN_SALT',   'jzupVdPh3xC60rwnrQYNlmks2TV86RJWUYiEQDphySNI5RrV5BsBt0Neo4477MMJ');
define('NONCE_SALT',       'OB7lnfh2VTMMa3DyDDgyz9pRUshIWThudlUOI8IcdXHLpDV7yuGIyRoySaELtlGO');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pfog_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
