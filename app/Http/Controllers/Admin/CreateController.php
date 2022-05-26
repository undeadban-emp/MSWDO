<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\SocialInformation;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.create-cbms');
    }

    public function createDetails($id)
    {
        return view('admin.create-details',compact('id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $lshouse_hold_head_data = $request->lshouse_hold_head_data;
        $lshome_management_data = $request->lshome_management_data;
        
        $house_hold_head_data = (explode("|", $lshouse_hold_head_data));
        $home_management_data = (explode("|", $lshome_management_data));
        //house_hold_head_data//
            $house_hold_no = $house_hold_head_data[0];
            $house_hold_firstname = $house_hold_head_data[1];
            $house_hold_middlename = $house_hold_head_data[2];
            $house_hold_lastname = $house_hold_head_data[3];
            $mothers_maiden_firstname = $house_hold_head_data[4];
            $mothers_maiden_middlename = $house_hold_head_data[5];
            $mothers_maiden_lastname = $house_hold_head_data[6];
            $barangay = $house_hold_head_data[7];
            $purok = $house_hold_head_data[8];
            $birthdate = $house_hold_head_data[9];
            $birthplace = $house_hold_head_data[10];
            $sex = $house_hold_head_data[11];
            $civil_status = $house_hold_head_data[12];
            $citizenship = $house_hold_head_data[13];
            $pensioner = $house_hold_head_data[14];
            $occupation = $house_hold_head_data[15];
            $employment_type = $house_hold_head_data[16];
            $employer_type = $house_hold_head_data[17];
            $employment_id_no = $house_hold_head_data[18];
            $gsis_sss = $house_hold_head_data[19];
            $pagibig = $house_hold_head_data[20];
            $religion = $house_hold_head_data[22];
            $health_condition = $house_hold_head_data[23];
            $philhealth = $house_hold_head_data[21];
            $educational_attainments = $house_hold_head_data[24];
            $a4ps = $house_hold_head_data[25];
            $a4ps_id_no = $house_hold_head_data[26];
            $prenatal_checkup = $house_hold_head_data[27];
            $pregnant_mother = $house_hold_head_data[28];
            $family_planning = $house_hold_head_data[29];
            $breastfeeding_6_months_child = $house_hold_head_data[30];
            $pwd = $house_hold_head_data[31];
            $disability_type = $house_hold_head_data[32];
            $disability_cause = $house_hold_head_data[33];
            $baspo_id_no = $house_hold_head_data[34];
            $seniors_citizen = $house_hold_head_data[35];
            $osca_id_no = $house_hold_head_data[36];
            $pensionersc = $house_hold_head_data[37];
            $toilet_type = $home_management_data[0];
            $water_source = $home_management_data[1];
            $food_production_activities = $home_management_data[2];
            $using_idiodized_salt = $home_management_data[3];
            $with_functional_mrf = $home_management_data[4];
            $livinga_rrangements = $home_management_data[5];
            $fenced_household = $home_management_data[6];
            $with_blind_drainage = $home_management_data[7];
            $segrated_wastes = $home_management_data[8];

            SocialInformation::create([
                'house_hold_no'       => $house_hold_no,
                'house_hold_firstname'       => $house_hold_firstname,
                'house_hold_middlename'       => $house_hold_middlename,
                'house_hold_lastname'       => $house_hold_lastname,
                'mothers_maiden_firstname'       => $mothers_maiden_firstname,
                'mothers_maiden_middlename'       => $mothers_maiden_middlename,
                'mothers_maiden_lastname'       => $mothers_maiden_lastname,
                'family_members_firstname'       => "",
                'family_members_middlename'       => "",
                'family_members_lastname'       => "",
                'family_members_relationship'       => "",
                'barangay'       => $barangay,
                'purok'       => $purok,
                'birthdate'       => $birthdate,
                'birthplace'       => $birthplace,
                'sex'       => $sex,
                'civil_status'       => $civil_status,
                'citizenship'       => $citizenship,
                'pensioner'       => $pensioner,
                'occupation'       => $occupation,
                'employment_type'       => $employment_type,
                'employer_type'       => $employer_type,
                'employment_id_no'       => $employment_id_no,
                'gsis_sss'       => $gsis_sss,
                'pagibig'       => $pagibig,
                'contact_no'       => "",
                'religion'       => $religion,
                'health_condition'       => $health_condition,
                'philhealth'       => $philhealth,
                'educational_attainments'       => $educational_attainments,
                'school_status'       => "",
                'school_grade'       => "",
                '4ps'       => $a4ps,
                '4ps_id_no'       => $a4ps_id_no,
                'ips'       => "",
                'tribe'       => "",
                'prenatal_checkup'       => $prenatal_checkup,
                'pregnant_mother'       => $pregnant_mother,
                'family_planning'       => $family_planning,
                'breastfeeding_6_months_child'       => $breastfeeding_6_months_child,
                'pwd'       => $pwd,
                'disability_type'       => $disability_type,
                'disability_cause'       => $disability_cause,
                'baspo_id_no'       => $baspo_id_no,
                'seniors_citizen'       => $seniors_citizen,
                'osca_id_no'       => $osca_id_no,
                'pensionersc'       => $pensionersc,
                'toilet_type'       => $toilet_type,
                'water_source'       => $water_source,
                'food_production_activities'       => $food_production_activities,
                'using_idiodized_salt'       => $using_idiodized_salt,
                'with_functional_mrf'       => $with_functional_mrf,
                'livinga_rrangements'       => $livinga_rrangements,
                'fenced_household'       => $fenced_household,
                'with_blind_drainage'       => $with_blind_drainage,
                'segrated_wastes'       => $segrated_wastes,
                'social_status'       => "",
            ]);



        $lsmembers_of_the_family_number = $request->lsmembers_of_the_family_number - 1;
        $lsmembers_of_the_family_name = $request->lsmembers_of_the_family_name;
        $lsmembers_of_the_family_data = $request->lsmembers_of_the_family_data;
        $lsmembers_of_the_family_data_explode1 = (explode("~~", $lsmembers_of_the_family_data));

        for($i = 0; $i <= $lsmembers_of_the_family_number; $i++){
            $members_of_the_family_name = (explode("|", $lsmembers_of_the_family_name));
            $members_of_the_family_data = (explode("|", $lsmembers_of_the_family_data_explode1[$i]));
            //members_of_the_family//
            $family_members_relationship_member = $members_of_the_family_data[0];
            $family_members_firstname_member = $members_of_the_family_data[1];
            $family_members_middlename_member = $members_of_the_family_data[2];
            $family_members_lastname_member = $members_of_the_family_data[3];
            $birthdate_member = $members_of_the_family_data[4];
            $birthplace_member = $members_of_the_family_data[5];
            $sex_member = $members_of_the_family_data[6];
            $civil_status_member = $members_of_the_family_data[7];
            $citizenship_member = $members_of_the_family_data[8];
            $pensioner_member = $members_of_the_family_data[9];
            $occupation_member = $members_of_the_family_data[10];
            $employment_type_member = $members_of_the_family_data[11];
            $employer_type_member = $members_of_the_family_data[12];
            $employment_id_no_member = $members_of_the_family_data[13];
            $gsis_sss_member = $members_of_the_family_data[14];
            $pagibig_member = $members_of_the_family_data[15];
            $philhealth_member = $members_of_the_family_data[16];
            $religion_member = $members_of_the_family_data[17];
            $health_condition_member = $members_of_the_family_data[18];
            $educational_attainments_member = $members_of_the_family_data[19];
            $prenatal_checkup_member = $members_of_the_family_data[20];
            $pregnant_mother_member = $members_of_the_family_data[21];
            $family_planning_member = $members_of_the_family_data[22];
            $breastfeeding_6_months_child_member = $members_of_the_family_data[23];
            $pwd_member = $members_of_the_family_data[24];
            $disability_type_member = $members_of_the_family_data[25];
            $disability_cause_member = $members_of_the_family_data[26];
            $baspo_id_no_member = $members_of_the_family_data[27];
            $seniors_citizen_member = $members_of_the_family_data[28];
            $osca_id_no_member = $members_of_the_family_data[29];
            $pensionersc_member = $members_of_the_family_data[30];
            $school_status_member = $members_of_the_family_data[31];
            $school_grade_member = $members_of_the_family_data[32];

            $house_hold_no = $house_hold_head_data[0];
            $house_hold_firstname = $house_hold_head_data[1];
            $house_hold_middlename = $house_hold_head_data[2];
            $house_hold_lastname = $house_hold_head_data[3];
            $mothers_maiden_firstname = $house_hold_head_data[4];
            $mothers_maiden_middlename = $house_hold_head_data[5];
            $mothers_maiden_lastname = $house_hold_head_data[6];
            $barangay = $house_hold_head_data[7];
            $purok = $house_hold_head_data[8];
            $a4ps = $house_hold_head_data[25];
            $a4ps_id_no = $house_hold_head_data[26];
            $toilet_type = $home_management_data[0];
            $water_source = $home_management_data[1];
            $food_production_activities = $home_management_data[2];
            $using_idiodized_salt = $home_management_data[3];
            $with_functional_mrf = $home_management_data[4];
            $livinga_rrangements = $home_management_data[5];
            $fenced_household = $home_management_data[6];
            $with_blind_drainage = $home_management_data[7];
            $segrated_wastes = $home_management_data[8];


            SocialInformation::create([
                'house_hold_no'       => $house_hold_no,
                'house_hold_firstname'       => $house_hold_firstname,
                'house_hold_middlename'       => $house_hold_middlename,
                'house_hold_lastname'       => $house_hold_lastname,
                'mothers_maiden_firstname'       => $mothers_maiden_firstname,
                'mothers_maiden_middlename'       => $mothers_maiden_middlename,
                'mothers_maiden_lastname'       => $mothers_maiden_lastname,
                'family_members_firstname'       => $family_members_firstname_member,
                'family_members_middlename'       => $family_members_middlename_member,
                'family_members_lastname'       => $family_members_lastname_member,
                'family_members_relationship'       => $family_members_relationship_member,
                'barangay'       => $barangay,
                'purok'       => $purok,
                'birthdate'       => $birthdate_member,
                'birthplace'       => $birthplace_member,
                'sex'       => $sex_member,
                'civil_status'       => $civil_status_member,
                'citizenship'       => $citizenship_member,
                'pensioner'       => $pensioner_member,
                'occupation'       => $occupation_member,
                'employment_type'       => $employment_type_member,
                'employer_type'       => $employer_type_member,
                'employment_id_no'       => $employment_id_no_member,
                'gsis_sss'       => $gsis_sss_member,
                'pagibig'       => $pagibig_member,
                'contact_no'       => "",
                'religion'       => $religion_member,
                'health_condition'       => $health_condition_member,
                'philhealth'       => $philhealth_member,
                'educational_attainments'       => $educational_attainments_member,
                'school_status'       => $school_status_member,
                'school_grade'       => $school_grade_member,
                '4ps'       => $a4ps,
                '4ps_id_no'       => $a4ps_id_no,
                'ips'       => "",
                'tribe'       => "",
                'prenatal_checkup'       => $prenatal_checkup_member,
                'pregnant_mother'       => $pregnant_mother_member,
                'family_planning'       => $family_planning_member,
                'breastfeeding_6_months_child'       => $breastfeeding_6_months_child_member,
                'pwd'       => $pwd_member,
                'disability_type'       => $disability_type_member,
                'disability_cause'       => $disability_cause_member,
                'baspo_id_no'       => $baspo_id_no_member,
                'seniors_citizen'       => $seniors_citizen_member,
                'osca_id_no'       => $osca_id_no_member,
                'pensionersc'       => $pensionersc_member,
                'toilet_type'       => $toilet_type,
                'water_source'       => $water_source,
                'food_production_activities'       => $food_production_activities,
                'using_idiodized_salt'       => $using_idiodized_salt,
                'with_functional_mrf'       => $with_functional_mrf,
                'livinga_rrangements'       => $livinga_rrangements,
                'fenced_household'       => $fenced_household,
                'with_blind_drainage'       => $with_blind_drainage,
                'segrated_wastes'       => $segrated_wastes,
                'social_status'       => "",
            ]);
            if($lsmembers_of_the_family_number == $i){
               return response()->json(['success' => true]); 
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
