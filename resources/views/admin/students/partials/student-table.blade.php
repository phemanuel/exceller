 <!-- TABLE -->
    <div class="table-responsive">

        <table class="table table-bordered">

            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Admission No</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Phone</th>
                    <th>Level</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>

                @forelse($students as $student)

                    <tr>

                        <td>
                            @php
                                $imagePath = public_path('uploads/students/' . $student->picture_name . '.jpg');
                            @endphp

                            <img src="{{ (!empty($student->picture_name) && file_exists($imagePath))
                                        ? asset('uploads/students/' . $student->picture_name . '.jpg')
                                        : asset('uploads/blank.jpg') }}"
                                width="40"
                                height="40"
                                class="rounded-circle">
                        </td>

                        <td>{{ $student->admission_no }}</td>
                        <td>{{ $student->surname }} {{ $student->first_name }} {{ $student->other_name }}</td>
                        <td>{{ $student->department }}</td>
                        <td>{{ $student->phone_no }}</td>
                        <td>{{ $student->level }}</td>

                        <td class="d-flex gap-2">

                            <!-- EDIT -->
                            <button class="btn btn-sm btn-warning"
                                    data-bs-toggle="modal"
                                    data-bs-target="#editStudentModal-{{ $student->id }}">
                                <i class="fa fa-edit"></i>
                            </button>

                            <!-- DELETE -->
                            <form method="POST"
                                  action="{{ route('students.delete', $student) }}"
                                  onsubmit="return confirm('Delete student?')">

                                @csrf
                                @method('DELETE')

                                <button class="btn btn-sm btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>

                            </form>

                        </td>

                    </tr>

                @empty
                    <tr>
                        <td colspan="7" class="text-center">No students found</td>
                    </tr>
                @endforelse

            </tbody>

        </table>

    </div>