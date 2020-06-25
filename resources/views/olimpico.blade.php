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
    
        <!-- Meet The Team Section (Miembros)-->
        <section id="conocealequipo" class="dark bg">
            <div class="container">
                <div class="section-title">
                    <h2 class="color-bg">Zona exclusiva</h2>
                </div>
                <div class="row topspace">
                    <div class="col-md-8 col-md-offset-2">
                        <p>Para continuar, escribe el email <strong>con el que te registraste</strong></p>
                        <br>
                        <form id="formlimpico">
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="email" class="form-control" name="email">
                                </div>
                                <div class="col-md-4">
                                    <button class="btn" type="submit">Entrar a la zona exclusiva</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/js/i18n/es.min.js" integrity="sha256-3rDVEasLjZL5m8j0M0VHX8YqfrjT/JHZtNWgdUO4uXM=" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="js/script.js?v=2"></script>
        <!-- END SCRIPTS -->
        <script>
            $(function(){
                $("#formlimpico").submit(function(e){
                    e.preventDefault();
                    alert("hasta aqui hemos llegado");
                });
            });
        </script>
    </body>

</html>
