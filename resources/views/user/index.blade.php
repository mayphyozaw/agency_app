@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline">
                <div class="card-header bg-blue">
                    <h5 class="m-b-0">User Lists</h5>
                </div>
                <div>
                    <a href="{{ route('user.create') }}" class="btn btn-success border-0" style="margin:15px;">Create
                        User</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive text-nowrap" style="overflow-x:auto;">
                        <form action="{{ route('user_bulkDelete') }}" method="post">
                            @csrf

                            <table class="table table-bordered">
                                <thead>
                                    <tr style="text-align: center">
                                        <th><input type="checkbox" id="selectAll"></th>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Photo</th>
                                        <th>Gender</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>NRC</th>
                                        <th>NRC Front Photo</th>
                                        <th>NRC Back Photo</th>
                                        <th>Householder Photo</th>
                                        <th>Join Date</th>
                                        <th>Role</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr style="text-align: center;  font-size:14px;">
                                            <td>
                                                <input type="checkbox" class="rowCheckbox" name="selected_users[]"
                                                    value="{{ $user->id }}">
                                            </td>
                                            <td>
                                                {{ $loop->iteration }}
                                            </td>
                                            <td>{{ $user->name }}</td>
                                            <td>
                                                @if (!empty($user->photo))
                                                    <img src="{{ Storage::url($user->photo) }}" width="50"
                                                        height="50" alt="User Photo" class="image-thumbnail">
                                                @endif
                                            </td>

                                            <td>
                                                {{ $user->gender }}
                                            </td>
                                            <td>
                                                {{ $user->email }}
                                            </td>


                                            <td>
                                                {{ $user->phone }}
                                            </td>

                                            <td>
                                                {{ $user->address }}
                                            </td>

                                            <td>
                                                {{ $user->nrc }}
                                            </td>


                                            <td>
                                                @if (!empty($user->frontphoto))
                                                    <img src="{{ Storage::url($user->frontphoto) }}" width="50"
                                                        height="50" alt="" class="image-thumbnail">
                                                @endif
                                            </td>

                                            <td>
                                                @if (!empty($user->backphoto))
                                                    <img src="{{ Storage::url($user->backphoto) }}" width="50"
                                                        height="50" alt="" class="image-thumbnail">
                                                @endif
                                            </td>

                                            <td>
                                                @if (!empty($user->householderphoto))
                                                    <img src="{{ Storage::url($user->householderphoto) }}" width="50"
                                                        height="50" alt="" class="image-thumbnail">
                                                @endif
                                            </td>



                                            <td>
                                                {{ $user->joindate }}
                                            </td>


                                            <td>
                                                @foreach ($user->roles as $role)
                                                    <span class="badge badge-primary">
                                                        {{ $role->name }}
                                                    </span>
                                                @endforeach
                                            </td>
                                            <td>

                                                <a href="{{ route('user.edit', $user->id) }}"
                                                    class="btn btn-sm btn-primary border-0">
                                                    Edit
                                                </a>


                                                <a href="javascript:void(0);" onclick="confirmDelete({{ $user->id }})"
                                                    class="btn btn-sm btn-danger border-0">
                                                    Delete
                                                </a>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <button type="submit" class="btn btn-danger mb-2" id="deleteSelectedBtn" disabled>
                                Selected Delete
                            </button>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('script')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const selectAll = document.getElementById("selectAll");
            const checkboxes = document.querySelectorAll(".rowCheckbox");
            const deleteBtn = document.getElementById("deleteSelectedBtn");

            // Select All Checkboxes
            selectAll.addEventListener("change", function() {
                checkboxes.forEach(checkbox => {
                    checkbox.checked = this.checked;
                });
                toggleDeleteButton();
            });


            checkboxes.forEach(checkbox => {
                checkbox.addEventListener("change", toggleDeleteButton);
            });

            function toggleDeleteButton() {
                deleteBtn.disabled = !document.querySelectorAll(".rowCheckbox:checked").length;
            }
        });
    </script>
    {{-- <script>
        document.getElementById("selectAll").addEventListener("change", function() {
            let checkboxes = document.querySelectorAll(".rowCheckbox");
            checkboxes.forEach(checkbox => {
                checkbox.checked = this.checked;
            });
        });
    </script> --}}
@endsection
