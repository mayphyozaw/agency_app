@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline">
                <div class="card-header bg-blue">
                    <h5 class="m-b-0">Labors Lists</h5>
                </div>
                {{-- <div>
                    <a href="{{ route('labors.create') }}" class="btn btn-success border-0" style="margin:15px;">Create
                        Labor</a>
                </div> --}}
                <div class="card-body">
                    <div class="table-responsive text-nowrap" style="overflow-x:auto;">
                        <form action="" method="post">
                            @csrf
                            <table class="table table-bordered">
                                <thead>
                                    <tr style="text-align: center">

                                        <th><input type="checkbox" id="selectAll"></th>
                                        <th>#</th>

                                        <th>Reject Date</th>
                                        <th>File Upload</th>
                                        <th>Name</th>
                                        <th>Photo</th>
                                        <th>Gender</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>NRC</th>
                                        <th>NRC Front Photo</th>
                                        <th>NRC Back Photo</th>
                                        <th>Father Name</th>
                                        <th>Mother Name</th>
                                        <th>Qualification</th>
                                        <th>Date of Birth</th>
                                        <th>Age</th>
                                        <th>Passport</th>
                                        <th>Passport Photo</th>
                                        <th>Passport Issued Date</th>
                                        <th>Passport Expire Date</th>
                                        <th>Place of Passport </th>
                                        <th>OWIC Card Number</th>
                                        <th>OWIC Card Issue Date</th>
                                        <th>OWIC Card Submit Date to NPW</th>
                                        <th>Weight</th>
                                        <th>Height</th>
                                        <th>Smoking</th>
                                        <th>Alcohol</th>
                                        <th>Tattoo</th>
                                        <th>Nation / Religion</th>
                                        <th>Prominent Sign</th>
                                        <th>Working Experience</th>
                                        <th>Apply Country</th>
                                        <th>Agents</th>
                                        <th>Description</th>

                                    </tr>
                                </thead>
                                <tbody style="font-size:13px">
                                    @foreach ($labors as $labor)
                                        <tr style="text-align: center">
                                            <td>
                                                <input type="checkbox" class="rowCheckbox" name="selected_users[]"
                                                    value="{{ $labor->id }}">
                                            </td>
                                            <td>
                                                {{ $loop->iteration }}
                                            </td>


                                            <td>
                                                <a href="" class="btn btn-sm btn-danger border-0">File Upload</a>
                                            </td>

                                            <td>
                                                {{ $labor->reject_date }}
                                            </td>



                                            <td>
                                                {{ $labor->name }}
                                            </td>

                                            <td>
                                                {{ $labor->reason_name }}
                                            </td>

                                            <td>
                                                {{ $labor->passport_number }}
                                            </td>


                                            <td>
                                                {{ $labor->passport_issue_date }}
                                            </td>


                                            <td>
                                                {{ $labor->passport_expired_date }}
                                            </td>

                                            <td>
                                                {{ $labor->gender }}
                                            </td>
                                            <td>
                                                {{ $labor->phone }}
                                            </td>

                                            <td>
                                                {{ $labor->address }}
                                            </td>

                                            <td>
                                                {{ $labor->nrc }}
                                            </td>
                                            <td>
                                                @if (!empty($labor->nrc_front_photo))
                                                    <img src="{{ Storage::url($labor->nrc_front_photo) }}" width="50"
                                                        height="50" alt="" class="image-thumbnail">
                                                @endif
                                            </td>
                                            <td>
                                                @if (!empty($labor->nrc_back_photo))
                                                    <img src="{{ Storage::url($labor->nrc_back_photo) }}" width="50"
                                                        height="50" alt="" class="image-thumbnail">
                                                @endif
                                            </td>

                                            <td>
                                                {{ $labor->father_name }}
                                            </td>

                                            <td>
                                                {{ $labor->mother_name }}
                                            </td>

                                            <td>
                                                {{ $labor->qualification }}
                                            </td>

                                            <td>
                                                {{ $labor->date_of_birth }}
                                            </td>

                                            <td>
                                                {{ $labor->age }}
                                            </td>


                                            <td>
                                                @if (!empty($labor->passport_photo))
                                                    <img src="{{ Storage::url($labor->passport_photo) }}" width="50"
                                                        height="50" alt="" class="image-thumbnail">
                                                @endif
                                            </td>




                                            <td>
                                                {{ $labor->passport_place }}
                                            </td>

                                            <td>
                                                {{ $labor->owic_card_number }}
                                            </td>

                                            <td>
                                                {{ $labor->owic_card_issue_date }}
                                            </td>

                                            <td>
                                                {{ $labor->owic_card_submit_date }}
                                            </td>

                                            <td>
                                                {{ $labor->weight }}
                                            </td>

                                            <td>
                                                {{ $labor->height }}
                                            </td>

                                            <td>
                                                {{ $labor->smoking }}
                                            </td>

                                            <td>
                                                {{ $labor->alcohol }}
                                            </td>

                                            <td>
                                                {{ $labor->tattoo }}
                                            </td>

                                            <td>
                                                {{ $labor->nation_religion }}
                                            </td>

                                            <td>
                                                {{ $labor->prominent_sign }}
                                            </td>


                                            <td>
                                                {{ $labor->working_experience }}
                                            </td>

                                            <td>
                                                {{ $labor->country ? $labor->country->name : 'N/A' }}
                                            </td>


                                            <td>
                                                {{ $labor->local_agent ? $labor->local_agent->name : 'N/A' }}
                                            </td>
                                            <td>
                                                {{ $labor->description }}
                                            </td>



                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <button type="submit" class="btn btn-danger mb-2" id="deleteSelectedBtn" disabled>
                                Selected Reject
                            </button>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
