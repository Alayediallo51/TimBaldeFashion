<?php

namespace tim\BaldeFashionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/",name="accueil_principal")
     */
    public function indexAction()
    {
        return $this->render('@timBaldeFashion/Default/accueil.html.twig');
    }
}
