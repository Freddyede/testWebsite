<?php

namespace App\Controller;

use App\Services\TitleServices;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @author Patouillard Franck <patouillardfranck3@gmail.com>
     * This method is used to display the home page
     * @Route("/", name="app_home")
     */
    public function index(TitleServices $ts): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => $ts::getHomeTitle(),
        ]);
    }
}
