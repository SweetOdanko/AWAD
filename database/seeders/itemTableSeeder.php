<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;

class itemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'title' => 'Alumni Park After Dark',
                'price' => 5.0,
                'dscrpt' => 'Indulge in our Alumni Park After Dark ice cream, a decadent treat that will satisfy your sweet cravings! Made with high-quality ingredients, this rich and creamy ice cream is the perfect dessert for any occasion.',
                'flavor' => 'Our Alumni Park After Dark ice cream features a delicious blend of dark chocolate chunks, creamy peanut butter swirls, and a hint of sea salt for a perfect balance of sweet and savory.',
                'ingredients' => 'Cream, Sugar, Skim Milk, Dark Chocolate chunks, Peanut butter, Seasalt',
                'steps' => 'The cream, sugar, and skim milk are blended together and heated until they reach a smooth consistency. Dark chocolate chunks, peanut butter, corn syrup, and sea salt are then added to the mixture and cooked until the flavors are fully infused. The resulting mixture is then chilled and processed with an ice cream maker until it reaches a soft-serve consistency.',
                'image_path' => 'Ice_Cream/Alumni Park After Dark.png',
            ],
            [
                'title' => 'Angel Food Cake',
                'price' => 5.0,
                'dscrpt' => 'Angel Food Cake ice cream is a heavenly treat that combines the light and fluffy texture of angel food cake with the creamy sweetness of ice cream. Its a perfect dessert for any occasion, and its unique flavor is sure to delight your taste buds.',
                'flavor' => 'Angel Food Cake ice cream has a delicate, vanilla-infused flavor that perfectly complements the airy texture of angel food cake. Its a refreshing and light flavor thats perfect for hot summer days, but its also rich and satisfying enough to enjoy all year round.',
                'ingredients' => 'Heavy cream, Whole milk, Granulated sugar, Egg yolks, Vanilla extract, Salt',
                'steps' => 'The cream, milk, sugar, and egg yolks are cooked together to create a custard base, which is then flavored with vanilla extract and chilled. The chilled custard is then mixed with the crumbled or diced angel food cake to create the ice cream base. Finally, the mixture is churned in an ice cream maker until it reaches a soft-serve consistency, and then frozen until firm.',
                'image_path' => 'Ice_Cream/Angel Food Cake.png',
            ],
            [
                'title' => 'Batter Up',
                'price' => 6.0,
                'dscrpt' => 'Batter Up ice cream is a sweet treat that will delight your taste buds with its unique flavor and texture. Made with a creamy base thats infused with the rich, buttery taste of cake batter, this ice cream is perfect for anyone who loves the taste of cake batter.',
                'flavor' => 'Batter Up ice cream has a rich, buttery flavor thats reminiscent of cake batter. Its a sweet, indulgent treat thats perfect for satisfying your sweet tooth cravings.',
                'ingredients' => 'Heavy cream, Whole milk, Granulated sugar, Egg yolks, Vanilla extract, Salt',
                'steps' => 'To make Batter Up ice cream, the cream, milk, sugar, egg yolks, cake mix, vanilla extract, and salt are combined and heated until the mixture thickens into a custard. Once cooled, the custard is churned in an ice cream maker until it reaches a soft-serve consistency. The batter is then added to the mixture and churned again until its fully incorporated. Finally, the ice cream is frozen until firm and ready to serve.',
                'image_path' => 'Ice_Cream/Batter Up.png',
            ],
            [
                'title' => 'Bec-Key Lime Pie',
                'price' => 6.0,
                'dscrpt' => 'This ice cream is a creamy and tangy dessert inspired by the classic key lime pie. It is made with a rich and smooth ice cream base infused with the tart and refreshing flavor of key lime juice, and is finished off with a buttery graham cracker crust swirl.',
                'flavor' => 'The flavor of this ice cream is reminiscent of a key lime pie, with a tangy and refreshing taste that is balanced by the sweetness of the ice cream base. The buttery graham cracker crust swirl adds a crunchy and rich texture to each bite.',
                'ingredients' => 'Heavy cream, Whole milk, Granulated sugar, Egg yolks, Key lime juice, Graham cracker crumbs, Unsalted butter, Salt, Lime zest',
                'steps' => 'The cream, milk, sugar, and egg yolks are cooked together to create a custard base, which is then flavored with key lime juice and lime zest. The graham cracker crust swirl is made by mixing graham cracker crumbs with melted butter and a pinch of salt. Once the ice cream base is churned in an ice cream maker, the graham cracker crust swirl is added in layers and swirled throughout the ice cream. The mixture is then frozen until firm and ready to be enjoyed.',
                'image_path' => 'Ice_Cream/Bec-Key Lime Pie.png',
            ],
            [
                'title' => 'Berry Proud Parent',
                'price' => 5.0,
                'dscrpt' => 'Fruity ice cream that combines the sweetness of berries with the creaminess of ice cream',
                'flavor' => 'Reminiscent of a mixed berry pie and is perfect for those who love a fruity dessert.',
                'ingredients' => 'Heavy cream, Whole milk, Granulated sugar, Egg yolks, Mixed berries (strawberries, raspberries, blueberries, blackberries), Lemon juice, Salt',
                'steps' => 'The cream, milk, sugar, and egg yolks are cooked together to create a custard base, which is then flavored with mixed berry puree and a splash of lemon juice. The mixture is chilled and then churned in an ice cream maker until it reaches a soft-serve consistency. Finally, the ice cream is frozen until firm and ready to be served.',
                'image_path' => 'Ice_Cream/Berry Proud Parent.png',
            ],
            [
                'title' => 'Blue Moon',
                'price' => 4.0,
                'dscrpt' => 'Popular Midwest dessert that has a distinct blue color and a unique flavor.',
                'flavor' => 'Combination of fruity and floral notes with a hint of vanilla. The exact flavor is difficult to pinpoint, but it is believed to be a mix of fruit flavors such as raspberry, lemon, and lime.',
                'ingredients' => 'Heavy cream, Whole milk, Granulated sugar, Egg yolks, Marshmallow, Food coloring',
                'steps' => 'The blue color of the ice cream is achieved through the use of food coloring, which can vary depending on the manufacturer. Some versions of Blue Moon ice cream also include marshmallow flavoring or small pieces of marshmallow.',
                'image_path' => 'Ice_Cream/Blue Moon',
            ],
            [
                'title' => 'Bucky Caramal Crunch',
                'price' => 7.0,
                'dscrpt' => 'Bucky Caramel Crunch ice cream is a rich and creamy dessert that combines the sweetness of caramel with the crunch of buttery toffee. It is the perfect treat for those who love the combination of sweet and crunchy in their ice cream.',
                'flavor' => 'This ice cream has a sweet and creamy caramel base with swirls of crunchy toffee and caramel throughout. The toffee adds a delicious crunch to every bite, making this ice cream a satisfying treat.',
                'ingredients' => 'Heavy cream, Whole milk, Granulated sugar, Egg yolks, Vanilla extract, Caramel sauce, Toffee bits',
                'steps' => 'The Bucky Caramel Crunch ice cream starts with a custard base made from a mixture of cream, milk, sugar, and egg yolks, which is cooked and flavored with caramel sauce. Once the custard has chilled, it is mixed with crunchy caramelized pieces and swirls of rich caramel sauce to create a deliciously textured base. The mixture is then churned in an ice cream maker until it reaches a smooth and creamy consistency, and then frozen until firm for a delightful indulgence.',
                'image_path' => 'Ice_Cream/Bucky Caramal Crunch',
            ],
            [
                'title' => 'Caramel Apple',
                'price' => 7.0,
                'dscrpt' => 'Caramel apple ice cream is a delightful dessert that combines the sweet taste of caramel with the tartness of apples. This creamy treat is perfect for fall or anytime you are in the mood for a tasty and unique ice cream flavor.',
                'flavor' => 'The flavor of caramel apple ice cream is a perfect blend of rich caramel and tangy apple. The creamy texture of the ice cream complements the chewy bits of caramel and chunks of fresh apples, making each bite a delicious and satisfying experience.',
                'ingredients' => 'Heavy cream, Whole milk, Granulated sugar, Egg yolks, Vanilla extract, Caramel sauce, Diced apples, Salt',
                'steps' => 'The cream, milk, sugar, and egg yolks are combined to create a custard base, which is then flavored with vanilla extract and salt. Chunks of fresh apples are then mixed into the custard, and a generous drizzle of caramel sauce is swirled in for added sweetness and flavor. The mixture is then churned in an ice cream maker until it reaches a smooth and creamy consistency, and then frozen until firm.',
                'image_path' => 'Ice_Cream/Caramel Apple',
            ],
            [
                'title' => 'Chocolate Chryst',
                'price' => 5.0,
                'dscrpt' => 'Chocolate Chryst is a rich and decadent chocolate ice cream that is sure to satisfy any chocolate lover cravings. It has a creamy texture and a deep chocolate flavor that is enhanced by the addition of chocolate chunks.',
                'flavor' => 'Chocolate Chryst ice cream has a deep chocolate flavor that is both sweet and slightly bitter, making it perfect for those who love intense chocolate flavors. The addition of chocolate chunks adds a delightful crunch to every bite.',
                'ingredients' => 'Heavy cream, Whole milk, Granulated sugar, Egg yolks, Dutch-processed cocoa powder, Chocolate chunks',
                'steps' => 'For the chocolate custard base, a combination of heavy cream, whole milk, sugar, unsweetened cocoa powder, and egg yolks is heated and whisked until thickened. This mixture is then strained and cooled before being mixed with chopped chocolate and chilled. The chilled custard is then churned in an ice cream maker until it reaches a soft-serve consistency, and finally, it is folded with chocolate chunks and crunchy toffee pieces to create the irresistible chocolate crunch ice cream.',
                'image_path' => 'Ice_Cream/Chocolate Chryst',
            ],
            [
                'title' => 'Lumberjack',
                'price' => 6.0,
                'dscrpt' => 'Lumberjack ice cream is a hearty and indulgent flavor that will satisfy any sweet tooth. With its combination of rich chocolate and chunks of sweet maple candies, this ice cream is reminiscent of a cozy cabin in the woods.',
                'flavor' => 'The flavor of lumberjack ice cream is a delicious blend of chocolate and maple. The chocolate ice cream base is infused with real maple syrup and studded with chunks of maple candies, providing a perfect balance of sweetness and richness.',
                'ingredients' => 'Heavy cream, Whole milk, Granulated sugar, Egg yolks, Cocoa powder, Maple syrup, Maple candies',
                'steps' => 'Lumberjack ice cream is made with a rich blend of high-quality ingredients, including cream, milk, sugar, egg yolks, cocoa powder, maple syrup, and maple candies. These ingredients are combined to create a smooth and creamy ice cream base, which is then churned to perfection in an ice cream maker. The end result is a decadent dessert that is perfect for any occasion.',
                'image_path' => 'Ice_Cream/Lumberjack',
            ],
            [
                'title' => 'Mocha Macchiato',
                'price' => 7.0,
                'dscrpt' => 'Mocha Machiato ice cream is a rich and decadent frozen dessert that blends the bold flavors of coffee and chocolate into a delicious treat.',
                'flavor' => 'This ice cream features a strong coffee flavor with a hint of chocolate that is balanced by the creaminess of the ice cream.',
                'ingredients' => 'Heavy cream, Whole milk, Granulated sugar, Egg yolks, Instant coffee, Unsweetened cocoa powder',
                'steps' => 'The ingredients are cooked together to make a custard base, then the instant coffee and cocoa powder are added to create the mocha flavor. The mixture is then chilled, churned in an ice cream maker, and frozen until firm.',
                'image_path' => 'Ice_Cream/Mocha Macchiato',
            ],
            [
                'title' => 'Orange Custard Chocolate Chip',
                'price' => 6.0,
                'dscrpt' => 'Orange Custard Chocolate Chip ice cream is a creamy, refreshing treat with a citrusy twist. The orange custard base is studded with decadent chocolate chips, creating a delicious balance of sweet and tangy flavors.',
                'flavor' => 'The orange custard chocolate chip ice cream has a smooth, creamy texture with a bright and refreshing orange flavor. The rich chocolate chips add a satisfying crunch and a touch of sweetness to the overall taste.',
                'ingredients' => 'Heavy cream, Whole milk, Granulated sugar, Egg yolks, Vanilla extract, Fresh orange juice, Orange zest, Semisweet chocolate chips',
                'steps' => 'The cream, milk, sugar, egg yolks, and orange zest are heated together to make a custard base, which is then flavored with vanilla extract and orange juice. The custard is chilled and then mixed with semisweet chocolate chips before being churned in an ice cream maker. The resulting ice cream is creamy, tangy, and studded with chunks of chocolate.',
                'image_path' => 'Ice_Cream/Orange Custard Chocolate Chip',
            ],
            [
                'title' => 'Salted Caramel Toffee',
                'price' => 7.0,
                'dscrpt' => 'Indulge in the perfect blend of sweet and savory with our Salted Caramel Coffee ice cream. Made with rich, smooth coffee ice cream and swirled with ribbons of salted caramel, this frozen treat will satisfy any craving.',
                'flavor' => 'Our Salted Caramel Toffee ice cream has a bold coffee flavor with a perfect balance of salty and sweet. The ribbons of salted caramel add a rich and buttery flavor, making every spoonful a delight.',
                'ingredients' => 'Heavy cream, Whole milk, Granulated sugar, Egg yolks, Vanilla extract, Coffee, Salted caramel sauce',
                'steps' => 'The cream, milk, sugar, and egg yolks are cooked together to create a custard base, which is then mixed with the coffee and chilled. The salted caramel sauce is then swirled in before the mixture is churned in an ice cream maker until it reaches a soft-serve consistency, and then frozen until firm.',
                'image_path' => 'Ice_Cream/Salted Caramel Toffee',
            ],
            [
                'title' => "Toasted S'mores",
                'price' => 5.0,
                'dscrpt' => "Toasted s'mores ice cream is a delicious treat that brings the classic campfire dessert to your bowl. This creamy ice cream is infused with the flavors of toasted marshmallows, graham crackers, and chocolate, making it the perfect sweet and savory dessert.",
                'flavor' => "Toasted s'mores ice cream features a blend of creamy vanilla ice cream, chunks of chocolate, and swirls of toasted marshmallow and graham cracker. The marshmallow and graham cracker swirls bring a sweet and slightly smoky flavor to the mix, while the chocolate chunks add a rich and decadent touch.",
                'ingredients' => 'Heavy cream, Whole milk, Granulated sugar, Toasted marshmallow swirl, Graham cracker swirl, High fructose corn syrup',
                'steps' => "To make toasted s'mores ice cream, graham crackers, chocolate chunks, and mini marshmallows are mixed into a vanilla ice cream base made with heavy cream, whole milk, granulated sugar, egg yolks, and vanilla extract. The mixture is then churned in an ice cream maker until it reaches a soft-serve consistency, and then frozen until firm.",
                'image_path' => "Ice_Cream/Toasted Smores",
            ],
            [
                'title' => 'Union Utopia',
                'price' => 8.0,
                'dscrpt' => "Union Utopia is a creamy and delicious ice cream that combines the flavors of sweet cream and toasted coconut. It's a tropical treat that's perfect for a hot summer day.",
                'flavor' => "The ice cream has a rich and creamy texture, with a subtle coconut flavor that's complemented by the sweetness of the sweet cream. It's a perfect balance of flavors that's sure to satisfy your sweet tooth.",
                'ingredients' => 'Heavy cream, Whole milk, Granulated sugar, Egg yolks, Vanilla extract, Sweetened shredded coconut, Salt',
                'steps' => 'The batter for the cake is made by mixing flour, sugar, baking powder, salt, butter, milk, eggs, and vanilla extract until smooth.',
                'image_path' => 'Ice_Cream/Union Utopia',
            ],
            [
                'title' => 'Wisconsin Old Fashioned',
                'price' => 8.0,
                'dscrpt' => 'Wisconsin Old Fashioned ice cream is a unique flavor that takes inspiration from the classic Wisconsin cocktail, the Old Fashioned. It has a sweet and tangy flavor, with notes of orange, cherry, and bitters.',
                'flavor' => 'The flavor of Wisconsin Old Fashioned ice cream is a combination of sweet and tangy, with prominent notes of orange, cherry, and bitters. It has a slightly boozy flavor, reminiscent of the classic Wisconsin cocktail it is named after.',
                'ingredients' => 'Heavy cream, Whole milk, Granulated sugar, Egg yolks, Bitters and brandy, Chopped maraschino cherries, Salt',
                'steps' => 'The cream, milk, sugar, and egg yolks are cooked together to create a custard base. Once the custard is chilled, the orange juice, cherry juice, orange zest, bitters, and salt are added to the mixture. The ice cream is then churned in an ice cream maker until it reaches a soft-serve consistency, and then frozen until firm.',
                'image_path' => 'Ice_Cream/Wisconsin Old Fashioned',
            ],
            [
                'title' => 'Strawberry Field',
                'price' => 5.0,
                'dscrpt' => 'A refreshing and fruity treat that is perfect for a hot summer day. This ice cream is made with fresh, ripe strawberries and has a creamy texture.',
                'flavor' => 'The flavor of Strawberry Field ice cream is sweet and tangy, with a burst of fresh strawberry flavor in every bite.',
                'ingredients' => 'Fresh strawberries, Heavy cream, Whole milk, Granulated sugar, Egg yolks, Vanilla extract, Salt',
                'steps' => 'Fresh strawberries are pureed and combined with heavy cream, whole milk, sugar, and egg yolks, which are cooked into a custard base. The mixture is then chilled and churned in an ice cream maker until it reaches a soft-serve consistency, and finally, chunks of fresh strawberries are folded in for added texture and flavor.',
                'image_path' => 'Ice_Cream/Strawberry Field',
            ],
            [
                'title' => 'Vanilla Dream',
                'price' => 5.0,
                'dscrpt' => 'A classic flavor that is loved by many. It has a smooth, creamy texture and a rich, sweet taste that is perfectly balanced with the subtle flavor of vanilla.',
                'flavor' => 'The flavor of Vanilla Dream ice cream is primarily that of vanilla, with a hint of sweetness and creaminess. It is a simple yet delicious flavor that is loved by many.',
                'ingredients' => 'Heavy cream, Whole milk, Granulated sugar, Egg yolks, Vanilla extract, Salt',
                'steps' => 'The cream, milk, sugar, and egg yolks are cooked together to create a custard base, which is then flavored with vanilla extract and chilled. The chilled custard is then churned in an ice cream maker until it reaches a soft-serve consistency, and then frozen until firm. The result is a delicious and creamy vanilla ice cream that is perfect on its own or as a base for other flavors.',
                'image_path' => 'Ice_Cream/Vanilla Dream',
            ],
            [
                'title' => 'Chocolate Chunk',
                'price' => 6.0,
                'dscrpt' => "A classic flavor that features rich and creamy chocolate ice cream with chunks of chocolate mixed throughout. It's perfect for chocolate lovers who want a decadent and indulgent treat.",
                'flavor' => "The flavor of chocolate chunk ice cream is dominated by the rich and creamy chocolate base, with the added texture and flavor of the chunks of chocolate. It's a balance of sweet and bitter flavors that are perfect for satisfying a chocolate craving.",
                'ingredients' => 'Cocoa powder, Chocolate chunks, Chocolate chips, Heavy cream, Whole milk, Granulated sugar, Egg yolks, Vanilla extract, Salt',
                'steps' => 'The cream, milk, sugar, and cocoa powder are cooked together to make a custard base. Once the custard is chilled, the chocolate chunks or chips are mixed in before the ice cream is churned in an ice cream maker.',
                'image_path' => 'Ice_Cream/Chocolate Chunk',
            ],
            [
                'title' => 'Minty Marvel',
                'price' => 6.0,
                'dscrpt' => 'Minty Marvel is a refreshing and creamy ice cream flavor that combines the coolness of mint with the sweetness of vanilla.',
                'flavor' => 'Minty Marvel has a bright and refreshing mint flavor that is balanced by the creaminess of the vanilla ice cream. The minty flavor is not overpowering, but rather complements the sweetness of the ice cream.',
                'ingredients' => 'Peppermint extract, Heavy cream, Whole milk, Granulated sugar, Egg yolks, Vanilla extract, Salt',
                'steps' => 'The cream, milk, sugar, and egg yolks are cooked together to create a custard base, which is then flavored with peppermint and vanilla extracts and chilled. The chilled custard is then mixed with a few drops of green food coloring to give it a light green color. Finally, the mixture is churned in an ice cream maker until it reaches a soft-serve consistency, and then frozen until firm.',
                'image_path' => 'Ice_Cream/Minty Marvel',
            ],
            [
                'title' => 'Tropical Mango',
                'price' => 5.0,
                'dscrpt' => "Tropical mango ice cream is a deliciously refreshing dessert that captures the sweet and tangy taste of ripe mangoes in a creamy and smooth texture. It's perfect for hot summer days or anytime you want to indulge in a fruity treat.",
                'flavor' => "The flavor of tropical mango ice cream is dominated by the sweet, juicy taste of fresh mangoes, which are complemented by a creamy and slightly tangy undertone. It has a bright and refreshing flavor that's perfect for anyone who loves the taste of tropical fruits.",
                'ingredients' => 'Ripe mangoes, Heavy cream, Whole milk, Granulated sugar, Egg yolks, Vanilla extract, Salt',
                'steps' => 'To make tropical mango ice cream, pureed fresh mango is combined with heavy cream, whole milk, granulated sugar, and a pinch of salt. The mixture is chilled and then churned in an ice cream maker until it reaches a soft-serve consistency, before being frozen until firm.',
                'image_path' => 'Ice_Cream/Tropical Mango',
            ],
            [
                'title' => 'Durian Delight',
                'price' => 4.0,
                'dscrpt' => 'Durian Delight ice cream is a unique and exotic flavor that is popular in Southeast Asia.',
                'flavor' => 'A creamy, rich texture with a distinct aroma and flavor of durian, a spiky tropical fruit known for its pungent smell and custardy flesh.',
                'ingredients' => 'Durian pulp, Heavy cream, Whole milk, Granulated sugar, Egg yolks, Vanilla extract, Salt',
                'steps' => 'The cream, milk, and sugar are heated together until the sugar dissolves, and then tempered with egg yolks to create a smooth custard base. The durian pulp is then blended into the custard mixture until well-combined. The mixture is chilled and then churned in an ice cream maker until it reaches a soft-serve consistency. Finally, it is frozen until firm and ready to be served.',
                'image_path' => 'Ice_Cream/Durian Delight',
            ],
            [
                'title' => 'Lime Burst',
                'price' => 4.0,
                'dscrpt' => "Lime burst ice cream is a tangy and refreshing treat that's perfect for hot summer days. It features a smooth and creamy texture with a burst of lime flavor in every bite.",
                'flavor' => "The flavor of lime burst ice cream is a delicious balance of sweet and tangy, with a strong lime taste that's sure to wake up your taste buds. It's a perfect blend of creamy vanilla ice cream and zesty lime juice.",
                'ingredients' => 'Fresh lime juice, Heavy cream, Whole milk, Granulated sugar, Egg yolks, Vanilla extract, Salt',
                'steps' => 'The heavy cream, whole milk, and sugar are combined and heated on the stove until the sugar dissolves. Lime juice and zest are added to the mixture, along with vanilla extract and a pinch of salt. The mixture is then cooled and churned in an ice cream maker until it reaches a smooth and creamy texture.',
                'image_path' => 'Ice_Cream/Lime Burst',
            ],
            [
                'title' => 'Berrylicious Vanilla',
                'price' => 4.0,
                'dscrpt' => 'Berrylicious vanilla ice cream is a creamy, fruity dessert that combines the classic flavor of vanilla with the sweetness of mixed berries.',
                'flavor' => "The ice cream has a rich and creamy vanilla base with a burst of mixed berry flavor. It's both refreshing and satisfying at the same time, making it the perfect treat for a hot summer day.",
                'ingredients' => 'Mixed berries, Heavy cream, Whole milk, Granulated sugar, Egg yolks, Vanilla extract, Salt',
                'steps' => 'Mix heavy cream, whole milk, sugar, and egg yolks together to create a custard base, which is then flavored with vanilla extract and mixed with fresh berries before being churned in an ice cream maker and frozen until it reaches the perfect creamy consistency.',
                'image_path' => 'Ice_Cream/Berrylicious Vanilla',
            ],
            [
                'title' => 'Yamazing Delight',
                'price' => 4.0,
                'dscrpt' => 'Yamazing Delight is a creamy and indulgent ice cream that boasts the unique and earthy flavour of yam, a root vegetable commonly found in Southeast Asia.',
                'flavor' => 'The yam flavour of this ice cream is the star of the show, with a sweet and nutty taste that is both distinct and delicious.',
                'ingredients' => 'Yam, Heavy cream, Whole milk, Granulated sugar, Egg yolks, Vanilla extract, Salt',
                'steps' => 'The yams are peeled, cubed, and boiled until soft before being blended into a puree. The cream, milk, sugar, and egg yolks are then cooked together to create a custard base, which is flavored with the vanilla extract. The yam puree is then added to the custard base, and the mixture is churned in an ice cream maker until it reaches a soft-serve consistency. The ice cream is then frozen until firm and ready to serve.',
                'image_path' => 'Ice_Cream/Yamazing Delight',
            ],
        ];

        foreach($items as $itemData) {
            Item::create($itemData);
        }
    }
}
