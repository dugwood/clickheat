#!/usr/bin/php5-cgi -q
<?php
/**
 * Compress a JS file using YUI-compressor
 * 
 * @author Yvan Taviaud
 * @since 29/11/2007
**/
$str = file_get_contents(dirname(__FILE__).'/../js/clickheat-original.js');
if ($str === false)
{
	exit('No JS file, really strange!');
}
Syntax_Compressor::js($str);

file_put_contents(dirname(__FILE__).'/../js/clickheat.js', '/** Code by www.labsmedia.com */'.$str);
?>
