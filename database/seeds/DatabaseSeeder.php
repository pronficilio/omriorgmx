<?php

use Illuminate\Database\Seeder;
use App\Municipio;
use App\Miembro;
use App\Banner;
use App\Causa;
use App\Evento;
use App\Escuela;
use App\Noticia;
use App\Proyecto;
use App\Sponsor;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(MiembroTableSeeder::class);
        $this->call(BannerTableSeeder::class);
        $this->call(CausaTableSeeder::class);
        $this->call(EventoTableSeeder::class);
        $this->call(NoticiaTableSeeder::class);
        $this->call(ProyectoTableSeeder::class);
        $this->call(SponsorTableSeeder::class);
        $this->call(MunicipioTableSeeder::class);
        $this->call(EscuelaTableSeeder::class);
        $this->command->info("Semilla plantada");
    }
}
class MunicipioTableSeeder extends Seeder {
  public function run(){
    Municipio::create([
        'nombre' => 'Amacuzac'
    ]);
    Municipio::create([
        'nombre' => 'Atlatlahucan'
    ]);
    Municipio::create([
        'nombre' => 'Axochiapan'
    ]);
    Municipio::create([
        'nombre' => 'Ayala'
    ]);
    Municipio::create([
        'nombre' => 'Coatetelco'
    ]);
    Municipio::create([
        'nombre' => 'Coatlán del Río'
    ]);
    Municipio::create([
        'nombre' => 'Cuautla'
    ]);
    Municipio::create([
        'nombre' => 'Cuernavaca'
    ]);
    Municipio::create([
        'nombre' => 'Emiliano Zapata'
    ]);
    Municipio::create([
        'nombre' => 'Hueyapan'
    ]);
    Municipio::create([
        'nombre' => 'Huitzilac'
    ]);
    Municipio::create([
        'nombre' => 'Jantetelco'
    ]);
    Municipio::create([
        'nombre' => 'Jiutepec'
    ]);
    Municipio::create([
        'nombre' => 'Jojutla'
    ]);
    Municipio::create([
        'nombre' => 'Jonacatepec'
    ]);
    Municipio::create([
        'nombre' => 'Mazatepec'
    ]);
    Municipio::create([
        'nombre' => 'Miacatlán'
    ]);
    Municipio::create([
        'nombre' => 'Ocuituco'
    ]);
    Municipio::create([
        'nombre' => 'Puente de Ixtla'
    ]);
    Municipio::create([
        'nombre' => 'Temixco'
    ]);
    Municipio::create([
        'nombre' => 'Temoac'
    ]);
    Municipio::create([
        'nombre' => 'Tepalcingo'
    ]);
    Municipio::create([
        'nombre' => 'Tepoztlán'
    ]);
    Municipio::create([
        'nombre' => 'Tetecala'
    ]);
    Municipio::create([
        'nombre' => 'Tetela del Volcán'
    ]);
    Municipio::create([
        'nombre' => 'Tlalnepantla'
    ]);
    Municipio::create([
        'nombre' => 'Tlaltizapán de Zapata'
    ]);
    Municipio::create([
        'nombre' => 'Tlaquiltenango'
    ]);
    Municipio::create([
        'nombre' => 'Tlayacapan'
    ]);
    Municipio::create([
        'nombre' => 'Totolapan'
    ]);
    Municipio::create([
        'nombre' => 'Xochitepec'
    ]);
    Municipio::create([
        'nombre' => 'Xoxocotla'
    ]);
    Municipio::create([
        'nombre' => 'Yautepec'
    ]);
    Municipio::create([
        'nombre' => 'Yecapixtla'
    ]);
    Municipio::create([
        'nombre' => 'Zacatepec'
    ]);
    Municipio::create([
        'nombre' => 'Zacualpan de Amilpas'
    ]);
  }
}
class UserTableSeeder extends Seeder {
	public function run(){
		User::create([
			'name' => "admin",
			'email' => "info@omri.org.mx",
			'password' => Hash::make('ikb4n45')
		]); // 12345678
	}
}
class MiembroTableSeeder extends Seeder {
	public function run(){
		Miembro::create([
			'nombre' => "Isaí Landa",
			'puesto' => "Presidente",
      'pensamiento' => 'El secreto de la felicidad: encuentra algo más grande que tú y dedica tu vida a ello',
      'orden' => 1
		]);

    Miembro::create([
			'nombre' => "Alexis España",
			'puesto' => "Secretario",
      'pensamiento' => 'Programar es decirle a la computadora que haga realiad todo aquello que imaginas',
      'orden' => 2
		]);

    Miembro::create([
			'nombre' => "Jorge Romero",
			'puesto' => "Miembro fundador",
      'pensamiento' => 'Saber programar te abre un lienzo infinito de posibilidades',
      'orden' => 5
		]);
    Miembro::create([
      'nombre' => "Fernando Solano",
      'puesto' => "Tesorero",
      'pensamiento' => '¿Sabes cual es el problema? Imaginar el algoritmo y no programarlo',
      'orden' => 8
    ]);
    Miembro::create([
      'nombre' => "André",
      'puesto' => "Entrenador C/C++",
      'pensamiento' => 'La programación cambió mi vida para bien, y espero cambiar la de los demás a través de ella',
      'orden' => 3
    ]);
    Miembro::create([
      'nombre' => "Gandy",
      'puesto' => "Desarrollador / Asesor",
      'pensamiento' => 'Dominar el arte de la programación tiene muy buenos resultados, pero requiere esfuerzo. ¡Esfuérzate!',
      'orden' => 6
    ]);
    Miembro::create([
      'nombre' => "Mariana de la Rosa",
      'puesto' => "Vinculación",
      'pensamiento' => 'En un futuro cercano, programar será igual de importante que saber hablar inglés',
      'orden' => 7
    ]);
    Miembro::create([
      'nombre' => "Diego Tableros",
      'puesto' => "Entrenador Karel/C",
      'pensamiento' => 'Yo solo C que C C',
      'orden' => 4
    ]);
	}
}
class BannerTableSeeder extends Seeder {
	public function run(){
		Banner::create([
			'titulo' => "",
			'texto' => "",
			'link1' => "#inscripcion",
			'link2' => null
		]);
    Banner::create([
			'titulo' => "",
			'texto' => "",
			'link1' => "",
			'link2' => ""
		]);
	}
}
class CausaTableSeeder extends Seeder {
	public function run(){
		Causa::create([
			'titulo' => "Inscripción al nacional",
			'acumulado' => 0,
			'cant_donaciones' => 0,
			'meta' => 52400,
      //'link1' => "https://github.com/",
      //'link2' => "https://github.com/pronficilio",
      'detalle_titulo' => "Pago del concurso nacional",
      'detalle_texto' => "Morelos se ha posicionado en el top 15 a nivel nacional y hemos participado de forma ininterrumpida desde 2009. Creemos que el costo de la representación morelense <strong>NO</strong> debe caer en los competidores ni en sus padres."
		]);

    Causa::create([
			'titulo' => "Boletos de avión",
			'acumulado' => 2000,
			'cant_donaciones' => 1,
			'meta' => 10000,
      //'link1' => "https://github.com/",
      //'link2' => "https://github.com/pronficilio",
      'detalle_titulo' => "Transporte a Zacatecas para la competencia Nacional",
      'detalle_texto' => "Los competidores morelenses tendrán que tomar un avión en CDMX para la competencia. El boleto por cada uno será aproximadamente 1000 pesos, 2 entrenadores, 8 competidores."
		]);

    Causa::create([
      'titulo' => "Premios",
      'acumulado' => 0,
      'cant_donaciones' => 0,
      'meta' => 20000,
      //'link1' => "https://github.com/",
      //'link2' => "https://github.com/pronficilio",
      'detalle_titulo' => "Premios para los mejores participantes del concurso Estatal",
      'detalle_texto' => "Laptops, tablets, smartphone para los primeros lugares de cada categoría. Si puedes ayudarnos con equipo por favor escribenos, estamos premiando a los mejores y nuestros resultados indican que los podemos identificar y potenciar"
    ]);

    Causa::create([
			'titulo' => "Gastos administrativos",
			'acumulado' => 10000,
			'cant_donaciones' => 3,
			'meta' => 27000,
      //'link1' => "https://github.com/",
      //'link2' => "https://github.com/pronficilio",
      'detalle_titulo' => "Pago de servicios",
      'detalle_texto' => "Contadores, diseñadores, programadores, maestros, publicidad, servicios en la nube... La OMRI no recibe ayuda gubernamental y mantenemos este proyecto por amor al arte. Cualquier ayuda sería una carga menos para nosotros"
		]);
	}
}
class EventoTableSeeder extends Seeder {
	public function run(){
		Evento::create([
			'titulo' => "Pregúntale a André",
			'fecha' => "2020/08/08",
			'texto' => "André y Jorge resolverán tus dudas acerca de la OMRI",
			'link' => "",
      'detalle_titulo' => "André y Jorge resolverán tus dudas acerca de la OMRI",
      'detalle_texto' => "André Curiel será tu asesor durante esta olimpiada online. El día 8 de agosto en punto de las 11 de la mañana, André acompañado de Jorge Quiroz (ganador de 2 medallas en la última olimpiada), te resolverán tus dudas acerca de todo lo que necesites saber sobre esta olimpiada a través de un 'en vivo' desde la plataforma de Facebook. ¡Tienes una cita con ellos!"
		]);

    Evento::create([
			'titulo' => "¿Te gustaría recibir la playera OMRI oficial? ",
			'fecha' => "2020/09/10",
			'texto' => "En Septiembre se regalarán playeras",
			'link' => "",
      'detalle_titulo' => "¿Te gustaría recibir la playera OMRI oficial?",
      'detalle_texto' => "Como incentivo a nuestros olímpicos más destacados durante el proceso de aprendizaje, estaremos regalando playeras y algunos souvenirs. Y como sabemos que no puedes salir de casa, los llevaremos a la puerta de tu hogar. ¡Estate muy pendiente de nuestras redes sociales!"
		]);
    Evento::create([
      'titulo' => "Último día para registrarse",
      'fecha' => "2020/09/13",
      'texto' => "Y la competencia arranca",
      'link' => "",
      'detalle_titulo' => "Último día para registrarse",
      'detalle_texto' => "A partir de este momento, caminaremos todos juntos en un terreno desconocido pero divertido, ¡todo el mundo debería aprender a programar!"
    ]);
	}
}

