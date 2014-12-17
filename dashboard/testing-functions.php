<?php 
include_once 'partials/getHosts.php'; 
$debugstatuses = getwpdebug( '../..' );
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Varying Vagrant Vagrants Dashboard</title>
	<meta charset="utf-8">
  <!-- If you delete this meta tag World War Z will become a reality -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- If you are using the CSS version, only link these 2 files, you may add app.css to use for your overrides if you like -->
  <link rel="stylesheet" href="assets/css/normalize.css">
  <link rel="stylesheet" href="assets/css/foundation.css">

  <script src="assets/js/vendor/modernizr.js"></script>

</head>
<body>
	<script src="assets/js/vendor/jquery.js"></script>
	<script src="assets/js/foundation/foundation.js"></script>
	<script src="assets/js/foundation/foundation.topbar.js"></script>

  <!-- Other JS plugins can be included here -->
<!-- Fixed navbar -->
<?php @include('partials/navbar.php'); ?>

<div class="row">
	<?php
	foreach ( $debugstatuses as $debugstatus ) {
	echo '<div class="row">
			<div class="small-7 columns">' . $debugstatus . '</div>
		</div>' . "\n";
} // end foreach
unset( $debugstatus ); ?>
		
</div>

<?php @include('partials/footer.php'); ?>
</body>
</html>