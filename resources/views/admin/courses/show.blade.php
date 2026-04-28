@extends('layouts.app5')

@section('content')

@php use Illuminate\Support\Str; @endphp

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

    <!-- Description -->
    <div class="mb-4">
        <p class="text-muted">
            {{ $course->description ?? 'No description provided.' }}
        </p>
    </div>

    <hr>

    <!-- Modules Header -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="mb-0">Modules</h5>

        <button class="btn btn-primary btn-sm"
                data-bs-toggle="modal"
                data-bs-target="#addModuleModal">
            <i class="fa fa-plus"></i> Add Module
        </button>
    </div>

    <!-- Modules List -->
    @forelse($course->modules as $module)

        <div class="card mb-3 shadow-sm">

            <div class="card-header d-flex justify-content-between align-items-center">

                <strong>
                    Week {{ $module->module_number }}:
                    {{ $module->title }}
                </strong>

                <div class="d-flex gap-2">

                    <!-- EDIT MODULE -->
                    <button class="btn btn-sm btn-warning"
                            data-bs-toggle="modal"
                            data-bs-target="#editModuleModal-{{ $module->id }}">
                        <i class="fa fa-edit"></i>
                    </button>

                    <!-- DELETE MODULE -->
                    <form action="{{ route('modules.destroy', $module) }}"
                          method="POST"
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

                <!-- Materials Header -->
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

                        <div class="d-flex gap-2">

                            <!-- VIEW BUTTON (MODAL TRIGGER) -->
                            <button class="btn btn-sm btn-outline-primary"
                                    data-bs-toggle="modal"
                                    data-bs-target="#viewMaterialModal-{{ $material->id }}">

                                View
                            </button>

                            <!-- EDIT -->
                            <button class="btn btn-sm btn-warning"
                                    data-bs-toggle="modal"
                                    data-bs-target="#editMaterialModal-{{ $material->id }}">
                                <i class="fa fa-edit"></i>
                            </button>

                            <!-- DELETE -->
                            <form action="{{ route('materials.destroy', $material) }}"
                                method="POST"
                                onsubmit="return confirm('Delete this material?')">

                                @csrf
                                @method('DELETE')

                                <button class="btn btn-sm btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>

                        </div>

                    </div>

                    <div class="modal fade" id="viewMaterialModal-{{ $material->id }}" tabindex="-1">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-title">{{ $material->title }}</h5>
                                    <button class="btn-close" data-bs-dismiss="modal"></button>
                                </div>

                                <div class="modal-body">

                                    @if($material->type === 'pdf')

                                        <iframe src="{{ Storage::url($material->file_path) }}"
                                                width="100%"
                                                height="600px"
                                                style="border:0;">
                                        </iframe>

                                    @elseif($material->type === 'video')

                                        @if(Str::contains($material->video_url, ['youtube.com', 'youtu.be']))
                                            <div class="ratio ratio-16x9">
                                                <iframe src="{{ convertToEmbed($material->video_url) }}"
                                                        allowfullscreen></iframe>
                                            </div>
                                        @else
                                            <video controls width="100%">
                                                <source src="{{ Storage::url($material->video_url) }}">
                                            </video>
                                        @endif

                                    @endif

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="editMaterialModal-{{ $material->id }}" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <form method="POST"
                  action="{{ route('materials.update', $material) }}"
                  enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="modal-header">
                    <h5 class="modal-title">Edit Material</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    <!-- TITLE -->
                    <div class="mb-2">
                        <label>Title</label>
                        <input type="text"
                               name="title"
                               class="form-control"
                               value="{{ $material->title }}"
                               required>
                    </div>

                    <!-- TYPE -->
                    <div class="mb-2">
                        <label>Type</label>
                        <select name="type"
                                class="form-control edit-material-type"
                                data-id="{{ $material->id }}"
                                required>

                            <option value="pdf" {{ $material->type == 'pdf' ? 'selected' : '' }}>
                                PDF
                            </option>

                            <option value="video" {{ $material->type == 'video' ? 'selected' : '' }}>
                                Video
                            </option>

                        </select>
                    </div>

                    <!-- PDF SECTION -->
                    <div class="mb-2 pdf-box-{{ $material->id }} {{ $material->type != 'pdf' ? 'd-none' : '' }}">
                        <label>Replace PDF</label>
                        <input type="file" name="file_path" class="form-control">
                    </div>

                    <!-- VIDEO SECTION -->
                    <div class="mb-2 video-box-{{ $material->id }} {{ $material->type != 'video' ? 'd-none' : '' }}">

                        <label>Video Type</label>
                        <select name="video_source"
                                class="form-control video-source"
                                data-id="{{ $material->id }}">

                            <option value="">-- Select --</option>
                            <option value="url">Video URL</option>
                            <option value="file">Upload Video File</option>

                        </select>

                        <!-- URL -->
                        <div class="mt-2 video-url-{{ $material->id }}">
                            <input type="url"
                                   name="video_url"
                                   class="form-control"
                                   value="{{ $material->video_url }}">
                        </div>

                        <!-- FILE -->
                        <div class="mt-2 video-file-{{ $material->id }} d-none">
                            <input type="file" name="video_file" class="form-control">
                        </div>

                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn btn-primary">Update</button>
                </div>

            </form>

        </div>
    </div>
