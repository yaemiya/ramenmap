<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();

        DB::table('categories')->insert([
            ['name' => '選択してくだい'],
            ['name' => 'ラーメン'],
            ['name' => 'つけ麺'],
            ['name' => '油そば・まぜそば'],
            ['name' => '担々麺'],
            ['name' => 'その他']
        ]);
    }
}
