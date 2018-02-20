<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.meta')
    <title>@yield('title'){{ config('app.name') }}</title>
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css')}}">
</head>

<body>

    <div id="app">

        <header>

            <div class="header__coverImage">
                <img src="{{ asset('images/common/hero-background.jpg') }}" class="" alt="">
            </div>

            <nav >

                <div class="nav-container">

                    <div class="logo">

                        @if (\Route::is('home'))



                        @else

                            <a href="{{ route('home') }}" class="logoLink"><img src="{{ asset('images/common/header-logo-light.png') }}" alt=""></a>

                        @endif

                        <div class="nav-button">
                            <i class="fa fa-bars"></i>
                        </div>

                    </div>

                    <div class="nav-links">

                        @include('nav.navLinks', ['position'=>'navigation'])

                    </div>

                </div>

            </nav>

            @section('hero')

            @show

        </header>

        @if(Session::has('formSubmit'))

        <banner class="bannerFlash">

            <i class="fa fa-times closeBannerFlash"></i>

            <span class="bannerFlash__text">Thank you for submitting your request. We will get get back to you as soon as possible.</span>

        </banner>

        @else

        @endif

        <div id="content">

            @yield('content')

        </div>

        <footer>

            <div class="footer-content">

                <span>Flat World Holdings</span>
                <span>All Rights Reserved &copy; {{ date('Y') }}</span>

            </div>

        </footer>

    </div>

    @include('home.scripts')

</body>
</html>
