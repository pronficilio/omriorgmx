<!-- Meet The Team Section (Miembros)-->
<section id="conocealequipo" class="dark bg">
    <div class="container">
        <div class="section-title">
            <h2 class="color-bg" data-aos="fade-up">Conoce al equipo</h2>
        </div>
        <div class="row topspace">
            <div class="owl_slider team_slider_wrap">
                <ul class="owl-carousel team_slider">
                    @foreach($miembros as $i=>$m)
                        <li class="miembro_owl">
                            <div class="image" id="tooltip_destino_{{$i}}" data-aos="zoom-in-up" data-aos-delay="{{$i*75}}">
                                <img src="{{ asset('storage/app/public/miembros/'.$m->id.'-d.webp') }}" data-src-hover="{{ asset('storage/app/public/miembros/'.$m->id .'-hover.webp') }}" alt="Foto de {{ $m->nombre }}" aria-describedby="tooltip_origen_{{$i}}"/>
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
                            <div id="tooltip_origen_{{$i}}" class="ttptooltip" role="tooltip" data-aos="flip-up" data-aos-delay="{{$i*75}}">
                                {{$m->pensamiento}}
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End Meet The Team Section (Miembros) -->
