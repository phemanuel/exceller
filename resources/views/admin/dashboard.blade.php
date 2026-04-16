@extends('layouts.app5')

@section('content')
<div class="container-fluid">

    <!-- Page Header -->
    <div class="row mb-4">
        <div class="col">
            <h3 class="mb-0">Admin Dashboard</h3>
            <small class="text-muted">Overview of your e-learning system</small>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="row">

        <!-- Courses -->
        <div class="col-md-3 mb-3">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h6>Total Courses</h6>
                    <h3 class="text-primary">{{ $totalCourses ?? 0 }}</h3>
                </div>
            </div>
        </div>

        <!-- Modules -->
        <div class="col-md-3 mb-3">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h6>Total Modules</h6>
                    <h3 class="text-success">{{ $totalModules ?? 0 }}</h3>
                </div>
            </div>
        </div>

        <!-- Materials -->
        <div class="col-md-3 mb-3">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h6>Total Materials</h6>
                    <h3 class="text-warning">{{ $totalMaterials ?? 0 }}</h3>
                </div>
            </div>
        </div>

        <!-- Students (future module) -->
        <div class="col-md-3 mb-3">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h6>Total Students</h6>
                    <h3 class="text-danger">{{ $totalStudents ?? 0 }}</h3>
                </div>
            </div>
        </div>

    </div>

    <!-- Quick Actions -->
    <div class="row mt-4">

        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5>Courses</h5>
                    <a href="{{ route('courses.index') }}" class="btn btn-primary btn-sm mt-2">
                        Manage Courses
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5>Modules</h5>
                    <a href="#" class="btn btn-success btn-sm mt-2">
                        Manage Modules
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5>Materials</h5>
                    <a href="#" class="btn btn-warning btn-sm mt-2">
                        Manage Materials
                    </a>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection