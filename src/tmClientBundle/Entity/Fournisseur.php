<?php

namespace tmClientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fournisseur
 *
 * @ORM\Table(name="fournisseur", indexes={@ORM\Index(name="adr_f", columns={"adr_f"}), @ORM\Index(name="id_b", columns={"id_b"})})
 * @ORM\Entity
 */
class Fournisseur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_f", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idF;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_f", type="string", length=100, nullable=true)
     */
    private $nomF;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_f", type="string", length=50, nullable=true)
     */
    private $prenomF;

    /**
     * @var string
     *
     * @ORM\Column(name="cat_f", type="string", length=50, nullable=true)
     */
    private $catF;

    /**
     * @var string
     *
     * @ORM\Column(name="num_f", type="string", length=25, nullable=true)
     */
    private $numF;

    /**
     * @var string
     *
     * @ORM\Column(name="adr_f", type="string", length=50, nullable=true)
     */
    private $adrF;

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

