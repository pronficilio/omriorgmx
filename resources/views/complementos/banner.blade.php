
<style>
    @foreach($banners as $i=>$b)
        .banner-{{$i}} {
            background-image: url({{ asset('storage/app/public/banner/'.($i+1).'.webp') }});
        }
    @endforeach
    @media (max-width: 768px) {
        @foreach($banners as $i=>$b)
            .banner-{{$i}} {
                background-image: url({{ asset('storage/app/public/banner/'.($i+1).'-c.webp') }});
                background-size: 100% auto !important;
            }
        @endforeach
    }
</style>
<!-- Slider Section (Banner) -->
<section id="slider" class="dark bg">
    <div class="owl_slider top_slider_wrap">
        <ul class="owl-carousel top_slider">
            @foreach($banners as $i=>$b)
                <li class="style-3 banner-{{$i}}">
                    <div class="contentwrap">
                        <div class="container">
                            <div class="content">
                                <!--<h3 class="slider-tag">Style {{($i)}}</h3>-->
                                @if(!empty($b->titulo))
                                    <div class="slideheadingwrap">
                                        <h2>{{$b->titulo}}</h2>
                                    </div>
                                @endif
                                @if(!empty($b->texto))
                                    <div class="description_wrap">
                                        <div class="description hidden-xs">
                                            {{$b->texto}}
                                        </div>
                                    </div>
                                @endif
                                @if(!empty($b->link1))
                                    <br>
                                    <a class="btn1" href="{{$b->link1}}">¡Registrate ahora!</a>
                                @endif
                                @if(!empty($b->link2))
                                    <a class="btn2" href="{{$b->link2}}" data-toggle="modal" data-target=".donate_0">Dona</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</section>
<!-- End Slider Section (Banner) -->