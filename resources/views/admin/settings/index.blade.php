@extends('layouts.app5')

@section('content')
<div class="container-fluid py-3">

<div class="row">

    <!-- LEFT NAV -->
    <div class="col-md-3">
        <div class="card shadow-sm border-0 p-3 sticky-top" style="top:20px;">
            <h5>⚙️ Settings</h5>

            <div class="list-group">
                <a href="#general-card" class="list-group-item">⚙️ General</a>
                <a href="#student-card" class="list-group-item">👨‍🎓 Student</a>
                <a href="#learning-card" class="list-group-item">📚 Learning</a>
                <a href="#notification-card" class="list-group-item">🔔 Notifications</a>
                <a href="#security-card" class="list-group-item">🔐 Security</a>
            </div>
        </div>
    </div>

    <!-- RIGHT CONTENT -->
    <div class="col-md-9">

        <h3 class="mb-4">⚙️ LMS Settings</h3>

        <!-- ================= GENERAL ================= -->
        <div class="settings-block" id="general-card">

            <div class="settings-header d-flex justify-content-between">
                ⚙️ General Settings
                <button class="btn btn-success btn-sm" onclick="saveGroup('general')">💾 Update</button>
            </div>

            <div class="settings-body">

                <label>LMS Name</label>
                <input class="form-control mb-2 setting-input" data-key="general.lms_name"
                       value="{{ setting('general.lms_name') }}">

                <label>System Email</label>
                <input class="form-control mb-2 setting-input" data-key="general.system_email"
                       value="{{ setting('general.system_email') }}">

                <label>Timezone</label>

                <div class="d-flex gap-2 align-items-center">
                    <select class="form-select setting-input" data-key="general.timezone" id="timezone-select">
                        @foreach($timezones as $tz)
                            <option value="{{ $tz }}"
                                {{ setting('general.timezone','UTC') == $tz ? 'selected' : '' }}>
                                {{ $tz }}
                            </option>
                        @endforeach
                    </select>

                    <button type="button" class="btn btn-outline-primary btn-sm" onclick="autoDetectTimezone()">
                        📍 Auto
                    </button>
                </div>

                <small class="text-muted mt-1 d-block" id="tz-preview"></small>

                <div class="alert alert-success mt-2 d-none" id="general-success">
                    ✅ General settings updated
                </div>

            </div>
        </div>


        <!-- ================= STUDENT ================= -->
        <div class="settings-block mt-4" id="student-card">

            <div class="settings-header d-flex justify-content-between">
                👨‍🎓 Student Settings
                <button class="btn btn-success btn-sm" onclick="saveGroup('student')">💾 Update</button>
            </div>

            <div class="settings-body">

                <div class="form-check form-switch mb-2">
                    <input type="checkbox" class="form-check-input setting-input"
                           data-key="student.auto_approve"
                           {{ setting('student.auto_approve') ? 'checked' : '' }}>
                    <label>Auto Approve Registrations</label>
                </div>

                <label>Max Courses</label>
                <input class="form-control mb-2 setting-input"
                       data-key="student.max_courses"
                       value="{{ setting('student.max_courses',5) }}">

                <label>Inactivity Threshold</label>
                <input class="form-control setting-input"
                       data-key="student.inactivity_threshold"
                       value="{{ setting('student.inactivity_threshold',7) }}">

                <div class="alert alert-success mt-2 d-none" id="student-success">
                    ✅ Student settings updated
                </div>

            </div>
        </div>


        <!-- ================= LEARNING ================= -->
        <div class="settings-block mt-4" id="learning-card">

            <div class="settings-header d-flex justify-content-between">
                📚 Learning Settings
                <button class="btn btn-success btn-sm" onclick="saveGroup('learning')">💾 Update</button>
            </div>

            <div class="settings-body">

                <div class="form-check form-switch mb-2">
                    <input type="checkbox" class="form-check-input setting-input"
                           data-key="learning.auto_complete"
                           {{ setting('learning.auto_complete') ? 'checked' : '' }}>
                    <label>Auto Complete Material</label>
                </div>

                <label>Video Watch %</label>
                <input class="form-control mb-2 setting-input"
                       data-key="learning.video_watch_percentage"
                       value="{{ setting('learning.video_watch_percentage',80) }}">

                <label>Completion Rule</label>
                <input class="form-control setting-input"
                       data-key="learning.completion_rule"
                       value="{{ setting('learning.completion_rule') }}">

                <div class="alert alert-success mt-2 d-none" id="learning-success">
                    ✅ Learning settings updated
                </div>

            </div>
        </div>


        <!-- ================= NOTIFICATION ================= -->
        <div class="settings-block mt-4" id="notification-card">

            <div class="settings-header d-flex justify-content-between">
                🔔 Notifications
                <button class="btn btn-success btn-sm" onclick="saveGroup('notification')">💾 Update</button>
            </div>

            <div class="settings-body">

                <div class="form-check form-switch mb-2">
                    <input type="checkbox" class="form-check-input setting-input"
                           data-key="notification.email_alerts"
                           {{ setting('notification.email_alerts') ? 'checked' : '' }}>
                    <label>Email Alerts</label>
                </div>

                <div class="form-check form-switch mb-2">
                    <input type="checkbox" class="form-check-input setting-input"
                           data-key="notification.admin_alerts"
                           {{ setting('notification.admin_alerts') ? 'checked' : '' }}>
                    <label>Admin Alerts</label>
                </div>

                <div class="form-check form-switch mb-2">
                    <input type="checkbox" class="form-check-input setting-input"
                           data-key="notification.weekly_report"
                           {{ setting('notification.weekly_report') ? 'checked' : '' }}>
                    <label>Weekly Reports</label>
                </div>

                <div class="alert alert-success mt-2 d-none" id="notification-success">
                    ✅ Notification settings updated
                </div>

            </div>
        </div>


        <!-- ================= SECURITY ================= -->
        <div class="settings-block mt-4" id="security-card">

            <div class="settings-header d-flex justify-content-between">
                🔐 Security
                <button class="btn btn-success btn-sm" onclick="saveGroup('security')">💾 Update</button>
            </div>

            <div class="settings-body">

                <label>Password Policy</label>
                <input class="form-control mb-2 setting-input"
                       data-key="security.password_policy"
                       value="{{ setting('security.password_policy') }}">

                <label>Session Timeout</label>
                <input class="form-control mb-2 setting-input"
                       data-key="security.session_timeout"
                       value="{{ setting('security.session_timeout') }}">

                <label>Login Attempts</label>
                <input class="form-control setting-input"
                       data-key="security.login_attempts"
                       value="{{ setting('security.login_attempts') }}">

                <div class="alert alert-success mt-2 d-none" id="security-success">
                    ✅ Security settings updated
                </div>

            </div>
        </div>

    </div>

