<?php

namespace App\Controller;

use App\Authentication\Authentication;
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
     *
     * @return Response
     */
    public function status(Request $request)
    {
        $authentication = new Authentication();
        $isAuthenticated = $authentication->authenticate($request);

        if (false == $isAuthenticated) {
            return new Response('', Response::HTTP_UNAUTHORIZED);
        }

        return new Response();
    }
}
