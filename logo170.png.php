<?php
/**
 * ClickHeat : crée sur disque et renvoie le logo PNG 80x15 / creates on disk and returns the PNG 80x15 logo
 * 
 * @author Yvan Taviaud - LabsMedia - www.labsmedia.com
 * @since 31/10/2006
**/

define('CLICKHEAT_GREY_COLOR', 255);
define('CLICKHEAT_LOW_COLOR', 0);
define('CLICKHEAT_HIGH_COLOR', 255);

/** Image creation */
$img = imagecreatetruecolor(170, 35);
$white = imagecolorallocate($img, 255, 255, 255);
$blue = imagecolorallocate($img, 70, 70, 255);
$red = imagecolorallocate($img, 255, 70, 70);
$black = imagecolorallocate($img, 0, 0, 0);
$shadow = imagecolorallocate($img, 200, 200, 255);
//imagefill($img, 0, 0, $shadow);

/**
 * Colors creation :
 * grey	=> deep blue (rgB)	=> light blue (rGB)	=> green (rGb)		=> yellow (RGb)		=> red (Rgb)
 * 0	   $colorLevels[0]	   $colorLevels[1]	   $colorLevels[2]	   $colorLevels[3]	   128
**/
$colorLevels = array(30, 55, 65, 75);
$colors = array();
for ($i = 0; $i < 128; $i++)
{
	/** Red */
	if ($i < $colorLevels[0])
	{
		$colors[$i][0] = CLICKHEAT_GREY_COLOR + (CLICKHEAT_LOW_COLOR - CLICKHEAT_GREY_COLOR) * $i / $colorLevels[0];
	}
	elseif ($i < $colorLevels[2])
	{
		$colors[$i][0] = CLICKHEAT_LOW_COLOR;
	}
	elseif ($i < $colorLevels[3])
	{
		$colors[$i][0] = CLICKHEAT_LOW_COLOR + (CLICKHEAT_HIGH_COLOR - CLICKHEAT_LOW_COLOR) * ($i - $colorLevels[2]) / ($colorLevels[3] - $colorLevels[2]);
	}
	else
	{
		$colors[$i][0] = CLICKHEAT_HIGH_COLOR;
	}
	/** Green */
	if ($i < $colorLevels[0])
	{
		$colors[$i][1] = CLICKHEAT_GREY_COLOR + (CLICKHEAT_LOW_COLOR - CLICKHEAT_GREY_COLOR) * $i / $colorLevels[0];
	}
	elseif ($i < $colorLevels[1])
	{
		$colors[$i][1] = CLICKHEAT_LOW_COLOR + (CLICKHEAT_HIGH_COLOR - CLICKHEAT_LOW_COLOR) * ($i - $colorLevels[0]) / ($colorLevels[1] - $colorLevels[0]);
	}
	elseif ($i < $colorLevels[3])
	{
		$colors[$i][1] = CLICKHEAT_HIGH_COLOR;
	}
	else
	{
		$colors[$i][1] = CLICKHEAT_HIGH_COLOR - (CLICKHEAT_HIGH_COLOR - CLICKHEAT_LOW_COLOR) * ($i - $colorLevels[3]) / (127 - $colorLevels[3]);
	}
	/** Blue */
	if ($i < $colorLevels[0])
	{
		$colors[$i][2] = CLICKHEAT_GREY_COLOR + (CLICKHEAT_HIGH_COLOR - CLICKHEAT_GREY_COLOR) * $i / $colorLevels[0];
	}
	elseif ($i < $colorLevels[1])
	{
		$colors[$i][2] = CLICKHEAT_HIGH_COLOR;
	}
	elseif ($i < $colorLevels[2])
	{
		$colors[$i][2] = CLICKHEAT_HIGH_COLOR - (CLICKHEAT_HIGH_COLOR - CLICKHEAT_LOW_COLOR) * ($i - $colorLevels[1]) / ($colorLevels[2] - $colorLevels[1]);
	}
	else
	{
		$colors[$i][2] = CLICKHEAT_LOW_COLOR;
	}
}

$max = 35;
//$blur = imagecreatetruecolor(50, 50);
//$white = imagecolorallocate($blur, 255, 255, 255);
imagefill($img, 0, 0, $white);
/**
 * Courbe en forme de poire (pear-like curve)
 * http://www.mathcurve.com/courbes2d/piriforme/piriforme.shtml
**/
for ($i = 1; $i <= $max; $i++)
{
	$a = $max - $i + 1;
	$b = $a * (2 - $i / $max);
	$color = imagecolorallocate($img, $colors[ceil($i * 127 / $max)][0], $colors[ceil($i * 127 / $max)][1], $colors[ceil($i * 127 / $max)][2]);
	for ($t = 0; $t < 360; $t++)
	{
		imagesetpixel($img, 8.5 + $a * $a / $b * cos($t) * cos($t) * cos($t) * sin($t), min($max - 1, $max - $a + $a * cos($t) * cos($t)), $color);
	}
}

$string = 'ClickHeat';
$x = 18;
$y = 32;
$font = '/mnt/win_dd/WINDOWS/Fonts/verdana.ttf';
if (!file_exists($font))
{
	exit('Font not found');
}
$size = 25;
for ($i = 0, $max = strlen($string); $i < $max; $i++)
{
	$info = imagettfbbox($size, 0, $font, $string[$i]);
	if (strtolower($string[$i]) === 'h')
	{
		$font = '/mnt/win_dd/WINDOWS/Fonts/verdanab.ttf';
	}
	imagettftext($img, $size, 0, $x + 1, $y + 1, $shadow, $font, $string[$i]);
	imagettftext($img, $size, 0, $x, $y, $blue, $font, $string[$i]);
	$x += $info[2] - $info[0] + 3;
	if (strtolower($string[$i]) === 'c' || strtolower($string[$i]) === 'k')
	{
		$x -= 2;
	}
	if (strtolower($string[$i]) === 'h')
	{
		$x += 4;
	}
}

header('Content-Type: image/png');
imagepng($img, './images/logo170.png');
imagepng($img);
imagedestroy($img);
?>