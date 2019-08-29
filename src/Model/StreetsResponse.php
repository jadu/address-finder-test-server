<?php

namespace App\Model;

use JsonSerializable;

/**
 * Class Address.
 *
 * @author Jadu Ltd.
 */
class StreetsResponse implements JsonSerializable
{
    /**
     * @var Address[]
     */
    private $streets;

    /**
     * set streets.
     *
     * @param Address[]
     */
    public function setStreets($streets)
    {
        $this->streets = $streets;
    }

    /**
     * Get streets.
     *
     * @return Address[]
     */
    public function getStreets()
    {
        return $this->streets;
    }

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize()
    {
        return [
            'streets' => $this->getStreets(),
        ];
    }
}
