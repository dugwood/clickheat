<?php
/**
 * ClickHeat : Enregistrement d'un clic suivi / Logging of a tracked click
 *
 * @author Yvan Taviaud - Dugwood - www.dugwood.com, yamachan - yamachan@piwikjapan.org (rewrite for Piwik 2.12)
 * @since 27/10/2006
 * @version $Id$
 */
/* Remove all "//" to enable debugging. Don't forget to disable this when you're done! */
//  error_reporting(E_ALL);
//  restore_error_handler();
//  ini_set('display_errors', 1);

use Piwik\Common;
use Piwik\IP;
use Piwik\Network\IPUtils;

/* First of all, check if we are inside PhpMyVisites */
if (strpos(str_replace('\\', '/', getcwd()), 'plugins/ClickHeat/libs') !== false)
{
	define('PIWIK_DOCUMENT_ROOT', str_replace('/plugins/ClickHeat/libs', '', str_replace('\\', '/', getcwd())));
	define('PIWIK_INCLUDE_PATH', PIWIK_DOCUMENT_ROOT);
	define('CLICKHEAT_ROOT', PIWIK_DOCUMENT_ROOT.'/plugins/ClickHeat');
	define('IS_PIWIK_MODULE', true);
	define('CLICKHEAT_CONFIG', CLICKHEAT_ROOT .'/clickheat.php');
	require_once PIWIK_INCLUDE_PATH . '/core/bootstrap.php';
	@ignore_user_abort(true);
	require_once PIWIK_INCLUDE_PATH . '/core/Common.php';
	require_once PIWIK_INCLUDE_PATH . '/core/IP.php';
}
else
{
	define('CLICKHEAT_ROOT', './');
	define('IS_PIWIK_MODULE', false);
	define('CLICKHEAT_CONFIG', CLICKHEAT_ROOT.'config/config.php');
}

/* Include config file */
include CLICKHEAT_CONFIG;

/* Check parameters */
if (!isset($clickheatConf) || !isset($_GET['x']) || !isset($_GET['y']) || !isset($_GET['w']) || !isset($_GET['g']) || !isset($_GET['s']) || !isset($_GET['b']) || !isset($_GET['c']))
{
	exit('Parameters or config error');
}

/* Check referers */
if (is_array($clickheatConf['referers']))
{
	if (!isset($_SERVER['HTTP_REFERER']))
	{
		exit('No domain in referer');
	}
	$referer = parse_url($_SERVER['HTTP_REFERER']);
	if (!in_array($referer['host'], $clickheatConf['referers']))
	{
		exit('Forbidden domain ('.$referer['host'].'), change or remove security settings in the config panel to allow this one');
	}
}

