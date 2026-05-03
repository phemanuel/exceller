<!DOCTYPE html>
<html>
<head>
    <title>Student Panel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f7fb;
        }

        .sidebar {
            height: 100vh;
            background: #111827;
            color: #fff;
            position: fixed;
            width: 240px;
        }

        .sidebar .nav-link {
            color: #cbd5e1;
            border-radius: 8px;
            margin-bottom: 5px;
        }

        .sidebar .nav-link:hover {
            background: #1f2937;
            color: #fff;
        }

        .sidebar .nav-link.active {
            background: #2563eb;
            color: #fff;
        }

        .main-content {
            margin-left: 240px;
        }

        .topbar {
            background: #fff;
            border-bottom: 1px solid #e5e7eb;
        }

        .card {
            border-radius: 12px;
        }
    </style>
</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar p-3">

    <h5 class="mb-4">🎓 LMS Student</h5>

    <ul class="nav flex-column">

        <li class="nav-item">
            <a href="{{ route('student.dashboard') }}"
               class="nav-link {{ request()->routeIs('student.dashboard') ? 'active' : '' }}">
                <i class="fa-solid fa-chart-line me-2"></i> Dashboard
            </a>
        </li>

        <li class="nav-item">
            <a href="#"
               class="nav-link">
                <i class="fa-solid fa-book me-2"></i> Course View
            </a>
        </li>

        <li class="nav-item">
            <a href="#"
               class="nav-link">
                <i class="fa-solid fa-chart-pie me-2"></i> Progress
            </a>
        </li>

        <li class="nav-item">
            <a href="#"
               class="nav-link">
                <i class="fa-solid fa-user me-2"></i> Profile
            </a>
        </li>

        <li class="nav-item">
            <a href="#"
               class="nav-link">
                <i class="fa-solid fa-bell me-2"></i> Notifications
            </a>
        </li>

        <li class="nav-item">
            <a href="#"
               class="nav-link">
                <i class="fa-solid fa-triangle-exclamation me-2"></i> Risk & Feedback
            </a>
        </li>

        <li class="nav-item">
            <a href="#"
               class="nav-link">
                <i class="fa-solid fa-trophy me-2"></i> Gamification
            </a>
        </li>

        <li class="nav-item">
            <a href="#"
               class="nav-link">
                <i class="fa-solid fa-gear me-2"></i> Settings
            </a>
        </li>

        <hr class="text-secondary">

        <!-- Logout -->
        <li class="nav-item">
            <a href="{{ route('logout') }}"
               class="nav-link text-danger"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa-solid fa-arrow-right-from-bracket me-2"></i> Logout
            </a>
        </li>

    </ul>
</div>

<!-- MAIN CONTENT -->
<div class="main-content">

    <!-- TOPBAR -->
    <div class="topbar d-flex justify-content-between align-items-center px-4 py-2">

        <h6 class="mb-0">@yield('title', 'Dashboard')</h6>

        <div>
            <small class="text-muted">
                {{ $student->first_name ?? 'Student' }}
            </small>
        </div>

    </div>

    <!-- PAGE CONTENT -->
    <div class="p-4">
        @yield('content')
    </div>

</div>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>

</body>
</html>