@extends('layouts.app5')

@section('content')

<div class="card-box">

    <div class="d-flex justify-content-between mb-3">

        <h3>Students</h3>

        <div class="d-flex gap-2">

            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addStudentModal">
                + Add Student
            </button>

            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#importStudentModal">
                Import Excel
            </button>

        </div>

    </div>

    <!-- TABLE -->
    <div class="table-responsive">

        <table class="table table-bordered">

            <thead class="table-dark">
                <tr>
                    <th>Photo</th>
                    <th>Admission No</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Phone</th>
                    <th>Level</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>

                @forelse($students as $student)

                    <tr>

                        <td>
                            <img src="{{ $student->picture_name
                                    ? asset('storage/students/' . $student->picture_name)
                                    : asset('images/blank.png') }}"
                                 width="40"
                                 height="40"
                                 class="rounded-circle">
                        </td>

                        <td>{{ $student->admission_no }}</td>
                        <td>{{ $student->surname }} {{ $student->first_name }}</td>
                        <td>{{ $student->department }}</td>
                        <td>{{ $student->phone_no }}</td>
                        <td>{{ $student->level }}</td>

                        <td class="d-flex gap-2">

                            <!-- EDIT -->
                            <button class="btn btn-sm btn-warning"
                                    data-bs-toggle="modal"
                                    data-bs-target="#editStudentModal-{{ $student->id }}">
                                <i class="fa fa-edit"></i>
                            </button>

                            <!-- DELETE -->
                            <form method="POST"
                                  action="{{ route('students.destroy', $student) }}"
                                  onsubmit="return confirm('Delete student?')">

                                @csrf
                                @method('DELETE')

                                <button class="btn btn-sm btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>

                            </form>

                        </td>

                    </tr>

                @empty
                    <tr>
                        <td colspan="7" class="text-center">No students found</td>
                    </tr>
                @endforelse

            </tbody>

        </table>

    </div>

</div>

<div class="modal fade" id="addStudentModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <form method="POST"
                  action="{{ route('students.store') }}"
                  enctype="multipart/form-data">

                @csrf

                <div class="modal-header">
                    <h5>Add Student</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    <div class="row">

                        <div class="col-md-4">
                            <input type="text" name="admission_no" class="form-control mb-2" placeholder="Admission No">
                            <input type="text" name="surname" class="form-control mb-2" placeholder="Surname">
                            <input type="text" name="first_name" class="form-control mb-2" placeholder="First Name">
                            <input type="text" name="other_name" class="form-control mb-2" placeholder="Other Name">
                        </div>

                        <div class="col-md-4">
                            <input type="text" name="department" class="form-control mb-2" placeholder="Department">
                            <input type="text" name="phone_no" class="form-control mb-2" placeholder="Phone No">

                            <select name="level" class="form-control mb-2">
                                <option>100</option>
                                <option>200</option>
                                <option>300</option>
                                <option>NDI</option>
                                <option>NDII</option>
                                <option>HNDI</option>
                                <option>HNDII</option>
                            </select>

                            <select name="sex" class="form-control mb-2">
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>

                        <div class="col-md-4">

                            <input type="text" name="state" class="form-control mb-2" placeholder="State">
                            <input type="text" name="session1" class="form-control mb-2" placeholder="Session">

                            <label>Picture</label>
                            <input type="file" name="picture" class="form-control">

                        </div>

                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn btn-primary">Save</button>
                </div>

            </form>

        </div>
    </div>
</div>


@foreach($students as $student)

<div class="modal fade" id="editStudentModal-{{ $student->id }}" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <form method="POST"
                  action="{{ route('students.update', $student) }}"
                  enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="modal-header">
                    <h5>Edit Student</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    <div class="row">

                        <div class="col-md-4">
                            <input type="text" name="admission_no" class="form-control mb-2"
                                   value="{{ $student->admission_no }}">

                            <input type="text" name="surname" class="form-control mb-2"
                                   value="{{ $student->surname }}">

                            <input type="text" name="first_name" class="form-control mb-2"
                                   value="{{ $student->first_name }}">
                        </div>

                        <div class="col-md-4">

                            <input type="text" name="department" class="form-control mb-2"
                                   value="{{ $student->department }}">

                            <input type="text" name="phone_no" class="form-control mb-2"
                                   value="{{ $student->phone_no }}">

                            <input type="text" name="state" class="form-control mb-2"
                                   value="{{ $student->state }}">

                        </div>

                        <div class="col-md-4">

                            <label>Change Picture</label>
                            <input type="file" name="picture" class="form-control mb-2">

                            <img src="{{ $student->picture_name
                                ? asset('storage/students/' . $student->picture_name)
                                : asset('images/blank.png') }}"
                                width="80">

                        </div>

                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn btn-primary">Update</button>
                </div>

            </form>

        </div>
    </div>
</div>

@endforeach
@endsection