<?php
/**
 * Clickheat : vérification de la dernière version disponible / Latest available version
 * 
 * @author Yvan Taviaud / Labsmedia
 * @since 16/04/2007
**/

/** Direct call forbidden */
if (!defined('CLICKHEAT_LANGUAGE'))
{
	exit;
}

?>
<span class="float-right"><a href="#" onclick="hideGroupLayout(); return false;"><img src="<?php echo CLICKHEAT_PATH ?>images/ko.png" width="16" height="16" alt="Close" /></a></span>
<h1><?php echo LANG_LATEST_CHECK ?></h1>
<?php
$f = @fsockopen('www.labsmedia.com', 80, $errno, $errstr, 5);
include CLICKHEAT_ROOT.'version.php';
if ($f === false || is_null($f))
{
	echo sprintf(LANG_LATEST_KO, CLICKHEAT_VERSION), ': <iframe src="http://www.labsmedia.com/clickheat/version.txt" frameborder="0" width="50" height="20" scrolling="no"></iframe> - <a href="http://www.labsmedia.com/clickheat/index.html">ClickHeat</a>';
}
else
{
	fputs($f, "GET /admin/clickheat/VERSION HTTP/1.1\r\nHost: www.labsmedia.com\r\n");
	fputs($f, "Connection: close\r\n\r\n");
	while (!feof($f) && trim(fgets($f)) !== '') {}
	$latest = trim(fgets($f));
	fclose($f);
	if (CLICKHEAT_VERSION === $latest)
	{
		echo sprintf(LANG_LATEST_OK, $latest);
	}
	else
	{
		echo sprintf(LANG_LATEST_NO, CLICKHEAT_VERSION, $latest), ' <a href="http://www.labsmedia.com/clickheat/index.html">ClickHeat</a>';
	}
}
?>