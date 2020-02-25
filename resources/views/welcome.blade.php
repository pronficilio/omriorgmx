<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <!-- Title -->
        <title>Hope Charity</title>
        <!-- Meta content -->
        <meta content='Project' name='description'>
        <meta content='Hope Charity' name='keywords'>
        <meta content='width=device-width, initial-scale=1' name='viewport'>
        <!-- Favicon -->
        <link rel='shortcut icon' href='favicon.png' type='image/png'/>
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
        <!-- Style Sheets -->
        <link href='css/bootstrap.min.css' rel='stylesheet'>
        <link href='css/font-awesome-4.7.0/css/font-awesome.min.css' rel='stylesheet'>
        <link href='css/animate.css' rel='stylesheet'>
        <link href='css/jquery.bxslider.css' rel='stylesheet'>
        <link href='css/owl.carousel.min.css' rel='stylesheet'>
        <link href='css/template.css' rel='stylesheet'>

    </head>
    <body>
        <!-- Top Header Section -->
        <section id="header">
            <div class="container">
                <div id="logo" class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
                    <a href="index.html"><img src="images/logo.png" alt="Logo"/></a>
                </div>
                <div class="col-lg-9 col-md-8 col-sm-8 col-xs-6 top-navigation">
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
                            <li>
                                <a href="#about">About</a>
                            </li>
                            <li>
                                <a href="#meettheteam">Our Team</a>
                            </li>
                            <li>
                                <a href="#projects">Projects</a>
                            </li>
                            <li>
                                <a href="#causes">Causes</a>
                            </li>
                            <li>
                                <a href="#newsandevents">News & Events</a>
                            </li>
                            <li>
                                <a href="#contacts">Contacts</a>
                            </li>
                            <li class="highlighted">
                                <a href="#" data-toggle="modal" data-target=".donate_0">Donate</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="collapse" id="mobilemenu">
                        <ul class="nav mobile-nav">
                            <li>
                                <a href="#about">About</a>
                            </li>
                            <li>
                                <a href="#meettheteam">Our Team</a>
                            </li>
                            <li>
                                <a href="#projects">Projects</a>
                            </li>
                            <li>
                                <a href="#causes">Causes</a>
                            </li>
                            <li>
                                <a href="#newsandevents">News & Events</a>
                            </li>
                            <li>
                                <a href="#contacts">Contacts</a>
                            </li>
                            <li class="highlighted">
                                <a href="#" data-toggle="modal" data-target=".donate_0">Donate</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Top Header Section -->

        <!-- Slider Section (Banner) -->
        <section id="slider">
            <div class="owl_slider top_slider_wrap">
                <ul class="owl-carousel top_slider">
                    @include('banner');
                </ul>
            </div>
        </section>
        <!-- End Slider Section (Banner) -->

        <!-- About Section -->
        <section id="about">
            <div class="container">
                <div class="section-title">
                    <h2 class="dark-bg">About</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <h3>About Hope Charity</h3>
                        <h4>Founded in 1988<br/>We give hope to the hopeless and helpless</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat suscipit lobortis suscipit lobortis suscipit lobortis suscipit.</p>
                        <p>Dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat suscipit lobortis suscipi commodo</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <h3>Our Mission</h3>
                        <div class="ourpoints">
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
        <!-- End About Section -->

        <!-- Meet The Team Section (Miembros)-->
        <section id="meettheteam" class="dark bg">
            <div class="container">
                <div class="section-title">
                    <h2 class="color-bg">Meet the Team</h2>
                </div>
                <div class="row topspace">
                    <div class="owl_slider team_slider_wrap">
                        <ul class="owl-carousel team_slider">
                            @include('miembro')
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Meet The Team Section (Miembros) -->

        <!-- Projects Section (Proyectos)-->
        <section id="projects">
            <div class="container">
                <div class="section-title">
                    <h2 class="dark-bg">Projects</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-bottom: 40px">
                        <h3>Our Projects</h3>
                        <h4>Volunteer With Us</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat suscipit lobortis suscipit lobortis suscipit lobortis suscipit.</p>
                        <p>Dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat suscipit lobortis suscipi commodo</p>
                        <p><a class="dark" href="#" data-toggle="modal" data-target="#volunteerformModal">Register as a volunteer</a></p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="owl_slider projects_slider_wrap">
                            <ul class="owl-carousel projects_slider">
                                @include('proyecto')
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Volunteer Form -->
            <!-- Modal -->
            <div id="volunteerformModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Volunteer Application</h4>
                        </div>
                        <div class="modal-body">
                            <form id="VolunteerForm" action="volunteer_form_submit.php" method="post">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="surname" placeholder="Surname" data-validation="length" data-validation-length="min3">
                                        <input type="text" name="firstname" placeholder="First Name" data-validation="length" data-validation-length="min3">
                                        <input type="text" name="phone" placeholder="Phone Number">
                                        <input type="text" name="email" placeholder="Email" data-validation="email">
                                        <textarea name="address" placeholder="Address" style="height:140px;" data-validation="length" data-validation-length="min3"></textarea>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="formlabel">Gender:</div>
                                        <div class="fieldcollection">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                    <input id="male" type="radio" name="gender" value="male">
                                                    <label for="male"><span><span></span></span> Male</label>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                    <input id="female" type="radio" name="gender" value="female">
                                                    <label for="female"><span><span></span></span> Female</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="formlabel">Age Group:</div>
                                        <div class="fieldcollection">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                    <input id="under18" type="radio" name="age" value="under18">
                                                    <label for="under18"><span><span></span></span> Under 18</label>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                    <input id="18-15" type="radio" name="age" value="18-25">
                                                    <label for="18-25"><span><span></span></span> 18-25</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                    <input id="26-40" type="radio" name="age" value="26-40">
                                                    <label for="26-40"><span><span></span></span> 26-40</label>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                    <input id="41-55" type="radio" name="age" value="41-55">
                                                    <label for="41-55"><span><span></span></span> 41-55</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                    <input id="over55" type="radio" name="age" value="55+">
                                                    <label for="over55"><span><span></span></span> 55+</label>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="formlabel">Please tell us why you want to volunteer with our organization?</div>
                                        <textarea name="why" style="height:110px;"></textarea>
                                    </div>
                                </div>
                                <button class="btn btn-secondary submit">Submit</button>
                            </form>
                            <div id="volunteeremailsendresponse" class="emailsendresponse"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->

        </section>
        <!-- End Projects Section (Proyectos)-->

        <!-- Causes Section (Causas)-->
        <section id="causes" class="dark bg">
            <div class="container">
                <div class="section-title">
                    <h2 class="color-bg">Causes</h2>
                </div>
                <div class="row topspace">
                    <div class="owl_slider causes_slider_wrap">
                        <ul class="owl-carousel causes_slider">
                            @include('causa')
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Start Modals -->
            <!-- Start Cause 1 modal -->
            <div class="modal fade cause_1" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Education for the less fortunate</h4>
                        </div>
                        <div class="modal-body">
                            <img src="images/education_big.jpg" alt="">
                            <hr>
                            <p>Lorem psum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".donate_0">Make Donation</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Cause 1 modal -->

            <!-- End Modals -->
        </section>
        <!-- End Causes Section (Causas)-->

        <!-- News & Events Section -->
        <section id="newsandevents">
            <div class="container">
                <div class="section-title">
                    <h2 class="dark-bg">News & Events</h2>
                </div>
                <div class="row">
                    <!-- Start News (Noticias)-->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="latestnews">
                        <h3 class="black-text">Latest News</h3>

                        <!-- Start news item 1 -->
                        <div class="newsitem">
                            <div class="row">
                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-6">
                                    <img src="images/news_1.png" alt="">
                                </div>
                                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-6">
                                    <div class="news-text-wrap">
                                        <div class="news-title">Latest news title
                                        </div>
                                        <div class="news-date">13 December 2016
                                        </div>
                                        <div class="news-text">
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                                            <p><a href="#" class="dark light-text" data-toggle="modal" data-target=".news_1">More Details</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End news item 1 -->

                        <!-- Start News Item 1 modal -->
                        <div class="modal fade news_1" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">Education for the less fortunate</h4>
                                    </div>
                                    <div class="modal-body">
                                        <img src="images/education_big.jpg" alt="">
                                        <hr>
                                        <p>Lorem psum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".donate_0">Make Donation</button>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div>
                        <!-- End News Item 1 modal -->

                        <!-- start news item 2 -->
                        <div class="newsitem">
                            <div class="row">
                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-6">
                                    <img src="images/news_2.png" alt="">
                                </div>
                                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-6">
                                    <div class="news-text-wrap">
                                        <div class="news-title">Latest news title
                                        </div>
                                        <div class="news-date">13 December 2016
                                        </div>
                                        <div class="news-text">
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, tincidunt.</p>
                                            <p><a href="#" class="dark light-text" data-toggle="modal" data-target=".news_2">More Details</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End news item 2 -->

                        <!-- Start News Item 2 modal -->
                        <div class="modal fade news_2" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">Education for the less fortunate</h4>
                                    </div>
                                    <div class="modal-body">
                                        <img src="images/education_big.jpg" alt="">
                                        <hr>
                                        <p>Lorem psum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".donate_0">Make Donation</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End News item 2 modal -->
                    </div>
                    <!-- End News (Noticias)-->

                    <!-- Starts Events (Eventos)-->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="events-wrap">
                            <h3 class="black-text">Upcoming Events</h3>
                            <div class="event-item">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 event-date">23<br/><span class="month">Jun</span></div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 event-info">
                                    <div class="event-title">Lorem ipsum dolor sit amet, consectetuer adipiscing</div>
                                    <div class="event-text">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                                    </div>
                                    <p><a href="#" class="dark light-text" data-toggle="modal" data-target=".event_1">More Details</a></p>
                                </div>
                            </div>
                            <div class="event-item">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 event-date">23<br/><span class="month">Jun</span></div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 event-info">
                                    <div class="event-title">Lorem ipsum dolor sit amet, consectetuer adipiscing</div>
                                    <div class="event-text">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                                    </div>
                                    <p><a href="#" class="dark light-text" data-toggle="modal" data-target=".event_1">More Details</a></p>
                                </div>
                            </div>
                            <div class="event-item">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 event-date">23<br/><span class="month">Jun</span></div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 event-info">
                                    <div class="event-title">Lorem ipsum dolor sit amet, consectetuer adipiscing</div>
                                    <div class="event-text">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                                    </div>
                                    <p><a href="#" class="dark light-text" data-toggle="modal" data-target=".news_1">More Details</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Events (Eventos)-->

                    <!-- Start Event 1 modal popup -->
                    <div class="modal fade event_1" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Event Title</h4>
                                </div>
                                <div class="modal-body">
                                    <img src="images/education_big.jpg" alt="">
                                    <hr>
                                    <p>Lorem psum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                                </div>
                                <div class="modal-footer">
                                    <!-- <button type="button" class="btn btn-primary">Make Donation</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Event 1 modal popup -->

                </div>
            </div>
        </section>
        <!-- End News & Events Section -->

        <!-- Our Sponsors Section (Sponsors xd)-->
        <section id="sponsors">
            <div class="container">
                <div class="section-title">
                    <h2 class="dark-bg">Our Sponsors</h2>
                </div>
                <div class="section-body">
                    <div class="bx_slider sponsor_slider_wrap">
                        <ul class="sponsor_slider">
                            <li><img src="images/sponsors/1.png" alt="" /></li>
                            <li><img src="images/sponsors/2.png" alt="" /></li>
                            <li><img src="images/sponsors/3.png" alt="" /></li>
                            <li><img src="images/sponsors/4.png" alt="" /></li>
                            <li><img src="images/sponsors/5.png" alt="" /></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Our Sponsors Section (Sponsors xd)-->

        <!-- Our Contacts Section -->
        <section id="contacts" class="colored">
            <div class="container">
                <div class="section-title">
                    <h2 class="dark-bg">Our Contacts</h2>
                </div>
                <div class="section-body">
                    <div class="col-lg-3 col-md-3 col-sm-5 col-xs-10 centered contact-details">
                        <div class="social-icons">
                            <a href="http://www.facebook.com" target="_blank"><i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i></a>
                            <a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i></a>
                            <a href="http://www.linkedin.com" target="_blank"><i class="fa fa-linkedin-square fa-3x" aria-hidden="true"></i></a>
                            <a href="mailto:someone@example.com" target="_blank"><i class="fa fa-envelope fa-3x" aria-hidden="true"></i></a>
                        </div>
                        <div class="contacts">
                            <span class="details">Tel: +1 234 234 1234</span>
                            <hr>
                            <span class="details">Email: info@hopecharity.com</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <h3 class="black-text">Our Location</h3>
                            <p>132 Lorem Ipsum, Dolor sit, City, Country</p>
                            <!-- Google Maps -->
                            <div id="map"></div>
                            <!-- End Google Map -->
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 sendmessage">
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
        <!-- End Our Contacts Section -->

        <!-- Footer Section -->
        <section id="footer" class="dark">
            <div class="container">
                <ul>
                    <li><a href="#">Link 1</a></li>
                    <li><a href="#">Link 2</a></li>
                    <li><a href="#">Link 3</a></li>
                </ul>
                <p>&#64; 2016 Hope Charity</p>
            </div>
            <a href="#" class="scrollToTop"><i class="fa fa-chevron-up fa-2x" aria-hidden="true"></i></a>
        </section>
        <!-- End Footer Section -->

        <!-- Start Donate Modal  -->
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
        <script src="js/script.js"></script>

        <script async defer
            src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=[YOUR-KEY]&callback=initMap">
        </script>

        <!-- END SCRIPTS -->
    </body>

</html>
