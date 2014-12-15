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
		<h1>VVV Overview</h1>

	<div class="large-9 columns">
		<?php @include('partials/list-sites.php'); ?>
	</div>

	<div class="large-3 columns">

		<?php @include('partials/vagrant-commands.php'); ?>

	</div>

</div>
<?php @include('partials/footer.php'); ?>
<script>
    $(document).foundation();
  </script>
</body>
</html>