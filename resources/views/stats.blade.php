<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>نظام إدارة الموارد البشرية</title>
 
 
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>

  <!-- SIDEBAR -->
  <aside class="sidebar">
    <div class="sidebar-logo">
      <div class="logo-icon">🏢</div>
      <div class="logo-title">نظام إدارة الموارد البشرية</div>
      <div class="logo-sub">HR MANAGEMENT SYSTEM</div>
    </div>

    <nav class="sidebar-nav">
      <div class="nav-section-label">القائمة الرئيسية</div>

      <div class="nav-item" onclick="navigate('stats')">
        <div class="nav-icon">📊</div>
        <span class="nav-label">الإحصائيات</span>
      </div>

      <div class="nav-item" onclick="navigate('employees')">
        <div class="nav-icon">👥</div>
        <span class="nav-label">قائمة الموظفين</span>
        <span class="nav-badge" id="empCount">12</span>
      </div>

      <div class="nav-item" onclick="navigate('add')">
        <div class="nav-icon">➕</div>
        <span class="nav-label">إضافة موظف</span>
      </div>

      <div class="nav-section-label">الإدارة</div>

      <div class="nav-item" onclick="navigate('edit')">
        <div class="nav-icon">✏️</div>
        <span class="nav-label">تعديل الموظفين</span>
      </div>

      <div class="nav-item" onclick="navigate('stats')">
        <div class="nav-icon">📅</div>
        <span class="nav-label">الإجازات والغياب</span>
      </div>

      <div class="nav-item" onclick="navigate('stats')">
        <div class="nav-icon">💰</div>
        <span class="nav-label">الرواتب</span>
      </div>

      <div class="nav-item" onclick="navigate('stats')">
        <div class="nav-icon">📋</div>
        <span class="nav-label">التقارير</span>
      </div>

      <div class="nav-section-label">النظام</div>

      <div class="nav-item" onclick="navigate('stats')">
        <div class="nav-icon">⚙️</div>
        <span class="nav-label">الإعدادات</span>
      </div>
    </nav>

    <div class="sidebar-footer">
      <div class="admin-card">
        <div class="admin-avatar">أ</div>
        <div class="admin-info">
          <div class="admin-name">أحمد محمد</div>
          <div class="admin-role">مدير الموارد البشرية</div>
        </div>
        <span style="color:var(--text3);font-size:18px">⚙</span>
      </div>
    </div>
  </aside>

  <!-- MAIN -->
  <main class="main">
    <!-- TOPBAR -->
    <header class="topbar">
      <div>
        <div class="topbar-title" id="topbarTitle">لوحة الإحصائيات</div>
        <div class="topbar-subtitle" id="topbarSub">مرحباً، أحمد — الخميس 21 مايو 2026</div>
      </div>
      <div class="search-box">
        <span>🔍</span>
        <input type="text" placeholder="بحث عن موظف...">
      </div>
      <button class="topbar-btn notif-dot">🔔</button>
      <button class="topbar-btn">📧</button>
      <button class="topbar-btn">🌙</button>
    </header>

    <!-- ═══════════════════════════════════ PAGE: STATS ═══ -->
    <div class="page active" id="page-stats">
      <div class="page-header">
        <h1>لوحة الإحصائيات</h1>
        <p>نظرة شاملة على أداء الموارد البشرية في الشركة</p>
      </div>

      <!-- KPI Cards -->
      <div class="stats-grid">
        <div class="stat-card green">
          <div class="stat-icon">👥</div>
          <div class="stat-num">248</div>
          <div class="stat-label">إجمالي الموظفين</div>
          <div class="stat-change up">▲ 12 هذا الشهر</div>
        </div>
        <div class="stat-card blue">
          <div class="stat-icon">✅</div>
          <div class="stat-num">231</div>
          <div class="stat-label">موظفون نشطون</div>
          <div class="stat-change up">▲ 93.1%</div>
        </div>
        <div class="stat-card amber">
          <div class="stat-icon">📋</div>
          <div class="stat-num">17</div>
          <div class="stat-label">في إجازة</div>
          <div class="stat-change down">▼ 3 مقارنة بالأسبوع</div>
        </div>
        <div class="stat-card red">
          <div class="stat-icon">🚪</div>
          <div class="stat-num">5</div>
          <div class="stat-label">استقالات هذا الشهر</div>
          <div class="stat-change down">▼ 2.1% معدل الدوران</div>
        </div>
      </div>

      <!-- Charts Row -->
      <div class="charts-row">
        <!-- Bar Chart -->
        <div class="chart-card">
          <div class="card-header">
            <div class="card-title">التوظيف خلال 6 أشهر</div>
            <div class="card-action">تفاصيل</div>
          </div>
          <div class="bar-chart" id="barChart"></div>
        </div>

        <!-- Donut Chart -->
        <div class="chart-card">
          <div class="card-header">
            <div class="card-title">توزيع الجنس</div>
          </div>
          <div class="donut-wrap">
            <svg class="donut-svg" viewBox="0 0 140 140">
              <circle cx="70" cy="70" r="52" fill="none" stroke="#1a2235" stroke-width="18" />
              <circle cx="70" cy="70" r="52" fill="none" stroke="#00d9a5" stroke-width="18" stroke-dasharray="196 130"
                stroke-dashoffset="33" stroke-linecap="round" transform="rotate(-90 70 70)" />
              <circle cx="70" cy="70" r="52" fill="none" stroke="#0091ff" stroke-width="18" stroke-dasharray="100 226"
                stroke-dashoffset="-163" stroke-linecap="round" transform="rotate(-90 70 70)" />
              <circle cx="70" cy="70" r="52" fill="none" stroke="#f59e0b" stroke-width="18" stroke-dasharray="30 296"
                stroke-dashoffset="-263" stroke-linecap="round" transform="rotate(-90 70 70)" />
              <text x="70" y="66" text-anchor="middle" font-size="20" font-weight="800" fill="#f0f4ff"
                font-family="Cairo">248</text>
              <text x="70" y="82" text-anchor="middle" font-size="10" fill="#8fa3c0" font-family="Tajawal">موظف</text>
            </svg>
            <div class="donut-legend">
              <div class="legend-item">
                <div class="legend-dot" style="background:#00d9a5"></div><span class="legend-name">ذكور</span><span
                  class="legend-val">60%</span>
              </div>
              <div class="legend-item">
                <div class="legend-dot" style="background:#0091ff"></div><span class="legend-name">إناث</span><span
                  class="legend-val">31%</span>
              </div>
              <div class="legend-item">
                <div class="legend-dot" style="background:#f59e0b"></div><span class="legend-name">غير محدد</span><span
                  class="legend-val">9%</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Bottom Row -->
      <div class="bottom-row">
        <!-- Dept Distribution -->
        <div class="chart-card">
          <div class="card-header">
            <div class="card-title">توزيع الأقسام</div>
            <div class="card-action">عرض الكل</div>
          </div>
          <div id="deptBars"></div>
        </div>

        <!-- Activity -->
        <div class="chart-card">
          <div class="card-header">
            <div class="card-title">آخر الأنشطة</div>
            <div class="card-action">عرض الكل</div>
          </div>
          <div class="activity-list">
            <div class="activity-item">
              <div class="activity-dot" style="background:#00d9a5"></div>
              <div>
                <div class="activity-text">تم تعيين <b>سارة العمري</b> في قسم التسويق</div>
                <div class="activity-time">منذ ساعتين</div>
              </div>
            </div>
            <div class="activity-item">
              <div class="activity-dot" style="background:#f59e0b"></div>
              <div>
                <div class="activity-text">طلب إجازة من <b>خالد محمود</b> قيد المراجعة</div>
                <div class="activity-time">منذ 4 ساعات</div>
              </div>
            </div>
            <div class="activity-item">
              <div class="activity-dot" style="background:#0091ff"></div>
              <div>
                <div class="activity-text">تم ترقية <b>نورة الشمري</b> إلى مدير قسم</div>
                <div class="activity-time">أمس الساعة 14:30</div>
              </div>
            </div>
            <div class="activity-item">
              <div class="activity-dot" style="background:#ef4444"></div>
              <div>
                <div class="activity-text">إنهاء عقد <b>فيصل الحربي</b> بتاريخ 30/05</div>
                <div class="activity-time">أمس الساعة 10:15</div>
              </div>
            </div>
            <div class="activity-item">
              <div class="activity-dot" style="background:#00d9a5"></div>
              <div>
                <div class="activity-text">تحديث بيانات <b>12 موظفاً</b> في قسم المبيعات</div>
                <div class="activity-time">2 أيام مضت</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ═══════════════════════════════════ PAGE: EMPLOYEES ═══ -->
    <div class="page" id="page-employees">
      <div class="page-header">
        <h1>قائمة الموظفين</h1>
        <p>إدارة وعرض جميع الموظفين المسجلين في النظام</p>
      </div>

      <div class="table-toolbar">
        <button class="filter-btn active" onclick="filterEmp(this,'all')">الكل <span id="allCount">12</span></button>
        <button class="filter-btn" onclick="filterEmp(this,'نشط')">نشط</button>
        <button class="filter-btn" onclick="filterEmp(this,'إجازة')">في إجازة</button>
        <button class="filter-btn" onclick="filterEmp(this,'تجريبي')">تجريبي</button>
        <button class="filter-btn" onclick="filterEmp(this,'غير نشط')">غير نشط</button>
        <button class="add-btn" onclick="navigate('add')">
          ＋ إضافة موظف جديد
        </button>
      </div>

      <div class="table-wrap">
        <table>
          <thead>
            <tr>
              <th>#</th>
              <th>الموظف</th>
              <th>القسم</th>
              <th>المنصب</th>
              <th>الراتب</th>
              <th>تاريخ التوظيف</th>
              <th>الحالة</th>
              <th>إجراءات</th>
            </tr>
          </thead>
          <tbody id="empTableBody"></tbody>
        </table>
        <div class="pagination">
          <span id="paginationInfo">عرض 1–12 من 12 موظف</span>
          <div class="page-btns">
            <button class="page-btn">‹</button>
            <button class="page-btn active">1</button>
            <button class="page-btn">2</button>
            <button class="page-btn">›</button>
          </div>
        </div>
      </div>
    </div>

    <!-- ═══════════════════════════════════ PAGE: ADD ═══ -->
    <div class="page" id="page-add">
      <div class="page-header">
        <h1>إضافة موظف جديد</h1>
        <p>أدخل جميع المعلومات المطلوبة لتسجيل موظف جديد في النظام</p>
      </div>

      <!-- Steps -->
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
        <div class="step" id="step4" onclick="goStep(4)">
          <div class="step-num">4</div>
          <div class="step-info">
            <div class="step-title">المستندات</div>
            <div class="step-sub">رفع الملفات</div>
          </div>
        </div>
      </div>

      <!-- Step 1 -->
      <div id="stepContent1" class="form-layout">
        <div class="form-card">
          <div class="form-section-title">🧑 المعلومات الشخصية الأساسية</div>
          <div class="form-row">
            <div class="form-group">
              <label class="form-label">الاسم الأول <span class="required">*</span></label>
              <input class="form-input" type="text" placeholder="أحمد">
            </div>
            <div class="form-group">
              <label class="form-label">اسم العائلة <span class="required">*</span></label>
              <input class="form-input" type="text" placeholder="محمد">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label class="form-label">البريد الإلكتروني <span class="required">*</span></label>
              <input class="form-input" type="email" placeholder="ahmed@company.com" dir="ltr">
            </div>
            <div class="form-group">
              <label class="form-label">رقم الهاتف <span class="required">*</span></label>
              <input class="form-input" type="tel" placeholder="+966 5x xxx xxxx" dir="ltr">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label class="form-label">تاريخ الميلاد <span class="required">*</span></label>
              <input class="form-input" type="date">
            </div>
            <div class="form-group">
              <label class="form-label">الجنسية <span class="required">*</span></label>
              <select class="form-select">
                <option value="">اختر الجنسية</option>
                <option>سعودي</option>
                <option>إماراتي</option>
                <option>كويتي</option>
                <option>مصري</option>
                <option>أردني</option>
                <option>جزائري</option>
                <option>مغربي</option>
                <option>أخرى</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label class="form-label">رقم الهوية / جواز السفر <span class="required">*</span></label>
              <input class="form-input" type="text" placeholder="1XXXXXXXXX" dir="ltr">
            </div>
            <div class="form-group">
              <label class="form-label">الجنس</label>
              <select class="form-select">
                <option>ذكر</option>
                <option>أنثى</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label class="form-label">الحالة الاجتماعية</label>
              <select class="form-select">
                <option>أعزب</option>
                <option>متزوج</option>
                <option>مطلق</option>
                <option>أرمل</option>
              </select>
            </div>
            <div class="form-group">
              <label class="form-label">عدد الأطفال</label>
              <input class="form-input" type="number" placeholder="0" min="0">
            </div>
          </div>
          <div class="form-group">
            <label class="form-label">العنوان الكامل</label>
            <textarea class="form-textarea" placeholder="المدينة، الحي، الشارع، رقم المبنى..."></textarea>
          </div>
        </div>

        <div class="form-card">
          <div class="form-section-title">📷 الصورة الشخصية</div>
          <div class="upload-box" onclick="this.querySelector('input').click()">
            <div class="upload-icon">🖼️</div>
            <div class="upload-text">اسحب وأفلت الصورة هنا</div>
            <div class="upload-sub">أو انقر للاختيار من جهازك</div>
            <div class="upload-sub" style="margin-top:6px">JPG, PNG — الحد الأقصى 5 ميجابايت</div>
            <input type="file" accept="image/*" style="display:none">
          </div>

          <div style="margin-top:24px">
            <div class="form-section-title">📞 جهة اتصال الطوارئ</div>
            <div class="form-row">
              <div class="form-group">
                <label class="form-label">اسم جهة الاتصال</label>
                <input class="form-input" type="text" placeholder="الاسم الكامل">
              </div>
              <div class="form-group">
                <label class="form-label">صلة القرابة</label>
                <select class="form-select">
                  <option>الزوج/الزوجة</option>
                  <option>الأب</option>
                  <option>الأم</option>
                  <option>الأخ/الأخت</option>
                  <option>أخرى</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="form-label">رقم هاتف الطوارئ</label>
              <input class="form-input" type="tel" placeholder="+966 5x xxx xxxx" dir="ltr">
            </div>
          </div>

          <div style="margin-top:24px">
            <div class="form-section-title">🎓 المؤهل العلمي</div>
            <div class="form-group" style="margin-bottom:12px">
              <label class="form-label">أعلى مؤهل</label>
              <select class="form-select">
                <option>ثانوية عامة</option>
                <option>دبلوم</option>
                <option>بكالوريوس</option>
                <option>ماجستير</option>
                <option>دكتوراه</option>
              </select>
            </div>
            <div class="form-group">
              <label class="form-label">التخصص</label>
              <input class="form-input" type="text" placeholder="إدارة أعمال، هندسة...">
            </div>
          </div>
        </div>
      </div>

      <!-- Step 2 (hidden) -->
      <div id="stepContent2" style="display:none">
        <div class="form-layout">
          <div class="form-card">
            <div class="form-section-title">💼 بيانات العمل</div>
            <div class="form-row">
              <div class="form-group">
                <label class="form-label">الرقم الوظيفي <span class="required">*</span></label>
                <input class="form-input" type="text" placeholder="EMP-2026-001" dir="ltr" value="EMP-2026-013">
              </div>
              <div class="form-group">
                <label class="form-label">تاريخ التوظيف <span class="required">*</span></label>
                <input class="form-input" type="date">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group">
                <label class="form-label">القسم <span class="required">*</span></label>
                <select class="form-select">
                  <option value="">اختر القسم</option>
                  <option>الموارد البشرية</option>
                  <option>تقنية المعلومات</option>
                  <option>المالية والمحاسبة</option>
                  <option>التسويق والمبيعات</option>
                  <option>العمليات</option>
                  <option>خدمة العملاء</option>
                  <option>القانونية</option>
                  <option>الإدارة العليا</option>
                </select>
              </div>
              <div class="form-group">
                <label class="form-label">المسمى الوظيفي <span class="required">*</span></label>
                <input class="form-input" type="text" placeholder="مثال: مهندس برمجيات">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group">
                <label class="form-label">المستوى الوظيفي</label>
                <select class="form-select">
                  <option>موظف عادي</option>
                  <option>موظف أول</option>
                  <option>مشرف</option>
                  <option>مدير</option>
                  <option>مدير عام</option>
                  <option>نائب رئيس</option>
                </select>
              </div>
              <div class="form-group">
                <label class="form-label">المدير المباشر</label>
                <select class="form-select">
                  <option value="">اختر المدير</option>
                  <option>فاطمة الزهراني</option>
                  <option>محمد القحطاني</option>
                  <option>نورة العتيبي</option>
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group">
                <label class="form-label">نوع العقد</label>
                <select class="form-select">
                  <option>دوام كامل</option>
                  <option>دوام جزئي</option>
                  <option>عقد مؤقت</option>
                  <option>عقد محدد المدة</option>
                  <option>عمل حر</option>
                </select>
              </div>
              <div class="form-group">
                <label class="form-label">مكان العمل</label>
                <select class="form-select">
                  <option>المقر الرئيسي</option>
                  <option>فرع جدة</option>
                  <option>فرع الدمام</option>
                  <option>عن بُعد</option>
                  <option>هجين</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="form-label">وصف المهام</label>
              <textarea class="form-textarea" style="min-height:100px"
                placeholder="اذكر أبرز المهام والمسؤوليات..."></textarea>
            </div>
          </div>

          <div class="form-card">
            <div class="form-section-title">🛠️ المهارات والكفاءات</div>
            <div class="form-group" style="margin-bottom:16px">
              <label class="form-label">اللغات</label>
              <div class="check-group">
                <label class="check-option"><input type="checkbox" checked> العربية</label>
                <label class="check-option"><input type="checkbox"> الإنجليزية</label>
                <label class="check-option"><input type="checkbox"> الفرنسية</label>
                <label class="check-option"><input type="checkbox"> أخرى</label>
              </div>
            </div>
            <div class="form-group" style="margin-bottom:16px">
              <label class="form-label">المهارات التقنية</label>
              <div class="skill-tags" id="skillTags">
                <span class="skill-tag" onclick="toggleSkill(this)">Microsoft Office</span>
                <span class="skill-tag" onclick="toggleSkill(this)">SAP ERP</span>
                <span class="skill-tag" onclick="toggleSkill(this)">Python</span>
                <span class="skill-tag" onclick="toggleSkill(this)">JavaScript</span>
                <span class="skill-tag" onclick="toggleSkill(this)">تحليل البيانات</span>
                <span class="skill-tag" onclick="toggleSkill(this)">إدارة المشاريع</span>
                <span class="skill-tag" onclick="toggleSkill(this)">Adobe Creative</span>
                <span class="skill-tag" onclick="toggleSkill(this)">SQL</span>
                <span class="skill-tag" onclick="toggleSkill(this)">Power BI</span>
                <span class="skill-tag" onclick="toggleSkill(this)">Salesforce</span>
              </div>
            </div>
            <div class="form-group" style="margin-bottom:16px">
              <label class="form-label">الشهادات المهنية</label>
              <textarea class="form-textarea" placeholder="PMP, CPA, AWS Certified..."></textarea>
            </div>
            <div class="form-section-title">📍 معلومات إضافية</div>
            <div class="form-group" style="margin-bottom:12px">
              <label class="form-label">الحالة الوظيفية الأولية</label>
              <div class="radio-group">
                <label class="radio-option"><input type="radio" name="status" checked> نشط</label>
                <label class="radio-option"><input type="radio" name="status"> تجريبي</label>
                <label class="radio-option"><input type="radio" name="status"> موقوف</label>
              </div>
            </div>
            <div class="form-group">
              <label class="form-label">ملاحظات</label>
              <textarea class="form-textarea" placeholder="أي ملاحظات إضافية..."></textarea>
            </div>
          </div>
        </div>
      </div>

      <!-- Step 3 (hidden) -->
      <div id="stepContent3" style="display:none">
        <div class="form-layout">
          <div class="form-card">
            <div class="form-section-title">💰 الراتب والبدلات</div>
            <div class="form-row">
              <div class="form-group">
                <label class="form-label">الراتب الأساسي <span class="required">*</span></label>
                <div class="salary-group">
                  <span class="salary-currency">ج.م</span>
                  <input class="form-input salary-input" type="number" placeholder="0.00">
                </div>
              </div>
              <div class="form-group">
                <label class="form-label">العملة</label>
                <select class="form-select">
                  <option>دينار جزائري (DZD)</option>
                  <option>ريال سعودي (SAR)</option>
                  <option>درهم إماراتي (AED)</option>
                  <option>دولار أمريكي (USD)</option>
                  <option>يورو (EUR)</option>
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group">
                <label class="form-label">بدل السكن</label>
                <div class="salary-group">
                  <span class="salary-currency">ج.م</span>
                  <input class="form-input salary-input" type="number" placeholder="0.00">
                </div>
              </div>
              <div class="form-group">
                <label class="form-label">بدل النقل</label>
                <div class="salary-group">
                  <span class="salary-currency">ج.م</span>
                  <input class="form-input salary-input" type="number" placeholder="0.00">
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group">
                <label class="form-label">بدل الطعام</label>
                <div class="salary-group">
                  <span class="salary-currency">ج.م</span>
                  <input class="form-input salary-input" type="number" placeholder="0.00">
                </div>
              </div>
              <div class="form-group">
                <label class="form-label">بدل الاتصالات</label>
                <div class="salary-group">
                  <span class="salary-currency">ج.م</span>
                  <input class="form-input salary-input" type="number" placeholder="0.00">
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group">
                <label class="form-label">دورية صرف الراتب</label>
                <select class="form-select">
                  <option>شهري</option>
                  <option>أسبوعي</option>
                  <option>نصف شهري</option>
                </select>
              </div>
              <div class="form-group">
                <label class="form-label">يوم استحقاق الراتب</label>
                <input class="form-input" type="number" min="1" max="31" placeholder="1" dir="ltr">
              </div>
            </div>
          </div>

          <div class="form-card">
            <div class="form-section-title">🏦 معلومات الحساب البنكي</div>
            <div class="form-group" style="margin-bottom:14px">
              <label class="form-label">اسم البنك <span class="required">*</span></label>
              <select class="form-select">
                <option value="">اختر البنك</option>
                <option>بنك الراجحي</option>
                <option>البنك الأهلي</option>
                <option>بنك الرياض</option>
                <option>بنك البلاد</option>
                <option>بنك الإنماء</option>
                <option>بنك سامبا</option>
              </select>
            </div>
            <div class="form-group" style="margin-bottom:14px">
              <label class="form-label">رقم الحساب / IBAN <span class="required">*</span></label>
              <input class="form-input" type="text" placeholder="SA0000000000000000000000" dir="ltr">
            </div>
            <div class="form-group" style="margin-bottom:24px">
              <label class="form-label">اسم صاحب الحساب</label>
              <input class="form-input" type="text" placeholder="كما في البطاقة المصرفية">
            </div>

            <div class="form-section-title">🏥 التأمينات والمزايا</div>
            <div class="form-group" style="margin-bottom:12px">
              <label class="form-label">التأمين الصحي</label>
              <div class="radio-group">
                <label class="radio-option"><input type="radio" name="health" checked> فئة A (شامل)</label>
                <label class="radio-option"><input type="radio" name="health"> فئة B (أساسي)</label>
                <label class="radio-option"><input type="radio" name="health"> لا يوجد</label>
              </div>
            </div>
            <div class="form-group" style="margin-bottom:12px">
              <label class="form-label">مزايا إضافية</label>
              <div class="check-group">
                <label class="check-option"><input type="checkbox" checked> رحلة سنوية</label>
                <label class="check-option"><input type="checkbox"> بدل أداء</label>
                <label class="check-option"><input type="checkbox"> خيارات أسهم</label>
                <label class="check-option"><input type="checkbox" checked> مكافأة نهاية خدمة</label>
              </div>
            </div>
            <div class="form-group">
              <label class="form-label">رصيد الإجازة السنوية (أيام)</label>
              <input class="form-input" type="number" placeholder="21" dir="ltr">
            </div>
          </div>
        </div>
      </div>

      <!-- Step 4 (hidden) -->
      <div id="stepContent4" style="display:none">
        <div class="form-layout">
          <div class="form-card">
            <div class="form-section-title">📁 رفع المستندات</div>
            <div style="display:flex;flex-direction:column;gap:14px">
              <div>
                <div class="form-label" style="margin-bottom:8px">بطاقة الهوية / جواز السفر <span
                    class="required">*</span></div>
                <div class="upload-box" style="padding:18px" onclick="this.querySelector('input').click()">
                  <div style="display:flex;align-items:center;gap:10px">
                    <span style="font-size:28px">🪪</span>
                    <div>
                      <div class="upload-text" style="font-size:13px">اسحب الملف أو انقر للاختيار</div>
                      <div class="upload-sub">PDF, JPG, PNG — حتى 10 ميجابايت</div>
                    </div>
                  </div>
                  <input type="file" style="display:none" accept=".pdf,.jpg,.png">
                </div>
              </div>
              <div>
                <div class="form-label" style="margin-bottom:8px">الشهادة الدراسية</div>
                <div class="upload-box" style="padding:18px" onclick="this.querySelector('input').click()">
                  <div style="display:flex;align-items:center;gap:10px">
                    <span style="font-size:28px">🎓</span>
                    <div>
                      <div class="upload-text" style="font-size:13px">اسحب الملف أو انقر للاختيار</div>
                      <div class="upload-sub">PDF, JPG, PNG — حتى 10 ميجابايت</div>
                    </div>
                  </div>
                  <input type="file" style="display:none" accept=".pdf,.jpg,.png">
                </div>
              </div>
              <div>
                <div class="form-label" style="margin-bottom:8px">عقد العمل <span class="required">*</span></div>
                <div class="upload-box" style="padding:18px" onclick="this.querySelector('input').click()">
                  <div style="display:flex;align-items:center;gap:10px">
                    <span style="font-size:28px">📄</span>
                    <div>
                      <div class="upload-text" style="font-size:13px">اسحب الملف أو انقر للاختيار</div>
                      <div class="upload-sub">PDF فقط — حتى 10 ميجابايت</div>
                    </div>
                  </div>
                  <input type="file" style="display:none" accept=".pdf">
                </div>
              </div>
              <div>
                <div class="form-label" style="margin-bottom:8px">شهادات الخبرة السابقة</div>
                <div class="upload-box" style="padding:18px" onclick="this.querySelector('input').click()">
                  <div style="display:flex;align-items:center;gap:10px">
                    <span style="font-size:28px">📂</span>
                    <div>
                      <div class="upload-text" style="font-size:13px">يمكن رفع عدة ملفات</div>
                      <div class="upload-sub">PDF, JPG, PNG — حتى 10 ميجابايت لكل ملف</div>
                    </div>
                  </div>
                  <input type="file" style="display:none" accept=".pdf,.jpg,.png" multiple>
                </div>
              </div>
            </div>
          </div>

          <div class="form-card">
            <div class="form-section-title">✅ مراجعة وتأكيد</div>
            <div style="background:var(--bg3);border-radius:var(--radius-sm);padding:20px;margin-bottom:20px">
              <div style="font-size:13px;color:var(--text2);line-height:2">
                يرجى مراجعة المعلومات المدخلة قبل الحفظ. بالضغط على <b style="color:var(--accent)">حفظ الموظف</b> يتم
                تسجيل الموظف رسمياً في النظام وسيتلقى بريداً إلكترونياً ببياناته.
              </div>
            </div>
            <div class="form-group" style="margin-bottom:14px">
              <label class="check-option" style="width:100%">
                <input type="checkbox"> أقر بأن جميع المعلومات المدخلة صحيحة ودقيقة
              </label>
            </div>
            <div class="form-group" style="margin-bottom:14px">
              <label class="check-option" style="width:100%">
                <input type="checkbox"> تم الاطلاع على سياسة الخصوصية وحماية البيانات
              </label>
            </div>
            <div class="form-group">
              <label class="check-option" style="width:100%">
                <input type="checkbox"> إرسال بريد ترحيب تلقائي للموظف
              </label>
            </div>
          </div>
        </div>
      </div>

      <!-- Form Actions -->
      <div class="form-actions">
        <button class="btn-primary" id="nextBtn" onclick="nextStep()">التالي ←</button>
        <button class="btn-secondary" id="prevBtn" onclick="prevStep()" style="display:none">→ السابق</button>
        <button class="btn-secondary" onclick="navigate('employees')">إلغاء</button>
      </div>
    </div>

    <!-- ═══════════════════════════════════ PAGE: EDIT ═══ -->
    <div class="page" id="page-edit">
      <div class="page-header">
        <h1>تعديل بيانات الموظف</h1>
        <p>تحديث وتعديل المعلومات الخاصة بالموظف المختار</p>
      </div>

      <!-- Edit header -->
      <div class="edit-header">
        <div class="edit-avatar" id="editAvatar" style="background:linear-gradient(135deg,#6366f1,#8b5cf6)">
          <span id="editAvatarInitials">فز</span>
          <div class="edit-avatar-edit">✏</div>
        </div>
        <div class="edit-info">
          <div class="edit-name" id="editEmpName">فاطمة الزهراني</div>
          <div class="edit-meta" id="editEmpMeta">مديرة الموارد البشرية · منذ يناير 2021 · EMP-2021-003</div>
        </div>
        <div style="display:flex;gap:10px">
          <span class="badge badge-active">نشط</span>
          <button class="filter-btn" onclick="showToast('تم حفظ التغييرات بنجاح','success')">💾 حفظ التغييرات</button>
        </div>
      </div>

      <!-- Edit Tabs -->
      <div class="edit-tabs">
        <div class="edit-tab active" onclick="switchTab(this,0)">👤 البيانات الشخصية</div>
        <div class="edit-tab" onclick="switchTab(this,1)">💼 بيانات العمل</div>
        <div class="edit-tab" onclick="switchTab(this,2)">💰 الراتب والمزايا</div>
        <div class="edit-tab" onclick="switchTab(this,3)">📋 السجل الوظيفي</div>
        <div class="edit-tab" onclick="switchTab(this,4)">📁 المستندات</div>
      </div>

      <!-- Tab 0 content -->
      <div id="editTab0">
        <div class="form-layout">
          <div class="form-card">
            <div class="form-section-title">🧑 البيانات الشخصية</div>
            <div class="form-row">
              <div class="form-group">
                <label class="form-label">الاسم الأول</label>
                <input class="form-input" type="text" value="فاطمة">
              </div>
              <div class="form-group">
                <label class="form-label">اسم العائلة</label>
                <input class="form-input" type="text" value="الزهراني">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group">
                <label class="form-label">البريد الإلكتروني</label>
                <input class="form-input" type="email" value="f.alzahrani@company.com" dir="ltr">
              </div>
              <div class="form-group">
                <label class="form-label">رقم الهاتف</label>
                <input class="form-input" type="tel" value="+966 54 123 4567" dir="ltr">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group">
                <label class="form-label">تاريخ الميلاد</label>
                <input class="form-input" type="date" value="1990-03-15">
              </div>
              <div class="form-group">
                <label class="form-label">الجنسية</label>
                <select class="form-select">
                  <option selected>سعودي</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="form-label">العنوان</label>
              <textarea class="form-textarea">الرياض، حي النزهة، شارع الأمير سلطان، مبنى 24</textarea>
            </div>
          </div>

          <div class="form-card">
            <div class="form-section-title">🔴 إجراءات الحساب</div>
            <div style="display:flex;flex-direction:column;gap:10px">
              <button class="filter-btn" onclick="showToast('تم إرسال رسالة التحقق','success')"
                style="justify-content:flex-start;gap:10px">📧 إعادة إرسال بيانات الدخول</button>
              <button class="filter-btn" onclick="showToast('تم تعليق الحساب','success')"
                style="justify-content:flex-start;gap:10px">🔒 تعليق الحساب مؤقتاً</button>
              <button class="filter-btn" onclick="showToast('تم تغيير كلمة المرور','success')"
                style="justify-content:flex-start;gap:10px">🔑 تغيير كلمة المرور</button>
              <button class="filter-btn" onclick="showToast('تم النقل إلى القسم','success')"
                style="justify-content:flex-start;gap:10px">🔄 نقل إلى قسم آخر</button>
              <button class="filter-btn" onclick="showToast('تم إنشاء تقرير الموظف','success')"
                style="justify-content:flex-start;gap:10px">📊 تصدير ملف الموظف</button>
              <div style="border-top:1px solid var(--border);margin:8px 0"></div>
              <button class="filter-btn"
                style="justify-content:flex-start;gap:10px;border-color:rgba(239,68,68,0.3);color:var(--accent4)"
                onclick="openDeleteModal()">🗑️ إنهاء خدمة الموظف</button>
            </div>

            <div style="margin-top:24px">
              <div class="form-section-title">📈 ملخص الأداء</div>
              <div style="display:grid;grid-template-columns:1fr 1fr;gap:10px">
                <div style="background:var(--bg3);padding:14px;border-radius:var(--radius-sm);text-align:center">
                  <div style="font-size:22px;font-weight:800;color:var(--accent)">94%</div>
                  <div style="font-size:11px;color:var(--text3);margin-top:4px">تقييم الأداء</div>
                </div>
                <div style="background:var(--bg3);padding:14px;border-radius:var(--radius-sm);text-align:center">
                  <div style="font-size:22px;font-weight:800;color:var(--accent2)">18</div>
                  <div style="font-size:11px;color:var(--text3);margin-top:4px">أيام إجازة متبقية</div>
                </div>
                <div style="background:var(--bg3);padding:14px;border-radius:var(--radius-sm);text-align:center">
                  <div style="font-size:22px;font-weight:800;color:var(--accent3)">4.2 س</div>
                  <div style="font-size:11px;color:var(--text3);margin-top:4px">غياب هذا الشهر</div>
                </div>
                <div style="background:var(--bg3);padding:14px;border-radius:var(--radius-sm);text-align:center">
                  <div style="font-size:22px;font-weight:800;color:var(--text)">5 س</div>
                  <div style="font-size:11px;color:var(--text3);margin-top:4px">سنوات الخدمة</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Tab other contents (hidden) -->
      <div id="editTab1" style="display:none">
        <div class="form-card">
          <div class="form-section-title">💼 بيانات العمل</div>
          <div class="form-row">
            <div class="form-group"><label class="form-label">القسم</label>
              <select class="form-select">
                <option selected>الموارد البشرية</option>
              </select>
            </div>
            <div class="form-group"><label class="form-label">المسمى الوظيفي</label>
              <input class="form-input" value="مديرة الموارد البشرية">
            </div>
            <div class="form-group"><label class="form-label">المستوى</label>
              <select class="form-select">
                <option selected>مدير</option>
              </select>
            </div>
            <div class="form-group"><label class="form-label">نوع العقد</label>
              <select class="form-select">
                <option selected>دوام كامل</option>
              </select>
            </div>
          </div>
          <div class="form-actions" style="padding-top:16px;margin-top:8px">
            <button class="btn-primary" onclick="showToast('تم حفظ بيانات العمل','success')">💾 حفظ</button>
          </div>
        </div>
      </div>
      <div id="editTab2" style="display:none">
        <div class="form-card">
          <div class="form-section-title">💰 الراتب والمزايا</div>
          <div class="form-row">
            <div class="form-group"><label class="form-label">الراتب الأساسي</label>
              <div class="salary-group"><span class="salary-currency">ج.م</span>
                <input class="form-input salary-input" type="number" value="15000">
              </div>
            </div>
            <div class="form-group"><label class="form-label">بدل السكن</label>
              <div class="salary-group"><span class="salary-currency">ج.م</span>
                <input class="form-input salary-input" type="number" value="3000">
              </div>
            </div>
            <div class="form-group"><label class="form-label">بدل النقل</label>
              <div class="salary-group"><span class="salary-currency">ج.م</span>
                <input class="form-input salary-input" type="number" value="800">
              </div>
            </div>
            <div class="form-group"><label class="form-label">بدلات أخرى</label>
              <div class="salary-group"><span class="salary-currency">ج.م</span>
                <input class="form-input salary-input" type="number" value="1200">
              </div>
            </div>
          </div>
          <div
            style="background:rgba(0,217,165,0.06);border:1px solid rgba(0,217,165,0.2);border-radius:var(--radius-sm);padding:16px;margin-top:8px">
            <div style="font-size:13px;color:var(--text2)">إجمالي الراتب الشهري: <b
                style="font-size:18px;color:var(--accent)">20,000 ج.م</b></div>
          </div>
          <div class="form-actions" style="padding-top:16px;margin-top:8px">
            <button class="btn-primary" onclick="showToast('تم تحديث بيانات الراتب','success')">💾 حفظ</button>
          </div>
        </div>
      </div>
      <div id="editTab3" style="display:none">
        <div class="chart-card">
          <div class="card-header">
            <div class="card-title">السجل الوظيفي</div>
          </div>
          <div class="activity-list">
            <div class="activity-item">
              <div class="activity-dot" style="background:#00d9a5"></div>
              <div>
                <div class="activity-text">ترقية إلى <b>مديرة الموارد البشرية</b></div>
                <div class="activity-time">مارس 2023</div>
              </div>
            </div>
            <div class="activity-item">
              <div class="activity-dot" style="background:#0091ff"></div>
              <div>
                <div class="activity-text">حضور دورة <b>إدارة المواهب المتقدمة</b></div>
                <div class="activity-time">نوفمبر 2022</div>
              </div>
            </div>
            <div class="activity-item">
              <div class="activity-dot" style="background:#f59e0b"></div>
              <div>
                <div class="activity-text">تقييم أداء سنوي — درجة <b>ممتاز (94%)</b></div>
                <div class="activity-time">يناير 2023</div>
              </div>
            </div>
            <div class="activity-item">
              <div class="activity-dot" style="background:#6366f1"></div>
              <div>
                <div class="activity-text">تعيين كـ<b>أخصائية موارد بشرية أولى</b></div>
                <div class="activity-time">يناير 2021</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="editTab4" style="display:none">
        <div class="chart-card">
          <div class="card-header">
            <div class="card-title">المستندات المرفوعة</div>
          </div>
          <div style="display:flex;flex-direction:column;gap:10px">
            <div
              style="display:flex;align-items:center;gap:12px;padding:12px;background:var(--bg3);border-radius:var(--radius-sm)">
              <span style="font-size:24px">🪪</span>
              <div style="flex:1">
                <div style="font-size:13px;font-weight:600;color:var(--text)">بطاقة الهوية الوطنية</div>
                <div style="font-size:11px;color:var(--text3)">PDF · 1.2 ميجابايت · رُفع 15/01/2021</div>
              </div>
              <button class="action-btn">👁</button><button class="action-btn del">🗑</button>
            </div>
            <div
              style="display:flex;align-items:center;gap:12px;padding:12px;background:var(--bg3);border-radius:var(--radius-sm)">
              <span style="font-size:24px">🎓</span>
              <div style="flex:1">
                <div style="font-size:13px;font-weight:600;color:var(--text)">شهادة الماجستير</div>
                <div style="font-size:11px;color:var(--text3)">PDF · 2.8 ميجابايت · رُفع 15/01/2021</div>
              </div>
              <button class="action-btn">👁</button><button class="action-btn del">🗑</button>
            </div>
            <div
              style="display:flex;align-items:center;gap:12px;padding:12px;background:var(--bg3);border-radius:var(--radius-sm)">
              <span style="font-size:24px">📄</span>
              <div style="flex:1">
                <div style="font-size:13px;font-weight:600;color:var(--text)">عقد العمل</div>
                <div style="font-size:11px;color:var(--text3)">PDF · 0.9 ميجابايت · رُفع 01/01/2021</div>
              </div>
              <button class="action-btn">👁</button><button class="action-btn del">🗑</button>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>

  <!-- Toast Container -->
  <div class="toast-container" id="toastContainer"></div>

  <!-- Delete Modal -->
  <div class="modal-overlay" id="deleteModal">
    <div class="modal">
      <div class="modal-icon">⚠️</div>
      <div class="modal-title">تأكيد إنهاء الخدمة</div>
      <div class="modal-text">هل أنت متأكد من إنهاء خدمة هذا الموظف؟ هذا الإجراء لا يمكن التراجع عنه وسيتم أرشفة جميع
        بياناته.</div>
      <div class="modal-btns">
        <button class="btn-danger" onclick="confirmDelete()">تأكيد الإنهاء</button>
        <button class="btn-secondary" onclick="closeDeleteModal()">إلغاء</button>
      </div>
    </div>
  </div>

  <script>
    // ── DATA ──
    const employees = [
      { id: 'EMP-001', name: 'فاطمة الزهراني', dept: 'الموارد البشرية', role: 'مديرة الموارد البشرية', salary: '20,000', date: '2021-01-05', status: 'نشط', color: 'linear-gradient(135deg,#6366f1,#8b5cf6)', initials: 'فز' },
      { id: 'EMP-002', name: 'محمد القحطاني', dept: 'تقنية المعلومات', role: 'مطور برمجيات أول', salary: '18,500', date: '2020-06-15', status: 'نشط', color: 'linear-gradient(135deg,#0ea5e9,#0284c7)', initials: 'مق' },
      { id: 'EMP-003', name: 'نورة العتيبي', dept: 'التسويق', role: 'مديرة التسويق الرقمي', salary: '16,000', date: '2019-03-22', status: 'إجازة', color: 'linear-gradient(135deg,#ec4899,#db2777)', initials: 'نع' },
      { id: 'EMP-004', name: 'خالد الحربي', dept: 'المالية', role: 'محاسب قانوني معتمد', salary: '17,200', date: '2022-09-01', status: 'نشط', color: 'linear-gradient(135deg,#10b981,#059669)', initials: 'خح' },
      { id: 'EMP-005', name: 'سارة العمري', dept: 'التسويق', role: 'أخصائية تسويق', salary: '12,000', date: '2026-03-10', status: 'تجريبي', color: 'linear-gradient(135deg,#f59e0b,#d97706)', initials: 'سع' },
      { id: 'EMP-006', name: 'عبدالله الدوسري', dept: 'العمليات', role: 'مدير العمليات', salary: '21,000', date: '2018-11-28', status: 'نشط', color: 'linear-gradient(135deg,#8b5cf6,#7c3aed)', initials: 'عد' },
      { id: 'EMP-007', name: 'مريم بن علي', dept: 'خدمة العملاء', role: 'مشرفة خدمة العملاء', salary: '11,500', date: '2023-07-04', status: 'نشط', color: 'linear-gradient(135deg,#ef4444,#dc2626)', initials: 'مب' },
      { id: 'EMP-008', name: 'أحمد الشمري', dept: 'تقنية المعلومات', role: 'مهندس شبكات', salary: '15,800', date: '2021-12-01', status: 'نشط', color: 'linear-gradient(135deg,#06b6d4,#0891b2)', initials: 'أش' },
      { id: 'EMP-009', name: 'لمياء الغامدي', dept: 'الموارد البشرية', role: 'أخصائية تدريب وتطوير', salary: '13,000', date: '2022-02-14', status: 'إجازة', color: 'linear-gradient(135deg,#a855f7,#9333ea)', initials: 'لغ' },
      { id: 'EMP-010', name: 'تركي العنزي', dept: 'المالية', role: 'محلل مالي', salary: '14,500', date: '2023-04-20', status: 'نشط', color: 'linear-gradient(135deg,#3b82f6,#2563eb)', initials: 'تع' },
      { id: 'EMP-011', name: 'رنا المطيري', dept: 'القانونية', role: 'مستشارة قانونية', salary: '19,000', date: '2020-08-17', status: 'غير نشط', color: 'linear-gradient(135deg,#64748b,#475569)', initials: 'رم' },
      { id: 'EMP-012', name: 'فيصل الرشيد', dept: 'العمليات', role: 'مشرف إنتاج', salary: '13,800', date: '2024-01-09', status: 'تجريبي', color: 'linear-gradient(135deg,#f97316,#ea580c)', initials: 'فر' },
    ];

    // ── NAVIGATION ──
    let currentPage = 'stats';
    function navigate(page) {
      document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
      document.querySelectorAll('.nav-item').forEach(n => n.classList.remove('active'));
      document.getElementById('page-' + page).classList.add('active');
      currentPage = page;
      const titles = {
        stats: ['لوحة الإحصائيات', 'نظرة شاملة على أداء الموارد البشرية'],
        employees: ['قائمة الموظفين', 'إدارة وعرض جميع الموظفين المسجلين'],
        add: ['إضافة موظف جديد', 'تسجيل بيانات موظف جديد في النظام'],
        edit: ['تعديل بيانات الموظف', 'تحديث معلومات الموظف المحدد'],
      };
      if (titles[page]) {
        document.getElementById('topbarTitle').textContent = titles[page][0];
        document.getElementById('topbarSub').textContent = titles[page][1];
      }
      const navMap = { stats: 0, employees: 1, add: 2, edit: 3 };
      if (navMap[page] !== undefined) {
        document.querySelectorAll('.nav-item')[navMap[page]].classList.add('active');
      }
    }

    // ── EMPLOYEES TABLE ──
    function renderTable(filter) {
      const body = document.getElementById('empTableBody');
      let data = filter && filter !== 'all' ? employees.filter(e => e.status === filter) : employees;
      document.getElementById('allCount').textContent = employees.length;
      body.innerHTML = data.map((e, i) => `
    <tr>
      <td style="color:var(--text3);font-family:Tajawal">${i + 1}</td>
      <td>
        <div class="emp-info">
          <div class="emp-avatar" style="background:${e.color}">${e.initials}</div>
          <div>
            <div class="emp-name">${e.name}</div>
            <div class="emp-id">${e.id}</div>
          </div>
        </div>
      </td>
      <td>${e.dept}</td>
      <td>${e.role}</td>
      <td style="color:var(--accent);font-weight:600">${e.salary} ج.م</td>
      <td style="font-family:Tajawal;direction:ltr;text-align:right">${e.date}</td>
      <td><span class="badge ${getBadgeClass(e.status)}">${e.status}</span></td>
      <td>
        <div class="action-btns">
          <button class="action-btn edit" onclick="editEmployee(${i})" title="تعديل">✏️</button>
          <button class="action-btn" onclick="showToast('عرض ملف ${e.name}','success')" title="عرض">👁</button>
          <button class="action-btn del" onclick="openDeleteModal()" title="حذف">🗑</button>
        </div>
      </td>
    </tr>
  `).join('');
      document.getElementById('paginationInfo').textContent = `عرض 1–${data.length} من ${data.length} موظف`;
    }

    function getBadgeClass(s) {
      return { نشط: 'badge-active', إجازة: 'badge-leave', 'غير نشط': 'badge-inactive', تجريبي: 'badge-trial' }[s] || 'badge-active';
    }

    function filterEmp(btn, filter) {
      document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      renderTable(filter);
    }

    function editEmployee(i) {
      const e = employees[i];
      document.getElementById('editEmpName').textContent = e.name;
      document.getElementById('editEmpMeta').textContent = `${e.role} · ${e.dept} · ${e.id}`;
      document.getElementById('editAvatarInitials').textContent = e.initials;
      document.getElementById('editAvatar').style.background = e.color;
      navigate('edit');
    }

    // ── FORM STEPS ──
    let currentStep = 1;
    const totalSteps = 4;

    function goStep(n) {
      document.getElementById('stepContent' + currentStep).style.display = 'none';
      document.getElementById('step' + currentStep).classList.remove('active');
      if (currentStep < n) document.getElementById('step' + currentStep).classList.add('done');
      currentStep = n;
      document.getElementById('stepContent' + currentStep).style.display = '';
      document.getElementById('step' + currentStep).classList.add('active');
      document.getElementById('prevBtn').style.display = currentStep > 1 ? '' : 'none';
      document.getElementById('nextBtn').textContent = currentStep === totalSteps ? '💾 حفظ الموظف' : 'التالي ←';
    }

    function nextStep() {
      if (currentStep === totalSteps) {
        showToast('تم حفظ الموظف بنجاح! ✅', 'success');
        navigate('employees');
        currentStep = 1;
        for (let i = 1; i <= 4; i++) {
          document.getElementById('step' + i).classList.remove('active', 'done');
          document.getElementById('stepContent' + i).style.display = i === 1 ? '' : 'none';
        }
        document.getElementById('step1').classList.add('active');
        document.getElementById('prevBtn').style.display = 'none';
        document.getElementById('nextBtn').textContent = 'التالي ←';
        return;
      }
      if (currentStep < totalSteps) goStep(currentStep + 1);
    }

    function prevStep() {
      if (currentStep > 1) goStep(currentStep - 1);
    }

    // ── EDIT TABS ──
    function switchTab(tab, idx) {
      document.querySelectorAll('.edit-tab').forEach(t => t.classList.remove('active'));
      tab.classList.add('active');
      for (let i = 0; i < 5; i++) {
        const el = document.getElementById('editTab' + i);
        if (el) el.style.display = i === idx ? '' : 'none';
      }
    }

    // ── SKILL TAGS ──
    function toggleSkill(el) { el.classList.toggle('selected'); }

    // ── BAR CHART ──
    function renderBarChart() {
      const months = ['ديسمبر', 'يناير', 'فبراير', 'مارس', 'أبريل', 'مايو'];
      const vals = [8, 14, 10, 18, 12, 22];
      const max = Math.max(...vals);
      const colors = ['#00d9a5', '#00d9a5', '#00d9a5', '#00d9a5', '#00d9a5', '#0091ff'];
      const chart = document.getElementById('barChart');
      chart.innerHTML = months.map((m, i) => `
    <div class="bar-group">
      <div class="bar" style="height:0;background:${colors[i]};opacity:0.85" data-h="${(vals[i] / max) * 130}"></div>
      <div class="bar-label">${m}</div>
    </div>
  `).join('');
      setTimeout(() => {
        chart.querySelectorAll('.bar').forEach(b => {
          b.style.transition = 'height 0.9s cubic-bezier(0.4,0,0.2,1)';
          b.style.height = b.dataset.h + 'px';
        });
      }, 300);
    }

    // ── DEPT BARS ──
    function renderDeptBars() {
      const depts = [
        { name: 'تقنية المعلومات', count: 52, color: '#0091ff' },
        { name: 'المبيعات', count: 48, color: '#00d9a5' },
        { name: 'العمليات', count: 41, color: '#8b5cf6' },
        { name: 'التسويق', count: 35, color: '#f59e0b' },
        { name: 'المالية', count: 28, color: '#ef4444' },
        { name: 'الموارد البشرية', count: 22, color: '#10b981' },
      ];
      const max = 52;
      document.getElementById('deptBars').innerHTML = depts.map(d => `
    <div class="dept-bar">
      <div class="dept-name">${d.name}</div>
      <div class="dept-track">
        <div class="dept-fill" style="width:0;background:${d.color}" data-w="${(d.count / max) * 100}"></div>
      </div>
      <div class="dept-count">${d.count}</div>
    </div>
  `).join('');
      setTimeout(() => {
        document.querySelectorAll('.dept-fill').forEach(f => {
          f.style.width = f.dataset.w + '%';
        });
      }, 400);
    }

    // ── TOAST ──
    function showToast(msg, type = 'success') {
      const c = document.getElementById('toastContainer');
      const icons = { success: '✅', error: '❌', info: 'ℹ️' };
      const t = document.createElement('div');
      t.className = `toast ${type}`;
      t.innerHTML = `<span class="toast-icon">${icons[type] || '✅'}</span><span>${msg}</span>`;
      c.appendChild(t);
      setTimeout(() => { t.style.opacity = '0'; t.style.transition = 'opacity 0.3s'; setTimeout(() => t.remove(), 300); }, 3000);
    }

    // ── MODAL ──
    function openDeleteModal() { document.getElementById('deleteModal').classList.add('open'); }
    function closeDeleteModal() { document.getElementById('deleteModal').classList.remove('open'); }
    function confirmDelete() {
      closeDeleteModal();
      showToast('تم إنهاء الخدمة وأرشفة البيانات', 'success');
      navigate('employees');
    }

    // ── INIT ──
    navigate('stats');
    renderTable();
    renderBarChart();
    renderDeptBars();
    document.getElementById('empCount').textContent = employees.length;
  </script>
</body>

</html>