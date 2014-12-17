VVV-Dashboard `1.0.1`
=============

A Beautiful, Simple and Easy-To-Use Dashboard for [Varying Vagrant Vagrants](https://github.com/Varying-Vagrant-Vagrants/VVV) (VVV).

![image](https://raw.githubusercontent.com/leogopal/VVV-Dashboard/master/dashboard-screenshot.png)

Because working in terminal and trying to manage all your VVV installs via terminal is not always easy, VVV Dashboard hopes to add a layer of ease and beauty between you and your vagrants. It displays a list of sites that are installed in your VVV www path in a simple, beautiful way.

## Installation via terminal

Please be gentle with this method.

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

## Recommended VVV Site Creation Wizard

VVV-Dashboard comes built with references for [Variable VVV](https://github.com/bradp/vv), one of the best VVV Site Creation for WordPress Vagrants around. Variable VVV was created by [Brad Parbs](https://github.com/bradp) and its highly recommended that you install it to get the best out of VVV-Dashboard and your VVV WordPress Dev Environment. Some features of VVV you may like:

- Easily create sites with `vv create`
- Easily remove sites with `vv delete`
- Create `Blueprints` to set up different plugins, themes, mu-plugins, options, or constants that will be installed to a new site you create.
- Set-up deployments with `vv --deployment-create` that work with `vagrant push`

## Issues and Feature Requests

If you have any suggestions, or would like to report a potential bug (or just to say hi or complain), feel free to [Open an Issue](https://github.com/leogopal/VVV-Dashboard/issues/new).

## Change Log
All notable changes to this project will be documented here.


## [1.0.1] - 2014-12-17
### Aesthetic Changes - for better spacing.
- Added hover effect to navigation.
- Added a favicon.
- Adjusted padding of site list to accomodate more sites above the fold.
- Changed main dashboard Title to include number of sites.
- Added sharing options.
- Added a custom stylesheet `vvv-dashboard.css`
- Removed bullets from sidebar list on main dashboard page.
- Made the "VVV Dashboard" title in nav bar link to homepage.

## [1.0.0] - 2014-12-14 [Initial Release]

First working version of VVV-Dashboard.
