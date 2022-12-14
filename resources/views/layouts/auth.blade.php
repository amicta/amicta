<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>{{ config('app.name') }} :: @yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-93ZHXK6RDS"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-93ZHXK6RDS');
    </script>
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    @if (Request::is('*login*'))
                        <div
                            class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        @else
                            <div
                                class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                    @endif

                    <div class="login-brand">
                        <img src="{{ asset('assets/img/logo-normal.png') }}" alt="logo" width="130"
                            class="">
                    </div>

                    @if (session()->has('info'))
                        <div class="alert alert-info">
                            {{ session()->get('info') }}
                        </div>
                    @endif

                    @include('partials.flash')

                    @yield('content')

                </div>
            </div>
    </div>
    <div class="simple-footer">
        Copyright &copy; AMICTA 2022 <div class="bullet"></div> Created by <a href="https://amcc.or.id/"
            target="_blank">Amikom Computer Club (AMCC)</a>
    </div>
    </section>
    </div>
    <script src="{{ mix('js/manifest.js') }}"></script>
    <script src="{{ mix('js/vendor.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
