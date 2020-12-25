<?php

declare(strict_types=1);

namespace Yii\Extension\Widget\Tests;

use PHPUnit\Framework\TestCase;
use Yii\Extension\Service\Parameter;

final class ParameterTest extends TestCase
{
    public function testExecute(): void
    {
        $parameter = new Parameter(['app' => ['test' => 'testMe']]);

        $this->assertEquals('testMe', $parameter->get('app.test'));
    }
}
