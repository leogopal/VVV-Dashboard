VVV-Dashboard
=============

A Beautiful, Simple and Easy-To-Use Dashboard for [Varying Vagrant Vagrants](https://github.com/Varying-Vagrant-Vagrants/VVV) (VVV).

![image](https://raw.githubusercontent.com/leogopal/VVV-Dashboard/master/dashboard-screenshot.png)

Because working in terminal and trying to manage all your VVV installs via terminal is not always easy, VVV Dashboard hopes to add a layer of ease and beauty between you and your vagrants. It displays a list of sites that are installed in your VVV www path in a simple, beautiful way.

## Installation via terminal

Please be gentle with this method.

- Firstly, you need to `cd` into your Vagrants www/default/ directory
- Secondly, clone repository.
- Thirdly, move the VVV-Dash-Files-tmp/dashboard directory into the default folder.
- Fourthly, move the VVV-Dash-Files-tmp/dashboard-custom.php into the default folder.
- Lastly, delete the VVV-Dash-Files-tmp folder * use with care.

```
git clone git@github.com:leogopal/VVV-Dashboard.git VVV-Dash-Files-tmp
sudo ditto VVV-Dash-Files/dashboard dashboard/
sudo ditto VVV-Dash-Files/dashboard-custom.php dashboard-custom.php
sudo rm -rf VVV-Dash-Files
```

## Installation (manual)

Safest and simplest method, however if you are proficient with terminal, that is the quickest method.

- Download this repository.
- Copy the `dasboard` folder to your Vagrants www/default folder.
- Copy the `dashboard-custom.php` file to your Vagrants www/default folder.
- Delete repository (its no longer needed).
- You're done.

## Issues and Feature Requests

If you have any suggestions, or would like to report a potential bug (or just to say hi or complain), feel free to [Open an Issue](https://github.com/leogopal/VVV-Dashboard/issues/new).
