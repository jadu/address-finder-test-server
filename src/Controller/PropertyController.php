<?php

namespace App\Controller;

use App\Authentication\Authentication;
use App\Factory\PropertySearchFactory;
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
     */
    public function search(Request $request, string $postcode)
    {
        $authentication = new Authentication();
        $isAuthenticated = $authentication->authenticate($request);

        if (false == $isAuthenticated) {
            return new Response(
                '', 401
            );
        }

        $propertySearchFactory = new PropertySearchFactory();
        $arrayOfProperties = $propertySearchFactory->createProperties($postcode);

        return new Response(
           json_encode($arrayOfProperties)
        );
    }

    /**
     * @Route("/property/fetch")
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
