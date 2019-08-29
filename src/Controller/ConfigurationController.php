<?php

namespace App\Controller;

use App\Authentication\Authentication;
use App\Factory\ConfigurationFactory;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * ConfigurationController.
 *
 * @author Jadu Ltd.
 */
class ConfigurationController
{
    /**
     * @Route("/configuration/fetch")
     *
     * @param Request $request
     *
     * @return JsonResponse|Response
     */
    public function fetch(Request $request)
    {
        $authentication = new Authentication();
        $isAuthenticated = $authentication->authenticate($request);

        if (false == $isAuthenticated) {
            return new Response('', Response::HTTP_UNAUTHORIZED);
        }

        $configurationFactory = new ConfigurationFactory();
        $configuration = $configurationFactory->createConfiguration(
            $request->getSchemeAndHttpHost()
        );

        if (null == $configuration) {
            return new Response('', Response::HTTP_NOT_FOUND);
        }

        return new JsonResponse($configuration);
    }
}
