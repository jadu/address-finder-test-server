<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * StatusController.
 *
 * @author Jadu Ltd.
 */
class StatusController
{
    /**
     * @Route("/status")
     *
     * @param Request $request
     */
    public function status(Request $request)
    {
        return new Response(
            '', 401
        );

        /*return new Response(
            '<html><body>'.$request->headers->get('X-Authentication-Key').'</body></html>'
        );*/
    }
}
