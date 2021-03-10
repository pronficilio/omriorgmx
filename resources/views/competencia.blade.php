@extends('layouts.esqueleto')
@section('title', '13 Olimpiada Morelense de Informática')
@section('descripcion-pagina', 'La Olimpiada Morelense de Informática es un concurso que busca a los mejores talentos de Morelos para enseñarles el arte de la programación')
@section('titulo-og', 'Olimpiada Morelense de Informática | Aprende a programar')
@section('descripcion-og', 'La Olimpiada Morelense de Informática es un concurso que busca a los mejores talentos de Morelos para enseñarles el arte de la programación')
@section('descripcion-tc', 'La Olimpiada Morelense de Informática es un concurso que busca a los mejores talentos de Morelos para enseñarles el arte de la programación')
@section('descripcion-td', 'La Olimpiada Morelense de Informática es un concurso que busca a los mejores talentos de Morelos para enseñarles el arte de la programación')
@section('contenido')
    @include('complementos.header', ['e'=>route('index')])
    @push('styles')
    	<style>
    		.badge-success{
    			background-color: #40d73b;
    		}
    		.badge-danger{
    			background-color: #d73b3b;
    		}
    		.oro{
    			background: yellow
    		}
    		.plata{
    			background: #d0d0d0;
    		}
    		.bronce{
    			background: #ffb669;
    		}
    	</style>
    @endpush
    <div class="container">
		<div class="m-section">
			<div class="m-section__content">
				<br><br><br><br><br>
				<h4 class="text-center">13a Olimpiada Morelense de Informática </h4>
				<h2 class="text-center">Resultados del {{ date("d-m", strtotime($fecha)) }}</h2>
				<br>
				<ul class="muro-fama nav nav-tabs">
				  	<li role="presentation" class="{{ $categoria == 'abierta' ? 'active' : 'highlighted' }}">
			  			<a href="{{ route('competidores',['categoria'=> 'abierta']) }}">Abierta</a>
			  		</li>
				  	<li class="{{ $categoria == 'secundaria' ? 'active' : 'highlighted' }}" role="presentation">
				  		<a href="{{ route('competidores',['categoria'=> 'secundaria']) }}">Secundaria</a>
				  	</li>
				  	<li class="{{ $categoria == 'primaria' ? 'active' : 'highlighted' }}" role="presentation">
				  		<a href="{{ route('competidores',['categoria'=> 'primaria']) }}">Primaria</a>
				  	</li>
				</ul>
				<table class="table m-table m-table--head-bg-success table-hover">
					<thead>
						<tr>
							<th class="text-center">
								Lugar
							</th>
							<th>
								Olímpico
							</th>
							<th>
								Escuela 
							</th>
							<!--th>
								Municipio
							</th-->
							<th>
								Puntaje prácticas (30%)
							</th>
							<th>
								Examen estatal (70%)
							</th>
							<th class="text-center">
								Total
							</th>
							<th>

							</th>
						</tr>
					</thead>
					<tbody>
					@php
					$i = 0; $ant = -1; $total = count($mapa)-1; 
					$oro = $total/12; $plata = $total/6; $bronce = $total/4;
					if($total == 30){
						$bronce += 2;
					}
					if($total == 33){
						$oro = 4;
						$plata = 7;
						$bronce = 11;
					}
					@endphp
					@foreach($mapa as $ii=>$persona)
					    <tr class="@if($oro>0) lead oro @elseif($plata>0) lead plata @elseif($bronce>0) lead bronce @endif">
						    <td scope="row">
						    	{{ $persona['rank']->posicion == $ant ? $i : $i = $ii+1 }}
						    	@php $ant = $persona['rank']->posicion; @endphp
						    </td>
						    <td>
						    	<img src="{{ asset('public/avatar/'.$persona['rank']->avatar) }}" height="20px"> <a href="{{ route('competidor', $persona['olimpico_folio']) }}"> {{ $persona['olimpico_folio'] }} - {{ $persona['olimpico_nombre'] . " " . $persona['olimpico_apellido'] }}</a><br>
						    	@if($oro>0)
						    		<span class="badge badge-primary">Oro</span>
						    	@elseif($plata>0)
						    		<span class="badge badge-primary">Plata</span>
						    	@elseif($bronce>0)
						    		<span class="badge badge-primary">Bronce</span>
						    	@endif
						    </td>
						    <td>
						    	@if(empty($persona['escuelaC']))
						    		{{ $persona['escuela'] }}
						    	@else
						    		{{ $persona['escuelaC'] }}
						    	@endif
						    </td>
						    <!--td>
						    	{{ $persona['muni'] ?? "" }}
						    </td-->
						    <td>
						    	{{ $persona['ejercicio'] ?? 0 }}
						    </td>
						    <td>
						    	{{ $persona['examen'] ? $persona['examen']." (".number_format($persona['examen']/400*70,2)."%)" : 0 }}
						    </td>
						    <td>
						    	{{ number_format($persona['final'], 2) }}%
							</td>
							<td class="ocultito">
								<a href="{{ route('constancia-participacion', $persona['olimpico_folio']) }}"> Participación - {{ $persona['olimpico_folio'] }}</a>
								<a href="{{ route('reconocimiento-medalla', $persona['olimpico_folio']) }}"> Medalla - {{ $persona['olimpico_folio'] }}</a>
								@if($oro>0)
									
						    		@php $oro--; @endphp
								@elseif($plata>0)
									
						    		@php $plata--; @endphp
								@elseif($bronce>0)

						    		@php $bronce--; @endphp
						    	@endif 
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
			.ocultito{
				display: none;
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