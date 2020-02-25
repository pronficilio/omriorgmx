<!-- Aqui se guardan los pedazos de codigo que tenia al principio el template -->

<!-- Banner -->
<li class="style-1" style="background-image: url(images/slides/img_1.jpg);">
    <div class="contentwrap">
        <div class="container">
            <div class="content">
                <h3 class="slider-tag">Style 1</h3>
                <div class="slideheadingwrap">
                    <h2>Crisis Prevention and Recovery</h2>
                </div>
                <div class="description_wrap">
                    <div class="description hidden-xs">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                    </div>
                </div>
                <a class="btn1" href="#">More Details</a>
                <a class="btn2" href="#" data-toggle="modal" data-target=".donate_0">Donate</a>
            </div>
        </div>
    </div>
</li>
<li class="style-2" style="background-image: url(images/slides/img_2.jpg);">
    <div class="contentwrap">
        <div class="container">
            <div class="content">
                <h3 class="slider-tag">Style 2</h3>
                <div class="slideheadingwrap">
                    <h2>Help For the Children</h2>
                </div>
                <div class="description_wrap">
                    <div class="description_wrap">
                        <div class="description hidden-xs">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                        </div>
                    </div>
                </div>
                <a class="btn1" href="#">More Details</a>
                <a class="btn2" href="#" data-toggle="modal" data-target=".donate_0">Donate</a>
            </div>
        </div>
    </div>
</li>
<li class="style-3" style="background-image: url(images/slides/img_5.jpg);">
    <div class="contentwrap">
        <div class="container">
            <div class="content">
                <h3 class="slider-tag">Style 3</h3>
                <div class="slideheadingwrap">
                    <h2>Help Poor Urban Families</h2>
                </div>
                <div class="description_wrap">
                    <div class="description hidden-xs">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                    </div>
                </div>
                <a class="btn1" href="#">More Details</a>
                <a class="btn2" href="#" data-toggle="modal" data-target=".donate_0">Donate</a>
            </div>
        </div>
    </div>
</li>
<li class="style-4" style="background-image: url(images/slides/img_6.jpg);">
    <div class="contentwrap">
        <div class="container">
            <div class="content">
                <h3 class="slider-tag">Style 4</h3>
                <div class="slideheadingwrap">
                    <h2>A Helping Hand</h2>
                </div>
                <div class="description hidden-xs">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                </div>
                <a class="btn1" href="#">More Details</a>
                <a class="btn2" href="#" data-toggle="modal" data-target=".donate_0">Donate</a>
            </div>
        </div>
    </div>
</li>
<li class="style-1" style="background-image: url(images/slides/img_4.jpg);">
    <div class="contentwrap">
        <div class="container">
            <div class="content">
                <h3 class="slider-tag">Style 5</h3>
                <div class="slideheadingwrap">
                    <h2>Hope for the hopeless</h2>
                </div>
                <div class="description hidden-xs">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                </div>
                <a class="btn1" href="#">More Details</a>
                <a class="btn2" href="#" data-toggle="modal" data-target=".donate_0">Donate</a>
            </div>
        </div>
    </div>
</li>
<!--Fin Banner -->

<!-- Miembros -->
@foreach($miembros as $i=>$m)
<li>
    <div class="image">
        <img src="images/team/{{ ($i+1) }}.png" alt="Team Member"/>
    </div>
    <div class="name">
        {{ $m->nombre }}
    </div>
    <div class="title">
        {{ $m->puesto }}
    </div>
    <div class="social-icons">
        <div class="col-xs-10 centered">
            @if(!empty($m->link_facebook))
                <a href="{{ $m->link_facebook }}" target="_blank"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
            @endif
            @if(!empty($m->link_twitter))
                <a href="{{ $m->link_twitter }}" target="_blank"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a>
            @endif
            @if(!empty($m->link_linkedin))
                <a href="{{ $m->link_linkedin }}" target="_blank"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>
            @endif
            @if(!empty($m->correo))
                <a href="mailto:{{ $m->correo }}" target="_blank"><i class="fa fa-envelope fa-2x" aria-hidden="true"></i></a>
            @endif
        </div>
    </div>
</li>
@endforeach
<!--Fin Miembros -->

<!--Proyectos -->
<li>
    <div class="project_img" style="background-image: url(images/project_1.jpg)"></div>
    <h5>Help Poor Urban Families</h5>
    <h6>Nairobi, Kenya</h6>
    <p>Dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat suscipit lobortis suscipi commodo</p>
    <a href="#" data-toggle="modal" data-target="#volunteerformModal" class="btn btn-primary">Volunteer for this project</a><a href="#" class="btn btn-secondary">Learn More</a>
</li>
<li>
    <div class="project_img" style="background-image: url(images/project_2.jpg)"></div>
    <h5>Crisis Prevention and Recovery</h5>
    <h6>Sydney, Australia</h6>
    <p>Dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat suscipit lobortis suscipi commodo</p>
    <a href="#" data-toggle="modal" data-target="#volunteerformModal" class="btn btn-primary">Volunteer for this project</a><a href="#" class="btn btn-secondary">Learn More</a>
