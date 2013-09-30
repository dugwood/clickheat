<?php
/**
 * ClickHeat : Fonctions diverses / Various functions
 *
 * @author Yvan Taviaud - Dugwood - www.dugwood.com
 * @since 01/04/2007
 */
/* Direct call forbidden */
if (!defined('CLICKHEAT_LANGUAGE'))
{
	exit;
}

$debug = isset($_GET['debug']);

if (CLICKHEAT_ADMIN === false)
{
	return false;
}

/* Check for JS validation */
if (strpos($_SERVER['REQUEST_URI'], 'debugjs') !== false)
{
	include '/data/engine/classes/Utils.class.php';
	include '/data/engine/classes/Syntax/Checker.class.php';
	foreach (array('clickheat-original', 'admin') as $file)
	{
		echo 'Fichier : ', $file, '<br/>';
		$str = file_get_contents(dirname(__FILE__).'/js/'.$file.'.js');
		if (($result = Syntax_Checker::js($str)) !== true)
		{
			echo 'JSLint : ', $file, '.js non valide :<br/>', str_replace("\n", '<br/>', $result);
			break;
		}
	}
}

if (IS_PIWIK_MODULE === true)
{
	$clickheatConf = Piwik_ClickHeat_Controller::conf();
}

$deletedFiles = 0;
$deletedDirs = 0;
/**
 * Clean the logs' directory according to configuration data
 */
if ($clickheatConf['flush'] !== 0 && is_dir($clickheatConf['logPath']) === true)
{
	$logDir = dir($clickheatConf['logPath'].'/');
	while (($dir = $logDir->read()) !== false)
	{
		if ($dir[0] === '.' || !is_dir($logDir->path.$dir))
		{
			continue;
		}

		$d = dir($logDir->path.$dir.'/');
		$deletedAll = true;
		$oldestDate = mktime(0, 0, 0, date('m'), date('d') - $clickheatConf['flush'], date('Y'));
		if ($debug === true)
		{
			echo 'directory: "', $dir, '"<br/>';
		}
		while (($file = $d->read()) !== false)
		{
			if ($file[0] === '.' || $file === 'url.txt')
			{
				continue;
			}
			$ext = explode('.', $file);
			if (count($ext) !== 2)
			{
				$deletedAll = false;
				continue;
			}
			$filemtime = filemtime($d->path.$file);
			if ($debug === true)
			{
				echo '&nbsp;&nbsp;file: "', $file, '" ', ($filemtime - $oldestDate), ' seconds left (about ', ceil(($filemtime - $oldestDate) / 86400), ' days left)<br/>';
			}
			if ($ext[1] === 'log' && $filemtime <= $oldestDate)
			{
				@unlink($d->path.$file);
				$deletedFiles++;
				continue;
			}
			$deletedAll = false;
		}
		/** If every log file (but the url.txt) has been deleted, then we should delete the directory too */
		if ($deletedAll === true)
		{
			@unlink($d->path.'/url.txt');
			$deletedFiles++;
			@rmdir($d->path);
			$deletedDirs++;
		}
		$d->close();
	}
	$logDir->close();
}

/**
 * Clean the cache directory for every file older than 1 day
 */
if (is_dir($clickheatConf['cachePath']) === true)
{
	if ($debug === true)
	{
		echo '<br/>cache directory:<br/>';
	}
	$time = isset($_SERVER['REQUEST_TIME']) ? $_SERVER['REQUEST_TIME'] : time();
	$time -= 86400;
	$d = dir($clickheatConf['cachePath'].'/');
	while (($file = $d->read()) !== false)
	{
		if ($file[0] === '.')
		{
			continue;
		}
		$pos = strrpos($file, '.');
		if ($pos === false)
		{
			continue;
		}
		$ext = substr($file, $pos + 1);
		$filemtime = filemtime($d->path.$file);
		if ($debug === true)
		{
			echo '&nbsp;&nbsp;file: "', $file, '" ', ($filemtime - $time), ' seconds left<br/>';
		}
		switch ($ext)
		{
			case 'html':
			case 'png':
			case 'png_temp':
			case 'png_log':
				{
					if ($filemtime < $time)
					{
						@unlink($d->path.$file);
						$deletedFiles++;
						continue;
					}
					break;
				}
		}
	}
	$d->close();
}

if ($deletedDirs + $deletedFiles === 0)
{
	echo 'OK';
	return true;
}
echo sprintf(LANG_CLEANER_RUN, $deletedFiles, $deletedDirs);
