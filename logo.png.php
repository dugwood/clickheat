<?php
/**
 * ClickHeat : crée sur disque et renvoie le logo PNG 80x15 / creates on disk and returns the PNG 80x15 logo
 * 
 * @author Yvan Taviaud - LabsMedia - www.labsmedia.com
 * @since 31/10/2006
**/

define('CLICKHEAT_LOW_COLOR', 0);
define('CLICKHEAT_HIGH_COLOR', 190);

/** Image creation */
$img = imagecreatetruecolor(80, 15);
$white = imagecolorallocate($img, 255, 255, 255);
$grey = imagecolorallocate($img, 120, 120, 120);
$black = imagecolorallocate($img, 0, 0, 0);

/** Colors creation : deep blue (rgB) => light blue (rGB) => green (rGb) => yellow (RGb) => red (Rgb), 20 colors between each of these */
for ($i = 0; $i < 80; $i++)
{
	/** Red */
	if ($i < 40)
	{
		$red = CLICKHEAT_LOW_COLOR;
	}
	elseif ($i < 60)
	{
		$red = CLICKHEAT_LOW_COLOR + (CLICKHEAT_HIGH_COLOR - CLICKHEAT_LOW_COLOR) * ($i - 40) / 20;
	}
	else
	{
		$red = CLICKHEAT_HIGH_COLOR;
	}
	/** Green */
	if ($i < 20)
	{
		$green = CLICKHEAT_LOW_COLOR + (CLICKHEAT_HIGH_COLOR - CLICKHEAT_LOW_COLOR) * $i / 20;
	}
	elseif ($i < 60)
	{
		$green = CLICKHEAT_HIGH_COLOR;
	}
	else
	{
		$green = CLICKHEAT_HIGH_COLOR - (CLICKHEAT_HIGH_COLOR - CLICKHEAT_LOW_COLOR) * ($i - 60) / 20;
	}
	/** Blue */
	if ($i < 20)
	{
		$blue = CLICKHEAT_HIGH_COLOR;
	}
	elseif ($i < 40)
	{
		$blue = CLICKHEAT_HIGH_COLOR - (CLICKHEAT_HIGH_COLOR - CLICKHEAT_LOW_COLOR) * ($i - 20) / 20;
	}
	else
	{
		$blue = CLICKHEAT_LOW_COLOR;
	}
	$colors[$i] = imagecolorallocate($img, ceil($red), ceil($green), ceil($blue));
}

/** Rainbow */
for ($i = 0; $i < 80; $i += 2)
{
	imageline($img, $i/2, 0, $i/2, 15, $colors[0]);
	imageline($img, $i/2 + 40, 0, $i/2 + 40, 15, $colors[$i]);
}
imagerectangle($img, 0, 0, 79, 14, $grey);
$pixels = array(
'                                                                                ',
' ############################################################################## ',
' #                                                                            # ',
' #                                                                            # ',
' #                                                                            # ',
' #      ##     #      #     ##     #  #        #  #    ###     ##     ###     # ',
' #     #  #    #      #    #  #    # #         #  #    #      #  #     #      # ',
' #     #       #      #    #       ##          ####    ##     ####     #      # ',
' #     #  #    #      #    #  #    # #         #  #    #      #  #     #      # ',
' #      ##     ###    #     ##     #  #        #  #    ###    #  #     #      # ',
' #                                                                            # ',
' #                                                                            # ',
' #                                                                            # ',
' ############################################################################## ',
'                                                                                ');
for ($x = 0; $x < 80; $x++)
{
	for ($y = 0; $y < 15; $y++)
	{
		if ($pixels[$y][$x] === '#')
		{
			imagesetpixel($img, $x, $y, $white);
		}
	}
}
header('Content-Type: image/png');
imagepng($img, './images/logo.png');
imagepng($img);
imagedestroy($img);
?>