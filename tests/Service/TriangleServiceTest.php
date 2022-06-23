<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Service\TriangleService;

class TriangleServiceTest extends TestCase
{
    public function testResultMessage(): void
    {
        $testMessage = 'The area of a triangle is 8 square cm.';

        $this->assertIsString(TriangleService::resultMessage(8));
        $this->assertStringContainsString($testMessage, TriangleService::resultMessage(8));
    }

    public function testBaseAndHeightAreaCalculator(): void
    {
        $triangleService = new TriangleService();
        $base = 5;
        $height = 5;

        $triangleArea = $triangleService->baseAndHeightAreaCalculator($base, $height);

        $this->assertSame(12.5, $triangleArea);
        $this->assertNotSame(8, $triangleArea);
    }

    public function testHeronFormulaAreaCalculator(): void
    {
        $triangleService = new TriangleService();
        $sideA = 3;
        $sideB = 4;
        $sideC = 5;

        $triangleArea = $triangleService->heronFormulaAreaCalculator($sideA, $sideB, $sideC);

        $this->assertNotSame(6, $triangleArea);
        $this->assertEquals(6, $triangleArea);
        $this->assertNotEquals(13, $triangleArea);
    }
}