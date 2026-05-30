/* ══════════════════════════════════
                                  THEME TOGGLE
                               ══════════════════════════════════ */
let isDark = true;

function toggleTheme() {
    isDark = !isDark;
    const html = document.documentElement;
    const icon = document.getElementById('themeIcon');
    const text = document.getElementById('themeText');
    if (isDark) {
        html.setAttribute('data-theme', 'dark');
        icon.textContent = '🌙';
        text.textContent = 'الوضع الليلي';
    } else {
        html.setAttribute('data-theme', 'light');
        icon.textContent = '☀️';
        text.textContent = 'الوضع النهاري';
    }
    // Re-render charts so colors update
    renderBarChart();
    renderDeptBars();
}

/* ══════════════════════════════════
   SIDEBAR (mobile)
══════════════════════════════════ */
function openSidebar() {
    document.getElementById('sidebar').classList.add('open');
    const ov = document.getElementById('sidebarOverlay');
    ov.style.display = 'block';
    setTimeout(() => ov.classList.add('show'), 10);
}

function closeSidebar() {
    document.getElementById('sidebar').classList.remove('open');
    const ov = document.getElementById('sidebarOverlay');
    ov.classList.remove('show');
    setTimeout(() => {
        ov.style.display = 'none';
    }, 300);
}

/* ══════════════════════════════════
   DATA
══════════════════════════════════ */
const employees = [{
    id: 'EMP-001',
    name: 'فاطمة الزهراني',
    dept: 'الموارد البشرية',
    role: 'مديرة الموارد البشرية',
    salary: '200,000',
    date: '2021-01-05',
    status: 'نشط',
    color: 'linear-gradient(135deg,#6366f1,#8b5cf6)',
    initials: 'فز'
},
{
    id: 'EMP-002',
    name: 'محمد القحطاني',
    dept: 'تقنية المعلومات',
    role: 'مطور برمجيات أول',
    salary: '185,000',
    date: '2020-06-15',
    status: 'نشط',
    color: 'linear-gradient(135deg,#0ea5e9,#0284c7)',
    initials: 'مق'
},
{
    id: 'EMP-003',
    name: 'نورة العتيبي',
    dept: 'التسويق',
    role: 'مديرة التسويق الرقمي',
    salary: '160,000',
    date: '2019-03-22',
    status: 'إجازة',
    color: 'linear-gradient(135deg,#ec4899,#db2777)',
    initials: 'نع'
},
{
    id: 'EMP-004',
    name: 'خالد الحربي',
    dept: 'المالية',
    role: 'محاسب قانوني',
    salary: '172,000',
    date: '2022-09-01',
    status: 'نشط',
    color: 'linear-gradient(135deg,#10b981,#059669)',
    initials: 'خح'
},
{
    id: 'EMP-005',
    name: 'سارة العمري',
    dept: 'التسويق',
    role: 'أخصائية تسويق',
    salary: '120,000',
    date: '2026-03-10',
    status: 'تجريبي',
    color: 'linear-gradient(135deg,#f59e0b,#d97706)',
    initials: 'سع'
},
{
    id: 'EMP-006',
    name: 'عبدالله الدوسري',
    dept: 'العمليات',
    role: 'مدير العمليات',
    salary: '210,000',
    date: '2018-11-28',
    status: 'نشط',
    color: 'linear-gradient(135deg,#8b5cf6,#7c3aed)',
    initials: 'عد'
},
{
    id: 'EMP-007',
    name: 'مريم بن علي',
    dept: 'خدمة العملاء',
    role: 'مشرفة خدمة العملاء',
    salary: '115,000',
    date: '2023-07-04',
    status: 'نشط',
    color: 'linear-gradient(135deg,#ef4444,#dc2626)',
    initials: 'مب'
},
{
    id: 'EMP-008',
    name: 'أحمد الشمري',
    dept: 'تقنية المعلومات',
    role: 'مهندس شبكات',
    salary: '158,000',
    date: '2021-12-01',
    status: 'نشط',
    color: 'linear-gradient(135deg,#06b6d4,#0891b2)',
    initials: 'أش'
},
{
    id: 'EMP-009',
    name: 'لمياء الغامدي',
    dept: 'الموارد البشرية',
    role: 'أخصائية تدريب',
    salary: '130,000',
    date: '2022-02-14',
    status: 'إجازة',
    color: 'linear-gradient(135deg,#a855f7,#9333ea)',
    initials: 'لغ'
},
{
    id: 'EMP-010',
    name: 'تركي العنزي',
    dept: 'المالية',
    role: 'محلل مالي',
    salary: '145,000',
    date: '2023-04-20',
    status: 'نشط',
    color: 'linear-gradient(135deg,#3b82f6,#2563eb)',
    initials: 'تع'
},
{
    id: 'EMP-011',
    name: 'رنا المطيري',
    dept: 'القانونية',
    role: 'مستشارة قانونية',
    salary: '190,000',
    date: '2020-08-17',
    status: 'غير نشط',
    color: 'linear-gradient(135deg,#64748b,#475569)',
    initials: 'رم'
},
{
    id: 'EMP-012',
    name: 'فيصل الرشيد',
    dept: 'العمليات',
    role: 'مشرف إنتاج',
    salary: '138,000',
    date: '2024-01-09',
    status: 'تجريبي',
    color: 'linear-gradient(135deg,#f97316,#ea580c)',
    initials: 'فر'
},
];

