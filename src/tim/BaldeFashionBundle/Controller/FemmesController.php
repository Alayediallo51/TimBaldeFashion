<?php
/**
 * Created by PhpStorm.
 * User: Akhi
 * Date: 13/04/2018
 * Time: 04:21
 */

namespace tim\BaldeFashionBundle\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FemmesController extends Controller
{
    /**
     * @Route("/femmes",name="accueil_femmes")
     */
    public function femmes_acceuilAction(){
        return $this->render("@timBaldeFashion/Femmes/accueilF.html.twig");
    }
}