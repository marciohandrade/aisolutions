<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        
        //Apenas com poucos registros
        //-----------------------------------------
        DB::table('documents')->insert([
            'category_id' => 1, // ID da Categoria 1
            'title' => 'Documento 1',
            'contents' => 'Conteúdo do Documento 1',
        ]);

        DB::table('documents')->insert([
            'category_id' => 2, // ID da Categoria 2
            'title' => 'Documento 2',
            'contents' => 'Conteúdo do Documento 2',
        ]);

        // Adicione mais inserções conforme necessário
    }
}
