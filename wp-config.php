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
define( 'DB_NAME', 'criptoconversor' );

/** MySQL database username */
define( 'DB_USER', 'criptoconversor' );

/** MySQL database password */
define( 'DB_PASSWORD', 'criptoconversor' );

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
define( 'AUTH_KEY',         'F+u.d<78ZsVf:hgVWd=2e9JXHT1QLg8|/f@AkUYgW2|>`RXNffGRDYd1GOh%McnF' );
define( 'SECURE_AUTH_KEY',  '.Lye^;yhCxp%95jtuAVpAMvMTi!|!VkNS#-eD,4:,&ULDh97Eqs{fL2Q=5t^no3O' );
define( 'LOGGED_IN_KEY',    'N&Av3ODDArw<hZ.T,@aqCwPxrIbpJa~3HQNd7C,ZGtFWwq.$,c/]%$6Y4m0&b:Mg' );
define( 'NONCE_KEY',        ',=k2b5hD8ECovht%Sk=-leq!Z~ ]iSGr&C:C(_@1|1V^]T<afNvNX0)q/sOl![/I' );
define( 'AUTH_SALT',        '[+D;w@K54P{S&trmW)ll2=C#B;80>dO-ccO8yj,Da|xpIt>j,~H[Rdf)QN&5GjD/' );
define( 'SECURE_AUTH_SALT', 'VKg9yy*GqwyjGZv!g%+)M` 24U|Z7`:,Fzf/O)dyiN|R-EqRQ6aQio@,9fj~;$0)' );
define( 'LOGGED_IN_SALT',   '[WhaR5$bTR7C+7/t1Wx0n1cvJT@=Jr+z`s<D!9F:/~Hzw((WUcH3NerG00`&<l]u' );
define( 'NONCE_SALT',       ')(Tc b[%(IS8Hvhu]|KJzxrbf{n([DfkrL,&:QFM/M!|UOB0E*Iq2@VpdVL|]~QR' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cct_';

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
