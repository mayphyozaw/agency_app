@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline">
                <div class="card-header bg-blue">
                    <h5 class="m-b-0">Local Agent Lists</h5>
                </div>
                <div>
                    <a href="{{ route('local_agent.create') }}" class="btn btn-success border-0" style="margin:15px;">Create
                        Local Agent</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive text-nowrap" style="overflow-x:auto;">


                        <table class="table table-bordered">
                            <thead>
                                <tr style="text-align: center; ">

                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>NRC</th>
                                    <th>Photo</th>
                                    <th>Region</th>
                                    <th>Township</th>
                                    <th>Join Date</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody style="font-size:14px">
                                @foreach ($local_agents as $local_agent)
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>{{ $local_agent->name }}</td>

                                    <td>
                                        {{ $local_agent->phone }}
                                    </td>

                                    <td>
                                        {{ $local_agent->address }}
                                    </td>

                                    <td>
                                        {{ $local_agent->nrc }}
                                    </td>


                                    <td>
                                        @if (!empty($local_agent->photo))
                                            <img src="{{ Storage::url($local_agent->photo) }}" width="50" height="50"
                                                alt="" class="image-thumbnail">
                                        @endif
                                    </td>


                                    <td>
                                        {{ $local_agent->region ? $local_agent->region->region : 'N/A' }}

                                    </td>


                                    <td>
                                        {{ $local_agent->township ? $local_agent->township->township : 'N/A' }}
                                    </td>

                                    <td>
                                        {{ $local_agent->joindate }}
                                    </td>


                                    <td>

                                        <form action="{{ route('local_agent.destroy', $local_agent->id) }}" method="POST">
                                            <a href="{{ route('local_agent.edit', $local_agent->id) }}"
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
    </div>
@endsection
