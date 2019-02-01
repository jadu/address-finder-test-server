<?php

namespace App\Factory;

use App\Model\Street;

/**
 * Authentication.
 *
 * @author Jadu Ltd.
 */
class StreetFetchFactory
{
    /**
     * @var string
     */
    private $validIdentifier = '10001228376';

    /**
     * Build a street to use in the Street/fetch response.
     *
     * @param string $validIdentifier To get a response back this should be '10001228376'
     *
     * @return Street
     */
    public function createStreet(string $identifier)
    {
        if ($identifier == $this->validIdentifier) {
            $street = $this->createStreetOne();

            return $street;
        } else {
            return null;
        }
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
}
