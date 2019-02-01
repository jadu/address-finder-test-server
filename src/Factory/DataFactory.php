<?php

namespace App\Factory;

use App\Model\Address;

/**
 * Authentication.
 *
 * @author Jadu Ltd.
 */
class DataFactory
{
    /**
     * @var string
     */
    private $validSearchTerm = 'meruscourt';

     /**
     * @var string
     */
    private $validIdentifier = '10001228376';
    
    /**
     * @var string
     */
    private $validPostcode = 'LE191RJ';

    /**
     * Build an Address[] to use in the Street/search response.
     *
     * @param string $postcode To get a response of properties back this should be LE19+1RJ
     *
     * @return Address[]
     */
    public function createStreets(string $searchTerm)
    {
        $strippedSearchTerm = preg_replace('/\s/', '', $searchTerm);
        if (strcasecmp($strippedSearchTerm, $this->validSearchTerm) === 0) {
            $streetOne = $this->createStreetOne();
            $streetTwo = $this->createStreetTwo();
            return array($streetOne, $streetTwo);
        } else {
            return [];
        }
    }

    /**
     * Build a Address to use in the Street/fetch response.
     *
     * @param string $validIdentifier To get a response back this should be '10001228376'
     *
     * @return Address
     */
    public function createStreet(string $identifier)
    {
        $strippedIdentifier = preg_replace('/\s/', '', $identifier);
        if (strcasecmp($strippedIdentifier, $this->validIdentifier) === 0) {
            $street = $this->createStreetOne();
            return $street;
        } else {
            return null;
        }
    }

    /**
     * Build an Address[] to use in the property/search response.
     *
     * @param string $postcode To get a response of properties back this should be LE191RJ
     *
     * @return Address[]
     */
    public function createProperties(string $postcode)
    {
        $strippedPostcode = preg_replace('/\s/', '', $postcode);
        if ( strcasecmp($strippedPostcode, $this->validPostcode) === 0) {
            $propertyOne = $this->createPropertyOne();
            $propertyTwo = $this->createPropertyTwo();
            return array($propertyOne, $propertyTwo);
        } else {
            return [];
        }
    }

    /**
     * Build an Address to use in the property/fetch response.
     *
     * @param string $validIdentifier To get a response back this should be '10001228376'
     *
     * @return Address
     */
    public function createProperty(string $identifier)
    {
        $strippedIdentifier = preg_replace('/\s/', '', $identifier);
        if (strcasecmp($identifier, $this->validIdentifier) === 0 ) {
            $property = $this->createPropertyOne();

            return $property;
        } else {
            return null;
        }
    }
    
    /**
     * Create a street to use in the createStreets response.
     *
     * @return Address
     */
    private function createStreetOne()
    {
        $address = new Address();

        $address->setExternalReference('10001228376');
        $address->setUsrn('2802454');
        $address->setStreet('MERUS COURT');
        $address->setTown('BRAUNSTONE TOWN');
        $address->setLocality('MERIDIAN BUSINESS PARK');

        return $address;
    }

    /**
     * Create a street to use in the createStreets response.
     *
     * @return Address
     */
    private function createStreetTwo()
    {
        $address = new Address();

        $address->setExternalReference('45671258378');
        $address->setUsrn('3937452');
        $address->setStreet('MERUS COURT');
        $address->setTown('BRAUNSTONE TOWN');
        $address->setLocality('MERIDIAN BUSINESS PARK');

        return $address;
    }


    /**
     * Create a property to use in the createProperties response.
     *
     * @return Property
     */
    private function createPropertyOne()
    {
        $address = new Address();

        $address->setExternalReference('10001228376');
        $address->setUprn('10001228376');
        $address->setUsrn('2802454');
        $address->setPaon('1 UNIVERSE HOUSE');
        $address->setStreet('MERUS COURT');
        $address->setLocality('MERIDIAN BUSINESS PARK');
        $address->setTown('BRAUNSTONE TOWN');
        $address->setPostCode('LE19 1RJ');
        $address->setEasting('454801');
        $address->setNorthing('302081');

        return $address;
    }

    /**
     * Create a property to use in the createProperties response.
     *
     * @return Property
     */
    private function createPropertyTwo()
    {
        $address = new Address();

        $address->setExternalReference('45671258378');
        $address->setUprn('45671258378');
        $address->setUsrn('2935454');
        $address->setPaon('2 UNIVERSE HOUSE');
        $address->setStreet('MERUS COURT');
        $address->setLocality('MERIDIAN BUSINESS PARK');
        $address->setTown('BRAUNSTONE TOWN');
        $address->setPostCode('LE19 1RJ');
        $address->setEasting('454801');
        $address->setNorthing('302081');

        return $address;
    }
    
}
