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
                'image' => 'gdVLJJz7qkvZ797tdqwowjHeMvNPGMDeRN89sgwz.jpeg',
                'review' => 'おいしい'
            ],
            [
                'name' => '麺屋 さん田',
                'address' => '京都府京都市右京区西院追分町7-4',
                'category_id' => 2,
                'subcategory_id' => 2,
                'user_id' => 1,
                'image' => 'Yeenj2cCba5t4I3Az6MVQpE5PUWcWnwsmqMNHAWO.jpeg',
                'review' => 'なかなか',
            ],

            [
                'name' => '煮干そば 藍',
                'address' => '京都府京都市左京区吉田下阿達町29-1',
                'category_id' => 2,
                'subcategory_id' => 11,
                'user_id' => 1,
                'image' => 'u5YG4boSFMAcgSUaIzTgzHAGimY28h1r2SIqAr2Z.jpeg',
                'review' => 'でりしゃす'
            ],

            [
                'name' => '麺屋 裕',
                'address' => '京都府京都市山科区東野百拍子町25-2', 'category_id' => 2,
                'subcategory_id' => 11,
                'user_id' => 1,
                'image' => 'DPaa3OleiIk0XRiKfiAXKBfYDVY6y48yBg0sLH3z.jpeg',
                'review' => '味わい深い'
            ],

            [
                'name' => '山崎麺二郎',
                'address' => '京都府京都市中京区西ノ京北円町1-8',
                'category_id' => 2,
                'subcategory_id' => 11,
                'user_id' => 1,
                'image' => 'dVoOXmeComNeJXhwAvbGfp14UfiYexZxPCsnIKf9.jpeg',
                'review' => 'すごい'
            ],

            [
                'name' => 'あいつのラーメン かたぐるま',
                'address' => '京都府京都市下京区西七条西八反田町77 ガーディアン青山 1F',
                'category_id' => 2,
                'subcategory_id' => 6,
                'user_id' => 1,
                'image' => 'EnM8D1oFO9MTQydZcr9ZRR6uIogOvFDEcnK9ummd.jpeg',
                'review' => '言葉に言い表せない'
            ],

            [
                'name' => '本家 第一旭 たかばし本店', 'address' => '京都府京都市下京区東塩小路向畑町845',
                'category_id' => '2',
                'subcategory_id' => '2',
                'user_id' => 2,
                'image' => '3MizFbbOTM5VFHbzYN89hc3E4oQniThPhXuYASbe.jpeg',
                'review' => 'これぞ中華そば',
            ],

            [
                'name' => '麺屋 極鶏',
                'address' => '京都府京都市左京区一乗寺西閉川原町29-7',
                'category_id' => '2',
                'subcategory_id' => '9',
                'user_id' => 2,
                'image' => 'j1WOIsoanS31iJzycmxZb9UeqhGe4QQdjVbloIPl.jpeg',
                'review' => 'シチューです',
            ],

            [
                'name' => '吟醸らーめん 久保田 本店',
                'address' => '京都府京都市下京区西松屋町563 フジ萬ビル 1F',
                'category_id' => '2',
                'subcategory_id' => '3',
                'user_id' => 2,
                'image' => 'lp9CmaAVzIyfp2S5s3EQzfJWufKNmxp6pCGthGn2.jpeg',
                'review' => '濃厚な味噌つけ麺♪',
            ],

            [
                'name' => 'セアブラノ神 壬生本店',
                'address' => '京都府京都市中京区壬生相合町25-4 デイスターアベニュー 1Ｆ',
                'category_id' => '2',
                'subcategory_id' => '10',
                'user_id' => 3,
                'image' => 'AA0l2VFY97a9BwEo0wXYJ9Ny5MXizoIuynFz9vgm.jpeg',
                'review' => 'ラーメンの神',
            ],

            [
                'name' => '麺や高倉二条',
                'address' => '京都府京都市中京区観音町64-1',
                'category_id' => '2',
                'subcategory_id' => '5',
                'user_id' => 3,
                'image' => '5btOemozJ5DZw6UusLGMijOXGgcG8uZxClNj1dk3.jpeg',
                'review' => '上品な和のテイスト',
            ],

            [
                'name' => '新宿めんや風花 本店',
                'address' => '京都府京都市下京区三軒町551',
                'category_id' => '2',
                'subcategory_id' => '4',
                'user_id' => 3,
                'image' => 'Z2oljJmZIvCNxkniTYHfRtfXDevB66p1y3DQB5du.jpeg',
                'review' => 'お子様入店は×',
            ],

            [
                'name' => '中華そば 高安',
                'address' => '京都府京都市左京区一乗寺高槻町10',
                'category_id' => '2',
                'subcategory_id' => '6',
                'user_id' => 4,
                'image' => '4uJvOKtZ4dzYMMT6u3fWoeKtsI4lEsqDKUtRT2j.jpeg',
                'review' => '久しぶりの有名店',
            ],

            [
                'name' => '拳ラーメン',
                'address' => '京都府京都市下京区朱雀正会町1-16',
                'category_id' => '2',
                'subcategory_id' => '2',
                'user_id' => 4,
                'image' => 'MXs0SanuV4Lzx9SKqupf7dnpr0oNpTSI9KoGNSZ5.jpeg',
                'review' => 'こだわり120%',
            ],

            [
                'name' => 'つけ麺 きらり',
                'address' => '京都府京都市伏見区東浜南町660-3',
                'category_id' => '3',
                'subcategory_id' => '11',
                'user_id' => 4,
                'image' => 'kv2xaQozcr6F2IVeoq1rvUIwO1x0ngqcAKdvXUYl.jpeg',
                'review' => 'キングofつけめん屋',
            ],
        ]);
    }
}
