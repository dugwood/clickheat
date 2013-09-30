<?php
/**
 * ClickHeat: Fichier de langue: polonais/polish
 * 
 * @author Maciej Majewski
 * @since 01/02/2008
**/

/** Fix for Piwik bad behaviour */
if (defined('LANG_USER'))
{
	return true;
}

define('LANG_USER', 'Użytkownik');
define('LANG_PASSWORD', 'Hasło');
define('LANG_LOGIN', 'Login');
define('LANG_LOGIN_ERROR', 'Błąd, nieprawidłowy Login lub hasło');
define('LANG_LOGOUT', 'Wyloguj');
define('LANG_UNKNOWN_DIR', 'Nie można ustalić bieżącej ścieżki, proszę skontaktuj się z nami');
define('LANG_DAYS', 'P,W,Ś,C,P,S,N');
define('LANG_RANGE', 'Dzień,Tydzień,Miesiąc');
define('LANG_MONTHS', '0,styczeń,luty,marzec,kwiecień,maj,czerwiec,lipiec,sierpień,wrzesień,październik,listopad,grudzień');
define('LANG_SITE', 'Witryna');
define('LANG_GROUP', 'Grupa');
define('LANG_BROWSER', 'Przeglądarka');
define('LANG_ALL', 'Wszystko');
define('LANG_UNKNOWN', 'Inny/nieznany');
define('LANG_EXAMPLE_URL', 'Stona');
define('LANG_LAYOUT', 'Układ graficzny grupy');
define('LANG_LAYOUT_FIXED', 'Stała treść/menu');
define('LANG_LAYOUT_LIQUID', 'Płynna treść/menu (automatycznie dopasowywana do dostępnej przestrzeni)');
define('LANG_LAYOUT_NONE', 'Margines (brak treści), płynna');
define('LANG_LAYOUT_0', 'Płynna treść i menu');
define('LANG_LAYOUT_1', 'Stałe lewe menu, płynna treść');
define('LANG_LAYOUT_2', 'Stała treść na środku (automatyczne marginesy z lewej i prawej)');
define('LANG_LAYOUT_3', 'Stała treść przyklejona do lewej (automatyczny margines z prawej)');
define('LANG_LAYOUT_4', 'Stałe menu z prawej, płynna treść');
define('LANG_LAYOUT_5', 'Stałe menu z lewej i prawej, płynna treść');
define('LANG_LAYOUT_6', 'Stała treść przyklejona do prawej (automatyczny margines z lewej)');
define('LANG_LAYOUT_LEFT', 'Stała szerokość z lewej (piksele)');
define('LANG_LAYOUT_CENTER', 'Stała szerokość środka (piksele)');
define('LANG_LAYOUT_RIGHT', 'Stała szerokość z prawej (piksele)');
define('LANG_SCREENSIZE', 'Rozdzielczość');
define('LANG_HEATMAP', 'Heatmapa i jej przezroczystość');
define('LANG_LATEST_CHECK', 'Aktualizuj');
define('LANG_LATEST_KO', 'Nie można automatycznie wyszukać najnowszej dostępnej wersji, twoja to %s, najnowsza znaleziona bezpośrednio na stronie producenta to');
define('LANG_LATEST_OK', 'Korzystasz z najnowszej dostepnej wersji (%s)');
define('LANG_LATEST_NO', 'Twoja wersja (%s) nie jest najnowszą dostepną (%s). Możesz pobrać najnowszą wersję na twojej stronie:');
define('LANG_LOG_MY_CLICKS', 'Zaznaczaj moje kliknięcia?');
define('LANG_JAVASCRIPT_ADMIN_COOKIE', 'Aby zapobiec przekłamaniom w twoich statystykach,\nmożesz zdecydować, żeby system nie zliczał twoich własnych kliknięć\n\nOK = zliczaj moje kliknięcia\nCancel = NIE zliczaj moich kliknięć');
define('LANG_JAVASCRIPT', 'Kod javascript do wklejenia na strony, które chcesz analizować');
define('LANG_JAVASCRIPT_IMAGE', 'Pokaż logo ClickHeat na analizowanejstronie: ');
define('LANG_JAVASCRIPT_SHORT', 'Zminimalizowany kod (tylko 3 linie)');
define('LANG_JAVASCRIPT_QUOTA', 'Maksymalna liczba kliknięć na stronę dla pojedynczego odwiedzającego, kolejne kliknięcia nie będą zliczane (0 = bez limitu, 3 zalecana wartość)');
define('LANG_JAVASCRIPT_SITE', 'Nazwa witryny (dozwolone znaki: A-Z, a-z, 0-9, podkreślnik, myślnik, kropka)');
define('LANG_JAVASCRIPT_GROUP', 'Nazwa grupy, w celu grupowania podobnych stron - ułatwia to analizę wyników');
define('LANG_JAVASCRIPT_GROUP0', 'użyj słowa kluczowego');
define('LANG_JAVASCRIPT_GROUP1', 'dozwolone znaki: A-Z, a-z, 0-9, podkreślnik, myślnik, kropka');
define('LANG_JAVASCRIPT_GROUP2', 'użyj tytułu strony (<a href="http://www.labsmedia.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">nie zalecane</a>)');
define('LANG_JAVASCRIPT_GROUP3', 'użyj adresu strony (<a href="http://www.labsmedia.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">nie zalecane</a>)');
define('LANG_JAVASCRIPT_PASTE', 'Skopiuj i wklej poniższy kod do źródła swojej strony, zaraz przed końcem ciała dokumentu (before &lt;/body&gt; tag):');
define('LANG_JAVASCRIPT_DEBUG', 'Po wklejeniu kodu nie zapomnij go przetstować. Aby to zrobić wywołaj stronę z parametrem <span class="error">debugclickheat</span>. Na przykład dla adresu: http://www.strona.com/index.html wywołaj http://www.strona.com/index.html<span class="error">?debugclickheat</span>. Powinieneś zobaczyć komunikat z informacją o stanie systemu ClickHeat. Jeśli spotkasz się z problemem, możesz śmiało poprosić nas o pomoc.');
define('LANG_NO_CLICK_BELOW', 'No clicks recorded beneath this line'); // Leave this line in English please
define('LANG_ERROR_GROUP', 'Nieznana groupa. _JAVASCRIPT_');
define('LANG_ERROR_DATA', 'Brak kliknięć w zaznaczonym okresie (spróbuj usunąć filtrowanie: przeglądarka, rozdzielczość). _JAVASCRIPT_');
define('LANG_ERROR_JAVASCRIPT', 'Upewnij się czy kod javascript jest poprawnie zainstalowany na twojej stronie.');
define('LANG_ERROR_FILE', 'Nie można otworzyć pliku z danymi');
define('LANG_ERROR_SCREEN', 'Niestandardowa rozdzielczość ekranu');
define('LANG_ERROR_LOADING', 'Generowanie obrazka, proszę czekać...');
define('LANG_ERROR_FIXED', 'Wszystkie szerokości są stałe, to nie jest możliwe. Proszę zmień jedną z szerokości układu graficznego powyżej.');
define('LANG_DEFAULT', 'domyślne');
define('LANG_CHECKS', 'Wstępne sprawdzenie');
define('LANG_CHECK_WRITABLE', 'Uprawnienia do zapisu w katalogu konfiguracyjnym');
define('LANG_CHECK_NOT_WRITABLE', 'PHP nie posiada uprawnień do zapisu w katalogu konfiguracyjnym');
define('LANG_CHECK_GD', 'Biblioteka graficzna GD');
define('LANG_CHECK_GD_IMG', 'imagecreatetruecolor() niedostęne, nie można utworzyć obrazków (dobrej jakości), sprawdź czy biblioteka GD jest poprawnie zainstalowana');
define('LANG_CHECK_GD_ALPHA', 'imagecolorallocatealpha() niedostępne, nie można utworzyć przezroczystych obrazków (możesz pominąć ten błąd, jednak przezroczystość jest zdecydowanie wskazana)');
define('LANG_CHECK_GD_PNG', 'imagepng() niedostepne, nie można utworzyć obrazków typu PNG images');
define('LANG_CHECKS_OK', 'Kolejny krok: konfiguracja');
define('LANG_CHECKS_KO', 'Jeden lub więcej testów zakończyło się niepowodzeniem. Zlikwiduj problemy i odśwież te stronę.');
define('LANG_CONFIG', 'Konfiguracja');
define('LANG_CONFIG_HEADER_HEATMAP', 'renderowanie Heatmap\'y');
define('LANG_CONFIG_HEADER_DISPLAY', 'Główny ekran');
define('LANG_CONFIG_HEADER_SECURITY', 'Bezpieczeństwo');
define('LANG_CONFIG_HEADER_LOGIN', 'Parametry logowania');
define('LANG_CONFIG_LOGPATH', 'Katalog plików z danymi');
define('LANG_CONFIG_LOGPATH_DIR', 'Katalog plików z danymi nie istnieje. Proszę go utworzyć');
define('LANG_CONFIG_LOGPATH_KO', 'Katalog plików z danymi nie ma ustawionych uprawnień do zapisu, prosze nadać uprawnienia do zapisu dla użytkownika PHP');
define('LANG_CONFIG_CACHEPATH', 'Katalog plików tymczasowych');
define('LANG_CONFIG_CACHEPATH_DIR', 'Katalog plików tymczasowych nie istnieje. Proszę go utworzyć');
define('LANG_CONFIG_CACHEPATH_KO', 'Katalog plików tymczasowych nie ma ustawionych uprawnień do zapisu, prosze nadać uprawnienia do zapisu dla użytkownika PHP');
define('LANG_CONFIG_REFERERS', 'Nazwy domen (oddzielone przecinkami) uprawnionych do zliczania kliknięć na tym serwerze');
define('LANG_CONFIG_GROUPS', 'Nazwy grup (oddzielone przecinkami) uprawnionych do zliczania kliknięć na tym serwerze');
define('LANG_CONFIG_FILESIZE', 'Maksymalny rozmiar pliku z danymi (w KB) grupy w ciągu dnia (1000 kliknięć to ok 25KB, 0 = bez limitu)');
define('LANG_CONFIG_CHECK', 'Sprawdź konfigurację');
define('LANG_CONFIG_MEMORY', 'Ograniczenie pamięci (domyślnia wartość w php.ini: %dMB, limity: od %d do %dMB, ale <a href="http://www.labsmedia.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">bądź ostrożny z wysokimi wartościami</a>)');
define('LANG_CONFIG_MEMORY_KO', 'proszę wpisać wartość mieszczącą się w opisanym przedziale');
define('LANG_CONFIG_STEP', 'Grupowanie kliknięć strefami (przyspiesza wyświetlanie heatmap)');
define('LANG_CONFIG_STEP_KO', 'strefy nie mogą byc mniejsze niż 1x1 piksel');
define('LANG_CONFIG_DOT', 'Wielkość kropki na Heatmapach (piksele)');
define('LANG_CONFIG_DOT_KO', 'wielkość kropki nie może być zerowa');
define('LANG_CONFIG_PALETTE', 'Jeśli na Heatmapach widzisz czerwone kwadraty zaznacz tę opcję');
define('LANG_CONFIG_HEATMAP', 'Pokaż heatmapę (zamiast mapy kliknięć)');
define('LANG_CONFIG_FLASHES', 'Ukryj obiekty &lt;Flash&gt;'); 
define('LANG_CONFIG_IFRAMES', 'Ukryj pływające ramki (&lt;iframe&gt;)'); 
define('LANG_CONFIG_YESTERDAY', 'Na początku pokaż statystykę z wczorajszego dnia (zamiast dzisiejszych)');
define('LANG_CONFIG_ALPHA', 'Poziom przezroczystości (0 => 100)');
define('LANG_CONFIG_FLUSH', 'Automatyczne usuwanie statystyk starszych niż X dni (0 = zachowaj wszystkie pliki, nie zalecane)');
define('LANG_CONFIG_START', 'Pierwszy dzień tygodnia');
define('LANG_CONFIG_START_M', 'poniedziałek');
define('LANG_CONFIG_START_S', 'niedziela');
define('LANG_CONFIG_ADMIN_LOGIN', 'Login administratora');
define('LANG_CONFIG_ADMIN_PASS', 'Hasło administratora (wpisz dwa razy)');
define('LANG_CONFIG_VIEWER_LOGIN', 'Login gościa (jeśli puste, konto gościa jest wyłączone');
define('LANG_CONFIG_VIEWER_PASS', 'Hasło gościa (wpisz dwa razy)');
define('LANG_CONFIG_LOGIN', 'Login musi składać się conajmniej z 4 zanków');
define('LANG_CONFIG_PASS', 'Hasło jest puste');
define('LANG_CONFIG_MATCH', 'Podane hasła nie są identyczne');
define('LANG_CONFIG_SAVE', 'Zapisz konfigurację');
define('LANG_CLEANER_RUNNING', 'Czyszczenie w trakcie...');
define('LANG_CLEANER_RUN', 'Zakończono czyszczenie: %d plików i %d katalogów zostało usuniętych');
define('LANG_CANCEL', 'Anuluj');
define('LANG_UPGRADE', 'Aktualizuj');
define('LANG_UPGRADE_NEXT', 'Sprawdź konfigurację, potem zatwierdź ją by zakończyc aktualizację');
?>