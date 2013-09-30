<?php
/**
 * ClickHeat: Fichier de langue: anglais
 * 
 * @author Yvan Taviaud - Dugwood - www.Dugwood.com
 * @since 27/10/2006
**/

/** Fix for Piwik bad behaviour */
if (defined('LANG_USER'))
{
	return true;
}

define('LANG_USER', 'User');
define('LANG_PASSWORD', 'Password');
define('LANG_LOGIN', 'Login');
define('LANG_LOGIN_ERROR', 'Login error, wrong user or password');
define('LANG_LOGOUT', 'Logout');
define('LANG_UNKNOWN_DIR', 'Can\'t define current directory, please contact us');
define('LANG_DAYS', 'M,T,W,T,F,S,S');
define('LANG_RANGE', 'Day,Week,Month');
define('LANG_MONTHS', '0,January,February,March,April,May,June,July,August,September,October,November,December');
define('LANG_SITE', 'Website');
define('LANG_GROUP', 'Group');
define('LANG_BROWSER', 'Browser');
define('LANG_ALL', 'All');
define('LANG_UNKNOWN', 'Other/unknown');
define('LANG_EXAMPLE_URL', 'Webpage');
define('LANG_LAYOUT', 'Group\'s layout');
define('LANG_LAYOUT_FIXED', 'Fixed content/menu');
define('LANG_LAYOUT_LIQUID', 'Liquid content/menu (automatic adjusting to available space)');
define('LANG_LAYOUT_NONE', 'Margin (no content), liquid');
define('LANG_LAYOUT_0', 'Liquid content and menu');
define('LANG_LAYOUT_1', 'Fixed left menu, liquid content');
define('LANG_LAYOUT_2', 'Fixed centered content (automatic left and right margins)');
define('LANG_LAYOUT_3', 'Fixed content stuck to the left (automatic right margin)');
define('LANG_LAYOUT_4', 'Fixed right menu, liquid content');
define('LANG_LAYOUT_5', 'Fixed left and right menus, liquid content');
define('LANG_LAYOUT_6', 'Fixed content stuck to the right (automatic left margin)');
define('LANG_LAYOUT_LEFT', 'Fixed left width (pixels)');
define('LANG_LAYOUT_CENTER', 'Fixed central width (pixels)');
define('LANG_LAYOUT_RIGHT', 'Fixed right width (pixels)');
define('LANG_SCREENSIZE', 'Screen size');
define('LANG_HEATMAP', 'Heatmap and its transparency');
define('LANG_LATEST_CHECK', 'Upgrade');
define('LANG_LATEST_KO', 'Can\'t find dynamically the latest available version, yours is %s, the latest one read directly from Dugwood\'s website is');
define('LANG_LATEST_OK', 'You have the latest available version (%s)');
define('LANG_LATEST_NO', 'Your version (%s) isn\'t the latest available one (%s). You can download the latest one on our website:');
define('LANG_LOG_MY_CLICKS', 'Log my clicks?');
define('LANG_JAVASCRIPT_ADMIN_COOKIE', 'In order to avoid pollution of your statistics,\nyou can choose not to log your own clicks\n\nOK = log my clicks\nCancel = don\'t log my clicks');
define('LANG_JAVASCRIPT', 'Javascript code to be pasted on pages you want to study');
define('LANG_JAVASCRIPT_IMAGE', 'Show ClickHeat logo on the studied page: ');
define('LANG_JAVASCRIPT_SHORT', 'Compact code (3 lines only)');
define('LANG_JAVASCRIPT_QUOTA', 'Maximum clicks per page and visitor, next clicks won\'t be saved (0 = no limit, 3 is a good choice)');
define('LANG_JAVASCRIPT_SITE', 'Website name (allowed characters: A-Z, a-z, 0-9, underscore, hyphen, dot)');
define('LANG_JAVASCRIPT_GROUP', 'Group name, to group similar pages for a simpler analysis');
define('LANG_JAVASCRIPT_GROUP0', 'use a keyword');
define('LANG_JAVASCRIPT_GROUP1', 'allowed characters: A-Z, a-z, 0-9, underscore, hyphen, dot');
define('LANG_JAVASCRIPT_GROUP2', 'use webpage\'s title (<a href="http://www.Dugwood.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">not recommended</a>)');
define('LANG_JAVASCRIPT_GROUP3', 'use webpage\'s URL (<a href="http://www.Dugwood.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">not recommended</a>)');
define('LANG_JAVASCRIPT_PASTE', 'Copy and paste the code below on your pages, just before the end of the page (before &lt;/body&gt; tag):');
define('LANG_JAVASCRIPT_DEBUG', 'Once the code pasted on your pages, don\'t forget to test if the code works correctly, by calling your page with the parameter <span class="error">debugclickheat</span>. For example for http://www.site.com/index.html call http://www.site.com/index.html<span class="error">?debugclickheat</span>. You should see a message showing the state of Clickheat. If you encounter any problem, feel free to contact us');
define('LANG_NO_CLICK_BELOW', 'No clicks recorded beneath this line'); // Leave this line in English please
define('LANG_ERROR_GROUP', 'Unknown group. _JAVASCRIPT_');
define('LANG_ERROR_DATA', 'No logs for the selected period (first think removing filters: browser, screensize). _JAVASCRIPT_');
define('LANG_ERROR_JAVASCRIPT', 'Did you correctly installed Javascript code on your webpages?');
define('LANG_ERROR_FILE', 'Can\'t open log file');
define('LANG_ERROR_SCREEN', 'Non-standard screen size');
define('LANG_ERROR_LOADING', 'Generating image, please wait...');
define('LANG_ERROR_FIXED', 'All widths are fixed, that is not possible. Please change one of your layout width above.');
define('LANG_DEFAULT', 'default');
define('LANG_CHECKS', 'Preliminary checks');
define('LANG_CHECK_WRITABLE', 'Write permissions in configuration directory');
define('LANG_CHECK_NOT_WRITABLE', 'PHP hasn\'t got write permission in the configuration directory');
define('LANG_CHECK_GD', 'GD graphic library');
define('LANG_CHECK_GD_IMG', 'imagecreatetruecolor() unavailable, can\'t create images (with good quality), check that GD is installed');
define('LANG_CHECK_GD_ALPHA', 'imagecolorallocatealpha() unavailable, can\'t create transparent images (you can ignore this, but transparency is really recommended)');
define('LANG_CHECK_GD_PNG', 'imagepng() unavailable, can\'t create PNG images, sorry');
define('LANG_CHECKS_OK', 'Next step: configuration');
define('LANG_CHECKS_KO', 'One or more tests have failed. Please correct problems and refresh this page.');
define('LANG_CONFIG', 'Configuration');
define('LANG_CONFIG_HEADER_HEATMAP', 'Heatmap rendering');
define('LANG_CONFIG_HEADER_DISPLAY', 'Main display');
define('LANG_CONFIG_HEADER_SECURITY', 'Security');
define('LANG_CONFIG_HEADER_LOGIN', 'Login parameters');
define('LANG_CONFIG_LOGPATH', 'Logfiles\' directory');
define('LANG_CONFIG_LOGPATH_DIR', 'Logfiles directory doesn\'t exist. Please create it');
define('LANG_CONFIG_LOGPATH_KO', 'Logfiles directory doesn\'t have write permissions, please give it write permission for PHP user');
define('LANG_CONFIG_CACHEPATH', 'Temporary files directory');
define('LANG_CONFIG_CACHEPATH_DIR', 'Temporary files directory doesn\'t exist. Please create it');
define('LANG_CONFIG_CACHEPATH_KO', 'Temporary files directory doesn\'t have write permissions, please give it write permission for PHP user');
define('LANG_CONFIG_REFERERS', 'Domain names (separated by commas) allowed to log clicks on this server');
define('LANG_CONFIG_GROUPS', 'Group names (separated by commas) allowed to log clicks on this server');
define('LANG_CONFIG_FILESIZE', 'Maximum logfile size (in KB) of a group over a day (1000 clicks are about 25KB, 0 = no size limit)');
define('LANG_CONFIG_CHECK', 'Check configuration');
define('LANG_CONFIG_MEMORY', 'Memory limit (default php.ini value: %dMB, limits: from %d to %dMB, but <a href="http://www.Dugwood.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">be careful with high values</a>)');
define('LANG_CONFIG_MEMORY_KO', 'please stay in the specified range');
define('LANG_CONFIG_STEP', 'Clicks grouping by X*X pixels\' zones (speed up display of heatmaps)');
define('LANG_CONFIG_STEP_KO', 'zones can\'t be under 1x1 pixels');
define('LANG_CONFIG_DOT', 'Heatmaps\' dot size (pixels)');
define('LANG_CONFIG_DOT_KO', 'dot size can\'t be zero');
define('LANG_CONFIG_PALETTE', 'If you see red squares on heatmaps check this box');
define('LANG_CONFIG_HEATMAP', 'Show heatmap (rather than clicks\' map)');
define('LANG_CONFIG_FLASHES', 'Hide &lt;Flash&gt; objects'); 
define('LANG_CONFIG_IFRAMES', 'Hide &lt;iframe&gt; frames'); 
define('LANG_CONFIG_YESTERDAY', 'Show yesterday statistics at start (rather than today)');
define('LANG_CONFIG_ALPHA', 'Transparency level (0 => 100)');
define('LANG_CONFIG_FLUSH', 'Automatic flush of statistics older than X days (0 = keep all files, not recommended)');
define('LANG_CONFIG_START', 'First day of week');
define('LANG_CONFIG_START_M', 'Monday');
define('LANG_CONFIG_START_S', 'Sunday');
define('LANG_CONFIG_ADMIN_LOGIN', 'Administrator\'s identifier');
define('LANG_CONFIG_ADMIN_PASS', 'Administrator\'s password (enter it twice)');
define('LANG_CONFIG_VIEWER_LOGIN', 'Visitor\'s identifier (if empty, account is disabled)');
define('LANG_CONFIG_VIEWER_PASS', 'Visitor\'s password (enter it twice)');
define('LANG_CONFIG_LOGIN', 'identifier must be at least 4 characters');
define('LANG_CONFIG_PASS', 'password is empty');
define('LANG_CONFIG_MATCH', 'passwords don\'t match');
define('LANG_CONFIG_SAVE', 'Save configuration');
define('LANG_CLEANER_RUNNING', 'Cleaning in progress...');
define('LANG_CLEANER_RUN', 'Cleaning finished: %d files and %d directories have been deleted');
define('LANG_CANCEL', 'Cancel');
define('LANG_UPGRADE', 'Upgrade');
define('LANG_UPGRADE_NEXT', 'Check your configuration, then save it to finish upgrade');
?>
