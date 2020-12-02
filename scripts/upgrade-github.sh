#!/bin/sh
cd /home/projects/clickheat/
read -p "Nouvelle version : " VERSION

./scripts/compressJs.php

# Version du fichier :
echo "<?php define('CLICKHEAT_VERSION', '$VERSION');" > version.php
echo "$VERSION" > VERSION
echo "$VERSION" > version.txt
