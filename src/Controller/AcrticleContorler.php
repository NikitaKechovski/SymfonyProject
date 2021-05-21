<?php


namespace App\Controller;


use http\Env\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AcrticleContorler extends AbstractController
{
    /**
     * @Route("/")

    public function homepage()
    {
        return new Response('My first webpage!');
    }

     * @Route("/news/{slug}")
     */

    public function show($slug)
    {
        $comments = [
            'I ate a normal rock once. It did NOT taste like bacon!',
            'Woohoo! I\'m going on an all-asteroid diet!',
            'I like bacon too! Buy some from my site! bakinsomebacon.com',
        ];

        return $this->render('article/show.html.twig', [
            'title' => ucwords(str_replace('-', ' ', $slug)),
            'comments' => $comments,
        ]);

    }

}