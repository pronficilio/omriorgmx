@extends('layouts.esqueleto')
@section('title', 'Aviso de privacidad')
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
            <h1>Aviso de privacidad</h1>
            <br>
        </div>
        <div style="text-align: justify" >
            <p>
                De conformidad con lo previsto en la Ley Federal de Protección de Datos Personales en Posesión de los Particulares (en lo sucesivo denominada como "la Ley"), nos permitimos solicitarle leer cuidadosamente los Términos y Condiciones contenidos en este documento, ya que la simple aportación que haga de sus datos Personales o Datos Sensibles constituye la aceptación de estos Términos y Condiciones: <br><br>
                1. La Olimpiada Morelense de Informática será responsable de los datos personales de conformidad a lo dispuesto por la fracción I del artículo 16 de la Ley, con domicilio Arroyo Claro #123 col. Arroyos de Xochitepec, Xochitepec, Morelos. CP 62790 tel.: (777) 534-4338, es responsable de recabar sus datos personales, del uso que se le dé a los mismos y de su protección <br><br>
                2. Los términos "Datos Personales" y "Datos Sensibles" tendrán el significado que se les atribuye en el artículo 3 de la Ley. <br><br>
                3. Los Datos Personales y/o Datos Sensibles que usted pueda proporcionar al Responsable tendrán el uso que en forma enunciativa pero no limitativa se describe a continuación: <br>
                <div style="margin-left:20px;">Su información personal será utilizada para proveer los servicios y productos que ha solicitado, así como informarle sobre cambios en los mismos y evaluar la calidad del servicio que le brindamos. Para la finalidad antes mencionad, requerimos obtener los siguientes datos personales: Nombre, Apellidos, Nombre de la Empresa, teléfono, correo electrónico y dirección considerados como sensible según la Ley Federal de Protección de Datos Personales en Posesión de los Particulares.<br><br></div>
                4. Una vez que usted entregue al Responsable sus Datos Personales o Datos Sensibles, le manifestamos que estos serán conservados en diferentes medios seguros que la tecnología permita, cuyo acceso estará limitado solamente a las personas físicas y/o morales con la que el Responsable tenga alguna relación jurídica. El Responsable contará con las medidas de seguridad que considere adecuadas para proteger el uso de sus Datos Personales y/o Datos Sensibles por parte de terceros no autorizados. En caso de requerimiento de alguna autoridad, los datos Personales y/o Datos Sensibles podrán ponerse a disposición de éstas, dentro del estricto cumplimiento a la Ley. <br><br>
                5. El tratamiento de sus datos Personales, que se han puesto a disposición del Responsable bajo cualquier forma o circunstancia, de conformidad con los presentes términos y condiciones, por lo que desde este momento se entiende que usted autoriza expresamente al Responsable para tal efecto, hasta en tanto usted manifieste su oposición mediante alguno de los medios que indica la Ley. <br><br>
                6. Usted tendrá en todo momento el acceso a sus Datos Personales y/o Datos Sensibles, ya sea para solicitar su rectificación, cancelación u oposición de conformidad con lo dispuesto en la Ley, en forma escrita, electrónica, telefónica o dirigiendo su mensaje a la dirección info@omri.org.mx o visitar nuestra página de Internet http://omri.org.mx/ según corresponda. Para lo anterior, deberá hacernos saber fehacientemente los Datos Personales y/o Datos Sensibles que usted desea sean rectificados, cancelados o revisados, así como el propósito para el cual los aportó y el nombre del Responsable a quien se los entregó y en general cumplir los requisitos mencionados en el art. 29 de la Ley. <br><br>
                7. Tratándose de sus Datos Sensibles, usted tendrá derecho a que el Responsable le informe sobre cualesquier transferencias que llegare a efectuar de los mismos a cualquier tercero, y para ello le será notificada tal acción por cualquier medio, ya sea escrito, telefónico, electrónico, óptico, sonoro, visual o cualquier otro que la tecnología permita ahora o en lo futuro. De darse el caso, usted tendrá derecho a oponerse a ello, debiendo seguir el proceso mencionado en el punto inmediato anterior. <br><br>
                8. En el caso de que el Responsable requiera usar sus Datos Personales y/o Datos Sensibles con fines diferentes a los señalados en el presente Aviso de Privacidad, contactará con usted ya sea en forma escrita, telefónica, electrónica, o por cualquier medio óptico, sonoro, visual u otro que la tecnología permita ahora o en lo futuro y le explicará los nuevos usos que pretenda darle a dicha información a fin de recabar su autorización. <br><br>
                9. Tratándose de Datos Sensibles, usted deberá proporcionar al Responsable su consentimiento expreso y por escrito para su tratamiento, a través de su firma autógrafa, firma electrónica, o cualquier mecanismo de autenticación que al efecto se establezca. <br><br>
                10. Cualquier modificación a este aviso de privacidad podrá consultarla en nuestra página web <a href="http://omri.org.mx/aviso-de-privacidad">http://omri.org.mx/aviso-de-privacidad</a>
                </p>
        </div>
    </div>
    @include('complementos.contacto')
@endsection
@push('scripts')
    <script>gtag('event', 'screen_view', {'screen_name': 'aviso-de-privacidad'});</script>
@endpush