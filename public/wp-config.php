<?php
/**
 * The base configuration for WordPress
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 * This file contains the following configurations:
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 * @package WordPress
 */

use App\Kernel;

define('LARAVEL_START', microtime(true));

require __DIR__."/../core/vendor/autoload.php";

//define('APP_PATH', __DIR__.'/shop/application/');
//
//require_once __DIR__.'/shop/thinkphp/base.php';

Kernel::Core();

/** @var Illuminate\Http\Response $response */
// $response = $kernel->handle($request = Illuminate\Http\Request::capture());

// kd(get_class($kernel));

define('WP_HOME', env('APP_URL')."/home");
define('WP_SITEURL', env('APP_URL')."/app");

define("WP_CONTENT_DIR", __DIR__."/home");
define("WP_CONTENT_URL", env('APP_URL')."/home");

define('WPMU_PLUGIN_DIR', base_path("../routes/mu-plugins"));

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', env('DB_DATABASE'));

/** MySQL database username */
define('DB_USER', env('DB_USERNAME'));

/** MySQL database password */
define('DB_PASSWORD', env("DB_PASSWORD"));

/** MySQL hostname */
define('DB_HOST', env('DB_HOST'));

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'iR{h!0h8YM})M3?<hkP),i Qnw>GW4Xv;,,eENbQC6Qc)Z&Ud#Tp(4e%MNP`ayT[');
define('SECURE_AUTH_KEY', '#|&~`6HnvR*^x,@)%u2lMsK=,VH.(AJ%ea:3EO?5lP,3Oe+{nXI;jOS#G]+o!9hI');
define('LOGGED_IN_KEY', '!vaO&6_Q/XC8fcQU<]jPvZgwrol]qhP[@2u48QHUZBLkbJ{UMZbtF] D?|Bq!/#8');
define('NONCE_KEY', '.Q-nq^E|DtRz;(@~*=U&l#iY{l^plxhD9pNyiDS{oPX%V$/W!*;a}P=s$80Gh0_g');
define('AUTH_SALT', 'th,@|]%v$c!2T3`/P@Qg1T8`W-=!@1`kg&OBEIR6~*)++?.PT0N{Gw-@0`3m3y/S');
define('SECURE_AUTH_SALT', 'VYus4Vm1DC@3Yrr*9xk{K:Z1eU3){?3{hlQk6b85vt4PftA=na}0ax]>-PgH9mau');
define('LOGGED_IN_SALT', 'iR@ r#nU!ueKa gL~0mm^iqEm~^6$=fIqinj9hwH9~DTCf .!-vhl4[9n8Mvq]M2');
define('NONCE_SALT', '=,x<sSM$%tlv)Lz!l{xC:w%#szt&j`!T_C,M#T%W?D[Y^^:48ra8%)+>;&+b1Ku ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if( ! defined('ABSPATH')) {
    //define('ABSPATH', dirname(__FILE__).'/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH.'wp-settings.php');
