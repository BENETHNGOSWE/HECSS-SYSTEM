@extends('frontend.main')
@section('content')
<header class="site-header d-flex flex-column justify-content-center align-items-center">
    <div class="container">
        <div class="row justify-content-center align-items-center">

            <div class="col-lg-5 col-12 mb-5">

                <h2 class="text-white">Welcome to <br>{{ $career->carrier_name }} Career</h2>

                <div class="d-flex align-items-center mt-5">
                    <a href="#topics-detail" class="btn custom-btn custom-border-btn smoothscroll me-4">Read More</a>

                    <a href="#top" class="custom-icon bi-bookmark smoothscroll"></a>
                </div>
            </div>

            <div class="col-lg-5 col-12">
                <div class="topics-detail-block bg-white shadow-lg">
                    {{-- <img src="frontend/assets/images/topics/undraw_Redesign_feedback_re_jvm0.png" class="topics-detail-block-image img-fluid"> --}}
                </div>
            </div>

        </div>
    </div>
</header>


<section class="topics-detail-section section-padding" id="topics-detail">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-12 m-auto">
                <h3 class="mb-4">Introduction to {{ $career->carrier_name }}</h3>

                <p>{{ $career->career_description }}</p>
                <hr>
                <livewire:comments :model="$career"/>

                {{-- <p><strong>There are so many ways to make money online</strong>. Below are several platforms you can use to find success. Keep in mind that there is no one path everyone can take. If that were the case, everyone would have a million dollars.</p> --}}

                {{-- <blockquote>
                    Freelancing your skills isn’t going to make you a millionaire overnight.
                </blockquote> --}}

                {{-- <div class="row my-4">
                    <div class="col-lg-6 col-md-6 col-12">
                        <img src="images/businesswoman-using-tablet-analysis.jpg" class="topics-detail-block-image img-fluid">
                    </div>

                    <div class="col-lg-6 col-md-6 col-12 mt-4 mt-lg-0 mt-md-0">
                        <img src="images/colleagues-working-cozy-office-medium-shot.jpg" class="topics-detail-block-image img-fluid">
                    </div>
                </div> --}}

                {{-- <p>Most people start with freelancing skills they already have as a side hustle to build up income. This extra cash can be used for a vacation, to boost up savings, investing, build business.</p> --}}
            </div>

        </div>
    </div>
    
    
</section>
@endsection