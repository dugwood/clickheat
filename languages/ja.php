<?php
/**
 * ClickHeat : Fichier de langue : japanese
 * 
 * @author Yuta Yamashita - B-R-U - www.b-r-u.net
 * @since 29/11/2007
**/

/** Fix for Piwik bad behaviour */
if (defined('LANG_USER'))
{
		return true;
}

define('LANG_USER', 'ユーザ名');
define('LANG_PASSWORD', 'パスワード');
define('LANG_LOGIN', 'ログイン');
define('LANG_LOGIN_ERROR', 'ログインエラー（ユーザ名かパスワードが違います）');
define('LANG_LOGOUT', 'ログアウト');
define('LANG_UNKNOWN_DIR', 'カレントディレクトリを定義できませんでした。連絡してください。');
define('LANG_DAYS', '月,火,水,木,金,土,日');
define('LANG_RANGE', '日,週,月');
define('LANG_MONTHS', '0,1月,2月,3月,4月,5月,6月,7月,8月,9月,10月,11月,12月');
define('LANG_SITE', 'ウェブサイト');
define('LANG_GROUP', 'グループ');
define('LANG_BROWSER', 'ブラウザー');
define('LANG_ALL', '全て');
define('LANG_UNKNOWN', 'その他/不明');
define('LANG_EXAMPLE_URL', 'ウェブページ');
define('LANG_LAYOUT', 'グループのレイアウト');
define('LANG_LAYOUT_FIXED', '固定されたコンテンツ/メニュー');
define('LANG_LAYOUT_LIQUID', '動的なコンテンツ/メニュー（自動的に調整されるスペース）');
define('LANG_LAYOUT_NONE', '余白（非コンテンツ）動的');
define('LANG_LAYOUT_0', '動的なコンテンツとメニュー');
define('LANG_LAYOUT_1', '左に固定されたメニュ・動的コンテンツ');
define('LANG_LAYOUT_2', '中央に固定されたコンテンツ（自動的に左右に余白）');
define('LANG_LAYOUT_3', '左に固定されたコンテンツ（自動的に右に余白）');
define('LANG_LAYOUT_4', '右に固定されたメニュー・動的コンテンツ');
define('LANG_LAYOUT_5', '左右に固定されたメニュー・動的コンテンツ');
define('LANG_LAYOUT_6', '右に固定されたコンテンツ（自動的に左に余白）');
define('LANG_LAYOUT_LEFT', '左に固定された幅（pixels）');
define('LANG_LAYOUT_CENTER', '中央に固定された幅（pixels）');
define('LANG_LAYOUT_RIGHT', '右に固定された幅（pixels）');
define('LANG_SCREENSIZE', '画面サイズ');
define('LANG_HEATMAP', 'ヒートマップと透過率');
define('LANG_LATEST_CHECK', 'アップグレード');
define('LANG_LATEST_KO', '動的に最新バージョンを検索することができませんでした。現在ご利用のバージョン： %s 公式ホームページの最新バージョン：');
define('LANG_LATEST_OK', '最新バージョンを利用しています。（%s）');
define('LANG_LATEST_NO', '現在ご利用のバージョン（%s）は最新バージョン（%s）ではありません。公式ホームページから最新版をダウンロードできます。');
define('LANG_LOG_MY_CLICKS', 'Log my clicks?');
define('LANG_JAVASCRIPT_ADMIN_COOKIE', 'クリック記録の統計の汚染を防ぐために、\n自分自身のクリックを記録しないことができます。\n\nOK = 自分のクリックを記録する\nCancel = 自分のクリックを記録しない');
define('LANG_JAVASCRIPT', '分析するサイトに貼るJavascriptコード');
define('LANG_JAVASCRIPT_IMAGE', 'ClickHeatのロゴを表示させる：');
define('LANG_JAVASCRIPT_SHORT', 'コンパクトコード（3行のみ）');
define('LANG_JAVASCRIPT_QUOTA', 'ページ毎のクリック記録回数（指定された回数以上のクリックは記録されません。0 = 制限なし【3を推奨】）');
define('LANG_JAVASCRIPT_SITE', 'ウェブサイト名（許可された文字：A-Z, a-z, 0-9, アンダースコア【_】, ハイフン【-】, ドット【.】）');
define('LANG_JAVASCRIPT_GROUP', 'グループ名（類似的なページを単純に分析するため）');
define('LANG_JAVASCRIPT_GROUP0', 'キーワードを利用：');
define('LANG_JAVASCRIPT_GROUP1', '許可された文字：A-Z, a-z, 0-9, アンダースコア【_】, ハイフン【-】, ドット【.】');
define('LANG_JAVASCRIPT_GROUP2', 'ページのタイトルを使用（<a href="http://www.labsmedia.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">非推奨</a>）');
define('LANG_JAVASCRIPT_GROUP3', 'ウェブページのアドレスを使用：（<a href="http://www.labsmedia.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">非推奨</a>）');
define('LANG_JAVASCRIPT_PASTE', '以下のコードをページの最後にコピー＆ペーストしてください。（&lt;/body&gt;タグの前など）：');
define('LANG_JAVASCRIPT_DEBUG', 'コードの設置が完了したら<span class="error">debugclickheat</span>パラメータをつけた状態でページを読み込むのを忘れないでください。（例えば設置したURLが http://www.site.com/index.html の場合、 http://www.site.com/index.html<span class="error">?debugclickheat</span> を呼び出してください。Clickheatの動作確認のメッセージが見れるはずです。問題に遭遇したら気軽にお問い合わせください。');
define('LANG_NO_CLICK_BELOW', 'No clicks recorded beneath this line'); // Leave this line in English please
define('LANG_ERROR_GROUP', '不明なグループ _JAVASCRIPT_');
define('LANG_ERROR_DATA', '指定された期間のログはありません。（ブラウザー指定や画面サイズのフィルターをはずしてみてください。） _JAVASCRIPT_');
define('LANG_ERROR_JAVASCRIPT', 'Javascriptコードをウェブページに正確に埋め込みましたか？');
define('LANG_ERROR_FILE', 'ログファイルが開けませんでした。');
define('LANG_ERROR_SCREEN', '非標準画面サイズ');
define('LANG_ERROR_LOADING', '画像の生成中です。お待ちください…');
define('LANG_ERROR_FIXED', '全ての幅が固定されています。そのような指定は無効です。上記のレイアウト幅を1つ以上変更してください。');
define('LANG_DEFAULT', 'デフォルト');
define('LANG_CHECKS', '事前チェック');
define('LANG_CHECK_WRITABLE', '設定ディレクトリへの書き込み権限');
define('LANG_CHECK_NOT_WRITABLE', 'PHP実行ユーザに設定ディレクトリへの書き込み権限がありません。');
define('LANG_CHECK_GD', 'GDライブラリ');
define('LANG_CHECK_GD_IMG', 'imagecreatetruecolor()が利用できないので、綺麗な画像を生成することができません。GDライブラリがインストールされているか確認してください。');
define('LANG_CHECK_GD_ALPHA', 'imagecolorallocatealpha()が利用できないので、透過画像を生成することができません。（無視することもできますが、透過処理の利用は非常に推奨されます）');
define('LANG_CHECK_GD_PNG', 'imagepng()が利用できないので、PNGファイルを生成することができません。');
define('LANG_CHECKS_OK', '次のステップ：設定');
define('LANG_CHECKS_KO', '1つ以上の事前チェックに失敗しました。問題点を修正した上で、このページをリロードしてください。');
define('LANG_CONFIG', '設定');
define('LANG_CONFIG_HEADER_HEATMAP', 'ヒートマップレンダリング');
define('LANG_CONFIG_HEADER_DISPLAY', 'メインページ');
define('LANG_CONFIG_HEADER_SECURITY', 'セキュリティ');
define('LANG_CONFIG_HEADER_LOGIN', 'ログインパラメータ');
define('LANG_CONFIG_LOGPATH', 'ログファイルディレクトリ');
define('LANG_CONFIG_LOGPATH_DIR', '指定されたログファイルディレクトリが存在しません。作成してください。');
define('LANG_CONFIG_LOGPATH_KO', '指定されたログファイルディレクトリには書き込み権限がありません。PHP実行ユーザに書き込み権限を与えてください。（例としてcronlog/rotatelogなどで特定のログを利用している場合はこの警告を無視してください。）');
define('LANG_CONFIG_CACHEPATH', '一時ファイルディレクトリ');
define('LANG_CONFIG_CACHEPATH_DIR', '指定された一時ファイルディレクトリが存在しません。作成してください。');
define('LANG_CONFIG_CACHEPATH_KO', '指定された一時ファイルディレクトリには書き込み権限がありません。PHP実行ユーザに書き込み権限を与えてください。');
define('LANG_CONFIG_REFERERS', 'クリックを記録するドメイン名の一覧（コンマ区切り）');
define('LANG_CONFIG_GROUPS', 'クリックを記録するグループの一覧（コンマ区切り）');
define('LANG_CONFIG_FILESIZE', 'グループごとの1日の最大ログファイルサイズ（KB）（1000回のクリックはおおよそ25KBです。0 = サイズ制限なし）');
define('LANG_CONFIG_CHECK', '設定の確認');
define('LANG_CONFIG_MEMORY', 'メモリ制限（php.iniのデフォルトは %d MBです。%d ～ %d MBの値で入力してください。）【<a href="http://www.labsmedia.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">高い設定値には注意が必要です</a>】');
define('LANG_CONFIG_MEMORY_KO', '記載された範囲内で指定ください。');
define('LANG_CONFIG_STEP', 'クリックを指定したピクセルでグループ化（ヒートマップの表示が高速化します）');
define('LANG_CONFIG_STEP_KO', '1ピクセル未満でのグループ化はできません。');
define('LANG_CONFIG_DOT', 'ヒートマップのドットサイズ（ピクセル数）');
define('LANG_CONFIG_DOT_KO', 'ドットサイズに 0 は指定できません。');
define('LANG_CONFIG_PALETTE', '赤い四角がヒートマップに表示された場合は有効にしてください。');
define('LANG_CONFIG_HEATMAP', 'ヒートマップの表示');
define('LANG_CONFIG_FLASHES', '&lt;Flash&gt; オブジェクトの非表示'); 
define('LANG_CONFIG_IFRAMES', '&lt;iframe&gt; フレームの非表示'); 
define('LANG_CONFIG_YESTERDAY', '初期ページに昨日の統計結果を表示する。');
define('LANG_CONFIG_ALPHA', '透過レベル（0 => 100）');
define('LANG_CONFIG_FLUSH', '古い統計ファイルを自動的に削除するまでの日数（0 = 全てのファイルを保存【非推奨】）');
define('LANG_CONFIG_START', '週の先頭');
define('LANG_CONFIG_START_M', '月');
define('LANG_CONFIG_START_S', '日');
define('LANG_CONFIG_ADMIN_LOGIN', '管理者のユーザ名');
define('LANG_CONFIG_ADMIN_PASS', '管理者のパスワード（2箇所に入力）');
define('LANG_CONFIG_VIEWER_LOGIN', '訪問者のユーザ名（空の場合はアカウントは無効）');
define('LANG_CONFIG_VIEWER_PASS', '訪問者のパスワード（2箇所に入力）');
define('LANG_CONFIG_LOGIN', 'ユーザ名は 4 文字以上である必要があります。');
define('LANG_CONFIG_PASS', 'パスワードの項目が空です。');
define('LANG_CONFIG_MATCH', 'パスワードが一致しません。');
define('LANG_CONFIG_SAVE', '設定の保存');
define('LANG_CLEANER_RUNNING', 'クリーニング作業中…');
define('LANG_CLEANER_RUN', 'クリーニング作業完了: %d 個のファイルと %d 個のディレクトリが削除されました。');
define('LANG_CANCEL', 'キャンセル');
define('LANG_UPGRADE', 'アップグレード');
define('LANG_UPGRADE_NEXT', '変更を保存するには設定を確認してから保存を押してください。');
?>
