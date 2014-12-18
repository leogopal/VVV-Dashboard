<?php
/**
 * Template to display the main dashboard index page.
 *
 * @package     VVVDashboard
 * @copyright   Copyright (c) 2014, Leo Gopal
 * @license     GPL-2.0+
 * @since       1.0.0
 */
?>
<?php require_once( 'partials/header.php' ); ?>

<div class="row">
	<h1><?php echo count( $vvv_hosts ); ?> Active VVV Sites</h1>

	<div class="large-8 columns site-list">
		<?php require_once( 'partials/site-list.php' ); ?>
	</div>

	<aside class="large-4 columns sidebar">
		<?php require_once( 'partials/sidebar.php' ); ?>
	</aside>

</div>

<?php
require_once( 'partials/footer.php' );
