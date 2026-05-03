@extends('layouts.students')

@section('title', 'Dashboard')

@section('content')

<div class="container-fluid">

    <!-- 🔥 ALERTS -->
    @if(count($alerts))
        <div class="alert alert-warning shadow-sm border-0">
            <strong>⚠️ Attention Needed</strong>
            <ul class="mb-0 mt-2">
                @foreach($alerts as $alert)
                    <li>{{ $alert }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- 📊 TOP STATS -->
    <div class="row g-3 mb-4">

        <div class="col-md-3">
            <div class="card p-3 shadow-sm border-0">
                <small class="text-muted">Overall Progress</small>
                <h2 class="fw-bold text-primary">{{ $overallProgress }}%</h2>

                <div class="progress mt-2" style="height:6px;">
                    <div class="progress-bar bg-primary" style="width: {{ $overallProgress }}%"></div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card p-3 shadow-sm border-0">
                <small class="text-muted">Last Activity</small>
                <h6 class="fw-bold">
                    {{ $lastActivity ? $lastActivity->updated_at->diffForHumans() : 'No activity yet' }}
                </h6>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card p-3 shadow-sm border-0">
                <small class="text-muted">Inactive Days</small>
                <h2 class="fw-bold text-danger">{{ $inactiveDays ?? 0 }}</h2>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card p-3 shadow-sm border-0">
                <small class="text-muted">🔥 Engagement</small>
                <h2 class="fw-bold text-success">{{ $streak }}</h2>
                <small>Active days (last 7 days)</small>
            </div>
        </div>

    </div>

    <!-- 🎯 CONTINUE LEARNING (HIGHLIGHT SECTION) -->
    <div class="card mb-4 shadow-sm border-0 p-3">

        <h5 class="mb-3">🎯 Continue Learning</h5>

        @php
            $inProgressCourse = collect($courseStats)->firstWhere('progress', '>', 0);
        @endphp

        @if($inProgressCourse)
            <div class="d-flex justify-content-between align-items-center">

                <div>
                    <h6 class="mb-1">{{ $inProgressCourse['course']->title }}</h6>
                    <small>{{ $inProgressCourse['progress'] }}% completed</small>
                </div>

                <a href="#"
                   class="btn btn-primary btn-sm">
                    Resume
                </a>

            </div>
        @else
            <p class="text-muted mb-0">No course started yet</p>
        @endif

    </div>

    <!-- 📚 COURSES GRID -->
    <div class="row">

        @foreach($courseStats as $row)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-0">

                <div class="card-body">

                    <h5 class="fw-bold">{{ $row['course']->title }}</h5>

                    <small class="text-muted">
                        {{ $row['progress'] }}% completed
                    </small>

                    <div class="progress my-3" style="height:8px;">
                        <div class="progress-bar bg-success"
                             style="width: {{ $row['progress'] }}%">
                        </div>
                    </div>

                    <a href="#"
                       class="btn btn-outline-primary btn-sm w-100">
                        🎯 Continue Learning
                    </a>

                </div>

            </div>
        </div>
        @endforeach

    </div>

</div>

@endsection