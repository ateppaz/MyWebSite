<?php

namespace Home\AccueilBundle\Controller;

use Home\AccueilBundle\Entity\News;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/accueil")
     * @Template()
     */
    public function indexAction()
    {

        /*$news = new News();
        $news->setNomNews('A Foo Bar');
        $news->setDescNews('Nouveau produit en stock !!');
        $news->setDateNews('19/06/2015');

        $em = $this->getDoctrine()->getManager();
        $em->persist($news);
        $em->flush();

        return new Response('Id du produit créé : '.$news->getId());*/

        $repository = $this->getDoctrine()
            ->getRepository('AccueilBundle:News');

        try {
            $allNews = $repository->findAll();
        }catch(\Exception $e){
            $error = "une erreur est survenue " . $e->getMessage();
        }

        return array("lesNews" => $allNews);

        //return array('error' => '');
    }
}
