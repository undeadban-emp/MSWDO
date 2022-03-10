@extends('admin.layout.app')
@section('title', 'Admin')
@section('cbmsActive', 'active')
@section('subCbmsActive', 'active')
@section('createCbmsActive', 'active')
@prepend('page-css')
{{-- CSS HERE --}}
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
            <div class="card-header">
                <h4 class="card-title">Basic Information</h4>
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="col-12 col-md-12 col-lg-12 pt-1">
                        <h6>House Hold No:</h6>
                        <input type="text" class="form-control" id="HouseHoldNo" placeholder="Enter House Hold No">
                    </div>

                    <div class="col-12 col-md-4 col-lg-4 pt-1">
                        <h6>House Hold Firstname:</h6>
                        <input type="text" class="form-control" id="House Hold Firstname" placeholder="Enter House Hold Firstname">
                    </div>

                    <div class="col-12 col-md-4 col-lg-4 pt-1">
                        <h6>House Hold Middlename:</h6>
                        <input type="text" class="form-control" id="House Hold Middlename" placeholder="Enter House Hold Middlename">
                    </div>

                    <div class="col-12 col-md-4 col-lg-4 pt-1">
                        <h6>House Hold Lastname:</h6>
                        <input type="text" class="form-control" id="House Hold Lastname" placeholder="Enter House Hold Lastname">
                    </div>

                    <div class="col-12 col-md-4 col-lg-4 pt-1">
                        <h6>Mothers Maiden Firstname:</h6>
                        <input type="text" class="form-control" id="Mothers Maiden Firstname" placeholder="Enter Mothers Maiden Firstname">
                    </div>

                    <div class="col-12 col-md-4 col-lg-4 pt-1">
                        <h6>Mothers Maiden Middlename:</h6>
                        <input type="text" class="form-control" id="Mothers Maiden Middlename" placeholder="Enter Mothers Maiden Middlename">
                    </div>

                    <div class="col-12 col-md-4 col-lg-4 pt-1">
                        <h6>Mothers Maiden Lastname:</h6>
                        <input type="text" class="form-control" id="Mothers Maiden Lastname" placeholder="Enter Mothers Maiden Lastname">
                    </div>
                    
                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                        <h6>Barangay:</h6>
                        <div class="form-group">
                            <select class="choices form-select">
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
                            <select class="choices form-select">
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
                        <input type="date" class="form-control" id="DateofBirth" placeholder="Enter DateofBirth">
                    </div>

                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                        <h6>Place of Birth:</h6>
                        <input type="text" class="form-control" id="Birthplace" placeholder="Enter Birthplace">
                    </div>

                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                        <h6>Sex:</h6>
                        <div class="form-group">
                            <select class="choices form-select">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                        <h6>Civil Status:</h6>
                        <div class="form-group">
                            <select class="choices form-select">
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
                            <select class="choices form-select">
                                <option value="Filipino">Filipino</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                        <h6>Pensioner:</h6>
                        <div class="form-group">
                            <select class="choices form-select">
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                        <h6>Source of income / Occupation:</h6>
                        <input type="text" class="form-control" id="Occupation" placeholder="Enter Source of income / Occupation">
                    </div>

                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                        <h6>Type of Employment:</h6>
                        <div class="form-group">
                            <select class="choices form-select">
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

                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                        <h6>Type of Employeer:</h6>
                        <div class="form-group">
                            <select class="choices form-select">
                                <option value="Government">Government</option>
                                <option value="Private">Private</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                        <h6>Employment ID:</h6>
                        <input type="text" class="form-control" id="EmploymentID" placeholder="Enter Employment ID">
                    </div>

                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                        <h6>GSIS/SSS No:</h6>
                        <input type="text" class="form-control" id="GSIS/SSSNo" placeholder="Enter GSIS/SSS No">
                    </div>

                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                        <h6>Pag-ibig No:</h6>
                        <input type="text" class="form-control" id="PagibigNo" placeholder="Enter Pag-ibig No">
                    </div>

                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                        <h6>Religion:</h6>
                        <input type="text" class="form-control" id="Religion" placeholder="Enter Religion">
                    </div>

                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                        <h6>Health Condition:</h6>
                        <div class="form-group">
                            <select class="choices form-select">
                                <option value="Hypertension">Hyper tension</option>
                                <option value="Diabetic">Diabetic</option>
                                <option value="Cancer">Cancer</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                        <h6>Philhealth ID No:</h6>
                        <input type="text" class="form-control" id="PhilhealthIDNo" placeholder="Enter Philhealth ID No">
                    </div>

                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                        <h6>Educational Attainments:</h6>
                        <div class="form-group">
                            <select class="choices form-select">
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
            </div>
        </div>

        <div class="card">
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
                        <input type="text" class="form-control" id="SchoolGrade" placeholder="Enter School & Grade">
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">For 4PS</h4>
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                        <h6>4PS:</h6>
                        <div class="form-group">
                            <select class="choices form-select">
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                            </select>
                        </div>
                    </div>
                    	
                    <div class="col-12 col-md-12 col-lg-12 pt-1">
                        <h6>4PS ID No:</h6>
                        <input type="text" class="form-control" id="4PSIDNo" placeholder="Enter 4PS ID No">
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">For IPs</h4>
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                        <h6>IPs:</h6>
                        <div class="form-group">
                            <select class="choices form-select">
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                            </select>
                        </div>
                    </div>
                    	
                    <div class="col-12 col-md-12 col-lg-12 pt-1">
                        <h6>Tribe:</h6>
                        <input type="text" class="form-control" id="Tribe" placeholder="Enter Tribe">
                    </div>
                </div>
            </div>
        </div>				

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">For Safe Motherhood</h4>
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                        <h6>Practicing Pre-Natal Check-up:</h6>
                        <div class="form-group">
                            <select class="choices form-select">
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                        <h6>Pregnant Mother:</h6>
                        <div class="form-group">
                            <select class="choices form-select">
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                        <h6>Couple practicing Family Planning:</h6>
                        <div class="form-group">
                            <select class="choices form-select">
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                        <h6>Breastfeeding 6 months child:</h6>
                        <div class="form-group">
                            <select class="choices form-select">
                                <option value="ExclusiveBreastfeeding">Exclusive Breastfeeding</option>
                                <option value="MixedMilkFeeding">Mixed Milk Feeding</option>
                                <option value="BottleFeeding">Bottle Feeding</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>				

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">For PWD</h4>
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                        <h6>PWD:</h6>
                        <div class="form-group">
                            <select class="choices form-select">
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                        <h6>Type of Disability:</h6>
                        <div class="form-group">
                            <select class="choices form-select">
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

                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                        <h6>Cause of Disability:</h6>
                        <div class="form-group">
                            <select class="choices form-select">
                                <option value="CongenitalInborn">Congenital / Inborn</option>
                                <option value="Illness">Illness</option>
                                <option value="Injury">Injury</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-12 col-lg-12 pt-1">
                        <h6>BASPO ID No.:</h6>
                        <input type="text" class="form-control" id="BASPOIDNo" placeholder="Enter BASPO ID No">
                    </div>
                </div>
            </div>
        </div>				

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">For Senior Citizen</h4>
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                        <h6>Senior Citizen Membership:</h6>
                        <div class="form-group">
                            <select class="choices form-select">
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-12 col-lg-12 pt-1">
                        <h6>OSCA ID No:</h6>
                        <input type="text" class="form-control" id="OSCAIDNo" placeholder="Enter OSCA ID No">
                    </div>

                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                        <h6>Pensioner:</h6>
                        <div class="form-group">
                            <select class="choices form-select">
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>				

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">For Home Management</h4>
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                        <h6>Toilet Type:</h6>
                        <div class="form-group">
                            <select class="choices form-select">
                                <option value="Sanitary">Sanitary</option>
                                <option value="Unsanitary">Unsanitary</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                        <h6>Water Source:</h6>
                        <div class="form-group">
                            <select class="choices form-select">
                                <option value="Level1">Level 1</option>
                                <option value="Level2">Level 2</option>
                                <option value="Level3">Level 3</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                        <h6>Food Production Activities:</h6>
                        <div class="form-group">
                            <select class="choices form-select">
                                <option value="WithBackyardGarden">With Backyard Garden</option>
                                <option value="WithoutBackyardGarden">Without Backyard Garden</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                        <h6>Using idiodized salt:</h6>
                        <div class="form-group">
                            <select class="choices form-select">
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                        <h6>With Functional MRF:</h6>
                        <div class="form-group">
                            <select class="choices form-select">
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                        <h6>Living Arrangements:</h6>
                        <div class="form-group">
                            <select class="choices form-select">
                                <option value="Owned">Owned</option>
                                <option value="Rent">Rent</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                        <h6>Fenced Household:</h6>
                        <div class="form-group">
                            <select class="choices form-select">
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                        <h6>With Blind Drainage:</h6>
                        <div class="form-group">
                            <select class="choices form-select">
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 col-lg-3 pt-2">
                        <h6>Segrated Wastes:</h6>
                        <div class="form-group">
                            <select class="choices form-select">
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section></section>
</div>


@push('page-scripts')
{{-- JS SCRIPTS HERE --}}
@endpush
@endsection

