<?php

use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            [
                'name' => 'joao',
                'email' => 'joao@gmail.com',
                'cpf' => '01254875218'
            ],
            [
                'name' => 'maria',
                'email' => 'maria@gmail.com',
                'cpf' => '58412369578'
            ],
            [
                'name' => 'pedro',
                'email' => 'pedro@gmail.com',
                'cpf' => '15789625485'
            ],
        ]);
    }
}
