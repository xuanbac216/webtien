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
define('DB_NAME', 'thienyenviet');

/** MySQL database username */
define('DB_USER', 'thienyenviet');

/** MySQL database password */
define('DB_PASSWORD', '1ThienYenV!');

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
define('AUTH_KEY',         'Y0V19FqQwT+WDx7U%TS1LwGmYRB-HCWkHg N>CUPZEwJr&a{CpA^8>z(QL9E c-f');
define('SECURE_AUTH_KEY',  'el`^R[l.^QZ_P^)T*q1SSMci{@3KFI6Z@%HUQtWK|5[*}A>PKJYDd*{w:sKL/_i.');
define('LOGGED_IN_KEY',    'a/)CKqZ*x{5t</Kb}eWs&bLc {4kk[eyyy15<Ks^]L?~oYVOX3vaA&?s6SY!`ZF4');
define('NONCE_KEY',        'v~J}5NL_qnP@7nn1;2WC5BUX|+LFi`AZK8cn8z_u;nZ`i6K9^cM#:%wGrJ]CB;c$');
define('AUTH_SALT',        'WnbEgUL^@SAe_uQ~4;J>GtH~&gZNXmeC|W<4W0m8s3K3xOJQ}|cDQ,S$G9WJ!93w');
define('SECURE_AUTH_SALT', 'KWSkI8> a6uGNUR1:JZX;?qbPrQX=%G@I8M>l,Tq*Qn#l%{~D!^Ix[gntcGLc50L');
define('LOGGED_IN_SALT',   '/UF6q4N3{P%%wAw;C,N(je?`_ 0/_Qq*) :a-acZ2 Q!o7UXE+C]R{+5ebGga,Be');
define('NONCE_SALT',       '&?9H_el*kp D&<t;DWHVzTT`7.W_&;5Cl_08*^14NbZ_Q2I<RnPj@#u3JB$Hs~[o');

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
