<?php

namespace App\Controller;

use App\Authentication\Authentication;
use App\Factory\StreetSearchFactory;
//use App\Factory\PropertyFetchFactory;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * StreetController.
 *
 * @author Jadu Ltd.
 */
class StreetController
{
    /**
     * @Route("/street/search/{term}")
     *
     * @param Request $request
     * @param string $term
     */
    public function search(Request $request, string $term)
    {
        $authentication = new Authentication();
        $isAuthenticated = $authentication->authenticate($request);

        if (false == $isAuthenticated) {
            return new Response(
                '', 401
            );
        }

        $propertySearchFactory = new StreetSearchFactory();
        $arrayOfStreets = $propertySearchFactory->createStreets($term);

        return new Response(
           json_encode($arrayOfStreets)
        );
    }

    /**
     * @Route("/street/fetch")
     *
     * @param Request $request
     */
    public function fetch(Request $request)
    {
        return new Response(
            '<html><body>Fetch</body></html>'
        );
    }
}
