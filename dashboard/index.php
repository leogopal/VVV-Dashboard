<?php

include_once 'partials/getHosts.php';
$hosts = getHosts( '../..' );

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
  <link rel="stylesheet" href="assets/css/vvv-dashboard.css">
  <!--[if IE]><link rel="shortcut icon" href="assets/img/favicon.ico"><![endif]-->
  <link rel="icon" href="assets/img/favicon.ico">

  <script src="assets/js/vendor/modernizr.js"></script>

</head>
<body>
	<script src="assets/js/vendor/jquery.js"></script>
	<script src="assets/js/foundation/foundation.js"></script>
	<script src="assets/js/foundation/foundation.topbar.js"></script>
	<script src="assets/js/foundation/foundation.alert.js"></script>

  <!-- Other JS plugins can be included here -->
<!-- Fixed navbar -->
<?php @include('partials/navbar.php'); ?>

<div class="row">
		<h1><code><?php echo count($hosts); ?></code> <small>VVV Sites</small></h1>

	<div class="large-9 columns">
		<?php @include('partials/list-sites.php'); ?>
	</div>

	<div class="large-3 columns">

		<?php @include('partials/sidebar.php'); ?>

	</div>

</div>
<?php @include('partials/footer.php'); ?>
<script>
    $(document).foundation();
  </script>
</body>
</html>