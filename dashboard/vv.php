<?php
/**
 * Template to display a page with information about the VV script.
 *
 * @package     VVVDashboard
 * @copyright   Copyright (c) 2014, Leo Gopal
 * @license     GPL-2.0+
 * @since       1.0.0
 */
?>
<?php require_once( 'partials/header.php' ); ?>

<div class="row">
	<h1>Variable VVV - a VVV Site Creation Wizard</h1>
	<div class="panel callout">
		<p>Brad Parbs (<a href="https://github.com/bradp" target="_blank">github</a>) created this bash script which makes it extremely easy to create a new WordPress site using Varying Vagrant Vagrants.
		This page offers a basic usage and reference guide, but for updated details, please visit the official <a href="https://github.com/bradp/vv" target="_blank">github page</a>.</p>
	</div>
	<p><code>vv</code> supports site creation with many different options; site blueprints to set up all your plugins, themes, and more; deployments; and lots more features.</p>

	<h2>Quick Install</h2>

	<p>If you have Homebrew installed, you can do</p>

	<div class="panel">
		<pre>brew install bradp/vv/vv</pre>
	</div>

	<p>Otherwise you'll want to clone and edit your <code>$PATH</code> to include the vv core file.</p>


	<h2>Basic Usage</h2>

	<p>Type <code>vv</code> in the command line to use. None of the options are required:
		if a required piece of information is not included in the original command,
		the wizard will prompt you for it.</p>

	<h3>Site Creation</h3>

	<p><code>vv create</code> creates the structure needed for your WordPress site based on your specs.</p>
	<p>Make sure you <code>vagrant up --provision</code> to complete the process.</p>

	<h3>Site Deletion</h3>

	<p><code>vv delete</code> deletes the sites webroot, but does not delete the site's database</p>

	<h2>Advanced Usage</h2>

	<div class="panel callout">
	<p>For advanced usage options, visit the official <a href="https://github.com/bradp/vv#advanced-usage" target="_blank">github page</a>.</p>
	</div>

</div>

<?php
require_once( 'partials/footer.php' );
