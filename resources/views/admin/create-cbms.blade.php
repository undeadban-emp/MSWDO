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
                        <input type="text" required class="form-control" id="HouseHoldNo" placeholder="">
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
                                    <option value="">Please Select</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Yes</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12 col-md-3 col-lg-3 pt-2">
                            <h6>Pregnant Mother:</h6>
                            <div style="padding-top:19px;" class="form-group">
                                <select id="pregnant_mother" class="choices form-select">
                                    <option value="">Please Select</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Yes</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12 col-md-3 col-lg-3 pt-2">
                            <h6>Couple practicing Family Planning:</h6>
                            <div class="form-group">
                                <select id="couple_practicing_family_planning" class="choices form-select">
                                    <option value="">Please Select</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Yes</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12 col-md-3 col-lg-3 pt-2">
                            <h6>Breastfeeding 6 months child:</h6>
                            <div class="form-group">
                                <select id="breastfeeding_6_months_child" class="choices form-select">
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
                                    <option value="">Please Select</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Yes</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12 col-md-2 col-lg-2">
                            <h6>Type of Disability:</h6>
                            <div class="form-group">
                                <select id="type_of_disability" class="choices form-select">
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
                                <select id="cause_of_disability" class="choices form-select">
                                    <option value="">Please Select</option>
                                    <option value="CongenitalInborn">Congenital / Inborn</option>
                                    <option value="Illness">Illness</option>
                                    <option value="Injury">Injury</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12 col-md-4 col-lg-4">
                            <h6>BASPO ID No.:</h6>
                            <input type="text" class="form-control" id="baspo_id_no" placeholder="">
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
                                    <option value="*">Please Select</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Yes</option>
                                </select>
                            </div>
                        </div>
                    </div>
                <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
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
                    <div class="row">
                            <div class="col-2 pb-2">
                            </div>
                            <div class="col-6 pb-2">
                                <input id="name_1" maxlength="200" type="text" class="form-control" placeholder="Name of 1st" required/>
                            </div>
                            <div class="col-4 pb-2">
                                <button id="winbox" class="btn btn-primary pull-right" type="button">Add Details</button>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
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
                <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
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




    $(document).ready(function () {
        var count = 2;
        $("#addNewMember").click(function(){
            $(".row").append(`
            <div class="col-2 pb-2">
                            </div>
                            <div class="col-6 pb-2">
                                <input id="name_`+count+`" maxlength="200" type="text" class="form-control" placeholder="Name of 1st" required/>
                            </div>
                            <div class="col-4 pb-2">
                                <button id="details_`+count+`" class="btn btn-primary pull-right" type="button">Add Details</button>
                            </div>
                        </div>`);
                        count++;
        });

        $("#winbox").click(function(){
            new WinBox({
            title: "Add Details",
            x: "center",
            y: "center",
            width: "75%",
            height: "95%",
            url: `{{ url('/admin/create-details') }}`,
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
@endpush
@endsection

