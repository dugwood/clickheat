<?php
/**
 * ClickHeat: Hungarian
 * 
 * @author David Szabo - gyumolcstarhely.hu
 * @since 08/11/2009
**/

/** Fix for Piwik bad behaviour */
if (defined('LANG_USER'))
{
	return true;
}

define('LANG_USER', 'Felhasználónév');
define('LANG_PASSWORD', 'Jelszó');
define('LANG_LOGIN', 'Bejelentkezés');
define('LANG_LOGIN_ERROR', 'Hiba a bejelentkezéskor, rossz felhasználónevet vagy jelszót adtál meg');
define('LANG_LOGOUT', 'Kijelentkezés');
define('LANG_UNKNOWN_DIR', 'Nem sikerült meghatározni az aktuális könyvtárat');
define('LANG_DAYS', 'H,K,Sz,Cs,P,Sz,V');
define('LANG_RANGE', 'Nap,Hét,Hónap');
define('LANG_MONTHS', '0,Január,Február,Március,Április,Május,Június,Július,Augusztus,Szeptember,Október,November,December');
define('LANG_SITE', 'Weboldal');
define('LANG_GROUP', 'Csoport');
define('LANG_BROWSER', 'Böngésző');
define('LANG_ALL', 'Összes');
define('LANG_UNKNOWN', 'Egyéb/ismeretlen');
define('LANG_EXAMPLE_URL', 'Webcím');
define('LANG_LAYOUT', 'Csoport tulajdonságok: ');
define('LANG_LAYOUT_FIXED', 'Statikus tartalom');
define('LANG_LAYOUT_LIQUID', 'Változó tartalom (terület automatikus meghatározása)');
define('LANG_LAYOUT_NONE', 'Szegély (nincsen tartalom)');
define('LANG_LAYOUT_0', 'Változó tartalom és menü');
define('LANG_LAYOUT_1', 'Statikus bal oldali menü, változó tartalom');
define('LANG_LAYOUT_2', 'Statikus középen lévő tartalom (automatikus bal és jobb oldali szegély)');
define('LANG_LAYOUT_3', 'Statikus bal oldali tartalom (automatikus jobb oldali szegély)');
define('LANG_LAYOUT_4', 'Statikus jobb oldali menü, változó tartalom');
define('LANG_LAYOUT_5', 'Statikus bal és jobb oldali menü, változó tartalom');
define('LANG_LAYOUT_6', 'Statikus jobb oldali tartalom (automatikus bal oldali szegély)');
define('LANG_LAYOUT_LEFT', 'Bal oldali rész szélessége (pixel)');
define('LANG_LAYOUT_CENTER', 'Középső rész szélessége (pixel)');
define('LANG_LAYOUT_RIGHT', 'Jobb oldali rész szélessége (pixel)');
define('LANG_SCREENSIZE', 'Képernyőméret');
define('LANG_HEATMAP', 'Hőtérkép és átlátszósága');
define('LANG_LATEST_CHECK', 'Programfrissítés');
define('LANG_LATEST_KO', 'Nem sikerült lekérdezni a programfrissítési adatokat, az általad használt verzió: %s, a legfrissebb minden esetben elérhető a Dugwood weboldalán');
define('LANG_LATEST_OK', 'A legfrissebb programverzió van telepítve (%s)');
define('LANG_LATEST_NO', 'Az általad használt programverzió (%s) nem a legfrissebb (%s). A legújabb letölthető a weboldalról:');
define('LANG_LOG_MY_CLICKS', 'Saját kattintások naplózása?');
define('LANG_JAVASCRIPT_ADMIN_COOKIE', 'A valós statisztikai adatok érdekében,\nválaszthatod azt, hogy a rendszer ne rögzítse a saját kattintásaidat\n\nOK = naplózza a saját kattintásokat\nCancel = ne naplózza a saját kattintásokat');
define('LANG_JAVASCRIPT', 'A méréshez szükséges Javascript kód');
define('LANG_JAVASCRIPT_IMAGE', 'ClickHeat logó megjelenítése a vizsgált oldalakon: ');
define('LANG_JAVASCRIPT_SHORT', 'Kis méretű kód (csak 3 sor)');
define('LANG_JAVASCRIPT_QUOTA', 'X feletti katintások nem lesznek rögzítve oldalanként és látogatónként (0 = nincsen limit, a 3 jó választás lehet)');
define('LANG_JAVASCRIPT_SITE', 'Weboldal neve (megengedett karakterek: A-Z, a-z, 0-9, "aláhúzás", "kötőjel", "pont")');
define('LANG_JAVASCRIPT_GROUP', 'Csoport neve, hogy a hasonló oldalakat könnyebb legyen elemezni');
define('LANG_JAVASCRIPT_GROUP0', 'saját elnevezés');
define('LANG_JAVASCRIPT_GROUP1', 'megengedett karakterek: A-Z, a-z, 0-9, "aláhúzás", "kötőjel", "pont"');
define('LANG_JAVASCRIPT_GROUP2', 'az oldal címe (<a href="http://www.Dugwood.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">nem ajánlott</a>)');
define('LANG_JAVASCRIPT_GROUP3', 'az oldal webcíme (<a href="http://www.Dugwood.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">nem ajánlott</a>)');
define('LANG_JAVASCRIPT_PASTE', 'Másold és illeszd be az alábbi kódot a weboldalad forrásának végére (a &lt;/body&gt; elé):');
define('LANG_JAVASCRIPT_DEBUG', 'Az oldal módosítása után ellenőrizheted a program működését a <span class="error">debugclickheat</span> paraméter segítségével. Például a következő oldal esetében: http://www.site.com/index.html, így: http://www.site.com/index.html<span class="error">?debugclickheat</span>. Ha minden rendben van, akkor az oldalon a Clickheat állapotára vonatkozó információk jelennek meg. Ha bármilyen problémát tapasztalsz, vedd fel a kapcsolatot velünk');
define('LANG_NO_CLICK_BELOW', 'No clicks recorded beneath this line'); // Leave this line in English please
define('LANG_ERROR_GROUP', 'Nem létező csoport. _JAVASCRIPT_');
define('LANG_ERROR_DATA', 'Nincsenek adatok a kiválasztott időszakra vonatkozóan (próbálj állítani a szűrőkön: böngésző, képernyőméret). _JAVASCRIPT_');
define('LANG_ERROR_JAVASCRIPT', 'Helyesen helyezted el a weboldaladon a Javascript kódot?');
define('LANG_ERROR_FILE', 'Nem sikerült a naplófile megnyitása');
define('LANG_ERROR_SCREEN', 'Nem szabványos képernyő méret');
define('LANG_ERROR_LOADING', 'A kép létrehozása folyamatban, kis türelmet...');
define('LANG_ERROR_FIXED', 'A szélesség előre meghatározott értékű lehet csak, kérlek változtasd meg a fentieket.');
define('LANG_DEFAULT', 'alapbeállítás');
define('LANG_CHECKS', 'Előzetes ellenőrzések');
define('LANG_CHECK_WRITABLE', 'Írási jog a konfigurációs könyvtárra vonatkozóan');
define('LANG_CHECK_NOT_WRITABLE', 'A PHP-t futtató felhasználónak nincsen írási joga a konfigurációs könyvtárra vonatkozóan');
define('LANG_CHECK_GD', 'GD kiterjesztés');
define('LANG_CHECK_GD_IMG', 'Az imagecreatetruecolor() PHP függvény nem elérhető, így nem készülhetnek jó minőségű képek, ellenőrizd, hogy a GD kiterjesztés telepítve van-e');
define('LANG_CHECK_GD_ALPHA', 'Az imagecolorallocatealpha() PHP függvény nem elérhető, így nem készülhetnek átlátszó képek');
define('LANG_CHECK_GD_PNG', 'Az imagepng() PHP függvény nem elérhető, így sajnos nem készülhetnek PNG képek');
define('LANG_CHECKS_OK', 'Következő lépés: beállítások');
define('LANG_CHECKS_KO', 'Hiba történt az ellenőrzés során, kérlek javítsd a problémákat és frissítsd ezt az oldalt.');
define('LANG_CONFIG', 'Beállítások');
define('LANG_CONFIG_HEADER_HEATMAP', 'Hőtérkép tulajdonságok');
define('LANG_CONFIG_HEADER_DISPLAY', 'Fő adatok');
define('LANG_CONFIG_HEADER_SECURITY', 'Biztonság');
define('LANG_CONFIG_HEADER_LOGIN', 'Bejelentkezési adatok');
define('LANG_CONFIG_LOGPATH', 'Naplófile-ok helye');
define('LANG_CONFIG_LOGPATH_DIR', 'A megadott könyvtár nem létezik, kérlek hozd létre');
define('LANG_CONFIG_LOGPATH_KO', 'A megadott könyvtár nem írható a PHP-t futtató felhasználó számára, kérlek állítsd be megfelelően');
define('LANG_CONFIG_CACHEPATH', 'Átmeneti file-ok helye');
define('LANG_CONFIG_CACHEPATH_DIR', 'A megadott könyvtár nem létezik, kérlek hozd létre');
define('LANG_CONFIG_CACHEPATH_KO', 'A megadott könyvtár nem írható a PHP-t futtató felhasználó számára, kérlek állítsd be megfelelően');
define('LANG_CONFIG_REFERERS', 'Domain nevek (vesszővel elválasztva), amelyekhez tartozó kattintások rögzítve lesznek');
define('LANG_CONFIG_GROUPS', 'Csoport nevek (vesszővel elválasztva), amelyekhez tartozó kattintások rögzítve lesznek');
define('LANG_CONFIG_FILESIZE', 'Egy csoporthoz tartozó maximális naplófile mérete (KB) naponta (1000 kattintás kb. 25 KB, 0 = nincsen korlát)');
define('LANG_CONFIG_CHECK', 'Beállítások ellenőrzése');
define('LANG_CONFIG_MEMORY', 'Memória limit (php.ini alapbeállítás: %dMB, értékek: %d és %dMB között, de <a href="http://www.Dugwood.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">bánj óvatos a magas értékekkel</a>)');
define('LANG_CONFIG_MEMORY_KO', 'kérlek maradj a megadott határokon belül');
define('LANG_CONFIG_STEP', 'Kattintások csoportosítása X*X pixel-es területen belül (gyorsítja a hőtérkép megjelenítését)');
define('LANG_CONFIG_STEP_KO', 'a zóna nem lehet 1x1 pixel-nél kisebb');
define('LANG_CONFIG_DOT', 'Hőtérkép képpont mérete (pixel)');
define('LANG_CONFIG_DOT_KO', 'képpont mérete nem lehet 0');
define('LANG_CONFIG_PALETTE', 'Ha piros négyzeteket látsz a hőtérképen, akkor ezt mindenképpen kattintsd be');
define('LANG_CONFIG_HEATMAP', 'Hőtérkép megjelenítése (a kattintások helye helyett)');
define('LANG_CONFIG_FLASHES', '&lt;flash&gt; részek elrejtése'); 
define('LANG_CONFIG_IFRAMES', '&lt;iframe&gt; típusú frame-ek elrejtése'); 
define('LANG_CONFIG_YESTERDAY', 'A tegnapi statisztika jelenjen meg először (a mai helyett)');
define('LANG_CONFIG_ALPHA', 'Átlátszóság (0 => 100)');
define('LANG_CONFIG_FLUSH', 'X napnál régebbi statisztikák automatikus törlése (0 = ne töröljön, nem ajánlott)');
define('LANG_CONFIG_START', 'A hét első napja');
define('LANG_CONFIG_START_M', 'Hétfő');
define('LANG_CONFIG_START_S', 'Vasárnap');
define('LANG_CONFIG_ADMIN_LOGIN', 'Adminisztrátor azonosítója');
define('LANG_CONFIG_ADMIN_PASS', 'Adminisztrátor jelszava (kétszer)');
define('LANG_CONFIG_VIEWER_LOGIN', 'Látogató azonosítója (ha nem adsz meg ilyet, akkor le lesz tiltva)');
define('LANG_CONFIG_VIEWER_PASS', 'Látogató jelszava (kétszer)');
define('LANG_CONFIG_LOGIN', 'az azonosítónak legalább 4 karakter hosszúnak kell lennie');
define('LANG_CONFIG_PASS', 'nem adtál meg jelszót');
define('LANG_CONFIG_MATCH', 'a megadott jelszavak nem egyeznek meg');
define('LANG_CONFIG_SAVE', 'Beállítások mentése');
define('LANG_CLEANER_RUNNING', 'Törlés folyamatban...');
define('LANG_CLEANER_RUN', 'A takarítás befejeződött: %d file-t és %d könyvtárat töröltem');
define('LANG_CANCEL', 'Mégsem');
define('LANG_UPGRADE', 'Frissítés');
define('LANG_UPGRADE_NEXT', 'Ellenőrizd a beállításokat, majd mentsd el a frissítés befejezéséhez');
?>
