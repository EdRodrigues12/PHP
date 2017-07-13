<?php

use Illuminate\Database\Seeder;

class UserTableSeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'Ednaldo Rodrigues',
            'email' => 'eddi@gmail.com',
            'password' => bcrypt('123456')

        ]);
    }
}
