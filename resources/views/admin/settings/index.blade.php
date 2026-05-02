@extends('layouts.app5')

@section('content')
<div class="container py-3">

    <h3 class="mb-4">⚙️ LMS Settings</h3>

    <div class="row g-4">

        <!-- STUDENT SETTINGS -->
        <div class="col-md-6">
            <div class="card p-3 shadow-sm border-0">

                <h5>👨‍🎓 Student Settings</h5>

                <!-- AUTO APPROVE -->
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <span>Auto Approve Students</span>

                    <label class="form-switch">
                        <input type="checkbox"
                               class="setting-toggle"
                               data-key="auto_approve_students"
                               {{ setting('auto_approve_students') == 1 ? 'checked' : '' }}>
                        <span class="slider"></span>
                    </label>
                </div>

                <!-- MAX COURSES -->
                <div class="mt-3">
                    <label>Max Courses Per Student</label>
                    <input type="number"
                           class="form-control setting-input"
                           data-key="max_courses"
                           value="{{ setting('max_courses', 5) }}">
                </div>

            </div>
        </div>

        <!-- LEARNING SETTINGS -->
        <div class="col-md-6">
            <div class="card p-3 shadow-sm border-0">

                <h5>📚 Learning Settings</h5>

                <!-- AUTO COMPLETE -->
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <span>Auto Complete Material</span>

                    <label class="form-switch">
                        <input type="checkbox"
                               class="setting-toggle"
                               data-key="auto_complete_material"
                               {{ setting('auto_complete_material') == 1 ? 'checked' : '' }}>
                        <span class="slider"></span>
                    </label>
                </div>

                <!-- INACTIVITY THRESHOLD -->
                <div class="mt-3">
                    <label>Inactivity Threshold (days)</label>
                    <input type="number"
                           class="form-control setting-input"
                           data-key="inactivity_threshold"
                           value="{{ setting('inactivity_threshold', 7) }}">
                </div>

            </div>
        </div>

    </div>

</div>
<style>
    .form-switch {
  position: relative;
  display: inline-block;
  width: 45px;
  height: 24px;
}

.form-switch input {
  display: none;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0; left: 0; right: 0; bottom: 0;
  background-color: #ccc;
  transition: .3s;
  border-radius: 34px;
}

.slider:before {
  position: absolute;
  content: "";
  height: 18px;
  width: 18px;
  left: 3px;
  bottom: 3px;
  background-color: white;
  transition: .3s;
  border-radius: 50%;
}

input:checked + .slider {
  background-color: #28a745;
}

input:checked + .slider:before {
  transform: translateX(20px);
}
</style>
<script>
document.querySelectorAll('.setting-toggle').forEach(toggle => {
    toggle.addEventListener('change', function () {

        fetch("{{ route('admin.settings.live-update') }}", {
            method: "POST",
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                key: this.dataset.key,
                value: this.checked ? 1 : 0
            })
        })
        .then(res => res.json())
        .then(data => {
            console.log(data.message);
        });

    });
});


document.querySelectorAll('.setting-input').forEach(input => {
    input.addEventListener('change', function () {

        fetch("{{ route('admin.settings.live-update') }}", {
            method: "POST",
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                key: this.dataset.key,
                value: this.value
            })
        });

    });
});
</script>
@endsection