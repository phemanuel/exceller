@extends('layouts.app5')

@section('content')
<div class="container py-3">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h2 class="fw-bold mb-1">📊 Progress Analytics | Home</h2>
            <small class="text-muted">LMS performance overview & student intelligence</small>
        </div>
        <div class="btn-group shadow-sm">

            <a href="{{ url('admin/analytics') }}"
            class="btn {{ request()->is('admin/analytics') ? 'btn-primary' : 'btn-outline-primary' }}">
                📊 Overview
            </a>

            <a href="{{ url('admin/analytics/students') }}"
            class="btn {{ request()->is('admin/analytics/students') ? 'btn-success' : 'btn-outline-success' }}">
                👨‍🎓 Students
            </a>

            <a href="{{ url('admin/analytics/risk') }}"
            class="btn {{ request()->is('admin/analytics/risk') ? 'btn-danger' : 'btn-outline-danger' }}">
                ⚠️ Risk
            </a>

        </div>

    </div>

    <!-- STATS CARDS -->
    <div class="row g-4">

        <!-- TOTAL STUDENTS -->
        <div class="col-md-3">
            <div class="card shadow-sm border-0 p-3 bg-primary text-white">
                <div class="d-flex justify-content-between">
                    <div>
                        <h6>Total Students</h6>
                        <h3 class="fw-bold">{{ $totalStudents }}</h3>
                    </div>
                    <div style="font-size:30px;">👨‍🎓</div>
                </div>
            </div>
        </div>

        <!-- ACTIVE STUDENTS -->
        <div class="col-md-3">
            <div class="card shadow-sm border-0 p-3 bg-success text-white">
                <div class="d-flex justify-content-between">
                    <div>
                        <h6>Active Students</h6>
                        <h3 class="fw-bold">{{ $activeStudents }}</h3>
                    </div>
                    <div style="font-size:30px;">⚡</div>
                </div>
            </div>
        </div>

        <!-- MATERIALS COMPLETED -->
        <div class="col-md-3">
            <div class="card shadow-sm border-0 p-3 bg-info text-white">
                <div class="d-flex justify-content-between">
                    <div>
                        <h6>Materials Completed</h6>
                        <h3 class="fw-bold">{{ $totalMaterialsCompleted }}</h3>
                    </div>
                    <div style="font-size:30px;">📚</div>
                </div>
            </div>
        </div>

        <!-- AVERAGE COMPLETION -->
        <div class="col-md-3">
            <div class="card shadow-sm border-0 p-3 bg-warning text-dark">
                <div class="d-flex justify-content-between">
                    <div>
                        <h6>Avg Completion</h6>
                        <h3 class="fw-bold">{{ $avgCompletion }}%</h3>
                    </div>
                    <div style="font-size:30px;">📈</div>
                </div>
            </div>
        </div>

    </div>

    <!-- QUICK INSIGHTS SECTION -->
    <div class="row mt-4">

        <div class="col-md-6">
            <div class="card shadow-sm p-3 border-0">
                <h5>⚡ Engagement Insight</h5>
                <p class="text-muted mb-0">
                    Active students represent learners who engaged within the last 7 days.
                </p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow-sm p-3 border-0">
                <h5>⚠️ Risk Monitoring</h5>
                <p class="text-muted mb-0">
                    Risk detection tracks inactivity, stagnation, and low completion trends.
                </p>
            </div>
        </div>

    </div>

</div>
<style>
    .card {
    border-radius: 12px;
}

.btn {
    border-radius: 8px;
}
</style>
@endsection