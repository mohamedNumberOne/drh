<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use SoftDeletes;

    protected $fillable = [

        'employee_code',

        'national_id',

        'first_name_ar',
        'first_name_fr',

        'last_name_ar',
        'last_name_fr',

        'birth_date',

        'birth_place_ar',
        'birth_place_fr',

        'address_ar',
        'address_fr',

        'phone',
        'email',

        'marital_status',

        'children_count',

        'gender',

        'has_disability',

        'disability_details',

        'has_disease',

        'disease_details_ar',

        'disease_details_fr',

        'diploma_ar',
        'diploma_fr',

        'rank_ar',
        'rank_fr',

        'direction_ar',
        'direction_fr',

        'service_ar',
        'service_fr',

        'office_ar',
        'office_fr',

        'contract_type',

        'military_service',

        'photo'
    ];
}
