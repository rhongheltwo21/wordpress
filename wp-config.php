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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'ffJv`ii~NoEeYXt4q4F_iX<Mc}>t9Qwqp0o~TIqZ6,=7yV8M2 pkGJj%}M=P!C+J' );
define( 'SECURE_AUTH_KEY',  '73*&V9}bQS!dy}Qz;?TIh+HOX46sw.,Cn7hy~-G1T&E5$zdMfSIdh$KJG*[@b,Jd' );
define( 'LOGGED_IN_KEY',    'BmT*k;WoW7{!sAs7We=vNyRf<C}:*7H3/&kk9/H_dY#b.>sk;=fCdG.Iy$al*L/^' );
define( 'NONCE_KEY',        'UL(3>Ya8u^9)Foa.%@PF5$]XIpPPm$B<by:arY*7p!t(k8VXWJiCgd95hf`MO9PJ' );
define( 'AUTH_SALT',        ';+7c5q^RSE|e`e5=8[W=?mJK:+NOtpVQfyf(hx-!< :GmA]A2a0fz|,Lvtes(q80' );
define( 'SECURE_AUTH_SALT', 'u}4;2+x<rftauuxR9O;qu+FTD~:aAS$hfkZ{ d?OH$fDmccp{C8i7y@%6ba%f/)<' );
define( 'LOGGED_IN_SALT',   'F,Pa?Q19`03q6`KAjW7`YxQCdR[+Z%GJgEeCA$kv[n<e]lROF~PxKQ<sti<_Li8K' );
define( 'NONCE_SALT',       'Uk|u(S)j;YC{x*WNOV|F*92^x~>v+P<JnczBM6kuJiM99&-_rHQkMBo19O|v:ULo' );

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
