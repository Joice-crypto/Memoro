<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
        Validator::extend('imagem', function ($attribute, $value, $parameters, $validator) {
            // Sua lógica de validação para imagem aqui
            // Retorna true se a validação for bem-sucedida, false caso contrário

            // Exemplo de lógica: verifica se o arquivo é uma imagem válida
            $allowedMimes = ['jpeg', 'png', 'jpg', 'gif'];
            $uploadedMime = $value->getClientOriginalExtension();

            return in_array($uploadedMime, $allowedMimes);
        });
    }
}
