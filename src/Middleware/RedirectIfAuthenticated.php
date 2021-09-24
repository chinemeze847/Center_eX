<?php

namespace Cespess\Web\Middleware;

use Cespess\Web\Core\App;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Laminas\Diactoros\Response\RedirectResponse;

class RedirectIfAuthenticated implements MiddlewareInterface {
    
  public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface {

    if (App::session()->get('auth') === null) {
      return $handler->handle($request);
    }

    return new RedirectResponse(App::$BASE_URL.'/');
  }
}


