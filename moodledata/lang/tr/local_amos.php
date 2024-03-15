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
 * Strings for component 'local_amos', language 'tr', version '4.3'.
 *
 * @package     local_amos
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['about'] = '<p>AMOS, Moodle dizelerinin ve geçmişinin merkezi bir deposudur. İngilizce dizelerin Moodle koduna eklenmesini izler, çevirileri bir araya getirir, ortak çeviri görevlerini yerine getirerek Moodle sunucularına dağıtılmak üzere dil paketleri oluşturur.</p>
<p>Daha fazla bilgi için <a href="https://docs.moodle.org/dev/AMOS_manual">AMOS belgelerine</a> bakın.</p>';
$string['amos'] = 'AMOS - Moodle çeviri araç seti';
$string['amos:changecontriblang'] = 'Katkıda bulunulan dizelerin dilini değiştir';
$string['amos:commit'] = 'Düzenlenen dizeleri ana depoya işleyin';
$string['amos:execute'] = 'Verilen AMOScript\'i çalıştır';
$string['amos:importfile'] = 'Yüklenen dosyadan çevirileri al ve onları rafa yerleştir.';
$string['amos:importstrings'] = 'Dizeleri (İngilizce olanlar dahil) doğruda ana depoya al.';
$string['amos:manage'] = 'AMOS portal\'ı yönetin';
$string['amos:stage'] = 'AMOS çeviri aracını kullanın ve dizeleri raflayın';
$string['amos:stash'] = 'Geçerli aşamayı kalıcı depoda saklar';
$string['amos:usegoogle'] = 'Google Çeviri servisini kullanın';
$string['applangindexfile'] = 'Moodle Uygulaması langindex dosyası konumu';
$string['applangindexfile_desc'] = 'Dosyanın indirileceği URL\'yi tamamlayın. Bir cron görevi tarafından yapılacaktır.';
$string['branchesall'] = 'Bilinen tüm Moodle sürümleri';
$string['branchesall_desc'] = 'AMOS\'un desteklediği Moodle sürüm kodlarının virgülle ayrılmış listesi. Bu, çevirmen filtresindeki ve diğer yerlerdeki sürüm listesini oluşturmak için kullanılır.';
$string['branchsupported'] = 'Desteklenen en eski Moodle sürümü';
$string['branchsupported_desc'] = 'İngilizce dizelerdeki değişiklikler için hala izlenmesi gereken ve yükleyici dil paketlerinin henüz oluşturulduğu en eski Moodle sürümünün kodu. Referans için <https://docs.moodle.org/dev/Releases#Version_support> adresini kullanın.';
$string['cachedef_lists'] = 'AMOS\'ta bilinen dillerin ve bileşenlerin listeleri';
$string['cachedef_stats'] = 'AMOS tarafından oluşturulan istatistik verileri';
$string['commitbutton'] = 'İşle';
$string['commitkeepstaged'] = 'Dizeler raflandı';
$string['commitmessage'] = 'Teslimat mesajı';
$string['commitmessageempty'] = 'Lütfen teslimat mesajı yazınız';
$string['commitstage'] = 'Raftaki dizeleri teslim et';
$string['commitstage_help'] = 'Raflardaki tüm çevrilen dizeler AMOS deposun\'da  kalıcı olarak saklandı. (Çeviriler değerlendirme için onaya gönderildi.) Raflar teslimattan önce temizlenir ve hazır hale getirilir. Sadece teslime uygun olan dizeler saklanır. Bu sadece yeşil ile vurgulanan çevirilerine saklanacağı anlamına gelir. Raflar teslimattan sonra temizlenir.';
$string['committable'] = 'Bu dil paketini işlemek için izniniz var';
$string['committableall'] = 'tüm diller';
$string['committablenone'] = 'Kabul edilmiş dil yok- lütfen AMOS yöneticisine başvurun';
$string['componentsall'] = 'Tümü';
$string['componentsapp'] = 'Moodle Uygulaması';
$string['componentsnone'] = 'Hiçbiri';
$string['componentsstandard'] = 'Standart';
$string['confirmaction'] = 'Emin misini? Bu işlem geri alınamaz';
$string['contribaccept'] = 'Kabul et';
$string['contribactions'] = 'Katkıda bulunulan çeviri işlemleri';
$string['contribactions_help'] = 'Çeviri iş akışı ve yetkilerinize bağlı olarak, aşağıdaki bölümleri kullanabilirsiniz:

