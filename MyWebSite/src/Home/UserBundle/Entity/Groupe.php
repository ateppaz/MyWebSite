<?php

namespace Home\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groupe
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Home\UserBundle\Entity\GroupeRepository")
 */
class Groupe
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
     * @ORM\Column(name="nomGroupe", type="string", length=255)
     */
    private $nomGroupe;

    /**
     * @var integer
     *
     * @ORM\Column(name="niveauGroupe", type="integer")
     */
    private $niveauGroupe;


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
     * Set nomGroupe
     *
     * @param string $nomGroupe
     * @return Groupe
     */
    public function setNomGroupe($nomGroupe)
    {
        $this->nomGroupe = $nomGroupe;

        return $this;
    }

    /**
     * Get nomGroupe
     *
     * @return string 
     */
    public function getNomGroupe()
    {
        return $this->nomGroupe;
    }

    /**
     * Set niveauGroupe
     *
     * @param integer $niveauGroupe
     * @return Groupe
     */
    public function setNiveauGroupe($niveauGroupe)
    {
        $this->niveauGroupe = $niveauGroupe;

        return $this;
    }

    /**
     * Get niveauGroupe
     *
     * @return integer 
     */
    public function getNiveauGroupe()
    {
        return $this->niveauGroupe;
    }
}