</li>
<li>
    <div class="project_img" style="background-image: url(images/project_3.jpg)"></div>
    <h5>Support Children in India</h5>
    <h6>New Dheli, India</h6>
    <p>Dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat suscipit lobortis suscipi commodo</p>
    <a href="#" data-toggle="modal" data-target="#volunteerformModal" class="btn btn-primary">Volunteer for this project</a><a href="#" class="btn btn-secondary">Learn More</a>
</li>
<li>
    <div class="project_img" style="background-image: url(images/project_4.jpg)"></div>
    <h5>Inclusive & Sustainable Growth</h5>
    <h6>City, Country</h6>
    <p>Dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat suscipit lobortis suscipi commodo</p>
    <a href="#" data-toggle="modal" data-target="#volunteerformModal" class="btn btn-primary">Volunteer for this project</a><a href="#" class="btn btn-secondary">Learn More</a>
</li>
<!--Fin Proyectos -->

<!-- Causas -->
<li>
    <div class="cause-wrap">
        <img src="images/cause_education.png" alt="Cause Image"/>
        <div class="cause-title">
            Education for the less fortunate
        </div>
        <div class="cause-progress">
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:20%">
                    20%
                </div>
            </div>
            <div class="figure">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="donations">3 Donations</div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="donate-goal">Goal $5,000</div>
                </div>
            </div>
        </div>
        <div class="cause-bottom">
            <a href="#" class="light-text" data-toggle="modal" data-target=".cause_1">View Details</a> | <span class="donate-link"><a href="#" data-toggle="modal" data-target=".donate_0">Donate</a></span>
        </div>
    </div>
</li>
<li>
    <div class="cause-wrap">
        <img src="images/cause_refugees.jpg" alt="Cause Image"/>
        <div class="cause-title">
            Food for children
        </div>
        <div class="cause-progress">
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">70%</div>
            </div>
            <div class="figure">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="donations">3 Donations</div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="donate-goal">Goal $5,000</div>
                </div>
            </div>
        </div>
        <div class="cause-bottom">
            <a href="#" class="light-text" data-toggle="modal" data-target=".cause_2">View Details</a> | <span class="donate-link"><a href="#" data-toggle="modal" data-target=".donate_0">Donate</a></span>
        </div>
    </div>
</li>
<li>
    <div class="cause-wrap">
        <img src="images/cause_street.jpg" alt="Cause Image"/>
        <div class="cause-title">
            Home for street children
        </div>
        <div class="cause-progress">
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width:30%">30%</div>
            </div>
            <div class="figure">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="donations">3 Donations</div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="donate-goal">Goal $5,000</div>
                </div>
            </div>
        </div>
        <div class="cause-bottom">
            <a href="#" class="light-text" data-toggle="modal" data-target=".cause_3">View Details</a> | <span class="donate-link"><a href="#" data-toggle="modal" data-target=".donate_0">Donate</a></span>
        </div>
    </div>
</li>
<li>
    <div class="cause-wrap">
        <img src="images/cause_refugees.jpg" alt="Cause Image"/>
        <div class="cause-title">
            Refugees assistance
        </div>
        <div class="cause-progress">
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">70%</div>
            </div>
            <div class="figure">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="donations">3 Donations</div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="donate-goal">Goal $5,000</div>
                </div>
            </div>
        </div>
        <div class="cause-bottom">
            <a href="#" class="light-text" data-toggle="modal" data-target=".cause_1">View Details</a> | <span class="donate-link"><a href="#" data-toggle="modal" data-target=".donate_0">Donate</a></span>
        </div>
    </div>
</li>
<li>
    <div class="cause-wrap">
        <img src="images/cause_medical.jpg" alt="Cause Image"/>
        <div class="cause-title">
            Medical Care
        </div>
        <div class="cause-progress">
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">80%</div>
            </div>
            <div class="figure">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="donations">3 Donations</div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="donate-goal">Goal $5,000</div>
                </div>
            </div>
        </div>
        <div class="cause-bottom">
            <a href="#" class="light-text" data-toggle="modal" data-target=".cause_2">View Details</a> | <span class="donate-link"><a href="#" data-toggle="modal" data-target=".donate_0">Donate</a></span>
        </div>
    </div>
</li>
<li>
    <div class="cause-wrap">
        <img src="images/cause_education.png" alt="Cause Image"/>
        <div class="cause-title">
            War in Syria
        </div>
        <div class="cause-progress">
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">70%</div>
            </div>
            <div class="figure">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="donations">3 Donations</div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="donate-goal">Goal $5,000</div>
                </div>
            </div>
        </div>
        <div class="cause-bottom">
            <a href="#" class="light-text" data-toggle="modal" data-target=".cause_3">View Details</a> | <span class="donate-link"><a href="#" data-toggle="modal" data-target=".donate_0">Donate</a></span>
        </div>
    </div>
</li>
<!-- Fin Causas -->
