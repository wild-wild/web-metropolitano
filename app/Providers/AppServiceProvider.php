<?php

namespace App\Providers;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use App\Models\Licencias;
use Illuminate\Support\Facades\Config; // Importa Config

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        // Paginator::useBootstrap(); // paginación
        // Schema::defaultStringLength(191); // error de envío de formulario

        // $this->estadoSol = '0';
        // $countLicenciasEstado = Licencias::where('estadoSolicitud', $this->estadoSol)->count();
        // $this->contadorLicencias = $countLicenciasEstado;
        // Config::set('dato', $this->contadorLicencias);

        // dd($this->contadorLicencias);// Agrega esta línea para depurar
    }
}
