<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'yassine' );

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
define( 'AUTH_KEY',         'RL2~WuL}ayU/]>]5y/;(y^_x#3=]x4]^^>acw|%`Qs+]UK{<eKnSqrrB8k|nytiX' );
define( 'SECURE_AUTH_KEY',  'bm:1Y>eBw*oFMA%>2dN`eK^Y[4wv}R{22(CBX[=j$d3[8Q@|xOUt6Zr7w(;NN^Fv' );
define( 'LOGGED_IN_KEY',    'E3%?l0oVNQ[?I~abKqK3+wg.*sS]OX->Fu&d6;UKy~NGs?P/6!O]K>V/3GwNEl/D' );
define( 'NONCE_KEY',        'Pu,I^S<)?(24qFa&CQ7}g`6d2^6eG-(kw/NCE&A)iz)f2PpRQ;3h_Mj{afoYdDfA' );
define( 'AUTH_SALT',        'PQX#9jE3z<43Vjj-fA$w7Gs?/V7MUh|kg&&EP%ai3-p@uWR~q>L$v&Z4G%2X]^3M' );
define( 'SECURE_AUTH_SALT', ' 0wqN5rv9B#: wmSSe}/hG8b,+w%]n,&0[dAgO.4y#s|!6yE0Wkb]1EZ]D?HHYJI' );
define( 'LOGGED_IN_SALT',   'g$DV_:c#x)O:NuMQnhzT&B.w#RDFQH>=I$R5BI.;A|`/dB4Kt&0+aNdorgrJ(@rN' );
define( 'NONCE_SALT',       'cBfiF?W(oQl`IdKMi(-0-d9b:+Yps@5%{;i-PJV0xElBb7F&9EKk2BX#04D>Cx1J' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
