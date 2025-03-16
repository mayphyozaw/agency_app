@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline">
                <div class="card-header bg-blue">
                    <h5 class="m-b-0">Roles</h5>
                </div>
                <div>
                    <a href="{{ route('roles.create') }}" class="btn btn-success border-0" style="margin:15px;">Create
                        Roles</a>
                </div>
                <div class="card-body">

                    <table class="table table-bordered">
                        <thead>
                            <tr style="text-align: center">
                                <th>#</th>
                                <th>Name</th>
                                <th>Permission</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $r)
                                <tr style="text-align: center">
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>{{ $r->name }}</td>

                                    <td>
                                        @foreach ($r->permissions as $p)
                                            <span class="badge badge-primary">
                                                {{ $p->name }}
                                            </span>
                                        @endforeach
                                    </td>
                                    <td>

                                        <form action="{{ route('roles.destroy', $r->id) }}" method="POST">
                                            <a href="{{ route('roles.edit', $r->id) }}"
                                                class="btn btn-sm btn-primary border-0">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="buttom" class="btn btn-sm btn-danger border-0 del_confirm">
                                                Delete
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection
