@foreach($banners as $i=>$b)
  <li class="style-{{(($i%3)+1)}}" style="background-image: url({{ asset('storage/app/public/banner').'/'.($i+1) }}.jpg);">
      <div class="contentwrap">
          <div class="container">
              <div class="content">
                  <!--<h3 class="slider-tag">Style {{($i)}}</h3>-->
                  <div class="slideheadingwrap">
                      <h2>{{$b->titulo}}</h2>
                  </div>
                  <div class="description_wrap">
                      <div class="description hidden-xs">
                          {{$b->texto}}
                      </div>
                  </div>
                  @if(!empty($b->link1))
                    <a class="btn1" href="{{$b->link1}}">Más detalles</a>
                  @endif
                  @if(!empty($b->link2))
                    <a class="btn2" href="{{$b->link2}}" data-toggle="modal" data-target=".donate_0">Dona</a>
                  @endif
              </div>
          </div>
      </div>
  </li>
@endforeach
