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
    private $street;

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
    private $postTown;

    /**
     * @var string
     */
    private $postCode;

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
    private $externalReference;
    
    /**
     * @var string
     */
    private $logicalStatus;
    
    /**
     * set paon
     * 
     * @var string  $paon
     */
    public function setPaon($paon)
    {
        $this->paon = $paon;
    }

    /**
     * set saon
     * 
     * @var string  $saon
     */
    public function setSaon($saon)
    {
        $this->saon = $saon;
    }

    /**
     * set street
     * 
     * @var string  $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * set locality
     * 
     * @var string  $locality
     */
    public function setLocality($locality)
    {
        $this->locality = $locality;
    }


    /**
     * set town
     * 
     * @var string  $town
     */
    public function setTown($town)
    {
        $this->town = $town;
    }

    /**
     * set postTown
     * 
     * @var string  $postTown
     */
    public function setPostTown($postTown)
    {
        $this->postTown = $postTown;
    }

    /**
     * set postCode
     * 
     * @var string  $postCode
     */
    public function setPostCode($postCode)
    {
        $this->postCode = $postCode;
    }

    /**
     * set easting
     * 
     * @var string  $easting
     */
    public function setEasting($easting)
    {
        $this->easting = $easting;
    }

    /**
     * set northing
     * 
     * @var string  $northing
     */
    public function setNorthing($northing)
    {
        $this->northing = $northing;
    }

    /**
     * set uprn
     * 
     * @var string  $uprn
     */
    public function setUprn($uprn)
    {
        $this->uprn = $uprn;
    }

    /**
     * set usrn
     * 
     * @var string  $usrn
     */
    public function setUsrn($usrn)
    {
        $this->usrn = $usrn;
    }

    /**
     * set externalReference
     * 
     * @var string  $externalReference
     */
    public function setExternalReference($externalReference)
    {
        $this->externalReference = $externalReference;
    }

    /**
     * set logicalStatus
     * 
     * @var string  $logicalStatus
     */
    public function setLogicalStatus($logicalStatus) 
    {
        $this->logicalStatus = $logicalStatus;
    }

    /**
     * Get Paon
     * 
     * @return string
     */
    public function getPaon()
    {
        return $this->paon;
    }

    /**
     * Get Saon
     * 
     * @return string
     */
    public function getSaon()
    {
        return $this->saon;
    }

    /**
     * Get Street
     * 
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
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
        return $this->postTown;
    }

  
    /**
     * Get PostCode.
     * 
     * @return string
     */
    public function getPostCode()
    {
        return $this->postCode;
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
     * Get externalRefrence
     * 
     * @return string
     */
    public function getExternalReference()
    {
        return $this->externalReference;
    }

    /**
     * Get logicalStatus.
     *
     * @return string
     */
    public function getLogicalStatus() 
    {
        return $this->logicalStatus;
    }

    public function jsonSerialize() {
        return [
            'paon' => $this->getPaon(),
            'saon' => $this->getSaon(),
            'street' => $this->getStreet(),
            'locality' => $this->getLocality(),
            'town' => $this->getTown(),
            'postTown' => $this->getPostTown(),
            'postCode' => $this->getPostCode(),
            'easting' => $this->getEasting(),
            'northing' => $this->getNorthing(),
            'uprn' => $this->getUprn(),
            'usrn' => $this->getUsrn(),
            'externalReference' => $this->getExternalReference(),
            'logicalstatus' => $this->getLogicalStatus()
        ];
    }
}