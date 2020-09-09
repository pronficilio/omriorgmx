@extends('layouts.esqueleto')
@section('title', 'Muro de la fama')
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
            <h1>Muro de la fama </h1>
            <br>
        </div>
		<ul class="nav nav-tabs">
			@if($categoria == "abierta")
		  		<li role="presentation" class="active"><a href="{{ route('fama',['categoria'=> "abierta"]) }}">Abierta</a></li>
		  		<li role="presentation"><a href="{{ route('fama',['categoria'=> "secundaria"]) }}">Secundaria</a></li>
		  		<li role="presentation"><a href="{{ route('fama',['categoria'=> "primaria"]) }}">Primaria</a></li>
		  	@endif

		  	@if($categoria == "secundaria")
		  		<li role="presentation"><a href="{{ route('fama',['categoria'=> "abierta"]) }}">Abierta</a></li>
		  		<li role="presentation" class="active"><a href="{{ route('fama',['categoria'=> "secundaria"]) }}">Secundaria</a></li>
		  		<li role="presentation"><a href="{{ route('fama',['categoria'=> "primaria"]) }}">Primaria</a></li>
		  	@endif

		  	@if($categoria == "primaria")
		  		<li role="presentation"><a href="{{ route('fama',['categoria'=> "abierta"]) }}">Abierta</a></li>
		  		<li role="presentation"><a href="{{ route('fama',['categoria'=> "secundaria"]) }}">Secundaria</a></li>
		  		<li role="presentation" class="active"><a href="{{ route('fama',['categoria'=> "primaria"]) }}">Primaria</a></li>
		  	@endif
		</ul>
		<div class="m-section">
			<div class="m-section__content">
				<table class="table m-table m-table--head-bg-success">
					<thead>
						<tr>
							<th>
								Medallista
							</th>
							<th>
								Escuela 
							</th>
							<th>
								Año
							</th>
						</tr>
					</thead>
					<tbody>
					@foreach($mapa as $nombre => $persona)
					    <tr>
					    <th scope="row">
					    	{{ $nombre }}
					    </th>
					    <th>
					    	{{ $persona["medallas"][count($persona["medallas"])-1]["escuela"] }}
					    </th>
					    <th>
					    	@foreach($persona["medallas"] as $datos)
					    		<div class="color-{{ $datos["medalla"] }}">{{ $datos["anio"] }}</div>
					    	@endforeach
					    </th>	
					    </tr>   
					@endforeach		
					</tbody>
				</table>
			</div>
		</div>
	</div>	
    @include('complementos.contacto')
@endsection
@push('styles')
        <style>
          .color-Oro{
             background: #FFD700;
           }
        </style>
        <style>
          .color-Plata{
             background: #E3E4E5;
           }
        </style>
        <style>
          .color-Bronce{
             background: #CD7F32 ;
           }
        </style>
@endpush
@push('scripts')
    <script>gtag('event', 'screen_view', {'screen_name': 'muro-de-fama'});</script>
@endpush