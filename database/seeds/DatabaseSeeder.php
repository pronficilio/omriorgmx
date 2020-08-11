<?php

use Illuminate\Database\Seeder;
use App\Municipio;
use App\Miembro;
use App\Banner;
use App\Causa;
use App\Evento;
use App\Escuela;
use App\Famoso;
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
        $this->call(FamaTableSeeder::class);
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
      'puesto' => "Delegado"
    ]);

    Miembro::create([
      'nombre' => "Alexis España",
      'puesto' => "Secretario"
    ]);

    Miembro::create([
      'nombre' => "Jorge Romero",
      'puesto' => "Miembro fundador"
    ]);
    Miembro::create([
      'nombre' => "Fernando Solano",
      'puesto' => "Tesorero"
    ]);
    Miembro::create([
      'nombre' => "André",
      'puesto' => "Entrenador"
    ]);
    Miembro::create([
      'nombre' => "Gandy",
      'puesto' => "Asesor"
    ]);
    Miembro::create([
      'nombre' => "Mariana de la Rosa",
      'puesto' => "Asesora"
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


class FamaTableSeeder extends Seeder {
  public function run(){
    Famoso::create([ 'id' => '1', 'nombre' => 'Jorge Isaí Landa Ortega', 'grado' => '2do Preparatoria', 'escuela' => 'Colegio Nacional de Educación Profesional Técnica 241', 'anio' => '2008', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '2', 'nombre' => 'César Oscar Bustamante', 'grado' => '2do Preparatoria', 'escuela' => 'Colegio Nacional de Educación Profesional Técnica 173', 'anio' => '2008', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '3', 'nombre' => 'Erick Iván Montes Chávez', 'grado' => '2do Preparatoria', 'escuela' => 'Colegio Nacional de Educación Profesional Técnica 173', 'anio' => '2008', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '4', 'nombre' => 'José Ángel Rivera Avilés', 'grado' => '2do Preparatoria', 'escuela' => 'Colegio Nacional de Educación Profesional Técnica 173', 'anio' => '2008', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '5', 'nombre' => 'Victor Manuel Sotelo', 'grado' => '2do Preparatoria', 'escuela' => 'Colegio Nacional de Educación Profesional Técnica 173', 'anio' => '2008', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '6', 'nombre' => 'Gilberto Trejo', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Estudios Científicos y Tecnológicos 03', 'anio' => '2008', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '7', 'nombre' => 'Cinthia Samantha', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Estudios Científicos y Tecnológicos 03', 'anio' => '2008', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '8', 'nombre' => 'David Alfonso Hernández', 'grado' => '3ro Secundaria', 'escuela' => 'Colegio Hamilton', 'anio' => '2008', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '9', 'nombre' => 'Blanca Azucena Hernández Sotelo', 'grado' => '3ro Secundaria', 'escuela' => 'Colegio Hamilton', 'anio' => '2008', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '10', 'nombre' => 'Rodrigo Alfonsín de la Vega', 'grado' => '2do Preparatoria', 'escuela' => 'Colegio Marymount', 'anio' => '2009', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '11', 'nombre' => 'Maria Fernanda Pineda Bonnin', 'grado' => '2do Preparatoria', 'escuela' => 'Centro Educativo Montes de Oca', 'anio' => '2009', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '12', 'nombre' => 'Jose Refugio Sandoval Dominguez', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2009', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '13', 'nombre' => 'Andrés Galindo Ortiz', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Estudios Científicos y Tecnológicos 03', 'anio' => '2009', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '14', 'nombre' => 'Cesar Alfredo Ramirez Mosso', 'grado' => '2do Preparatoria', 'escuela' => 'Colegio de Estudios Científicos y Tecnológicos 01', 'anio' => '2009', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '15', 'nombre' => 'Aldo Adrián Castillo Valdepeña', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Estudios Científicos y Tecnológicos 03', 'anio' => '2009', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '16', 'nombre' => 'Susana Paola Jiménez Flores', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 8', 'anio' => '2009', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '17', 'nombre' => 'Ana Karen Garcia Avila', 'grado' => '1ro Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 8', 'anio' => '2009', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '18', 'nombre' => 'Jessica Maritza Sánches Vilchis', 'grado' => '2do Preparatoria', 'escuela' => 'Colegio Nacional de Educación Profesional Técnica 173', 'anio' => '2009', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '19', 'nombre' => 'Yaratzed Aragón Torres', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2009', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '20', 'nombre' => 'Luis Antonio Sandoval Barreto', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2009', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '21', 'nombre' => 'Crisneli Dominguez Carrillo', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2009', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '22', 'nombre' => 'Sindy Osorio Juárez', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2009', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '23', 'nombre' => 'René Patiño Morales', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Estudios Científicos y Tecnológicos 03', 'anio' => '2009', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '24', 'nombre' => 'Daniel Dominguez Carrillo', 'grado' => '1ro Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2010', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '25', 'nombre' => 'Jose Alberto Villafan Tapia', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2010', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '26', 'nombre' => 'Israel Serrano Rodriguez', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2010', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '27', 'nombre' => 'Fabian Noe Cabrera Flores', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2010', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '28', 'nombre' => 'Leopoldo Ernesto Palestino Martinez', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Estudios Tecnológicos Industrial y de Servicios 44', 'anio' => '2010', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '29', 'nombre' => 'Alvaro Gutierrez Flores', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2010', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '30', 'nombre' => 'Ana Karen Garcia Avila', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 8', 'anio' => '2010', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '31', 'nombre' => 'Jose Antonio Garcia Valdes', 'grado' => '2do Preparatoria', 'escuela' => 'Colegio Nacional de Educación Profesional Técnica 03', 'anio' => '2010', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '32', 'nombre' => 'Miguel Angel Flores Galvan', 'grado' => '2do Preparatoria', 'escuela' => 'Colegio Boston', 'anio' => '2010', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '33', 'nombre' => 'Luis Fernando Gonzalez Torres', 'grado' => '1ro Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2010', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '34', 'nombre' => 'Juan Daniel Tadeo Sanchez', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2010', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '35', 'nombre' => 'Erick Alejandro Bautista Gutierrez', 'grado' => '2do Preparatoria', 'escuela' => 'Colegio Nacional de Educación Profesional Técnica 241', 'anio' => '2010', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '36', 'nombre' => 'Luis Fernando Gonzalez Torres', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2011', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '37', 'nombre' => 'Daniel Dominguez Carrillo', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2011', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '38', 'nombre' => 'Luis Daniel Medina Cazarez', 'grado' => '3ro Secundaria', 'escuela' => 'Secundaria Tlahuilli', 'anio' => '2011', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '39', 'nombre' => 'Omar Otoniel Gómez González', 'grado' => '2do Preparatoria', 'escuela' => 'Colegio Nacional de Educación Profesional Técnica 03', 'anio' => '2011', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '40', 'nombre' => 'Ignacio Castillo Espitia', 'grado' => '1ro Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2011', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '41', 'nombre' => 'Victor Hugo Morales Mendoza', 'grado' => '2do Preparatoria', 'escuela' => 'Colegio de Bachilleres del Estado de Morelos 02', 'anio' => '2011', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '42', 'nombre' => 'Salvador Salazar Saenz', 'grado' => '2do Secundaria', 'escuela' => 'Colegio Hamilton', 'anio' => '2011', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '43', 'nombre' => 'Francisco Javier Turiján Vázquez', 'grado' => '1ro Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2011', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '44', 'nombre' => 'Alexis España Rodríguez', 'grado' => '3ro Secundaria', 'escuela' => 'Secundaria Tlahuilli', 'anio' => '2011', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '45', 'nombre' => 'Jazmín Sanchez García', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2011', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '46', 'nombre' => 'Kevin Francisco Flores Gomez', 'grado' => '1ro Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2011', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '47', 'nombre' => 'Felix Ortiz López', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Estudios Científicos y Tecnológicos 03', 'anio' => '2011', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '48', 'nombre' => 'Jair Ramirez Acevedo', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 8', 'anio' => '2011', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '49', 'nombre' => 'Raúl Alonso Santivañez', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2011', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '50', 'nombre' => 'Juan Carlos Galindo Barrera', 'grado' => '2do Preparatoria', 'escuela' => 'Colegio de Estudios Científicos y Tecnológicos 01', 'anio' => '2011', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '51', 'nombre' => 'Ignacio Castillo Espitia', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2012', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '52', 'nombre' => 'Luis Daniel Medina Cazarez', 'grado' => '1ro Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Industrial y de Servicios 76', 'anio' => '2012', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '53', 'nombre' => 'Francisco Javier Turiján Vázquez', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2012', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '54', 'nombre' => 'Kevin Francisco Flores Gomez', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2012', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '55', 'nombre' => 'Salvador Salazar Saenz', 'grado' => '3ro Secundaria', 'escuela' => 'Colegio Hamilton', 'anio' => '2012', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '56', 'nombre' => 'Alexis España Rodríguez', 'grado' => '1ro Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2012', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '57', 'nombre' => 'Miriam Ortiz Hernández', 'grado' => '1ro Preparatoria', 'escuela' => 'Colegio Montefalco', 'anio' => '2012', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '58', 'nombre' => 'Fernando Solano Flores', 'grado' => '2do Preparatoria', 'escuela' => 'Colegio Nacional de Educación Profesional Técnica 03', 'anio' => '2012', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '59', 'nombre' => 'Lilia Margarita Hernández Sotelo', 'grado' => '3ro Secundaria', 'escuela' => 'Colegio Hamilton', 'anio' => '2012', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '60', 'nombre' => 'Juan Enrique Beltrán Díaz', 'grado' => '2do Preparatoria', 'escuela' => 'Colegio Nacional de Educación Profesional Técnica 03', 'anio' => '2012', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '61', 'nombre' => 'Karen Hernández Montes', 'grado' => '2do Preparatoria', 'escuela' => 'Colegio de Bachilleres del Estado de Morelos 02', 'anio' => '2012', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '62', 'nombre' => 'Edgar Emmanuel López González', 'grado' => '2do Preparatoria', 'escuela' => 'Colegio de Bachilleres del Estado de Morelos 02', 'anio' => '2012', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '63', 'nombre' => 'Luis Daniel Medina Cazarez', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Industrial y de Servicios 76', 'anio' => '2013', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '64', 'nombre' => 'José Antonio Aguilar Téllez', 'grado' => '2do Preparatoria', 'escuela' => 'Colegio Boston', 'anio' => '2013', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '65', 'nombre' => 'Jorge Romero Romanis', 'grado' => '3ro Secundaria', 'escuela' => 'Colegio Hamilton', 'anio' => '2013', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '66', 'nombre' => 'Salvador Salazar Saenz', 'grado' => '1ro Preparatoria', 'escuela' => 'Instituto Tecnológico y de Estudios Superiores de Monterrey Campus Cuernavaca', 'anio' => '2013', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '67', 'nombre' => 'Iran Cacique Espinoza', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2013', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '68', 'nombre' => 'Mauricio Urdaneta Uribe', 'grado' => '3ro Secundaria', 'escuela' => 'Colegio Hamilton', 'anio' => '2013', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '69', 'nombre' => 'Nuvia Aidana Alonso Ortega', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2013', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '70', 'nombre' => 'Azahel Abraham Barreto Martinez', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2013', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '71', 'nombre' => 'Miriam Ortiz Hernández', 'grado' => '2do Preparatoria', 'escuela' => 'Colegio Montefalco', 'anio' => '2013', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '72', 'nombre' => 'Lilia Margarita Hernández Sotelo', 'grado' => '1ro Preparatoria', 'escuela' => 'Instituto Tecnológico y de Estudios Superiores de Monterrey Campus Cuernavaca', 'anio' => '2013', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '73', 'nombre' => 'Roni Daniel España Vazquez', 'grado' => '3ro Secundaria', 'escuela' => 'Secundaria Nezahualcóyotl', 'anio' => '2013', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '74', 'nombre' => 'Diego Israel Alcántara Salvitano', 'grado' => '2do Preparatoria', 'escuela' => 'Colegio Boston', 'anio' => '2014', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '75', 'nombre' => 'Luis Alfredo Villalva Rodriguez', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2014', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '76', 'nombre' => 'Jorge Romero Romanis', 'grado' => '1ro Preparatoria', 'escuela' => 'Universidad La Salle', 'anio' => '2014', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '77', 'nombre' => 'Luis Fernando Fuentes Sauza', 'grado' => '1ro Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2014', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '78', 'nombre' => 'Carlos Emiliano Cortés Quiñones', 'grado' => '2do Preparatoria', 'escuela' => 'Colegio Boston', 'anio' => '2014', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '79', 'nombre' => 'Alejandro Lara Soto', 'grado' => '2do Preparatoria', 'escuela' => 'Colegio Boston', 'anio' => '2014', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '80', 'nombre' => 'Roni Daniel España Vazquez', 'grado' => '1ro Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2014', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '81', 'nombre' => 'Kevin Yassir Fuentes García', 'grado' => '3ro Secundaria', 'escuela' => 'Secundaria Tlahuilli', 'anio' => '2014', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '82', 'nombre' => 'Diego Emilio Dominguez Tableros', 'grado' => '3ro Secundaria', 'escuela' => 'Secundaria Benito Juarez', 'anio' => '2014', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '83', 'nombre' => 'Omar Alejandro Pérez García', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2014', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '84', 'nombre' => 'Fernando Lango Baltazar', 'grado' => '3ro Secundaria', 'escuela' => 'Secundaria Carmen Sallés', 'anio' => '2014', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '85', 'nombre' => 'Sabine Yadira Aragón Herrera', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2014', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '86', 'nombre' => 'Alexis España Rodríguez', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2013', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '88', 'nombre' => 'Diego Emilio Domínguez Tableros', 'grado' => '2do Preparatoria', 'escuela' => 'Colegio de Bachilleres del Estado de Morelos 08', 'anio' => '2015', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '89', 'nombre' => 'Roni Daniel España', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2015', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '90', 'nombre' => 'Luis Fernando Fuentes Sauza', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2015', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '91', 'nombre' => 'Adrián Aragón', 'grado' => '1ro Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2015', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '92', 'nombre' => 'Jorge Romero Romanis', 'grado' => '2do Preparatoria', 'escuela' => 'Universidad La Salle', 'anio' => '2015', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '93', 'nombre' => 'Luis Kevin Johedan Ramírez Fuentes', 'grado' => '1ro Preparatoria', 'escuela' => 'Colegio de Bachilleres del Estado de Morelos 02', 'anio' => '2015', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '94', 'nombre' => 'Fernando Piedra Mendez', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Estudios Tecnológico Industrial y de y Servicios 12', 'anio' => '2015', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '95', 'nombre' => 'Miguel Angel Muñoz Vázquez', 'grado' => '1ro Preparatoria', 'escuela' => 'Escuela de Técnicos Laboratoristas', 'anio' => '2015', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '96', 'nombre' => 'Omar Alejandro Pérez García', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2015', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '97', 'nombre' => 'Uriel Vázquez Durán', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2015', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '98', 'nombre' => 'Víctor Vargas Flores', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Estudios Científicos y Tecnológicos 03', 'anio' => '2015', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '99', 'nombre' => 'Jorge Luis Nava', 'grado' => '1ro Preparatoria', 'escuela' => 'Fundación El Peñon ', 'anio' => '2015', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '100', 'nombre' => 'Kevin Yassir Fuentes García', 'grado' => '3ro Secundaria', 'escuela' => 'Secundaria Tlahuilli', 'anio' => '2015', 'medalla' => 'Oro', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '101', 'nombre' => 'Renata Tyché Estrada Narváez', 'grado' => '3ro Secundaria', 'escuela' => 'Colegio Boston', 'anio' => '2015', 'medalla' => 'Oro', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '102', 'nombre' => 'Bruno Angel Lomelirubi', 'grado' => '2do Secundaria', 'escuela' => 'Colegio Hamilton', 'anio' => '2015', 'medalla' => 'Oro', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '103', 'nombre' => 'Brenda Paola Vidaña Cerda', 'grado' => '3er Secundaria', 'escuela' => 'Colegio Hamilton', 'anio' => '2015', 'medalla' => 'Plata', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '104', 'nombre' => 'Alfredo Medina', 'grado' => '3ro Secundaria', 'escuela' => 'Colegio Hamilton', 'anio' => '2015', 'medalla' => 'Plata', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '105', 'nombre' => 'Marlene Pérez Espinosa', 'grado' => '3ro Secundaria', 'escuela' => 'Colegio Boston', 'anio' => '2015', 'medalla' => 'Plata', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '106', 'nombre' => 'Ernesto Cervantes Olivares', 'grado' => '6to Primaria', 'escuela' => 'Colegio Marymount', 'anio' => '2015', 'medalla' => 'Plata', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '107', 'nombre' => 'Alberto Navarrete', 'grado' => '3ro Secundaria', 'escuela' => 'Colegio Hamilton', 'anio' => '2015', 'medalla' => 'Bronce', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '108', 'nombre' => 'Sebastián Galindo Rodríguez', 'grado' => '3ro Secundaria', 'escuela' => 'Colegio Boston', 'anio' => '2015', 'medalla' => 'Bronce', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '109', 'nombre' => 'Daniel Alejandro Ocampo Bustos', 'grado' => '2do Secundaria', 'escuela' => 'Colegio Hamilton', 'anio' => '2015', 'medalla' => 'Bronce', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '110', 'nombre' => 'Miguel Angel Muñoz Vázquez', 'grado' => '2do Preparatoria', 'escuela' => 'Escuela de Técnicos Laboratoristas', 'anio' => '2016', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '111', 'nombre' => 'Adrián Aragón Juárez', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2016', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '112', 'nombre' => 'Diego Emilio Domínguez Tableros', 'grado' => '2do Preparatoria', 'escuela' => 'Colegio de Bachilleres del Estado de Morelos 08', 'anio' => '2016', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '159', 'nombre' => 'Valente Castillo Espitia', 'grado' => '1ro Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2017', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '115', 'nombre' => 'Luis Kevin Johedan Ramírez Fuentes', 'grado' => '2do Preparatoria', 'escuela' => 'Colegio de Bachilleres del Estado de Morelos 02', 'anio' => '2016', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '116', 'nombre' => 'Kevin Yassir Fuentes García', 'grado' => '1ro Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2016', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '117', 'nombre' => 'Fernando Lango Baltazar', 'grado' => '2do Preparatoria', 'escuela' => 'Colegio Boston', 'anio' => '2016', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '118', 'nombre' => 'Luis Fernando Ramírez Romero', 'grado' => '2do Preparatoria', 'escuela' => 'Colegio Boston', 'anio' => '2016', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '119', 'nombre' => 'Renata Tyché Estrada Narváez', 'grado' => '1ro Preparatoria', 'escuela' => 'Universidad Tecmilenio', 'anio' => '2016', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '120', 'nombre' => 'Daniel Victorio López', 'grado' => '1ro Preparatoria', 'escuela' => 'Centro de Estudios Científicos y Tecnológicos 03', 'anio' => '2016', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '121', 'nombre' => 'André Curiel Fuentes', 'grado' => '1ro Preparatoria', 'escuela' => 'Preparatoria Federal por Cooperación Andrés Quintana Roo', 'anio' => '2016', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '122', 'nombre' => 'Jorge Luis Nava Soriano', 'grado' => '2do Preparatoria', 'escuela' => 'Fundación El Peñon', 'anio' => '2016', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '123', 'nombre' => 'Juan Luis Santillán Villa', 'grado' => '2do Preparatoria', 'escuela' => 'Colegio Boston', 'anio' => '2016', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '124', 'nombre' => 'Zuriel Martínez Sandoval', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2016', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '125', 'nombre' => 'Kevin Omar Celis Flores', 'grado' => '1ro Preparatoria', 'escuela' => 'Escuela de Técnicos Laboratoristas', 'anio' => '2016', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '126', 'nombre' => 'Brenda Paola Vidaña Cerda', 'grado' => '1ro Preparatoria', 'escuela' => 'Instituto Tecnológico y de Estudios Superiores de Monterrey Campus Cuernavaca', 'anio' => '2016', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '127', 'nombre' => 'José Morales Medina', 'grado' => '3ro Secundaria', 'escuela' => 'Secundaria N#4 Valentín Gómez Farias', 'anio' => '2016', 'medalla' => 'Oro', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '128', 'nombre' => 'Bruno Angel Lomelirubi Vargas', 'grado' => '3ro Secundaia', 'escuela' => 'Colegio Hamilton', 'anio' => '2016', 'medalla' => 'Oro', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '129', 'nombre' => 'Engels Emiliano Miranda Palacios', 'grado' => '3ro Secundaria', 'escuela' => 'Secundaria N#1 Froylan Parroquín García', 'anio' => '2016', 'medalla' => 'Oro', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '130', 'nombre' => 'Emilio Manzanares', 'grado' => '3ro Secundaria', 'escuela' => 'Colegio Hamilton', 'anio' => '2016', 'medalla' => 'Oro', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '131', 'nombre' => 'Isabella Danahe García Aragón', 'grado' => '2do Secundaria', 'escuela' => 'Colegio Quetzalli', 'anio' => '2016', 'medalla' => 'Plata', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '132', 'nombre' => 'Valeria Alexandra Jaime Ramírez', 'grado' => '3ro Secundaria', 'escuela' => 'Colegio Hamilton', 'anio' => '2016', 'medalla' => 'Plata', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '133', 'nombre' => 'Alvar García', 'grado' => '3ro Secundaria', 'escuela' => 'Colegio Cuernavaca', 'anio' => '2016', 'medalla' => 'Plata', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '134', 'nombre' => 'Valente Castillo Espitia', 'grado' => '3ro Secundaria', 'escuela' => 'Secundaria Mercedes Martínez del Campo', 'anio' => '2016', 'medalla' => 'Plata', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '135', 'nombre' => 'Pamela Porcayo', 'grado' => '3ro Secundaria', 'escuela' => 'Colegio Hamilton', 'anio' => '2016', 'medalla' => 'Plata', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '136', 'nombre' => 'Miguel Ángel Ballastra', 'grado' => '3ro Secundaria', 'escuela' => 'Centro Universitario Americano del Estado de Morelos', 'anio' => '2016', 'medalla' => 'Bronce', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '137', 'nombre' => 'Rayhan Raziel Fuentes García', 'grado' => '1ro Secundaria', 'escuela' => 'Secundaria Tlahuilli', 'anio' => '2016', 'medalla' => 'Bronce', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '138', 'nombre' => 'Fernando Dimas González', 'grado' => '1ro Secundaria', 'escuela' => 'Colegio Hamilton', 'anio' => '2016', 'medalla' => 'Bronce', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '139', 'nombre' => 'Abraham Ruiz', 'grado' => '1ro Secundaria', 'escuela' => 'Secundaria Técnica N#39', 'anio' => '2016', 'medalla' => 'Bronce', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '140', 'nombre' => 'Emilio Alejandro Rivera', 'grado' => '1ro Secundaria', 'escuela' => 'Colegio Hamilton', 'anio' => '2016', 'medalla' => 'Bronce', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '141', 'nombre' => 'Sara Sofía Romero Romero', 'grado' => '3ro Secundaria', 'escuela' => 'Secundaria N#13 Rosario Castellanos', 'anio' => '2016', 'medalla' => 'Bronce', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '142', 'nombre' => 'Carlos Jesús Carriola Benítez', 'grado' => '6to Primaria', 'escuela' => 'Colegio Cristóbal Colón', 'anio' => '2016', 'medalla' => 'Oro', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '143', 'nombre' => 'Diego López Chávez', 'grado' => '6to Primaria', 'escuela' => 'Colegio Cristóbal Colón', 'anio' => '2016', 'medalla' => 'Oro', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '144', 'nombre' => 'Yoztin Zait Ramirez Ortiz', 'grado' => '2do Primaria', 'escuela' => 'Colegio Quetzalcóatl', 'anio' => '2016', 'medalla' => 'Oro', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '145', 'nombre' => 'Angel Yoel Ramirez Ortiz', 'grado' => '4to Primaria', 'escuela' => 'Primaria 5 de mayo de 1862', 'anio' => '2016', 'medalla' => 'Oro', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '146', 'nombre' => 'Kengy Manuel Díaz Rosales', 'grado' => '6to Primaria', 'escuela' => 'Primaria Guadalupe Victoria', 'anio' => '2016', 'medalla' => 'Plata', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '147', 'nombre' => 'Emmanuel Huesca Pérez', 'grado' => '6to Primaria', 'escuela' => 'Colegio Potzanani', 'anio' => '2016', 'medalla' => 'Plata', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '148', 'nombre' => 'Julián Victorio López', 'grado' => '6to Primaria', 'escuela' => 'Colegio Andersen', 'anio' => '2016', 'medalla' => 'Plata', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '149', 'nombre' => 'Karla Valle Romero', 'grado' => '6to Primaria', 'escuela' => 'Primaria Ing. César Uscanga Uscanga', 'anio' => '2016', 'medalla' => 'Plata', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '150', 'nombre' => 'Josías Valladares Landa', 'grado' => '3ro Primaria', 'escuela' => 'Primaria Presidente Miguel Alemán', 'anio' => '2016', 'medalla' => 'Plata', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '151', 'nombre' => 'Adrián Davos Maldonado González', 'grado' => '5to Primaria', 'escuela' => 'Colegio Cristóbal Colón', 'anio' => '2016', 'medalla' => 'Bronce', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '152', 'nombre' => 'Ari García Zarate', 'grado' => '3ro Primaria', 'escuela' => 'Primaria Presidente Miguel Alemán', 'anio' => '2016', 'medalla' => 'Bronce', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '153', 'nombre' => 'Carolina Kuehne', 'grado' => '6to Primaria', 'escuela' => 'Instituto Nacional para la Educación de los Adultos', 'anio' => '2016', 'medalla' => 'Bronce', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '154', 'nombre' => 'Carmen Kuehne', 'grado' => '4to Primaria', 'escuela' => 'Escuela en casa', 'anio' => '2016', 'medalla' => 'Bronce', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '155', 'nombre' => 'Dante Díaz Gómez', 'grado' => '6to Primaria', 'escuela' => 'Colegio Cristóbal Colón', 'anio' => '2016', 'medalla' => 'Bronce', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '156', 'nombre' => 'André Curiel Fuentes', 'grado' => '2do Preparatoria', 'escuela' => 'Preparatoria Federal por Cooperación Andrés Quintana Roo', 'anio' => '2017', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '157', 'nombre' => 'Tyché Estrada Narváez', 'grado' => '2do Preparatoria', 'escuela' => 'Universidad Tecmilenio', 'anio' => '2017', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '158', 'nombre' => 'Kevin Yassir Fuentes García', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2017', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '161', 'nombre' => 'Kevin Omar Celis Flores', 'grado' => '2do Preparatoria', 'escuela' => 'Escuela de Técnicos Laboratoristas', 'anio' => '2017', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '162', 'nombre' => 'Engels Emiliano Miranda Palacios', 'grado' => '1ro Preparatoria', 'escuela' => 'Instituto Tecnológico y de Estudios Superiores de Monterrey Campus Cuernavaca', 'anio' => '2017', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '163', 'nombre' => 'Denisse Regina García Rivera', 'grado' => '2do Preparatoria', 'escuela' => 'Preparatoria Diurna N#1 Bernabé L. de Elías', 'anio' => '2017', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '164', 'nombre' => 'Ricardo Barreto Gil', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2017', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '165', 'nombre' => 'Berenice Nicolás Piña', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2017', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '166', 'nombre' => 'María Fernanda Vivar Baeza', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2017', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '167', 'nombre' => 'Jenny Fernanda Vivar Baeza', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2017', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '168', 'nombre' => 'Sebastián Galindo Rodríguez', 'grado' => '2do Preparatoria', 'escuela' => 'Colegio Boston', 'anio' => '2017', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '169', 'nombre' => 'Gandy Esau Ávila Estrada', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Estudios Científicos y Tecnológicos 03', 'anio' => '2017', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '170', 'nombre' => 'Erika Martínez Meneses', 'grado' => '2do Preparatoria', 'escuela' => 'Colegio Boston', 'anio' => '2017', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '171', 'nombre' => 'Aida Monserrat García Mucito', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2017', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '172', 'nombre' => 'Misael Juárez Montaño', 'grado' => '1ro Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2017', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '173', 'nombre' => 'Diego Sebastián Zavala Soberanes', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2017', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '174', 'nombre' => 'Jorge Mario Arozarena Argotte', 'grado' => '2do Preparatoria', 'escuela' => 'Colegio Boston', 'anio' => '2017', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '175', 'nombre' => 'Juan Carlos Contreras Romero', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2017', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '176', 'nombre' => 'Samuel Alexander Baeza', 'grado' => '1ro Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2017', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '177', 'nombre' => 'Jack Brandon Villalva Rodríguez', 'grado' => '2do Secundaria', 'escuela' => 'Secundaria Tlahuilli', 'anio' => '2017', 'medalla' => 'Oro', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '178', 'nombre' => 'Leonardo León Benítez', 'grado' => '3ro Secundaria', 'escuela' => 'Colegio Hamilton', 'anio' => '2017', 'medalla' => 'Oro', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '179', 'nombre' => 'Alejandra Galván Bojórquez', 'grado' => '1ro Secundaria', 'escuela' => 'Colegio Hamilton', 'anio' => '2017', 'medalla' => 'Oro', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '180', 'nombre' => 'Isabella Danahé García Aragón', 'grado' => '3ro Secundaria', 'escuela' => 'Colegio Quetzalli', 'anio' => '2017', 'medalla' => 'Plata', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '181', 'nombre' => 'Erick Francisco Vargas Rodríguez', 'grado' => '3ro Secundaria', 'escuela' => 'Secundaria 17 de Marzo', 'anio' => '2017', 'medalla' => 'Plata', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '182', 'nombre' => 'Diego Sahid García Galván', 'grado' => '2do Secundaria', 'escuela' => 'Instituto Educativo las Fuentes', 'anio' => '2017', 'medalla' => 'Plata', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '183', 'nombre' => 'Bruno Raúl Morales Marquez', 'grado' => '3ro Secundaria', 'escuela' => 'Instituto Educativo las Fuentes', 'anio' => '2017', 'medalla' => 'Plata', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '184', 'nombre' => 'Roel Cuevas Ayala', 'grado' => '2do Secundaria', 'escuela' => 'Instituto Educativo las Fuentes', 'anio' => '2017', 'medalla' => 'Plata', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '185', 'nombre' => 'Rayhan Raziel Fuentes García', 'grado' => '2do Secundaria', 'escuela' => 'Centro Universitario Morelos', 'anio' => '2017', 'medalla' => 'Bronce', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '186', 'nombre' => 'Shadani Salazar Rodríguez', 'grado' => '2do Secundaria', 'escuela' => 'Instituto Educativo las Fuentes', 'anio' => '2017', 'medalla' => 'Bronce', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '187', 'nombre' => 'Ali Xanath Chavando Flores', 'grado' => '2do Secundaria', 'escuela' => 'Instituto Educativo las Fuentes', 'anio' => '2017', 'medalla' => 'Bronce', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '188', 'nombre' => 'Hugo Antonio Martínez Gomar', 'grado' => '3ro Secundaria', 'escuela' => 'Fundacion El Peñon', 'anio' => '2017', 'medalla' => 'Bronce', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '189', 'nombre' => 'Jorge David Cárdenas Sánchez', 'grado' => '3ro Secundaria', 'escuela' => 'Secundaria Ing. César Uscanga Uscanga', 'anio' => '2017', 'medalla' => 'Bronce', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '190', 'nombre' => 'Erika Samantha Sevilla Aguirre', 'grado' => '2do Secundaria', 'escuela' => 'Instituto Educativo las Fuentes', 'anio' => '2017', 'medalla' => 'Bronce', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '191', 'nombre' => 'Santiago Curiel Fuentes', 'grado' => '5to Primaria', 'escuela' => 'Escuela de la Ciudad de Curnavaca', 'anio' => '2017', 'medalla' => 'Oro', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '192', 'nombre' => 'Mía Dayane Díaz Reynaga', 'grado' => '6to Primaria', 'escuela' => 'Colegio Cristóbal Colón', 'anio' => '2017', 'medalla' => 'Oro', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '193', 'nombre' => 'Iván Escobedo', 'grado' => '5to Primaria', 'escuela' => 'Colegio Marton', 'anio' => '2017', 'medalla' => 'Plata', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '194', 'nombre' => 'Gerardo Barroeta Balboa', 'grado' => '6to Primaria', 'escuela' => 'Colegio Cristóbal Colón', 'anio' => '2017', 'medalla' => 'Plata', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '195', 'nombre' => 'David Francisco Torres Reyes', 'grado' => '5to Primaria', 'escuela' => 'Colegio Marton', 'anio' => '2017', 'medalla' => 'Bronce', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '196', 'nombre' => 'Nathalie López Pérez', 'grado' => '6to Primaria', 'escuela' => 'Colegio Wallaby', 'anio' => '2017', 'medalla' => 'Bronce', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '197', 'nombre' => 'Anuar del Barrio Oliver', 'grado' => '5to Primaria', 'escuela' => 'Colegio Marton', 'anio' => '2017', 'medalla' => 'Bronce', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '198', 'nombre' => 'Carlos Gael Morales Martinez', 'grado' => '5to Primaria', 'escuela' => 'Colegio Marton', 'anio' => '2018', 'medalla' => 'Bronce', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '199', 'nombre' => 'Juliana Michelle Salazar Rosas', 'grado' => '5to Primaria', 'escuela' => 'Colegio Potzanani', 'anio' => '2018', 'medalla' => 'Bronce', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '200', 'nombre' => 'Daniela Hermione Beltrán Ramirez', 'grado' => '6to Primaria', 'escuela' => 'Colegio Lowry', 'anio' => '2018', 'medalla' => 'Bronce', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '201', 'nombre' => 'Anuar Del Barrio Oliver', 'grado' => '6to Primaria', 'escuela' => 'Colegio Marton', 'anio' => '2018', 'medalla' => 'Bronce', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '202', 'nombre' => 'Ariel Rodríguez Camacho', 'grado' => '5to Primaria', 'escuela' => 'Colegio Marton', 'anio' => '2018', 'medalla' => 'Bronce', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '203', 'nombre' => 'Giovanni Cerritos Cortes', 'grado' => '3ro Primaria', 'escuela' => 'Colegio Potzanani', 'anio' => '2018', 'medalla' => 'Bronce', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '204', 'nombre' => 'Omar Del Barrio Oliver', 'grado' => '4to Primaria', 'escuela' => 'Colegio Marton', 'anio' => '2018', 'medalla' => 'Plata', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '205', 'nombre' => 'Kevin Jesús Vera Beltrán', 'grado' => '5to Primaria', 'escuela' => 'Primaria Emiliano Zapata', 'anio' => '2018', 'medalla' => 'Plata', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '206', 'nombre' => 'Luis Ángel Merino Favela', 'grado' => '6to Primaria', 'escuela' => 'Colegio Potzanani', 'anio' => '2018', 'medalla' => 'Plata', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '207', 'nombre' => 'Karla Aurora Torres Reyes', 'grado' => '6to Primaria', 'escuela' => 'Colegio Marton', 'anio' => '2018', 'medalla' => 'Plata', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '208', 'nombre' => 'Ivan Escobedo Mendoza', 'grado' => '6to Primaria', 'escuela' => 'Colegio Marton', 'anio' => '2018', 'medalla' => 'Plata', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '209', 'nombre' => 'David Torres Reyes', 'grado' => '6to Primaria', 'escuela' => 'Colegio Marton', 'anio' => '2018', 'medalla' => 'Oro', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '210', 'nombre' => 'Joshua Emiliano Dominguez Ignacio', 'grado' => '5to Primaria', 'escuela' => 'Colegio Potzanani', 'anio' => '2018', 'medalla' => 'Oro', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '211', 'nombre' => 'Francisco Villanueva Martinez', 'grado' => '5to Primaria', 'escuela' => 'Colegio Potzanani', 'anio' => '2018', 'medalla' => 'Oro', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '212', 'nombre' => 'Santiago Curiel Fuentes', 'grado' => '5to Primaria', 'escuela' => 'Colegio Moderno de Cuernavaca', 'anio' => '2018', 'medalla' => 'Oro', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '217', 'nombre' => 'Ulises Rodríguez Medellín', 'grado' => '2do Secundaria', 'escuela' => 'Colegio Boston', 'anio' => '2018', 'medalla' => 'Oro', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '216', 'nombre' => 'Bibiana Barreto Vargas', 'grado' => '3ro Secundaria', 'escuela' => 'Secundaria 17 de Marzo', 'anio' => '2018', 'medalla' => 'Oro', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '218', 'nombre' => 'Ángel Mauricio León Tejeda', 'grado' => '3ro Secundaria', 'escuela' => 'Centro Universitario Morelos', 'anio' => '2018', 'medalla' => 'Plata', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '219', 'nombre' => 'Mia Dayane Díaz Reynaga', 'grado' => '1ro Secundaria', 'escuela' => 'Colegio Cristóbal Colón', 'anio' => '2018', 'medalla' => 'Plata', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '220', 'nombre' => 'Jorge Javier Quiroz Hernandez', 'grado' => '1ro Secundaria', 'escuela' => 'Escuela Moliere Liceo Franco Mexicano A.C.', 'anio' => '2018', 'medalla' => 'Plata', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '221', 'nombre' => 'Rayhan Raziel Fuentes Garcia', 'grado' => '3ro Secundaria', 'escuela' => 'Centro Universitario Morelos', 'anio' => '2018', 'medalla' => 'Plata', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '222', 'nombre' => 'Jack Villalva Rodríguez', 'grado' => '3ro Secundaria', 'escuela' => 'Profesor Jesús Barreto y Molina', 'anio' => '2018', 'medalla' => 'Bronce', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '223', 'nombre' => 'Kengy Manuel Díaz Rosales', 'grado' => '1ro Secundaria', 'escuela' => 'Secundaria Técnica #4', 'anio' => '2018', 'medalla' => 'Bronce', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '224', 'nombre' => 'Oscar Gael Cisneros Molina', 'grado' => '3ro Secundaria', 'escuela' => 'Secundaria 17 de Marzo', 'anio' => '2018', 'medalla' => 'Bronce', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '225', 'nombre' => 'Tomás Lagunas Román', 'grado' => '3ro Secundaria', 'escuela' => 'Secundaria N#4 Valentín Gómez Farias', 'anio' => '2018', 'medalla' => 'Bronce', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '226', 'nombre' => 'Vajayanti Inara Gulshan Pirani Upshaw', 'grado' => '2do Secundaria', 'escuela' => 'Colegio Marymount', 'anio' => '2018', 'medalla' => 'Bronce', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '227', 'nombre' => 'Ángel Roman Torres García', 'grado' => '1ro Secundaria', 'escuela' => 'Colegio Quetzalli', 'anio' => '2018', 'medalla' => 'Bronce', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '228', 'nombre' => 'José Morales Medina', 'grado' => '2do Preparatoria', 'escuela' => 'Colegio de Bachilleres del Estado de Morelos 01', 'anio' => '2018', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '229', 'nombre' => 'Misael Juarez Montaño', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2018', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '230', 'nombre' => 'Valente Castillo Espitia', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2018', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '231', 'nombre' => 'Erick Francisco Vargas Rodríguez', 'grado' => '1ro Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2018', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '232', 'nombre' => 'Diego Araith Villalobos Hernandez', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Estudios Científicos y Tecnológicos 03', 'anio' => '2018', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '233', 'nombre' => 'Javier Ramirez Ochoa', 'grado' => '2do Preparatoria', 'escuela' => 'Colegio Boston', 'anio' => '2018', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '234', 'nombre' => 'Sergio Sánchez Nava', 'grado' => '2do Preparatoria', 'escuela' => 'Colegio Boston', 'anio' => '2018', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '235', 'nombre' => 'Christian Emiliano Avilez García', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Estudios Científicos y Tecnológicos 03', 'anio' => '2018', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '236', 'nombre' => 'José Ángel Resendiz Martinez', 'grado' => '2do Preparatoria', 'escuela' => 'Colegio de Bachilleres del Estado de Morelos 02', 'anio' => '2018', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '237', 'nombre' => 'José Daniel Moreno Ocampo', 'grado' => '2do Preparatoria', 'escuela' => 'Colegio Boston', 'anio' => '2018', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '239', 'nombre' => 'Austin Azael Ramírez Peralta', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Estudios Científicos y Tecnológicos 02', 'anio' => '2018', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '240', 'nombre' => 'Isabella Danahé García Aragón', 'grado' => '1ro Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2018', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '241', 'nombre' => 'Emmanuel Brito López', 'grado' => '1ro Preparatoria', 'escuela' => 'Preparatoria Federal por Cooperación Andrés Quintana Roo', 'anio' => '2018', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '242', 'nombre' => 'Yahir Alexis Flores Barreto', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2018', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '243', 'nombre' => 'Jorge Armando Barrera Catalan', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Estudios Científicos y Tecnológicos 03', 'anio' => '2018', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '244', 'nombre' => 'Jared Daniel Delgado Apaez', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Estudios Científicos y Tecnológicos 03', 'anio' => '2018', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '245', 'nombre' => 'Jalil Alberto Esau De la Torre Guerrero', 'grado' => '2do Preparatoria', 'escuela' => 'Colegio Nacional de Educación Profesional Técnica 241', 'anio' => '2018', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '246', 'nombre' => 'Joan Matias Romero Estrada', 'grado' => '5to Primaria', 'escuela' => 'Centro Educativo Lizardi', 'anio' => '2019.1', 'medalla' => 'Oro', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '247', 'nombre' => 'Santiago Curiel Fuentes', 'grado' => '6to Primaria', 'escuela' => 'Colegio Moderno de Cuernavaca', 'anio' => '2019.1', 'medalla' => 'Oro', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '248', 'nombre' => 'Francisco Villanueva Martínez', 'grado' => '5to Primaria', 'escuela' => 'Colegio Potzanani', 'anio' => '2019.1', 'medalla' => 'Oro', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '249', 'nombre' => 'David Torres Reyes', 'grado' => '6to Primaria', 'escuela' => 'Colegio Marton', 'anio' => '2019.1', 'medalla' => 'Oro', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '250', 'nombre' => 'Joshua Montes Flores', 'grado' => '6to Primaria', 'escuela' => 'Escuela Moliere Liceo Franco Mexicano A.C.', 'anio' => '2019.1', 'medalla' => 'Plata', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '251', 'nombre' => 'Paolo Vicenzo Falcon Sanchez', 'grado' => '6to Primaria', 'escuela' => 'Escuela Moliere Liceo Franco Mexicano A.C.', 'anio' => '2019.1', 'medalla' => 'Plata', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '252', 'nombre' => 'Jesus Kaleb Hernandez Salvitano', 'grado' => '4to Primaria', 'escuela' => 'Grupo Educativo Loyola', 'anio' => '2019.1', 'medalla' => 'Plata', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '253', 'nombre' => 'Kevin Jesus Vera Beltran', 'grado' => '5to Primaria', 'escuela' => 'Primaria Emiliano Zapata', 'anio' => '2019.1', 'medalla' => 'Plata', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '254', 'nombre' => 'Juan Cristobal Alvarez Garcia', 'grado' => '4to Primaria', 'escuela' => 'Colegio Carmen Sallés', 'anio' => '2019.1', 'medalla' => 'Bronce', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '255', 'nombre' => 'Valeria Colector Ovalle', 'grado' => '6to Primaria', 'escuela' => 'Colegio Carmen Sallés', 'anio' => '2019.1', 'medalla' => 'Bronce', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '256', 'nombre' => 'Arturo Alexei Serrano Guevara', 'grado' => '6to Primaria', 'escuela' => 'Colegio Carmen Sallés', 'anio' => '2019.1', 'medalla' => 'Bronce', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '257', 'nombre' => 'Joshua Emiliano Dominguez Ignacio', 'grado' => '5to Primaria', 'escuela' => 'Colegio Potzanani', 'anio' => '2019.1', 'medalla' => 'Bronce', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '258', 'nombre' => 'Maydali Barreto Carrillo', 'grado' => '6to Primaria', 'escuela' => 'Josefa Ortíz de Domínguez', 'anio' => '2019.1', 'medalla' => 'Bronce', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '259', 'nombre' => 'Ulises Rodríguez Medellín', 'grado' => '2do Secundaria', 'escuela' => 'Colegio Boston', 'anio' => '2019.1', 'medalla' => 'Oro', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '260', 'nombre' => 'Diego Jorgensen Fernández', 'grado' => '2do Secundaria', 'escuela' => 'Escuela Moliere Liceo Franco Mexicano A.C.', 'anio' => '2019.1', 'medalla' => 'Oro', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '261', 'nombre' => 'Jorge Javier Quiroz Hernandez', 'grado' => '2do Secundaria', 'escuela' => 'Escuela Moliere Liceo Franco Mexicano A.C.', 'anio' => '2019.1', 'medalla' => 'Plata', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '262', 'nombre' => 'Alejandra Galván Bojórquez', 'grado' => '2do Secundaria', 'escuela' => 'Colegio Hamilton', 'anio' => '2019.1', 'medalla' => 'Plata', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '263', 'nombre' => 'Amaya Morales Avila', 'grado' => '1ro Secundaria', 'escuela' => 'Colegio Hamilton', 'anio' => '2019.1', 'medalla' => 'Plata', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '264', 'nombre' => 'Cristóbal Eduardo Serrano Bahena', 'grado' => '3ro Secundaria', 'escuela' => 'Secundaria Técnica #14', 'anio' => '2019.1', 'medalla' => 'Plata', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '265', 'nombre' => 'Mayte Vargas Rodriguez', 'grado' => '2do Secundaria', 'escuela' => 'Secundaria 17 de Marzo', 'anio' => '2019.1', 'medalla' => 'Bronce', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '266', 'nombre' => 'Alberto Morales Farfán', 'grado' => '2do Secundaria', 'escuela' => 'Colegio Monte Albán', 'anio' => '2019.1', 'medalla' => 'Bronce', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '267', 'nombre' => 'Ángel Emiliano Vargas Carreto', 'grado' => '2do Secundaria', 'escuela' => 'Colegio Compton', 'anio' => '2019.1', 'medalla' => 'Bronce', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '268', 'nombre' => 'Luis Antonio Jimenez', 'grado' => '3ro Secundaria', 'escuela' => 'Colegio Ludere Victum', 'anio' => '2019.1', 'medalla' => 'Bronce', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '269', 'nombre' => 'Maria Elizabeth Orduña Toledo', 'grado' => '2do Secundaria', 'escuela' => 'Secundaria Mariano Matamoros', 'anio' => '2019.1', 'medalla' => 'Bronce', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '270', 'nombre' => 'Andrea Aquino Flores', 'grado' => '2do Secundaria', 'escuela' => 'Centro Educativo Americano', 'anio' => '2019.1', 'medalla' => 'Bronce', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '271', 'nombre' => 'Leonardo Román Carrillo', 'grado' => '1ro Preparatoria', 'escuela' => 'Colegio Quebec', 'anio' => '2019.1', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '272', 'nombre' => 'Sergio Sánchez Nava', 'grado' => '2do Preparatoria', 'escuela' => 'Colegio Boston', 'anio' => '2019.1', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '273', 'nombre' => 'Erick Francisco Vargas Rodríguez', 'grado' => '1ro Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2019.1', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '274', 'nombre' => 'Javier Ramirez Ochoa', 'grado' => '2do Preparatoria', 'escuela' => 'Colegio Boston', 'anio' => '2019.1', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '275', 'nombre' => 'Ramona Nájera Fuentes', 'grado' => '1ro Preparatoria', 'escuela' => 'Instituto Tecnológico y de Estudios Superiores de Monterrey Campus Cuernavaca', 'anio' => '2019.1', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '276', 'nombre' => 'José Ehécatl Mejía Yáñez', 'grado' => '1ro Preparatoria', 'escuela' => 'Colegio Español de Morelos', 'anio' => '2019.1', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '277', 'nombre' => 'José Daniel Moreno Ocampo', 'grado' => '2do Preparatoria', 'escuela' => 'Colegio Boston', 'anio' => '2019.1', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '278', 'nombre' => 'Ángel Mauricio León Tejeda', 'grado' => '3ro Secundaria', 'escuela' => 'Centro Universitario Morelos', 'anio' => '2019.1', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '279', 'nombre' => 'Diego Alberto Figueroa Avalos', 'grado' => '1ro Preparatoria', 'escuela' => 'Colegio Boston', 'anio' => '2019.1', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '280', 'nombre' => 'Julian Pérez Espinoza', 'grado' => '1ro Preparatoria', 'escuela' => 'Colegio Boston', 'anio' => '2019.1', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '281', 'nombre' => 'Laura Karina Jurado Hernández', 'grado' => '1ro Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2019.1', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '282', 'nombre' => 'Johan Alejandro Cerezo Pacheco', 'grado' => '1ro Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2019.1', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '283', 'nombre' => 'Mariana de la Rosa Batalla', 'grado' => '2do Preparatoria', 'escuela' => 'Colegio Boston', 'anio' => '2019.1', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '284', 'nombre' => 'Rafael Rodríguez Trejo', 'grado' => '2do Preparatoria', 'escuela' => 'Colegio Boston', 'anio' => '2019.1', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '285', 'nombre' => 'Ángel Jesús Álvarez Neri', 'grado' => '1ro Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2019.1', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '286', 'nombre' => 'Abril Reyes Flores', 'grado' => '2do Preparatoria', 'escuela' => 'Escuela de Técnicos Laboratoristas', 'anio' => '2019.1', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '287', 'nombre' => 'Santiago Chavez Gonzalez', 'grado' => '6to Primaria', 'escuela' => 'Instituto Educativo las Fuentes', 'anio' => '2019.2', 'medalla' => 'Bronce', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '288', 'nombre' => 'Sophia Ahedo Olivera', 'grado' => '6to Primaria', 'escuela' => 'Primaria Ignacio Zaragoza', 'anio' => '2019.2', 'medalla' => 'Bronce', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '289', 'nombre' => 'Sebastián Amaro Camacho', 'grado' => '5to Primaria', 'escuela' => 'Colegio Potzanani', 'anio' => '2019.2', 'medalla' => 'Bronce', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '290', 'nombre' => 'Luis Santiago Lopez Diaz', 'grado' => '6to Primaria', 'escuela' => 'Lobos Morelos', 'anio' => '2019.2', 'medalla' => 'Bronce', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '291', 'nombre' => 'Ricardo David Corona Castillo', 'grado' => '6to Primaria', 'escuela' => 'Lobos Morelos', 'anio' => '2019.2', 'medalla' => 'Bronce', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '292', 'nombre' => 'Luis Manuel Angeles Barreto', 'grado' => '5to Primaria', 'escuela' => 'Colegio ABC', 'anio' => '2019.2', 'medalla' => 'Bronce', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '293', 'nombre' => 'Eva Paloma Nieto Evangelista', 'grado' => '5to Primaria', 'escuela' => 'Colegio México', 'anio' => '2019.2', 'medalla' => 'Bronce', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '294', 'nombre' => 'Leonardo Sakbel Rojas Uribe', 'grado' => '5to Primaria', 'escuela' => 'Colegio ABC', 'anio' => '2019.2', 'medalla' => 'Bronce', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '295', 'nombre' => 'Brayan Jesus Castillo Badillo', 'grado' => '6to Primaria', 'escuela' => 'Primaria Ejercito Mexicano', 'anio' => '2019.2', 'medalla' => 'Plata', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '296', 'nombre' => 'Joshua Emiliano Dominguez Ignacio', 'grado' => '6to Primaria', 'escuela' => 'Colegio Potzanani', 'anio' => '2019.2', 'medalla' => 'Plata', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '297', 'nombre' => 'Axel Alberto González Fabián', 'grado' => '5to Primaria', 'escuela' => 'Instituto Educativo las Fuentes', 'anio' => '2019.2', 'medalla' => 'Plata', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '298', 'nombre' => 'Fatima Dayse Borja Martinez', 'grado' => '5to Primaria', 'escuela' => 'Primaria 5 de Febrero', 'anio' => '2019.2', 'medalla' => 'Plata', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '299', 'nombre' => 'Ana Fernanda López Rosas', 'grado' => '6to Primaria', 'escuela' => 'Instituto Educativo las Fuentes', 'anio' => '2019.2', 'medalla' => 'Plata', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '300', 'nombre' => 'Ethan Adachiel Fernandez Cortes', 'grado' => '6to Primaria', 'escuela' => 'Colegio ABC', 'anio' => '2019.2', 'medalla' => 'Oro', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '301', 'nombre' => 'Fabricio Fabian Mejía Caballero', 'grado' => '6to Primaria', 'escuela' => 'Gregorio Torres Quintero', 'anio' => '2019.2', 'medalla' => 'Oro', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '302', 'nombre' => 'Francisco Villanueva Martinez', 'grado' => '6to Primaria', 'escuela' => 'Colegio Potzanani', 'anio' => '2019.2', 'medalla' => 'Oro', 'categoria' => 'Primaria' ]);
    Famoso::create([ 'id' => '303', 'nombre' => 'Diego Jorgensen Fernández', 'grado' => '3ro Secundaria', 'escuela' => 'Escuela Moliere Liceo Franco Mexicano A.C.', 'anio' => '2019.2', 'medalla' => 'Oro', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '304', 'nombre' => 'Ulises Rodriguez Medellin', 'grado' => '3ro Secundaria', 'escuela' => 'Colegio Boston', 'anio' => '2019.2', 'medalla' => 'Oro', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '305', 'nombre' => 'Alejandra Galván Bojórquez', 'grado' => '3ro Secundaria', 'escuela' => 'Colegio Hamilton', 'anio' => '2019.2', 'medalla' => 'Oro', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '306', 'nombre' => 'Joan Matias Romero Estrada', 'grado' => '6to Primaria', 'escuela' => 'Centro Educativo Lizardi', 'anio' => '2019.2', 'medalla' => 'Plata', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '307', 'nombre' => 'David Torres Reyes', 'grado' => '1ro Secundaria', 'escuela' => 'Colegio Marton', 'anio' => '2019.2', 'medalla' => 'Plata', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '308', 'nombre' => 'Alessandro Leal Amador', 'grado' => '3ro Secundaria', 'escuela' => 'Instituto Educativo las Fuentes', 'anio' => '2019.2', 'medalla' => 'Plata', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '309', 'nombre' => 'Ernesto Sebastian Castañeda Santiago', 'grado' => '2do Secundaria', 'escuela' => 'Colegio Hamilton', 'anio' => '2019.2', 'medalla' => 'Plata', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '310', 'nombre' => 'Santiago Curiel Fuentes', 'grado' => '1ro Secundaria', 'escuela' => 'Colegio Marton', 'anio' => '2019.2', 'medalla' => 'Plata', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '311', 'nombre' => 'Fernanda Isabel Figueroa González', 'grado' => '3ro Secundaria', 'escuela' => 'Colegio Monte Albán', 'anio' => '2019.2', 'medalla' => 'Plata', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '312', 'nombre' => 'Jorge Javier Quiroz Hernández', 'grado' => '3ro Secundaria', 'escuela' => 'Escuela Moliere Liceo Franco Mexicano A.C.', 'anio' => '2019.2', 'medalla' => 'Bronce', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '313', 'nombre' => 'Israel Nieto Evangelista', 'grado' => '3ro Secundaria', 'escuela' => 'Colegio México', 'anio' => '2019.2', 'medalla' => 'Bronce', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '314', 'nombre' => 'Omar Villalobos Román', 'grado' => '2do Secundaria', 'escuela' => 'Colegio Hamilton', 'anio' => '2019.2', 'medalla' => 'Bronce', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '315', 'nombre' => 'Edgar Gael Bravo Jara', 'grado' => '2do Secundaria', 'escuela' => 'Instituto Educativo las Fuentes', 'anio' => '2019.2', 'medalla' => 'Bronce', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '316', 'nombre' => 'Valeria Colector Ovalle', 'grado' => '1ro Secundaria', 'escuela' => 'Colegio Carmen Sallés', 'anio' => '2019.2', 'medalla' => 'Bronce', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '317', 'nombre' => 'Ana Paola Galindo Romero', 'grado' => '2do Secundaria', 'escuela' => 'Colegio Hamilton', 'anio' => '2019.2', 'medalla' => 'Bronce', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '318', 'nombre' => 'Emmanuel Isaac García Sanabria', 'grado' => '3ro Secundaria', 'escuela' => 'Fundacion El Peñon', 'anio' => '2019.2', 'medalla' => 'Bronce', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '319', 'nombre' => 'Angel Emiliano Vargas Carreto', 'grado' => '3ro Secundaria', 'escuela' => 'Colegio Boston', 'anio' => '2019.2', 'medalla' => 'Bronce', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '320', 'nombre' => 'Carlos Eduardo Rojas Samano', 'grado' => '3ro Secundaria', 'escuela' => 'Colegio Hamilton', 'anio' => '2019.2', 'medalla' => 'Bronce', 'categoria' => 'Secundaria' ]);
    Famoso::create([ 'id' => '321', 'nombre' => 'Erick Francisco Vargas Rodríguez', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2019.2', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '322', 'nombre' => 'Leonardo Román Carrillo', 'grado' => '2do Preparatoria', 'escuela' => 'Colegio Quebec', 'anio' => '2019.2', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '323', 'nombre' => 'Geovanni Jafet Gómez Solis', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Estudios Científicos y Tecnológicos 03', 'anio' => '2019.2', 'medalla' => 'Oro', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '324', 'nombre' => 'Isabella Danahé García Aragón', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2019.2', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '325', 'nombre' => 'Ángel Jesús Álvarez Neri', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2019.2', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '326', 'nombre' => 'Roberto Giuliani Albarran Avendaño', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Estudios Científicos y Tecnológicos 03', 'anio' => '2019.2', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '327', 'nombre' => 'Aaron Isaac Flores Melchor', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Estudios Científicos y Tecnológicos 03', 'anio' => '2019.2', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '328', 'nombre' => 'Laura Karina Jurado Hernández', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Bachillerato Tecnológico Agropecuario 39', 'anio' => '2019.2', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '329', 'nombre' => 'Noel Jhoa Delgado Garcia', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Estudios Científicos y Tecnológicos 03', 'anio' => '2019.2', 'medalla' => 'Plata', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '330', 'nombre' => 'Omar Redondo Gonzalez', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Estudios Científicos y Tecnológicos 03', 'anio' => '2019.2', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '331', 'nombre' => 'José Ehécatl Mejía Yáñez', 'grado' => '2do Preparatoria', 'escuela' => 'Colegio Español de Morelos', 'anio' => '2019.2', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '332', 'nombre' => 'Beatriz Adriana Molina Salas', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Estudios Científicos y Tecnológicos 03', 'anio' => '2019.2', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '333', 'nombre' => 'Victor Sebastian Sánchez Reyes', 'grado' => '1ro Preparatoria', 'escuela' => 'Centro de Estudios Científicos y Tecnológicos 03', 'anio' => '2019.2', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '334', 'nombre' => 'Irwin Raúl Martínez Tovar', 'grado' => '2do Preparatoria', 'escuela' => 'Fundacion El Peñon', 'anio' => '2019.2', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '335', 'nombre' => 'Yessica Janet Bañón Nájera', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Estudios Científicos y Tecnológicos 03', 'anio' => '2019.2', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '336', 'nombre' => 'Michelle Carolina Isabel Corcino Jimenez', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Estudios Científicos y Tecnológicos 03', 'anio' => '2019.2', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '337', 'nombre' => 'Ernesto Domínguez Montesino', 'grado' => '2do Preparatoria', 'escuela' => 'Colegio Quebec', 'anio' => '2019.2', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]);
    Famoso::create([ 'id' => '338', 'nombre' => 'Monserrat Zenil Hernández', 'grado' => '2do Preparatoria', 'escuela' => 'Centro de Estudios Científicos y Tecnológicos 03', 'anio' => '2019.2', 'medalla' => 'Bronce', 'categoria' => 'Abierta' ]); 
  }
}