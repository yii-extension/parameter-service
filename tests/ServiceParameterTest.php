<?php

declare(strict_types=1);

namespace Yii\Extension\Widget\Tests;

use PHPUnit\Framework\TestCase;
use Yii\Extension\Service\ServiceParameter;

final class ServiceParameterTest extends TestCase
{
    public function testExecute(): void
    {
        $parameter = new ServiceParameter(['app' => ['test' => 'testMe']]);

        $this->assertEquals('testMe', $parameter->get('app.test'));
    }
}
