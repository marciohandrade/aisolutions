<?php

namespace Database\Seeders;


//use Illuminate\Database\Console\Seeds\WithoutModelEvents; // naõ esta sendo utilizado
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

   
     //Apenas com poucos registros
    //-----------------------------------------
    public function run(): void
    {
        $currentDate = Carbon::now();        
        
        // versão muitos registros de uma vez só.
       /*  for ($i = 1; $i <= 10; $i++) {
            DB::table('categories')->insert([
                'name' => 'Remessa ' . $i,                
                'created_at' => $currentDate->format('d-m-Y H:i:s'),
                'updated_at' => null, // inserindo como null
            ]);
        } */

        // versão 1
        DB::table('categories')->insert([
            'name' => 'Remessa Parcial',
            'created_at' => Carbon::now(), // formato data padrão
            'updated_at' => Carbon::now(), // formato data padrão
        ]);

        DB::table('categories')->insert([
            'name' => 'Remessa',
            'created_at' => $currentDate->format('d-m-Y H:i:s'),
            'updated_at' => null, // inserindo como null
        ]);
    }
}
