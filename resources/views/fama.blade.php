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
		<div class="m-section">
			<div class="m-section__content">
				<br><br><br><br><br>
				<h1 class="text-center">Muro de la fama </h1>
				<br>
				<ul class="muro-fama nav nav-tabs">
				  	<li role="presentation" class="{{ $categoria == 'abierta' ? 'active' : 'highlighted' }}">
			  			<a href="{{ route('fama',['categoria'=> 'abierta']) }}">Abierta</a>
			  		</li>
				  	<li class="{{ $categoria == 'secundaria' ? 'active' : 'highlighted' }}" role="presentation">
				  		<a href="{{ route('fama',['categoria'=> 'secundaria']) }}">Secundaria</a>
				  	</li>
				  	<li class="{{ $categoria == 'primaria' ? 'active' : 'highlighted' }}" role="presentation">
				  		<a href="{{ route('fama',['categoria'=> 'primaria']) }}">Primaria</a>
				  	</li>
				</ul>
				<table class="table m-table m-table--head-bg-success table-hover">
					<thead>
						<tr>
							<th>
								Medallista
							</th>
							<th>
								Escuela 
							</th>
							<th class="text-center">
								Año
							</th>
						</tr>
					</thead>
					<tbody>
					@foreach($mapa as $nombre => $persona)
					    <tr>
						    <td scope="row">
						    	{{ $nombre }}
						    </td>
						    <td>
						    	{{ $persona["medallas"][count($persona["medallas"])-1]["escuela"] }}
						    </td>
						    <td>
						    	<div class="row">
							    	@foreach($persona["medallas"] as $datos)
							    		<div class="color-{{ $datos['medalla'] }} col-sm-4">{{ $datos["anio"] }}</div>
							    	@endforeach
							    </div>
						    </td>	
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
        	.table tr{
        		border-left: 2px solid black;
        		border-right: 2px solid black;
        	}
        	.table th{
        		border-color: black !important;
        	}
        	.table tbody td{
        		vertical-align: middle !important;
        		padding: 0px !important;
        		padding-left: 10px !important;
        		border-color: black !important;
        	}
        	.table tbody td .row{
        		margin: 0px;
        	}
        	.table tbody td .row div{
				border-left: 1px solid #cecece;
				border-right: 1px solid #cecece;
				border-top: 1px solid #cecece;
				border-bottom: 1px solid #cecece;
				padding-top: 10px;
				padding-bottom: 10px;
				text-align: center;
        	}
        	.table tbody td .row div:last-child{
        		border-right: 0px;
        	}
          .color-Oro{
             background: #FFD700;
           }
          .color-Plata{
             background: #E3E4E5;
           }
          .color-Bronce{
             background: #CD7F32 ;
           }
        </style>
@endpush
@push('scripts')
    <script>gtag('event', 'screen_view', {'screen_name': 'muro-de-fama'});</script>
@endpush