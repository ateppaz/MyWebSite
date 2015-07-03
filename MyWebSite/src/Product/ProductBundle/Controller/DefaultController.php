<?php

namespace Product\ProductBundle\Controller;

use Product\ProductBundle\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/product")
     * @Template()
     */
    public function productAction()
    {
        return array('error' => '');
    }

    /**
     * @Route("/addProduct")
     * @Template()
     */
    public function addProductAction()
    {
        $error = null;

        //enregistrement
        $product = new Product();
        $product->setNomProduct($_POST['nomProd']);
        $product->setDescProduct($_POST['descProd']);

        try {
            $em = $this->getDoctrine()->getManager();
            $em->persist($product);
            $em->flush();
            echo "Prduit ajouté !";
        }catch(\Exception $e){
            $error = "une erreur est survenue :" . $e->getMessage();
        }

        // Passage de paramètres à ma vue index.html.twig
        return array('error' => $error);
    }
}
