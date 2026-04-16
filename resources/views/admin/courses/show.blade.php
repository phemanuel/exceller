@extends('layouts.app5')

@section('content')

<div class="card-box">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h3 class="mb-0">{{ $course->title }}</h3>
            <small class="text-muted">
                {{ $course->programme ?? '-' }} |
                {{ $course->level ?? '-' }}
            </small>
        </div>

        <a href="{{ route('courses.index') }}" class="btn btn-secondary btn-sm">
            <i class="fa fa-arrow-left"></i> Back
        </a>

    </div>

    <!-- Course Description -->
    <div class="mb-4">
        <p class="text-muted">
            {{ $course->description ?? 'No description provided.' }}
        </p>
    </div>

    <hr>

    <!-- Add Module Button -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="mb-0">Modules</h5>

        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addModuleModal">
            <i class="fa fa-plus"></i> Add Module
        </button>
    </div>

    <!-- Modules List -->
    @forelse($course->modules as $module)

        <div class="card mb-3 shadow-sm">

            <div class="card-header d-flex justify-content-between align-items-center">

                <div>
                    <strong>
                        Week {{ $module->module_number }}:
                        {{ $module->title }}
                    </strong>
                </div>

                <div>
                    <!-- EDIT MODULE -->
                            <button class="btn btn-sm btn-warning"
                                    data-bs-toggle="modal"
                                    data-bs-target="#editModuleModal-{{ $module->id }}">
                                <i class="fa fa-edit"></i>
                            </button>

                    <form action="{{ route('modules.destroy', $module->id) }}"
                          method="POST"
                          class="d-inline"
                          onsubmit="return confirm('Delete this module?')">

                        @csrf
                        @method('DELETE')

                        <button class="btn btn-sm btn-danger">
                            <i class="fa fa-trash"></i>
                        </button>

                    </form>
                </div>

            </div>

            <div class="card-body">

                <!-- Materials -->
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <strong>Materials</strong>

                    <button class="btn btn-sm btn-success"
                            data-bs-toggle="modal"
                            data-bs-target="#addMaterialModal-{{ $module->id }}">
                        <i class="fa fa-plus"></i> Add
                    </button>
                </div>

                @forelse($module->materials as $material)

                    <div class="border rounded p-2 mb-2 d-flex justify-content-between align-items-center">

                        <div>
                            <i class="fa fa-file"></i>
                            {{ $material->title }}

                            <span class="badge bg-info">
                                {{ strtoupper($material->type) }}
                            </span>
                        </div>

                        <div>

                            @if($material->type == 'pdf')
                                <a href="{{ asset('storage/' . $material->file_path) }}"
                                   target="_blank"
                                   class="btn btn-sm btn-outline-primary">
                                    View
                                </a>
                            @else
                                <a href="{{ $material->video_url }}"
                                   target="_blank"
                                   class="btn btn-sm btn-outline-primary">
                                    Watch
                                </a>
                            @endif

                            <!-- EDIT -->
                            <button class="btn btn-sm btn-warning"
                                    data-bs-toggle="modal"
                                    data-bs-target="#editMaterialModal-{{ $material->id }}">
                                <i class="fa fa-edit"></i>
                            </button>

                            <form action="{{ route('materials.destroy', $material->id) }}"
                                  method="POST"
                                  class="d-inline"
                                  onsubmit="return confirm('Delete this material?')">

                                @csrf
                                @method('DELETE')

                                <button class="btn btn-sm btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>

                            </form>

                        </div>

                    </div>

                @empty
                    <p class="text-muted">No materials added yet.</p>
                @endforelse

            </div>

        </div>

        <!-- ADD MATERIAL MODAL -->
        <div class="modal fade" id="addMaterialModal-{{ $module->id }}" tabindex="-1">

            <div class="modal-dialog">
                <div class="modal-content">

                    <form method="POST" action="{{ route('materials.store', $module->id) }}" enctype="multipart/form-data">

                        @csrf

                        <div class="modal-header">
                            <h5 class="modal-title">Add Material</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <div class="modal-body">

                            <input type="hidden" name="course_module_id" value="{{ $module->id }}">

                            <div class="mb-2">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" required>
                            </div>

                            <div class="mb-2">
                                <label>Type</label>
                                <select name="type" class="form-control" required>
                                    <option value="pdf">PDF</option>
                                    <option value="video">Video</option>
                                </select>
                            </div>

                            <div class="mb-2">
                                <label>File (PDF)</label>
                                <input type="file" name="file_path" class="form-control">
                            </div>

                            <div class="mb-2">
                                <label>Video URL</label>
                                <input type="url" name="video_url" class="form-control">
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-primary">Save</button>
                        </div>

                    </form>

                </div>
            </div>

        </div>

    @empty
        <p class="text-muted">No modules added yet.</p>
    @endforelse

