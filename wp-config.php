<?php
/**
 * The base configuration for WordPress
 */

// Database
define( 'DB_NAME', 'wordpress' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );

// Keys
define( 'AUTH_KEY',         'frpAPW%B66P#=%<6rj!Qk:Jl@0xFCf5HHzZOgxg2E[n5CGmW]~.!F<duwQU7~^kR' );
define( 'SECURE_AUTH_KEY',  '+xjVa;zS?X0))Yszc3KJsKqz]a5Y%B_^0|VmDkt!:n],DNs:j&uB3{!P|&kWkn%-' );
define( 'LOGGED_IN_KEY',    'x[oY%x`p}KmnWlXq<^T,1N&W%O~_VVfSKR%#YL4PW47,^mi_^R[`z=R=1rbvGuh4' );
define( 'NONCE_KEY',        '=KL&EW8H(Or0Nhnbf2Ee:}fF(yZE19dSO:Kgw[L<!LA^UGJ<SvtktCkA1DQDuZI[' );
define( 'AUTH_SALT',        't])&)-T*t;VHi<g<jhJ,nSr/Fa52[|qLD}8Sr_M#KE3.rvM@i}6I}gNG!iUs>,{0' );
define( 'SECURE_AUTH_SALT', ')CqS9aetOtNF;poN&[JZ{HfIql~Xa=Uthruz3K(>Sd&bDy! 9TkaX<fCQxaF&D^a' );
define( 'LOGGED_IN_SALT',   'aG=c g!2DAvCyEsm61}zKVbxX0#*8:$e}8GMCF/!W.z.ztr$Ry4==o!&I%j%yO8M' );
define( 'NONCE_SALT',       '18(+cJZ7%.5L+r1Rcd|tAZ7e}`;]6d}e60.Z%U6[_@a#}>^ _a@Q(yB$XDn9ubu:' );

// Prefix
$table_prefix = 'wp_';

// Debug
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);

/* ================= MULTISITE ================= */

// Bật multisite
define('WP_ALLOW_MULTISITE', true);

// Code WordPress yêu cầu (QUAN TRỌNG)
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/LeMinhQuan/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* ============================================ */

/* Stop editing */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';