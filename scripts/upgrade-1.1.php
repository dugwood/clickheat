<?php
/**
 * Upgrade from 1.1 to 1.2 : %% to be removed in urls
**/
$updates = 0;
if (!is_dir($clickheatConf['logPath']))
{
	return true;
}
$dir = dir($clickheatConf['logPath']);
while (($d = $dir->read()) !== false)
{
	if ($d === '.' || $d === '..' || !is_dir($dir->path.$d))
	{
		continue;
	}
	$subdir = dir($clickheatConf['logPath'].$d.'/');
	while (($f = $subdir->read()) !== false)
	{
		if ($f === '.' || $f === '..' || substr($f, 0, 2) !== '%%' || substr($f, -2) !== '%%')
		{
			continue;
		}
		if (substr($f, -5) === 'png%%' || substr($f, -6) === 'html%%')
		{
			if (@unlink($subdir->path.$f))
			{
				$updates++;
			}
			continue;
		}
		if (@rename($subdir->path.$f, $subdir->path.trim($f, '%')))
		{
			$updates++;
		}
	}
}
echo $updates.' files renamed/purged';
?>