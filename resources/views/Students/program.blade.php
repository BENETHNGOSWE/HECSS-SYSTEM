<!-- resources/views/student_program.blade.php -->
@extends('frontend.main')
@section('content')
   
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
                            <input name="student_number" type="search" class="form-control" id="student_number" placeholder="Enter your number here...." aria-label="Search">

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
                                <th style="border: 1px solid white; padding: 8px;">Program University</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($suggestedPrograms as $program)
                                <tr>
                                    <td style="border: 1px solid white; padding: 8px;">{{ $program->program_name }}</td>
                                    <td style="border: 1px solid white; padding: 8px;">
                                       <a href="{{ route('student.programs_university', $program)}}"> <button class="btn btn-primary">See University</button> </a>
                                    </td>
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
@endsection
