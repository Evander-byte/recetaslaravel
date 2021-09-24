<?php

namespace App\Providers;

use View;
use App\CategoriaReceta;
use Illuminate\Support\ServiceProvider;

class CategoriasProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    // Dependecias que se van a ejecutar al configurar el proyecto (Usar cosas que no son de Laravel)
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    // Ejecuta todo cuando la aplicación esta lista (Usar cosas de Laravel)
    public function boot()
    {
        View::composer('*', function($view){
            $categorias = CategoriaReceta::all();
            $view->with('categorias', $categorias);
        });
    }
}
