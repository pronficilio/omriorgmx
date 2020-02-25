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
			'link_facebook' => "https://facebook.com/pronficilio",
			'correo' => "info@omri.org.mx"
		]);

    Miembro::create([
			'nombre' => "Isaí Landa 2",
			'puesto' => "Programador",
			'link_facebook' => "https://facebook.com/pronficilio",
			'correo' => "info@omri.org.mx"
		]);

    Miembro::create([
			'nombre' => "Isaí Landa 3",
			'puesto' => "Presidente",
			'link_facebook' => "https://www.facebook.com/groups/178940566004635/",
			'correo' => "info@omri.org.mx"
		]);
	}
}
class BannerTableSeeder extends Seeder {
	public function run(){
		Banner::create([
			'titulo' => "OMI 2017",
			'texto' => "Descubre como nos fue este año en la OMI",
			'link1' => "https://www.omri.org.mx",
			'link2' => "https://www.omri.org.mx/estadisticas.html#medallas_nacionales"
		]);

    Banner::create([
			'titulo' => "OMI 2020",
			'texto' => "Proximamente",
			'link1' => "https://www.omri.org.mx",
			'link2' => "https://www.paypal.me/omrimorelos"
		]);

    Banner::create([
			'titulo' => "OMI 2010",
			'texto' => "Hace ya varios años",
			'link1' => "https://www.omri.org.mx",
			'link2' => "https://www.omri.org.mx/omibot.html"
		]);
	}
}
class CausaTableSeeder extends Seeder {
	public function run(){
		Causa::create([
			'titulo' => "Ayuda a que un vagabundo pueda comer",
			'acumulado' => 3000,
			'cant_donaciones' => 5,
			'meta' => 50000,
      'link1' => "https://github.com/",
      'link2' => "https://github.com/pronficilio"
		]);

    Causa::create([
			'titulo' => "Apoyo para plumones",
			'acumulado' => 0,
			'cant_donaciones' => 0,
			'meta' => 1000000,
      'link1' => "https://github.com/GandyA23",
      'link2' => "https://www.omri.org.mx/index.php"
		]);

    Causa::create([
			'titulo' => "Apoyo para un viaje",
			'acumulado' => 5000,
			'cant_donaciones' => 9,
			'meta' => 2000000,
      'link1' => "https://www.omri.org.mx",
			'link2' => "https://www.omri.org.mx/omibot.html"
		]);
	}
}
class EventoTableSeeder extends Seeder {
	public function run(){
		Evento::create([
			'titulo' => "Examen Estatal",
			'fecha' => "2020/02/24",
			'texto' => "Se aproxima un nuevo examen",
			'link' => "https://www.omri.org.mx"
		]);

    Evento::create([
			'titulo' => "Examen Nacional",
			'fecha' => "2020/05/26",
			'texto' => "Se aproxima un nuevo examen Nacional",
			'link' => "https://www.omri.org.mx"
		]);

    Evento::create([
			'titulo' => "Premios",
			'fecha' => "2020/02/25",
			'texto' => "Premiaciones",
			'link' => "https://www.omri.org.mx"
		]);
	}
}

class NoticiaTableSeeder extends Seeder {
	public function run(){
    Noticia::create([
      'titulo' => "Nuevos maestros en la olimpiada",
      'fecha' => "2020/02/24",
      'texto' => "Tenemos nuevos integrantes en la olimpiada",
      'link' => "https://www.omri.org.mx"
    ]);

    Noticia::create([
      'titulo' => "Nuevo sistema de enseñanza",
      'fecha' => "2020/02/24",
      'texto' => "Hemos estudiado un nuevo sistema, ven, descubrelo",
      'link' => "https://www.omri.org.mx"
    ]);

    Noticia::create([
      'titulo' => "El perro de Isai ya no tiene bolas",
      'fecha' => "2020/02/14",
      'texto' => "Pobre Perro :(",
      'link' => "https://www.omri.org.mx"
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
      'link' => "https://www.google.com"
    ]);

    Sponsor::create([
      'nombre' => "AMD",
      'link' => "https://www.google.com"
    ]);

    Sponsor::create([
      'nombre' => "Doppio",
      'link' => "https://www.google.com"
    ]);
  }
}
