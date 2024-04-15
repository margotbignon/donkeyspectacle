<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Show;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ShowController extends AbstractController
{
    #[Route('/{parent_slug}/{slug}', name: 'app_maincategory_category')]
    #[Route('/{slug}', name: 'app_maincategory')]
    public function index(Category $category, CategoryRepository $categoryRepository): Response
    {
        
        $shows = [];
        if (!$category->getParent()) {
            $childCategories = $categoryRepository->findBy(['parent' => $category]);

            foreach ($childCategories as $childCategory) {
                $categoryShows = $childCategory->getShows()->toArray();
                $shows = array_merge($shows, $categoryShows);

            }
        } else {
            $shows = $category->getShows();
        }
        if (!$category) {
            throw $this->createNotFoundException('La catégorie demandée n\'existe pas.');
        }


        return $this->render('show/index.html.twig', [
            'shows' => $shows,
            'category' => $category
        ]);
    }
}
