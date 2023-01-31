<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Attualità e dintorni',
            'Scuola',
            'Politica',
            'Estero',
            'Italia',
            'Cucina',
            'Informatica',
            'Gossip',
        ];

        foreach($categories as $category) {
            Category::create([
                'slug' => Str::slug($category),
                'name' => $category,
                'description'
            ]);
        }
    }
}
