<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <!-- Title -->
        <title>OMRI</title>
        <!-- Meta content -->
        <meta content='Project' name='description'>
        <meta content='Olimpiada Morelense de Informática, Olimpiada Morelense de Robótica e Informática, OMI, OMRI' name='keywords'>
        <meta content='width=device-width, initial-scale=1' name='viewport'>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Favicon -->
        <link rel='shortcut icon' href='public/favicon.ico'/>
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
        <!-- Style Sheets -->
        <link href='css/bootstrap.min.css' rel='stylesheet'>
        <link href='css/font-awesome-4.7.0/css/font-awesome.min.css' rel='stylesheet'>
        <link href='css/animate.css' rel='stylesheet'>
        <link href='css/jquery.bxslider.css' rel='stylesheet'>
        <link href='css/owl.carousel.min.css' rel='stylesheet'>
        <link href='css/template.css?v=4' rel='stylesheet'>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

    </head>
    <body>
        
        @include('complementos.header')
    
        @include('complementos.banner')
               

        <!-- Meet The Team Section (Miembros)-->
        <section id="" class=" bg">
            <div>
                <div class="section-title">
                    <h2 class="color-bg">Inscripciones abiertas</h2>
                </div>
                <div class="container topspace">
                    <form id="RegistroForm" action="registro/nuevo-registro" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div>
                                    <input type="text" name="nombre" placeholder="Nombre (s)" data-validation="length" data-validation-length="min3">
                                </div>
                                <div>
                                    <input type="text" name="apellido" placeholder="Apellidos" data-validation="length" data-validation-length="min3">
                                </div>
                                <div>
                                    <input type="email" name="email" placeholder="Email" data-validation="email">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div>
                                            <select class="select2generico" name="municipio" data-placeholder="Municipio" data-validation="required" data-width="100%">
                                                <option value="">Municipio</option>
                                                @foreach($municipios as $m)
                                                    <option value="{{ $m->id }}">{{ $m->nombre }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <input type="number" min="3" max="20" name="edad" placeholder="Edad" data-validation="number">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <select name="grado" class="select2generico" data-placeholder="Grado escolar" data-validation="required" data-width="100%">
                                        <option value="">Grado escolar</option>
                                        <optgroup label="Primaria">
                                            <option value="1ro Primaria">Primer año de primaria</option>
                                            <option value="2do Primaria">Segundo año de primaria</option>
                                            <option value="3ro Primaria">Tercer año de primaria</option>
                                            <option value="4to Primaria">Cuarto año de primaria</option>
                                            <option value="5to Primaria">Quinto año de primaria</option>
                                            <option value="6to Primaria">Sexto año de primaria</option>
                                        </optgroup>
                                        <optgroup label="Secundaria">
                                            <option value="1ro Secundaria">Primer año de secundaria</option>
                                            <option value="2do Secundaria">Segundo año de secundaria</option>
                                            <option value="3ro Secundaria">Tercer año de secundaria</option>
                                        </optgroup>
                                        <optgroup label="Preparatoria">
                                            <option value="1ro Preparatoria">Primer año de preparatoria</option>
                                            <option value="2do Preparatoria">Segundo año de preparatoria</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div>
                                    <select name="escuela_id" class="select2escuela" data-ajax--dataType="json" data-ajax--method="post" data-ajax--url="api/select/materia" data-validation="required" data-placeholder="Selecciona escuela" data-width="100%"></select>
                                </div>
                                <div>
                                    <input type="text" name="tutor" placeholder="Nombre de tu maestro o tutor (opcional)" data-validation="length" data-validation-length="min3" data-validation-optional="true">
                                </div>
                                <div>
                                    <input type="email" name="email_tutor" placeholder="Email de tu maestro o tutor (opcional)" data-validation="email" data-validation-optional="true">
                                </div>
                                <div>
                                    <select name="enterado" class="select2generico" data-tags="true" data-placeholder="¿Cómo te enteraste de este concurso?" data-validation-optional="true" data-width="100%">
                                        <option value="">¿Cómo te enteraste de este concurso?</option>
                                        <option value="Facebook">Por facebook</option>
                                        <option value="Poster">Vi un poster pegado</option>
                                        <option value="Maestro">Me invitaron en la escuela</option>
                                        <option value="amigo">Un amigo me dijo</option>
                                    </select>
                                </div>
                                <div class="g-recaptcha" data-sitekey="6Lel25YUAAAAAMIcBRLyRRJT9d7qbolpqvutz_VP"></div>
                                <button class="btn btn-secondary submit">Confirmar</button>
                                <button type="reset" class="btn btn-secondary reset">Cancelar</button>
                            </div>
                        </div>
                    </form>
                    <div id="volunteeremailsendresponse" class="emailsendresponse"></div>
                </div>
            </div>
        </section>

        <!-- Acerca de Section -->
        <section id="acercade">
            <div class="container">
                <div class="section-title">
                    <h2 class="dark-bg">Acerca de</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <h3>Acerca de OMRI</h3>
                        <h4>Iniciado en 2009<br/>La OMRI es un concurso dirigido a jovenes creativos, que gusten de resolver problemas y los retos</h4>
                        <p>
                            ¿Sabes <strong>cómo se hacen esos juegos o aplicaciones</strong> que tanto te gustan?
                            Se hacen dándole instrucciones a la computadora: <strong>Programando</strong><br>
                            En la OMRI <strong>aprenderás a programar</strong> y a resolver problemas <strong>utilizando la computadora</strong>.
                            ¡<strong>Nosotros te enseñamos</strong> desde el principio!
                        </p>
                        <p>
                            <big>¡La Olimpiada Morelense de Robótica e Informática es para todos!</big>
                            <br>
                            Cualquiera puede aprender a programar, no importa tu edad ni conocimientos previos
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <h3>Nuestra misión</h3>
                        <div class="ourpoints">
                            <div class="row point">
                                <div class="icon-space">
                                    <i class="fa fa-dot-circle-o fa-3x"></i>
                                </div>
                                <div class="text-space text">
                                    <p>Llevar a Morelos al top 3 de Estados en programación</p>
                                </div>
                            </div>
                            <div class="row point">
                                <div class="icon-space">
                                    <i class="fa fa-dot-circle-o fa-3x"></i>
                                </div>
                                <div class="text-space text">
                                    <p>Difundir el arte de la programación</p>
                                </div>
                            </div>
                            <div class="row point">
                                <div class="icon-space">
                                    <i class="fa fa-dot-circle-o fa-3x"></i>
                                </div>
                                <div class="text-space text">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                                </div>
                            </div>
                            <div class="row point">
                                <div class="icon-space">
                                    <i class="fa fa-dot-circle-o fa-3x"></i>
                                </div>
                                <div class="text-space text">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Acerca de Section -->
        
        @include('complementos.miembro')
        
        @include('complementos.proyecto')
        

        <!-- Donaciones Section (Causas)-->
        <section id="donaciones" class="dark bg">
            <div class="container">
                <div class="section-title">
                    <h2 class="color-bg">Donaciones</h2>
                </div>
                <div class="row topspace">
                    <div class="owl_slider donaciones_slider_wrap">
                        <ul class="owl-carousel donaciones_slider">
                            @include('complementos.causa')
                        </ul>
                    </div>
                </div>
            </div>

            @include('detalles.causa')

        </section>
        <!-- End Donaciones Section (Causas)-->

        <!-- Noticias Section -->
        <section id="noticias">
            <div class="container">
                <div class="section-title">
                    <h2 class="dark-bg">Noticias</h2>
                </div>
                <div class="row">
                    <!-- Start News (Noticias)-->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="latestnews">
                        <h3 class="black-text">Latest News</h3>

                        <!-- Start news -->
                        @include('complementos.noticia')
                        <!-- End news -->

                    </div>
                    <!-- End News (Noticias)-->

                    <!-- Starts Events (Eventos)-->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="events-wrap">
                            <h3 class="black-text">Upcoming Events</h3>
                            @include('complementos.evento')
                        </div>
                    </div>
                    <!-- End Events (Eventos)-->

                    <!-- Start Event modal popup -->
                    @include('detalles.evento')
                    <!-- Start Event modal popup -->

                </div>
            </div>
        </section>
        <!-- End Noticias Section -->

        <!-- Our Sponsors Section (Sponsors xd)-->
        <section id="sponsors">
            <div class="container">
                <div class="section-title">
                    <h2 class="dark-bg">Our Sponsors</h2>
                </div>
                <div class="section-body">
                    <div class="bx_slider sponsor_slider_wrap">
                        <ul class="sponsor_slider">
                            @include('complementos.sponsor')
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Our Sponsors Section (Sponsors xd)-->

        <!-- Our Contacto Section -->
        <section id="contacto" class="colored">
            <div class="container">
                <div class="section-title">
                    <h2 class="dark-bg">Contacto</h2>
                </div>
                <div class="section-body">
                    <div class="col-lg-3 col-md-3 col-sm-5 col-xs-10 centered contact-details">
                        <div class="social-icons">
                            <a href="http://www.facebook.com" target="_blank"><i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i></a>
                            <a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i></a>
                            <a href="http://www.linkedin.com" target="_blank"><i class="fa fa-github-square fa-3x" aria-hidden="true"></i></a>
                            <a href="mailto:someone@example.com" target="_blank"><i class="fa fa-envelope fa-3x" aria-hidden="true"></i></a>
                        </div>
                        <div class="contacto">
                            <span class="details">Tel: +521 777 534 4338</span>
                            <hr>
                            <span class="details">Email: info@omri.org.mx</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 hidden">
                            <h3 class="black-text">Our Location</h3>
                            <p>132 Lorem Ipsum, Dolor sit, City, Country</p>
                            <!-- Google Maps -->
                            <div id="map"></div>
                            <!-- End Google Map -->
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sendmessage">
                            <h3 class="black-text">Send us a message</h3>
                            <p>Leave us a message and we will get back to you asap</p>
                            <!-- Start contact form -->
                            <form class="cmxform" id="ContactForm">
                                <input
                                    id="fname"
                                    placeholder="Full Name"
                                    type="text"
                                    minlength="2"
                                    data-validation="length"
                                    data-validation-length="min4">
                                <input
                                    id="femail"
                                    placeholder="Email"
                                    type="email"
                                    data-validation="email">
                                <input
                                    id="fphone"
                                    placeholder="Phone Number"
                                    type="text">
                                <textarea
                                    id="fmsg"
                                    placeholder="Message"
                                    data-validation="required"
                                    data-validation-length="min10"></textarea>
                                <button class="btn btn-secondary">Submit</button>
                            </form>
                            <div id="contactemailsendresponse" class="emailsendresponse"></div>
                            <!-- End Contact form -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Our Contacto Section -->

        <!-- Footer Section -->
        <section id="footer" class="dark">
            <div class="container">
                <ul>
                    <li><a href="#">Link 1</a></li>
                    <li><a href="#">Link 2</a></li>
                    <li><a href="#">Link 3</a></li>
                </ul>
                <p>&#64; 2020 Olimpiada Morelense de Informática</p>
            </div>
            <a href="#" class="scrollToTop"><i class="fa fa-chevron-up fa-2x" aria-hidden="true"></i></a>
        </section>
        <!-- End Footer Section -->

        <!-- Start Ayúdanos Modal  -->
        <div class="modal fade donate_0" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">DONATE via Paypal</h4>
                    </div>
                    <div class="modal-body">
                        <!-- Start Donate Form -->
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" id="DonateForm">
                            <input type="hidden" name="payment_type" value="one_time">
                            <input type="hidden" name="cmd" value="_donations">
                            <input type="hidden" name="a3" value="30">
                            <input type="hidden" name="p3" value="1">
                            <input type="hidden" name="t3" value="M">
                            <input type="hidden" name="src" value="1">
                            <input type="hidden" name="currency_code" value="USD">
                            <!-- <input type="hidden" name="item_name" value="hat"> -->
                            <input type="hidden" name="amount" value="" data-validation="required">
                            <input type="hidden" name="business" value="info@ileadafricamedia.com">
                            <div class="row">
                                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                    <div class="bolden">
                                        <input id="d10" type="radio" name="xamount" value="10.00">
                                        <label for="d10">$10</label>
                                    </div>
                                    <div class="bolden">
                                        <input id="d25" type="radio" name="xamount" value="25.00">
                                        <label for="d25">$25</label>
                                    </div>
                                    <div class="bolden">
                                        <input id="d50" type="radio" name="xamount" value="50.00">
                                        <label for="d50">$50</label>
                                    </div>
                                    <div class="bolden">
                                        <input id="d100" type="radio" name="xamount" value="100.00">
                                        <label for="d100">$100</label>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                    <input type="text" name="yamount" placeholder="Other amount $" data-validation="number" data-validation-allowing="float" data-validation-optional="true">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <input id="monthly" type="checkbox" name="monthly" value="Children's Education">
                                    <label for="monthly"><span><span></span></span> I would like to make this a <b>monthly</b> contribution</label>
                                </div>
                            </div>
                            <div class="formlabel"><strong>DONATE FOR:</strong></div>
                            <div class="fieldcollection">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <input id="cause1" type="radio" name="item_name" value="Children's Education">
                                        <label for="cause1"><span><span></span></span> Children's Education</label>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <input id="cause2" type="radio" name="item_name" value="Refugee assistance">
                                        <label for="cause2"><span><span></span></span> Refugee assistance</label>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <input id="cause3" type="radio" name="item_name" value="Medical care">
                                        <label for="cause3"><span><span></span></span> Medical care</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <input id="cause4" type="radio" name="item_name" value="Food for children">
                                        <label for="cause4"><span><span></span></span> Food for children</label>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <input id="cause5" type="radio" name="item_name" value="War in Syria">
                                        <label for="cause5"><span><span></span></span> War in Syria</label>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <input id="cause6" type="radio" name="item_name" value="Any Cause" checked="checked">
                                        <label for="cause6"><span><span></span></span> Any Cause</label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" data-toggle="modal" data-target=".donate_0">Make Donation</button>
                        </form>
                        <!-- End Donate Form -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Donate Modal -->

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
        <script src="js/jquery-1.12.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.bxslider.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.form-validator.min.js"></script>
        <script src="js/scrollreveal.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
        <script src="js/script.js?v=2"></script>

        <script async defer
            src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=[YOUR-KEY]&callback=initMap">
        </script>
        <script>
            $(function(){
                $(".select2generico").select2({
                    dropdownPArent: $("#RegistroForm")
                });
$(".select2generico").select2({
    dropdownPArent: $("#RegistroForm")
});
});
        </script>
        <!-- END SCRIPTS -->
    </body>

</html>
