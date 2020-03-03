<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'user01',
                'email' => 'user01@gmail.com',
                'password' => bcrypt('user123')
            ],
            [
                'name' => 'user02',
                'email' => 'user02@gmail.com',
                'password' => bcrypt('user123')
            ],
        ]);
    }
}
