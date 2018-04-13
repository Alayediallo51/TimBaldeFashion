<?php
/**
 * Created by PhpStorm.
 * User: Akhi
 * Date: 13/04/2018
 * Time: 03:41
 */

namespace tim\BaldeFashionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;


class HommesController extends Controller
{
    /**
     * @Route("/hommes",name="acceuil_hommes")
     */
    public function Hommes_acceuilAction(){
        return $this->render('@timBaldeFashion/Hommes/accueilH.html.twig');
    }

}