<h2>Search Student Result</h2>
@if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif
<form action="{{ route('search.results') }}" method="GET">
    @csrf
    <input type="text" name="student_number" placeholder="Enter Student Number">
    <button type="submit">Search</button>
</form>

@if(isset($studentResult))
    <h2>Student Result</h2>
    <p>Student Number: {{ $studentResult->student_number }}</p>
    <p>Physics Grade: {{ $studentResult->physics_grade }}</p>
    <p>Math Grade: {{ $studentResult->math_grade }}</p>
    <p>Civics Grade: {{ $studentResult->civics_grade }}</p>
    <p>Kiswahili Grade: {{ $studentResult->kiswahili_grade }}</p>
    <p>English Grade: {{ $studentResult->english_grade }}</p>
    <p>Chemistry Grade: {{ $studentResult->chemistry_grade }}</p>
    <p>History Grade: {{ $studentResult->history_grade }}</p>
    <p>Student Grade: {{ $studentResult->student_grade }}</p>
    <!-- Add other fields as needed -->
@endif
