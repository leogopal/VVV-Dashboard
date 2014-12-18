<?php
/**
 * Template part to display the dashboard's primary navbar.
 *
 * @package     VVVDashboard
 * @copyright   Copyright (c) 2014, Leo Gopal
 * @license     GPL-2.0+
 * @since       1.0.0
 */
?>
<div class="contain-to-grid sticky">
<nav class="top-bar" data-topbar role="navigation">
	<ul class="title-area">
		<li class="name">
			<p><a href="/">VVV Dashboard</a></p>
		</li>
		 <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
		<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
	</ul>

	<section class="top-bar-section">
		<!-- Right Nav Section -->
		<ul class="right">
			<li><a href="/">Home</a></li>

			<li class="has-dropdown">
				<a href="#">Built in VVV Tools</a>
					<ul class="dropdown">
						<li><a href="../database-admin/" target="_blank">phpMyAdmin</a></li>
						<li><a href="../memcached-admin/" target="_blank">phpMemcachedAdmin</a></li>
						<li><a href="../opcache-status/opcache.php" target="_blank">Opcache Status</a></li>
						<li><a href="../webgrind/" target="_blank">Webgrind</a></li>
						<li><a href="../phpinfo/" target="_blank">PHP Info</a></li>
					</ul>
			</li>

			<li><a href="vv.php">VVV Site Creation Wizard</a></li>
			<li><a href="about.php">About</a></li>

		</ul>

	</section>

</nav>
</div>
