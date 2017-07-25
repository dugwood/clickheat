<?php
/**
 * Exemple d'utilisation de la classe HeatmapFromFile
 * Use example of HeatmapFromFile class
 * */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>ClickHeat | Examples</title>
	</head>
	<body>
		<?php
		exit('Enlevez cette ligne pour que ce fichier marche/Remove this line to make this file work');

		include './../classes/Heatmap.class.php';
		include './../classes/HeatmapFromFile.class.php';

		$heatmap = new HeatmapFromFile();
		/** Ajout d'un fichier à traiter / Adding of a file to parse */
		$heatmap->addFile('./coords.txt');
		/**
		 * Le format du fichier n'est pas "X,Y", on change donc l'expression régulière (plus d'infos ici : http://fr.php.net/manual/en/reference.pcre.pattern.syntax.php)
		 * File format isn't "X,Y", so we have to change regular expression (more information here : http://us.php.net/manual/en/reference.pcre.pattern.syntax.php)
		 *
		 * 1234,1234 => /^(\d+),(\d+)$/m
		 * 1234x1234 => /^(\d+)x(\d+)$/m
		 * 1234 1234 => /^(\d+) (\d+)$/m
		 * 1234(tab)1234 => /^(\d+)\t(\d+)$/m
		 * 1234,1234,(whatever/n'importe quoi) => /^(\d+),(\d+),.*$/m
		 * */
		$heatmap->regular = '/^(\d+)x(\d+)$/m';
		/** Fichiers temporaires / Temporary files */
		$heatmap->cache = '.';
		/** Fichiers générés / Generated files */
		$heatmap->path = '.';
		/** Fichier final / Final file */
		$heatmap->file = 'resultfromfile-%d.png';
		/**
		 * On force la hauteur finale (attention à la consommation mémoire dans ce cas !)
		 * Forcing final height (take care of the memory consumption in such case!)
		 * */
		$images = $heatmap->generate(200, 100);
		echo 'Résultats/Results: ';
		if ($images === false)
		{
			echo 'error: '.$heatmap->error;
		}
		else
		{
			echo '<pre>';
			print_r($images);
			echo '</pre>';

			echo '<br /><br /><p style="line-height:0;">';
			for ($i = 0; $i < $images['count']; $i++)
			{
				echo '<img src="', $images['filenames'][$i], '" width="', $images['width'], '" height="', $images['height'], '" alt=""/> Image ', $i, '<br />';
			}
			echo '</p>';
		}
		?>
	</body>
</html>