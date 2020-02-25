<?php

use Illuminate\Database\Seeder;
use App\Miembros;
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
        $this->call(MiembrosTableSeeder::class);
        $this->command->info("Semilla plantada");
    }
}
class UsersTableSeeder extends Seeder {
	public function run(){
		User::create([
			'name' => "admin",
			'email' => "info@omri.org.mx",
			'password' => Hash::make('ikb4n45')
		]); // 12345678
	}
}
class MiembrosTableSeeder extends Seeder {
	public function run(){
		Miembro::create([
			'nombre' => "Isaí Landa",
			'puesto' => "Desarrollador de Software",
			'link_facebook' => "https://facebook.com/pronficilio",
			'correo' => "info@omri.org.mx"
		]);
	}
}