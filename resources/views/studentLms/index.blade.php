@extends('layouts.student')

@section('content')
<div class="container py-4">

    <h3 class="mb-4">🎓 Student Dashboard</h3>

    <!-- 🔥 ALERTS -->
    @if(count($alerts))
        <div class="alert alert-warning">
            @foreach($alerts as $alert)
                <div>⚠️ {{ $alert }}</div>
            @endforeach
        </div>
    @endif

    <!-- 📊 TOP STATS -->
    <div class="row g-3 mb-4">

        <div class="col-md-3">
            <div class="card shadow-sm p-3">
                <small>Overall Progress</small>
                <h3>{{ $overallProgress }}%</h3>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm p-3">
                <small>Last Activity</small>
                <h6>
                    {{ $lastActivity ? $lastActivity->updated_at->diffForHumans() : 'No activity yet' }}
                </h6>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm p-3">
                <small>Inactive Days</small>
                <h3>{{ $inactiveDays ?? 0 }}</h3>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm p-3">
                <small>🔥 Engagement</small>
                <h3>{{ $streak }} days</h3>
            </div>
        </div>

    </div>

    <!-- 📚 COURSES -->
    <div class="row">

        @foreach($courseStats as $row)
        <div class="col-md-4 mb-3">
            <div class="card shadow-sm border-0 p-3 h-100">

                <h5>{{ $row['course']->title }}</h5>

                <div class="progress my-2" style="height: 8px;">
                    <div class="progress-bar bg-success"
                         style="width: {{ $row['progress'] }}%">
                    </div>
                </div>

                <small>{{ $row['progress'] }}% completed</small>

                <a href="#" class="btn btn-primary btn-sm mt-3">
                    🎯 Continue Learning
                </a>

            </div>
        </div>
        @endforeach

    </div>

</div>
@endsection