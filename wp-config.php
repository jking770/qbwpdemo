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

// AWS S3 Bucket Settings
define( 'AS3CF_SETTINGS', serialize( array(
    'provider' => 'aws',
    'access-key-id' => 'AKIAQ6HYT54RGX53VQUI',
    'secret-access-key' => 'aAKJ7QAzL6gc5uKeUz+Z6HNR/hU/LRRKdndWQC0m',
) ) );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'heroku_820fc26126c6574' );

/** MySQL database username */
define( 'DB_USER', 'bf984155b5c64d' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ab9a2cfa' );

/** MySQL hostname */
define( 'DB_HOST', 'us-cdbr-east-03.cleardb.com' );

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
define( 'AUTH_KEY',         '>?M${0`!Nat*/:YF][cl@ju*Pi5)F4W`-xODeb:rJa%yYR#lf@q)ureTL{,x%j5$' );
define( 'SECURE_AUTH_KEY',  'jmF*YVQwB*![2>1.0!i%*;vUbRxod0g]&ypSxi#z5EvPJhXy-n,{7ALw_{0B[8.p' );
define( 'LOGGED_IN_KEY',    'Q=::W1m}ytcT?Sb-/=6`?#yN~R,)BbG2@ E%ml2z+Ge>Gj,D,Ice#-j::$^eO|fD' );
define( 'NONCE_KEY',        'e#bRj)9`<R`L<|N]S<[-GVnV!,,>L#3D;-02tjJneJNKR8JVPIviOS,oSU&)5D}}' );
define( 'AUTH_SALT',        ',M?KW0(BR_R(s)*Z=uh7zJgHwG:NWD#D$r?77J2zQ>iEt}GKz#,qw-ee_.@8WW{v' );
define( 'SECURE_AUTH_SALT', ']rA^p<6zP]Mjb~E1wPj_KWWa2kE?%>@c9`8xe8qaD^qSg6}K]=/(v_Dy9N*qj%T0' );
define( 'LOGGED_IN_SALT',   'Py5|xI&GI2}[;YsSl1YDV._-Y`$`tw2R 9kRHuAbY--c>m^Z_}|a9brroSHZKMnl' );
define( 'NONCE_SALT',       '~vE@}4@0-CXS/<N4|osg@UU~rB1mk#ukt8lgi <E$XB7hm~JNpIv+:,qfG.,79{s' );

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
