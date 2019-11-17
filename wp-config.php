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
define('DB_NAME', 'mobiwebtech');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '@brinique');

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
define('AUTH_KEY',         'U=*27{Ycr[S42WCT$s_`5mC8[v_,#59V;!`!CiA!?NYrR#U2+c~0lZG0e:In,?@f');
define('SECURE_AUTH_KEY',  ';rDHvu), 3</uX<(HNUIk2n[eaFx2G+8@b!C+/T3yh7L,v=@FF?oKn,6Gi5K8dtm');
define('LOGGED_IN_KEY',    ';V%IBbuzG@4c->kqvwYKlS.jvs00<Sk[eiasCl]]yjjwckY/S]=:Vqt7,H@Din6E');
define('NONCE_KEY',        'mLwGIP8n,QnGn5OIW+1?~?!Y+r+*:v 7S$Y=;T@[SbJ:E-Uxwp(XJ0I`L15!jQSk');
define('AUTH_SALT',        'bna->*}Vfa9<F<r7si<8Bz>Oi&ie7S8QxE(.<<EBLQYIUPlRXOv!YSLNS[5q@[vc');
define('SECURE_AUTH_SALT', '[Vhnx6BkuB7X#meCCC<~]i[V_?HG#b$qG.1<7E7&(BED`P,Lgq>:&YZ|n 4R+!@ ');
define('LOGGED_IN_SALT',   'W1^1T;ImZv$*wRrlsWuY*/wz5IU8+S4.r`V~>Yj2<|8xUwVGNh/Lf-761z<pt+90');
define('NONCE_SALT',       '_zj{fKf|MBZwEf<AkEC;qv$C5mMeCE5ZQ#,p=6qhpj5*vw`gDL?ia|,px#9cD&#o');

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
