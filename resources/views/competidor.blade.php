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
				<h4>Datos del olímpico</h4>
				<table>
					<tr>
						<td><img src={{ asset('./storage/app/public/selfies/'.$competidor['id'].'.jpg')}} height="250px" style="border-radius: 10px;"></td>
						<td style="padding: 16px; font-size:25px;">{{ $competidor['nombre'].' '.$competidor['apellido'].' '}}<a href={{'https://omegaup.com/profile/'.$competidor['usuario_omega'].'/'}} target="_blank"><img src="{{asset('images/icons/omega.png')}}" height="25px"></a><br><br>
							<br><br><br>
						</td>
					</tr>
					<tr>
					</tr>
				</table>
				<br><br>
				<table class="table">
					<thead class="verde-OMRI">
						<tr>
							<th>
								Lugar
							</th>
							<th>
								Municipio
							</th>
							<th>
								Medalla
							</th>
							<th>
								Escuela
							</th>
							<th>
								Categoría
							</th>
						</tr>
					</thead>
					<tbody>
					    <tr>
						    <td>{{ $desempeno['lugar'] }}</td> <td>Cuernavaca{{-- $competidor['municipio'] --}}</td> <td>{{ $desempeno['medalla'] }}</td> <td>ESCUELA EN CASA{{-- $competidor['escuela'] --}}</td> <td>{{ $competidor['categoria'] }}</td>
						</tr>   	
					</tbody>
				</table>
			</div>
		</div>
	</div>	
    @include('complementos.contacto')
@endsection
@push('styles')
        <style>
			.table tr th tr{
				border: 2px solid black;
			}

			.verde-OMRI{
				background: #84C229;
				color: black; 
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

			.filter-green{
				filter: invert(66%) sepia(82%) saturate(439%) hue-rotate(37deg) brightness(92%) contrast(83%);
		    }
        </style>
@endpush
