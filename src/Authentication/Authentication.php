<?php

namespace App\Authentication;

use Symfony\Component\HttpFoundation\Request;

/**
 * Authentication.
 *
 * @author Jadu Ltd.
 */
class Authentication
{
    private $validAuthenticationToken = 'Xc31982x53LP98Fsce';

    public function authenticate(Request $request)
    {
        $authToken = $request->headers->get('X-Authentication-Key');

        if ($this->validAuthenticationToken == $authToken) {
            return true;
        } else {
            return false;
        }
    }
}
