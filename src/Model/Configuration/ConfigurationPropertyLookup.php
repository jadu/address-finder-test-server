<?php

namespace App\Model\Configuration;

use JsonSerializable;

/**
 * ConfigurationPropertyLookup.
 *
 * @author Jadu Ltd.
 */
class ConfigurationPropertyLookup implements JsonSerializable
{
    /**
     * @var string
     */
    private $search_path;

    /**
     * @var string
     */
    private $fetch_path;

    /**
     * set search_path.
     *
     * @param string
     */
    public function setSearchPath($search_path)
    {
        $this->search_path = $search_path;
    }

    /**
     * set fetch_path.
     *
     * @param string
     */
    public function setFetchPath($fetch_path)
    {
        $this->fetch_path = $fetch_path;
    }

    /**
     * Get search_path.
     *
     * @return object
     */
    public function getSearchPath()
    {
        return $this->search_path;
    }

    /**
     * Get fetch_path.
     *
     * @return object
     */
    public function getFetchPath()
    {
        return $this->fetch_path;
    }

    public function jsonSerialize()
    {
        return [
            'search_path' => $this->getSearchPath(),
            'fetch_path' => $this->getFetchPath(),
        ];
    }
}
