<?php

namespace App\Controller;

use App\Entity\Velib;
use App\Repository\VelibRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;



class home extends AbstractController
{
    /**
     * @var VelibRepository
     */

     private $repository;

     public function __construct(VelibRepository $repository)
     {
         $this->repository = $repository;
     }
    
    
    
    /**
     * @Route("/", name="home")
     * @return Response
     */

    
     public function show(PaginatorInterface $paginator, Request $request): Response
    {
        $velib = $paginator->paginate(
        $this->repository->findAllVisible(),
        $request->query->getInt('page', 1),
        12
        );
        return $this->render('show.html.twig',[
            'velib' => $velib
        ]);
    }
}