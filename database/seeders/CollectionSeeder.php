<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('collections')->insert([
            'name' => 'Houseki no Kuni',
            'author' => 'Haruko Ichikawa',
            'description' => 'Houseki no Kuni se establece en un futuro lejano, en una tierra habitada por formas de vidas inmortales llamadas Houseki(gemas), quienes están hechas de gemas.',
            'publisher' => 'Sueshia',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('collections')->insert([
            'name' => 'Monster',
            'author' => 'Naoki Urasawa',
            'description' => 'La serie sigue los pasos del neurocirujano Kenzo Tenma que desobedece las órdenes del director del hospital, quien le había ordenado operar a un político influyente.',
            'publisher' => 'Sueshia',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('collections')->insert([
            'name' => 'Vinland Saga',
            'author' => 'Makoto Yukimura',
            'description' => 'Thors, un gran guerrero vikingo, es asesinado en batalla por Askeladd, un mercenario. Thorfinn, hijo de Thors, juró vengarse',
            'publisher' => 'Sueshia',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('collections')->insert([
            'name' => 'Kaguya Sama: Love is War',
            'author' => 'Akasaka Aka',
            'description' => 'Manga de kaguya',
            'publisher' => 'Sueshia',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
