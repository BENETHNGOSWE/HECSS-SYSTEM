@extends('frontend.main')
@section('content')

<section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-12 mx-auto">
                <h1 class="text-white text-center">Search Student Result</h1>

                <!-- <h6 class="text-center">Platform to know Your Destination in Studying</h6> -->

                <form method="get" class="custom-form mt-4 pt-2 mb-lg-0 mb-5" role="search">
                    <div class="input-group input-group-lg">
                        <span class="input-group-text bi-search" id="basic-addon1">

                        </span>
                        @if(session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        <form action="{{ route('search.results') }}" method="GET">
                            @csrf
                            <input name="student_number" type="search" class="form-control" id="keyword" placeholder="S1580/0029/2017" aria-label="Search">

                            <button type="submit" class="form-control">Search</button>
                        </form>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
@if(isset($studentResult))
<section class="timeline-section section-padding" id="section_3">
    <div class="section-overlay"></div>

    <div class="container">
        <div class="row">

            <div class="col-12 text-center">
                <h2 class="text-white mb-4">Results for {{ $studentResult->student_number }}</h1>
            </div>

            <div class="col-lg-10 col-12 mx-auto">
            <table style="width: 100%; border-collapse: collapse; border: 2px solid #ffffff;">
    <thead>
        <tr>
            <th style="background-color: #444444; color: #ffffff; border: 1px solid #ffffff; padding: 8px;">Subject</th>
            <th style="background-color: #444444; color: #ffffff; border: 1px solid #ffffff; padding: 8px;">Marks</th>
        </tr>
    </thead>
    <tbody>
        <tr style="background-color: #222222;">
            <td style="color: #ffffff; border: 1px solid #ffffff; padding: 8px;">Physics</td>
            <td style="color: #ffffff; border: 1px solid #ffffff; padding: 8px;">{{ $studentResult->physics_grade }}</td>
        </tr>
        <tr style="background-color: #222222;">
            <td style="color: #ffffff; border: 1px solid #ffffff; padding: 8px;">Math</td>
            <td style="color: #ffffff; border: 1px solid #ffffff; padding: 8px;">{{ $studentResult->math_grade }}</td>
        </tr>
        <tr style="background-color: #222222;">
            <td style="color: #ffffff; border: 1px solid #ffffff; padding: 8px;">Civics</td>
            <td style="color: #ffffff; border: 1px solid #ffffff; padding: 8px;">{{ $studentResult->civics_grade }}</td>
        </tr>
        <tr style="background-color: #222222;">
            <td style="color: #ffffff; border: 1px solid #ffffff; padding: 8px;">Kiswahili</td>
            <td style="color: #ffffff; border: 1px solid #ffffff; padding: 8px;">{{ $studentResult->kiswahili_grade }}</td>
        </tr>
        <tr style="background-color: #222222;">
            <td style="color: #ffffff; border: 1px solid #ffffff; padding: 8px;">English</td>
            <td style="color: #ffffff; border: 1px solid #ffffff; padding: 8px;">{{ $studentResult->english_grade }}</td>
        </tr>
        <tr style="background-color: #222222;">
            <td style="color: #ffffff; border: 1px solid #ffffff; padding: 8px;">Chemistry</td>
            <td style="color: #ffffff; border: 1px solid #ffffff; padding: 8px;">{{ $studentResult->chemistry_grade }}</td>
        </tr>
        <tr style="background-color: #222222;">
            <td style="color: #ffffff; border: 1px solid #ffffff; padding: 8px;">History</td>
            <td style="color: #ffffff; border: 1px solid #ffffff; padding: 8px;">{{ $studentResult->history_grade }}</td>
        </tr>
        <tr style="background-color: #222222;">
            <td style="color: #ffffff; border: 1px solid #ffffff; padding: 8px;">Student Grade</td>
            <td style="color: #ffffff; border: 1px solid #ffffff; padding: 8px;">{{ $studentResult->student_grade }}</td>
        </tr>
    </tbody>
</table>

                <!-- Add other fields as needed -->

            </div>

            <div class="col-12 text-center mt-5">
                <p class="text-white">
                    <a href="{{ route('student.programs')}}" class="btn custom-btn custom-border-btn ms-3">Check out Your Program</a>
                </p>
            </div>

        </div>
    </div>
</section>
@endif
<!-- @if(isset($studentResult))
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
@endif -->
@endsection