@foreach($noticias as $i => $n)
  <!-- Start news item $i -->
  <div class="newsitem">
      <div class="row">
          <div class="col-lg-5 col-md-5 col-sm-5 col-xs-6">
              <img src="images/new/{{++$i}}.png" alt="">
          </div>
          <div class="col-lg-7 col-md-7 col-sm-7 col-xs-6">
              <div class="news-text-wrap">
                  <div class="news-title">{{$n -> titulo}}
                  </div>
                  <div class="news-date">{{$n -> fecha}}
                  </div>
                  <div class="news-text">
                      <p>{{$n -> texto}}</p>
                      <p><a href="#" class="dark light-text" data-toggle="modal" data-target=".news_{{$i}}">More Details</a></p>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- End news item $i -->

  <!-- Start Cause $i modal -->
  @include('detalles.noticia')
  <!-- End Cause $i modal -->
@endforeach
