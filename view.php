<?php
/**
 * ClickHeat : Fichier de résultats / Results file
 *
 * @author Yvan Taviaud - Dugwood - www.dugwood.com
 * @since 27/10/2006
 */
/* Direct call forbidden */
if (!defined('CLICKHEAT_LANGUAGE'))
{
	exit;
}

/* List of available groups */
$groups = array();
$d = dir($clickheatConf['logPath']);
while (($dir = $d->read()) !== false)
{
	if ($dir[0] === '.' || !is_dir($d->path.$dir))
	{
		continue;
	}
	$pos = strpos($dir, ',');
	if ($pos !== false)
	{
		$site = substr($dir, 0, $pos);
	}
	else
	{
		$site = '';
	}
	if (IS_PIWIK_MODULE === true)
	{
		if ($site !== PHPMV_SELECTED_SITE)
		{
			continue;
		}
		$site = '';
	}
	if (!isset($groups[$site]))
	{
		$groups[$site] = array();
	}
	$groups[$site][] = '<option value="'.$dir.'">'.($pos === false ? $dir : substr($dir, $pos + 1)).'</option>';
}
$d->close();
/* Sort groups in alphabetical order */
ksort($groups);
$__selectGroups = '';
foreach ($groups as $key => $options)
{
	sort($options);
	if ($key !== '')
	{
		$__selectGroups .= '<optgroup label="'.$key.'">';
	}
	$__selectGroups .= implode("\n", $options);
	if ($key !== '')
	{
		$__selectGroups .= '</optgroup>';
	}
}

asort($clickheatConf['__screenSizes']);
/* Screen sizes */
$__selectScreens = '';
for ($i = 0; $i < count($clickheatConf['__screenSizes']); $i++)
{
	$__selectScreens .= '<option value="'.$clickheatConf['__screenSizes'][$i].'">'.($clickheatConf['__screenSizes'][$i] === 0 ? LANG_ALL : $clickheatConf['__screenSizes'][$i].'px').'</option>';
}

/* Browsers */
$__selectBrowsers = '';
foreach ($clickheatConf['__browsersList'] as $label => $name)
{
	$__selectBrowsers .= '<option value="'.$label.'">'.($label === 'all' ? LANG_ALL : ($label === 'unknown' ? LANG_UNKNOWN : $name)).'</option>';
}

