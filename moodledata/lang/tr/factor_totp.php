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
 * Strings for component 'factor_totp', language 'tr', version '4.3'.
 *
 * @package     factor_totp
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:revoke'] = 'Zaman tabanlı tek seferlik parola (ZTSP) doğrulayıcısını iptal etme';
$string['devicename'] = 'Cihaz etiketi';
$string['devicename_help'] = 'Bu, bir kimlik doğrulama uygulamasının yüklü olduğu cihazdır. Birden fazla cihaz ayarlayabilirsiniz, böylece bu etiket hangilerinin kullanıldığını izlemeye yardımcı olur. Ayrı ayrı iptal edilebilmeleri için her cihazı kendi benzersiz koduyla ayarlamanız gerekir.';
$string['devicenameexample'] = 'örneğin "iPhone 11\'de çalışın"';
$string['error:alreadyregistered'] = 'Bu zamana dayalı tek seferlik parola (ZTSP) sırrı zaten kaydedilmiştir.';
$string['error:codealreadyused'] = 'Bu kod kimlik doğrulaması için zaten kullanıldı. Lütfen yeni bir kod oluşturulmasını bekleyin ve tekrar deneyin.';
$string['error:futurecode'] = 'Bu kod geçersiz. Lütfen kimlik doğrulama cihazınızdaki saatin doğru olduğunu doğrulayın ve tekrar deneyin.
    Geçerli sistem saati {$a}.';
$string['error:oldcode'] = 'Bu kod çok eski. Lütfen kimlik doğrulama cihazınızdaki saatin doğru olduğunu doğrulayın ve tekrar deneyin.
    Geçerli sistem saati {$a}.';
$string['error:wrongverification'] = 'Yanlış doğrulama kodu';
$string['factorsetup'] = 'Uygulama kur';
$string['info'] = '<p>Çevrimdışı olsa bile bir doğrulama kodu oluşturmak için cihazınızdaki herhangi bir zaman tabanlı tek seferlik şifre (TOTP) doğrulayıcı uygulamasını kullanın.</p>

<p>Örneğin <a href="https://2fas.com/">2FAS Auth</a>, <a href="https://freeotp.github.io/">FreeOTP</a>, Google Authenticator, Microsoft Authenticator veya Twilio Authy.</p>

<p>Not: Lütfen cihazınızın saat ve tarihinin "Otomatik" veya "Ağ tarafından sağlanan" olarak ayarlandığından emin olun.</p>';
$string['logindesc'] = 'Bir kod oluşturmak için mobil cihazınızdaki kimlik doğrulayıcı uygulamasını kullanın.';
$string['loginoption'] = 'Kimlik Doğrulayıcı uygulamasını kullan';
$string['loginskip'] = 'Cihazım yaınmda değil.';
$string['loginsubmit'] = 'Devam et';
$string['logintitle'] = 'Mobil uygulama ile sizin olduğunuzu doğrulayın';
$string['pluginname'] = 'Kimlik doğrulayıcı uygulaması';
$string['privacy:metadata'] = 'Zamana dyalı tek seferlik faktörü eklentisi hiçbir kişisel veriyi saklamaz';
$string['settings:totplink'] = 'Mobil uygulama kurulum bağlantısını göster';
$string['settings:totplink_help'] = 'Etkinleştirilirse, kullanıcı doğrudan otpauth:// bağlantısı olan 3. bir kurulum seçeneği görecektir';
$string['settings:window'] = 'Zamana dayalı tek seferlik porala doğrulama penceresi';
$string['settings:window_help'] = 'Her kodun ne kadar süreyle geçerli olduğu. Kullanıcılarınızın cihaz saatleri genellikle ufak hatalar yapıyorsa geçici bir çözüm olarak bunu daha yüksek bir değere ayarlayabilirsiniz.
    Yeni oluşturulan kodlar arasındaki süre olan en yakın 30 saniyeye yuvarlanır.';
$string['setupfactor'] = 'Zamana dayalı tek seferlik porala doğrulayıcısı kurulumu';
$string['setupfactor:account'] = 'Hesap';
$string['setupfactor:enter'] = 'Ayrıntıları elle girin';
$string['setupfactor:key'] = 'Gizli anahtar:';
$string['setupfactor:link'] = '<b> VEYA </b> mobil uygulamayı açın:';
$string['setupfactor:link_help'] = 'Bir mobil cihaz kullanıyorsanız ve zaten bir kimlik doğrulayıcı uygulaması yüklüyse bu bağlantı işe yarayabilir. Oturum açtığınız cihazla aynı cihazda ZTKP kullanmanın ÇFD\'nın faydalarını zayıflatabileceğini unutmayın.';
$string['setupfactor:linklabel'] = 'Bu cihazda zaten yüklü olan uygulamayı aç';
$string['setupfactor:mode'] = 'Mod:';
$string['setupfactor:mode:timebased'] = 'Zaman tabanlı';
$string['setupfactor:scan'] = 'QR kodunu tarayın:';
$string['setupfactor:scanfail'] = 'Tarayamıyor musunuz?';
$string['setupfactor:scanwithapp'] = 'QR kodunu seçtiğiniz kimlik doğrulayıcı uygulamasıyla tarayın.';
$string['summarycondition'] = 'Zamana dayalı tek kullanımlık parola uygulamasını seç';
$string['systimeformat'] = '%l:%M:%S %P %Z';
$string['verificationcode'] = '6 haneli doğrulama kodunuzu girin';
$string['verificationcode_help'] = 'Google Authenticator gibi kimlik doğrulayıcı uygulamanızı açın ve bu site ve kullanıcı adıyla eşleşen 6 haneli kodu arayın';
