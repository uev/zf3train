<?php


namespace Application\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * BglGeoCity
 * 
 * @ORM\Table(name="bgl_geo_city", indexes={@ORM\Index(name="bgl_geo_city_countryid_idx", columns={"countryid"}), @ORM\Index(name="bgl_geo_city_regionid_idx", columns={"regionid"}), @ORM\Index(name="bgl_geo_city_name_idx", columns={"name"})})
 * @ORM\Entity
 */
class BglGeoCity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="bgl_geo_city_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var BglGeoCountry
     * 
     * @ORM\ManyToOne(targetEntity="BglGeoCountry", cascade={"all"}, fetch="LAZY")
     * @ORM\JoinColumn(name="countryid", referencedColumnName="id")
     */
    private $country;

    /**
     * @var BglGeoRegion
     * 
     * @ORM\ManyToOne(targetEntity="BglGeoRegion", cascade={"all"}, fetch="LAZY")
     * @ORM\JoinColumn(name="regionid", referencedColumnName="id")
     */
    private $region;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=128, nullable=false)
     */
    private $name;

    public function getCountry() {
        return $this->country;
    }

    public function getRegion() {
        return $this->region;
    }

    public function getName() {
        return $this->name;
    }

    public function setCountry($country) {
        $this->country = $country;
    }

    public function setRegion($region) {
        $this->region = $region;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getId() {
        return $this->id;
    }

}
