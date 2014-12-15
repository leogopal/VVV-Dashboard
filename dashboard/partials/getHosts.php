<?php

/**
 * Create an array of the hosts from all of the VVV host files
 *
 * @author         Jeff Behnke <code@validwebs.com>
 * @copyright  (c) 2014 ValidWebs.com
 *
 * Created:    5/23/14, 12:57 PM
 *
 * @param $path
 *
 * @return array
 */
function getHosts( $path ) {

	$array = array();
	$depth = 2;
	$ite   = new RecursiveDirectoryIterator( $path, RecursiveDirectoryIterator::SKIP_DOTS );
	$files = new RecursiveIteratorIterator( $ite );
	$files->setMaxDepth( $depth );

	// Loop through the file list and find what we want
	foreach ( $files as $name => $object ) {

		if ( strstr( $name, 'vvv-hosts' ) && !is_dir( 'vvv-hosts' ) ) {

			$lines = file( $name );

			// read through the lines in our host files
			foreach ( $lines as $num => $line ) {

				// skip comment lines
				if ( !strstr( $line, '#' ) && trim( $line ) != 'vvv.dev' ) {
					$array[] = trim( $line );
				}
			} // end foreach
		}
	} // end foreach
	ksort($array);
	return $array;
}