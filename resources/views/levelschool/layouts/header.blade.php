<!DOCTYPE html>
<html lang="en">

    <head>
        <!--====== Required meta tags ======-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--====== Title ======-->
        <title>Level-Soft</title>
        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/png">
        <!--====== Default css ======-->
        <link rel="stylesheet" href="assets/css/default.css">
        <!--====== Style css ======-->
        <link rel="stylesheet" href="assets/css/style.css">
        <!--====== Responsive css ======-->
        <link rel="stylesheet" href="assets/css/responsive.css">

    </head>


    <body>

        <div id="app">

        <!--====== Start Preloader ======-->
        <div class="preloader">
            <div class="loader">
                <div class="pre-shadow"></div>
                <div class="pre-box"></div>
            </div>
        </div>
        <!--====== End Preloader ======-->
        <!--====== offcanvas-panel ======-->
        <div class="offcanvas-panel">
            <div class="panel-overlay"></div>
            <div class="offcanvas-panel-inner">
                <div class="panel-logo">
                    <a href="index.html"><img src="assets/images/logo-nav.png" alt="Qempo"></a>
                </div>
                <div class="about-us">

                    {{-- <h5 class="panel-widget-title">Sobre Nós</h5> --}}



                </div>
                <div class="contact-us">
                    <h5 class="panel-widget-title">Contacte-nos</h5>
                    <ul>
                        <li>
                            <i class="fal fa-map-marker-alt"></i>
                            Rua 41, Nova Vida, Luanda.
                        </li>
                        <li>
                            <i class="fal fa-envelope-open"></i>
                            <a href="mailto:hello@barky.com"> hello@barky.com</a>
                            <a href="mailto:info@barky.com">info@barky.com</a>
                        </li>

                        <li>
                            <i class="fal fa-phone"></i>
                            <a href="tel:(312)-895-9800">(+244) 912 345 678</a>
                            <a href="tel:(312)-895-9888">(+244) 912 345 678</a>
                        </li>

                        <hr>

                        <div class="d-flex justify-content-center w-100 mt-5 " >

                            <a href="#" class="btn btn-primary" >Entrar </a>

                        </div>


                    </ul>
                </div>
                <a href="#" class="panel-close"><i class="fal fa-times"></i></a>
            </div>
        </div><!--====== offcanvas-panel ======-->
        <!--====== Start Header Section ======-->

        <header class="theme-header transparent-header" >
            <!-- header Navigation -->
            <div class="header-navigation navigation-style-v1" >
                <div class="nav-overlay"></div>
                <div class="container-fluid">

                    <div class="primary-menu">
                        <div class="site-branding">

                            <router-link class="nav-link brand-logo" to="/home">
                               <img src="assets/images/logo-nav.png" alt="Site Logo">
                            </router-link>

                        </div>

                        <div class="nav-menu">
                            <!-- Navbar Close -->
                            <div class="navbar-close"><i class="far fa-times"></i></div>
                            <!-- Nav Search -->
                            <div class="nav-search">
                                <form>
                                    <div class="form_group">
                                        <input type="email" class="form_control" placeholder="Search Here" name="email" required>
                                        <button class="search-btn"><i class="fas fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <!-- Main Menu -->


                            <nav class="main-menu" style="height:75px;">

                                <ul style="margin-top:-10px;">

                                    <li class="nav-item active">
                                        <router-link class="nav-link" to="/home"  @click.native="$scrollToTop" >
                                            Início
                                        </router-link>
                                    </li>

                                     {{--
                                    <li class="nav-item active">
                                        <router-link class="nav-link" to="/servico" @click.native="$scrollToTop">
                                            Serviços
                                        </router-link>
                                    </li> --}}


                                    <li class="nav-item active">
                                        <router-link class="nav-link" to="/produto" @click.native="$scrollToTop">
                                            Produtos
                                        </router-link>
                                    </li>

                                     <li class="nav-item active">
                                        <router-link class="nav-link" to="/projecto"  @click.native="$scrollToTop" >
                                            Projectos
                                        </router-link>
                                    </li>

                                    <li class="nav-item active">
                                        <router-link class="nav-link" to="/sobre"  @click.native="$scrollToTop" >
                                            Sobre nós
                                        </router-link>
                                    </li>


                                        {{--
                                            <li class="nav-item active">
                                                <router-link class="nav-link" to="/sobre">
                                                    Sobre
                                                </router-link>
                                            </li>--}}

                                    <li class="nav-item active">
                                        <router-link class="nav-link" to="/contacto"  @click.native="$scrollToTop" >
                                            Contacto
                                        </router-link>
                                    </li>


                                    {{-- <li>
                                        <a href="index.html">Início</a>
                                    </li>

                                    <li><a href="{{url('servico')}}"> Serviços </a></li>

                                    <li><a href="{{url('projecto')}}">Projecto</a></li>

                                    <li><a href="{{url('sobre')}}"> Sobre Nós </a></li>

                                    <li class="menu-item"><a href="{{url('contacto')}}" class="nav-link">Contacto</a></li> --}}



                                </ul>
                            </nav>
                        </div>
                        <div class="header-right-nav">
                            <ul>
                                <li class="bar-item"><a href="#"><img src="assets/images/dot.png" alt="dot"></a></li>
                                <li class="navbar-toggle-btn">
                                    <div class="navbar-toggler">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header><!--====== End Header Section ======-->

