#!/bin/sh

# D'abord, on met à jour le code pour être sûr !
./update.sh

DIR="/data/projects/piwik/plugins"
cd $DIR
if [ "$PWD" != "$DIR" ]; then
	echo "Pas le bon répertoire...";
	exit 0;
fi;
tar --owner www-data --group www-data -cvzf /data/projects/clickheat/piwik/piwik-clickheat.tar.gz ClickHeat