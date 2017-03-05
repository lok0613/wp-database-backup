<?php
/**
 * Plugin Name: WP Database Backup
 * Plugin URI: no url yet
 * Description: Backup your database daily.
 * Version: 1.0.0
 * Author: Lok Chun Wai - @lok0613
 * Author URI: no url yet
 * License: GPL2+
 *
 * @package WP Database Backup
 */

if ( defined( 'ABSPATH' ) ) {
	require_once dirname( __FILE__ ) . '/inc/loader.php';
	$loader = new WLBK_Loader;
	$loader->boot();
}
