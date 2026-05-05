@extends('layouts.students')

@section('title', 'My Courses')

@section('content')

<div class="container-fluid">

    <h4 class="mb-4">📚 My Courses</h4>

    <div class="row">

        @foreach($courseStats as $row)

        @php
            $progress = $row['progress'];
        @endphp

        <div class="col-md-4 mb-4">

            <div class="card shadow-sm border-0 h-100">

                <div class="card-body">

                    <h5 class="fw-bold">
                        {{ $row['course']->title }}
                    </h5>

                    <small class="text-muted">
                        {{ $progress }}% completed
                    </small>

                    <div class="progress my-3" style="height:7px;">
                        <div class="progress-bar bg-success"
                             style="width: {{ $progress }}%">
                        </div>
                    </div>

                    <a href="{{ route('student.course.view', ['id' => $student->id , 'course_id' => $row['course']->id]) }}"
                       class="btn btn-sm w-100
                       {{ $progress == 100 ? 'btn-success' : ($progress > 0 ? 'btn-primary' : 'btn-outline-primary') }}">

                        @if($progress == 0)
                            🚀 Start Course
                        @elseif($progress < 100)
                            🎯 Continue Course
                        @else
                            👁️ View Course
                        @endif

                    </a>

                </div>

            </div>

        </div>

        @endforeach

    </div>

</div>

@endsection