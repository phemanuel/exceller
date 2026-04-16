@extends('layouts.app5')

@section('content')

<div class="card-box">

    <h3>Edit Course</h3>
    <hr>

    <form action="{{ route('courses.update', $course->id) }}" method="POST">

        @csrf
        @method('PUT')

        <!-- Title -->
        <div class="mb-3">
            <label>Course Title</label>
            <input type="text" name="title" class="form-control"
                   value="{{ $course->title }}" required>
        </div>

        <!-- Programme -->
        <div class="mb-3">
            <label>Programme</label>
            <select name="programme" class="form-control" required>

                <option value="">Select Programme</option>

                @foreach($programmes as $programme)
                    <option value="{{ $programme->programme }}"
                        {{ $course->programme == $programme->programme ? 'selected' : '' }}>
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
                    <option value="{{ $level }}"
                        {{ $course->level == $level ? 'selected' : '' }}>
                        {{ $level }}
                    </option>
                @endforeach

            </select>
        </div>

        <!-- Description -->
        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control">{{ $course->description }}</textarea>
        </div>

        <button class="btn btn-primary">
            Update Course
        </button>

        <a href="{{ route('courses.index') }}" class="btn btn-secondary">
            Cancel
        </a>

    </form>

</div>

@endsection