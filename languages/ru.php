<?php
/**
 * ClickHeat : Fichier de langue : russe
 *
 * @author ProfessorF
 * @since 18/04/2007
**/

/** Fix for Piwik bad behaviour */
if (defined('LANG_USER'))
{
	return true;
}

define('LANG_USER', 'Имя пользователя');
define('LANG_PASSWORD', 'Пароль');
define('LANG_LOGIN', 'Вход');
define('LANG_LOGIN_ERROR', 'Вход невозможен, неверный логин или имя пользователя');
define('LANG_LOGOUT', 'Выход');
define('LANG_UNKNOWN_DIR', 'Невозможно определить текущую директорию, пожалуйста, сообщите нам об этом');
define('LANG_DAYS', 'П,В,С,Ч,П,С,В');
define('LANG_RANGE', 'День,Неделя,Месяц');
define('LANG_MONTHS', '0,Январь,Февраль,Март,Апрель,Май,Июнь,Июль,Август,Сентябрь,Октябрь,Ноябрь,Декабрь');
define('LANG_SITE', 'Сайт');
define('LANG_GROUP', 'Группа');
define('LANG_BROWSER', 'Браузер');
define('LANG_ALL', 'Все');
define('LANG_UNKNOWN', 'Другой/неизвестный');
define('LANG_EXAMPLE_URL', 'Страница');
define('LANG_LAYOUT', 'Разметка страниц');
define('LANG_LAYOUT_FIXED', 'Фиксированный размер содержимого/меню');
define('LANG_LAYOUT_LIQUID', 'Переменный размер содержимого/меню (автоматически регулируется в пределах доступного пространства)');
define('LANG_LAYOUT_NONE', 'Поле (пустое пространство), переменный размер');
define('LANG_LAYOUT_0', 'Переменный размер содержимого и меню');
define('LANG_LAYOUT_1', 'Фиксированное меню слева, переменный размер содержимого');
define('LANG_LAYOUT_2', 'Фиксированное содержимое в центре (автоматические поля слева и справа)');
define('LANG_LAYOUT_3', 'Фиксированное содержимое слева (автоматическое поле справа)');
define('LANG_LAYOUT_4', 'Фиксированное меню справа, переменный размер содержимого');
define('LANG_LAYOUT_5', 'Фиксированные меню слева и справа, переменный размер содержимого');
define('LANG_LAYOUT_6', 'Фиксированное содержимое справа (автоматическое поле слева)');
define('LANG_LAYOUT_LEFT', 'Фиксированная ширина левой части (в пикселях)');
define('LANG_LAYOUT_CENTER', 'Фиксированная ширина центральной части (в пикселях)');
define('LANG_LAYOUT_RIGHT', 'Фиксированная ширина правой части (в пикселях)');
define('LANG_SCREENSIZE', 'Размер экрана');
define('LANG_HEATMAP', 'Карта и ее прозрачность');
define('LANG_LATEST_CHECK', 'Обновить');
define('LANG_LATEST_KO', 'Невозможно динамически найти новую версию, Ваша версия: %s, а самая последняя, полученная непосредственно с сайта Dugwood, - это'); 
define('LANG_LATEST_OK', 'У вас самая последняя версия (%s)');
define('LANG_LATEST_NO', 'Ваша версия (%s) устарела, новая: (%s). Вы можете скачать новую версию на нашем сайте:');
define('LANG_LOG_MY_CLICKS', 'Записывать Ваши клики?');
define('LANG_JAVASCRIPT_ADMIN_COOKIE', 'Чтобы избежать засорения "статистики",\nВы можете отказаться от записи Ваших кликов\n\nOK = Записывать Ваши клики\nCancel = Не делать этого');
define('LANG_JAVASCRIPT', 'JavaScript код должен быть установлен на страницы, для которых вы хотите собирать клики');
define('LANG_JAVASCRIPT_IMAGE', 'Отображать логотип ClickHeat на страницах : ');
define('LANG_JAVASCRIPT_SHORT', 'Компактный код (только 3 строчки)');
define('LANG_JAVASCRIPT_QUOTA', 'Максимальное количество кликов для страницы и/или посетителя, все последующие не будут учтены (0 = без ограничений, 3 - хороший вариант)');
define('LANG_JAVASCRIPT_SITE', 'Название сайта (допустимые символы: A-Z, a-z, 0-9, символ подчеркивания, дефис, точка)');
define('LANG_JAVASCRIPT_GROUP', 'Имя группы, для группировки сходных страниц с целью упрощения анализа');
define('LANG_JAVASCRIPT_GROUP0', 'использовать ключевое слово');
define('LANG_JAVASCRIPT_GROUP1', 'допустимые символы: A-Z, a-z, 0-9, символ подчеркивания, дефис, точка');
define('LANG_JAVASCRIPT_GROUP2', 'использовать заголовок страницы (<a href="http://www.Dugwood.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">не рекомендуется</a>)');
define('LANG_JAVASCRIPT_GROUP3', 'использовать адрес страницы (<a href="http://www.Dugwood.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">не рекомендуется</a>)');
define('LANG_JAVASCRIPT_PASTE', 'Скопируйте и вставьте следующий код в конец вашей страницы (перед тегом &lt;/body&gt;):');
define('LANG_JAVASCRIPT_DEBUG', 'После установки кода на Ваши страницы не забудьте проверить их работоспособность, открывая страницы с параметром <span class="error">debugclickheat</span>. Например, для сайта http://www.site.com/index.html попробуйте http://www.site.com/index.html<span class="error">?debugclickheat</span>. Вы должны увидеть JavaScript уведомление, отображающее состояние Clickheat. Если у Вас возникают какие-то затруднения, обратитесь к нам за помощью');
define('LANG_NO_CLICK_BELOW', 'No clicks recorded beneath this line'); // Leave this line in English please
define('LANG_ERROR_GROUP', 'Неизвестная группа. _JAVASCRIPT_');
define('LANG_ERROR_DATA', 'Нет данных за выбранный период (первым делом проверьте фильтры: браузер и размер экрана). _JAVASCRIPT_');
define('LANG_ERROR_JAVASCRIPT', 'Правильно ли был установлен JavaScript код на ваших страницах?');
define('LANG_ERROR_FILE', 'невозможно открыть файл логов');
define('LANG_ERROR_SCREEN', 'Нестандартное разрешение экрана');
define('LANG_ERROR_LOADING', 'Готовим изображение, пожалуйста, подождите...');
define('LANG_ERROR_FIXED', 'Все размеры фиксированны, это невозможно. Пожалуйста, изменить один из размеров выше.');
define('LANG_DEFAULT', 'по-умолчанию');
define('LANG_CHECKS', 'Предварительная проверка');
define('LANG_CHECK_WRITABLE', 'Права на запись в директорию конфигурации');
define('LANG_CHECK_NOT_WRITABLE', 'PHP не имеет прав на запись в директорию конфигурации');
define('LANG_CHECK_GD', 'GD (графическая библиотека)');
define('LANG_CHECK_GD_IMG', 'Функция imagecreatetruecolor() недоступна, невозможно создать изображение (хорошего качества), убедитесь, что GD установлена');
define('LANG_CHECK_GD_ALPHA', 'Функция imagecolorallocatealpha() недоступна, невозможно создать полупрозрачное изображение (на это можно не обращать внимание, но полупрозрачность действитльно рекомендована)');
define('LANG_CHECK_GD_PNG', 'Функция imagepng() недоступна, невозможно создать PNG изображение, жаль');
define('LANG_CHECKS_OK', 'Следующий шаг: настройка');
define('LANG_CHECKS_KO', 'Один или несколько тестов не пройдены успешно. Пожалуйста, исправьте проблемы и обновите эту страницу.');
define('LANG_CONFIG', 'Настройка');
define('LANG_CONFIG_HEADER_HEATMAP', 'Рендеринг карты');
define('LANG_CONFIG_HEADER_DISPLAY', 'Основное окно');
define('LANG_CONFIG_HEADER_SECURITY', 'Безопасность');
define('LANG_CONFIG_HEADER_LOGIN', 'Параметры входа');
define('LANG_CONFIG_LOGPATH', 'Директория логов');
define('LANG_CONFIG_LOGPATH_DIR', 'Невозможно создать директорию логов, пожалуйста, создайте ее самостоятельно и дайте права на запись в нее для PHP');
define('LANG_CONFIG_LOGPATH_KO', 'Нет прав на запись в директорию логов, пожалуйста, дайте права на запись в нее для PHP (не обращайте внимание, если вы используете другой тип логов, созданных cronolog или rotatelog, например)');
define('LANG_CONFIG_CACHEPATH', 'Директория временных файлов');
define('LANG_CONFIG_CACHEPATH_DIR', 'Директория для временных файлов не существует. Пожалуйста, создайте её');
define('LANG_CONFIG_CACHEPATH_KO', 'Нет прав на запись в директорию для временных файлов, пожалуйста, дайте права на запись в нее для PHP');
define('LANG_CONFIG_REFERERS', 'Доменные имена (разделенные запятыми) с которых можно собирать статистику кликов на этом сервере');
define('LANG_CONFIG_GROUPS', 'Названия групп (разделенные запятыми) с которых можно собирать статистику кликов на этом сервере');
define('LANG_CONFIG_FILESIZE', 'Максимальный размер лог-файла (в Кб) для группы в день (1000 кликов - это примерно 25 Кб, 0 = без ограничений)');
define('LANG_CONFIG_CHECK', 'Проверить установки');
define('LANG_CONFIG_MEMORY', 'Лимит памяти (по умолчанию в php.ini установлено: %dМБ, в пределах от %dМБ до %dМБ, но <a href="http://www.Dugwood.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">будьте осторожны с большими значениями</a>)');
define('LANG_CONFIG_MEMORY_KO', 'пожалуйста, не выходите за пределы');
define('LANG_CONFIG_STEP', 'Клики группируются по X*X-пиксельным зонам (ускорит отображение карты)');
define('LANG_CONFIG_STEP_KO', 'зоны не могут быть менее, чем 1x1 пикселей');
define('LANG_CONFIG_DOT', 'Размер точки на карте (в пикселях)');
define('LANG_CONFIG_DOT_KO', 'размер точки не может быть нулевым');
define('LANG_CONFIG_PALETTE', 'Если вы видите красные квадраты на карте, отметьте это поле');
define('LANG_CONFIG_HEATMAP', 'Отобразить плотность кликов (а не просто точки)'); 
define('LANG_CONFIG_FLASHES', 'Убрать &lt;Flash&gt; объекты'); 
define('LANG_CONFIG_IFRAMES', 'Убрать &lt;iframe&gt; фреймы'); 
define('LANG_CONFIG_YESTERDAY', 'Показывать сначала статистику за вчерашний день (а не сегодняшнюю)');
define('LANG_CONFIG_ALPHA', 'Уровень прозрачности (0 => 100)');
define('LANG_CONFIG_FLUSH', 'Автоматический сброс статистики, старше X дней (0 = сохранять все, не рекомендуется)');
define('LANG_CONFIG_START', 'Первый день недели');
define('LANG_CONFIG_START_M', 'Понедельник');
define('LANG_CONFIG_START_S', 'Воскресенье');
define('LANG_CONFIG_ADMIN_LOGIN', 'Идентификатор администратора');
define('LANG_CONFIG_ADMIN_PASS', 'Пароль администратора (введите дважды)');
define('LANG_CONFIG_VIEWER_LOGIN', 'идентификатор посетителя (отключено, если ничего не введено)');
define('LANG_CONFIG_VIEWER_PASS', 'Пароль посетителя (введите дважды)');
define('LANG_CONFIG_LOGIN', 'идентификатор должен состоять не менее, чем из 4 символов');
define('LANG_CONFIG_PASS', 'пароль пуст');
define('LANG_CONFIG_MATCH', 'пароли не совпадают');
define('LANG_CONFIG_SAVE', 'Сохранить установки');
define('LANG_CLEANER_RUNNING', 'удаление в процессе...');
define('LANG_CLEANER_RUN', 'Удаление завершено : %d файл(ов) и %d директория(ий) было удалено');
define('LANG_CANCEL', 'Отмена');
define('LANG_UPGRADE', 'Обновление');
define('LANG_UPGRADE_NEXT', 'Проверьте настройки, затем сохраните, чтобы закончить обновление');
?>