/* ══════════════════════════════════
   NAVIGATION
══════════════════════════════════ */
// function navigate(page) {
//     document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
//     document.querySelectorAll('.nav-item').forEach(n => n.classList.remove('active'));
//     document.getElementById('page-' + page).classList.add('active');
//     const titles = {
//         stats: ['لوحة الإحصائيات', 'نظرة شاملة على أداء الموارد البشرية'],
//         employees: ['قائمة الموظفين', 'إدارة وعرض جميع الموظفين المسجلين'],
//         add: ['إضافة موظف جديد', 'تسجيل بيانات موظف جديد في النظام'],
//         edit: ['تعديل بيانات الموظف', 'تحديث معلومات الموظف المحدد'],
//     };
//     if (titles[page]) {
//         document.getElementById('topbarTitle').textContent = titles[page][0];
//         document.getElementById('topbarSub').textContent = titles[page][1];
//     }
//     const navMap = {
//         stats: 0,
//         employees: 1,
//         add: 2,
//         edit: 3
//     };
//     if (navMap[page] !== undefined)
//         document.querySelectorAll('.nav-item')[navMap[page]].classList.add('active');
//     closeSidebar();
// }

/* ══════════════════════════════════
   TABLE
══════════════════════════════════ */
function getBadgeClass(s) {
    return {
        نشط: 'badge-active',
        إجازة: 'badge-leave',
        'غير نشط': 'badge-inactive',
        تجريبي: 'badge-trial'
    }[s] || 'badge-active';
}

