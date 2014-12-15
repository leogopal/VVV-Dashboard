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
		<h1>About VVV Dashboard</h1>

    <div class="panel callout">
      <p>VVV Dashboard was created by Leo Gopal (<a href="https://github.com/leogopal" target="_blank">github</a>) as a quick, easy and visually appealing way to work with and have an overview of your various VVV sites.</p>
    </div>

    <p>Because working in terminal and trying to manage all your VVV installs via terminal is not always easy, VVV Dashboard
    hopes to add a layer of beauty between you and your vagrants.</p>

    <p>It also aims to offer a quick reference to your sites and site maintainance commands that you may use often, but forget.</p>

    <p>This may not be important, but this Dashboard project has no affiliation with Varying Vagrant Vagrants or any other components listed here. #justsaying</p>

    <!-- A default button-group -->
<ul class="button-group">
  <li><a href="https://github.com/leogopal/VVV-Dashboard" class="button success" target="_blank">VVV Dashboard on Github</a></li>
  <li><a href="https://github.com/leogopal/VVV-Dashboard/issues/new" class="button warning" target="_blank">Submit Issues on Github</a></li>
</ul>

    <h2>Credits and Resources</h2>

    <ul class="disc">
      <li>VVV Dashboard was inspired by <a href="https://github.com/topdown/VVV-Dashboard" target="_blank">Jeff Behnke's tool</a> of the same name.</li>
      <li><a href="https://github.com/Varying-Vagrant-Vagrants/VVV" target="_blank">Varying Vagrant Vagrants</a> for WordPress Development</li>
      <li><a href="https://github.com/bradp/vv" target="_blank">Variable VV</a> by Brad Parbs, a quick and easy <a href="vv.php">VVV Site Creation Wizard</a>.</li>
      <li>WordPress Theme Reviews <a href="https://github.com/aubreypwd/wordpress-themereview-vvv" target="_blank">VVV Helper</a></li>
      <li><a href="http://foundation.zurb.com/" target="_blank">Foundation 5</a> by ZURB was used for the design.</li>
   </ul>

</div>

<?php @include('partials/footer.php'); ?>

</body>
</html>