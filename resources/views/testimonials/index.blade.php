<!-- resources/views/child.blade.php -->

@extends('layouts.home.index')

@section('title', 'Testimonials')


@section('content')

    @include('testimonials.banner')
    <section id="main-container" class="main-container">
        <div class="container">


            <div class="row text-center">
                <div class="col-12">
                    <h3 class="section-sub-title mb-4">What People Said</h3>
                </div>
            </div>
            <!--/ Title row end -->

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="quote-item quote-border mt-5">
                        <div class="quote-text-border">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                        </div>

                        <div class="quote-item-footer">
                            <img loading="lazy" class="testimonial-thumb" src="images/clients/testimonial1.png"
                                alt="testimonial">
                            <div class="quote-item-info">
                                <h3 class="quote-author">Gabriel Denis</h3>
                                <span class="quote-subtext">Chairman, Okt Industries</span>
                            </div>
                        </div>
                    </div><!-- Quote item end -->
                </div><!-- End col md 4 -->

                <div class="col-lg-4 col-md-6">
                    <div class="quote-item quote-border mt-5">
                        <div class="quote-text-border">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                        </div>

                        <div class="quote-item-footer">
                            <img loading="lazy" class="testimonial-thumb" src="images/clients/testimonial2.png"
                                alt="testimonial">
                            <div class="quote-item-info">
                                <h3 class="quote-author">Weldon Cash</h3>
                                <span class="quote-subtext">CEO, First Choice Group</span>
                            </div>
                        </div>
                    </div><!-- Quote item end -->
                </div><!-- End col md 4 -->

                <div class="col-lg-4 col-md-6">
                    <div class="quote-item quote-border mt-5">
                        <div class="quote-text-border">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                        </div>

                        <div class="quote-item-footer">
                            <img loading="lazy" class="testimonial-thumb" src="images/clients/testimonial3.png"
                                alt="testimonial">
                            <div class="quote-item-info">
                                <h3 class="quote-author">Hyram Izzy</h3>
                                <span class="quote-subtext">Director, AKT Group</span>
                            </div>
                        </div>
                    </div><!-- Quote item end -->
                </div><!-- End col md 4 -->

            </div><!-- Content row end -->

        </div><!-- Conatiner end -->
    </section>

@endsection

