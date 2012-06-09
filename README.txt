=== 51Degrees.mobi Device Detection ===
Contributors: 51Degrees
Donate link: http://51Degrees.mobi
Tags: mobile, device detection, plugin, android, device, iPad, iphone, redirect, phone, browser, redirect
Requires at least: ???
Tested up to: 3.3.2
Stable tag: "trunk"
License: GPLv2 or later (MPL)
License URI: http://www.mozilla.org/MPL/

Access to device detection data provided by the 51Degrees.mobi.


== Description ==

This module allows access to data provided by the 51Degrees.mobi device detection 

service which provides intelligence about device, operating system and browser 

capabilities of visitors to your site. This allows developers and designers to adapt the 

response from the server and provide a customised browsing experience and allows 

existing websites to quickly support the growing number of mobile browsing devices.



== Installation ==
1. Install Wordpress using default settings.

If you have set up FTP access:
* Go to Wordpress admin, mouse over plugins, click "Add new", then click "Upload" at the 

top of the screen.
* Click "choose file", find the zip file, and click "install now", then follow the on-

screen instructions.

If you have not set up FTP access, or if there are problems with the above:
* Unzip the solution to /wp-content/plugins/

1. After completing either of the above, to change settings:
* Head to the Wordpress admin dashboard.
* Click Plugins > Installed Plugins
* Underneath 51Degrees Wordpress, click 'Activate'

* Click Settings > 51Degrees.mobi
* Choose your settings.

1. After selecting settings:
* Go to your theme's folder (By default: 'twentyeleven')
* Open the index.php file and within a php tag add:

`echo $_51D['IsMobile'];` 

* You should see the value "TRUE" or "FALSE".
* Use the $_51D variable as expected.

1. To update Premium:

* Place your update license in the Wordpress root directory.
* Go into the Dashboard and go to Settings > 51Degrees.mobi
* Click "Update".


== Frequently Asked Questions ==
= When will the FAQs be added? =

The FAQ section will be updated as relevant questions are asked of us.

== Screenshots ==
1.


== Changelog ==
= 0.5 =
* Initial Release

== Upgrade Notice ==
= 0.5 =
*Current release. Upgrade to this to start receiving device detection data



For further information visit [51Degrees.mobi](http://51degrees.mobi/ "Premium Device Detection") 


Markdown uses email style notation for blockquotes and I've been told:
> Asterisks for *emphasis*. Double it up  for **strong**.

`<?php code(); // goes in backticks ?>`