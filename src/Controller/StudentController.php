<?php

namespace Cespess\Web\Controller;

use Cespess\Web\Core\Response;
use Laminas\Diactoros\ServerRequest;
use Laminas\Diactoros\Response\HtmlResponse;


class StudentController {

  public function signIn(ServerRequest $request) : HtmlResponse {
    return Response::view('student/signin');
  }

}


