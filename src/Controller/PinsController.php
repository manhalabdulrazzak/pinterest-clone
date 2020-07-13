<?php

namespace App\Controller;

use App\Entity\Pin;
use App\Repository\PinRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PinsController extends AbstractController
{

    /**
     * @Route("/", name="app_home")
     */
    public function index(PinRepository $pinRepository): Response
{
    $pin = $pinRepository->findAll();

    return $this->render('Pins/index.html.twig');

}

    /**
     * @Route("/pins/{id<[0-9] +>}", name="app_pins_show")
     * @return Response
     */
    public function show(Pin $pin): Response
    {
        dd($pin);

    }
}

