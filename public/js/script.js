"use strict";

//Hide preload animation after the window has finished loading
jQuery(window).on('load', function () {
    setTimeout(function(){ $('#preloadpage').addClass('animated slideOutDown') }, 500);
});
$(document).ready(function(){
    $("#estadoSelect select").change(function(){
        //console.log($(this).val());
        if($(this).val() == "Guerrero"){
            $(".soloCuernavaca").addClass("hidden");
            $(".soloGuerrero").removeClass("hidden");
        }else{
            $(".soloCuernavaca").removeClass("hidden");
            $(".soloGuerrero").addClass("hidden");
        }
    });
    //Various Sliders options and configurations
    //More Options -> https://owlcarousel2.github.io/OwlCarousel2/docs/api-options.html
    // Slider Section BX Slider Settings
    if($("ul.owl-carousel.top_slider").length){
        $("ul.owl-carousel.top_slider").owlCarousel({
            items: 1,
            loop: true,
            nav: true,
            dots: false,
            autoplay:true,
            autoplayTimeout:9000,
            smartSpeed:1000,
            onChange: function(){
                beforeslide();
            },
            onChanged: function(){
                setTimeout(function(){
                    afterslide();
                }, 500);
            }
        });
    }

    // Team Section BX Slider Settings
    if($("ul.owl-carousel.team_slider").length){
        $("ul.owl-carousel.team_slider").owlCarousel({
            margin: 30,
            autoplay:true,
            autoplayTimeout: 6000,
            nav: true,
            dots: false,
            loop: true,
            responsive: {
              0: {
                items: 1
              },
              600: {
                items: 3
              },
              1000: {
                items: 4
              }
            }
        });
    }

    // Causes Section BX Slider Settings
    if($("ul.owl-carousel.donaciones_slider").length){
        $("ul.owl-carousel.donaciones_slider").owlCarousel({
            margin: 70,
            nav: true,
            dots: false,
            loop: true,
            responsive: {
              0: {
                items: 1
              },
              600: {
                items: 2
              },
              1000: {
                items: 3
              }
            }
        });
    }

    // Projects Section BX Slider Settings
    if($("ul.owl-carousel.proyectos_slider").length){
        $("ul.owl-carousel.proyectos_slider").owlCarousel({
            items: 1,
            loop: true,
            nav: false,
            dots: true,
            smartSpeed: 1000,
            autoplay:true,
            autoplayTimeout: 9000
        });
    }
    // Sponsors Section BX Slider Settings
    if($('ul.sponsor_slider').length){
        $('ul.sponsor_slider').bxSlider({
            minSlides: 2,
            maxSlides: 5,
            slideWidth: 170,
            slideMargin: 40,
            ticker: true,
            speed: 30000
        });
    }

    //Hide mobile menu when you click link
    $("ul.mobile-nav li a").on('click', function() {
        $('#mobilemenu').collapse('hide');
    });

    //An amount is selected on donate form
    $('input[type=radio][name=xamount]','#DonateForm').on('change', function() {
        //copy value of selection to amount field
        $('input[name=amount]','#DonateForm').val(this.value);
        //clear custom amount field
        $('input[type=text][name=yamount]','#DonateForm').val('');

        checkmonthlydonation();
    });

    //User enters a custom amount
    $('input[type=text][name=yamount]','#DonateForm').on('keyup', function() {
        //clear radio selection for predefined amounts
        $('input[type=radio][name=xamount]','#DonateForm').prop('checked', false);
        //copy input value to amount field
        $('input[name=amount]','#DonateForm').val(this.value);
    });

    //select monthly contribution
    $('input[type=checkbox][name=monthly]','#DonateForm').on('change', function() {
        checkmonthlydonation();
    });

    checkmonthlydonation();

    //Click event to scroll to top
    $('.scrollToTop').on('click', function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });
    //$.fn.select2.defaults.set('theme','bootstrap');
    $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
    if($(".select2generico").length){
        $(".select2generico").select2({
            language: "es"
        });
    }
    if($(".select2escuela").length){
        $(".select2escuela").select2({
            'ajax': {
                'headers': {
                    'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr('content')
                }
            },
            minimumInputLength: 1,
            language: "es",
            allowClear: true
        });
    }
    if($("select[name='grado']").length){
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
    }
    //Form Validation
    var myLanguage = {
        errorTitle: '¡No se recibieron los datos!',
        requiredField: 'Este campo es obligatorio',
        requiredFields: 'No has llenado todos los campossss',
        badInt: 'Esa no parece tu edad',
        badEmail: 'Formato de email incorrecto',
        badTelephone: 'No has escrito un teléfono correcto',
        lengthBadStart: 'La entrada debe tener entre ',
        lengthBadEnd: ' caracteres :c',
        lengthTooShortStart: 'Este campo tiene menos de ',
        notConfirmed: 'El valor de entrada no está confirmado',
        min : 'min',
        max : 'max'
    };
    $.validate({
        language: myLanguage,
        onSuccess : function($form) {
            if($form.attr('id') === 'ContactForm'){
                 contactformsubmitdetailsjax();
                 return false;
            }else if($form.attr('id') === 'VolunteerForm'){
                 volunteerformsubmitdetailsjax();
                 return false;
            }else if($form.attr('id') == 'RegistroForm'){
                registroformsubmitdetailsjax();
                return false;
            }
        },
    });

    // ScrollReveal - For more config details visit: https://www.npmjs.com/package/scrollreveal
    window.sr = ScrollReveal({
        origin: 'right', // 'bottom', 'left', 'top', 'right'
        distance: '10px', // 'transition distance'
        duration: 1000, // 'how long the transition will take'
        scale: 1.0 // 'Change in size of the section; 1.0 means original size is maintained'
    });

    sr.reveal('#acercade .row.point, #noticias .event-item, #ContactForm'); // comma separated sections for scroll reveal
    sr.reveal('#latestnews .newsitem', {origin:'left'}); // scroll reveal with left origin

    //Top header with menu changes on scroll
    $(document).on('scroll', function() {
        var x = $(document).scrollTop();
        if(x > 200){
            $('section#header').css({"padding-bottom":"8px","padding-top":"8px","border-top":"4px solid #000000"});
            $('.scrollToTop').fadeIn();
        }
        if(x < 200){
            $('section#header').css({"padding-bottom":"20px","padding-top":"20px","border-top":"15px solid #000000"});
            $('section#header img').css({"height":"","width":""});
            $('.scrollToTop').fadeOut();
        }
    });

    //Check if monthly donation checkbox is checked or not
    function checkmonthlydonation(){
        //copy value of selection to amount field
        if($('input[type=checkbox][name=monthly]','#DonateForm').is(':checked')) {
            $('input[name=cmd]','#DonateForm').val('_xclick-subscriptions');
            $('input[name=a3]','#DonateForm').val($('input[name=amount]','#DonateForm').val());
        }else {
            $('input[name=cmd]','#DonateForm').val('_donations');
        }
    }

    jQuery.fn.visible = function() {
        return this.css('visibility', 'visible');
    };

    jQuery.fn.invisible = function() {
        return this.css('visibility', 'hidden');
    };

    //Function immediately before the slider slides - for top_slider
    function beforeslide(){
        $('.slider-tag').css('visibility', 'hidden').toggleClass('fadeIn');
        $('ul.top_slider .btn1').css('visibility', 'hidden').toggleClass('fadeInLeft');
        $('ul.top_slider .btn2').css('visibility', 'hidden').toggleClass('fadeInRight');
    }

    //Function immediately after the slider slides - for top_slider
    function afterslide(){
        $('.slider-tag').css('visibility', 'visible').addClass('animated fadeIn');
        $('ul.top_slider .btn1').css('visibility', 'visible').addClass('animated fadeInLeft');
        $('ul.top_slider .btn2').css('visibility', 'visible').addClass('animated fadeInRight');
    }

    // Submit contact form details
    function contactformsubmitdetailsjax() {
        $.ajax({
            url: 'php/contact_form_submit',
            type: 'post',
            data: {
                name: $('#ContactForm input#fname').val(),
                email: $('#ContactForm input#femail').val(),
                phone: $('#ContactForm input#fphone').val(),
                msg: $('#ContactForm textarea#fmsg').val()
            },
            success: function(result){
                $("#ContactForm").trigger('reset');
                $("#contactemailsendresponse").html("<p style='color:"+(result == 0?"red":"green")+"; font-weight:bold'>"+
                    (result == 0?"Error al enviar el mensaje :c":"¡Gracias por contactarnos! Te responderemos con prontitud.")+
                    "</p>");
                gtag('event', 'screen_view', {'screen_name': 'Contacto'});
                fbq('track', 'Contact');
            }
        });
    }

    // Submit volunteer form details
    function volunteerformsubmitdetailsjax() {
        $.ajax({
            url: 'php/volunteer_form_submit',
            type: 'post',
            data: {
                surname: $('#VolunteerForm input[name="surname"]').val(),
                firstname: $('#VolunteerForm input[name="firstname"]').val(),
                email: $('#VolunteerForm input[name="email"]').val(),
                phone: $('#VolunteerForm input[name="phone"]').val(),
                address: $('#VolunteerForm textarea[name="address"]').val(),
                gender: $('#VolunteerForm input[name="gender"]').val(),
                age: $('#VolunteerForm input[name="age"]').val(),
                why: $('#VolunteerForm textarea[name="why"]').val()
            },
            success: function(result){
                //clear fields
                $("#VolunteerForm").trigger('reset');

                //show success msg
                $("#volunteeremailsendresponse").html(result);

                //close modal
                setTimeout(function(){
                    $('#volunteerformModal').modal('toggle');
                }, 2000);
            }
        });
    }

    // Submit contact form details
    function registroformsubmitdetailsjax(donde) {
        var e = $('#RegistroForm input[name="email"]').val();
        $.post($("#RegistroForm").attr("action"), {
            id: $('#RegistroForm input[name="id"]').val(),
            nombre: $('#RegistroForm input[name="nombre"]').val(),
            apellido: $('#RegistroForm input[name="apellido"]').val(),
            edad: $('#RegistroForm input[name="edad"]').val(),
            email: $('#RegistroForm input[name="email"]').val(),
            phone: $('#RegistroForm input[name="phone"]').val(),
            id_escuela: $('#RegistroForm select[name="escuela_id"]').val(),
            grado: $('#RegistroForm select[name="grado"]').val(),
            categoria: $('#RegistroForm select[name="categoria"]').val(),
            tutor: $('#RegistroForm input[name="tutor"]').val(),
            email_tutor: $('#RegistroForm input[name="email_tutor"]').val(),
            id_municipio: $('#RegistroForm select[name="municipio"]').val(),
            id_municipiog: $('#RegistroForm select[name="municipioG"]').val(),
            enterado: $('#RegistroForm select[name="enterado"]').val(),
            escuela_g: $('#RegistroForm input[name="escuela_g"]').val(),
            estado: $('#RegistroForm select[name="estado"]').val()
        }, function(result){
            if(result==2){
                $(".humanorepetido").modal("show");
            }else{
                $("#RegistroForm").trigger('reset');
                $('#RegistroForm select').val("").trigger("change");
                swal("Todo bien", "¡Te mandamos un saludo por mail! Confirma tu correo "+e+" para continuar, revisa tu bandeja de correo no deseado!", "success", {
                    button: "Oh, ok!",
                });
                gtag('event', 'sign_up', { 'method': 'Email' });
                fbq('track', 'CompleteRegistration');
            }
        });
    }

});

