<?php
/**
 * ClickHeat: Terjemahan Bahasa Indonesia
 * 
 * @author Hendry Lee - blogbuildingu.com
 * @since 01/01/2009
**/

/** Fix for Piwik bad behaviour */
if (defined('LANG_USER'))
{
	return true;
}

define('LANG_USER', 'Pemakai');
define('LANG_PASSWORD', 'Kata Sandi');
define('LANG_LOGIN', 'Masuk Log');
define('LANG_LOGIN_ERROR', 'Kesalahan masuk log, pemakai atau kata sandi tidak benar');
define('LANG_LOGOUT', 'Keluar Log');
define('LANG_UNKNOWN_DIR', 'Tidak dapat mendefinisikan direktori terkini, harap hubungi kami');
define('LANG_DAYS', 'S,S,R,K,J,S,M');
define('LANG_RANGE', 'Hari,Minggu,Bulan');
define('LANG_MONTHS', '0,Januari,Februari,Maret,April,Mei,Juni,Juli,Agustus,September,Oktober,Nopember,Desember');
define('LANG_SITE', 'Situs Web');
define('LANG_GROUP', 'Grup');
define('LANG_BROWSER', 'Peramban');
define('LANG_ALL', 'Semua');
define('LANG_UNKNOWN', 'Lainnya/tidak diketahui');
define('LANG_EXAMPLE_URL', 'Halaman Web');
define('LANG_LAYOUT', 'Tata letak grup');
define('LANG_LAYOUT_FIXED', 'Konten tetap/menu');
define('LANG_LAYOUT_LIQUID', 'Konten dinamis/menu (otomatis tersuai pada ruang yang tersedia)');
define('LANG_LAYOUT_NONE', 'Marjin (tidak ada konten), dinamis');
define('LANG_LAYOUT_0', 'Konten dinamis dan menu');
define('LANG_LAYOUT_1', 'Menu kiri tetap, konten dinamis');
define('LANG_LAYOUT_2', 'Kontent di tengah tetap (marjin otomatis di kiri dan kanan)');
define('LANG_LAYOUT_3', 'Konten tetap terpaut ke kiri (marjin kanan otomatis)');
define('LANG_LAYOUT_4', 'Menu kanan tetap, konten dinamis');
define('LANG_LAYOUT_5', 'Menu kiri dan kanan tetap, konten dinamis');
define('LANG_LAYOUT_6', 'Konten tetap terpaut ke kanan (marjin kiri otomatis)');
define('LANG_LAYOUT_LEFT', 'Lebar kiri tetap (piksel)');
define('LANG_LAYOUT_CENTER', 'Lebar tengah tetap (piksel)');
define('LANG_LAYOUT_RIGHT', 'Lebar kanan tetap (piksel)');
define('LANG_SCREENSIZE', 'Ukuran layar');
define('LANG_HEATMAP', 'Pete suhu dan transparansinya');
define('LANG_LATEST_CHECK', 'Mutakhirkan');
define('LANG_LATEST_KO', 'Tidak dapat menemukan versi terakhir secara dinamis, punya Anda adalah %s, yang terakhir dibaca langsung dari situs web Labmedia adalah');
define('LANG_LATEST_OK', 'Anda memiliki versi terakhir (%s)');
define('LANG_LATEST_NO', 'Versi Anda (%s) bukan merupakan yang terkini (%s). Anda dapat mengunduh yang terkini dari situs web kami');
define('LANG_LOG_MY_CLICKS', 'Catat klik saya?');
define('LANG_JAVASCRIPT_ADMIN_COOKIE', 'Dalam rangka menghindari polusi statistik,\nAnda dapat memilih untuk tidak mencatat klik Anda sendiri\n\nOK = catat klik saya\nBatal = jangan catat klik saya');
define('LANG_JAVASCRIPT', 'Kode Javascript yang akan ditempelkan ke halaman yang akan Anda pelajari');
define('LANG_JAVASCRIPT_IMAGE', 'Tampilkan logo ClickHeat pada halaman yang dipelajari: ');
define('LANG_JAVASCRIPT_SHORT', 'Kode kompak (3 baris saja)');
define('LANG_JAVASCRIPT_QUOTA', 'Klik maksimum per halaman dan pengunjung, klik berikutnya tidak akan disimpan (0 = tidak ada batas, 3 adalah pilihan yang baik)');
define('LANG_JAVASCRIPT_SITE', 'Nama situs web (karakter yang diperbolehkan: A-Z, a-z, 0-9, garis bawah, tanda hubung, titik)');
define('LANG_JAVASCRIPT_GROUP', 'Nama grup, untuk mengelompokkan halaman yang sama untuk analisis yang lebih sederhana');
define('LANG_JAVASCRIPT_GROUP0', 'Pakai sebuah kata kunci');
define('LANG_JAVASCRIPT_GROUP1', 'karakter yang diijinkan: A-Z, a-z, 0-9,garis bawah, tanda hubung, titik');
define('LANG_JAVASCRIPT_GROUP2', 'pergunakan judul halaman web (<a href="http://www.labsmedia.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">tidak direkomendasikan</a>)');
define('LANG_JAVASCRIPT_GROUP3', 'pergunakan URL halaman web (<a href="http://www.labsmedia.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">tidak direkomendasikan</a>)');
define('LANG_JAVASCRIPT_PASTE', 'Salin dan tempel kode di bawah ini pada halaman Anda, sebelum akhir dari halaman (sebelum tag &lt;/body&gt;):');
define('LANG_JAVASCRIPT_DEBUG', 'Setelah kode ditempelkan pada halaman Anda, jangan lupa mencoba jika kode bekerja dengan benar, dengan memanggil halaman Anda dengan parameter <span class="error">debugclickheat</span>. Contoh untuk http://www.site.com/index.html panggil http://www.site.com/index.html<span class="error">?debugclickheat</span>. Anda seharusnya melihat sebuah pesan yang menunjukkan status dari Clickheat. Jika Anda menemukan masalah apapun, silahkan hubungi kami');
define('LANG_NO_CLICK_BELOW', 'Tidak ada klik yang terekam di bawah baris ini'); // Leave this line in English please
define('LANG_ERROR_GROUP', 'Grup yang tidak diketahui. _JAVASCRIPT_');
define('LANG_ERROR_DATA', 'Tidak ada log untuk periode terpilih (pertama coba singkirkan filter: peramban, ukuran layar). _JAVASCRIPT_');
define('LANG_ERROR_JAVASCRIPT', 'Apakah Anda menginstalasi kode Javascript dengan benar pada halaman Anda?');
define('LANG_ERROR_FILE', 'Tidak dapat membuka berkas log');
define('LANG_ERROR_SCREEN', 'Ukuran layar yang tidak standar');
define('LANG_ERROR_LOADING', 'Memproduksi gambar, harap tunggu...');
define('LANG_ERROR_FIXED', 'Semua lebar adalah tetap, hal itu tidak mungkin. Harap ubah salah satu lebar dari tata letak di atas.');
define('LANG_DEFAULT', 'bawaan');
define('LANG_CHECKS', 'Pemeriksaan pendahuluan');
define('LANG_CHECK_WRITABLE', 'Tulis permisi ke direktori konfigurasi');
define('LANG_CHECK_NOT_WRITABLE', 'PHP hasn\'t got write permission in the configuration directory');
define('LANG_CHECK_GD', 'Pustaka gambar GD');
define('LANG_CHECK_GD_IMG', 'imagecreatetruecolor() tidak tersedia, tidak dapat membuat gambar (dengan kualitas yang bagus), periksa bahwa GD terinstal');
define('LANG_CHECK_GD_ALPHA', 'imagecolorallocatealpha() tidak tersedia, tidak dapat membuat gambar transparan (Anda dapat mengabaikan ini, tapi transparansi sangat direkomendasikan)');
define('LANG_CHECK_GD_PNG', 'imagepng() tidak tersedia, tidak dapat membuat gambar PNG, maaf');
define('LANG_CHECKS_OK', 'Next step: configuration');
define('LANG_CHECKS_KO', 'Satu atau lebih tes telah gagal. Harap perbaiki masalah dan segarkan kembali halaman ini.');
define('LANG_CONFIG', 'Konfigurasi');
define('LANG_CONFIG_HEADER_HEATMAP', 'Pembuatan peta suhu');
define('LANG_CONFIG_HEADER_DISPLAY', 'Tampilan utama');
define('LANG_CONFIG_HEADER_SECURITY', 'Keamanan');
define('LANG_CONFIG_HEADER_LOGIN', 'Parameter masuk log');
define('LANG_CONFIG_LOGPATH', 'Direktori berkas log');
define('LANG_CONFIG_LOGPATH_DIR', 'Direktori berkas log tidak ditemukan. Harap dibuat');
define('LANG_CONFIG_LOGPATH_KO', 'Direktori berkas tidak memiliki permisi tulis, harap berikan permisi tulis pada pemakai PHP');
define('LANG_CONFIG_CACHEPATH', 'Direktori berkas sementara');
define('LANG_CONFIG_CACHEPATH_DIR', 'Direktori berkas sementara tidak ada. Harap dibuat');
define('LANG_CONFIG_CACHEPATH_KO', 'Direktori berkas sementara tidak memiliki permisi tulis, harap berikan permisi tulis pada pemakai PHP');
define('LANG_CONFIG_REFERERS', 'Nama domain (dipisahkan dengan koma) yang diperbolehkan untuk mencatat klik pada server ini');
define('LANG_CONFIG_GROUPS', 'Nama grup (dipisahkan dengan koma) yang diperbolehkan untuk mencatat klik pada server ini');
define('LANG_CONFIG_FILESIZE', 'Ukuran berkas log maksimum (dalam KB) untuk sebuah grup selama sehari (1000 klik adalah sekitar 25KB, 0 = tidak ada batas ukuran)');
define('LANG_CONFIG_CHECK', 'Periksa konfigurasi');
define('LANG_CONFIG_MEMORY', 'Batas memori (Nilai bawaaan php.ini: %dMB, batas: dari %d ke %dMB, tapi <a href="http://www.labsmedia.com/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">hati-hati dengan nilai tinggi</a>)');
define('LANG_CONFIG_MEMORY_KO', 'Harap tetap berada pada batas jangkauan yang ditentukan');
define('LANG_CONFIG_STEP', 'Pengelompokan klik dengan zona piksel X*X (mempercepat penampilan peta suhu)');
define('LANG_CONFIG_STEP_KO', 'zona tidak diperbolehkan di bawah 1x1 piksel');
define('LANG_CONFIG_DOT', 'Ukuran titik peta suhu (piksel)');
define('LANG_CONFIG_DOT_KO', 'Ukuran titik tidak diperbolehkan nol');
define('LANG_CONFIG_PALETTE', 'Jika Anda melihat kotak merah pada peta suhu centang kotak ini');
define('LANG_CONFIG_HEATMAP', 'Tampilkan peta suhu (bukan peta klik)');
define('LANG_CONFIG_FLASHES', 'Sembunyikan objek &lt;Flash&gt;'); 
define('LANG_CONFIG_IFRAMES', 'Sembunyikan bingkai &lt;iframe&gt;'); 
define('LANG_CONFIG_YESTERDAY', 'Tampilkan statistik kemarin pada permulaan (bukan hari ini)');
define('LANG_CONFIG_ALPHA', 'Level transparansi (0 => 100)');
define('LANG_CONFIG_FLUSH', 'Buang statistik yang lebih lama dari X hari secara otomatis (0 = simpan semua berkas, tidak direkomendasikan)');
define('LANG_CONFIG_START', 'Hari pertama dari minggu');
define('LANG_CONFIG_START_M', 'Senin');
define('LANG_CONFIG_START_S', 'Minggu');
define('LANG_CONFIG_ADMIN_LOGIN', 'Identifikasi Administrator');
define('LANG_CONFIG_ADMIN_PASS', 'Kata sandi Administrator (masukkan dua kali)');
define('LANG_CONFIG_VIEWER_LOGIN', 'Identifikasi pengunjung (jika kosong, akun akan dimatikan)');
define('LANG_CONFIG_VIEWER_PASS', 'Kata sandi pemakai (masukkan dua kali)');
define('LANG_CONFIG_LOGIN', 'identifikasi harus setidaknya 4 karakter');
define('LANG_CONFIG_PASS', 'kata sandi kosong');
define('LANG_CONFIG_MATCH', 'kata sandi tidak cocok');
define('LANG_CONFIG_SAVE', 'Konfigurasi disimpan');
define('LANG_CLEANER_RUNNING', 'Pembersihan sedang dalam proses...');
define('LANG_CLEANER_RUN', 'Pembersihan selesai: %d berkas dan %d direktori telah dihapus');
define('LANG_CANCEL', 'Batal');
define('LANG_UPGRADE', 'Mutakhirkan');
define('LANG_UPGRADE_NEXT', 'Periksa konfigurasi Anda, lalu simpan untuk menyelesaikan pemutakhiran');
?>