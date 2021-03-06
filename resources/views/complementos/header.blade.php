<!-- Top Header Section -->
<section id="header">
    <div class="container">
        <div id="logo" class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <table style="width: 200px"><tr>
                <td>
                    <a href="{{ $e }}#">
                        <picture>
                            <source srcset="{{ asset('images/icons/omri_logo.webp') }}" type="image/webp">
                            <source srcset="{{ asset('images/icons/omri_logo.png') }}" type="image/png"> 
                            <img src="{{ asset('images/icons/omri_logo.png') }}" alt="Logo" height="50px"/>
                        </picture>
                    </a>
                </td>
                <td>
                    <a href="{{ $e }}#">
                        <picture>
                            <source srcset="{{ asset('images/icons/nivel1.webp') }}" type="image/webp">
                            <source srcset="{{ asset('images/icons/nivel1.png') }}" type="image/png"> 
                            <img src="{{ asset('images/icons/nivel1.png') }}" alt="Logo" height="50px" class="wow rotateIn" data-wow-duration="0.5s" />
                        </picture>
                    </a>
                </td>
            </tr></table>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-6 top-navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mobilemenu">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse yamm">
                <ul class="nav navbar-nav">
                    <li class="framework pulse">
                        <a href="/resultados">Resultados</a>
                    </li>
                    <li>
                        <a href="{{ $e }}#conocealequipo">Nuestro equipo</a>
                    </li>
                    <li>
                        <a href="{{ route('fama') }}">Muro de la fama</a>
                    </li>
                    <li>
                        <a href="{{ route('graficaMedalla', 'abierta') }}">Escuelas campeonas</a>
                    </li>
                    <!--li>
                        <a href="{{ $e }}#donaciones">Donaciones</a>
                    </li>
                    <li>
                        <a href="{{ $e }}#noticias">Noticias</a>
                    </li-->
                    <li>
                        <a href="{{ $e }}#contacto">Contacto</a>
                    </li>
                    <li class="highlighted">
                        <a href="#" data-toggle="modal" data-target=".donate_0">Ayúdanos</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="collapse" id="mobilemenu">
                <ul class="nav mobile-nav">
                    <li class="framework">
                        <a href="#inscripcion">Inscríbete</a>
                    </li>
                    <li>
                        <a href="#conocealequipo">Nuestro equipo</a>
                    </li>
                    <li>
                        <a href="#donaciones">Donaciones</a>
                    </li>
                    <li>
                        <a href="#noticias">Noticias</a>
                    </li>
                    <li>
                        <a href="#contacto">Contacto</a>
                    </li>
                    <li class="highlighted">
                        <a href="#" data-toggle="modal" data-target=".donate_0">Ayúdanos</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End Top Header Section -->