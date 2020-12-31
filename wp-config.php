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
define( 'DB_NAME', 'cursokogabarber' );

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
define( 'AUTH_KEY',         'U/4dZ{Xoq2AQ){UK!OG8WGCay-:!C%bP`frC>9N.$-q1]$`}0}#J?9gh@.<WPvVy' );
define( 'SECURE_AUTH_KEY',  '?4DX|A%Q~$4-P=jws7cji{^5fSsxA[Ad49-9]$^0?4ejy5.H$sN#d=QB3gxv=*Ly' );
define( 'LOGGED_IN_KEY',    'wK1=GVD-+OE*kO)FNX3H12k rAr|@qtTapSrIt#E}D{p(G<1JG$%H.&rhcE4jR[M' );
define( 'NONCE_KEY',        '6-]P+%~NU.9R4%Sc#%kW0<o!Kj:nzoT/+:B:w!6&MJ>YDDYX/rO_2j $i;I5y0]]' );
define( 'AUTH_SALT',        'itNaykTG>Y,;1Oc}+U[zz{@]r7:z{)yQ 0c!qo2Dm!X5iY.5pnVfcEg6}|@>Zq<>' );
define( 'SECURE_AUTH_SALT', '9hFzB7`fy:OIV!Hr2=&en<xAKn.MXi<%jy})r_3h$+q74KPeUJw9do=,*N:y*}c2' );
define( 'LOGGED_IN_SALT',   'L0j8uy5*m7.(RrW(V3?1ZGOT3a8on[B[P$bgyAdp3Ud8p^AZ9v4^?jE=0`q88Wo*' );
define( 'NONCE_SALT',       'c)`6C0Q3:r1A7oCN[5)G<2JW/&Tt+$_7*hJ1BWRlJubjp,6pw;8n{_Blw,(8!`Ca' );

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
