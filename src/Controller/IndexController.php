<?php

namespace Cespess\Web\Controller;

use Cespess\Web\Core\App;
use Laminas\Diactoros\Response;
use Laminas\Diactoros\ServerRequest;

class IndexController {

  public function home(ServerRequest $request) : Response {
    return App::view('index');
  }

}


