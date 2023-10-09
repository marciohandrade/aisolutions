<?php

namespace App\Http\Controllers;

use App\Services\JsonImportService;
use Illuminate\Http\Request;

class JsonImportController extends Controller
{
    protected $service;

    public function __construct(JsonImportService $service)
    {
        $this->service = $service;
    }

    public function import(Request $request)
    {        
        try {
            $file = $request->file('file');
            
            if (!$file) {
                return response()->json(['error' => 'Arquivo não enviado.'], 400);
            }

            $this->service->importFromJsonFile($file);

            return response()->json(['message' => 'Importação realizada com sucesso!']);

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
