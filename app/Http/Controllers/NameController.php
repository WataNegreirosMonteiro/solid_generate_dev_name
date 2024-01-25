<?php

namespace App\Http\Controllers;

use App\Repositories\GeneratedDevNameRepository;
use App\Services\StringProcessor;
use Illuminate\Http\Request;

class NameController extends Controller
{
    private $stringProcessor;
    private $generatedNameRepository;

    public function __construct(StringProcessor $stringProcessor, GeneratedDevNameRepository $generatedDevNameRepository)
    {
        $this->stringProcessor = $stringProcessor;
        $this->generatedNameRepository = $generatedDevNameRepository;
    }

    public function processString(Request $request)
    {
        $input = $request->input('name');
        $this->stringProcessor->process($input);

        $allNames = $this->generatedNameRepository->getAll();

        return response()->json(['results' => $allNames]);
    }
}
