<?php
/**
 * ClickHeat : Mise à jour des informations d'un groupe / Group info update
 *
 * @author Yvan Taviaud - Dugwood - www.dugwood.com
 * @since 04/04/2007
 */
/* Direct call forbidden */
if (!defined('CLICKHEAT_LANGUAGE'))
{
	exit;
}

$group = isset($_GET['group']) ? str_replace('/', '', $_GET['group']) : '';

if (IS_PIWIK_MODULE === true)
{
	$clickheatConf = Piwik_ClickHeat_Controller::conf();
}
if (file_exists($clickheatConf['logPath'].$group.'/url.txt'))
{
	$f = @fopen($clickheatConf['logPath'].$group.'/url.txt', 'r');
	$webPage = trim(fgets($f, 1024));
	fclose($f);
}
else
{
	$webPage = '';
}
$webPage = explode('>', $webPage);
if (count($webPage) !== 4)
{
	$webPage = array('../', 0, 0, 0);
}
$url = &$webPage[0];
$left = (int) $webPage[1];
$center = (int) $webPage[2];
$right = (int) $webPage[3];
unset($webPage);

$pos = strpos($group, ',');
if ($pos === false)
{
	$groupTitle = &$group;
}
else
{
	$groupTitle = substr($group, $pos + 1);
}
?>
<span class="float-right"><a href="#" onclick="hideGroupLayout();
		return false;"><img src="<?php echo CLICKHEAT_PATH ?>images/ko.png" alt="Close"/></a></span>
<h1><?php echo LANG_LAYOUT ?> '<em><?php echo htmlspecialchars($groupTitle); ?></em>'</h1>
<form action="#" method="get" onsubmit="return false;">
	<?php echo LANG_EXAMPLE_URL ?> <input type="text" name="url" id="formUrl" value="<?php echo htmlspecialchars($url); ?>" size="50"/> <a href="#" onclick="saveGroupLayout();
			return false;"><img src="<?php echo CLICKHEAT_PATH ?>images/save.png" alt="Save"/></a><br />
	<span class="layout-left-fixed"><?php echo LANG_LAYOUT_FIXED ?></span> <span class="layout-left-liquid"><?php echo LANG_LAYOUT_LIQUID ?></span> <span class="layout-left-empty"><?php echo LANG_LAYOUT_NONE ?></span><br />
	<table cellpadding="0" cellspacing="2" border="0">
		<?php
		for ($i = 0; $i < 7; $i++)
		{
			$leftFixed = ($i & 1) === 1;
			$centerFixed = ($i & 2) === 2;
			$rightFixed = ($i & 4) === 4;
			$selected = ($leftFixed === false && $left === 0 || $leftFixed === true && $left !== 0) && ($centerFixed === false && $center === 0 || $centerFixed === true && $center !== 0) && ($rightFixed === false && $right === 0 || $rightFixed === true && $right !== 0);
			echo '<tr><td><div class="layout-left-', $leftFixed ? 'fixed' : ($centerFixed ? 'empty' : 'liquid'), '"><div class="layout-center-', $centerFixed ? 'fixed' : 'liquid', '"><div class="layout-right-', $rightFixed ? 'fixed' : ($centerFixed ? 'empty' : 'liquid'), '"></div></div></div></td>';
			echo '<td>', constant('LANG_LAYOUT_'.$i), '</td>';
			echo '<td><span id="layout-span-', $i, '" style="display:none;">';
			echo $leftFixed ? LANG_LAYOUT_LEFT.' <input type="text" name="left-'.$i.'" id="layout-left-'.$i.'" size="3" value="'.$left.'"/> ' : '<input type="hidden" name="left-'.$i.'" id="layout-left-'.$i.'" value="0"/>';
			echo $centerFixed && !$leftFixed && !$rightFixed ? LANG_LAYOUT_CENTER.' <input type="text" name="center-'.$i.'" id="layout-center-'.$i.'" size="3" value="'.$center.'"/> ' : '<input type="hidden" name="center-'.$i.'" id="layout-center-'.$i.'" value="0"/>';
			echo $rightFixed ? LANG_LAYOUT_RIGHT.' <input type="text" name="right-'.$i.'" id="layout-right-'.$i.'" size="3" value="'.$right.'"/>' : '<input type="hidden" name="right-'.$i.'" id="layout-right-'.$i.'" value="0"/>';
			echo '<a href="#" onclick="saveGroupLayout(); return false;"><img src="', CLICKHEAT_PATH, 'images/save.png" alt="Save"/></a></span></td>';
			echo '<td><input type="radio" name="layout-radio" id="layout-radio-', $i, '"', $selected ? ' checked="checked"' : '', ' onclick="showRadioLayout(', $i, ');"/></td></tr>';
		}
		?>
	</table>
</form>