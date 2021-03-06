<!-- Start Event modal popup -->
@foreach($eventos as $i => $e)
  <!-- Start Event $i modal popup -->
  <div class="modal fade event_{{++$i}}" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">{{$e -> detalle_titulo}}</h4>
              </div>
              <div class="modal-body">
                  <picture>
                      <source srcset="{{ asset('storage/app/public/eventos/'.($e->id).'.webp') }}" type="image/webp">
                      <source srcset="{{ asset('storage/app/public/eventos/'.($e->id).'.jpg') }}" type="image/jpeg"> 
                      <img src="{{ asset('storage/app/public/eventos/'.($e->id).'.jpg') }}" alt="">
                  </picture>
                  <hr>
                  <p>{{$e -> detalle_texto}}</p>
              </div>
              <div class="modal-footer">
                  <!-- <button type="button" class="btn btn-primary">Make Donation</button> -->
                  <button type="button" data-dismiss="modal" class="btn btn-primary">Cerrar</button>
              </div>
          </div>
      </div>
  </div>
  <!-- End Event 1 modal popup -->
@endforeach
<!-- Start Event modal popup -->