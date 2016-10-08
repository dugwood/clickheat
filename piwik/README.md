# Piwik ClickHeat Plugin

## Description
ClickHeat is a visual heatmap of clicks on a HTML page, showing hot and cold click zones. This plugin based on [Dugwood's ClickHeat version 1.14](https://github.com/dugwood/clickheat). It is an OpenSource software, released under GPL licence, and free of charge. 

__Plugin not consider the IIS.__ Sorry.

## Installation
Install it via Piwik Marketplace.

This plugin installer will make directories:
* yourpiwik/tmp/cache/clickheat/cache
* yourpiwik/tmp/cache/clickheat/logs.

This plugin uses a different tracker. Please click on the link "JavaScript" and put the special Javascript codes into your website.

## FAQ
__What exactly is included in this feature ?__

* pick up a siteid
* pick up a period
* pick up a browser type
* pick up a specific web page

__And what functions are not included in this feature ?__

* remove special addresses defined on the control panel.
* remove special browsers defined on the control panel.
* filters based on added segmentation

__Where is the coordinate information from the browser ?__

ClickHeat plugin uses text files to record the coordinate data of each browser in directory: yourpiwik/tmp/cache/clickheat/logs.

__What is "click.php returned a status code 403" ?__

403 errors are almost always caused by issues where you're trying to access something that you don't have access to.

Special Javascript, which you had set for ClickHeat, executes the ClickHeat tracker (yourpiwik/plugins/ClickHeat/libs/click.php) look-alike the Piwik tracker (yourpiwik/piwik.php).

Therefore, you must authorize the ClickHeat tracker just as the Piwik tracker. 

This link helps you: [Apache 403 Forbidden Error and Solution](http://www.cyberciti.biz/faq/apache-403-forbidden-error-and-solution/)

__After installing the plugin, Piwik Administration area shows "page not found 404 error".__

This plugin doesn't consider the IIS. Sorry. And please delete the ClickHeat plugin (yourpiwik/plugins/ClickHeat) manually via FTP or Explorer.

__Does it withstands high traffics ?__

This plugin uses minimal text to record data and file based logging. And when click.php is called from a special Javascript for cgi, just append text on end of the each file. And when you analyze the click data and make a heatmap, plugin will create cached heatmap as png image file. 

Therefore, we expect the plugin light works, but we don't know what load it has under Piwik 2.x. So we are very glad, when you inform us about your situation. 

Please see the link [Performance and optimization](https://www.dugwood.com/clickheat/156894-performance-and-optimization.html) about system resources. If you want performance, you need to avoid to use a cgi, that is possible. It method is explained on the link. 

__New click data were added, but not updated heatmap. Why ?__

Plugin places heatmap images in the cache directory: yourpiwik/tmp/cache/clickheat/cache. Therefore when you suddenly met with such probrem, you can delete cache files, but __do not delete cache directory__.

__Showed a heatmap, but not overlay a heatmap to the target web page. Why ?__

Check that your website does not set the HTTP header __X-FRAME-OPTIONS__ to __SAMEORIGIN__ as this will prevent this plugin from iframing your website for the heatmap report. Please see [Page Overlay Troubleshooting](http://piwik.org/docs/page-overlay/#page-overlay-troubleshooting), that is same problem.

## Changelog

* 0.1.0 First beta
* 0.1.2 to append faq
* 0.1.3 to append faq

## License
GPL v3 or later

## Support
Please direct any feedback to [yamachan@piwikjapan.org](mailto:yamachan@piwikjapan.org).
