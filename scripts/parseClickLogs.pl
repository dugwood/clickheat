#!/usr/bin/perl -w
###
## ClickHeat : Apache log parser
## 
## Developpement effectue pour/developed for WAT (www.wat.tv)
## WAT - Partagez votre univers (vid�os, musique, photos) entre amis
## WAT - Share your videos, music and photos with your friends
## Si vous appreciez ce script, utilisez le site WAT !
## If you like this script, use WAT !
##
## Plus d'informations : http://www.labsmedia.fr/clickheat/performance.html
## More information: http://www.labsmedia.com/clickheat/performance.html
##
## @author Vincent Audino pour WAT - www.wat.tv
## @since 03/28/2007
## @update 31/07/2007 - Yvan Taviaud : correction du paramètre «p=» qui devient «g=»
###


use Date::Manip;
use strict;

my $date;
my $page;
my $x;
my $y;
my $w;
my $c;
my $browser;
my $random;
my $referer;
my %fdcache;
my $maxcached = 10;
my $currentfd;


if ($#ARGV < 1)
{
    die "usage: ./parseClickLogs.pl apache_logs_file dest_path [domain_ignored]\n";
}

my $srcFile = $ARGV[0];
my $destPath = $ARGV[1] . '/';
my $ignored = defined($ARGV[2]) ? $ARGV[2] : '';

mkdir($destPath) if (!-d $destPath);

open(LOGFILE, $srcFile) or die("Impossible d'ouvrir le fichier ".$srcFile);

while(<LOGFILE>)
{
    if (/.*clickheat.*/ 
	&& ($ignored eq "" || !/.*http:\/\/.*$ignored.*/) )
    {
	if (s/.*\[(.*)\].*g=(.*)&x=([0-9]*)&y=([0-9]*)&w=([0-9]*)&b=(.*)&c=([0-9])&random=(.*) HTTP.* \"(http:\/\/.*)\" \".*\" .*/$1, $2, $3, $4, $5, $6, $7, $8, $9/)
	{
	    $date = ParseDate($1); $page = $2; $x = $3; $y = $4; $w = $5; $browser = $6; $c = $7; $random  = $8; $referer = $9;
	    $page = 'none' if ($page eq '');

	    $date =~ s#^(....)(..)(..)(..):(..):(..)#$1-$2-$3#;
	    
	    my $writeDir = $destPath.$page;
	    my $writeFile = $writeDir.'/'.$date.'.log';
	    mkdir($writeDir) if (!-d $destPath.$page);


	    if (defined($fdcache{$writeFile}))
	    {
		$currentfd = $fdcache{$writeFile};
	    }
	    else
	    {
		open(my $fd, ">>".$writeFile) or die ("Erreur d'ouverture de " . $writeFile);
		chmod 0606, $writeFile;
		
		if (keys(%fdcache) == $maxcached)
		{
		    # cache plein
		    # on vire le dernier
		    my @fdcache = %fdcache;
		    close pop @fdcache;
		    pop @fdcache;
		    %fdcache = @fdcache;
		}
		
		$fdcache{$writeFile} = $fd;
		
		$currentfd = $fdcache{$writeFile};
	    }
	    print $currentfd $x.'|'.$y.'|'.$w.'|'.$browser.'|'.$c."\n";


	    #
            # REFERRER
	    #
	    if ($referer ne '')
	    {
		$writeFile = $writeDir . '/url.txt';
		
		if (!-f $writeFile)
		{
		    open(my $fd,">".$writeFile) or die ("Erreur d'ouverture de " . $writeFile) ;		    
		    chmod 0606, $writeFile;
		    print $fd $referer.'>0>0>0';
		    close $fd;
		}
	    }
	 }
    }
}

while( my ($k, $v) = each %fdcache )
{
    close $v;
}

close LOGFILE;

