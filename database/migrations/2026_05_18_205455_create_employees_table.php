<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {

            $table->id();

            // Matricule automatique
            $table->string('employee_code')
                ->unique();

            // Identité
            $table->string('national_id')
                ->unique();

            $table->string('first_name_fr');
            $table->string('first_name_ar');

            $table->string('last_name_fr');
            $table->string('last_name_ar');

            // Adresse
            $table->text('address_fr')
                ->nullable();

            $table->text('address_ar')
                ->nullable();

            // Naissance
            $table->date('birth_date');

            $table->string('birth_place_fr')
                ->nullable();

            $table->string('birth_place_ar')
                ->nullable();

            // Contact
            $table->string('phone')
                ->nullable();

            $table->string('email')
                ->nullable();

            // Sexe
            $table->enum(
                'gender',
                [
                    'male',
                    'female'
                ]
            );

            // Situation familiale
            $table->enum(
                'marital_status',
                [
                    'single',
                    'married',
                    'divorced',
                    'widowed'
                ]
            );

            // Enfants
            $table->boolean('has_children')
                ->default(false);

            $table->integer('children_count')
                ->default(0);

            // Handicap

            $table->boolean(
                'has_disability'
            )->default(false);

            $table->text(
                'disability_details_ar'
            )->nullable();

            $table->text(
                'disability_details_fr'
            )->nullable();

            // Maladies

            $table->boolean(
                'has_disease'
            )->default(false);

            $table->text(
                'disease_details_ar'
            )->nullable();

            $table->text(
                'disease_details_fr'
            )->nullable();

            // Formation

            $table->string(
                'diploma_fr'
            )->nullable();

            $table->string(
                'diploma_ar'
            )->nullable();

            // Poste

            $table->string(
                'rank_fr'
            )->nullable();

            $table->string(
                'rank_ar'
            )->nullable();

            // Affectation

            $table->string(
                'direction_fr'
            )-> nullable() ;

            $table->string(
                'direction_ar'
            )->nullable();

            $table->string(
                'service_fr'
            )->nullable();

            $table->string(
                'service_ar'
            )-> nullable() ;

            $table->string(
                'office_fr'
            )-> nullable() ;

            $table->string(
                'office_ar'
            )->nullable();;

            // Contrat

            $table->enum(
                'contract_type',
                [
                    'CDI',
                    'CDD',
                    'Stage',
                    'Vacataire',
                    'Contractuel'
                ]
            )->default(
                'CDI'
            );

            // Service militaire

            $table->boolean(
                'military_service'
            )->default(false);

            // Photo

            $table->string(
                'photo'
            )->nullable();

            // Statut employé

            $table->enum(
                'status',
                [
                    'active',
                    'inactive',
                    'retired',
                    'suspended'
                ]
            )->default(
                'active'
            );

            $table->timestamps();

            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(
            'employees'
        );
    }
};
