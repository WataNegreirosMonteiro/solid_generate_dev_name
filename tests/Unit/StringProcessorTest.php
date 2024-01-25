<?php

namespace Tests\Unit;

use App\Repositories\GeneratedDevNameRepository;
use App\Services\StringProcessor;
use PHPUnit\Framework\TestCase;

class StringProcessorTest extends TestCase
{
    public function testProcessMethod() {
        $generatedDevNameRepository = new GeneratedDevNameRepository();

        $stringProcessor = new StringProcessor($generatedDevNameRepository);

        $result = $stringProcessor->process('nome_teste');

        $this->assertEquals('dev_nome_teste', $result);
    }
}
