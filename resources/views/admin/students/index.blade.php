@extends('layouts.app5')

@section('content')

<div class="card-box">

    <div class="d-flex justify-content-between mb-3">

        <h3>Students</h3>

        <div class="d-flex gap-2">

            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addStudentModal">
                + Add Student
            </button>

            <!-- <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#importStudentModal">
                Import Excel
            </button> -->

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
                                    : asset('storage/students/blank.jpg') }}"
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
    <div class="modal-dialog modal-xl">
        <div class="modal-content">

            <!-- HEADER -->
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">
                    <i class="fa fa-user-plus"></i> Student Management
                </h5>
                <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <!-- TABS -->
            <div class="modal-body">

               <ul class="nav nav-tabs mb-3" id="studentTab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active"
                id="add-tab"
                data-bs-toggle="tab"
                data-bs-target="#addStudentPane"
                type="button">
            ➕ Add Student
        </button>
    </li>

    <li class="nav-item" role="presentation">
        <button class="nav-link"
                id="import-tab"
                data-bs-toggle="tab"
                data-bs-target="#importStudentPane"
                type="button">
            📥 Import Excel
        </button>
    </li>
</ul>

                <div class="tab-content">

                    <!-- ========================= -->
                    <!-- SINGLE STUDENT -->
                    <!-- ========================= -->
                    <div class="tab-pane fade show active"
                    id="addStudentPane"
                    role="tabpanel">

                        <form method="POST"
                              action="{{ route('students.store') }}"
                              enctype="multipart/form-data">

                            @csrf

                            <div class="row">

                                <!-- PERSONAL INFO -->
                                <div class="col-md-4">
                                    <div class="card p-3 mb-3 shadow-sm">
                                        <h6 class="text-muted">Personal Info</h6>

                                        <input type="text" name="admission_no"
                                               class="form-control mb-2"
                                               placeholder="Admission No" required>

                                        <input type="text" name="surname"
                                               class="form-control mb-2"
                                               placeholder="Surname" required>

                                        <input type="text" name="first_name"
                                               class="form-control mb-2"
                                               placeholder="First Name" required>

                                        <input type="text" name="other_name"
                                               class="form-control"
                                               placeholder="Other Name">
                                    </div>
                                </div>

                                <!-- ACADEMIC INFO -->
                                <div class="col-md-4">
                                    <div class="card p-3 mb-3 shadow-sm">
                                        <h6 class="text-muted">Academic Info</h6>

                                        <!-- PROGRAMME -->
                                        <select name="department"
                                                class="form-control mb-2"
                                                required>
                                            <option value="">Select Programme</option>
                                            @foreach($programmes as $programme)
                                                <option value="{{ $programme->programme }}">
                                                    {{ $programme->programme }}
                                                </option>
                                            @endforeach
                                        </select>

                                        <select name="level" class="form-control mb-2">
                                            <option value="">Select Level</option>
                                            <option>100</option>
                                            <option>200</option>
                                            <option>300</option>
                                            <option>NDI</option>
                                            <option>NDII</option>
                                            <option>HNDI</option>
                                            <option>HNDII</option>
                                        </select>

                                        <select name="sex" class="form-control">
                                            <option value="">Gender</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- CONTACT & OTHER -->
                                <div class="col-md-4">
                                    <div class="card p-3 mb-3 shadow-sm">
                                        <h6 class="text-muted">Contact & Other</h6>

                                        <input type="text" name="phone_no"
                                               class="form-control mb-2"
                                               placeholder="Phone Number" required>

                                        <input type="text" name="state"
                                               class="form-control mb-2"
                                               placeholder="State">

                                        <select name="session1" class="form-control mb-2">
                                            <option value="">Select Session</option>

                                            @php
                                                $startYear = 2020;
                                                $currentYear = now()->year;

                                                for ($year = $startYear; $year <= $currentYear; $year++) {
                                                    $next = $year + 1;
                                                    echo "<option value='{$year}/{$next}'>{$year}/{$next}</option>";
                                                }
                                            @endphp

                                        </select>

                                        <label class="small text-muted">Student Photo</label>
                                        <input type="file" name="picture" class="form-control">
                                    </div>
                                </div>

                            </div>

                            <div class="text-end">
                                <button class="btn btn-primary px-4">
                                    <i class="fa fa-save"></i> Save Student
                                </button>
                            </div>

                        </form>

                    </div>

                    <!-- ========================= -->
                    <!-- IMPORT STUDENTS -->
                    <!-- ========================= -->
                    <div class="tab-pane fade"
                    id="importStudentPane"
                    role="tabpanel">

                        <form method="POST"
                              action="{{ route('students.import') }}"
                              enctype="multipart/form-data">

                            @csrf

                            <div class="card p-4 shadow-sm">

<div class="d-flex justify-content-between align-items-center mb-3">

    <h6 class="text-muted mb-0">Upload Excel File</h6>

    <a href="{{ route('students.sample') }}"
       class="btn btn-sm btn-outline-primary">
        <i class="fa fa-download"></i> Download Sample
    </a>

</div>
                                <input type="file"
                                       name="file"
                                       class="form-control mb-3"
                                       required>

                                <div class="alert alert-info small">
                                    Expected columns:
                                    <br>
                                    admission_no, surname, first_name, other_name,
                                    department, phone_no, state, level, sex, session1
                                </div>

                                <div class="text-end">
                                    <button class="btn btn-success px-4">
                                        <i class="fa fa-upload"></i> Import Students
                                    </button>
                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>
    </div>
</div>


@foreach($students as $student)

<div class="modal fade" id="editStudentModal-{{ $student->id }}" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

                <div class="modal-header">
                    <h5>Edit Student</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>
<form method="POST"
                  action="{{ route('students.update', $student) }}"
                  enctype="multipart/form-data">

                @csrf
                @method('PUT')
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