<?php
/**
 * Clickheat : Code javascript à coller sur les pages / Javascript code to be paste on pages
 *
 * @author Yvan Taviaud - Dugwood - www.dugwood.com
 * @since 08/04/2007
 */
/* Direct call forbidden */
if (!defined('CLICKHEAT_LANGUAGE'))
{
	exit;
}
?>
<span class="float-right"><a href="#" onclick="hideGroupLayout();
		return false;"><img src="<?php echo CLICKHEAT_PATH ?>images/ko.png" alt="Close"/></a></span>
<h1><?php echo LANG_JAVASCRIPT ?></h1>
<form action="#" method="get" onsubmit="return false;">
	<table cellpadding="0" cellspacing="2" border="0">
		<?php if (IS_PIWIK_MODULE === false): ?>
			<tr><td><?php echo LANG_JAVASCRIPT_SITE ?></td><td><input type="text" name="js-site" id="jsSite" value="" size="15" maxlength="50" onchange="updateJs();" onkeyup="updateJs();"/></td></tr>
		<?php endif; ?>
		<tr><td><?php echo LANG_JAVASCRIPT_GROUP ?></td><td>
				<input type="radio" name="jsRadioGroup" id="jsGroup1" value="0" onclick="updateJs();"/> <?php echo LANG_JAVASCRIPT_GROUP0 ?> <input type="text" name="js-group" id="jsGroup" size="15" maxlength="50" value="group1" onchange="updateJs();" onkeyup="updateJs();"/> (<?php echo LANG_JAVASCRIPT_GROUP1 ?>) <br />
				<input type="radio" name="jsRadioGroup" id="jsGroup2" value="1" onclick="updateJs();"/> <?php echo LANG_JAVASCRIPT_GROUP2 ?><br />
				<input type="radio" name="jsRadioGroup" id="jsGroup3" value="2" checked="checked" onclick="updateJs();"/> <?php echo LANG_JAVASCRIPT_GROUP3 ?></td></tr>
		<tr><td><?php echo LANG_JAVASCRIPT_QUOTA ?></td><td><input type="text" name="js-quota" id="jsQuota" value="0" size="3" onchange="updateJs();" onkeyup="updateJs();"/></td></tr>
		<tr><td><?php echo LANG_JAVASCRIPT_IMAGE ?><img src="<?php echo CLICKHEAT_PATH ?>images/logo.png" width="80" height="15" border="0" alt="ClickHeat : track clicks"/></td><td><input type="checkbox" name="js-image" id="jsShowImage" onclick="updateJs();"/></td></tr>
		<tr><td><?php echo LANG_JAVASCRIPT_SHORT ?></td><td><input type="checkbox" name="jsShort" id="jsShort" checked="checked" onclick="updateJs();"/></td></tr>
	</table>
	<br />
	<?php echo LANG_JAVASCRIPT_PASTE ?><br />
	<div id="clickheat-js"></div>
	<img src="<?php echo CLICKHEAT_PATH ?>images/warning.png" alt="Warning"/> <?php echo LANG_JAVASCRIPT_DEBUG ?>
</form>