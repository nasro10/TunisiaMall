<?php

namespace tmClientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Employe
 *
 * @ORM\Table(name="employe", indexes={@ORM\Index(name="id_b", columns={"id_b"})})
 * @ORM\Entity
 */
class Employe
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_e", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idE;

    /**
     * @var integer
     *
     * @ORM\Column(name="salaire_e", type="integer", nullable=true)
     */
    private $salaireE;

    /**
     * @var string
     *
     * @ORM\Column(name="cin_e", type="string", length=8, nullable=true)
     */
    private $cinE;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_e", type="string", length=100, nullable=true)
     */
    private $nomE;

    /**
     * @var string
     *
     * @ORM\Column(name="num_e", type="string", length=8, nullable=true)
     */
    private $numE;

    /**
     * @var string
     *
     * @ORM\Column(name="type_e", type="string", length=50, nullable=true)
     */
    private $typeE;

    /**
     * @var string
     *
     * @ORM\Column(name="img_e", type="blob", nullable=true)
     */
    private $imgE;

    /**
     * @var string
     *
     * @ORM\Column(name="fiche_e", type="blob", nullable=true)
     */
    private $ficheE;

    /**
     * @var string
     *
     * @ORM\Column(name="poste_e", type="string", length=50, nullable=true)
     */
    private $posteE;

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

