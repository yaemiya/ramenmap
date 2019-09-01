<?php

use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            [
                'name' => 'らぁ麺 とうひち',
                'address' => '京都府京都市北区大宮北箱ノ井町33-6 セルリアンハイツ 1F',
                'category_id' => 2,
                'subcategory_id' => 2,
                'user_id' => 1,
                'image' => 'https://tblg.k-img.com/restaurant/images/Rvw/112501/150x150_square_112501907.jpg',
                'review' => 'おいしい'
            ],
            [
                'name' => '麺屋 さん田',
                'address' => '京都府京都市右京区西院追分町7-4',
                'category_id' => 2,
                'subcategory_id' => 2,
                'user_id' => 1,
                'image' => 'https://tblg.k-img.com/restaurant/images/Rvw/112149/150x150_square_112149283.jpg',
                'review' => 'なかなか',
            ],

            [
                'name' => '煮干そば 藍',
                'address' => '京都府京都市左京区吉田下阿達町29-1',
                'category_id' => 2,
                'subcategory_id' => 11,
                'user_id' => 1,
                'image' => 'https://tblg.k-img.com/restaurant/images/Rvw/50909/150x150_square_50909806.jpg',
                'review' => 'でりしゃす'
            ],

            [
                'name' => '麺屋 裕',
                'address' => '京都府京都市山科区東野百拍子町25-2', 'category_id' => 2,
                'subcategory_id' => 11,
                'user_id' => 1,
                'image' => 'https://tblg.k-img.com/restaurant/images/Rvw/97717/150x150_square_97717883.jpg',
                'review' => '味わい深い'
            ],

            [
                'name' => '山崎麺二郎',
                'address' => '京都府京都市中京区西ノ京北円町1-8',
                'category_id' => 2,
                'subcategory_id' => 11,
                'user_id' => 1,
                'image' => 'https://tblg.k-img.com/restaurant/images/Rvw/49393/150x150_square_49393244.jpg',
                'review' => 'すごい'
            ],

            [
                'name' => 'あいつのラーメン かたぐるま',
                'address' => '京都府京都市下京区西七条西八反田町77 ガーディアン青山 1F',
                'category_id' => 2,
                'subcategory_id' => 6,
                'user_id' => 1,
                'image' => 'https://tblg.k-img.com/restaurant/images/Rvw/103156/100x100_square_103156128.jpg',
                'review' => '言葉に言い表せない'
            ],

            [
                'name' => '本家 第一旭 たかばし本店', 'address' => '京都府京都市下京区東塩小路向畑町845',
                'category_id' => '2',
                'subcategory_id' => '2',
                'user_id' => 2,
                'image' => 'https://tblg.k-img.com/restaurant/images/Rvw/27736/100x100_square_27736824.jpg',
                'review' => 'これぞ中華そば',
            ],

            [
                'name' => '麺屋 極鶏',
                'address' => '京都府京都市左京区一乗寺西閉川原町29-7',
                'category_id' => '2',
                'subcategory_id' => '9',
                'user_id' => 2,
                'image' => 'https://tblg.k-img.com/restaurant/images/Rvw/109825/100x100_square_109825288.jpg',
                'review' => 'シチューです',
            ],

            [
                'name' => '吟醸らーめん 久保田 本店',
                'address' => '京都府京都市下京区西松屋町563 フジ萬ビル 1F',
                'category_id' => '2',
                'subcategory_id' => '3',
                'user_id' => 2,
                'image' => 'https://tblg.k-img.com/restaurant/images/Rvw/38576/100x100_square_38576119.jpg',
                'review' => '濃厚な味噌つけ麺♪',
            ],

            [
                'name' => 'セアブラノ神 壬生本店',
                'address' => '京都府京都市中京区壬生相合町25-4 デイスターアベニュー 1Ｆ',
                'category_id' => '2',
                'subcategory_id' => '10',
                'user_id' => 3,
                'image' => 'https://tblg.k-img.com/restaurant/images/Rvw/99117/100x100_square_99117278.jpg',
                'review' => 'ラーメンの神',
            ],

            [
                'name' => '麺や高倉二条',
                'address' => '京都府京都市中京区観音町64-1',
                'category_id' => '2',
                'subcategory_id' => '5',
                'user_id' => 3,
                'image' => 'https://tblg.k-img.com/restaurant/images/Rvw/61249/100x100_square_61249177.jpg',
                'review' => '上品な和のテイスト',
            ],

            [
                'name' => '新宿めんや風花 本店',
                'address' => '京都府京都市下京区三軒町551',
                'category_id' => '2',
                'subcategory_id' => '4',
                'user_id' => 3,
                'image' => 'https://tblg.k-img.com/restaurant/images/Rvw/44301/100x100_square_44301179.jpg',
                'review' => 'お子様入店は×',
            ],

            [
                'name' => '中華そば 高安',
                'address' => '京都府京都市左京区一乗寺高槻町10',
                'category_id' => '2',
                'subcategory_id' => '6',
                'user_id' => 4,
                'image' => 'https://tblg.k-img.com/restaurant/images/Rvw/85134/100x100_square_85134868.jpg',
                'review' => '久しぶりの有名店',
            ],

            [
                'name' => '拳ラーメン',
                'address' => '京都府京都市下京区朱雀正会町1-16',
                'category_id' => '2',
                'subcategory_id' => '2',
                'user_id' => 4,
                'image' => 'https://tblg.k-img.com/restaurant/images/Rvw/45709/100x100_square_45709034.jpg',
                'review' => 'こだわり120%',
            ],

            [
                'name' => 'つけ麺 きらり',
                'address' => '京都府京都市伏見区東浜南町660-3',
                'category_id' => '3',
                'subcategory_id' => '11',
                'user_id' => 4,
                'image' => 'https://tblg.k-img.com/restaurant/images/Rvw/108113/100x100_square_108113066.jpg',
                'review' => 'キングofつけめん屋',
            ],
        ]);
    }
}
