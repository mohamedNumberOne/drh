@extends('layouts.app')

@section('content')
    <!-- ═══════════════════ PAGE: STATS ═══ -->
    <div class="page active" id="page-stats">
        <div class="page-header">
            <h1>لوحة الإحصائيات</h1>
            <p>نظرة شاملة على أداء الموارد البشرية في الشركة</p>
        </div>

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

        <div class="charts-row">
            <div class="chart-card">
                <div class="card-header">
                    <div class="card-title">التوظيف خلال 6 أشهر</div>
                    <div class="card-action">تفاصيل</div>
                </div>
                <div class="bar-chart" id="barChart"></div>
            </div>
            <div class="chart-card">
                <div class="card-header">
                    <div class="card-title">توزيع الجنس</div>
                </div>
                <div class="donut-wrap">
                    <svg class="donut-svg" viewBox="0 0 140 140">
                        <circle cx="70" cy="70" r="52" fill="none" stroke="var(--bg3)" stroke-width="18" />
                        <circle cx="70" cy="70" r="52" fill="none" stroke="var(--accent)" stroke-width="18"
                            stroke-dasharray="196 130" stroke-dashoffset="33" stroke-linecap="round"
                            transform="rotate(-90 70 70)" />
                        <circle cx="70" cy="70" r="52" fill="none" stroke="var(--accent2)"
                            stroke-width="18" stroke-dasharray="100 226" stroke-dashoffset="-163" stroke-linecap="round"
                            transform="rotate(-90 70 70)" />
                        <circle cx="70" cy="70" r="52" fill="none" stroke="var(--accent3)"
                            stroke-width="18" stroke-dasharray="30 296" stroke-dashoffset="-263" stroke-linecap="round"
                            transform="rotate(-90 70 70)" />
                        <text x="70" y="66" text-anchor="middle" font-size="20" font-weight="800" fill="var(--text)"
                            font-family="Cairo">248</text>
                        <text x="70" y="82" text-anchor="middle" font-size="10" fill="var(--text3)"
                            font-family="Tajawal">موظف</text>
                    </svg>
                    <div class="donut-legend">
                        <div class="legend-item">
                            <div class="legend-dot" style="background:var(--accent)"></div><span
                                class="legend-name">ذكور</span><span class="legend-val">60%</span>
                        </div>
                        <div class="legend-item">
                            <div class="legend-dot" style="background:var(--accent2)"></div><span
                                class="legend-name">إناث</span><span class="legend-val">31%</span>
                        </div>
                        {{-- <div class="legend-item">
                            <div class="legend-dot" style="background:var(--accent3)"></div><span class="legend-name">غير
                                محدد</span><span class="legend-val">9%</span>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="bottom-row">
            <div class="chart-card">
                <div class="card-header">
                    <div class="card-title">توزيع الأقسام</div>
                    <div class="card-action">عرض الكل</div>
                </div>
                <div id="deptBars"></div>
            </div>
            <div class="chart-card">
                <div class="card-header">
                    <div class="card-title">آخر الأنشطة</div>
                    <div class="card-action">عرض الكل</div>
                </div>
                <div class="activity-list">
                    <div class="activity-item">
                        <div class="activity-dot" style="background:var(--accent)"></div>
                        <div>
                            <div class="activity-text">تم تعيين <b>سارة العمري</b> في قسم التسويق</div>
                            <div class="activity-time">منذ ساعتين</div>
                        </div>
                    </div>
                    <div class="activity-item">
                        <div class="activity-dot" style="background:var(--accent3)"></div>
                        <div>
                            <div class="activity-text">طلب إجازة من <b>خالد محمود</b> قيد المراجعة</div>
                            <div class="activity-time">منذ 4 ساعات</div>
                        </div>
                    </div>
                    <div class="activity-item">
                        <div class="activity-dot" style="background:var(--accent2)"></div>
                        <div>
                            <div class="activity-text">تم ترقية <b>نورة الشمري</b> إلى مدير قسم</div>
                            <div class="activity-time">أمس 14:30</div>
                        </div>
                    </div>
                    <div class="activity-item">
                        <div class="activity-dot" style="background:var(--accent4)"></div>
                        <div>
                            <div class="activity-text">إنهاء عقد <b>فيصل الحربي</b> بتاريخ 30/05</div>
                            <div class="activity-time">أمس 10:15</div>
                        </div>
                    </div>
                    <div class="activity-item">
                        <div class="activity-dot" style="background:var(--accent)"></div>
                        <div>
                            <div class="activity-text">تحديث بيانات <b>12 موظفاً</b> في قسم المبيعات</div>
                            <div class="activity-time">قبل يومين</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
