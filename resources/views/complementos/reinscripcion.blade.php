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
        #RegistroForm .col-xs-6:first-child{
            padding-right: 5px;
        }
        #RegistroForm .col-xs-6:last-child{
            padding-left: 5px;
        }
        .telefono-edad-ano .col-xs-3{
            padding: 0px;
        }
        .telefono-edad-ano .col-xs-4{
            padding-right: 5px;

        }
        .telefono-edad-ano .col-xs-5{
            padding-left: 5px;
        }
    </style>
@endpush

<!-- Registro section -->
<section id="inscripcion" class=" bg">
    <div>
        <div class="section-title">
            <h2 class="color-bg">Reinscripción abierta</h2>
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
                <div class="col-md-6">
                    <a href="https://entrenator.omri.org.mx">
                        <div class="botones-ayuda">
                            Ir al sitio de entrenamiento
                        </div>
                    </a>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <form id="RegistroForm" action="registro/nuevo-registro" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div>
                                            <input type="text" name="nombre" placeholder="Nombre (s)" data-validation="length" data-validation-length="min3" value="{{$repetidor->nombre}}">
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div>
                                            <input type="text" name="apellido" placeholder="Apellidos" data-validation="length" data-validation-length="min3" value="{{$repetidor->apellido}}">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <input type="email" name="email" placeholder="Email" data-validation="email" value="{{$repetidor->email}}">
                                </div>
                                <div class="row telefono-edad-ano">
                                    <div class="col-xs-4">
                                        <div>
                                            <input type="phone" name="phone" placeholder="Teléfono de contacto" data-validation="length" data-validation-length="min10" value="{{$repetidor->telefono}}">
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <div>
                                            <input type="number" min="3" max="20" name="edad" placeholder="Edad" data-validation="number" value="{{$repetidor->edad}}">
                                        </div>
                                    </div>
                                    <div class="col-xs-5">
                                        <div>
                                            <select name="grado" class="select2generico" data-placeholder="Grado escolar" data-validation="required" data-width="100%">
                                                <option value="">Grado escolar</option>
                                                <optgroup label="Primaria">
                                                    <option value="1ro Primaria">1er primaria</option>
                                                    <option value="2do Primaria">2do primaria</option>
                                                    <option value="3ro Primaria">3er primaria</option>
                                                    <option value="4to Primaria">4to primaria</option>
                                                    <option value="5to Primaria">5to primaria</option>
                                                    <option value="6to Primaria">6to primaria</option>
                                                </optgroup>
                                                <optgroup label="Secundaria">
                                                    <option value="1ro Secundaria">1er secundaria</option>
                                                    <option value="2do Secundaria">2do secundaria</option>
                                                    <option value="3ro Secundaria">3er secundaria</option>
                                                </optgroup>
                                                <optgroup label="Preparatoria">
                                                    <option value="1ro Preparatoria">1er preparatoria</option>
                                                    <option value="2do Preparatoria">2do preparatoria</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div id="estadoSelect">
                                            <select class="select2generico" name="estado" data-placeholder="Estado" data-validation="required" data-width="100%">
                                                <option value="Morelos" selected>Morelos</option>
                                                <option value="Guerrero">Guerrero</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
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
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="soloCuernavaca">
                                    <select data-tags="true" name="escuela_id" class="select2escuela" data-ajax--dataType="json" data-ajax--url="api/select/materia" data-placeholder="Busca y selecciona tu escuela" data-width="100%"></select>
                                </div>
                                <div class="soloGuerrero hidden">
                                    <input type="text" name="escuela_g" placeholder="Escribe el nombre de tu escuela">
                                </div>
                                <div class="row">
                                    <div class="col-xs-7">
                                        <div>
                                            <input type="text" name="tutor" placeholder="Nombre de tu maestro, papá o mamá" data-validation="length" data-validation-length="min3" data-validation-optional="true" value="{{$repetidor->tutor}}">
                                        </div>
                                    </div>
                                    <div class="col-xs-5">
                                        <div>
                                            <input type="phone" name="phonetutor" placeholder="Teléfono de tutor" data-validation="length" data-validation-length="min10">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <input type="email" name="email_tutor" placeholder="Email de tu maestro, papá o mamá" data-validation="email" data-validation-optional="true" value="{{$repetidor->email_tutor}}">
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
<!-- Registro section -->
