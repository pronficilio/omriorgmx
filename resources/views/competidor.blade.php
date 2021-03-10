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
				<h4 class="text-center">Olimpiada Morelense de Informática </h4>
				<h4>{{-- $documentos[13] --}}</h4>
				<div class="row">
					<div class="col-md-6">
						<table class="foto_olimpico">
							<tr>
								<td><h4>{{ $competidor['nombre'].' '.$competidor['apellido'].' '}}</h4></td>
							</tr>
							<tr>
								<td>
									<img src="{{  (file_exists(storage_path('app/public/selfies/').$competidor['id'].'.jpg')) ? asset('./storage/app/public/selfies/'.$competidor['id'].'.jpg') : asset('./storage/app/public/entreneitor.png')}}" height="250px" style="border-radius: 10px;">
								</td>
							</tr>
							<!--tr>
								<td>
									<a href={{--'https://omegaup.com/profile/'.$competidor['usuario_omega'].'/'--}} target="_blank">
									<img src="{{--asset('images/icons/omega_2.png')--}}" height="35px">
									</a>
								</td>
							</tr-->
						</table>
					</div>
					<div class="col-md-6">
						<br>
						<table class="table">
							<thead class="verde-OMRI">
								<tr>
									<th>
										Documento
									</th>
									<th>
										Descarga
									</th>
								</tr>
							</thead>
							<tbody>
								@foreach($archivos as $_anio=>$_files)
									<tr>
										<th colspan="2">
											<strong><big>{{ $_anio }} Olimpiada Morelense de Informática</big></strong>
										</th>
									</tr>
									@foreach($_files as $i=>$f)
									<tr>
										<td style="padding-left: 20px;">
											{{ $f }}
										</td>
										<td>
											<a href="{{ asset('./storage/app/public/constancias/'.$competidor['id'].'/'.$_anio.'/'.$losArchivos[$_anio][$i]) }}" download="{{$f}}">
												Descargar
											</a>
										</td>
									</tr>
									@endforeach
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
				<br>
				<table class="table">
					<thead class="verde-OMRI">
						<tr>
							<th>
								Lugar
							</th>
							<th>
								Año
							</th>
							<!--th>
								Municipio
							</th-->
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
						@foreach($desempenos as $desempeno)
							<tr>
								<td>{{ $desempeno['lugar'] }}</td> <td>{{ $desempeno['anio'] }}</td> <!--td>{{-- $competidor['municipio'] --}}</td--> <td>{{ $desempeno['medalla'] }}</td> <td>{{ $desempeno['escuela'] }}</td> <td>{{ $desempeno['categoria'] }}</td>
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
			.table tr th tr{
				border: 2px solid black;
			}

			.foto_olimpico td{
				text-align: left;
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
