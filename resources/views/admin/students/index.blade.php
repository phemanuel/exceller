@extends('layouts.app5')

@section('content')

<div class="card-box">

    <div class="d-flex justify-content-between mb-3">

        <h3>Students</h3>

        <div class="d-flex gap-2">

            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addStudentModal">
                + Add Student
            </button>          

        </div>

    </div>
    <div class="card shadow-sm mb-3">
    <div class="card-header d-flex justify-content-between align-items-center">

        <h5 class="mb-0">
            <i class="bi bi-funnel"></i> Filters
        </h5>

        <div class="d-flex align-items-center gap-3">
            <span class="badge bg-primary">
                Total Students: {{ $students->total() }}
            </span>

            <button class="btn btn-sm btn-outline-secondary"
                    data-bs-toggle="collapse"
                    data-bs-target="#filterCollapse">
                <i class="bi bi-chevron-down"></i>
            </button>
        </div>

    </div>

    <div id="filterCollapse" class="collapse show">
        <div class="card-body">

            <form id="searchForm">
                <div class="row g-3">

                    <div class="col-md-3">
                        <label><i class="bi bi-credit-card"></i> Admission No</label>
                        <input type="text" name="admission_no" class="form-control">
                    </div>

                    <div class="col-md-3">
                        <label><i class="bi bi-person"></i> Surname</label>
                        <input type="text" name="surname" class="form-control">
                    </div>

                    <div class="col-md-3">
                        <label><i class="bi bi-person-badge"></i> First Name</label>
                        <input type="text" name="first_name" class="form-control">
                    </div>

                    <div class="col-md-3">
                        <label><i class="bi bi-person-lines-fill"></i> Other Name</label>
                        <input type="text" name="other_name" class="form-control">
                    </div>

                    <!-- Programme -->
                    <div class="col-md-3">
                        <label><i class="bi bi-book"></i> Programme</label>
                        <select name="programme" class="form-select select2">
                            <option value="">Select Programme</option>
                            @foreach($programmes as $programme)
                                <option value="{{ $programme->name }}">
                                    {{ $programme->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Level -->
                    <div class="col-md-2">
                        <label><i class="bi bi-bar-chart"></i> Level</label>
                        <select name="level" class="form-select select2">
                            <option value="">Level</option>
                            @foreach(['100','200','300','NDI','NDII','HNDI','HNDII'] as $level)
                                <option value="{{ $level }}">{{ $level }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Session -->
                    <div class="col-md-3">
                        <label><i class="bi bi-calendar"></i> Session</label>
                        <select name="session1" class="form-select select2">
                            <option value="">Session</option>
                            @for($year = 2020; $year <= date('Y'); $year++)
                                @php $session = $year . '/' . ($year + 1); @endphp
                                <option value="{{ $session }}">{{ $session }}</option>
                            @endfor
                        </select>
                    </div>

                    <div class="col-md-4 d-flex align-items-end gap-2">
                        <button type="button" id="resetBtn" class="btn btn-outline-secondary w-100">
                            <i class="bi bi-arrow-clockwise"></i> Reset
                        </button>
                    </div>

                </div>
            </form>

        </div>
    </div>
</div>


<div id="studentTable">
    @include('admin.students.partials.student-table')
</div>
   <div class="mt-3">
    {{ $students->links() }}
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
                              action="{{ route('students.save') }}"
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

    <h6 class="text-muted mb-0"></h6>

    <a href="{{ route('students.sample') }}"
       class="btn btn-sm btn-outline-primary">
        <i class="fa fa-download"></i> Download Sample
    </a>

</div>
<label>Academic Session</label>
<select name="session1" class="form-control mb-2">
                                    @php
                                                $startYear = 2020;
                                                $currentYear = now()->year;

                                                for ($year = $startYear; $year <= $currentYear; $year++) {
                                                    $next = $year + 1;
                                                    echo "<option value='{$year}/{$next}'>{$year}/{$next}</option>";
                                                }
                                            @endphp
                                </select>
<hr>
<label for="exampleInputEmail1">File (Excel/CSV Format)</label>
                                <input type="file"
                                       name="file"
                                       class="form-control mb-3"
                                       required>

                                <div class="alert alert-info small">
                                    Expected columns:
                                    <br>
                                    admission_no, surname, first_name, other_name,
                                    department, department1, phone_no, state, level, sex
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
    <div class="modal-dialog modal-xl">
        <div class="modal-content">

            <!-- HEADER -->
            <div class="modal-header bg-warning text-dark">
                <h5 class="modal-title">
                    <i class="fa fa-edit"></i> Edit Student
                </h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <form method="POST"
                  action="{{ route('students.update-rec', $student) }}"
                  enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="modal-body">

                    <div class="row">

                        <!-- ===================== -->
                        <!-- PERSONAL INFO -->
                        <!-- ===================== -->
                        <div class="col-md-4">
                            <div class="card p-3 shadow-sm mb-3">
                                <h6 class="text-muted">Personal Info</h6>

                                <input type="text" name="admission_no"
                                       class="form-control mb-2"
                                       value="{{ $student->admission_no }}" required>

                                <input type="text" name="surname"
                                       class="form-control mb-2"
                                       value="{{ $student->surname }}" required>

                                <input type="text" name="first_name"
                                       class="form-control mb-2"
                                       value="{{ $student->first_name }}" required>

                                <input type="text" name="other_name"
                                       class="form-control"
                                       value="{{ $student->other_name }}">
                            </div>
                        </div>

                        <!-- ===================== -->
                        <!-- ACADEMIC INFO -->
                        <!-- ===================== -->
                        <div class="col-md-4">
                            <div class="card p-3 shadow-sm mb-3">
                                <h6 class="text-muted">Academic Info</h6>

                                <!-- PROGRAMME -->
                                <select name="department" class="form-control mb-2" required>
                                    <option value="">Select Programme</option>
                                    @foreach($programmes as $programme)
                                        <option value="{{ $programme->programme }}"
                                            {{ $student->department == $programme->programme ? 'selected' : '' }}>
                                            {{ $programme->programme }}
                                        </option>
                                    @endforeach
                                </select>

                                <!-- LEVEL -->
                                <select name="level" class="form-control mb-2">
                                    @foreach(['100','200','300','NDI','NDII','HNDI','HNDII'] as $lvl)
                                        <option value="{{ $lvl }}"
                                            {{ $student->level == $lvl ? 'selected' : '' }}>
                                            {{ $lvl }}
                                        </option>
                                    @endforeach
                                </select>

                                <!-- SEX -->
                                <select name="sex" class="form-control">
                                    <option value="Male" {{ $student->sex == 'Male' ? 'selected' : '' }}>Male</option>
                                    <option value="Female" {{ $student->sex == 'Female' ? 'selected' : '' }}>Female</option>
                                </select>
                            </div>
                        </div>

                        <!-- ===================== -->
                        <!-- CONTACT & OTHER -->
                        <!-- ===================== -->
                        <div class="col-md-4">
                            <div class="card p-3 shadow-sm mb-3">
                                <h6 class="text-muted">Contact & Other</h6>

                                <input type="text" name="phone_no"
                                       class="form-control mb-2"
                                       value="{{ $student->phone_no }}" required>

                                <input type="text" name="state"
                                       class="form-control mb-2"
                                       value="{{ $student->state }}">

                                <!-- SESSION DROPDOWN -->
                                <select name="session1" class="form-control mb-2">
                                    @php
                                        $startYear = 2020;
                                        $currentYear = now()->year;
                                    @endphp

                                    @for($year = $startYear; $year <= $currentYear; $year++)
                                        @php $next = $year + 1; @endphp
                                        <option value="{{ $year }}/{{ $next }}"
                                            {{ $student->session1 == "$year/$next" ? 'selected' : '' }}>
                                            {{ $year }}/{{ $next }}
                                        </option>
                                    @endfor
                                </select>

                                <!-- IMAGE -->
                                <label class="small text-muted">Change Picture</label>
                                <input type="file" name="picture" class="form-control mb-2">

                                <div class="text-center">
                                @php
                                    $imagePath = public_path('uploads/students/' . $student->picture_name . '.jpg');
                                @endphp

                                <img src="{{ (!empty($student->picture_name) && file_exists($imagePath))
                                            ? asset('uploads/students/' . $student->picture_name . '.jpg')
                                            : asset('uploads/blank.jpg') }}"
                                    width="40"    
                                    class="rounded-circle shadow-sm">
                                    

                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- FOOTER -->
                <div class="modal-footer">
                    <button class="btn btn-warning px-4">
                        <i class="fa fa-save"></i> Update Student
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>
<script>
document.addEventListener("DOMContentLoaded", function () {

    const form = document.getElementById("searchForm");
    let timeout = null;
    let controller = null; // for aborting requests

    function fetchStudents() {

        // Cancel previous request
        if (controller) {
            controller.abort();
        }

        controller = new AbortController();

        let params = new URLSearchParams(new FormData(form));

        fetch("{{ route('students.home') }}?" + params.toString(), {
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            },
            signal: controller.signal
        })
        .then(res => res.text())
        .then(data => {
            document.getElementById("studentTable").innerHTML = data;
        })
        .catch(err => {
            if (err.name !== 'AbortError') {
                console.error(err);
            }
        });
    }

    // Debounced typing
    form.querySelectorAll("input").forEach(input => {
        input.addEventListener("keyup", () => {
            clearTimeout(timeout);
            timeout = setTimeout(fetchStudents, 400);
        });
    });

    // Dropdown change
    form.querySelectorAll("select").forEach(select => {
        select.addEventListener("change", fetchStudents);
    });

    // Reset
    document.getElementById("resetBtn").addEventListener("click", () => {
        form.reset();
        $('.select2').val(null).trigger('change');
        fetchStudents();
    });

});
</script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/js/select2.min.js"></script>

<script>
$(document).ready(function() {
    $('.select2').select2({
        width: '100%',
        placeholder: "Select option",
        allowClear: true
    });
});
</script>
@endforeach
@endsection