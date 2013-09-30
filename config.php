<?php
/**
 * Clickheat : Fichier d'édition de la configuration / Config editor
 *
 * @author Yvan Taviaud / Labsmedia
 * @since 02/04/2007
**/

/** Direct call forbidden */
if (!defined('CLICKHEAT_LANGUAGE'))
{
	exit;
}

/** Include current version */
include CLICKHEAT_ROOT.'version.php';

/** Save or send the new config */
if (isset($_POST['save']) && isset($_POST['config']))
{
	$data = @unserialize(stripslashes($_POST['config']));
	if ($data !== false)
	{
		$data['version'] = CLICKHEAT_VERSION;
		if (function_exists('var_export'))
		{
			$config = '<?php $clickheatConf = '.var_export($data, true).'; ?>';
		}
		else
		{
			$config = '<?php $clickheatConf = unserialize(\''.str_replace('\'', '\\\'', serialize($data)).'\'); ?>';
		}

		$f = fopen(CLICKHEAT_CONFIG, 'w');
		if (is_resource($f))
		{
			fputs($f, $config, strlen($config));
			fclose($f);
			header('Location: '.CLICKHEAT_INDEX_PATH.'action=view');
			exit;
		}
	}
}

$check = isset($_POST['check']);
$checks = true;

$memoryLimit = @ini_get('memory_limit');
if (strpos($memoryLimit, 'M') !== false)
{
	$memoryLimit = (int) $memoryLimit;
}
else
{
	$memoryLimit = floor($memoryLimit / (1024 * 1024));
}
/** Set default values if nothing is set in the config file */
if (IS_PIWIK_MODULE === true)
{
	$basePath = explode('/', rtrim(CLICKHEAT_ROOT, '/'));
	array_pop($basePath);
	array_pop($basePath);
	array_pop($basePath);
	$basePath = implode('/', $basePath).'/datas';
	if (!is_dir($basePath))
	{
		@mkdir($basePath);
	}
	$basePath .= '/clickheat';
	if (!is_dir($basePath))
	{
		@mkdir($basePath);
	}
}
else
{
	$basePath = preg_replace('~[\\\\/]+~', '/', dirname(__FILE__));
}
$clickheatDefault = array(
'logPath'		=> $basePath.'/logs/',
'cachePath'		=> $basePath.'/cache/',
'referers'		=> false,
'groups'		=> false,
'filesize'		=> 0,
'adminLogin'	=> '',
'adminPass'		=> '',
'viewerLogin'	=> '',
'viewerPass'	=> '',
'memory'		=> $memoryLimit === 0 ? 8 : $memoryLimit,
'step'			=> 5,
'dot'			=> 19,
'flush'			=> 40,
'start'			=> 'm',
'palette'		=> false,
'heatmap'		=> true,
'hideIframes'	=> true,
'hideFlashes'	=> true,
'yesterday'		=> false,
'alpha'			=> 80);

