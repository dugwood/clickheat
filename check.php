<?php
/**
 * ClickHeat : Test de la configuration / Configuration check
 * 
 * @author Yvan Taviaud - LabsMedia - www.labsmedia.com
 * @since 04/12/2006
**/

/** Direct call forbidden */
if (!defined('CLICKHEAT_LANGUAGE'))
{
	exit;
}

$checks = true;
?>
<span class="float-right">
<?php
foreach ($__languages as $lang) 
{
	echo '<a href="', CLICKHEAT_INDEX_PATH, 'language=', $lang, '"><img src="', CLICKHEAT_PATH, 'images/flags/', $lang, '.png" width="18" height="12" alt="', $lang, '" /></a> ';
}
?></span>
<div id="clickheat-box">
<h1><?php echo LANG_CHECKS ?></h1>
<br /><br />
<table cellpadding="0" cellspacing="5" border="0">
<tr><td><?php echo LANG_CHECK_WRITABLE ?><br />(<?php echo dirname(CLICKHEAT_CONFIG) ?>/)</td><td>
<?php
/** Test if current path is writable for config.php : */
$f = fopen(dirname(CLICKHEAT_CONFIG).'/temp.tmp', 'w');
if (!is_resource($f))
{
	$checks = false;
	echo '<img src="'.CLICKHEAT_PATH.'images/ko.png" width="16" height="16" alt="KO" /></td><td>', LANG_CHECK_NOT_WRITABLE;
}
else
{
	fputs($f, 'delete this file');
	fclose($f);
	unlink(dirname(CLICKHEAT_CONFIG).'/temp.tmp');
	echo '<img src="'.CLICKHEAT_PATH.'images/ok.png" width="16" height="16" alt="OK" /></td><td>&nbsp;';
}
?></td></tr>
<tr><td><?php echo LANG_CHECK_GD ?></td><td>
<?php
if (function_exists('imagecreatetruecolor') === false)
{
	$checks = false;
	echo '<img src="'.CLICKHEAT_PATH.'images/ko.png" width="16" height="16" alt="KO" /></td><td>', LANG_CHECK_GD_IMG;
}
elseif (function_exists('imagecolorallocatealpha') === false)
{
	$checks = false;
	echo '<img src="'.CLICKHEAT_PATH.'images/ko.png" width="16" height="16" alt="KO" /></td><td>', LANG_CHECK_GD_ALPHA;
}
elseif (function_exists('imagepng') === false)
{
	$checks = false;
	echo '<img src="'.CLICKHEAT_PATH.'images/ko.png" width="16" height="16" alt="KO" /></td><td>', LANG_CHECK_GD_PNG;
}
else
{
	echo '<img src="'.CLICKHEAT_PATH.'images/ok.png" width="16" height="16" alt="OK" /></td><td>&nbsp;';
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
	echo LANG_CHECKS_OK, ' <a href="', CLICKHEAT_INDEX_PATH, 'action=config"><img src="'.CLICKHEAT_PATH.'images/next.png" width="16" height="16" alt="Next" /></a>';
}
?></td></tr>
</table>
</div>