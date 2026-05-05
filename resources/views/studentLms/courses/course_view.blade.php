@extends('layouts.students')

@section('title', 'Course Learning Modules')

@section('content')

    <div class="container-fluid">

        <!-- HEADER -->
        <div class="card shadow-sm border-0 p-3 mb-4">

        <div class="d-flex justify-content-between align-items-center">

            <div>
                <h4 class="mb-1">{{ $course->title }}</h4>                
                <small class="text-muted">Course Learning Modules</small>
            </div>

            <!-- BACK BUTTON -->
            <a href="{{ route('student.courses', ['id' => $student->id]) }}" class="btn btn-outline-secondary btn-sm">
                ← Back
            </a>

        </div>

    </div>

    <div class="row">

        <!-- MODULE GRID -->
        `<div class="col-md-8">

            <div class="row">

                @foreach($moduleData as $data)

                <div class="col-md-4 mb-4">

                    <div class="card shadow-sm border-0 h-100">

                        <div class="card-body">

                            <div class="d-flex justify-content-between align-items-start">

                                <div>
                                    <h6 class="fw-bold mb-1">
                                        📅 Week {{ $data['week'] }}
                                    </h6>

                                    <small class="text-muted">
                                        {{ $data['module']->title }}
                                    </small>
                                </div>

                                @if(!$data['unlocked'])
                                    <span class="badge bg-dark">🔒</span>
                                @else
                                    <span class="badge bg-success">✓</span>
                                @endif

                            </div>

                            <!-- PROGRESS -->
                            <div class="mt-3">
                                <small>{{ $data['progress'] }}% completed</small>

                                <div class="progress mt-1" style="height:6px;">
                                    <div class="progress-bar bg-primary"
                                        style="width: {{ $data['progress'] }}%">
                                    </div>
                                </div>
                            </div>

                            <!-- ACTION -->
                            <!-- ACTION -->
<div class="mt-3">

    @if($data['unlocked'])

        @php
            $progress = $data['progress'];
            $firstMaterial = $data['materials']->first();
        @endphp

        @if($progress == 0)

            <a href="{{ route('student.material.full', [
                'id' => $student->id,
                'material_id' => $firstMaterial->id
            ]) }}"
            class="btn btn-primary btn-sm w-100">

                ▶ Start Module

            </a>

        @elseif($progress < 100)

            <a href="{{ route('student.material.full', [
                'id' => $student->id,
                'material_id' => $firstMaterial->id
            ]) }}"
            class="btn btn-warning btn-sm w-100">

                ⏯ Continue

            </a>

        @else

            <a href="{{ route('student.material.full', [
                'id' => $student->id,
                'material_id' => $firstMaterial->id
            ]) }}"
            class="btn btn-success btn-sm w-100">

                👁 View

            </a>

        @endif

    @else

        <button class="btn btn-secondary btn-sm w-100" disabled>
            🔒 Locked
        </button>

    @endif

</div>

                        </div>

                    </div>

                </div>

                @endforeach

            </div>

        </div>   

    </div>

</div>


<!-- MODULE MODAL (BIG) -->
<div class="modal fade" id="moduleModal" tabindex="-1">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">📚 Module Materials</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div id="moduleMaterialsList">
            <!-- dynamically loaded -->
        </div>

      </div>

    </div>
  </div>
</div>


<!-- MATERIAL VIEW MODAL (SMALL) -->
<div class="modal fade" id="materialViewModal" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">📄 Material Viewer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body" id="materialContent">

      </div>

    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>

const modules = @json($moduleData);

// 👇 student id (from backend)
const studentId = {{ $student->id }};

/**
 * Open module and list materials
 */
function openModuleModal(moduleId) {

    const module = modules.find(m =>
        Number(m.module.id) === Number(moduleId)
    );

    if (!module) {
        console.error("Module not found:", moduleId);
        return;
    }

    const container = document.getElementById('moduleMaterialsList');
    if (!container) return;

    container.innerHTML = module.materials.map(material => {

        // ✅ correct route with BOTH ids
        const url = `/lms/student/${studentId}/material/${material.id}/view`;

        return `
            <div class="d-flex justify-content-between align-items-center border p-2 mb-2 rounded">

                <div>
                    📄 ${material.title}
                </div>

                <a href="${url}"
                   class="btn btn-sm btn-outline-primary">
                    Open
                </a>

            </div>
        `;
    }).join('');

    const modalEl = document.getElementById('moduleModal');
    if (modalEl) {
        new bootstrap.Modal(modalEl).show();
    }
}

</script>
@endsection