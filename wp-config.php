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
define( 'DB_NAME', 'wordpress_2' );

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
define( 'AUTH_KEY',         'g3G:y.X,;h< ,fklX YAP(Fi~SH,|;DJ%L3B|(|K8op.4Q<-I,;eYvBoumF.(;T4' );
define( 'SECURE_AUTH_KEY',  'X(#}-|2rw-[G&0S.T< 0%Ah9u+2]VJSrAG=Y^b|GuKuWHi$]-^rN(,!VqRvAg6&s' );
define( 'LOGGED_IN_KEY',    'TZ2P`G$f(gq(Yd!Vx|sQETAMo@{i/.1d;G@T$$N;>t!b,JLDZJd8OH^c|w{]&$hA' );
define( 'NONCE_KEY',        '}|nf>3x?^JdH9>2-n]A4Bvie~0ic+`i1]+$b0W3+zA-8iyYOyx;ni+eAza*Th*J!' );
define( 'AUTH_SALT',        'kHp)sVPb>%oa><-D$AQe)iPSJZ[99.3*EF7z@@$3ECA.c[H&ac-d^7W$)RR&}>F=' );
define( 'SECURE_AUTH_SALT', '4Ni!^ZOiQ{ilxgK;)1P/Eev1ojk,7<[&euRh#?.q%&u]0q0K*SrpX~ZD9X-|]@YK' );
define( 'LOGGED_IN_SALT',   ':2UIj d0pM[F5&4~D{(X*=8$*|akSEuDZ*7Pr2gja~GK?2zNC`:BkhIQ}Ho0Hq5k' );
define( 'NONCE_SALT',       'hSrV0ok&AVGaGU0Ec0r2$Z{zZ7pge]0yrE&hgi Am^7p&M`W8qojb+FBe@?i{4vz' );

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
