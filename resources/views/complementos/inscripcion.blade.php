@push('styles')
    <style>
        .webp .botones-ayuda{
            background-image: url("{{ asset('images/karel.webp') }}");
            padding: 50px 15px;
            text-align:center;
            color: white;
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
            max-width: 165px;
            margin: auto;
            margin-top: 15px;
            font-weight: bolder;
        }
        .no-webp .botones-ayuda{
            background-image: url("{{ asset('images/karel.png') }}");
            padding: 50px 15px;
            text-align:center;
            color: white;
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
            max-width: 180px;
            margin: auto;
            margin-top: 15px;
            font-weight: bolder;
        }
    </style>
@endpush

<!-- Registro section -->
<section id="inscripcion" class=" bg">
    <div>
        <div class="section-title">
            <h2 class="color-bg">Pre-inscripciones abiertas</h2>
        </div>
        <div class="container topspace">
            <div class="row">
                <div class="col-md-6">
                    <a href="#" data-toggle="modal" data-target=".video-presentacion">
                        <div class="botones-ayuda">
                            Reproduce video de presentación
                        </div>
                    </a>
                </div>
                <!--div class="col-md-6">
                    <a href="https://entrenator.omri.org.mx">
                        <div class="botones-ayuda">
                            Ir al sitio de entrenamiento
                        </div>
                    </a>
                </div-->
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
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
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div id="estadoSelect">
                                            <select class="select2generico" name="estado" data-placeholder="Estado" data-validation="required" data-width="100%">
                                                <option value="Morelos" selected>Morelos</option>
                                                <option value="Guerrero">Guerrero</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="soloCuernavaca">
                                            <select class="select2generico" name="municipio" data-placeholder="Municipio" data-width="100%">
                                                <option value="">Municipio</option>
                                                @foreach($municipios as $m)
                                                    <option value="{{ $m->id }}">{{ $m->nombre }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="soloGuerrero hidden">
                                            <select class="select2generico" name="municipioG" data-placeholder="Municipio" data-width="100%">
                                                <option value="">Municipio</option>
                                                @foreach($municipiosG as $m)
                                                    <option value="{{ $m->id }}">{{ $m->nombre }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="soloCuernavaca">
                                    <select data-tags="true" name="escuela_id" class="select2escuela" data-ajax--dataType="json" data-ajax--url="api/select/materia" data-placeholder="Busca y selecciona tu escuela" data-width="100%"></select>
                                </div>
                                <div class="soloGuerrero hidden">
                                    <input type="text" name="escuela_g" placeholder="Escribe el nombre de tu escuela">
                                </div>
                                <div>
                                    <input type="text" name="tutor" placeholder="Nombre de tu maestro, papá o mamá (opcional)" data-validation="length" data-validation-length="min3" data-validation-optional="true">
                                </div>
                                <div>
                                    <input type="email" name="email_tutor" placeholder="Email de tu maestro, papá o mamá (opcional)" data-validation="email" data-validation-optional="true">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div>
                                            <select name="enterado" class="select2generico" data-tags="true" data-placeholder="¿Cómo te enteraste?" data-validation-optional="true" data-width="100%">
                                                <option value="">¿Cómo te enteraste?</option>
                                                <option value="Facebook">Por facebook</option>
                                                <option value="Poster">Vi un poster pegado</option>
                                                <option value="Maestro">Me invitaron en la escuela</option>
                                                <option value="amigo">Un amigo me dijo</option>
                                                <option value="papas">Me dijeron mis papás</option>
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
        </div>
    </div>
</section>
@include('detalles.humanorepetido')
@include('detalles.video')
<!-- Registro section -->
