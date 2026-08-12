@extends('layouts.app')

@section('content')
    <!-- ═══════════════════ PAGE: ADD ═══ -->
    <div id="page-add" style="padding: 10px">
        <div class="page-header " style="padding: 5px">
            إضافة موظف جديد
            <h1>أدخل جميع المعلومات المطلوبة لتسجيل موظف جديد في النظام</h1>
            @if (  session()->has('success') )
              <div class="alert mt-4 alert-success text-center">  {{ session("success")  }} </div>
            @endif
        </div>

        {{-- <div class="progress-steps">
            <div class="step active" id="step1" onclick="goStep(1)">
                <div class="step-num">1</div>
                <div class="step-info">
                    <div class="step-title">المعلومات الشخصية</div>
                    <div class="step-sub">البيانات الأساسية</div>
                </div>
            </div>
            <div class="step" id="step2" onclick="goStep(2)">
                <div class="step-num">2</div>
                <div class="step-info">
                    <div class="step-title">بيانات العمل</div>
                    <div class="step-sub">القسم والمنصب</div>
                </div>
            </div>
            <div class="step" id="step3" onclick="goStep(3)">
                <div class="step-num">3</div>
                <div class="step-info">
                    <div class="step-title">الراتب والمزايا</div>
                    <div class="step-sub">التفاصيل المالية</div>
                </div>
            </div>

        </div> --}}

