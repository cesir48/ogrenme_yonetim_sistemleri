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
 * Strings for component 'booking', language 'tr', version '4.3'.
 *
 * @package     booking
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activatemails'] = 'E-postaları etkinleştirin (onaylar, bildirimler ve daha fazlası)';
$string['addcategory'] = 'Kategoriyi düzenle';
$string['allmailssend'] = 'Kullanıcılara gönderilen tüm e-postalar gönderildi!';
$string['applyunitfactor'] = 'Uygula';
$string['bstlink'] = 'Göster';
$string['bstparticipants'] = 'Katılımcılar';
$string['cancel'] = 'İptal';
$string['changesemester:warning'] = '<strong>Dikkatli olun:</strong> "Değişiklikleri kaydet" tıklandığında tüm tarihler silinecek

  ve seçilen yarıyılın tarihleriyle değiştirilir.';
$string['comments'] = 'Yorumlar';
$string['completed'] = 'Tamamlandı';
$string['confirmationmessagesettings'] = 'Onay e-postası ayarları';
$string['copytotemplate'] = 'Rezervasyon seçeneğini şablon olarak kaydet';
$string['daystonotifysession_help'] = 'Bu oturum için e-posta bildirimini devre dışı bırakmak için 0 girin.';
$string['deletecategory'] = 'Sil';
$string['deleterule'] = 'Sil';
$string['editcategory'] = 'Düzenle';
$string['editrule'] = 'Düzenle';
$string['edittag'] = 'Düzenle';
$string['editteachers'] = 'Düzenle';
$string['enrolmentstatus_help'] = 'Uyarı: Otomatik kaydın çalışması için, ayırma örneği ayarını değiştirmeniz gerekir
"Kullanıcıları otomatik olarak kaydet" seçeneğini "Evet" olarak değiştirin.';
$string['icalcfgdesc'] = 'E-posta mesajlarına eklenen iCal.ics dosyalarını yapılandırın.  Bu dosyalar, rezervasyon tarihlerinin kişisel takvime eklenmesini sağlar.';
$string['importcsvtitle'] = 'CSV\'yi içe aktar';
$string['mailconfirmationsent'] = 'Kısa süre içinde bir onay e-postası alacaksınız';
$string['mailtemplatesadvanced'] = 'E-posta şablonları için gelişmiş ayarları etkinleştirin';
$string['mailtemplatessource_help'] = '<b>Dikkat:</b> Genel e-posta şablonlarını seçerseniz, örneğe özel posta
şablonlar kullanılmayacaktır.  Bunun yerine, rezervasyon eklentisi ayarlarında belirtilen e-posta şablonları kullanılacaktır.  <br><br>
Lütfen her e-posta türü için rezervasyon ayarlarında mevcut e-posta şablonlarının bulunduğundan emin olun.';
$string['no'] = 'Hayır';
$string['nogrouporcohortselected'] = 'En az bir grup veya topluluk seçmeniz gerekiyor.';
$string['rule_sendmail_cpf'] = '[Önizleme] Kullanıcıya özel profil alanı olan bir e-posta gönderin';
$string['rule_sendmail_cpf_desc'] = '"E-posta gönder" kuralını tetiklemesi gereken bir etkinlik seçin.  Bir e-posta şablonu girin
({bookingdetails} gibi yer tutucular kullanabilirsiniz) ve e-postanın hangi kullanıcılara gönderileceğini tanımlayın.
Örnek: "Çalışma merkezi" adı verilen özel bir kullanıcı profili alanında "Viyana merkezi" değerine sahip tüm kullanıcılar.';
$string['savenewtagtemplate'] = 'Kaydet';
$string['sendcopytobookingmanger'] = 'Rezervasyon yöneticisine onay e-postası gönder';
$string['sendreminderemail'] = 'postası';
$string['sendreminderemailsuccess'] = 'Bildirim e-postası gönderildi!';
$string['submitandaddnew'] = 'Kaydet ve yeni ekle
';
$string['submitandgoback'] = 'Kaydet ve geri dön';
$string['units_courses'] = 'Kurslar/Birimller';
$string['userleave_help'] = '';
$string['usernameofbookingmanager_help'] = 'Onay bildirimlerinin "Kimden" alanında görüntülenecek kullanıcının kullanıcı adı.  "Rezervasyon yöneticisine onay e-postası gönder" seçeneği etkinleştirildiyse, onay bildirimlerinin bir kopyasını alan kullanıcıdır.';
$string['waitingtext_help'] = 'Site varsayılan metnini kullanmak için bunu boş bırakın.  Metinde aşağıdaki yer tutuculardan herhangi birini kullanabilirsiniz:
 <ul>
 <li>{bookingdetails} - Rezervasyon seçeneğinin ayrıntılı özeti (oturumlar ve rezervasyon seçeneği bağlantısı dahil)</li>
 <li>{gotobookingoption} - Rezervasyon seçeneğine bağlantı</li>
 <li>{status} - Rezervasyon durumu</li>
 <li>{katılımcı</li>
 <li>{email} - Kullanıcı e-postası</li>
 <li>{title}</li>
 <li>{süre</li>
 <li>{starttime}</li>
 <li>{bitiş zamanı</li>
 <li>{startdate}</li>
 <li>{enddate}</li>
 <li>{kurs bağlantısı}</li>
 <li>{bookinglink}</li>
 <li>{pollurl}</li>
 <li>{pollurlteachers}</li>
 <li>{konum</li>
 <li>{kurum</li>
 <li>{adres</li>
 <li>{olay türü</li>
 <li>{teacher} - İlk öğretmenin adı</li>
 <li>{teachers} - Tüm öğretmenlerin listesi</li>
 <li>{teacherN} - Belirli bir öğretmenin adı, örneğin {teacher1}</li>
 <li>{pollstartdate}</li>
 <li>{qr_id} - Kullanıcı kimlikli QR kodunu girin</li>
 <li>{qr_username} - Kullanıcı kullanıcı adını içeren QR kodunu girin</li>
 <li>{dates} - Oturum süreleri</li>
 <li>{shorturl} - Seçeneğin kısa URL\'si</li>
 <li>{usercalendarurl} - Kullanıcı takvimine abone olma bağlantısı (kişisel etkinlikler)</li>
 <li>{coursecalendarurl} - Kurs takvimine (kurs etkinlikleri) abone olma bağlantısı</li>
 </ul>';
$string['yes'] = 'Evet';
