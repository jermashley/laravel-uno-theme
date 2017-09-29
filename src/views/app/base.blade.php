<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }} @yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css')}}">
</head>

<body>

    <div id="app">

        <header>

            <div class="header__coverImage">
                <img src="{{ asset('images/hero-background.jpg') }}" alt="">
            </div>

            <nav >

                <div class="nav-container">

                    <div class="logo">

                        @if (\Route::is('home'))

                            <a href="{{ route('home') }}" class="logoLink"><img src="{{ asset('images/header-logo-light.png') }}" style="display: none;"></a>

                        @else

                            <a href="{{ route('home') }}" class="logoLink"><img src="{{ asset('images/header-logo-light.png') }}" alt=""></a>

                        @endif

                        <div class="nav-button">
                            <i class="fa fa-bars"></i>
                        </div>

                    </div>

                    <div class="nav-links">

                        @include('navLinks', ['position'=>'navigation'])

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

            <div class="footer-links">

                @include('navLinks', ['position'=>'footer'])

            </div>

            <div class="footer-content">

                <span>Flat World Holdings</span>
                <span>All Rights Reserved &copy; 2017</span>

            </div>

        </footer>

    </div>


    <script src="{{ mix('js/app.js') }}"></script>

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

</body>
</html>
