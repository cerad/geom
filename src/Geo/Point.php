<?php declare(strict_types=1);

namespace App\Geo;

class Point
{
    public function __construct(float $latitude, float $longitude)
    {
        $this->latitude  = $latitude;
        $this->longitude = $longitude;
    }

    public function getLatitude() : float
    {
        return $this->latitude;
    }

    public function getLongitude() : float
    {
        return $this->longitude;
    }
}