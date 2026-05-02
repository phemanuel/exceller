@extends('layouts.app5')

@section('content')
<div class="container">
<div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h2 class="fw-bold mb-1">📊 Progress Analytics</h2> 
            <small>⚠️ Risk Detection</small>
            
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

    <div class="row g-3">

        @foreach($risk as $row)

        <div class="col-md-3">

            <div class="card shadow-sm p-3 h-100 border-0">

                <div class="d-flex justify-content-between align-items-start">

                    <div>
                        <h6 class="mb-1 fw-bold">
                            {{ $row['student']->surname }}
                            {{ $row['student']->first_name }}
                            {{ $row['student']->other_name }}
                        </h6>

                        <small class="text-muted">
                            Inactive: {{ $row['inactive_days'] }} days
                        </small>
                    </div>

                    <div style="font-size:20px;">
                        ⚠️
                    </div>

                </div>

                <!-- STATUS BADGES -->
                <div class="mt-2 d-flex flex-wrap gap-1">

                    @if($row['low_activity'])
                        <span class="badge bg-danger">Inactive</span>
                    @endif

                    @if($row['low_completion'])
                        <span class="badge bg-warning text-dark">Low Completion</span>
                    @endif

                    @if($row['stagnant'])
                        <span class="badge bg-dark">Stagnant</span>
                    @endif

                </div>

            </div>

        </div>

        @endforeach

    </div>

</div>
@endsection