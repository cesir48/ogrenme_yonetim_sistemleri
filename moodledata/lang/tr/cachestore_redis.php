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
 * Strings for component 'cachestore_redis', language 'tr', version '4.3'.
 *
 * @package     cachestore_redis
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ca_file'] = 'Sertifika Yetkilisi dosya yolu';
$string['ca_file_help'] = 'Sertifika Yetkilisi dosyasının yerel dosya sistemindeki konumu';
$string['compressor_none'] = 'Sıkıştırma yok.';
$string['compressor_php_gzip'] = 'Gzip sıkıştırma kullanın.';
$string['compressor_php_zstd'] = 'Zstandard sıkıştırmasını kullanın.';
$string['encrypt_connection'] = 'TLS şifrelemesi kullanın.';
$string['encrypt_connection_help'] = 'Redis\'e bağlanmak için TLS kullanın. Redis için ana bilgisayar adında \'tls://\' kullanmayın, bunun yerine bu seçeneği kullanın.';
$string['password'] = 'Şifre';
$string['password_help'] = 'Bu, Redis sunucusunun şifresini ayarlar.';
$string['pluginname'] = 'Redis';
$string['prefix'] = 'Anahtar öneki';
$string['prefix_help'] = 'Bu önek, Redis sunucusundaki tüm anahtar adlar için kullanılır.
* Bu sunucuyu kullanarak yalnızca bir Moodle örneğiniz varsa, bu değeri varsayılan olarak bırakabilirsiniz.
* Anahtar uzunluğu kısıtlamaları nedeniyle, maksimum 5 karakterden izin verilir.';
$string['prefixinvalid'] = 'Geçersiz önek. Sadece a-z A-Z 0-9-_ kullanabilirsiniz.';
$string['privacy:metadata:redis'] = 'Redis cachestore eklentisi, önbelleğe alma işlevinin bir parçası olarak verileri kısa süreliğine depolar. Bu veriler, verilerin düzenli olarak kaldırıldığı bir Redis sunucusunda saklanır.';
$string['privacy:metadata:redis:data'] = 'Önbellekte saklanan çeşitli veriler';
$string['serializer_igbinary'] = 'igbinary serileştiricisi.';
$string['serializer_php'] = 'Öntanımlı PHP dizgeleştiricisi.';
$string['server'] = 'Sunucu';
$string['server_help'] = 'Bu, kullanılacak Redis sunucusunun ana makine adını veya IP adresini ayarlar.';
$string['task_ttl'] = 'Redis önbelleklerinde süresi dolmuş girişler tarafından kullanılan belleği boşaltın';
$string['test_password'] = 'Test sunucusu şifresi';
$string['test_password_desc'] = 'Redis test sunucu parolası.';
$string['test_serializer'] = 'Diziselleştirici';
$string['test_serializer_desc'] = 'Test için kullanılacak seri hale getirici.';
$string['test_server'] = 'Sunucuyu test et';
$string['test_server_desc'] = 'Sınama için kullanılacak Redis sunucusu.';
$string['test_ttl'] = 'TTL\'yi test etme';
$string['test_ttl_desc'] = 'TTL (daha yavaş ayarlar) gerektiren bir önbellek kullanarak performans testini çalıştırın.';
$string['usecompressor'] = 'sıkıştırma kullan';
$string['usecompressor_help'] = 'Serileştirmeden sonra kullanılacak sıkıştırıcıyı belirtir.  Php-redis seviyesinde değil, Moodle Cache API seviyesinde yapılır.';
$string['useserializer'] = 'Seri hale getirici kullan';
$string['useserializer_help'] = 'Serileştirme için kullanılacak seri hale getiriciyi belirtir.

 Geçerli seri hale getiriciler Redis::SERIALIZER_PHP veya Redis::SERIALIZER_IGBINARY\'dir.

 İkincisi, yalnızca phpredis --enable-redis-igbinary seçeneğiyle yapılandırıldığında ve igbinary uzantısı yüklendiğinde desteklenir.';
