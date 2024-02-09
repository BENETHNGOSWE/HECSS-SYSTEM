@extends('frontend.main')
@section('content')
<section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
    <div class="container">
        <div class="row">
    <div class="col-lg-8 col-12 mx-auto">
        <h1 class="text-white text-center">Career Opportunitiet</h1>
    <form method="get" class="custom-form mt-4 pt-2 mb-lg-0 mb-5" role="search">
        <div class="input-group input-group-lg">
            <span class="input-group-text bi-search" id="basic-addon1">

            </span>
            @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            <form action="{{ route('careerer.program') }}" method="get">
                
                    <input type="search" id="program" name="program" class="form-control" value="{{ isset($program) ? $program : ''}}">
               
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>
    </form>
    </div>
    <br>

        </div>
    </div>
</section>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Program</th>
                <!-- Add more table headings for other fields if needed -->
            </tr>
        </thead>
        <tbody>
            @foreach($careers as $career)
            <tr>
                <td>{{ $career->carrier_name }}</td>
                <td>{{ $career->career_description }}</td>
                <td>{{ $career->programto_studies->program_name }}</td>
                <!-- Add more table cells for other fields if needed -->
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection