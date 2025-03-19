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
define( 'DB_NAME', 'theregionalexpress' );

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
define( 'AUTH_KEY',         '/N+r,5TxQx;OhUd/fml{|6~`Y,K3Kj2wZ<@;WA9DJ0tZh+R,[sbv{NTP2RJNP:mS' );
define( 'SECURE_AUTH_KEY',  '120m>knad^g8u* aHMA$_Jd1)wtGC8,`zfEg2o(k>vqO1-SXP(*85(5&N?cnjseQ' );
define( 'LOGGED_IN_KEY',    'C8%2S=@H>C1d^&6AY}idkSD%JoGP6[`.HfK^Md8;<KM<zk.5j/WJ:Dm2KJ`t6,4*' );
define( 'NONCE_KEY',        '*k+LIz{]j~r39XgaX[cx)Ro+K*O+TLq~m.J+~Ijj780@sKk=Yj8nHMm4-*L2:>;,' );
define( 'AUTH_SALT',        ';p|Hgv1IkdO9^ PVBngq0L+YfF9S57QJgM-V-pI{+6kPPcf6i}b_D _wDW^Q.OT6' );
define( 'SECURE_AUTH_SALT', '[_B(pPXof7V/1q3haNP )@78s0@e2&qpQT?VfoCjajf$2Y3Y:x!kr:~E+&&8{+> ' );
define( 'LOGGED_IN_SALT',   '5?^qLE8!ndV]g9H9aXh_gk,5jJ!W/ G5Y xud>xkD^KTn@4p660kBiY&&Xf<>HpJ' );
define( 'NONCE_SALT',       '|0mqp^6,pMyP*~o^lh+-Sb` 7kfjO{fZXno:P5N9`hM5><TRw|4Jl_&|`M?&CeUI' );

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
