<?php

namespace App\Controller;

use App\Authentication\Authentication;
use App\Factory\DataFactory;
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

        $dataFactory = new DataFactory();
        $arrayOfStreets = $dataFactory->createStreets(urldecode($term));

        return new Response(
           json_encode($arrayOfStreets)
        );
    }

    /**
     * @Route("/street/fetch/{identifier}")
     *
     * @param Request $request
     * @param string $identifier
     */
    public function fetch(Request $request, string $identifier)
    {
        $authentication = new Authentication();
        $isAuthenticated = $authentication->authenticate($request);

        if (false == $isAuthenticated) {
            return new Response(
                '', 401
            );
        }

        $dataFactory = new DataFactory();
        $street = $dataFactory->createStreet(urldecode($identifier));

        if (null == $street) {
            return new Response(
                '', 404
            );
        }

        return new Response(json_encode($street));
    }
}
