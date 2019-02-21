<?php

namespace App\Controller;

use App\Authentication\Authentication;
use App\Factory\ConfigurationFactory;
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
     * @param string $identifier
     */
    public function fetch(Request $request)
    {
        $authentication = new Authentication();
        $isAuthenticated = $authentication->authenticate($request);

        if (false == $isAuthenticated) {
            return new Response(
                '', 401
            );
        }

        $configurationFactory = new ConfigurationFactory();
        $configuration = $configurationFactory->createConfiguration();

        if (null == $configuration) {
            return new Response(
                '', 404
            );
        }

        return new Response(json_encode($configuration));
    }
}
