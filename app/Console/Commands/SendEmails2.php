<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendEmails2 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:repeaters_invitation_group1';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Envia mail a personas que se registraron en la 13a OMRI 2020 pero no están registrados para la 14va (Group 1)';

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
        app('App\Http\Controllers\RegistroController')->enviarInvitacionRepetidores(0,300);
        $status = 1;

        // Con $this->info() puedes mandar a imprimir a consola para informar al usuario si se ejecutó correctamente el comando o hubo algún error
        $this->info($status ? 'El comando se ejecutó correctamente' : 'Ocurrió un error' );
    }
}
