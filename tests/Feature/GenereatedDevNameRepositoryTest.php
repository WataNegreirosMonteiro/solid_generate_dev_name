<?php

namespace Tests\Feature;

use App\Repositories\GeneratedDevNameRepositoryInterface;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class GenereatedDevNameRepositoryTest extends TestCase
{
    use RefreshDatabase;

    public function testGetAllMethod()
    {
        $repository = app(GeneratedDevNameRepositoryInterface::class);

        $result = $repository->getAll();

        $this->assertIsIterable($result);
    }
}
