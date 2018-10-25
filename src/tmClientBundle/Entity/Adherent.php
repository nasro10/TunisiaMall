<?php

namespace tmClientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * Adherent
 *
 * @ORM\Table(name="adherent", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_90D3F06092FC23A8", columns={"username_canonical"}), @ORM\UniqueConstraint(name="UNIQ_90D3F060A0D96FBF", columns={"email_canonical"}), @ORM\UniqueConstraint(name="UNIQ_90D3F060C05FB297", columns={"confirmation_token"})})
 * @ORM\Entity
 */
class Adherent extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_ad", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAd;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_ad", type="string", length=30, nullable=true)
     */
    private $nomAd;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_ad", type="string", length=30, nullable=true)
     */
    private $prenomAd;

    /**
     * @var string
     *
     * @ORM\Column(name="email_ad", type="string", length=60, nullable=true)
     */
    private $emailAd;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp_ad", type="string", length=60, nullable=true)
     */
    private $mdpAd;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_ad", type="string", length=100, nullable=true)
     */
    private $adresseAd;

    /**
     * @var string
     *
     * @ORM\Column(name="num_ad", type="string", length=8, nullable=true)
     */
    private $numAd;

    /**
     * @var string
     *
     * @ORM\Column(name="role_ad", type="string", length=50, nullable=true)
     */
    private $roleAd;

    /**
     * @var string
     *
     * @ORM\Column(name="img_ad", type="blob", nullable=true)
     */
    private $imgAd;



}

