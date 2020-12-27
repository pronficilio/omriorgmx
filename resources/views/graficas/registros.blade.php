@extends('layouts.esqueleto')
@section('title', 'Gráficas')
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
            <h1 class="text-capitalize">Registros: Categoría {{ $categoria }}</h1>
            <br><br>
        </div>
		<ul class="muro-fama nav nav-tabs">
            <li role="presentation" class="{{ $categoria == 'abierta' ? 'active' : 'highlighted' }}">
                <a href="{{ route('graficaRegistro', 'abierta') }}">Abierta</a>
            </li>
            <li class="{{ $categoria == 'secundaria' ? 'active' : 'highlighted' }}" role="presentation">
                <a href="{{ route('graficaRegistro', 'secundaria') }}">Secundaria</a>
            </li>
            <li class="{{ $categoria == 'primaria' ? 'active' : 'highlighted' }}" role="presentation">
                <a href="{{ route('graficaRegistro', 'primaria') }}">Primaria</a>
            </li>
        </ul>
        <div id="registros"></div>
        <br>
    </div>
    @include('complementos.contacto')
@endsection
@push('styles')
    <!-- Styles -->
    <style>
    	#registros{
            width: auto;
            height: 400px;
        }
        .muro-fama li{
            width: 33.33%;
            background: black;
            text-align: center;
        }
        .muro-fama .highlighted{
        }
        .muro-fama .highlighted a{
            background: #84c229;
            color: black;
        }
        .muro-fama a{
            border: 2px solid black !important;
            border-bottom: 0px !important;
        }
        .muro-fama .active{
            background:black;
            color: white;
        }
    </style>
@endpush
@push('scripts')
    <!-- Resources -->
    <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/kelly.js"></script>

    <!-- Chart code para medallas -->
    <script>
        am4core.ready(function() {

        // Themes begin
        am4core.useTheme(am4themes_kelly);
        am4core.useTheme(am4themes_animated);
        // Themes end

        // Create chart instance
        var chart = am4core.create("registros", am4charts.PieChart);
        
        @php
            $otros = 0 ;
            $LIMITE = 10 ; 
        @endphp

        //$LIMITE es para ver cuantas escuelas se van a mostrar + 1 de otros

        // Add data
        chart.data = [
            @foreach($registros as $registro)
                @if($loop->index >= $LIMITE)
                    @php
                        $otros += $registro->cantidad 
                    @endphp
                    @continue
                @endif

                @php
                    $escuela = App\Escuela::find($registro->id_escuela)
                @endphp

                { Escuelas: "{{ !empty($escuela->corto) ? $escuela->corto : $escuela->nombre}}", Registros: {{$registro->cantidad}} },
            @endforeach

            @if($otros > 0)
                { Escuelas: "Otras Escuelas", Registros: {{$otros}} }
            @endif
        ];

        // Add and configure Series
        var pieSeries = chart.series.push(new am4charts.PieSeries());
        pieSeries.dataFields.value = "Registros";
        pieSeries.dataFields.category = "Escuelas";
        pieSeries.innerRadius = am4core.percent(50);
        pieSeries.ticks.template.disabled = true;
        pieSeries.labels.template.disabled = true;

        var rgm = new am4core.RadialGradientModifier();
        rgm.brightnesses.push(-0.8, -0.8, -0.5, 0, - 0.5);
        pieSeries.slices.template.fillModifier = rgm;
        pieSeries.slices.template.strokeModifier = rgm;
        pieSeries.slices.template.strokeOpacity = 0.4;
        pieSeries.slices.template.strokeWidth = 0;

        chart.legend = new am4charts.Legend();
        chart.legend.position = "right";
                chart.legend.maxWidth = 400;
            chart.legend.labels.template.truncate=false;
            chart.legend.labels.template.wrap=true;
        }); // end am4core.ready()
    </script>
@endpush