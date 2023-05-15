<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route(path: '/', name: 'index', methods: ['GET'])]
    public function list(): Response
    {
        $number = random_int(0, 100);
        return $this->render('index.html.twig', [
            'number' => $number,
        ]);
    }
}