</div>

                    <div class="modal fade" id="viewMaterialModal-{{ $material->id }}" tabindex="-1">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h5 class="modal-title">{{ $material->title }}</h5>
                                <button class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <div class="modal-body">

                                {{-- ❗ NO MATERIAL FILE --}}
                                @if(!$material->file_path && !$material->video_url)
                                    <div class="alert alert-warning">
                                        No content available for this material.
                                    </div>

                                {{-- 📄 PDF --}}
                                @elseif($material->type === 'pdf' && $material->file_path)

                                    <iframe src="{{ Storage::url($material->file_path) }}"
                                            width="100%"
                                            height="600px"
                                            style="border:0;">
                                    </iframe>

                                {{-- 🎥 VIDEO --}}
                                @elseif($material->type === 'video')

                                    @if($material->video_url)

                                        @if(Str::contains($material->video_url, ['youtube.com', 'youtu.be']))
                                            <div class="ratio ratio-16x9">
                                                <iframe src="{{ convertToEmbed($material->video_url) }}"
                                                        allowfullscreen></iframe>
                                            </div>
                                        @else
                                            <video controls width="100%">
                                                <source src="{{ Storage::url($material->video_url) }}">
                                            </video>
                                        @endif

                                    @else
                                        <div class="alert alert-warning">
                                            No video available for this material.
                                        </div>
                                    @endif

                                @else
                                    <div class="alert alert-info">
                                        Invalid material type or missing data.
                                    </div>
                                @endif

                            </div>

                        </div>
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

                    <form method="POST"
                          action="{{ route('materials.store', $module) }}"
                          enctype="multipart/form-data">

                        @csrf

                        <div class="modal-header">
                            <h5 class="modal-title">Add Material</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <div class="modal-body">

                            <div class="mb-2">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control material-title" required>
                            </div>

                            <div class="mb-2">
                                <label>Type</label>
                                <select name="type"
                                        class="form-control material-type"
                                        required>
                                    <option value="">-- Select Type --</option>
                                    <option value="pdf">PDF</option>
                                    <option value="video">Video</option>
                                </select>
                            </div>

                            <!-- PDF INPUT -->
                            <div class="mb-2 pdf-box d-none">
                                <label>Upload PDF</label>
                                <input type="file" name="file_path" class="form-control">
                            </div>

                            <!-- VIDEO OPTIONS -->
                            <div class="mb-2 video-box d-none">

                                <label>Video Type</label>
                                <select name="video_source" class="form-control video-source">
                                    <option value="">-- Choose --</option>
                                    <option value="url">Video URL</option>
                                    <option value="file">Upload Video File</option>
                                </select>

                                <div class="mt-2 video-url-box d-none">
                                    <input type="url" name="video_url" class="form-control" placeholder="https://youtube.com/...">
                                </div>

                                <div class="mt-2 video-file-box d-none">
                                    <input type="file" name="video_file" class="form-control">
                                </div>

                            </div>

                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-primary">Save</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>        

        <!-- EDIT MODULE MODAL -->
        <div class="modal fade" id="editModuleModal-{{ $module->id }}" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">

                    <form method="POST" action="{{ route('modules.update', $module) }}">
                        @csrf
                        @method('PUT')

                        <div class="modal-header">
                            <h5 class="modal-title">Edit Module</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <div class="modal-body">

                            <div class="mb-2">
                                <label>Module Number</label>
                                <input type="number" name="module_number"
                                       class="form-control"
                                       value="{{ $module->module_number }}" required>
                            </div>

                            <div class="mb-2">
                                <label>Title</label>
                                <input type="text" name="title"
                                       class="form-control"
                                       value="{{ $module->title }}" required>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-primary">Update</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>

    @empty
        <p class="text-muted">No modules added yet.</p>
    @endforelse

</div>

<!-- ADD MODULE MODAL -->
<div class="modal fade" id="addModuleModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <form method="POST" action="{{ route('modules.store', $course) }}">
                @csrf

                <div class="modal-header">
                    <h5 class="modal-title">Add Module</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    @php
                        $nextModule = ($course->modules->max('module_number') ?? 0) + 1;
                    @endphp

                    <div class="mb-2">
                        <label>Module Number</label>
                        <input type="number" name="module_number"
                               class="form-control"
                               value="{{ $nextModule }}" readonly>
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
<script>
document.addEventListener('DOMContentLoaded', function () {

    document.querySelectorAll('.material-type').forEach(select => {

        select.addEventListener('change', function () {

            const modal = this.closest('.modal');

            const pdfBox = modal.querySelector('.pdf-box');
            const videoBox = modal.querySelector('.video-box');

            pdfBox.classList.add('d-none');
            videoBox.classList.add('d-none');

            if (this.value === 'pdf') {
                pdfBox.classList.remove('d-none');
            }

            if (this.value === 'video') {
                videoBox.classList.remove('d-none');
            }

        });

    });

    document.querySelectorAll('.video-source').forEach(select => {

        select.addEventListener('change', function () {

            const modal = this.closest('.modal');

            const urlBox = modal.querySelector('.video-url-box');
            const fileBox = modal.querySelector('.video-file-box');

            urlBox.classList.add('d-none');
            fileBox.classList.add('d-none');

            if (this.value === 'url') {
                urlBox.classList.remove('d-none');
            }

            if (this.value === 'file') {
                fileBox.classList.remove('d-none');
            }

        });

    });

});
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {

    // TYPE SWITCH (PDF / VIDEO)
    document.querySelectorAll('.edit-material-type').forEach(select => {

        select.addEventListener('change', function () {

            const id = this.dataset.id;

            const pdfBox = document.querySelector('.pdf-box-' + id);
            const videoBox = document.querySelector('.video-box-' + id);

            pdfBox.classList.add('d-none');
            videoBox.classList.add('d-none');

            if (this.value === 'pdf') {
                pdfBox.classList.remove('d-none');
            }

            if (this.value === 'video') {
                videoBox.classList.remove('d-none');
            }

        });

    });

});
</script>
@endsection