<!-- Detalles de la Noticia -->
<!-- Start News Item $i modal -->
<div class="modal fade news_{{$i}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" data-dismiss="modal">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">{{$n -> detalle_titulo}}</h4>
            </div>
            <div class="modal-body">
                <img src="{{ asset('storage/app/public/noticias/'.($n->id).'.webp') }}" alt="{{$n -> titulo}}">
                <hr>
                <p>{{$n -> detalle_texto}}</p>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-primary">Cerrar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- End News Item $i modal -->
