@extends('layouts.app5')

@section('content')
<div class="container-fluid">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h2 class="fw-bold mb-1">Dashboard</h2>
            <p class="text-muted mb-0">Welcome back 👋 Here’s what’s happening in your LMS</p>
        </div>

        <div class="text-end">
            <span class="badge bg-light text-dark shadow-sm px-3 py-2">
                <i class="bi bi-calendar3"></i>
                {{ now()->format('l, d M Y') }}
            </span>
        </div>

    </div>

   <div class="row g-3">

        <!-- Courses -->
        <div class="col-md-3">
            <div class="e-card kpi-card courses p-3 d-flex justify-content-between align-items-center animate-card">
                <div>
                    <div class="text-light opacity-75">Courses</div>
                    <h4 class="mb-0 fw-bold text-white">{{ $totalCourses }}</h4>
                </div>
                <div class="kpi-icon bg-white bg-opacity-25 text-white">
                    <i class="bi bi-book"></i>
                </div>
            </div>
        </div>

        <!-- Modules -->
        <div class="col-md-3">
            <div class="e-card kpi-card modules p-3 d-flex justify-content-between align-items-center animate-card">
                <div>
                    <div class="text-light opacity-75">Modules</div>
                    <h4 class="mb-0 fw-bold text-white">{{ $totalModules }}</h4>
                </div>
                <div class="kpi-icon bg-white bg-opacity-25 text-white">
                    <i class="bi bi-folder"></i>
                </div>
            </div>
        </div>

        <!-- Materials -->
        <div class="col-md-3">
            <div class="e-card kpi-card materials p-3 d-flex justify-content-between align-items-center animate-card">
                <div>
                    <div class="text-light opacity-75">Materials</div>
                    <h4 class="mb-0 fw-bold text-white">{{ $totalMaterials }}</h4>
                </div>
                <div class="kpi-icon bg-white bg-opacity-25 text-white">
                    <i class="bi bi-file-text"></i>
                </div>
            </div>
        </div>

        <!-- Students -->
        <div class="col-md-3">
            <div class="e-card kpi-card students p-3 d-flex justify-content-between align-items-center animate-card">
                <div>
                    <div class="text-light opacity-75">Students</div>
                    <h4 class="mb-0 fw-bold text-white">{{ $totalStudents }}</h4>
                </div>
                <div class="kpi-icon bg-white bg-opacity-25 text-white">
                    <i class="bi bi-people"></i>
                </div>
            </div>
        </div>

    </div>
    <!-- Secondary Row -->
    <div class="row mt-4 g-3">

        <!-- Quick Actions -->
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <h5 class="fw-bold mb-3"><i class="bi bi-lightning-charge"></i> Quick Actions</h5>

                    <div class="d-grid gap-2">
                        <a href="{{ route('courses.index') }}" class="btn btn-outline-primary">
                            <i class="bi bi-book"></i> Manage Courses
                        </a>

                        <a href="{{ route('students.home') }}" class="btn btn-outline-success">
                            <i class="bi bi-people"></i> Manage Students
                        </a>

                        <a href="#" class="btn btn-outline-warning">
                            <i class="bi bi-graph-up"></i> Analytics
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <h5 class="fw-bold mb-3"><i class="bi bi-clock-history"></i> Recent Activity</h5>

                    <ul class="list-unstyled mb-0">
                        <li class="mb-2 text-muted">+ New student registered</li>
                        <li class="mb-2 text-muted">+ Course updated</li>
                        <li class="mb-2 text-muted">+ Material uploaded</li>
                        <li class="text-muted">+ Module created</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- System Info -->
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <h5 class="fw-bold mb-3"><i class="bi bi-cpu"></i> System Info</h5>

                    <p class="mb-1"><strong>Version:</strong> 1.0.0</p>
                    <p class="mb-1"><strong>Users:</strong> {{ $totalUsers ?? 0 }}</p>
                    <p class="mb-1"><strong>Status:</strong> <span class="text-success">Online</span></p>
                </div>
            </div>
        </div>

    </div>

</div>

<div class="row g-3 mt-3">

    <!-- Level -->
    <div class="col-md-6">
        <div class="e-card p-3 h-100">
            <div class="d-flex justify-content-between mb-2">
                <strong>Students by Level</strong>
            </div>
            <div class="chart-wrap">
                <canvas id="levelChart"></canvas>
            </div>
        </div>
    </div>

    <!-- Programme -->
    <div class="col-md-6">
        <div class="e-card p-3 h-100">
            <div class="d-flex justify-content-between mb-2">
                <strong>Programme Distribution</strong>
            </div>
            <div class="chart-wrap">
                <canvas id="programmeChart"></canvas>
            </div>
        </div>
    </div>

