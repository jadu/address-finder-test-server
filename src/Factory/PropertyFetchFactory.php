<?php

namespace App\Factory;

use App\Model\Property;

/**
 * Authentication.
 *
 * @author Jadu Ltd.
 */
class PropertyFetchFactory
{
    /**
     * @var string
     */
    private $validIdentifier = '10001228376';

    /**
     * Build a property to use in the property/fetch response.
     *
     * @param string $validIdentifier To get a response back this should be '10001228376'
     *
     * @return Property
     */
    public function createProperty(string $identifier)
    {
        if ($identifier == $this->validIdentifier) {
            $property = $this->createPropertyOne();

            return $property;
        } else {
            return null;
        }
    }

    /**
     * Create a property to use in the createProperty response.
     *
     * @return Property
     */
    private function createPropertyOne()
    {
        $property = new Property();

        $property->uprn = '10001228376';
        $property->usrn = '2802454';
        $property->paon = '1 UNIVERSE HOUSE';
        $property->street = 'MERUS COURT';
        $property->locality = 'MERIDIAN BUSINESS PARK';
        $property->town = 'BRAUNSTONE TOWN';
        $property->postCode = 'LE19 1RJ';
        $property->easting = '454801';
        $property->northing = '302081';
        
        return $property;
    }
}
