<?php
/**
 * ClickHeat : Test de la configuration / Configuration check
 *
 * @author Yvan Taviaud - Dugwood - www.dugwood.com
 * @since 04/12/2006
 */
/* Direct call forbidden */
if (!defined('CLICKHEAT_LANGUAGE'))
{
	exit;
}

$checks = true;
?>
<span class="float-right">
	<span class="flags">
		<?php
		foreach ($__languages as $lang)
		{
			echo '<a href="', CLICKHEAT_INDEX_PATH, 'language=', $lang, '"><img src="', CLICKHEAT_PATH, 'images/flags/', $lang, '.png" alt="', $lang, '"/></a> ';
		}
		?>
	</span>
</span>
<div id="clickheat-box">
	<h1><?php echo LANG_CHECKS ?></h1>
	<br /><br />
	<table cellpadding="0" cellspacing="5" border="0">
		<tr><td><?php echo LANG_CHECK_WRITABLE ?><br />(<?php echo dirname(CLICKHEAT_CONFIG) ?>/)</td><td>
				<?php
				/* If 'config' folder doesn't exist, create it: **/
				if (!is_dir(dirname(CLICKHEAT_CONFIG)))
				{	
					mkdir(dirname(CLICKHEAT_CONFIG), 0755);
				}
				/* Test if current path is writable for config.php : **/
				$f = fopen(dirname(CLICKHEAT_CONFIG).'/temp.tmp', 'w');
				if (!is_resource($f))
				{
					$checks = false;
					echo '<img src="'.CLICKHEAT_PATH.'images/ko.png" alt="KO"/></td><td>', LANG_CHECK_NOT_WRITABLE;
				}
				else
				{
					fputs($f, 'delete this file');
					fclose($f);
					unlink(dirname(CLICKHEAT_CONFIG).'/temp.tmp');
					echo '<img src="'.CLICKHEAT_PATH.'images/ok.png" alt="OK"/></td><td>&nbsp;';
				}
				?></td></tr>
		<tr><td><?php echo LANG_CHECK_GD ?></td><td>
				<?php
				if (function_exists('imagecreatetruecolor') === false)
				{
					$checks = false;
					echo '<img src="'.CLICKHEAT_PATH.'images/ko.png"alt="KO"/></td><td>', LANG_CHECK_GD_IMG;
				}
				elseif (function_exists('imagecolorallocatealpha') === false)
				{
					$checks = false;
					echo '<img src="'.CLICKHEAT_PATH.'images/ko.png" alt="KO" /></td><td>', LANG_CHECK_GD_ALPHA;
				}
				elseif (function_exists('imagepng') === false)
				{
					$checks = false;
					echo '<img src="'.CLICKHEAT_PATH.'images/ko.png" alt="KO"/></td><td>', LANG_CHECK_GD_PNG;
				}
				else
				{
					echo '<img src="'.CLICKHEAT_PATH.'images/ok.png" alt="OK"/></td><td>&nbsp;';
				}
				?></td></tr>
		<tr><td colspan="3" align="center">&nbsp;<br /><br />
				<?php
				if ($checks === false)
				{
					echo LANG_CHECKS_KO;
				}
				else
				{
					echo LANG_CHECKS_OK, ' <a href="', CLICKHEAT_INDEX_PATH, 'action=config"><img src="'.CLICKHEAT_PATH.'images/next.png" alt="Next"/></a>';
				}
				?></td></tr>
	</table>
</div>
