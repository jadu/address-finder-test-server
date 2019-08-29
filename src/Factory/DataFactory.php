<?php

namespace App\Factory;

use App\Model\Address;
use App\Model\PropertiesResponse;
use App\Model\PropertyResponse;
use App\Model\StreetResponse;
use App\Model\StreetsResponse;

/**
 * DataFactory.
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
     * @param string $searchTerm
     *
     * @return StreetsResponse
     */
    public function createStreets(string $searchTerm)
    {
        $strippedSearchTerm = preg_replace('/\s/', '', $searchTerm);

        $response = new StreetsResponse();

        if (0 === strcasecmp($strippedSearchTerm, $this->validSearchTerm)) {
            $response->setStreets($this->getValidStreets());
        } else {
            $response->setStreets([]);
        }

        return $response;
    }

    /**
     * Build a Address to use in the Street/fetch response.
     *
     * @param string $identifier
     *
     * @return StreetResponse|null
     */
    public function createStreet(string $identifier)
    {
        $strippedIdentifier = preg_replace('/\s/', '', $identifier);
        foreach ($this->getValidStreets() as $street) {
            if (0 === strcasecmp($strippedIdentifier, $street->getIdentifier())) {
                $response = new StreetResponse();
                $response->setStreet($street);

                return $response;
            }
        }

        return null;
    }

    /**
     * Build an Address[] to use in the property/search response.
     *
     * @param string $postcode To get a response of properties back this should be LE191RJ
     *
     * @return PropertiesResponse
     */
    public function createProperties(string $postcode)
    {
        $strippedPostcode = preg_replace('/\s/', '', $postcode);

        $response = new PropertiesResponse();

        if (0 === strcasecmp($strippedPostcode, $this->validPostcode)) {
            $response->setProperties($this->getValidProperties());
        } else {
            $response->setProperties([]);
        }

        return $response;
    }

    /**
     * Build an Address to use in the property/fetch response.
     *
     * @param string $identifier
     *
     * @return PropertyResponse|null
     */
    public function createProperty(string $identifier)
    {
        $strippedIdentifier = preg_replace('/\s/', '', $identifier);
        foreach ($this->getValidProperties() as $property) {
            if (0 === strcasecmp($strippedIdentifier, $property->getIdentifier())) {
                $response = new PropertyResponse();
                $response->setProperty($property);

                return $response;
            }
        }

        return null;
    }

    /**
     * @return Address[]
     */
    private function getValidProperties()
    {
        return [$this->createPropertyOne(), $this->createPropertyTwo()];
    }

    /**
     * @return Address[]
     */
    private function getValidStreets()
    {
        return [$this->createStreetOne(), $this->createStreetTwo()];
    }

    /**
     * Create a street to use in the createStreets response.
     *
     * @return Address
     */
    private function createStreetOne()
    {
        $address = new Address();

        $address->setIdentifier('REF-2802454');
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

        $address->setIdentifier('REF-3937452');
        $address->setUsrn('3937452');
        $address->setStreetName('MERUS COURT');
        $address->setTown('NOTTINGHAM');
        $address->setLocality('');

        return $address;
    }

    /**
     * Create a property to use in the createProperties response.
     *
     * @return Address
     */
    private function createPropertyOne()
    {
        $address = new Address();

        $address->setIdentifier('REF-10001228376');
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
     * @return Address
     */
    private function createPropertyTwo()
    {
        $address = new Address();

        $address->setIdentifier('REF-45671258378');
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
