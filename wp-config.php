<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'leredbread2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         '.|&5L7$+KfAA$|8cb{Ug[g}IA,wW+:;i^8&|k.x&9i:WE6+!(Y:|j|s>++a)z6Ho');
define('SECURE_AUTH_KEY',  '6HCtoPT|),y=<v?r]0{w<VWI 0!UPE5Fjv&Rp.aaGpC(Cw2$XK$<?qVGAA![Z+L8');
define('LOGGED_IN_KEY',    'QwW*0Zi9nuM3$S+k+w}e#G#FfOh4m-(!tTa;N+,5;=ARK<5VJ2R#|<dJwCrV22Tz');
define('NONCE_KEY',        'a!zJu[,v]1?X|fdfHFu*( HUz+OO658][A*mIdNwYK//Rjx:JTxt2R;c?*yVJ63E');
define('AUTH_SALT',        '#Z7yK$WP&+Bqopv= *QrhtEeQrn]kFxupzC;.&93~]70f|#(tnu byO`Qp#<b-P2');
define('SECURE_AUTH_SALT', 'iATbeq:Gl/mfu((sN47lLa#xUQaJ8KzyK/i!fq2fzt?-<6^ZqI=k*~Z<@!@*h:d-');
define('LOGGED_IN_SALT',   '5KC5:tzw/QA[Olaue{ak|+7C^`iE[C2VO]0qvrqHjKHI?oSapNk0yQI&}jdvicLC');
define('NONCE_SALT',       ')@:jR+mBc+-uD0;WZ=v/Z0Uiu,[*b+=IC:|3p;6a|TfzZvR&PyesrE.&|Ks-zI*f');


$table_prefix = 'wp_';


define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', true);
define('WP_DEBUG_LOG', true);
define('SCRIPT_DEBUG', true);
define('JETPACK_DEV_DEBUG', true);



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
