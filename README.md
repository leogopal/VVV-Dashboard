VVV-Dashboard
=============

A Beautiful, Simple and Easy-To-Use Dashboard for [Varying Vagrant Vagrants](https://github.com/Varying-Vagrant-Vagrants/VVV) (VVV).

Because working in terminal and trying to manage all your VVV installs via terminal is not always easy, VVV Dashboard hopes to add a layer of ease and beauty between you and your vagrants. It displays a list of sites that are installed in your VVV www path in a simple, beautiful way.

![image](https://raw.githubusercontent.com/leogopal/VVV-Dashboard/master/dashboard-screenshot.png)
https://cldup.com/vhBPx0XYtz.png

## Installation via terminal

Please be gentle with this method.

- Firstly, you need to `cd` into your Vagrants www/default/ directory
- Secondly, clone reposity `git clone git@github.com:leogopal/VVV-Dashboard.git VVV-Dash-Files-tmp`
- Thirdly, move the VVV-Dash-Files-tmp/dashboard directory into the default folder `sudo ditto VVV-Dash-Files/dashboard dashboard/`
- Fourthly, move the VVV-Dash-Files-tmp/dashboard-custom.php into the default folder `sudo ditto VVV-Dash-Files/dashboard-custom.php dashboard-custom.php`
- Lastly, delete the VVV-Dash-Files-tmp folder `sudo rm -rf VVV-Dash-Files` * use with care.

## Installation via terminal

Please be gentle with this method.


```
git clone git@github.com:leogopal/VVV-Dashboard.git VVV-Dash-Files-tmp
sudo ditto VVV-Dash-Files/dashboard dashboard/
sudo ditto VVV-Dash-Files/dashboard-custom.php dashboard-custom.php
sudo rm -rf VVV-Dash-Files
```