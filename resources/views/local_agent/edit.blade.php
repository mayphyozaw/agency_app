@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-blue">
                    <h5 class="m-b-0">Local Agent Form</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('local_agent.update', $local_agent->id) }}" class="form-horizontal form-bordered"
                        method="post" id="create-form" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-body">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Name</label>
                                <div class="col-md-9">
                                    <input placeholder="Enter Name" class="form-control" type="text" name="name"
                                        value="{{ $local_agent->name }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Phone</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" name="phone"
                                        value="{{ $local_agent->phone }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Address</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" name="address"
                                        value="{{ $local_agent->address }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">NRC</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" name="nrc"
                                        value="{{ $local_agent->nrc }}">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">NRC Photo</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="file" name="photo">
                                </div>
                            </div>


                            <div class="form-group row last">
                                <label class="control-label text-right col-md-3">Regions</label>
                                <div class="col-md-9">
                                    <select class="form-control select2" name="region" id="region">
                                        <option value="">Please select...</option>
                                        @foreach ($regions as $region)
                                            <option value="{{ $region->id }}">
                                                {{ $region->region }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row last">
                                <label class="control-label text-right col-md-3">Townships</label>
                                <div class="col-md-9">
                                    <select class="form-control select2" name="township" id="township">

                                        <option value="">Please select region first...</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Join Date</label>
                                <div class="col-md-9">
                                    <input class="form-control" placeholder="dd/mm/yyyy" type="date" name="joindate">
                                </div>
                            </div>

                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="offset-sm-3 col-md-9">
                                                <button type="submit" class="btn btn-success"> Update</button>
                                                <button type="button" class="btn btn-inverse">Cancel</button>
                                            </div>
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
    <script>
        $(document).ready(function() {
            $('#region').change(function() {
                var regionId = $(this).val();

                if (regionId) {
                    $.ajax({
                        url: "{{ route('getTownship') }}",
                        type: "GET",
                        data: {
                            region_id: regionId
                        },
                        success: function(response) {
                            $('#township').empty();
                            $('#township').append('<option value="">Please select...</option>');

                            $.each(response, function(key, value) {
                                $('#township').append('<option value="' + value.id +
                                    '">' + value.township + '</option>');
                            });
                        }
                    });
                } else {
                    $('#township').empty();
                    $('#township').append('<option value="">Please select region first...</option>');
                }
            });
        });
    </script>
    {!! JsValidator::formRequest('App\Http\Requests\UpdateLocalAgent', '#create-form') !!}
@endsection
