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
                        <form>
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
                                    <!--div class="row">
                                        <div class="col-md-6">
                                            <div>
                                                <input type="number" min="3" max="20" name="edad" placeholder="Edad" data-validation="number">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div>
                                                <select name="grado" class="select2generico" data-placeholder="Grado escolar" data-validation="required" data-width="100%">
                                                    <option value="">Grado escolar</option>
                                                    <optgroup label="Primaria">
                                                        <option value="1ro Primaria">Primer año de primaria</option>
                                                        <option value="2do Primaria">Segundo año de primaria</option>
                                                        <option value="3ro Primaria">Tercer año de primaria</option>
                                                        <option value="4to Primaria">Cuarto año de primaria</option>
                                                        <option value="5to Primaria">Quinto año de primaria</option>
                                                        <option value="6to Primaria">Sexto año de primaria</option>
                                                    </optgroup>
                                                    <optgroup label="Secundaria">
                                                        <option value="1ro Secundaria">Primer año de secundaria</option>
                                                        <option value="2do Secundaria">Segundo año de secundaria</option>
                                                        <option value="3ro Secundaria">Tercer año de secundaria</option>
                                                    </optgroup>
                                                    <optgroup label="Preparatoria">
                                                        <option value="1ro Preparatoria">Primer año de preparatoria</option>
                                                        <option value="2do Preparatoria">Segundo año de preparatoria</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                    </div-->
                                </div>
                                <div style="text-align: center;">
                                    <button type="button" id="buscarr" class="btn btn-secondary">Buscar</button>
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
<script>
    $("#buscarr").click(function(){
        alert("buscarr clikado");
        $.get("{{route('get-alumnitos')}}", closest(form).serialize(), function(respuesta){
            $('#resultados').html("<div class='row'></div>"); // limpiamo
            $(respuesta.arreglo).each(function(i, e){
                $('#resultados').append("<div class='col-md-4'>chale</div>");
            });
        });
    });
</script>
@endpush


<!-- End Donate Modal -->