<?php declare(strict_types=1);

namespace App\Service;

class TriangleService
{
    /**
     * @var float|int
     */
    private $surface;

    /**
     * @var float|int
     */
    private $diameter;

    /**
     * @var int|float $triangleArea
     * @return string
     * 
     * return result message with triangle area value
     */
    public static function resultMessage(float $triangleArea): string
    {
        return "The area of a triangle is $triangleArea square cm.";
    }

    /**
     * @return float|int
     */
    public function getSurface()
    {
        return $this->surface;
    }

    /**
     * @return float|int
     */
    public function getDiameter()
    {
        return ($this->sideA +$this->sideB + $this->sideC ) / 3.14;
    }

    /**
     * @param int $base
     * @param int $height
     * @return int|float
     * 
     * Calculate area of the triangle using
     * base and height of the triangle
     * 
     * Formula:
     * a = (bh) / 2
     */
    public function baseAndHeightAreaCalculator(int $base, int $height): float
    {
        $this->surface = ($base * $height) / 2;
        return $this->surface;
    }

    /**
     * @param int $sideA
     * @param int $sideB
     * @param int $sideC
     * @return int|float
     * 
     * Calculate semiperimeter of the triangle for use in Heron's formula
     * 
     * Formula:
     * s = (sideA + sideB + sideC) / 2
     */
    protected function semiperimeterCalculator(int $sideA, int $sideB, int $sideC): float
    {
        return ($sideA + $sideB + $sideC) / 2;
    }

    /**
     * @param int|float $semiperimeter
     * @param int $sideA
     * @param int $sideB
     * @param int $sideC
     * @return float
     * 
     * Heron's formula for calculating triangle area with semiperimeter
     * and side lenghts
     * 
     * Formula:
     * s = semiperimeter value
     * a = sgrt(s(s-a)(s-b)(S-c))
     */
    private function heronFormula(float $semiperimeter, int $sideA, int $sideB, int $sideC): float
    {
        return sqrt(
            $semiperimeter * (
                ($semiperimeter - $sideA) * 
                ($semiperimeter - $sideB) * 
                ($semiperimeter - $sideC)
            )
        );
    }

    /**
     * @param int $sideA
     * @param int $sideB
     * @param int $sideC
     * @return float
     * 
     * Calculate area of the triangle using Heron's formula
     */
    public function heronFormulaAreaCalculator(int $sideA, int $sideB, int $sideC): float
    {
        // calculate semiperimeter using sidelenghts
        $semiperimeter = $this->semiperimeterCalculator($sideA, $sideB, $sideC);
        
        return $this->heronFormula($semiperimeter, $sideA, $sideB, $sideC);
    }
}