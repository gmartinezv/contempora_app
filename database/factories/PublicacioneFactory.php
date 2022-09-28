<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Usuario;

class PublicacioneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->sentence($nbWords = 7, $variableNbWords = true) ,
            'descripcion' => $this->faker->paragraph(), 
            'foto' => $this->faker->imageUrl($width = 640, $height = 480) ,  
            'activo' => $this->faker->randomElement([true , false]),                         
            'usuario_id' => Usuario::all('id')->random(),
        ];
    }
}
