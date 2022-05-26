<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - @yield('title')</title>
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconly/bold.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-icons/bootstrap-icons.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }} ">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.html') }}" type="image/x-icon">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo/favicon.png') }}" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/vendors/sweetalert2/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome/all.min.css') }}">
    <script src="{{ asset('assets/dist/winbox.bundle.js') }}"></script>
</head>

<body>
    <div id="app">
        <div id="" class='layout-navbar'>
            <div id="main-content">
                <div class="card">
                    <div class="card-body">
                <form class="mt-4" role="form">
                    <div class="panel panel-primary setup-content" id="step-1">
                        <div class="panel-heading  mb-4">
                            <h4 class="card-title">Basic Information</h4>
                        </div>
                        <div class="panel-body">


                            <div class="row">

                                <div class="col-12 col-md-12 col-lg-12 pt-2">
                                    <h6>Relationship to the head of the Family:</h6>
                                    <div class="form-group">
                                        <select required id="relationship_member" class="choices form-select">
                                            <option value="">Please Select</option>
                                            <option value="parent">Parent</option>
                                            <option value="child">Child</option>
                                            <option value="spouse">Spouse</option>
                                            <option value="sibling">Sibling</option>
                                            <option value="grandparents">Grandparents</option>
                                            <option value="grandchild">Grandchild</option>
                                            <option value="parentssibling">Parent's Sibling</option>
                                            <option value="siblingschild">Sibling's Child</option>
                                            <option value="auntsUncleschild">Aunt's/Uncle's Child</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-4 pt-1">
                                    <h6>House Hold Member Firstname:</h6>
                                    <input type="text" required class="form-control" id="house_hold_firstname_member" placeholder="">
                                </div>

                                <div class="col-12 col-md-4 col-lg-4 pt-1">
                                    <h6>House Hold Member Middlename:</h6>
                                    <input type="text" required class="form-control" id="house_hold_middlename_member" placeholder="">
                                </div>

                                <div class="col-12 col-md-4 col-lg-4 pt-1">
                                    <h6>House Hold Member Lastname:</h6>
                                    <input type="text" required class="form-control" id="house_hold_lastname_member" placeholder="">
                                </div>





                                <div class="col-12 col-md-3 col-lg-3 pt-2">
                                    <h6>Date of Birth:</h6>
                                    <input required type="date" class="form-control" id="date_of_birth_member" placeholder="">
                                </div>

                                <div class="col-12 col-md-3 col-lg-3 pt-2">
                                    <h6>Place of Birth:</h6>
                                    <input required type="text" class="form-control" id="place_of_birth_member" placeholder="">
                                </div>

                                <div class="col-12 col-md-3 col-lg-3 pt-2">
                                    <h6>Sex:</h6>
                                    <div class="form-group">
                                        <select required id="sex_member" class="choices form-select">
                                            <option value="">Please Select</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-3 col-lg-3 pt-2">
                                    <h6>Civil Status:</h6>
                                    <div class="form-group">
                                        <select required id="civil_status_member" class="choices form-select">
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
                                        <select required id="citizenship_member" class="choices form-select">
                                            <option value="">Please Select</option>
                                            <option value="Filipino">Filipino</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-3 col-lg-3 pt-2">
                                    <h6>Pensioner:</h6>
                                    <div class="form-group">
                                        <select id="pensioner_member" class="choices form-select">
                                            <option value="">Please Select</option>
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-4 pt-2">
                                    <h6>Source of income / Occupation:</h6>
                                    <input required type="text" class="form-control" id="occupation_member" placeholder="">
                                </div>

                                <div class="col-12 col-md-4 col-lg-4 pt-2">
                                    <h6>Type of Employment:</h6>
                                    <div class="form-group">
                                        <select required id="type_of_employment_member" class="choices form-select">
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
                                        <select required id="type_of_employeer_member" class="choices form-select">
                                            <option value="">Please Select</option>
                                            <option value="Government">Government</option>
                                            <option value="Private">Private</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-3 col-lg-3 pt-2">
                                    <h6>Employment ID:</h6>
                                    <input required type="text" class="form-control" id="employment_id_member" placeholder="">
                                </div>

                                <div class="col-12 col-md-3 col-lg-3 pt-2">
                                    <h6>GSIS/SSS No:</h6>
                                    <input type="text" class="form-control" id="gsis_sss_no_member" placeholder="">
                                </div>

                                <div class="col-12 col-md-3 col-lg-3 pt-2">
                                    <h6>Pag-ibig No:</h6>
                                    <input type="text" class="form-control" id="pagibig_no_member" placeholder="">
                                </div>

                                <div class="col-12 col-md-3 col-lg-3 pt-2">
                                    <h6>Philhealth ID No:</h6>
                                    <input type="text" class="form-control" id="philhealth_id_no_member" placeholder="">
                                </div>

                                <div class="col-12 col-md-4 col-lg-4 pt-2">
                                    <h6>Religion:</h6>
                                    <input required type="text" class="form-control" id="religion_member" placeholder="">
                                </div>

                                <div class="col-12 col-md-4 col-lg-4 pt-2">
                                    <h6>Health Condition:</h6>
                                    <div class="form-group">
                                        <select required id="health_condition_member" class="choices form-select">
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
                                        <select required id="educational_attainments_member" class="choices form-select">
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
                                    <h4 class="card-title">For Safe Motherhood</h4>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                                        <h6>Practicing Pre-Natal Check-up:</h6>
                                        <div class="form-group">
                                            <select id="practicing_pre_natal_check_up_member" class="choices form-select">
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                                        <h6>Pregnant Mother:</h6>
                                        <div style="padding-top:19px;" class="form-group">
                                            <select id="pregnant_mother_member" class="choices form-select">
                                                <option value="">Please Select</option>
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                                        <h6>Couple practicing Family Planning:</h6>
                                        <div class="form-group">
                                            <select id="couple_practicing_family_planning_member" class="choices form-select">
                                                <option value="">Please Select</option>
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                                        <h6>Breastfeeding 6 months child:</h6>
                                        <div class="form-group">
                                            <select id="breastfeeding_6_months_child_member" class="choices form-select">
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
                                            <select id="person_with_disability_member" class="choices form-select">
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-2 col-lg-2">
                                        <h6>Type of Disability:</h6>
                                        <div class="form-group">
                                            <select id="type_of_disability_member" class="choices form-select">
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
                                            <select id="cause_of_disability_member" class="choices form-select">
                                                <option value="">Please Select</option>
                                                <option value="CongenitalInborn">Congenital / Inborn</option>
                                                <option value="Illness">Illness</option>
                                                <option value="Injury">Injury</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-4 col-lg-4">
                                        <h6>BASPO ID No.:</h6>
                                        <input type="text" class="form-control" id="baspo_id_no_member" placeholder="">
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
                                            <select id="senior_citizen_membership_member" class="choices form-select">
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 col-lg-6">
                                        <h6>OSCA ID No:</h6>
                                        <input type="text" class="form-control" id="osca_id_no_member" placeholder="" disabled>
                                    </div>

                                    <div class="col-12 col-md-3 col-lg-3">
                                        <h6>Pensioner:</h6>
                                        <div class="form-group">
                                            <select name="pensioner_senior" id="pensioner_senior_member" class="form-control" class="" disabled>
                                                <option value="">Please Select</option>
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>



                                <hr style="border-top: 3px dotted #bbb;">

                                <div class="panel-heading">
                                    <h4 class="card-title">For Children / Youth</h4>
                                </div>

                                <div class="row">

                                    <div class="col-12 col-md-3 col-lg-3">
                                        <h6>School Status:</h6>
                                        <div class="form-group">
                                            <select name="pensioner_senior" id="school_status_member" class="form-control" class="">
                                                <option value="Out">Out School</option>
                                                <option value="In">In School</option>
                                            </select>
                                        </div>
                                    </div>

                                        <div class="col-12 col-md-9 col-lg-9">
                                            <h6>School & Grade:</h6>
                                            <input type="text" class="form-control" id="school_grade_member" placeholder="">
                                        </div>

                                </div>
                            <button class="btn btn-primary nextBtn pull-right members_of_the_family_save" type="button">Save</button>
                        </div>
                    </div>
                    </div>
                    </div>



                {{-- <footer>
                    <div class="footer clearfix mb-0 text-muted">
                        <div class="float-start">
                            <p>Copyright &copy; {{ now()->year }}</p>
                        </div>
                        <div class="float-end">
                            <p>All Rights Reserved</p>
                        </div>
                    </div>
                </footer> --}}
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }} "></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }} "></script>
    <script src="{{ asset('assets/vendors/apexcharts/apexcharts.js') }} "></script>
    <script src="{{ asset('assets/js/pages/dashboard.js') }} "></script>
    <script src="{{ asset('assets/js/mazer.js') }}"></script>
    <script src="{{ asset('assets/js/extensions/sweetalert2.js') }}"></script>
