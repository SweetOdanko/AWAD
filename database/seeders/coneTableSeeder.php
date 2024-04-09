<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cone;

class coneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cones = [
            [
                'id' => '17',
                'type' => 'ice cone flavour3',
                'image_path' => 'Ice_Cream/Strawberry Field.png',
                'name' => 'Strawberry Field',
                'dscript' => 'Creamy, refreshing ice cream flavor that features ripe, juicy strawberries swirled throughout a smooth vanilla base',
                'star' => 5,
                'price' => 'RM5'
            ],
            [
                'id' => '18',
                'type' => 'ice cone flavour2',
                'image_path' => 'Ice_Cream/Vanilla Dream.png',
                'name' => 'Vanilla Dream',
                'dscript' => 'Creamy and delicious vanilla-flavored ice cream',
                'star' => 4,
                'price' => 'RM5'
            ],
            [
                'id' => '19',
                'type' => 'ice cone flavour1',
                'image_path' => 'Ice_Cream/Chocolate Chunk.png',
                'name' => 'Chocolate Chunk',
                'dscript' => 'Generous chunks of high-quality chocolate mixed in a creamy vanilla base',
                'star' => 5,
                'price' => 'RM6'
            ],
            [
                'id' => '20',
                'type' => 'ice cone flavour1',
                'image_path' => 'Ice_Cream/Minty Marvel.png',
                'name' => 'Minty Marvel',
                'dscript' => 'Refreshing and invigorating ice cream flavor that combines the cool taste of mint with the creaminess of ice cream',
                'star' => 5,
                'price' => 'RM6'
            ],
            [
                'id' => '21',
                'type' => 'ice cone flavour3',
                'image_path' => 'Ice_Cream/Tropical Mango.png',
                'name' => 'Tropical Mango',
                'dscript' => 'Creamy and refreshing ice cream flavor that brings a taste of the tropics to your palate',
                'star' => 5,
                'price' => 'RM5'
            ],
            [
                'id' => '22',
                'type' => 'ice cone flavour3',
                'image_path' => 'Ice_Cream/Durian Delight.png',
                'name' => 'Durian Delight',
                'dscript' => 'Rich and creamy ice cream flavor that features the exotic tropical fruit known as durian',
                'star' => 5,
                'price' => 'RM4'
            ],
            [
                'id' => '23',
                'type' => 'ice cone flavour3',
                'image_path' => 'Ice_Cream/Lime Burst.png',
                'name' => 'Lime Burst',
                'dscript' => 'Zesty and refreshing treat that offers a burst of tangy lime flavor with each scoop',
                'star' => 5,
                'price' => 'RM4'
            ],
            [
                'id' => '24',
                'type' => 'ice cone flavour3',
                'image_path' => 'Ice_Cream/Berrylicious Vanilla.png',
                'name' => 'Berrylicious Vanilla',
                'dscript' => 'Delicious and creamy ice cream flavor that combines the classic taste of vanilla with the sweetness and tartness of fresh berries',
                'star' => 5,
                'price' => 'RM4'
            ],
            [
                'id' => '25',
                'type' => 'ice cone flavour3',
                'image_path' => 'Ice_Cream/Yamazing Delight.png',
                'name' => 'Yamazing Delight',
                'dscript' => 'Delicious and unique ice cream flavor that features the sweet and earthy taste of yam, combined with creamy, smooth vanilla ice cream',
                'star' => 5,
                'price' => 'RM4'
            ],
        ];

        foreach ($cones as $coneData) {
            Cone::create($coneData);
        }
    }
}
