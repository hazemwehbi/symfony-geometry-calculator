<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Service\CircleService;

class CircleServiceTest extends TestCase
{
    public function testResultMessage(): void
    {
        $testMessage = 'The diameter of a circle is 5 cm.';

        $this->assertIsString(CircleService::resultMessage(5));
        $this->assertStringContainsString($testMessage, CircleService::resultMessage(5));
    }

    public function testCircleDiameterCalculator(): void
    {
        $circleService = new CircleService();
        $radius = 5;

        $circleRadius = $circleService->circleDiameterCalculator($radius);

        $this->assertSame(10, $circleRadius);
        $this->assertNotSame(8, $circleRadius);
    }
}