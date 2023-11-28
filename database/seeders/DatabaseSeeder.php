<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use \App\Models\Todo;

class DatabaseSeeder extends Seeder
{
    public $todoData = [
        ['description'=>'Arrumar a cama',                    'has_done'=>'0'],
        ['description'=>'Lavar e guardar a louça',           'has_done'=>'0'],
        ['description'=>'Limpar a cozinha',                  'has_done'=>'1'],
        ['description'=>'Varrer e aspirar o chão',           'has_done'=>'0'],
        ['description'=>'Recolher o que está fora do lugar', 'has_done'=>'1'],
        ['description'=>'Pôr o lixo para fora',              'has_done'=>'1'],
        ['description'=>'Cozinhar',                          'has_done'=>'0'],
        ['description'=>'Limpar o banheiro',                 'has_done'=>'0'],
        ['description'=>'Lavar a louça',                     'has_done'=>'0'],
        ['description'=>'Sair com o cachorro',               'has_done'=>'0']
    ];
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        foreach($this->todoData as $todo) {
            Todo::create($todo);
        }
    }
}
