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
define('DB_NAME', 'algorithmic_intelligence');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1:8889');

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
define('AUTH_KEY',         'C!s2+M}A#3k`jCdJ&h&.l1ZDJ@sa-w` WH.j=L#S9]w=6#E{>|/[c(@D4<2zu`4t');
define('SECURE_AUTH_KEY',  'diDQeV1Doc_8M.(/(p+Fo%Pz:@4-%51,$Cu5M%8r4{.I?A}<zqy0#%kJ>M6,+x/_');
define('LOGGED_IN_KEY',    'n4vnj!U5*JWjOdBt:#4bjsZADURFY>PWeN%}rEDhvaDXqjC`2fCF.Vz.9r+:95@&');
define('NONCE_KEY',        'aUl2 ,20@&,pYSr8e@B`M9FuY(jf{t=,3P>,zC8c7Bpbl}geRJ+(l6*|USehKwTI');
define('AUTH_SALT',        'jWx*IM@0JqweT}F7I}]=kOe20Cg6}$(-3~}s[K>o#+Pa 8xi;+:!Cjz$04j:S^5L');
define('SECURE_AUTH_SALT', '.G=MUk3O/_>Kx[$D&cf[7KZy7R6vrb}g4e1 /b91=lL0NH;k1b q|Fj${d$HhXk7');
define('LOGGED_IN_SALT',   'aS-=A!66<!!q?a<ftrI.7f600}VPqZP1rwkKHj+RD@Ap<g2lyD5}C@;.9x~xAwd!');
define('NONCE_SALT',       'rBBP8HB!8|-h%&!>LQaK`!NMJ4JQOGt,uPtLmte0QxQ![uv>NqS4{vLH1Kd<GGPy');

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
