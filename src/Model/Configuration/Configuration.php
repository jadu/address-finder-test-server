<?php

namespace App\Model\Configuration;

use JsonSerializable;

/**
 * Configuration.
 *
 * @author Jadu Ltd.
 */
class Configuration implements JsonSerializable
{
    /**
     * @var string
     */
    private $base_uri;

    /**
     * @var string
     */
    private $status_path;

    /**
     * @var ConfigurationPropertyLookup
     */
    private $property_lookup;

    /**
     * @var ConfigurationStreetLookup
     */
    private $street_lookup;

    /**
     * set base_uri.
     *
     * @param string
     */
    public function setBaseUri($base_uri)
    {
        $this->base_uri = $base_uri;
    }

    /**
     * set status_path.
     *
     * @param string
     */
    public function setStatusPath($status_path)
    {
        $this->status_path = $status_path;
    }

    /**
     * set property_lookup.
     *
     * @param ConfigurationPropertyLookup
     */
    public function setPropertyLookup(ConfigurationPropertyLookup $property_lookup)
    {
        $this->property_lookup = $property_lookup;
    }

    /**
     * set street_lookup.
     *
     * @param ConfigurationStreetLookup
     */
    public function setStreetLookup(ConfigurationStreetLookup $street_lookup)
    {
        $this->street_lookup = $street_lookup;
    }

    /**
     * Get status_path.
     *
     * @return string
     */
    public function getBaseUri()
    {
        return $this->base_uri;
    }

    /**
     * Get status_path.
     *
     * @return string
     */
    public function getStatusPath()
    {
        return $this->status_path;
    }

    /**
     * Get property_lookup.
     *
     * @return ConfigurationPropertyLookup
     */
    public function getPropertyLookup()
    {
        return $this->property_lookup;
    }

    /**
     * Get street_lookup.
     *
     * @return ConfigurationStreetLookup
     */
    public function getStreetLookup()
    {
        return $this->street_lookup;
    }

    public function jsonSerialize()
    {
        return [
            'base_uri' => $this->getBaseUri(),
            'status_path' => $this->getStatusPath(),
            'property_lookup' => $this->getPropertyLookup(),
            'street_lookup' => $this->getStreetLookup(),
        ];
    }
}
