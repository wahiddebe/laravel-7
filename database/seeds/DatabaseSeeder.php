<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableseeder::class);
        $this->call(CategoriesTableseeder::class);
        $this->call(TagsTableseeder::class);
    }
}
