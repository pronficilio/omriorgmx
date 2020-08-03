@extends('layouts.esqueleto')
@section('title', 'Reglamento')
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
            <h1>Reglamento 13ª Olimpiada Morelense de Informática</h1>
            <br>
        </div>
        
        <div style="text-align: justify" >
            <p><strong>FUNDAMENTACIÓN</strong></p>
            <p>El Reglamento establece el conjunto de normas que regulan los deberes de todos los participantes en la 13a Olimpiada Morelense de Robótica e Informática. Además, tiene como objetivo asegurar el normal desarrollo de las actividades estudiantiles a lo largo de la convocatoria y de la Olimpiada.</p>
            <p><strong>ASISTENCIA</strong></p>
            <p>Debido a la situación que se vive actualmente por la pandemia de COVID-19, la modalidad de la Olimpiada será online, no habrá clases presenciales. Sin embargo, tampoco habrá clases virtuales, hemos preparado videos para que cada alumno pueda avanzar a su ritmo. Semanalmente, el día sábado se realizará una reunión virtual para aclarar dudas que no hayan podido ser resueltas con ayuda de los videos o por medio del Foro OMRI.</p>
            <p><strong>OBLIGACIONES</strong></p>
            <ul>
				<li>Los participantes deberán registrarse con una sola cuenta; los registros múltiples no serán validados.</li>
				<li>Los olímpicos deberán hacer el pago correspondiente para obtener su constancia, en caso contrario solo podrán realizar el curso sin obtener evidencia de haber participado.</li>
				<li>El alumnado debe respetar a los asesores y personal administrativo con los que se comunique durante la Olimpiada. Del mismo modo, el alumno tiene derecho a ser respetado por sus asesores y personal en general. </li>
				<li>El alumno que falte al respeto a cualquiera de ellos será acreedor a una amonestación, teniendo dos como límite y a la tercera falta será descalificado.</li>
				<li>Los olímpicos incurrirán en falta gravísima si hacen uso de la plataforma o redes sociales de la OMRI para: ofender, amenazar o desprestigiar a cualquier integrante de la comunidad olímpica. Esta falta será causal de expulsión de la Olimpiada sin derecho a reembolso por la constancia de participación en caso de haberla pagado.</li>
				<li>La deshonestidad competitiva va en contra de los valores de la Olimpiada por lo que, si alguno de los olímpicos es sorprendido presentando códigos o actividades plagiadas, será descalificado.</li>
				<li>En todos los casos no previstos por este Reglamento la decisión de las acciones a tomar serán responsabilidad del Comité Técnico de la OMRI. </li>
			</ul> 
            
            <p><strong>Atentamente</strong></p>
            <p><strong>Isaí Landa Ortega</strong></p>
            <p><strong>Líder del Comité Técnico de la OMRI</strong></p>
        </div>
    </div>
    @include('complementos.contacto')
@endsection
@push('scripts')
    <script>gtag('event', 'screen_view', {'screen_name': 'reglamento'});</script>
@endpush