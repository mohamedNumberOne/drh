<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
         

            $table->id();

            /*
            |--------------------------------------------------------------------------
            | Informations personnelles
            |--------------------------------------------------------------------------
            */

            $table->string('prenom');
            $table->string('nom');
            $table->string('groupe_sanguin')->nullable();
            $table->string('num_sc')->nullable();

            $table->date('date_n')->nullable();
            $table->string('lieu_n')->nullable();
            $table->string('wilaya_n')->nullable();

            $table->boolean('sexe')->nullable();

            $table->string('n_carte_n')->nullable();
            $table->date('date_sortie')->nullable();
            $table->date('date_fin')->nullable();
            $table->string('nin')->nullable();

            /*
            |--------------------------------------------------------------------------
            | Contact
            |--------------------------------------------------------------------------
            */

            $table->text('adresse')->nullable();

            $table->string('email')->nullable()->unique();

            $table->string('num_tlf')->nullable();

            $table->string('nom_urgence_call')->nullable();
            $table->string('num_urgence_call')->nullable();
            $table->string('type_connaisance')->nullable();

            /*
            |--------------------------------------------------------------------------
            | Situation familiale
            |--------------------------------------------------------------------------
            */

            $table->string('statu_familial')->nullable();

            $table->date('date_mariage')->nullable();

            $table->string('nom_conjoint')->nullable();

            $table->string('profession_conjoint')->nullable();

            $table->unsignedTinyInteger('nb_enfants')->nullable()->default(0);

            $table->unsignedTinyInteger('nb_assure')->nullable()->default(0);

            $table->boolean('fils_chahid')->nullable()->default(false);

            /*
            |--------------------------------------------------------------------------
            | Informations administratives
            |--------------------------------------------------------------------------
            */

            $table->string('matricule')->nullable();

            $table->string('num_dossier')->nullable();

            $table->string('direction_general')->nullable();

            $table->string('direction')->nullable();

            $table->string('bureau')->nullable();

            $table->string('mansib')->nullable();

            $table->string('type_mansib')->nullable();

            $table->string('type_contrat')->nullable();

            $table->string('etat_emp')->nullable();

            $table->string('groupe')->nullable();

            $table->string('sinf')->nullable();

            $table->text('desc_mission')->nullable();

            /*
            |--------------------------------------------------------------------------
            | Parcours professionnel
            |--------------------------------------------------------------------------
            */

            $table->date('date_first_emp')->nullable();

            $table->string('first_organisme')->nullable();

            $table->date('date_rej_apn')->nullable();

            $table->string('rotba')->nullable();

            $table->date('date_titularisation')->nullable();

            $table->string('rotbat_tarsim')->nullable();

            $table->string('rotba_haliya')->nullable();

            $table->date('date_rotba_haliya')->nullable();

            $table->string('darajat_rotba_haliya')->nullable();

            $table->date('date_daraja_haliya')->nullable();

            $table->unsignedInteger('anciente_rotba_mois')->nullable();

            $table->unsignedInteger('anciente_generale_annee')->nullable();

            /*
            |--------------------------------------------------------------------------
            | Diplômes
            |--------------------------------------------------------------------------
            */

            $table->string('niv_etude')->nullable();

            $table->string('diplome_etude')->nullable();

            $table->string('specialité_etude')->nullable();

            $table->date('date_diplome_etude')->nullable();

            $table->string('organisme_etude')->nullable();

            $table->string('pay_takharoj_etude')->nullable();

            /*
            |--------------------------------------------------------------------------
            | Formation
            |--------------------------------------------------------------------------
            */

            $table->string('sujet_dawra')->nullable();

            $table->string('jiha_monadima_dawra')->nullable();

            $table->date('date_dawra')->nullable();

            $table->string('duree_dawra')->nullable();

            $table->string('diplome_dawra')->nullable();

            /*
            |--------------------------------------------------------------------------
            | Langues
            |--------------------------------------------------------------------------
            */

            $table->string('niv_arab')->nullable();

            $table->string('niv_fr')->nullable();

            $table->string('niv_eng')->nullable();

            $table->string('niv_kabyle')->nullable();

            $table->string('autre_langue')->nullable();

            /*
            |--------------------------------------------------------------------------
            | Service national
            |--------------------------------------------------------------------------
            */

            $table->string('statut_service_m')->nullable();

            $table->string('duree_service_m')->nullable();

            $table->string('niv_tasfiya_amniya')->nullable();

            $table->boolean('sawabik_adliya')->nullable()->default(false);

            /*
            |--------------------------------------------------------------------------
            | Expérience
            |--------------------------------------------------------------------------
            */

            $table->string('experience_mansib')->nullable();

            $table->string('experience_organisme')->nullable();

            $table->date('experience_from_date')->nullable();

            $table->date('experience_to_date')->nullable();

            $table->string('cause_depart')->nullable();

            /*
            |--------------------------------------------------------------------------
            | Informations financières
            |--------------------------------------------------------------------------
            */

            $table->decimal('sallaire_base', 12, 2)->nullable();

            $table->decimal('minhat_mansib', 12, 2)->nullable();

            $table->string('rib')->nullable();

            $table->string('banque')->nullable();

            $table->boolean('membre_nakaba')->nullable()->default(false);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
