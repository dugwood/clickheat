<link href="{$clickheat_path}/styles/piwik.css" rel="stylesheet"/>
<script type="text/javascript" src="{$clickheat_path}js/admin.js"></script>
<div id="contenu">
	<span id="cleaner"></span>

	<form action="{$clickheat_path}index.php" method="get" onsubmit="return false;" id="clickForm">
		<table cellpadding="0" cellspacing="1" border="0" width="100%">
			<tr>
				<th>{$clickheat_group}</th>
				<td><select name="group" id="formGroup" onchange="hideGroupLayout(); loadIframe();">{$clickheat_groups}</select> <a href="#" onclick="showGroupLayout(); return false;"><img src="{$clickheat_path}images/layout.png" alt="Layout"/></a><a href="#" onclick="updateHeatmap(); return false;"><img src="{$clickheat_path}images/reload.png" alt="Refresh"/></a></td>
				<th>{$clickheat_browser}</th>
				<td><select name="browser" id="formBrowser" onchange="updateHeatmap();">{$clickheat_browsers}</select></td>
				<td rowspan="2">{$clickheat_menu}</td>
			</tr>
			<tr>
				<th>{$clickheat_heatmap}</th><td><input type="checkbox" id="formHeatmap" name="heatmap"{$clickheat_force_heatmap} onchange="updateHeatmap();"/><span id="alphaSelector"></span></td>
				<th>{$clickheat_screen}</th><td><select name="screen" id="formScreen" onchange="resizeDiv(); updateHeatmap();">{$clickheat_screens}</select></td>
			</tr>
		</table>
	</form>
</div>
<div id="divPanel" onmouseover="showPanel();" onclick="hidePanel();"><img src="{$clickheat_path}images/arrow-up.png" alt=""/></div>
<div id="layoutDiv"></div>
<div id="overflowDiv">
	<div id="pngDiv"></div>
	<p><iframe src="{$clickheat_path}clickempty.html" id="webPageFrame" onload="window.setTimeout('cleanIframe();', 2000);" frameborder="0" scrolling="no" width="50" height="0"></iframe></p>
</div>
<script type="text/javascript">
			pleaseWait = '{$clickheat_loading}';
			cleanerRunning = '{$clickheat_cleaner}';
			isJsOkay = '{$clickheat_jsokay}';
			jsAdminCookie = '{$clickheat_admincookie}';
			hideIframes = {$clickheat_iframes};
			hideFlashes = {$clickheat_flashes};
			isPiwikModule = true;
			scriptPath = '{$clickheat_host}{$clickheat_path}';
			scriptIndexPath = '{$clickheat_index}';
			currentDate = [{$clickheat_day}, {$clickheat_month}, {$clickheat_year}, {$clickheat_day}, {$clickheat_month}, {$clickheat_year}];
			currentRange = '{$clickheat_range}';
			currentAlpha = {$clickheat_alpha};
			weekDays = new Array();
			/** Draw the alpha selector */
			drawAlphaSelector('alphaSelector', 30);
			/** Resize the main div */
			resizeDiv();
			/** Load iframe (which will load the heatmap once the info is okay) */
			loadIframe();
			/** Run cleaner */
			runCleaner();
			updateHeatmap();
</script>