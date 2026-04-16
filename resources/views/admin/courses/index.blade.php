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

    <!-- Table -->
    <div class="table-responsive">
        <table class="table table-hover align-middle">

            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Course Title</th>
                    <th>Programme</th>
                    <th>Level</th>
                    <th>Modules</th>
                    <th>Created</th>
                    <th class="text-end">Actions</th>
                </tr>
            </thead>

            <tbody>

                @forelse($courses as $course)
                    <tr>
                        <td>{{ $loop->iteration }}</td>

                        <td>
                            <strong>{{ $course->title }}</strong>
                        </td>

                        <td>
                            {{ $course->programme ?? '-' }}
                        </td>

                        <td>
                            {{ $course->level ?? '-' }}
                        </td>

                        <td>
                            <span class="badge bg-info">
                                {{ $course->modules_count ?? 0 }}
                            </span>
                        </td>

                        <td>
                            {{ $course->created_at->format('d M, Y') }}
                        </td>

                        <!-- Actions -->
                        <td class="text-end">

                            <!-- View -->
                            <a href="{{ route('courses.show', $course->id) }}"
                               class="btn btn-sm btn-success">
                                <i class="fa fa-eye"></i>
                            </a>

                            <!-- Edit -->
                            <a href="{{ route('courses.edit', $course->id) }}"
                               class="btn btn-sm btn-warning">
                                <i class="fa fa-edit"></i>
                            </a>

                            <!-- Delete -->
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

                @empty
                    <tr>
                        <td colspan="7" class="text-center text-muted py-4">
                            No courses found. Click "Add Course" to create one.
                        </td>
                    </tr>
                @endforelse

            </tbody>

        </table>
    </div>

</div>

@endsection