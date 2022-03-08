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

                    <div class="col-12 col-md-4 col-lg-4 pt-1">
                        <h6>Firstname:</h6>
                        <input type="text" class="form-control" id="fName" placeholder="Enter Firstname">
                    </div>

                    <div class="col-12 col-md-4 col-lg-4 pt-1">
                        <h6>Middlename:</h6>
                        <input type="text" class="form-control" id="basicInput" placeholder="Enter Middlename">
                    </div>

                    <div class="col-12 col-md-4 col-lg-4 pt-1">
                        <h6>Lastname:</h6>
                        <input type="text" class="form-control" id="basicInput" placeholder="Enter Lastname">
                    </div>

                    <div class="col-12 col-md-6 col-lg-6 pt-2">
                        <h6>Mother's Maiden Name:</h6>
                        <input type="text" class="form-control" id="basicInput" placeholder="Enter Mother's Maiden Name">
                    </div>

                    <div class="col-12 col-md-6 col-lg-6 pt-2">
                        <h6>Contact Number:</h6>
                        <input type="text" class="form-control" id="basicInput" placeholder="Enter Contact Number">
                    </div>

                    <div class="col-12 col-md-6 col-lg-6 pt-2">
                        <h6>Barangay:</h6>
                        <div class="form-group">
                            <select class="choices form-select">
                                <option value="square">Square</option>
                                <option value="rectangle">Rectangle</option>
                                <option value="rombo">Rombo</option>
                                <option value="romboid">Romboid</option>
                                <option value="trapeze">Trapeze</option>
                                <option value="traible">Triangle</option>
                                <option value="polygon">Polygon</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6 pt-2">
                        <h6>Purok:</h6>
                        <div class="form-group">
                            <select class="choices form-select">
                                <option value="square">Square</option>
                                <option value="rectangle">Rectangle</option>
                                <option value="rombo">Rombo</option>
                                <option value="romboid">Romboid</option>
                                <option value="trapeze">Trapeze</option>
                                <option value="traible">Triangle</option>
                                <option value="polygon">Polygon</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6 pt-2">
                        <h6>Date of Birth:</h6>
                        <input type="date" class="form-control" id="basicInput" placeholder="Enter Contact Number">
                    </div>

                    <div class="col-12 col-md-6 col-lg-6 pt-2">
                        <h6>Place of Birth:</h6>
                        <input type="text" class="form-control" id="basicInput" placeholder="Enter Contact Number">
                    </div>

                    <div class="col-12 col-md-6 col-lg-6 pt-2">
                        <h6>Sex:</h6>
                        <div class="form-group">
                            <select class="choices form-select">
                                <option value="square">Square</option>
                                <option value="rectangle">Rectangle</option>
                                <option value="rectangle">Rectangle</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6 pt-2">
                        <h6>Civil Status:</h6>
                        <div class="form-group">
                            <select class="choices form-select">
                                <option value="square">Square</option>
                                <option value="rectangle">Rectangle</option>
                                <option value="rectangle">Rectangle</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6 pt-2">
                        <h6>Age:</h6>
                        <input type="number" class="form-control" id="basicInput" placeholder="Enter Contact Number">
                    </div>

                    <div class="col-12 col-md-6 col-lg-6 pt-2">
                        <h6>Citizenship:</h6>
                        <input type="text" class="form-control" id="basicInput" placeholder="Enter Contact Number">
                    </div>

                    <div class="col-12 col-md-6 col-lg-6 pt-2">
                        <h6>Pensioner:</h6>
                        <div class="form-group">
                            <select class="choices form-select">
                                <option value="square">Square</option>
                                <option value="rectangle">Rectangle</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6 pt-2">
                        <h6>Source of income / Occupation:</h6>
                        <input type="text" class="form-control" id="basicInput" placeholder="Enter Contact Number">
                    </div>

                    <div class="col-12 col-md-6 col-lg-6 pt-2">
                        <h6>Type of Employment:</h6>
                        <div class="form-group">
                            <select class="choices form-select">
                                <option value="square">Square</option>
                                <option value="rectangle">Rectangle</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6 pt-2">
                        <h6>Type of Employeer:</h6>
                        <div class="form-group">
                            <select class="choices form-select">
                                <option value="square">Square</option>
                                <option value="rectangle">Rectangle</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6 pt-2">
                        <h6>Employment ID:</h6>
                        <input type="text" class="form-control" id="basicInput" placeholder="Enter Contact Number">
                    </div>

                    <div class="col-12 col-md-6 col-lg-6 pt-2">
                        <h6>GSIS/SSS number:</h6>
                        <input type="text" class="form-control" id="basicInput" placeholder="Enter Contact Number">
                    </div>

                    <div class="col-12 col-md-6 col-lg-6 pt-2">
                        <h6>Pag-ibig number:</h6>
                        <input type="text" class="form-control" id="basicInput" placeholder="Enter Contact Number">
                    </div>

                    <div class="col-12 col-md-6 col-lg-6 pt-2">
                        <h6>Religion:</h6>
                        <input type="text" class="form-control" id="basicInput" placeholder="Enter Contact Number">
                    </div>

                    <div class="col-12 col-md-6 col-lg-6 pt-2">
                        <h6>Health Condition:</h6>
                        <input type="text" class="form-control" id="basicInput" placeholder="Enter Contact Number">
                    </div>

                    <div class="col-12 col-md-6 col-lg-6 pt-2">
                        <h6>Philhealth ID No:</h6>
                        <input type="text" class="form-control" id="basicInput" placeholder="Enter Contact Number">
                    </div>

                    <div class="col-12 col-md-6 col-lg-6 pt-2">
                        <h6>Educational Attainments:</h6>
                        <div class="form-group">
                            <select class="choices form-select">
                                <option value="square">Square</option>
                                <option value="rectangle">Rectangle</option>
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

