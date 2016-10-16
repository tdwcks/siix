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
define('DB_NAME', 'siix');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '00pe1]&7c*XG:h.Q/`rT0JT]Rg@C)j]!pe;^)A]z2|F*P< `r.BYlRL:9zafe^sG');
define('SECURE_AUTH_KEY',  '%se_D1A41Av2>Z!UN1(Bs~68fJ0N[@!s)cKAKGa=zSmw!YDR5#rsPKIo<Muud!{}');
define('LOGGED_IN_KEY',    '{&*}nxI7F7jyx*qE+4gK6Y-55?L+R`GL79>h|yWw.wkwPt?Is,JkY]|8G:FC~|,n');
define('NONCE_KEY',        'nt0/6d@{JP`6s-$LLW.hu.fzsK+$f+eW:Q!1ShFoz5l~zzh*6]oazRhiXf,aCVAY');
define('AUTH_SALT',        '4i~>H9lQFHDRE;my&Jebsf.?hUV}Wb$NFdt/*%%uelN>b*q<qYiqEe[(Vlls3^2w');
define('SECURE_AUTH_SALT', '/HGJ;3aE[&g_mDpX2XdXh^HAw[C]1JmtA2j_j>FEND`X5>uc}z=Ima6W+}&%-H<6');
define('LOGGED_IN_SALT',   '^x:7s5.S7&GjpNxUPOa^3!v7Da9^P/yHyZ?T)k!wjTr[a:rT`&>XMPyp6bRsE:tR');
define('NONCE_SALT',       'tH{yWSi.DN>a6L2gI2Y$o*8c=?L1Zl+^MlmIw3E.C9E+gNCY?}S4B4$hNAQj+6 .');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
