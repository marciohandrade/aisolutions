<?php

namespace App\Repositories;

use App\Jobs\ProcessDocumentImport;

class JsonImportRepository
{
    public function import(array $data)
    {
        if (!isset($data['exercise']) || !isset($data['documents'])) {
            throw new \Exception("Dados em formato incorreto.");
        }

        foreach ($data['documents'] as $documentData) {
            $document = [
                'exercise' => $data['exercise'],
                'category' => $documentData['category'] ?? null,
                'title'    => $documentData['title'] ?? null,
                'content'  => $documentData['content'] ?? null
            ];
            
            // Inserir o documento na fila para processamento
            ProcessDocumentImport::dispatch($document);
        }
    }
}
