<?php
/**
 * ClickHeat: Fichier de langue: allemand
 * 
 * @author Frank Schumacher - www.frank-schumacher.de
 * @since 18/08/2009
**/

/** Fix for Piwik bad behaviour */
if (defined('LANG_USER'))
{
	return true;
}

define('LANG_USER', 'Benutzer');
define('LANG_PASSWORD', 'Passwort');
define('LANG_LOGIN', 'Anmeldung');
define('LANG_LOGIN_ERROR', 'Anmeldefehler - falscher Benutzer oder Passwort');
define('LANG_LOGOUT', 'Abmelden');
define('LANG_UNKNOWN_DIR', 'Kann das aktuelle Verzeichnis nicht bestimmen. Wenden Sie sich bitte an uns');
define('LANG_DAYS', 'M,D,M,D,F,S,S');
define('LANG_RANGE', 'Tag,Woche,Monat');
define('LANG_MONTHS', '0,Januar,Februar,März,April,Mai,Juni,Juli,August,September,Oktober,November,Dezember');
define('LANG_SITE', 'Website');
define('LANG_GROUP', 'Gruppe');
define('LANG_BROWSER', 'Browser');
define('LANG_ALL', 'Alle');
define('LANG_UNKNOWN', 'Andere/unbekannt');
define('LANG_EXAMPLE_URL', 'Webseite');
define('LANG_LAYOUT', 'Gruppen Layout');
define('LANG_LAYOUT_FIXED', 'Fester Inhalt/Menü');
define('LANG_LAYOUT_LIQUID', 'Variabler Inhalt/Menü (nutzt automatisch den gesamten Platz)');
define('LANG_LAYOUT_NONE', 'Rand variabel (ohne Inhalt)');
define('LANG_LAYOUT_0', 'Variabler Inhalt/Menü');
define('LANG_LAYOUT_1', 'Festes Menü links, variabler Inhalt');
define('LANG_LAYOUT_2', 'Fester zentrierter Inhalt (linker und rechter Rand automatisch)');
define('LANG_LAYOUT_3', 'Fester Inhalt links ausgerichtet (Rechter Rand automatisch)');
define('LANG_LAYOUT_4', 'Festes Menü links, variabler Inhalt');
define('LANG_LAYOUT_5', 'Festes Menü links und rechts, Inhalt variabel');
define('LANG_LAYOUT_6', 'Fester Inhalt rechts ausgerichtet (Linker Rand automatisch)');
define('LANG_LAYOUT_LEFT', 'Feste Breite links (Pixel)');
define('LANG_LAYOUT_CENTER', 'Feste Breite Mitte (Pixel)');
define('LANG_LAYOUT_RIGHT', 'Feste Breite rechts (Pixel)');
define('LANG_SCREENSIZE', 'Auflösung');
define('LANG_HEATMAP', 'Zeige als Wärmekarte');
define('LANG_LATEST_CHECK', 'Update');
define('LANG_LATEST_KO', 'Kann die neueste verfügbare Version nicht laden. Ihre ist %s, die neueste Version auf der Labsmedia\'s Webseite ist');
define('LANG_LATEST_OK', 'Sie haben die neueste verfügbare Version (%s)');
define('LANG_LATEST_NO', 'Ihre Version (%s) ist nicht die aktuellste Version (%s). Laden Sie die aktuellste Version von unserer Webseite:');
define('LANG_LOG_MY_CLICKS', 'Eigene Klicks speichern?');
define('LANG_JAVASCRIPT_ADMIN_COOKIE', 'Um die Statistik nicht zu verfälschen,\nsollten Sie Ihre eigenen Klicks nicht speichern\n\nOK = Eigene Klicks speichern\nAbbrechen = Eigene Klicks nicht speichern');
define('LANG_JAVASCRIPT', 'Fügen Sie den unten genannten Javascript-Code in die Webseiten ein, die Sie überwachen wollen.');
define('LANG_JAVASCRIPT_IMAGE', 'Zeigt das ClickHead-Logo auf der Seite an, die untersucht wird: ');
define('LANG_JAVASCRIPT_SHORT', 'Kompakter Code (3 Zeilen)');
define('LANG_JAVASCRIPT_QUOTA', 'Max. Klicks pro Seite und Besucher. Weitere Klicks werden nicht gespeichert (0 = kein Limit, 3 ist Standard)');
define('LANG_JAVASCRIPT_SITE', 'Website-Name (erlaubte Zeichen: A-Z, a-z, 0-9, Unterstrich, Bindestrich, Punkt)');
define('LANG_JAVASCRIPT_GROUP', 'Gruppenname - zum Gruppieren gleicher Seiten für eine einfachere Analyse');
define('LANG_JAVASCRIPT_GROUP0', 'Stichwort');
define('LANG_JAVASCRIPT_GROUP1', 'erlaubte Zeichen: A-Z, a-z, 0-9, Unterstrich, Bindestrich, Punkt');
define('LANG_JAVASCRIPT_GROUP2', 'Name der Webseite verwenden (<a href="http://www.labsmedia.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">nicht empfohlen</a>)');
define('LANG_JAVASCRIPT_GROUP3', 'Internetadresse der Webseite verwenden (<a href="http://www.labsmedia.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">nicht empfohlen</a>)');
define('LANG_JAVASCRIPT_PASTE', 'Kopieren und fügen Sie den Code unten auf Ihren Seiten ein, kurz vor Ende der Seite (vor dem &lt;/body&gt;-Tag):');
define('LANG_JAVASCRIPT_DEBUG', 'Sobald der Code auf Ihren Seiten eingefügt ist, vergessen Sie nicht zu testen, ob der Code korrekt funktioniert. Sie testen Ihre Seite mit dem <span class="error">debugclickheat</span>-Parameter. Beispiel: für http://www.site.com/index.html geben Sie http://www.site.com/index.html <span class="error">?debugclickheat</span> ein. Wenn Sie auf ein Problem stoßen sollten, kontaktieren Sie uns.');
define('LANG_NO_CLICK_BELOW', 'No clicks recorded beneath this line'); // Leave this line in English please
define('LANG_ERROR_GROUP', 'Gruppe unbekannt. _JAVASCRIPT_');
define('LANG_ERROR_DATA', 'Keine Logdaten für die gewählte Dauer (ggfs. Filter entfernen: Browser, Auflösung). _JAVASCRIPT_');
define('LANG_ERROR_JAVASCRIPT', 'Haben Sie den Javascript-Code richtig auf Ihren Webseiten installiert?');
define('LANG_ERROR_FILE', 'Kann Logdatei nicht öffnen');
define('LANG_ERROR_SCREEN', 'Keine Standardauflösung');
define('LANG_ERROR_LOADING', 'Erzeuge Grafik, bitte warten...');
define('LANG_ERROR_FIXED', 'Alle Breiten sind fest, das ist nicht möglich. Bitte ändern Sie oben eine Breite Ihres Layouts.');
define('LANG_DEFAULT', 'Vorgabe');
define('LANG_CHECKS', 'Vorübergehende Prüfung');
define('LANG_CHECK_WRITABLE', 'Schreibrechte im Konfigurations-Verzeichnis');
define('LANG_CHECK_NOT_WRITABLE', 'PHP hat keine Schreibrechte im Konfigurations-Verzeichnis');
define('LANG_CHECK_GD', 'GD Grafik-Bibliothek');
define('LANG_CHECK_GD_IMG', 'imagecreatetruecolor() nicht verfügbar. Kann Bild nicht (mit guter Qualität) erstellen. Überprüfen Sie, ob GD installiert ist.');
define('LANG_CHECK_GD_ALPHA', 'imagecolorallocatealpha() nicht verfügbar. Kann transparentes Bild nicht erstellen (Sie können diesen Fehler ignorieren, aber Transparanz wird empfohlen).');
define('LANG_CHECK_GD_PNG', 'imagepng() nicht verfügbar. Kann keine PNG-Bilder erstellen.');
define('LANG_CHECKS_OK', 'Nächster Schritt: Konfiguration');
define('LANG_CHECKS_KO', 'Einer oder mehrere Tests sind fehlgeschlagen. Bitte korrigieren Sie die Probleme und laden die Seite neu.');
define('LANG_CONFIG', 'Konfiguration');
define('LANG_CONFIG_HEADER_HEATMAP', 'Einstellungen Wärmekarte');
define('LANG_CONFIG_HEADER_DISPLAY', 'Hauptansicht');
define('LANG_CONFIG_HEADER_SECURITY', 'Sicherheit');
define('LANG_CONFIG_HEADER_LOGIN', 'Zugangsdaten');
define('LANG_CONFIG_LOGPATH', 'Logdateien-Verzeichnis');
define('LANG_CONFIG_LOGPATH_DIR', 'Logdateien-Verzeichnis existiert nicht. Bitte erstellen.');
define('LANG_CONFIG_LOGPATH_KO', 'Logdateien-Verzeichnis ist nicht beschreibbar. Bitte richten Sie Schreibberechtigung für PHP-Benutzer ein.');
define('LANG_CONFIG_CACHEPATH', 'Verzeichnis für Temp-Dateien');
define('LANG_CONFIG_CACHEPATH_DIR', 'Verzeichnis für Temp-Dateien existiert nicht. Bitte erstellen.');
define('LANG_CONFIG_CACHEPATH_KO', 'Verzeichnis für Temp-Dateien ist nicht beschreibbar. Bitte richten Sie Schreibberechtigung für PHP-Benutzer ein.');
define('LANG_CONFIG_REFERERS', 'Domain-Namen (getrennt durch Komma) von denen Klicks auf diesen Server mitgeloggt werden.');
define('LANG_CONFIG_GROUPS', 'Gruppen-Namen (getrennt durch Komma) von denen Klicks auf diesen Server mitgeloggt werden.');
define('LANG_CONFIG_FILESIZE', 'Maximale Größe der Sicherungsdateien in KB (1000 Klicks sind etwa 25KB, 0 = keine Größenbeschränkung)');
define('LANG_CONFIG_CHECK', 'Konfiguration prüfen');
define('LANG_CONFIG_MEMORY', 'Speicherlimit (Vorgabe php.ini Wert: %dMB. Grenzen: von %d bis %dMB. <a href="http://www.labsmedia.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">Vorsicht mit zu hohen Werten</a>)');
define('LANG_CONFIG_MEMORY_KO', 'Bitte bleiben Sie im festgelegten Bereich.');
define('LANG_CONFIG_STEP', 'Klicks in Bereich von X*X Pixel zusammenfassen (beschleunigt das Anzeigen der Wärmekarte)');
define('LANG_CONFIG_STEP_KO', 'Bereich kann nicht kleiner als 1x1 Pixel sein.');
define('LANG_CONFIG_DOT', 'Größe der Punkte auf der Wärmekarte (Pixel)');
define('LANG_CONFIG_DOT_KO', 'Punktgröße kann nicht 0 sein.');
define('LANG_CONFIG_PALETTE', 'Wenn Sie nur rote Quadrate in der Wärmekarte sehen, aktivieren Sie dieses Kontrollkästchen');
define('LANG_CONFIG_HEATMAP', 'Als Wärmekarte anzeigen (stattdessen Klick-Karte anzeigen)');
define('LANG_CONFIG_FLASHES', 'Objekte ausblenden'); 
define('LANG_CONFIG_IFRAMES', 'Bilder ausblenden'); 
define('LANG_CONFIG_YESTERDAY', 'Beim Start gestrige Statistik anzeigen (stattdessen Heute anzeigen)');
define('LANG_CONFIG_ALPHA', 'Transparenz (0 => 100)');
define('LANG_CONFIG_FLUSH', 'Automatisches Löschen der Daten die älter als x Tage sind (0 = alle Dateien behalten, nicht empfohlen)');
define('LANG_CONFIG_START', 'Erster Tag der Woche');
define('LANG_CONFIG_START_M', 'Montag');
define('LANG_CONFIG_START_S', 'Sonntag');
define('LANG_CONFIG_ADMIN_LOGIN', 'Administrator-Kennung');
define('LANG_CONFIG_ADMIN_PASS', 'Administrator-Passwort (bitte zweimal eingeben)');
define('LANG_CONFIG_VIEWER_LOGIN', 'Besucher-Kennung (falls leer, ist das Konto deaktiviert)');
define('LANG_CONFIG_VIEWER_PASS', 'Besucher-Passwort (bitte zweimal eingeben)');
define('LANG_CONFIG_LOGIN', 'Kennung muss mind. 4 Zeichen lang sein.');
define('LANG_CONFIG_PASS', 'Passwort ist leer');
define('LANG_CONFIG_MATCH', 'Keine Übereinstimmung der Passwörter.');
define('LANG_CONFIG_SAVE', 'Konfiguration speichern');
define('LANG_CLEANER_RUNNING', 'Säuberung wird ausgeführt...');
define('LANG_CLEANER_RUN', 'Säuberung beendet: %d Dateien und %d Verzeichnisse wurden gelöscht.');
define('LANG_CANCEL', 'Abbrechen');
define('LANG_UPGRADE', 'Upgrade');
define('LANG_UPGRADE_NEXT', 'Überprüfen Sie Ihre Konfiguration. Speichern Sie sie danach um das Upgrade zu beenden.');
?>
