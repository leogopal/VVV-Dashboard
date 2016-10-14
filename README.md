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

Setup
-
Clone this repo to your VVV/www/default/ directory and then copy dashboard-custom.php there:

```sh
cd www/default
git clone https://github.com/topdown/VVV-Dashboard.git dashboard
cp dashboard/dashboard-custom.php .
```

While VVV is running (`vagrant up`), the new dashboard is now viewable at your VVV root (usually [vvv](http://vvv) or [vvv.dev](http://vvv.dev)).

Update
-
Update your repo via `git pull` and then copy dashboard-custom.php to your default directory.

```sh
cd www/default/dashboard
git pull
cp dashboard-custom.php ..
```

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

### Thanks and Credits

- [Hugh Lashbrooke](https://twitter.com/hlashbrooke) and [Robert Neu](https://twitter.com/rob_neu) for getting me onto VVV.
- [Alex Mangini](http://kolakube.com) for getting me obsessed with beautifying things.
- [Foundation 5](http://foundation.zurb.com/docs/) by ZURB for the design framework.
- VVV-Dashboard by @topdown is a great alternative to this one. ([check it out](https://github.com/topdown/VVV-Dashboard)).
