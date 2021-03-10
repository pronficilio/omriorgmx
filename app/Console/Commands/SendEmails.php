<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

// Si ejecutas php artisan list, aparecerá la descripción ($description) y el comando a ejecutar ($signature)

// Ejecuta php artisan email:send para ver la magía

// Link de Apoyo: https://styde.net/crear-comandos-personalizados-en-laravel/

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Envía correos';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // En handle() puedes invocar modelos para usar sus funciones, este es tu patio de juegos :D

        $status = 1 ;

        // Con $this->info() puedes mandar a imprimir a consola para informar al usuario si se ejecutó correctamente el comando o hubo algún error
        $this->info($status ? 'El comando se ejecutó correctamente' : 'Ocurrió un error' );
    }
}
