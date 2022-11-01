
    @extends('frontendviews.main')

    @section('content')
    
    <!-- Main banner starts here -->
    <section class=" fanatic_banner">
        <div class="custom_container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="banner_content">
                        <h1 class="pb-4">The Ultimate Resources <br>
                            for Forensics (4N6), Speech <br>
                            and/or Drama Coaches & Students</h1>
                        <a href="#" class="cmn_btn">Member Login</a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="fanatic_offer">
                        <p>
                            Now <br>
                            Get 565 days <br>
                            For <br>
                            <strong>$200</strong><span>only</span>
                        </p>
                    </div>
                </div>
            </div>
            <a href="" class="play_btn cmn_btn"><i class="fa fa-play me-2" aria-hidden="true"></i>
                Play</a>
        </div>
    </section>
    <!-- Main banner ends here -->

    <!-- our services starts here  -->

    <section class="space our_services">
        <div class="custom_container">
            <div class="cmn_heading">
                <a href="{{url('services')}}"><h2>Our Services</h2></a>
            </div>
            <div class="row mt-5 mb-5">
                <div class="col-lg-6 service_outer">
                    <div class="service_content">
                        <h3 class="scondary_heading">Vault</h3>

                        <ul class="p-0 mb-3">
                            <li>2,000 + performance-ready selections timed
                                for length with suggested introductions and
                                source information.</li>
                            <li>More cuttings added each week during the
                                school year.</li>
                            <li>Add Sample Cutting Link.</li>
                            <li>#’s of cuttings available – I like this, but need
                                ability to change these numbers</li>
                            <li>Split Solo Interp into two sections (Humorous
                                Interp and Dramatic Interp) – Leave off
                                Declamation, not a huge draw for most states.</li>
                        </ul>
                        <a href="{{url('register')}}" class="cmn_btn">Become a Member</a>
                    </div>
                </div>
                <div class="col-md-6 service_image">
                    <div class="service_img">
                        <img src="{{asset('images/valut.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="servic_icon text-end">
                        <img src="{{asset('images/valut_icon.png')}}" class=" mt-3" alt="">
                    </div>
                </div>
            </div>
            <div class="row space">
                <div class="col-md-6 service_image">
                    <div class="service_img">
                        <img src="{{asset('images/database.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="servic_icon">
                        <img src="{{asset('images/data_icon.png')}}" class=" mt-3" alt="">
                    </div>
                </div>
                <div class="col-lg-6 service_outer database">
                    <div class="service_content">
                        <h3 class="scondary_heading">Database</h3>

                        <ul class="p-0 mb-3">
                            <li>2,000 + performance-ready selections timed
                                for length with suggested introductions and
                                source information.</li>
                            <li>More cuttings added each week during the
                                school year.</li>
                            <li>Add Sample Cutting Link.</li>
                            <li>#’s of cuttings available – I like this, but need
                                ability to change these numbers</li>
                            <li>Split Solo Interp into two sections (Humorous
                                Interp and Dramatic Interp) – Leave off
                                Declamation, not a huge draw for most states.</li>
                        </ul>
                        <a href="{{url('register')}}" class="cmn_btn">Become a Member</a>
                    </div>
                </div>

            </div>
            <div class="row mt-5 mb-5">
                <div class="col-lg-6 service_outer">
                    <div class="service_content">
                        <h3 class="scondary_heading">Extemp & Limited <br>
                            Prep Events</h3>

                        <ul class="p-0 mb-3">
                            <li>2,000 + performance-ready selections timed
                                for length with suggested introductions and
                                source information.</li>
                            <li>More cuttings added each week during the
                                school year.</li>
                            <li>Add Sample Cutting Link.</li>
                            <li>#’s of cuttings available – I like this, but need
                                ability to change these numbers</li>
                            <li>Split Solo Interp into two sections (Humorous
                                Interp and Dramatic Interp) – Leave off
                                Declamation, not a huge draw for most states.</li>
                        </ul>
                        <a href="{{url('register')}}" class="cmn_btn">Become a Member</a>
                    </div>
                </div>
                <div class="col-md-6 service_image">
                    <div class="service_img">
                        <img src="{{asset('images/extemp.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="servic_icon text-end">
                        <img src="{{asset('images/extemp_icon.png')}}" class=" mt-3" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    @endsection
    
