<?php

namespace App\Model;

use JsonSerializable;

/**
 * Class Address.
 *
 * @author Jadu Ltd.
 */
class PropertyResponse implements JsonSerializable
{
    /**
     * @var Address
     */
    private $property;

    /**
     * set property.
     *
     * @param Address
     */
    public function setProperty($property)
    {
        $this->property = $property;
    }

    /**
     * Get property.
     *
     * @return Address
     */
    public function getProperty()
    {
        return $this->property;
    }

    public function jsonSerialize()
    {
        return [
            'property' => $this->getProperty(),
        ];
    }
}
