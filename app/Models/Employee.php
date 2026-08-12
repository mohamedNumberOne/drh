<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

// class Employee extends Model
// {
//     use SoftDeletes;

//     protected $fillable = [

//         'employee_code',

//         'national_id',

//         'first_name_ar',
//         'first_name_fr',

//         'last_name_ar',
//         'last_name_fr',

//         'birth_date',

//         'birth_place_ar',
//         'birth_place_fr',

//         'address_ar',
//         'address_fr',

//         'phone',
//         'email',

//         'marital_status',

//         'children_count',

//         'gender',

//         'has_disability',

//         'disability_details',

//         'has_disease',

//         'disease_details_ar',

//         'disease_details_fr',

//         'diploma_ar',
//         'diploma_fr',

//         'rank_ar',
//         'rank_fr',

//         'direction_ar',
//         'direction_fr',

//         'service_ar',
//         'service_fr',

//         'office_ar',
//         'office_fr',

//         'contract_type',

//         'military_service',

//         'photo'
//     ];
// }
 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [

        // Informations personnelles
        'prenom',
        'nom',
        'groupe_sanguin',
        'num_sc',
        'date_n',
        'lieu_n',
        'wilaya_n',
        'sexe',
        'n_carte_n',
        'date_sortie',
        'date_fin',
        'nin',

        // Contact
        'adresse',
        'email',
        'num_tlf',
        'nom_urgence_call',
        'num_urgence_call',
        'type_connaisance',

        // Situation familiale
        'statu_familial',
        'date_mariage',
        'nom_conjoint',
        'profession_conjoint',
        'nb_enfants',
        'nb_assure',
        'fils_chahid',

        // Informations administratives
        'matricule',
        'num_dossier',
        'direction_general',
        'direction',
        'bureau',
        'mansib',
        'type_mansib',
        'type_contrat',
        'etat_emp',
        'groupe',
        'sinf',
        'desc_mission',

        // Parcours professionnel
        'date_first_emp',
        'first_organisme',
        'date_rej_apn',
        'rotba',
        'date_titularisation',
        'rotbat_tarsim',
        'rotba_haliya',
        'date_rotba_haliya',
        'darajat_rotba_haliya',
        'date_daraja_haliya',
        'anciente_rotba_mois',
        'anciente_generale_annee',

        // Études
        'niv_etude',
        'diplome_etude',
        'specialité_etude',
        'date_diplome_etude',
        'organisme_etude',
        'pay_takharoj_etude',

        // Formations
        'sujet_dawra',
        'jiha_monadima_dawra',
        'date_dawra',
        'duree_dawra',
        'diplome_dawra',

        // Langues
        'niv_arab',
        'niv_fr',
        'niv_eng',
        'niv_kabyle',
        'autre_langue',

        // Service national
        'statut_service_m',
        'duree_service_m',
        'niv_tasfiya_amniya',
        'sawabik_adliya',

        // Expérience
        'experience_mansib',
        'experience_organisme',
        'experience_from_date',
        'experience_to_date',
        'cause_depart',

        // Finances
        'sallaire_base',
        'minhat_mansib',
        'rib',
        'banque',
        'membre_nakaba',
    ];

    protected $casts = [

        'date_n' => 'date',
        'date_sortie' => 'date',
        'date_fin' => 'date',
        'date_mariage' => 'date',

        'date_first_emp' => 'date',
        'date_rej_apn' => 'date',
        'date_titularisation' => 'date',
        'date_rotba_haliya' => 'date',
        'date_daraja_haliya' => 'date',

        'date_diplome_etude' => 'date',
        'date_dawra' => 'date',

        'experience_from_date' => 'date',
        'experience_to_date' => 'date',

        'sexe' => 'boolean',
        'fils_chahid' => 'boolean',
        'sawabik_adliya' => 'boolean',
        'membre_nakaba' => 'boolean',
    ];
}