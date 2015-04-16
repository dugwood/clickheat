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
use Piwik\Config;

class ClickHeat extends \Piwik\Plugin
{
	function install()
	{
		/** Create main cache paths */
		$dir = PIWIK_INCLUDE_PATH.'/tmp/cache/clickheat/';
		if (!is_dir($dir.'logs'))
		{
			mkdir($dir.'logs', 0777, true);
		}
		if (!is_dir($dir.'cache'))
		{
			mkdir($dir.'cache', 0777, true);
		}
	}
}
