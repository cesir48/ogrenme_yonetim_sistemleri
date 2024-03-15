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
 * Strings for component 'local_recompletion', language 'tr', version '4.3'.
 *
 * @package     local_recompletion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abandoned'] = 'Sahipsiz';
$string['advancedrecompletiontitle'] = 'Gelişmiş';
$string['archive'] = 'Eski denemeleri arşivle';
$string['archivechoice'] = 'Eski seçim denemelerini arşivle';
$string['archivecompletiondata'] = 'Tamamlama verilerini arşivleyin';
$string['archivecompletiondata_help'] = 'Tamamlanma verilerini local_recompletion_cc, local_recompletion_cc_cc ve local_recompletion_cmc tablolarına yazar.  Bu seçilmezse tamamlama verileri kalıcı olarak silinecektir.';
$string['archivecoursecertificate'] = 'Verilen sertifikaları arşivleyin (mod_coursecertificate)';
$string['archivecoursecertificate_help'] = 'Verilen sertifikalar arşivlenmeli mi?  Arşivlenen sertifikalar tool_certificate_issues tablosunda kalacak ancak arşivlenmiş durumuna sahip olacak.';
$string['archivecustomcertcertificates'] = 'Verilen özel sertifikaları arşivleyin (mod_customcert)';
$string['archivecustomcertcertificates_help'] = 'Verilen özel sertifikalar arşivlenmeli mi?';
$string['archiveh5p'] = 'Eski H5P denemelerini arşivle (mod_h5pactivity)';
$string['archivehotpot'] = 'Eski hotpot denemelerini arşivle';
$string['archivehvp'] = 'Eski H5P denemelerini arşivle (mod_hvp)';
$string['archivelesson'] = 'Eski Ders denemelerini arşivle';
$string['archivequestionnaire'] = 'Eski anket denemelerini arşivle';
$string['archivequiz'] = 'Eski sınav denemelerini arşivle';
$string['archivescorm'] = 'Eski SCORM denemelerini arşivle';
$string['assignattempts'] = 'Denemeleri ata';
$string['completionupdated'] = 'Kurs tamamlama tarihleri güncellendi';
$string['donothing'] = 'Hiçbir şey yapma';
$string['editrecompletion'] = 'Kurs yeniden tamamlama ayarlarını düzenleyin';
$string['eventrecompletion'] = 'Kursu yeniden tamamlama';
$string['forcearchivecompletiondata_help'] = 'Etkinleştirilirse, tamamlama verileri arşivleme tüm kurs yeniden tamamlamaları için zorunlu olarak açılır.  Bu, yanlışlıkla veri kaybını önleyebilir.';
$string['nousersselected'] = 'Hiçbir kullanıcı seçilmedi';
$string['penalties'] = 'Cezalar';
$string['pluginname'] = 'Kursu yeniden tamamlama';
$string['pluginssettings'] = 'Eklenti ayarları';
$string['privacy:metadata:attempt'] = 'Deneme sayısı';
$string['privacy:metadata:correct'] = 'Doğru cevap?';
$string['privacy:metadata:local_recompletion_ltia:toolid'] = 'LTI kayıt yöntemi aracı kimliği.';
$string['privacy:metadata:local_recompletion_qr:complete'] = 'tamamlama';
$string['privacy:metadata:local_recompletion_qr:grade'] = 'Değerlendirme';
$string['privacy:metadata:local_recompletion_qr:submitted'] = 'Gönderilen';
$string['privacy:metadata:useranswer'] = 'Cevap';
$string['recompletion:manage'] = 'Kurs yeniden tamamlama ayarlarının değiştirilmesine izin verin';
$string['recompletionemaildefaultbody'] = 'Merhaba, lütfen {$a->coursename} {$a->link} kursunu tekrar tamamlayın';
$string['recompletionemaildefaultsubject'] = '{$a->coursename} kursunun yeniden tamamlanması gerekiyor';
$string['recompletionemailenable'] = 'Yeniden tamamlama mesajı gönder';
$string['recompletionemailenable_help'] = 'Kullanıcılara yeniden tamamlamanın gerekli olduğunu bildirmek için e-posta mesajlaşmasını etkinleştirin';
$string['recompletionemailsubject'] = 'Yeniden tamamlama mesaj konusu';
$string['recompletionrange'] = 'Yeniden tamamlama periyodu';
$string['recompletionrange_help'] = 'Bir kullanıcının tamamlama sonuçları sıfırlanmadan önce geçecek süreyi ayarlayın.';
$string['recompletionschedule'] = 'Yeniden tamamlama programı';
$string['recompletionschedule_help'] = 'Tamamlama sonuçlarının sıfırlanacağı bir tarih (örn. 1 Ocak) belirleyin. Bu tarih, bir yeniden tamamlamanın en son çalıştırıldığı tarihten itibaren ileriye doğru hesaplanır. Bu sıfırlama daha sonrasında belirli bir aralıkta gerçekleşecektir. \'1 Ocak\' yıllık bir yeniden tamamlama ile sonuçlanırken, \'cuma\' her cuma yeniden tamamlamanın çalıştırılmasıyla sonuçlanacaktır.';
$string['recompletionsettingssaved'] = 'Yeniden tamamlama ayarları kaydedildi';
$string['recompletiontask'] = 'Yeniden tamamlaması gereken kullanıcıları kontrol edin';
$string['recompletiontype'] = 'Yeniden tamamlama türü';
$string['recompletiontype:disabled'] = 'Devredışı';
$string['recompletiontype:ondemand'] = 'Talep üzerine';
$string['recompletiontype:period'] = 'Dönem';
$string['recompletiontype:schedule'] = 'Takvim';
$string['recompletiontype_help'] = 'Yeni kurslar için kullanıcıların tamamlama sonuçlarının nasıl sıfırlanacağını belirler.

 * Devre Dışı - bu özelliği devre dışı bırakır.
 * Dönem - Kullanıcının son kursu tamamlama tarihine bağlı olarak bir yeniden tamamlama süresine (örneğin her 60 günde bir) izin verir.
 * Talep üzerine - Öğretmenin gerektiğinde bireysel kullanıcıları manuel olarak sıfırlamasına izin verin.
 * Program - belirli bir tarihte, örneğin her yıl 1 Ocak\'ta yeniden tamamlanmaya izin verir.';
