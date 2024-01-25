<?php

namespace App\Services;

use App\Repositories\GeneratedDevNameRepository;

class StringProcessor
{
    private $generatedDevNameRepository;

    public function __construct(GeneratedDevNameRepository $generatedDevNameRepository)
    {
        $this->generatedDevNameRepository = $generatedDevNameRepository;
    }

    public function process(string $input): string
    {
        $processedName = 'dev_'.$input;


        return $this->generatedDevNameRepository->create(['name' => $processedName]);
    }

}
