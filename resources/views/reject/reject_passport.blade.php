@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline">
                <div class="card-header bg-blue">
                    <h5 class="m-b-0">Reject</h5>
                </div>
                <div>
                    <h6 class="py-3" style="margin: 10px;">
                        Labors extract their passports from their agency company cause of the various reasons.
                    </h6>
                </div>
                {{-- <div>
                    <a href="{{ route('reject.index') }}" class="btn btn-success border-0" style="margin:15px;">Create
                        Labor</a>
                </div> --}}
                <div class="card-body">

                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-md-3" style="font-size:13px">Reject Date</label>
                            <div class="col-md-9">
                                <input placeholder="Enter Name" class="form-control " type="date" name="reject_date">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3" style="font-size:13px">Reject Reason</label>
                            <div class="col-md-9">
                                <input placeholder="Enter Reson" class="form-control " type="text" name="reason_name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3" style="font-size:13px">Labor Name</label>
                            <div class="col-md-9">
                                <input placeholder="Enter Name" class="form-control " type="text" name="name"
                                    value="{{ $labor->name }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3" style="font-size:13px">Labor Passport</label>
                            <div class="col-md-9">
                                <input placeholder="Enter Name" class="form-control " type="text" name="name"
                                    value="{{ $labor->passport_number }}">
                            </div>
                        </div>

                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="offset-sm-3 col-md-9">

                                            <a href="{{ route('labors.store') }}" class="btn btn-success btn-sm"
                                                type="submit" id="create-form"> Save</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>



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

    {!! JsValidator::formRequest('App\Http\Requests\StoreUpdatedRejectLabor', '#create-form') !!}
@endsection
