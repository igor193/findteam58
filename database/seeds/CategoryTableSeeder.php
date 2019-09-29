<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'business' => 'Бизнес',
            'music' => 'Музыка',
            'games' => 'Игры',
            'sport' => 'Спорт',
            'invest' => 'Инвестиции',
            'it' => 'ИТ технологии'
       ];

       foreach ($categories as $key => $category) {

        DB::table('categories')->insert([
            'parent_id' => 0,
            'slug' => $key,
            'name' => $category
        ]);
       }
    }
}
