<?php

namespace PromotionBundle\Entity;

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

    /**
     * @return int
     */
    public function getIdP()
    {
        return $this->idP;
    }

    /**
     * @param int $idP
     */
    public function setIdP($idP)
    {
        $this->idP = $idP;
    }

    /**
     * @return string
     */
    public function getNomP()
    {
        return $this->nomP;
    }

    /**
     * @param string $nomP
     */
    public function setNomP($nomP)
    {
        $this->nomP = $nomP;
    }

    /**
     * @return string
     */
    public function getCatP()
    {
        return $this->catP;
    }

    /**
     * @param string $catP
     */
    public function setCatP($catP)
    {
        $this->catP = $catP;
    }

    /**
     * @return float
     */
    public function getTvaP()
    {
        return $this->tvaP;
    }

    /**
     * @param float $tvaP
     */
    public function setTvaP($tvaP)
    {
        $this->tvaP = $tvaP;
    }

    /**
     * @return bool
     */
    public function isDispP()
    {
        return $this->dispP;
    }

    /**
     * @param bool $dispP
     */
    public function setDispP($dispP)
    {
        $this->dispP = $dispP;
    }

    /**
     * @return string
     */
    public function getDescP()
    {
        return $this->descP;
    }

    /**
     * @param string $descP
     */
    public function setDescP($descP)
    {
        $this->descP = $descP;
    }

    /**
     * @return string
     */
    public function getImgP()
    {
        return $this->imgP;
    }

    /**
     * @param string $imgP
     */
    public function setImgP($imgP)
    {
        $this->imgP = $imgP;
    }

    /**
     * @return float
     */
    public function getPrixP()
    {
        return $this->prixP;
    }

    /**
     * @param float $prixP
     */
    public function setPrixP($prixP)
    {
        $this->prixP = $prixP;
    }

    /**
     * @return \Boutique
     */
    public function getIdB()
    {
        return $this->idB;
    }

    /**
     * @param \Boutique $idB
     */
    public function setIdB($idB)
    {
        $this->idB = $idB;
    }



}