</div>

<div class="row g-3 mt-3">

    <!-- Growth -->
    <div class="col-md-8">
        <div class="e-card p-3 h-100">
            <strong>Student Growth</strong>
            <div class="chart-wrap mt-2">
                <canvas id="monthlyChart"></canvas>
            </div>
        </div>
    </div>

    <!-- Activity -->
    <div class="col-md-4">
        <div class="e-card p-3 h-100 d-flex flex-column">

            <strong class="mb-2">Recent Activity</strong>

            <div class="flex-grow-1 overflow-auto">

                @foreach($recentStudents as $student)
                    <div class="d-flex justify-content-between py-2 border-bottom">
                        <div>
                            <div class="fw-semibold">
                                {{ $student->first_name }} {{ $student->surname }}
                            </div>
                            <small class="text-muted">
                                {{ $student->admission_no }}
                            </small>
                        </div>
                        <small class="text-muted">
                            {{ $student->created_at->diffForHumans() }}
                        </small>
                    </div>
                @endforeach

            </div>

        </div>
    </div>

</div>
<!-- Styles -->
<style>
:root {
    --bg: #f7f8fc;
    --card: #ffffff;
    --border: #e9edf5;
    --text: #111827;
    --muted: #6b7280;
    --radius: 14px;
}

body {
    background: var(--bg);
    font-family: Inter, system-ui, sans-serif;
}

/* Enterprise Card System */
.e-card {
    background: var(--card);
    border: 1px solid var(--border);
    border-radius: var(--radius);
    box-shadow: 0 1px 2px rgba(16,24,40,0.04);
    transition: all 0.2s ease;
}

.e-card:hover {
    box-shadow: 0 8px 24px rgba(16,24,40,0.08);
    transform: translateY(-2px);
}

/* KPI Icon */
.kpi-icon {
    width: 42px;
    height: 42px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
}

/* Soft color system */
.bg-blue-soft { background: rgba(59,130,246,0.12); }
.bg-green-soft { background: rgba(16,185,129,0.12); }
.bg-yellow-soft { background: rgba(245,158,11,0.12); }
.bg-red-soft { background: rgba(239,68,68,0.12); }

.text-muted-2 { color: var(--muted); }

.chart-wrap {
    height: 320px;
}
</style>
<style>

/* Base KPI Card */
.kpi-card {
    border-radius: 16px;
    color: #fff;
    position: relative;
    overflow: hidden;
    transition: all 0.3s ease;
}

/* Hover Lift + Glow */
.kpi-card:hover {
    transform: translateY(-6px) scale(1.01);
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
}

/* Gradient Backgrounds */
.kpi-card.courses {
    background: linear-gradient(135deg, #3b82f6, #1d4ed8);
}

.kpi-card.modules {
    background: linear-gradient(135deg, #10b981, #047857);
}

.kpi-card.materials {
    background: linear-gradient(135deg, #f59e0b, #b45309);
}

.kpi-card.students {
    background: linear-gradient(135deg, #ef4444, #991b1b);
}

/* Icon Box */
.kpi-icon {
    width: 45px;
    height: 45px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
}

/* Entry Animation */
.animate-card {
    opacity: 0;
    transform: translateY(20px);
    animation: fadeUp 0.6s ease forwards;
}

/* Stagger effect */
.kpi-card:nth-child(1) { animation-delay: 0.1s; }
.kpi-card:nth-child(2) { animation-delay: 0.2s; }
.kpi-card:nth-child(3) { animation-delay: 0.3s; }
.kpi-card:nth-child(4) { animation-delay: 0.4s; }

/* Keyframes */
@keyframes fadeUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

</style>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
/* Students by Level */
new Chart(document.getElementById('levelChart'), {
    type: 'bar',
    data: {
        labels: {!! json_encode($studentsByLevel->keys()) !!},
        datasets: [{
            label: 'Students',
            data: {!! json_encode($studentsByLevel->values()) !!}
        }]
    }
});

/* Programme Distribution */
new Chart(document.getElementById('programmeChart'), {
    type: 'pie',
    data: {
        labels: {!! json_encode($studentsByProgramme->keys()) !!},
        datasets: [{
            data: {!! json_encode($studentsByProgramme->values()) !!}
        }]
    }
});

/* Monthly Trend */
new Chart(document.getElementById('monthlyChart'), {
    type: 'line',
    data: {
        labels: {!! json_encode($monthlyStudents->keys()) !!},
        datasets: [{
            label: 'Registrations',
            data: {!! json_encode($monthlyStudents->values()) !!},
            fill: false,
            tension: 0.3
        }]
    }
});
</script>
@endsection