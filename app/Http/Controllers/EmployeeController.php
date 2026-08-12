<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employee;
use App\Http\Requests\EmployeeRequest;


class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::latest()->paginate(15);

        return view('employees.index', compact('employees'));
    }



    public function store(Request $request)
    {
        $data = $request->validate([

            // Informations personnelles
            'prenom' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'groupe_sanguin' => 'nullable|string|max:5',
            'num_sc' => 'nullable|string|max:50',
            'date_n' => 'nullable|date',
            'lieu_n' => 'nullable|string|max:255',
            'wilaya_n' => 'nullable|string|max:255',
            'sexe' => 'nullable|boolean',
            'n_carte_n' => 'nullable|string|max:50',
            'date_sortie' => 'nullable|date',
            'date_fin' => 'nullable|date',
            'nin' => 'nullable|string|max:30',

            // Contact
            'adresse' => 'nullable|string',
            'email' => 'required|email|unique:employees,email',
            'num_tlf' => 'nullable|string|max:30',
            'nom_urgence_call' => 'nullable|string|max:255',
            'num_urgence_call' => 'nullable|string|max:30',
            'type_connaisance' => 'nullable|string|max:100',

            // Situation familiale
            'statu_familial' => 'nullable|string|max:100',
            'date_mariage' => 'nullable|date',
            'nom_conjoint' => 'nullable|string|max:255',
            'profession_conjoint' => 'nullable|string|max:255',
            'nb_enfants' => 'nullable|integer|min:0',
            'nb_assure' => 'nullable|integer|min:0',
            'fils_chahid' => 'nullable|boolean',

            // Informations administratives
            'matricule' => 'nullable|string|max:100',
            'num_dossier' => 'nullable|string|max:100',
            'direction_general' => 'nullable|string|max:255',
            'direction' => 'nullable|string|max:255',
            'bureau' => 'nullable|string|max:255',
            'mansib' => 'nullable|string|max:255',
            'type_mansib' => 'nullable|string|max:100',
            'type_contrat' => 'nullable|string|max:100',
            'etat_emp' => 'nullable|string|max:100',
            'groupe' => 'nullable|string|max:50',
            'sinf' => 'nullable|string|max:50',
            'desc_mission' => 'nullable|string',

            // Parcours professionnel
            'date_first_emp' => 'nullable|date',
            'first_organisme' => 'nullable|string|max:255',
            'date_rej_apn' => 'nullable|date',
            'rotba' => 'nullable|string|max:255',
            'date_titularisation' => 'nullable|date',
            'rotbat_tarsim' => 'nullable|string|max:255',
            'rotba_haliya' => 'nullable|string|max:255',
            'date_rotba_haliya' => 'nullable|date',
            'darajat_rotba_haliya' => 'nullable|string|max:50',
            'date_daraja_haliya' => 'nullable|date',
            'anciente_rotba_mois' => 'nullable|integer|min:0',
            'anciente_generale_annee' => 'nullable|integer|min:0',

            // Études
            'niv_etude' => 'nullable|string|max:255',
            'diplome_etude' => 'nullable|string|max:255',
            'specialité_etude' => 'nullable|string|max:255',
            'date_diplome_etude' => 'nullable|date',
            'organisme_etude' => 'nullable|string|max:255',
            'pay_takharoj_etude' => 'nullable|string|max:255',

            // Formations
            'sujet_dawra' => 'nullable|string|max:255',
            'jiha_monadima_dawra' => 'nullable|string|max:255',
            'date_dawra' => 'nullable|date',
            'duree_dawra' => 'nullable|string|max:255',
            'diplome_dawra' => 'nullable|string|max:255',

            // Langues
            'niv_arab' => 'nullable|string|max:50',
            'niv_fr' => 'nullable|string|max:50',
            'niv_eng' => 'nullable|string|max:50',
            'niv_kabyle' => 'nullable|string|max:50',
            'autre_langue' => 'nullable|string|max:255',

            // Service national
            'statut_service_m' => 'nullable|string|max:255',
            'duree_service_m' => 'nullable|string|max:255',
            'niv_tasfiya_amniya' => 'nullable|string|max:255',
            'sawabik_adliya' => 'nullable|boolean',

            // Expérience
            'experience_mansib' => 'nullable|string|max:255',
            'experience_organisme' => 'nullable|string|max:255',
            'experience_from_date' => 'nullable|date',
            'experience_to_date' => 'nullable|date',
            'cause_depart' => 'nullable|string|max:255',

            // Finances
            'sallaire_base' => 'nullable|numeric|min:0',
            'minhat_mansib' => 'nullable|numeric|min:0',
            'rib' => 'nullable|string|max:100',
            'banque' => 'nullable|string|max:255',
            'membre_nakaba' => 'nullable|boolean',

        ]);

        Employee::create($data);

        return redirect()
            ->route('employees.create')
            ->with('success', 'تمت الإضافة بنجاح');
    }


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
        $all_emp_active = Employee::all() ;
        return view(
            'employees.all_employees' , compact('all_emp_active')
        );
    }


    public function _store(
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
