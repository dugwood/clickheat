<?php
/**
 * ClickHeat: Fichier de langue: anglais
 * 
 * @author Petrone Orlando Mauro
 * @since 01/08/2008
**/

/** Fix for Piwik bad behaviour */
if (defined('LANG_USER'))
{
	return true;
}

define('LANG_USER', 'Username');
define('LANG_PASSWORD', 'Password');
define('LANG_LOGIN', 'Entra');
define('LANG_LOGIN_ERROR', 'Errore nell\'accesso, username o password errati');
define('LANG_LOGOUT', 'Esci');
define('LANG_UNKNOWN_DIR', 'Can\'t define current directory, please contact us');
define('LANG_DAYS', 'L,M,M,G,V,S,D');
define('LANG_RANGE', 'Giorno,Settimana,Mese');
define('LANG_MONTHS', '0,Gennaio,Febbraio,Marzo,Aprile,Maggio,Giugno,Luglio,Agosto,Settembre,Ottobre,Novembre,Dicembre');
define('LANG_SITE', 'Sito');
define('LANG_GROUP', 'Gruppo');
define('LANG_BROWSER', 'Browser');
define('LANG_ALL', 'Tutti');
define('LANG_UNKNOWN', 'Altro/Sconosciuto');
define('LANG_EXAMPLE_URL', 'Webpage');
define('LANG_LAYOUT', 'Impaginazione Gruppo');
define('LANG_LAYOUT_FIXED', 'Contenuto Fisso/menu');
define('LANG_LAYOUT_LIQUID', 'Contenuto Fluido/menu (adattamento automatico in base allo spazio disponibile)');
define('LANG_LAYOUT_NONE', 'Margine (nessun contenuto), Fluido');
define('LANG_LAYOUT_0', 'Contenuto Fluido e menu');
define('LANG_LAYOUT_1', 'Menu sinistro fisso, contenuto fluido');
define('LANG_LAYOUT_2', 'Contenuto fisso Centrato (margini destro e sinistro automatici)');
define('LANG_LAYOUT_3', 'Contenuto Fisso bloccato a sinistra (margine destro automatico)');
define('LANG_LAYOUT_4', 'Menu destro fisso, contenuto fluido');
define('LANG_LAYOUT_5', 'Menu fissi a destra e sinistra, contenuto fluido');
define('LANG_LAYOUT_6', 'Contenuto Fisso bloccato a destra (margine sinistro auitomatico)');
define('LANG_LAYOUT_LEFT', 'Larghezza fissa colonna sinistra (pixel)');
define('LANG_LAYOUT_CENTER', 'Larghezza fissa colonna centrale (pixel)');
define('LANG_LAYOUT_RIGHT', 'Larghezza fissa colonna destra (pixel)');
define('LANG_SCREENSIZE', 'Dimensioni Schermo');
define('LANG_HEATMAP', 'Heatmap e transparenza');
define('LANG_LATEST_CHECK', 'Aggiorna');
define('LANG_LATEST_KO', 'Non è possibile reperire in automatico l\'ultima versione disponibile, la versione attualmente installata è la  %s, l\'ultima può essere verificata direttamente dal sito di Labsmedia');
define('LANG_LATEST_OK', 'Hai già l\'ultima versione installata (%s)');
define('LANG_LATEST_NO', 'La versione attualmente installata (%s) non è la più aggiornata (%s). Puoi scaricare l\'ultima versione direttamente dal sito:');
define('LANG_LOG_MY_CLICKS', 'Registra i miei click?');
define('LANG_JAVASCRIPT_ADMIN_COOKIE', 'Per evitare l\'inquinamento delle statistiche,\npuoi scegliere di non registrare i tuoi click\n\nOK = registra i miei click\nAnnulla = non registrare i miei click');
define('LANG_JAVASCRIPT', 'Questo è il codice Javascript da inserire nelle pagine da analizzare');
define('LANG_JAVASCRIPT_IMAGE', 'Mostra il logo ClickHeat nelle pagine analizzate: ');
define('LANG_JAVASCRIPT_SHORT', 'Codice compatto (solo 3 linee)');
define('LANG_JAVASCRIPT_QUOTA', 'Massimo numero di click per pagina e visitatore, i click eccedenti non verranno salvati (0 = nessun limite, 3 è una scelta ottimale)');
define('LANG_JAVASCRIPT_SITE', 'Nome del sito (caratteri permessi: A-Z, a-z, 0-9, underscore, trattino, punto)');
define('LANG_JAVASCRIPT_GROUP', 'Nome del gruppo, per raggruppare pagine simili e semplificare l\'analisi');
define('LANG_JAVASCRIPT_GROUP0', 'usa una parola chiave');
define('LANG_JAVASCRIPT_GROUP1', 'caratteri permessi: A-Z, a-z, 0-9, underscore, trattino, punto');
define('LANG_JAVASCRIPT_GROUP2', 'usa il titolo della pagina (<a href="http://www.labsmedia.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">non consigliato</a>)');
define('LANG_JAVASCRIPT_GROUP3', 'usa l\'URL della pagina (<a href="http://www.labsmedia.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">non consigliato</a>)');
define('LANG_JAVASCRIPT_PASTE', 'Copia ed incolla il codice sottostante nelle tue pagine poco prima della fine della pagina (prima del tag &lt;/body&gt;):');
define('LANG_JAVASCRIPT_DEBUG', 'Una volta che hai inserito il codice nelle tue pagine, non dimenticare di controllare se il codice funziona correttamente caricando la pagina con il parametro <span class="error">debugclickheat</span>. Per esempio per http://www.site.com/index.html devi richiamare http://www.site.com/index.html<span class="error">?debugclickheat</span>. Dovresti vedere un messaggio che mostra lo stato di Clickheat. Se hai qualsiasi problema, contattaci');
define('LANG_NO_CLICK_BELOW', 'No clicks recorded beneath this line'); // Leave this line in English please
define('LANG_ERROR_GROUP', 'Unknown group. _JAVASCRIPT_');
define('LANG_ERROR_DATA', 'Nessuna registrazione per il periodo selezionato (Come prima cosa prova a rimuovere i filtri: browser, dimensione schermo). _JAVASCRIPT_');
define('LANG_ERROR_JAVASCRIPT', 'Hai inserito correttamente il codice Javascript nelle tue pagine?');
define('LANG_ERROR_FILE', 'Non riesco ad aprire il file di log');
define('LANG_ERROR_SCREEN', 'Dimensioni schermo non standard');
define('LANG_ERROR_LOADING', 'Un attimo, sto generando l\'immagine...');
define('LANG_ERROR_FIXED', 'Tutte le larghezze sono fissate, ciò non è possibile. Cambia una delle larghezze aumentandola.');
define('LANG_DEFAULT', 'predefinito');
define('LANG_CHECKS', 'Verifica preliminare');
define('LANG_CHECK_WRITABLE', 'Permessi di scrittura della directory di configurazione');
define('LANG_CHECK_NOT_WRITABLE', 'Non ci sono i corretti permessi di scrittura per la directory di configurazione');
define('LANG_CHECK_GD', 'Libreria Grafica GD');
define('LANG_CHECK_GD_IMG', 'imagecreatetruecolor() non disponibile, non è possibile creare immagini (di buona qualità), Controlla che GDÂ sia installato');
define('LANG_CHECK_GD_ALPHA', 'imagecolorallocatealpha() non disponibile, non è possibile creare immagini trasparenti (puoi ignorare questo avviso, ma la trasparenza è fortemente consigliata)');
define('LANG_CHECK_GD_PNG', 'imagepng() non disponibile, non posso creare immagini PNG');
define('LANG_CHECKS_OK', 'Passo successivo: configurazione');
define('LANG_CHECKS_KO', 'Uno o più controlli sono falliti. correggi il problema ed aggiorna la pagina.');
define('LANG_CONFIG', 'Configurazione');
define('LANG_CONFIG_HEADER_HEATMAP', 'Rendering Heatmap');
define('LANG_CONFIG_HEADER_DISPLAY', 'Vista Principale');
define('LANG_CONFIG_HEADER_SECURITY', 'Sicurezza');
define('LANG_CONFIG_HEADER_LOGIN', 'Parametri per l\'accesso');
define('LANG_CONFIG_LOGPATH', 'Directory Logfiles');
define('LANG_CONFIG_LOGPATH_DIR', 'La directory Logfiles non esiste. Per favore, creala');
define('LANG_CONFIG_LOGPATH_KO', 'La directory Logfiles non ha i permessi di scrittura , please give it write permission for PHP user');
define('LANG_CONFIG_CACHEPATH', 'directory dei file temporanei');
define('LANG_CONFIG_CACHEPATH_DIR', 'La directory dei file temporanei non esiste. Per favore, creala');
define('LANG_CONFIG_CACHEPATH_KO', 'La directory dei file temporanei non ha i permessi di scrittura, per favore imposta i giusti permessi');
define('LANG_CONFIG_REFERERS', 'Nomi dei domini (separati da virgola) a cui è permesso di registrare click su questo server');
define('LANG_CONFIG_GROUPS', 'Nomi dei gruppi (separati da virgola) a cui è permesso di registrare i click su questo server');
define('LANG_CONFIG_FILESIZE', 'Dimensione massima del file di log (in KB) di un gruppo per giorno (1000 click sono circa 25KB, 0 = nessun limite)');
define('LANG_CONFIG_CHECK', 'Controlla la configurazione');
define('LANG_CONFIG_MEMORY', 'Limite di memoria (valore predefinito in php.ini: %dMB, limita da %d a %dMB, ma <a href="http://www.labsmedia.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">fai attenzione se inserisci valori molto alti</a>)');
define('LANG_CONFIG_MEMORY_KO', 'per favore, resta nell\'intervallo specificato');
define('LANG_CONFIG_STEP', 'Raggruppa i pixel per riquadri di X*X pixel (velocizza la visualizzazione della heatmaps)');
define('LANG_CONFIG_STEP_KO', 'i riquadri non possono essere al di sotto di 1x1 pixels');
define('LANG_CONFIG_DOT', 'Dimensioni del punto della Heatmaps (pixel)');
define('LANG_CONFIG_DOT_KO', 'le dimensioni del punto non possono essere zero');
define('LANG_CONFIG_PALETTE', 'Se vedi dei quadrati rossi nella heatmaps seleziona questa casella');
define('LANG_CONFIG_HEATMAP', 'Mostra heatmap (invece della mappa dei click)');
define('LANG_CONFIG_FLASHES', 'Nascondi gli oggetti &lt;Flash&gt;'); 
define('LANG_CONFIG_IFRAMES', 'Nascondi &lt;iframe&gt;'); 
define('LANG_CONFIG_YESTERDAY', 'Mostra le statistiche del giorno prima all\'avvio (invece di quelle del giorno)');
define('LANG_CONFIG_ALPHA', 'Livello transparenza (0 => 100)');
define('LANG_CONFIG_FLUSH', 'Eliminazione automatica delle statistiche più vecchie di X giorni (0 = mantieni tutti i file, non consigliato)');
define('LANG_CONFIG_START', 'Primo giorno della settimana');
define('LANG_CONFIG_START_M', 'Lunedì');
define('LANG_CONFIG_START_S', 'Domenica');
define('LANG_CONFIG_ADMIN_LOGIN', 'Identificativo Amministratore');
define('LANG_CONFIG_ADMIN_PASS', 'Password Amministratore (inseriscila due volte)');
define('LANG_CONFIG_VIEWER_LOGIN', 'Identificativo visitatori (se vuoto, l\'account è disabilitato)');
define('LANG_CONFIG_VIEWER_PASS', 'Password visitatori (inseriscila due volte)');
define('LANG_CONFIG_LOGIN', 'l\'identificativo deve essere di almeno 4 caratteri');
define('LANG_CONFIG_PASS', 'il campo password è vuoto');
define('LANG_CONFIG_MATCH', 'le passwords non coincidono');
define('LANG_CONFIG_SAVE', 'Salva configurazione');
define('LANG_CLEANER_RUNNING', 'Pulitura in corso...');
define('LANG_CLEANER_RUN', 'Pulizia terminata: %d file e %d directory sono stati cancellati');
define('LANG_CANCEL', 'Annulla');
define('LANG_UPGRADE', 'Aggiornamento');
define('LANG_UPGRADE_NEXT', 'Ricontrolla la tua configurazione, dopo salva per terminare l\'aggiornamento');
?>