class NoticiaTableSeeder extends Seeder {
	public function run(){
    Noticia::create([
      'titulo' => "¡Invítanos a tu escuela!",
      'fecha' => "2019/11/01",
      'texto' => "¿Te gustaría llevar al equipo OMRI a tu escuela?",
      'link' => "#contacto",
      'detalle_titulo' => "¿Te gustaría llevar al equipo OMRI a tu escuela?",
      'detalle_texto' => "Durante 11 años hemos ido en búsqueda de los mejores talentos en Morelos. En las escuelas de gobierno, colegios particulares, planteles e instituciones hemos encontrado y capacitado a quienes nos han representado a nivel Nacional, y que hoy posiciona a Morelos en el lugar 12. Todo esto, ha sido un triunfo colectivo, la voluntad de los alumnos es solo proporcional al apoyo de sus grandes maestros."
    ]);

    Noticia::create([
      'titulo' => "Libros interactivos con Realidad Aumentada",
      'fecha' => "2019/10/12",
      'texto' => "Olímpicos recibiendo donativos.",
      'link' => "",
      'detalle_titulo' => "Olímpicos recibiendo libros interactivos con Realidad Aumentada",
      'detalle_texto' => "Gracias a un donativo, los olímpicos interactuaron con la Realidad Aumentada. La RA, aprovecha la tecnología para fomentar la lectura. En ella, los personajes y los escenarios de los libros cobran vida, lo que permitió a los olímpicos interactuar y vivir las historias que se relatan de una forma más atractiva. Desde la cámara de un celular, se apreciaban animaciones que daban diversión a las historias relatadas."
    ]);

    Noticia::create([
      'titulo' => "Queremos acercar a nuestros hijos al mundo de la programación y darles herramientas para su futuro",
      'fecha' => "2019/09/14",
      'texto' => "Más de 200 padres de familia reunidos",
      'link' => "",
      'detalle_titulo' => "Más de 200 padres de familia reunidos",
      'detalle_texto' => "En el Tec de Monterrey campus Cuernavaca, un grupo de alrededor de 200 padres de familia, se reunieron con el propósito de impulsar a sus hijos a superarse mediante la tecnología. La Olimpiada de Informática, abre las puertas a todo aquel joven y niño que desee aprender a programar, sin embargo, es muy importante contar con el fiel apoyo de un tutor, maestro o padre de familia que lo impulse a seguir sus sueños, perseguir ilusiones y lograr sus metas. La más valiosa herencia es el conocimiento"
    ]);
    Noticia::create([
      'titulo' => "Cambio de fecha del concurso nacional",
      'fecha' => "2020/03/23",
      'texto' => "Aviso de nuevas fechas para la Olimpiada Mexicana de Informática 2020",
      'link' => "https://www.olimpiadadeinformatica.org.mx",
      'detalle_titulo' => "Más de 200 padres de familia reunidos",
      'detalle_texto' => "El COMI ha venido siguiendo la evolución de la Pantemia del COVID-19, en México y en el Mundo y en consideración a esta y su impacto en la salud de nuestra sociedad, hemos decidido postponer la OMI 2020 para que sea realizada en la misma ciudad de Zacatecas, Zacatecas, del día 8 al 13 de octubre de 2020. "
    ]);
  }
}

