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
 * Strings for component 'workshop', language 'tr', version '4.3'.
 *
 * @package     workshop
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitydate:assessmentsclose'] = 'Değerleendirmenin bitişi:';
$string['activitydate:assessmentsclosed'] = 'Değerlendirme bitti:';
$string['activitydate:assessmentsopen'] = 'Değerlendirme açılışı:';
$string['activitydate:assessmentsopened'] = 'Değerlendirme açıldı:';
$string['activitydate:submissionsclose'] = 'Gönöderim bitişi:';
$string['activitydate:submissionsclosed'] = 'Gönderme bitti:';
$string['activitydate:submissionsopen'] = 'Gönderilerin açılışı:';
$string['activitydate:submissionsopened'] = 'Gönderiler açıldı:';
$string['aggregategrades'] = 'Notları yeniden hesapla';
$string['aggregation'] = 'Notları birleştirme';
$string['allocate'] = 'Gönderimleri ata';
$string['allocatedetails'] = 'beklenen: {$a->expected}<br />gonderilen: {$a->submitted}<br/>atanan: {$a->allocate}';
$string['allocation'] = 'Gönderimleri atama';
$string['allocationconfigured'] = 'Atama işlemi yapılandırıldı';
$string['allocationdone'] = 'Atama tamamlandı';
$string['allocationerror'] = 'Atama hatası';
$string['allowedfiletypesforoverallfeedback'] = 'Geri bildirim için izin verilen dosya türleri';
$string['allowedfiletypesforoverallfeedback_help'] = 'Geri bildirim için izin verilen dosya türleri, virgülle ayrılmış dosya uzantı listesi (örneğin, \'mp4, mp3, png, jpg\') girilerek kısıtlanabilir. Alan boş bırakılırsa, tüm dosya türlerine izin verilir.';
$string['allowedfiletypesforoverallfeedback_link'] = 'admin/tool/filetypes/index';
$string['allowedfiletypesforsubmission'] = 'Gönderim ekine izin verilen dosya türleri';
$string['allowedfiletypesforsubmission_help'] = 'Gönderim ekine izin verilen dosya türleri, virgülle ayrılmış dosya uzantıları listesi girilerek kısıtlanabilir. Alan boş bırakılırsa, tüm dosya türlerine izin verilir.';
$string['allowedfiletypesforsubmission_link'] = 'admin/tool/filetypes/index';
$string['allsubmissions'] = 'Bütün gönderimler ({$a})';
$string['alreadygraded'] = 'Önceden not verilmiş';
$string['areaconclusion'] = 'Sonuç metni';
$string['areainstructauthors'] = 'Gönderim yönergesi';
$string['areainstructreviewers'] = 'Değerlendirme yönergesi';
$string['areaoverallfeedbackattachment'] = 'Genel geribildirim ekleri';
$string['areaoverallfeedbackcontent'] = 'Genel geribildirim metinleri';
$string['areasubmissionattachment'] = 'Gönderim ekleri';
$string['areasubmissioncontent'] = 'Gönderim metinleri';
$string['assess'] = 'Değerlendir';
$string['assessedexample'] = 'Değerlendirilmiş örnek gönderim';
$string['assessedsubmission'] = 'Değerlendirilmiş gönderim';
$string['assessingexample'] = 'Örnek gönderim değerlendirilmesi';
$string['assessingsubmission'] = 'Gönderim değerlendirmesi';
$string['assessment'] = 'Değerlendirme';
$string['assessmentby'] = '<a href="{$a->url}">{$a->name}</a> nın';
$string['assessmentbyfullname'] = '{$a} \'ın değerlendirmesi';
$string['assessmentbyyourself'] = 'Sizin değerlendirmeniz';
$string['assessmentdeleted'] = 'Paylaştırılmış değerlendirme';
$string['assessmentend'] = 'Değerlendirme bitiş tarihi';
$string['assessmentendbeforestart'] = 'Değerlendirme bitiş tarihi, değerlendirme başlangıç tarihinden önce olamaz';
$string['assessmentenddatetime'] = 'Değerlendirme için son teslim tarihi:{$a->daydatetime} ({$a->distanceday})';
$string['assessmentendevent'] = '{$a} (değerlendirme için son teslim tarihi)';
$string['assessmentform'] = 'Değerlendirme formu';
$string['assessmentofsubmission'] = '<a href="{$a->assessmenturl}">Değerlendirme</a> of <a href="{$a->submissionurl}">{$a->submissiontitle}</a>';
$string['assessmentreference'] = 'Örnek değerlendirme';
$string['assessmentreferenceconflict'] = 'Referans değerlendirmesi yaptığınız örnek gönderimin değerlendirilmesi mümkün değildir.';
$string['assessmentreferenceneeded'] = 'Referans değerlendirmesi için bu örnek gönderimi değerlendirmeniz gerekir. Gönderimi değerlendirmek için \'Devam et\' düğmesine tıklayın.';
$string['assessments'] = 'Değerlendirme';
$string['assessmentsettings'] = 'Değerlendirme ayarları';
$string['assessmentstart'] = 'Değerlendirme başlangıç tarihi';
$string['assessmentstartdatetime'] = 'Değerlendirme  {$a->daydatetime} ile ({$a->distanceday}) tarihleri arasındadır';
$string['assessmentstartevent'] = '{$a} değerlendirme için açıldı';
$string['assessmentweight'] = 'Değerlendirme ağırlığı';
$string['assignedassessments'] = 'Erişilen ve değerlendirilmiş gönderimler';
$string['assignedassessmentsnone'] = 'Değerlendirmeniz için atanmış herhangi bir başvurunuz yok';
$string['backtoeditform'] = 'Düzenleme formuna geri dön';
$string['byfullname'] = '<a href="{$a->url}">{$a->name}</a>\'nın';
$string['byfullnamewithoutlink'] = '{$a}\'nın';
$string['calculategradinggrades'] = 'Değerlendirme puanlarını hesapla';
$string['calculategradinggradesdetails'] = 'beklenen: {$a->expected}<br />hesaplanan: {$a->calculated}';
$string['calculatesubmissiongrades'] = 'Gönderim notlarını hesapla';
$string['calculatesubmissiongradesdetails'] = 'beklenen: {$a->expected}<br />hesaplanan: {$a->calculated}';
$string['chooseuser'] = 'Kullanıcı seç.....';
$string['clearaggregatedgrades'] = 'Birleştirilmiş notların tümünü temizle';
$string['clearaggregatedgrades_help'] = 'Ödev puanları ve değerlendirme puanları sıfırlanacaktır. Değerlendirme aşamasında notları yeniden hesaplayabilirsiniz.';
$string['clearaggregatedgradesconfirm'] = 'Hesaplanan gönderim notlarını ve değerlendirme notlarını silmek istediğinizden emin misiniz?';
$string['clearassessments'] = 'Değerlendirmeleri sil';
$string['clearassessments_help'] = 'Gönderimler için hesaplanan notlar ve değerlendirme notları sıfırlanacaktır. Değerlendirme formlarının nasıl doldurulacağına ilişkin bilgi muhafaza edilecektir fakat değerlendiriceler değerlendirme formunu tekrar açmak ve verilen notların tekrar hesaplanması için yeniden kaydetmek zorunda kalacaklardır.';
$string['clearassessmentsconfirm'] = 'Tüm değerlendirme notlarını silmek istediğinizden emin misiniz?  Eğer silerseniz, şu anda sahip olduğunuz bilgilere yeniden tek başınıza erişmeniz mümkün olmayacaktır. Değerlendici gönderimleri yeniden notlandırmak zorunda kalacaklardır.';
$string['conclusion'] = 'Sonuç';
$string['conclusion_help'] = 'Sonuç metni etkinliğin sonunda katılımcılara gösterilir.';
$string['configexamplesmode'] = 'Çalıştayda varsayılan örnekleme modu değerlendirmesi';
$string['configgrade'] = 'Çalıştay gönderimleri için varsayılan en yüksek not';
$string['configgradedecimals'] = 'Notları görüntülerken ondalık noktadan sonra gösterilmesi gereken varsayılan basamak sayısı.';
$string['configgradinggrade'] = 'Çalıştay değerlendirmeleri için varsayılan en yüksek not';
$string['configmaxbytes'] = 'Sitedeki tüm çalıştaylar için varsayılan maksimum gönderim dosyası boyutu (ders limitlerine ve diğer yerel ayarlara bağlı olarak)';
$string['configstrategy'] = 'Çalıştay etkinlikleri için varsayılan puanlama stratejisi';
$string['createsubmission'] = 'Gönderim Ekle';
$string['crontask'] = 'Çalıştay modülü için arkaplan işleme';
$string['daysago'] = '{$a} gün önce';
$string['daysleft'] = '{$a} gün kaldı';
$string['daystoday'] = 'bugün';
$string['daystomorrow'] = 'yarın';
$string['daysyesterday'] = 'dün';
$string['deadlinesignored'] = 'Zaman kısıtlamaları sizin için geçerli değildir';
$string['deletesubmission'] = 'Gönderimi sil';
$string['editassessmentform'] = 'Değerlendirme formunu düzenle';
$string['editassessmentformstrategy'] = 'Değerlendirme formu ({$a})\'yı düzenle';
$string['editingassessmentform'] = 'Değerlendirme formunu düzenleme';
$string['editingsubmission'] = 'Gönderimi düzenleme';
$string['editsubmission'] = 'Gönderimi düzenle';
$string['err_multiplesubmissions'] = 'Bu formu düzenlerken gönderimin başka bir sürümü kaydedildi. Kullanıcı başına birden çok gönderime izin verilmez.';
$string['err_removegrademappings'] = 'Kullanılmayan not eşlemeleri kaldırılamıyor';
$string['evaluategradeswait'] = 'Lütfen değerlendirmelerin yapılmasını ve notların hesaplanmasını bekleyin';
$string['evaluation'] = 'Değerlendirmenin puanlanması';
$string['evaluationmethod'] = 'Değerlendirme yönteminin puanlanması';
$string['evaluationmethod_help'] = 'Değerlendirilmenin puanlama yöntemi değerlendirme notunun nasıl hesaplanacağını belirler. Sonuçtan memnun olmadığınız durumlarda notların farklı ayarlarla yeniden hesaplanmasını sağlayabilirsiniz.';
$string['evaluationsettings'] = 'Değerlendirme puanlanma ayarları';
$string['eventassessableuploaded'] = 'Bir gönderim yüklendi';
$string['eventassessmentevaluated'] = 'Değerlendirmeye not verlidi';
$string['eventassessmentevaluationsreset'] = 'Ölçme ve değerlendirme sıfırlandı';
$string['eventassessmentreevaluated'] = 'Değerlendirmeye yeniden not verlidi';
$string['eventphaseautomaticallyswitched'] = 'Gönderim eki dosya türleri, izin verilen dosya türlerinin bir listesi belirtilerek kısıtlanabilir. Alan boş bırakılırsa, tüm dosya türlerine izin verilir.';
$string['eventphaseswitched'] = 'Aşama değiştirildi';
$string['eventsubmissionassessed'] = 'Gönderim değerlendirildi';
$string['eventsubmissionassessmentsreset'] = 'Gönderim değerlendirmeleri silindi';
$string['eventsubmissioncreated'] = 'Gönderim oluşturuldu';
$string['eventsubmissiondeleted'] = 'Gönderim silindi';
$string['eventsubmissionreassessed'] = 'Gönderim yeniden değerlendirildi';
$string['eventsubmissionupdated'] = 'Gönderim güncellendi';
$string['eventsubmissionviewed'] = 'Genderim görüntülendi';
$string['example'] = 'Örnek gönderim';
$string['exampleadd'] = 'Örnek gönderim ekle';
$string['exampleassess'] = 'Örnek gönderimi değerlendir';
$string['exampleassessments'] = 'Değerlendirilecek örnek gönderimler';
$string['exampleassesstask'] = 'Değerlendirme örnekleri';
$string['exampleassesstaskdetails'] = 'beklenen: {$a->expected}<br />assessed: {$a->assessed}';
$string['examplecomparing'] = 'Örnek gönderim değerlendirmelerinin karşılaştırılması';
$string['exampledelete'] = 'Örneği sil';
$string['exampledeleteconfirm'] = 'Aşağıdaki örnek gönderimi silmek istediğinizden emin misiniz? Gönderimi silmek için \'Devam et\' düğmesine tıklayın.';
$string['exampleedit'] = 'Örneği düzenle';
$string['exampleediting'] = 'Örneği düzenleme';
$string['exampleneedassessed'] = 'Önce tüm örnek gönderimleri değerlendirmeniz gerekir.';
$string['exampleneedsubmission'] = 'Çalışmanızı göndermek ve tüm örnek sunuları önce değerlendirmek zorundasınız.';
$string['examplesbeforeassessment'] = 'Örnekler, Kendi gönderim ve akran değerlendirmesinden önce değerlendirilmesi gerekir';
$string['examplesbeforesubmission'] = 'Örnekler kendi gönderimlerinden önce değerlendirilmesi gerekir';
$string['examplesmode'] = 'Örnek değerlendirme modeli';
$string['examplesubmissions'] = 'Örnek gönderimler';
$string['examplesvoluntary'] = 'Örnek gönderimin değerlendirilmesi istemlidir';
$string['exportsubmission'] = 'Bu sayfayı dışa aktar';
$string['feedbackauthor'] = 'Yazar için geri bildirim';
$string['feedbackauthorattachment'] = 'Ek dosya';
$string['feedbackby'] = '{$a} tarafından geri bildirim';
$string['feedbackreviewer'] = 'incelemeci için geri bildirim';
$string['feedbacksettings'] = 'Geri bildirim';
$string['formataggregatedgrade'] = '{$a->grade}';
$string['formataggregatedgradeover'] = '<del>{$a->grade}</del><br/><ins>{$a->over}</ins>';
$string['formatpeergrade'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">({$a->gradinggrade})</span>';
$string['formatpeergradeover'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">(<del>{$a->gradinggrade}</del> / <ins>{$a->gradinggradeover}</ins>)</span>';
$string['formatpeergradeoverweighted'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">(<del>{$a->gradinggrade}</del> / <ins>{$a->gradinggradeover}</ins>)</span> @ <span class="weight">{$a->weight}</span>';
$string['formatpeergradeweighted'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">({$a->gradinggrade})</span> @ <span class="weight">{$a->weight}</span>';
$string['givengrades'] = 'Verilen notlar';
$string['grade_grading_name'] = 'Değerlendirme';
$string['grade_submission_name'] = 'Gönderim';
$string['gradecalculated'] = 'Gönderim için hesaplanan not';
$string['gradedecimals'] = 'Notların ondalık basamakları';
$string['gradegivento'] = '&gt;';
$string['gradeinfo'] = 'Not: {$a->received} / {$a->max}';
$string['gradeitemassessment'] = '{$a->workshopname} (değerlendirme)';
$string['gradeitemsubmission'] = '{$a->workshopname} (gönderim)';
$string['gradeover'] = 'Gönderim için notu iptal et';
$string['gradereceivedfrom'] = '&lt;';
$string['gradesreport'] = 'Çalıştay notları raporu';
$string['gradetopassgrading'] = 'Geçmek için değerlendirme notu';
$string['gradetopasssubmission'] = 'Geçmek için gönderim notu';
$string['gradinggrade'] = 'Not vermeyi değerlendirme';
$string['gradinggrade_help'] = 'Bu ayar, başvuru değerlendirmesi için elde edilebilecek maksimum notu belirtir.';
$string['gradinggradecalculated'] = 'Değerlendirme için hesaplanan not';
$string['gradinggradeof'] = 'Değerlendirme için  ({$a}) notu';
$string['gradinggradeover'] = 'Değerlendirme için notu iptal et';
$string['gradingsettings'] = 'Puanlama ayarları';
$string['groupnoallowed'] = 'Bu çalıştayda herhangi bir gruba erişmenize izin verilmiyor';
$string['iamsure'] = 'Evet, eminim';
$string['indicator:cognitivedepth'] = 'Çalıştay bilşsel';
$string['indicator:cognitivedepth_help'] = 'Bu gösterge, öğrencinin bir Atölye etkinliğinde ulaştığı bilişsel derinliğe dayanmaktadır.';
$string['indicator:cognitivedepthdef'] = 'Çalıştay bilişsel';
$string['indicator:cognitivedepthdef_help'] = 'Katılımcı, bu analiz aralığı sırasında çalıştay etkinlikleri tarafından sunulan bilişsel katılımın bu yüzdesine ulaştı (Seviyeler = Görüntüleme Yok, Görüntüle, Gönder, Geri Bildirimi Görüntüle, Geri Bildirime Yorum Yap, Geri Bildirimi Görüntüledikten Sonra Yeniden Gönder)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Çalıştay sosyal';
$string['indicator:socialbreadth_help'] = 'Bu gösterge, öğrencinin bir çalıştay etkinliğinde ulaştığı sosyal genişliğe dayanmaktadır.';
$string['indicator:socialbreadthdef'] = 'Çalıştay sosyal';
$string['indicator:socialbreadthdef_help'] = 'Katılımcı, bu analiz aralığında Çalıştay etkinlikleri tarafından sunulan sosyal katılımın şu yüzdesine ulaşmıştır (Düzeyler = Katılım yok, Yalnız katılımcı, Başkalarıyla birlikte katılımcı)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['info'] = 'Bilgi';
$string['instructauthors'] = 'Gönderim talimatları';
$string['instructreviewers'] = 'Değerlendirme yönergeleri';
$string['introduction'] = 'Açıklama';
$string['latesubmissions'] = 'Geç kalan gönderiler';
$string['latesubmissions_desc'] = 'Son gönderimden sonra gönderilere izin ver';
$string['latesubmissions_help'] = 'Etkinleştirilirse, bir yazar tekliflerini son teslim tarihinden sonra veya değerlendirme aşamasında sunabilir. Geç gönderimler yine de düzenlenemez.';
$string['latesubmissionsallowed'] = 'Geç gönderimlere izin verilir';
$string['maxbytes'] = 'Maksimum gönderim eki boyutu';
$string['modulename'] = 'Çalıştay';
$string['modulename_help'] = 'Çalıştay etkinlik modülü öğrencilerin çalışmalarının toplanmasını, gözden geçirilmesini ve akran değerlendirmesini sağlar.

Öğrenciler, kelime işlemeli belgeler veya elektronik tablolar gibi herhangi bir dijital içeriği (dosyaları) gönderebilir ve metin düzenleyiciyi kullanarak bir alana doğrudan metin yazabilir.

Gönderimler, öğretmen tarafından tanımlanan çok ölçütlü bir değerlendirme formu kullanılarak değerlendirilir. Akran değerlendirmesi ve değerlendirme formunu anlama süreci, bir referans değerlendirmesi ile birlikte öğretmen tarafından verilen örnek gönderimlerle önceden uygulanabilir. Öğrencilere akranlarının gönderimlerinden bir veya daha fazlasını değerlendirme fırsatı verilir. Gerekirse, gönderimler ve yorumcular anonim olabilir.

Öğrenciler bir çalıştay etkinliğinde iki not elde eder - gönderimleri için bir not ve akranlarının gönderimlerini değerlendirmeleri için bir not. Her iki not da not defterine kaydedilir.';
$string['modulename_link'] = 'mod/workshop/view';
$string['modulenameplural'] = 'Çalıştaylar';
$string['myassessments'] = 'Değerlendirmelerim';
$string['mysubmission'] = 'Gönderimim';
$string['nattachments'] = 'Maksimum gönderim ekinin sayısı';
$string['noexamples'] = 'Bu çalıştayda henüz bir örnek yok';
$string['noexamplesformready'] = 'Örnek gönderimler yapmadan önce değerlendirme formunu tanımlamalısınız.';
$string['nogradeyet'] = 'Henüz bir not yok';
$string['nosubmissionfound'] = 'Bu kullanıcı için bir gönderim bulunamadı';
$string['nosubmissions'] = 'Bu çalıştayda henüz bir gönderim yok';
$string['nosubmissiontype'] = 'En az bir gönderim türü mevcut olmalıdır';
$string['notassessed'] = 'Henüz değerlendirilmedi';
$string['nothingfound'] = 'Görüntülenecek hiçbir şey yok';
$string['nothingtoreview'] = 'İnceleme yapılmamış';
$string['notoverridden'] = 'Geçersiz kılınmadı';
$string['noworkshops'] = 'Bu kursda çalıştay bulunmamaktadır.';
$string['noyoursubmission'] = 'İşinizi henüz göndermediniz';
$string['nullgrade'] = '-';
$string['overallfeedback'] = 'Genel geribildirim';
$string['overallfeedbackfiles'] = 'En fazla geribilirim dosya eki sayısı';
$string['overallfeedbackmaxbytes'] = 'Maksimum genel geribildirim ek boyutu';
$string['overallfeedbackmode'] = 'Genel geri bildirim modu';
$string['overallfeedbackmode_0'] = 'Devre dışı bırakıldı';
$string['overallfeedbackmode_1'] = 'Etkin ve isteğe bağlı';
$string['overallfeedbackmode_2'] = 'Etkin ve gerekli';
$string['overallfeedbackmode_help'] = 'Etkinleştirilirse, değerlendirme formu alt kısmında bir metin alanı görüntülenir. İncelemeler, sunuşun genel değerlendirmesini oraya koyabilir veya değerlendirmelerine ilişkin ilave açıklama sağlayabilir.';
$string['page-mod-workshop-x'] = 'Herhangi bir çalıştay modülü sayfası';
$string['participant'] = 'Katılımcı';
$string['participantrevierof'] = 'İncelenecek katılımcılar';
$string['participantreviewedby'] = 'İnceleme yapan katılımcılar';
$string['phaseassessment'] = 'Değerlendirme aşaması';
$string['phaseclosed'] = 'Kapandı';
$string['phaseevaluation'] = 'Değerlendirmenin puanlanması aşaması';
$string['phasesetup'] = 'Kurulum aşaması';
$string['phasesoverlap'] = 'Gönderim aşaması ve değerlendirme aşaması çakışamaz';
$string['phasesubmission'] = 'Gönderim aşaması';
$string['pluginadministration'] = 'Çalıştay yönetimi';
$string['pluginname'] = 'Çalıştay';
$string['prepareexamples'] = 'Örnek gönderimleri hazırla';
$string['previewassessmentform'] = 'Önizleme';
$string['privacy:metadata:aggregatedgradinggrade'] = 'Belirli bir atölye etkinliğinde kullanıcı tarafından yapılan tüm değerlendirmeler için toplu not';
$string['privacy:metadata:assessmentgrade'] = 'Bu değerlendirme kapsamında sunulan sunum için toplam not';
$string['privacy:metadata:assessmentgradinggrade'] = 'Yaptığınız değerlendirmenin notu';
$string['privacy:metadata:assessmentgradinggradeover'] = 'Bu değerlendirmeyi sağlamak için notun manuel olarak geçersiz kılınan değeri';
$string['privacy:metadata:assessmentid'] = 'Değerlendirme kimliği';
$string['privacy:metadata:authorid'] = 'Gönderen yazarın kimliği';
$string['privacy:metadata:dimensiongrade'] = 'Verilen değerlendirme boyutunda not';
$string['privacy:metadata:dimensionid'] = 'Değerlendirme boyutu kimliği';
$string['privacy:metadata:example'] = 'Bu kaydın örnek bir gönderimi temsil edip etmediği';
$string['privacy:metadata:feedbackauthor'] = 'Yazar için geri bildirim';
$string['privacy:metadata:feedbackauthorformat'] = 'Yazar için geri bildirimin metin biçimi';
$string['privacy:metadata:feedbackreviewer'] = 'Değerlendirmeyi yapan kullanıcı için geri bildirim';
$string['privacy:metadata:feedbackreviewerformat'] = 'Değerlendirmeyi yapan kullanıcı için geri bildirimin metin biçimi';
$string['privacy:metadata:late'] = 'Gönderinin son teslim tarihinden sonra teslim edilip edilmediği';
$string['privacy:metadata:peercomment'] = 'Gönderinin son teslim tarihinden sonra teslim edilip edilmediği';
$string['privacy:metadata:peercommentformat'] = 'Verilen notla ilgili yorumun metin biçimi';
$string['privacy:metadata:preference:perpage'] = 'Kullanıcının bir sayfada görmeyi tercih ettiği gönderim sayısı';
$string['privacy:metadata:preference:viewlet-allexamples-collapsed'] = '"Örnek gönderimler" görünümü için daraltılmış/genişletilmiş durum.';
$string['privacy:metadata:preference:viewlet-allsubmissions-collapsed'] = '\'Çalıştay gönderimleri raporu\' görüntüleme öğesi için daraltılmış/genişletilmiş durum.';
$string['privacy:metadata:preference:viewlet-assessmentform-collapsed'] = '"Değerlendirme formu" görünümü için daraltılmış/genişletilmiş durum.';
$string['privacy:metadata:preference:viewlet-assignedassessments-collapsed'] = '"Değerlendirilecek atanmış gönderimler" görünüm alanı için daraltılmış/genişletilmiş durum.';
$string['privacy:metadata:preference:viewlet-cleargrades-collapsed'] = '\'Çalıştay araç kutusu\' görünümü için daraltılmış/genişletilmiş durum.';
$string['privacy:metadata:preference:viewlet-conclusion-collapsed'] = '"Sonuç" görünümü için daraltılmış/genişletilmiş durum.';
$string['privacy:metadata:preference:viewlet-examples-collapsed'] = '\'Değerlendirilecek örnek gönderimler\' görünümü için daraltılmış/genişletilmiş durum.';
$string['privacy:metadata:preference:viewlet-examplesfail-collapsed'] = '\'Değerlendirilecek örnek gönderimler\' görünümü için daraltılmış/genişletilmiş durum.';
$string['privacy:metadata:preference:viewlet-gradereport-collapsed'] = '\'Çalıştay notları raporu\' görüntülemesi için daraltılmış/genişletilmiş durum.';
$string['privacy:metadata:preference:viewlet-instructauthors-collapsed'] = '"Gönderme yönergeleri" görünümü için daraltılmış/genişletilmiş durum.';
$string['privacy:metadata:preference:viewlet-instructreviewers-collapsed'] = '"Değerlendirme talimatları" görünüm penceresi için daraltılmış/genişletilmiş durum.';
$string['privacy:metadata:preference:viewlet-intro-collapsed'] = '"Giriş" görünümü için daraltılmış/genişletilmiş durum.';
$string['privacy:metadata:preference:viewlet-overallfeedback-collapsed'] = '"Genel geri bildirim" görünümü için daraltılmış/genişletilmiş durum.';
$string['privacy:metadata:preference:viewlet-ownsubmission-collapsed'] = '\'Gönderiniz\' görünümü için daraltılmış/genişletilmiş durum.';
$string['privacy:metadata:preference:viewlet-publicsubmissions-collapsed'] = '"Yayınlanan gönderimler" görünüm alanı için daraltılmış/genişletilmiş durum.';
$string['privacy:metadata:preference:viewlet-yourgrades-collapsed'] = '"Notunuz" görünümü için daraltılmış/genişletilmiş durum.';
$string['privacy:metadata:published'] = 'Çalıştay kapatıldıktan sonra gönderimin tüm katılımcılara yayınlanıp yayınlanmayacağı';
$string['privacy:metadata:reviewerid'] = 'Değerlendirmeyi yapan kullanıcının kimliği';
$string['privacy:metadata:strategy'] = 'Kayıt değerlerini yorumlayan puanlama stratejisi alt eklentisinin adı';
$string['privacy:metadata:submissioncontent'] = 'Gönderimin içeriği';
$string['privacy:metadata:submissioncontentformat'] = 'Gönderim içeriğinin metin biçimi';
$string['privacy:metadata:submissiongrade'] = '0..100 aralığından ondalık sayı olarak yazılan gönderim için toplulaştırılmış not';
$string['privacy:metadata:submissiongradeover'] = 'Toplulaştırılmış notun manuel olarak geçersiz kılınan değeri';
$string['privacy:metadata:submissionid'] = 'Gönderi Kimliği';
$string['privacy:metadata:submissiontitle'] = 'Gönderinin başlığı';
$string['privacy:metadata:subsystem:corefiles'] = 'Atölye modülü, gönderim metnine gömülü / ekli dosyaları saklar';
$string['privacy:metadata:subsystem:coreplagiarism'] = 'Atölye modülü, intihal önleme sistemleri için yerleşik desteğe sahiptir';
$string['privacy:metadata:timeaggregated'] = 'Toplulaştırılış not en son hesaplandığında';
$string['privacy:metadata:timecreated'] = 'Bu kayıt veritabanında oluşturulduğunda';
$string['privacy:metadata:timemodified'] = 'Bu kayıt veritabanında en son değiştirildiğinde';
$string['privacy:metadata:userid'] = 'Toplu notun hesaplandığı kullanıcının kimliği';
$string['privacy:metadata:weight'] = 'Değerlendirmenin ağırlığı';
$string['privacy:metadata:workshopaggregations'] = 'Holds information about allocated assessments of workshop module submissions';
$string['privacy:metadata:workshopassessments'] = 'Çalıştay modülü gönderimlerinin dağıtımı yapılan değerlendirmeleri hakkında bilgi tutar';
$string['privacy:metadata:workshopgrades'] = 'Değerlendirme formlarının notlar ve yorumlarla nasıl doldurulduğu hakkında bilgi içerir.';
$string['privacy:metadata:workshopid'] = 'Çalıştay etkinliğinin kimliği';
$string['privacy:metadata:workshopsubmissions'] = 'Atölye modül başvuruları hakkında bilgi saklar';
$string['privacy:request:delete:content'] = 'İçerik silindi (kullanıcı tarafından talep edildi veya süresi doldu)';
$string['privacy:request:delete:title'] = '[Silindi]';
$string['publishedsubmissions'] = 'Yayınlanan gönderimler';
$string['publishsubmission'] = 'Yayınlanan gönderim';
$string['publishsubmission_help'] = 'Yayınlanan gönderimler, çalıştay kapatıldığında diğerleri tarafından kullanılabilir.';
$string['reassess'] = 'Yeniden değerlendir';
$string['receivedgrades'] = 'Alınan notlar';
$string['recentassessments'] = 'Çalıştay değerlendirmeleri:';
$string['recentsubmissions'] = 'Çalıştay gönderimleri:';
$string['resetassessments'] = 'Tüm gönderileri sil';
$string['resetassessments_help'] = 'Gönderimleri etkilemeden sadece paylaştırılan değerlendirmeleri silmeyi seçebilirsiniz. Gönderimler silinirse, değerlendirmeleri dolaylı olarak silinir ve bu seçenek dikkate alınmaz. Bunun örnek gönderimlerin değerlendirmelerini de içerdiğini unutmayın.';
$string['resetphase'] = 'Kurulum aşamasına geç';
$string['resetphase_help'] = 'Etkinleştirilirse, tüm çalıştaylar ilk kurulum aşamasına geçirilir.';
$string['resetsubmissions'] = 'Tüm gönderimleri sil';
$string['resetsubmissions_help'] = 'Tüm gönderimler ve değerlendirmeleri silinecek. Bu, örnek gönderimleri etkilemez.';
$string['saveandclose'] = 'Kaydet ve kapat';
$string['saveandcontinue'] = 'Kaydet ve düzenlemeye devam et';
$string['saveandpreview'] = 'Kaydet ve önizleme yap';
$string['saveandshownext'] = 'Kaydet ve sonrakini göster';
$string['search:activity'] = 'Çalıştay - etkinlik bilgileri';
$string['selfassessmentdisabled'] = 'Öz değerlendirme devre dışı';
$string['showingperpage'] = 'Sayfada {$a} öğe gösteriliyor';
$string['showingperpagechange'] = 'Değiştir ...';
$string['someuserswosubmission'] = 'Henüz işlerini göndermeyen en az bir yazar var';
$string['sortasc'] = 'Artan sıralama';
$string['sortdesc'] = 'Azalan sıralama';
$string['strategy'] = 'Puanlama stratejisi';
$string['strategy_help'] = 'Puanlama stratejisi, kullanılan değerlendirme formunu ve ödevlere not verme yöntemini belirler. 4 seçenek var:

* Genel Ortalama puanlaması- Belirtilen yönler hakkında yorumlar ve not verilir
* Yorumlama - Belirtilen yönler hakkında yorumlar yapılır ancak not verilemez
* Hata sayısı - Belirtilen iddialarla ilgili yorumlar ve evet/hayır değerlendirmesi yapılmaktadır.
* Rubrik - Belirtilen kriterlere ilişkin seviye değerlendirmesi yapılır';
$string['strategyhaschanged'] = 'Çalıştay puanlama stratejisi, form düzenleme için açıldığından beri değişti.';
$string['submission'] = 'Gönderim';
$string['submissionattachment'] = 'Ek dosya';
$string['submissionby'] = '{$a} tarafından gönderim';
$string['submissioncontent'] = 'Gönderim içeriği';
$string['submissiondeleteconfirm'] = 'Aşağıdaki gönderimi silmek istediğinizden emin misiniz?';
$string['submissiondeleteconfirmassess'] = 'Aşağıdaki gönderimi silmek istediğinizden emin misiniz? Ayrıca, bu gönderimle ilişkili {$a->count} değerlendirmeleri de silecektir ve bu da gözden geçirenlerin notlarını etkileyebilir.';
$string['submissionend'] = 'Gönderim son teslim tarihi';
$string['submissionendbeforestart'] = 'Gönderimler için son tarih, açık başvuru tarihinden önce belirtilemez';
$string['submissionenddatetime'] = 'Son başvuru tarihi: {$a->daydatetime} ({$a->distanceday})';
$string['submissionendevent'] = 'Gönderimler için {$a} son tarih';
$string['submissionendswitch'] = 'Son teslim tarihinden sonra bir sonraki aşamaya geçin.';
$string['submissionendswitch_help'] = 'Son gönderim tarihi belirtilmiş ve bu kutu işaretliyse, çalıştay son gönderim tarihinden sonra otomatik olarak değerlendirme aşamasına geçecektir.

Bu özelliği etkinleştirirseniz, zamanlanmış dağıtım yöntemini de ayarlamanız önerilir. Gönderimlerin dağıtılmaması durumunda, çalıştayın kendisi değerlendirme aşamasında olsa bile hiçbir değerlendirme yapılamaz.';
$string['submissiongrade'] = 'Gönderim için not';
$string['submissiongrade_help'] = 'Bu ayar, gönderilen iş için elde edilebilecek maksimum notu belirtir.';
$string['submissiongradeof'] = 'Gönderim için not ({$a} \'nın)';
$string['submissionlastmodified'] = 'Son düzenleme';
$string['submissionrequiredcontent'] = 'Bir miktar metin girmeniz veya dosya eklemeniz gerekiyor';
$string['submissionrequiredfile'] = 'Bir dosya eklemeniz ve bir miktar metin girmeniz gerekiyor';
$string['submissionsallocation'] = 'Gönderim dağıtımı';
$string['submissionsettings'] = 'Gönderim ayarları';
$string['submissionsreport'] = 'Çalıştay başvuruları raporu';
$string['submissionstart'] = 'Gönderimlerin başlangıcı';
$string['submissionstartdatetime'] = 'Gönderim Başlangıcı {$a->daydatetime} ({$a->distanceday})';
$string['submissionstartevent'] = '{$a} başvurular için açıldı';
$string['submissiontitle'] = 'Başlık';
$string['submissiontypedisabled'] = 'Bu başvuru türü bu çalıştay için devre dışı bırakılmıştır.';
$string['submissiontypefileavailable'] = 'Dosya eki<span class="accesshide"> mevcut</span>';
$string['submissiontypefilerequired'] = '<span class=\'accesshide\'>Dosya eki </span> Gerekli';
$string['submissiontypes'] = 'Gönderim türü';
$string['submissiontypetextavailable'] = 'Çevrimiçi metin<span class="accesshide"> mevcut</span>';
$string['submissiontypetextrequired'] = '<span class=\'accesshide\'>Çevrimiçi metin <\\/span> Gerekli';
$string['submittednotsubmitted'] = 'Gönderildi ({$a->submitted}) / gönderilmedi ({$a->notsubmitted})';
$string['subplugintype_workshopallocation'] = 'Gönderim paylaştırma yöntemi';
$string['subplugintype_workshopallocation_plural'] = 'Gönderim paylaştırma yöntemleri';
$string['subplugintype_workshopeval'] = 'Değerlendirmenin puanlanma yönnetmi';
$string['subplugintype_workshopeval_plural'] = 'Değerlendirmenini puanlalama yöntemi';
$string['subplugintype_workshopform'] = 'Puanlama stratejisi';
$string['subplugintype_workshopform_plural'] = 'Puanlama stratejileri';
$string['switchingphase'] = 'Değişim aşaması';
$string['switchphase'] = 'Değişim aşaması';
$string['switchphase10'] = 'Kurulum aşamasına geç';
$string['switchphase10info'] = 'Çalıştayı <strong> Kurulum aşamasına </strong> geçirmek üzeresiniz. Bu aşamada, kullanıcılar ödev veya değerlendirmelerinde değişiklik yapamazlar. Öğretmenler, bu aşamayı çalıştay ayarlarını değiştirmek, puanlama stratejisini değiştirmek veya değerlendirme formlarını değiştirmek için kullanabilirler.';
$string['switchphase20'] = 'Gönderim aşamasına geç';
$string['switchphase20info'] = 'Çalıştay <strong> Gönderi Aşamasına </strong> geçirmek üzeresiniz. Öğrenciler, bu aşamada çalışmalarını gönderebilirler (belirlenirse, gönderim erişim kontrol tarihleri dahilinde). Öğretmenler, akran değerlendirmesi için dağıtım yapabilir.';
$string['switchphase30'] = 'Not verme aşamasına geç';
$string['switchphase30auto'] = 'Çalıştay, daha sonra değerlendirme aşamasına otomatik olarak geçecektir.';
$string['switchphase30info'] = 'Çalıştayı <strong>Değerlendirme aşamasına</strong> geçirmek üzeresiniz. Bu aşamada, hakemler kendilerine atanan başvuruları değerlendirebilirler (eğer belirlenmişse, değerlendirme erişim kontrol tarihleri dahilinde).';
$string['switchphase40'] = 'Değerlendirme aşamasına geç';
$string['switchphase40info'] = 'Çalıştay <strong> Değerlendirmenin puanlanması aşamasına </strong> geçirmek üzeresiniz. Bu aşamada, kullanıcılar gönderimlerinde veya değerlendirmelerinde değişiklik yapamazlar. Öğretmenler not vermeyi değerlendirme araçlarını kullanarak final notlarını hesaplayabilir ve gözden geçirenlere geribildirim sağlayabilir.';
$string['switchphase50'] = 'Çalıştayı bitir';
$string['switchphase50info'] = 'Çalıştayı kapatmak üzeresin. Bu, not defterinde hesaplanan notların görünmesine neden olacaktır. Öğrenciler, gönderimlerini ve gönderim değerlendirmelerini görebilir';
$string['switchphaseauto'] = 'Aşama planlandı';
$string['switchphasenext'] = 'Bir sonraki aşamaya geç';
$string['taskassesspeers'] = 'Akranları değerlendir';
$string['taskassesspeersdetails'] = 'toplam: {$a->total}<br />beklemede: {$a->todo}';
$string['taskassessself'] = 'Kendinizi değerlendirin';
$string['taskconclusion'] = 'Etkinliğin sonucunu sağlayın';
$string['taskdone'] = 'Görev tamamlandı';
$string['taskfail'] = 'Görev başarısız';
$string['taskinfo'] = 'Görev bilgisi';
$string['taskinstructauthors'] = 'Gönderimler için yönergeleri belirleyin';
$string['taskinstructreviewers'] = 'Değerlendirme için yönergelerinizi belirleyin';
$string['taskintro'] = 'Çalıştay açıklamasını ayarlayın';
$string['tasksubmit'] = 'Çalışmanızı gönderin';
$string['tasktodo'] = 'Yapılması gereken görev';
$string['toolbox'] = 'Çalıştay araç kutusu';
$string['undersetup'] = 'Çalıştay şu anda kuruluyor. Lütfen bir sonraki aşamaya geçene kadar bekleyin.';
$string['useexamples'] = 'Örnekleri kullan';
$string['useexamples_desc'] = 'Örnek gönderimleri, değerlendirmede uygulama için sağlanmıştır.';
$string['useexamples_help'] = 'Etkinleştirilirse, kullanıcılar bir veya daha fazla örnek gönderimi değerlendirmeyi deneyebilir ve değerlendirmelerini bir referans değerlendirmesi ile karşılaştırabilirler. Not, değerlendirme notundan sayılmaz.';
$string['usepeerassessment'] = 'Akran değerlendirmesi kullanın';
$string['usepeerassessment_desc'] = 'Öğrenciler başkalarının çalışmalarını değerlendirebilir';
$string['usepeerassessment_help'] = 'Etkinleştirilirse, bir kullanıcıya değerlendirmek üzere diğer kullanıcıların gönderimleri atanabilir ve kendi gönderimi için bir nota ek olarak değerlendirme için bir not alır.';
$string['userdatecreated'] = '<span>{$a}</span> gönderildi';
$string['userdatemodified'] = '<span>{$a}</span> değiştirildi';
$string['userplan'] = 'Çalıştay plancısı';
$string['userplan_help'] = 'Çalıştay planlayıcısı, etkinliğin tüm aşamalarını görüntüler ve her aşama için görevleri listeler. Geçerli aşama vurgulanır ve görev tamamlama işareti bir işaret ile gösterilir.';
$string['userplanaccessibilityskip'] = 'Geçerli görevlere atla';
$string['userplanaccessibilitytitle'] = '{$a} çalıştay zaman çizelgesi aşaması';
$string['userplancurrentphase'] = 'Geçerli aşama';
$string['useselfassessment'] = 'Öz değerlendirme kullanın';
$string['useselfassessment_desc'] = 'Öğrenciler kendi çalışmalarını değerlendirebilir';
$string['useselfassessment_help'] = 'Etkinleştirilirse, bir kullanıcıya değerlendirmek üzere kendi gönderimi atananabilir ve kendi gönderimi için bir nota ek olarak değerlendirme için de bir not alır.';
$string['viewworkshopsummary'] = 'Çalıştay Özetini Görüntüle';
$string['weightinfo'] = 'Ağırlık :{$a}';
$string['withoutsubmission'] = 'Kendi gönderisi olmayan İncelemeci';
$string['workshop:addinstance'] = 'Yeni çalıştay ekle';
$string['workshop:allocate'] = 'Gönderimi İncelemecilere ata';
$string['workshop:deletesubmissions'] = 'Gönderimleri sil';
$string['workshop:editdimensions'] = 'Değerlendirme formlarını düzenleme';
$string['workshop:exportsubmissions'] = 'Gönderimleri dışa aktar';
$string['workshop:ignoredeadlines'] = 'Zaman kısıtlamalarını yoksay';
$string['workshop:manageexamples'] = 'Örnek gönderileri yönetin';
$string['workshop:overridegrades'] = 'Hesaplanan notları geçersiz kıl';
$string['workshop:peerassess'] = 'Bilirkişi değerlendirmesi';
$string['workshop:publishsubmissions'] = 'Gönderimleri yayınla';
$string['workshop:submit'] = 'Gönder';
$string['workshop:switchphase'] = 'anahtar aşaması';
$string['workshop:view'] = 'Çalıştay görüntüle';
$string['workshop:viewallassessments'] = 'Tüm değerlendirmeleri görüntüle';
$string['workshop:viewallsubmissions'] = 'Tüm göderimleri görüntüle';
$string['workshop:viewauthornames'] = 'Yazar isimlerini görüntüle';
$string['workshop:viewauthorpublished'] = 'Yayınlanan gönderimlerin yazarlarını görüntüle';
$string['workshop:viewpublishedsubmissions'] = 'Yayınlanan gönderimleri görüntüle';
$string['workshop:viewreviewernames'] = 'İncelemeci isimlerini görüntüle';
$string['workshopname'] = 'Çalıştay adı';
$string['yourassessmentfor'] = '{$a} için değerlendirmeniz';
$string['yourgrades'] = 'Sizin Notunuz';
$string['yoursubmission'] = 'Gönderimleriniz';
$string['yoursubmissionwithassessments'] = 'Değerlendirmelerle birlikte gönderiminiz';
