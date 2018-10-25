<?php

namespace StandBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stand
 *
 * @ORM\Table(name="stand", indexes={@ORM\Index(name="FK_64B918B6244ED9E8", columns={"id_prop"})})
 * @ORM\Entity
 */
class Stand
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_s", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idS;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_deb", type="date", nullable=true)
     */
    private $dateDeb;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date", nullable=true)
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_s", type="text", length=65535, nullable=true)
     */
    private $descS;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_s", type="string", length=50, nullable=true)
     */
    private $nomS;

    /**
     * @var boolean
     *
     * @ORM\Column(name="etat", type="boolean", nullable=true)
     */
    private $etat;

    /**
     * @var \Adherent
     *
     * @ORM\ManyToOne(targetEntity="Adherent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_prop", referencedColumnName="id_ad")
     * })
     */
    private $idProp;

    /**
     * @return int
     */
    public function getIdS()
    {
        return $this->idS;
    }

    /**
     * @param int $idS
     */
    public function setIdS($idS)
    {
        $this->idS = $idS;
    }

    /**
     * @return \DateTime
     */
    public function getDateDeb()
    {
        return $this->dateDeb;
    }

    /**
     * @param \DateTime $dateDeb
     */
    public function setDateDeb($dateDeb)
    {
        $this->dateDeb = $dateDeb;
    }

    /**
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * @param \DateTime $dateFin
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    }

    /**
     * @return string
     */
    public function getDescS()
    {
        return $this->descS;
    }

    /**
     * @param string $descS
     */
    public function setDescS($descS)
    {
        $this->descS = $descS;
    }

    /**
     * @return string
     */
    public function getNomS()
    {
        return $this->nomS;
    }

    /**
     * @param string $nomS
     */
    public function setNomS($nomS)
    {
        $this->nomS = $nomS;
    }

    /**
     * @return bool
     */
    public function isEtat()
    {
        return $this->etat;
    }

    /**
     * @param bool $etat
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }

    /**
     * @return \Adherent
     */
    public function getIdProp()
    {
        return $this->idProp;
    }

    /**
     * @param \Adherent $idProp
     */
    public function setIdProp($idProp)
    {
        $this->idProp = $idProp;
    }




}

