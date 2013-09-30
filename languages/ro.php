<?php
/**
 * Romana
 * 
 * @author Dan Puzdreac - www.danpuzdreac.com
 * @since 07/11/2007
**/

/** Fix for Piwik bad behaviour */
if (defined('LANG_USER'))
{
	return true;
}

define('LANG_USER', 'Utilizator');
define('LANG_PASSWORD', 'Parola');
define('LANG_LOGIN', 'Login');
define('LANG_LOGIN_ERROR', 'Eroare de logare, nume utilizator sau parola gresite');
define('LANG_LOGOUT', 'Logout');
define('LANG_UNKNOWN_DIR', 'Nu pot defini directorul curent, va rugam sa ne contactati');
define('LANG_DAYS', 'L,M,M,J,V,S,D');
define('LANG_RANGE', 'Zi,Saptamana,Luna');
define('LANG_MONTHS', '0,Ianuarie,Februarie,Martie,Aprilie,Mai,Iunie,Iulie,August,Septembrie,Octombrie,Noiembrie,Decembrie');
define('LANG_SITE', 'Website');
define('LANG_GROUP', 'Grup');
define('LANG_BROWSER', 'Browser');
define('LANG_ALL', 'Toate');
define('LANG_UNKNOWN', 'Altele/necunoscut');
define('LANG_EXAMPLE_URL', 'Pagina web');
define('LANG_LAYOUT', 'Layout pentru grup');
define('LANG_LAYOUT_FIXED', 'Continut fix/meniu');
define('LANG_LAYOUT_LIQUID', 'Continut flexibil/meniu (ajustare automata la dimensiunea ecranului)');
define('LANG_LAYOUT_NONE', 'Margine (fara continut), flexibila');
define('LANG_LAYOUT_0', 'Meniu si continut flexibil');
define('LANG_LAYOUT_1', 'Meniu fix in stanga, continut flexibil');
define('LANG_LAYOUT_2', 'Continut centrat cu dimensiune fixa (margini egale in stanga si dreapta)');
define('LANG_LAYOUT_3', 'Continut cu dimensiune fixa in partea stanga (margine cu dimensiune automata in dreapta)');
define('LANG_LAYOUT_4', 'Meniu fix in dreapta, continut flexibil');
define('LANG_LAYOUT_5', 'Meniuri fixe la stanga si la dreapta, continut flexibil');
define('LANG_LAYOUT_6', 'Continut fix in dreapta (margine cu dimensiune automata in stanga)');
define('LANG_LAYOUT_LEFT', 'Dimensiune fixa de la stanga (pixeli)');
define('LANG_LAYOUT_CENTER', 'Dimensiune fixa centrata (pixeli)');
define('LANG_LAYOUT_RIGHT', 'Dimensiune fixa de la dreapta (pixeli)');
define('LANG_SCREENSIZE', 'Marime ecran');
define('LANG_HEATMAP', 'Transparenta pentru imaginea generata (click-uri)');
define('LANG_LATEST_CHECK', 'Upgrade');
define('LANG_LATEST_KO', 'Nu pot gasi in mod dinamic ultima versiune a aplicatiei, a dumneavoastra este %s, ultima versiune de pe site-ul Dugwood este');
define('LANG_LATEST_OK', 'Aveti ultima versiune de aplicatie instalata (%s)');
define('LANG_LATEST_NO', 'Versiunea actuala a aplicatiei (%s) nu este ultima (%s). Puteti sa o copiati pe site-ul dumneavoastra:');
define('LANG_LOG_MY_CLICKS', 'Inregistreaza click-urile mele?');
define('LANG_JAVASCRIPT_ADMIN_COOKIE', 'Pentru a evita poluarea rezultatelor,\npoti alege ca sistemul sa inregistreze click-urile tale sau nu\n\nOK = inregistreaza click-urile mele\nCancel = nu inregistra click-urile mele');
define('LANG_JAVASCRIPT', 'cod Javascript copiat in paginile care vor fi monitorizate');
define('LANG_JAVASCRIPT_IMAGE', 'Arata logo-ul ClickHeat in paginile monitorizate: ');
define('LANG_JAVASCRIPT_SHORT', 'Cod compact (numai 3 linii)');
define('LANG_JAVASCRIPT_QUOTA', 'Numar maxim de click-uri pe pagina si vizitator, urmatoarele click-uri nu vor fi contorizate (0 = fara limita, 3 este o alegere buna)');
define('LANG_JAVASCRIPT_SITE', 'Nume site (caractere permise: A-Z, a-z, 0-9, _, -, .)');
define('LANG_JAVASCRIPT_GROUP', 'Nume de grup, pentru a grupa pagini similare pentru o analiza mai simpla');
define('LANG_JAVASCRIPT_GROUP0', 'foloseste un cuvant cheie');
define('LANG_JAVASCRIPT_GROUP1', 'caractere permise: A-Z, a-z, 0-9, _, -, .');
define('LANG_JAVASCRIPT_GROUP2', 'foloseste titlul unei pagini (<a href="http://www.Dugwood.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">nu este recomandat</a>)');
define('LANG_JAVASCRIPT_GROUP3', 'foloseste adresa paginii (<a href="http://www.Dugwood.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">nu este recomandat</a>)');
define('LANG_JAVASCRIPT_PASTE', 'Copiaza codul de mai jos in codul paginilor tale, chiar la sfarsitul paginii (inainte de &lt;/body&gt;):');
define('LANG_JAVASCRIPT_DEBUG', 'Din momentul in care a fost copiat codul, nu uita sa-l testezi pentru a verifica daca functioneaza corect. Foloseste variabila <span class="error">?debugclickheat</span>. De exemplu: http://www.site-demo.com/index.html - tasteaza in browser http://www.site-demo.com/index.html<span class="error">?debugclickheat</span>. Vei vedea un mesaj care arata modul de functionare al aplicatiei. Daca ai o problema, te rugam sa ne contactezi');
define('LANG_NO_CLICK_BELOW', 'No clicks recorded beneath this line'); // Leave this line in English please
define('LANG_ERROR_GROUP', 'Grup necunoscut. _JAVASCRIPT_');
define('LANG_ERROR_DATA', 'Nu exista inregistrari pentru perioada selectata (incearca sa scoti diferite filtre: browser, marime ecran). _JAVASCRIPT_');
define('LANG_ERROR_JAVASCRIPT', 'Ati instalat corect codul Javascript in pagini?');
define('LANG_ERROR_FILE', 'Nu pot deschide fisierul cu inregistrari');
define('LANG_ERROR_SCREEN', 'Marime ecran non-standard');
define('LANG_ERROR_LOADING', 'Generez imaginea, va rog sa asteptati...');
define('LANG_ERROR_FIXED', 'Toate dimensiunile pe latime sunt fixe, acest lucru nu este posibil. Va rugam sa schimbati latimea pentru layout cu una de mai sus.');
define('LANG_DEFAULT', 'default');
define('LANG_CHECKS', 'Verificari preliminarii');
define('LANG_CHECK_WRITABLE', 'Permisiune de scriere in directorul de configurare, config');
define('LANG_CHECK_NOT_WRITABLE', 'PHP nu are permisiune de scriere in directoul de configurare, config');
define('LANG_CHECK_GD', 'GD graphic library');
define('LANG_CHECK_GD_IMG', 'imagecreatetruecolor() inexistent, nu pot crea imagini de calitate, verificati daca GD este instalat');
define('LANG_CHECK_GD_ALPHA', 'imagecolorallocatealpha() inexistent, nu pot crea imagini transparente (poti ignora acest mesaj, dar transparenta este recomandata)');
define('LANG_CHECK_GD_PNG', 'imagepng() inexistent, nu pot crea imagini PNG�');
define('LANG_CHECKS_OK', 'Urmatorul pas: configurare');
define('LANG_CHECKS_KO', 'Unul sau mai multe teste au esuat. Va rugam, corectati problemele si reincarcati aceasta pagina.');
define('LANG_CONFIG', 'Configurare');
define('LANG_CONFIG_HEADER_HEATMAP', 'Creare de harta de click-uri');
define('LANG_CONFIG_HEADER_DISPLAY', 'Ecran principal');
define('LANG_CONFIG_HEADER_SECURITY', 'Securitate');
define('LANG_CONFIG_HEADER_LOGIN', 'Parametrii de login');
define('LANG_CONFIG_LOGPATH', 'Fisiere de inregistrare\' director');
define('LANG_CONFIG_LOGPATH_DIR', 'Directorul pentru fisiere de inregistrate nu exista. Va rugam sa-l creati');
define('LANG_CONFIG_LOGPATH_KO', 'Directorul pentru fisiere de inregistrate - logs - nu are permisiune de scriere, va rugam sa-i dati permisiune de scriere pentru utilizatorul PHP');
define('LANG_CONFIG_CACHEPATH', 'Director pentru fisiere temporare');
define('LANG_CONFIG_CACHEPATH_DIR', 'Directorul pentru fisiere temporare nu exista, va rugam sa-l creati');
define('LANG_CONFIG_CACHEPATH_KO', 'Directorul pentru fisiere temporare - cache - nu are permisiune de scriere, va rugam sa-i dati permisiune de scriere pentru utilizatorul PHP');
define('LANG_CONFIG_REFERERS', 'Nume de domenii (separate prin virgule) carora li se permite inregistrarea click-urilor pe acest server');
define('LANG_CONFIG_GROUPS', 'Nume de grupuri (separate prin virgule) carora li se permite inregistrarea click-urilor pe acest server');
define('LANG_CONFIG_FILESIZE', 'Marime maxima pentru un fisier de inregistrare (in KB) pentru un grup intr-o zi (1000 click-uri reprezinta proximativ 25KB, 0 = fara limite)');
define('LANG_CONFIG_CHECK', 'Verifica configurare');
define('LANG_CONFIG_MEMORY', 'Limita de memorie (valoare php.ini default: %dMB, limite: de la %d la %dMB, dar <a href="http://www.Dugwood.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">aveti grija cu valorile mari</a>)');
define('LANG_CONFIG_MEMORY_KO', 'va rugam sa ramaneti in valorile specificate');
define('LANG_CONFIG_STEP', 'Click-uri grupate in zone de X*X pixeli (influenteaza viteza de redare a hartii de click-uri)');
define('LANG_CONFIG_STEP_KO', 'zonele nu pot avea sub 1x1 pixeli');
define('LANG_CONFIG_DOT', 'Harta de clik-uri\' marime de punct (pixeli)');
define('LANG_CONFIG_DOT_KO', 'marimea de punct nu poate fi zero');
define('LANG_CONFIG_PALETTE', 'Daca vedeti patrate rosii pe harta selectati aceasta optiune');
define('LANG_CONFIG_HEATMAP', 'Arata harta de click-uri (decat click-uri individuale\' harta)');
define('LANG_CONFIG_FLASHES', 'Ascunde elemente &lt;Flash&gt;');
define('LANG_CONFIG_IFRAMES', 'Ascunde &lt;iframe&gt;');
define('LANG_CONFIG_YESTERDAY', 'Arata statisticile de ieri la inceput (in locul celor de azi)');
define('LANG_CONFIG_ALPHA', 'Transparenta (0 => 100)');
define('LANG_CONFIG_FLUSH', 'Stergere automata a statisticilor mai vechi de X zile (0 = pastreaza toate fisierele, nu este recomandat)');
define('LANG_CONFIG_START', 'prima zi a saptamanii');
define('LANG_CONFIG_START_M', 'Luni');
define('LANG_CONFIG_START_S', 'Duminica');
define('LANG_CONFIG_ADMIN_LOGIN', 'Nume utilizator pentru administrator');
define('LANG_CONFIG_ADMIN_PASS', 'Parola pentru administrator (de doua ori)');
define('LANG_CONFIG_VIEWER_LOGIN', 'Nume utilizator pentru utilizator (daca nu se scrie nimic, contul este sters)');
define('LANG_CONFIG_VIEWER_PASS', 'Parola pentru utilizator (de doua ori)');
define('LANG_CONFIG_LOGIN', 'Numele utilizator trebuie sa aiba cel putin 4 litere');
define('LANG_CONFIG_PASS', 'parola nu a fost completata');
define('LANG_CONFIG_MATCH', 'parolele nu corespund');
define('LANG_CONFIG_SAVE', 'Salveaza configurare');
define('LANG_CLEANER_RUNNING', 'Curatare in lucru...');
define('LANG_CLEANER_RUN', 'Curatare terminata: %d fisiere si %d directoare au fost sterse');
define('LANG_CANCEL', 'Cancel');
define('LANG_UPGRADE', 'Upgrade');
define('LANG_UPGRADE_NEXT', 'Verifica configuratia si apoi salveaza pentru a termina upgrade-ul');
?>
