#!/bin/sh
PIWIKDIR=/data/projects/piwik/plugins/ClickHeat
LMBASEDIR=/data/projects/clickheat
LMDIR=$LMBASEDIR
FILES="*.html *.php js/ classes/ examples/ styles/ images/ languages/ scripts/"

cd $LMDIR
if [ "$PWD" != "$LMDIR" ]; then
	echo "Pas le bon répertoire...";
	exit 0;
fi;
mkdir $PIWIKDIR/libs
for FILE in $FILES;
do
	echo "Remplacement de $FILE";
	rm -rf "$PIWIKDIR/libs/$FILE"; # on le supprime car il peut être un lien symbolique pour développer plus rapidement
	cp -R "$FILE" "$PIWIKDIR/libs/";
done;

FILES="LISEZMOI VERSION LICENSE README"

for FILE in $FILES;
do
	echo "Remplacement de $FILE";
	rm -rf "$PIWIKDIR/libs/$FILE"; # on le supprime car il peut être un lien symbolique pour développer plus rapidement
	cp -R "$FILE" "$PIWIKDIR/libs/";
done;

LMDIR="$LMBASEDIR/piwik"
FILES="*.php templates lang .htaccess plugin.json Menu.php config.piwik.php README.md screenshots INSTALL"

cd $LMDIR
if [ "$PWD" != "$LMDIR" ]; then
	echo "Pas le bon répertoire...";
	exit 0;
fi;
for FILE in $FILES;
do
	echo "Remplacement de $FILE";
	rm -rf "$PIWIKDIR/$FILE"; # on le supprime car il peut être un lien symbolique pour développer plus rapidement
	cp -R "$FILE" "$PIWIKDIR/$FILE";
done;
cp config.piwik.php "$PIWIKDIR/clickheat.php"

# Ajout des droits
find $PIWIKDIR -type f -exec chmod 0644 {} \;
find $PIWIKDIR -type d -exec chmod 0755 {} \;