* Uygula - müşterek çevirileri kendi rafınıza kopyalayın, müşterek çeviri kayıtlarını değiştiremezsiniz.
* Bana Ata - müşterek çeviri sorumlusu olarak kendinizi ayarlayın, bu kişi inceleme ve entagrasyondan sorumludur,
* Atamayı iptal et-müşterek çeviri için kimseye atamayın.
* İnceleme başlatma -yeni müşterek çeviri için kendi kendinizi görevlendirin; durumu "incelemede" olarak ayarlayın ve size gönderilen çeviriyi kendi rafınıza kopyalayın.
* Kabul- çeviriyi kabul edildi olarak işaretleyin.
* Red edildi- çeviriyi red edildi olarak işaretleyin, lütfen yorumda red ediş gerekçenizi belirtin.
* Katkıda bulananlara durum değiştiğinde gönderisi ile ilgili değişiklikler e-posta ile bildirilecektir.';
$string['contribactions_link'] = 'AMOS#Contributing_to_a_language_pack';
$string['contribapply'] = 'Uygula';
$string['contribassignee'] = 'Devralan';
$string['contribassigneenone'] = '-';
$string['contribassigntome'] = 'Bana devret';
$string['contribauthor'] = 'Yazar';
$string['contribclosedno'] = 'Sonuçlanmış katkıları gizle';
$string['contribclosedyes'] = 'Sonuçlanmış katkıları göster';
$string['contribcomponents'] = 'Bileşen(ler)';
$string['contribid'] = 'Kimlik';
$string['contribincomingnone'] = 'Gelen katkı yok';
$string['contribincomingsome'] = 'Gelen katkılar ({$a})';
$string['contriblanguage'] = 'Dil';
$string['contriblanguagebutton'] = 'Dönüştür';
$string['contriblanguagechange'] = 'Hatalı katkı dilinin düzeltilmesi';
$string['contriblanguagechange_help'] = 'Katkı hatalı olarak yanlış dil paketine gönderilmişse, aşağıdaki açılır menüden doğru dili seçin ve ardından Dönüştür düğmesini tıklayın.';
$string['contriblanguagereport'] = 'Yanlış katkı dilinin bildirilmesi';
$string['contriblanguagereport_help'] = 'Bu katkı yanlışlıkla yanlış dil paketine gönderildiyse, lütfen katkı URL\'sini kopyalayıp `translation@moodle.org` adresine bir e-postaya yapıştırın. Katkı daha sonra doğru dile taşınacaktır.';
$string['contriblanguagewrong'] = 'Yanlış bir dil mi?';
$string['contribnotif'] = '[AMOS] Teslimat bildirimi (#{$a->id})';
$string['contribnotifaccepted'] = '{$a->fullname} teslim ettiğin #{$a->id} {$a->subject} çevirisini kabul etti.
---------------------------------------------------------------------
Teslimat sayfası: {$a->contriburl}';
$string['contribnotifcommented'] = '{$a->fullname} teslim ettiğin #{$a->id} {$a->subject} çevirisini yorumladı.
---------------------------------------------------------------------

{$a->message}

---------------------------------------------------------------------
Teslimat sayfası: {$a->contriburl}';
$string['contribnotifconverted'] = '{$a->fullname} katkıda bulunduğunuz çeviriyi dönüştürdü
# {$a->id} {$a->subject}

Katkınız için teşekkürler. Ancak, yanlışlıkla yanlış dil paketine gönderilmiş gibi görünüyor. Böylece katkınız yanlış dil paketinden reddedildi ve dil paketi geliştiricisi tarafından gözden geçirilmek üzere doğru dil paketine taşındı. Sizin herhangi bir işlem yapmanıza gerek yok.

İleride, dizeleri çevirmeye başlamadan önce lütfen kendi dilinizi seçtiğinizi iki kez kontrol edin.

---------------------------------------------------------------------
Orijinal katkı sayfası: {$a->contriborigurl}
Yeni katkı sayfası: {$a->contribnewurl}';
$string['contribnotifpending'] = 'Dil koordintörü olarak  teslim edilen  #{$a->id} {$a->subject} çevirisi için işlem görmeyi gerektiren teslimatlarınız var.

Bir dil koordinatörü olarak size gönderilen çeviri katkılarını incelemeniz ve sonucunda kabul edildi veya red edildi olarak belirlemeniz gerekiyor.

Daha fazla bilgi için {$a->docsurl} bakın.
-------------------------------------------------- -------------------
Teslimat sayfası: {$a->contriburl}';
$string['contribnotifrejected'] = '{$a->fullname} teslim ettiğiniz #{$a->id} {$a->subject} çevirisini red etti.
---------------------------------------------------------------------
Teslimat sayfası: {$a->contriburl}';
$string['contribnotifsubmitted'] = '{$a->fullname} yeni  Çeviri teslim etti.
#{$a->id} {$a->subject}
---------------------------------------------------------------------

 {$a->message}

* Dil: {$a->language}
* Bileşen: {$a->components}
* Dize: {$a->strings}

---------------------------------------------------------------------
 Katkı sayfası: {$a->contriburl}';
$string['contribreject'] = 'Red';
$string['contribresign'] = 'Atamayı iptal et';
$string['contribstaged'] = '<a href="contrib.php?id={$a->id}">#{$a->id}</a>tarafından {$a->author} gönderilen katkı raflandı.';
$string['contribstagedinfo'] = 'Teslimat raflandı';
$string['contribstagedinfo_help'] = 'Raf dizeleri topluluk üyelerinin katkılarını içerir. Dil paketi yöneticileri tarafından gözden geçirilir ve durumları Kabul edildi (eğer kabul edilmişse) ve Re edildi ( eğer bazı nedenlerden dolayı resmi dil paketinde yer alamayacaksa) olarak ayarlanır.';
$string['contribstagedinfo_link'] = 'AMOS#Contributing_to_a_language_pack';
$string['contribstartreview'] = 'İnceleme başlat';
$string['contribstatus'] = 'Durum';
$string['contribstatus0'] = 'Yeni';
$string['contribstatus10'] = 'İnceleniyor';
$string['contribstatus20'] = 'Red edildi';
$string['contribstatus30'] = 'Kabul edildi';
$string['contribstatus_help'] = 'Müşterek çeviri iş akışı aşağıdaki durumlardan oluşur:

