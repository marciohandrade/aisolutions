<?php

namespace App\Services;

use App\Repositories\JsonImportRepository;
use Illuminate\Http\UploadedFile;

class JsonImportService
{
    protected $repository;

    public function __construct(JsonImportRepository $repository)
    {
        $this->repository = $repository;
    }

    public function importFromJsonFile(UploadedFile $file)
    {
        $data = json_decode(file_get_contents($file->getRealPath()), true);

        if (!$data) {
            throw new \Exception("Erro ao ler o arquivo JSON.");
        }

        return $this->repository->import($data);
    }
}
