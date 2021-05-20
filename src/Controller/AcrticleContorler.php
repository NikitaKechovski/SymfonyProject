<?php


namespace App\Controller;


use http\Env\Response;

class AcrticleContorler
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('My first webpage!');
    }

    /**
     * @Route("/news/{slug}")
     */

    public function show($slug)
    {
        return new Response(sprintf('Future page to show the article: %s'));

    }

}