function cleanStrings($str)
{
	if (function_exists('mb_strtolower'))
	{
		$str = mb_strtolower($str, 'utf-8');
	}
	else
	{
		$str = strtolower($str);
	}
	/* strtr() correctly handles multibyte */
	$str = strtr($str, array('à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a', 'æ' => 'a', 'ā' => 'a', 'ă' => 'a', 'ą' => 'a', 'ç' => 'c', 'ć' => 'c', 'ĉ' => 'c', 'ċ' => 'c', 'č' => 'c', 'ď' => 'd', 'đ' => 'd', 'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', 'ē' => 'e', 'ĕ' => 'e', 'ė' => 'e', 'ę' => 'e', 'ě' => 'e', 'ğ' => 'g', 'ġ' => 'g', 'ģ' => 'g', 'ĥ' => 'h', 'ħ' => 'h', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i', 'ĩ' => 'i', 'ī' => 'i', 'ĭ' => 'i', 'į' => 'i', 'ı' => 'i', 'ĳ' => 'i', 'ĵ' => 'j', 'ķ' => 'k', 'ĸ' => 'k', 'ĺ' => 'l', 'ļ' => 'l', 'ľ' => 'l', 'ŀ' => 'l', 'ł' => 'l', 'ñ' => 'n', 'ń' => 'n', 'ņ' => 'n', 'ň' => 'n', 'ŉ' => 'n', 'ŋ' => 'n', 'ð' => 'o', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o', 'ö' => 'o', 'ō' => 'o', 'ŏ' => 'o', 'ő' => 'o', 'œ' => 'o', 'ø' => 'o', 'ŕ' => 'r', 'ř' => 'r', 'ś' => 's', 'ŝ' => 's', 'ş' => 's', 'š' => 's', 'ſ' => 's', 'ţ' => 't', 'ť' => 't', 'ŧ' => 't', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ü' => 'u', 'ũ' => 'u', 'ū' => 'u', 'ŭ' => 'u', 'ů' => 'u', 'ű' => 'u', 'ų' => 'u', 'ŵ' => 'w', 'ý' => 'y', 'ÿ' => 'y', 'ŷ' => 'y', 'ź' => 'z', 'ż' => 'z', 'ž' => 'z'));
	return substr(preg_replace('/[^a-z_0-9\-]+/', '.', $str), 0, 250);
}
/* isIpInRange have been removed on Piwik 2.12.0. */
function isIpInRange($ip, $ipRanges)
{
	$ip = \Piwik\Network\IP::fromBinaryIP($ip);
	return $ip->isInRanges($ipRanges);
}

/* Check if group, site and browser are letters-only */
$site = cleanStrings($_GET['s']);
$group = cleanStrings($_GET['g']);
if ($group === '')
{
	exit('No group specified (clickHeatGroup empty)');
}
/* Check group */
if (is_array($clickheatConf['groups']))
{
	if (!in_array($group, $clickheatConf['groups']))
	{
		exit('Forbidden group ('.$group.'), change or remove security settings in the config panel to allow this one');
	}
}
$browser = preg_replace('/[^a-z]+/', '', strtolower($_GET['b']));
if ($browser === '')
{
	exit('Browser empty');
}
$final = ltrim($site.','.$group, ',');
/* Limit file size */
if ($clickheatConf['filesize'] !== 0)
{
	if (file_exists($clickheatConf['logPath'].$final.'/'.date('Y-m-d').'.log') && filesize($clickheatConf['logPath'].$final.'/'.date('Y-m-d').'.log') > $clickheatConf['filesize'])
	{
		exit('Filesize reached limit');
	}
}
/* Logging the click */
$f = fopen($clickheatConf['logPath'].$final.'/'.date('Y-m-d').'.log', 'a');
if (!is_resource($f))
{
	/* Can't open the log, let's try to create the directory */
	if (!is_dir(dirname($clickheatConf['logPath'])))
	{
		if (!mkdir(dirname($clickheatConf['logPath'])))
		{
			exit('Cannot create log directory: '.$clickheatConf['logPath']);
		}
	}
	if (!is_dir($clickheatConf['logPath'].$final))
	{
		if (!mkdir($clickheatConf['logPath'].$final))
		{
			exit('Cannot create log directory: '.$clickheatConf['logPath'].$final);
		}
		if (isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] !== '')
		{
			$f = fopen($clickheatConf['logPath'].$final.'/url.txt', 'w');
			fputs($f, str_replace('debugclickheat', '', $_SERVER['HTTP_REFERER']).'>0>0>0');
			fclose($f);
		}
	}
	$f = fopen($clickheatConf['logPath'].$final.'/'.date('Y-m-d').'.log', 'a');
}
if (is_resource($f))
{
	$logMe = true;
	if (isset($_COOKIE['clickheat-admin']))
	{
		echo 'OK, but click not logged as you selected it in the admin panel ("Log my clicks/Enregistrer mes clics")';
		$logMe = false;
	}
	elseif (IS_PIWIK_MODULE === true)
	{
		$site = (string) (int) $site; // prevents path injection
		if (file_exists(PIWIK_INCLUDE_PATH.'/tmp/cache/tracker/'.$site.'.php'))
		{
			require_once PIWIK_INCLUDE_PATH.'/tmp/cache/tracker/'.$site.'.php';
			if (isset($content['excluded_ips']))
			{
				$ip = IPUtils::stringToBinaryIP(\Piwik\Network\IP::fromStringIP(IP::getIpFromHeader()));
				if (isIpInRange($ip, $content['excluded_ips']) === true)
				{
					echo 'OK, but click not logged as you prevent this IP to be tracked in Piwik\'s configuration';
					$logMe = false;
				}
			}
		}
	}
	if ($logMe === true)
	{
		echo 'OK';
		fputs($f, ((int) $_GET['x']).'|'.((int) $_GET['y']).'|'.((int) $_GET['w']).'|'.$browser.'|'.((int) $_GET['c'])."\n");
	}
	fclose($f);
}
else
{
	echo 'KO, file not writable';
}
