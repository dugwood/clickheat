<?php
/**
 * ClickHeat: Fichier de langue: português do Brasil
 * 
 * @author Marcos Kenji Watanabe - Akanga Think Tank - www.akanga.com.br
 * @since 10/01/2006
**/

/** Fix for Piwik bad behaviour */
if (defined('LANG_USER'))
{
	return true;
}

define('LANG_USER', 'Usuario');
define('LANG_PASSWORD', 'Senha');
define('LANG_LOGIN', 'Conectar');
define('LANG_LOGIN_ERROR', 'Erro de Conexão, usuário ou senha errada');
define('LANG_LOGOUT', 'Desconectar');
define('LANG_UNKNOWN_DIR', 'Não conseguimos definir diretório corrente, por favor nos contacte');
define('LANG_DAYS', 'S,T,Q,Q,S,S,D');
define('LANG_RANGE', 'Dia,Semana,Mês');
define('LANG_MONTHS', '0,Janeiro,Fevereiro,Março,Abril,Maio,Junho,Julho,Agosto,Setembro,Outubro,Novembro,Dezembro');
define('LANG_SITE', 'Website');
define('LANG_GROUP', 'Grupo');
define('LANG_BROWSER', 'Browser');
define('LANG_ALL', 'Todos');
define('LANG_UNKNOWN', 'Outros/desconhecidos');
define('LANG_EXAMPLE_URL', 'Página Web');
define('LANG_LAYOUT', 'Layout de Grupo');
define('LANG_LAYOUT_FIXED', 'Conteúdo fixo/menu');
define('LANG_LAYOUT_LIQUID', 'Conteúdo fluido/menu (ajuste automatico ao espaço disponível)');
define('LANG_LAYOUT_NONE', 'Margem (sem conteúdo), fluido');
define('LANG_LAYOUT_0', 'Conteúdo fluido e menu');
define('LANG_LAYOUT_1', 'Menu fixo esquerdo, conteúdo fluido');
define('LANG_LAYOUT_2', 'Conteudo fixo centralizado (margens esquerda e direita automaticas)');
define('LANG_LAYOUT_3', 'Conteúdo fixo deslocado para a esquerda(margem direita automatica)');
define('LANG_LAYOUT_4', 'Menu direito fixo, conteudo fluido');
define('LANG_LAYOUT_5', 'Menus esquerdo e direito fixos, conteudo fluido');
define('LANG_LAYOUT_6', 'Conteúdo fixo deslocado para a direita (margem esquerda automatica)');
define('LANG_LAYOUT_LEFT', 'Largura fixa esquerda (pixels)');
define('LANG_LAYOUT_CENTER', 'Largura fixa central (pixels)');
define('LANG_LAYOUT_RIGHT', 'Largura fixa direita (pixels)');
define('LANG_SCREENSIZE', 'Tamanho de tela');
define('LANG_HEATMAP', 'Heatmap e sua transparencia');
define('LANG_LATEST_CHECK', 'Upgrade');
define('LANG_LATEST_KO', 'Não foi possível achar dinamicamente a última versão disponível, a sua é %s, a última lida diretamente do site da Dugwood é');
define('LANG_LATEST_OK', 'Você possui a última versão disponível (%s)');
define('LANG_LATEST_NO', 'Sua versão (%s) não é a última disponível (%s). Você pode efetuar o download da última em nosso website:');
define('LANG_LOG_MY_CLICKS', 'Gravar meus clicks?');
define('LANG_JAVASCRIPT_ADMIN_COOKIE', 'Para evitar poluição das suas estatisticas,\nvocê pode escolher não gravar no log seus proprios clicks\n\nOK = gravar meus clicks\nCancel = não gravar meus clicks');
define('LANG_JAVASCRIPT', 'Código Javascript a ser colocado nas páginas a ser estudadas');
define('LANG_JAVASCRIPT_IMAGE', 'Mostrar logo ClickHeat na página estudada: ');
define('LANG_JAVASCRIPT_SHORT', 'Codigo compactado (3 linhas somente)');
define('LANG_JAVASCRIPT_QUOTA', 'Número máximo de clicks por pagina e visitante, os proximos clicks não serão gravados (0 = sem limite, 3 é uma boa escolha)');
define('LANG_JAVASCRIPT_SITE', 'Nome do website (caracteres permitidos: A-Z, a-z, 0-9, sublinhado, hífen, ponto)');
define('LANG_JAVASCRIPT_GROUP', 'Nome do Grupo, para agrupar páginas similares para uma analise simplificada');
define('LANG_JAVASCRIPT_GROUP0', 'use uma palavra-chave');
define('LANG_JAVASCRIPT_GROUP1', 'caracteres permitidos: A-Z, a-z, 0-9, sublinhado, hífen, ponto');
define('LANG_JAVASCRIPT_GROUP2', 'use o títuloda página web (<a href="http://www.Dugwood.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">não recomendado</a>)');
define('LANG_JAVASCRIPT_GROUP3', 'use a URL da página web (<a href="http://www.Dugwood.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">não recomendado</a>)');
define('LANG_JAVASCRIPT_PASTE', 'Copie e cole o codigo abaixo em suas paginas, antes do final da mesma (antes da tag &lt;/body&gt;):');
define('LANG_JAVASCRIPT_DEBUG', 'Depois de colocar o código nas suas páginas, não esqueça de testar se o mesmo funciona corretamente, acessando sua pagina com o parametro <span class="error">debugclickheat</span>. Por exemplo para http://www.site.com/index.html digite http://www.site.com/index.html<span class="error">?debugclickheat</span>. Você deverá ver uma mensagem mostrando o status do Clickheat. Se você encontrar algum problema, por favor nos contate');
define('LANG_NO_CLICK_BELOW', 'No clicks recorded beneath this line'); // Leave this line in English please
define('LANG_ERROR_GROUP', 'Grupo desconhecido. _JAVASCRIPT_');
define('LANG_ERROR_DATA', 'Não existem logs para o período selecionado (tente primeiro remover filtros: browser, tamanho de tela). _JAVASCRIPT_');
define('LANG_ERROR_JAVASCRIPT', 'Você instalou corretamente o código Javascript nas suas páginas web?');
define('LANG_ERROR_FILE', 'Não foi possível abrir arquivo de log');
define('LANG_ERROR_SCREEN', 'Tamanho de tela não padrão');
define('LANG_ERROR_LOADING', 'Gerando imagem, aguarde por favor...');
define('LANG_ERROR_FIXED', 'Todas as larguras foram alteradas, o que não é possivel. Por favor altere uma das suas larguras de layout acima.');
define('LANG_DEFAULT', 'default');
define('LANG_CHECKS', 'Checagens preliminares');
define('LANG_CHECK_WRITABLE', 'Permissões de escrita no diretório de configuração');
define('LANG_CHECK_NOT_WRITABLE', 'PHP não tem permissões de escrita no diretório de configuração');
define('LANG_CHECK_GD', 'GD graphic library');
define('LANG_CHECK_GD_IMG', 'imagecreatetruecolor() não disponível, não posso criar imagens (com boa qualidade), cheque se o GD está instalado');
define('LANG_CHECK_GD_ALPHA', 'imagecolorallocatealpha() não disponível, não posso criar imagens transparentes(você pode ignorar este aviso, mas transparencia é realmente recomendado)');
define('LANG_CHECK_GD_PNG', 'imagepng() não disponível, não posso criar imagens PNG, desculpe');
define('LANG_CHECKS_OK', 'Proximo passo: configuração');
define('LANG_CHECKS_KO', 'Um ou mais testes falharam. Por favor, corrija os problemas e efetue um refresh desta pagina.');
define('LANG_CONFIG', 'Configuração');
define('LANG_CONFIG_HEADER_HEATMAP', 'Renderização do Heatmap');
define('LANG_CONFIG_HEADER_DISPLAY', 'Tela Principal');
define('LANG_CONFIG_HEADER_SECURITY', 'Segurança');
define('LANG_CONFIG_HEADER_LOGIN', 'Parametros de Login');
define('LANG_CONFIG_LOGPATH', 'Diretorio de arquivos de log');
define('LANG_CONFIG_LOGPATH_DIR', 'Diretorio de arquivos de log não existe. Por favor crie-o');
define('LANG_CONFIG_LOGPATH_KO', 'Diretorio de arquivos de log não possui permissões de escrita, por favor altere estas permissões para o usuário PHP');
define('LANG_CONFIG_CACHEPATH', 'Folder de arquivos temporário');
define('LANG_CONFIG_CACHEPATH_DIR', 'Não existe o folder de arquivos temporários. Por favor, crie-o');
define('LANG_CONFIG_CACHEPATH_KO', 'Folder de arquivos temporário não possui permissões de escrita, por favor altere estas permissões para o usuário PHP');
define('LANG_CONFIG_REFERERS', 'Nomes de domínios (separados por virgulas) autotizados a gravar clicks neste server');
define('LANG_CONFIG_GROUPS', 'Nome de grupos (separados por virgulas) autotizados a gravar clicks neste servidor');
define('LANG_CONFIG_FILESIZE', 'Maximo tamanho do arquivo de log (em KB) de um grupo por dia(1000 clicks representam cerca de 25KB, 0 = sem limite)');
define('LANG_CONFIG_CHECK', 'Checar configuração');
define('LANG_CONFIG_MEMORY', 'Limite de memória (valor default do php.ini: %dMB, limites: de %d até %dMB, mas <a href="http://www.Dugwood.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">cuidado com valores altos</a>)');
define('LANG_CONFIG_MEMORY_KO', 'por favor fique dentro dos limites especificados');
define('LANG_CONFIG_STEP', 'Clicks agrupados por zonas de X*X pixels(acelera o display dos heatmaps)');
define('LANG_CONFIG_STEP_KO', 'zonas não podem ser menores que 1x1 pixels');
define('LANG_CONFIG_DOT', 'Tamanho do ponto do Heatmap(pixels)');
define('LANG_CONFIG_DOT_KO', 'tamanho do ponto não pode ser zero');
define('LANG_CONFIG_PALETTE', 'Se você ver quadrados vermelhos nos heatmaps ative este checkbox');
define('LANG_CONFIG_HEATMAP', 'Mostra heatmap (ao invés de mapa de clicks)');
define('LANG_CONFIG_FLASHES', 'Esconde objetos &lt;Flash&gt;'); 
define('LANG_CONFIG_IFRAMES', 'Esconde frames &lt;iframe&gt;'); 
define('LANG_CONFIG_YESTERDAY', 'Mostra as estatísticas de ontem ao iniciar (ao invés do dia de Hoje)');
define('LANG_CONFIG_ALPHA', 'Nível de transparência (0 => 100)');
define('LANG_CONFIG_FLUSH', 'Rotação automática de estatisticas anteriores a X dias (0 = mantem todos os arquivos, não recomendado)');
define('LANG_CONFIG_START', 'Primeiro dia da semana');
define('LANG_CONFIG_START_M', 'Segunda-feira');
define('LANG_CONFIG_START_S', 'Domingo');
define('LANG_CONFIG_ADMIN_LOGIN', 'Identificação do Administrador');
define('LANG_CONFIG_ADMIN_PASS', 'Senha do Administrador (digite duas vezes)');
define('LANG_CONFIG_VIEWER_LOGIN', 'Identificação do visitante (se \'em branco\', a conta fica disabilitada)');
define('LANG_CONFIG_VIEWER_PASS', 'Senha do visitante (digite duas vezes)');
define('LANG_CONFIG_LOGIN', 'identificação precisa ter ao menos 4 caracteres');
define('LANG_CONFIG_PASS', 'senha está em branco');
define('LANG_CONFIG_MATCH', 'as senhas não são iguais');
define('LANG_CONFIG_SAVE', 'Salvar configuração');
define('LANG_CLEANER_RUNNING', 'Deleção em progresso...');
define('LANG_CLEANER_RUN', 'Deleção completada: %d arquivos e %d diretorios foram apagados');
define('LANG_CANCEL', 'Cancelar');
define('LANG_UPGRADE', 'Upgrade');
define('LANG_UPGRADE_NEXT', 'Cheque sua configuração, e grave ela para finalizar o upgrade');
?>
