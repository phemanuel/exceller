@extends('layouts.app5')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h2 class="fw-bold mb-1">📊 Progress Analytics</h2> 
            <small>📚 Student Performance</small>
            
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
<!-- <h3>📚 Student Performance</h3> -->
<table class="table table-bordered">

    <thead>
        <tr>
            <th>Student</th>
            <th>Completion %</th>
            <th>Last Activity</th>
            <th>Status</th>
        </tr>
    </thead>

    <tbody>
        @foreach($data as $row)
        <tr>
            <td>{{ $row['student']->surname }} {{ $row['student']->first_name }} {{ $row['student']->other_name }}</td>
            <td>{{ $row['completion_rate'] }}%</td>
            <td>{{ $row['last_activity'] ?? 'No activity' }}</td>
            <td>
                <span class="badge bg-info">
                    {{ $row['status'] }}
                </span>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>

</div>
@endsection