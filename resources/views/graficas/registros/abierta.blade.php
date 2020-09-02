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
            <h1>Registros: Categoría Abierta</h1>
            <br><br>
        </div>

        <div id="registros"></div>
        <br>
    </div>
    @include('complementos.contacto')
@endsection
@push('scripts')
    <!-- Styles -->
    <style>
        #registros{
            width: auto;
            height: 400px;
        }
    </style>

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
            $LIMITE = 5 ; 
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

                { Escuelas: "{{$escuela->nombre}}", Registros: {{$registro->cantidad}} },
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

        }); // end am4core.ready()
    </script>


<!-- Chart code -->
<script>


@endpush