@extends('layouts.esqueleto')
@section('title', 'Graficas')
@section('descripcion-pagina', 'La Olimpiada Morelense de Informática es un concurso que busca a los mejores talentos de Morelos para enseñarles el arte de la programación')
@section('titulo-og', 'Olimpiada Morelense de Informática | Aprende a programar')
@section('descripcion-og', 'La Olimpiada Morelense de Informática es un concurso que busca a los mejores talentos de Morelos para enseñarles el arte de la programación')
@section('descripcion-tc', 'La Olimpiada Morelense de Informática es un concurso que busca a los mejores talentos de Morelos para enseñarles el arte de la programación')
@section('descripcion-td', 'La Olimpiada Morelense de Informática es un concurso que busca a los mejores talentos de Morelos para enseñarles el arte de la programación')
@section('contenido')
    @include('complementos.header', ['e'=>route('index')])
    <div class="container">
        <div style="text-align: center;">
            <br><br><br><br><br>
            <h1>Medallas: Categoría Secundaria</h1>
        </div>

        <div style="text-align: center;">
            <br><br>
            <h3>Oro</h3>
            <br>
        </div>
        
        <div id="oro"></div>
        <br>

        <div style="text-align: center;">
            <br><br>
            <h3>Plata</h3>
            <br>
        </div>
        
        <div id="plata"></div>
        <br>

        <div style="text-align: center;">
            <br><br>
            <h3>Bronce</h3>
            <br>
        </div>
        
        <div id="bronce"></div>
        <br>
    </div>
    @include('complementos.contacto')
@endsection
@push('scripts')
    <!-- Styles -->
    <style>
        #oro, #plata, #bronce{
            width: auto;
            height: 600px;
        }
    </style>

    <!-- Resources -->
    <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>

    <!-- Chart code para medallas -->
    @foreach($colores as $color)
        <script>
            am4core.ready(function() {

            // Themes begin
            am4core.useTheme(am4themes_animated);
            // Themes end

            var chart = am4core.create("{{$color}}", am4charts.PieChart3D);
            chart.hiddenState.properties.opacity = 0; // this creates initial fade-in
            
            @php
                $otros = 0 
            @endphp

            @if($color == 'oro')
                chart.data = [
                    @foreach($oro as $medalla)
                        @if($loop->index >= 9)
                            @php
                                $otros += $medalla->oro 
                            @endphp
                            @continue
                        @endif

                        { Escuelas: "{{$medalla->escuela}}", Medallas: {{$medalla->oro}} },
                    @endforeach

                    @if($otros > 0)
                        { Escuelas: "Otras Escuelas", Medallas: {{$otros}} }
                    @endif
                ];
            @endif

            @if($color == 'plata')
                chart.data = [
                    @foreach($plata as $medalla)
                        @if($loop->index >= 9)
                            @php
                                $otros += $medalla->plata 
                            @endphp
                            @continue
                        @endif

                        { Escuelas: "{{$medalla->escuela}}", Medallas: {{$medalla->plata}} },
                    @endforeach

                    @if($otros > 0)
                        { Escuelas: "Otras Escuelas", Medallas: {{$otros}} }
                    @endif
                ];
            @endif

            @if($color == 'bronce')
                chart.data = [
                    @foreach($bronce as $medalla)
                        @if($loop->index >= 9)
                            @php
                                $otros += $medalla->bronce 
                            @endphp
                            @continue
                        @endif

                        { Escuelas: "{{$medalla->escuela}}", Medallas: {{$medalla->bronce}} },
                    @endforeach

                    @if($otros > 0)
                        { Escuelas: "Otras Escuelas", Medallas: {{$otros}} }
                    @endif
                ];
            @endif

            //Ancho de la grafica de medallas
            chart.innerRadius = am4core.percent(40);

            //Altura de la grafica de medallas
            chart.depth = 50;

            chart.legend = new am4charts.Legend();

            var series = chart.series.push(new am4charts.PieSeries3D());
            series.dataFields.value = "Medallas";
            series.dataFields.depthValue = "Medallas";
            series.dataFields.category = "Escuelas";
            series.slices.template.cornerRadius = 5;
            series.colors.step = 3;

            }); // end am4core.ready()
        </script>
    @endforeach
@endpush