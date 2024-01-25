<?php

namespace App\Repositories;

use App\Models\generatedDevName;

interface GeneratedDevNameRepositoryInterface
{
    public function create(array $data): generatedDevName;
    public function getAll(): iterable;
}

class GeneratedDevNameRepository implements GeneratedDevNameRepositoryInterface
{
    public function create(array $data): GeneratedDevName
    {
        return GeneratedDevName::create($data);
    }

    public function getAll(): iterable
    {
        return GeneratedDevName::all();
    }
}
