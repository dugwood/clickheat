#!/bin/sh
PIWIKDIR=/data/projects/piwik/plugins/ClickHeat
LMDIR=/data/projects/clickheat/piwik
FILES="ClickHeat.php Controller.php templates/view.tpl"

for FILE in $FILES;
do
	echo "Création d'un lien pour développement sur $FILE";
	rm "$PIWIKDIR/$FILE";
	ln -s "$LMDIR/$FILE" "$PIWIKDIR/$FILE";
done;
