<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cup;

class cupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cup = [
            [
                'id' => '1',
                'type' => 'ice cup flavour1',
                'image_path' => 'Ice_Cream/Alumni Park After Dark.png',
                'name' => 'Alumni Park After Dark',
                'dscript' => 'Rich Chocolate ice cream with dark chocolate chunks and a hint of coffee',
                'star' => 5,
                'price' => 'RM5'
            ],
            [
                'id' => '2',
                'type' => 'ice cup flavour2',
                'image_path' => 'Ice_Cream/Angel Food Cake.png',
                'name' => 'Angel Food Cake',
                'dscript' => 'Heavenly light and fluffy ice cream with hints of vanilla and a sweet airy finish',
                'star' => 4,
                'price' => 'RM5'
            ],
            [
                'id' => '3',
                'type' => 'ice cup flavour2',
                'image_path' => 'Ice_Cream/Batter Up.png',
                'name' => 'Batter Up',
                'dscript' => 'Sweet vanilla ice cream swirled with rich chocolate fudge and chunks of crunchy cookie dough',
                'star' => 5,
                'price' => 'RM6'
            ],
            [
                'id' => '4',
                'type' => 'ice cup flavour3',
                'image_path' => 'Ice_Cream/Bec-Key Lime Pie.png',
                'name' => 'Bec-Key Lime Pie',
                'dscript' => 'A tangy and creamy blend of key lime pie and ice cream',
                'star' => 5,
                'price' => 'RM6'
            ],
            [
                'id' => '5',
                'type' => 'ice cup flavour3',
                'image_path' => 'Ice_Cream/Berry Proud Parent.png',
                'name' => 'Berry Proud Parent',
                'dscript' => 'A tangy and creamy blend of key lime pie and ice cream',
                'star' => 5,
                'price' => 'RM5'
            ],
            [
                'id' => '6',
                'type' => 'ice cup flavour2',
                'image_path' => 'Ice_Cream/Blue Moon.png',
                'name' => 'Blue Moon',
                'dscript' => 'A classic flavor with a mysterious blue hue',
                'star' => 5,
                'price' => 'RM4'
            ],
            [
                'id' => '7',
                'type' => 'ice cup flavour1',
                'image_path' => 'Ice_Cream/Bucky Caramal Crunch.png',
                'name' => 'Bucky Caramal Crunch',
                'dscript' => 'Rich caramel ice cream with crunchy bits of toffee and caramelized nuts',
                'star' => 4,
                'price' => 'RM7'
            ],
            [
                'id' => '8',
                'type' => 'ice cup flavour3',
                'image_path' => 'Ice_Cream/Caramel Apple.png',
                'name' => 'Caramel Apple',
                'dscript' => 'A sweet and tangy blend of creamy caramel and crisp apple flavors',
                'star' => 5,
                'price' => 'RM7'
            ],
            [
                'id' => '9',
                'type' => 'ice cup flavour1',
                'image_path' => 'Ice_Cream/Chocolate Chryst.png',
                'name' => 'Chocolate Chryst',
                'dscript' => 'Indulge in rich and creamy chocolate goodness with our Chocolate Chryst ice cream',
                'star' => 5,
                'price' => 'RM5'
            ],
            [
                'id' => '10',
                'type' => 'ice cup flavour2',
                'image_path' => 'Ice_Cream/Lumberjack.png',
                'name' => 'Lumberjack',
                'dscript' => 'A delicious mix of maple and pecan',
                'star' => 5,
                'price' => 'RM6'
            ],
            [
                'id' => '11',
                'type' => 'ice cup flavour1',
                'image_path' => 'Ice_Cream/Mocha Macchiato.png',
                'name' => 'Mocha Macchiato',
                'dscript' => 'A creamy blend of espresso and chocolate, with a hint of sweetness',
                'star' => 5,
                'price' => 'RM7'
            ],
            [
                'id' => '12',
                'type' => 'ice cup flavour1',
                'image_path' => 'Ice_Cream/Orange Custard Chocolate Chip.png',
                'name' => 'Orange Custard Chocolate Chip',
                'dscript' => 'A creamy orange custard base with swirls of rich chocolate chips',
                'star' => 5,
                'price' => 'RM6'
            ],
            [
                'id' => '13',
                'type' => 'ice cup flavour1',
                'image_path' => 'Ice_Cream/Salted Caramel Toffee.png',
                'name' => 'Salted Caramel Toffee',
                'dscript' => 'Rich, creamy caramel with a salty twist and crunchy toffee bits',
                'star' => 5,
                'price' => 'RM7'
            ],
            [
                'id' => '14',
                'type' => 'ice cup flavour2',
                'image_path' => 'Ice_Cream/Toasted Smores.png',
                'name' => 'Toasted S\'mores',
                'dscript' => 'Rich chocolate ice cream with a graham cracker swirl and toasted marshmallow pieces',
                'star' => 4,
                'price' => 'RM5'
            ],
            [
                'id' => '15',
                'type' => 'ice cup flavour2',
                'image_path' => 'Ice_Cream/Union Utopia.png',
                'name' => 'Union Utopia',
                'dscript' => 'Creamy vanilla ice cream swirled with ribbons of caramel and chunks of chocolate',
                'star' => 4,
                'price' => 'RM8'
            ],
            [
                'id' => '16',
                'type' => 'ice cup flavour2',
                'image_path' => 'Ice_Cream/Wisconsin Old Fashioned.png',
                'name' => 'Wisconsin Old Fashioned',
                'dscript' => 'Classic cocktail-inspired flavor',
                'star' => 5,
                'price' => 'RM8'
            ],
        ];

        foreach ($cup as $cupData) {
            Cup::create($cupData);
        }
    }
}