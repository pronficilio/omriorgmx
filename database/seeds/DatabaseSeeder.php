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
			'puesto' => "Desarrollador de Software",
			/*'link_facebook' => "https://facebook.com/pronficilio",
			'correo' => "info@omri.org.mx"*/
		]);

    Miembro::create([
			'nombre' => "Isaí Landa 2",
			'puesto' => "Programador",
			/*'link_facebook' => "https://facebook.com/pronficilio",
			'correo' => "info@omri.org.mx"*/
		]);

    Miembro::create([
			'nombre' => "Isaí Landa 3",
			'puesto' => "Presidente",
			/*'link_facebook' => "https://www.facebook.com/groups/178940566004635/",
			'correo' => "info@omri.org.mx"*/
		]);
	}
}
class BannerTableSeeder extends Seeder {
	public function run(){
		Banner::create([
			'titulo' => "Olimpiada Morelense de Informática",
			'texto' => "Inserte aquí alguna frase motivadora",
			'link1' => null,
			'link2' => null
		]);

    Banner::create([
			'titulo' => "Curso de profesores 2020",
			'texto' => "¿Estás interesado en enseñar programación en tu escuela?",
			'link1' => "#",
			'link2' => null
		]);

    Banner::create([
      'titulo' => "Torneo universitario de programación",
      'texto' => "Inscribe a tu equipo!",
      'link1' => "#",
      'link2' => null
    ]);

    Banner::create([
			'titulo' => "XIII Olimpiada Morelense de Informática",
			'texto' => "Las inscripciones abren en agosto!",
			'link1' => null,
			'link2' => null
		]);
	}
}
class CausaTableSeeder extends Seeder {
	public function run(){
		Causa::create([
			'titulo' => "Inscripción al nacional",
			'acumulado' => 0,
			'cant_donaciones' => 0,
			'meta' => 34000,
      //'link1' => "https://github.com/",
      //'link2' => "https://github.com/pronficilio",
      'detalle_titulo' => "Ayuda a que un vagabundo pueda comer",
      'detalle_texto' => "Los vagabundos son personas muy interesantes en la vida."
		]);

    Causa::create([
			'titulo' => "Apoyo para plumones",
			'acumulado' => 0,
			'cant_donaciones' => 0,
			'meta' => 1000000,
      //'link1' => "https://github.com/",
      //'link2' => "https://github.com/pronficilio",
      'detalle_titulo' => "Ayuda a la OMRI con plumones",
      'detalle_texto' => "La herramienta indispensable de la olimpiada"
		]);

    Causa::create([
			'titulo' => "Apoyo para un viaje",
			'acumulado' => 5000,
			'cant_donaciones' => 9,
			'meta' => 2000000,
      //'link1' => "https://github.com/",
      //'link2' => "https://github.com/pronficilio",
      'detalle_titulo' => "Ayuda a la OMRI con el boleto de sus participantes",
      'detalle_texto' => "AYUDAAAAAAAAAAAAAAAAAAAAAAAA!!!!!!!!"
		]);
	}
}
class EventoTableSeeder extends Seeder {
	public function run(){
		Evento::create([
			'titulo' => "Examen Estatal",
			'fecha' => "2020/02/24",
			'texto' => "Se aproxima un nuevo examen",
			'link' => "https://www.omri.org.mx",
      'detalle_titulo' => "Este sabado, el examen estatal",
      'detalle_texto' => "Veremos quien seran los 4 que nos representaran en el nacional"
		]);

    Evento::create([
			'titulo' => "Examen Nacional",
			'fecha' => "2020/05/26",
			'texto' => "Se aproxima un nuevo examen Nacional",
			'link' => "https://www.omri.org.mx",
      'detalle_titulo' => "OMI 2020",
      'detalle_texto' => "Revisa nuestros resultados en la OMI 2020"
		]);

    Evento::create([
			'titulo' => "Premios",
			'fecha' => "2020/02/25",
			'texto' => "Premiaciones",
			'link' => "https://www.omri.org.mx",
      'detalle_titulo' => "Este sabado es la premiacion",
      'detalle_texto' => "Todos estan invitados"
		]);
	}
}

