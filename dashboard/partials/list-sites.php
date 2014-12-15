<?php

include_once 'getHosts.php';
$hosts = getHosts( '../..' );

?>

<div class="panel callout radius">
	<code><?php echo count($hosts); ?></code> sites currently setup, to easily create more try: <a href="vv.php">VVV Site Creation Wizard</a>.
</div>

<div data-alert class="alert-box secondary">
  <code>xdebug_on</code> must be enabled <a href="https://github.com/Varying-Vagrant-Vagrants/VVV/wiki/Code-Debugging#turning-on-xdebug" target="_blank">(How?)</a> to use the Profiler.
</div>

<?php
foreach ( $hosts as $host ) {
	echo '<div class="row">
			<div class="small-7 columns">' . $host . '</div>
				<div class="small-5 columns">
				<ul class="button-group radius">
				<li><a class="button tiny" href="http://' . $host . '/" target="_blank">Visit Site</a></li>
				<li><a class="button success tiny" href="http://' . $host . '/wp-admin" target="_blank">/wp-admin/</a></li>
				<li><a class="button secondary tiny" href="http://' . $host . '/?XDEBUG_PROFILE" target="_blank">Profiler</a></li>
				</ul>
			</div>
		</div>' . "\n";
} // end foreach
unset( $host ); ?>
	
