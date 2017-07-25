<?php
/**
 * ClickHeat : formulaire de connexion / Login form
 *
 * @author Yvan Taviaud - Dugwood - www.dugwood.com
 * @since 03/01/2007
 */
/* Direct call forbidden */
if (!defined('CLICKHEAT_LANGUAGE'))
{
	exit;
}
?>
<div class="float-right">
	<a href="https://www.dugwood.<?php echo CLICKHEAT_LANGUAGE === 'fr' ? 'fr' : 'com' ?>/clickheat/index.html"><img src="<?php echo CLICKHEAT_PATH ?>images/logo170.png" alt="ClickHeat"/></a><br/>
	<span class="flags">
		<?php
		foreach ($__languages as $lang)
		{
			echo '<a href="', CLICKHEAT_INDEX_PATH, 'language=', $lang, '"><img src="', CLICKHEAT_PATH, 'images/flags/', $lang, '.png" alt="', $lang, '" /></a> ';
		}
		?>
	</span>
</div>
<div id="clickheat-box">
	<h1><?php echo LANG_LOGIN ?></h1>
	<br />
	<form action="<?php echo CLICKHEAT_INDEX_PATH ?>action=view" method="post">
		<table cellpadding="0" cellspacing="5" border="0">
			<tr><td><?php echo LANG_USER ?></td><td><input type="text" name="login" size="15" /></td></tr>
			<tr><td><?php echo LANG_PASSWORD ?></td><td><input type="password" name="pass" size="15" /></td></tr>
			<tr>
				<td colspan="2" class="center">
					<input type="submit" value="<?php echo LANG_LOGIN ?>" />
					<?php
					if (isset($_POST['login']))
					{
						echo '<br /><br /><span class="error">', LANG_LOGIN_ERROR, '</span>';
					}
					?>
				</td>
			</tr>
		</table>
	</form>
</div>