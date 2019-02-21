<?php

namespace App\Factory;

use App\Model\Configuration\Configuration;
use App\Model\Configuration\ConfigurationPropertyLookup;
use App\Model\Configuration\ConfigurationStreetLookup;

/**
 * ConfigurationFactory.
 *
 * @author Jadu Ltd.
 */
class ConfigurationFactory
{
    /**
     * Build a ConfigurationModel to use in the configuration/fetch response.
     *
     * @return Configuration
     */
    public function createConfiguration()
    {
        $response = new Configuration();
        $response->setBaseUri('https://example.com/address-finder');
        $response->setStatusPath('/status');
        $response->setPropertyLookup($this->createPropertyLookUp());
        $response->setstreetLookup($this->createStreetLookUp());

        return $response;
    }

    /**
     * Build a ConfigurationPropertyLookup to use in the createConfiguration response.
     *
     * @return ConfigurationPropertyLookup
     */
    private function createPropertyLookUp()
    {
        $response = new ConfigurationPropertyLookup();
        $response->setSearchPath('/property/search/{postcode}');
        $response->setFetchPath('/property/fetch/{identifier}');

        return $response;
    }

    /**
     * Build a ConfigurationStreetLookup to use in the createConfiguration response.
     *
     * @return ConfigurationStreetLookup
     */
    private function createStreetLookUp()
    {
        $response = new ConfigurationStreetLookup();
        $response->setSearchPath('/street/search/{term}');
        $response->setFetchPath('/street/fetch/{identifier}');

        return $response;
    }
}
