<?php

namespace Database\Seeders;

use App\Models\Flower;
use Illuminate\Database\Seeder;

class FlowersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Flower::create([
            'type' => 'Bougenville',
            'name' => 'Bougenville Coconut Ice',
            'description' => 'Bougenville coconut ice yang masuk dalam keluarga Nyctaginaceae ini berasal dari negara Brasil bagian selatan. Bougenville varietas coconut ice adalah tanaman merambat yang dapat tumbuh cepat dan memperoleh dukungan dengan merambat pada struktur di dekatnya.',
            'price' => 30000,
            'image' => 'bcoconut.jpeg'
        ]);

        Flower::create([
            'type' => 'Bougenville',
            'name' => 'Bougenville California Gold',
            'description' => 'Bougenville California Gold yang masuk dalam keluarga Nyctaginaceae ini berasal dari negara Brasil bagian selatan. Bougenville varietas coconut ice adalah tanaman merambat yang dapat tumbuh cepat dan memperoleh dukungan dengan merambat pada struktur di dekatnya.',
            'price' => 25000,
            'image' => 'bcalifornia.jpeg'
        ]);

        Flower::create([
            'type' => 'Bougenville',
            'name' => 'Bougenville California Gold',
            'description' => 'Bougenville California Gold yang masuk dalam keluarga Nyctaginaceae ini berasal dari negara Brasil bagian selatan. Bougenville varietas coconut ice adalah tanaman merambat yang dapat tumbuh cepat dan memperoleh dukungan dengan merambat pada struktur di dekatnya.',
            'price' => 25000,
            'image' => 'bbambinom.jpeg'
        ]);

        Flower::create([
            'type' => 'Bougenville',
            'name' => 'Bougenville Baby Victoria',
            'description' => 'Bougenville Baby Victoria yang masuk dalam keluarga Nyctaginaceae ini berasal dari negara Brasil bagian selatan. Bougenville varietas coconut ice adalah tanaman merambat yang dapat tumbuh cepat dan memperoleh dukungan dengan merambat pada struktur di dekatnya.',
            'price' => 45000,
            'image' => 'bbaby.jpeg'
        ]);

        Flower::create([
            'type' => 'Bougenville',
            'name' => 'Bougenville Baby Lauren',
            'description' => 'Bougenville Baby Lauren yang masuk dalam keluarga Nyctaginaceae ini berasal dari negara Brasil bagian selatan. Bougenville varietas coconut ice adalah tanaman merambat yang dapat tumbuh cepat dan memperoleh dukungan dengan merambat pada struktur di dekatnya.',
            'price' => 50000,
            'image' => 'bbambinob.jpeg'
        ]);

        Flower::create([
            'type' => 'Bonsai',
            'name' => 'Bonsai Maharani',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque fugiat modi, quas odit, inventore reprehenderit corporis natus facere, ipsum quam ut ipsam doloremque. Iste temporibus animi cupiditate, iure qui velit.',
            'price' => 50000,
            'image' => 'bmaharani.jpeg'
        ]);

        Flower::create([
            'type' => 'Bonsai',
            'name' => 'Bonsai Anting-Anting Putri',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque fugiat modi, quas odit, inventore reprehenderit corporis natus facere, ipsum quam ut ipsam doloremque. Iste temporibus animi cupiditate, iure qui velit.',
            'price' => 150000,
            'image' => 'banting.jpeg'
        ]);

        Flower::create([
            'type' => 'Bonsai',
            'name' => 'Bonsai Beringin Korea',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque fugiat modi, quas odit, inventore reprehenderit corporis natus facere, ipsum quam ut ipsam doloremque. Iste temporibus animi cupiditate, iure qui velit.',
            'price' => 600000,
            'image' => 'bkorea.jpeg'
        ]);

        Flower::create([
            'type' => 'Cemara',
            'name' => 'Cemara Salju',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque fugiat modi, quas odit, inventore reprehenderit corporis natus facere, ipsum quam ut ipsam doloremque. Iste temporibus animi cupiditate, iure qui velit.',
            'price' => 20000,
            'image' => 'cemara.jpeg'
        ]);

        Flower::create([
            'type' => 'Keladi',
            'name' => 'Keladi Siam Aurora',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque fugiat modi, quas odit, inventore reprehenderit corporis natus facere, ipsum quam ut ipsam doloremque. Iste temporibus animi cupiditate, iure qui velit.',
            'price' => 25000,
            'image' => 'aurora.jpeg'
        ]);

        Flower::create([
            'type' => 'Keladi',
            'name' => 'Keladi Tabur Emas',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque fugiat modi, quas odit, inventore reprehenderit corporis natus facere, ipsum quam ut ipsam doloremque. Iste temporibus animi cupiditate, iure qui velit.',
            'price' => 20000,
            'image' => 'emas.jpeg'
        ]);

        Flower::create([
            'type' => 'Serut',
            'name' => 'Serut',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque fugiat modi, quas odit, inventore reprehenderit corporis natus facere, ipsum quam ut ipsam doloremque. Iste temporibus animi cupiditate, iure qui velit.',
            'price' => 600000,
            'image' => 'serut.jpeg'
        ]);
    }
}
