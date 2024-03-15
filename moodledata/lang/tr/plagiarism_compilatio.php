<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'plagiarism_compilatio', language 'tr', version '4.3'.
 *
 * @package     plagiarism_compilatio
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activate_compilatio'] = 'Compilatio\' yu etkinleştir';
$string['admin_disabled_reports'] = 'Yönetici, öğretmenlerin benzerlik raporlarını öğrencilere göstermesine izin vermez.';
$string['analysis_date'] = 'Analiz Tarihi (Sadece süreli analiz)';
$string['analysis_started'] = '{$a} analiz talep edildi.';
$string['analysistype_manual'] = 'El ile';
$string['analysistype_prog'] = 'Süreli';
$string['api_key_not_tested'] = 'Compilatio.net ile olan bağlantı başarısız olduğundan API anahtarınız doğrulanmadı.';
$string['api_key_not_valid'] = 'API anahtarınız geçerli değil. Kullanılan platforma özeldir. Temas ederek bir tane edinebilirsiniz. <a href=\'mailto:ent@compilatio.net\'>ent@compilatio.net</a>.';
$string['api_key_valid'] = 'API anahtarınız geçerlidir.';
$string['auto_diagnosis_title'] = 'Otomatik teşhis';
$string['average'] = 'Ortalama oran';
$string['compilatio'] = 'Compilatio intihal eklentisi';
$string['compilatio:enable'] = 'Bir etkinlik içinde Öğretmenin Compilatio\' yu etkinleştirmesine/devre dışı bırakmasına izin ver';
$string['compilatio:triggeranalysis'] = 'Öğretmenin elle analiz tetiklemesine izin verin';
$string['compilatio:viewreport'] = 'Öğretmenin Derleme\'den tam raporu görüntülemesine izin ver';
$string['compilatio_help_assign'] = 'Compilatio eklentisi hakkında yardım görüntüleyin';
$string['compilatiodefaults'] = 'Compilatio varsayılanları';
$string['compilatioexplain'] = 'Bu eklenti hakkında daha fazla bilgi için bkz: <a href="http://www.compilatio.net/en/" target="_blank">compilatio.net</a>';
$string['cron_check'] = 'CRON son {$a} tarihinde çalıştırıldı.';
$string['cron_check_never_called'] = 'Eklentinin etkinleştirilmesinden beri CRON hiç çalıştırılmadı. Sunucunuzda yanlış yapılandırılmış olabilir.';
$string['cron_check_not_ok'] = 'Son bir saat içinde çalıştırılmadı.';
$string['cron_frequency'] = 'Her dakika {$a} dakika içinde çalışıyor gibi görünüyor.';
$string['cron_recommandation'] = 'Her bir CRON uygulaması arasında 15 dakikanın altında bir gecikme kullanmanızı öneririz.';
$string['defaults_desc'] = 'Aşağıdaki ayarlar, bir Etkinlik Modülü\'nde Compilatio\' yu etkinleştirirken ayarlanan varsayılan değerlerdir';
$string['defaultupdated'] = 'Varsayılan değerler güncellendi';
$string['disclaimer_data'] = 'Compilatio\'yu iyileştirmek için Moodle yapılandırmanızla ilgili verilerin toplanacağını kabul etmiş olursunuz.';
$string['display_notifications'] = 'Görüntülü ilan bildirimleri';
$string['display_stats'] = 'Bu ödevle ilgili istatistikleri göster';
$string['documents_number'] = 'Analiz edilen belgeler';
$string['enabledandworking'] = 'Compilatio eklentisi etkinleştirildi ve çalışıyor.';
$string['errors'] = 'Hatalar:';
$string['export_csv'] = 'Bu etkinlikle ilgili verileri bir CSV dosyasına aktarın';
$string['export_global_csv'] = 'Bu veriyi CSV biçiminde dışa aktarmak için burayı tıklayın';
$string['export_raw_csv'] = 'Ham verileri CSV biçiminde dışa aktarmak için burayı tıklayın';
$string['failedanalysis'] = 'Compilatio dokümanınızı analiz etmek için başarısız oldu:';
$string['filename'] = 'Dosya adı';
$string['firstname'] = 'İlk adı';
$string['get_scores'] = 'Complatio.net\'den intihal puanı alın';
$string['global_statistics'] = 'Genel istatistikler';
$string['green_threshold'] = 'Yeşile kadar';
$string['help_compilatio_format_content'] = 'Compilatio.net sözcük işlemcilerinde ve internette kullanılan birçok biçimi yönetir.
Aşağıdaki biçimler desteklenir:
<ul>
<li>
Metin \'.txt\'
</li>
<li>
Adobe Acrobat \'.pdf\'
</li>
<li>
Zengin metin biçimi \'.rtf\'
</li>
<li>
Metin düzenleyici \'.doc\', \'.docx\', \'.odt\'
</li>
<li>
Elektronik tablo \'.xls \', \'.xlsx\'
</li>
<li>
slayt gösterisi \'.ppt \', \'.pptx\'
</li>
<li>
web dosyası \'.html\'
</li>
</ul>
.';
$string['immediately'] = 'Hemen';
$string['lastname'] = 'Son ad';
$string['manual_analysis'] = 'Bu belgenin analizi el ile başlatılmalıdır.';
$string['maximum'] = 'Maksimum hız';
$string['minimum'] = 'Minimum hız';
$string['no_document_available_for_analysis'] = 'Analiz için hazırlanmış bir belge yok';
$string['no_statistics_yet'] = 'Henüz hiçbir analiz belgesi bulunmamaktadır.';
$string['not_analyzed'] = 'Aşağıdaki belgeler analiz edilemez:';
$string['numeric_threshold'] = 'Eşik bana bir sayı olmalı';
$string['orange_threshold'] = 'Kadar turuncu';
$string['plugin_disabled'] = 'Eklenti Moodle platformunda etkinleştirilmedi.';
$string['plugin_disabled_assign'] = 'Eklenti ödevler için etkin değil.';
$string['plugin_disabled_forum'] = 'Eklenti forumlar için etkin değil';
$string['plugin_disabled_workshop'] = 'Eklenti çalıştaylar için etkin değil';
$string['plugin_enabled'] = 'Eklenti, Moodle platformunda etkinleştirilmiştir.';
$string['plugin_enabled_assign'] = 'Eklenti ödevler için etkinleştirilmiştir.';
$string['plugin_enabled_forum'] = 'Eklenti forumlar için etkinleştirilmiştir.';
$string['plugin_enabled_workshop'] = 'Eklenti çalıştaylar için etkinleştirilmiştir';
$string['pluginname'] = 'Compilatio intihal eklentisi';
$string['programmed_analysis_future'] = 'Belgeler {$a} üzerine Compilatio ile analiz edilecektir.';
$string['programmed_analysis_past'] = 'Analiz için {$a} üzerine Compilatio için belgeler gönderilmiştir.';
$string['progress'] = 'İlerleme :';
$string['red_threshold'] = 'Aksi takdirde kırmızı';
$string['results'] = 'Sonuçlar:';
$string['saved_config_failed'] = '<strong> Girilen kombinasyon API anahtarı - adresi geçersiz. Compilatio devre dışı, lütfen tekrar deneyin. <br/>
<a href="autodiagnosis.php"> otomatik tanı </a> sayfası, bu eklentiyi yapılandırmanıza yardımcı olabilir. </strong> <br/>
Hata :';
$string['showwhenclosed'] = 'Etkinlik kapandığında';
$string['similarities'] = 'Benzerlikler';
$string['similarities_disclaimer'] = 'Bu ödevin belgelerindeki benzerlikleri, <a href=\'http://www.compilatio.net/en/\' target=\'_blank\'>Compilatio</a> ile analiz edebilirsiniz. <br/> Dikkatli olun: Analiz sırasında ölçülen benzerlikler Mutlaka intihal demek değildir. Analiz raporu, benzerliklerin uygun tırnak ya da intihal ile uyumlu olup olmadığını belirlemenize yardımcı olur.';
$string['similarity_percent'] = 'Benzerlik yüzdesi %';
$string['studentdisclosuredefault'] = 'Burada yüklenen tüm dosyalar, Compilatio İntihal Tespit Hizmetine gönderilecek';
$string['students_disclosure'] = 'Öğrenci Bilgilendirme';
$string['students_disclosure_help'] = 'Bu metin, dosya yükleme sayfasındaki tüm öğrencilere gösterilir.';
$string['tabs_title_help'] = 'Yardım';
$string['tabs_title_stats'] = 'İstatistikler';
$string['teacher'] = 'Öğretmen';
$string['thresholds_description'] = 'Analiz raporunun bulunmasını kolaylaştırmak için kullanmak istediğiniz eşiği belirtin (benzerliklerin yüzdesi %):';
$string['thresholds_settings'] = 'Sınırlar :';
$string['timesubmitted'] = 'Compilatio\'ya Eklenme Tarihi';
$string['update_meta'] = 'Compilation.net\'in planlanan işlemlerini yapın';
$string['webservice_not_ok'] = 'Sunucu, web hizmetine bağlanamadı. Güvenlik duvarınız bağlantıyı engelliyor olabilir.';
$string['webservice_ok'] = 'Sunucu, web hizmetine bağlanabiliyor.';
