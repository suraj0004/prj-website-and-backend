<!-- resources/views/child.blade.php -->

@extends('layouts.home.index')

@section('title', 'Project Single')



@section('content')

    <section id="main-container" class="main-container">
        <div class="container">

            <div class="row">
                <div class="col-lg-8">
                  <div id="page-slider" class="page-slider small-bg">
                    <div class="item">
                      <img loading="lazy" class="img-fluid" src="{{asset('images/projects/project5.jpg')}}" alt="project-image" />
                    </div>

                    <div class="item">
                      <img loading="lazy" class="img-fluid" src="{{asset('images/projects/project4.jpg')}}" alt="project-image" />
                    </div>
                  </div><!-- Page slider end -->
                </div><!-- Slider col end -->

                <div class="col-lg-4 mt-5 mt-lg-0">

                  <h3 class="column-title mrt-0">Capital Teltway Building</h3>
                  <p>Morbi turpis nisl, auctor ut nisl vel, pellentesque euismod nunc nunc accumsan imperdiet.</p>

                  <ul class="project-info list-unstyled">
                    <li>
                      <p class="project-info-label">Client</p>
                      <p class="project-info-content">Pransbay Powers Authority</p>
                    </li>
                    <li>
                      <p class="project-info-label">Architect</p>
                      <p class="project-info-content">Dlarke Pelli Incorp</p>
                    </li>
                    <li>
                      <p class="project-info-label">Location</p>
                      <p class="project-info-content">McLean, VA</p>
                    </li>
                    <li>
                      <p class="project-info-label">Size</p>
                      <p class="project-info-content">65,000 SF</p>
                    </li>
                    <li>
                      <p class="project-info-label">Year Completed</p>
                      <p class="project-info-content">2015</p>
                    </li>
                    <li>
                      <p class="project-info-label">Categories</p>
                      <p class="project-info-content">Commercial, Interiors</p>
                    </li>
                    <li>
                      <p class="project-link">
                        <a class="btn btn-primary" target="_blank" href="#">View Project</a>
                      </p>
                    </li>
                  </ul>

                </div><!-- Content col end -->

              </div><!-- Row end -->

        </div><!-- Conatiner end -->
    </section>

@endsection