/* Date */
$date = isset($_GET['date']) ? strtotime($_GET['date']) : ($clickheatConf['yesterday'] === true ? mktime(0, 0, 0, date('m'), date('d') - 1, date('Y')) : false);
if ($date === false)
{
	$date = time();
}
$__day = (int) date('d', $date);
$__month = (int) date('m', $date);
$__year = (int) date('Y', $date);
?>
<div id="adminPanel">
	<span class="float-right">
		<a href="https://www.dugwood.<?php echo CLICKHEAT_LANGUAGE === 'fr' ? 'fr' : 'com' ?>/clickheat/index.html"><img src="<?php echo CLICKHEAT_PATH ?>images/logo170.png" alt="ClickHeat"/></a><br />
		<a href="#" onclick="adminCookie();
				return false;"><?php echo LANG_LOG_MY_CLICKS ?></a> -
		   <?php if (CLICKHEAT_ADMIN === true) echo '<a href="', CLICKHEAT_INDEX_PATH, 'action=config">', LANG_CONFIG, '</a> - <a href="#" onclick="showJsCode(); return false;">Javascript</a> - <a href="#" onclick="showLatestVersion(); return false;">', LANG_LATEST_CHECK, '</a> - '; ?>
		<a href="<?php echo CLICKHEAT_INDEX_PATH ?>action=logout"><?php echo LANG_LOGOUT ?></a><br />
		<span class="flags">
			<?php
			foreach ($__languages as $lang)
			{
				echo '<a href="', CLICKHEAT_INDEX_PATH, 'language=', $lang, '"><img src="', CLICKHEAT_PATH, 'images/flags/', $lang, '.png" alt="', $lang, '"/></a> ';
			}
			?><br />
		</span>
		<span id="cleaner">&nbsp;</span>
	</span>
	<form action="<?php echo CLICKHEAT_INDEX_PATH ?>" method="get" onsubmit="return false;" id="clickForm">
		<table cellpadding="0" cellspacing="1" border="0" id="clickTable">
			<tr>
				<th><?php echo LANG_SITE ?> &amp; <?php echo LANG_GROUP ?></th><td><select name="group" id="formGroup" onchange="hideGroupLayout();
						loadIframe();"><?php echo $__selectGroups ?></select><?php if (CLICKHEAT_ADMIN === true) echo ' <a href="#" onclick="showGroupLayout(); return false;"><img src="', CLICKHEAT_PATH, 'images/layout.png" alt="Layout"/></a>'; ?> <a href="#" onclick="updateHeatmap();
								return false;"><img src="<?php echo CLICKHEAT_PATH ?>images/reload.png" alt="Refresh"/></a></td>
				<td rowspan="4">
					<?php
					$__calendar = '<table cellpadding="0" cellspacing="0" border="0" class="clickheat-calendar"><tr>';
					$days = explode(',', LANG_DAYS);
					for ($d = 0; $d < 7; $d++)
					{
						$D = $d + ($clickheatConf['start'] === 'm' ? 0 : 6);
						if ($D > 6)
						{
							$D -= 7;
						}
						$__calendar .= '<th>'.$days[$D].'</th>';
					}
					$__calendar .= '</tr><tr>';
					$before = date('w', mktime(0, 0, 0, $__month, 1, $__year)) - ($clickheatConf['start'] === 'm' ? 1 : 0);
					if ($before < 0)
					{
						$before += 7;
					}
					$__lastDayOfMonth = date('t', mktime(0, 0, 0, $__month - 1, 1, $__year));
					for ($d = 1; $d <= $before; $d++)
					{
						$__calendar .= '<td id="clickheat-calendar-10'.$d.'">'.($__lastDayOfMonth - $before + $d).'</td>';
					}
					$cols = $before - 1;
					$__js = 'weekDays = [';
					for ($d = 1, $days = date('t', $date); $d <= $days; $d++)
					{
						$D = mktime(0, 0, 0, $__month, $d, $__year);
						if (++$cols === 7)
						{
							$__calendar .= '</tr><tr>';
							$cols = 0;
						}
						$__calendar .= '<td id="clickheat-calendar-'.$d.'"><a href="#" onclick="updateCalendar('.$d.'); return false;">'.$d.'</a></td>';
						$__js .= ','.(date('W', $D) + (date('w', $D) == 0 && $clickheatConf['start'] === 's' ? 1 : 0));
					}
					$__js .= '];';
					for ($d = 1; $cols < 6; $cols++, $d++)
					{
						$__calendar .= '<td id="clickheat-calendar-11'.$d.'">'.$d.'</td>';
					}
					$__calendar .= '</tr></table>';
					$ranges = explode(',', LANG_RANGE);
					$months = explode(',', LANG_MONTHS);
					echo $__calendar;
					?>
				</td>
				<td rowspan="4">
					<table cellpadding="1" cellspacing="0" border="0" class="clickheat-calendar">
						<tr>
							<th><a href="#" onclick="url = window.location.href.replace(/&?date=\d+-\d+-\d+/, '');
									if (url.search(/\?/) == -1)
										url += '?';
									url += '&amp;date=<?php echo ($__month == '1' ? $__year - 1 : $__year), '-', ($__month == '1' ? '12' : sprintf('%02d', $__month - 1)) ?>-01';
									window.location.href = url;
									return false;"><img src="<?php echo CLICKHEAT_PATH ?>images/previous.png" alt="Previous"/></a><?php echo $months[$__month] ?><a href="#" onclick="url = window.location.href.replace(/&?date=\d+-\d+-\d+/, '');
											if (url.search(/\?/) == -1)
												url += '?';
											url += '&amp;date=<?php echo ($__month == '12' ? $__year + 1 : $__year), '-', ($__month == '12' ? '01' : sprintf('%02d', $__month + 1)) ?>-01';
											window.location.href = url;
											return false;"><img src="<?php echo CLICKHEAT_PATH ?>images/next.png" alt="Next"/></a></th>
						</tr>
						<tr>
							<td id="clickheat-calendar-d"><a href="#" onclick="currentRange = 'd';
									this.blur();
									updateCalendar();
									return false;"><?php echo $ranges[0] ?></a></td>
						</tr>
						<tr>
							<td id="clickheat-calendar-w"><a href="#" onclick="currentRange = 'w';
									this.blur();
									updateCalendar();
									return false;"><?php echo $ranges[1] ?></a></td>
						</tr>
						<tr>
							<td id="clickheat-calendar-m"><a href="#" onclick="currentRange = 'm';
									this.blur();
									updateCalendar();
									return false;"><?php echo $ranges[2] ?></a></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<th><?php echo LANG_BROWSER ?></th><td><select name="browser" id="formBrowser" onchange="updateHeatmap();"><?php echo $__selectBrowsers ?></select></td>
			</tr>
			<tr>
				<th><?php echo LANG_HEATMAP ?></th><td><input type="checkbox" id="formHeatmap" name="heatmap" onclick="updateHeatmap();"<?php if ($clickheatConf['heatmap'] === true) echo ' checked="checked"'; ?> /><span id="alphaSelector"></span></td>
			</tr>
			<tr>
				<th><?php echo LANG_SCREENSIZE ?></th><td><select name="screen" id="formScreen" onchange="resizeDiv();
						updateHeatmap();"><?php echo $__selectScreens ?></select></td>
			</tr>
		</table>
	</form>
