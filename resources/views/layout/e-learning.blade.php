@extends('layouts.app4')

@section('content')

<style>
.hub-container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 80vh;
}

.hub-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
    width: 100%;
    max-width: 900px;
}

.hub-card {
    border-radius: 20px;
    padding: 40px 25px;
    color: #fff;
    text-align: center;
    text-decoration: none;
    transition: 0.3s ease;
    position: relative;
    overflow: hidden;
}

.hub-card:hover {
    transform: translateY(-8px) scale(1.03);
    box-shadow: 0 20px 40px rgba(0,0,0,0.2);
}

.hub-card i {
    font-size: 50px;
    margin-bottom: 20px;
}

.hub-card h3 {
    font-size: 22px;
    margin-bottom: 10px;
}

.hub-card p {
    font-size: 14px;
    opacity: 0.9;
}

/* Backgrounds */
.cbt-bg {
    background: linear-gradient(135deg, #ff7e5f, #feb47b);
}

.elearning-bg {
    background: linear-gradient(135deg, #4facfe, #00f2fe);
}

/* Glow animation */
.hub-card::after {
    content: "";
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: rgba(255,255,255,0.15);
    transform: skewX(-20deg);
    transition: 0.5s;
}

.hub-card:hover::after {
    left: 120%;
}
</style>

<div class="hub-container">
    <div class="hub-grid">

        <!-- CBT Module -->
        <a href="{{ route('admin-dashboard') }}" class="hub-card cbt-bg">
            <i class="fa-solid fa-pen-to-square"></i>
            <h3>CBT Module</h3>
            <p>Take exams, practice tests and assessments</p>
        </a>

        <!-- E-Learning Module -->
        <a href="{{ route('admin.dashboard') }}" class="hub-card elearning-bg">
            <i class="fa-solid fa-graduation-cap"></i>
            <h3>E-Learning</h3>
            <p>Access course materials, videos and PDFs</p>
        </a>

    </div>
</div>

@endsection