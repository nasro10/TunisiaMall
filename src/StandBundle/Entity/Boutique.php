<?php

namespace StandBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Boutique
 *
 * @ORM\Table(name="boutique", indexes={@ORM\Index(name="id_prop", columns={"id_prop"})})
 * @ORM\Entity
 */
class Boutique
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_b", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idB;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_b", type="string", length=25, nullable=true)
     */
    private $nomB;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horaire", type="time", nullable=true)
     */
    private $horaire;

    /**
     * @var string
     *
     * @ORM\Column(name="num_b", type="string", length=8, nullable=true)
     */
    private $numB;

    /**
     * @var string
     *
     * @ORM\Column(name="type_b", type="string", length=50, nullable=true)
     */
    private $typeB;

    /**
     * @var boolean
     *
     * @ORM\Column(name="aut_b", type="boolean", nullable=true)
     */
    private $autB;

    /**
     * @var string
     *
     * @ORM\Column(name="img_b", type="blob", nullable=true)
     */
    private $imgB;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_b", type="text", length=65535, nullable=true)
     */
    private $descB;

    /**
     * @var \Adherent
     *
     * @ORM\ManyToOne(targetEntity="Adherent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_prop", referencedColumnName="id_ad")
     * })
     */
    private $idProp;


}

