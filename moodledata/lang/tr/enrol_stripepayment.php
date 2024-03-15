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
 * Strings for component 'enrol_stripepayment', language 'tr', version '4.3'.
 *
 * @package     enrol_stripepayment
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['applycode'] = 'Kodu Uygula';
$string['assignrole'] = 'Rolül ata';
$string['canntenrol'] = 'Kayıt devre dışı veya etkin değil';
$string['charge_description1'] = 'e-posta makbuzu için müşteri oluştur';
$string['charge_description2'] = 'Ders Kayıt Ücreti Ücreti.';
$string['cost'] = 'Kayıt maliyeti';
$string['costerror'] = 'Kayıt ücreti sayısal değil';
$string['costorkey'] = 'Lütfen aşağıdaki kayıt yöntemlerinden birini seçin.';
$string['couponcode'] = 'Kupon Kodu';
$string['currency'] = 'Para birimi';
$string['defaultrole'] = 'Varsayılan rol ataması';
$string['defaultrole_desc'] = 'Stripe kayıtları sırasında kullanıcılara atanması gereken rolü seçin';
$string['enrol'] = 'Kaydolun';
$string['enrolenddate'] = 'Bitiş tarihi';
$string['enrolenddate_help'] = 'Etkinleştirilirse, kullanıcılar yalnızca bu tarihe kadar kaydolabilir.';
$string['enrolenddaterror'] = 'Kayıt bitiş tarihi, başlangıç tarihinden önce olamaz';
$string['enrolperiod'] = 'Kayıt süresi';
$string['enrolperiod_desc'] = 'Kaydın geçerli olduğu varsayılan süre. Sıfır olarak ayarlanırsa, kayıt süresi varsayılan olarak sınırsız olacaktır.';
$string['enrolperiod_help'] = 'Kullanıcının kaydolduğu andan başlayarak, kaydın geçerli olduğu süre. Devre dışı bırakılırsa, kayıt süresi sınırsız olacaktır.';
$string['enrolstartdate'] = 'Başlangıç tarihi';
$string['enrolstartdate_help'] = 'Etkinleştirilirse, kullanıcılar yalnızca bu tarihten itibaren kaydolabilir.';
$string['expiredaction'] = 'Kayıt sona erme eylemi';
$string['expiredaction_help'] = 'Kullanıcı kaydı sona erdiğinde gerçekleştirilecek eylemi seçin. Ders kaydının iptali sırasında bazı kullanıcı verilerinin ve ayarlarının dersten silindiğini lütfen unutmayın.';
$string['invalidcouponcode'] = 'Geçersiz Kupon Kodu';
$string['invalidcouponcodevalue'] = 'Kupon Kodu {$a} geçerli değil!';
$string['mailadmins'] = 'yöneticiye bildir';
$string['mailstudents'] = 'Öğrencileri bilgilendir';
$string['mailteachers'] = 'öğretmenleri bilgilendir';
$string['maxenrolled'] = 'Maksimum kayıtlı kullanıcı';
$string['maxenrolled_help'] = 'Stripe ödeme kaydı yapabilecek maksimum kullanıcı sayısını belirtir. 0 limit yok demektir.';
$string['maxenrolledreached'] = 'Stripe ödeme kaydı yapmasına izin verilen maksimum kullanıcı sayısına zaten ulaşıldı.';
$string['messageprovider:stripe_enrolment'] = 'Stripe kayıt mesajları';
$string['messageprovider:stripepayment_enrolment'] = 'Mesaj Sağlayıcı';
$string['newcost'] = 'Yeni Maliyet';
$string['nocost'] = 'Bu derse kaydolmanın hiçbir maliyeti yoktur!';
$string['pluginname'] = 'Stripe ile Ödeme';
$string['pluginname_desc'] = 'Stripe modülü, ücretli dersler ayarlamanıza olanak tanır. Herhangi bir dersin maliyeti sıfır ise, öğrencilerden giriş için ödeme yapmaları istenmez. Burada tüm site için varsayılan olarak belirlediğiniz site genelinde bir maliyet ve ardından her bir ders için ayrı ayrı ayarlayabileceğiniz bir ders ayarı vardır. Ders maliyeti, site maliyetini geçersiz kılar.';
$string['publishablekey'] = 'Stripe Yayınlanabilir Anahtar';
$string['publishablekey_desc'] = 'Stripe hesabının API Yayınlanabilir Anahtarı';
$string['secretkey'] = 'Stripe Gizli Anahtar';
$string['secretkey_desc'] = 'Stripe hesabının API Gizli Anahtarı';
$string['sendpaymentbutton'] = 'Stripe ile ödeme gönder';
$string['status'] = 'Stripe kayıtlarına izin ver';
$string['status_desc'] = 'Kullanıcıların varsayılan olarak bir derse kaydolmak için Stripe\'ı kullanmasına izin verin.';
$string['stripe:config'] = 'Stripe kayıt örneklerini yapılandırın
d';
$string['stripe:manage'] = 'Kayıtlı kullanıcıları yönet';
$string['stripe:unenrol'] = 'Kullanıcıların dersten kaydını sil';
$string['stripe:unenrolself'] = 'Kendini dersten sil';
$string['stripe_sorry'] = 'Üzgünüz, komut dosyasını bu şekilde kullanamazsınız.';
$string['stripeaccepted'] = 'Stripe ödemeleri kabul edildi';
$string['stripepayment:config'] = 'Stripe ödemeyi yapılandır';
$string['stripepayment:manage'] = 'Stripe ödemeyi yönet';
$string['stripepayment:unenrol'] = 'Stripe ödeme kaydını iptal et';
$string['stripepayment:unenrolself'] = 'Kayıtsız şerit ödeme';
$string['unenrolselfconfirm'] = 'Kendinizi "{$a}" kursundan gerçekten silmek istiyor musunuz?';
