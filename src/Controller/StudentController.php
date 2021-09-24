<?php

namespace Cespess\Web\Controller;

use Cespess\Web\Core\App;
use Cespess\Web\Database\DB;
use Cespess\Web\Model\Student;
use Laminas\Diactoros\Response;
use Laminas\Diactoros\ServerRequest;
use Laminas\Diactoros\Response\TextResponse;
use Laminas\Diactoros\Response\RedirectResponse;

use function password_hash;
use function password_verify;


class StudentController {

  public function signIn(ServerRequest $request) : Response {
    return App::view('student/signin');
  }

  public function signUp(ServerRequest $request) : Response {
    return App::view('student/signup');
  }
  
  public function signOut(ServerRequest $request) : Response {
    App::session()->clear();
    return new RedirectResponse(App::$BASE_URL.'/');
  }

  public function postSignUp(ServerRequest $request) : Response {

    $errors = [];

    $inputs = $request->getParsedBody();

    if (empty($inputs['first_name'])) {
      $errors['first_name'] = 'This field is required';
    }

    if (empty($inputs['last_name'])) {
      $errors['last_name'] = 'This field is required';
    }

    if (empty($inputs['email'])) {
      $errors['email'] = 'This field is required';
    } elseif (!filter_var($inputs['email'], FILTER_VALIDATE_EMAIL)) {
      $errors['email'] = 'This field is invalid';
    } else {
      $student = DB::db()->
                  getRepository('Cespess\Web\Model\Student')->
                  findOneBy(array('email' => $inputs['email']));
      if (!is_null($student)) {
        $errors['email'] = 'Email already exists';
      }            
    }

    if (empty($inputs['password'])) {
      $errors['password'] = 'This field is required';
    } elseif (strlen($inputs['password']) < 6) {
      $errors['password'] = 'Password is too short';
    } elseif ($inputs['password'] !== $inputs['confirm_password']) {
      $errors['confirm_password'] = 'This field doesn\'t match password';
    } 

    if (!empty($errors)) 
      return App::redirectWithFormData('/student/signup', $inputs, $errors);

    $student = new Student;
    $student->firstName = $inputs['first_name'];
    $student->lastName = $inputs['last_name'];
    $student->email = $inputs['email'];
    $student->password = password_hash($inputs['password'], PASSWORD_DEFAULT);

    DB::db()->persist($student);
    DB::db()->flush();

    App::session()->set('auth', $student);

    return new RedirectResponse(App::$BASE_URL.'/');
  }

  public function postSignIn(ServerRequest $request) : Response {

    $errors = [];

    $inputs = $request->getParsedBody();

    if (empty($inputs['email']) || empty($inputs['password'])) {
      $errors['email'] = 'Email or password is incorrect';
    } else {
      $student = DB::db()->
                  getRepository('Cespess\Web\Model\Student')->
                  findOneBy(array('email' => $inputs['email']));
      
      if (is_null($student) || !password_verify($inputs['password'], $student->password)) {
        $errors['email'] = 'Email or password is incorrect';
      } else {

        App::session()->set('auth', $student);

        return new RedirectResponse(App::$BASE_URL.'/');
      }
    }

    return App::redirectWithFormData('/student/signin', $inputs, $errors);
  }

}


