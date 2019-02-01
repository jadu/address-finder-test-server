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
     * Build an ArrayOfStreet to use in the Street/search response.
     *
     * @param string $postcode To get a response of properties back this should be LE19+1RJ
     *
     * @return ArrayOfStreet
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
     * Create a street to use in the createStreets response.
     *
     * @return Street
     */
    private function createStreetOne()
    {
        $street = new Street();
       
        $street->usrn = '2802454';
        $street->street = 'MERUS COURT';
        $street->town = 'BRAUNSTONE TOWN';
        $street->locality = 'MERIDIAN BUSINESS PARK';

        return $street;
    }

    /**
     * Create a street to use in the createStreets response.
     *
     * @return Street
     */
    private function createStreetTwo()
    {
        $street = new Street();

        $street->usrn = '3937452';
        $street->street = 'MERUS COURT';
        $street->town = 'BRAUNSTONE TOWN';
        $street->locality = 'MERIDIAN BUSINESS PARK';

        return $street;
    }
}
