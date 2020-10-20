<?php

use Illuminate\Database\Seeder;

class UserTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'Wahid Dwipa Baskara',
            'username' => 'wahid_debe',
            'password' => bcrypt('password'),
            'email' => 'wahid@gmail.com'
        ]);
    }
}
