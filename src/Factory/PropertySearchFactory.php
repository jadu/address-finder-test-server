<?php

namespace App\Factory;

use App\Model\ArrayOfProperty;
use App\Model\Property;

/**
 * Authentication.
 *
 * @author Jadu Ltd.
 */
class PropertySearchFactory
{
    /**
     * @var string
     */
    private $validPostcode = 'LE19+1RJ';

    /**
     * Build an ArrayOfProperty to use in the property/search response.
     *
     * @param string $postcode To get a response of properties back this should be LE19+1RJ
     *
     * @return ArrayOfProperty
     */
    public function createProperties(string $postcode)
    {
        $propertyResponse = new ArrayOfProperty();

        if ($postcode == $this->validPostcode) {
            $propertyOne = $this->createPropertyOne();
            $propertyTwo = $this->createPropertyTwo();
            $propertyResponse->properties = [$propertyOne, $propertyTwo];
        } else {
            $propertyResponse->properties = [];
        }

        return $propertyResponse;
    }

    /**
     * Create a property to use in the createProperties response.
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

    /**
     * Create a property to use in the createProperties response.
     *
     * @return Property
     */
    private function createPropertyTwo()
    {
        $property = new Property();

        $property->identifier = '45671258378';
        $property->uprn = '45671258378';
        $property->usrn = '2935454';
        $property->paon = '2 UNIVERSE HOUSE';
        $property->street_name = 'MERUS COURT';
        $property->locality = 'MERIDIAN BUSINESS PARK';
        $property->town = 'BRAUNSTONE TOWN';
        $property->post_code = 'LE19 1RJ';
        $property->easting = '454801';
        $property->northing = '302081';
        $property->logical_status = '2';

        return $property;
    }
}
