<?php declare(strict_types=1);

namespace App\Service;

class CircleService
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
     * @param float $circleDiameter
     * @return string
     * 
     * return result message with circle diameter value
     */
    public static function resultMessage(int $circleDiameter): string
    {
        return "The diameter of a circle is $circleDiameter cm.";
    }

    /**
     * @param int $radius
     * @return float
     * 
     * Calculate circle diameter using radius
     * 
     * Formula:
     * d = 2r
     */
    public function circleDiameterCalculator(int $radius): float
    {
        $this->diameter = 2 * $radius;
        return $this->diameter;
    }

    /**
     * @param int $radius
     * @return float
     *
     * Calculate circle diameter using radius
     *
     * Formula:
     * d = 3.14 * r * r
     */
    public function getSurfaceCalculator(int $radius): float
    {
        $this->surface = 3.14 * $radius * $radius;
        return $this->surface;
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
        return $this->diameter;
    }
}