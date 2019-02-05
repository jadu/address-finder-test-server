<?php

namespace App\Model;

use JsonSerializable;

/**
 * Class Address.
 *
 * @author Jadu Ltd.
 */
class Address implements JsonSerializable
{
    /**
     * @var string
     */
    private $paon;

    /**
     * @var string
     */
    private $saon;

    /**
     * @var string
     */
    private $street_name;

    /**
     * @var string
     */
    private $locality;

    /**
     * @var string
     */
    private $town;

    /**
     * @var string
     */
    private $post_town;

    /**
     * @var string
     */
    private $post_code;

    /**
     * @var int
     */
    private $easting;

    /**
     * @var int
     */
    private $northing;

    /**
     * @var string
     */
    private $uprn;

    /**
     * @var string
     */
    private $usrn;

    /**
     * @var string
     */
    private $identifier;

    /**
     * @var string
     */
    private $logical_status;

    /**
     * @var string
     */
    private $ward;

    /**
     * set paon.
     *
     * @param string
     */
    public function setPaon($paon)
    {
        $this->paon = $paon;
    }

    /**
     * set saon.
     *
     * @param string
     */
    public function setSaon($saon)
    {
        $this->saon = $saon;
    }

    /**
     * set street_name.
     *
     * @param string
     */
    public function setStreetName($street)
    {
        $this->street = $street;
    }

    /**
     * set locality.
     *
     * @param string
     */
    public function setLocality($locality)
    {
        $this->locality = $locality;
    }

    /**
     * set town.
     *
     * @param string
     */
    public function setTown($town)
    {
        $this->town = $town;
    }

    /**
     * set postTown.
     *
     * @param string
     */
    public function setPostTown($post_town)
    {
        $this->post_town = $post_town;
    }

    /**
     * set postCode.
     *
     * @param string
     */
    public function setPostCode($post_code)
    {
        $this->post_code = $post_code;
    }

    /**
     * set easting.
     *
     * @param string
     */
    public function setEasting($easting)
    {
        $this->easting = $easting;
    }

    /**
     * set northing.
     *
     * @param string
     */
    public function setNorthing($northing)
    {
        $this->northing = $northing;
    }

    /**
     * set uprn.
     *
     * @param string
     */
    public function setUprn($uprn)
    {
        $this->uprn = $uprn;
    }

    /**
     * set usrn.
     *
     * @param string
     */
    public function setUsrn($usrn)
    {
        $this->usrn = $usrn;
    }

    /**
     * set identifier.
     *
     * @param string
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
    }

    /**
     * set logicalStatus.
     *
     * @param string
     */
    public function setLogicalStatus($logical_status)
    {
        $this->logical_status = $logical_status;
    }

    /**
     * set ward.
     *
     * @param string
     */
    public function setWard($ward)
    {
        $this->ward = $ward;
    }

    /**
     * Get Paon.
     *
     * @return string
     */
    public function getPaon()
    {
        return $this->paon;
    }

    /**
     * Get Saon.
     *
     * @return string
     */
    public function getSaon()
    {
        return $this->saon;
    }

    /**
     * Get Street.
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street_name;
    }

    /**
     * Get Locality.
     *
     * @return string
     */
    public function getLocality()
    {
        return $this->locality;
    }

    /**
     * Get Town.
     *
     * @return string
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * Get PostTown.
     *
     * @return string
     */
    public function getPostTown()
    {
        return $this->post_town;
    }

    /**
     * Get PostCode.
     *
     * @return string
     */
    public function getPostCode()
    {
        return $this->post_code;
    }

    /**
     * Get easting.
     *
     * @return int
     */
    public function getEasting()
    {
        return $this->easting;
    }

    /**
     * Get northing.
     *
     * @return int
     */
    public function getNorthing()
    {
        return $this->northing;
    }

    /**
     * Get UPRN.
     *
     * @return string
     */
    public function getUprn()
    {
        return $this->uprn;
    }

    /**
     * Get USRN.
     *
     * @return string
     */
    public function getUsrn()
    {
        return $this->usrn;
    }

    /**
     * Get Identifier.
     *
     * @return string
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Get logicalStatus.
     *
     * @return string
     */
    public function getLogicalStatus()
    {
        return $this->logical_status;
    }

    /**
     * Get ward.
     *
     * @return string
     */
    public function getWard()
    {
        return $this->ward;
    }

    public function jsonSerialize()
    {
        return [
            'identifier' => $this->getIdentifier(),
            'paon' => $this->getPaon(),
            'saon' => $this->getSaon(),
            'street_name' => $this->getStreet(),
            'locality' => $this->getLocality(),
            'town' => $this->getTown(),
            'post_town' => $this->getPostTown(),
            'post_code' => $this->getPostCode(),
            'easting' => $this->getEasting(),
            'northing' => $this->getNorthing(),
            'uprn' => $this->getUprn(),
            'usrn' => $this->getUsrn(),
            'logical_status' => $this->getLogicalStatus(),
        ];
    }
}
