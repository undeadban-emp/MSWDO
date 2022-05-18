@extends('admin.layout.app')
@section('title', 'Admin')
@section('cbmsActive', 'active')
@section('subCbmsActive', 'active')
@section('createCbmsActive', 'active')
@prepend('page-css')
{{-- CSS HERE --}}
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="{{ asset('assets/vendors/sweetalert2/sweetalert2.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome/all.min.css') }}">
<script src="{{ asset('assets/dist/winbox.bundle.js') }}"></script>
<style>
    .stepwizard-step p {
    margin-top: 0px;
    color:#666;
}
.stepwizard-row {
    display: table-row;
}
.stepwizard {
    display: table;
    width: 100%;
    position: relative;
}
.stepwizard-step button[disabled] {
    /*opacity: 1 !important;
    filter: alpha(opacity=100) !important;*/
}
.stepwizard .btn.disabled, .stepwizard .btn[disabled], .stepwizard fieldset[disabled] .btn {
    opacity:1 !important;
    color:#bbb;
}
.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content:" ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-index: 0;
}
.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}
.btn-circle {
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 6px 0;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius: 15px;
}
</style>
@endprepend

@prepend('meta-data')

@endprepend
@section('content')
{{-- content --}}

<div class="page-heading">
    <h3>Create CBMS</h3>
