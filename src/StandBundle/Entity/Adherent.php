<?php

namespace StandBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adherent
 *
 * @ORM\Table(name="adherent", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_90D3F06092FC23A8", columns={"username_canonical"}), @ORM\UniqueConstraint(name="UNIQ_90D3F060A0D96FBF", columns={"email_canonical"}), @ORM\UniqueConstraint(name="UNIQ_90D3F060C05FB297", columns={"confirmation_token"})})
 * @ORM\Entity
 */
class Adherent
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

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=180, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="username_canonical", type="string", length=180, nullable=false)
     */
    private $usernameCanonical;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=180, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="email_canonical", type="string", length=180, nullable=false)
     */
    private $emailCanonical;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=false)
     */
    private $enabled;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=255, nullable=true)
     */
    private $salt;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_login", type="datetime", nullable=true)
     */
    private $lastLogin;

    /**
     * @var string
     *
     * @ORM\Column(name="confirmation_token", type="string", length=180, nullable=true)
     */
    private $confirmationToken;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="password_requested_at", type="datetime", nullable=true)
     */
    private $passwordRequestedAt;

    /**
     * @var array
     *
     * @ORM\Column(name="roles", type="array", nullable=false)
     */
    private $roles;

    /**
     * @return int
     */
    public function getIdAd()
    {
        return $this->idAd;
    }

    /**
     * @param int $idAd
     */
    public function setIdAd($idAd)
    {
        $this->idAd = $idAd;
    }

    /**
     * @return string
     */
    public function getNomAd()
    {
        return $this->nomAd;
    }

    /**
     * @param string $nomAd
     */
    public function setNomAd($nomAd)
    {
        $this->nomAd = $nomAd;
    }

    /**
     * @return string
     */
    public function getPrenomAd()
    {
        return $this->prenomAd;
    }

    /**
     * @param string $prenomAd
     */
    public function setPrenomAd($prenomAd)
    {
        $this->prenomAd = $prenomAd;
    }

    /**
     * @return string
     */
    public function getEmailAd()
    {
        return $this->emailAd;
    }

    /**
     * @param string $emailAd
     */
    public function setEmailAd($emailAd)
    {
        $this->emailAd = $emailAd;
    }

    /**
     * @return string
     */
    public function getMdpAd()
    {
        return $this->mdpAd;
    }

    /**
     * @param string $mdpAd
     */
    public function setMdpAd($mdpAd)
    {
        $this->mdpAd = $mdpAd;
    }

    /**
     * @return string
     */
    public function getAdresseAd()
    {
        return $this->adresseAd;
    }

    /**
     * @param string $adresseAd
     */
    public function setAdresseAd($adresseAd)
    {
        $this->adresseAd = $adresseAd;
    }

    /**
     * @return string
     */
    public function getNumAd()
    {
        return $this->numAd;
    }

    /**
     * @param string $numAd
     */
    public function setNumAd($numAd)
    {
        $this->numAd = $numAd;
    }

    /**
     * @return string
     */
    public function getRoleAd()
    {
        return $this->roleAd;
    }

    /**
     * @param string $roleAd
     */
    public function setRoleAd($roleAd)
    {
        $this->roleAd = $roleAd;
    }

    /**
     * @return string
     */
    public function getImgAd()
    {
        return $this->imgAd;
    }

    /**
     * @param string $imgAd
     */
    public function setImgAd($imgAd)
    {
        $this->imgAd = $imgAd;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getUsernameCanonical()
    {
        return $this->usernameCanonical;
    }

    /**
     * @param string $usernameCanonical
     */
    public function setUsernameCanonical($usernameCanonical)
    {
        $this->usernameCanonical = $usernameCanonical;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getEmailCanonical()
    {
        return $this->emailCanonical;
    }

    /**
     * @param string $emailCanonical
     */
    public function setEmailCanonical($emailCanonical)
    {
        $this->emailCanonical = $emailCanonical;
    }

    /**
     * @return bool
     */
    public function isEnabled()
    {
        return $this->enabled;
    }

    /**
     * @param bool $enabled
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    }

    /**
     * @return string
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * @param string $salt
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return \DateTime
     */
    public function getLastLogin()
    {
        return $this->lastLogin;
    }

    /**
     * @param \DateTime $lastLogin
     */
    public function setLastLogin($lastLogin)
    {
        $this->lastLogin = $lastLogin;
    }

    /**
     * @return string
     */
    public function getConfirmationToken()
    {
        return $this->confirmationToken;
    }

    /**
     * @param string $confirmationToken
     */
    public function setConfirmationToken($confirmationToken)
    {
        $this->confirmationToken = $confirmationToken;
    }

    /**
     * @return \DateTime
     */
    public function getPasswordRequestedAt()
    {
        return $this->passwordRequestedAt;
    }

    /**
     * @param \DateTime $passwordRequestedAt
     */
    public function setPasswordRequestedAt($passwordRequestedAt)
    {
        $this->passwordRequestedAt = $passwordRequestedAt;
    }

    /**
     * @return array
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * @param array $roles
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;
    }




}

