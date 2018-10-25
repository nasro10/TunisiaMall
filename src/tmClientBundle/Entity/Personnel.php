<?php

namespace tmClientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personnel
 *
 * @ORM\Table(name="personnel")
 * @ORM\Entity
 */
class Personnel
{
    /**
     * @return int
     */
    public function getIdPr()
    {
        return $this->idPr;
    }

    /**
     * @param int $idPr
     */
    public function setIdPr($idPr)
    {
        $this->idPr = $idPr;
    }

    /**
     * @return int
     */
    public function getSalairePr()
    {
        return $this->salairePr;
    }

    /**
     * @param int $salairePr
     */
    public function setSalairePr($salairePr)
    {
        $this->salairePr = $salairePr;
    }

    /**
     * @return string
     */
    public function getCinPr()
    {
        return $this->cinPr;
    }

    /**
     * @param string $cinPr
     */
    public function setCinPr($cinPr)
    {
        $this->cinPr = $cinPr;
    }

    /**
     * @return string
     */
    public function getNomPr()
    {
        return $this->nomPr;
    }

    /**
     * @param string $nomPr
     */
    public function setNomPr($nomPr)
    {
        $this->nomPr = $nomPr;
    }

    /**
     * @return string
     */
    public function getNumPr()
    {
        return $this->numPr;
    }

    /**
     * @param string $numPr
     */
    public function setNumPr($numPr)
    {
        $this->numPr = $numPr;
    }

    /**
     * @return string
     */
    public function getTypePr()
    {
        return $this->typePr;
    }

    /**
     * @param string $typePr
     */
    public function setTypePr($typePr)
    {
        $this->typePr = $typePr;
    }

    /**
     * @return string
     */
    public function getImgPr()
    {
        return $this->imgPr;
    }

    /**
     * @param string $imgPr
     */
    public function setImgPr($imgPr)
    {
        $this->imgPr = $imgPr;
    }

    /**
     * @return string
     */
    public function getFichePr()
    {
        return $this->fichePr;
    }

    /**
     * @param string $fichePr
     */
    public function setFichePr($fichePr)
    {
        $this->fichePr = $fichePr;
    }

    /**
     * @return string
     */
    public function getPostePr()
    {
        return $this->postePr;
    }

    /**
     * @param string $postePr
     */
    public function setPostePr($postePr)
    {
        $this->postePr = $postePr;
    }
    /**
     * @var integer
     *
     * @ORM\Column(name="id_pr", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPr;

    /**
     * @var integer
     *
     * @ORM\Column(name="salaire_pr", type="integer", nullable=true)
     */
    private $salairePr;

    /**
     * @var string
     *
     * @ORM\Column(name="cin_pr", type="string", length=8, nullable=true)
     */
    private $cinPr;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_pr", type="string", length=100, nullable=true)
     */
    private $nomPr;

    /**
     * @var string
     *
     * @ORM\Column(name="num_pr", type="string", length=8, nullable=true)
     */
    private $numPr;

    /**
     * @var string
     *
     * @ORM\Column(name="type_pr", type="string", length=50, nullable=true)
     */
    private $typePr;

    /**
     * @var string
     *
     * @ORM\Column(name="img_pr", type="blob", nullable=true)
     */
    private $imgPr;

    /**
     * @var string
     *
     * @ORM\Column(name="fiche_pr", type="blob", nullable=true)
     */
    private $fichePr;

    /**
     * @var string
     *
     * @ORM\Column(name="poste_pr", type="string", length=50, nullable=true)
     */
    private $postePr;


}

