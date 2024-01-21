<!-- resources/views/child.blade.php -->

@extends('layouts.home.index')

@section('title', 'Contact us')


@section('content')

    @include('contact-us.banner')
    <section id="main-container" class="main-container">
        <div class="container">

            @include('contact-us.form')



            <div>
                <div class="row text-center">
                    <div class="col-12">
                        {{-- <h2 class="section-title">Reaching our Office</h2> --}}
                        <h3 class="section-sub-title">Contact us on</h3>
                    </div>
                </div>
                <!--/ Title row end -->

                <div class="row">


                    <div class="col-md-6">
                        <div class="ts-service-box-bg text-center h-100">
                            <span class="ts-service-icon icon-round">
                                <i class="fa fa-envelope mr-0"></i>
                            </span>
                            <div class="ts-service-box-content">
                                <h4>Email Us</h4>
                                <p>office@Constra.com</p>
                            </div>
                        </div>
                    </div><!-- Col 2 end -->

                    <div class="col-md-6">
                        <div class="ts-service-box-bg text-center h-100">
                            <span class="ts-service-icon icon-round">
                                <i class="fa fa-phone-square mr-0"></i>
                            </span>
                            <div class="ts-service-box-content">
                                <h4>Call Us</h4>
                                <p>(+9) 847-291-4353</p>
                            </div>
                        </div>
                    </div><!-- Col 3 end -->

                </div><!-- 1st row end -->
            </div>

            <!-- Content row -->
        </div><!-- Conatiner end -->
    </section>

@endsection
