<!-- Registro section -->
<section id="inscripcion" class=" bg">
    <div>
        <div class="section-title">
            <h2 class="color-bg">Inscripciones abiertas</h2>
        </div>
        <div class="container topspace">
            <form id="RegistroForm" action="registro/nuevo-registro" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div>
                            <input type="text" name="nombre" placeholder="Nombre (s)" data-validation="length" data-validation-length="min3">
                        </div>
                        <div>
                            <input type="text" name="apellido" placeholder="Apellidos" data-validation="length" data-validation-length="min3">
                        </div>
                        <div>
                            <input type="email" name="email" placeholder="Email" data-validation="email">
                        </div>
                        <div>
                            <input type="phone" name="phone" placeholder="Teléfono de contacto" data-validation="length" data-validation-length="min10">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <input type="number" min="3" max="20" name="edad" placeholder="Edad" data-validation="number">
                                </div>
                            </div>
                            <div class="col-md-6">
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
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div>
                            <select data-tags="true" name="escuela_id" class="select2escuela" data-ajax--dataType="json" data-ajax--url="api/select/materia" data-validation="required" data-placeholder="Busca y selecciona tu escuela" data-width="100%"></select>
                        </div>
                        <div>
                            <input type="text" name="tutor" placeholder="Nombre de tu maestro o tutor (opcional)" data-validation="length" data-validation-length="min3" data-validation-optional="true">
                        </div>
                        <div>
                            <input type="email" name="email_tutor" placeholder="Email de tu maestro o tutor (opcional)" data-validation="email" data-validation-optional="true">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <select class="select2generico" name="municipio" data-placeholder="Municipio" data-validation="required" data-width="100%">
                                        <option value="">Municipio</option>
                                        @foreach($municipios as $m)
                                            <option value="{{ $m->id }}">{{ $m->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <select name="categoria" class="select2generico" data-tags="true" data-placeholder="Categoría" data-width="100%" data-validation="required">
                                        <option value="">Categoría</option>
                                        <option value="Primaria">Primaria [Karel]</option>
                                        <option value="Secundaria">Secundaria [Karel]</option>
                                        <option value="Abierta">Abierta [C/C++]</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div>
                            <select name="enterado" class="select2generico" data-tags="true" data-placeholder="¿Cómo te enteraste de este concurso?" data-validation-optional="true" data-width="100%">
                                <option value="">¿Cómo te enteraste de este concurso?</option>
                                <option value="Facebook">Por facebook</option>
                                <option value="Poster">Vi un poster pegado</option>
                                <option value="Maestro">Me invitaron en la escuela</option>
                                <option value="amigo">Un amigo me dijo</option>
                                <option value="papas">Me dijeron mis papás</option>
                            </select>
                        </div>
                    </div>
                    <div style="text-align: center;">
                        <button class="btn btn-secondary submit">Confirmar</button>
                        <button type="reset" class="btn btn-secondary reset">Borrar todo</button>
                    </div>
                </div>
            </form>
            <div id="volunteeremailsendresponse" class="emailsendresponse"></div>
        </div>
    </div>
</section>
<!-- Registro section -->