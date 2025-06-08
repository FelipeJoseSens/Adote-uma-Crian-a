<?php

namespace Database\Seeders;

use App\Models\Crianca;
use Illuminate\Database\Seeder;

class CriancaSeeder extends Seeder
{
    public function run()
    {
        $criancas = [
            [
                'nome' => 'João',
                'idade' => 7,
                'descricao' => 'João adora brincar com carrinhos e sonha ser piloto.',
                'presente_desejado' => 'Carrinho de controle remoto',
                'foto' => 'criancas/joao.jpg'
            ],
            [
                'nome' => 'Maria',
                'idade' => 5,
                'descricao' => 'Maria ama bonecas e passar tempo com sua avó.',
                'presente_desejado' => 'Boneca da Frozen',
                'foto' => 'criancas/maria.jpg'
            ],
            // Adicione mais 5 crianças abaixo
            [
                'nome' => 'Lucas',
                'idade' => 6,
                'descricao' => 'Lucas gosta de Lego e construir castelos imaginários.',
                'presente_desejado' => 'Kit Lego City',
                'foto' => 'criancas/lucas.jpg'
            ],
            [
                'nome' => 'Ana',
                'idade' => 9,
                'descricao' => 'Ana é artista e passa horas desenhando paisagens coloridas.',
                'presente_desejado' => 'Kit de pintura aquarela',
                'foto' => 'criancas/ana.jpg'
            ]
        ];

        foreach ($criancas as $crianca) {
            Crianca::create($crianca);
        }
    }
}
