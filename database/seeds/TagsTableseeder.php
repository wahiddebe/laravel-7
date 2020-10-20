<?php

use Illuminate\Database\Seeder;
use illuminate\Support\Str;

class TagsTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = collect(['Bugs', 'Help', 'Laravel']);
        $tags->each(function ($c) {
            \App\Tag::create([
                'name' => $c,
                'slug' => Str::slug($c),
            ]);
        });
    }
}
