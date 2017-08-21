<?php

date_default_timezone_set( 'GMT' );

function get_signal() {
	$xml = simplexml_load_file( 'http://192.168.8.1/api/device/signal' );
	return array_map( 'strval', (array) $xml );
}

$signal = get_signal();
$logfile = sprintf( '%s/log/signal-%s.csv', __DIR__, date( 'Y-m-d' ) );

if ( ! empty( $signal ) ) {
	array_unshift( $signal, sprintf( '"%s"', date( 'r' ) ) );

	if ( ! file_exists( $logfile ) ) {
		file_put_contents(
			$logfile,
			implode( ',', array_keys( $signal ) ) . "\n"
		);
	}

	file_put_contents(
		$logfile,
		implode( ',', $signal ) . "\n",
		FILE_APPEND
	);
}
