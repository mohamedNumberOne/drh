@extends('layouts.app')

@section('content')
    <!-- ═══════════════════ PAGE: all emp ═══ -->

    <div class="page active" id="page-employees">
        <div class="page-header">
            <h1>قائمة الموظفين</h1>
            <p>إدارة وعرض جميع الموظفين المسجلين في النظام</p>
        </div>
        {{-- <div class="table-toolbar">
            <button class="filter-btn active" onclick="filterEmp(this,'all')">الكل <span id="allCount">12</span></button>
            <button class="filter-btn" onclick="filterEmp(this,'نشط')">نشط</button>
            <button class="filter-btn" onclick="filterEmp(this,'إجازة')">إجازة</button>
            <button class="filter-btn" onclick="filterEmp(this,'تجريبي')">تجريبي</button>
            <button class="filter-btn" onclick="filterEmp(this,'غير نشط')">غير نشط</button>
            <button class="add-btn" onclick="navigate('add')">＋ إضافة موظف</button>
        </div> --}}
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
                    <tbody id="empTableBody">
                        @foreach ($all_emp_active as $employee)
                            <tr>
                                <td style="color:var(--text3);font-family:Tajawal">1</td>
                                <td>
                                    <div class="emp-info">
                                        <div class="emp-avatar" style="background:linear-gradient(135deg,#6366f1,#8b5cf6)">
                                            <span style="color:#fff"> 
                                                 X
                                            </span>
                                        </div>
                                        <div>
                                            <div class="emp-name">

                                                {{ $employee->prenom }}
                                                -
                                                {{ $employee->nom }}
                                            </div>
                                            <div class="emp-id">EMP-001</div>
                                        </div>
                                    </div>
                                </td>
                                <td>الموارد البشرية</td>
                                <td style="max-width:140px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap"> 
                                  {{ $employee-> mansib }}   
                                </td>
                                <td style="color:var(--accent);font-weight:600;white-space:nowrap">  
                                    @if ( ! empty( $employee-> sallaire_base ) )
                                         {{ $employee-> sallaire_base }} دج
                                    @endif
                                   
                                </td>
                                <td style="font-family:Tajawal;direction:ltr;text-align:right;white-space:nowrap">2021-01-05
                                </td>
                                <td><span class="badge badge-active">نشط</span></td>
                                <td>
                                    <div class="action-btns">
                                        <button class="action-btn edit" onclick="editEmployee(0)" title="تعديل">✏️</button>
                                        <button class="action-btn" onclick="showToast('عرض ملف فاطمة الزهراني','success')"
                                            title="عرض">👁</button>
                                        <button class="action-btn del" onclick="openDeleteModal()"
                                            title="حذف">🗑</button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
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
@endsection
