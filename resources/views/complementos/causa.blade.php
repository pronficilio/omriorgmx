<section id="donaciones" class="dark bg">
    <div class="container">
        <div class="section-title">
            <h2 class="color-bg">Donaciones</h2>
        </div>
        <div class="row topspace">
            <div class="owl_slider donaciones_slider_wrap">
                <ul class="owl-carousel donaciones_slider">
                    @foreach($causas as $i=>$c)
                    <li>
                        <div class="cause-wrap">
                            <img src="images/cause/{{ ($i+1) }}.png" alt="Cause Image"/>
                            <div class="cause-title">
                                {{$c->titulo}}
                            </div>
                            <div class="cause-progress">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="{{ $now = (($c->acumulado)*(100)/($c->meta)) }}" aria-valuemin="0" aria-valuemax="100" style="width:{{$now}}%">{{$now}}%</div>
                                </div>
                                <div class="figure">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="donations">{{$c->cant_donaciones}} Donaciones</div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="donate-goal">Meta ${{$c->meta}}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="cause-bottom">
                                <a href="#" class="light-text" data-toggle="modal" data-target=".cause_{{ ($i+1) }}">View Details</a> | <span class="donate-link"><a href="#" data-toggle="modal" data-target=".donate_0">Donate</a></span>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    @include('detalles.causa')
</section>



                    
