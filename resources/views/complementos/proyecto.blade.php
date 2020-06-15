<!-- Proyectos Section (Proyectos)-->
<section id="proyectos">
    <div class="container">
        <div class="section-title">
            <h2 class="dark-bg">Proyectos</h2>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-bottom: 40px">
                <h3>Nuestros Proyectos</h3>
                <h4>Sé un voluntario con nosotros</h4>
                <p>La OMRI es una organización sin fines de lucro. Los miembros de la organización son ex-olímpicos que voluntariamente nos ayudan en los diferentes proyectos enfocados en difundir la programación.</p>
                <p>Si estás interesado en ser voluntario en la OMRI, por favor haz clic en el siguiente enlace y déjanos tus datos</p>
                <p><a class="dark" href="#" data-toggle="modal" data-target="#volunteerformModal">Registrarse como voluntario</a></p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="owl_slider proyectos_slider_wrap">
                    <ul class="owl-carousel proyectos_slider">
		                @foreach($proyectos as $i=>$p)
						  	<li>
								<div class="project_img" style="background-image: url(images/project/{{ ($i+1) }}.png)"></div>
								<h5>{{$p->titulo}}</h5>
								<h6>{{$p->fecha}}</h6>
								<p>{{$p->texto}}</p>
								<a href="{{$p->link1}}" data-toggle="modal" data-target="#volunteerformModal" class="btn btn-primary">Volunteer for this project</a><a href="{{$p->link2}}" class="btn btn-secondary">Learn More</a>
						  	</li>
						@endforeach
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
                    <form id="VolunteerForm" action="volunteer_form_submit" method="post">
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
<!-- End Proyectos Section (Proyectos)-->