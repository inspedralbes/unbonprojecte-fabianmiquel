<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RandomAnimalController extends Controller
{
    public function getRandomAnimal()
    {
        $animals = [
            'Elefante', 'Jirafa', 'Leon', 'Tigre', 'Oso', 'Canguro', 'Pulpo', 'Pato', 'Cocodrilo',
            'Hipopotamo', 'Cebra', 'Pinguino', 'Avestruz', 'Delfin', 'Murcielago', 'Lobo', 'Aguila'
        ];

        $randomAnimal = $animals[array_rand($animals)];

        $characteristics = [
            'peludo', 'escamoso', 'rapido', 'lento', 'volador', 'acuatico', 'nocturno', 'diurno',
            'herbivoro', 'carnivoro', 'omnivoro', 'grande', 'pequeno', 'colorido', 'sigiloso'
        ];

        $randomCharacteristic = $characteristics[array_rand($characteristics)];


        $imageUrl = '../' . strtolower($randomAnimal) . '.jpg';

        $data = [
            'animal' => $randomAnimal,
            'characteristic' => $randomCharacteristic,
            'image_url' => $imageUrl,
        ];

        return response()->json($data);
    }
}