</div>
<div class="page-content">
    <section class="section">

        <div class="card">
            <div class="card-body">
        <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step col-xs-3">
                <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                <p><small>Household Head</small></p>
            </div>
            <div class="stepwizard-step col-xs-3">
                <a href="#step-2" type="button" class="btn btn-secondary btn-circle disabled">2</a>
                <p><small>Members of the Family</small></p>
            </div>
            <div class="stepwizard-step col-xs-3">
                <a href="#step-3" type="button" class="btn btn-secondary btn-circle disabled">3</a>
                <p><small>Home Management</small></p>
            </div>
        </div>
    </div>

    <form class="mt-4" role="form">
        <div class="panel panel-primary setup-content" id="step-1">
            <div class="panel-heading  mb-4">
                <h4 class="card-title">Basic Information</h4>
            </div>
            <div class="panel-body">


                <div class="row">

                    <div class="col-12 col-md-12 col-lg-12 pt-1">
                        <h6>House Hold No:</h6>
                        <input type="text" required class="form-control" id="house_hold_no" placeholder="">
                    </div>

                    <div class="col-12 col-md-4 col-lg-4 pt-1">
                        <h6>House Hold Firstname:</h6>
                        <input type="text" required class="form-control" id="house_hold_firstname" placeholder="">
                    </div>

                    <div class="col-12 col-md-4 col-lg-4 pt-1">
                        <h6>House Hold Middlename:</h6>
                        <input type="text" required class="form-control" id="house_hold_middlename" placeholder="">
                    </div>

                    <div class="col-12 col-md-4 col-lg-4 pt-1">
                        <h6>House Hold Lastname:</h6>
                        <input type="text" required class="form-control" id="house_hold_lastname" placeholder="">
                    </div>

                    <div class="col-12 col-md-4 col-lg-4 pt-1">
                        <h6>Mothers Maiden Firstname:</h6>
                        <input type="text" required class="form-control" id="mothers_maiden_firstname" placeholder="">
                    </div>

                    <div class="col-12 col-md-4 col-lg-4 pt-1">
                        <h6>Mothers Maiden Middlename:</h6>
                        <input type="text" required class="form-control" id="mothers_maiden_middlename" placeholder="">
                    </div>

                    <div class="col-12 col-md-4 col-lg-4 pt-1">
                        <h6>Mothers Maiden Lastname:</h6>
                        <input type="text" class="form-control" id="mothers_maiden_lastname" placeholder="">
                    </div>

                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                        <h6>Barangay:</h6>
                        <div class="form-group">
                            <select id="barangay" class="choices form-select">
                                <option value="">Select subject</option>
                                <option value="Amag">Amag</option>
                                <option value="Balete(Pob.)">Balete (Pob.)</option>
                                <option value="Cabugo">Cabugo</option>
                                <option value="Cagbaoto">Cagbaoto</option>
                                <option value="LaPaz">La Paz</option>
                                <option value="Magobawok">Magobawok</option>
                                <option value="Panaosawon">Panaosawon</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                        <h6>Purok:</h6>
                        <div class="form-group">
                            <select required id="purok" class="choices form-select">
                                <option value="">Please Select</option>
                                <option value="Purok1">Purok 1</option>
                                <option value="Purok2">Purok 2</option>
                                <option value="Purok3">Purok 3</option>
                                <option value="Purok4">Purok 4</option>
                                <option value="Purok5">Purok 5</option>
                                <option value="Purok6">Purok 6</option>
                                <option value="Purok7">Purok 7</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                        <h6>Date of Birth:</h6>
                        <input required type="date" class="form-control" id="date_of_birth" placeholder="">
                    </div>

                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                        <h6>Place of Birth:</h6>
                        <input required type="text" class="form-control" id="place_of_birth" placeholder="">
                    </div>

                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                        <h6>Sex:</h6>
                        <div class="form-group">
                            <select required id="sex" class="choices form-select">
                                <option value="">Please Select</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                        <h6>Civil Status:</h6>
                        <div class="form-group">
                            <select required id="civil_status" class="choices form-select">
                                <option value="">Please Select</option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Widow/er">Widow/er</option>
                                <option value="Separated">Separated</option>
                                <option value="Co-Habitation">Co-Habitation</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                        <h6>Citizenship:</h6>
                        <div class="form-group">
                            <select required id="citizenship" class="choices form-select">
                                <option value="">Please Select</option>
                                <option value="Filipino">Filipino</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                        <h6>Pensioner:</h6>
                        <div class="form-group">
                            <select id="pensioner" class="choices form-select">
                                <option value="">Please Select</option>
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 col-lg-4 pt-2">
                        <h6>Source of income / Occupation:</h6>
                        <input required type="text" class="form-control" id="occupation" placeholder="">
                    </div>

                    <div class="col-12 col-md-4 col-lg-4 pt-2">
                        <h6>Type of Employment:</h6>
                        <div class="form-group">
                            <select required id="type_of_employment" class="choices form-select">
                                <option value="">Please Select</option>
                                <option value="Permanent">Permanent</option>
                                <option value="Regular">Regular</option>
                                <option value="Contractual">Contractual</option>
                                <option value="Casual/JO">Casual / JO</option>
                                <option value="SelfEmployed">Self Employed</option>
                                <option value="Seasonal">Seasonal</option>
                                <option value="Emergency">Emergency</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 col-lg-4 pt-2">
                        <h6>Type of Employeer:</h6>
                        <div class="form-group">
                            <select required id="type_of_employeer" class="choices form-select">
                                <option value="">Please Select</option>
                                <option value="Government">Government</option>
                                <option value="Private">Private</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                        <h6>Employment ID:</h6>
                        <input required type="text" class="form-control" id="employment_id" placeholder="">
                    </div>

                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                        <h6>GSIS/SSS No:</h6>
                        <input type="text" class="form-control" id="gsis_sss_no" placeholder="">
                    </div>

                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                        <h6>Pag-ibig No:</h6>
                        <input type="text" class="form-control" id="pagibig_no" placeholder="">
                    </div>

                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                        <h6>Philhealth ID No:</h6>
                        <input type="text" class="form-control" id="philhealth_id_no" placeholder="">
                    </div>

                    <div class="col-12 col-md-4 col-lg-4 pt-2">
                        <h6>Religion:</h6>
                        <input required type="text" class="form-control" id="religion" placeholder="">
                    </div>

                    <div class="col-12 col-md-4 col-lg-4 pt-2">
                        <h6>Health Condition:</h6>
                        <div class="form-group">
                            <select required id="health_condition" class="choices form-select">
                                <option value="">Please Select</option>
                                <option value="Hypertension">Hyper tension</option>
                                <option value="Diabetic">Diabetic</option>
                                <option value="Cancer">Cancer</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 col-lg-4 pt-2">
                        <h6>Educational Attainments:</h6>
                        <div class="form-group">
                            <select required id="educational_attainments" class="choices form-select">
                                <option value="">Please Select</option>
                                <option value="ElementaryLevel">Elementary Level</option>
                                <option value="ElementaryGraduate">Elementary Graduate</option>
                                <option value="HSLevel">HS Level</option>
                                <option value="HSGraduate">HS Graduate</option>
                                <option value="CollegeLevel">College Level</option>
                                <option value="CollegeGraduate">College Graduate</option>
                                <option value="PostGraduateStudies">Post Graduate Studies</option>
                                <option value="Vocational">Vocational</option>
                            </select>
                        </div>
                    </div>
                </div>


                <hr style="border-top: 3px dotted #bbb;">

                <div class="panel-heading">
                    <h4 class="card-title">For 4PS</h4>
                </div>
                    <div class="row">
                        <div class="col-12 col-md-3 col-lg-3">
                            <h6>4PS:</h6>
                            <div class="form-group">
                                <select id="4ps" class="choices form-select">
                                    <option value="No">No</option>
                                    <option value="Yes">Yes</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-md-9 col-lg-9">
                            <h6>4PS ID No:</h6>
                            <input type="text" class="form-control" id="4_ps_id_no" placeholder="" disabled>
                        </div>
                    </div>

                    <hr style="border-top: 3px dotted #bbb;">


                    <div class="panel-heading">
                        <h4 class="card-title">For Safe Motherhood</h4>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-3 col-lg-3 pt-2">
                            <h6>Practicing Pre-Natal Check-up:</h6>
                            <div class="form-group">
                                <select id="practicing_pre_natal_check_up" class="choices form-select">
                                    <option value="No">No</option>
                                    <option value="Yes">Yes</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12 col-md-3 col-lg-3 pt-2">
                            <h6>Pregnant Mother:</h6>
                            <div style="padding-top:19px;" class="form-group">
                                <select id="pregnant_mother" class="choices form-select" disabled>
                                    <option value="">Please Select</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Yes</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12 col-md-3 col-lg-3 pt-2">
                            <h6>Couple practicing Family Planning:</h6>
                            <div class="form-group">
                                <select id="couple_practicing_family_planning" class="choices form-select" disabled>
                                    <option value="">Please Select</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Yes</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12 col-md-3 col-lg-3 pt-2">
                            <h6>Breastfeeding 6 months child:</h6>
                            <div class="form-group">
                                <select id="breastfeeding_6_months_child" class="choices form-select" disabled>
                                    <option value="">Please Select</option>
                                    <option value="ExclusiveBreastfeeding">Exclusive Breastfeeding</option>
                                    <option value="MixedMilkFeeding">Mixed Milk Feeding</option>
                                    <option value="BottleFeeding">Bottle Feeding</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <hr style="border-top: 3px dotted #bbb;">

                    <div class="panel-heading">
                        <h4 class="card-title">For Pwd</h4>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-2 col-lg-2">
                            <h6>PWD:</h6>
                            <div class="form-group">
                                <select id="person_with_disability" class="choices form-select">
                                    <option value="No">No</option>
                                    <option value="Yes">Yes</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12 col-md-2 col-lg-2">
                            <h6>Type of Disability:</h6>
                            <div class="form-group">
                                <select id="type_of_disability" class="choices form-select" disabled>
                                    <option value="">Please Select</option>
                                    <option value="Psychosocial">Psychosocial</option>
                                    <option value="Visual">Visual</option>
                                    <option value="Hearing">Hearing</option>
                                    <option value="Learning">Learning</option>
                                    <option value="Orthopedic">Orthopedic</option>
                                    <option value="SpeechImpairment">Speech Impairment</option>
                                    <option value="MentalIntellectual">Mental / Intellectual</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12 col-md-4 col-lg-4">
                            <h6>Cause of Disability:</h6>
                            <div class="form-group">
                                <select id="cause_of_disability" class="choices form-select" disabled>
                                    <option value="">Please Select</option>
                                    <option value="CongenitalInborn">Congenital / Inborn</option>
                                    <option value="Illness">Illness</option>
                                    <option value="Injury">Injury</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12 col-md-4 col-lg-4">
                            <h6>BASPO ID No.:</h6>
                            <input type="text" class="form-control" id="baspo_id_no" placeholder="" disabled>
                        </div>
                    </div>

                    <hr style="border-top: 3px dotted #bbb;">

                    <div class="panel-heading">
                        <h4 class="card-title">For Senior Citizen</h4>
                    </div>

                    <div class="row">

                        <div class="col-12 col-md-3 col-lg-3">
                            <h6>Senior Citizen Membership:</h6>
                            <div class="form-group">
                                <select id="senior_citizen_membership" class="choices form-select">
                                    <option value="No">No</option>
                                    <option value="Yes">Yes</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-6">
                            <h6>OSCA ID No:</h6>
                            <input type="text" class="form-control" id="osca_id_no" placeholder="" disabled>
                        </div>

                        <div class="col-12 col-md-3 col-lg-3">
                            <h6>Pensioner:</h6>
                            <div class="form-group">
                                <select name="pensioner_senior" id="pensioner_senior" class="form-control" class="" disabled>
                                    <option value="">Please Select</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Yes</option>
                                </select>
                            </div>
                        </div>
                    </div>
                <button class="btn btn-primary nextBtn pull-right house_hold_head_next" type="button">Next</button>
            </div>
        </div>



        {{-- /////////////////////////////////// MEMBERS OF THE FAMILY //////////////////////////////////////////////////////////////////////////////////////////////////// --}}


        <div class="panel panel-primary setup-content" id="step-2">
            <div class="panel-heading  mb-4">
                <h4 class="card-title">Members of the Family <button id="addNewMember" class="btn btn-primary rounded-pill pull-right" type="button"><dt class="the-icon"><span class="fa-fw select-all fas"></span></dt></button></h4>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <div class="lista">
                    <div class="row list_row">
                            <div class="col-2 pb-2 class_members_of_the_family">
                            </div>
                            <div class="col-6 pb-2">
                                <input id="name_1" maxlength="200" type="text" class="form-control" placeholder="Name of 1" required/>
                            </div>
                            <div class="col-4 pb-2">
                                <button id="details_1" name="1" class="btn btn-primary pull-right details" type="button">Add Details</button>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary nextBtn pull-right members_of_the_family_next" type="button">Next</button>
            </div>
        </div>


{{-- /////////////////////////////////// HOME MANAGEMENT //////////////////////////////////////////////////////////////////////////////////////////////////// --}}


        <div class="panel panel-primary setup-content" id="step-3">
            <div class="panel-heading">
                <h4 class="card-title">Home Management</h4>
            </div>
            <div class="panel-body">
                    <div class="card-header">
                        <h4 class="card-title">For Home Management</h4>
                    </div>
                        <div class="row">

                            <div class="col-12 col-md-3 col-lg-3 pt-2">
                                <h6>Toilet Type:</h6>
                                <div class="form-group">
                                    <select id="toilet_type" class="choices form-select">
                                        <option value="">Please Select</option>
                                        <option value="Sanitary">Sanitary</option>
                                        <option value="Unsanitary">Unsanitary</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12 col-md-3 col-lg-3 pt-2">
                                <h6>Water Source:</h6>
                                <div class="form-group">
                                    <select id="water_source" class="choices form-select">
                                        <option value="">Please Select</option>
                                        <option value="Level1">Level 1</option>
                                        <option value="Level2">Level 2</option>
                                        <option value="Level3">Level 3</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12 col-md-3 col-lg-3 pt-2">
                                <h6>Food Production Activities:</h6>
                                <div class="form-group">
                                    <select id="food_production_activities" class="choices form-select">
                                        <option value="">Please Select</option>
                                        <option value="WithBackyardGarden">With Backyard Garden</option>
                                        <option value="WithoutBackyardGarden">Without Backyard Garden</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12 col-md-3 col-lg-3 pt-2">
                                <h6>Using idiodized salt:</h6>
                                <div class="form-group">
                                    <select id="using_idiodized_salt" class="choices form-select">
                                        <option value="">Please Select</option>
                                        <option value="No">No</option>
                                        <option value="Yes">Yes</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12 col-md-3 col-lg-3 pt-2">
                                <h6>With Functional MRF:</h6>
                                <div class="form-group">
                                    <select id="with_functional_mrf" class="choices form-select">
                                        <option value="">Please Select</option>
                                        <option value="No">No</option>
                                        <option value="Yes">Yes</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12 col-md-3 col-lg-3 pt-2">
                                <h6>Living Arrangements:</h6>
                                <div class="form-group">
                                    <select id="living_arrangements" class="choices form-select">
                                        <option value="">Please Select</option>
                                        <option value="Owned">Owned</option>
                                        <option value="Rent">Rent</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12 col-md-3 col-lg-3 pt-2">
                                <h6>Fenced Household:</h6>
                                <div class="form-group">
                                    <select id="fenced_household" class="choices form-select">
                                        <option value="">Please Select</option>
                                        <option value="No">No</option>
                                        <option value="Yes">Yes</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12 col-md-3 col-lg-3 pt-2">
                                <h6>With Blind Drainage:</h6>
                                <div class="form-group">
                                    <select id="with_blind_drainage" class="choices form-select">
                                        <option value="">Please Select</option>
                                        <option value="No">No</option>
                                        <option value="Yes">Yes</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12 col-md-3 col-lg-3 pt-2">
                                <h6>Segrated Wastes:</h6>
                                <div class="form-group">
                                    <select id="segrated_waste" class="choices form-select">
                                        <option value="">Please Select</option>
                                        <option value="No">No</option>
                                        <option value="Yes">Yes</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                <button class="btn btn-primary nextBtn pull-right home_management_next" type="button">Submit</button>
            </div>
        </div>
    </form>
        </div>
        </div>



{{-- ////////////////////////////// --}}

        {{-- <div class="card">
            <div class="card-header">
                <h4 class="card-title">For Children / Youth</h4>
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                        <h6>School Status:</h6>
                        <div class="form-group">
                            <select class="choices form-select">
                                <option value="InSchool">In School</option>
                                <option value="OutSchool">Out School</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-12 col-lg-12 pt-1">
                        <h6>School & Grade:</h6>
                        <input type="text" class="form-control" id="school_&_grade" placeholder="">
                    </div>
                </div>
            </div>
        </div> --}}


    </section>
</div>


@push('page-scripts')
{{-- JS SCRIPTS HERE --}}
<script src="{{ asset('assets/js/extensions/sweetalert2.js') }}"></script>
<script src="{{ asset('assets/vendors/fontawesome/all.min.js') }}"></script>
<script src="{{ asset('assets/vendors/sweetalert2/sweetalert2.all.min.js') }}"></script>
<script>

$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $(document).ready(function () {
        var count = 2;
        $("#addNewMember").click(function(){
            $(".list_row").append(`
            <div class="col-2 pb-2 class_members_of_the_family">
                            </div>
                            <div class="col-6 pb-2">
                                <input id="name_`+count+`" maxlength="200" type="text" class="form-control" placeholder="Name of `+count+`" required/>
                            </div>
                            <div class="col-4 pb-2">
                                <button id="details_`+count+`" name="`+count+`" class="btn btn-primary pull-right details" type="button">Add Details</button>
                            </div>
                        </div>`);
                        count++;
        });
        $(document).on('click', '.details', function () {
            let id = $(this).attr('name');
            new WinBox({
            title: "Add Details " + id,
            x: "center",
            y: "center",
            width: "75%",
            height: "95%",
            url: `{{ url('/admin/create-details/`+ id +`') }}`,
            onclose: function(force){
                return !confirm("Close window?");
            }
            });
        });


        $( "#4ps" ).change(function() {
                value = $('#4ps').val();
                if(value == "Yes"){
                    $("#4_ps_id_no").prop('required', true);
                    $("#4_ps_id_no").prop('disabled', false);
                    $("#4_ps_id_no").removeClass("is-invalid");
                }else{
                    $("#4_ps_id_no").prop('required', false);
                    $("#4_ps_id_no").prop('disabled', true);
                    $("#4_ps_id_no").removeClass("is-invalid");
                    $("#4_ps_id_no").val("");
                }
        });

        $( "#practicing_pre_natal_check_up" ).change(function() {
                value = $('#practicing_pre_natal_check_up').val();
                if(value == "Yes"){
                    $("#pregnant_mother").prop('required', true);
                    $("#pregnant_mother").prop('disabled', false);
                    $("#pregnant_mother").removeClass("is-invalid");
                    $("#couple_practicing_family_planning").prop('required', true);
                    $("#couple_practicing_family_planning").prop('disabled', false);
                    $("#couple_practicing_family_planning").removeClass("is-invalid");
                    $("#breastfeeding_6_months_child").prop('required', true);
                    $("#breastfeeding_6_months_child").prop('disabled', false);
                    $("#breastfeeding_6_months_child").removeClass("is-invalid");
                }else{
                    $("#pregnant_mother").prop('required', false);
                    $("#pregnant_mother").prop('disabled', true);
                    $("#pregnant_mother").removeClass("is-invalid");
                    $("#pregnant_mother").val("");
                    $("#couple_practicing_family_planning").prop('required', false);
                    $("#couple_practicing_family_planning").prop('disabled', true);
                    $("#couple_practicing_family_planning").removeClass("is-invalid");
                    $("#couple_practicing_family_planning").val("");
                    $("#breastfeeding_6_months_child").prop('required', false);
                    $("#breastfeeding_6_months_child").prop('disabled', true);
                    $("#breastfeeding_6_months_child").removeClass("is-invalid");
                    $("#breastfeeding_6_months_child").val("");
                }
        });

        $( "#person_with_disability" ).change(function() {
                value = $('#person_with_disability').val();
                if(value == "Yes"){
                    $("#type_of_disability").prop('required', true);
                    $("#type_of_disability").prop('disabled', false);
                    $("#type_of_disability").removeClass("is-invalid");
                    $("#cause_of_disability").prop('required', true);
                    $("#cause_of_disability").prop('disabled', false);
                    $("#cause_of_disability").removeClass("is-invalid");
                    $("#baspo_id_no").prop('required', true);
                    $("#baspo_id_no").prop('disabled', false);
                    $("#baspo_id_no").removeClass("is-invalid");
                }else{
                    $("#type_of_disability").prop('required', false);
                    $("#type_of_disability").prop('disabled', true);
                    $("#type_of_disability").removeClass("is-invalid");
                    $("#type_of_disability").val("");
                    $("#cause_of_disability").prop('required', false);
                    $("#cause_of_disability").prop('disabled', true);
                    $("#cause_of_disability").removeClass("is-invalid");
                    $("#cause_of_disability").val("");
                    $("#baspo_id_no").prop('required', false);
                    $("#baspo_id_no").prop('disabled', true);
                    $("#baspo_id_no").removeClass("is-invalid");
                    $("#baspo_id_no").val("");
                }
        });

        $( "#senior_citizen_membership" ).change(function() {
            value = $('#senior_citizen_membership').val();
                if(value == "Yes"){
                    $("#osca_id_no").prop('required', true);
                    $("#osca_id_no").prop('disabled', false);
                    $("#pensioner_senior").prop('disabled', false);
                    $("#osca_id_no").removeClass("is-invalid");
                }else{
                    $("#osca_id_no").prop('required', false);
                    $("#osca_id_no").prop('disabled', true);
                    $("#pensioner_senior").prop('disabled', true);
                    $("#osca_id_no").removeClass("is-invalid");
                    $("#osca_id_no").val("");
                    $("#pensioner_senior").val("");
                }
        });

var navListItems = $('div.setup-panel div a'),
    allWells = $('.setup-content'),
    allNextBtn = $('.nextBtn');

allWells.hide();

navListItems.click(function (e) {
    e.preventDefault();
    var $target = $($(this).attr('href')),
        $item = $(this);

    if (!$item.hasClass('disabled')) {
        navListItems.removeClass('btn-success').addClass('btn-secondary');
        $item.addClass('btn-success');
        allWells.hide();
        $target.show();
        $target.find('input:eq(0)').focus();
    }
});

allNextBtn.click(function () {
    var curStep = $(this).closest(".setup-content"),
        curStepBtn = curStep.attr("id"),
        nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
        curInputs = curStep.find("input[type='text'],input[type='url']"),
        isValid = true;

    $(".form-control").removeClass("is-invalid");
    $(".form-select").removeClass("is-invalid");
    for (var i = 0; i < curInputs.length; i++) {
        if (!curInputs[i].validity.valid) {
            isValid = false;
            $(curInputs[i]).closest(".form-control").addClass("is-invalid");

        }
    }
    if(!isValid){
        Swal.fire({
        icon: "error",
        // title: "Oops...",
        text: "Fill up required inputs",
    });
    }
    if (isValid) nextStepWizard.removeClass('disabled').trigger('click');
});

$('div.setup-panel div a.btn-success').trigger('click');
});
</script>
<script>
    $(document).ready(function () {
            
            
            
            
            


            //console.log(house_hold_no);
            //console.log(house_hold_firstname);
            //console.log(house_hold_middlename);
            //console.log(house_hold_lastname);
            //console.log(mothers_maiden_firstname);
            //console.log(mothers_maiden_middlename);
            //console.log(mothers_maiden_lastname);
            //console.log(barangay);
            //console.log(purok);
            //console.log(date_of_birth);
            //console.log(place_of_birth);
            //console.log(sex);
            //console.log(civil_status);
            //console.log(citizenship);
            //console.log(pensioner);
            //console.log(occupation);
            //console.log(type_of_employment);
            //console.log(type_of_employeer);
            //console.log(employment_id);
            //console.log(gsis_sss_no);
            //console.log(pagibig_no);
            //console.log(philhealth_id_no);
            //console.log(religion);
            //console.log(health_condition);
            //console.log(educational_attainments);
            //console.log(a4ps);
            //console.log(a4_ps_id_no);
            //console.log(practicing_pre_natal_check_up);
            //console.log(pregnant_mother);
            //console.log(couple_practicing_family_planning);
            //console.log(breastfeeding_6_months_child);
            //console.log(person_with_disability);
            //console.log(type_of_disability);
            //console.log(cause_of_disability);
            //console.log(baspo_id_no);
            //console.log(senior_citizen_membership);
            //console.log(osca_id_no);
            //console.log(pensioner_senior);
            //console.log(name_1);
            //console.log(toilet_type);
            //console.log(water_source);
            //console.log(food_production_activities);
            //console.log(using_idiodized_salt);
            //console.log(with_functional_mrf);
            //console.log(living_arrangements);
            //console.log(fenced_household);
            //console.log(with_blind_drainage);
            //console.log(segrated_waste);


        
        $('.house_hold_head_next').click(function () {
            let house_hold_no = $(`#house_hold_no`).val();
            let house_hold_firstname = $(`#house_hold_firstname`).val();
            let house_hold_middlename = $(`#house_hold_middlename`).val();
            let house_hold_lastname = $(`#house_hold_lastname`).val();
            let mothers_maiden_firstname = $(`#mothers_maiden_firstname`).val();
            let mothers_maiden_middlename = $(`#mothers_maiden_middlename`).val();
            let mothers_maiden_lastname = $(`#mothers_maiden_lastname`).val();
            let barangay = $(`#barangay`).val();
            let purok = $(`#purok`).val();
            let date_of_birth = $(`#date_of_birth`).val();
            let place_of_birth = $(`#place_of_birth`).val();
            let sex = $(`#sex`).val();
            let civil_status = $(`#civil_status`).val();
            let citizenship = $(`#citizenship`).val();
            let pensioner = $(`#pensioner`).val();
            let occupation = $(`#occupation`).val();
            let type_of_employment = $(`#type_of_employment`).val();
            let type_of_employeer = $(`#type_of_employeer`).val();
            let employment_id = $(`#employment_id`).val();
            let gsis_sss_no = $(`#gsis_sss_no`).val();
            let pagibig_no = $(`#pagibig_no`).val();
            let philhealth_id_no = $(`#philhealth_id_no`).val();
            let religion = $(`#religion`).val();
            let health_condition = $(`#health_condition`).val();
            let educational_attainments = $(`#educational_attainments`).val();

            let a4ps = $(`#4ps`).val();
            let a4_ps_id_no = $(`#4_ps_id_no`).val();
            
            let practicing_pre_natal_check_up = $(`#practicing_pre_natal_check_up`).val();
            let pregnant_mother = $(`#pregnant_mother`).val();
            let couple_practicing_family_planning = $(`#couple_practicing_family_planning`).val();
            let breastfeeding_6_months_child = $(`#breastfeeding_6_months_child`).val();
            
            let person_with_disability = $(`#person_with_disability`).val();
            let type_of_disability = $(`#type_of_disability`).val();
            let cause_of_disability = $(`#cause_of_disability`).val();
            let baspo_id_no = $(`#baspo_id_no`).val();
            
            let senior_citizen_membership = $(`#senior_citizen_membership`).val();
            let osca_id_no = $(`#osca_id_no`).val();
            let pensioner_senior = $(`#pensioner_senior`).val();
            
            let house_hold_head_data = house_hold_no + "|" + house_hold_firstname + "|" + house_hold_middlename + "|" + house_hold_lastname + "|" + mothers_maiden_firstname + "|" + mothers_maiden_middlename + "|" + mothers_maiden_lastname + "|" + barangay + "|" + purok + "|" + date_of_birth + "|" + place_of_birth + "|" + sex + "|" + civil_status + "|" + citizenship + "|" + pensioner + "|" + occupation + "|" + type_of_employment + "|" + type_of_employeer + "|" + employment_id + "|" + gsis_sss_no + "|" + pagibig_no + "|" + philhealth_id_no + "|" + religion + "|" + health_condition + "|" + educational_attainments + "|" + a4ps + "|" + a4_ps_id_no + "|" + practicing_pre_natal_check_up + "|" + pregnant_mother + "|" + couple_practicing_family_planning + "|" + breastfeeding_6_months_child + "|" + person_with_disability + "|" + type_of_disability + "|" + cause_of_disability + "|" + baspo_id_no + "|" + senior_citizen_membership + "|" + osca_id_no + "|" + pensioner_senior + "|";
            localStorage.setItem("house_hold_head_data", house_hold_head_data);
        });

        $('.members_of_the_family_next').click(function () {
            let length = $('.class_members_of_the_family').length;
            localStorage.removeItem('members_of_the_family_name');
            for(let ii= 1; ii <= length; ii++){
                let ls = localStorage.getItem('members_of_the_family_name');
                let name_1 = $(`#name_` + ii).val();
                if(ls == null){
                    localStorage.setItem("members_of_the_family_name", name_1 + "|");
                }else{
                    localStorage.setItem("members_of_the_family_name", ls + name_1 + "|");
                }
            }
            localStorage.setItem("members_of_the_family_number", length);
        });

        $('.home_management_next').click(function () {
            let toilet_type = $(`#toilet_type`).val();
            let water_source = $(`#water_source`).val();
            let food_production_activities = $(`#food_production_activities`).val();
            let using_idiodized_salt = $(`#using_idiodized_salt`).val();
            let with_functional_mrf = $(`#with_functional_mrf`).val();
            let living_arrangements = $(`#living_arrangements`).val();
            let fenced_household = $(`#fenced_household`).val();
            let with_blind_drainage = $(`#with_blind_drainage`).val();
            let segrated_waste = $(`#segrated_waste`).val();

            let lshome_management_data = toilet_type + "|" + water_source + "|" + food_production_activities + "|" + using_idiodized_salt + "|" + with_functional_mrf + "|" + living_arrangements + "|" + fenced_household + "|" + with_blind_drainage + "|" + segrated_waste + "|";

            let lshouse_hold_head_data = localStorage.getItem('house_hold_head_data');
            let lsmembers_of_the_family_name = localStorage.getItem('members_of_the_family_name');
            let lsmembers_of_the_family_number = localStorage.getItem('members_of_the_family_number');

            $.ajax({
                url: `/admin/create-save-cbms`,
                method: 'POST',
                data: {
                    lshouse_hold_head_data,
                    lsmembers_of_the_family_name,
                    lshome_management_data,
                },
                success: function (response) {
                    console.log(response);
                }
            });
            for(let i= 1; i <= lsmembers_of_the_family_number; i++){
                let lsmembers_of_the_family_data = localStorage.getItem('members_of_the_family_data' + i);
                //$.ajax({
                //    url: `/admin/create-save-cbms`,
                //    method: 'POST',
                //    data: {
                //        lsmembers_of_the_family_data,
                //    },
                //    success: function (response) {
                //    }
                //});
            }
        });
    });

</script>
@endpush
@endsection

