<?php

namespace App\Controller;

use App\Entity\Pin;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Twig\Environment;

class PinsController extends AbstractController
{

    /**
     * @Route("/", name="pins")
     */
    public function index(EntityManagerInterface $em) : Response
{
    $pin = new Pin;
    $pin->setTitle("title 3");
    $pin->setDescription('Description 3');

    $this->getDoctrine()->getManager();
    dump($pin);

    return $this->render('Pins/index.html.twig');
}
}
