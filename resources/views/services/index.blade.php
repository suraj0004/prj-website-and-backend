<!-- resources/views/child.blade.php -->

@extends('layouts.home.index')

@section('title', 'Services')



@section('content')

    @include('services.banner')
    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img loading="lazy" class="w-100" src="images/services/service1.jpg" alt="service-image">
                        </div>
                        <div class="d-flex">
                            <div class="ts-service-box-img">
                                <img loading="lazy" src="images/icon-image/service-icon1.png" alt="service-icon">
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title"><a href="{{route('services.single')}}">Zero Harm Everyday</a></h3>
                                <p>You have ideas, goals, and dreams. We have a culturally diverse, forward thinking team
                                    looking for talent like. Lorem ipsum dolor suscipit.</p>
                                <a class="learn-more d-inline-block" href="{{route('services.single')}}"
                                    aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
                            </div>
                        </div>
                    </div><!-- Service1 end -->
                </div><!-- Col 1 end -->

                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img loading="lazy" class="w-100" src="images/services/service2.jpg" alt="service-image">
                        </div>
                        <div class="d-flex">
                            <div class="ts-service-box-img">
                                <img loading="lazy" src="images/icon-image/service-icon2.png" alt="service-icon">
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title"><a href="{{route('services.single')}}">Virtual Construction</a></h3>
                                <p>You have ideas, goals, and dreams. We have a culturally diverse, forward thinking team
                                    looking for talent like. Lorem ipsum dolor suscipit.</p>
                                <a class="learn-more d-inline-block" href="{{route('services.single')}}"
                                    aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
                            </div>
                        </div>
                    </div><!-- Service2 end -->
                </div><!-- Col 2 end -->

                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img loading="lazy" class="w-100" src="images/services/service3.jpg" alt="service-image">
                        </div>
                        <div class="d-flex">
                            <div class="ts-service-box-img">
                                <img loading="lazy" src="images/icon-image/service-icon3.png" alt="service-icon">
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title"><a href="{{route('services.single')}}">Build To Last</a></h3>
                                <p>You have ideas, goals, and dreams. We have a culturally diverse, forward thinking team
                                    looking for talent like. Lorem ipsum dolor suscipit.</p>
                                <a class="learn-more d-inline-block" href="{{route('services.single')}}"
                                    aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
                            </div>
                        </div>
                    </div><!-- Service3 end -->
                </div><!-- Col 3 end -->

                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img loading="lazy" class="w-100" src="images/services/service4.jpg" alt="service-image">
                        </div>
                        <div class="d-flex">
                            <div class="ts-service-box-img">
                                <img loading="lazy" src="images/icon-image/service-icon4.png" alt="service-icon">
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title"><a href="{{route('services.single')}}">EXTERIOR DESIGN</a></h3>
                                <p>You have ideas, goals, and dreams. We have a culturally diverse, forward thinking team
                                    looking for talent like. Lorem ipsum dolor suscipit.</p>
                                <a class="learn-more d-inline-block" href="{{route('services.single')}}"
                                    aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
                            </div>
                        </div>
                    </div><!-- Service1 end -->
                </div><!-- Col 4 end -->

                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img loading="lazy" class="w-100" src="images/services/service5.jpg" alt="service-image">
                        </div>
                        <div class="d-flex">
                            <div class="ts-service-box-img">
                                <img loading="lazy" src="images/icon-image/service-icon5.png" alt="service-icon">
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title"><a href="{{route('services.single')}}">RENOVATION</a></h3>
                                <p>You have ideas, goals, and dreams. We have a culturally diverse, forward thinking team
                                    looking for talent like. Lorem ipsum dolor suscipit.</p>
                                <a class="learn-more d-inline-block" href="{{route('services.single')}}"
                                    aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
                            </div>
                        </div>
                    </div><!-- Service2 end -->
                </div><!-- Col 5 end -->

                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img loading="lazy" class="w-100" src="images/services/service6.jpg" alt="service-image">
                        </div>
                        <div class="d-flex">
                            <div class="ts-service-box-img">
                                <img loading="lazy" src="images/icon-image/service-icon6.png" alt="service-icon">
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title"><a href="{{route('services.single')}}">SAFETY MANAGEMENT</a></h3>
                                <p>You have ideas, goals, and dreams. We have a culturally diverse, forward thinking team
                                    looking for talent like. Lorem ipsum dolor suscipit.</p>
                                <a class="learn-more d-inline-block" href="{{route('services.single')}}"
                                    aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
                            </div>
                        </div>
                    </div><!-- Service3 end -->
                </div><!-- Col 6 end -->

            </div><!-- Main row end -->

        </div><!-- Conatiner end -->
    </section>

@endsection
