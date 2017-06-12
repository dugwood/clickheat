<?php

/**
 * ClickHeat - Clicks' heatmap
 *
 * @link http://www.dugwood.com/clickheat/index.html
 * @license http://www.gnu.org/licenses/gpl-3.0.html Gpl v3 or later
 * @version $Id$
 *
 * @package Piwik\Plugins\ClickHeat
 */

namespace Piwik\Plugins\ClickHeat;

use Piwik\Translate;
use Piwik\Piwik;
use Piwik\Common;
use Piwik\View;

class Controller extends \Piwik\Plugin\Controller
{

	public function init()
	{
		$__languages = array('bg', 'cz', 'de', 'en', 'es', 'fr', 'hu', 'id', 'it', 'ja', 'nl', 'pl', 'pt', 'ro', 'ru', 'sr', 'tr', 'uk', 'zh');

		if (isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] !== '')
		{
			$realPath = &$_SERVER['REQUEST_URI'];
		}
		elseif (isset($_SERVER['SCRIPT_NAME']) && $_SERVER['SCRIPT_NAME'] !== '')
		{
			$realPath = &$_SERVER['SCRIPT_NAME'];
		}
		else
		{
			exit(LANG_UNKNOWN_DIR);
		}

		/** First of all, check if we are inside Piwik */
		$dirName = dirname($realPath);
		if ($dirName === '/')
		{
			$dirName = '';
		}

		define('CLICKHEAT_PATH', $dirName.'/plugins/ClickHeat/libs/');
		define('CLICKHEAT_INDEX_PATH', 'index.php?module=ClickHeat&');
		define('CLICKHEAT_ROOT', PIWIK_INCLUDE_PATH.'/plugins/ClickHeat/libs/');
		define('CLICKHEAT_CONFIG', PIWIK_INCLUDE_PATH.'/plugins/ClickHeat/clickheat.php');	
		define('IS_PIWIK_MODULE', true);

		if (Piwik::hasUserSuperUserAccess())
		{
			define('CLICKHEAT_ADMIN', true);
		}
		else
		{
			define('CLICKHEAT_ADMIN', false);
		}

		define('CLICKHEAT_LANGUAGE', Translate::getLanguageToLoad());
		require_once (CLICKHEAT_CONFIG);
		/** Specific definitions */
		$clickheatConf['__screenSizes'] = array(0 /** Must start with 0 */, 640, 800, 1024, 1280, 1440, 1600, 1800);
		$clickheatConf['__browsersList'] = array('all' => '', 'firefox' => 'Firefox', 'msie' => 'Internet Explorer', 'safari' => 'Safari', 'opera' => 'Opera', 'kmeleon' => 'K-meleon', 'unknown' => '');