* Yeni - teslimat yapılmış fakat henüz incelenmemiş
* İncelemede - çevirmen teslimatı yapmış fakat  koordinatör henüz incelememiş
* Red edildi - dil koordinatörü çeviriyi redetti ve muhtemelen makul bir açıklamada bulundu
* Kabul edildi - çeviri dil paketi koordinatörü tarafından kabul edildi';
$string['contribstatus_link'] = 'AMOS#Contributing_to_a_language_pack';
$string['contribstrings'] = 'Dizeler';
$string['contribstringseq'] = '{$a->orig} yeni';
$string['contribstringsnone'] = '{$a->orig}  (bunların hepsi dil paketinde çevrildi)';
$string['contribstringssome'] = '{$a->orig} (bunlardan {$a->same} büyük bir kısmı çevrildi)';
$string['contribsubject'] = 'Konu';
$string['contribsubmittednone'] = 'Gönderilmiş teslimat yok';
$string['contribsubmittedsome'] = 'Katkıların ({$a})';
$string['contribtimemodified'] = 'Değiştirildi';
$string['contribute'] = 'Katkıda bulunun';
$string['contributenow'] = 'Şimdi katkıda bulunun!';
$string['contributestats'] = 'Bu güne kadar <Strong>toplam {$a->count}</strong>  dizesi topluluk üyeleri tarafından tercüme  edilerek AMOS\' a gönderildi';
$string['contributethanks'] = 'Son katkılarından dolayı {$a->listcontributors} \'a teşekkür ederiz.';
$string['contributethankslist'] = '{$a->contributor1}, {$a->contributor2}, {$a->contributor3} and {$a->contributor4}';
$string['contributions'] = 'Katkılar';
$string['creditsaddcontributor'] = 'Katkıda bulunan Ekle';
$string['creditsaddmaintainer'] = 'Koordinatör ekle';
$string['creditscontact'] = 'Mesaj gönder';
$string['creditscontributors'] = 'Diğer katkıda bulunanlar';
$string['creditsdelcontributor'] = 'Katkıda bulunan kişi kaldır';
$string['creditsdelmaintainer'] = 'Koordinatör çıkar';
$string['creditsmaintainedby'] = 'Koordinatör';
$string['creditsnomaintainer'] = 'Hiç koordinatörü yok  <a href="{$a->url}"> Sen olur musun?  </a>';
$string['creditsthanks'] = 'Bu sayfada, Moodle çevirisine katkısı olan herkese teşekkür etmek istiyoruz.  Onların bu çabaları   Moodle\'ın dünya çapında  yayılmasını mümkün kıldı.';
$string['creditstitlelong'] = 'Dil koordinatörleri ve katkıda bulunanlar';
$string['creditstitleshort'] = 'Katkıda bulunanlar';
$string['diff'] = 'Karşılaştır';
$string['diffstringmode'] = 'Diğer çeviriye geç';
$string['err_exception'] = 'Hata: {$a}';
$string['err_invalidlangcode'] = 'Geçersiz lisan kodu';
$string['err_parser'] = 'Ayrıştırma hatası: {$a}';
$string['filtercmp'] = 'Bileşenler';
$string['filtercmp_desc'] = 'Bu bileşenlerdeki dizeleri göster';
$string['filtercmpnothingselected'] = 'Lütfen bir ve ya birkaç bileşen seçin';
$string['filterlng'] = 'Lisanlar';
$string['filterlng_desc'] = 'Bu dillerdeki çevirileri görüntüle';
$string['filterlngnothingselected'] = 'Lütfen bir veya bir kaç dil seçin';
$string['filtermis'] = 'Çeşitli';
$string['filtermis_desc'] = 'Dizeleri görüntülemek için ek koşullar';
$string['filtermisfapp'] = 'yalnızca Moodle Uygulamasında kullanılan dizeler';
$string['filtermisfapp_help'] = 'Bu dize, Moodle Uygulamalarında {$a} olarak kullanılır';
$string['filtermisfhas'] = 'sadece çevrilmiş dizeler';
$string['filtermisfhlp'] = 'sadece yardım dizeleri';
$string['filtermisfmis'] = 'sadece eksik ve zaman aşımına uğramış dizeler';
$string['filtermisfout'] = 'yalnızca zaman aşımına uğramış dizeler';
$string['filtermisfstg'] = 'sadece raflanmış dizeler';
$string['filtersid'] = 'Dize tanımlayıcı';
$string['filtersid_desc'] = 'Dizeler kümesindeki anahtar';
$string['filtersidpartial'] = 'kısmı eşleşme';
$string['filtertxt'] = 'Alt dize';
$string['filtertxt_desc'] = 'Dize girilen metni içermelidir';
$string['filtertxtcasesensitive'] = 'harfe duyarlı';
$string['filtertxtregex'] = 'düzenli ifade';
$string['filterver'] = 'Sürüm';
$string['filterver_desc'] = 'Bu Moodle sürümü için dizeleri göster';
$string['filtervernothingselected'] = 'Lütfen ayni sürümleri seçiniz';
$string['foundmissing'] = '{$a} eksik';
$string['foundmissingonthispage'] = 'Bu sayfada {$a}';
$string['foundtotal'] = '{$a} bulundu';
$string['googletranslate'] = 'google\'a sor';
$string['importfile'] = 'Dizeleri dosyadan al';
$string['importfile_help'] = 'Çevrimdışı tercüme edilmiş dizeleriniz varsa, onlara bu form aracılığıyla yerleştirebilirsiniz.

