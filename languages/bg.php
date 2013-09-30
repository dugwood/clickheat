<?php
/**
 * ClickHeat: Bulgarian Language
 * 
 * @author Stefan - AVM - www.aspenvalleymortgage.com
 * @author Topelt - Topelt - www.topelt.com
 * @since 12/04/2008
**/

/** Fix for Piwik bad behaviour */
if (defined('LANG_USER'))
{
	return true;
}

define('LANG_USER', 'Потребител');
define('LANG_PASSWORD', 'Парола');
define('LANG_LOGIN', 'Вписване');
define('LANG_LOGIN_ERROR', 'Гревка, невалиден потребител или парола');
define('LANG_LOGOUT', 'Отписване');
define('LANG_UNKNOWN_DIR', 'Неможе да установи директория, моля свържете се с наз');
define('LANG_DAYS', 'П,В,С,Ч,П,С,Н');
define('LANG_RANGE', 'Ден, Седмица, Месец');
define('LANG_MONTHS', '0,Януари,Февруари,Март,Април,Май,Юни,Юли,Август,Септември,Октонври,Ноември,Декември');
define('LANG_SITE', 'Уеб сайт');
define('LANG_GROUP', 'Група');
define('LANG_BROWSER', 'Браузър');
define('LANG_ALL', 'Всички');
define('LANG_UNKNOWN', 'Друг/Неизвестен');
define('LANG_EXAMPLE_URL', 'Уеб страница');
define('LANG_LAYOUT', 'Групов лайоут');
define('LANG_LAYOUT_FIXED', 'Фиксирано съдържание/меню');
define('LANG_LAYOUT_LIQUID', 'Течно съдържание/меню ( автоматично наместване на достъпно място)');
define('LANG_LAYOUT_NONE', 'Отстъп (няма връзка), течен');
define('LANG_LAYOUT_0', 'Течно съдържание и меню');
define('LANG_LAYOUT_1', 'Фиксира ляво меню, течно съдържание');
define('LANG_LAYOUT_2', 'Фиксира централно полето (автоматичен ляв и десен отстъп)');
define('LANG_LAYOUT_3', 'Закрепя в ляво фиксираното съдържание (автоматичен отстъп от дястно)');
define('LANG_LAYOUT_4', 'Фиксира дястно меню, течно съдържание');
define('LANG_LAYOUT_5', 'Фиксира лявото и дясното меню, течно съдържание');
define('LANG_LAYOUT_6', 'Закрепя в дястно фиксираното съдържание (автоматичен отстъп от ляво)');
define('LANG_LAYOUT_LEFT', 'Фиксира лявата ширина (pixels)');
define('LANG_LAYOUT_CENTER', 'Фиксира централната ширина (pixels)');
define('LANG_LAYOUT_RIGHT', 'Фиксира дястната ширина (pixels)');
define('LANG_SCREENSIZE', 'Размер на екрана');
define('LANG_HEATMAP', 'Heatmap със прозрачност');
define('LANG_LATEST_CHECK', 'Ъпгрейд');
define('LANG_LATEST_KO', 'Неможе да намери динамино последната версия, вашата е %s, последната прочетена директория от ъеб сайта на Labsmedia е');
define('LANG_LATEST_OK', 'Вие имате последната версия (%s)');
define('LANG_LATEST_NO', 'Вашата версия (%s) не е последната достъпна (%s). Може да свалите последната версия от нашия уеб сайт:');
define('LANG_LOG_MY_CLICKS', 'Натисни за вписване?');
define('LANG_JAVASCRIPT_ADMIN_COOKIE', 'За да не запулвате нашата статистика,вие може да не се канектвате\n\nOK = Натисни за вписване\nCancel = Не се вписваи');
define('LANG_JAVASCRIPT', 'Javascript код за поставяне на старници които искате да учите');
define('LANG_JAVASCRIPT_IMAGE', 'Показва ClickHeat лого на изучажаните страници: ');
define('LANG_JAVASCRIPT_SHORT', 'Компактен код (3 реда)');
define('LANG_JAVASCRIPT_QUOTA', 'Мксимален  брои кликвания за страница и посещения, следващите кликвания няма да бъдат запазени (0 = без лимит, 3 е добър избор)');
define('LANG_JAVASCRIPT_SITE', 'Име на уебсайта (позволени символи: A-Z, a-z, 0-9, долна черта, тире, точка)');
define('LANG_JAVASCRIPT_GROUP', 'Име на групата, за да групираме подобни страници за олеснен анализ');
define('LANG_JAVASCRIPT_GROUP0', 'използва ключова дума');
define('LANG_JAVASCRIPT_GROUP1', 'позволени символи: A-Z, a-z, 0-9, долна черта, тире, точка');
define('LANG_JAVASCRIPT_GROUP2', ' използва заглавието на страницита (<a href="http://www.labsmedia.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">непрепорачителноно</a>)');
define('LANG_JAVASCRIPT_GROUP3', 'използван адрес на страницата(<a href="http://www.labsmedia.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">непрепорачително</a>)');
define('LANG_JAVASCRIPT_PASTE', 'Copy and paste кода в долната част на вашата страницата, точно преди краят на страницата (преди &lt;/body&gt; tag):');
define('LANG_JAVASCRIPT_DEBUG', 'веднаж поставен кода във вашата страница, незабравяите да тествате дали работи, извикваики вашата страница с паранетри <span class="error">debugclickheat</span>. За принер http://www.site.com/index.html извиква http://www.site.com/index.html<span class="error">?debugclickheat</span>. Трябва да видите съобщенир от мястото на Clickheat.  Ако има проблем, свържете се с наз');
define('LANG_NO_CLICK_BELOW', 'No clicks recorded beneath this line'); // Leave this line in English please
define('LANG_ERROR_GROUP', 'Непозната група. _JAVASCRIPT_');
define('LANG_ERROR_DATA', 'няма логове за избрания период (първо махнете филтрите: браузера, ширината на монитора). _JAVASCRIPT_');
define('LANG_ERROR_JAVASCRIPT', 'Правилни ли инсталирахте Javascript кода на вашият сайт?');
define('LANG_ERROR_FILE', 'неможе да отвори лог файла');
define('LANG_ERROR_SCREEN', 'нестандартен размер на екрана');
define('LANG_ERROR_LOADING', 'Генерира изображение, моля изчакаите...');
define('LANG_ERROR_FIXED', 'цялата ширина е зададена, това не е възможно. Моля сменете оформлението на ширината си.');
define('LANG_DEFAULT', 'автоматично');
define('LANG_CHECKS', 'Първичен контрол');
define('LANG_CHECK_WRITABLE', 'Задайте разрешение на конфигурационната директория');
define('LANG_CHECK_NOT_WRITABLE', 'PHP няма зададено разрешение на конфигурационната директория');
define('LANG_CHECK_GD', 'GD графична библиотека');
define('LANG_CHECK_GD_IMG', 'imagecreatetruecolor() недостъпна, неможе да създаде изображение (с добро качество), проверете че GD е инсталирана');
define('LANG_CHECK_GD_ALPHA', 'imagecolorallocatealpha() недостъпна, неможе да създаде прозрачно изображение (можете да игнорирате това, но прозрачноста е препоръчителна)');
define('LANG_CHECK_GD_PNG', 'imagepng() недостъпна, неможе да създаде PNG изображение');
define('LANG_CHECKS_OK', 'Следваща стъпка: конфигурация');
define('LANG_CHECKS_KO', 'Един или повече тестове баха провалени. Моля оправете проблемите и рефрешнете страницата.');
define('LANG_CONFIG', 'конфигурация');
define('LANG_CONFIG_HEADER_HEATMAP', 'Heatmap интерпретира');
define('LANG_CONFIG_HEADER_DISPLAY', 'Главен дисплей');
define('LANG_CONFIG_HEADER_SECURITY', 'сигурност');
define('LANG_CONFIG_HEADER_LOGIN', 'Потребителска информация');
define('LANG_CONFIG_LOGPATH', 'Директория за логовете');
define('LANG_CONFIG_LOGPATH_DIR', 'Директория за логовете не съществува. Моля създаите я');
define('LANG_CONFIG_LOGPATH_KO', 'Директория за логовете няма правилно разрешение, моля задаите правилно разрешение за PHP потрепител');
define('LANG_CONFIG_CACHEPATH', 'Директория за времените филове');
define('LANG_CONFIG_CACHEPATH_DIR', 'Директория за времените филове не съществува. Моля създайте я');
define('LANG_CONFIG_CACHEPATH_KO', 'Директория за времените файлове няма правилно разрешение, моля задаите правилно разрешение за PHP потрепител');
define('LANG_CONFIG_REFERERS', 'имена на домейните (разделете със запетая) разреши лог кликване на този сервър');
define('LANG_CONFIG_GROUPS', 'имена на групата (разделете със запетая) разреши лог кликване на този сервър');
define('LANG_CONFIG_FILESIZE', 'максимален размер на лог файла (в KB) на групата през ден (1000 кликвания са около 25KB, 0 = няма лимит на размера)');
define('LANG_CONFIG_CHECK', 'провери конфигурацията');
define('LANG_CONFIG_MEMORY', 'ограничения запаметта (автоматично php.ini стойност: %dMB, лимит: от %d до %dMB, но <a href="http://www.labsmedia.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">бъдете внимателни с големи стойности</a>)');
define('LANG_CONFIG_MEMORY_KO', 'моля ограничете се с размера на спецификациите');
define('LANG_CONFIG_STEP', 'Групиране на X*X pixels\' зона (увеличаване на скороста на heatmaps)');
define('LANG_CONFIG_STEP_KO', 'зоната неможе да бъде под 1x1 pixels');
define('LANG_CONFIG_DOT', 'Heatmaps\' няма размер (pixels)');
define('LANG_CONFIG_DOT_KO', 'размера на точката неможе да е нула');
define('LANG_CONFIG_PALETTE', 'ако видите червен квадрат на heatmaps проверете тази кутия');
define('LANG_CONFIG_HEATMAP', 'покажи heatmap (освен карта на кликовете)');
define('LANG_CONFIG_FLASHES', 'скрива &lt;Flash&gt; обекти'); 
define('LANG_CONFIG_IFRAMES', 'скрива &lt;iframe&gt; рамката'); 
define('LANG_CONFIG_YESTERDAY', 'показва вчерашната статистика при старта (освен днес)');
define('LANG_CONFIG_ALPHA', 'ниво на прозрачността (0 => 100)');
define('LANG_CONFIG_FLUSH', 'Автоматично изчистване на статистиката от преди Х дена (0 = запазва всички файлове, не е препорачително)');
define('LANG_CONFIG_START', 'първият ден от седмицата');
define('LANG_CONFIG_START_M', 'понедекник');
define('LANG_CONFIG_START_S', 'неделя');
define('LANG_CONFIG_ADMIN_LOGIN', 'Администратор');
define('LANG_CONFIG_ADMIN_PASS', 'парола (въвежда се двапъти)');
define('LANG_CONFIG_VIEWER_LOGIN', 'посетител (ако е празно, акаунта е недостъпен)');
define('LANG_CONFIG_VIEWER_PASS', 'парола (въвежда се двапъти)');
define('LANG_CONFIG_LOGIN', 'идентификатра не трябва де е под 4 символа');
define('LANG_CONFIG_PASS', 'паролата е празна');
define('LANG_CONFIG_MATCH', 'паролата не е избрана');
define('LANG_CONFIG_SAVE', 'запази конфигурацията');
define('LANG_CLEANER_RUNNING', 'В процес на изчистване...');
define('LANG_CLEANER_RUN', 'Изчистването е завършено: %d файложете и %d директориите бяха премахнати');
define('LANG_CANCEL', 'Отмяна');
define('LANG_UPGRADE', 'Надгради');
define('LANG_UPGRADE_NEXT', 'Проверете вашата конфигурация и я запазете за да завършите хадграждането');
?>