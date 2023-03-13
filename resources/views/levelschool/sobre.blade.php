




@extends('levelschool.layouts.master')


@section('content')



        <!--====== Start Page-banner section ======-->
        <section class="page-banner bg_cover position-relative z-1">
            <div class="shape shape-one scene"><span data-depth="1"><img src="assets/images/shape/shape-1.png" alt=""></span></div>
            <div class="shape shape-two scene"><span data-depth="2"><img src="assets/images/shape/shape-2.png" alt=""></span></div>
            <div class="shape shape-three scene"><span data-depth="3"><img src="assets/images/shape/shape-3.png" alt=""></span></div>
            <div class="shape shape-four scene"><span data-depth="4"><img src="assets/images/shape/shape-2.png" alt=""></span></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="page-title">
                            <h1> Sobre nós </h1>
                            <ul class="breadcrumbs-link">
                                <li><a href="index.html">Home</a></li>
                                <li class="active"> Sobre nós </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="page-banner-img">
                            <img src="assets/images/breadcrumb/img-1.jpg" alt="">
                            <div class="play-content">
                                <a href="https://www.youtube.com/watch?v=AT6oSIDbGkw" class="video-popup"><i class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== End Page-banner section ======-->


        <!--====== Start About section ======-->
        <section class="about-area about-area-v3 pt-210 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="img-holder mb-50 wow fadeInLeft">
                            <img src="assets/images/about/about-4.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-wrapper mb-50 wow fadeInRight">
                            <div class="section-title mb-25">
                                <span class="sub-title st-one"> Sobre nós </span>
                                <h2>Best Digital Solutiuon
                                    Provider Agency
                                    </h2>
                                <p class="blue-dark">Professional Design Agency to provide solutions</p>
                            </div>
                            <p>On the other hand denounce with righteous and dislike men
                                who beguile and demoralizes by the charms of pleasure thes moment, so blinded by desire that they cannot</p>
                            <ul class="list-style-one mb-35">
                                <li>Digital Creative Agency</li>
                                <li>Professional Problem Solutions</li>
                                <li>Web Design & Development</li>
                            </ul>
                            <a href="about.html" class="main-btn bordered-btn btn-blue arrow-btn">Learn More Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End About section ======-->



        @endsection
