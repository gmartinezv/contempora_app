<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Usuario;
use App\Models\Publicacione;

class ComentarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [          
            'descripcion' => $this->faker->paragraph(),            
            'activo' => $this->faker->randomElement([true , false]),                         
            'usuario_id' => Usuario::all('id')->random(),
            'publicacion_id' => Publicacione::all('id')->random(),
        ];

      
    }
}
