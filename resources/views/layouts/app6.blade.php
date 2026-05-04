<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'LMS System') }}</title>
    <link rel="shortcut icon" href="{{ asset('/favicon.png') }}">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            background: #f5f7fb;
            font-family: 'Segoe UI', sans-serif;
        }

        /* Navbar */
        .navbar {
            background: linear-gradient(135deg, #1d4ed8, #2563eb);
        }

        .navbar-brand {
            color: #fff !important;
            font-weight: 600;
        }

        .nav-link {
            color: #e5e7eb !important;
            margin-left: 10px;
            transition: 0.3s;
        }

        .nav-link:hover {
            color: #fff !important;
        }

        .nav-link.active {
            color: #fff !important;
            font-weight: bold;
            border-bottom: 2px solid #fff;
        }

        /* Main */
        .main-container {
            padding: 30px;
        }

        /* Card Container */
        .card-box {
            background: #fff;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
        }

        /* Dashboard Cards */
        .dashboard-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 20px;
        }

        .dashboard-card {
            border-radius: 18px;
            padding: 20px;
            color: #fff;
            text-decoration: none;
            transition: 0.3s ease;
        }

        .dashboard-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }

        .dashboard-card i {
            font-size: 28px;
            margin-bottom: 10px;
        }

        /* Gradients */
        .bg-blue { background: linear-gradient(135deg, #4facfe, #00f2fe); }
        .bg-purple { background: linear-gradient(135deg, #667eea, #764ba2); }
        .bg-green { background: linear-gradient(135deg, #43e97b, #38f9d7); }
        .bg-orange { background: linear-gradient(135deg, #f7971e, #ffd200); }
        .bg-pink { background: linear-gradient(135deg, #ff758c, #ff7eb3); }
        .bg-dark { background: linear-gradient(135deg, #232526, #414345); }

        footer {
            text-align: center;
            padding: 15px;
            margin-top: 40px;
            font-size: 13px;
            color: #888;
        }
    </style>

    @stack('styles')
</head>
<body>

<!-- 🔝 Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="{{ route('admin-dashboard') }}">
            🎓 LMS
        </a>

        <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a href="{{route('student-cbt', ['id' => $studentData->id])}}"
                       class="nav-link {{ request()->routeIs('courses.*') ? 'active' : '' }}">
                        <i class="fa-solid fa-book-open"></i> CBT
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('student.lms.dashboard', ['id' => $studentData->id]) }}"
                       class="nav-link {{ request()->routeIs('modules.*') ? 'active' : '' }}">
                        <i class="fa-solid fa-layer-group"></i> E-LEARNING
                    </a>
                </li>                

                <!-- User -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        <i class="fa-solid fa-user"></i>
                        {{ auth()->user()->first_name ?? 'User' }}
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a href="#" class="dropdown-item">
                                <i class="fa-solid fa-user"></i> Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-item" href="{{ route('login') }}">
                                <i class="fa-solid fa-right-from-bracket"></i></i> Logout
                            </a>
                        </li>
                        
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>

<!-- 📦 Main Content -->
<div class="container main-container">

    <!-- Flash Messages -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show">
            {{ session('error') }}
            <button class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <!-- Page Content -->
    @yield('content')

</div>

<!-- 🔻 Footer -->
<footer>
    © {{ date('Y') }} {{ config('app.name', 'LMS System') }}. All rights reserved.
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@stack('scripts')

</body>
</html>