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
 * Strings for component 'qtype_ordering', language 'tr', version '4.3'.
 *
 * @package     qtype_ordering
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['absoluteposition'] = 'Mutlak pozisyon';
$string['allornothing'] = 'Tümü yada hiçbiri';
$string['answer'] = 'Öğe metni';
$string['answerheader'] = 'Sürüklenebilir öğe  {no}';
$string['correctorder'] = 'Bu öğelerin doğru sırası şöyledir:';
$string['defaultanswerformat'] = 'Varsayılan cevap biçimi';
$string['defaultquestionname'] = 'Aşağıdaki öğeleri doğru sıraya sürükleyin.';
$string['editingordering'] = 'Sıralama sorusunu düzenleme';
$string['gradedetails'] = 'Not detayları';
$string['gradingtype'] = 'Not verme türü';
$string['gradingtype_help'] = 'Not verme hesaplama türünü seçin.

**Herşey ya da hiçbirşey**
: Eğer bütün maddeler doğru pozisyonda ise, tam puan verilir. Aksi takdirde skor sıfırdır.

** Mutlak pozisyon **
: Bir öğe, doğru cevapta olduğu gibi aynı konumdaysa, doğru sayılır. Soru için mümkün olan en yüksek puanı **
** öğrenciye gösterilen öğelerin sayısı ile aynıdır.

** Bir sonraki öğeye göre (son hariç) **
: Bir öğe, doğru cevabın aynısı olduğu takdirde doğru kabul edilir. Son konumdaki öğe kontrol edilmez. Böylece, soru için mümkün olan en yüksek skor ** öğrenciye gösterilen öğelerin sayısından ** bir düşüktür.

** Bir sonraki öğeye göre (son dahil) **
: Bir öğenin, doğru cevabın aynısı olduğu takdirde doğru kabul edilir. Bu, takip eden hiçbir öğenin bulunmaması,  gereken son öğeyi içerir. Böylece, soru için mümkün olan en yüksek puan ** ** öğrenciye gösterilen öğelerin sayısı ile aynıdır.

** Önceki ve sonraki öğelere göre **
: Bir öğe hem önceki hem de sonraki öğeler doğru cevapta olduğu gibi doğru kabul edilir. İlk öğenin önceki öğesi olmamalı ve son öğenin sonraki öğesi olmamalıdır. Bu nedenle, her bir öğe için iki muhtemel nokta vardır ve soru için mümkün olan en yüksek puan öğrenciye görüntülenen öğelerin sayısı **iki defa ** \'dır.

** Önceki ve sonraki tüm öğelere göre **
: Bir öğenin, doğru cevaptaki tüm öğelerden önce gelmesi ve doğru yanıtta olduğu gibi aynı öğelerin hepsinin takip edilmesi halinde, doğru sayılır. Önceki öğelerin sırası önemli değildir ve aşağıdaki öğelerin düzenlenmiş olmasıda değildir. Böylece *** n *** öğeler öğrenciye görüntülenirse, her bir öğe için mevcut olan işaretlerin sayısı *** (n - 1) ***\'dir ve soru için en yüksek işareti *** Nx (n - 1) ***, *** (n² - n) *** ile aynıdır.

** En uzun düzenleme alt grubu **
: Not, öğelerin en uzun düzenlenmiş alt kümesindeki öğe sayısıdır. Olası en yüksek not, görüntülenen öğe sayısıyla aynıdır. Bir alt kümenin en az iki öğesi olmalıdır. Alt kümelerin ilk öğeden başlamaları gerekmez (ancak yapılabilir) ve bitişik olması gerekmez (ancak bunlar olabilir). Eşit uzunluktaki birden çok alt küme varsa, soldan sağa arama yaparken önce bulunan alt kümedeki öğeler doğru olarak görüntülenir. Diğer öğeler yanlış olarak işaretlenecek.

** En uzun bitişik alt küme **
: Not, öğelerin en uzun bitişik alt kümesindeki öğe sayısıdır. Olası en yüksek not, görüntülenen öğe sayısıyla aynıdır. Bir alt kümenin en az iki öğesi olmalıdır. Alt kümelerin ilk maddenin başında olması gerekmez (ancak yapılabilir) ve KONUMLANDIRILMALIDIR. Eşit uzunluktaki birden çok alt küme varsa, soldan sağa arama yaparken önce bulunan alt kümedeki öğeler doğru olarak görüntülenir. Diğer öğeler yanlış olarak işaretlenecek.';
$string['horizontal'] = 'Yatay';
$string['layouttype'] = 'Öğelerin yerleşimi';
$string['layouttype_help'] = 'Öğeleri dikey veya yatay olarak görüntüleyip görüntülemeyeceğinizi seçin.';
$string['longestcontiguoussubset'] = 'En uzun bitişik altküme';
$string['longestorderedsubset'] = 'En uzun sıralı altküme';
$string['noresponsedetails'] = 'Üzgünüz, bu sorunun yanıtına ilişkin hiçbir ayrıntı mevcut değil.';
$string['noscore'] = 'Puan yok';
$string['notenoughanswers'] = 'Sırlama soruları {$a}\'dan fazla olmalıdır.';
$string['pluginname'] = 'Sıralama';
$string['pluginname_help'] = 'Birkaç öğe karışık bir sırada görüntülenir. Öğeler anlamlı bir sıraya sürüklenebilir.';
$string['pluginname_link'] = 'question/type/ordering';
$string['pluginnameadding'] = 'Bir Sıralama sorusu ekleme';
$string['pluginnameediting'] = 'Bir Sıralam sorusunu düzenleme';
$string['pluginnamesummary'] = 'Karmaşık öğeleri anlamlı bir sıraya koyun.';
$string['privacy:metadata'] = 'Sorgulama soru tipi eklentisi herhangi bir kişisel veri depolamaz.';
$string['relativeallpreviousandnext'] = 'TÜMÜ önceki ve sonraki öğelere göre';
$string['relativenextexcludelast'] = 'Bir sonraki öğeye göre (son hariç)';
$string['relativenextincludelast'] = 'Sonraki maddeye göre (son dahil)';
$string['relativeonepreviousandnext'] = 'Önceki ve sonraki öğelere göre';
$string['removeeditor'] = 'HTML düzenleyicisini kaldır';
$string['removeitem'] = 'Sürüklenebilir öğeyi kaldır';
$string['scoredetails'] = 'Bu yanıttaki her maddenin puanı burada:';
$string['selectall'] = 'Tüm öğeleri seç';
$string['selectcontiguous'] = 'Öğelerin bitişik bir alt kümesini seçin';
$string['selectcount'] = 'Alt kümenin boyutu';
$string['selectcount_help'] = 'Soru bir sınavda görüntülendiğinde görüntülenecek öğe sayısı.';
$string['selectrandom'] = 'Rastgele bir öğe alt kümesi seçin';
$string['selecttype'] = 'Öğe seçme türü';
$string['selecttype_help'] = 'Tüm öğeleri veya öğelerin alt kümesini görüntüleyip görüntülememeyi seçin.';
$string['showgrading'] = 'Not verme ayrıntıları';
$string['showgrading_help'] = 'Bir öğrenci, bu Düzenleme sorusuna verilen yanıtı incelediğinde puan hesaplamasının ayrıntılarını göstermek veya gizlemek isteyip istemediğinizi seçin.';
$string['vertical'] = 'Dikey';
