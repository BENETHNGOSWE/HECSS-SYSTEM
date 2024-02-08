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





<section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-12 mx-auto">
                <h1 class="text-white text-center">Search Student Program</h1>

                <!-- <h6 class="text-center">Platform to know Your Destination in Studying</h6> -->

                <form method="post" class="custom-form mt-4 pt-2 mb-lg-0 mb-5" role="search">
                    <div class="input-group input-group-lg">
                        <span class="input-group-text bi-search" id="basic-addon1">

                        </span>
                        @if(session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        <form method="POST" action="{{ route('student.programs') }}">
                            @csrf
                            <input name="student_number" type="search" class="form-control" id="student_number" placeholder="S1580/0029/2017" aria-label="Search">

                            <button type="submit" class="form-control">Search</button>
                        </form>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
    @isset($suggestedPrograms)
    <section class="timeline-section section-padding" id="section_3">
        <div class="section-overlay"></div>
    
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-12 mx-auto">
                    <h2>Suggested Programs For You</h2>
                    <table style="border: 1px solid black; border-collapse: collapse; width: 100%;">
                        <thead>
                            <tr>
                                <th style="border: 1px solid white; padding: 8px;">Program Name</th>
                                <th style="border: 1px solid white; padding: 8px;">Program Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($suggestedPrograms as $program)
                                <tr>
                                    <td style="border: 1px solid white; padding: 8px;">{{ $program->program_name }}</td>
                                    <td style="border: 1px solid white; padding: 8px;">{{ $program->program_name }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td style="border: 1px solid white; padding: 8px;">No programs found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    
       
    @endisset