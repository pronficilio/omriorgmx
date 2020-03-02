<!-- Detalles de la Noticia -->
<!-- Start News Item $i modal -->
<div class="modal fade news_{{$i}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">{{$n -> detalle_titulo}}</h4>
            </div>
            <div class="modal-body">
                <img src="images/new/detalles/{{$i}}.png" alt="">
                <hr>
                <p>{{$n -> detalle_texto}}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".donate_0">Make Donation</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- End News Item $i modal -->
