<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'projectdevelopher_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '[%hBwpUbANgda>FFd<>L#A5[W`$9zW$H:/IHkU=N+aNz+q4}0`L?jFf}jEC{jaOQ' );
define( 'SECURE_AUTH_KEY',  'B+gUOm={yc-p(*sOnK[me<`G~Aj=j^s_Rt#ut5yBf;[.7dIJcYCgN!w%QjH;>`Qf' );
define( 'LOGGED_IN_KEY',    'x?pRBYQuEXgif_8`OwM{WIkfAeg<6Z%<QlP$+Wp@*sE_ZZ2z:v-@oW5,3 0URL94' );
define( 'NONCE_KEY',        '?u80KdK>kH-X&@J=,+lBvDU9&-2fN4@`drMoHyJ?1doc&3TS+w%9,iT)!p<~+H`>' );
define( 'AUTH_SALT',        '/=TcN|[]$!CeO[_?abZ-a; ]t11y$+*>g7a%6><Ov8ykUsJK%%DlT`t794E6H?r?' );
define( 'SECURE_AUTH_SALT', 's,^%>`#V7nvH8 8]y>fHnZ::H:E):q%zI7IB6T}qhxE6wOBy.QPS$8es`L<)pk[v' );
define( 'LOGGED_IN_SALT',   'Hd8lo$lUxBrIbdO2X.F-Ff|gc>sAVl<1j>`M.+!ZI$8^p[Wn8!;@V%2ExFMVYG{}' );
define( 'NONCE_SALT',       '}q7oA<2Ri]bC!Y<UudeCdqRL2ylPmk)&[s[Hd$h &s._{]u$z2q.`gt+|2HL~US4' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
