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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mymedicplus-blog' );

/** MySQL database username */
define( 'DB_USER', 'dbuser110' );

/** MySQL database password */
define( 'DB_PASSWORD', '6+G?yxhHED34' );

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
define( 'AUTH_KEY',         'q6RZMk/-IE3S^jk70Y7c- tn;TuF55a2zGZ~&2V{{Mb|(nbRwgKtA*Jsx[]:?(m]' );
define( 'SECURE_AUTH_KEY',  'ik!h#sG$W]xSy$FJfu!@Yq2xSzb2_?4Z4#;-b R[8b?}WL  d60&/I_H$k:G!8zX' );
define( 'LOGGED_IN_KEY',    'ieYZ[-$/G[7pki> 5<3:Ng}JNRa `L4QBy(9U8);.c*:QdyoL@H>SoEE.(>f`oU/' );
define( 'NONCE_KEY',        'O]r<UlrPO5`]&2]X)FMY;Cv},M`1yzQE`BL(,DZw[_6y2j+d53&1O&l!|.sjMk|C' );
define( 'AUTH_SALT',        'hF1+NojKgh~{J>%}Ly]AF7prYGR/B}iC-[Ng`y=V7w3S8Ow|2$*etUEElc$BgywP' );
define( 'SECURE_AUTH_SALT', '#kHy9X<n26vi<2)x!*bJ3f|EcS0 7houQDt}JNIlmt>O5ZU4WlWJUHT.rSr 3h>L' );
define( 'LOGGED_IN_SALT',   '/51L r8b5<F01<b,_y[!>LYX7f>x#AFO)ov ={4qUx!$FU6H1fv/dT,n?Qa_YG0G' );
define( 'NONCE_SALT',       'mKhd:{gqF1xc{}rWo&^r(7jSmEbf*+IfbE:*M2PdzdWj<CWV,vbw,~6g3&d:,]/c' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
