<?php

namespace App\Controller;

use App\Entity\Link;
use App\Repository\LinkRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(LinkRepository $repo): Response
    {
        $links = $repo->findBy(criteria: [], orderBy: ["createdAt" => "desc"], limit: 20);

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'links' => $links,
        ]);
    }

    #[Route('/all', name:'show_all_links')]
    public function showAll(LinkRepository $repository) {
        $allLinks = $repository->findAll();

        return $this->render('showAll.html.twig', ['all'=>$allLinks]);
    }

    #[Route('/show/{link}', name: "link_show")]
    public function show(Link $link): Response {

        return $this->render('link/index.html.twig', ['link'=>$link]);
    }

}
