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
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'I/bv4^@U2-z1e3? oVRDQP4[E<=~`:Cb;5W{hICc2CYq&W){#p6O|Ihk_9 _k*3)' );
define( 'SECURE_AUTH_KEY',  '`!}h{^O|ry2kQF  <kXoZ Qp4rSN~PMLvKGje:1]QiEFB%x5^|~3,*FmY78[!<}o' );
define( 'LOGGED_IN_KEY',    '_U!pHWq_4,RkcGJ;.fk{J]z^eEir/4~^^4[8sJZBr7`;01VUHJ7gUcX TBV,&*GY' );
define( 'NONCE_KEY',        'qJp@o4}DF/1^-)I_d&_7:aBxZD*O(bUqwm4=hIG#QOhF^J;Pvo0OZziG@W,[g!yD' );
define( 'AUTH_SALT',        'mr_T=:];zao.^k<Mrdn=;2f60.@hu{e3aOh;6,>ewM{ILREaaa$^b=]hbB9rUn2L' );
define( 'SECURE_AUTH_SALT', 'vkN`]L rer_>*y(%@ZCNr_aOhu`7X3Ji(A^4xrYIP55~{HF+/V/SZ Dpti[oAq*0' );
define( 'LOGGED_IN_SALT',   'N*pE>q_WadvMpy]sB6c81XS[%l3-sl97SQres3O!Z%v-MFDA;eC`khz}eF(*R;$@' );
define( 'NONCE_SALT',       '1dqf`WUj]JPkm`KoMT?ZXELET7YJ6/pWCKh(LkW>?Id,!T=gZ|N;K ~{:h{Qf-;R' );

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
