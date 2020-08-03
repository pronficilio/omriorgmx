@extends('layouts.esqueleto')
@section('title', 'Nosostros')
@section('descripcion-pagina', 'La Olimpiada Morelense de Informática es un concurso que busca a los mejores talentos de Morelos para enseñarles el arte de la programación')
@section('titulo-og', 'Olimpiada Morelense de Informática | Aprende a programar')
@section('descripcion-og', 'La Olimpiada Morelense de Informática es un concurso que busca a los mejores talentos de Morelos para enseñarles el arte de la programación')
@section('descripcion-tc', 'La Olimpiada Morelense de Informática es un concurso que busca a los mejores talentos de Morelos para enseñarles el arte de la programación')
@section('descripcion-td', 'La Olimpiada Morelense de Informática es un concurso que busca a los mejores talentos de Morelos para enseñarles el arte de la programación')
@section('contenido')
    @include('complementos.header', ['e'=>route('index')])
    @include('complementos.miembro')
	@include('complementos.acercade')
	@include('complementos.causa')
	@include('complementos.noticia')
    @include('complementos.contacto')
@endsection
@push('scripts')
    <script>gtag('event', 'screen_view', {'screen_name': 'nosotros'});</script>
@endpush