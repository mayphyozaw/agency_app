@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-blue">
                    <h5 class="m-b-0">User Form</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('labors.store') }}" class="form-horizontal form-bordered" method="post"
                        id="create-form" enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Name</label>
                                <div class="col-md-9">
                                    <input placeholder="Enter Name" class="form-control" type="text" name="name">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Photo</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="file" name="labor_photo">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Gender</label>
                                <div class="col-md-9">
                                    <select class="form-control custom-select" name="gender">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>



                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Phone</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" name="phone">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Address</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" name="address">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">NRC</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" name="nrc">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">NRC Front Photo</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="file" name="nrc_front_photo">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">NRC Back Photo</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="file" name="nrc_back_photo">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Father Name</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" name="father_name">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Mother Name</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" name="mother_name">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Qualification</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" name="qualification">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Date of Birth</label>
                                <div class="col-md-9">
                                    <input class="form-control" placeholder="dd/mm/yyyy" type="date"
                                        name="date_of_birth">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Age</label>
                                <div class="col-md-9">
                                    <input class="form-control" placeholder="Age" type="text" name="age">
                                </div>
                            </div>

                            {{-- passport --}}
                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Passport</label>
                                <div class="col-md-9">
                                    <input class="form-control" placeholder="Passport Number" type="text"
                                        name="passport_number">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Passport Photo</label>
                                <div class="col-md-9">
                                    <input class="form-control" placeholder="Passport Photo" type="file"
                                        name="passport_photo">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Passport Issued Date</label>
                                <div class="col-md-9">
                                    <input class="form-control" placeholder="Passport Issue Date" type="date"
                                        name="passport_issue_date">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Passport Expire Date</label>
                                <div class="col-md-9">
                                    <input class="form-control" placeholder="Passport Expire Date" type="date"
                                        name="passport_expired_date	">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Place of Passport </label>
                                <div class="col-md-9">
                                    <input class="form-control" placeholder="Place of Passport" type="text"
                                        name="passport_place">
                                </div>
                            </div>



                            {{-- OWIC  --}}
                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">OWIC Card Number</label>
                                <div class="col-md-9">
                                    <input class="form-control" placeholder="OWIC Card Number" type="text"
                                        name="owic_card_number">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">OWIC Card Issue Date</label>
                                <div class="col-md-9">
                                    <input class="form-control" placeholder="OWIC Card Issue Date" type="date"
                                        name="owic_card_issue_date">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">OWIC Card Submit Date to NPW</label>
                                <div class="col-md-9">
                                    <input class="form-control" placeholder="OWIC Card Expire Date" type="date"
                                        name="owic_card_submit_date">
                                </div>
                            </div>

                            {{-- Body  --}}

                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Weight</label>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="weight" value="">
                                        <span class="input-group-addon" id="basic-addon2">
                                            (LB)
                                        </span>
                                    </div>
                                </div>

                                <label class="control-label text-right col-md-3">Height</label>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="height" value="">
                                        <span class="input-group-addon" id="basic-addon2">
                                            (cm)
                                        </span>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Smoking</label>
                                <div class="col-md-9">
                                    <select class="form-control custom-select" name="smoking">
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Alcohol</label>
                                <div class="col-md-9">
                                    <select class="form-control custom-select" name="alcohol">
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Tattoo</label>
                                <div class="col-md-9">
                                    <select class="form-control custom-select" name="tattoo">
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>



                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Nation / Religion</label>
                                <div class="col-md-9">
                                    <input class="form-control" placeholder="Nation/Religion" type="text"
                                        name="nation_religion">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Prominent Sign</label>
                                <div class="col-md-9">
                                    <input class="form-control" placeholder="prominent_sign" type="text"
                                        name="prominent_sign">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Working Experience</label>
                                <div class="col-md-9">
                                    <input class="form-control" placeholder="Working Experience" type="text"
                                        name="working_experience">
                                </div>
                            </div>


                            <div class="form-group row last">
                                <label class="control-label text-right col-md-3">Apply Country</label>
                                <div class="col-md-9" style="font-size: 14px;">
                                    <select class="form-control select2" name="country">
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->id }}">
                                                {{ $country->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="form-group row last">
                                <label class="control-label text-right col-md-3">Agents</label>
                                <div class="col-md-9" style="font-size: 14px;">
                                    <select class="form-control select2" name="agent">

                                        @foreach ($local_agents as $local_agent)
                                            <option value="{{ $local_agent->id }}">
                                                {{ $local_agent->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Description</label>
                                <div class="col-md-9">

                                    <textarea name="description" id="description" cols="" rows="" class="form-control">
                                        
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="offset-sm-3 col-md-9">
                                            <button type="submit" class="btn btn-success"> Submit</button>
                                            <button type="button" class="btn btn-inverse">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(function() {
            $('.select2').select2();
        });
    </script>

    {!! JsValidator::formRequest('App\Http\Requests\StoreLabor', '#create-form') !!}
@endsection