function renderTable(filter) {
    const body = document.getElementById('empTableBody');
    let data = (!filter || filter === 'all') ? employees : employees.filter(e => e.status === filter);
    document.getElementById('allCount').textContent = employees.length;
    body.innerHTML = data.map((e, i) => `
                <tr>
                <td style="color:var(--text3);font-family:Tajawal">${i + 1}</td>
                <td><div class="emp-info">
                    <div class="emp-avatar" style="background:${e.color}"><span style="color:#fff">${e.initials}</span></div>
                    <div><div class="emp-name">${e.name}</div><div class="emp-id">${e.id}</div></div>
                </div></td>
                <td>${e.dept}</td>
                <td style="max-width:140px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap">${e.role}</td>
                <td style="color:var(--accent);font-weight:600;white-space:nowrap">${e.salary} دج</td>
                <td style="font-family:Tajawal;direction:ltr;text-align:right;white-space:nowrap">${e.date}</td>
                <td><span class="badge ${getBadgeClass(e.status)}">${e.status}</span></td>
                <td><div class="action-btns">
                    <button class="action-btn edit" onclick="editEmployee(${i})" title="تعديل">✏️</button>
                    <button class="action-btn" onclick="showToast('عرض ملف ${e.name}','success')" title="عرض">👁</button>
                    <button class="action-btn del" onclick="openDeleteModal()" title="حذف">🗑</button>
                </div></td>
                </tr>`).join('');
    document.getElementById('paginationInfo').textContent = `عرض 1–${data.length} من ${data.length} موظف`;
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

/* ══════════════════════════════════
   FORM STEPS
══════════════════════════════════ */
let currentStep = 1;
const totalSteps = 3;

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
        for (let i = 1; i <= 3; i++) {
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

/* ══════════════════════════════════
   EDIT TABS
══════════════════════════════════ */
function switchTab(tab, idx) {
    document.querySelectorAll('.edit-tab').forEach(t => t.classList.remove('active'));
    tab.classList.add('active');
    for (let i = 0; i < 5; i++) {
        const el = document.getElementById('editTab' + i);
        if (el) el.style.display = i === idx ? '' : 'none';
    }
}

/* ══════════════════════════════════
   SKILL TAGS
══════════════════════════════════ */
function toggleSkill(el) {
    el.classList.toggle('selected');
}

/* ══════════════════════════════════
   BAR CHART
══════════════════════════════════ */
function renderBarChart() {
    const months = ['ديسمبر', 'يناير', 'فبراير', 'مارس', 'أبريل', 'مايو'];
    const vals = [8, 14, 10, 18, 12, 22];
    const max = Math.max(...vals);
    const isDarkMode = document.documentElement.getAttribute('data-theme') !== 'light';
    const barColor = isDarkMode ? '#00d9a5' : '#00a87e';
    const lastColor = isDarkMode ? '#0091ff' : '#0070cc';
    const chart = document.getElementById('barChart');
    if (!chart) return;
    chart.innerHTML = months.map((m, i) => `
    <div class="bar-group">
      <div class="bar" style="height:0;background:${i === 5 ? lastColor : barColor};opacity:${i === 5 ? '1' : '0.75'}" data-h="${(vals[i] / max) * 140}"></div>
      <div class="bar-label">${m}</div>
    </div>`).join('');
    setTimeout(() => {
        chart.querySelectorAll('.bar').forEach(b => {
            b.style.transition = 'height 0.85s cubic-bezier(0.4,0,0.2,1)';
            b.style.height = b.dataset.h + 'px';
        });
    }, 200);
}

/* ══════════════════════════════════
   DEPT BARS
══════════════════════════════════ */
function renderDeptBars() {
    const depts = [{
        name: 'تقنية المعلومات',
        count: 52,
        color: '#0091ff'
    },
    {
        name: 'المبيعات',
        count: 48,
        color: '#00d9a5'
    },
    {
        name: 'العمليات',
        count: 41,
        color: '#8b5cf6'
    },
    {
        name: 'التسويق',
        count: 35,
        color: '#f59e0b'
    },
    {
        name: 'المالية',
        count: 28,
        color: '#ef4444'
    },
    {
        name: 'الموارد البشرية',
        count: 22,
        color: '#10b981'
    },
    ];
    const max = 52;
    const el = document.getElementById('deptBars');
    if (!el) return;
    el.innerHTML = depts.map(d => `
    <div class="dept-bar">
      <div class="dept-name">${d.name}</div>
      <div class="dept-track">
        <div class="dept-fill" style="width:0;background:${d.color}" data-w="${(d.count / max) * 100}"></div>
      </div>
      <div class="dept-count">${d.count}</div>
    </div>`).join('');
    setTimeout(() => {
        el.querySelectorAll('.dept-fill').forEach(f => {
            f.style.transition = 'width 1s cubic-bezier(0.4,0,0.2,1)';
            f.style.width = f.dataset.w + '%';
        });
    }, 300);
}

/* ══════════════════════════════════
   TOAST
══════════════════════════════════ */
function showToast(msg, type = 'success') {
    const c = document.getElementById('toastContainer');
    const icons = {
        success: '✅',
        error: '❌',
        info: 'ℹ️'
    };
    const t = document.createElement('div');
    t.className = `toast ${type}`;
    t.innerHTML = `<span>${icons[type] || '✅'}</span><span>${msg}</span>`;
    c.appendChild(t);
    setTimeout(() => {
        t.style.opacity = '0';
        t.style.transition = 'opacity .3s';
        setTimeout(() => t.remove(), 300);
    }, 3000);
}

/* ══════════════════════════════════
   MODALS
══════════════════════════════════ */
function openDeleteModal() {
    document.getElementById('deleteModal').classList.add('open');
}

function closeDeleteModal() {
    document.getElementById('deleteModal').classList.remove('open');
}

function confirmDelete() {
    closeDeleteModal();
    showToast('تم إنهاء الخدمة وأرشفة البيانات', 'success');
    navigate('employees');
}

function openLogoutModal() {
    document.getElementById('logoutModal').classList.add('open');
}

function closeLogoutModal() {
    document.getElementById('logoutModal').classList.remove('open');
}

function confirmLogout() {
    closeLogoutModal();
    document.body.innerHTML = `
            <div style="min-height:100vh;display:flex;align-items:center;justify-content:center;background:var(--bg);font-family:'Cairo',sans-serif;flex-direction:column;gap:20px;text-align:center;padding:20px">
            <div style="font-size:54px">👋</div>
            <div style="font-size:22px;font-weight:800;color:var(--text)">تم تسجيل خروجك بنجاح</div>
            <div style="font-size:14px;color:var(--text3)">شكراً، أحمد محمد — إلى اللقاء</div>
            <button onclick="location.reload()" style="margin-top:8px;padding:11px 28px;border-radius:var(--radius-sm);background:var(--accent);border:none;color:var(--bg);font-family:'Cairo',sans-serif;font-size:14px;font-weight:700;cursor:pointer">🔑 تسجيل الدخول مجدداً</button>
            </div>`;
}

/* ══════════════════════════════════
   INIT
══════════════════════════════════ */
navigate('stats');
renderTable();
renderBarChart();
renderDeptBars();
document.getElementById('empCount').textContent = employees.length;
document.getElementById('allCount').textContent = employees.length;