<!-- resources/views/student_program.blade.php -->

<html>
<head>
    <title>Student Program</title>
</head>
<body>
    <h1>Student Program</h1>
    
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form method="POST" action="{{ route('student.programs') }}">
        @csrf
        <label for="student_number">Enter Student Number:</label>
        <input type="text" id="student_number" name="student_number" required>
        <button type="submit">Submit</button>
    </form>

    @isset($suggestedPrograms)
        <h2>Suggested Programs:</h2>
        <ul>
            @forelse ($suggestedPrograms as $program)
                <li>{{ $program->program_name }}</li>
            @empty
                <li>No programs found.</li>
            @endforelse
        </ul>
    @endisset
</body>
</html>



