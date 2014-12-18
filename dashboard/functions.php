<?php


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