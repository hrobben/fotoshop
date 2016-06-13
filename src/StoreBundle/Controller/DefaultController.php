<?php

namespace StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="start")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

       // var_dump($em->getRepository('Articles')->findAll()); die();

        $articles = $em->getRepository('StoreBundle:Articles')->findall();

        return $this->render('StoreBundle:Default:default.html.twig',[
            'articles' => $articles,
        ]);
    }

    /**
     * @Route("/bootstrap");
     */
    public function bootstrapAction()
    {
        return $this->render("@Store/Default/index.html.twig");
    }
}
