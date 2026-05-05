@extends('layouts.app5')

@section('content')

<div class="card-box">

    <h3>Create Course</h3>
    <hr>

    <form action="{{ route('courses.store') }}" method="POST">

        @csrf

        <!-- Title -->
        <div class="mb-3">
            <label>Course Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <!-- Programme -->
        <div class="mb-3">
            <label>Programme</label>
            <select name="programme" class="form-control" required>
                <option value="">Select Programme</option>

                @foreach($programmes as $programme)
                    <option value="{{ $programme->programme }}">
                        {{ $programme->programme }}
                    </option>
                @endforeach

            </select>
        </div>

        <!-- Level -->
        <div class="mb-3">
            <label>Level</label>
            <select name="level" class="form-control" required>
                <option value="">Select Level</option>

                @foreach($levels as $level)
                    <option value="{{ $level }}">
                        {{ $level }}
                    </option>
                @endforeach

            </select>
        </div>

        <!-- Semester -->
        <div class="mb-3">
            <label>Semester</label>
            <select name="semester" class="form-control" required>
                <option value="">Select Semester</option>                
                    <option value="FIRST">FIRST</option>
                    <option value="SECOND">SECOND</option>
            </select>
        </div>

        <!-- Description -->
        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <button class="btn btn-primary">
            Save Course
        </button>

        <a href="{{ route('courses.index') }}" class="btn btn-secondary">
            Cancel
        </a>

    </form>

</div>

@endsection