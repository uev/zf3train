<?php

namespace Application\Entity;

/**
 * BglGeoRegion
 */
class BglGeoRegion
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $countryid;

    /**
     * @var string
     */
    private $name;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set countryid
     *
     * @param integer $countryid
     *
     * @return BglGeoRegion
     */
    public function setCountryid($countryid)
    {
        $this->countryid = $countryid;

        return $this;
    }

    /**
     * Get countryid
     *
     * @return integer
     */
    public function getCountryid()
    {
        return $this->countryid;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return BglGeoRegion
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}

