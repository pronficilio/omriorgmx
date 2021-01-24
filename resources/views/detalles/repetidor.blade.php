<!-- Start Ayúdanos Modal  -->
<div class="modal fade repetidor_0" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" data-dismiss="modal">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Actualiza tus datos personales</h4>

            </div>
            <div class="modal-body">
                <!-- Start Update Form -->
                <div class="up-form row">
                    <center><h4>Ingresa tus datos</h4></center>
                    <div class="col-md-12">
                        <form id="form-repetidor">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                    <div class="col-sm-6">
                                        <input type="text" name="nombre" placeholder="Nombre (s)" data-validation="length" data-validation-length="min3">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="apellido" placeholder="Apellidos" data-validation="length" data-validation-length="min3">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="email" name="email" placeholder="Email" data-validation="email">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="phone" name="phone" placeholder="Teléfono de contacto" data-validation="length" data-validation-length="min10">
                                    </div>
                                </div>
                                <div style="text-align: center;">
                                    <button type="submit" id="buscarr" class="btn btn-secondary">Buscar</button>
                                    <button type="reset" class="btn btn-secondary reset">Borrar todo</button>
                                </div>
                            </div>
                        </form>
                        <div class="row" id="resultados">

                        </div>

                    </div>
                </div>
                <!-- End Update Form -->
            </div>
        </div>
    </div>
</div>
@push('scripts')
<script defer>

    $(document).ready(function(){
        $("#form-repetidor").submit(function(e){
            e.preventDefault();
            alert("buscarr clikado");
            $.get("{{route('get-alumnitos')}}", $(this).serialize(), function(respuesta){
                $('#resultados').html("<div class='row'></div>"); // limpiamo
                $(respuesta).each(function(i, e){
                    $('#resultados').append("<div class='col-md-4'>"+respuesta['email']+"</div>");
                });
            });
        });
    });
</script>
@endpush


<!-- End Donate Modal -->