class ProyectoTableSeeder extends Seeder {
	public function run(){
    Proyecto::create([
      'titulo' => "Torneo Universidades",
      'fecha' => "2020/02/14",
      'texto' => "Concurso PRO",
      'link1' => "https://www.omri.org.mx",
      'link2' => "https://www.omri.org.mx"
    ]);

    Proyecto::create([
      'titulo' => "Torneo Universidades otoño",
      'fecha' => "2020/09/14",
      'texto' => "Concurso PRO en otoño",
      'link1' => "https://www.omri.org.mx",
      'link2' => "https://www.omri.org.mx"
    ]);

    Proyecto::create([
      'titulo' => "Torneo Universidades invierno",
      'fecha' => "2021/02/14",
      'texto' => "Concurso PRO en invierno",
      'link1' => "https://www.omri.org.mx",
      'link2' => "https://www.omri.org.mx"
    ]);
  }
}

class SponsorTableSeeder extends Seeder {
	public function run(){
    Sponsor::create([
      'nombre' => "MC Cornick",
      //'link' => "https://www.google.com"
    ]);

    Sponsor::create([
      'nombre' => "AMD",
      //'link' => "https://www.google.com"
    ]);

    Sponsor::create([
      'nombre' => "Doppio",
      //'link' => "https://www.google.com"
    ]);
  }
}

