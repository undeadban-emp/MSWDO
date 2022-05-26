<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialInformation extends Model
{
    protected $fillable = ['house_hold_no','house_hold_firstname','house_hold_middlename','house_hold_lastname','mothers_maiden_firstname','mothers_maiden_middlename','mothers_maiden_lastname','family_members_firstname','family_members_middlename','family_members_lastname','family_members_relationship','barangay','purok','birthdate','birthplace','sex','civil_status','citizenship','pensioner','occupation','employment_type','employer_type','employment_id_no','gsis_sss','pagibig','contact_no','religion','health_condition','philhealth','educational_attainments','school_status','school_grade','4ps','4ps_id_no','ips','tribe','prenatal_checkup','pregnant_mother','family_planning','breastfeeding_6_months_child','pwd','disability_type','disability_cause','baspo_id_no','seniors_citizen','osca_id_no','pensionersc','toilet_type','water_source','food_production_activities','using_idiodized_salt','with_functional_mrf','livinga_rrangements','fenced_household','with_blind_drainage','segrated_wastes','social_status'];
}
