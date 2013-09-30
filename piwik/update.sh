#!/bin/sh
PIWIKDIR=/data/projects/piwik/plugins/ClickHeat
LMDIR=/data/projects/clickheat
FILES="*.html *.php js/ classes/ examples/ styles/ images/ languages/ scripts/ INSTALL LISEZMOI VERSION LICENSE README"

cd $LMDIR
if [ "$PWD" != "$LMDIR" ]; then
	echo "Pas le bon répertoire...";
	exit 0;
fi;

for FILE in $FILES;
do
	echo "Remplacement de $FILE";
	cp -R "$FILE" "$PIWIKDIR/libs/";
done;

LMDIR=/data/projects/clickheat/piwik
FILES="*.php templates/view.tpl .htaccess"

cd $LMDIR
if [ "$PWD" != "$LMDIR" ]; then
	echo "Pas le bon répertoire...";
	exit 0;
fi;

for FILE in $FILES;
do
	echo "Remplacement de $FILE";
	rm "$PIWIKDIR/$FILE"; # on le supprime car il peut être un lien symbolique pour développer plus rapidement
	cp "$FILE" "$PIWIKDIR/$FILE";
done;

# Renommage du répertoire de langues
rm "$PIWIKDIR/lang/" -rf;
mv "$PIWIKDIR/libs/languages" "$PIWIKDIR/lang";

# Ajout des droits
find $PIWIKDIR -type f -exec chmod 0644 {} \;
find $PIWIKDIR -type d -exec chmod 0755 {} \;
