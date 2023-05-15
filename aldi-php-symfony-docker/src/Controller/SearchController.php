<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\ProductRepository;

class SearchController extends AbstractController
{
    #[Route(path: '/search', name: 'search', methods: ['GET'])]
    public function list(Request $request, ProductRepository $productRepository): Response
    {
        // get search query parameters from path
        $searchQuery = $request->query->get('search');
        // if there is no search text
        if (!$searchQuery) {
            // redirect to homepage
            return $this->redirectToRoute('index');
        }
        // check if searchQuery not containing special characters for sql code injection
        if (!preg_match('/^[a-zA-Z0-9\s]+$/', $searchQuery)) {
            // redirect to homepage
            return $this->redirectToRoute('index');
        }
        // get all products from database
        $products = $productRepository->findBySearchQuery($searchQuery);
        return $this->render('search.html.twig', [
            'searchQuery' => $searchQuery,
            'results' => $products,
        ]);
    }
}
