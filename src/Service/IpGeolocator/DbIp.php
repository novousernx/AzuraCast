<?php

namespace App\Service\IpGeolocator;

use App\Environment;

class DbIp extends AbstractIpGeolocator
{
    public static function getBaseDirectory(): string
    {
        $environment = Environment::getInstance();
        return dirname($environment->getBaseDirectory()) . '/dbip';
    }

    public static function getDatabasePath(): string
    {
        return self::getBaseDirectory() . '/dbip-city-lite.mmdb';
    }

    public static function getAttribution(): string
    {
        return '<a href="https://db-ip.com">' . __('IP Geolocation by DB-IP') . '</a>';
    }
}
