<?php
/**
 * ClickHeat: Fichier de langue: serbian
 *
 * @author Lazar Kovacevic - www.inverudio.com
 * @since 18/11/2008
**/

/** Fix for Piwik bad behaviour */
if (defined('LANG_USER'))
{
	return true;
}

define('LANG_USER', 'Корисничко име');
define('LANG_PASSWORD', 'Лозинка');
define('LANG_LOGIN', 'Улогујте се');
define('LANG_LOGIN_ERROR', 'Грешка у логовању, погрешно име или шифра');
define('LANG_LOGOUT', 'Излогујте се');
define('LANG_UNKNOWN_DIR', 'Не може се дефинисати тренутни директоријум, молимо контактирајте нас');
define('LANG_DAYS', 'П,У,С,Ч,П,С,Н');
define('LANG_RANGE', 'Дан,Недеља,Месец');
define('LANG_MONTHS', '0,Јануар,Фебруар,Март,Април,Мај,Јун,Јул,Август,Септембар,Октобар,Новембар,Децембар');
define('LANG_SITE', 'Веб сајт');
define('LANG_GROUP', 'Група');
define('LANG_BROWSER', 'Претраживач');
define('LANG_ALL', 'Све');
define('LANG_UNKNOWN', 'Друго/непознато');
define('LANG_EXAMPLE_URL', 'Веб страна');
define('LANG_LAYOUT', 'Изглед групе');
define('LANG_LAYOUT_FIXED', 'Фиксни садржај/мени');
define('LANG_LAYOUT_LIQUID', 'Променљив садржај/мени (аутоматско прилагођавање слободном простору)');
define('LANG_LAYOUT_NONE', 'Маргина (без садржаја), променљива');
define('LANG_LAYOUT_0', 'Променљив садржај и мени');
define('LANG_LAYOUT_1', 'Фиксни леви мени, променљив садржај');
define('LANG_LAYOUT_2', 'Фиксни центриран садржај (аутоматске лева и десна маргина)');
define('LANG_LAYOUT_3', 'Фиксни садржај на левој страни (аутоматска десна маргина)');
define('LANG_LAYOUT_4', 'Фиксни десни мени, променљив садржај');
define('LANG_LAYOUT_5', 'Фиксни леви и десни мени, променљив садржај');
define('LANG_LAYOUT_6', 'Фиксни садржај на десној страни (аутоматска лева маргина)');
define('LANG_LAYOUT_LEFT', 'Фиксна лева ширина (пиксели)');
define('LANG_LAYOUT_CENTER', 'Фиксна централна ширина (пиксели)');
define('LANG_LAYOUT_RIGHT', 'Фиксна десна ширина (пиксели)');
define('LANG_SCREENSIZE', 'Величина екрана');
define('LANG_HEATMAP', 'Топлотна карта и њена транспарентност');
define('LANG_LATEST_CHECK', 'Унапреди');
define('LANG_LATEST_KO', 'Не могу наћи динамички последњу доступну верзију, ваша је %s, последња прочитана са Dugwood вебсајта је');
define('LANG_LATEST_OK', 'Имате последњу доступну верзију (%s)');
define('LANG_LATEST_NO', 'Ваша верзија (%s) није последња доступна (%s). Можете учитати последњу на нашем веб сајту:');
define('LANG_LOG_MY_CLICKS', 'Логуј моје кликове?');
define('LANG_JAVASCRIPT_ADMIN_COOKIE', 'Да би сте избегли загађење ваше статистике,\nможете изабрати да не логујете своје кликове\n\nДА = логуј моје кликове\nНЕ = не логуј моје кликове');
define('LANG_JAVASCRIPT', 'Јаваскрипт код који треба да се сними на странице које желите проучавати');
define('LANG_JAVASCRIPT_IMAGE', 'Прикажи ClickHeat лого на страницама које се проучавају: ');
define('LANG_JAVASCRIPT_SHORT', 'Сажет код (само три линије)');
define('LANG_JAVASCRIPT_QUOTA', 'Максималан број кликова по страни и посетиоцу, даљњи кликови се неће чувати (0 = нема лимита, 3 је добар избор)');
define('LANG_JAVASCRIPT_SITE', 'Име сајта (дозвољени карактери: A-Z, a-z, 0-9, _, -, .)');
define('LANG_JAVASCRIPT_GROUP', 'Име групе, да се групишу стране за сличну анализу');
define('LANG_JAVASCRIPT_GROUP0', 'користи кључну реч');
define('LANG_JAVASCRIPT_GROUP1', 'дозвољени карактери: A-Z, a-z, 0-9, _, -, .');
define('LANG_JAVASCRIPT_GROUP2', 'користи назив веб странице (<a href="http://www.Dugwood.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">није препоручено</a>)');
define('LANG_JAVASCRIPT_GROUP3', 'користи линк веб странице (<a href="http://www.Dugwood.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">није препоручено</a>)');
define('LANG_JAVASCRIPT_PASTE', 'Копирајте и ставите доњи код на ваше странице, пре самог краја стране (пре &lt;/body&gt; елемента):');
define('LANG_JAVASCRIPT_DEBUG', 'Пошто је код стављен на ваше стране, не заборавите да тестирате да ли код ради добро, позивајући вашу страну са параметром <span class="error">debugclickheat</span>. На пример за http://www.site.com/index.html позовите http://www.site.com/index.html<span class="error">?debugclickheat</span>. Требали би видети поруку која показује стање Clickheatа. Ако се сусретнете са неким проблемом, молимо контактирајте нас');
define('LANG_NO_CLICK_BELOW', 'No clicks recorded beneath this line'); // Leave this line in English please
define('LANG_ERROR_GROUP', 'Непозната група. _JAVASCRIPT_');
define('LANG_ERROR_DATA', 'Нема логова за изабрани период (прво пробајте да уклоните филтере: претраживач, величина екрана). _JAVASCRIPT_');
define('LANG_ERROR_JAVASCRIPT', 'Да ли сте добро инсталирали Јаваскрипт код на вашим веб странама?');
define('LANG_ERROR_FILE', 'Не могу отворити лог фајл');
define('LANG_ERROR_SCREEN', 'Нестандардна величина екрана');
define('LANG_ERROR_LOADING', 'Слика се генерише, молимо сачекајте...');
define('LANG_ERROR_FIXED', 'Све ширине су фиксне, то није могуће. Молимо промените торе једну од ширина презентације.');
define('LANG_DEFAULT', 'стандардни');
define('LANG_CHECKS', 'Прелиминарне провере');
define('LANG_CHECK_WRITABLE', 'Дозволе записа у директоријуму конфигурација');
define('LANG_CHECK_NOT_WRITABLE', 'PHP нема дозволе записа у директоријуму конфигурација');
define('LANG_CHECK_GD', 'GD графичка библиотека');
define('LANG_CHECK_GD_IMG', 'imagecreatetruecolor() није доступна, не могу направити слике (доброг квалитета), проверите да ли је инсталиран GD');
define('LANG_CHECK_GD_ALPHA', 'imagecolorallocatealpha() није доступна, не могу направити транспарентне слике (можете да игноришите ово, али се транспарентност заиста препоручује)');
define('LANG_CHECK_GD_PNG', 'imagepng() није доступна, не могу направити PNG слике, жао ми је');
define('LANG_CHECKS_OK', 'Следећи корак: конфигурација');
define('LANG_CHECKS_KO', 'Један или више тестова није успело. Молимо исправите проблем и освежите страницу.');
define('LANG_CONFIG', 'Конфигурација');
define('LANG_CONFIG_HEADER_HEATMAP', 'Исцртавање топлотне карте');
define('LANG_CONFIG_HEADER_DISPLAY', 'Главни дисплеј');
define('LANG_CONFIG_HEADER_SECURITY', 'Сигурност');
define('LANG_CONFIG_HEADER_LOGIN', 'Параметри за улоговање');
define('LANG_CONFIG_LOGPATH', 'Директоријум лог фајлова');
define('LANG_CONFIG_LOGPATH_DIR', 'Директоријум лог фајлова не постоји. Молимо направите та');
define('LANG_CONFIG_LOGPATH_KO', 'Директоријум лог фајлова нема дозволу писања, молимо дајте дозволу писања кориснику PHP-a');
define('LANG_CONFIG_CACHEPATH', 'Директоријум привремених фајлова');
define('LANG_CONFIG_CACHEPATH_DIR', 'Директоријум привремених фајлова не постоји. Молимо направите та');
define('LANG_CONFIG_CACHEPATH_KO', 'Директоријум привремених фајлова нема дозволу писања, молимо дајте дозволу писања кориснику PHP-a');
define('LANG_CONFIG_REFERERS', 'Имена домена (раздовљени зарезима) којима је дозвољено да логују кликове на овом серверу');
define('LANG_CONFIG_GROUPS', 'Имена група (раздовљени зарезима) којима је дозвољено да логују кликове на овом серверу');
define('LANG_CONFIG_FILESIZE', 'Максимална величина лог фајла (у килобајтима) за групу у току дана (1000 кликова је око 25KB, 0 = нема лимита величине)');
define('LANG_CONFIG_CHECK', 'Проверите конфигурацију');
define('LANG_CONFIG_MEMORY', 'Лимит меморије (стандардна php.ini вредност: %dMB, лимити: од %d до %dMB, али <a href="http://www.Dugwood.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">будите опрезни са великим вредностима</a>)');
define('LANG_CONFIG_MEMORY_KO', 'молимо останите унутар специфицираног опсега');
define('LANG_CONFIG_STEP', 'Груписање кликова по X*X пикселним зонама (убрзава презентацију топлотних мапа)');
define('LANG_CONFIG_STEP_KO', 'зоне не могу бити мање од 1x1 пиксела');
define('LANG_CONFIG_DOT', 'Величина у пикселима топлотне мапе');
define('LANG_CONFIG_DOT_KO', 'Величина у пикселима не може бити нула');
define('LANG_CONFIG_PALETTE', 'Ако видите црвене квадрате на топлотним мапама кликните на ову кутијицу');
define('LANG_CONFIG_HEATMAP', 'Прикажите топлотну мапу (уместо мапе кликова)');
define('LANG_CONFIG_FLASHES', 'Сакрите &lt;Flash&gt; објекте');
define('LANG_CONFIG_IFRAMES', 'Сакрите &lt;iframe&gt; рамове');
define('LANG_CONFIG_YESTERDAY', 'Прикажи јучерашњу статистику на почетку (а не данашњу)');
define('LANG_CONFIG_ALPHA', 'Ниво транспарентности (0 => 100)');
define('LANG_CONFIG_FLUSH', 'Аутоматско брисање статистике старије од X дана (0 = сачуфај све фајлове, није препоручено)');
define('LANG_CONFIG_START', 'Први дан у недељи');
define('LANG_CONFIG_START_M', 'Понедељак');
define('LANG_CONFIG_START_S', 'Недеља');
define('LANG_CONFIG_ADMIN_LOGIN', 'Идентификатор администратора');
define('LANG_CONFIG_ADMIN_PASS', 'Шифра администратора (укуцајте је два пута)');
define('LANG_CONFIG_VIEWER_LOGIN', 'Идентификатор посетиоца (ако је празан, налог је онемогућен)');
define('LANG_CONFIG_VIEWER_PASS', 'Шифра посетиоца (укуцајте је два пута)');
define('LANG_CONFIG_LOGIN', 'идентификатор мора имати барем 4 карактера');
define('LANG_CONFIG_PASS', 'шифра је празна');
define('LANG_CONFIG_MATCH', 'шифре нису исте');
define('LANG_CONFIG_SAVE', 'Сачувајте конфигурацију');
define('LANG_CLEANER_RUNNING', 'Чишћење је у прогресу...');
define('LANG_CLEANER_RUN', 'Чишћење завршено: %d фајлова и %d директоријума је обрисано');
define('LANG_CANCEL', 'Поништи');
define('LANG_UPGRADE', 'Надгради');
define('LANG_UPGRADE_NEXT', 'Проверите конфигурацију, онда је сачувајте да наставите са надградњом');
?>
