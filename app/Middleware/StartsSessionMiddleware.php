<?php

namespace App\Middleware;

use App\Exception\SessionException;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

class StartsSessionMiddleware implements MiddlewareInterface
{

    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {

        if (session_status() === PHP_SESSION_ACTIVE) {
            throw new SessionException('Session already started');
        }

        if (headers_sent($file, $line)) {
            throw new SessionException("Headers already sent in $file on line $line");
        }
        session_set_cookie_params(['secure' => true, 'httponly' => true, 'samesite' => 'lax']);

        session_start();
        $response = $handler->handle($request);

        session_write_close();
        return  $response;
    }
}