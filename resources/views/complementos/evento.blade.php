<!-- Starts Events (Eventos)-->
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="events-wrap">
        <h3 class="black-text">Próximos eventos</h3>
        @foreach($eventos as $i => $e)


          {{$day = substr($e -> fecha, 8, 2)}}

          @if(substr($e -> fecha, 5, 2) == "01")
            {{$month = "Ene"}}
          @endif

          @if(substr($e -> fecha, 5, 2) == "02")
            {{$month = "Feb"}}
          @endif

          @if(substr($e -> fecha, 5, 2) == "03")
            {{$month = "Mar"}}
          @endif

          @if(substr($e -> fecha, 5, 2) == "04")
            {{$month = "Abr"}}
          @endif

          @if(substr($e -> fecha, 5, 2) == "05")
            {{$month = "May"}}
          @endif

          @if(substr($e -> fecha, 5, 2) == "06")
            {{$month = "Jun"}}
          @endif

          @if(substr($e -> fecha, 5, 2) == "07")
            {{$month = "Jul"}}
          @endif

          @if(substr($e -> fecha, 5, 2) == "08")
            {{$month = "Ago"}}
          @endif

          @if(substr($e -> fecha, 5, 2) == "09")
            {{$month = "Sep"}}
          @endif

          @if(substr($e -> fecha, 5, 2) == "10")
            {{$month = "Oct"}}
          @endif

          @if(substr($e -> fecha, 5, 2) == "11")
            {{$month = "Nov"}}
          @endif

          @if(substr($e -> fecha, 5, 2) == "12")
            {{$month = "Dic"}}
          @endif


          <!-- Start events item $i -->
          <div class="event-item">
              <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 event-date">{{$day}}<br/><span class="month">{{$month}}</span></div>
              <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 event-info">
                  <div class="event-title">{{$e -> titulo}}</div>
                  <div class="event-text">
                      <p>{{$e -> texto}}</p>
                  </div>
                  <p><a href="#" class="dark light-text" data-toggle="modal" data-target=".event_{{++$i}}">Más Detalles</a></p>
              </div>
          </div>
          <!-- End events item $i -->
        @endforeach
    </div>
</div>
<!-- End Events (Eventos)-->
@include('detalles.evento')