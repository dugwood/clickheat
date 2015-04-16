#!/bin/sh
PIWIKDIR=/var/www/piwik/scratch/plugins/ClickHeat
LMBASEDIR=/export/piwik/clickheat/piwik-clickheat
#PIWIKDIR=/data/projects/piwik/plugins/ClickHeat
#LMBASEDIR=/data/projects/clickheat/piwik
LMDIR=$LMBASEDIR
FILES="*.html *.php js/ classes/ examples/ styles/ images/ languages/ scripts/ INSTALL LISEZMOI VERSION LICENSE README"

cd $LMDIR
if [ "$PWD" != "$LMDIR" ]; then
	echo "Pas le bon répertoire...";
	exit 0;
fi;
mkdir $PIWIKDIR/libs
for FILE in $FILES;
do
	echo "Creation d'un lien pour developpement sur $FILE";
	ln -s "$LMDIR/$FILE" "$PIWIKDIR/libs/";
done;

LMDIR="$LMBASEDIR/piwik"
FILES="*.php templates lang .htaccess plugin.json"

cd $LMDIR
if [ "$PWD" != "$LMDIR" ]; then
	echo "Pas le bon répertoire...";
	exit 0;
fi;
for FILE in $FILES;
do
	echo "Creation d'un lien pour developpement sur $FILE";
	ln -s "$LMDIR/$FILE" "$PIWIKDIR/$FILE";
done;
cp -d config.piwik.php "$PIWIKDIR/clickheat.php"
