<?php

use Illuminate\Database\Seeder;
use App\Miembro;
use App\Banner;
use App\Causa;
use App\Evento;
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
        $this->command->info("Semilla plantada");
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
