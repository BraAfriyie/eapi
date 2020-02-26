
@extends('layouts.app')

@section('content')

    <body class="index-page sidebar-collapse">
    <!-- Navbar -->

    {{--@include('includes.nav')--}}

    {{--<nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="300">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="https://demos.creative-tim.com/paper-kit/index.html" rel="tooltip" title="Coded by Creative Tim" data-placement="bottom" target="_blank">
                    Digital Display Portal
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>

            @if (Route::has('login'))

            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <ul class="navbar-nav">

                    @auth

                    <li class="nav-item">
                        <a href="{{ url('/home') }}" target="_blank" class="nav-link"><i class="nc-icon nc-book-bookmark"></i> Dashboard</a>
                    </li>

                    @else

                        <li class="nav-item">
                            <a href="{{ route('login') }}" target="_blank" class="btn btn-danger btn-round">Login</a>
                        </li>

                    @if (Route::has('register'))


                    <li class="nav-item">
                        <a href="{{ route('register') }}" target="_blank" class="nav-link"><i class="nc-icon nc-book-bookmark"></i> Register</a>
                    </li>

                    @endif

                        @endauth







                </ul>
            </div>

            @endif

        </div>
    </nav>--}}


    <!-- End Navbar -->
    <div class="page-header section-dark" style="background-image: url('assets/img/antoine-barres.jpg')">
        <div class="filter"></div>
        <div class="content-center">
            <div class="container">
                <div class="title-brand">
                    <h1 class="presentation-title">Digital Display Portal</h1>
                    <div class="fog-low">
                        <img src="./assets/img/fog-low.png" alt="">
                    </div>
                    <div class="fog-low right">
                        <img src="./assets/img/fog-low.png" alt="">
                    </div>
                </div>
                <h2 class="presentation-subtitle text-center">GOLDEN STAR RESOURCES. B.I INITIATIVE </h2>
            </div>
        </div>
        <div class="moving-clouds" style="background-image: url('assets/img/clouds.png'); "></div>
        <h6 class="category category-absolute">Designed and Coded by GSWL I.T Department</h6>


    </div>



    </body>

@endsection
