<?php

namespace App\Controllers;

use App\Models\User;
use Respect\Validation\Validator as v;

class UserController extends BaseController
{

  public function index($request, $response)
  {
    return $this->c->view->render($response, 'home.twig');
  }

  public function getSignUp($request, $response)
  {
    return $this->c->view->render($response, 'signup.twig');
  }

  public function postSignUp($request, $response)
  {

    $validation = $this->c->validator->validate($request, [
      'email' => v::noWhitespace()->notEmpty()->emailAvailable(),
      'name' => v::notEmpty()->alpha(),
      'password' => v::noWhitespace()->notEmpty(),

    ]);

    if($validation->failed()){
      return $response->withRedirect($this->c->router->pathFor('signup'));
    }

    $var = $request->getParams();

    $user = User::create([
      'email'   => $var['email'],
      'name'    => $var['name'],
      'password'=> password_hash($var['password'], PASSWORD_DEFAULT),
    ]);

    return $response->withRedirect($this->c->router->pathFor('visits.index'));

  }
}
