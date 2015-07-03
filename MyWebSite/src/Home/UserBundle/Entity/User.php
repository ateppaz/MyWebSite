<?php

namespace Home\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Home\UserBundle\Entity\UserRepository")
 */
class User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="loginUser", type="string", length=255)
     */
    private $loginUser;

    /**
     * @var string
     *
     * @ORM\Column(name="nomUser", type="string", length=255)
     */
    private $nomUser;

    /**
     * @var string
     *
     * @ORM\Column(name="preUser", type="string", length=255)
     */
    private $preUser;

    /**
     * @var string
     *
     * @ORM\Column(name="mdpUser", type="string", length=255)
     */
    private $mdpUser;

    /**
     * @var string
     *
     * @ORM\Column(name="mailUser", type="string", length=255)
     */
    private $mailUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="ageUser", type="integer")
     */
    private $ageUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="groupUser", type="integer")
     */
    private $groupUser;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set loginUser
     *
     * @param string $loginUser
     * @return User
     */
    public function setLoginUser($loginUser)
    {
        $this->loginUser = $loginUser;

        return $this;
    }

    /**
     * Get loginUser
     *
     * @return string 
     */
    public function getLoginUser()
    {
        return $this->loginUser;
    }

    /**
     * Set nomUser
     *
     * @param string $nomUser
     * @return User
     */
    public function setNomUser($nomUser)
    {
        $this->nomUser = $nomUser;

        return $this;
    }

    /**
     * Get nomUser
     *
     * @return string 
     */
    public function getNomUser()
    {
        return $this->nomUser;
    }

    /**
     * Set preUser
     *
     * @param string $preUser
     * @return User
     */
    public function setPreUser($preUser)
    {
        $this->preUser = $preUser;

        return $this;
    }

    /**
     * Get preUser
     *
     * @return string 
     */
    public function getPreUser()
    {
        return $this->preUser;
    }

    /**
     * Set mdpUser
     *
     * @param string $mdpUser
     * @return User
     */
    public function setMdpUser($mdpUser)
    {
        $this->mdpUser = $mdpUser;

        return $this;
    }

    /**
     * Get mdpUser
     *
     * @return string 
     */
    public function getMdpUser()
    {
        return $this->mdpUser;
    }

    /**
     * Set mailUser
     *
     * @param string $mailUser
     * @return User
     */
    public function setMailUser($mailUser)
    {
        $this->mailUser = $mailUser;

        return $this;
    }

    /**
     * Get mailUser
     *
     * @return string 
     */
    public function getMailUser()
    {
        return $this->mailUser;
    }

    /**
     * Set ageUser
     *
     * @param integer $ageUser
     * @return User
     */
    public function setAgeUser($ageUser)
    {
        $this->ageUser = $ageUser;

        return $this;
    }

    /**
     * Get ageUser
     *
     * @return integer 
     */
    public function getAgeUser()
    {
        return $this->ageUser;
    }

    /**
     * Set groupUser
     *
     * @param integer $groupUser
     * @return User
     */
    public function setGroupUser($groupUser)
    {
        $this->groupUser = $groupUser;

        return $this;
    }

    /**
     * Get groupUser
     *
     * @return integer 
     */
    public function getGroupUser()
    {
        return $this->groupUser;
    }
}
