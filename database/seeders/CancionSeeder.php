<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cancion;

class CancionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $canciones = [
            [
                'Nombredelcancion' => 'Shivers',
                'Duraciondelacancion' => '3:27',
                'Reproducciones' => '1.031.502.913',
            ],
            [
                'Nombredelcancion' => 'Enseñame a bailar',
                'Duraciondelacancion' => '2:56',
                'Reproducciones' => '183.762.803',
            ],
            [
                'Nombredelcancion' => 'Injection',
                'Duraciondelacancion' => '3:19',
                'Reproducciones' => '49.809.696',
            ],
            [
                'Nombredelcancion' => 'For Those Abous To Rock',
                'Duraciondelacancion' => '5:44',
                'Reproducciones' => '97.013.909',
            ],
            [
                'Nombredelcancion' => 'Desde Mis Ojos',
                'Duraciondelacancion' => '3:44',
                'Reproducciones' => '68.332.045',
            ],
        ];

         Cancion::insert($canciones);

    }
}
