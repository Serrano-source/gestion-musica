<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Album;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $albums = [
            [
                'Titulo' => 'X100PRE',
                'Artista' => 'Bad Bunny',
                'Añodesalida' => '2018',
            ],
            [
                'Titulo' => 'YHLQMDLG',
                'Artista' => 'Bad Bunny',
                'Añodesalida' => '2020',
            ],
            [
                'Titulo' => 'Leggendaddy',
                'Artista' => 'Daddy Yankee',
                'Añodesalida' => '2022',
            ],
            [
                'Titulo' => 'Moments',
                'Artista' => 'Hollow Coves',
                'Añodesalida' => '2019',
            ],
            [
                'Titulo' => 'Atlas: 1',
                'Artista' => 'Sleeping At Last',
                'Añodesalida' => '2014',
            ],
        ];

        Album::insert($albums);
    }
}
