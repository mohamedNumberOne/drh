@extends('layouts.app')

@section('content')
    <!-- ═══════════════════ PAGE: ADD ═══ -->
    <div id="page-add">
        <div class="page-header p-2">
            إضافة موظف جديد
            <h1>أدخل جميع المعلومات المطلوبة لتسجيل موظف جديد في النظام</h1>
        </div>

        <div class="progress-steps">
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

        </div>

        <!-- Step 1 -->
        <div id="stepContent1" class="form-layout">
            <div class="form-card">
                <div class="form-section-title">🧑 المعلومات الشخصية الأساسية</div>
                <div class="form-row">
                    <div class="form-group"><label class="form-label">الاسم الأول <span
                                class="required">*</span></label><input class="form-input" type="text"
                            placeholder="أحمد"></div>
                    <div class="form-group"><label class="form-label">اسم العائلة <span
                                class="required">*</span></label><input class="form-input" type="text"
                            placeholder="محمد"></div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">البريد الإلكتروني
                            <span class="required">*</span>
                        </label>
                        <input class="form-input" type="email" placeholder="ahmed@company.com" dir="ltr">
                    </div>
                    <div class="form-group"><label class="form-label">رقم الهاتف <span class="required">*</span></label>
                        <input class="form-input" type="tel" placeholder="0xxx xx xx xx" dir="ltr">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group"><label class="form-label">تاريخ الميلاد <span class="required">*</span>
                        </label>
                        <input class="form-input" type="date">
                    </div>

                    <div class="form-group"><label class="form-label">رقم الهوية NIN <span
                                class="required">*</span></label><input class="form-input" type="number" maxlength="18"
                            placeholder="XXXXXXXXXX" dir="ltr"></div>

                </div>
                <div class="form-row">

                    <div class="form-group"><label class="form-label">الجنس</label>
                        <select class="form-select">
                            <option>ذكر</option>
                            <option>أنثى</option>
                        </select>
                    </div>

                    <div class="form-group"><label class="form-label">الحالة الاجتماعية</label>
                        <select class="form-select">
                            <option>أعزب</option>
                            <option>متزوج</option>
                            <option>مطلق</option>
                            <option>أرمل</option>
                        </select>
                    </div>

                </div>
                <div class="form-row">

                    <div class="form-group"><label class="form-label">عدد الأطفال</label>
                        <input class="form-input" type="number" min="0" value="0">
                    </div>
                    <div class="form-group"><label class="form-label"> الولاية</label>
                        <select class="form-select">
                            <option>alger</option>
                            <option>oran</option>
                            <option>annaba</option>

                        </select>
                    </div>
                </div>
                <div class="form-group"><label class="form-label">العنوان الكامل</label>
                    <textarea class="form-textarea" placeholder="الولاية، البلدية، الشارع..."></textarea>
                </div>
            </div>
            <div class="form-card">
                <div class="form-section-title">📷 الصورة الشخصية</div>
                <div class="upload-box" onclick="this.querySelector('input').click()">
                    <div class="upload-icon">🖼️</div>
                    <div class="upload-text">اسحب وأفلت الصورة هنا</div>
                    <div class="upload-sub">أو انقر للاختيار من جهازك</div>
                    <div class="upload-sub" style="margin-top:4px">JPG, PNG — الحد الأقصى 5 ميجابايت</div>
                    <input type="file" accept="image/*" style="display:none">
                </div>
                <div style="margin-top:20px">
                    <div class="form-section-title">📞 جهة اتصال الطوارئ</div>
                    <div class="form-row">
                        <div class="form-group"><label class="form-label">اسم جهة الاتصال</label><input
                                class="form-input" type="text" placeholder="الاسم الكامل"></div>
                        <div class="form-group"><label class="form-label">صلة القرابة</label>
                            <select class="form-select">
                                <option>الزوج/الزوجة</option>
                                <option>الأب</option>
                                <option>الأم</option>
                                <option>الأخ/الأخت</option>
                                <option>أخرى</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group"><label class="form-label">رقم هاتف الطوارئ</label><input class="form-input"
                            type="tel" placeholder="+213 5xx xxx xxx" dir="ltr">
                    </div>
                </div>
                <div style="margin-top:20px">
                    <div class="form-section-title">🎓 المؤهل العلمي</div>
                    <div class="form-row">
                        <div class="form-group"><label class="form-label">أعلى مؤهل</label>
                            <select class="form-select">
                                <option>ثانوية</option>
                                <option>دبلوم</option>
                                <option>ليسانس</option>
                                <option>ماستر</option>
                                <option>دكتوراه</option>
                            </select>
                        </div>
                        <div class="form-group"><label class="form-label">التخصص</label><input class="form-input"
                                type="text" placeholder="إدارة أعمال..."></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Step 2 -->
        <div id="stepContent2" style="display:none">
            <div class="form-layout">
                <div class="form-card">
                    <div class="form-section-title">💼 بيانات العمل</div>
                    <div class="form-row">
                        <div class="form-group"><label class="form-label">الرقم الوظيفي</label><input class="form-input"
                                value="EMP-2026-013" dir="ltr"></div>
                        <div class="form-group"><label class="form-label">تاريخ التوظيف <span
                                    class="required">*</span></label><input class="form-input" type="date">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group"><label class="form-label">القسم <span class="required">*</span></label>
                            <select class="form-select">
                                <option value="">اختر القسم</option>
                                <option>الموارد البشرية</option>
                                <option>تقنية المعلومات</option>
                                <option>المالية</option>
                                <option>التسويق</option>
                                <option>العمليات</option>
                                <option>خدمة العملاء</option>
                                <option>القانونية</option>
                            </select>
                        </div>
                        <div class="form-group"><label class="form-label">المسمى الوظيفي <span
                                    class="required">*</span></label><input class="form-input" type="text"
                                placeholder="مهندس برمجيات"></div>
                    </div>
                    <div class="form-row">
                        <div class="form-group"><label class="form-label">المستوى الوظيفي</label>
                            <select class="form-select">
                                <option>موظف عادي</option>
                                <option>موظف أول</option>
                                <option>مشرف</option>
                                <option>مدير</option>
                                <option>مدير عام</option>
                            </select>
                        </div>
                        <div class="form-group"><label class="form-label">المدير المباشر</label>
                            <select class="form-select">
                                <option value="">اختر المدير</option>
                                <option>فاطمة الزهراني</option>
                                <option>محمد القحطاني</option>
                                <option>نورة العتيبي</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group"><label class="form-label">نوع العقد</label>
                            <select class="form-select">
                                <option>دوام كامل</option>
                                <option>دوام جزئي</option>
                                <option>عقد مؤقت</option>
                                <option>عقد محدد المدة</option>
                            </select>
                        </div>
                        <div class="form-group"><label class="form-label">مكان العمل</label>
                            <select class="form-select">
                                <option>المقر الرئيسي</option>
                                <option>فرع وهران</option>
                                <option>فرع قسنطينة</option>
                                <option>عن بُعد</option>
                                <option>هجين</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group"><label class="form-label">وصف المهام</label>
                        <textarea class="form-textarea" placeholder="أبرز المهام والمسؤوليات..."></textarea>
                    </div>
                </div>
                <div class="form-card">

                    <div class="form-section-title">📍 الحالة الوظيفية</div>
                    <div class="form-group">
                        <div class="radio-group">
                            <label class="radio-option"><input type="radio" name="empStatus" checked>
                                نشط</label>
                            <label class="radio-option"><input type="radio" name="empStatus"> تجريبي</label>
                            <label class="radio-option"><input type="radio" name="empStatus"> موقوف</label>
                        </div>
                    </div>
                    <div class="form-group" style="margin-top:14px"><label class="form-label">ملاحظات</label>
                        <textarea class="form-textarea" placeholder="أي ملاحظات..."></textarea>
                    </div>
                </div>
            </div>
        </div>

        <!-- Step 3 -->
        <div id="stepContent3" style="display:none">
            <div class="form-layout">
                <div class="form-card">
                    <div class="form-section-title">💰 الراتب والبدلات</div>
                    <div class="form-row">
                        <div class="form-group"><label class="form-label">الراتب الأساسي <span
                                    class="required">*</span></label>
                            <div class="salary-group"><span class="salary-currency">دج</span><input
                                    class="form-input salary-input" type="number" placeholder="0"></div>
                        </div>
                        <div class="form-group"><label class="form-label">العملة</label>
                            <select class="form-select">
                                <option>دينار جزائري (DZD)</option>
                                <option>يورو (EUR)</option>
                                <option>دولار (USD)</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group"><label class="form-label">بدل السكن</label>
                            <div class="salary-group"><span class="salary-currency">دج</span><input
                                    class="form-input salary-input" type="number" placeholder="0"></div>
                        </div>
                        <div class="form-group"><label class="form-label">بدل النقل</label>
                            <div class="salary-group"><span class="salary-currency">دج</span><input
                                    class="form-input salary-input" type="number" placeholder="0"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group"><label class="form-label">بدل الطعام</label>
                            <div class="salary-group"><span class="salary-currency">دج</span><input
                                    class="form-input salary-input" type="number" placeholder="0"></div>
                        </div>
                        <div class="form-group"><label class="form-label">بدل الاتصالات</label>
                            <div class="salary-group"><span class="salary-currency">دج</span><input
                                    class="form-input salary-input" type="number" placeholder="0"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group"><label class="form-label">دورية صرف الراتب</label>
                            <select class="form-select">
                                <option>شهري</option>
                                <option>نصف شهري</option>
                                <option>أسبوعي</option>
                            </select>
                        </div>
                        <div class="form-group"><label class="form-label">يوم الاستحقاق</label><input class="form-input"
                                type="number" min="1" max="31" placeholder="25" dir="ltr"></div>
                    </div>
                </div>
                <div class="form-card">
                    <div class="form-section-title">🏦 الحساب البنكي</div>
                    <div class="form-group" style="margin-bottom:12px"><label class="form-label">اسم البنك <span
                                class="required">*</span></label>
                        <select class="form-select">
                            <option value="">اختر البنك</option>
                            <option>بنك الجزائر الخارجي (BEA)</option>
                            <option>البنك الوطني الجزائري (BNA)</option>
                            <option>الصندوق الوطني للتوفير (CPA)</option>
                            <option>بنك التنمية المحلية (BDL)</option>
                        </select>
                    </div>
                    <div class="form-group" style="margin-bottom:12px"><label class="form-label">رقم الحساب / RIB
                            <span class="required">*</span></label><input class="form-input" type="text" required
                            placeholder="00000 00000 00000000000 00" dir="ltr"></div>
                    <div class="form-group" style="margin-bottom:20px"><label class="form-label">اسم صاحب
                            الحساب</label><input class="form-input" type="text" placeholder="كما في الوثائق الرسمية">
                    </div>
                    <div class="form-section-title">🏥 التأمينات والمزايا</div>
                    <div class="form-group" style="margin-bottom:12px"><label class="form-label">التأمين
                            الصحي</label>
                        <div class="radio-group">
                            <label class="radio-option"><input type="radio" name="health" checked>
                                أساسي</label>
                            <label class="radio-option"><input type="radio" name="health"> شامل</label>
                            <label class="radio-option"><input type="radio" name="health"> لا يوجد</label>
                        </div>
                    </div>
                    <div class="form-group" style="margin-bottom:12px"><label class="form-label">مزايا
                            إضافية</label>
                        <div class="check-group">
                            <label class="check-option"><input type="checkbox" checked> رحلة سنوية</label>
                            <label class="check-option"><input type="checkbox"> بدل أداء</label>
                            <label class="check-option"><input type="checkbox" checked> مكافأة نهاية خدمة</label>
                        </div>
                    </div>
                    <div class="form-group"><label class="form-label">رصيد الإجازة (أيام/سنة)</label><input
                            class="form-input" type="number" placeholder="30" dir="ltr"></div>
                </div>
            </div>
        </div>


        <div class="form-actions p-4">
            <button class="btn-primary" id="nextBtn" onclick="nextStep()">التالي ←</button>
            <button class="btn-secondary" id="prevBtn" onclick="prevStep()" style="display:none">→ السابق</button>
            <button class="btn-primary"   type="submit">إضافة </button>

        </div>
    </div>
@endsection
