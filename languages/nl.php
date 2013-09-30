<?php
/**
 * 
 * 
 * @author Ton (fixed Google Translation) www.altijdzon.nl
 * @since 21/11/2008
**/

/** Fix for Piwik bad behaviour */
if (defined('LANG_USER'))
{
	return true;
}

define('LANG_USER', 'Gebruiker');
define('LANG_PASSWORD', 'Toegangscode');
define('LANG_LOGIN', 'Login');
define('LANG_LOGIN_ERROR', 'Login fout, verkeerde toegangscode');
define('LANG_LOGOUT', 'Logout');
define('LANG_UNKNOWN_DIR', 'Kan juiste directory niet definieren, aub neem contact op met ons');
define('LANG_DAYS', 'M,D,W,D,V,Z,Z');
define('LANG_RANGE', 'Dag,Week,Maand');
define('LANG_MONTHS', '0,Januari,Februari,Maart,April,Mei,Juni,Juli,Augustus,September,Oktober,November,December');
define('LANG_SITE', 'Website');
define('LANG_GROUP', 'Groep');
define('LANG_BROWSER', 'Browser');
define('LANG_ALL', 'Alles');
define('LANG_UNKNOWN', 'Ander/onbekend');
define('LANG_EXAMPLE_URL', 'Webpagina');
define('LANG_LAYOUT', 'Groeps layout');
define('LANG_LAYOUT_FIXED', 'Vaste inhoud/menu');
define('LANG_LAYOUT_LIQUID', 'Automatische inhoud/menu (automatisch aanpassen in de aanwezige ruimte)');
define('LANG_LAYOUT_NONE', 'Kantlijn (geen inhoud), automatisch');
define('LANG_LAYOUT_0', 'Automatiche inhoud en menu');
define('LANG_LAYOUT_1', 'Gefixeerd linker menu, automatische inhoud');
define('LANG_LAYOUT_2', 'Gefixeerde centraal geplaatste inhoud (autimatische linker en rechter kantlijn)');
define('LANG_LAYOUT_3', 'Gefixeerde inhoud aan linkerkant (automatische rechterkantlijn)');
define('LANG_LAYOUT_4', 'Gefixeerd rechter menu, automatische inhoud');
define('LANG_LAYOUT_5', 'Gefixeerde linker en rechter menus, automatische inhoud');
define('LANG_LAYOUT_6', 'Gefixeerde inhoud aan rechterkant (automatische linkerkantlijn)');
define('LANG_LAYOUT_LEFT', 'Gefixeerde linker breedte (pixels)');
define('LANG_LAYOUT_CENTER', 'Gefixeerde centrale/midden breedte (pixels)');
define('LANG_LAYOUT_RIGHT', 'Gefixeerde rechter breedte (pixels)');
define('LANG_SCREENSIZE', 'Scherm grootte');
define('LANG_HEATMAP', 'Heatmap en de doorzichtigheid');
define('LANG_LATEST_CHECK', 'Upgrade');
define('LANG_LATEST_KO', 'Kan dynamische gezien de laatst beschikbare versie niet vinden, de uwe is %s, voor de laatste versie ga naar de Dugwood webpagina');
define('LANG_LATEST_OK', 'U heeft de nieuwste versie (%s)');
define('LANG_LATEST_NO', 'Uw versie  (%s) is niet de laatste nieuwe (%s). U kunt de laatste nieuwe versie downloaden op onze website:');
define('LANG_LOG_MY_CLICKS', 'Registeer mijn kliks?');
define('LANG_JAVASCRIPT_ADMIN_COOKIE', 'Om verontreiniging van de statistieken te voorkomen,\nkunt u er voor kiezen om uw eigen kliks niet te registereen\n\nOK = registreer mijn kliks\nCancel = niet registreren van eigen kliks');
define('LANG_JAVASCRIPT', 'Javascript code moet geplakt worden op de paginas die u wilt bestuderen');
define('LANG_JAVASCRIPT_IMAGE', 'Clickheat logo laten zien op de bestudeerde pagina: ');
define('LANG_JAVASCRIPT_SHORT', 'Compacte code (alleen 3 regels)');
define('LANG_JAVASCRIPT_QUOTA', 'Maximum kliks per pagina en bezoeker, volgende kliks worden niet opgeslagen (0 = zonder limiet, 3 is een goede keuze)');
define('LANG_JAVASCRIPT_SITE', 'Website naam (toegestane karakters: A-Z, a-z, 0-9, underscore, koppelteken, punt)');
define('LANG_JAVASCRIPT_GROUP', 'Groeps naam, om dezelfde soort paginas te groeperen, voor een eenvoudigere analyse');
define('LANG_JAVASCRIPT_GROUP0', 'gebruik een zoekwoord');
define('LANG_JAVASCRIPT_GROUP1', 'toegestane karakters: A-Z, a-z, 0-9, underscore, koppelteken, punt');
define('LANG_JAVASCRIPT_GROUP2', 'gebruik de webpagina titel (<a href="http://www.Dugwood.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">niet aan te bevelen</a>)');
define('LANG_JAVASCRIPT_GROUP3', 'gebruik de webpagina URL (<a href="http://www.Dugwood.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">niet aan te bevelen</a>)');
define('LANG_JAVASCRIPT_PASTE', 'Kopier en plak de code hieronder op uw paginas, juist voor het einde van de pagina (before &lt;/body&gt; tag):');
define('LANG_JAVASCRIPT_DEBUG', 'Als de code op uw pagina geplakt is, vergeet dan niet om deze te testen om te kijken of alles goed werkt, door de pagina op te roepen met de parameter <span class="error">debugclickheat</span>. Bijvoorbeeld voor de pagina http://www.site.com/index.html roep op http://www.site.com/index.html<span class="error">?debugclickheat</span>. U zou een statusbericht moeten zien van de Clickheat. Als u een probleem heeft neem contact op met ons');
define('LANG_NO_CLICK_BELOW', 'No clicks recorded beneath this line'); // Leave this line in English please
define('LANG_ERROR_GROUP', 'Onbekende groep. _JAVASCRIPT_');
define('LANG_ERROR_DATA', 'Geen log voor de geselecteerde periode (probeer eerst filters te verwijderen, scherm, schermgrootte). _JAVASCRIPT_');
define('LANG_ERROR_JAVASCRIPT', 'Heeft u de Javascript code juist geinstalleerd op uw webpaginas?');
define('LANG_ERROR_FILE', 'Kan logfile niet open');
define('LANG_ERROR_SCREEN', 'Niet standaard scherm grootte');
define('LANG_ERROR_LOADING', 'Genereer afbeelding, aub wacht een moment...');
define('LANG_ERROR_FIXED', 'Alle breedtes zijn gefixeerd, dit is niet mogelijk. Aub verander een van bovenstaande layouts.');
define('LANG_DEFAULT', 'standaard');
define('LANG_CHECKS', 'Voorafgaande controles');
define('LANG_CHECK_WRITABLE', 'Schrijf toestemming in de configuratie directory');
define('LANG_CHECK_NOT_WRITABLE', 'PHP heeft geen schrijf permissie in de configuratie directory');
define('LANG_CHECK_GD', 'GD grafische bibliotheek');
define('LANG_CHECK_GD_IMG', 'imagecreatetruecolor() niet beschikbaar, kan geen afbeeldingen creeeren (met goede kwaliteit), controleer of GD geinstalleerd is');
define('LANG_CHECK_GD_ALPHA', 'imagecolorallocatealpha() niet beschikbaar, kan de doorzichtige afbeeldingen niet maken (u kunt dit bericht negeren, maar doorzichtigheid is aan te bevelen)');
define('LANG_CHECK_GD_PNG', 'imagepng() niet beschikbaar, kan geen PNG afbeeldingen maken, sorry');
define('LANG_CHECKS_OK', 'Volgende stap: configuratie');
define('LANG_CHECKS_KO', '1 of meerdere tests zijn mislukt. Aub corrigeer de problemen en ververs de pagina.');
define('LANG_CONFIG', 'Configuratie');
define('LANG_CONFIG_HEADER_HEATMAP', 'Heatmap afbeelding');
define('LANG_CONFIG_HEADER_DISPLAY', 'Hoofd scherm');
define('LANG_CONFIG_HEADER_SECURITY', 'Beveiliging');
define('LANG_CONFIG_HEADER_LOGIN', 'Login parameters');
define('LANG_CONFIG_LOGPATH', 'Logfiles directory');
define('LANG_CONFIG_LOGPATH_DIR', 'Logfiles directory bestaat niet. Aub deze aanmaken');
define('LANG_CONFIG_LOGPATH_KO', 'Logfiles directory heeft geen schrjf toestemming, geef deze aub schrijf toestemming voor de PHP gebruiker');
define('LANG_CONFIG_CACHEPATH', 'Directory met tijdelijke bestanden');
define('LANG_CONFIG_CACHEPATH_DIR', 'Directory met tijdelijke bestanden bestaat niet. Aub aanmaken');
define('LANG_CONFIG_CACHEPATH_KO', 'Directory met tijdelijke bestanden heeft geen schrijf toestemming, aub geef deze toestemming voor de PHP gebruiker');
define('LANG_CONFIG_REFERERS', 'Domein namen (gescheiden door commas)  welke toegestaan zijn voor kliks op deze server');
define('LANG_CONFIG_GROUPS', 'Groeps namen (gescheiden door commas) welke toegestaan zijn voor kliks op deze server');
define('LANG_CONFIG_FILESIZE', 'Maximum grootte logbestand (in KB) van een groep over 1 dag (1000 kliks zijn ongeveer 25KB, 0 = geen limit)');
define('LANG_CONFIG_CHECK', 'Controleer configuratie');
define('LANG_CONFIG_MEMORY', 'Geheugen limit standaard php.ini waarde: %dMB, limits: van %d tot %dMB, maar <a href="http://www.Dugwood.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">voorzichtig met hoge waardes</a>)');
define('LANG_CONFIG_MEMORY_KO', 'blijf aub in de specifieke waarde');
define('LANG_CONFIG_STEP', 'Kliks gegroepeerd bij X*X zones (versneld scherm van de heatmappen)');
define('LANG_CONFIG_STEP_KO', 'zones kunnen niet onder 1x1 pixel zijn');
define('LANG_CONFIG_DOT', 'Heatmaps punt maat (pixels)');
define('LANG_CONFIG_DOT_KO', 'punt maat kan geen 0 zijn');
define('LANG_CONFIG_PALETTE', 'als u rode vierkantjes ziet op de heatmap check deze box');
define('LANG_CONFIG_HEATMAP', 'Laat zien de  heatmap (inplaats van klik map)');
define('LANG_CONFIG_FLASHES', 'Verberg &lt;Flash&gt; objects'); 
define('LANG_CONFIG_IFRAMES', 'Verberg &lt;iframe&gt; frames'); 
define('LANG_CONFIG_YESTERDAY', 'Laten zien statistieken van gisteren vanaf het begin (inplaats van vandaag)');
define('LANG_CONFIG_ALPHA', 'Doorzichtigheids niveau (0 => 100)');
define('LANG_CONFIG_FLUSH', 'Automatisch doorspoelen van statistieken ouder dan X dagen (0 = bewaar alle bestanden, niet te adviseren)');
define('LANG_CONFIG_START', '1e dag van de week');
define('LANG_CONFIG_START_M', 'Maandag');
define('LANG_CONFIG_START_S', 'Zondag');
define('LANG_CONFIG_ADMIN_LOGIN', 'Identificatie van administrator');
define('LANG_CONFIG_ADMIN_PASS', 'Toegangscode administrator (2 keer ingeven)');
define('LANG_CONFIG_VIEWER_LOGIN', 'Identificatie bezoeker (als deze leeg is, werkt het account niet)');
define('LANG_CONFIG_VIEWER_PASS', 'Toegangscode bezoeker (2 keer in geven)');
define('LANG_CONFIG_LOGIN', 'identificatie minimaal 4 karakters');
define('LANG_CONFIG_PASS', 'toegangscode is leeg');
define('LANG_CONFIG_MATCH', 'toegangscode correspondeert niet');
define('LANG_CONFIG_SAVE', 'Configuratie opslaan');
define('LANG_CLEANER_RUNNING', 'Reiniging bezig...');
define('LANG_CLEANER_RUN', 'Reiniging gereed: %d bestanden en %d directories zijn verwijderd');
define('LANG_CANCEL', 'Cancel');
define('LANG_UPGRADE', 'Upgrade');
define('LANG_UPGRADE_NEXT', 'Controleer uw configuratie, daarna opslaan om uw upgrade te beindigen');
?>