</div>
</div>


<style>
    .settings-block {
    background: #fff;
    border-radius: 12px;
    margin-bottom: 25px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    overflow: hidden;
}

.settings-header {
    padding: 12px 15px;
    font-weight: 600;
    background: #f8f9fa;
    border-bottom: 1px solid #eee;
}

.settings-body {
    padding: 15px;
}

.setting-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 0;
    border-bottom: 1px dashed #eee;
}

.setting-row:last-child {
    border-bottom: none;
}

.form-control {
    border-radius: 8px;
}

.list-group-item {
    border: none;
    border-radius: 8px;
    margin-bottom: 5px;
}

.list-group-item:hover {
    background: #f0f2f5;
}
</style>

<script>

// Save per group
function saveGroup(group) {

    let card = document.getElementById(group + '-card');
    let inputs = card.querySelectorAll('.setting-input');

    let requests = [];

    inputs.forEach(input => {

        let value = input.type === 'checkbox'
            ? (input.checked ? 1 : 0)
            : input.value;

        requests.push(
            fetch("{{ route('admin.settings.live-update') }}", {
                method: "POST",
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    key: input.dataset.key,
                    value: value
                })
            })
        );
    });

    Promise.all(requests).then(() => {

        let alert = document.getElementById(group + '-success');
        alert.classList.remove('d-none');

        setTimeout(() => {
            alert.classList.add('d-none');
        }, 2000);

    });
}


// Auto detect timezone
function autoDetectTimezone() {
    let tz = Intl.DateTimeFormat().resolvedOptions().timeZone;

    document.getElementById('timezone-select').value = tz;

    saveSetting('general.timezone', tz);

    currentTimezone = tz; // 🔥 important for live clock
}


// single save helper
function saveSetting(key, value) {
    fetch("{{ route('admin.settings.live-update') }}", {
        method: "POST",
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({ key, value })
    });
}


// timezone preview + LIVE CLOCK STATE
let currentTimezone = null;


// update preview clock
function updatePreview(tz) {

    let now = new Date().toLocaleString("en-US", {
        timeZone: tz,
        hour: '2-digit',
        minute: '2-digit',
        second: '2-digit',
        hour12: true
    });

    let el = document.getElementById('tz-preview');
    if (el) {
        el.innerHTML = `🕒 Current time: <b>${now}</b> (${tz})`;
    }
}


// LIVE CLOCK ENGINE (THIS FIXES YOUR ISSUE)
function startLiveClock() {

    setInterval(() => {

        if (!currentTimezone) {
            let select = document.getElementById('timezone-select');
            if (!select) return;

            currentTimezone = select.value;
        }

        updatePreview(currentTimezone);

    }, 1000);
}


// init
document.addEventListener('DOMContentLoaded', function () {

    let select = document.getElementById('timezone-select');

    if (select) {

        currentTimezone = select.value;

        updatePreview(currentTimezone);

        select.addEventListener('change', function () {
            currentTimezone = this.value;
            updatePreview(this.value);
            saveSetting('general.timezone', this.value);
        });
    }

    // 🔥 START LIVE CLOCK
    startLiveClock();

});

</script>
@endsection