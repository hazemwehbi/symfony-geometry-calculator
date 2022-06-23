<?php declare(strict_types=1);

namespace App\Service;

class GeometryService
{
    /**
     * @param Object sumOfAreas
     * @return float
     * 
     * return result message with sum of areas for two given objects
     */
    public static function sumOfAreas(  $obj1, $obj2): float
    {
        return $obj1->getSurface() + $obj2->getSurface();
    }

    /**
     * @param Object diametersOfGivenObjects
     * @return float
     *
     * return result message with sum of areas for two given objects
     */
    public static function diametersOfGivenObjects( $obj1, $obj2): float
    {
        return $obj1->getDiameter() + $obj1->getDiameter();
    }

}