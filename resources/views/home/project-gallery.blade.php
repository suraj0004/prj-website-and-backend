<section id="project-area" class="project-area solid-bg">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <h2 class="section-title">Work of Excellence</h2>
                <h3 class="section-sub-title">Recent Projects</h3>
            </div>
        </div>
        <!--/ Title row end -->

        <div class="row">
            <div class="col-12">
                <div class="shuffle-btn-group">
                    <label class="active" for="all">
                        <input type="radio" name="shuffle-filter" id="all" value="all" checked="checked">Show
                        All
                    </label>
                    <label for="commercial">
                        <input type="radio" name="shuffle-filter" id="commercial" value="commercial">Commercial
                    </label>
                    <label for="education">
                        <input type="radio" name="shuffle-filter" id="education" value="education">Education
                    </label>
                    <label for="government">
                        <input type="radio" name="shuffle-filter" id="government" value="government">Government
                    </label>
                    <label for="infrastructure">
                        <input type="radio" name="shuffle-filter" id="infrastructure"
                            value="infrastructure">Infrastructure
                    </label>
                    <label for="residential">
                        <input type="radio" name="shuffle-filter" id="residential" value="residential">Residential
                    </label>
                    <label for="healthcare">
                        <input type="radio" name="shuffle-filter" id="healthcare" value="healthcare">Healthcare
                    </label>
                </div><!-- project filter end -->


                <div class="row shuffle-wrapper">
                    <div class="col-1 shuffle-sizer"></div>

                    <div class="col-lg-4 col-md-6 shuffle-item"
                        data-groups="[&quot;government&quot;,&quot;healthcare&quot;]">
                        <div class="project-img-container">
                            <a class="gallery-popup" href={{ asset('images/projects/project1.jpg') }}
                                aria-label="project-img">
                                <img class="img-fluid" src={{ asset('images/projects/project1.jpg') }}
                                    alt="project-img">
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <h3 class="project-item-title">
                                        <a href="{{route('projects.single')}}">Capital Teltway Building</a>
                                    </h3>
                                    <p class="project-cat">Commercial, Interiors</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- shuffle item 1 end -->

                    <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;healthcare&quot;]">
                        <div class="project-img-container">
                            <a class="gallery-popup" href={{ asset('images/projects/project2.jpg') }}
                                aria-label="project-img">
                                <img class="img-fluid" src={{ asset('images/projects/project2.jpg') }}
                                    alt="project-img">
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <h3 class="project-item-title">
                                        <a href="{{route('projects.single')}}">Ghum Touch Hospital</a>
                                    </h3>
                                    <p class="project-cat">Healthcare</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- shuffle item 2 end -->

                    <div class="col-lg-4 col-md-6 shuffle-item"
                        data-groups="[&quot;infrastructure&quot;,&quot;commercial&quot;]">
                        <div class="project-img-container">
                            <a class="gallery-popup" href={{ asset('images/projects/project3.jpg') }}
                                aria-label="project-img">
                                <img class="img-fluid" src={{ asset('images/projects/project3.jpg') }}
                                    alt="project-img">
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <h3 class="project-item-title">
                                        <a href="{{route('projects.single')}}">TNT East Facility</a>
                                    </h3>
                                    <p class="project-cat">Government</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- shuffle item 3 end -->

                    <div class="col-lg-4 col-md-6 shuffle-item"
                        data-groups="[&quot;education&quot;,&quot;infrastructure&quot;]">
                        <div class="project-img-container">
                            <a class="gallery-popup" href={{ asset('images/projects/project4.jpg') }}
                                aria-label="project-img">
                                <img class="img-fluid" src={{ asset('images/projects/project4.jpg') }}
                                    alt="project-img">
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <h3 class="project-item-title">
                                        <a href="{{route('projects.single')}}">Narriot Headquarters</a>
                                    </h3>
                                    <p class="project-cat">Infrastructure</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- shuffle item 4 end -->

                    <div class="col-lg-4 col-md-6 shuffle-item"
                        data-groups="[&quot;infrastructure&quot;,&quot;education&quot;]">
                        <div class="project-img-container">
                            <a class="gallery-popup" href={{ asset('images/projects/project5.jpg') }}
                                aria-label="project-img">
                                <img class="img-fluid" src={{ asset('images/projects/project5.jpg') }}
                                    alt="project-img">
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <h3 class="project-item-title">
                                        <a href="{{route('projects.single')}}">Kalas Metrorail</a>
                                    </h3>
                                    <p class="project-cat">Infrastructure</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- shuffle item 5 end -->

                    <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;residential&quot;]">
                        <div class="project-img-container">
                            <a class="gallery-popup" href={{ asset('images/projects/project6.jpg') }}
                                aria-label="project-img">
                                <img class="img-fluid" src={{ asset('images/projects/project6.jpg') }}
                                    alt="project-img">
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <h3 class="project-item-title">
                                        <a href="{{route('projects.single')}}">Ancraft Avenue House</a>
                                    </h3>
                                    <p class="project-cat">Residential</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- shuffle item 6 end -->
                </div><!-- shuffle end -->
            </div>

            <div class="col-12">
                <div class="general-btn text-center">
                    <a class="btn btn-primary" href="projects.html">View All Projects</a>
                </div>
            </div>

        </div><!-- Content row end -->
    </div>
    <!--/ Container end -->
</section>
