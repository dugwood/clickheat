<?php

/**
 * ClickHeat : Classe de génération des cartes depuis une base de données MySQL / Maps generation class from a MySQL database
 *
 * Cette classe est VOLONTAIREMENT écrite pour PHP 4
 * This class is VOLUNTARILY written for PHP 4
 *
 * Utilisation : jettez un oeil au répertoire /examples/
 * Usage: have a look into /examples/ directory
 *
 * @author Yvan Taviaud - Dugwood - www.dugwood.com
 * @since 19/05/2007
 */
class HeatmapFromDatabase extends Heatmap
{
	/** @var string $host Hôte (serveur) MySQL / MySQL host (server) */
	var $host = 'localhost';
	/** @var string $user Utilisateur MySQL / MySQL user */
	var $user = '';
	/** @var string $password Mot de passe de l'utilisateur MySQL / MySQL user's password */
	var $password = '';
	/** @var string $database Nom de la base de données MySQL / MySQL database name */
	var $database = '';
	/** @var integer $limit Limite du nombre de résultats renvoyés par la requête à chaque appel / Maximum number of results returned by each request call */
	var $limit = 1000;
	/** @var resource $link Lien (interne) MySQL / MySQL (internal) link */
	var $link = false;
	/** @var string $query Requête renvoyant les coordonnées des clics / Clicks coordinates query */
	var $query = 'SELECT COORDS_X, COORDS_Y FROM CLICKS WHERE COORDS_Y BETWEEN %d AND %d';
	/** @var string $maxQuery Requête renvoyant la coordonnées Y maximale / Max Y coordinate query */
	var $maxQuery = 'SELECT MAX(COORDS_Y) FROM CLICKS';

	/**
	 * Do some tasks before drawing (database connection...)
	 */
	function startDrawing()
	{
		$this->link = @mysql_connect($this->host, $this->user, $this->password);
		if ($this->link === false)
		{
			return $this->raiseError('Database connection error: '.mysql_error());
		}
		if (mysql_select_db($this->database) === false)
		{
			return $this->raiseError('Database selection error: '.$this->database);
		}
		$result = mysql_query($this->maxQuery);
		if ($result === false)
		{
			return $this->raiseError('Query failed: '.mysql_error());
		}
		$max = mysql_fetch_row($result);
		$this->maxY = $max[0];
		mysql_free_result($result);
		return true;
	}

	/**
	 * Find pixels coords and draw these on the current image
	 *
	 * @param integer $image Number of the image (to be used with $this->height)
	 * @return boolean Success
	 */
	function drawPixels($image)
	{
		$limit = 0;
		do
		{
			/** Select with limit */
			$result = mysql_query(sprintf($this->query, $image * $this->height, ($image + 1) * $this->height - 1).' LIMIT '.$limit.','.$this->limit);
			if ($result === false)
			{
				return $this->raiseError('Query failed: '.mysql_error());
			}
			$count = mysql_num_rows($result);

			while ($click = mysql_fetch_row($result))
			{
				$x = (int) $click[0];
				$y = (int) ($click[1] - $image * $this->height);
				if ($x < 0 || $x >= $this->width)
				{
					continue;
				}
				/** Apply a calculus for the step, with increases the speed of rendering : step = 3, then pixel is drawn at x = 2 (center of a 3x3 square) */
				$x -= $x % $this->step - $this->startStep;
				$y -= $y % $this->step - $this->startStep;
				/** Add 1 to the current color of this pixel (color which represents the sum of clicks on this pixel) */
				$color = imagecolorat($this->image, $x, $y) + 1;
				imagesetpixel($this->image, $x, $y, $color);
				$this->maxClicks = max($this->maxClicks, $color);
				if ($image === 0)
				{
					/** Looking for the maximum height of click */
					$this->maxY = max($y, $this->maxY);
				}
			}
			/** Free resultset */
			mysql_free_result($result);

			$limit += $this->limit;
		}
		while ($count === $this->limit);
		return true;
	}

	/**
	 * Do some cleaning or ending tasks (close database, reset array...)
	 */
	function finishDrawing()
	{
		/** Close connection */
		mysql_close($this->link);
		return true;
	}

}
