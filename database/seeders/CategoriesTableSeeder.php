<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

   
     //Apenas com poucos registros
    //-----------------------------------------
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'Categoria 1',
        ]);

        DB::table('categories')->insert([
            'name' => 'Categoria 2',
        ]);
    }
}
