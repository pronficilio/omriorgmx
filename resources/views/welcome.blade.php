@extends('layouts.esqueleto')
@section('title', 'Olimpiada Morelense de Informática')
@section('descripcion-pagina', 'La Olimpiada Morelense de Informática es un concurso que busca a los mejores talentos de Morelos para enseñarles el arte de la programación')
@section('titulo-og', 'Olimpiada Morelense de Informática | Aprende a programar')
@section('descripcion-og', 'La Olimpiada Morelense de Informática es un concurso que busca a los mejores talentos de Morelos para enseñarles el arte de la programación')
@section('descripcion-tc', 'La Olimpiada Morelense de Informática es un concurso que busca a los mejores talentos de Morelos para enseñarles el arte de la programación')
@section('descripcion-td', 'La Olimpiada Morelense de Informática es un concurso que busca a los mejores talentos de Morelos para enseñarles el arte de la programación')
@section('contenido')
    <div id="fb-root"></div>
    @include('complementos.header', ['e'=>''])
    @include('complementos.banner')
    @include('complementos.inscripcion')
    @include('complementos.miembro')
    @include('complementos.concurso')
    @include('complementos.causa')
    {{-- _include('complementos.proyecto') --}}
    @include('complementos.noticia')
    @include('complementos.acercade')
    {{-- _include('complementos.sponsor') --}}
    @include('complementos.contacto')
@endsection