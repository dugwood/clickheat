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
$img = imagecreatetruecolor(180, 45);
$white = imagecolorallocate($img, 255, 255, 255);
$blue = imagecolorallocate($img, 70, 70, 255);
$red = imagecolorallocate($img, 255, 70, 70);
$black = imagecolorallocate($img, 0, 0, 0);
$shadow = imagecolorallocate($img, 200, 200, 255);
imagefill($img, 0, 0, $white);

/**
 * Colors creation :
 * grey	=> deep blue (rgB)	=> light blue (rGB)	=> green (rGb)		=> yellow (RGb)		=> red (Rgb)
 * 0	   $colorLevels[0]	   $colorLevels[1]	   $colorLevels[2]	   $colorLevels[3]	   128
**/
$colorLevels = array(0, 40, 45, 70, 100);
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

$max = 12;
$pixels = array(
'                 ***      ',
'              *****       ',
'            *****         ',
'          ******          ',
'         ******           ',
'       *******            ',
'      *******             ',
'      *******             ',
'     ********             ',
'    *********             ',
'   **********             ',
'   ***********            ',
'  *************           ',
'  **************          ',
' ****************         ',
' ******************       ',
' ********************     ',
'***********************   ',
'************************  ',
'************************* ',
'************************* ',
'**************************',
'**************************',
' *************************',
' *************************',
'  ************************',
'  ************************',
'   ***********************',
'    **********************',
'     ******************** ',
'      ******************* ',
'       ****************** ',
'         ***************  ',
'          **************  ',
'            ***********   ',
'              *********   ',
'                ******    ',
'                 *****    ',
'                 ****     ',
'                 ***      ',
'                 **       ',
'                *         ');
$mx = strlen($pixels[0]);
$my = count($pixels);
$blur = imagecreatetruecolor($mx + 2, $my + 2);
$white = imagecolorallocate($blur, 255, 255, 255);
imagefill($blur, 0, 0, $white);
for ($x = 0; $x < $mx; $x++)
{
	for ($y = 0; $y < $my; $y++)
	{
		if ($pixels[$y][$x] === '*')
		{
			imagesetpixel($blur, $x + 1, $y + 1, $black);
		}
	}
}

$previous = $white;
for ($i = 0; $i <= $max; $i++)
{
	$color = imagecolorallocate($blur, $colors[ceil($i * 127 / $max)][0], $colors[ceil($i * 127 / $max)][1], $colors[ceil($i * 127 / $max)][2]);
	for ($x = 1; $x < $mx + 1; $x++)
	{
		for ($y = 1; $y < $my + 1; $y++)
		{
			if (imagecolorat($blur, $x, $y) === $black)
			{
				if ($i === $max || imagecolorat($blur, $x + 1, $y) === $previous || imagecolorat($blur, $x - 1, $y) === $previous
				|| imagecolorat($blur, $x, $y + 1) === $previous || imagecolorat($blur, $x, $y - 1) === $previous)
				{
					imagesetpixel($blur, $x, $y, $color);
				}
			}
		}
	}
	$previous = $color;
}
$color = array();
$level = 1;
for ($x = 1; $x < $mx + 1; $x++)
{
	for ($y = 1; $y < $my + 1; $y++)
	{
		$color[0] = imagecolorsforindex($blur, imagecolorat($blur, $x, $y));
		if ($color[0]['red'] + $color[0]['green'] + $color[0]['blue'] === 765)
		{
			$color[1] = imagecolorsforindex($blur, imagecolorat($blur, $x + 1, $y));
			$color[2] = imagecolorsforindex($blur, imagecolorat($blur, $x - 1, $y));
			$color[3] = imagecolorsforindex($blur, imagecolorat($blur, $x, $y + 1));
			$color[4] = imagecolorsforindex($blur, imagecolorat($blur, $x, $y - 1));
			$col = imagecolorallocate($img, ceil(($level * $color[0]['red'] + $color[1]['red'] + $color[2]['red'] + $color[3]['red'] + $color[4]['red']) / ($level + 4)),
			ceil(($level * $color[0]['green'] + $color[1]['green'] + $color[2]['green'] + $color[3]['green'] + $color[4]['green']) / ($level + 4)),
			ceil(($level * $color[0]['blue'] + $color[1]['blue'] + $color[2]['blue'] + $color[3]['blue'] + $color[4]['blue']) / ($level + 4)));
		}
		else
		{
			$col = imagecolorallocate($img, $color[0]['red'], $color[0]['green'], $color[0]['blue']);
		}
		imagesetpixel($img, $x, $y, $col);
	}
}
imagedestroy($blur);

$string = 'ClickHeat';
$x = 28;
$font = '/home/yvan/.ies4linux/ie5/drive_c/windows/fonts/verdana.ttf';
$size = 25;
for ($i = 0, $max = strlen($string); $i < $max; $i++)
{
	$info = imagettfbbox($size, 0, $font, $string[$i]);
	if (strtolower($string[$i]) === 'h')
	{
		$font = '/home/yvan/.ies4linux/ie5/drive_c/windows/fonts/verdanab.ttf';
	}
	imagettftext($img, $size, 0, $x + 1, 36, $shadow, $font, $string[$i]);
	imagettftext($img, $size, 0, $x, 35, $blue, $font, $string[$i]);
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
imagepng($img, './images/logo.big.png');
imagepng($img);
imagedestroy($img);
?>