@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0 list-style-none " >
            @foreach ($errors->all() as $error)
                <li class=" text-center p-0" >{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        <form action="{{ route('employees.store') }}" enctype="multipart/form-data" method="POST">
            @csrf

            <div class="form-layout">
                <div class="form-card">
                    <div class="form-section-title">🧑 المعلومات الشخصية الأساسية</div>
                    <div class="form-row">
                        <div class="form-group"><label class="form-label">الاسم <span
                                    class="required">*</span></label><input class="form-input" name="prenom"
                                type="text" value="prenom test" /></div>
                        <div class="form-group"><label class="form-label"> اللقب <span class="required">*</span></label>
                            <input class="form-input" name="nom" type="text" value="nom test" />
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group"><label class="form-label"> فصيلة الدم <span
                                    class="required">*</span></label>
                            <select class="form-select" name="groupe_sanguin" required="">
                                <option value=""></option>
                                <option value="A+" selected>A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                            </select>
                        </div>
                        <div class="form-group"><label class="form-label">رقم الضمان الاجتماعي <span
                                    class="required">*</span></label>
                            <input class="form-input" name="num_sc" type="number"  min="0"  value="num secu soc 56454" />
                        </div>
                    </div>
                    <div class="form-section-title"> </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label"> تاريخ الميلاد
                                <span class="required">*</span>
                            </label>
                            <input class="form-input" name="date_n" type="date" value="1999-05-02" />
                        </div>
                        <div class="form-group"><label class="form-label"> مكان الميلاد <span
                                    class="required">*</span></label>
                            <input class="form-input" dir="ltr" name="lieu_n" placeholder="الجزائر العاصمة"
                                type="text" value="alg" />
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label"> ولاية الميلاد
                                <span class="required">*</span>
                            </label>
                            <select class="form-select" name="wilaya_n" required="">
                                <option value=""></option>
                                <option value="الجزائر">الجزائر</option>
                                <option value="وهران" selected>وهران</option>
                                <option value="قسنطينة">قسنطينة</option>
                                <option value="عنابة">عنابة</option>
                                <option value="سطيف">سطيف</option>
                                <option value="تيزي وزو">تيزي وزو</option>
                                <option value="البليدة">البليدة</option>
                                <option value="باتنة">باتنة</option>
                                <option value="بجاية">بجاية</option>
                                <option value="برج بوعريريج">برج بوعريريج</option>
                                <option value="المسيلة">المسيلة</option>
                                <option value="تلمسان">تلمسان</option>
                                <option value="مستغانم">مستغانم</option>
                                <option value="سيدي بلعباس">سيدي بلعباس</option>
                                <option value="بسكرة">بسكرة</option>
                                <option value="الأغواط">الأغواط</option>
                                <option value="غليزان">غليزان</option>
                                <option value="تيارت">تيارت</option>
                                <option value="المدية">المدية</option>
                                <option value="جيجل">جيجل</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">الجنس</label>
                            <select class="form-select" name="sexe">
                                <option value=""></option>
                                <option value="1" selected >ذكر</option>
                                <option value="0" >أنثى</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-section-title"> </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label"> رقم بطاقة التعريف
                                <span class="required">*</span>
                            </label>
                            <input class="form-input" dir="ltr" name="n_carte_n" placeholder="xxxxxxxxxxxx"
                                required="" type="number" value="11114" />
                        </div>
                        <div class="form-group"><label class="form-label"> تاريخ الإصدار <span
                                    class="required">*</span></label>
                            <input class="form-input" name="date_sortie" type="date" value="2000-05-02" />
                        </div>
                        <div class="form-group"><label class="form-label"> تاريخ الانتهاء <span
                                    class="required">*</span></label>
                            <input class="form-input" name="date_fin" type="date" value="2010-05-02" />
                        </div>
                        <div class="form-group"><label class="form-label"> الرقم التعريفي الوطني (NIN) <span
                                    class="required">*</span></label>
                            <input class="form-input" dir="ltr" name="nin" placeholder="XXXXXXXXXX"
                                required="" type="text" inputmode="numeric" value="2577777" />
                        </div>
                    </div>
                </div>
                <div class="form-card">
                    <div class="form-section-title"> 📞 معلومات الاتصال </div>
                    {{-- <div class="upload-box" onclick="this.querySelector('input').click()">
                    <div class="upload-icon">🖼️</div>
                    <div class="upload-text">اسحب وأفلت الصورة هنا</div>
                    <div class="upload-sub">أو انقر للاختيار من جهازك</div>
                    <div class="upload-sub" style="margin-top:4px">JPG, PNG — الحد الأقصى 5 ميجابايت</div>
                    <input accept="image/*" name="" style="display:none" type="file"/>
                    </div> --}}

                    <div class="form-group" style="margin-bottom: 10px"><label class="form-label">العنوان الكامل</label>
                        <textarea class="form-textarea" name="adresse" placeholder="الولاية، البلدية، الشارع..."></textarea>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">البريد الإلكتروني
                                <span class="required">*</span>
                            </label>
                            <input class="form-input" dir="ltr" name="email" placeholder="ahmed@company.com"
                                required="" type="email" value="f@gmail.com" />
                        </div>
                        <div class="form-group"><label class="form-label">رقم الهاتف <span
                                    class="required">*</span></label>
                            <input class="form-input" dir="ltr" name="num_tlf" placeholder="0xxx xx xx xx"
                                required="" type="tel" value="02144556" />
                        </div>
                        <div class="form-group">
                            <label class="form-label">
                                اسم شخص الاتصال في حالة الطوارئ
                                <span class="required">*</span>
                            </label>
                            <input class="form-input" dir="ltr" name="nom_urgence_call" required="" type="text"  value="hbb mom" />
                        </div>
                        <div class="form-group">
                            <label class="form-label"> هاتف الطوارئ<span class="required">*</span></label>
                            <input class="form-input" dir="ltr" name="num_urgence_call" placeholder="0xxx xx xx xx"
                                required="" type="tel"  value="04144556"  />
                        </div>
                        <div class="form-group">
                            <label class="form-label"> صلة القرابة <span class="required">*</span></label>
                            <select class="form-select" name="type_connaisance">
                                <option value=""> </option>
                                <option value="زوج/ة">زوج/ة</option>
                                <option value="أب">أب</option>
                                <option value="أم" selected>أم</option>
                                <option value="أخ">أخ</option>
                                <option value="أخت">أخت</option>
                                <option value="ابن">ابن</option>
                                <option value="ابنة">ابنة</option>
                                <option value="صديق">صديق</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-card">
                    <div class="form-section-title">👨‍👩‍👧 الحالة العائلية</div>
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label"> الحالة العائلية </label>
                            <select class="form-select" name="statu_familial">
                                <option value=""></option>
                                <option value="أعزب/ة" selected>أعزب/ة</option>
                                <option value="متزوج/ة">متزوج/ة</option>
                                <option value="مطلق/ة">مطلق/ة</option>
                                <option value="أرمل/ة">أرمل/ة</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label"> تاريخ الزواج <span class="required">*</span></label>
                            <input class="form-input" name="date_mariage" type="date"  />
                        </div>
                        <div class="form-group">
                            <label class="form-label"> اسم الزوج/الزوجة <span class="required">*</span></label>
                            <input class="form-input" dir="ltr" name="nom_conjoint" type="text" />
                        </div>
                        <div class="form-group">
                            <label class="form-label"> مهنة الزوج/الزوجة <span class="required">*</span></label>
                            <input class="form-input" dir="ltr" name="profession_conjoint" type="text" />
                        </div>
                        <div class="form-group">
                            <label class="form-label"> عدد الأطفال <span class="required">*</span></label>
                            <input class="form-input" dir="ltr" name="nb_enfants" type="number" />
                        </div>
                        <div class="form-group">
                            <label class="form-label"> عدد الأشخاص المعالين <span class="required">*</span></label>
                            <input class="form-input" dir="ltr" name="nb_assure" type="number" />
                        </div>
                        <div>
                            <label class="form-label">ابن شهيد <span class="required">*</span> </label>
                            <select class="form-select" name="fils_chahid">
                                <option value=""> </option>
                                <option value="0"> لا</option>
                                <option value="1"> نعم </option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="form-card">
                    <div class="form-section-title"> 🏢 الموقع الإداري </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label"> الرقم التسلسلي</label>
                            <input class="form-input" dir="ltr" name="matricule" type="text" />
                        </div>
                        <div class="form-group">
                            <label class="form-label"> رقم الملف <span class="required">*</span></label>
                            <input class="form-input" dir="ltr" name="num_dossier" type="text" />
                        </div>
                        <div class="form-group">
                            <label class="form-label"> المديرية العامة<span class="required">*</span></label>
                            <select class="form-select" name="direction_general">
                                <option value=""></option>
                                <option value="المديرية العامة للتشريع">المديرية العامة للتشريع</option>
                                <option value="المديرية العامة للإدارة والمالية والوسائل">
                                    المديرية العامة للإدارة والمالية
                                    والوسائل</option>
                                <option value="الأمانة العامة">الأمانة العامة</option>
                                <option value="الديوان">الديوان </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label"> المديرية / المصلحة <span class="required">*</span></label>
                            <select class="form-select" name="direction">
                                <option value=""></option>
                                <option value="مديرية البحوث والدراسات التشريعية والمكتبة والتكوين البرلماني">مديرية البحوث
                                    والدراسات التشريعية والمكتبة والتكوين البرلماني</option>
                                <option value="مديرية الأرشيف البرلماني">مديرية الأرشيف البرلماني</option>
                                <option value="مديرية المحاضر والجريدة الرسمية للمناقشات">
                                    مديرية المحاضر والجريدة الرسمية للمناقشات</option>
                                <option value="مديرية الجلسات العامة والمبادرات البرلمانية والتشريعية">مديرية الجلسات
                                    العامة والمبادرات البرلمانية والتشريعية</option>
                                <option value="مديرية اللجان الدائمة">مديرية اللجان الدائمة</option>
                                <option value="مديرية الإعلام الآلي">مديرية الإعلام الآلي</option>
                                <option value="مديرية الميزانية والمحاسبة">مديرية الميزانية والمحاسبة</option>
                                <option value="مديرية المصالح التقنية">مديرية المصالح التقنية</option>
                                <option value="مديرية الوسائل العامة">مديرية الوسائل العامة</option>
                                <option value="مديرية الموارد البشرية والشؤون الاجتماعية">
                                    مديرية الموارد البشرية والشؤون الاجتماعية</option>
                                <option value="أمانة مكتب المجلس">أمانة مكتب المجلس</option>
                                <option value="أمانة المراقبين الماليين">أمانة المراقبين الماليين</option>
                                <option value="خلية الوقاية والأمن">خلية الوقاية والأمن</option>
                                <option value="خلية الرقمنة والعصرنة">خلية الرقمنة والعصرنة</option>
                                <option value="مكتب التأشيرات">مكتب التأشيرات</option>
                                <option value="مديرية شؤون النواب">مديرية شؤون النواب</option>
                                <option value="مديرية التشريفات والعلاقات العامة">مديرية التشريفات والعلاقات العامة
                                </option>
                                <option value="الأمانة الخاصة للرئيس">الأمانة الخاصة للرئيس</option>
                                <option value="مستشارو الرئيس">مستشارو الرئيس</option>
                                <option value="مكتب تشريفات رئيس المجلس">مكتب تشريفات رئيس المجلس</option>
                                <option value="مكتب التنظيم العام">مكتب التنظيم العام</option>
                                <option value="مديرية الإعلام والاتصال والنشر">مديرية الإعلام والاتصال والنشر</option>
                                <option value="مديرية العلاقات الدولية والتعاون">مديرية العلاقات الدولية والتعاون</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label"> المكتب <span class="required">*</span></label>
                            <input class="form-input" dir="ltr" name="bureau" type="text" />
                        </div>
                        <div class="form-group">
                            <label class="form-label"> المنصب الوظيفي <span class="required">*</span></label>
                            <input class="form-input" dir="ltr" name="mansib" type="text" />
                        </div>

                        {{--  --}}

                        <div class="form-group">
                            <label class="form-label"> نوع المنصب <span class="required">*</span></label>
                            <select class="form-select" name="type_mansib">
                                <option value=""> </option>
                                <option value="عادي">عادي</option>
                                <option value="عالٍ">عالٍ</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label"> نوع العقد <span class="required">*</span></label>
                            <select class="form-select" name="type_contrat">
                                <option value=""> </option>
                                <option value="دائم">دائم</option>
                                <option value="مؤقت">مؤقت</option>
                                <option value="متعاقد">متعاقد</option>
                                <option value="متربص">متربص</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label"> الوضعية <span class="required">*</span></label>
                            <select class="form-select" name="etat_emp">
                                <option value=""> </option>
                                <option value="نشط">نشط</option>
                                <option value="مُعار">مُعار</option>
                                <option value="موقوف">موقوف</option>
                                <option value="في إجازة طويلة">في إجازة طويلة</option>
                                <option value="متقاعد">متقاعد</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label"> المجموعة <span class="required">*</span></label>
                            <select class="form-select" name="groupe">
                                <option value=""> </option>
                                <option value="أ">أ</option>
                                <option value="ب">ب</option>
                                <option value="ج">ج</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label"> الصنف <span class="required">*</span></label>
                            <input class="form-input" dir="ltr" name="sinf" type="text" />
                        </div>
                        <div class="form-group"><label class="form-label">وصف المهام</label>
                            <textarea class="form-textarea" name="desc_mission" placeholder="أبرز المهام والمسؤوليات..."></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-card">
                    <div class="form-section-title"> 📅 المسار التوظيفي</div>
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label"> تاريخ أول تعيين </label>
                            <input class="form-input" name="date_first_emp" type="date" />
                        </div>
                        <div class="form-group">
                            <label class="form-label"> أول مؤسسة </label>
                            <input class="form-input" name="first_organisme" type="text" />
                        </div>
                        <div class="form-group">
                            <label class="form-label"> تاريخ الالتحاق بالمجلس </label>
                            <input class="form-input" name="date_rej_apn" type="date" />
                        </div>
                        <div class="form-group">
                            <label class="form-label"> رتبة التعيين </label>
                            <input class="form-input" name="rotba" type="text" />
                        </div>
                        <div class="form-group">
                            <label class="form-label"> تاريخ الترسيم </label>
                            <input class="form-input" name="date_tarsim" type="date" />
                        </div>
                        <div class="form-group">
                            <label class="form-label"> رتبة الترسيم </label>
                            <input class="form-input" name="rotbat_tarsim" type="text" />
                        </div>
                        <div class="form-group">
                            <label class="form-label"> الرتبة الحالية </label>
                            <input class="form-input" name="rotba_haliya" type="text" />
                        </div>
                        <div class="form-group">
                            <label class="form-label"> تاريخ الرتبة الحالية </label>
                            <input class="form-input" name="date_rotba_haliya" type="date" />
                        </div>
                        <div class="form-group">
                            <label class="form-label"> الدرجة الحالية </label>
                            <select class="form-select" name="darajat_rotba_haliya">
                                <option value=""></option>
                                <option value="أ+">أ+</option>
                                <option value="أ">أ</option>
                                <option value="ب+">ب+</option>
                                <option value="ب">ب</option>
                                <option value="ج+">ج+</option>
                                <option value="ج">ج</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label"> تاريخ الدرجة الحالية </label>
                            <input class="form-input" name="date_daraja_haliya" type="date" />
                        </div>
                        <div class="form-group">
                            <label class="form-label"> أقدمية الرتبة (شهر) </label>
                            <input class="form-input" min="1" name="anciente_rotba_mois" type="number" />
                        </div>
                        <div class="form-group">
                            <label class="form-label"> الأقدمية الإجمالية (سنة) </label>
                            <input class="form-input" min="1" name="anciente_generale_annee" type="number" />
                        </div>
                    </div>
                </div>
                <div class="form-card">
                    <div class="form-section-title"> 🎓 المؤهلات العلمية </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label"> المستوى الدراسي </label>
                            <select class="form-select" name="niv_etude">
                                <option value=""></option>
                                <option value="ابتدائي">ابتدائي</option>
                                <option value="متوسط">متوسط</option>
                                <option value="ثانوي">ثانوي</option>
                                <option value="جامعي">جامعي</option>
                                <option value="دراسات عليا">دراسات عليا</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label"> الشهادة </label>
                            <input class="form-input" name="diplome_etude" type="text" />
                        </div>
                        <div class="form-group">
                            <label class="form-label"> التخصص </label>
                            <input class="form-input" name="specialité_etude" type="text" />
                        </div>
                        <div class="form-group">
                            <label class="form-label"> تاريخ الشهادة </label>
                            <input class="form-input" name="date_diplome_etude" type="date" />
                        </div>
                        <div class="form-group">
                            <label class="form-label"> مؤسسة التخرج </label>
                            <input class="form-input" name="organisme_etude" type="text" />
                        </div>
                        <div class="form-group">
                            <label class="form-label">بلد التخرج</label>
                            <input class="form-input" name="pay_takharoj_etude" type="text" value="الجزائر" />
                        </div>
                    </div>
                    <div class="form-section-title"> 📚 الدورات التكوينية </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label"> موضوع الدورة </label>
                            <input class="form-input" name="sujet_dawra" type="text" />
                        </div>
                        <div class="form-group">
                            <label class="form-label"> الجهة المنظمة </label>
                            <input class="form-input" name="jiha_monadima_dawra" type="text" />
                        </div>
                        <div class="form-group">
                            <label class="form-label"> التاريخ </label>
                            <input class="form-input" name="date_dawra" type="date" />
                        </div>
                        <div class="form-group">
                            <label class="form-label"> المدة </label>
                            <input class="form-input" name="duree_dawra" type="text" />
                        </div>
                        <div class="form-group">
                            <label class="form-label"> شهادة </label>
                            <input class="form-input" name="diplome_dawra" type="text" />
                        </div>
                    </div>
                </div>
                <div class="form-card">
                    <div class="form-section-title"> 🌐 اللغات </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label"> مستوى العربية </label>
                            <select class="form-select" name="niv_arab">
                                <option value=""> </option>
                                <option value="لا شيء">لا شيء</option>
                                <option value="مبتدئ">مبتدئ</option>
                                <option value="متوسط">متوسط</option>
                                <option value="جيد">جيد</option>
                                <option value="جيد جداً">جيد جداً</option>
                                <option value="ممتاز">ممتاز</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label"> مستوى الفرنسية </label>
                            <select class="form-select" name="niv_fr">
                                <option value=""> </option>
                                <option value="لا شيء">لا شيء</option>
                                <option value="مبتدئ">مبتدئ</option>
                                <option value="متوسط">متوسط</option>
                                <option value="جيد">جيد</option>
                                <option value="جيد جداً">جيد جداً</option>
                                <option value="ممتاز">ممتاز</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label"> مستوى الإنجليزية </label>
                            <select class="form-select" name="niv_eng">
                                <option value=""> </option>
                                <option value="لا شيء">لا شيء</option>
                                <option value="مبتدئ">مبتدئ</option>
                                <option value="متوسط">متوسط</option>
                                <option value="جيد">جيد</option>
                                <option value="جيد جداً">جيد جداً</option>
                                <option value="ممتاز">ممتاز</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label"> مستوى الأمازيغية </label>
                            <select class="form-select" name="niv_kabyle">
                                <option value=""> </option>
                                <option value="لا شيء">لا شيء</option>
                                <option value="مبتدئ">مبتدئ</option>
                                <option value="متوسط">متوسط</option>
                                <option value="جيد">جيد</option>
                                <option value="جيد جداً">جيد جداً</option>
                                <option value="ممتاز">ممتاز</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label"> لغات أخرى </label>
                            <input class="form-input" name="autre_langue" type="text" />
                        </div>
                    </div>
                </div>
                <div class="form-card">
                    <div class="form-section-title"> 🎖 الخدمة الوطنية والوضع الأمني </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">وضع الخدمة الوطنية</label>
                            <select class="form-select" name="statut_service_m">
                                <option value=""> </option>
                                <option value="أدّاها">أدّاها</option>
                                <option value="معفى طبياً">معفى طبياً</option>
                                <option value="لم يبلغ السن">لم يبلغ السن</option>
                                <option value="طالب تأجيل">طالب تأجيل</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label"> فترة الخدمة الوطنية </label>
                            <input class="form-input" name="duree_service_m" type="text" />
                        </div>
                        <div class="form-group" >
                            <label class="form-label"> مستوى التصفية الأمنية </label>
                            <select class="form-select" name="niv_tasfiya_amniya" >
                                <option value=""> </option>
                                <option value="لا شيء">لا شيء</option>
                                <option value="عادي">عادي</option>
                                <option value="سري">سري</option>
                                <option value="سري للغاية">سري للغاية</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label"> سوابق قضائية </label>
                            <select class="form-select" name="sawabik_adliya">
                                <option value=""> </option>
                                <option value="1"> نعم </option>
                                <option value="0"> لا </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-section-title"> 💼 الخبرات المهنية السابقة </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label"> المنصب</label>
                            <input class="form-input" name="experience_mansib" type="text" />
                        </div>
                        <div class="form-group">
                            <label class="form-label"> المؤسسة</label>
                            <input class="form-input" name="experience_organisme" type="text" />
                        </div>
                        <div class="form-group">
                            <label class="form-label"> من</label>
                            <input class="form-input" name="experience_from_date" type="date" />
                        </div>
                        <div class="form-group">
                            <label class="form-label"> إلى</label>
                            <input class="form-input" name="experience_to_date" type="date" />
                        </div>
                        <div class="form-group">
                            <label class="form-label"> سبب المغادرة</label>
                            <input class="form-input" name="cause_depart" type="text" />
                        </div>
                    </div>
                </div>
                <div class="form-card">
                    <div class="form-section-title"> 💰 المعلومات المالية </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label"> الراتب الأساسي (دج) </label>
                            <input class="form-input" min="1" name="sallaire_base" type="number" />
                        </div>
                        <div class="form-group">
                            <label class="form-label"> منحة المنصب (دج) </label>
                            <input class="form-input" min="1" name="minhat_mansib" type="number" />
                        </div>
                        <div class="form-group">
                            <label class="form-label"> رقم الحساب البنكي (RIB) </label>
                            <input class="form-input" min="1" name="rib" type="number" />
                        </div>
                        <div class="form-group">
                            <label class="form-label"> البنك </label>
                            <input class="form-input" name="banque" type="text" />
                        </div>
                        <div class="form-group">
                            <label class="form-label"> عضو في نقابة</label>
                            <select class="form-select" name="membre_nakaba">
                                <option value=""> </option>
                                <option value="1"> نعم </option>
                                <option value="0"> لا </option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-actions p-4">
                {{-- <button class="btn-primary" id="nextBtn" onclick="nextStep()">التالي ←</button>
<button class="btn-secondary" id="prevBtn" onclick="prevStep()" style="display:none">→ السابق</button> --}}
                <button class="btn-primary" name="add_employee" type="submit">إضافة </button>
            </div>
        </form>

    </div>
@endsection
