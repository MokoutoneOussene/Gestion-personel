<?php

namespace App\Providers;

use App\Models\Personnel;
use Illuminate\Support\ServiceProvider;

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

        // si on fini d'enregistrer un personnel, il cree un matricule en mettant le champ MATRICULE à jour
        Personnel::created(function ($person_mat) {
            $person_mat->update(['matricule' => 'M-000' . $person_mat->id]);
        });
    }
}
