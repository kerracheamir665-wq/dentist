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
define( 'DB_NAME', 'dentist_db' );

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
define( 'AUTH_KEY',         '+(4d<8L;3o9BL08&PXi3yAD}k7x8WLTr0:^3Cs>fV2%X dwKo>|OhRdJRY}|Zh.d' );
define( 'SECURE_AUTH_KEY',  'UK3DR^q`TzK%^Zk(Ezd`bNRi~-q-`@=}4<SiXzA(-mU7~1p&g1Gill5h+p}(pNAM' );
define( 'LOGGED_IN_KEY',    ' BxXy3>NbWLV~hrNS9$)35k~r+_P_EqIYnXMK2  o}XDt/e8+Wnta L[eJVf}/8k' );
define( 'NONCE_KEY',        'pqdr{Kbocnwyg? M5y$v2R{v.$#YfO4`5glmi7im i.4`=pLg!`q2U}|I8rZ >)&' );
define( 'AUTH_SALT',        '6hZVfs?V0jjM{~^*S>W4j;MVTVQQq4$*iH2+0B.he0iAx1EloecLaR:}|rl:3_`E' );
define( 'SECURE_AUTH_SALT', '@7%M,`<l&1iP,MEmF}FCAI8eVQ5[:7Eqa:X+vE[&y>3pWU<(!^~]X`wC`7w,+.pq' );
define( 'LOGGED_IN_SALT',   '$pg?L[/IUdDyaY5mB;U?9|EZO7S[MHCX8&p14!$ryqxNf1nxDSw)VGZoL/?#FD~e' );
define( 'NONCE_SALT',       'c*.S5]VQkxfd)|Zzk7I+x8;G^mT/&[)y65shyTSvx$t(.8V.fGxH3{t;1.2!A@$q' );

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
set_time_limit(0);

