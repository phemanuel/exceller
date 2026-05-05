@extends('layouts.students')

@section('title','Course Materials')

@section('content')

<div class="container-fluid">
    <div class="row">

        <!-- LEFT SIDEBAR -->
        <div class="col-md-3 border-end sidebar-fixed">

            <h6 class="mb-3">📚 Module Materials</h6>

            @foreach($moduleMaterials as $m)

                @php
                    $isCompleted = in_array($m->id, $completedMaterials);
                @endphp

                <button onclick="loadMaterial({{ $m->id }})"
                    id="material-btn-{{ $m->id }}"
                    class="btn btn-sm w-100 mb-2 d-flex justify-content-between
                    {{ $m->id == $material->id ? 'btn-primary' : 'btn-outline-secondary' }}">

                    <span>
                        {{ $m->type === 'video' ? '▶' : '📄' }}
                        {{ $m->title }}
                    </span>

                    <span id="status-{{ $m->id }}">
                        @if($isCompleted)
                            <i class="fa-solid fa-circle-check text-success"></i>
                        @else
                            <i class="fa-solid fa-circle-xmark text-danger"></i>
                        @endif
                    </span>

                </button>

            @endforeach

            <div class="mt-4">

                <a href="{{ route('student.course.view', [
                    'id' => $student->id,
                    'course_id' => $material->module->course->id
                ]) }}"
                class="btn btn-dark w-100">

                    ⬅ Back to Course Modules

                </a>

            </div>
        </div>

        <!-- RIGHT CONTENT -->
        <div class="col-md-9">

            <div id="material-viewer" class="card shadow-sm border-0 p-4">

                <h4>{{ $material->title }}</h4>

                <small class="text-muted">
                    📅 Week {{ $material->module->module_number }}
                    • {{ $material->module->title }}
                </small>

                <hr>

                @if($material->type === 'video')
                    <div class="ratio ratio-16x9 mb-3">
                        <iframe src="{{ $material->video_url }}" allowfullscreen></iframe>
                    </div>
                @else
                    <iframe src="{{ asset('storage/'.$material->file_path) }}"
                            width="100%" height="600px"></iframe>
                @endif

                <button id="complete-btn-{{ $material->id }}"
                        class="btn btn-success mt-3"
                        onclick="markComplete({{ $material->id }})">
                    ✅ Mark Complete
                </button>

            </div>

        </div>

    </div>
</div>

<!-- TOAST -->
<div class="position-fixed bottom-0 end-0 p-3" style="z-index:9999">
    <div id="lmsToast" class="toast text-bg-success border-0">
        <div class="d-flex">
            <div class="toast-body" id="lmsToastMsg"></div>
            <button class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
        </div>
    </div>
</div>

<style>
.sidebar-fixed {
    position: sticky;
    top: 0;
    height: 100vh;
    overflow-y: auto;
}
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>

function loadMaterial(materialId) {

    fetch(`/lms/student/{{ $student->id }}/material/${materialId}/ajax`)
    .then(res => res.json())
    .then(data => {

        let content = data.type === 'video'
            ? `<div class="ratio ratio-16x9"><iframe src="${data.video_url}" allowfullscreen></iframe></div>`
            : `<iframe src="/storage/${data.file_path}" width="100%" height="600px"></iframe>`;

        let actionButton = data.is_completed
            ? `<button class="btn btn-success mt-3" disabled>
                    🟢 Completed
               </button>`
            : `<button class="btn btn-success mt-3"
                    onclick="markComplete(${data.id})"
                    id="complete-btn-${data.id}">
                    ✅ Mark Complete
               </button>`;

        document.getElementById('material-viewer').innerHTML = `
            <h4>${data.title}</h4>
            <small>📅 Week ${data.week} • ${data.module_title}</small>
            <hr>
            ${content}
            ${actionButton}
        `;

        // highlight active
        document.querySelectorAll('[id^="material-btn-"]').forEach(btn => {
            btn.classList.remove('btn-primary');
            btn.classList.add('btn-outline-secondary');
        });

        document.getElementById(`material-btn-${materialId}`)
            .classList.replace('btn-outline-secondary','btn-primary');
    });
}

function markComplete(materialId) {

    fetch(`/lms/student/{{ $student->id }}/material/${materialId}/complete`, {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": "{{ csrf_token() }}"
        }
    })
    .then(res => res.json())
    .then(data => {

        showToast("Material completed ✔");

        // update sidebar icon instantly
        document.getElementById(`status-${materialId}`).innerHTML =
            `<i class="fa-solid fa-circle-check text-success"></i>`;

        // reload current material UI (so button changes to Completed)
        loadMaterial(materialId);

        // auto next
        if (data.next_material_id) {
            setTimeout(() => {
                loadMaterial(data.next_material_id);
            }, 1000);
        }
    });
}

function showToast(message) {
    const toastEl = document.getElementById('lmsToast');
    document.getElementById('lmsToastMsg').innerText = message;
    new bootstrap.Toast(toastEl).show();
}

</script>

@endsection