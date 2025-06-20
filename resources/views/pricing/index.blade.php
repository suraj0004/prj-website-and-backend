<!-- resources/views/child.blade.php -->

@extends('layouts.home.index')

@section('title', 'Pricing')



@section('content')

    @include('pricing.banner')
    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h2 class="section-title">Grab the Packages</h2>
                    <h3 class="section-sub-title">Pricing</h3>
                </div>
            </div>
            <!--/ Title row end -->

            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="ts-pricing-box">
                        <div class="ts-pricing-header">
                            <h2 class="ts-pricing-name">Building Remodels</h2>
                            <h2 class="ts-pricing-price">
                                <span class="currency">$</span><strong>89.9</strong><small>/Month</small>
                            </h2>
                        </div><!-- Pricing header -->
                        <div class="ts-pricing-features">
                            <ul class="list-unstyled">
                                <li>Project Management for Owners</li>
                                <li>Pre-construction feasibility</li>
                                <li>On-site representation</li>
                                <li>Quality control inspections</li>
                                <li>Schedule claim preparation/defense</li>
                                <li>Project phasing development</li>
                            </ul>
                        </div><!-- Features end -->
                        <div class="plan-action">
                            <a href="#" class="btn btn-dark">Order Now</a>
                        </div>
                    </div><!-- Plan 1 end -->
                </div><!-- Col end -->

                <div class="col-lg-4 col-md-6">
                    <div class="ts-pricing-box ts-pricing-featured">
                        <div class="ts-pricing-header">
                            <h2 class="ts-pricing-name">Renovation</h2>
                            <h2 class="ts-pricing-price">
                                <span class="currency">$</span><strong>179.9</strong><small>/Month</small>
                            </h2>
                        </div><!-- Pricing header -->
                        <div class="ts-pricing-features">
                            <ul class="list-unstyled">
                                <li>Project Management for Owners</li>
                                <li>Pre-construction feasibility</li>
                                <li>On-site representation</li>
                                <li>Quality control inspections</li>
                                <li>Schedule claim preparation/defense</li>
                                <li>Project phasing development</li>
                            </ul>
                        </div><!-- Features end -->
                        <div class="plan-action">
                            <a href="#" class="btn btn-primary">Order Now</a>
                        </div>
                    </div><!-- Plan 2 end -->
                </div><!-- Col end -->

                <div class="col-lg-4 col-md-6">
                    <div class="ts-pricing-box">
                        <div class="ts-pricing-header">
                            <h2 class="ts-pricing-name">Home Construction</h2>
                            <h2 class="ts-pricing-price">
                                <span class="currency">$</span><strong>279.9</strong><small>/Month</small>
                            </h2>
                        </div><!-- Pricing header -->
                        <div class="ts-pricing-features">
                            <ul class="list-unstyled">
                                <li>Project Management for Owners</li>
                                <li>Pre-construction feasibility</li>
                                <li>On-site representation</li>
                                <li>Quality control inspections</li>
                                <li>Schedule claim preparation/defense</li>
                                <li>Project phasing development</li>
                            </ul>
                        </div><!-- Features end -->
                        <div class="plan-action">
                            <a href="#" class="btn btn-dark">Order Now</a>
                        </div>
                    </div><!-- Plan 3 end -->
                </div><!-- Col end -->

            </div>
            <!--/ Content row end -->

        </div><!-- Conatiner end -->
    </section>

@endsection

