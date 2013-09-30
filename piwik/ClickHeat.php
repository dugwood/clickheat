<?php
/**
 * ClickHeat - Clicks' heatmap
 * 
 * @link http://www.labsmedia.com/clickheat/index.html
 * @license http://www.gnu.org/licenses/gpl-3.0.html Gpl v3 or later
 * @version $Id: ClickHeat.php 377 2008-03-14 22:36:46Z matt $
 * 
 * @package Piwik_ClickHeat
 */

class Piwik_ClickHeat extends Piwik_Plugin
{
	public function getInformation()
	{
		return array(
		// name must be the className prefix!
		'name' => 'ClickHeat',
		'description' => 'Clicks\' Heatmap',
		'author' => 'Labsmedia',
		'homepage' => 'http://www.labsmedia.com/clickheat/index.html',
		'version' => '1.9-revB',
		'translationAvailable' => true,
		);
	}

	function postLoad()
	{
		Piwik_AddMenu('ClickHeat', 'Heatmap', array('module' => 'ClickHeat', 'action' => 'view'));
	}

	function install()
	{
		/** Check that the config file exists, else create it */
		$path = dirname(Piwik_Config::getDefaultDefaultConfigPath()).'/clickheat.php';
		if (!file_exists($path))
		{
			copy(PIWIK_INCLUDE_PATH.'/plugins/ClickHeat/config.piwik.php', $path);
		}
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
?>