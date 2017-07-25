<?php
/**
 * Clickheat : vérification de la dernière version disponible / Latest available version
 *
 * @author Yvan Taviaud - Dugwood - www.dugwood.com
 * @since 16/04/2007
 */
/* Direct call forbidden */
if (!defined('CLICKHEAT_LANGUAGE'))
{
	exit;
}
?>
<span class="float-right"><a href="#" onclick="hideGroupLayout();
		return false;"><img src="<?php echo CLICKHEAT_PATH ?>images/ko.png" alt="Close"/></a></span>
<h1><?php echo LANG_LATEST_CHECK ?></h1>
<?php
$f = @fsockopen('raw.github.com', 443, $errno, $errstr, 5);
include CLICKHEAT_ROOT.'version.php';
if ($f === false || is_null($f))
{
	echo sprintf(LANG_LATEST_KO, CLICKHEAT_VERSION), ': <iframe src="https://raw.githubusercontent.com/dugwood/clickheat/master/version.txt" frameborder="0" width="50" height="20" scrolling="no"></iframe> - <a href="http://www.dugwood.com/clickheat/index.html">ClickHeat</a>';
}
else
{
	fputs($f, "GET /dugwood/clickheat/master/version.txt HTTP/1.1\r\nHost: raw.githubusercontent.com\r\n");
	fputs($f, "Connection: close\r\n\r\n");
	while (!feof($f) && trim(fgets($f)) !== '')
	{

	}
	$latest = trim(fgets($f));
	fclose($f);
	if (CLICKHEAT_VERSION === $latest)
	{
		echo sprintf(LANG_LATEST_OK, $latest);
	}
	else
	{
		echo sprintf(LANG_LATEST_NO, CLICKHEAT_VERSION, $latest), ' <a href="https://www.dugwood.com/clickheat/index.html">ClickHeat</a>';
	}
}
