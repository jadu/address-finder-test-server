<?php

namespace App\Factory;

use App\Model\Address;
use App\Model\PropertiesResponse;
use App\Model\PropertyResponse;
use App\Model\StreetResponse;
use App\Model\StreetsResponse;

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

        $response = new StreetsResponse();

        if (0 === strcasecmp($strippedSearchTerm, $this->validSearchTerm)) {
            $streetOne = $this->createStreetOne();
            $streetTwo = $this->createStreetTwo();

            $response->setStreets([$streetOne, $streetTwo]);
        } else {
            $response->setStreets([]);
        }

        return $response;
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
        if (0 === strcasecmp($strippedIdentifier, $this->validIdentifier)) {
            $response = new StreetResponse();

            $response->setStreet($this->createStreetOne());

            return $response;
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

        $response = new PropertiesResponse();

        if (0 === strcasecmp($strippedPostcode, $this->validPostcode)) {
            $propertyOne = $this->createPropertyOne();
            $propertyTwo = $this->createPropertyTwo();

            $response->setProperties([$propertyOne, $propertyTwo]);
        } else {
            $response->setProperties([]);
        }

        return $response;
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
        if (0 === strcasecmp($identifier, $this->validIdentifier)) {
            $property = new PropertyResponse();

            $property->setProperty($this->createPropertyOne());

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

        $address->setIdentifier('10001228376');
        $address->setUsrn('2802454');
        $address->setStreetName('MERUS COURT');
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

        $address->setIdentifier('45671258378');
        $address->setUsrn('3937452');
        $address->setStreetName('MERUS COURT');
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

        $address->setIdentifier('10001228376');
        $address->setUprn('10001228376');
        $address->setUsrn('2802454');
        $address->setPaon('1 UNIVERSE HOUSE');
        $address->setStreetName('MERUS COURT');
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

        $address->setIdentifier('45671258378');
        $address->setUprn('45671258378');
        $address->setUsrn('2935454');
        $address->setPaon('2 UNIVERSE HOUSE');
        $address->setStreetName('MERUS COURT');
        $address->setLocality('MERIDIAN BUSINESS PARK');
        $address->setTown('BRAUNSTONE TOWN');
        $address->setPostCode('LE19 1RJ');
        $address->setEasting('454801');
        $address->setNorthing('302081');

        return $address;
    }
}
