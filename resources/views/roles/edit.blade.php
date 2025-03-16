@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-blue">
                    <h5 class="m-b-0">Roles Form</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('roles.update', $role->id) }}" class="form-horizontal form-bordered"
                        id="create-form" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-body">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Name</label>
                                <div class="col-md-9">
                                    <input placeholder="Name" class="form-control" type="text" name="name"
                                        value="{{ $role->name }}">
                                </div>
                            </div>



                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <h4 style="font-weight: bold;">
                                    Permissions
                                </h4>
                            </div>
                            @foreach ($permissions as $p)
                                <div class="col-md-4">
                                    <div class="checkbox">
                                        <label for="checkbox_{{ $p->id }}">
                                            <input type="checkbox" name="permission[]" id="checkbox_{{ $p->id }}"
                                                value="{{ $p->name }}"
                                                @if (in_array($p->id, $old_permissions)) checked @endif />
                                            {{ $p->name }}
                                        </label>
                                    </div>
                                </div>
                            @endforeach
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
    {!! JsValidator::formRequest('App\Http\Requests\UpdateRole', '#create-form') !!}
@endsection
