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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '/PmmNXMpPcJ6hfqs2N_}%o;F4H^Kqni*MxkE!5Hkl0&uE+%k=,~#P`(@@yn3)amj' );
define( 'SECURE_AUTH_KEY',  'NX>$;eXa(VOX[yspvMU<@PAr_R9E:aS@8FqDQN&a:C!1L.v[=!NFi-d/]]Fy,kp]' );
define( 'LOGGED_IN_KEY',    '#+sVx>@B$}dY5Zj`gQRq._u}l_&F xs}Tt(l~!`=|oFQ_gWO0ExK,xP)kW1>kYQb' );
define( 'NONCE_KEY',        'wD4=rC[,OOZ:ezX?L:y0#GLAfC>)zu^o+ZO1U#1@-RoB8(WB-pipJbK!uD(}U?c$' );
define( 'AUTH_SALT',        '~:iJPk6JBut9yq(0*}Z,|q|PrjDM`Wn.EN0r)mw>@KkjG0lS8&w/VUH^R cQoS_!' );
define( 'SECURE_AUTH_SALT', 'o|o):98zLx=2P/kf9aFS}$12{_6p;yUZ|9=.`a5:}:$Nj!ib:|HjALi^u:dsn5e%' );
define( 'LOGGED_IN_SALT',   '`J1E6Li|I=!u0mq#AJDK1es<B_NFw{#nzI5jwtxNGLQe(Ylh.I4l$HwK(&`(|Iv=' );
define( 'NONCE_SALT',       'C-^ojW= 8Fbgh_N*i?T}D`%vdXS-Gny^P!a}dz7# 67DV+nTV12Ihgp1f,i`Ui6~' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
