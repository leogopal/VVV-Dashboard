<?php
/**
 * Template part to display a list of VVV sites.
 *
 * @package     VVVDashboard
 * @copyright   Copyright (c) 2014, Leo Gopal
 * @license     GPL-2.0+
 * @since       1.0.0
 */
?>
<?php if ( ! empty( $vvv_hosts ) ) : ?>

	<?php foreach ( $vvv_hosts as $host ) : ?>
		<div class="row vvv-site">
			<div class="site-list-left">
				<a class="site-name" href="http://<?php echo $host; ?>/" target="_blank"><?php echo $host; ?></a>
			</div>
			<div class="site-list-right">
				<ul class="site-links">
					<li class="admin"><a href="http://<?php echo $host; ?>/wp-admin" target="_blank">WP Admin</a></li>
					<li class="debug"><a href="http://<?php echo $host; ?>/?XDEBUG_PROFILE" target="_blank">Profiler</a></li>
				</ul>
			</div>
		</div>
		<?php unset( $host ); ?>
	<?php endforeach; ?>

	<?php

endif;
