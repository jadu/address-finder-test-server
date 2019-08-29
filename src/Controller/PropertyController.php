<?php

namespace App\Controller;

use App\Authentication\Authentication;
use App\Factory\DataFactory;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * PropertyController.
 *
 * @author Jadu Ltd.
 */
class PropertyController
{
    /**
     * @Route("/property/search/{postcode}")
     *
     * @param Request $request
     * @param string $postcode
     *
     * @return JsonResponse|Response
     */
    public function search(Request $request, string $postcode)
    {
        $authentication = new Authentication();
        $isAuthenticated = $authentication->authenticate($request);

        if (false == $isAuthenticated) {
            return new Response('', Response::HTTP_UNAUTHORIZED);
        }

        $dataFactory = new DataFactory();
        $arrayOfProperties = $dataFactory->createProperties(urldecode($postcode));

        return new JsonResponse($arrayOfProperties);
    }

    /**
     * @Route("/property/fetch/{identifier}")
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
        $property = $dataFactory->createProperty(urldecode($identifier));
        if (null == $property) {
            return new Response('', Response::HTTP_NOT_FOUND);
        }

        return new JsonResponse($property);
    }
}
