<?php



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
     * @var integer
     *
     * @ORM\Column(name="countryid", type="integer", nullable=false)
     */
    private $countryid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="regionid", type="integer", nullable=false)
     */
    private $regionid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=128, nullable=false)
     */
    private $name = '';
}
