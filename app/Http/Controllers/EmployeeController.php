<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employee;
use App\Http\Requests\EmployeeRequest;

class EmployeeController extends Controller
{

    public function stats()
    {
        return view(
            'stats'
        );
    }

    public function create()
    {
        return view(
            'employees.add_employee'  
        );
    }

    public function get_all_employees()
    {
        return view(
            'employees.all'
        );
    }
    

    public function store(
        EmployeeRequest $request
    ) {

        $data =
            $request->validated();

        $data['employee_code']

            =
            'EMP-'
            .
            date('Y')
            .
            '-'
            .
            str_pad(
                Employee::count() + 1,
                5,
                0,
                STR_PAD_LEFT
            );

        if (
            $request->hasFile(
                'photo'
            )
        ) {
            $data['photo']
                =
                $request
                ->file(
                    'photo'
                )
                ->store(
                    'employees',
                    'public'
                );
        }

        Employee::create(
            $data
        );

        return back()
            ->with(
                'success',
                'Employé ajouté'
            );
    }
}