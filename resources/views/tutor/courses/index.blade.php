@extends('layouts.app5')

@section('content')
<div class="container">
    <h2>My Courses</h2>

    @foreach($courses as $course)
        <div class="card mb-2 p-3">
            <h4>{{ $course->title }}</h4>
            <p>{{ $course->description }}</p>

            <a href="{{ route('courses.manage', $course->id) }}" class="btn btn-primary">
                Manage
            </a>
        </div>
    @endforeach
</div>
@endsection