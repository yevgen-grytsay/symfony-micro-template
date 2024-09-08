<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController {
    #[Route('/', name: 'home', host: 'localhost')]
    public function home(): Response
    {
        return new Response('Hello world!');
    }
}