class NoticiaTableSeeder extends Seeder {
	public function run(){
    Noticia::create([
      'titulo' => "Nuevos maestros en la olimpiada",
      'fecha' => "2020/02/24",
      'texto' => "Tenemos nuevos integrantes en la olimpiada",
      'link' => "https://www.omri.org.mx",
      'detalle_titulo' => "Nuevos integrantes en el equipo",
      'detalle_texto' => "Ya estan aqui los nuevos integrantes."
    ]);

    Noticia::create([
      'titulo' => "Nuevo sistema de enseñanza",
      'fecha' => "2020/02/24",
      'texto' => "Hemos estudiado un nuevo sistema, ven, descubrelo",
      'link' => "https://www.omri.org.mx",
      'detalle_titulo' => "Nuevo sistema de enseñanza se aproxima",
      'detalle_texto' => "El nuevo sistema de enseñanza se ve muy prometedor y funcionara para todo el publico"
    ]);

    Noticia::create([
      'titulo' => "El perro de Isai ya no tiene bolas",
      'fecha' => "2020/02/14",
      'texto' => "Pobre Perro :(",
      'link' => "https://www.omri.org.mx",
      'detalle_titulo' => "El perro de Isai ya no tiene bolas",
      'detalle_texto' => "El perro ya desperto :)"
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
    Escuela::create(['nombre' => 'Centro de Bachillerato Tecnológico Agropecuario 39']);
    Escuela::create(['nombre' => 'Centro de Bachillerato Tecnológico Agropecuario 8']);
    Escuela::create(['nombre' => 'Centro de Bachillerato Tecnológico Industrial y de Servicios 76']);
    Escuela::create(['nombre' => 'Centro de Estudios Científicos y Tecnológicos 03']);
    Escuela::create(['nombre' => 'Centro de Estudios Tecnológico Industrial y de y Servicios 12']);
    Escuela::create(['nombre' => 'Centro de Estudios Tecnológicos Industrial y de Servicios 44']);
    Escuela::create(['nombre' => 'Centro Educativo Montes de Oca']);
    Escuela::create(['nombre' => 'Centro Universitario Americano del Estado de Morelos']);
    Escuela::create(['nombre' => 'Centro Universitario Morelos']);
    Escuela::create(['nombre' => 'Colegio Andersen']);
    Escuela::create(['nombre' => 'Colegio Boston']);
    Escuela::create(['nombre' => 'Colegio Cristóbal Colón']);
    Escuela::create(['nombre' => 'Colegio Cuernavaca']);
    Escuela::create(['nombre' => 'Colegio de Bachilleres del Estado de Morelos 02']);
    Escuela::create(['nombre' => 'Colegio de Bachilleres del Estado de Morelos 08']);
    Escuela::create(['nombre' => 'Colegio de Estudios Científicos y Tecnológicos 01']);
    Escuela::create(['nombre' => 'Colegio Hamilton']);
    Escuela::create(['nombre' => 'Colegio Lowry']);
    Escuela::create(['nombre' => 'Colegio Marton']);
    Escuela::create(['nombre' => 'Colegio Marymount']);
    Escuela::create(['nombre' => 'Colegio Moderno de Cuernavaca']);
    Escuela::create(['nombre' => 'Colegio Montefalco']);
    Escuela::create(['nombre' => 'Colegio Nacional de Educación Profesional Técnica 03']);
    Escuela::create(['nombre' => 'Colegio Nacional de Educación Profesional Técnica 173']);
    Escuela::create(['nombre' => 'Colegio Nacional de Educación Profesional Técnica 241']);
    Escuela::create(['nombre' => 'Colegio Potzanani']);
    Escuela::create(['nombre' => 'Colegio Quetzalcóatl']);
    Escuela::create(['nombre' => 'Colegio Quetzalli']);
    Escuela::create(['nombre' => 'Colegio Wallaby']);
    Escuela::create(['nombre' => 'Escuela de la Ciudad de Curnavaca']);
    Escuela::create(['nombre' => 'Escuela de Técnicos Laboratoristas']);
    Escuela::create(['nombre' => 'Escuela en casa']);
    Escuela::create(['nombre' => 'Fundación El Peñón']);
    Escuela::create(['nombre' => 'Instituto Educativo las Fuentes']);
    Escuela::create(['nombre' => 'Instituto Nacional para la Educación de los Adultos']);
    Escuela::create(['nombre' => 'Instituto Tecnológico y de Estudios Superiores de Monterrey Campus Cuernavaca']);
    Escuela::create(['nombre' => 'Marymount']);
    Escuela::create(['nombre' => 'Preparatoria Diurna N#1 Bernabé L. de Elías']);
    Escuela::create(['nombre' => 'Preparatoria Federal por Cooperación Andrés Quintana Roo']);
    Escuela::create(['nombre' => 'Primaria 5 de mayo de 1862']);
    Escuela::create(['nombre' => 'Primaria Emiliano Zapata']);
    Escuela::create(['nombre' => 'Primaria Guadalupe Victoria']);
    Escuela::create(['nombre' => 'Primaria Ing. César Uscanga Uscanga']);
    Escuela::create(['nombre' => 'Primaria Presidente Miguel Alemán']);
    Escuela::create(['nombre' => 'Secundaria 17 de Marzo']);
    Escuela::create(['nombre' => 'Secundaria Benito Juarez']);
    Escuela::create(['nombre' => 'Secundaria Carmen Sallés']);
    Escuela::create(['nombre' => 'Secundaria Ing. César Uscanga Uscanga']);
    Escuela::create(['nombre' => 'Secundaria Mercedes Martínez del Campo']);
    Escuela::create(['nombre' => 'Secundaria N#1 Froylan Parroquín García']);
    Escuela::create(['nombre' => 'Secundaria N#13 Rosario Castellanos']);
    Escuela::create(['nombre' => 'Secundaria N#4 Valentín Gómez Farias']);
    Escuela::create(['nombre' => 'Secundaria Nezahualcóyotl']);
    Escuela::create(['nombre' => 'Secundaria Técnica N#39']);
    Escuela::create(['nombre' => 'Secundaria Tlahuilli']);
    Escuela::create(['nombre' => 'Universidad La Salle']);
    Escuela::create(['nombre' => 'Universidad Tecmilenio']);
  }
}
