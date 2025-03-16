@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline">
                <div class="card-header bg-blue">
                    <h5 class="m-b-0">Country</h5>
                </div>
                <div>
                    <a href="{{ route('country.create') }}" class="btn btn-success border-0" style="margin:15px;">Create
                        Country</a>
                </div>
                <div class="card-body">

                    <table class="table table-bordered">
                        <thead>
                            <tr style="text-align: center">
                                <th>#</th>
                                <th>Name</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($country as $c)
                                <tr style="text-align: center">
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>{{ $c->name }}</td>
                                    <td>

                                        <form action="{{ route('country.destroy', $c->id) }}" method="POST">
                                            <a href="{{ route('country.edit', $c->id) }}"
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
