@extends('layouts.app5')

@section('content')

<div class="card-box">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="mb-0">Courses</h3>
            <small class="text-muted">Manage all learning courses</small>
        </div>

        <a href="{{ route('courses.create') }}" class="btn btn-primary">
            <i class="fa fa-plus"></i> Add Course
        </a>
    </div>

    <!-- Success Message
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif -->
    @php
        $groupedCourses = $courses->groupBy('programme');
    @endphp
    <div class="row">

        @forelse($groupedCourses as $programme => $programmeCourses)
            
            <div class="col-12 mb-4">

                <!-- Programme Card -->
                <div class="card shadow-sm">

                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">
                            {{ $programme ?? 'Unassigned Programme' }}
                            <span class="badge bg-light text-dark ms-2">
                                {{ $programmeCourses->count() }} Courses
                            </span>
                        </h5>
                    </div>

                    <div class="card-body p-0">

                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">

                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Course Title</th>
                                        <th>Level</th>
                                        <th>Semester</th>
                                        <th>Modules</th>
                                        <th>Created</th>
                                        <th class="text-end">Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($programmeCourses as $course)

                                        <tr>
                                            <td>{{ $loop->iteration }}</td>

                                            <td>
                                                <strong>{{ $course->title }}</strong>
                                            </td>

                                            <td>{{ $course->level ?? '-' }}</td>

                                            <td>{{ $course->semester ?? '-' }}</td>

                                            <td>
                                                <span class="badge bg-info">
                                                    {{ $course->modules_count ?? 0 }}
                                                </span>
                                            </td>

                                            <td>
                                                {{ $course->created_at->format('d M, Y') }}
                                            </td>

                                            <td class="text-end">

                                                <a href="{{ route('courses.show', $course->id) }}"
                                                class="btn btn-sm btn-success">
                                                    <i class="fa fa-eye"></i>
                                                </a>

                                                <a href="{{ route('courses.edit', $course->id) }}"
                                                class="btn btn-sm btn-warning">
                                                    <i class="fa fa-edit"></i>
                                                </a>

                                                <form action="{{ route('courses.destroy', $course->id) }}"
                                                    method="POST"
                                                    class="d-inline"
                                                    onsubmit="return confirm('Delete this course?')">

                                                    @csrf
                                                    @method('DELETE')

                                                    <button class="btn btn-sm btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </button>

                                                </form>

                                            </td>
                                        </tr>

                                    @endforeach
                                </tbody>

                            </table>
                        </div>

                    </div>

                </div>

            </div>

        @empty
            <div class="col-12 text-center text-muted py-5">
                No courses found. Click "Add Course" to create one.
            </div>
        @endforelse

    </div>

</div>

@endsection