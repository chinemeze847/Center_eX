<?php

use League\Route\RouteGroup;
use Cespess\Web\Core\App;
use Cespess\Web\Controller\StudentController;

App::route()->group('/center_ex/public/student', function (RouteGroup $route) {
  $route->get('/signin', [StudentController::class, 'signIn']);
  $route->get('/signup', [StudentController::class, 'signUp']);
  $route->post('/signup', [StudentController::class, 'postSignUp']);
});


