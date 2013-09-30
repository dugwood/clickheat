#!/bin/sh
cd /data/projects/clickheat/
VERSION=`cat VERSION`
mkdir clickheat
rm clickheat-*.zip
./scripts/compressJs.php
cp -R *.html *.php js/ classes/ examples/ styles/ images/ languages/ scripts/ INSTALL LISEZMOI VERSION LICENSE README clickheat
# Version du fichier :
echo "<?php define('CLICKHEAT_VERSION', '$VERSION'); ?>" > clickheat/version.php
echo "<?php define('CLICKHEAT_VERSION', '$VERSION'); ?>" > version.php
echo "$VERSION" > version.txt
mkdir clickheat/config
echo "Deny From All" > clickheat/config/.htaccess
mkdir clickheat/cache
echo "Deny From All" > clickheat/cache/.htaccess
mkdir clickheat/logs
echo "Deny From All" > clickheat/logs/.htaccess
#tar -cvzf clickheat-$VERSION.tar.gz clickheat
#tar -cvjf clickheat-$VERSION.tar.bz2 clickheat
zip -qr clickheat-$VERSION.zip clickheat
rm clickheat/ -rf