class EscuelaTableSeeder extends Seeder {
  public function run(){
    //Escuela::create(['nombre' => '232', 'corto' => '']);
    Escuela::create(['nombre' => '12 de Octubre', 'corto' => '']);
    Escuela::create(['nombre' => '2 de Abril', 'corto' => '']);
    Escuela::create(['nombre' => '5 de Mayo de 1862', 'corto' => '']);
    Escuela::create(['nombre' => 'Abraham Lincoln', 'corto' => '']);
    Escuela::create(['nombre' => 'Alvaro Obregon', 'corto' => '']);
    Escuela::create(['nombre' => 'Bachillerato Internacional Uninter', 'corto' => 'BIU']);
    Escuela::create(['nombre' => 'Benemérita Escuela Secundaria No. 1 Profr. Froylán Parroquín García', 'corto' => '']);
    Escuela::create(['nombre' => 'Benito Juárez', 'corto' => '']);
    Escuela::create(['nombre' => 'Centro De Bachillerato Tecnologico Agropecuario No. 154', 'corto' => 'CBTa 154']);
    Escuela::create(['nombre' => 'Centro De Bachillerato Tecnologico Agropecuario No. 155', 'corto' => 'CBTa 155']);
    Escuela::create(['nombre' => 'Centro De Bachillerato Tecnologico Agropecuario No. 190', 'corto' => 'CBTa 190']);
    Escuela::create(['nombre' => 'Centro De Bachillerato Tecnologico Agropecuario No. 39', 'corto' => 'CBTa 39']);
    Escuela::create(['nombre' => 'Centro De Bachillerato Tecnologico Agropecuario No. 8', 'corto' => 'CBTa 08']);
    Escuela::create(['nombre' => 'Centro de Bachillerato Tecnológico Industrial y de Servicios No. 12', 'corto' => 'CBTis 12']);
    Escuela::create(['nombre' => 'Centro de Bachillerato Tecnológico Industrial y de Servicios No. 136', 'corto' => 'CBTis 136']);
    Escuela::create(['nombre' => 'Centro de Bachillerato Tecnológico Industrial y de Servicios No. 166', 'corto' => 'CBTis 166']);
    Escuela::create(['nombre' => 'Centro de Bachillerato Tecnológico Industrial y de Servicios No. 194', 'corto' => 'CBTis 194']);
    Escuela::create(['nombre' => 'Centro de Bachillerato Tecnológico Industrial y de Servicios No. 232', 'corto' => 'CBTis 232']);
    Escuela::create(['nombre' => 'Centro de Bachillerato Tecnológico Industrial y de Servicios No. 76', 'corto' => 'CBTis 76']);
    Escuela::create(['nombre' => 'Centro de Bachillerato Tecnológico Industrial y de Servicios No.128', 'corto' => 'CBTis 128']);
    Escuela::create(['nombre' => 'Centro de Estudios Técnicos en Computación', 'corto' => 'CETEC']);
    Escuela::create(['nombre' => 'Centro de Estudios Tecnológicos, Industriales y de Servicios No. 12', 'corto' => 'CETis 12']);
    Escuela::create(['nombre' => 'Centro de Estudios Tecnológicos, Industriales y de Servicios No. 43', 'corto' => 'CETis 43']);
    Escuela::create(['nombre' => 'Centro de Estudios Tecnológicos, Industriales y de Servicios No. 44', 'corto' => 'CETis 44']);
    Escuela::create(['nombre' => 'Centro de Estudios Tecnológicos, Industriales y de Servicios No. 99', 'corto' => 'CETis 99']);
    Escuela::create(['nombre' => 'Centro Educativo Americano', 'corto' => '']);
    Escuela::create(['nombre' => 'Centro Educativo de Clase Mundial', 'corto' => 'CECM']);
    Escuela::create(['nombre' => 'Centro Educativo Lizardi', 'corto' => 'Lizardi']);
    Escuela::create(['nombre' => 'Centro Educativo Montes de Oca', 'corto' => 'Montes de Oca']);
    Escuela::create(['nombre' => 'Centro Educativo Sofista', 'corto' => '']);
    Escuela::create(['nombre' => 'Centro Empresarial de Estudio Superior', 'corto' => '']);
    Escuela::create(['nombre' => 'Centro Morelense de las Artes', 'corto' => 'CMA']);
    Escuela::create(['nombre' => 'Centro Universitario Americano Del Estado De Morelos', 'corto' => 'CUADEM']);
    Escuela::create(['nombre' => 'Centro Universitario de Morelos', 'corto' => 'CUM']);
    Escuela::create(['nombre' => 'Centro Universitario Morelos de Jantetelco', 'corto' => '']);
    Escuela::create(['nombre' => 'Cingenieros', 'corto' => '']);
    Escuela::create(['nombre' => 'Colegio ABC', 'corto' => 'ABC']);
    Escuela::create(['nombre' => 'Colegio Andersen', 'corto' => 'Andersen']);
    Escuela::create(['nombre' => 'Colegio Boston', 'corto' => 'Boston']);
    Escuela::create(['nombre' => 'Colegio Carmen Salles', 'corto' => 'Carmen Sallés']);
    Escuela::create(['nombre' => 'Colegio Cencalli', 'corto' => 'Cencalli']);
    Escuela::create(['nombre' => 'Colegio Círculo Infantil Valle', 'corto' => 'CIV ']);
    Escuela::create(['nombre' => 'Colegio Compton', 'corto' => 'Compton']);
    Escuela::create(['nombre' => 'Colegio Cristóbal Colón', 'corto' => 'Cristóbal Colón']);
    Escuela::create(['nombre' => 'Colegio Cuernavaca', 'corto' => '']);
    Escuela::create(['nombre' => 'Colegio de Bachilleres del Estado de Morelos EMSAD 06', 'corto' => 'COBAEM EMSAD 06']);
    Escuela::create(['nombre' => 'Colegio de Bachilleres del Estado de Morelos plantel 01', 'corto' => 'COBAEM 01']);
    Escuela::create(['nombre' => 'Colegio de Bachilleres del Estado de Morelos plantel 02', 'corto' => 'COBAEM 02']);
    Escuela::create(['nombre' => 'Colegio de Bachilleres del Estado de Morelos plantel 03', 'corto' => 'COBAEM 03']);
    Escuela::create(['nombre' => 'Colegio de Bachilleres del Estado de Morelos plantel 04', 'corto' => 'COBAEM 04']);
    Escuela::create(['nombre' => 'Colegio de Bachilleres del Estado de Morelos plantel 07', 'corto' => 'COBAEM 07']);
    Escuela::create(['nombre' => 'Colegio de Bachilleres del Estado de Morelos plantel 08', 'corto' => 'COBAEM 08']);
    Escuela::create(['nombre' => 'Colegio de Bachilleres del Estado de Morelos plantel 11', 'corto' => 'COBAEM 11']);
    Escuela::create(['nombre' => 'Colegio de Bachilleres del Estado de Morelos plantel 13', 'corto' => 'COBAEM 13']);
    Escuela::create(['nombre' => 'Colegio de Estudios Científicos y Tecnológicos del Estado Plantel 01', 'corto' => 'CECyTE 01']);
    Escuela::create(['nombre' => 'Colegio de Estudios Científicos y Tecnológicos del Estado Plantel 02', 'corto' => 'CECyTE 02']);
    Escuela::create(['nombre' => 'Colegio de Estudios Científicos y Tecnológicos del Estado Plantel 03', 'corto' => 'CECyTE 03']);
    Escuela::create(['nombre' => 'Colegio de Estudios Científicos y Tecnológicos del Estado Plantel 04', 'corto' => 'CECyTE 04']);
    Escuela::create(['nombre' => 'Colegio de Estudios Científicos y Tecnológicos del Estado Plantel 05', 'corto' => 'CECyTE 05']);
    Escuela::create(['nombre' => 'Colegio de Estudios Científicos y Tecnológicos del Estado Plantel 09', 'corto' => 'CECyTE 09']);
    Escuela::create(['nombre' => 'Colegio de Estudios Científicos y Tecnológicos del Estado Plantel 10', 'corto' => 'CECyTE 10']);
    Escuela::create(['nombre' => 'Colegio Don Bosco', 'corto' => '']);
    Escuela::create(['nombre' => 'Colegio Español de Morelos', 'corto' => '']);
    Escuela::create(['nombre' => 'Colegio Florencia', 'corto' => '']);
    Escuela::create(['nombre' => 'Colegio Francés Motolinia', 'corto' => '']);
    Escuela::create(['nombre' => 'Colegio Hellen Keller', 'corto' => '']);
    Escuela::create(['nombre' => 'Colegio Howard Gardner', 'corto' => '']);
    Escuela::create(['nombre' => 'Colegio Huitzilin', 'corto' => '']);
    Escuela::create(['nombre' => 'Colegio Imperial', 'corto' => '']);
    Escuela::create(['nombre' => 'Colegio La Paz', 'corto' => '']);
    Escuela::create(['nombre' => 'Colegio Lowry', 'corto' => '']);
    Escuela::create(['nombre' => 'Colegio Liceo Agazzi Bombelli', 'corto' => '']);
    Escuela::create(['nombre' => 'Colegio Ludere Victum', 'corto' => '']);
    Escuela::create(['nombre' => 'Colegio Marton', 'corto' => '']);
    Escuela::create(['nombre' => 'Colegio Marymount', 'corto' => '']);
    Escuela::create(['nombre' => 'Colegio México', 'corto' => '']);
    Escuela::create(['nombre' => 'Colegio Moderno de Cuernavaca', 'corto' => '']);
    Escuela::create(['nombre' => 'Escuela Moliere Liceo Franco Mexicano A.C.', 'corto' => 'Moliere']);
    Escuela::create(['nombre' => 'Colegio Monte Albán', 'corto' => '']);
    Escuela::create(['nombre' => 'Colegio Montefalco', 'corto' => '']);
    Escuela::create(['nombre' => 'Colegio Montes de Oca Cuernavaca', 'corto' => '']);
    Escuela::create(['nombre' => 'Colegio Morelos', 'corto' => '']);
    Escuela::create(['nombre' => 'Colegio Morelos de Cuernavaca', 'corto' => '']);
    Escuela::create(['nombre' => 'Colegio Morelos de Jantetelco', 'corto' => '']);
    Escuela::create(['nombre' => 'Colegio Nacional de Educación Profesional', 'corto' => '']);
    Escuela::create(['nombre' => 'Colegio Nacional de Educación Profesional Técnica No. 036', 'corto' => 'CONALEP 036']);
    Escuela::create(['nombre' => 'Colegio Nacional de Educación Profesional Técnica No. 173', 'corto' => 'CONALEP 173']);
    Escuela::create(['nombre' => 'Colegio Nacional de Educación Profesional Técnica No. 241', 'corto' => 'CONALEP 241']);
    Escuela::create(['nombre' => 'Colegio Nacional de Educación Profesional Técnica No. 283', 'corto' => 'CONALEP 283']);
    Escuela::create(['nombre' => 'Colegio Nacional de Educación Profesional Técnica No. 294', 'corto' => 'CONALEP 294']);
    Escuela::create(['nombre' => 'Colegio Oquetza', 'corto' => '']);
    Escuela::create(['nombre' => 'Colegio Potzanani', 'corto' => '']);
    Escuela::create(['nombre' => 'Colegio Quebec', 'corto' => '']);
    Escuela::create(['nombre' => 'Colegio Quetzalli', 'corto' => '']);
    Escuela::create(['nombre' => 'Colegio Quetzalcóatl', 'corto' => '']);
    Escuela::create(['nombre' => 'Colegio Robet Kennedy', 'corto' => '']);
    Escuela::create(['nombre' => 'Colegio Rosario Castellanos', 'corto' => '']);
    Escuela::create(['nombre' => 'Colegio Soleil', 'corto' => '']);
    Escuela::create(['nombre' => 'Colegio Stratford', 'corto' => '']);
    Escuela::create(['nombre' => 'Colegio Tehatsi', 'corto' => '']);
    Escuela::create(['nombre' => 'Colegio Telpochcalli', 'corto' => '']);
    Escuela::create(['nombre' => 'Colegio Tepoztecatl', 'corto' => '']);
    Escuela::create(['nombre' => 'Colegio Wallaby', 'corto' => '']);
    Escuela::create(['nombre' => 'Colegio Williams de Cuernavaca', 'corto' => 'Williams']);
    Escuela::create(['nombre' => 'Comunidad Educativa Ollincalli', 'corto' => '']);
    Escuela::create(['nombre' => 'Discovery School', 'corto' => '']);
    Escuela::create(['nombre' => 'Enrique Rodríguez Cano', 'corto' => '']);
    Escuela::create(['nombre' => 'Ermilo Abreu Gómez', 'corto' => '']);
    Escuela::create(['nombre' => 'Escuela Alianza', 'corto' => '']);
    Escuela::create(['nombre' => 'Escuela de Enfermería y Radiología Florencia Nigthingale', 'corto' => '']);
    Escuela::create(['nombre' => 'Escuela de la Ciudad de Cuernavaca', 'corto' => '']);
    Escuela::create(['nombre' => 'Escuela de Técnicos Laboratoristas', 'corto' => '']);
    Escuela::create(['nombre' => 'ESCUELA EN CASA', 'corto' => '']);
    Escuela::create(['nombre' => 'Escuela Libertad', 'corto' => '']);
    Escuela::create(['nombre' => 'Escuela Militarizada Cristóbal Colón', 'corto' => '']);
    Escuela::create(['nombre' => 'Escuela Preparatoria Diurna No. 1', 'corto' => '']);
    Escuela::create(['nombre' => 'Escuela Preparatoria No. 4 de Jojutla', 'corto' => '']);
    Escuela::create(['nombre' => 'Escuela Preparatoria Vespertina No. 1', 'corto' => '']);
    Escuela::create(['nombre' => 'Escuela Primaria "Emiliano Zapata"', 'corto' => '']);
    Escuela::create(['nombre' => 'Escuela Primaria Guadalupe Victoria', 'corto' => '']);
    Escuela::create(['nombre' => 'Escuela Primaria Mariano Matamoros', 'corto' => '']);
    Escuela::create(['nombre' => 'Escuela Primaria Prof. Manuel M. Cerna', 'corto' => '']);
    Escuela::create(['nombre' => 'Escuela Secundaria Federal Enrique González Aparicio', 'corto' => '']);
    Escuela::create(['nombre' => 'Escuela Secundaria Federal Mariano Matamoros', 'corto' => '']);
    Escuela::create(['nombre' => 'Escuela Secundaria General Juan N. Alvarez', 'corto' => '']);
    Escuela::create(['nombre' => 'Escuela Secundaria General No. 13 Rosario Castellanos', 'corto' => 'Sec. 13 Rosario Castellanos']);
    Escuela::create(['nombre' => 'Escuela Secundaria General No. 2 Cuitlahuac', 'corto' => '']);
    Escuela::create(['nombre' => 'Escuela Secundaria General No. 3 "Eulalia Guzmán"', 'corto' => '']);
    Escuela::create(['nombre' => 'Escuela Secundaria General Tlahuilli', 'corto' => 'Secundaria Tlahuilli']);
    Escuela::create(['nombre' => 'Escuela Secundaria No. 4 Valentín Gómez Farías', 'corto' => '']);
    Escuela::create(['nombre' => 'Escuela Secundaria No.14 Jose Vizcaíno Perez', 'corto' => '']);
    Escuela::create(['nombre' => 'Escuela Secundaria Técnica No. 02', 'corto' => 'E.S.T. No. 02']);
    Escuela::create(['nombre' => 'Escuela Secundaria Técnica No. 04', 'corto' => 'E.S.T. No. 04']);
    Escuela::create(['nombre' => 'Escuela Secundaria Técnica No. 06', 'corto' => 'E.S.T. No. 06']);
    Escuela::create(['nombre' => 'Escuela Secundaria Técnica No. 14', 'corto' => 'E.S.T. No. 14']);
    Escuela::create(['nombre' => 'Escuela Secundaria Técnica No. 18', 'corto' => 'E.S.T. No. 18']);
    Escuela::create(['nombre' => 'Escuela Secundaria Técnica No. 22', 'corto' => 'E.S.T. No. 22']);
    Escuela::create(['nombre' => 'Escuela Secundaria Técnica No. 23', 'corto' => 'E.S.T. No. 23']);
    Escuela::create(['nombre' => 'Escuela Secundaria Técnica No. 34', 'corto' => 'E.S.T. No. 34']);
    Escuela::create(['nombre' => 'Escuela Secundaria Técnica No. 36', 'corto' => 'E.S.T. No. 23']);
    Escuela::create(['nombre' => 'Escuela Secundaria Técnica No. 39', 'corto' => 'E.S.T. No. 39']);
    Escuela::create(['nombre' => 'Escuela Secundaria Técnica No. 45', 'corto' => 'E.S.T. No. 45']);
    Escuela::create(['nombre' => 'Francisco González Bocanegra', 'corto' => '']);
    Escuela::create(['nombre' => 'Francisco Villa', 'corto' => '']);
    Escuela::create(['nombre' => 'Francisco Zarco', 'corto' => '']);
    Escuela::create(['nombre' => 'Freinet de Cuernavaca', 'corto' => '']);
    Escuela::create(['nombre' => 'Fundación Don Bosco', 'corto' => '']);
    Escuela::create(['nombre' => 'Fundación El Peñón', 'corto' => '']);
    Escuela::create(['nombre' => 'Gavino Barreda', 'corto' => '']);
    Escuela::create(['nombre' => 'Global Lerning Community', 'corto' => '']);
    Escuela::create(['nombre' => 'Global School', 'corto' => '']);
    Escuela::create(['nombre' => 'Gral. Alvaro Obregón', 'corto' => '']);
    Escuela::create(['nombre' => 'Gral. Hermenegildo Galeana', 'corto' => '']);
    Escuela::create(['nombre' => 'Gregorio Torres Quintero', 'corto' => '']);
    Escuela::create(['nombre' => 'Grupo de Atención Educativa', 'corto' => '']);
    Escuela::create(['nombre' => 'Grupo Educativo Cristobal Colon', 'corto' => '']);
    Escuela::create(['nombre' => 'Grupo Educativo Loyola', 'corto' => '']);
    Escuela::create(['nombre' => 'Guadalupe Victoria', 'corto' => '']);
    Escuela::create(['nombre' => 'Hamilton Junior High School', 'corto' => '']);
    Escuela::create(['nombre' => 'Ignacio Allende', 'corto' => '']);
    Escuela::create(['nombre' => 'Ignacio Zaragoza', 'corto' => '']);
    Escuela::create(['nombre' => 'Instituto Educativo las Fuentes', 'corto' => 'Las Fuentes']);
    Escuela::create(['nombre' => 'Instituto Latino Americano', 'corto' => '']);
    Escuela::create(['nombre' => 'Instituto Mexicano de Profesionalización Educativa', 'corto' => 'IMPE']);
    Escuela::create(['nombre' => 'Instituto Nacional para la Educación de los Adultos', 'corto' => 'INEA']);
    Escuela::create(['nombre' => 'Instituto Oxford', 'corto' => '']);
    Escuela::create(['nombre' => 'Instituto Tecnológico de Cuautla', 'corto' => 'IT Cuautla']);
    Escuela::create(['nombre' => 'Jesus Conde Rodriguez', 'corto' => '']);
    Escuela::create(['nombre' => 'José María Morelos y Pavón', 'corto' => '']);
    Escuela::create(['nombre' => 'Jose Urban Aguirre', 'corto' => '']);
    Escuela::create(['nombre' => 'Jose Vasconcelos', 'corto' => '']);
    Escuela::create(['nombre' => 'José Vizcaíno Pérez', 'corto' => '']);
    Escuela::create(['nombre' => 'Josefa Ortiz de Domínguez', 'corto' => '']);
    Escuela::create(['nombre' => 'Juan Escutia', 'corto' => '']);
    Escuela::create(['nombre' => 'Juan Morales', 'corto' => '']);
    Escuela::create(['nombre' => 'Justo Sierra', 'corto' => '']);
    Escuela::create(['nombre' => 'La Paz', 'corto' => '']);
    Escuela::create(['nombre' => 'La Salle', 'corto' => '']);
    Escuela::create(['nombre' => 'Lancaster', 'corto' => '']);
    Escuela::create(['nombre' => 'Lázaro Cárdenas', 'corto' => '']);
    Escuela::create(['nombre' => 'Lázaro Cárdenas del Río Internado Palmira', 'corto' => '']);
    Escuela::create(['nombre' => 'Leona Vicario Fernandez', 'corto' => '']);
    Escuela::create(['nombre' => 'Limbo', 'corto' => '']);
    Escuela::create(['nombre' => 'Lobos Morelos', 'corto' => '']);
    Escuela::create(['nombre' => 'Luis Donaldo Colosio Murrieta', 'corto' => '']);
    Escuela::create(['nombre' => 'Luis Pasteur', 'corto' => '']);
    Escuela::create(['nombre' => 'Maestro Jose Vasconselos Calderon', 'corto' => '']);
    Escuela::create(['nombre' => 'Manuel Noceda Barrios', 'corto' => '']);
    Escuela::create(['nombre' => 'Maria Mondragon', 'corto' => '']);
    Escuela::create(['nombre' => 'Mariano Rivapalacio San Vicente', 'corto' => '']);
    Escuela::create(['nombre' => 'Marymount Cuernavaca', 'corto' => '']);
    Escuela::create(['nombre' => 'Mercedes Martínez del Campo', 'corto' => '']);
    Escuela::create(['nombre' => 'Miguel Hidalgo y Costilla', 'corto' => '']);
    Escuela::create(['nombre' => 'Montessori', 'corto' => '']);
    Escuela::create(['nombre' => 'Niños Héroes de Chapultepec', 'corto' => '']);
    Escuela::create(['nombre' => 'Numero 21', 'corto' => '']);
    Escuela::create(['nombre' => 'Octavio Paz', 'corto' => '']);
    Escuela::create(['nombre' => 'Olmeca Cluster Universitario', 'corto' => '']);
    Escuela::create(['nombre' => 'Otilio Edmundo Montaño', 'corto' => '']);
    Escuela::create(['nombre' => 'Pablo Torres Burgos', 'corto' => '']);
    Escuela::create(['nombre' => 'Pillicao', 'corto' => '']);
    Escuela::create(['nombre' => 'Prepa 1', 'corto' => '']);
    Escuela::create(['nombre' => 'Prepa 19', 'corto' => '']);
    Escuela::create(['nombre' => 'Prepa 3 Cuautla', 'corto' => '']);
    Escuela::create(['nombre' => 'Prepa 6 de Tlaltizapan', 'corto' => '']);
    Escuela::create(['nombre' => 'Prepa Cuautla', 'corto' => '']);
    Escuela::create(['nombre' => 'Prepa en linea SEP', 'corto' => '']);
    Escuela::create(['nombre' => 'Preparatoria Federal por Cooperación "Valentín Gómez Farías"', 'corto' => 'PREFECO Valentín Gómez Farías']);
    Escuela::create(['nombre' => 'Preparatoria Federal Por Cooperación Andrés Quintana Roo', 'corto' => 'PREFECO Andrés Quintana Roo']);
    Escuela::create(['nombre' => 'Preparatoria Federal Por Cooperación Jose María Morelos y Pavón', 'corto' => 'PREFECO José María Morelos y Pavón']);
    Escuela::create(['nombre' => 'Preparatoria Guízar y Valencia', 'corto' => '']);
    Escuela::create(['nombre' => 'Preparatoria La Paz', 'corto' => '']);
    Escuela::create(['nombre' => 'Preparatoria No 24', 'corto' => '']);
    Escuela::create(['nombre' => 'Preparatoria no. 2', 'corto' => '']);
    Escuela::create(['nombre' => 'Preparatoria No. 6 Tlaltizapan', 'corto' => '']);
    Escuela::create(['nombre' => 'Preparatoria No. 6 UAEM', 'corto' => 'Prepa 6 UAEM']);
    Escuela::create(['nombre' => 'Presidente Miguel Aleman', 'corto' => '']);
    Escuela::create(['nombre' => 'Primaria 16 de Septiembre', 'corto' => '16 de Septiembre']);
    Escuela::create(['nombre' => 'Primaria 5 de Febrero', 'corto' => '']);
    Escuela::create(['nombre' => 'Primaria 5 de mayo de 1862', 'corto' => '']);
    Escuela::create(['nombre' => 'Primaria Alfonso N. Urueta Carrillo', 'corto' => '']);
    Escuela::create(['nombre' => 'Primaria Ing. César Uscanga Uscanga', 'corto' => '']);
    Escuela::create(['nombre' => 'Primaria Ejército Mexicano / MCAJ', 'corto' => '']);
    Escuela::create(['nombre' => 'Primaria Ignacio Manuel Altamirano', 'corto' => '']);
    Escuela::create(['nombre' => 'Primaria Justo Sierra', 'corto' => '']);
    Escuela::create(['nombre' => 'Primaria Odilón Sedeño Martínez', 'corto' => '']);
    Escuela::create(['nombre' => 'Primaria Quetzalcoatl Acolapa', 'corto' => '']);
    Escuela::create(['nombre' => 'Primaria Vicente Guerrero', 'corto' => '']);
    Escuela::create(['nombre' => 'Prof. Carlos Pérez guerrero', 'corto' => '']);
    Escuela::create(['nombre' => 'Prof. Otilo Montaño', 'corto' => '']);
    Escuela::create(['nombre' => 'Profesor Justo Sierra', 'corto' => '']);
    Escuela::create(['nombre' => 'Profesor Vinh Flores Laureano', 'corto' => '']);
    Escuela::create(['nombre' => 'Quebec', 'corto' => '']);
    Escuela::create(['nombre' => 'Quetzalcoatl', 'corto' => '']);
    Escuela::create(['nombre' => 'Quetzalli', 'corto' => '']);
    Escuela::create(['nombre' => 'Rosa Quevedo Ochoa', 'corto' => '']);
    Escuela::create(['nombre' => 'Sead', 'corto' => '']);
    Escuela::create(['nombre' => 'Secundaria 17 de Marzo', 'corto' => '17 de marzo']);
    Escuela::create(['nombre' => 'Secundaria Latina', 'corto' => '']);
    Escuela::create(['nombre' => 'Secundaria Mariano Matamoros', 'corto' => '']);
    Escuela::create(['nombre' => 'Secundaria Pablo Torres Burgos No. 8', 'corto' => '']);
    Escuela::create(['nombre' => 'Secundaria Teodoro Rivera Bobadilla', 'corto' => '']);
    Escuela::create(['nombre' => 'Servicio Nacional de Bachillerato en Línea Prepa en Línea SEP', 'corto' => '']);
    Escuela::create(['nombre' => 'Siu', 'corto' => '']);
    Escuela::create(['nombre' => 'Sunny Hill', 'corto' => '']);
    Escuela::create(['nombre' => 'Técnicos Laboratoristas', 'corto' => '']);
    Escuela::create(['nombre' => 'Tecnológico de Monterrey Campus Cuernavaca', 'corto' => 'ITESM']);
    Escuela::create(['nombre' => 'Tecnológico de Monterrey Campus Cuernavaca', 'corto' => 'ITESM Cuernavaca']);
    Escuela::create(['nombre' => 'Telesecundaria Ignacio Ramirez', 'corto' => '']);
    Escuela::create(['nombre' => 'Telesecundaria Plan de Ayala', 'corto' => '']);
    Escuela::create(['nombre' => 'Telesecundaria Rafael Ramírez', 'corto' => '']);
    Escuela::create(['nombre' => 'Tierra y libertad', 'corto' => '']);
    Escuela::create(['nombre' => 'Universidad del Valle de Cuernavaca', 'corto' => 'UNIVAC']);
    Escuela::create(['nombre' => 'Universidad del Valle de México', 'corto' => 'UVM']);
    Escuela::create(['nombre' => 'Universidad Fray Luca Paccioli', 'corto' => 'Fray Luca']);
    Escuela::create(['nombre' => 'Universidad Guizar y Valencia', 'corto' => '']);
    Escuela::create(['nombre' => 'Universidad Internacional UNINTER', 'corto' => 'UNINTER']);
    Escuela::create(['nombre' => 'Universidad Latina', 'corto' => 'UNILA']);
    Escuela::create(['nombre' => 'Universidad Tecmilenio', 'corto' => '']);
    Escuela::create(['nombre' => 'Valentín Gómez Farías', 'corto' => '']);
    Escuela::create(['nombre' => 'Villa Rosario 2', 'corto' => '']);
  }
}
