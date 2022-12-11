<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Artista;

class ArtistaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $artistas = [
            [
                'Nombredelartista' => 'Bad Bunny',
                'Discografia' => 'Un verano sin ti',
            ],
            [
                'Nombredelartista' => 'Daddy Yankee',
                'Discografia' => 'Leggendaddy',
            ],
            [
                'Nombredelartista' => 'Morat',
                'Discografia' => '¿A donde vamos?',
            ],
            [
                'Nombredelartista' => 'The Seige',
                'Discografia' => 'Duality',
            ],
            [
                'Nombredelartista' => 'NEFFEX',
                'Discografia' => 'Choose It',
            ],
        ];

        Artista::insert($artistas);
    }
}
