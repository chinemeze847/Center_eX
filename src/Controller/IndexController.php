<?php

namespace Cespess\Web\Controller;

use Cespess\Web\Core\Response;
use Laminas\Diactoros\ServerRequest;
use Laminas\Diactoros\Response\HtmlResponse;


class IndexController {

  public function home(ServerRequest $request) : HtmlResponse {
    return Response::view('index', ['name'=> Response::trans('test')]);
  }

}


