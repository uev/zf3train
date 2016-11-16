<?php

namespace Application\Entity;

/**
 * BglGeoCity
 */
class BglGeoCity
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
     * @var integer
     */
    private $regionid;

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
     * @return BglGeoCity
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
     * Set regionid
     *
     * @param integer $regionid
     *
     * @return BglGeoCity
     */
    public function setRegionid($regionid)
    {
        $this->regionid = $regionid;

        return $this;
    }

    /**
     * Get regionid
     *
     * @return integer
     */
    public function getRegionid()
    {
        return $this->regionid;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return BglGeoCity
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