		self::conf($clickheatConf);
	}

	/** It's a static class, but PHP 4 doesn't know about «static» */
	private function conf($conf = false)
	{
		static $staticConf = array();
		if ($conf === false)
		{
			return $staticConf;
		}
		else
		{
			$staticConf = $conf;
		}
	}

	/**
	 * Main method
	 */
	public function view()
	{
		/** List of available groups */
		$groups = array();
		$conf = self::conf();
		$d = dir($conf['logPath']);

		/** Fix by Kowalikus: get the list of sites the current user has view access to */
		$idSite = (int) Common::getRequestVar('idSite');
		if (Piwik::isUserHasViewAccess($idSite) === false)
		{
			return false;
		}

		while (($dir = $d->read()) !== false)
		{
			if ($dir[0] === '.' || !is_dir($d->path.$dir))
			{
				continue;
			}
			$pos = strpos($dir, ',');
			if ($pos === false)
			{
				continue;
			}
			$site = (int) substr($dir, 0, $pos);
			/** Fix by Kowalikus: check if current user has view access */
			if ($site !== $idSite)
			{
				continue;
			}
			$groups[] = '<option value="'.$dir.'">'.($pos === false ? $dir : substr($dir, $pos + 1)).'</option>';
		}
		$d->close();
		/** Sort groups in alphabetical order */
		sort($groups);
		$__selectGroups = implode("\n", $groups);

		/** Screen sizes */
		$__selectScreens = '';
		for ($i = 0; $i < count($conf['__screenSizes']); $i++)
		{
			$__selectScreens .= '<option value="'.$conf['__screenSizes'][$i].'">'.($conf['__screenSizes'][$i] === 0 ? Piwik::Translate('ClickHeat_LANG_ALL') : $conf['__screenSizes'][$i].'px').'</option>';
		}

		/** Browsers */
		$__selectBrowsers = '';
		foreach ($conf['__browsersList'] as $label => $name)
		{
			$__selectBrowsers .= '<option value="'.$label.'">'.($label === 'all' ? Piwik::Translate('ClickHeat_LANG_ALL') : ($label === 'unknown' ? Piwik::Translate('ClickHeat_LANG_UNKNOWN') : $name)).'</option>';
		}

		/** Date */
		$date = strtotime(Common::getRequestVar('date'));
		if ($date === false)
		{
			if ($conf['yesterday'] === true)
			{
				$date = mktime(0, 0, 0, date('m'), date('d') - 1, date('Y'));
			}
			else
			{
				$date = time();
			}
		}
		$__day = (int) date('d', $date);
		$__month = (int) date('m', $date);
		$__year = (int) date('Y', $date);

		$range = Common::getRequestVar('period');
		$range = $range[0];

		if (!in_array($range, array('d', 'm', 'w')))
		{
			$range = 'd';
		}
		if ($range === 'w')
		{
			$startDay = $conf['start'] === 'm' ? 1 : 0;
			while (date('w', $date) != $startDay)
			{
				$date = mktime(0, 0, 0, date('m', $date), date('d', $date) - 1, date('Y', $date));
			}
			$__day = (int) date('d', $date);
			$__month = (int) date('m', $date);
			$__year = (int) date('Y', $date);
		}
		elseif ($range === 'm')
		{
			$__day = 1;
		}
		
		$view = new View('@ClickHeat/view');

		$view->assign('clickheat_host', 'http://'.$_SERVER['SERVER_NAME']);
		$view->assign('clickheat_path', CLICKHEAT_PATH);
		$view->assign('clickheat_index', CLICKHEAT_INDEX_PATH);
		//$view->assign('clickheat_group', LANG_GROUP);
		$view->assign('clickheat_groups', $__selectGroups);
		//$view->assign('clickheat_browser', LANG_BROWSER);
		$view->assign('clickheat_browsers', $__selectBrowsers);
		//$view->assign('clickheat_screen', LANG_SCREENSIZE);
		$view->assign('clickheat_screens', $__selectScreens);
		//$view->assign('clickheat_heatmap', LANG_HEATMAP);
		$view->clickheat_loading = str_replace('\'', '\\\'', Piwik::Translate('ClickHeat_LANG_ERROR_LOADING'));
		$view->clickheat_cleaner = str_replace('\'', '\\\'', Piwik::Translate('ClickHeat_LANG_CLEANER_RUNNING'));
		$view->clickheat_admincookie = str_replace('\'', '\\\'', Piwik::Translate('ClickHeat_LANG_JAVASCRIPT_ADMIN_COOKIE'));
		$view->clickheat_alpha = $conf['alpha'];
		$view->clickheat_iframes = $conf['hideIframes'] === true ? 'true' : 'false';
		$view->clickheat_flashes = $conf['hideFlashes'] === true ? 'true' : 'false';
		$view->clickheat_force_heatmap = $conf['heatmap'] === true ? ' checked="checked"' : '';
		$view->clickheat_jsokay = str_replace('\'', '\\\'', Piwik::Translate('ClickHeat_LANG_ERROR_JAVASCRIPT'));
		$view->clickheat_day = $__day;
		$view->clickheat_month = $__month;
		$view->clickheat_year = $__year;
		$view->clickheat_range = $range;
		$view->clickheat_menu = '<a href="#" onclick="adminCookie(); return false;">'. Piwik::Translate('ClickHeat_LANG_LOG_MY_CLICKS') .'</a><br /><a href="#" onclick="showJsCode(); return false;">Javascript</a>';

		echo $view->render();
	}

	public function iframe()
	{
		$group = isset($_GET['group']) ? str_replace('/', '', $_GET['group']) : '';
		$conf = self::conf();
		if (is_dir($conf['logPath'].$group))
		{
			$webPage = array('/');
			if (file_exists($conf['logPath'].$group.'/url.txt'))
			{
				$f = @fopen($conf['logPath'].$group.'/url.txt', 'r');
				if ($f !== false)
				{
					$webPage = explode('>', trim(fgets($f, 1024)));
					fclose($f);
				}
			}
			echo $webPage[0];
		}
	}

	public function javascript()
	{
		foreach(array('', '_GROUP', '_GROUP0', '_GROUP1', '_GROUP2', '_GROUP3', '_DEBUG', '_QUOTA', '_IMAGE', '_SHORT', '_PASTE') as $value) {
			define("LANG_JAVASCRIPT$value", Piwik::Translate("ClickHeat_LANG_JAVASCRIPT$value"));
		}
		require_once (CLICKHEAT_ROOT.'javascript.php');
	}

	public function layout()
	{
		include (CLICKHEAT_ROOT.'layout.php');
	}

	public function generate()
	{
		include (CLICKHEAT_ROOT.'generate.php');
	}

	public function png()
	{
		$conf = self::conf();
		$imagePath = $conf['cachePath'].(isset($_GET['file']) ? str_replace('/', '', $_GET['file']) : '**unknown**');

		header('Content-Type: image/png');
		if (file_exists($imagePath))
		{
			readfile($imagePath);
		}
		else
		{
			readfile(CLICKHEAT_ROOT.'images/warning.png');
		}
	}

	public function layoutupdate()
	{
		$group = isset($_GET['group']) ? str_replace('/', '', $_GET['group']) : '';
		$url = isset($_GET['url']) ? $_GET['url'] : '';
		if (strpos($url, 'http') !== 0)
		{
			$url = 'http://'.$_SERVER['SERVER_NAME'].'/'.ltrim($url, '/');
		}
		/** Improved security for PHP injection (PMV2.3b3 bug) */
		$url = parse_url(str_replace(array('<', '>'), array('', ''), $url));
		$left = isset($_GET['left']) ? (int) $_GET['left'] : 0;
		$center = isset($_GET['center']) ? (int) $_GET['center'] : 0;
		$right = isset($_GET['right']) ? (int) $_GET['right'] : 0;

		$conf = self::conf();
		if (!is_dir($conf['logPath'].$group) || !isset($url['host']) || !isset($url['path']))
		{
			exit('Error');
		}

		if ($url['scheme'] !== 'http' && $url['scheme'] !== 'https')
		{
			$url['scheme'] = 'http';
		}
		if (isset($url['query']))
		{
			$url = $url['scheme'].'://'.$url['host'].$url['path'].'?'.$url['query'];
		}
		else
		{
			$url = $url['scheme'].'://'.$url['host'].$url['path'];
		}
		$f = fopen($conf['logPath'].$group.'/url.txt', 'w');
		fputs($f, $url.'>'.$left.'>'.$center.'>'.$right);
		fclose($f);

		exit('OK');
	}

	public function cleaner()
	{
		include (CLICKHEAT_ROOT.'cleaner.php');
	}

}