</div>
<div id="divPanel" onmouseover="showPanel();" onclick="hidePanel();"><img src="<?php echo CLICKHEAT_PATH ?>images/arrow-up.png" alt=""/></div>
<script type="text/javascript" src="<?php echo CLICKHEAT_PATH ?>js/admin.js"></script>
<div id="overflowDiv">
	<div id="layoutDiv"></div>
	<div id="pngDiv"></div>
	<p><script type="text/javascript"><!--
	document.write('<ifr' + 'ame src="<?php echo CLICKHEAT_PATH ?>clickempty.html" id="webPageFrame" onload="cleanIframe();" frameborder="0" scrolling="no" width="50" height="0"></if' + 'rame>'); //-->
		</script></p>
</div>
<script type="text/javascript"><!--
<?php echo $__js ?>
		pleaseWait = '<?php echo str_replace('\'', '\\\'', LANG_ERROR_LOADING); ?>';
		cleanerRunning = '<?php echo str_replace('\'', '\\\'', LANG_CLEANER_RUNNING); ?>';
		isJsOkay = '<?php echo CLICKHEAT_ADMIN === true ? '<a href="#" onclick="showJsCode(); return false;">'.str_replace('\'', '\\\'', LANG_ERROR_JAVASCRIPT).'</a>' : '' ?>';
		jsAdminCookie = '<?php echo str_replace('\'', '\\\'', LANG_JAVASCRIPT_ADMIN_COOKIE) ?>';
		hideIframes = <?php echo $clickheatConf['hideIframes'] === true ? 'true' : 'false' ?>;
		hideFlashes = <?php echo $clickheatConf['hideFlashes'] === true ? 'true' : 'false' ?>;
		scriptPath = '<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') ? 'https' : 'http' ?>://<?php echo $_SERVER['SERVER_NAME'].CLICKHEAT_PATH ?>';
			scriptIndexPath = '<?php echo CLICKHEAT_INDEX_PATH ?>';
			lastDayOfMonth = <?php echo $__lastDayOfMonth ?>;
			currentDate = [<?php echo $__day, ',', $__month, ',', $__year, ',', $__day, ',', $__month, ',', $__year ?>];
			currentAlpha = <?php echo $clickheatConf['alpha'] ?>;

			/** Draw the alpha selector */
			drawAlphaSelector('alphaSelector', 30);

			/** Resize the main div */
			resizeDiv();

			/** Load iframe (which will load the heatmap once the info is okay) */
			loadIframe();

			/** Run cleaner */
			runCleaner(); //-->
</script>
