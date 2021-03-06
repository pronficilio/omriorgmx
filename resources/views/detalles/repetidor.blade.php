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
                    <h4 class="text-center">Ingresa tu nombre, un apellido o tu correo</h4>
                    <div class="col-md-12">
                        <form id="form-repetidor">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                    <div class="col-sm-6">
                                        <input type="text" name="nombre" placeholder="Nombre" data-validation="length" data-validation-length="min3">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="apellido" placeholder="Apellido" data-validation="length" data-validation-length="min3">
                                    </div>
                                    <div class="col-sm-12">
                                        <input type="email" name="email" placeholder="Email" data-validation="email">
                                    </div>
                                    <div class="hidden col-sm-6">
                                        <input type="phone" name="phone" placeholder="Teléfono de contacto" data-validation="length" data-validation-length="min10">
                                    </div>
                                </div>
                                <div style="text-align: center;">
                                    <button type="submit" id="buscarr" class="btn btn-secondary">Buscar</button>
                                    <button type="reset" class="btn btn-secondary reset">Borrar todo</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-12" id="resultados">

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
            $('#resultados').html("<div class='row'></div>"); // limpiamo
            $("#form-repetidor").block({
                message: '<h1>Buscando</h1><img src="{{asset('images/entrenator/story.png')}}" style="width:80px;">',
                css: { border: '3px solid #a00', width: '40%' }
            });
            setTimeout(function(){
                $.get("{{route('get-alumnitos')}}", $("#form-repetidor").serialize(), function(respuesta){
                    $('#form-repetidor').unblock();
                    $(respuesta).each(function(i, e){
                        $('#resultados').append("<div class='col-md-8'><strong>"+
                            e.nombre+' '+e.apellido+' ('+e.email_c+')</strong></div><div class="col-md-4 text-right">'+
                            '<a href="{{route("repetidor", "")}}/'+e.base64+'" class="btn btn-primary">Este soy yo</a>'+"</a></div>");
                    });
                });
            }, 1300);
        });
    });
</script>
@endpush


<!-- End Donate Modal -->
