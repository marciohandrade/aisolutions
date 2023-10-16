<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DocumentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentDate = Carbon::now();

        //Inserindo muitos registros de uma vez
        /*  for ($i = 1; $i <= 50; $i++) {
            DB::table('documents')->insert([
                'category_id' => rand(1, 10), // qtd. categorias existentes.
                'title' => 'Documento ' . $i,
                'contents' => 'Conteúdo do Documento ' . $i,

            ]);
        } */

        
        //Apenas com poucos registros
        //-----------------------------------------
        DB::table('documents')->insert([
            'category_id' => 17, // ID da Categoria 1
            'title' => 'Documento 1',
            'contents' => 'Conteúdo do Documento 1',
        ]);

        DB::table('documents')->insert([
            'category_id' => 18, // ID da Categoria 2
            'title' => 'Documento 2',
            'contents' => 'Conteúdo do Documento 2',
        ]);

        // Adicione mais inserções conforme necessário
    }
}
