<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comics')->insert([
            'tag_id' => 1,
            'collection_id' => 1,
            'name' => 'Tomo 1',
            'price' => '19.99',
            'type' => 'Tapa dura',
            'edition' => 'Primero',
            'image' => 'https://i.imgur.com/eEFsjKB.png',
            'state' => '1',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('comics')->insert([
            'tag_id' => 1,
            'collection_id' => 1,
            'name' => 'Tomo 2',
            'price' => '19.99',
            'type' => 'Tapa dura',
            'edition' => 'Primero',
            'image' => 'https://i.imgur.com/Ti6xuiN.png',
            'state' => '1',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('comics')->insert([
            'tag_id' => 1,
            'collection_id' => 1,
            'name' => 'Tomo 3',
            'price' => '19.99',
            'type' => 'Tapa dura',
            'edition' => 'Primero',
            'image' => 'https://i.imgur.com/HS8TrpR.png',
            'state' => '1',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('comics')->insert([
            'tag_id' => 1,
            'collection_id' => 1,
            'name' => 'Tomo 4',
            'price' => '19.99',
            'type' => 'Tapa dura',
            'edition' => 'Primero',
            'image' => 'https://i.imgur.com/75aH4X9.png',
            'state' => '1',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('comics')->insert([
            'tag_id' => 1,
            'collection_id' => 1,
            'name' => 'Tomo 5',
            'price' => '19.99',
            'type' => 'Tapa dura',
            'edition' => 'Primero',
            'image' => 'https://i.imgur.com/OhVJhUG.png',
            'state' => '1',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('comics')->insert([
            'tag_id' => 1,
            'collection_id' => 1,
            'name' => 'Tomo 6',
            'price' => '19.99',
            'type' => 'Tapa dura',
            'edition' => 'Primero',
            'image' => 'https://i.imgur.com/mxMcRrH.png',
            'state' => '1',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('comics')->insert([
            'tag_id' => 1,
            'collection_id' => 1,
            'name' => 'Tomo 7',
            'price' => '19.99',
            'type' => 'Tapa dura',
            'edition' => 'Primero',
            'image' => 'https://i.imgur.com/snxKSRI.png',
            'state' => '1',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('comics')->insert([
            'tag_id' => 2,
            'collection_id' => 2,
            'name' => 'Tomo 1',
            'price' => '19.99',
            'type' => 'Tapa dura',
            'edition' => 'Remaster',
            'image' => 'https://i.imgur.com/9kO7wVA.png',
            'state' => '1',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('comics')->insert([
            'tag_id' => 3,
            'collection_id' => 3,
            'name' => 'Tomo 1',
            'price' => '19.99',
            'type' => 'Tapa dura',
            'edition' => 'Nueva',
            'image' => 'https://i.imgur.com/yaIpIAb.png',
            'state' => '1',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('comics')->insert([
            'tag_id' => 3,
            'collection_id' => 3,
            'name' => 'Tomo 2',
            'price' => '19.99',
            'type' => 'Tapa dura',
            'edition' => 'Nueva',
            'image' => 'https://i.imgur.com/9pCtPGZ.png',
            'state' => '1',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('comics')->insert([
            'tag_id' => 3,
            'collection_id' => 3,
            'name' => 'Tomo 3',
            'price' => '19.99',
            'type' => 'Tapa dura',
            'edition' => 'Nueva',
            'image' => 'https://i.imgur.com/8aSURR4.png',
            'state' => '1',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
