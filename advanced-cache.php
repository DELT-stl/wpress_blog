<?php
defined( 'ABSPATH' ) or die( 'Cheatin\' uh?' );

define( 'WP_ROCKET_ADVANCED_CACHE', true );
$rocket_cache_path = '/opt/lampp/apps/wordpress/htdocs/wp-content/cache/wp-rocket/';
$rocket_config_path = '/opt/lampp/apps/wordpress/htdocs/wp-content/wp-rocket-config/';

if ( file_exists( '/opt/lampp/apps/wordpress/htdocs/wp-content/plugins/wp-rocket/inc/front/process.php' ) ) {
	include( '/opt/lampp/apps/wordpress/htdocs/wp-content/plugins/wp-rocket/inc/front/process.php' );
} else {
	define( 'WP_ROCKET_ADVANCED_CACHE_PROBLEM', true );
}