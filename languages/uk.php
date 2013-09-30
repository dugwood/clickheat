<?php
/**
 * ClickHeat : Fichier de langue : ukrainian
 *
 * @author mr.petruccio
 * @since 18/04/2007
**/

/** Fix for Piwik bad behaviour */
if (defined('LANG_USER'))
{
	return true;
}

define('LANG_USER', 'Ім\'я користувача');
define('LANG_PASSWORD', 'Пароль');
define('LANG_LOGIN', 'Вхід');
define('LANG_LOGIN_ERROR', 'Вхід неможливий, неправильний логін чи ім\'я користувача');
define('LANG_LOGOUT', 'Вихід');
define('LANG_UNKNOWN_DIR', 'Неможливо визначити поточну директорію, будь-ласка, повідомте нам про це');
define('LANG_DAYS', 'Пн,Вт,Ср,Чт,Пт,Сб,Нд');
define('LANG_RANGE', 'День,Тиждень,Місяць');
define('LANG_MONTHS', '0,Січень,Лютий,Березень,Квітень,Травень,Червень,Липень,Серпень,Вересень,Жовтень,Листопад,Грудень');
define('LANG_SITE', 'Сайт');
define('LANG_GROUP', 'Група');
define('LANG_BROWSER', 'Бравзер');
define('LANG_ALL', 'Всі');
define('LANG_UNKNOWN', 'Інший/невідомий');
define('LANG_EXAMPLE_URL', 'Сторінка');
define('LANG_LAYOUT', 'Розмітка сторінок');
define('LANG_LAYOUT_FIXED', 'Фіксований розмір вмісту/меню');
define('LANG_LAYOUT_LIQUID', 'Змінний розмір вмісту/меню (автоматично регулюється в межах вільного простору)');
define('LANG_LAYOUT_NONE', 'Поле (пустий простір), змінний розмір');
define('LANG_LAYOUT_0', 'Змінний розмір вмісту і меню');
define('LANG_LAYOUT_1', 'Фіксоване меню зліва, змінний розмір вмісту');
define('LANG_LAYOUT_2', 'Фіксований вміст в центрі (автоматичні поля зліва і справа)');
define('LANG_LAYOUT_3', 'Фіксований вміст зліва (автоматичне поле справа)');
define('LANG_LAYOUT_4', 'Фіксоване меню справа, змінний розмір вмісту');
define('LANG_LAYOUT_5', 'Фіксоване меню зліва і справа, змінний розмір вмісту');
define('LANG_LAYOUT_6', 'Фіксований вміст справа (автоматичне поле зліва)');
define('LANG_LAYOUT_LEFT', 'Фіксована ширина левой части (в пикселях)');
define('LANG_LAYOUT_CENTER', 'Фіксована ширина центральної частини (в пікселях)');
define('LANG_LAYOUT_RIGHT', 'Фіксована ширина правої частини (в пікселях)');
define('LANG_SCREENSIZE', 'Розмір екрану');
define('LANG_HEATMAP', 'Карта (напівпрозора)');
define('LANG_LATEST_CHECK', 'Поновити');
define('LANG_LATEST_KO', 'Неможливо знайти останню доступну версію. Your release: %s, latest one is');
define('LANG_LATEST_OK', 'У Вас сама остання версія (%s)');
define('LANG_LATEST_NO', 'Ваша версія (%s) застаріла, нова: (%s). Ви можете завантажити нову версію на нашому сайті:');
define('LANG_LOG_MY_CLICKS', 'Log my clicks?');
define('LANG_JAVASCRIPT_ADMIN_COOKIE', 'In order to avoid pollution of your statistics,\nyou can choose not to log your own clicks\n\nOK = log my clicks\nCancel = don\'t log my clicks');
define('LANG_JAVASCRIPT', 'Javascript код має бути встановлений на сторінки, які Ви хочете вивчати');
define('LANG_JAVASCRIPT_IMAGE', 'Показувати логотип ClickHeat на сторінках : ');
define('LANG_JAVASCRIPT_SHORT', 'Short code (3 lines only)');
define('LANG_JAVASCRIPT_QUOTA', 'Максимальна кількість кліків для сторінки і/або відвідувачів, всі наступні не будуть враховані (0 = без обмежень, 3 - хороший варіант)');
define('LANG_JAVASCRIPT_SITE', 'Назва сайту (допустимі символи: A-Z, a-z, 0-9, символ підкреслення, дефіс, крапка)');
define('LANG_JAVASCRIPT_GROUP', 'Ім\'я групи, для групування подібних сторінок з цілью спрощення аналізу');
define('LANG_JAVASCRIPT_GROUP0', 'використовувати ключове слово');
define('LANG_JAVASCRIPT_GROUP1', 'допустимі символи: A-Z, a-z, 0-9, символ підкреслення, дефіс, крапка');
define('LANG_JAVASCRIPT_GROUP2', 'використовувати заголовок сторінки (<a href="http://www.labsmedia.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">не рекомендується</a>)');
define('LANG_JAVASCRIPT_GROUP3', 'використовувати адресу сторінки (<a href="http://www.labsmedia.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">не рекомендується</a>)');
define('LANG_JAVASCRIPT_PASTE', 'Скопіюйте і вставте наступний код в кінець ваших сторінок (перед тегом &lt;/body&gt;):');
define('LANG_JAVASCRIPT_DEBUG', 'Після того як код вставлено на Ваші сторінки не забудьте перевірити їх, відкриваючи сторінки з параметром <span class="error">debugclickheat</span>. Наприклад, для сайту http://www.site.com/index.html попробуйте http://www.site.com/index.html<span class="error">?debugclickheat</span>. Ви повинні побачити Javascript повідомлення, що показує стан Clickheat. Якщо у Вас виникають якісь труднощі, зверніться до нас за допомогою');
define('LANG_NO_CLICK_BELOW', 'No clicks recorded beneath this line'); // Leave this line in English please
define('LANG_ERROR_GROUP', 'Невідома група. _JAVASCRIPT_');
define('LANG_ERROR_DATA', 'Нема даних за вибраний період (перевірте спочатку фільтри: бравзер і розмір екрану). _JAVASCRIPT_');
define('LANG_ERROR_JAVASCRIPT', 'Чи було правильно вставлено Javascript код на Ваших сторінках?');
define('LANG_ERROR_FILE', 'Неможливо відкрити файл логів');
define('LANG_ERROR_SCREEN', 'Нестандартне разширення екрану');
define('LANG_ERROR_LOADING', 'Готуємо зображення, будь-ласка, почекайте...');
define('LANG_ERROR_FIXED', 'Всі розміри фіксовані, це неможливо. Будь-ласка, змініть один з розмірів вище.');
define('LANG_DEFAULT', 'по-замовчуванню');
define('LANG_CHECKS', 'Попередні перевірки');
define('LANG_CHECK_WRITABLE', 'Права на запис в директорію конфігурації');
define('LANG_CHECK_NOT_WRITABLE', 'PHP не має прав на запис в директорію конфигурації');
define('LANG_CHECK_GD', 'GD (графічна бібліотека)');
define('LANG_CHECK_GD_IMG', 'Функція imagecreatetruecolor() недоступна, неможливо створити зображення (хорошої якості), переконайтесь, що GD встановлена');
define('LANG_CHECK_GD_ALPHA', 'Функція imagecolorallocatealpha() недоступна, неможливо створити напівпрозоре зображення (це можна ігнорувати, але напівпрозорість рекомендовано)');
define('LANG_CHECK_GD_PNG', 'Функція imagepng() недоступна, неможливо створити PNG зображення, шкода');
define('LANG_CHECKS_OK', 'Наступний крок: налаштування');
define('LANG_CHECKS_KO', 'Один або декілька тестів не виконано. Будь-ласка, виправте проблеми і поновіть цю сторінку.');
define('LANG_CONFIG', 'Налаштування');
define('LANG_CONFIG_HEADER_HEATMAP', 'Рендеринг карти');
define('LANG_CONFIG_HEADER_DISPLAY', 'Основне вікно');
define('LANG_CONFIG_HEADER_SECURITY', 'Безпека');
define('LANG_CONFIG_HEADER_LOGIN', 'Параметри входу');
define('LANG_CONFIG_LOGPATH', 'Директорія логів');
define('LANG_CONFIG_LOGPATH_DIR', 'Неможливо створити директорію логів, будь-ласка, створіть її самостійно і дайте права на запис в ню для PHP');
define('LANG_CONFIG_LOGPATH_KO', 'Немає прав на запис в директорію логів, будь-ласка, дайте права на запис в ню для PHP (не звертайте увагу, якщо Ви використовуєте інший тип логів, створених cronolog чи rotatelog, наприклад)');
define('LANG_CONFIG_CACHEPATH', 'Директорія тимчасових файлів');
define('LANG_CONFIG_CACHEPATH_DIR', 'Директорії для тимчасових файлів не існує. будь-ласка, створіть її');
define('LANG_CONFIG_CACHEPATH_KO', 'Немає прав на запис в директорію для тимчасових файлів, будь-ласка, дайте права на запис в ню для PHP');
define('LANG_CONFIG_REFERERS', 'Доменні імена (розділені комами) з яких можна збирати статистику на цьому сервері');
define('LANG_CONFIG_GROUPS', 'Назви груп (розділені комами) з яких можна збирати статистику кліків на цьому сервері');
define('LANG_CONFIG_FILESIZE', 'Максимальний размір лог-файлу (в Кб) для групи в день (1000 кліків - це приблизно 25 Кб, 0 = без обмежень)');
define('LANG_CONFIG_CHECK', 'Перевірити налаштування');
define('LANG_CONFIG_MEMORY', 'Ліміт пам\'яті (по замовчуванню в php.ini встановлено: %dМБ, ліміт від %dМБ до %dМБ, але <a href="http://www.labsmedia.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">будьте обережними з великими значеннями</a>)');
define('LANG_CONFIG_MEMORY_KO', 'будь-ласка, не виходьте за межі');
define('LANG_CONFIG_STEP', 'Кліки групуються по X*X-піксельним зонам (пришвидчить відображення карти)');
define('LANG_CONFIG_STEP_KO', 'зони не можуть бути меньшими, ніж 1x1 пікселів');
define('LANG_CONFIG_DOT', 'Розмір точки на карті (в пікселях)');
define('LANG_CONFIG_DOT_KO', 'розмір точки не може бути нульовим');
define('LANG_CONFIG_PALETTE', 'Якщо Ви бачите червоні квадрати на карті, відзначте це поле');
define('LANG_CONFIG_HEATMAP', 'Показувати густину кліків (а не просто точки)');
define('LANG_CONFIG_FLASHES', 'Сховати &lt;Flash&gt; об\'єкти');
define('LANG_CONFIG_IFRAMES', 'Сховати &lt;iframe&gt; фрейми');
define('LANG_CONFIG_YESTERDAY', 'Показувати спочатку статистику за вчорашній день (а не сьогоднішню)');
define('LANG_CONFIG_ALPHA', 'Рівень прозорості (0 => 100)');
define('LANG_CONFIG_FLUSH', 'Автоматичне скидання статистики, старшої X днів (0 = зберігати все, не рекомендується)');
define('LANG_CONFIG_START', 'Перший день тижня');
define('LANG_CONFIG_START_M', 'Понеділок');
define('LANG_CONFIG_START_S', 'Неділя');
define('LANG_CONFIG_ADMIN_LOGIN', 'Ідентифікатор адміністратора');
define('LANG_CONFIG_ADMIN_PASS', 'Пароль адміністратора (введіть двічі)');
define('LANG_CONFIG_VIEWER_LOGIN', 'Ідентифікатор користувача (відключено, якщо нічого не введено)');
define('LANG_CONFIG_VIEWER_PASS', 'Пароль користквача (введіть двічі)');
define('LANG_CONFIG_LOGIN', 'ідентифікатор має складатися з не меньш, ніж з 4 символів');
define('LANG_CONFIG_PASS', 'пароль пустий');
define('LANG_CONFIG_MATCH', 'паролі не співпадають');
define('LANG_CONFIG_SAVE', 'Зберегти налаштування');
define('LANG_CLEANER_RUNNING', 'видалення в процесі...');
define('LANG_CLEANER_RUN', 'Видалення завершено : %d файл(ів) і %d директорія(ій) було видалено');
define('LANG_CANCEL', 'Скасувати');
define('LANG_UPGRADE', 'Поновлення');
define('LANG_UPGRADE_NEXT', 'Перевірте налаштування, збережіть для завершення поновлення');
?>