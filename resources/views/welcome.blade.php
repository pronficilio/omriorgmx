<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <!-- Title -->
        <title>OMRI - Olimpiada Morelense de Informática</title>
        <!-- Meta content -->
        <meta content='La Olimpiada Morelense de Informática es un concurso que busca a los mejores talentos de Morelos' name='description'>
        <meta content="Pronficilio" name="author" />
        <meta content='Olimpiada Morelense de Informática, Olimpiada Morelense de Robótica e Informática, OMI, OMRI, programación, programacion, curso de programación, karel, C, c++' name='keywords'>
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
        <link href='css/template.css?v=5' rel='stylesheet'>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    </head>
    <body>
        
        @include('complementos.header')
    
        @include('complementos.banner')

        @include('complementos.inscripcion')

        @include('complementos.miembro')

        @include('complementos.acercade')

        @include('complementos.causa')
        
        {{-- @include('complementos.proyecto') --}}

        @include('complementos.noticia')
        
        {{-- @include('complementos.sponsor') --}}

        @include('complementos.contacto')

        @include('complementos.footer')

        @include('detalles.donacion')

        @include('detalles.humanorepetido')

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
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/script.js?v=3"></script>

        <!-- END SCRIPTS -->
        <script>
            $(function(){
                $("select[name='grado']").change(function(){
                    $("select[name='categoria'] option[value='Primaria']").removeAttr("disabled");
                    $("select[name='categoria'] option[value='Secundaria']").removeAttr("disabled");
                    $("select[name='categoria'] option[value='Abierta']").removeAttr("disabled");
                    if($(this).val() != ""){
                        $("select[name='categoria']").val("Primaria").trigger("change");
                        if($(this).val() == "1ro Secundaria" || $(this).val() == "2do Secundaria" || $(this).val() == "3ro Secundaria" || $(this).val() == "1ro Preparatoria" || $(this).val() == "2do Preparatoria"){
                            $("select[name='categoria'] option[value='Primaria']").attr("disabled", "disabled");
                            $("select[name='categoria']").val("Secundaria").trigger("change");
                        }
                        if($(this).val() == "1ro Preparatoria" || $(this).val() == "2do Preparatoria"){
                            $("select[name='categoria'] option[value='Secundaria']").attr("disabled", "disabled");
                            $("select[name='categoria']").val("Abierta").trigger("change");
                        }
                    }
                });
            });
        </script>
    </body>

</html>
