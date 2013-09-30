<?php
/**
 * ClickHeat: Fichier de langue: czech
 * 
 * @author Jakub Hejda - Clickmedia - www.clickmedia.cz
 * @since 12/04/2008
**/

/** Fix for Piwik bad behaviour */
if (defined('LANG_USER'))
{
	return true;
}

define('LANG_USER', 'Uživatel');
define('LANG_PASSWORD', 'Heslo');
define('LANG_LOGIN', 'Přihlášení');
define('LANG_LOGIN_ERROR', 'Chyba přihlášení, špatné uživatelské jméno nebo heslo');
define('LANG_LOGOUT', 'Odhlášení');
define('LANG_UNKNOWN_DIR', 'Není možné nastavit tento adresář, prosím, kontaktujte nás');
define('LANG_DAYS', 'P,Ú,S,Č,P,S,N');
define('LANG_RANGE', 'Den,Týden,Měsíc');
define('LANG_MONTHS', '0,Leden,Únor,Březen,Duben,Květen,Červen,Červenec,Srpen,Září,Říjen,Listopad,Prosinec');
define('LANG_SITE', 'Webová stránka');
define('LANG_GROUP', 'Skupina');
define('LANG_BROWSER', 'Prohlížeč');
define('LANG_ALL', 'Vše');
define('LANG_UNKNOWN', 'Ostatní/neurčeno');
define('LANG_EXAMPLE_URL', 'Www adresa');
define('LANG_LAYOUT', 'Rozvržení skupiny');
define('LANG_LAYOUT_FIXED', 'Fixní obsah/menu');
define('LANG_LAYOUT_LIQUID', 'Plovoucí obsah/menu (automatické rozmístění podle volného místa)');
define('LANG_LAYOUT_NONE', 'Okraje (bez obsahu), plovoucí');
define('LANG_LAYOUT_0', 'Plovoucí obsah a menu');
define('LANG_LAYOUT_1', 'Fixní levé menu, plovoucí obsah');
define('LANG_LAYOUT_2', 'Fixní vycentrovaný obsah (automatický levý a pravý okraj)');
define('LANG_LAYOUT_3', 'Fixní obsah přilepený vlevo (automatický pravý okraj)');
define('LANG_LAYOUT_4', 'Fixní pravé menu, plovoucí obsah');
define('LANG_LAYOUT_5', 'Fixní levé a pravé menu, plovoucí obsah');
define('LANG_LAYOUT_6', 'Fixní obsah přilepený vpravo (automatický levý okraj)');
define('LANG_LAYOUT_LEFT', 'Fixní levá šířka (v pixelech)');
define('LANG_LAYOUT_CENTER', 'Fixní šířka prostřední části (v pixelech)');
define('LANG_LAYOUT_RIGHT', 'Fixní šířka pravé části (v pixelech)');
define('LANG_SCREENSIZE', 'Velikost obrazovky');
define('LANG_HEATMAP', 'Teplotní mapa a její průhlednost');
define('LANG_LATEST_CHECK', 'Aktualizace');
define('LANG_LATEST_KO', 'Nemohu nalézt automaticky nejnovější verzi, vaše je %s, nejnovější naleznete přímo na stránkách Dugwood');
define('LANG_LATEST_OK', 'Máte poslední dostupnou verzi (%s)');
define('LANG_LATEST_NO', 'Vaše verze (%s) není nejnovější (%s). Můžete si stáhnout novější z naší stránky:');
define('LANG_LOG_MY_CLICKS', 'Započítávat mé kliknutí?');
define('LANG_JAVASCRIPT_ADMIN_COOKIE', 'Pokud se chcete vyvarovat zkreslení při počítání vaší statistiky, \nzvolte nezapočítávat vaše kliknutí do záznamu\n\nOK = započítávat mé kliknutí\nZrušit = nezapočítávat mé kliknutí');
define('LANG_JAVASCRIPT', 'Javascriptový kód pro vložení do stránky, kterou chcete sledovat');
define('LANG_JAVASCRIPT_IMAGE', 'Zobrazovat ClickHeat logo na sledované stránce: ');
define('LANG_JAVASCRIPT_SHORT', 'Kompaktní kód (pouhé 3 řádky)');
define('LANG_JAVASCRIPT_QUOTA', 'Maximální počet kliknutí na stránku od návštěvníka, další kliknutí nebude uloženo (0 = žádné omezení, 3 je dobrá volba)');
define('LANG_JAVASCRIPT_SITE', 'Název webové stránky (povolené znaky: A-Z, a-z, 0-9, podtržítko, spojovník - pomlčka, tečka)');
define('LANG_JAVASCRIPT_GROUP', 'Název skupiny pro seskupení podobných stránek pro jednodušší analýzu');
define('LANG_JAVASCRIPT_GROUP0', 'použít klíčové slovo');
define('LANG_JAVASCRIPT_GROUP1', 'povolené znaky: A-Z, a-z, 0-9, podtržítko, spojovník - pomlčka, tečka');
define('LANG_JAVASCRIPT_GROUP2', 'použít titulek stránky (<a href="http://www.Dugwood.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">nedoporučujeme</a>)');
define('LANG_JAVASCRIPT_GROUP3', 'použít adresu stránky (<a href="http://www.Dugwood.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">nedoporučujeme</a>)');
define('LANG_JAVASCRIPT_PASTE', 'Zkopírujte a vložte kód zde dole do své stránky, před samotný konec stránky (před značku &lt;/body&gt;):');
define('LANG_JAVASCRIPT_DEBUG', 'Jakmile je vložíte do vašich stránek kód, nezapoměňte vyzkoušet zdali kód pracuje správně, zavoláním vaší stránky s parametrem <span class="error">debugclickheat</span>. Například http://www.site.com/index.html zavolejte takto: http://www.site.com/index.html<span class="error">?debugclickheat</span>. Měl byste vidět zprávu o stavu Clickheatu. Pokud narazíte na nějaký problém, nebojte se nás kontaktovat');
define('LANG_NO_CLICK_BELOW', 'No clicks recorded beneath this line'); // Leave this line in English please
define('LANG_ERROR_GROUP', 'Neznámá skupina. _JAVASCRIPT_');
define('LANG_ERROR_DATA', 'Žádné záznamy pro zvolené období (zkuste zrušit nastavení filtrů: prohlížeč, velikost obrazovky). _JAVASCRIPT_');
define('LANG_ERROR_JAVASCRIPT', 'Máte správně vložený Javascriptový kód do vašich webových stránek?');
define('LANG_ERROR_FILE', 'Nemohu otevřít soubor se záznamem');
define('LANG_ERROR_SCREEN', 'Nestandartní velikost obrazovky');
define('LANG_ERROR_LOADING', 'Vytvářím obrázek, prosím čekejte...');
define('LANG_ERROR_FIXED', 'Všechny šířky jsou fixní, to není vhodné. Prosím, změňte jedno z vašich rozvržení šířky nahoře.');
define('LANG_DEFAULT', 'výchozí');
define('LANG_CHECKS', 'Předběžná kontrola');
define('LANG_CHECK_WRITABLE', 'Práva k zápisu do adresáře s nastavením');
define('LANG_CHECK_NOT_WRITABLE', 'PHP nemá práva k zápisu do adresáře s nastavením');
define('LANG_CHECK_GD', 'GD grafická knihovna');
define('LANG_CHECK_GD_IMG', 'funkce imagecreatetruecolor() je nedostupná, nemohu vytvářet obrázky (v dobré kvalitě), zkontrolujte zdali je nainstalována GD');
define('LANG_CHECK_GD_ALPHA', 'funkce imagecolorallocatealpha() není dostupná, nemohu vytvářet průhledné obrázky (můžete to ignorovat, ale průhlednost opravdu doporučujeme)');
define('LANG_CHECK_GD_PNG', 'funkce imagepng() není dostupná, nemohu vytvářet obrázky ve formátu PNG, promiňte');
define('LANG_CHECKS_OK', 'Další krok: nastavení');
define('LANG_CHECKS_KO', 'Jeden nebo více testů neuspěl. Prosím opravte příčinu a obnovte tuto stránku.');
define('LANG_CONFIG', 'Nastavení');
define('LANG_CONFIG_HEADER_HEATMAP', 'Teplotní mapa je vytvořena');
define('LANG_CONFIG_HEADER_DISPLAY', 'Hlavní zobrazení');
define('LANG_CONFIG_HEADER_SECURITY', 'Bezpečnost');
define('LANG_CONFIG_HEADER_LOGIN', 'Nastavení přihlašování');
define('LANG_CONFIG_LOGPATH', 'Adresář pro záznamy');
define('LANG_CONFIG_LOGPATH_DIR', 'Adresář pro záznamy neexistuje. Prosím, vytvořte ho');
define('LANG_CONFIG_LOGPATH_KO', 'Adresář pro záznamy nemá povolena práva pro zápis, prosím nastavte práva pro uživatele PHP');
define('LANG_CONFIG_CACHEPATH', 'Adresář pro dočasné soubory');
define('LANG_CONFIG_CACHEPATH_DIR', 'Adresář pro dočasné soubory neexistuje. Prosím, vytvořte ho.');
define('LANG_CONFIG_CACHEPATH_KO', 'Adresář pro dočasné soubory nemá povolena práva pro zápis, prosím nastavte práva pro uživatele PHP');
define('LANG_CONFIG_REFERERS', 'Názvy domén (oddělené čárkou) které mají povolení ukládat zápisy na tomto serveru');
define('LANG_CONFIG_GROUPS', 'Jména skupin (oddělená čárkou), které mají povolení ukládat zápisy na tomto serveru');
define('LANG_CONFIG_FILESIZE', 'Maximální velikost souboru se záznamem (v KB) za skupinu přes den (1000 kliknutí je zhruba 25KB, 0 = žádné omezení velikosti)');
define('LANG_CONFIG_CHECK', 'Zkontrolovat nastavení');
define('LANG_CONFIG_MEMORY', 'Limit paměti (výchozí hodnota z php.ini je: %dMB, limity: od %d do %dMB, ale <a href="http://www.Dugwood.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">buďte opatrní při zadávání vyšších hodnot</a>)');
define('LANG_CONFIG_MEMORY_KO', 'prosím dodržte předepsaný rozsah');
define('LANG_CONFIG_STEP', 'Kliknutí seskupit do zón po X*X pixelech (pro zrychlení zobrazování teplotní mapy)');
define('LANG_CONFIG_STEP_KO', 'zóny nemohou být menší než 1x1 pixelů');
define('LANG_CONFIG_DOT', 'Velikost bodu na teplotní mapě (v pixelech)');
define('LANG_CONFIG_DOT_KO', 'velikosts tečky nesmí být nula');
define('LANG_CONFIG_PALETTE', 'Pokud vidíte červené čtverečky na teplotní mapě, zaškrtněte tuto volbu');
define('LANG_CONFIG_HEATMAP', 'Zobrazit teplotní mapu (spíše než mapu kliknutí)');
define('LANG_CONFIG_FLASHES', 'Skrýt &lt;Flash&gt; objekty'); 
define('LANG_CONFIG_IFRAMES', 'Skrýt &lt;iframe&gt; rámy'); 
define('LANG_CONFIG_YESTERDAY', 'Zobrazit včerejší statistiky při startu (spíše než dnešní)');
define('LANG_CONFIG_ALPHA', 'Stupeň průhlednosti (0 => 100)');
define('LANG_CONFIG_FLUSH', 'Automaticky smazat statistiky starší než X dnů (0 = zachovat všechny soubory, nedoporučujeme)');
define('LANG_CONFIG_START', 'První den týdne');
define('LANG_CONFIG_START_M', 'Pondělí');
define('LANG_CONFIG_START_S', 'Neděle');
define('LANG_CONFIG_ADMIN_LOGIN', 'Identifikátor správce');
define('LANG_CONFIG_ADMIN_PASS', 'Heslo správce (zapište dvakrát)');
define('LANG_CONFIG_VIEWER_LOGIN', 'Identifikátor návštěvníka (pokud ho nezadáte, bude tato možnost vypnuta)');
define('LANG_CONFIG_VIEWER_PASS', 'Heslo pro návštevy (zadejte dvakrát)');
define('LANG_CONFIG_LOGIN', 'identifikátor musí mít alespoň  4 znaky');
define('LANG_CONFIG_PASS', 'heslo je prázdné');
define('LANG_CONFIG_MATCH', 'hesla se neshodují');
define('LANG_CONFIG_SAVE', 'Uložit nastavení');
define('LANG_CLEANER_RUNNING', 'Probíhá čištění...');
define('LANG_CLEANER_RUN', 'čištění dokončeno: %d souborů a %d adresářů bylo vymazáno');
define('LANG_CANCEL', 'Zrušit');
define('LANG_UPGRADE', 'Aktualizace');
define('LANG_UPGRADE_NEXT', 'Zkontrolujte vaše nastavení, a pak uložte pro dokončení aktualizace');
?>