*Dosyalar Moodle PHP dosyasında tanımlı olana geçerli dizelereli içermelidir. Örnekler için Moodle kurulum `/lang/en/`dizinine bakabilirsiniz.

*Dosya adı ile  verilen bileşendeki dize tanımları İngilizce dize tanımları (\'moodle.php\', \'assignment.php\' veya \'enrol_manual.php\') ile aynı olmalıdır.
Dosyada bulunan tüm dizeler seçili sürüm ve dil için rafa eklenecektir.
Birden fazla PHP dosyasını bir ZİP dosyası içine koyarsanız aynı anda işlenebilir.';
$string['importfile_link'] = 'local/amos/importfile';
$string['language'] = 'Dil';
$string['languagepacks'] = 'Ek dil paketleri Moodle sitenize <em>Yönetim > Site yönetimi > Dil > Dil paketleri</em> aracılığıyla veya manuel olarak yüklenebilir. Daha fazla ayrıntı için <a href="https://docs.moodle.org/en/Language_packs">Dil paketleri belgelerine</a> bakın.';
$string['languages'] = 'Diller';
$string['languagesall'] = 'Hepsi';
$string['languagesnone'] = 'Hiçbiri';
$string['lastavailable'] = 'Mevcut en son sürüm';
$string['lessfilteringoptions'] = 'Daha az seçenek';
$string['log'] = 'Kayıt';
$string['logfilterbranch'] = 'Sürümler';
$string['logfiltercommithash'] = 'git hash';
$string['logfiltercommitmsg'] = 'Teslimat mesajı içerir';
$string['logfiltercommits'] = 'Teslimat fitresi';
$string['logfiltercommittedafter'] = 'Tesıimattan sonra';
$string['logfiltercommittedbefore'] = 'Tesıimattan önce';
$string['logfiltercomponent'] = 'Bileşenler';
$string['logfilterlang'] = 'Diller';
$string['logfiltershow'] = 'Filitrelen teslimatları ve dizeleri göster';
$string['logfiltersource'] = 'Kaynak';
$string['logfiltersourceamos'] = 'amos (web tabanlı çevirmen)';
$string['logfiltersourceautomerge'] = 'Otomatik birleştir (ceviri başka bir daldan kopyalanır)';
$string['logfiltersourcebot'] = 'bot (toplu komut dosyası tarafından yürütülen işlemler)';
$string['logfiltersourcecommitscript'] = 'commitscript (commit mesajında AMOScript)';
$string['logfiltersourcefixdrift'] = 'fixdrift (sabit AMOS-git sürüklenme)';
$string['logfiltersourcegit'] = 'git (Moodle kaynak kodunun ve 1.x paketlerinin git aynası)';
$string['logfiltersourceimport'] = 'içe aktar (teslimat eklentilerinden alınan dizeler)';
$string['logfiltersourcerevclean'] = 'revclean (ters temizleme işlemi)';
$string['logfilterstringid'] = 'Dize tanımlayıcı';
$string['logfilterstrings'] = 'Dize filtresi';
$string['logfilterusergrp'] = 'Teslimatçılar';
$string['logfilterusergrpor'] = 'veya';
$string['maintainers'] = 'Koordinötörler';
$string['manageamos'] = 'AMOS\'u yönet';
$string['markuptodate'] = 'Çeviriyi güncel olarak işaretle';
$string['markuptodatelabel'] = 'güncel olarak işaretle';
$string['messageprovider:checker'] = 'Dil paketi kontrol sonuçları';
$string['messageprovider:contribution'] = 'Teslim edilen çeviriler';
$string['morefilteringoptions'] = 'Daha fazla seçenek';
$string['newlanguage'] = 'Yeni dil';
$string['nodiffs'] = 'Fark bulunamadı';
$string['nofiletoimport'] = 'Alınacak bir dosya seçiniz';
$string['nologsfound'] = 'Hiç bir dize bulunamadı lütfen filtre seçeneklerini değiştirin';
$string['nostringsfound'] = 'Dize bulunamadı';
$string['nostringtoimport'] = 'Dosyada geçerli bir dize bulunamadı. Lütfen dosyanızın geçerli bir isim ve biçime sahip olduğundan emin olunuz.';
$string['nothingtostage'] = 'İşlem herhangi biz dize döndermedi';
$string['novalidzip'] = 'ZIP dosyası açılamıyor';
$string['numofcommitsabovelimit'] = 'En son {$a->limit} kullanılarak, katkıda bulunan filtresiyle eşleşen {$a->found} işlem bulundu';
$string['numofcommitsunderlimit'] = 'Katkıda bulunaan filtresiyle eşleşen {$a->found} işlem bulundu';
$string['numofmatchingstrings'] = 'Bunun içinde, {$a->commits} işlemelerindeki {$a->strings} değişiklikleri dize filtresiyle eşleşir';
$string['outdatednotcommitted'] = 'Güncel olmayan dizeler';
$string['outdatednotcommitted_help'] = 'AMOS çeviri yapıldıktan sonra İngilizce sürümü değşitrildiği için güncelliğini yitirmiş dize(ler) olabileceğini tespit etti. Lütfen çeviriyi gözden geçiriniz.';
$string['outdatednotcommittedwarning'] = 'Güncel olmayan';
$string['ownstashactions'] = 'Ambar eylemleri';
$string['ownstashactions_help'] = '*Uygula -ambarda sakladığın çevrilmiş ve değiştirilmemiş dizeleri düzenlemek rafa kopyalayın.

* Açılır Pencere - çevrilmiş dizeleri ambardan silerek rafa taşı ve (yani Uygula ve ve Sil) sil
* Sil - Ambardaki dizeleri sil
* Gönder - Ambardeki dizeleri  çeviri koordinatörlerine gönderebilmeniz için bir form açar, böylece çevirileriniz resmi dil paketinde yer alır.';
$string['ownstashes'] = 'Ambarlarınız';
$string['ownstashes_help'] = 'Bunlar sizin ambarlarınızın listesidir.';
$string['ownstashesnone'] = 'Hiç ambarınız yok';
$string['permalink'] = 'Kalıcı bağlantı';
$string['placeholder'] = 'Yer tutucular';
$string['placeholder_help'] = 'Yer tutucular dize içinde `{$a}` veya` {$a->something}` gibi özel ifadelerdir. Dize aslında yazdırıldığında Onlar bir değerle değiştirilir.

Orijinal dizeleri olduğu gibi değiştirmeden kopyalamak için önemlidir. Onları tercüme etmeyin ve de sol-sağ yazım yönünü değiştirmeyin.';
$string['placeholderwarning'] = 'Yer tutucular';
$string['pluginclasscore'] = 'Çekirdek alt sistemler';
$string['pluginclassnonstandard'] = 'Standart olmayan eklentiler';
$string['pluginclassstandard'] = 'Standart eklentiler';
$string['pluginname'] = 'AMOS';
$string['plugintypelocations'] = 'Eklenti türü konumları';
$string['plugintypelocations_desc'] = 'Standart eklentiler tarafından sağlanan alt eklenti türleri veya eski türler gibi ek standart eklenti türlerinin konumlarını tanımlamaya izin verir.';
$string['presetcommitmessage'] = '{$a->author} tarafından yapılan çeviri #{$a->id}';
$string['presetcommitmessage2'] = '{$a->target} dalı ile {$a->source} birleştirilen eksik dizeler';
$string['presetcommitmessage3'] = '{$a->versiona} ve {$a->versionb} arasındaki farkları düzelt.';
$string['privacy:commitnumber'] = 'Kaydet {$a}';
$string['privacy:contribnumber'] = 'Katkı {$a}';
$string['privacy:filterusage'] = 'Filtre kullanımı';
$string['privacy:metadata:db:amoscommits'] = 'Tüm commit ile ilgili meta verileri tutar.';
$string['privacy:metadata:db:amoscommits:commitmsg'] = 'Kullanıcı tarafından sağlanan teslim mesajı.';
$string['privacy:metadata:db:amoscommits:timecommitted'] = 'Katkının zaman damgası.';
$string['privacy:metadata:db:amoscommits:userinfo'] = 'Kaydetme kaynağı konumunda, örneğin Git\'te sağlanan kullanıcı kimliği.';
$string['privacy:metadata:db:amoscontributions'] = 'Topluluk üyelerinden katkıda bulunan çeviriler.';
$string['privacy:metadata:db:amoscontributions:lang'] = 'Bu katkının ait olduğu dilin kodu.';
$string['privacy:metadata:db:amoscontributions:message'] = 'Gönderimi açıklayan ilk mesaj.';
$string['privacy:metadata:db:amoscontributions:stashid'] = 'Ekli kasanın dahili tanımlayıcısı.';
$string['privacy:metadata:db:amoscontributions:status'] = 'Katkının iş akışı durumu ".';
$string['privacy:metadata:db:amoscontributions:subject'] = 'Katkıda bulunan gönderimin konusu.';
$string['privacy:metadata:db:amoscontributions:timecreated'] = 'Katkı kaydının oluşturulduğu zamanın zaman damgası.';
$string['privacy:metadata:db:amoscontributions:timemodified'] = 'Katkı kaydının yakın zamanda değiştirildiği zamanın zaman damgası.';
$string['privacy:metadata:db:amosfilterusage'] = 'AMOS tercüman filtresi kullanım günlüğü.';
$string['privacy:metadata:db:amosfilterusage:currentlang'] = 'Geçerli oturum dili.';
$string['privacy:metadata:db:amosfilterusage:ismaintainer'] = 'Kullanıcının AMOS deposuna giriş yapma izni var mı?';
$string['privacy:metadata:db:amosfilterusage:numofcomponents'] = 'Seçili bileşenlerin sayısı';
$string['privacy:metadata:db:amosfilterusage:numoflanguages'] = 'Seçilen dillerin sayısı';
$string['privacy:metadata:db:amosfilterusage:numofversions'] = 'Seçili sürümlerin sayısı';
$string['privacy:metadata:db:amosfilterusage:showexistingonly'] = 'Yalnızca mevcut çeviriler mi görüntülenmeli?';
$string['privacy:metadata:db:amosfilterusage:showgreylistedonly'] = 'Yalnızca gri listeli dize görüntülenmeli mi?';
$string['privacy:metadata:db:amosfilterusage:showhelpsonly'] = 'Yalnızca yardım dizeleri mi görüntülenmeli?';
$string['privacy:metadata:db:amosfilterusage:showmissingonly'] = 'Yalnızca eksik ve güncel olmayan dizeler mi görüntülenmeli?';
$string['privacy:metadata:db:amosfilterusage:showoutdatedonly'] = 'Yalnızca güncel olmayan dizeler mi görüntülenmeli?';
$string['privacy:metadata:db:amosfilterusage:showstagedonly'] = 'Yalnızca aşamalı dizeler mi görüntülenmeli?';
$string['privacy:metadata:db:amosfilterusage:showwithoutgreylisted'] = 'Gri renkli dizeler sonuçlardan kaldırılmalı mı?';
$string['privacy:metadata:db:amosfilterusage:stringidpartial'] = 'Stringid için kısmi eşleşme isteniyor mu?';
$string['privacy:metadata:db:amosfilterusage:substringcasesensitive'] = 'Alt dizenin büyük / küçük harfe duyarlı olduğu düşünülmeli mi?';
$string['privacy:metadata:db:amosfilterusage:substringregex'] = 'Alt dize bir normal ifade olarak kabul edilmeli mi?';
$string['privacy:metadata:db:amosfilterusage:timesubmitted'] = 'Filtre formunun gönderildiği zamanın zaman damgası';
$string['privacy:metadata:db:amosfilterusage:usercountry'] = 'Kullanıcının profilinde seçilen ülke kodu';
$string['privacy:metadata:db:amosfilterusage:userlang'] = 'Kullanıcının profilinden tercih ettiği dil';
$string['privacy:metadata:db:amosfilterusage:usesdefaultlang'] = 'kullanıcı önceden seçilmiş dilleri kullandınız mı?';
$string['privacy:metadata:db:amosfilterusage:usesdefaultversion'] = 'Kullanıcı, formdaki önceden seçilmiş sürümleri kullandı mı?';
$string['privacy:metadata:db:amosfilterusage:withstringid'] = 'Stringid belirtildi mi?';
$string['privacy:metadata:db:amosfilterusage:withsubstring'] = 'Belirtilen aramak için alt dize muydu?';
$string['privacy:metadata:db:amosstashes'] = 'Kasalarla ilgili bilgileri saklama havuzunda tutar';
$string['privacy:metadata:db:amosstashes:components'] = 'Saklanan aşamada depolanan bileşenlerin listesi';
$string['privacy:metadata:db:amosstashes:id'] = 'Kasanın dahili tanımlayıcısı';
$string['privacy:metadata:db:amosstashes:languages'] = 'Saklanan aşamada bulunan dillerin listesi';
$string['privacy:metadata:db:amosstashes:message'] = 'Kasayı açıklayan tam mesaj, zula katkıda bulunan bir çeviri olarak gönderildiğinde varsayılan tamamlama mesajı olarak kullanılır.';
$string['privacy:metadata:db:amosstashes:name'] = 'Kasanın adı veya unvanı';
$string['privacy:metadata:db:amosstashes:strings'] = 'Kasanın başlığı';
$string['privacy:metadata:db:amosstashes:timecreated'] = 'Kasanın oluşturulduğu zamanın zaman damgası';
$string['privacy:metadata:db:amosstashes:timemodified'] = 'Kaydın yakın zamanda değiştirildiği zamanın zaman damgası';
$string['privacy:metadata:db:amostranslators'] = 'Bir dil paketi ile bir kullanıcı arasındaki ilişkiyi açıklar. Bu, geliştirici (dil paketini taahhüt etme hakkına sahiptir) veya açıkça katkıda bulunan (katkılar gönderilmese bile krediler sayfasında görüntülenir) olabilir.';
$string['privacy:metadata:db:amostranslators:lang'] = 'Çevirmenin çevirmesine izin verilen dil kodu veya tüm diller için yıldız işareti.';
$string['privacy:metadata:db:amostranslators:status'] = 'Kullanıcının, dil paketinin bakımcısı (0) veya açık katkı sağlayıcısı (1) olup olmadığını belirler.';
$string['privacy:metadata:external:languagepacks'] = 'Çeviri katkıları, dünya çapında dağıtılan ve Moodle sitelerine yüklenen ZIP dosyalarına aktarılır.';
$string['privacy:metadata:external:languagepacks:email'] = 'Katkıda bulunan e-posta adresi, dil paketi dosyalarına eklenebilir.';
$string['privacy:metadata:external:languagepacks:firstname'] = 'Katkıda bulunan adı, dil paketi dosyalarına eklenebilir.';
$string['privacy:metadata:external:languagepacks:lastname'] = 'Katkıda bulunan soyadı, dil paketi dosyalarına eklenebilir.';
$string['privacy:metadata:subsystem:comment'] = 'Yorum alt sisteminin eklenti tarafından nasıl kullanıldığını açıklayın.';
$string['privacy:stashnumber'] = 'Sakla {$a}';
$string['privileges'] = 'Yetkileriniz';
$string['privilegesnone'] = 'Genel bilgilere salt okunur erişimin var.';
$string['processing'] = 'işleniyor........';
$string['quicklinks'] = 'Hızlı bağlantı';
$string['quicklinks_amos'] = 'AMOS çevirmen';
$string['quicklinks_forum'] = 'Çeviri forumu';
$string['quicklinks_manual'] = 'Kullanım kılavuzu';
$string['quicklinks_newcomers'] = 'Yeni başlayanlar için Yardım';
$string['requestactions'] = 'Eylem';
$string['requestactions_help'] = '* Uygula - Raflanmış dizelereri kendi rafına kopyala. Eğer dizge mevcutsa bir sadece depoya gönderilir.
* Gizle - blok çekme isteği için artık bir daha görüntülenmez.';
$string['savefilter'] = 'Dizeleri göster';
$string['script'] = 'AMOScript';
$string['script_help'] = 'AMOScript dizeleri depo üzerinde çalıştırmak için talimatlar kümesidir.';
$string['scriptexecute'] = 'Çalıştır ve sonuçları rafla';
$string['sourceversion'] = 'Kaynak sürüm';
$string['stage'] = 'Raf';
$string['stageactions'] = 'Raf eylemleri';
$string['stageactions_help'] = '* Aşamalı dizeleri düzenle - yalnızca aşamalı çevirilerin görüntülenmesini sağlamak için çevirmen filtre ayarlarını değiştirir.
* Teslim edilemeyen dizeleri eritin - gerçekleştirmenize izin verilmeyen tüm çevirilerin aşamalarını kaldırın. Sahne tamamlanmadan önce otomatik olarak budanır.
* Yeniden Başlat - mevcut çeviriyi değiştirmeyen veya arşivdeki en son çeviriden daha eski olan tüm çevirileri aşamalandırın. Aşama, taahhüt edilmeden önce otomatik olarak yeniden hesaplanır.
* Unstage all - Sahneyi temizler, tüm aşamalı çeviriler kaybolur.';
$string['stagedownload'] = 'İndir';
$string['stageedit'] = 'Raf dizesi ayarlarını düzenle';
$string['stageprune'] = '';
$string['stagerebase'] = 'Yeniden tabanla';
$string['stagestringsnocommit'] = 'Burada {$a->staged} dizge raflandı';
$string['stagestringsnone'] = 'Rafda hiç dize yok';
$string['stagestringssome'] = '{$a->staged} raflanan diziler vardır, bunlardan {$a->committable} tanesi işlenebilir';
$string['stagesubmit'] = 'Dizeleri çeviri koordinatörüne gönder';
$string['stagetoolopen'] = 'Rafa git';
$string['stagetranslation'] = 'Çeviri';
$string['stagetranslation_help'] = 'Gerçekleştirilecek aşamalı çeviriyi görüntüler. Hücrenin arka plan rengi şu anlama gelir:

* Yeşil - eksik bir çeviriyi eklediniz ve bunu gerçekleştirme izniniz var.
* Sarı - bir dizeyi değiştirdiniz ve değişikliği yapmanıza izin verildi.
* Mavi - çeviriyi değiştirdiniz veya eksik bir çeviriyi eklediniz ancak bunu verilen dile çevirmenize izin verilmiyor.
* Renk yok - çeviri akım aynıdır ve bu nedenle işlenen edilmeyecektir düzenledi.';
$string['stageunstageall'] = 'Tümünü raftan al';
$string['standardcomponents'] = 'Standart bileşenlerin listesi';
$string['standardcomponents_desc'] = 'Moodle standart bileşenlerinin listesi. İsteğe bağlı sayı, bileşenin standart olduğu zamandan beri sürüm kodunu gösterir. Sayı negatifse, bileşenin standart olarak mevcut olduğu son sürümü gösterir. Her iki numara da mevcut olabilir. Örnek:

* `mod_workshop` - versiyonsuz, bu bileşen tüm versiyonlarda standart olarak kabul edilir
*` report_infectedfiles 310` - Moodle 3.10
* `theme_clean 25-36` ile başlayan standart olarak değerlendirilmesi gereken bir bileşeni belirtir - standart bileşen Moodle 2.5\'ten başlayarak 3.6 dahil';
$string['stashactions'] = 'Çalışmayı kaydet';
$string['stashactions_help'] = 'Abar raflanızınız anlık görüntüleridir. Abardaki teslimatlar resmi dil paketine eklenmesi için çeviri koordinatörüne teslim edilebilir.';
$string['stashapply'] = 'Uygula';
$string['stashautosave'] = 'Otomatik kaydedilen depo';
$string['stashautosave_help'] = 'Bu ambar raflarınızın anlık görüntüsün içerir. Burdaki tüm dizeleri, örneğin, kazara raftan indirildiği durumlarda yedek olarak kullanabilirsiniz. Bütün ambardaki dizeleri raflara (halihazırdaki rafladığınız dizelerin üzerine yazılır) tekrar yüklemek için "Uygula" butonunun kullanabilirsiziniz.';
$string['stashcomponents'] = '<span>Bİleşenler:</span> {$a}';
$string['stashdownload'] = 'İndir';
$string['stashdrop'] = 'Sil';
$string['stashdropconfirm'] = 'Kaydedilmiş <em>\'{$a}\'</em> rafını gerçekten kalıcı olarak silmek istiyor musunuz?';
$string['stashes'] = 'Depolar';
$string['stashlanguages'] = '<span>Lisanlar:</span> {$a}';
$string['stashpop'] = 'Pencerede aç';
$string['stashpush'] = 'Raftaki tüm dizeleri depaya gönderin.';
$string['stashstrings'] = '<span>Toplam dize sayısı:</span> {$a}';
$string['stashsubmit'] = 'Koordinatöre gönder';
$string['stashsubmitdetails'] = 'Gönderi detayı';
$string['stashsubmitmessage'] = 'Mesaj';
$string['stashsubmitsubject'] = 'Konu';
$string['stashtitle'] = 'Depo başlığı';
$string['stashtitledefault'] = 'Çalışma devam ediyor {$a->time}';
$string['stdvernotebetween'] = 'Standart {$a->from} ile {$a->to} arası';
$string['stdvernotefrom'] = 'Standart {$a->from}';
$string['stdvernoteto'] = '{$a->to} \'a kadar standart';
$string['stringhistory'] = 'tarihçe';
$string['strings'] = 'Dizeler';
$string['stringversionnotlatest'] = 'daha yeni sürüm var';
$string['submitting'] = 'Teslimat gönderiliyor';
$string['submitting_help'] = 'Bu çevirileri çeviri koordinatörüne göndereceğiz. Sizin çalışmalarırınızı onlar kendi raflarına alacaklar, ve inceleme sonucunda teslimat yapacaklar. Lütfen onlara çalışmanızla ilgili kısa bir açıklama ve neden bu katkıyı önerdiğinizi belirtiniz.';
$string['targetversion'] = 'Hedef Sürüm';
$string['timeline'] = 'Dize zaman çizelgesi';
$string['timelineheading'] = 'Dize zaman çizelgesi:{$a->component} | {$a->strname}';
$string['translatortool'] = 'Çevirmen';
$string['translatortoolopen'] = 'AMOS Çeviriciyi aç';
$string['translatortranslation'] = 'Çeviri';
$string['translatortranslation_help'] = 'Giriş düzenleyicisine dönüştürmek için hücreye tıklayın. Çeviriyi ekleyin ve çeviriyi sahnelemek için hücrenin dışına tıklayın.. Hücrenin arka plan rengi şu anlama gelir:

* Yeşil - dizgeler zaten tercüme edilmiştir, çeviriyi değiştirebilir veya düzenleyebilirsiniz.
* Sarı - dizeler güncel olmayabilir. Tercüme edildikten sonra İngilizce orijinal dize muhtemelen güncellenmiştir.
* Kırmızı - string henüz tercüme edilmemiş.
* Mavi - çeviriyi değiştirdiniz ve çeviri rafa eklendi.
* Gri - AMOS, bu dize çeviri için kullanılamaz. Örneğin Moodle 1,9  dizeler yalnızca eski CVS erişimi ile düzenlenmesi gerekir.

Çeviri koordinatörleri işlem için izin verilen hücrelerin köşesinde küçük kırmızı bir sembol görebilirler.';
$string['typecontrib'] = 'İlave eklentiler';
$string['typecontribbadge'] = 'İlave';
$string['typecore'] = 'Çekirdek altsistem';
$string['typecorebadge'] = 'Çekirdek';
$string['typestandard'] = 'Standat Eklentiler';
$string['typestandardbadge'] = 'Standart';
$string['unableenfixaddon'] = 'Standart eklentiler sadece ingilizce eklentiler için kabul edilir.';
$string['unableenfixcountries'] = 'Ülke isimleri ISO 3166-1\'den kopyalanır';
$string['unableunmaintained'] = '\'{$a}\' dil paketinin şu anda geliştiricisi yok, bu nedenle çeviri katkıları kabul edilemez. Lütfen \'{$a}\' dil paketi bakımcısı olmak için gönüllü olmayı düşünün.';
$string['unstage'] = 'raftan indir';
$string['unstageconfirm'] = 'Raftan kaldırmayı onaylayın';
$string['unstageconfirmlong'] = '<p><code>{$a->stringid}</code> dizesinin, <code>{$a->component}</code> bileşeninin, <code>{$ dil paketinin çevirisini kaldıracaksınız a->language}</code>.</p><p>Emin misiniz?</p>';
$string['unstaging'] = 'Raftan indiriliyor';
$string['untranslate'] = 'çeviriyi geri al';
$string['untranslateconfirm'] = '<p><code>{$a->stringid}</code> dizesinin mevcut çevirisini, <code>{$a->component}</code> bileşenini <code>{$\'den kaldıracaksınız a->since}</code> ve <code>{$a->language}</code> dil paketinin daha yüksek sürümleri.</p><p>Emin misiniz?</p>';
$string['untranslatetitle'] = 'Çeviriler dil paketinden kaldırılıyor';
$string['untranslating'] = 'Çeviri geri alınıyor';
$string['userdefaultreset'] = 'Varsayılanlarıma sıfırla';
$string['userdefaultsave'] = 'Varsayılanlarım olarak kaydet';
$string['version'] = 'Sürüm';
