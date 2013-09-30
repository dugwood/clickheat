<?php
/**
 * ClickHeat: Türkçe dil dosyası
 * 
 * @author suleymans  -  www.suleymans.com
 * @author sci-tech  -  www.sci-technews.com
 * @since 01/04/2008
**/

/** Fix for Piwik bad behaviour */
if (defined('LANG_USER'))
{
	return true;
}

define('LANG_USER', 'Kullanıcı Adı');
define('LANG_PASSWORD', 'Şifre');
define('LANG_LOGIN', 'Oturum aç');
define('LANG_LOGIN_ERROR', 'Oturum açma hatası, wrong user or password');
define('LANG_LOGOUT', 'Çıkış');
define('LANG_UNKNOWN_DIR', 'Belirtilen dizine ulaşılamıyor, lütfen daha sonra tekrar deneyin.');
define('LANG_DAYS', 'P,S,Ç,P,C,C,P');
define('LANG_RANGE', 'Gün,Hafta,Ay');
define('LANG_MONTHS', '0, Ocak, Şubat, Mart, Nisan, Mayıs, Haziran, Temmuz, Ağustos, Eylül, Ekim, Kasım, Aralık');
define('LANG_SITE', 'Website');
define('LANG_GROUP', 'Grup');
define('LANG_BROWSER', 'Tarayıcı');
define('LANG_ALL', 'Hepsi');
define('LANG_UNKNOWN', 'Diğer/bilinmeyen');
define('LANG_EXAMPLE_URL', 'Web sayfası');
define('LANG_LAYOUT', 'Grup düzeni');
define('LANG_LAYOUT_FIXED', 'Sabit içerik/menü');
define('LANG_LAYOUT_LIQUID', 'Akıcı içerik/menü (mevcut alan otomatik olarak ayarlanır)');
define('LANG_LAYOUT_NONE', 'Kenarlık (içerik yok), akıcı');
define('LANG_LAYOUT_0', 'Akıcı içerik ve menü');
define('LANG_LAYOUT_1', 'Sabit sol menü, akıcı içerik');
define('LANG_LAYOUT_2', 'Sabit ortalanmış içerik (kenar boşlukları otomatik olarak belirlenir)');
define('LANG_LAYOUT_3', 'Sola yaslanmış sabit içerik(sağdan otomatik boşluk bırakır)');
define('LANG_LAYOUT_4', 'Sabit sağ menü, akıcı içerik');
define('LANG_LAYOUT_5', 'Sabit sağ ve sol menuler, akıcı içerik');
define('LANG_LAYOUT_6', 'Sağa yaslanmış sabit içerik(soldan otomatik boşluk bırakır)');
define('LANG_LAYOUT_LEFT', 'Sabit sol boşluk (pixel olarak)');
define('LANG_LAYOUT_CENTER', 'Sabit ortalanmış boşluk (pixel olarak)');
define('LANG_LAYOUT_RIGHT', 'Sabit sağ boşluk (pixel olarak)');
define('LANG_SCREENSIZE', 'Ekran çözünürlüğü');
define('LANG_HEATMAP', 'Sıcaklık haritası ve şeffaflık değeri');
define('LANG_LATEST_CHECK', 'Güncelle');
define('LANG_LATEST_KO', 'Güncel sürüm bilgisine ulaşılamıyor, kullandığınız sürüm %s, güncel sürüm bilgisine Dugwood sitesinden ulaşabilirsiniz.');
define('LANG_LATEST_OK', 'En güncel sürümü kullanıyorsunuz (%s)');
define('LANG_LATEST_NO', 'Kullanmış olduğunuz (%s) sürümünden daha güncel bir sürüm (%s) mevcut. Güncel sürümü sitemiz üzerinden indirebilirsiniz:');
define('LANG_LOG_MY_CLICKS', 'Tıklarınız kayıt altına alınsın mı?');
define('LANG_JAVASCRIPT_ADMIN_COOKIE', 'İstatistiklerinizin daha temiz olması için\n tıklarınızın kayıt altına alınmaması önerilir. \n\nTamam = tıklarımı kayıt altına al\nİptal = tıklarımı kayıt altına alma');
define('LANG_JAVASCRIPT', 'Javascript kodu, kayıt altına alıncak sayfalara eklenmiş olmalıdır');
define('LANG_JAVASCRIPT_IMAGE', 'Sitenizde ClickHeat logosu görünsün: ');
define('LANG_JAVASCRIPT_SHORT', 'Kısa kod (sadece 3 satır)');
define('LANG_JAVASCRIPT_QUOTA', 'En fazla tık sayısı, daha fazlası kayıt altına alınmayacaktır (0 = limitsiz, 3 iyi bir seçim)');
define('LANG_JAVASCRIPT_SITE', 'Website adı (izin verilen karakterler: A-Z, a-z, 0-9, alt çizgi, boşluk, nokta)');
define('LANG_JAVASCRIPT_GROUP', 'Grup adı, benzer sayfaları gruplamak için');
define('LANG_JAVASCRIPT_GROUP0', 'bir anahtar kelime kullan');
define('LANG_JAVASCRIPT_GROUP1', 'izin verilen karakterler: A-Z, a-z, 0-9, alt çizgi, boşluk, nokta');
define('LANG_JAVASCRIPT_GROUP2', 'sayfa başlığı kullan (<a href="http://www.Dugwood.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">önerilmez</a>)');
define('LANG_JAVASCRIPT_GROUP3', 'site adresi kullan (<a href="http://www.Dugwood.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">önerilmez</a>)');
define('LANG_JAVASCRIPT_PASTE', 'Alt kısımda görünen kodu kopyalayıp kayıt altına almak istediğiniz sayfaların bitiminden önce ekleyin (&lt;/body&gt; komutundan önce):');
define('LANG_JAVASCRIPT_DEBUG', 'Size verilen kodu sitenize ekleme işleminin ardından kodun çalıp çalışmadığını <span class="error">debugclickheat</span> komutu ile test edin. Örnek: http://www.site.com/index.html sitesine kodu ekledi iseniz şu adrese ulaşın http://www.site.com/index.html<span class="error">?debugclickheat</span>. Clickheat tarafından oluşturlan bir ileti görmelisiniz. Bir hata ile karşılaşırsanız lütfen bizimle iletişime geçin');
define('LANG_NO_CLICK_BELOW', 'No clicks recorded beneath this line'); // Leave this line in English please
define('LANG_ERROR_GROUP', 'Bilinmeyen grup. _JAVASCRIPT_');
define('LANG_ERROR_DATA', 'Seçilen süreçte kayıt bulunamadı (filtreleri kaldırmayı deneyin: tarayıcı, ekran boyutu). _JAVASCRIPT_');
define('LANG_ERROR_JAVASCRIPT', 'Kodu sayfanıza doğru bir şekilde eklediniz mi?');
define('LANG_ERROR_FILE', 'Kayıt dosyası açılamıyor');
define('LANG_ERROR_SCREEN', 'Standard olmayan ekran boyutu');
define('LANG_ERROR_LOADING', 'Görsel oluşturuluyor, lütfen bekleyin...');
define('LANG_ERROR_FIXED', 'Tüm genişlikler sabit, bu mümkün değil. Lütfen yukarıda belirlediğiniz düzeni değiştirin.');
define('LANG_DEFAULT', 'varsayılan');
define('LANG_CHECKS', 'İlk kontrol');
define('LANG_CHECK_WRITABLE', 'Ayar dizini yazma izinleri');
define('LANG_CHECK_NOT_WRITABLE', 'PHP ayar dizinine yazma iznine sahip değil');
define('LANG_CHECK_GD', 'GD görsel kütüphane');
define('LANG_CHECK_GD_IMG', 'imagecreatetruecolor() mevcut değil, görseller oluşturulamıyor (iyi kalite ile), GD kütüphanesinin doğru yüklenmiş olduğuna dikkat edin');
define('LANG_CHECK_GD_ALPHA', 'imagecolorallocatealpha() mevcut değil, şeffaf görseller oluşturulamıyor (bunu önemsemeyin ancak şeffaflık kullanmanız önerilir)');
define('LANG_CHECK_GD_PNG', 'imagepng() mevcut değil, PNG görseller oluşturulamıyor, üzgünüz');
define('LANG_CHECKS_OK', 'Sonraki adım: ayar');
define('LANG_CHECKS_KO', 'Bir veya daha fazla test başarısız oldu. Lütfen hataları giderin ve sayfayı yeniden açın.');
define('LANG_CONFIG', 'Ayar');
define('LANG_CONFIG_HEADER_HEATMAP', 'Sıcaklık haritası(Heatmap) yorumlanıyor');
define('LANG_CONFIG_HEADER_DISPLAY', 'Genel görünüm');
define('LANG_CONFIG_HEADER_SECURITY', 'Güvenlik');
define('LANG_CONFIG_HEADER_LOGIN', 'Oturum açma değişkenleri');
define('LANG_CONFIG_LOGPATH', 'Logfiles\' dizini');
define('LANG_CONFIG_LOGPATH_DIR', 'Kayıt dosyaları dizini mevcut değil. Lütfen oluşturun.');
define('LANG_CONFIG_LOGPATH_KO', 'Kayıt dosyaları dizinine yazma iznine sahip değilsiniz, lütfen yazma izni verin');
define('LANG_CONFIG_CACHEPATH', 'Geçici dosya dizini');
define('LANG_CONFIG_CACHEPATH_DIR', 'Geçici dosya dizini mevcut değil. Lütfen oluşturun');
define('LANG_CONFIG_CACHEPATH_KO', 'Geçici dosya dizine yazma iznine sahip değilsiniz, lütfen yazma izni verin.');
define('LANG_CONFIG_REFERERS', 'Bu sunucuda kayıt altına alınacak alan adları (virgül ile ayrılmış)');
define('LANG_CONFIG_GROUPS', 'Bu sunucuda kayıt altına alınacak grup adları (virgül ile ayrılmış)');
define('LANG_CONFIG_FILESIZE', 'Bir grupta tutulacak olan kayıtların azami kayıt dosyası boyutu (KB olarak) (1000 tık yaklaşık 25KB, 0 = sınırsız)');
define('LANG_CONFIG_CHECK', 'Ayarları denetle');
define('LANG_CONFIG_MEMORY', 'Hafıza sınırı (varsayılan php.ini değeri: %dMB, sınırlar: %d dan %dMB a kadar, fakat <a href="http://www.Dugwood.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">yüksek değerlere dikkat edin.</a>)');
define('LANG_CONFIG_MEMORY_KO', 'lütfen belirtilen aralığı kullanın');
define('LANG_CONFIG_STEP', 'Tıklamalar X*X pixele göre gruplandırılıyor\' alan (Sıcaklık haritası(Heatmap) gösterim hızını arttırın)');
define('LANG_CONFIG_STEP_KO', 'alanlar 1x1 pixel boyutundan küçük olamaz');
define('LANG_CONFIG_DOT', 'Sıcaklık haritası(Heatmap) nokta boyutu (pixel olarak)');
define('LANG_CONFIG_DOT_KO', 'nokta boyutu sıfır olamaz');
define('LANG_CONFIG_PALETTE', 'Sıcaklık haritasında(Heatmap) kırmızı kareler görmek istiyorsanız işaretleyin');
define('LANG_CONFIG_HEATMAP', 'Sıcaklık haritası(Heatmap) göster');
define('LANG_CONFIG_FLASHES', '&lt;Flash&gt; nesneleri gizle'); 
define('LANG_CONFIG_IFRAMES', '&lt;iframe&gt; çerçevelerini gizle'); 
define('LANG_CONFIG_YESTERDAY', 'Düne ait istatistikleri göster (bügüne tercihen)');
define('LANG_CONFIG_ALPHA', 'Şeffaflık değeri (0 => 100)');
define('LANG_CONFIG_FLUSH', 'X günden daha eski kayıtları sil (0 = tüm değerleri kayıtlı olarak tutar, önerilmez)');
define('LANG_CONFIG_START', 'Haftanın ilk günü');
define('LANG_CONFIG_START_M', 'Pazartesi');
define('LANG_CONFIG_START_S', 'Pazar');
define('LANG_CONFIG_ADMIN_LOGIN', 'Yönetici kullanıcı adı');
define('LANG_CONFIG_ADMIN_PASS', 'Yönetici şifresi (iki defa girin)');
define('LANG_CONFIG_VIEWER_LOGIN', 'Ziyaretçi kullanıcı adı (boş bırakılırsa ziyaretçi hesabı etkin olmayacaktır)');
define('LANG_CONFIG_VIEWER_PASS', 'Ziyaretçi şifresi (iki defa girin)');
define('LANG_CONFIG_LOGIN', 'kullanıcı adı en az 4 karakterden oluşmalıdır');
define('LANG_CONFIG_PASS', 'şifre kısmı boş');
define('LANG_CONFIG_MATCH', 'şifre eşleşmiyor');
define('LANG_CONFIG_SAVE', 'Ayarları kaydet');
define('LANG_CLEANER_RUNNING', 'Temizleme işlemi sürüyor...');
define('LANG_CLEANER_RUN', 'Temizleme işlemi sona erdi: %d dosya ve %d dizin silindi');
define('LANG_CANCEL', 'İptal');
define('LANG_UPGRADE', 'Güncelle');
define('LANG_UPGRADE_NEXT', 'Ayarlarınızı denetleyin ve güncellemeyi bitirmek için kayıt edin');
?>
