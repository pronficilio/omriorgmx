<!-- Start Modals -->
@foreach($causas as $i => $c)
<!-- Start Cause $i modal -->
<div class="modal fade cause_{{($i+1)}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">{{$c->detalle_titulo}}</h4>
            </div>
            <div class="modal-body">
                <img src="images/cause/{{ ($i+1) }}_detalle.png" alt="">
                <hr>
                <p>{{$c->detalle_texto}}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".donate_0">Make Donation</button>
            </div>
        </div>
    </div>
</div>
<!-- End Cause $i modal -->
@endforeach
<!-- End Modals -->
