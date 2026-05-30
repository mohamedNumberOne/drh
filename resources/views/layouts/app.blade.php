<!doctype html>

<html lang="ar" dir="rtl" data-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>


<body>


    {{-- 
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Home
                </a>
                <a class="navbar-brand" href="{{ url('/employees/create') }}">
                    add employee
                </a>
                <a class="navbar-brand" href="{{ url('/stats') }}">
                    add employee
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> 
        --}}

    <!-- Overlay (mobile) -->
    <div class="sidebar-overlay" id="sidebarOverlay" onclick="closeSidebar()"></div>

    <!-- ═══════════════════ SIDEBAR ═══════════════════ -->
    <aside class="sidebar" id="sidebar">

        <!-- Logo + close btn -->
        <div class="sidebar-logo">
            <div class="logo-icon">🏢</div>
            <div class="logo-texts">
                <div class="logo-title">نظام إدارة الموارد البشرية</div>
                <div class="logo-sub">HR MANAGEMENT SYSTEM</div>
            </div>
            <button class="sidebar-close" onclick="closeSidebar()">✕</button>
        </div>

        <!-- Navigation -->
        <nav class="sidebar-nav">
            <a href="{{ route('employees.stats') }}">
                <div class="{{ request()->routeIs('employees.stats') ? 'nav-item active' : 'nav-item' }}  ">
                    <div class="nav-icon">📊</div>
                    <span class="nav-label">الإحصائيات</span>

                </div>
            </a>

            <a href="{{ route('employees.create') }}">
                <div class="{{ request()->routeIs('employees.create') ? 'nav-item active' : 'nav-item' }}  ">
                    <div class="nav-icon">➕</div>
                    <span class="nav-label">إضافة موظف</span>

                </div>
            </a>

            <div class="nav-item" onclick="navigate('employees')">
                <div class="nav-icon">👥</div>
                <span class="nav-label">قائمة الموظفين</span>
                <span class="nav-badge" id="empCount">12</span>
            </div>

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
            <div class="nav-section-label">النظام</div>

            <div class="nav-item" onclick="navigate('stats')">
                <div class="nav-icon">⚙️</div>
                <span class="nav-label">الإعدادات</span>
            </div>
        </nav>

        <!-- ── FOOTER: User + Logout ── -->
        <div class="sidebar-footer">
            <div class="user-card">
                <div class="user-card-top">
                    <div class="user-avatar-lg">أ</div>
                    <div class="user-info-text">
                        <div class="user-fullname">أحمد محمد</div>
                        <div class="user-role">مدير الموارد البشرية</div>
                    </div>
                    <div class="online-dot" title="متصل الآن"></div>
                </div>
                <button class="logout-btn" onclick="openLogoutModal()">
                    <span class="logout-icon">🚪</span>
                    تسجيل الخروج
                </button>
            </div>
        </div>

    </aside>

    <!-- ═══════════════════ MAIN ═══════════════════ -->
    <main class="main" id="mainContent">

        <!-- TOPBAR -->
        <header class="topbar">
            <button class="hamburger" onclick="openSidebar()">☰</button>

            <div class="topbar-titles">
                <div class="topbar-title" id="topbarTitle">لوحة الإحصائيات</div>
                <div class="topbar-subtitle" id="topbarSub">مرحباً، أحمد — الخميس 28 مايو 2026</div>
            </div>

            <div class="search-box">
                <span>🔍</span>
                <input type="text" placeholder="بحث عن موظف...">
            </div>

            <!-- Theme toggle -->
            <div class="theme-toggle" onclick="toggleTheme()" title="تبديل المظهر">
                <span class="theme-icon" id="themeIcon">🌙</span>
                <span class="theme-text" id="themeText">الوضع الليلي</span>
                <div class="toggle-track">
                    <div class="toggle-thumb"></div>
                </div>
            </div>

            <button class="topbar-btn notif-dot">🔔</button>
            <button class="topbar-btn">📧</button>
        </header>

        <!-- ═══════════════════ PAGE: EMPLOYEES ═══ -->
        <div class="page" id="page-employees">
            <div class="page-header">
                <h1>قائمة الموظفين</h1>
                <p>إدارة وعرض جميع الموظفين المسجلين في النظام</p>
            </div>
            <div class="table-toolbar">
                <button class="filter-btn active" onclick="filterEmp(this,'all')">الكل <span
                        id="allCount">12</span></button>
                <button class="filter-btn" onclick="filterEmp(this,'نشط')">نشط</button>
                <button class="filter-btn" onclick="filterEmp(this,'إجازة')">إجازة</button>
                <button class="filter-btn" onclick="filterEmp(this,'تجريبي')">تجريبي</button>
                <button class="filter-btn" onclick="filterEmp(this,'غير نشط')">غير نشط</button>
                <button class="add-btn" onclick="navigate('add')">＋ إضافة موظف</button>
            </div>
            <div class="table-wrap">
                <div class="table-scroll">
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
                </div>
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

        <!-- ═══════════════════ PAGE: EDIT ═══ -->
        <div class="page" id="page-edit">
            <div class="page-header">
                <h1>تعديل بيانات الموظف</h1>
                <p>تحديث وتعديل المعلومات الخاصة بالموظف المختار</p>
            </div>

            <div class="edit-header">
                <div class="edit-avatar" id="editAvatar" style="background:linear-gradient(135deg,#6366f1,#8b5cf6)">
                    <span id="editAvatarInitials" style="color:#fff">فز</span>
                    <div class="edit-avatar-edit">✏</div>
                </div>
                <div class="edit-info">
                    <div class="edit-name" id="editEmpName">فاطمة الزهراني</div>
                    <div class="edit-meta" id="editEmpMeta">مديرة الموارد البشرية · منذ يناير 2021 · EMP-2021-003
                    </div>
                </div>
                <div style="display:flex;gap:8px;flex-wrap:wrap">
                    <span class="badge badge-active">نشط</span>
                    <button class="filter-btn" onclick="showToast('تم حفظ التغييرات بنجاح','success')">💾 حفظ
                        التغييرات</button>
                </div>
            </div>

            <div class="edit-tabs">
                <div class="edit-tab active" onclick="switchTab(this,0)">👤 الشخصية</div>
                <div class="edit-tab" onclick="switchTab(this,1)">💼 العمل</div>
                <div class="edit-tab" onclick="switchTab(this,2)">💰 الراتب</div>
                <div class="edit-tab" onclick="switchTab(this,3)">📋 السجل</div>
                <div class="edit-tab" onclick="switchTab(this,4)">📁 المستندات</div>
            </div>

            <div id="editTab0">
                <div class="form-layout">
                    <div class="form-card">
                        <div class="form-section-title">🧑 البيانات الشخصية</div>
                        <div class="form-row">
                            <div class="form-group"><label class="form-label">الاسم الأول</label><input
                                    class="form-input" value="فاطمة"></div>
                            <div class="form-group"><label class="form-label">اسم العائلة</label><input
                                    class="form-input" value="الزهراني"></div>
                        </div>
                        <div class="form-row">
                            <div class="form-group"><label class="form-label">البريد الإلكتروني</label><input
                                    class="form-input" type="email" value="f.alzahrani@company.com"
                                    dir="ltr"></div>
                            <div class="form-group"><label class="form-label">رقم الهاتف</label><input
                                    class="form-input" type="tel" value="+213 55 123 4567" dir="ltr"></div>
                        </div>
                        <div class="form-row">
                            <div class="form-group"><label class="form-label">تاريخ الميلاد</label><input
                                    class="form-input" type="date" value="1990-03-15"></div>
                            <div class="form-group"><label class="form-label">الجنسية</label><select
                                    class="form-select">
                                    <option selected>جزائري</option>
                                </select></div>
                        </div>
                        <div class="form-group"><label class="form-label">العنوان</label>
                            <textarea class="form-textarea">الجزائر العاصمة، حي باب الزوار</textarea>
                        </div>
                        <div class="form-actions" style="padding-top:14px;margin-top:4px">
                            <button class="btn-primary" onclick="showToast('تم حفظ البيانات الشخصية','success')">💾
                                حفظ</button>
                        </div>
                    </div>
                    <div class="form-card">
                        <div class="form-section-title">🔧 إجراءات الحساب</div>
                        <div style="display:flex;flex-direction:column;gap:8px">
                            <button class="filter-btn" onclick="showToast('تم إرسال بيانات الدخول','success')"
                                style="justify-content:flex-start">📧 إعادة إرسال بيانات الدخول</button>
                            <button class="filter-btn" onclick="showToast('تم تعليق الحساب','success')"
                                style="justify-content:flex-start">🔒 تعليق الحساب مؤقتاً</button>
                            <button class="filter-btn" onclick="showToast('تم تغيير كلمة المرور','success')"
                                style="justify-content:flex-start">🔑 تغيير كلمة المرور</button>
                            <button class="filter-btn" onclick="showToast('تم نقل الموظف','success')"
                                style="justify-content:flex-start">🔄 نقل إلى قسم آخر</button>
                            <button class="filter-btn" onclick="showToast('جاري تصدير الملف...','success')"
                                style="justify-content:flex-start">📊 تصدير ملف الموظف</button>
                            <div style="border-top:1px solid var(--border);margin:6px 0"></div>
                            <button class="filter-btn"
                                style="justify-content:flex-start;border-color:rgba(239,68,68,0.3);color:var(--accent4)"
                                onclick="openDeleteModal()">🗑️ إنهاء خدمة الموظف</button>
                        </div>
                        <div style="margin-top:20px">
                            <div class="form-section-title">📈 ملخص الأداء</div>
                            <div style="display:grid;grid-template-columns:1fr 1fr;gap:8px">
                                <div
                                    style="background:var(--bg3);padding:12px;border-radius:var(--radius-sm);text-align:center">
                                    <div style="font-size:20px;font-weight:800;color:var(--accent)">94%</div>
                                    <div style="font-size:11px;color:var(--text3);margin-top:3px">تقييم الأداء</div>
                                </div>
                                <div
                                    style="background:var(--bg3);padding:12px;border-radius:var(--radius-sm);text-align:center">
                                    <div style="font-size:20px;font-weight:800;color:var(--accent2)">18</div>
                                    <div style="font-size:11px;color:var(--text3);margin-top:3px">أيام إجازة</div>
                                </div>
                                <div
                                    style="background:var(--bg3);padding:12px;border-radius:var(--radius-sm);text-align:center">
                                    <div style="font-size:20px;font-weight:800;color:var(--accent3)">4.2</div>
                                    <div style="font-size:11px;color:var(--text3);margin-top:3px">غياب (ساعات)</div>
                                </div>
                                <div
                                    style="background:var(--bg3);padding:12px;border-radius:var(--radius-sm);text-align:center">
                                    <div style="font-size:20px;font-weight:800;color:var(--text)">5 س</div>
                                    <div style="font-size:11px;color:var(--text3);margin-top:3px">سنوات الخدمة</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="editTab1" style="display:none">
                <div class="form-card">
                    <div class="form-section-title">💼 بيانات العمل</div>
                    <div class="form-row">
                        <div class="form-group"><label class="form-label">القسم</label><select class="form-select">
                                <option selected>الموارد البشرية</option>
                            </select></div>
                        <div class="form-group"><label class="form-label">المسمى الوظيفي</label><input
                                class="form-input" value="مديرة الموارد البشرية"></div>
                        <div class="form-group"><label class="form-label">المستوى</label><select class="form-select">
                                <option selected>مدير</option>
                            </select></div>
                        <div class="form-group"><label class="form-label">نوع العقد</label><select
                                class="form-select">
                                <option selected>دوام كامل</option>
                            </select></div>
                    </div>
                    <div class="form-actions" style="padding-top:14px;margin-top:0">
                        <button class="btn-primary" onclick="showToast('تم حفظ بيانات العمل','success')">💾
                            حفظ</button>
                    </div>
                </div>
            </div>

            <div id="editTab2" style="display:none">
                <div class="form-card">
                    <div class="form-section-title">💰 الراتب والمزايا</div>
                    <div class="form-row">
                        <div class="form-group"><label class="form-label">الراتب الأساسي</label>
                            <div class="salary-group"><span class="salary-currency">دج</span><input
                                    class="form-input salary-input" type="number" value="150000"></div>
                        </div>
                        <div class="form-group"><label class="form-label">بدل السكن</label>
                            <div class="salary-group"><span class="salary-currency">دج</span><input
                                    class="form-input salary-input" type="number" value="30000"></div>
                        </div>
                        <div class="form-group"><label class="form-label">بدل النقل</label>
                            <div class="salary-group"><span class="salary-currency">دج</span><input
                                    class="form-input salary-input" type="number" value="8000"></div>
                        </div>
                        <div class="form-group"><label class="form-label">بدلات أخرى</label>
                            <div class="salary-group"><span class="salary-currency">دج</span><input
                                    class="form-input salary-input" type="number" value="12000"></div>
                        </div>
                    </div>
                    <div
                        style="background:rgba(0,217,165,0.06);border:1px solid rgba(0,217,165,0.2);border-radius:var(--radius-sm);padding:14px;margin-top:4px">
                        <div style="font-size:13px;color:var(--text2)">إجمالي الراتب الشهري: <b
                                style="font-size:17px;color:var(--accent)">200,000 دج</b></div>
                    </div>
                    <div class="form-actions" style="padding-top:14px;margin-top:8px">
                        <button class="btn-primary" onclick="showToast('تم تحديث بيانات الراتب','success')">💾
                            حفظ</button>
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
                            <div class="activity-dot" style="background:var(--accent)"></div>
                            <div>
                                <div class="activity-text">ترقية إلى <b>مديرة الموارد البشرية</b></div>
                                <div class="activity-time">مارس 2023</div>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-dot" style="background:var(--accent2)"></div>
                            <div>
                                <div class="activity-text">حضور دورة <b>إدارة المواهب المتقدمة</b></div>
                                <div class="activity-time">نوفمبر 2022</div>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-dot" style="background:var(--accent3)"></div>
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
                    <div style="display:flex;flex-direction:column;gap:8px">
                        <div
                            style="display:flex;align-items:center;gap:10px;padding:11px;background:var(--bg3);border-radius:var(--radius-sm)">
                            <span style="font-size:22px">🪪</span>
                            <div style="flex:1">
                                <div style="font-size:13px;font-weight:600;color:var(--text)">بطاقة الهوية الوطنية
                                </div>
                                <div style="font-size:11px;color:var(--text3)">PDF · 1.2 MB · 15/01/2021</div>
                            </div>
                            <button class="action-btn">👁</button><button class="action-btn del"
                                onclick="showToast('تم حذف الملف','success')">🗑</button>
                        </div>
                        <div
                            style="display:flex;align-items:center;gap:10px;padding:11px;background:var(--bg3);border-radius:var(--radius-sm)">
                            <span style="font-size:22px">🎓</span>
                            <div style="flex:1">
                                <div style="font-size:13px;font-weight:600;color:var(--text)">شهادة الماستر</div>
                                <div style="font-size:11px;color:var(--text3)">PDF · 2.8 MB · 15/01/2021</div>
                            </div>
                            <button class="action-btn">👁</button><button class="action-btn del"
                                onclick="showToast('تم حذف الملف','success')">🗑</button>
                        </div>
                        <div
                            style="display:flex;align-items:center;gap:10px;padding:11px;background:var(--bg3);border-radius:var(--radius-sm)">
                            <span style="font-size:22px">📄</span>
                            <div style="flex:1">
                                <div style="font-size:13px;font-weight:600;color:var(--text)">عقد العمل</div>
                                <div style="font-size:11px;color:var(--text3)">PDF · 0.9 MB · 01/01/2021</div>
                            </div>
                            <button class="action-btn">👁</button><button class="action-btn del"
                                onclick="showToast('تم حذف الملف','success')">🗑</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @yield('content')
    </main>






    <script src="{{ asset('js/myscript.js') }}"></script>

</body>

</html>