if (isset($clickheatConf))
{
	$clickheatConf = array_merge($clickheatDefault, $clickheatConf);
}
else
{
	$clickheatConf = &$clickheatDefault;
}
/** Overwrite value with POST */
if (isset($_POST['logPath']))
{
	$clickheatConf['logPath'] = preg_replace('~[\\\\/]+~', '/', rtrim($_POST['logPath'], '/')).'/';
}
if (isset($_POST['cachePath']))
{
	$clickheatConf['cachePath'] = preg_replace('~[\\\\/]+~', '/', rtrim($_POST['cachePath'], '/')).'/';
}
if (isset($_POST['referers']))
{
	if (trim($_POST['referers']) === '')
	{
		$clickheatConf['referers'] = false;
	}
	else
	{
		$clickheatConf['referers'] = explode(',', trim(trim(str_replace(' ', '', $_POST['referers'])), ','));
	}
}
if (isset($_POST['groups']))
{
	if (trim($_POST['groups']) === '')
	{
		$clickheatConf['groups'] = false;
	}
	else
	{
		$clickheatConf['groups'] = explode(',', trim(trim(str_replace(' ', '', $_POST['groups'])), ','));
	}
}
if (isset($_POST['adminLogin']))
{
	$clickheatConf['adminLogin'] = $_POST['adminLogin'];
}
if (isset($_POST['_adminPass']) && isset($_POST['_adminPass2']) && $_POST['_adminPass'] !== '' && $_POST['_adminPass'] === $_POST['_adminPass2'])
{
	$clickheatConf['adminPass'] = md5($_POST['_adminPass']);
}
elseif (isset($_POST['adminPass']))
{
	$clickheatConf['adminPass'] = $_POST['adminPass'];
}
if (isset($_POST['viewerLogin']))
{
	$clickheatConf['viewerLogin'] = $_POST['viewerLogin'];
}
if (isset($_POST['_viewerPass']) && isset($_POST['_viewerPass2']) && $_POST['_viewerPass'] !== '' && $_POST['_viewerPass'] === $_POST['_viewerPass2'])
{
	$clickheatConf['viewerPass'] = md5($_POST['_viewerPass']);
}
elseif (isset($_POST['viewerPass']))
{
	$clickheatConf['viewerPass'] = $_POST['viewerPass'];
}
if (isset($_POST['filesize']))
{
	$clickheatConf['filesize'] = $_POST['filesize'] * 1024;
}
if (isset($_POST['memory']))
{
	$clickheatConf['memory'] = $_POST['memory'];
}
if (isset($_POST['step']))
{
	$clickheatConf['step'] = $_POST['step'];
}
if (isset($_POST['dot']))
{
	$clickheatConf['dot'] = $_POST['dot'];
}
if (isset($_POST['flush']))
{
	$clickheatConf['flush'] = $_POST['flush'];
}
if (isset($_POST['start']))
{
	$clickheatConf['start'] = $_POST['start'];
}
if (isset($_POST['palette']))
{
	$clickheatConf['palette'] = $_POST['palette'] === '1';
}
if (isset($_POST['heatmap']))
{
	$clickheatConf['heatmap'] = $_POST['heatmap'] === '1';
}
if (isset($_POST['hideIframes']))
{
	$clickheatConf['hideIframes'] = $_POST['hideIframes'] === '1';
}
if (isset($_POST['hideFlashes']))
{
	$clickheatConf['hideFlashes'] = $_POST['hideFlashes'] === '1';
}
if (isset($_POST['yesterday']))
{
	$clickheatConf['yesterday'] = $_POST['yesterday'] === '1';
}
if (isset($_POST['alpha']))
{
	$clickheatConf['alpha'] = $_POST['alpha'];
}
/** Change type according to configuration needs */
$clickheatConf['filesize'] = (int) abs($clickheatConf['filesize']);
$clickheatConf['memory'] = (int) abs($clickheatConf['memory']);
$clickheatConf['step'] = (int) abs($clickheatConf['step']);
$clickheatConf['dot'] = (int) abs($clickheatConf['dot']);
$clickheatConf['flush'] = (int) abs($clickheatConf['flush']);
$clickheatConf['start'] = in_array($clickheatConf['start'], array('m', 's')) ? $clickheatConf['start'] : 'm';
$clickheatConf['palette'] = (bool) $clickheatConf['palette'];
$clickheatConf['heatmap'] = (bool) $clickheatConf['heatmap'];
$clickheatConf['hideIframes'] = (bool) $clickheatConf['hideIframes'];
$clickheatConf['hideFlashes'] = (bool) $clickheatConf['hideFlashes'];
$clickheatConf['yesterday'] = (bool) $clickheatConf['yesterday'];
$clickheatConf['alpha'] = min(100, (int) abs($clickheatConf['alpha']));

/** Special checks for available memory */
/** Can't set the memory limit */
if (@ini_set('memory_limit', '5M') === false)
{
	/** PHP doesn't give us the real limit */
	if ($memoryLimit === 0)
	{
		$memoryLimit = 8;
		$memoryRange = array(8, 8);
	}
	else
	{
		$memoryRange = array($memoryLimit, $memoryLimit);
	}
}
elseif (@ini_get('memory_limit') !== '5M')
{
	/** Memory limit can be set but can't be changed */
	$memoryRange = array($memoryLimit, $memoryLimit);
}
else
{
	$memoryRange = array(1, 256);
}

