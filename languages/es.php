<?php
/**
 * ClickHeat: Version en ESPAÑOL
 * 
 * @author: buzkall. mail: buzkall@gmail.com 
 * @since 22/11/2007
**/

/** Fix for Piwik bad behaviour */
if (defined('LANG_USER'))
{
	return true;
}

define('LANG_USER', 'Usuario');
define('LANG_PASSWORD', 'Contraseña');
define('LANG_LOGIN', 'Entrar');
define('LANG_LOGIN_ERROR', 'Error al entrar, usuario o contraseña incorrectos');
define('LANG_LOGOUT', 'Salir');
define('LANG_UNKNOWN_DIR', 'Directorio indefinido, por favor, contacte con nosotros');
define('LANG_DAYS', 'L,M,X,J,V,S,D');
define('LANG_RANGE', 'Dia,Semana,Mes');
define('LANG_MONTHS', '0,Enero,Febrero,Marzo,Abril,Mayo,Junio,Julio,Agosto,Septiembre,Octubre,Noviembre,Diciembre');
define('LANG_SITE', 'Página web');
define('LANG_GROUP', 'Grupo');
define('LANG_BROWSER', 'Navegador');
define('LANG_ALL', 'Todos');
define('LANG_UNKNOWN', 'Otro/desconocido');
define('LANG_EXAMPLE_URL', 'Página web');
define('LANG_LAYOUT', 'Diseño de grupo');
define('LANG_LAYOUT_FIXED', 'Contenido/menú fijo');
define('LANG_LAYOUT_LIQUID', 'Contenido/menú flotante (se ajusta automaticamente al espacio disponible');
define('LANG_LAYOUT_NONE', 'Margen (sin contendo), flotante');
define('LANG_LAYOUT_0', 'Contenido flotante y menu');
define('LANG_LAYOUT_1', 'Menú fijo a la izquierda, contenido flotante');
define('LANG_LAYOUT_2', 'Contenido fijo y centrado (margenes derecho e izquierdo automáticos)');
define('LANG_LAYOUT_3', 'Contenido fijo a la izquierda (margen derecho automatico)');
define('LANG_LAYOUT_4', 'Menú fijo a la derecha, contenido flotante');
define('LANG_LAYOUT_5', 'Menus fijos a derecha e izquierda, contenido flotante');
define('LANG_LAYOUT_6', 'Contenido fijo a la derecha (margen izquierdo automático)');
define('LANG_LAYOUT_LEFT', 'Distancia fija a la izquierda (pixels)');
define('LANG_LAYOUT_CENTER', 'Distancia fija centro (pixels)');
define('LANG_LAYOUT_RIGHT', 'Distancia fija derecha (pixels)');
define('LANG_SCREENSIZE', 'Tamaño de pantalla');
define('LANG_HEATMAP', 'Gráfico y su transparencia');
define('LANG_LATEST_CHECK', 'Actualizar');
define('LANG_LATEST_KO', 'No se encuentra automáticamente la última versión disponible, la suya es %s, la última leída en la web de Dugwood es');
define('LANG_LATEST_OK', 'Tiene la última versión disponible (%s)');
define('LANG_LATEST_NO', 'Su versión (%s) no es la última disponble (%s). Puede descargar la última en nuestra web:');
define('LANG_LOG_MY_CLICKS', '¿Guardar mis clicks?');
define('LANG_JAVASCRIPT_ADMIN_COOKIE', 'Para evitar contaminar sus estadisticas,\npuede elegir no guardar sus propios clicks\n\nOK = guardar mis click\nCancelar = no guardar mis clicks');
define('LANG_JAVASCRIPT', 'Código Javascript que debe pegar en las páginas que quiera analizar');
define('LANG_JAVASCRIPT_IMAGE', 'Mostrar el logo de ClickHeat en la página analizada: ');
define('LANG_JAVASCRIPT_SHORT', 'Código compacto (solo 3 líneas)');
define('LANG_JAVASCRIPT_QUOTA', 'Máximo número de click por página y visitante, los siguientes clicks no serán almacenados (0 = sin límite, 3 es un buen valor)');
define('LANG_JAVASCRIPT_SITE', 'Nombre de la web (caracteres permitidos: A-Z, a-z, 0-9, guión bajo, guión y punto)');
define('LANG_JAVASCRIPT_GROUP', 'Nombre del grupo, para agrupar páginas similares para un análisis más simple');
define('LANG_JAVASCRIPT_GROUP0', 'use un nombre');
define('LANG_JAVASCRIPT_GROUP1', 'caracteres permitidos: A-Z, a-z, 0-9, guión bajo, guión y punto');
define('LANG_JAVASCRIPT_GROUP2', 'Usar un título para la página (<a href="http://www.Dugwood.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">no recomendado</a>)');
define('LANG_JAVASCRIPT_GROUP3', 'Usar la dirección de la página web (<a href="http://www.Dugwood.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">no recomendado</a>)');
define('LANG_JAVASCRIPT_PASTE', 'Copie y pegue el código de debajo en sus páginas, justo antes del final de la página (antes de la etiqueta &lt;/body&gt;):');
define('LANG_JAVASCRIPT_DEBUG', 'Una vez que ha pegado el código en sus páginas, no se olvide comprobar si el código funciona correctamente, llamando a su página con el parámetro <span class="error">debugclickheat</span>. Por ejemplo, para http://www.site.com/index.html use http://www.site.com/index.html<span class="error">?debugclickheat</span>. Debería ver un mensaje mostrando el estado de Clickheat. Si encuentra algún problema, no dude en ponerse en contacto con nosotros.');
define('LANG_NO_CLICK_BELOW', 'No hay click por debajo de esta linea'); // Leave this line in English please
define('LANG_ERROR_GROUP', 'Grupo desconocido. _JAVASCRIPT_');
define('LANG_ERROR_DATA', 'Sin registros para el periodo seleccionado (Valore quitar filtros: navegador, tamaño de pantalla). _JAVASCRIPT_');
define('LANG_ERROR_JAVASCRIPT', '¿Insertó correctamente el código Javascript en sus páginas?');
define('LANG_ERROR_FILE', 'No se puede abrir el fichero de registros');
define('LANG_ERROR_SCREEN', 'Tamaño de pantalla no estandar');
define('LANG_ERROR_LOADING', 'Generando imágen, por favor espere...');
define('LANG_ERROR_FIXED', 'Todos los anchos están fijados y eso no es posible. Por favor, cambie uno de su diseño arriba.');
define('LANG_DEFAULT', 'por defecto');
define('LANG_CHECKS', 'Comprobaciones preliminares');
define('LANG_CHECK_WRITABLE', 'Permisos de escritura en el directorio de configuración');
define('LANG_CHECK_NOT_WRITABLE', 'PHP no tiene permisos de escritura en el directorio de configuración');
define('LANG_CHECK_GD', 'GD librería gráfica');
define('LANG_CHECK_GD_IMG', 'imagecreatetruecolor() no disponible. No se pueden crear imágenes (con buena calidad). Compruebe que GD esté instalado.');
define('LANG_CHECK_GD_ALPHA', 'imagecolorallocatealpha() no disponible. No se pueden crear imágenes transparentes (puede ignorar esto, pero se recomienda la transparencia)');
define('LANG_CHECK_GD_PNG', 'imagepng() no disponible. No se pueden crear imágenes PNG, lo sentimos');
define('LANG_CHECKS_OK', 'Próximo paso: configuración');
define('LANG_CHECKS_KO', 'Uno o varios test han fallado. Por favor, corrija los problemas y refresque esta página.');
define('LANG_CONFIG', 'Configuración');
define('LANG_CONFIG_HEADER_HEATMAP', 'Renderizado del gráfico');
define('LANG_CONFIG_HEADER_DISPLAY', 'Display principal');
define('LANG_CONFIG_HEADER_SECURITY', 'Securidad');
define('LANG_CONFIG_HEADER_LOGIN', 'Parámetros para entrar');
define('LANG_CONFIG_LOGPATH', 'Directorio de los ficheros de registro');
define('LANG_CONFIG_LOGPATH_DIR', 'El directorio de los ficheros de registro, por favor, créelo.');
define('LANG_CONFIG_LOGPATH_KO', 'El directorio de los ficheros de registro no tiene permisos de escritura, por favor déselos para el usuario PHP');
define('LANG_CONFIG_CACHEPATH', 'Directorio de archivos temporales');
define('LANG_CONFIG_CACHEPATH_DIR', 'El directorio de archivos temporales no existe. Por favor, créelo.');
define('LANG_CONFIG_CACHEPATH_KO', 'El directorio de archivos temporales no tiene permisos de escritura, por favor déselos para el usuario PHP');
define('LANG_CONFIG_REFERERS', 'Nombres de dominio (separados por comas) permitidos para guardar los clicks en este servidor');
define('LANG_CONFIG_GROUPS', 'Nombres de grupo (separados por comas) permitidos para guardar los clicks en este servidor');
define('LANG_CONFIG_FILESIZE', 'Máximo tamaño (en KB) de un grupo en un día (1000 clicks ocupan unos 25KB, 0 = sin límite)');
define('LANG_CONFIG_CHECK', 'Compruebe la configuración');
define('LANG_CONFIG_MEMORY', 'Límite de memoria (valor de php.ini por defecto: %dMB, límites: de %d a %dMB, pero <a href="http://www.Dugwood.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">tenga cuidado con valores altos</a>)');
define('LANG_CONFIG_MEMORY_KO', 'por favor, manténgase en el rango especificado');
define('LANG_CONFIG_STEP', 'Agrupar clicks en zonas de X*X pixels (acelera la visión de los gráficos)');
define('LANG_CONFIG_STEP_KO', 'Las zonas no pueden se más pequeñas que 1x1 pixels');
define('LANG_CONFIG_DOT', 'Tamaño del punto (pixels)');
define('LANG_CONFIG_DOT_KO', 'El tamaño del punto no puede ser cero');
define('LANG_CONFIG_PALETTE', 'Si ve cuadrados rojos en el gráfico, compruebe esta caja');
define('LANG_CONFIG_HEATMAP', 'Mostrar gráfico (preferencia frente al mapa de clicks)');
define('LANG_CONFIG_FLASHES', 'Ocultar objetos &lt;Flash&gt;'); 
define('LANG_CONFIG_IFRAMES', 'Ocultar frames &lt;iframe&gt; '); 
define('LANG_CONFIG_YESTERDAY', 'Mostrar las estadísticas del día anterior al principio (preferencia frente a las de hoy)');
define('LANG_CONFIG_ALPHA', 'Nivel de transparencia (0 => 100)');
define('LANG_CONFIG_FLUSH', 'Borrar automáticamente las estadísticas de más de X días (0 = mantener todos los archivos, no recomendado)');
define('LANG_CONFIG_START', 'Primer día de la semana');
define('LANG_CONFIG_START_M', 'Lunes');
define('LANG_CONFIG_START_S', 'Domingo');
define('LANG_CONFIG_ADMIN_LOGIN', 'Identificador del Administrador');
define('LANG_CONFIG_ADMIN_PASS', 'Contraseña del administrador (introducirla dos veces)');
define('LANG_CONFIG_VIEWER_LOGIN', 'Identificador del visitante (si está en blanco, no se creará una cuenta)');
define('LANG_CONFIG_VIEWER_PASS', 'Contraseña del visitante (introducirla dos veces)');
define('LANG_CONFIG_LOGIN', 'El identificador debe tener al menos 4 caracteres');
define('LANG_CONFIG_PASS', 'La contraseña está en blanco');
define('LANG_CONFIG_MATCH', 'Las contraseñas no coinciden');
define('LANG_CONFIG_SAVE', 'Guardar configuración');
define('LANG_CLEANER_RUNNING', 'Borrado en proceso...');
define('LANG_CLEANER_RUN', 'Borrado finalizado: %d archivos y %d directorios han sido borrados');
define('LANG_CANCEL', 'Cancelar');
define('LANG_UPGRADE', 'Actualizar');
define('LANG_UPGRADE_NEXT', 'Compruebe su configuración. Después sálvela para finalizar');
?>