$string['recompletionunenrolenable'] = 'Kayıt silindiğinde tamamlamayı sıfırla';
$string['resetallcompletion'] = 'Tüm tamamlamaları sıfırla';
$string['resetcompletionconfirm'] = '{$a} için bu kurstaki tüm tamamlama verilerini sıfırlamak istediğinizden emin misiniz?  Uyarı - bu, gönderilen bazı içeriği kalıcı olarak silebilir.';
$string['resetcompletionfor'] = '{$a} için tamamlamayı sıfırla';
$string['resetlti'] = 'LTI notlarını sıfırla';
$string['resetltis'] = 'LTI notları';
$string['resetltis_help'] = 'Kurs içinde LTI notlarının nasıl ele alınacağı.
"LTI notlarını sıfırla" ayarı kullanılırsa tüm not LTI sonuçları 0 olarak ayarlanacaktır.
Kullanıcı kursu yeni bir şekilde tamamladığında, güncellenen kurs notu LTI sağlayıcısına yeniden gönderilecektir.';
$string['resetmycompletion'] = 'Etkinlik tamamlama işlemlerimi sıfırla';
$string['restricted'] = 'Belirli bir kullanıcı için tamamlama işleminin sıfırlanması kısıtlanmıştır';
$string['restrictedbyenrol'] = 'Belirli bir kullanıcı için tamamlama işleminin sıfırlanması, kayıt yöntemiyle sınırlıdır';
$string['restrictenrol'] = 'Kayıt yöntemi';
$string['restrictenrol_help'] = 'Tamamlama verilerinin sıfırlanmasına yalnızca seçilen kayıt yöntemleriyle kaydolan kullanıcılar dahil edilecektir.  Hiçbirinin seçilmemesi, kullanıcılar için kayıt yönteminde herhangi bir kısıtlama olmadığı anlamına gelir.';
$string['restrictionsettings'] = 'Kısıtlama ayarları';
$string['restrictionsheader'] = 'Kısıtlamalar';
$string['score'] = 'Puan';
$string['scormattempts'] = 'SCORM denemeleri';
$string['scormattempts_help'] = 'Mevcut SCORM denemelerinin silinmesi durumunda - arşiv seçilirse eski SCORM denemeleri local_recompletion_sst tablosunda arşivlenecektir.';
$string['starttime'] = 'Başlangıç zamanı';
$string['status'] = 'Tamamlanma durumu';
$string['timecreated'] = 'Oluşturulma zamanı';
$string['timedout'] = 'Zaman aşımına uğradı';
$string['timemodified'] = 'Değiştirilme zamanı';
$string['yearly'] = 'Yıllık';
