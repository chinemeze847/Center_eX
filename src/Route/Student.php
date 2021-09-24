<?php

use League\Route\RouteGroup;
use Cespess\Web\Core\App;
use Cespess\Web\Controller\StudentController;
use Cespess\Web\Middleware\Authenticated;
use Cespess\Web\Middleware\RedirectIfAuthenticated;

App::route()->group('/center_ex/public/student', function (RouteGroup $route) {
  $route->get('/signin', [StudentController::class, 'signIn'])->middleware(new RedirectIfAuthenticated);
  $route->get('/signup', [StudentController::class, 'signUp'])->middleware(new RedirectIfAuthenticated);
  $route->get('/signout', [StudentController::class, 'signOut'])->middleware(new Authenticated);
  $route->post('/signin', [StudentController::class, 'postSignIn'])->middleware(new RedirectIfAuthenticated);
  $route->post('/signup', [StudentController::class, 'postSignUp'])->middleware(new RedirectIfAuthenticated);
});


