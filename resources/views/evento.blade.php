@foreach($eventos as $i => $e)

  <?
  //Este pedazo de codigo fue de rapido para mostrar el mes con letras xd
  $day = substr($e -> fecha, 8, 2) ;

  if(substr($e -> fecha, 5, 2) == "01")
    $month = "Ene" ;

  if(substr($e -> fecha, 5, 2) == "02")
    $month = "Feb" ;

  if(substr($e -> fecha, 5, 2) == "03")
    $month = "Mar" ;

  if(substr($e -> fecha, 5, 2) == "04")
    $month = "Abr" ;

  if(substr($e -> fecha, 5, 2) == "05")
    $month = "May" ;

  if(substr($e -> fecha, 5, 2) == "06")
    $month = "Jun" ;

  if(substr($e -> fecha, 5, 2) == "07")
    $month = "Jul" ;

  if(substr($e -> fecha, 5, 2) == "08")
    $month = "Ago" ;

  if(substr($e -> fecha, 5, 2) == "09")
    $month = "Sep" ;

  if(substr($e -> fecha, 5, 2) == "10")
    $month = "Oct" ;

  if(substr($e -> fecha, 5, 2) == "11")
    $month = "Nov" ;

  if(substr($e -> fecha, 5, 2) == "12")
    $month = "Dic" ;
  ?>


  <!-- Start events item $i -->
  <div class="event-item">
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 event-date">{{$day}}<br/><span class="month">{{$month}}</span></div>
      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 event-info">
          <div class="event-title">{{$e -> titulo}}</div>
          <div class="event-text">
              <p>{{$e -> texto}}</p>
          </div>
          <p><a href="#" class="dark light-text" data-toggle="modal" data-target=".event_{{++$i}}">More Details</a></p>
      </div>
  </div>
  <!-- End events item $i -->
@endforeach
