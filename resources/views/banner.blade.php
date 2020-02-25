@foreach($banners as $i=>$b)
  <li class="style-{{(++$i)}}" style="background-image: url(images/banner/{{ ($i) }}.png);">
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
                  <a class="btn1" href="{{$b->link1}}">More Details</a>
                  <a class="btn2" href="{{$b->link2}}" data-toggle="modal" data-target=".donate_0">Donate</a>
              </div>
          </div>
      </div>
  </li>

  <!-- Esto lo puse porque desconozco cuantos estilos hay xd-->
  @if($i > 5)
      <?$i = 0?>
  @endif
@endforeach
