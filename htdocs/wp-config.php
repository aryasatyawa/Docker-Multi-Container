<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

define('FS_METHOD', 'direct');
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_dp');

/** Database username */
define('DB_USER', 'wordpress_user');

/** Database password */
define('DB_PASSWORD', 'sandi_wordpress');

/** Database hostname */
define('DB_HOST', 'mysql-server');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_REDIS_HOST', 'redis_server');
define('WP_REDIS_PORT', 6379);
define('WP_REDIS_PREFIX', 'dolanan');
define('WP_REDIS_DATABASE', 0); // 0-15
define('WP_REDIS_TIMEOUT', 1);
define('WP_REDIS_READ_TIMEOUT', 1);


/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'j;H7I1TMiu+:9xQB=nb]g9`P2Cr3lGP+]Xq%<H@]0s[rvc0-iN7+B/z:T6qNNOwy');
define('SECURE_AUTH_KEY',  '}FGzkn@/*f]Y^s{wy)2jsCeVrnL9{BMiU+/icL#t<@FC)WkHzv>U*<19^{ESLV;Z');
define('LOGGED_IN_KEY',    '~+1d-t]s=J}y^S7`bm~Ljy? R4&&_HqINbE0|5gvB<S<GMn)M*b)fJ`u?jITu@mF');
define('NONCE_KEY',        'jY0wa(v<unCHz}F;4OOJe*OoX-!Wc+dq{D@n.2~rs7X_EKO}{@L=VLoWy+ aJxHI');
define('AUTH_SALT',        '|K`a_o)5T 5inTZ?M)m6jt11=1ht.%5}lcwnkZ& 3pdkq=,}36okHh]#4ISNuD`M');
define('SECURE_AUTH_SALT', 'TSf^Bf_.FDBT N/WrqkRK% |[<*fhVI0 P,/UlT <&X&%q@:4qsT& ;r3L1^XUU<');
define('LOGGED_IN_SALT',   '3JxIB<kbd#<rh^*B9h[z_=6s)E&c]t1z?*Z5&qb!S14|OpoVcaeA[Ou2: 5%`<Iv');
define('NONCE_SALT',       '(0}QlQJ$DuyEbYSV[F?lx4NEIX:twY<ehkv5Rqx5/`[&P|(>j=upm#<20EW~w%e0');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
