VVV-Dashboard 
=============

A Beautiful, Simple and Easy-To-Use Dashboard for [Varying Vagrant Vagrants](https://github.com/Varying-Vagrant-Vagrants/VVV) (VVV).

![image](https://raw.githubusercontent.com/leogopal/VVV-Dashboard/master/dashboard-screenshot.png)

Because working in terminal and trying to manage all your VVV installs via terminal is not always easy, VVV Dashboard hopes to add a layer of ease and beauty between you and your vagrants. It displays a list of sites that are installed in your VVV www path in a simple, beautiful way.

**Version**: `1.2.0`

**License**: GPLv2

### Requirements

- [Varying Vagrant Vagrants](https://github.com/Varying-Vagrant-Vagrants/VVV)
- Vagrant needs to be running: `vagrant up`

## Installation via terminal

**Please be gentle with this method.**

- Firstly, you need to `cd` into your Vagrants www/default/ directory
- Secondly, clone repository.
- Thirdly, move the `VVV-Dash-Files-tmp/dashboard` directory into the `default` folder.
- Fourthly, move the `VVV-Dash-Files-tmp/dashboard-custom.php` into the `default` folder.
- Lastly, delete the `VVV-Dash-Files-tmp` folder * use with care.

```
git clone git@github.com:leogopal/VVV-Dashboard.git VVV-Dash-Files-tmp
sudo ditto VVV-Dash-Files-tmp/dashboard dashboard/
sudo ditto VVV-Dash-Files-tmp/dashboard-custom.php dashboard-custom.php
sudo rm -rf VVV-Dash-Files-tmp
```

## Installation Manual (recommended for most users)

Safest and simplest method, however if you are proficient with terminal, that is the quickest method.

- Download this repository.
- Copy the `dasboard` folder to your Vagrants `www/default` folder.
- Copy the `dashboard-custom.php` file to your Vagrants `www/default` folder.
- Delete repository (its no longer needed).
- You're done.

## Issues and Feature Requests

If you have any suggestions, or would like to report a potential bug (or just to say hi or complain), feel free to [Open an Issue](https://github.com/leogopal/VVV-Dashboard/issues/new). You can also hit me up on twotter [@leogopal](https://twitter.com/leogopal).

## Contributing

If you would like to contribute, please view the [Contributing](https://github.com/leogopal/VVV-Dashboard/blob/master/CONTRIBUTING.md) guide.

## Recommended VVV Site Creation Wizard

VVV-Dashboard comes built with references for [Variable VVV](https://github.com/bradp/vv), one of the best VVV Site Creation for WordPress Vagrants around. Variable VVV was created by [Brad Parbs](https://github.com/bradp) and its highly recommended that you install it to get the best out of VVV-Dashboard and your VVV WordPress Dev Environment. Some features of VVV you may like:

- Easily create sites with `vv create`
- Easily remove sites with `vv delete`
- Create `Blueprints` to set up different plugins, themes, mu-plugins, options, or constants that will be installed to a new site you create.
- Set-up deployments with `vv --deployment-create` that work with `vagrant push`

## Mentions

- [WPTavern write-up: VVV-Dashboard Provides an Interface for Managing Varying Vagrant Vagrants Installations](http://wptavern.com/vvv-dashboard-provides-an-interface-for-managing-varying-vagrant-vagrants-installations)
- [Hugh Lashbrooke mention: Setting up my WordPress development Environment](http://www.hughlashbrooke.com/2014/11/my-wordpress-development-environment/)

## Change Log

All notable changes to this project will be documented in the [CHANGELOG.md](https://github.com/leogopal/VVV-Dashboard/blob/master/CHANGELOG.md).

## To-do
**Enhancements**

* Add a simple GUI for `vv` to the Dashboard.
* Make the Dashboard more friendly to WordPress Developers by linking to Dev Resources. (not just VVV resources).
* Have a 'getting started' with VVV and vv section
* Have a basic troubleshooting area for VVV and vv (simple things we commonly do wrong)
* Find method for better updating to newer versions.
* Find a way of displaying whether `WP_DEBUG` true or not.
* Find a way to make sure a site is a WordPress site.
* Check whether Variable VVV is installed, and version, check if up to date.
* Add Variable VVV Demo Blueprints.

### Thanks and Credits

- [Hugh Lashbrooke](https://twitter.com/hlashbrooke) and [Robert Neu](https://twitter.com/rob_neu) for getting me onto VVV.
- [Alex Mangini](http://kolakube.com) for getting me obsessed with beautifying things.
- [Foundation 5](http://foundation.zurb.com/docs/) by ZURB for the design framework.
- VVV-Dashboard by @topdown is a great alternative to this one. ([check it out](https://github.com/topdown/VVV-Dashboard)).
