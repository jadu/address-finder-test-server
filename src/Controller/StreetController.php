<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StreetController
{
    /**
     * @Route("/street/search")
     */
    public function search(Request $request)
    {
        return new Response(
            '<html><body>Search</body></html>'
        );
    }

    /**
     * @Route("/street/fetch")
     */
    public function fetch(Request $request)
    {
        return new Response(
            '<html><body>Fetch</body></html>'
        );
    }
}