<?php
/**
 * ClickHeat : Classe de génération des cartes depuis un fichier de coordonnées X,Y / Maps generation class from a X,Y coords file
 * 
 * Cette classe est VOLONTAIREMENT écrite pour PHP 4
 * This class is VOLUNTARILY written for PHP 4
 * 
 * Utilisation : jettez un oeil au répertoire /examples/
 * Usage: have a look into /examples/ directory
 * 
 * @author Yvan Taviaud - LabsMedia - www.labsmedia.com
 * @since 19/05/2007
**/

class HeatmapFromFile extends Heatmap
{
	/** @var array $files Fichiers de suivi à étudier / Logfiles to use */
	var $files = array();
	/** @var string $regular Expression régulière pour lire les enregistrements du fichier / Regular expression to read file entries */
	var $regular = '/^(\d+),(\d+)$/m';

	/**
	 * Add a file to parse and check existence
	 *
	 * @param string $file
	 */
	function addFile($file)
	{
		if (file_exists($file))
		{
			$this->files[] = $file;
		}
	}

	/**
	 * Do some tasks before drawing (database connection...)
	**/
	function startDrawing()
	{
		return true;
	}

	/**
	 * Find pixels coords and draw these on the current image
	 *
	 * @param integer $image Number of the image (to be used with $this->height)
	 * @return boolean Success
	**/
	function drawPixels($image)
	{
		if (count($this->files) === 0)
		{
			return $this->raiseError('No files to be used');
		}
		for ($file = 0; $file < count($this->files); $file++)
		{
			/** Read clicks in the log file */
			$f = @fopen($this->files[$file], 'r');
			if ($f === false)
			{
				return $this->raiseError('Can\'t open file: '.$this->files[$file]);
			}

			$buffer = '';
			$count = 0;
			while (true)
			{
				$buffer .= fgets($f, 1024);
				/** Grouping by 1000 clicks */
				if (feof($f) === false && $count++ !== 1000)
				{
					continue;
				}
				/** Do a regular match (faster and easier for large volume of data) */
				preg_match_all($this->regular, $buffer, $clicks);
				$buffer = '';

				for ($i = 0, $max = count($clicks[1]); $i < $max; $i++)
				{
					$x = (int) $clicks[1][$i];
					$y = (int) ($clicks[2][$i] - $image * $this->height);
					if ($x < 0 || $x >= $this->width)
					{
						continue;
					}
					if ($y >= 0 && $y < $this->height)
					{
						/** Apply a calculus for the step, with increases the speed of rendering : step = 3, then pixel is drawn at x = 2 (center of a 3x3 square) */
						$x -= $x % $this->step - $this->startStep;
						$y -= $y % $this->step - $this->startStep;
						/** Add 1 to the current color of this pixel (color which represents the sum of clicks on this pixel) */
						$color = imagecolorat($this->image, $x, $y) + 1;
						imagesetpixel($this->image, $x, $y, $color);
						$this->maxClicks = max($this->maxClicks, $color);
					}
					if ($image === 0)
					{
						/** Looking for the maximum height of click */
						$this->maxY = max($y, $this->maxY);
					}
				}
				unset($clicks);

				if ($count !== 1001)
				{
					break;
				}
				$count = 0;
			}
			fclose($f);
		}
		return true;
	}
		
	/**
	 * Do some cleaning or ending tasks (close database, reset array...)
	**/
	function finishDrawing()
	{
		$this->files = array();
		return true;
	}
}
?>