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
define( 'DB_NAME', 'shohag' );

/** MySQL database username */
define( 'DB_USER', 'shohag' );

/** MySQL database password */
define( 'DB_PASSWORD', 'tofazzul1993' );

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
define( 'AUTH_KEY',         '#HK_h6Mdl*J@j(qMsr&1^S2d>hnpc_FtoHm.J2m404b*L9e~27Kilw-@X?bjDZ]>' );
define( 'SECURE_AUTH_KEY',  'Lx*wy&cP?DN{PGB z!%@To(/mBKr2J3)8GY7s-iJ&^[,C:0_, go7pyJC.k2b7nH' );
define( 'LOGGED_IN_KEY',    'P3|6)P!G;?9J?5jEjRP=T:x[tVd6aw?vXo/?ED5WL-USJdKT3g=E0>@B@<)l]>< ' );
define( 'NONCE_KEY',        ',^6_{CDH!yF_$fZI1DuR lQ[HL=+bPh;!W2S<!d;QAOw=B@E,&[up0L i2}k9_Tq' );
define( 'AUTH_SALT',        'Ki4VTZkToifljwRE($G?_KJ?$bWGPT[}0]^_tl@>O.qwczGEc?]N/mlaK8V(T$d9' );
define( 'SECURE_AUTH_SALT', '-cXwkLb+k3F236m,HKg:a.+)Mj9LJl|tU87k+IMXSB3/5G+4*6?@$8j*{ND_piu|' );
define( 'LOGGED_IN_SALT',   ' %^Txmp#9B+$/Pd}2MegBrcqeFg9~A6b;2%rKW)J$gwgDYZHstN3e8EvU:b#DFn4' );
define( 'NONCE_SALT',       '7h|L5YQb)A_]r!|Fda3IBo:h.EM R:li)#^yG=$HU^9B>(RVE}rqVE*1<Qd|~o]{' );

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
