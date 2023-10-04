<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $currentDate = Carbon::now();

         // versão inserindo grande quantidade de registros
         // i = quantidade de registros a serem inseridos
         
        /*  for ($i = 1; $i <= 10; $i++) {
            DB::table('categories')->insert([
                'name' => 'Remessa ' . $i,
                'created_at' => $currentDate->format('d-m-Y H:i:s'),
                'updated_at' => null, // inserindo como null
            ]);
        } */

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
