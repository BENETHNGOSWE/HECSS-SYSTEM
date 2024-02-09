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
</section><br>
<div class="container">
    {{-- <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Program</th>
            </tr>
        </thead>
        <tbody>
            @foreach($careers as $career)
            <tr>
                <td>{{ $career->carrier_name }}</td>
                <td>{{ $career->career_description }}</td>
                <td>{{ $career->programto_studies->program_name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table> --}}

    <div class="container">
        <div class="row">
            @foreach($careers as $career)
            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                <div class="custom-block bg-white shadow-lg">
                    <a href="topics-detail.html">
                        <div class="d-flex">
                            <div>
                                <h5 class="mb-2">{{ $career->carrier_name }}</h5>
        
                                    <p class="mb-0">{{ $career->career_description }}</p>
                            </div>
        
                            <span class="badge bg-design rounded-pill ms-auto">75</span>
                        </div>
        
                        <img src="frontend/assets/images/topics/undraw_Redesign_feedback_re_jvm0.png" class="custom-block-image img-fluid" alt="">
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection