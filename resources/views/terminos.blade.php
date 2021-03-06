@extends('layouts.esqueleto')
@section('title', 'Términos y condiciones')
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
            <h1>Política de términos y condiciones 13a Olimpiada Morelense de Informática</h1>
            <br>
        </div>
        
        <div style="text-align: justify" >
            <p>Esta página web es propiedad y está operado por Olimpiada Morelense de Informática. Estos Términos establecen los términos y condiciones bajo los cuales puedes usar nuestra página web y servicios ofrecidos por nosotros. Esta página web ofrece a los visitantes información acerca de la Olimpiada Morelense de Informática desde sus inicos, cómo funciona el concurso y sus etapas, nuestros objetivos, las diferentes iniciativas para apoyar con donaciones, nuestro equipo, las últimas noticias de la comunidad OMRI, eventos próximos y nuestras diferentes formas de contacto. </p>
            <p>Los Términos son un acuerdo legal que controla el uso de la página web por los visitantes y usuarios de los servicios. Al acceder o usar la página web de nuestro servicio, usted aprueba que haya leído, entendido y aceptado estar sujeto a estos Términos:</p>
            <ol>
                <li>Para usar nuestra página web y / o recibir nuestros servicios, debe tener al menos 6 años de edad, y tener a un tutor que cumpla con la mayoría de edad legal, y poseer la autoridad legal, el derecho y la libertad para participar en estos Términos como un acuerdo vinculante. No tiene permitido utilizar esta página web y / o recibir servicios si vive o estudia fuera del Estado de Morelos pues la OMRI está enfocada en los chicos y chicas morelenses.</li>
                <li>Al comprar un artículo OMRI, aceptas que: </li>
                <dl>
                    <dt>a) Eres responsable de revisar las características completas del artículo antes de comprometerte a comprarlo: en el caso de comprar una playera, revisar que el diseño y la talla son los que deseas. Cuando se compra una mochila, revisar que los cierres y bolsillos sean funcionales. </dt>
                    <dt>b) Celebras un contrato legalmente vinculante para comprar un artículo cuando te comprometes a comprar un artículo y completar el proceso de compra al hacer el pago total de la mercancía.</dt>
                </dl>
                <dl>Los precios que cobramos por usar nuestros servicios se enumeran en el documento de la convocatoria. Los precios para nuestros productos se darán a conocer por medio del sitio web cuando haya un catálogo de productos disponibles o directamente en nuestra sede, al momento en que reanudemos actividades presenciales.</dl>
                <dl>Nos reservamos el derecho de cambiar nuestros precios para los productos que se muestran en cualquier momento y de corregir los errores de precios que pueden ocurrir inadvertidamente.</dl>
                <dl>La tarifa por los servicios y cualquier otro cargo que pueda incurrir en relación con tu uso del servicio, se cobrarán mediante el pago total del servicio, o productos, en una sola exhibición.</dl>
                <dl>Información adicional sobre precios puede ser obtenida por medio de nuestras diferentes redes sociales como métodos de contacto o directamente a nuestro correo <strong>info@omri.org.mx.</strong></dl>
                <li>Devoluciones y reembolsos: para obtener la constancia de participación es necesario cubrir el pago total de la misma. Si el pago ya fue efectuado, no habrá un reembolso pues a partir de dicha cuota, nosotros adquirimos material o invertimos en nuestra organización para poder mejorar nuestro servicio.</li>
                <dl>En cuanto a los artículos como mochilas, playeras, entre otros, no ex, si es necesario realizar un cambio por malas condiciones del producto o su mal funcionamiento, éste deberá realizarse en los 14 días posteriores a la fecha que se recibió el producto, y lo cambiaremos u ofreceremos un reembolso basado en la cantidad del costo original, siempre y cuando se presente un comprobante de pago.</dl>
                <li>Nos reservamos el derecho a cambiar de oferta. Podemos, sin aviso previo, cambiar el método en que se ofrecen servicios; dejar de proporcionar cierto servicio o cualquier característica del servicio que ofrecemos; o crear límites para el mismo. Podemos  suspender de manera permanente o temporal el acceso al servicio sin previo aviso ni responsabilidad por cualquier motivo, o sin ningún motivo.</li>
                <li>Posesión de propiedad intelectual, derechos de autor y logos: El Servicio y todos los materiales incluidos o transferidos, incluyendo, sin limitación, software, imágenes, texto, gráficos, logotipos, patentes, marcas registradas, marcas de servicio, derechos de autor, fotografías, audio, videos, música y todos los Derechos de Propiedad Intelectual relacionados con ellos, son la propiedad exclusiva de la Olimpiada Morelense de Informática. Salvo que se indique explícitamente en este documento, no se considerará que nada en estos Términos crea una licencia en o bajo ninguno de dichos Derechos de Propiedad Intelectual, y tu aceptas no vender, licenciar, alquilar, modificar, distribuir, copiar, reproducir, transmitir, exhibir públicamente, realizar públicamente, publicar, adaptar, editar o crear trabajos derivados de los mismos.</li>
                <li>Derecho a suspender o cancelar la cuenta de usuario: Podemos terminar o suspender de manera permanente o temporal tu acceso al servicio sin previo aviso y responsabilidad por cualquier razón, incluso si a nuestra sola determinación viola alguna disposición de estos Términos o cualquier apartado del reglamento aplicable a la Olimpiada en curso.</li>        
            </ol>
            
            <p><strong>Atentamente</strong></p>
            <p><strong>Isaí Landa Ortega</strong></p>
            <p><strong>Líder del Comité Técnico de la OMRI</strong></p>
        </div>
    </div>
    @include('complementos.contacto')
@endsection
@push('scripts')
    <script>gtag('event', 'screen_view', {'screen_name': 'terminos-y-condiciones'});</script>
@endpush