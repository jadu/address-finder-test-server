<?php

namespace App\Controller;

use App\Authentication\Authentication;
use App\Factory\DataFactory;
use Symfony\Component\HttpFoundation\JsonResponse;
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
     *
     * @return JsonResponse|Response
     */
    public function search(Request $request, string $term)
    {
        $authentication = new Authentication();
        $isAuthenticated = $authentication->authenticate($request);

        if (false == $isAuthenticated) {
            return new Response('', Response::HTTP_UNAUTHORIZED);
        }

        $dataFactory = new DataFactory();
        $arrayOfStreets = $dataFactory->createStreets(urldecode($term));

        return new JsonResponse($arrayOfStreets);
    }

    /**
     * @Route("/street/fetch/{identifier}")
     *
     * @param Request $request
     * @param string $identifier
     *
     * @return JsonResponse|Response
     */
    public function fetch(Request $request, string $identifier)
    {
        $authentication = new Authentication();
        $isAuthenticated = $authentication->authenticate($request);

        if (false == $isAuthenticated) {
            return new Response('', Response::HTTP_UNAUTHORIZED);
        }

        $dataFactory = new DataFactory();
        $street = $dataFactory->createStreet(urldecode($identifier));

        if (null == $street) {
            return new Response('', Response::HTTP_NOT_FOUND);
        }

        return new JsonResponse($street);
    }
}
