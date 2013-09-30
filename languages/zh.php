<?php
/**
 * ClickHeat: Fichier de langue: Chinese
 * 
 * @author rollenc - www.rollenc.com
 * @since 23/11/2007
**/

/** Fix for Piwik bad behaviour */
if (defined('LANG_USER'))
{
		return true;
}

define('LANG_USER', '用户');
define('LANG_PASSWORD', '密码');
define('LANG_LOGIN', '登陆');
define('LANG_LOGIN_ERROR', '登陆错误，用户或密码错误');
define('LANG_LOGOUT', '登出');
define('LANG_UNKNOWN_DIR', '目录定义错误，请与我们取得联系。');
define('LANG_DAYS', '一,二,三,四,五,六,日');
define('LANG_RANGE', '今天,本周,本月');
define('LANG_MONTHS', '0,一月,二月,三月,四月,五月,六月,七月,八月,九月,十月,十一月,十二月');
define('LANG_SITE', '网址');
define('LANG_GROUP', '分组');
define('LANG_BROWSER', '浏览器');
define('LANG_ALL', '全部');
define('LANG_UNKNOWN', '其他/未知');
define('LANG_EXAMPLE_URL', '网页');
define('LANG_LAYOUT', '分组页面布局');
define('LANG_LAYOUT_FIXED', '固定宽度区域(内容/菜单)');
define('LANG_LAYOUT_LIQUID', '自适应区域');
define('LANG_LAYOUT_NONE', '边距无内容区域');
define('LANG_LAYOUT_0', '整页自适应宽度布局');
define('LANG_LAYOUT_1', '左菜单固定宽度，右侧内容自适应');
define('LANG_LAYOUT_2', '中间内容固定宽度 (自动填充左右空白)');
define('LANG_LAYOUT_3', '左内容固定宽度，右侧自动填充空白');
define('LANG_LAYOUT_4', '右侧菜单固定宽度，内容宽度自适应');
define('LANG_LAYOUT_5', '左右菜单固定宽度，中间内容自适应');
define('LANG_LAYOUT_6', '右侧内容固定宽度，左侧自动填充空白');
define('LANG_LAYOUT_LEFT', '左侧固定宽度大小(单位：像素pixels)');
define('LANG_LAYOUT_CENTER', '中间固定宽度大小(单位：像素pixels)');
define('LANG_LAYOUT_RIGHT', '右侧固定宽度大小(单位：像素pixels)');
define('LANG_SCREENSIZE', '屏幕大小');
define('LANG_HEATMAP', '热图样式和覆盖层透明度');
define('LANG_LATEST_CHECK', '升级');
define('LANG_LATEST_KO', '获取最新版本发生错误，你使用的当前版本为 %s, 请访问Labsmedia\'s 网站检查更新');
define('LANG_LATEST_OK', '你使用的是最新版本：(%s)');
define('LANG_LATEST_NO', '你使用的版本为 (%s), 目前最新版本为 (%s). 你可以从以下站点下载最新版：');
define('LANG_LOG_MY_CLICKS', '是否记录自己的点击');
define('LANG_JAVASCRIPT_ADMIN_COOKIE', '为了防止统计干扰，你可以选择是否记录自己的点击\n\n确认 = 记录\n取消 = 不记录');
define('LANG_JAVASCRIPT', '将以下javascript代码粘贴到你需要监控的页面');
define('LANG_JAVASCRIPT_IMAGE', '在页面显示ClickHeat图标');
define('LANG_JAVASCRIPT_SHORT', '压缩代码 (仅3行)');
define('LANG_JAVASCRIPT_QUOTA', '单个用户在一页中记录的最大点击数量(0 = 不限制, 3 是比较好的数量)');
define('LANG_JAVASCRIPT_SITE', '网址 (允许字符: A-Z, a-z, 0-9, 下划线, 连字号, 点)');
define('LANG_JAVASCRIPT_GROUP', '分组名, 将类似的页面分组记录成单独的统计页面');
define('LANG_JAVASCRIPT_GROUP0', '分组名称');
define('LANG_JAVASCRIPT_GROUP1', '允许字符: A-Z, a-z, 0-9, 下划线, 连字号, 点');
define('LANG_JAVASCRIPT_GROUP2', '使用页面标题 (<a href="http://www.labsmedia.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">不推荐</a>)');
define('LANG_JAVASCRIPT_GROUP3', '使用页面URL (<a href="http://www.labsmedia.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">不推荐</a>)');
define('LANG_JAVASCRIPT_PASTE', '将以下代码粘贴到你的页面HTML文件结束之前 (在 &lt;/body&gt; 标记之前):');
define('LANG_JAVASCRIPT_DEBUG', '代码粘贴到页面之后，不要忘记测试该配置是否正确。方法：将参数<span class="error">debugclickheat</span>附加到你的请求页面URL中. 比如测试 http://www.site.com/index.html，则调用 http://www.site.com/index.html<span class="error">?debugclickheat</span>. 你会看到一个clickheat的测试状态区域. 如果有任何疑问，请和我们取得联系。');
define('LANG_NO_CLICK_BELOW', 'No clicks recorded beneath this line'); // Leave this line in English please，CHINESE IS： 本线以下没有点击
define('LANG_ERROR_GROUP', '未知分组. _JAVASCRIPT_');
define('LANG_ERROR_DATA', '暂时没有点击记录 (可能是由您选择的条件限制引起，建议取消或修改限制后重试: 如浏览器，屏幕大小等). _JAVASCRIPT_');
define('LANG_ERROR_JAVASCRIPT', '请检查javascript代码是否已正确粘贴到了页面中。');
define('LANG_ERROR_FILE', '无法打开log文件');
define('LANG_ERROR_SCREEN', '非标准浏览器大小');
define('LANG_ERROR_LOADING', '正在生成图像，请稍等...');
define('LANG_ERROR_FIXED', '所有宽度都是固定的，但这是不可能的。请重新设置以上的布局配置。');
define('LANG_DEFAULT', '默认');
define('LANG_CHECKS', '初步检查');
define('LANG_CHECK_WRITABLE', '写入配置失败');
define('LANG_CHECK_NOT_WRITABLE', 'PHP没有权限写配置文件夹');
define('LANG_CHECK_GD', 'GD库');
define('LANG_CHECK_GD_IMG', 'imagecreatetruecolor() 没有定义, 无法建立图像文件，请检查GD库是否已安装');
define('LANG_CHECK_GD_ALPHA', 'imagecolorallocatealpha() 没有定义, 无法建立透明层图像（尽管你可以忽略他，但强烈建议你使用透明层，请检查GD库配置并进行正确设置）');
define('LANG_CHECK_GD_PNG', 'imagepng() 没有定义, 建立PNG图像文件失败');
define('LANG_CHECKS_OK', '下一步: 配置');
define('LANG_CHECKS_KO', '测试失败，请修正问题后重新刷新页面');
define('LANG_CONFIG', '配置');
define('LANG_CONFIG_HEADER_HEATMAP', '热图配置');
define('LANG_CONFIG_HEADER_DISPLAY', '显示配置');
define('LANG_CONFIG_HEADER_SECURITY', '安全配置');
define('LANG_CONFIG_HEADER_LOGIN', '登陆配置');
define('LANG_CONFIG_LOGPATH', '日志文件目录');
define('LANG_CONFIG_LOGPATH_DIR', '日志文件夹不存在，请建立');
define('LANG_CONFIG_LOGPATH_KO', '日志文件夹不可写，请修改文件夹权限。');
define('LANG_CONFIG_CACHEPATH', '缓存文件目录');
define('LANG_CONFIG_CACHEPATH_DIR', '缓存文件夹不存在，请建立');
define('LANG_CONFIG_CACHEPATH_KO', '日志文件夹不可写，请修改文件夹权限。');
define('LANG_CONFIG_REFERERS', '域名列表 (使用,分隔) 允许记录的域名列表');
define('LANG_CONFIG_GROUPS', '分组列表 (使用,分隔) 允许记录的分组名称列表');
define('LANG_CONFIG_FILESIZE', '每天单个分组允许的最大日志文件大小，单位KB(1000 个点击记录大约 25KB, 0 = 不限制)');
define('LANG_CONFIG_CHECK', '检查配置');
define('LANG_CONFIG_MEMORY', '内存限制(php.ini默认值: %dMB, 大小限制: 从 %d 到 %dMB, 但<a href="http://www.labsmedia.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">请小心使用较大的内存设置</a>)');
define('LANG_CONFIG_MEMORY_KO', '输入值超出可用范围');
define('LANG_CONFIG_STEP', '合并点击区域范围(将提升热图的显示)');
define('LANG_CONFIG_STEP_KO', '点击区域范围不能小于1x1像素');
define('LANG_CONFIG_DOT', '热图点大小(单位：像素)');
define('LANG_CONFIG_DOT_KO', '点大小不能为0');
define('LANG_CONFIG_PALETTE', '当你看到热图上出现红色区域，请选择此项');
define('LANG_CONFIG_HEATMAP', '显示热图,取消选项则显示点击图');
define('LANG_CONFIG_FLASHES', '隐藏 &lt;Flash&gt; 元素'); 
define('LANG_CONFIG_IFRAMES', '隐藏 &lt;iframe&gt; 框架'); 
define('LANG_CONFIG_YESTERDAY', '开始时显示昨天的数据，取消选项则显示当天数据');
define('LANG_CONFIG_ALPHA', '透明程度 (0 => 100)');
define('LANG_CONFIG_FLUSH', '自动删除 N 天前的数据 (0 = 不删除，不推荐)');
define('LANG_CONFIG_START', '周开始');
define('LANG_CONFIG_START_M', '周一');
define('LANG_CONFIG_START_S', '周日');
define('LANG_CONFIG_ADMIN_LOGIN', '管理员名字');
define('LANG_CONFIG_ADMIN_PASS', '管理员密码 (请输入两遍)');
define('LANG_CONFIG_VIEWER_LOGIN', '访客名字 (不需要访客请留空)');
define('LANG_CONFIG_VIEWER_PASS', '访客密码 (请输入两遍)');
define('LANG_CONFIG_LOGIN', '名字必须大于4个字节');
define('LANG_CONFIG_PASS', '密码为空');
define('LANG_CONFIG_MATCH', '两次密码不匹配');
define('LANG_CONFIG_SAVE', '保存配置');
define('LANG_CLEANER_RUNNING', '正在清理...');
define('LANG_CLEANER_RUN', '清理完成: 已删除%d 个文件， %d 个目录');
define('LANG_CANCEL', '取消');
define('LANG_UPGRADE', '升级');
define('LANG_UPGRADE_NEXT', '请检查配置，并保存，完成升级');
?>
