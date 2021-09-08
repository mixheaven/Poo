<?php
Class Speedometer
{
    public const MILES_CONVERT =  0.621;


    


    public static function convertKmInMiles(int $currentSpeed): ?float
    {
        return $currentSpeed * self::MILES_CONVERT;

    }

    public static function convertMilesInKm(int $currentSpeed): ?float
    {
        return $currentSpeed / self::MILES_CONVERT;
    }
}