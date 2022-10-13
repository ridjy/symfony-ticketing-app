<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\EventRepository;

class CoreController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function homepage(EventRepository $eventRepository): Response
    {
        //limit 12 offset 0
        $events = $eventRepository->findBy(
            ['isPublished' => true],
            ['eventDate' => 'ASC'],
            12,
            0
        );

        return $this->render('core/index.html.twig', ['events' => $events]);
    }

    public function about(): Response
    {
        return $this->render('core/index.html.twig', [
            'controller_name' => 'CoreController',
        ]);
    }
}
