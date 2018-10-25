<?php

namespace PromotionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adresse
 *
 * @ORM\Table(name="adresse")
 * @ORM\Entity
 */
class Adresse
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_adr", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAdr;

    /**
     * @var string
     *
     * @ORM\Column(name="num_adr", type="string", length=4, nullable=true)
     */
    private $numAdr;

    /**
     * @var string
     *
     * @ORM\Column(name="rue_adr", type="string", length=100, nullable=true)
     */
    private $rueAdr;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_adr", type="string", length=20, nullable=true)
     */
    private $villeAdr;

    /**
     * @var string
     *
     * @ORM\Column(name="gouv_adr", type="string", length=20, nullable=true)
     */
    private $gouvAdr;

    /**
     * @var string
     *
     * @ORM\Column(name="zip_adr", type="string", length=4, nullable=true)
     */
    private $zipAdr;


}

