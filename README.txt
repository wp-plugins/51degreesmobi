=== 51Degrees.mobi Device Detection (BETA) ===
Contributors: 51Degrees
Donate link: http://51Degrees.mobi
Tags: mobile, device, detection, optimisation, handset, browser, android, blackberry, windows phone, symbian, cellular, iphone, ipad, apple, mobile internet, mobile web, nokia, palm, pda, switcher, theme, wap, webkit, wireless
Requires at least: 3.0
Tested up to: 3.4.1
Stable tag: 2.1.10.3
License: MPLv2 or later (MPL)
License URI: http://www.mozilla.org/MPL/2.0/

Access to device detection data and services provided by 51Degrees.mobi.


== Description ==

The 51Degrees.mobi Device Detection plugin provides the following functionality.

**Detection** - works out the type of device accessing the web site and provides information about the hardware, operating system and browser. Includes information about screen size, browser features and many more.

**Optimisation** - enables the theme used to be altered depending on the detected properties.

**Detection**

The plugin contains a small database capable of determining the requesting device's properties extremely quickly using the finger prints (technically called useragents) sent by web browsers. No cloud services or external components are required. Once the plugin is installed the detected device properties are available to theme developers.

**Optimisation**

A simple user interface enables non-technical users to define rules to alter the web sites response for different device types. Themes can be altered, or the request redirected to another web site. For example; rules can be defined to treat small screen mobile devices, smartphones and tablets differently. Adverts could be optimised for the smaller screens, or content limited to the essential parts of a page.

The plugin is provided for free to all Wordpress users under the Mozilla Public Licence 2. Paid for versions are available that offer more properties and features.



== Installation ==

1. Install Wordpress using default settings.

If you have set up FTP access:
* Go to Wordpress admin, mouse over plugins, click "Add new", then click "Upload" at the top of the screen.
* Click "choose file", find the zip file, and click "install now", then follow the on-screen instructions.

If you have not set up FTP access, or if there are problems with the above:
* Unzip the solution to /wp-content/plugins/

2. After completing either of the above, to change settings:
* Open the Wordpress admin dashboard.
* Select Plugins > Installed Plugins
* Underneath 51Degrees.mobi Device Detection, select 'Activate'

* Select Settings > 51Degrees.mobi
* Create rules to handle different types of mobile device. See user guide for details [51Degrees.mobi](http://51degrees.mobi/Support/Documentation/PHP/Wordpress.aspx "Wordpress User Guide").


=Theme Developers=

1. After selecting settings:
* Go to your theme's folder (By default: 'twentyeleven')
* Open the index.php file and within a php tag add:

`echo $_51D['IsMobile'];` 

* You should see the value "TRUE" or "FALSE".
* Use the $_51D variable as expected.


== Frequently Asked Questions ==
= When will the FAQs be added? =

The FAQ section will be updated as relevant questions are asked of us.

== Screenshots ==
= None currently =

== Changelog ==
= 2.1.10.3 BETA =
* Includes nearly complete theme switcher and redirection administration user interface. 

= 0.51 BETA =
* Initial Release 

== Upgrade Notice ==
= 2.1.10.3 BETA =
*Current release. Upgrade to this to start receiving device detection data.