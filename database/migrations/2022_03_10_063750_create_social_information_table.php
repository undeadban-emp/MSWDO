<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_information', function (Blueprint $table) {
            $table->id();
            $table->string('house_hold_no', 50);
            $table->string('house_hold_firstname', 255)->nullable();
            $table->string('house_hold_middlename', 255)->nullable();
            $table->string('house_hold_lastname', 255)->nullable();
            $table->string('mothers_maiden_firstname', 255)->nullable();
            $table->string('mothers_maiden_middlename', 255)->nullable();
            $table->string('mothers_maiden_lastname', 255)->nullable();
            $table->string('family_members_firstname', 255)->nullable();
            $table->string('family_members_middlename', 255)->nullable();
            $table->string('family_members_lastname', 255)->nullable();
            $table->string('family_members_relationship', 255);
            $table->string('barangay', 20);
            $table->string('purok', 255)->nullable();
            $table->date('birthdate');
            $table->string('birthplace', 255)->nullable();
            $table->string('sex', 10);
            $table->string('civil_status', 20);
            $table->string('citizenship', 20);
            $table->string('pensioner', 10);
            $table->string('occupation', 255)->nullable();
            $table->string('employment_type', 20)->nullable();
            $table->string('employer_type', 20)->nullable();
            $table->string('employment_id_no', 255)->nullable();
            $table->string('gsis_sss', 255)->nullable();
            $table->string('pagibig', 255)->nullable();
            $table->string('contact_no', 255)->nullable();
            $table->string('religion', 255)->nullable();
            $table->string('health_condition', 255)->nullable();
            $table->string('philhealth', 255)->nullable();
            $table->string('educational_attainments', 255)->nullable();
            $table->string('school_status', 255)->nullable();
            $table->string('school_grade', 255)->nullable();
            $table->string('4ps', 10)->nullable();
            $table->string('4ps_id_no', 255)->nullable();
            $table->string('ips', 10)->nullable();
            $table->string('tribe', 255)->nullable();
            $table->string('prenatal_checkup', 10)->nullable();
            $table->string('pregnant_mother', 10)->nullable();
            $table->string('family_planning', 10)->nullable();
            $table->string('breastfeeding_6_months_child', 255)->nullable();
            $table->string('pwd', 10)->nullable();
            $table->string('disability_type', 20)->nullable();
            $table->string('disability_cause', 255)->nullable();
            $table->string('baspo_id_no', 255)->nullable();
            $table->string('seniors_citizen', 10)->nullable();
            $table->string('osca_id_no', 255)->nullable();
            $table->string('pensionersc', 10)->nullable();
            $table->string('toilet_type', 20)->nullable();
            $table->string('water_source', 20)->nullable();
            $table->string('food_production_activities', 30)->nullable();
            $table->string('using_idiodized_salt', 10)->nullable();
            $table->string('with_functional_mrf', 10)->nullable();
            $table->string('livinga_rrangements', 10)->nullable();
            $table->string('fenced_household', 10)->nullable();
            $table->string('with_blind_drainage', 10)->nullable();
            $table->string('segrated_wastes', 10)->nullable();
            $table->string('social_status', 10)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('social_information');
    }
}
