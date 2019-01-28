<?php

namespace App\Factory;

use App\Model\ArrayOfStreet;
use App\Model\Street;

/**
 * Authentication.
 *
 * @author Jadu Ltd.
 */
class StreetSearchFactory
{
    /**
     * @var string
     */
    private $validSearchTerm = 'merus+court';

    /**
     * Build an ArrayOfProperty to use in the property/search response.
     *
     * @param string $postcode To get a response of properties back this should be LE19+1RJ
     *
     * @return ArrayOfProperty
     */
    public function createStreets(string $searchTerm)
    {
        $streetResponse = new ArrayOfStreet();

        if ($searchTerm == $this->validSearchTerm) {
            $streetOne = $this->createStreetOne();
            $streetTwo = $this->createStreetTwo();
            $streetResponse->streets = [$streetOne, $streetTwo];
        } else {
            $streetResponse->streets = [];
        }

        return $streetResponse;
    }

    /**
     * Create a Street to use in the createStreets response.
     *
     * @return Street
     */
    private function createStreetOne()
    {
        $street = new Street();

        $street->identifier = '10001228376';
        $street->usrn = '2802454';
        $street->street_name = 'MERUS COURT';
        $street->town = 'BRAUNSTONE TOWN';
        $street->locality = 'MERIDIAN BUSINESS PARK';

        return $street;
    }

     /**
     * Create a Street to use in the createStreets response.
     *
     * @return Street
     */
    private function createStreetTwo()
    {
        $street = new Street();

        $street->identifier = '49801493568';
        $street->usrn = '3937452';
        $street->street_name = 'MERUS COURT';
        $street->town = 'BRAUNSTONE TOWN';
        $street->locality = 'MERIDIAN BUSINESS PARK';

        return $street;
    }
}