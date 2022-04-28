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
                                        <select required id="Relationship" class="choices form-select">
                                            <option value="">Please Select</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-4 pt-1">
                                    <h6>House Hold Member Firstname:</h6>
                                    <input type="text" required class="form-control" id="house_hold_firstname" placeholder="">
                                </div>

                                <div class="col-12 col-md-4 col-lg-4 pt-1">
                                    <h6>House Hold Member Middlename:</h6>
                                    <input type="text" required class="form-control" id="house_hold_middlename" placeholder="">
                                </div>

                                <div class="col-12 col-md-4 col-lg-4 pt-1">
                                    <h6>House Hold Member Lastname:</h6>
                                    <input type="text" required class="form-control" id="house_hold_lastname" placeholder="">
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



                                <hr style="border-top: 3px dotted #bbb;">

                                <div class="panel-heading">
                                    <h4 class="card-title">For Children / Youth</h4>
                                </div>

                                <div class="row">

                                    <div class="col-12 col-md-3 col-lg-3">
                                        <h6>School Status:</h6>
                                        <div class="form-group">
                                            <select name="pensioner_senior" id="school_status" class="form-control" class="">
                                                <option value="*">Please Select</option>
                                                <option value="In">In School</option>
                                                <option value="Out">Out School</option>
                                            </select>
                                        </div>
                                    </div>

                                        <div class="col-12 col-md-9 col-lg-9">
                                            <h6>School & Grade:</h6>
                                            <input type="text" class="form-control" id="school_grade" placeholder="">
                                        </div>

                                </div>
                            <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
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
</body>
</html>
