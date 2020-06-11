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
define( 'DB_NAME', 'calliope' );

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
define( 'AUTH_KEY',         'GMb{]Qx|cO$1i#LqK>nYX,DGA:KMH/&1vn_,PK_6`H/,ZOT<_&*|B-FrNt!s8`hv' );
define( 'SECURE_AUTH_KEY',  'I9`lUr~+~Wz0B2p8%.~xOiy_m[@~_h6*4kh3sC44ch3V{&lNI3[zY-bDR{!_dZsN' );
define( 'LOGGED_IN_KEY',    '/]GDNhA`AP@S/cZ#YT*gM|dQr//M`K,Q<B5f[8~~:r5C`W5}+<_Cn?2|^QyRzsfF' );
define( 'NONCE_KEY',        'Sg7{%t}H`x8/dPy(,LcrZzT(sQcWG.2aO6,z(#EWQ5sZKAAGfuY*1R1Ne,R!]%QR' );
define( 'AUTH_SALT',        'N0]W/JRZ5+eSQesN+hE3C?H?%cu|[ju&K)uI!BO~J*kYudaV0jYl!=F.a@Im)=]&' );
define( 'SECURE_AUTH_SALT', 'XmI`60?#*C2za0M$myWTAMNX+(Jlw1)tH2mvPm^94qM6kuGJ9oU!@V/abg5PIJYH' );
define( 'LOGGED_IN_SALT',   '}EGUR1mi- )W/%o7~_#^BIy]7%(k jUmN#jdH,D,dNjC:}Ua@VcFsbIpSUSK4%x[' );
define( 'NONCE_SALT',       ':0NfYDa~& Bce^Sd~fHFR./FFP:Q;83$3>?zVTF_NSPbY141+!e]LSSGKn9#RXy2' );

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
