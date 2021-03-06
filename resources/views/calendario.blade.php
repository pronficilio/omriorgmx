@extends('layouts.esqueleto')
@section('title', 'Calendario')
@section('descripcion-pagina', 'La Olimpiada Morelense de Informática es un concurso que busca a los mejores talentos de Morelos para enseñarles el arte de la programación')
@section('titulo-og', 'Olimpiada Morelense de Informática | Aprende a programar')
@section('descripcion-og', 'La Olimpiada Morelense de Informática es un concurso que busca a los mejores talentos de Morelos para enseñarles el arte de la programación')
@section('descripcion-tc', 'La Olimpiada Morelense de Informática es un concurso que busca a los mejores talentos de Morelos para enseñarles el arte de la programación')
@section('descripcion-td', 'La Olimpiada Morelense de Informática es un concurso que busca a los mejores talentos de Morelos para enseñarles el arte de la programación')
@section('contenido')
    @include('complementos.header', ['e'=>route('index')])
    <div style="height: 10%;"><br><br><br><br><br></div>
    
    <div class="container">
        <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%237CB342&amp;ctz=America%2FMexico_City&amp;src=cHJvbmZpY2lsaW9AZ21haWwuY29t&amp;src=Y3U4Nmp0aGI3cWRpczRwa2M4OTMzcXE3MWNAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%23039BE5&amp;color=%23F09300&amp;title=13a%20Olimpiada%20Morelense%20de%20Inform%C3%A1tica&amp;showCalendars=0&amp;showTabs=0&amp;showPrint=0&amp;showDate=1&amp;showTz=0" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
    </div>
    @include('complementos.contacto')
@endsection
@push('scripts')
    <script>gtag('event', 'screen_view', {'screen_name': 'calendario'});</script>
@endpush