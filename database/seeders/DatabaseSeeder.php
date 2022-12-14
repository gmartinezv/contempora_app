<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Usuario::factory(10)->create();
        \App\Models\Publicacione::factory(10)->create();
        \App\Models\Comentario::factory(10)->create();
    }
}
