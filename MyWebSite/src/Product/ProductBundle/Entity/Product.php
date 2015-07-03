<?php

namespace Product\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Product\ProductBundle\Entity\ProductRepository")
 */
class Product
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
     * @ORM\Column(name="nomProduct", type="string", length=255)
     */
    private $nomProduct;

    /**
     * @var float
     *
     * @ORM\Column(name="descProduct", type="float")
     */
    private $descProduct;


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
     * Set nomProduct
     *
     * @param string $nomProduct
     * @return Product
     */
    public function setNomProduct($nomProduct)
    {
        $this->nomProduct = $nomProduct;

        return $this;
    }

    /**
     * Get nomProduct
     *
     * @return string 
     */
    public function getNomProduct()
    {
        return $this->nomProduct;
    }

    /**
     * Set descProduct
     *
     * @param float $descProduct
     * @return Product
     */
    public function setDescProduct($descProduct)
    {
        $this->descProduct = $descProduct;

        return $this;
    }

    /**
     * Get descProduct
     *
     * @return float 
     */
    public function getDescProduct()
    {
        return $this->descProduct;
    }
}
