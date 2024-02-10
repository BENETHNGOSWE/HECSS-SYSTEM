<section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-12 mx-auto">
                <h1 class="text-white text-center">Discover. Learn. Enjoy</h1>

                <h6 class="text-center">Platform to know Your Destination in Studying</h6>

                <form method="get" class="custom-form mt-4 pt-2 mb-lg-0 mb-5" role="search">
                    <div class="input-group input-group-lg">
                        <span class="input-group-text bi-search" id="basic-addon1">

                        </span>

                        <input name="keyword" type="search" class="form-control" id="keyword" placeholder="Designer, Developer, HR, Accountant ..." aria-label="Search">

                        <button type="submit" class="form-control">Search</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>

<section class="explore-section section-padding" id="section_2">
    <div class="container">
        <div class="row">

            <div class="col-12 text-center">
                <h2 class="mb-4">Career Trends</h1>
            </div>

        </div>
    </div>

 

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
            {{-- <livewire:comments :model="$career"/> --}}
        </div>
</section>