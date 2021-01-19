<?php

namespace App\Exceptions;

use Symfony\Component\HttpKernel\Exception\HttpException;

class AuthException extends HttpException
{
    public function __construct($message = 'Unauthenticated')
    {
        parent::__construct(401, $message);
    }
}