<script src="{{ asset('assets/vendors/fontawesome/all.min.js') }}"></script>
<script src="{{ asset('assets/vendors/sweetalert2/sweetalert2.all.min.js') }}"></script>
<script>
    $(document).ready(function () {
        $( "#practicing_pre_natal_check_up_member" ).change(function() {
                value = $('#practicing_pre_natal_check_up_member').val();
                if(value == "Yes"){
                    $("#pregnant_mother_member").prop('required', true);
                    $("#pregnant_mother_member").prop('disabled', false);
                    $("#pregnant_mother_member").removeClass("is-invalid");
                    $("#couple_practicing_family_planning_member").prop('required', true);
                    $("#couple_practicing_family_planning_member").prop('disabled', false);
                    $("#couple_practicing_family_planning_member").removeClass("is-invalid");
                    $("#breastfeeding_6_months_child_member").prop('required', true);
                    $("#breastfeeding_6_months_child_member").prop('disabled', false);
                    $("#breastfeeding_6_months_child_member").removeClass("is-invalid");
                }else{
                    $("#pregnant_mother_member").prop('required', false);
                    $("#pregnant_mother_member").prop('disabled', true);
                    $("#pregnant_mother_member").removeClass("is-invalid");
                    $("#pregnant_mother_member").val("");
                    $("#couple_practicing_family_planning_member").prop('required', false);
                    $("#couple_practicing_family_planning_member").prop('disabled', true);
                    $("#couple_practicing_family_planning_member").removeClass("is-invalid");
                    $("#couple_practicing_family_planning_member").val("");
                    $("#breastfeeding_6_months_child_member").prop('required', false);
                    $("#breastfeeding_6_months_child_member").prop('disabled', true);
                    $("#breastfeeding_6_months_child_member").removeClass("is-invalid");
                    $("#breastfeeding_6_months_child_member").val("");
                }
        });

        $( "#person_with_disability_member" ).change(function() {
                value = $('#person_with_disability_member').val();
                if(value == "Yes"){
                    $("#type_of_disability_member").prop('required', true);
                    $("#type_of_disability_member").prop('disabled', false);
                    $("#type_of_disability_member").removeClass("is-invalid");
                    $("#cause_of_disability_member").prop('required', true);
                    $("#cause_of_disability_member").prop('disabled', false);
                    $("#cause_of_disability_member").removeClass("is-invalid");
                    $("#baspo_id_no_member").prop('required', true);
                    $("#baspo_id_no_member").prop('disabled', false);
                    $("#baspo_id_no_member").removeClass("is-invalid");
                }else{
                    $("#type_of_disability_member").prop('required', false);
                    $("#type_of_disability_member").prop('disabled', true);
                    $("#type_of_disability_member").removeClass("is-invalid");
                    $("#type_of_disability_member").val("");
                    $("#cause_of_disability_member").prop('required', false);
                    $("#cause_of_disability_member").prop('disabled', true);
                    $("#cause_of_disability_member").removeClass("is-invalid");
                    $("#cause_of_disability_member").val("");
                    $("#baspo_id_no_member").prop('required', false);
                    $("#baspo_id_no_member").prop('disabled', true);
                    $("#baspo_id_no_member").removeClass("is-invalid");
                    $("#baspo_id_no_member").val("");
                }
        });

        $( "#senior_citizen_membership_member" ).change(function() {
            value = $('#senior_citizen_membership_member').val();
                if(value == "Yes"){
                    $("#osca_id_no_member").prop('required', true);
                    $("#osca_id_no_member").prop('disabled', false);
                    $("#pensioner_senior_member").prop('disabled', false);
                    $("#osca_id_no_member").removeClass("is-invalid");
                }else{
                    $("#osca_id_no_member").prop('required', false);
                    $("#osca_id_no_member").prop('disabled', true);
                    $("#pensioner_senior_member").prop('disabled', true);
                    $("#osca_id_no_member").removeClass("is-invalid");
                    $("#osca_id_no_member").val("");
                    $("#pensioner_senior_member").val("");
                }
        });

        $( "#school_status_member" ).change(function() {
                value = $('#school_status_member').val();
                if(value == "In"){
                    $("#school_grade_member").prop('required', true);
                    $("#school_grade_member").prop('disabled', false);
                    $("#school_grade_member").removeClass("is-invalid");
                }else{
                    $("#school_grade_member").prop('required', false);
                    $("#school_grade_member").prop('disabled', true);
                    $("#school_grade_member").removeClass("is-invalid");
                    $("#school_grade_member").val("");
                }
        });



        $('.members_of_the_family_save').click(function () {
            let relationship_member = $(`#relationship_member`).val();
            let house_hold_firstname_member = $(`#house_hold_firstname_member`).val();
            let house_hold_middlename_member = $(`#house_hold_middlename_member`).val();
            let house_hold_lastname_member = $(`#house_hold_lastname_member`).val();
            let date_of_birth_member = $(`#date_of_birth_member`).val();
            let place_of_birth_member = $(`#place_of_birth_member`).val();
            let sex_member = $(`#sex_member`).val();
            let civil_status_member = $(`#civil_status_member`).val();
            let citizenship_member = $(`#citizenship_member`).val();
            let pensioner_member = $(`#pensioner_member`).val();
            let occupation_member = $(`#occupation_member`).val();
            let type_of_employment_member = $(`#type_of_employment_member`).val();
            let type_of_employeer_member = $(`#type_of_employeer_member`).val();
            let employment_id_member = $(`#employment_id_member`).val();
            let gsis_sss_no_member = $(`#gsis_sss_no_member`).val();
            let pagibig_no_member = $(`#pagibig_no_member`).val();
            let philhealth_id_no_member = $(`#philhealth_id_no_member`).val();
            let religion_member = $(`#religion_member`).val();
            let health_condition_member = $(`#health_condition_member`).val();
            let educational_attainments_member = $(`#educational_attainments_member`).val();

            let practicing_pre_natal_check_up_member = $(`#practicing_pre_natal_check_up_member`).val();
            let pregnant_mother_member = $(`#pregnant_mother_member`).val();
            let couple_practicing_family_planning_member = $(`#couple_practicing_family_planning_member`).val();
            let breastfeeding_6_months_child_member = $(`#breastfeeding_6_months_child_member`).val();

            let person_with_disability_member = $(`#person_with_disability_member`).val();
            let type_of_disability_member = $(`#type_of_disability_member`).val();
            let cause_of_disability_member = $(`#cause_of_disability_member`).val();
            let baspo_id_no_member = $(`#baspo_id_no_member`).val();

            let senior_citizen_membership_member = $(`#senior_citizen_membership_member`).val();
            let osca_id_no_member = $(`#osca_id_no_member`).val();
            let pensioner_senior_member = $(`#pensioner_senior_member`).val();

            let school_status_member = $(`#school_status_member`).val();
            let school_grade_member = $(`#school_grade_member`).val();


            let members_of_the_family_data = relationship_member + "|" + house_hold_firstname_member + "|" + house_hold_middlename_member + "|" + house_hold_lastname_member + "|" + date_of_birth_member + "|" + place_of_birth_member + "|" + sex_member + "|" + civil_status_member + "|" + citizenship_member + "|" + pensioner_member + "|" + occupation_member + "|" + type_of_employment_member + "|" + type_of_employeer_member + "|" + employment_id_member + "|" + gsis_sss_no_member + "|" + pagibig_no_member + "|" + philhealth_id_no_member + "|" + religion_member + "|" + health_condition_member + "|" + educational_attainments_member + "|" + practicing_pre_natal_check_up_member + "|" + pregnant_mother_member + "|" + couple_practicing_family_planning_member + "|" + breastfeeding_6_months_child_member + "|" + person_with_disability_member + "|" + type_of_disability_member + "|" + cause_of_disability_member + "|" + baspo_id_no_member + "|" + senior_citizen_membership_member + "|" + osca_id_no_member + "|" + pensioner_senior_member + "|" + school_status_member + "|" + school_grade_member;
            localStorage.setItem("members_of_the_family_data" + {{$id}}, members_of_the_family_data);
        });
    });
</script>
</body>
</html>
