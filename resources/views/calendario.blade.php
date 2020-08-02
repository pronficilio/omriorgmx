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
        @include('complementos.header2')
        <div style="height: 10%;"><br><br><br><br><br></div>
        
        <div class="container">
            <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%237CB342&amp;ctz=America%2FMexico_City&amp;src=cHJvbmZpY2lsaW9AZ21haWwuY29t&amp;src=Y3U4Nmp0aGI3cWRpczRwa2M4OTMzcXE3MWNAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%23039BE5&amp;color=%23F09300&amp;title=13a%20Olimpiada%20Morelense%20de%20Inform%C3%A1tica&amp;showCalendars=0&amp;showTabs=0&amp;showPrint=0&amp;showDate=1&amp;showTz=0" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
        </div>

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
        
    </body>

</html>
