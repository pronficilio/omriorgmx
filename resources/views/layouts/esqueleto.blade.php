<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <!-- Title -->
        <title>OMRI | @yield('title')</title>
        <!-- Meta content -->
        <meta content="@yield('descripcion-pagina')" name='description'>
        <meta content="Pronficilio" name="author" />
        <meta content='Olimpiada Morelense de Informática, Olimpiada Morelense de Robótica e Informática, OMI, OMRI, programación, programacion, curso de programación, karel, C, c++' name='keywords'>
        <meta content='width=device-width, initial-scale=1' name='viewport'>
        <meta property="og:title" content="@yield('titulo-og')">
        <meta property="og:url" content="https://omri.org.mx">
        <meta property="og:locale" content="es_MX">
        <meta property="og:type" content="website">
        <meta property="og:description" content="@yield('descripcion-og')">
        <meta property="og:image" content="images/og.png">
        <meta property="og:site_name" content="OMRI - Olimpiada Morelense de Informática">
        <meta name="twitter:card" content="@yield('descripcion-tc')">
        <meta name="twitter:title" content="OMRI - Olimpiada Morelense de Informática">
        <meta name="twitter:url" content="https://omri.org.mx">
        <meta name="twitter:description" content="@yield('descripcion-td')">
        <meta name="twitter:image:src" content="https://omri.org.mx/images/og.png">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="canonical" href="https://omri.org.mx" />
        <!-- Favicon -->
        <link rel='shortcut icon' href="{{ asset('public/favicon.ico') }}"/>
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet" media="print" onload="this.media='all'">
        <!-- Style Sheets -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel='stylesheet' media="print" onload="this.media='all'">
        <link href="/css/font-awesome-4.7.0/css/font-awesome.min.css" rel='stylesheet' media="print" onload="this.media='all'">
        <link href="{{ asset('css/animate.css') }}" rel='stylesheet' media="print" onload="this.media='all'">
        <link href="{{ asset('css/jquery.bxslider.css?v=3') }}" rel='stylesheet' media="print" onload="this.media='all'">
        <link href="{{ asset('css/owl.carousel.min.css') }}" rel='stylesheet' media="print" onload="this.media='all'">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" media="print" onload="this.media='all'"/>
        <link href="{{ asset('css/template.min.css?v=4') }}"rel='stylesheet'>
        @stack('styles')
    </head>
    <body>
    	@yield('contenido')

        @include('complementos.footer')
        @include('detalles.donacion')
        @include('detalles.repetidor')
        <!-- Page Preloading -->
        <div id="preloadpage">
            <div class="loadingwrap">
                <div class="loading">
                    <div class="object object1"></div>
                    <div class="object object2"></div>
                    <div class="object object3"></div>
                    <div class="object object4"></div>
                </div>
            </div>
        </div>
        <!-- End Page Preloading -->
        <!-- BEGIN SCRIPTS -->
        <script src="{{ asset('js/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('js/modernizr.min.js') }}" async></script>
        <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
        <script src="{{ asset('js/jquery.bxslider.min.js') }}" defer></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}" defer></script>
        <script src="{{ asset('js/jquery.form-validator.min.js') }}" defer></script>
        <script src="{{ asset('js/scrollreveal.min.js') }}" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/js/i18n/es.min.js" integrity="sha256-3rDVEasLjZL5m8j0M0VHX8YqfrjT/JHZtNWgdUO4uXM=" crossorigin="anonymous" defer></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" defer></script>
        <script src="{{ asset('js/wow.min.js') }}" defer></script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-66853888-1"></script>
        <script src="{{ asset('js/script.js?v=6') }}" defer></script>
        @stack('scripts')
    </body>
</html>
