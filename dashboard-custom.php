<?php
/**
 * Redirect to our custom dashboard location.
 *
 * @package     VVVDashboard
 * @copyright   Copyright (c) 2014, Leo Gopal
 * @license     GPL-2.0+
 * @since       1.0.0
 */

/**
 * Redirect to another location using PHP.
 *
 * @since  1.0.0
 * @access public
 * @param  $url string the path of the redirect
 * @param  $status_code integer stats code used when redirecting
 * @return void
 */
function redirect( $url, $status_code = 301 ) {
	header( 'Location: ' . $url, true, $status_code );
	die();
}

// Fire our redirect.
redirect( '/dashboard/index.php', 302 );