</div>
<!-- //-----Edit Material Modal -->
<div class="modal fade" id="editMaterialModal-{{ $material->id }}" tabindex="-1">

    <div class="modal-dialog">
        <div class="modal-content">

            <form method="POST" action="{{ route('materials.update', $material->id) }}">

                @csrf
                @method('PUT')

                <div class="modal-header">
                    <h5 class="modal-title">Edit Material</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    <div class="mb-2">
                        <label>Title</label>
                        <input type="text"
                               name="title"
                               class="form-control"
                               value="{{ $material->title }}"
                               required>
                    </div>

                    <div class="mb-2">
                        <label>Type</label>
                        <select name="type" class="form-control">

                            <option value="pdf" {{ $material->type == 'pdf' ? 'selected' : '' }}>PDF</option>
                            <option value="video" {{ $material->type == 'video' ? 'selected' : '' }}>Video</option>

                        </select>
                    </div>

                    <div class="mb-2">
                        <label>File Path</label>
                        <input type="text"
                               name="file_path"
                               class="form-control"
                               value="{{ $material->file_path }}">
                    </div>

                    <div class="mb-2">
                        <label>Video URL</label>
                        <input type="url"
                               name="video_url"
                               class="form-control"
                               value="{{ $material->video_url }}">
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn btn-primary">Update</button>
                </div>

            </form>

        </div>
    </div>

</div>

<!-- ADD MODULE MODAL -->
<div class="modal fade" id="addModuleModal" tabindex="-1">

    <div class="modal-dialog">
        <div class="modal-content">

            <form method="POST" action="{{ route('modules.store', $course->id) }}">

                @csrf

                <div class="modal-header">
                    <h5 class="modal-title">Add Module</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    <div class="mb-2">
                        <label>Module Number</label>
                        @php
                            $nextModule = $course->modules->max('module_number') + 1 ?? 1;
                        @endphp

                        <input type="number"
                            name="module_number"
                            class="form-control"
                            value="{{ $nextModule }}"
                            readonly>
                    </div>

                    <div class="mb-2">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn btn-primary">Save Module</button>
                </div>

            </form>

        </div>
    </div>

</div>

<!-- EDIT MODULE MODAL -->
<div class="modal fade" id="editModuleModal-{{ $module->id }}" tabindex="-1">

    <div class="modal-dialog">
        <div class="modal-content">

            <form method="POST" action="{{ route('modules.update', $module->id) }}">

                @csrf
                @method('PUT')

                <div class="modal-header">
                    <h5 class="modal-title">Edit Module</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    <div class="mb-2">
                        <label>Module Number</label>
                        <input type="number"
                               name="module_number"
                               class="form-control"
                               value="{{ $module->module_number }}"
                               required>
                    </div>

                    <div class="mb-2">
                        <label>Title</label>
                        <input type="text"
                               name="title"
                               class="form-control"
                               value="{{ $module->title }}"
                               required>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn btn-primary">Update</button>
                </div>

            </form>

        </div>
    </div>

</div>

@endsection