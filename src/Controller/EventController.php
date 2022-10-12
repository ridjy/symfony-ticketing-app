<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EventController extends AbstractController
{
    /**
     * @Route("/events/{id}", name="show_event", requirements={"id"="\d+"})
     */
    public function show($id): Response
    {
        return new Response("<h1>Affichage de l'événement {$id}.</h1>");
    }

    /**
     * @Route("/events/{category}", name="list_events")
     */
    public function list($category = null): Response
    {
        $htmlMessage = "<h1>Liste des événements";
        if ($category) {
            $htmlMessage .= " ave la catégorie: ${category}";
        }
        $htmlMessage .= "</h1>";

        return new Response($htmlMessage);
    }
}
