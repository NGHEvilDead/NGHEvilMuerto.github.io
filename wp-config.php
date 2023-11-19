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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Buffet' );

/** Database username */
define( 'DB_USER', 'Buffet' );

/** Database password */
define( 'DB_PASSWORD', 'pommier' );

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
define( 'AUTH_KEY',         'hrce.7l3M;):PM_Mv7UOJB!8/s.5K1NUsY#KR3lAm)$|_E.oGg;n90~M-p(q[VkN' );
define( 'SECURE_AUTH_KEY',  '<7yA<o(Nj0}|-M?L&)ziTLW Yu:LGH0olk86?KWpA@)d)lL|Jn.DW)Tv}4PxE<=+' );
define( 'LOGGED_IN_KEY',    'eEHETEf0WblU^!wsou1iL|gqi:At`dfe<}>spR[q^xcel%Ml= IEsXmi}v+YR`?K' );
define( 'NONCE_KEY',        '1[sE!Skzhn_<lw0cqu&fZ/(ey`f6ckT^)&sIMv-=SZNa#IFbJt(jGnQ n}pAH`N ' );
define( 'AUTH_SALT',        'I)AW;^1WHYd={1yihjO*#0V-g!E|8Pw1*=:J9|&X)=blN&?dm{p^srA/!0`&,UM.' );
define( 'SECURE_AUTH_SALT', 'q*>B5%[BSE#E xFA2Sv)V?AH,01~(TKH,lhPa&ritc6/`%CHVoz?jrpG`<M^s1J^' );
define( 'LOGGED_IN_SALT',   'BFPH=.z/+9rq,!e)[c.c5$uS)n16<be*L~O6OS%MNqTHX2J`Ngiw509mvKWa`%.c' );
define( 'NONCE_SALT',       '#iVS{]p{<!mIC8s:.*|G7_1^)Ds-O]._ui9=@R#I5;H]ox^%l+GR?aoE>L=l)uFd' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
