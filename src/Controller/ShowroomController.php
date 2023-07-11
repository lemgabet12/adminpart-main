<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShowroomController extends AbstractController
{
 /**
     * @Route("/showroom", name="showroom")
     */
    public function showroom()
    {
        return $this->render('includes/fiche-showroom.html.twig');
    }
}