<?php

use Illuminate\Database\Seeder;

class SubCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subcategories')->truncate();

        DB::table('subcategories')->insert([
            ['name' => '選択してください'],
            ['name' => '醤油'],
            ['name' => '味噌'],
            ['name' => '塩'],
            ['name' => '豚骨'],
            ['name' => '豚骨醤油'],
            ['name' => '鶏白湯'],
            ['name' => '牛骨'],
            ['name' => 'ドロ系'],
            ['name' => '背脂系'],
            ['name' => '海鮮／煮干し系'],
            ['name' => '該当なし／その他']
        ]);
    }
}
