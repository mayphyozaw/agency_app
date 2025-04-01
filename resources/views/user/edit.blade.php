@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-blue">
                    <h5 class="m-b-0">Update User Form</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('user.update', $user->id) }}" class="form-horizontal form-bordered" method="post"
                        id="create-form" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-body">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Name</label>
                                <div class="col-md-9">
                                    <input placeholder="Enter Name" class="form-control" type="text" name="name"
                                        value="{{ $user->name }}">
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
                                <label class="control-label text-right col-md-3">Email</label>
                                <div class="col-md-9">
                                    <input placeholder="Enter Email" class="form-control" type="email" name="email"
                                        value="{{ $user->email }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Password</label>
                                <div class="col-md-9">
                                    <input placeholder="Enter Password" class="form-control" type="password" name="password"
                                        value="{{ $user->password }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Phone</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" name="phone" value="{{ $user->phone }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Address</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" name="address" value="{{ $user->address }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">NRC</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" name="nrc" value="{{ $user->nrc }}">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Photo</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="file" name="photo">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">NRC Front Photo</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="file" name="frontphoto">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">NRC Back Photo</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="file" name="backphoto">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Householder Photo</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="file" name="householderphoto">
                                </div>
                            </div>



                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Join Date</label>
                                <div class="col-md-9">
                                    <input class="form-control" placeholder="dd/mm/yyyy" type="date" name="joindate"
                                        value="{{ $user->joindate }}">
                                </div>
                            </div>

                            <div class="form-group row last">
                                <label class="control-label text-right col-md-3">Role</label>
                                <div class="col-md-9">
                                    <select class="form-control select2" name="roles[]" multiple>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}"
                                                @if (in_array($role->id, $old_roles)) selected @endif>
                                                {{ $role->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="offset-sm-3 col-md-9">
                                            <button type="submit" class="btn btn-success"> Update</button>

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

    {!! JsValidator::formRequest('App\Http\Requests\UpdateUser', '#create-form') !!}
@endsection
