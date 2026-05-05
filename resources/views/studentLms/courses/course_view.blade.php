@extends('layouts.students')

@section('title', $course->title)

@section('content')

<div class="container-fluid">

    <!-- HEADER -->
    <div class="card shadow-sm border-0 p-3 mb-4">
        <h4 class="mb-1">{{ $course->title }}</h4>
        <small class="text-muted">Course Learning Modules</small>
    </div>

    <div class="row">

        <!-- MODULE LIST -->
        <div class="col-md-4">

            @foreach($moduleData as $data)

                <div class="card mb-3 shadow-sm border-0">

                    <div class="card-body">

                        <div class="d-flex justify-content-between align-items-center">

                            <h6 class="mb-0">
                                {{ $data['module']->title }}
                            </h6>

                            @if(!$data['unlocked'])
                                <span class="badge bg-dark">🔒 Locked</span>
                            @else
                                <span class="badge bg-success">Unlocked</span>
                            @endif

                        </div>

                        <small class="text-muted">
                            {{ $data['progress'] }}% completed
                        </small>

                        <div class="progress mt-2" style="height:6px;">
                            <div class="progress-bar bg-primary"
                                 style="width: {{ $data['progress'] }}%">
                            </div>
                        </div>

                    </div>

                </div>

            @endforeach

        </div>

        <!-- MATERIALS PANEL -->
        <div class="col-md-8">

            <div class="card shadow-sm border-0 p-3">

                <h5>📄 Materials</h5>

                <p class="text-muted">
                    Select a module to view materials
                </p>

            </div>

        </div>

    </div>

</div>

@endsection