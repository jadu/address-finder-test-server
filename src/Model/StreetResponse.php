<?php

namespace App\Model;

use JsonSerializable;

/**
 * Class Address.
 *
 * @author Jadu Ltd.
 */
class StreetResponse implements JsonSerializable
{
    /**
     * @var Address
     */
    private $street;

    /**
     * set street.
     *
     * @param Address
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * Get street.
     *
     * @return Address
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize()
    {
        return [
            'street' => $this->getStreet(),
        ];
    }
}
