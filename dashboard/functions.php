<?php
/**
 * General functions to make the VVV Dashboard work.
 *
 * @package     VVVDashboard
 * @copyright   Copyright (c) 2014, Leo Gopal
 * @license     GPL-2.0+
 * @since       1.2.0
 */

/**
 * Build a list of VVV host paths.
 *
 * @since  1.0.0
 * @access public
 * @uses   RecursiveDirectoryIterator
 * @uses   RecursiveIteratorIterator
 * @param  $path string the path of the directory to parse
 * @param  $depth integer the number of directory levels to iterate through
 * @return $hosts array a list of vvv sites
 */
function get_vvv_hosts( $path, $depth = 3 ) {
	$dirs  = new RecursiveDirectoryIterator( $path, RecursiveDirectoryIterator::SKIP_DOTS );
	$files = new RecursiveIteratorIterator( $dirs );
	// Bail if we don't have any files.
	if ( ! is_object( $files ) ) {
		return;
	}

	$files->setMaxDepth( $depth );

	$hosts = array();
	// Loop through the file list and find what we want
	foreach ( $files as $name => $object ) {

		if ( strstr( $name, 'vvv-hosts' ) && ! is_dir( 'vvv-hosts' ) ) {

			$lines = file( $name );

			// read through the lines in our host files
			foreach ( $lines as $num => $line ) {
				// skip comment lines
				if ( ! strstr( $line, '#' ) && 'vvv.dev' !== trim( $line ) ) {
					$hosts[] = trim( $line );
				}
			}
		}
	}
	return $hosts;
}

// Global variable used in a few different templates.
$vvv_hosts = get_vvv_hosts( '../..' );
