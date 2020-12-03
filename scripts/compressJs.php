#!/usr/bin/php
<?php

use Dugwood\Core\Compression\Javascript;

/**
 * Compress a JS file using YUI-compressor
 *
 * @author Yvan Taviaud
 * @since 29/11/2007
 */
$str = file_get_contents(dirname(__FILE__).'/../js/clickheat-original.js');
if ($str === false)
{
	exit('No JS file, really strange!');
}
Javascript::compress($str);

file_put_contents(dirname(__FILE__).'/../js/clickheat.js', '/* dugwood.com - JS_IGNORE */'.$str);
