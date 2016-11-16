<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BglGeoRegion
 *
 * @ORM\Table(name="bgl_geo_region",
 * indexes={@ORM\Index(name="bgl_geo_region_countryid_idx", columns={"countryid"}),
 * @ORM\Index(name="bgl_geo_region_name_idx", columns={"name"})})
 * @ORM\Entity
 */
class BglGeoRegion
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="bgl_geo_region_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="countryid", type="integer", nullable=false)
     */
    private $countryid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name = '';
}
