@extends('levelschool.layouts.master')


@section('content')


    <!--====== Start Page-banner section ======-->
    <section class="page-banner bg_cover position-relative z-1">
        <div class="shape shape-one scene"><span data-depth="1"><img src="assets/images/shape/shape-1.png"
                    alt=""></span></div>
        <div class="shape shape-two scene"><span data-depth="2"><img src="assets/images/shape/shape-2.png"
                    alt=""></span></div>
        <div class="shape shape-three scene"><span data-depth="3"><img src="assets/images/shape/shape-3.png"
                    alt=""></span></div>
        <div class="shape shape-four scene"><span data-depth="4"><img src="assets/images/shape/shape-2.png"
                    alt=""></span></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-title">
                        <h1>Projects</h1>
                        <ul class="breadcrumbs-link">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Projects</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="page-banner-img">
                        <img src="assets/images/breadcrumb/img-3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Page-banner section ======-->
    <!--====== Start Portfolio Section ======-->
    <section class="portfolio-area portfolio-area-v1 light-gray-bg pt-210 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title mb-45 text-center wow fadeInUp">
                        <span class="sub-title st-one">Latest Work</span>
                        <h2>Professional Experience</h2>
                        <p>Professional Design Agency to provide solutions</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="portfolio-filter-button text-center mb-40 wow fadeInUp">
                        <ul class="filter-btn mb-30">
                            <li data-filter="*" class="active">Show All</li>
                            <li data-filter=".cat-1">Design</li>
                            <li data-filter=".cat-2">Branding</li>
                            <li data-filter=".cat-3">Development</li>
                            <li data-filter=".cat-4">SEO</li>
                            <li data-filter=".cat-5">UX/UI Design</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row portfolio-grid">
                <div class="col-lg-4 col-md-6 col-sm-12 cat-1 portfolio-column cat-3">
                    <div class="portfolio-item portfolio-style-one mb-50 wow fadeInUp" data-wow-delay=".10s">
                        <div class="img-holder">
                            <img src="assets/images/portfolio/img-1.jpg" alt="Img">
                            <a href="assets/images/portfolio/img-1.jpg" class="portfolio-hover img-popup">
                                <div class="hover-content">
                                    <i class="far fa-plus"></i>
                                </div>
                            </a>
                        </div>
                        <div class="text">
                            <h3 class="title"><a href="project-details.html">Dashboard Design</a></h3>
                            <a href="projects.html" class="cat-link">Creative Design</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-column cat-2 cat-4">
                    <div class="portfolio-item portfolio-style-one mb-50 wow fadeInUp" data-wow-delay=".15s">
                        <div class="img-holder">
                            <img src="assets/images/portfolio/img-2.jpg" alt="Img">
                            <a href="assets/images/portfolio/img-2.jpg" class="portfolio-hover img-popup">
                                <div class="hover-content">
                                    <i class="far fa-plus"></i>
                                </div>
                            </a>
                        </div>
                        <div class="text">
                            <h3 class="title"><a href="project-details.html">Landing Pages</a></h3>
                            <a href="projects.html" class="cat-link">Creative Design</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-column cat-3 cat-4">
                    <div class="portfolio-item portfolio-style-one mb-50 wow fadeInUp" data-wow-delay=".20s">
                        <div class="img-holder">
                            <img src="assets/images/portfolio/img-3.jpg" alt="Img">
                            <a href="assets/images/portfolio/img-3.jpg" class="portfolio-hover img-popup">
                                <div class="hover-content">
                                    <i class="far fa-plus"></i>
                                </div>
                            </a>
                        </div>
                        <div class="text">
                            <h3 class="title"><a href="project-details.html">Illustration Design</a></h3>
                            <a href="projects.html" class="cat-link">Creative Design</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-column cat-4 cat-3">
                    <div class="portfolio-item portfolio-style-one mb-50 wow fadeInUp" data-wow-delay=".25s">
                        <div class="img-holder">
                            <img src="assets/images/portfolio/img-4.jpg" alt="Img">
                            <a href="assets/images/portfolio/img-4.jpg" class="portfolio-hover img-popup">
                                <div class="hover-content">
                                    <i class="far fa-plus"></i>
                                </div>
                            </a>
                        </div>
                        <div class="text">
                            <h3 class="title"><a href="project-details.html">Dashboard Design</a></h3>
                            <a href="projects.html" class="cat-link">Creative Design</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-column cat-5 cat-1">
                    <div class="portfolio-item portfolio-style-one mb-50 wow fadeInUp" data-wow-delay=".30s">
                        <div class="img-holder">
                            <img src="assets/images/portfolio/img-5.jpg" alt="Img">
                            <a href="assets/images/portfolio/img-5.jpg" class="portfolio-hover img-popup">
                                <div class="hover-content">
                                    <i class="far fa-plus"></i>
                                </div>
                            </a>
                        </div>
                        <div class="text">
                            <h3 class="title"><a href="project-details.html">Apps Development</a></h3>
                            <a href="projects.html" class="cat-link">Creative Design</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-column cat-4 cat-2">
                    <div class="portfolio-item portfolio-style-one mb-50 wow fadeInUp" data-wow-delay=".35s">
                        <div class="img-holder">
                            <img src="assets/images/portfolio/img-6.jpg" alt="Img">
                            <a href="assets/images/portfolio/img-6.jpg" class="portfolio-hover img-popup">
                                <div class="hover-content">
                                    <i class="far fa-plus"></i>
                                </div>
                            </a>
                        </div>
                        <div class="text">
                            <h3 class="title"><a href="project-details.html">Website Design</a></h3>
                            <a href="projects.html" class="cat-link">Creative Design</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-column cat-4 cat-3">
                    <div class="portfolio-item portfolio-style-one mb-50 wow fadeInUp" data-wow-delay=".40s">
                        <div class="img-holder">
                            <img src="assets/images/portfolio/img-7.jpg" alt="Img">
                            <a href="assets/images/portfolio/img-7.jpg" class="portfolio-hover img-popup">
                                <div class="hover-content">
                                    <i class="far fa-plus"></i>
                                </div>
                            </a>
                        </div>
                        <div class="text">
                            <h3 class="title"><a href="project-details.html">Dashboard Design</a></h3>
                            <a href="projects.html" class="cat-link">Creative Design</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-column cat-5 cat-1">
                    <div class="portfolio-item portfolio-style-one mb-50 wow fadeInUp" data-wow-delay=".45s">
                        <div class="img-holder">
                            <img src="assets/images/portfolio/img-8.jpg" alt="Img">
                            <a href="assets/images/portfolio/img-8.jpg" class="portfolio-hover img-popup">
                                <div class="hover-content">
                                    <i class="far fa-plus"></i>
                                </div>
                            </a>
                        </div>
                        <div class="text">
                            <h3 class="title"><a href="project-details.html">Apps Development</a></h3>
                            <a href="projects.html" class="cat-link">Creative Design</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-column cat-4 cat-2">
                    <div class="portfolio-item portfolio-style-one mb-50 wow fadeInUp" data-wow-delay=".50s">
                        <div class="img-holder">
                            <img src="assets/images/portfolio/img-9.jpg" alt="Img">
                            <a href="assets/images/portfolio/img-9.jpg" class="portfolio-hover img-popup">
                                <div class="hover-content">
                                    <i class="far fa-plus"></i>
                                </div>
                            </a>
                        </div>
                        <div class="text">
                            <h3 class="title"><a href="project-details.html">Website Design</a></h3>
                            <a href="projects.html" class="cat-link">Creative Design</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="button-box text-center wow fadeInUp">
                        <a href="projects.html" class="main-btn arrow-btn">View All Projects</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Portfolio Section ======-->

    <!--====== Start Portfolio Details section ======-->
    <section class="portfolio-details-section pt-210 pb-130">
        <div class="container">
            <div class="portfolio-details-wrapper wow fadeInUp">
                <div class="portfolio-item">
                    <div class="text">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="content">
                                    <h3 class="title">Creative 3D Illustration</h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis quasi
                                        architeto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                                        voluptas sit asperna
                                        turaut odit aut fugit sed quia consequntur magni dolore eosqui ratione voluptatem
                                        seque nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet
                                        consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut
                                        labore et dolore magnam aliquam quaerat voluptatem</p>
                                </div>
                                <div class="content">
                                    <h3 class="title">Project Benefit</h3>
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia
                                        consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porroses
                                        quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                                        sed quia non numquam eius modi tempora incidunt ut labore dolore magnam</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="portfolio-info mb-45">
                                    <ul>
                                        <li>
                                            <h4>Category</h4>
                                            <p>Design Agency, 3D illustration</p>
                                        </li>
                                        <li>
                                            <h4>Clients</h4>
                                            <p>Microsoft LTS, Washington</p>
                                        </li>
                                        <li>
                                            <h4>Date</h4>
                                            <p>25 February 2022</p>
                                        </li>
                                        <li>
                                            <h4>Location</h4>
                                            <p>55 Main Street, New York</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="content">
                                    <img src="assets/images/portfolio/single-img-1.jpg" alt="">
                                    <h3 class="title">Summery</h3>
                                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so
                                        beguiled and demoralized by the charms of pleasure of the moment, so blinded by
                                        desire, that they cannot foresee the pain and trouble that are bound to ensue; and
                                        equal blame belongs to those who fail in their duty through weakness of will, which
                                        is the same as saying through shrinking from toil and pain. These cases are
                                        perfectly simple and easy to distinguish.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="post-nav-tag pt-80">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="post-nav-item prev-post">
                                <div class="thumb">
                                    <img src="assets/images/portfolio/thumb-1.jpg" alt="">
                                </div>
                                <div class="text">
                                    <h4><a href="project-details.html">Creative Web Design</a></h4>
                                    <p><a href="projects.html">Design</a>, <a href="#">Agency</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="post-icon text-center">
                                <img src="assets/images/portfolio/icon-1.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="post-nav-item next-post">
                                <div class="thumb">
                                    <img src="assets/images/portfolio/thumb-2.jpg" alt="">
                                </div>
                                <div class="text">
                                    <h4><a href="project-details.html">Creative Web Design</a></h4>
                                    <p><a href="projects.html">Design</a>, <a href="#">Agency</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Portfolio Details section ======-->



@endsection
