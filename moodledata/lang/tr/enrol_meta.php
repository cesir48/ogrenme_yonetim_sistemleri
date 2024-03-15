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
 * Strings for component 'enrol_meta', language 'tr', version '4.3'.
 *
 * @package     enrol_meta
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addgroup'] = 'Gruba ekle';
$string['coursesort'] = 'Kurs listesini sırala';
$string['coursesort_help'] = 'Bu, bağlanabilecek kurslar listesinin sıralama düzenine göre mi (yani Site yönetimi > Kurslar > Kursları ve kategorileri yönet bölümünde ayarlanan düzen) yoksa kurs ayarına göre alfabetik olarak mı sıralanacağını belirler.';
$string['creategroup'] = 'Yeni grup oluştur';
$string['defaultgroupnametext'] = '{$a->name} ders {$a->increment}';
$string['enrolmetasynctask'] = 'Meta kayıt eşitleme görevi';
$string['linkedcourse'] = 'Kurs bağlantısı';
$string['meta:config'] = 'Meta kayıt örneklerini yapılandır';
$string['meta:selectaslinked'] = 'Kursu meta bağlı olarak seçin';
$string['meta:unenrol'] = 'Askıya alınan kullanıcıların kaydını silin';
$string['nosyncroleids'] = 'Senkronize edilmeyen roller';
$string['nosyncroleids_desc'] = 'Varsayılan olarak, tüm kurs seviyesinde rol ödevleri, üst seviye derslerinden alt seviye kurslarına senkronize edilir. Burada seçilen roller senkronizasyon işlemine dahil edilmez. Senkronizasyon için kullanılabilecek roller bir sonraki cron uygulamasında güncellenecektir.';
$string['pluginname'] = 'Kurs meta bağlantısı';
$string['pluginname_desc'] = 'Kurs meta bağlantı kayıt eklentisi, iki farklı kurstaki kayıtları ve rolleri senkronize eder.';
$string['privacy:metadata:core_group'] = 'Enroll meta eklentisi, yeni bir grup oluşturabilir veya mevcut bir grubu, bağlantılı kursun tüm katılımcılarını eklemek için kullanabilir.';
$string['syncall'] = 'Kaydedilen tüm kullanıcıları senkronize et';
$string['syncall_desc'] = 'Etkinleştirilirse, kayıtlı tüm kullanıcılar üs seviye kurs rolleri olmamasına rağmen senkronize edilir, devre dışı bırakılırsa yalnızca senkronize edilmiş en az bir role sahip olan kullanıcılar alt seviye kursuna kaydedilir.';
$string['wscannotcreategroup'] = 'Bağlantılı kurs kimliği = {$a}\'da grup oluşturma izni yok.';
$string['wsinvalidcourse'] = 'Kurs kimliği = {$a} mevcut değil veya meta kayıtta bağlantı izni yok.';
$string['wsinvalidmetacourse'] = 'Meta kurs kimliği = {$a} mevcut değil veya kayıt örneği ekleme izni yok.';
$string['wsnoinstancesspecified'] = 'Örnek belirtilmedi';