// Scroll to section
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
$(function() {
    $('a[href*="#"]:not([href="#"])').on('click', function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	        var target = $(this.hash);
	        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	        if (target.length) {
		        $('html,body').animate({
		            scrollTop: target.offset().top
		        }, 1000);
		        return false;
	        }
	    }
    });
    new WOW().init();
    //setTimeout(function(){

        gtag('js', new Date());
        gtag('config', 'UA-66853888-1');
        gtag('send', 'pageview');
        //setTimeout(function(){
            (function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.7&appId=650879784989668";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
            !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window,document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '567484727095780');
            fbq('track', "PageView");
            $("body").append("<noscript><img height='1' width='1' style='display:none' src='https://www.facebook.com/tr?id=567484727095780&ev=PageView&noscript=1'/></noscript>");

            /*setTimeout(function(){
                window.fbAsyncInit = function() {
                  FB.init({
                    xfbml            : true,
                    version          : 'v7.0'
                  });
                };
                (function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                    js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
                console.log("chat cargado");
            }, 3000);*/

        //}, 2500);
    //}, 2500);
    $(".modal").on('shown.bs.modal', function (e) {
        fbq('track', 'ViewContent');
    });
});//Google Map
function initMap() {
    var uluru = {lat: -1.283816662791512, lng: 36.81950926780701}; //enter latitude and longitude of location
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 14,
        center: uluru,
        scrollwheel: false
    });
    var marker = new google.maps.Marker({
        position: uluru,
        map: map
    });
}






