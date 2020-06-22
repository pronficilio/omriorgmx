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