<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\ComboItem;
use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Sushi Aky',
            'email' => 'sushiaky@admin.com',
            'password' => Hash::make('12345678'),
        ]);

        $categories = [
            ['name' => 'Combos a partir de 1 Real a peça!', 'description' => 'description'],
            ['name' => 'Combo Plus da Hora!', 'description' => 'description'],
            ['name' => 'Temakis', 'description' => 'description'], //3
            ['name' => 'Hot Holl', 'description' => 'description'],
            ['name' => 'Promo!', 'description' => 'description'],
            ['name' => 'Jhow (4 unidades)', 'description' => 'description'], //6
            ['name' => 'Niguiri (5 unidades)', 'description' => 'description'],
            ['name' => 'Sashimi (5 unidades)', 'description' => 'description'],
            ['name' => 'Uramaki (4 Unidades)', 'description' => 'description'],
            ['name' => 'Hossomaki (4 Unidades)', 'description' => 'description'], //10
            ['name' => 'Combos Especiais', 'description' => 'description'],
            ['name' => 'Combinado Aky', 'description' => 'description'], //12
            ['name' => 'Burgue Sushi', 'description' => 'description'],
            ['name' => 'Sushi Glass', 'description' => 'description'],
            ['name' => 'Dog Holl', 'description' => 'description'], //15
            ['name' => 'Complementos', 'description' => 'description'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }

        $products = [
            //1
            [
                'name' => 'Combo Sushiaky (30 peças)',
                'category_id' => 1,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404102317_54A6_i.jpg',
                'description' => '5 Niguiri Salmão, 5 Sashimi Salmão, 10 Hossomaki Atum grelhado, 10 Hossomaki Salmão.',
                'price' => 64.90,
                'quantity' => 0,
            ],
            [
                'name' => 'Combo Sushiaky (28 peças)',
                'category_id' => 1,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404112206_L018_i.jpg',
                'description' => '5 Sashimi Salmão, 2 Niguiri Salmão, 4 Niguiri kani empanado, 5 Uramaki Skin, 4 Hossomaki Atum, 8 Hot Salmão crispy batata.',
                'price' => 43.90,
                'quantity' => 0,
            ],
            [
                'name' => 'Combo Sushiaky Salmão (25 peças)',
                'category_id' => 1,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404112209_6EXT_i.jpg',
                'description' => '10 Hots Salmão, 10 Hossomaki Salmão, 5 Niguiri Salmão.',
                'price' => 45.90,
                'quantity' => 0,
            ],
            [
                'name' => 'Combo Sushiaky (27 peças)',
                'category_id' => 1,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404112218_W050_i.jpg',
                'description' => '5 Sashimi de Salmão, 2 Niguiri Salmão 2 jhow geleia, 4 Hossomaki Atum, 5 Uramaki Skin, 4 Uramaki kani Crispy ,5 hots Salmão.',
                'price' => 52.90,
                'quantity' => 0,
            ],
            [
                'name' => 'Combo Sushiaky (12 peças)',
                'category_id' => 1,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404122349_8PHA_i.jpg',
                'description' => '5 Uramaki Skin, 5 Hossomaki Kani, 2 Niguiri Salmao.',
                'price' => 32.90,
                'quantity' => 0,
            ],
            [
                'name' => 'Combo Sushiaky Executivo (12 peças)',
                'category_id' => 1,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404132006_1R26_i.jpg',
                'description' => '2 Hossomaki Salmão, 2 Niguiri Salmão, 2 Niguiri Kani Empanado, 2 Hossomaki Kani, 2 Hossomaki Atum grelhado, 2 Hot Salmão.',
                'price' => 34.90,
                'quantity' => 0,
            ],
            [
                'name' => 'Combo Sushiaky (40 peças)',
                'category_id' => 1,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404202252_UC75_i.jpg',
                'description' => '2 Hossomaki Salmão, 2 Uramaki Salmão, 6 Uramaki Atum, 6 Uramaki Skin, 6 Hossomaki Kani, 4 Uramaki Kani, 4 Hossomaki de Atum, 5 Hot Kani, 5 Hot Salmão.',
                'price' => 41.90,
                'on_sale' => 1,
                'quantity' => 0,
            ],
            [
                'name' => 'Combo Sushiaki (50 peças)',
                'category_id' => 1,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404202252_UC75_i.jpg',
                'description' => '3 Niguiri Salmão, 5 Hossomaki de Atum, 2 Uramaki Skin, 8 Uramaki de atum, 10 Uramaki Kani, 10 Hossomaki Kani, 5 Hot Salmão, 5 Hot Kani',
                'price' => 58.90,
                'quantity' => 0,
            ],
            [
                'name' => 'Combo Sushiaki (30 peças)',
                'category_id' => 1,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404202252_UC75_i.jpg',
                'description' => '3 Niguiri Salmão, 3 Hossomaki Salmão, 4 Uramaki Salmão, 6 uramaki kani, 4 Uramaki skin, 4 Hossomaki Kani, 6 Hot Roll.',
                'price' => 37.90,
                'on_sale' => 1,
                'quantity' => 0,
            ],
            [
                'name' => 'Combo Sushiaki (18 peças)',
                'category_id' => 1,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404202252_UC75_i.jpg',
                'description' => '6 Hot Rolls, 3 Uramaki Kani couve, 3 Uramaki kani, 3 Niguiri Skin, 3 Jhou Salmão frito.',
                'price' => 29.90,
                'quantity' => 0,
            ],
            [
                'name' => 'Combo Sushiaki (20 peças)',
                'category_id' => 1,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404202252_UC75_i.jpg',
                'description' => '4 Sashimis de Salmão, 2 Niguiris Salmão, 2 Uramakis Salmão, 2 Hossomakis Salmão, 2 Uramakis Kani, 3 Hot Salmão, 3 Hot Kani.',
                'price' => 35.90,
                'quantity' => 0,
            ],

            //2
            [
                'name' => 'Plus (18 peças)',
                'category_id' => 2,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404132015_24HG_i.jpg',
                'description' => '4 Hossomaki de Salmão, 4 Jhou Salmão, 4 Uramaki Skin, 2 Niguiri Salmão selado, 4 Niguiri Salmão.',
                'price' => 68.90,
                'quantity' => 0,
            ],
            [
                'name' => 'Plus (20 peças)',
                'category_id' => 2,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404132019_NS48_i.jpg',
                'description' => '10 Hot roll, 5 Uramaki kani com Crispy, 5 Uramaki Salmão, 5 Sashimi Salmão.',
                'price' => 43.90,
                'quantity' => 0,
            ],
            [
                'name' => 'Plus (24 peças)',
                'category_id' => 2,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404132020_60NL_i.jpg',
                'description' => '4 Hossomaki Salmão, 4 Niguiri Salmão maçaricado, 4 Niguiri Salmão, 4 Uramaki Skin, 4 Jhou Salmão, 4 Sashimi Salmão, 4 jhou geleia.',
                'price' => 105.90,
                'quantity' => 0,
            ],
            [
                'name' => 'Plus (30 peças)',
                'category_id' => 2,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404132024_O7HF_i.jpg',
                'description' => '10 Hot roll, 4 Uramaki kani com Crispy, 4 Uramaki Salmão, 4 Niguiri Salmão , 4 Jhou Salmão , 4 Hossomaki Atum.',
                'price' => 58.90,
                'quantity' => 0,
            ],
            [
                'name' => 'Plus Selado (28 peças)',
                'category_id' => 2,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404132026_40T5_i.jpg',
                'description' => '4 Sashimi Salmão selado, 4 Niguiri especial selado, 4 Jhou Salmão selado, 4 Jhou Salmao com crispy selado, 4 Jhou Salmao batata crispy selado e 8 hot roll Salmao com creme cheese acompanhado com cebolinha.',
                'price' => 117.90,
                'quantity' => 0,
            ],
            [
                'name' => 'Plus aky (30 peças)',
                'category_id' => 2,
                'link_image' => '',
                'description' => '4 Sashimis Salmão, 2 Niguiris Salmão, 3 Uramaki Salmão, 4 Hossomakis Salmão, 3 Uramakis Kani, 4 Uramakis Skin, 5 Hot Salmão, 5 Hot Kani.',
                'price' => 46.90,
                'quantity' => 0,
            ],
            [
                'name' => 'Plus aky (40 peças)',
                'category_id' => 2,
                'link_image' => '',
                'description' => '5 Sashimis Salmão, 4 Niguiris Salmão, 4 Uramakis Salmão, 5 Hossomakis Salmão, 6 Uramakis Kani, 6 Uramakis Skin, 5 Hot Salmão, 5 Hot Kani.',
                'price' => 55.90,
                'quantity' => 0,
            ],
            [
                'name' => 'Plus executivo Frito (20 peças)',
                'category_id' => 2,
                'link_image' => '',
                'description' => '4 Niguiri de Kani empanado com limão, 4 Uramaki Skin, 4 Jhou frito, 4 Hot rolls, 2 Hot Couve e 2 Hot crispy batata.',
                'price' => 39.90,
                'quantity' => 0,
            ],

            //3
            [
                'name' => 'Skin',
                'category_id' => 3,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404102352_1M4L_i.jpg',
                'description' => 'Gohan, Skin batido com Cream Cheese e Cebolinha (180g).',
                'price' => 27.90,
                'quantity' => 0,
            ],
            [
                'name' => 'Camarão Cozido',
                'category_id' => 3,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404102355_8LO2_i.jpg',
                'description' => 'Gohan, camarão no vapor, Cream Cheese e Cebolinha (180g).',
                'price' => 33.90,
                'quantity' => 0,
            ],
            [
                'name' => 'Salmão',
                'category_id' => 3,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404102357_F487_i.jpg',
                'description' => 'Gohan, Salmão fresco, Cebolinha e Cream Cheese (180g).',
                'price' => 28.90,
                'quantity' => 0,
            ],
            [
                'name' => 'Especial salmão com camarão',
                'category_id' => 3,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404102358_172S_i.jpg',
                'description' => 'Temaki de salmão com camarão grelhado empanado com farinha especial. Finalizado com creme cheese e cebolinha (180g).',
                'price' => 35.90,
                'quantity' => 0,
            ],
            [
                'name' => 'Temaki Salmao Especial Empanado',
                'category_id' => 3,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404122251_NJDD_i.jpg',
                'description' => 'Temaki de Salmão grelhado empanado com Farinha especial. Finalizado com creme cheese e cebolinha (180g).',
                'price' => 28.90,
                'quantity' => 0,
            ],
            [
                'name' => 'Temaki Camarão Empanado',
                'category_id' => 3,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404122252_ENX3_i.jpg',
                'description' => 'Gohan, camarão, cream cheese e cebolinha, empanado com farinha especial e frito (180g).',
                'price' => 28.90,
                'on_sale' => 1,
                'quantity' => 0,
            ],
            [
                'name' => 'Temaki Salmao grelhado',
                'category_id' => 3,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404122255_Y003_i.jpg',
                'description' => 'Gohan, Salmão Grelhado fresco, Cebolinha e Cream Cheese (180g).',
                'price' => 27.90,
                'quantity' => 0,
            ],
            [
                'name' => 'Temaki de Kani',
                'category_id' => 3,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404122256_0UTJ_i.jpg',
                'description' => 'Temaki de kani, gohan, cream cheese e cebolinha.',
                'price' => 22.90,
                'quantity' => 0,
            ],
            [
                'name' => 'Temaki Kani Empanado',
                'category_id' => 3,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404122257_NXMT_i.jpg',
                'description' => 'Temaki de kani em pedaços empanados na farinha panko, gohan, cebolinha e cream cheese.(180g).',
                'price' => 23.90,
                'quantity' => 0,
            ],

            //4
            [
                'name' => 'Hots (10 peças)',
                'category_id' => 4,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404112041_4210_i.jpg',
                'description' => 'Hot Salmão.',
                'price' => 25.90,
                'quantity' => 0,
            ],
            [
                'name' => 'Hots (10 peças)',
                'category_id' => 4,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404112041_4210_i.jpg',
                'description' => 'Camarão.',
                'price' => 28.90,
                'quantity' => 0,
            ],
            [
                'name' => 'Hots (10 peças)',
                'category_id' => 4,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404112041_4210_i.jpg',
                'description' => 'Atum.',
                'price' => 24.00,
                'quantity' => 0,
            ],
            [
                'name' => 'Hot haru (10 peças)',
                'category_id' => 4,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404142300_R2QL_i.jpg',
                'description' => 'Delicioso Hot Salmão Empanado na massa Harumaki com Creme cheese e cebolinha',
                'price' => 25.00,
                'quantity' => 0,
            ],
            [
                'name' => 'Hot haru (10 peças)',
                'category_id' => 4,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404142317_853N_i.jpg',
                'description' => 'Delicioso Hot Camarão cozido na massa Harumaki com Creme cheese e cebolinha.',
                'price' => 27.90,
                'quantity' => 0,
            ],
            [
                'name' => 'Hots (10 peças)',
                'category_id' => 4,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404221809_E4D4_i.jpg',
                'description' => 'Kani',
                'price' => 24.90,
                'quantity' => 0,
            ],
            [
                'name' => 'Hots (10 peças)',
                'category_id' => 4,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404221809_E4D4_i.jpg',
                'description' => 'Skin',
                'price' => 23.90,
                'quantity' => 0,
            ],

            //5
            [
                'name' => 'Hotbol ( 10 peças)',
                'category_id' => 5,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404112205_7LX7_i.jpg',
                'description' => '5 Bolinhas de Salmão grelhado com Creme Cheese, empanado na farinha Panko , 5 Hot Salmão.',
                'price' => 37.90,
                'quantity' => 0,
            ],
            [
                'name' => 'Hot Banana com Chocolate',
                'category_id' => 5,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404131901_XPJO_i.jpg',
                'description' => 'Banana empanada com farinha especial e coberta com chocolate.',
                'price' => 14.90,
                'quantity' => 0,
            ],
            [
                'name' => 'Sashimi Salmão (10 peças)',
                'category_id' => 5,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404131902_EC3I_i.jpg',
                'description' => 'Deliciosas Laminas de um Salmão bem fresquinho.',
                'price' => 35.90,
                'quantity' => 0,
            ],
            [
                'name' => 'Hot promo (40 peças)',
                'category_id' => 5,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404131941_23RL_i.jpg',
                'description' => '20 Hot Salmão, 20 Hot Kani.',
                'price' => 46.90,
                'quantity' => 0,
            ],
            [
                'name' => 'Combo Sushiaky frito (50 peças )',
                'category_id' => 5,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404131944_1713_i.jpg',
                'description' => '10 Hot Salmão , 10 Hot Couve Crispy , 10 Uramaki skin com Batata Crispy ,10 Uramaki Kani ,10 Hot Atum com cebolinha.',
                'price' => 53.90,
                'quantity' => 0,
            ],
            [
                'name' => 'Hot no Capricho (16 peças)',
                'category_id' => 5,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404132300_Q88K_i.jpg',
                'description' => 'Hot no capricho (16 peças) 8 Hot kani com couve crispy, 8 Hot Salmao crispy com Batata.',
                'price' => 28.90,
                'quantity' => 0,
            ],
            [
                'name' => 'Big hot Especial ( 10 peças)',
                'category_id' => 5,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404142204_ENB1_i.jpg',
                'description' => 'Big Hot Especial 10 peças Delicioso Hot Salmao com Camarão com cream cheese e batata Especial.',
                'price' => 39.90,
                'quantity' => 0,
            ],

            //6
            [
                'name' => 'Salmao',
                'category_id' => 6,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404132043_37A8_i.jpg',
                'description' => 'Gohan enrolado em uma fatia de salmão, com Salmão batido e cebolinha.',
                'price' => 19.90,
                'quantity' => 0,
            ],
            [
                'name' => 'Salmao Maçaricado',
                'category_id' => 6,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404132247_563A_i.jpg',
                'description' => 'Gohan enrolado em uma fatia de Salmão selado, cebolinha e Cream Cheese.',
                'price' => 20.90,
                'quantity' => 0,
            ],
            [
                'name' => 'Jhow Couve Maçaricado',
                'category_id' => 6,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404132249_71F4_i.jpg',
                'description' => 'Gohan enrolado em uma fatia de Salmão selado, com Crispy de Couve Frito e Cream Cheese.',
                'price' => 20.90,
                'quantity' => 0,
            ],
            [
                'name' => 'Jhow Crispy batata',
                'category_id' => 6,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404132251_4I64_i.jpg',
                'description' => 'Gohan enrolado em uma fatia de Salmão selado, com Crispy de Batata e Cream Cheese.',
                'price' => 20.90,
                'quantity' => 0,
            ],
            [
                'name' => 'Jhow Geleia de Morango',
                'category_id' => 6,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404132253_7IWH_i.jpg',
                'description' => 'Gohan enrolado em uma fatia de Salmão, com geléia de Morango e cream cheese.',
                'price' => 19.90,
                'quantity' => 0,
            ],
            [
                'name' => 'Jhow Geleia Goiaba',
                'category_id' => 6,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404132257_8OYQ_i.jpg',
                'description' => 'Gohan enrolado em uma fatia de Salmão, com geléia de Goiaba e cream cheese.',
                'price' => 19.90,
                'quantity' => 0,
            ],

            //7
            [
                'name' => 'Kani',
                'category_id' => 7,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404112051_Y2A5_i.jpg',
                'description' => 'Saboroso Gohan, coberto com uma fatia de Kani enrolado na Alga.',
                'price' => 16.90,
                'quantity' => 0,
            ],
            [
                'name' => 'Salmão',
                'category_id' => 7,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404112058_OFN2_i.jpg',
                'description' => 'Saboroso Gohan, coberto com uma fatia de Salmão.',
                'price' => 16.90,
                'quantity' => 0,
            ],
            [
                'name' => 'Camarão',
                'category_id' => 7,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404122315_7V0D_i.jpg',
                'description' => 'Saboroso Gohan, coberto com Camarão cozido enrolado na Alga.',
                'price' => 20.90,
                'quantity' => 0,
            ],
            [
                'name' => 'Salmão Maçaricado',
                'category_id' => 7,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404122316_A4YL_i.jpg',
                'description' => 'Saboroso Gohan, coberto com uma fatia de Salmão selado.',
                'price' => 18.90,
                'quantity' => 0,
            ],
            [
                'name' => 'Skin',
                'category_id' => 7,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404122338_IQ87_i.jpg',
                'description' => 'Saboroso Gohan, coberto com uma fatia de Kani empanado enrolado na Alga.',
                'price' => 16.90,
                'quantity' => 0,
            ],

            //8
            [
                'name' => 'Kani (5 peças)',
                'description' => 'Kani (5 peças)',
                'price' => 15.90,
                'category_id' => 8,
                'quantity' => 0,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404122319_08QG_i.jpg',
            ],
            [
                'name' => 'Sashimi Salmao (5 peças)',
                'description' => 'Atias de salmão bem Saboroso e Fresco.',
                'price' => 22.90,
                'category_id' => 8,
                'quantity' => 0,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404122326_8440_i.jpg',
            ],
            [
                'name' => 'Salmao Maçaricado (5 peças)',
                'description' => 'Atias de salmão Selado bem Saboroso e Fresco com cebolinha.',
                'price' => 24.90,
                'category_id' => 8,
                'quantity' => 0,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404122348_77VX_i.jpg',
            ],

            //9
            [
                'name' => 'Kani kama',
                'category_id' => 9,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404102320_5MC0_i.jpg',
                'description' => 'Saboroso Gohan com gergelim e Kani Fresco com cream cheese.',
                'price' => 13.90,
                'quantity' => 0,
            ],
            [
                'name' => 'Camarão',
                'category_id' => 9,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404102335_KFJD_i.jpg',
                'description' => 'Saboroso Gohan com gergelim e Camaão Fresco com cream cheese.',
                'price' => 13.90,
                'quantity' => 0,
            ],
            [
                'name' => 'Salmão',
                'category_id' => 9,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404102336_234N_i.jpg',
                'description' => 'Saboroso Gohan com gergelim e Salmão Fresco com cream cheese.',
                'price' => 16.90,
                'quantity' => 0,
            ],
            [
                'name' => 'Skin',
                'category_id' => 9,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404102337_6I28_i.jpg',
                'description' => 'Saboroso Gohan com gergelim e Skin Fresco com cream cheese.',
                'price' => 9.00,
                'quantity' => 0,
            ],
            [
                'name' => 'Especial de camarão',
                'category_id' => 9,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404102339_8048_i.jpg',
                'description' => 'Saboroso Gohan com gergelim e Kani Fresco com pele se Salmao fresca por cima com cream cheese.',
                'price' => 17.90,
                'quantity' => 0,
            ],
            [
                'name' => 'Especial de Salmão',
                'category_id' => 9,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404112028_YNM8_i.jpg',
                'description' => 'Saboroso Gohan com gergelim e Salmao Fresco com pele se Salmao fresca por cima com cream cheese.',
                'price' => 18.90,
                'quantity' => 0,
            ],
            [
                'name' => 'Especial de Salmão Flambado',
                'category_id' => 9,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404112031_FHC1_i.jpg',
                'description' => 'Saboroso Gohan gergelim e Salmão Fresco com pele salmão Flambado por cima com creme cheese.',
                'price' => 19.90,
                'quantity' => 0,
            ],
            [
                'name' => 'Mexicano Especial',
                'category_id' => 9,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404122306_27IV_i.jpg',
                'description' => 'Tarta de Salmão, cream cheese cebolinha, arroz e batata crispy.',
                'price' => 20.90,
                'quantity' => 0,
            ],
            [
                'name' => 'Salmao Grelhado',
                'category_id' => 9,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404142229_S575_i.jpg',
                'description' => 'Saboroso Gohan com gergelim e Salmão grelhado Fresco com cream cheese.',
                'price' => 15.90,
                'quantity' => 0,
            ],

            //10
            [
                'name' => 'Camarão',
                'description' => 'Nori, gohan e Camarão fresco.',
                'price' => 10.00,
                'category_id' => 10,
                'quantity' => 0,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404102325_E7GL_i.jpg',
            ],
            [
                'name' => 'Geleia pimenta',
                'description' => 'Nori, gohan e salmão com geleia de pimenta fresco.',
                'price' => 11.90,
                'category_id' => 10,
                'quantity' => 0,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404102327_2W81_i.jpg',
            ],
            [
                'name' => 'Kani kama',
                'description' => 'Nori, gohan e Kani fresco.',
                'price' => 8.00,
                'category_id' => 10,
                'quantity' => 0,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404102330_3N4A_i.jpg',
            ],
            [
                'name' => 'Salmao',
                'description' => 'Nori, gohan e salmão fresco.',
                'price' => 9.00,
                'category_id' => 10,
                'quantity' => 0,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404122258_CGN5_i.jpg',
            ],
            [
                'name' => 'Atum grelhado',
                'description' => 'Nori, gohan e Atum grelhado fresco.',
                'price' => 7.50,
                'category_id' => 10,
                'quantity' => 0,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404122305_UCMS_i.jpg',
            ],

            //11
            [
                'name' => 'Temaki + Hots',
                'description' => 'Temaki de Camarão empanado , 5 Hots Camarão.',
                'price' => 39.90,
                'category_id' => 11,
                'quantity' => 0,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404112110_8074_i.jpg',
            ],
            [
                'name' => 'Combo Suhidara (22 peças ) + Temaki',
                'description' => '6 Hots Salmão, 6 Hossomaki Kani , com Crispy de batata , 4 Sashimi Salmão , 4 Uramaki Atum Grelhado com crispy , 2 Niguiri de Salmão ,1 Temaki de Salmão.',
                'price' => 69.90,
                'category_id' => 11,
                'quantity' => 0,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404112112_1E01_i.jpg',
            ],
            [
                'name' => 'Temaki love casal',
                'description' => '2 Temakis Salmão, 10 Hot Salmão',
                'price' => 65.90,
                'category_id' => 11,
                'quantity' => 0,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404122331_XU22_i.jpg',
            ],
            [
                'name' => 'Temaki Casal',
                'description' => '2 temakis Salmão empanado + 10 hot Salmão',
                'price' => 60.90,
                'category_id' => 11,
                'quantity' => 0,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404122332_447S_i.jpg',
            ],
            [
                'name' => 'Temaki Lovizinho',
                'description' => 'Temaki de Salmão ( 180g ) , 8 Hots Salmão.',
                'price' => 53.90,
                'category_id' => 11,
                'quantity' => 0,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404122341_7BE3_i.jpg',
            ],
            [
                'name' => 'Temaki Executivo',
                'description' => '1 Temaki Salmao, 4 Sashimi Salmao, 3 Niguiri Salmão, 3 jhou Geleia, 3 Hot roll Crispy, 3 Uramaki kani',
                'price' => 55.90,
                'category_id' => 11,
                'quantity' => 0,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404131959_NN78_i.jpg',
            ],
            [
                'name' => 'Temaki Kids Executivo',
                'description' => 'Mini Temaki de Salmao ( 120g ) 5 Hot Salmão , 2 Harumakis Chocolate.',
                'price' => 35.90,
                'category_id' => 11,
                'quantity' => 0,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404132001_M755_i.jpg',
            ],

            //12
            //Combinado
            [
                'name' => '20 peças Aky',
                'description' => '',
                'price' => 27.90,
                'category_id' => 12,
                'quantity' => 20,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404200054_6FNS_i.jpg',
            ],
            [
                'name' => '30 peças Aky',
                'description' => '',
                'price' => 37.90,
                'category_id' => 12,
                'quantity' => 30,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404200054_6FNS_i.jpg',
            ],
            [
                'name' => '40 peças Aky',
                'description' => '',
                'price' => 47.90,
                'category_id' => 12,
                'quantity' => 40,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404200054_6FNS_i.jpg',
            ],
            [
                'name' => '60 peças Aky',
                'description' => '',
                'price' => 67.90,
                'category_id' => 12,
                'quantity' => 60,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404200054_6FNS_i.jpg',
            ],
            [
                'name' => '80 peças Aky',
                'description' => '',
                'price' => 87.90,
                'category_id' => 12,
                'quantity' => 80,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404200054_6FNS_i.jpg',
            ],
            [
                'name' => '100 peças Aky',
                'description' => '',
                'price' => 107.90,
                'category_id' => 12,
                'quantity' => 100,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404200054_6FNS_i.jpg',
            ],

            //13
            [

                'name' => 'Salmão',
                'description' => 'Quem tem limite é município ! O lançamento mais esperado da década !muito Salmão Alface , cream cheese  , cebolinha e gergelim nessa explosão de sabores.',
                'price' => 39.90,
                'category_id' => 13,
                'quantity' => 0,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404122358_O81B_i.jpg',
            ],
            [

                'name' => 'Camarão',
                'description' => 'Daquele jeito que so vcs sabem. Muito camarão , Alface , crean cheesse , cebolinha , gergelim',
                'price' => 44.90,
                'category_id' => 13,
                'quantity' => 0,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404130001_55M4_i.jpg',
            ],

            //14
            [
                'name' => 'Salmão',
                'description' => 'Copo de 400 ml com Salmão , cebolinha , gergelim , arroz Cream Cheese , couve crispy.',
                'price' => 35.90,
                'category_id' => 14,
                'quantity' => 0,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404142157_N21J_i.jpg',
            ],
            [
                'name' => 'Especial',
                'description' => 'Copo de 400 ml com Salmão , cebolinha , arroz , Camarão empanado e frito , cream cheese , couve crispy.',
                'price' => 39.90,
                'category_id' => 14,
                'quantity' => 0,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404142200_FVL3_i.jpg',
            ],

            //15
            [
                'name' => 'Salmao Cru',
                'description' => 'Um hotroll incrivelmente recheado com salmão cru, cream cheese, cebolinha e couve crispy',
                'price' => 39.90,
                'category_id' => 15,
                'quantity' => 0,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404142206_G0UX_i.jpg',
            ],
            [
                'name' => 'Kani Empanado',
                'description' => 'Hotroll incrivelmente recheado com Camarão cozido, com cream cheese, cebolinha e couve crispy',
                'price' => 27.90,
                'category_id' => 15,
                'quantity' => 0,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404142208_67VG_i.jpg',
            ],
            [
                'name' => 'Atum Grelhado',
                'description' => 'Hotroll incrivelmente recheado com Atum grelhado, com cream cheese, cebolinha e couve crispy',
                'price' => 25.90,
                'category_id' => 15,
                'quantity' => 0,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404142209_008X_i.jpg',
            ],
            [
                'name' => 'Camarão',
                'description' => 'Hotroll incrivelmente recheado com Camarão cozido, com cream cheese, cebolinha e couve crispy',
                'price' => 39.90,
                'category_id' => 15,
                'quantity' => 0,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404142226_46G5_i.jpg',
            ],
            [
                'name' => 'Salmao Grelhado',
                'description' => 'Um hotroll incrivelmente recheado com salmão grelhado, finalizado com cream cheese maçaricado, cebolinha.',
                'price' => 37.90,
                'category_id' => 15,
                'quantity' => 0,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404160009_U13P_i.jpg',
            ],

            //16
            [
                'name' => 'Gergelim',
                'description' => '',
                'price' => 2.00,
                'category_id' => 16,
                'quantity' => 0,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404152328_DA0P_i.jpg',
            ],
            [
                'name' => 'Wasabi',
                'description' => '',
                'price' => 2.00,
                'category_id' => 16,
                'quantity' => 0,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404152329_03WY_i.jpg',
            ],
            [
                'name' => 'Rashi',
                'description' => '',
                'price' => 1.00,
                'category_id' => 16,
                'quantity' => 0,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404152332_7I08_i.jpg',
            ],
            [
                'name' => 'Cream Chese',
                'description' => '',
                'price' => 5.90,
                'category_id' => 16,
                'quantity' => 0,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404152337_B1XD_i.jpg',
            ],
            [
                'name' => 'Shoyu',
                'description' => '',
                'price' => 1.00,
                'category_id' => 16,
                'quantity' => 0,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404160000_0PVY_i.jpg',
            ],
            [
                'name' => 'Tarê',
                'description' => '',
                'price' => 1.00,
                'category_id' => 16,
                'quantity' => 0,
                'link_image' => 'https://static.ifood-static.com.br/image/upload/t_medium/pratos/6aa5ff33-cb34-4615-82f9-d81f3ef13bf8/202404160001_DOQI_i.jpg',
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }

        $comboItems = [
            ['name' => 'Hossomaki Atum', 'price' => '0.00'],
            ['name' => 'Hot kani', 'price' => '0.00'],
            ['name' => 'Hot Salmão', 'price' => '0.00'],
            ['name' => 'Niguiri de kani Empanado', 'price' => '0.00'],
            ['name' => 'Hossomaki Kani', 'price' => '0.00'],
            ['name' => 'Uramaki Skin', 'price' => '0.00'],
            ['name' => 'Uramaki Atum', 'price' => '0.00'],
            ['name' => 'Uramaki Kani', 'price' => '0.00'],
            ['name' => 'Uramaki Salmão', 'price' => '16.90'],
            ['name' => 'Hossomaki Salmão', 'price' => '10.00'],
            ['name' => 'Niguiri Salmão', 'price' => '16.90'],
            ['name' => 'Hot Camarão', 'price' => '13.90'],
        ];

        foreach ($comboItems as $item) {
            ComboItem::create($item);
        }
    }
}
