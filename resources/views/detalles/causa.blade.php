<!-- Detalles de la Causa -->
<!-- Start Modals -->
@foreach($causas as $i => $c)
<!-- Start Cause $i modal -->
<div class="modal fade cause_{{($i+1)}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" data-dismiss="modal">
                <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">{{$c->detalle_titulo}}</h4>
            </div>
            <div class="modal-body">
                <img src="{{ asset('storage/app/public/donaciones/'.($c->id).'.webp') }}" alt="{{$c->titulo}}">
                <hr>
                <p>{{$c->detalle_texto}}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".donate_0">Apoyar</button>
                <button type="button" data-dismiss="modal" class="btn btn-primary">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- End Cause $i modal -->
@endforeach
<!-- End Modals -->
