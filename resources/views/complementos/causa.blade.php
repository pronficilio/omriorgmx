<!-- Donaciones Section (Causas)-->
<section id="donaciones" class="dark bg">
    <div class="container">
        <div class="section-title">
            <h2 class="color-bg" data-aos="fade-up">Donaciones</h2>
        </div>
        <div class="row topspace">
            <div class="owl_slider donaciones_slider_wrap">
                <ul class="owl-carousel donaciones_slider">
                    @foreach($causas as $i=>$c)
                    <li>
                        <div class="cause-wrap">
                            <a href="#" data-toggle="modal" data-target=".cause_{{ ($i+1) }}">
                                <img src="{{ asset('storage/app/public/donaciones/'.($c->id).'.webp') }}" alt="{{$c->titulo}}" data-aos="zoom-out-up"/>
                            </a>
                            <div class="cause-title color-bg">
                                <strong data-aos="slide-right">{{$c->titulo}}</strong>
                            </div>
                            <div class="cause-progress">
                                <div class="progress" data-aos="fade-left">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="{{ $now = (($c->acumulado)*(100)/($c->meta)) }}" aria-valuemin="0" aria-valuemax="100" style="width:{{number_format($now,0)}}%">{{number_format($now,0)}}%</div>
                                </div>
                                <div class="figure">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="donations" data-aos="fade-up-right">{{$c->cant_donaciones}} donaci{{$c->cant_donaciones==1?"ón":"ones"}}</div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="donate-goal" data-aos="fade-up-left">Meta ${{number_format($c->meta,2)}}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="cause-bottom">
                                <a href="#" class="light-text" data-toggle="modal" data-target=".cause_{{ ($i+1) }}" data-aos="fade-up-right">Ver Detalles</a> | <span class="donate-link"><a href="#" data-toggle="modal" data-target=".donate_0" data-aos="fade-up-left">Apoyar</a></span>
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
<!-- End Donaciones Section (Causas)-->



                    
