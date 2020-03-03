<?php

use Illuminate\Database\Seeder;

class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eventos')->insert([
            [
                'name' => 'Abc x America',
                'descricao' => 'Classico do estado decidindo classificacao para a serie B',
                'categoria' => 'jogo',
                'data_evento' => '2020-03-22',
                'cidade' => 'natal'
            ],
            [
                'name' => 'Show do roberto carlos',
                'descricao' => 'Grandes classicos do rei',
                'categoria' => 'show',
                'data_evento' => '2020-04-21',
                'cidade' => 'rio de janeiro'
            ],

            [
                'name' => 'Gremio x Corinthians',
                'descricao' => 'Jogo decisivo para o brasileirao serie A',
                'categoria' => 'jogo',
                'data_evento' => '2020-04-14',
                'cidade' => 'sao paulo'
            ],
            [
                'name' => 'DevOps Trainning',
                'descricao' => 'Maior evento multiempresarial do estado do RN',
                'categoria' => 'evento',
                'data_evento' => '2020-04-08',
                'cidade' => 'natal'
            ],

            [
                'name' => 'Saga entrentenimento ',
                'descricao' => 'Maior evento nerd&geek do nordeste',
                'categoria' => 'evento',
                'data_evento' => '2020-06-18',
                'cidade' => 'natal'
            ],

            [
                'name' => 'U2 Brazillian Tour',
                'descricao' => 'Show unico da banda inglesa no Brasil',
                'categoria' => 'show',
                'data_evento' => '2020-05-28',
                'cidade' => 'brasilia'
            ],
            [
                'name' => 'Flamengo x Fluminense',
                'descricao' => 'Valendo a lideranca da 28ª rodada do brasileirao',
                'categoria' => 'jogo',
                'data_evento' => '2020-04-02',
                'cidade' => 'rio de janeiro'
            ],

            [
                'name' => 'Sao paulo x Palmeiras',
                'descricao' => 'Mais uma rivalidade paulista em campo',
                'categoria' => 'jogo',
                'data_evento' => '2020-03-14',
                'cidade' => 'sao paulo'
            ],
            [
                'name' => 'Atletico MG x Guara',
                'descricao' => 'Valendo classificacao para a libertadores',
                'categoria' => 'jogo',
                'data_evento' => '2020-05-23',
                'cidade' => 'brasilia'
            ],
        ]);
    }
}
