<?php

namespace App\Factory;

use App\Model\ArrayOfProperty;
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
        if ($identifier == $this->validIdentifier) 
        {
            $property = $this->createPropertyOne();
            return $property; 
        } 
        else
        {
            return null;
        }
    }

    /**
     * Create a Property to use in the createProperty response.
     *
     * @return Property
     */
    private function createPropertyOne()
    {
        $property = new Property();

        $property->identifier = '10001228376';
        $property->uprn = '10001228376';
        $property->usrn = '2802454';
        $property->paon = '1 UNIVERSE HOUSE';
        $property->street_name = 'MERUS COURT';
        $property->locality = 'MERIDIAN BUSINESS PARK';
        $property->town = 'BRAUNSTONE TOWN';
        $property->post_code = 'LE19 1RJ';
        $property->easting = '454801';
        $property->northing = '302081';
        $property->logical_status = '1';

        return $property;
    }
}