<?php

namespace StandBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit", indexes={@ORM\Index(name="FK_29A5EC27B62B4586", columns={"id_b"})})
 * @ORM\Entity
 */
class Produit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_p", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idP;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_p", type="string", length=60, nullable=true)
     */
    private $nomP;

    /**
     * @var string
     *
     * @ORM\Column(name="cat_p", type="string", length=50, nullable=true)
     */
    private $catP;

    /**
     * @var float
     *
     * @ORM\Column(name="tva_p", type="float", precision=10, scale=0, nullable=true)
     */
    private $tvaP;

    /**
     * @var boolean
     *
     * @ORM\Column(name="disp_p", type="boolean", nullable=true)
     */
    private $dispP;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_p", type="text", length=65535, nullable=true)
     */
    private $descP;

    /**
     * @var string
     *
     * @ORM\Column(name="img_p", type="blob", nullable=true)
     */
    private $imgP;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_p", type="float", precision=10, scale=0, nullable=true)
     */
    private $prixP;

    /**
     * @var \Boutique
     *
     * @ORM\ManyToOne(targetEntity="Boutique")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_b", referencedColumnName="id_b")
     * })
     */
    private $idB;


}

