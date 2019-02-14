<?php

namespace App\Model;

use JsonSerializable;

/**
 * Class Address.
 *
 * @author Jadu Ltd.
 */
class PropertiesResponse implements JsonSerializable
{
    /**
     * @var Address[]
     */
    private $properties;

    /**
     * set properties.
     *
     * @param Address[]
     */
    public function setProperties($properties)
    {
        $this->properties = $properties;
    }

    /**
     * Get properties.
     *
     * @return Address[]
     */
    public function getProperties()
    {
        return $this->properties;
    }

    public function jsonSerialize()
    {
        return [
            'properties' => $this->getProperties(),
        ];
    }
}
