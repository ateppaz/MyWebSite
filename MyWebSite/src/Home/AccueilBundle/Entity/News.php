<?php

namespace Home\AccueilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * News
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Home\AccueilBundle\Entity\NewsRepository")
 */
class News
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
     * @ORM\Column(name="nomNews", type="string", length=255)
     */
    private $nomNews;

    /**
     * @var string
     *
     * @ORM\Column(name="descNews", type="string", length=255)
     */
    private $descNews;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNews", type="date")
     */
    private $dateNews;


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
     * Set nomNews
     *
     * @param string $nomNews
     * @return News
     */
    public function setNomNews($nomNews)
    {
        $this->nomNews = $nomNews;

        return $this;
    }

    /**
     * Get nomNews
     *
     * @return string 
     */
    public function getNomNews()
    {
        return $this->nomNews;
    }

    /**
     * Set descNews
     *
     * @param string $descNews
     * @return News
     */
    public function setDescNews($descNews)
    {
        $this->descNews = $descNews;

        return $this;
    }

    /**
     * Get descNews
     *
     * @return string 
     */
    public function getDescNews()
    {
        return $this->descNews;
    }

    /**
     * Set dateNews
     *
     * @param \DateTime $dateNews
     * @return News
     */
    public function setDateNews($dateNews)
    {
        $this->dateNews = $dateNews;

        return $this;
    }

    /**
     * Get dateNews
     *
     * @return \DateTime 
     */
    public function getDateNews()
    {
        return $this->dateNews;
    }
}
