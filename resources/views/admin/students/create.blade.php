@extends('layouts.app5')

@section('content')

<div class="card-box">

    <h3>Create Student</h3>

    <form method="POST" action="{{ route('students.store') }}">
        @csrf

        <div class="mb-2">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-2">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-2">
            <label>Matric Number</label>
            <input type="text" name="matric_no" class="form-control">
        </div>

        <div class="mb-2">
            <label>Level</label>
            <select name="level" class="form-control">
                <option value="">Select Level</option>
                <option>100</option>
                <option>200</option>
                <option>300</option>
                <option>NDI</option>
                <option>NDII</option>
                <option>HNDI</option>
                <option>HNDII</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Programme</label>
            <input type="text" name="programme" class="form-control">
        </div>

        <button class="btn btn-primary">
            Save Student
        </button>

    </form>

</div>

@endsection