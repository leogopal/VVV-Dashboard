<?php

include_once 'getHosts.php';
$hosts = getHosts( '../..' );

?>

<div data-alert class="alert-box secondary">
  For <code>Profiler</code> to work, <code>xdebug_on</code> must be enabled. <a href="https://github.com/Varying-Vagrant-Vagrants/VVV/wiki/Code-Debugging#turning-on-xdebug" target="_blank">(How?)</a>
<a href="#" class="close">&times;</a>
</div>

<?php

foreach ( $hosts as $host ) {
	echo '<div class="row site-list">
			<div class="small-8 columns"><span class="site-name">' . $host . '</span></div>
				<div class="small-4 columns">
				<ul class="button-group radius">
				<li><a class="button tiny" href="http://' . $host . '/" target="_blank">Visit Site</a></li>
				<li><a class="button success tiny" href="http://' . $host . '/wp-admin" target="_blank">/wp-admin/</a></li>
				<li><a class="button secondary tiny" href="http://' . $host . '/?XDEBUG_PROFILE" target="_blank">Profiler</a></li>
				</ul>
			</div>
		</div>' . "\n";
} // end foreach
unset( $host ); ?>
	
