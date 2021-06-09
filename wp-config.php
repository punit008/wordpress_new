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
define( 'DB_NAME', 'wordpress_new' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Vardaam@123' );

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
define( 'AUTH_KEY',         'A_OOoP|yp1m3gUfu[IbRL}JIp{;e 1FiQYzHemk>+;I}h7myWa%B]_8Ln;xPE2V/' );
define( 'SECURE_AUTH_KEY',  'uV%EBf4TTyqD{y!o%).Iu:#B#fcg&8&CZToB u-4kaz)pTm9a0&}&|<!-6FSXo(}' );
define( 'LOGGED_IN_KEY',    'e;:v(C1nh#~9V~FN%ZFWnM%Fozp0wrjSQD#m{u&k(>Gjyas&;Z2/]S0$u( Oz0^Q' );
define( 'NONCE_KEY',        'i{)%d0#Bj;yWoML?E;l!rC.X5X7r%Y?rrA}*of?9~7C+-R}PlhNRnIE}D#l <!C&' );
define( 'AUTH_SALT',        '_lDMt9w4J)|SqAgwqwq0Qe^<+z9[RLxm1d{Co0:MX.;%MOM$i_IFq}|r8q`vhG-V' );
define( 'SECURE_AUTH_SALT', 'ZWVLG),U2F_%ubiL1Gzh]d_Gb9cU.BG7Au?0lr?%>.ql`$5+}E>&izeM7;zW%`Ev' );
define( 'LOGGED_IN_SALT',   '2SmA0%AWJL2>1Akt^0_P~gR834-QK>}f;xx?F%%<v:(;@8rlIdIG!CO4TU2,/&(m' );
define( 'NONCE_SALT',       '9]sXBL-ar?wbYwmpv@58yQVr/[`n+i`aqO]k-f1c[#}t;B(Y]>1(KDh_%qs6jr_z' );

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