?>
<div class="float-right"><img src="<?php echo CLICKHEAT_PATH ?>images/logo170.png" width="170" height="35" alt="ClickHeat" /></div>
<div id="clickheat-box">
<h1><?php echo LANG_CONFIG ?></h1>
<br /><br />
<?php
if (file_exists(CLICKHEAT_CONFIG) && (!isset($clickheatConf['version']) || $clickheatConf['version'] !== CLICKHEAT_VERSION))
{
	/** v1.1 -> 1.2 : «%%» in urls to be removed, and cache to be deleted */
	if (count($_POST) === 0 && !isset($clickheatConf['version']))
	{
		echo '<span id="cleaner">'.LANG_UPGRADE.' 1.1 -&gt; 1.2</span> <img src="'.CLICKHEAT_PATH.'images/ok.png" width="16" height="16" alt="OK" /> (<small>**';
		include CLICKHEAT_ROOT.'scripts/upgrade-1.1.php';
		echo '**</small>)<br /><span id="cleaner">'.LANG_UPGRADE_NEXT.'.</span><br />';
	}
}
?>
<form action="<?php echo CLICKHEAT_INDEX_PATH ?>action=config" method="post">
<table cellpadding="0" cellspacing="5" border="0">
<tr><th colspan="2"><?php echo LANG_CONFIG_HEADER_DISPLAY ?></th></tr>
<tr><td><?php echo LANG_CONFIG_HEATMAP ?></td><td><input type="hidden" name="heatmap" value="off" /><input type="checkbox" name="heatmap"<?php if ($clickheatConf['heatmap'] === true) echo ' checked="checked"' ?> value="1" /> (<?php echo LANG_DEFAULT ?>: on)
<?php
if ($check === true)
{
	echo '</td><td><img src="'.CLICKHEAT_PATH.'images/ok.png" width="16" height="16" alt="OK" /></td><td>&nbsp;';
}
?></td></tr>
<tr><td><?php echo LANG_CONFIG_YESTERDAY ?></td><td><input type="hidden" name="yesterday" value="off" /><input type="checkbox" name="yesterday"<?php if ($clickheatConf['yesterday'] === true) echo ' checked="checked"' ?> value="1" /> (<?php echo LANG_DEFAULT ?>: off)
<?php
if ($check === true)
{
	echo '</td><td><img src="'.CLICKHEAT_PATH.'images/ok.png" width="16" height="16" alt="OK" /></td><td>&nbsp;';
}
?></td></tr>
<tr><td><?php echo LANG_CONFIG_ALPHA ?></td><td><input type="text" name="alpha" value="<?php echo $clickheatConf['alpha'] ?>" size="3" /> (<?php echo LANG_DEFAULT ?>: 80)
<?php
if ($check === true)
{
	echo '</td><td><img src="'.CLICKHEAT_PATH.'images/ok.png" width="16" height="16" alt="OK" /></td><td>&nbsp;';
}
?></td></tr>
<tr><td><?php echo LANG_CONFIG_FLUSH ?></td><td><input type="text" name="flush" value="<?php echo $clickheatConf['flush'] ?>" size="3" /> (<?php echo LANG_DEFAULT ?>: 40)
<?php
if ($check === true)
{
	echo '</td><td><img src="'.CLICKHEAT_PATH.'images/ok.png" width="16" height="16" alt="OK" /></td><td>&nbsp;';
}
?></td></tr>
<tr><td><?php echo LANG_CONFIG_START ?></td><td><input type="radio" name="start" value="m"<?php if ($clickheatConf['start'] === 'm') echo ' checked="checked"' ?> /><?php echo LANG_CONFIG_START_M ?> <input type="radio" name="start" value="s"<?php if ($clickheatConf['start'] === 's') echo ' checked="checked"' ?> /><?php echo LANG_CONFIG_START_S ?>
<?php
if ($check === true)
{
	echo '</td><td><img src="'.CLICKHEAT_PATH.'images/ok.png" width="16" height="16" alt="OK" /></td><td>&nbsp;';
}
?></td></tr>
<tr><td><?php echo LANG_CONFIG_IFRAMES ?></td><td><input type="hidden" name="hideIframes" value="off" /><input type="checkbox" name="hideIframes"<?php if ($clickheatConf['hideIframes'] === true) echo ' checked="checked"' ?> value="1" /> (<?php echo LANG_DEFAULT ?>: on)
<?php
if ($check === true)
{
	echo '</td><td><img src="'.CLICKHEAT_PATH.'images/ok.png" width="16" height="16" alt="OK" /></td><td>&nbsp;';
}
?></td></tr>
<tr><td><?php echo LANG_CONFIG_FLASHES ?></td><td><input type="hidden" name="hideFlashes" value="off" /><input type="checkbox" name="hideFlashes"<?php if ($clickheatConf['hideFlashes'] === true) echo ' checked="checked"' ?> value="1" /> (<?php echo LANG_DEFAULT ?>: on)
<?php
if ($check === true)
{
	echo '</td><td><img src="'.CLICKHEAT_PATH.'images/ok.png" width="16" height="16" alt="OK" /></td><td>&nbsp;';
}
?></td></tr>
<tr><th colspan="2"><?php echo LANG_CONFIG_HEADER_HEATMAP ?></th></tr>
<tr><td><?php echo LANG_CONFIG_LOGPATH ?></td><td><input type="text" name="logPath" value="<?php echo htmlspecialchars($clickheatConf['logPath']) ?>" size="50" />
<?php
if ($check === true)
{
	if (is_dir(dirname($clickheatConf['logPath'])) === false)
	{
		mkdir(dirname($clickheatConf['logPath']));
	}
	if (is_dir(dirname($clickheatConf['logPath'])) === false)
	{
		$checks = false;
		echo '</td><td><img src="'.CLICKHEAT_PATH.'images/ko.png" width="16" height="16" alt="KO" /></td><td>', LANG_CONFIG_LOGPATH_DIR;
	}
	else
	{
		/** Check if creation of a file is allowed */
		$f = fopen($clickheatConf['logPath'].'test.txt', 'w');
		if (!is_resource($f))
		{
			$checks = false;
			echo '</td><td><img src="'.CLICKHEAT_PATH.'images/ko.png" width="16" height="16" alt="KO" /></td><td>', LANG_CONFIG_LOGPATH_KO;
		}
		else
		{
			fclose($f);
			unlink($clickheatConf['logPath'].'test.txt');
			echo '</td><td><img src="'.CLICKHEAT_PATH.'images/ok.png" width="16" height="16" alt="OK" /></td><td>&nbsp;';
		}
	}
}
?></td></tr>
<tr><td><?php echo LANG_CONFIG_CACHEPATH ?></td><td><input type="text" name="cachePath" value="<?php echo htmlspecialchars($clickheatConf['cachePath']) ?>" size="50" />
<?php
if ($check === true)
{
	if (is_dir(dirname($clickheatConf['cachePath'])) === false)
	{
		mkdir(dirname($clickheatConf['cachePath']));
	}
	if (is_dir(dirname($clickheatConf['cachePath'])) === false)
	{
		$checks = false;
		echo '</td><td><img src="'.CLICKHEAT_PATH.'images/ko.png" width="16" height="16" alt="KO" /></td><td>', LANG_CONFIG_CACHEPATH_DIR;
	}
	else
	{
		/** Check if creation of a file is allowed */
		$f = fopen($clickheatConf['cachePath'].'test.txt', 'w');
		if (!is_resource($f))
		{
			$checks = false;
			echo '</td><td><img src="'.CLICKHEAT_PATH.'images/ko.png" width="16" height="16" alt="KO" /></td><td>', LANG_CONFIG_CACHEPATH_KO;
		}
		else
		{
			fclose($f);
			unlink($clickheatConf['cachePath'].'test.txt');
			echo '</td><td><img src="'.CLICKHEAT_PATH.'images/ok.png" width="16" height="16" alt="OK" /></td><td>&nbsp;';
		}
	}
}
?></td></tr>
<tr><td><?php echo sprintf(LANG_CONFIG_MEMORY, $memoryLimit, $memoryRange[0], $memoryRange[1]) ?></td><td><input type="text" name="memory" value="<?php echo $clickheatConf['memory'] ?>" size="3" />
<?php
if ($check === true)
{
	if ($clickheatConf['memory'] < $memoryRange[0] || $clickheatConf['memory'] > $memoryRange[1])
	{
		$checks = false;
		echo '</td><td><img src="'.CLICKHEAT_PATH.'images/ko.png" width="16" height="16" alt="KO" /></td><td>', LANG_CONFIG_MEMORY_KO;
	}
	else
	{
		echo '</td><td><img src="'.CLICKHEAT_PATH.'images/ok.png" width="16" height="16" alt="OK" /></td><td>&nbsp;';
	}
}
?></td></tr>
<tr><td><?php echo LANG_CONFIG_STEP ?></td><td><input type="text" name="step" value="<?php echo $clickheatConf['step'] ?>" size="3" /> (<?php echo LANG_DEFAULT ?>: 5)
<?php
if ($check === true)
{
	if ($clickheatConf['step'] === 0)
	{
		$checks = false;
		echo '</td><td><img src="'.CLICKHEAT_PATH.'images/ko.png" width="16" height="16" alt="KO" /></td><td>', LANG_CONFIG_STEP_KO;
	}
	else
	{
		echo '</td><td><img src="'.CLICKHEAT_PATH.'images/ok.png" width="16" height="16" alt="OK" /></td><td>&nbsp;';
	}
}
?></td></tr>
<tr><td><?php echo LANG_CONFIG_DOT ?></td><td><input type="text" name="dot" value="<?php echo $clickheatConf['dot'] ?>" size="3" /> (<?php echo LANG_DEFAULT ?>: 19)
<?php
if ($check === true)
{
	if ($clickheatConf['dot'] === 0)
	{
		$checks = false;
		echo '</td><td><img src="'.CLICKHEAT_PATH.'images/ko.png" width="16" height="16" alt="KO" /></td><td>', LANG_CONFIG_DOT_KO;
	}
	else
	{
		echo '</td><td><img src="'.CLICKHEAT_PATH.'images/ok.png" width="16" height="16" alt="OK" /></td><td>&nbsp;';
	}
}
?></td></tr>
<tr><td><?php echo LANG_CONFIG_PALETTE ?></td><td><input type="hidden" name="palette" value="off" /><input type="checkbox" name="palette"<?php if ($clickheatConf['palette'] === true) echo ' checked="checked"' ?> value="1" /> (<?php echo LANG_DEFAULT ?>: off)
<?php
if ($check === true)
{
	echo '</td><td><img src="'.CLICKHEAT_PATH.'images/ok.png" width="16" height="16" alt="OK" /></td><td>&nbsp;';
}
?></td></tr>
<tr><th colspan="2"><?php echo LANG_CONFIG_HEADER_SECURITY ?></th></tr>
<tr><td><?php echo LANG_CONFIG_REFERERS ?></td><td><input type="text" name="referers" value="<?php echo is_array($clickheatConf['referers']) ? htmlspecialchars(implode(', ', $clickheatConf['referers'])) : '' ?>" size="50" />
<?php
if ($check === true)
{
	echo '</td><td><img src="'.CLICKHEAT_PATH.'images/ok.png" width="16" height="16" alt="OK" /></td><td>&nbsp;';
}
?></td></tr>
<tr><td><?php echo LANG_CONFIG_GROUPS ?></td><td><input type="text" name="groups" value="<?php echo is_array($clickheatConf['groups']) ? htmlspecialchars(implode(', ', $clickheatConf['groups'])) : '' ?>" size="50" />
<?php
if ($check === true)
{
	echo '</td><td><img src="'.CLICKHEAT_PATH.'images/ok.png" width="16" height="16" alt="OK" /></td><td>&nbsp;';
}
?></td></tr>
<tr><td><?php echo LANG_CONFIG_FILESIZE ?></td><td><input type="text" name="filesize" value="<?php echo $clickheatConf['filesize'] / 1024 ?>" size="5" /> (<?php echo LANG_DEFAULT ?>: 0)
<?php
if ($check === true)
{
	echo '</td><td><img src="'.CLICKHEAT_PATH.'images/ok.png" width="16" height="16" alt="OK" /></td><td>&nbsp;';
}
?></td></tr>
<?php if (IS_PIWIK_MODULE === false): ?>
<tr><th colspan="2"><?php echo LANG_CONFIG_HEADER_LOGIN ?></th></tr>
<tr><td><?php echo LANG_CONFIG_ADMIN_LOGIN ?></td><td><input type="text" name="adminLogin" value="<?php echo htmlspecialchars($clickheatConf['adminLogin']) ?>" />
<?php
if ($check === true)
{
	if (strlen($clickheatConf['adminLogin']) < 4)
	{
		$checks = false;
		echo '</td><td><img src="'.CLICKHEAT_PATH.'images/ko.png" width="16" height="16" alt="KO" /></td><td>', LANG_CONFIG_LOGIN;
	}
	else
	{
		echo '</td><td><img src="'.CLICKHEAT_PATH.'images/ok.png" width="16" height="16" alt="OK" /></td><td>&nbsp;';
	}
}
?></td></tr>
<tr><td><?php echo LANG_CONFIG_ADMIN_PASS ?></td><td><input type="password" name="_adminPass" /><br /><input type="password" name="_adminPass2" /><input type="hidden" name="adminPass" value="<?php echo htmlspecialchars($clickheatConf['adminPass']) ?>" />
<?php
if ($check === true)
{
	if (isset($_POST['_adminPass']) && isset($_POST['_adminPass2']) && $_POST['_adminPass'] !== '' && $_POST['_adminPass'] !== $_POST['_adminPass2'])
	{
		$checks = false;
		echo '</td><td><img src="'.CLICKHEAT_PATH.'images/ko.png" width="16" height="16" alt="KO" /></td><td>', LANG_CONFIG_MATCH;
	}
	elseif ($clickheatConf['adminPass'] === '')
	{
		$checks = false;
		echo '</td><td><img src="'.CLICKHEAT_PATH.'images/ko.png" width="16" height="16" alt="KO" /></td><td>', LANG_CONFIG_PASS;
	}
	else
	{
		echo '</td><td><img src="'.CLICKHEAT_PATH.'images/ok.png" width="16" height="16" alt="OK" /></td><td>&nbsp;';
	}
}
?></td></tr>
<tr><td><?php echo LANG_CONFIG_VIEWER_LOGIN ?></td><td><input type="text" name="viewerLogin" value="<?php echo htmlspecialchars($clickheatConf['viewerLogin']) ?>" />
<?php
if ($check === true)
{
	if (strlen($clickheatConf['viewerLogin']) < 4 && $clickheatConf['viewerLogin'] !== '')
	{
		$checks = false;
		echo '</td><td><img src="'.CLICKHEAT_PATH.'images/ko.png" width="16" height="16" alt="KO" /></td><td>', LANG_CONFIG_LOGIN;
	}
	else
	{
		echo '</td><td><img src="'.CLICKHEAT_PATH.'images/ok.png" width="16" height="16" alt="OK" /></td><td>&nbsp;';
	}
}
?></td></tr>
<tr><td><?php echo LANG_CONFIG_VIEWER_PASS ?></td><td><input type="password" name="_viewerPass" /><br /><input type="password" name="_viewerPass2" /><input type="hidden" name="viewerPass" value="<?php echo htmlspecialchars($clickheatConf['viewerPass']) ?>" />
<?php
if ($check === true)
{
	if (isset($_POST['_viewerPass']) && isset($_POST['_viewerPass2']) && $_POST['_viewerPass'] !== '' && $_POST['_viewerPass'] !== $_POST['_viewerPass2'])
	{
		$checks = false;
		echo '</td><td><img src="'.CLICKHEAT_PATH.'images/ko.png" width="16" height="16" alt="KO" /></td><td>', LANG_CONFIG_MATCH;
	}
	elseif ($clickheatConf['viewerPass'] === '' && $clickheatConf['viewerLogin'] !== '')
	{
		$checks = false;
		echo '</td><td><img src="'.CLICKHEAT_PATH.'images/ko.png" width="16" height="16" alt="KO" /></td><td>', LANG_CONFIG_PASS;
	}
	else
	{
		echo '</td><td><img src="'.CLICKHEAT_PATH.'images/ok.png" width="16" height="16" alt="OK" /></td><td>&nbsp;';
	}
}
?></td></tr>
<?php endif; ?>
<tr><td colspan="<?php echo $check === true ? 4 : 2 ?>" class="center">&nbsp;<br /><br />
	<input type="hidden" name="check" value="1" />
	<input type="submit" value="<?php echo LANG_CONFIG_CHECK ?>" /><br />
	<a href="<?php echo CLICKHEAT_INDEX_PATH ?>action=view"><?php echo LANG_CANCEL ?></a><br />
</td></tr>
</table>
</form>
<br />
<form action="<?php echo CLICKHEAT_INDEX_PATH ?>action=config" method="post" class="center">
<input type="hidden" name="config" value="<?php echo htmlspecialchars(serialize($clickheatConf)) ?>" />
<?php
if ($check === true && $checks === true)
{
	/** Test if config path is writable for config.php : */
	$f = fopen(dirname(CLICKHEAT_CONFIG).'/temp.tmp', 'w');
	if (!is_resource($f))
	{
		echo '<span class="error">'.LANG_CHECK_NOT_WRITABLE.' ('.dirname(CLICKHEAT_CONFIG).'/\')</span>';
	}
	else
	{
		fputs($f, 'delete this file');
		fclose($f);
		unlink(dirname(CLICKHEAT_CONFIG).'/temp.tmp');
		echo '<input type="hidden" name="save" value="true" /><input type="submit" value="', LANG_CONFIG_SAVE, '" />';
	}
}
?>
</form>
</div>
