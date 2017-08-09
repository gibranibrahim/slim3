<?php

namespace App\Controllers;

use App\Models\User;

class AuthController extends BaseController
{

  public function getSignUp($request, $response){
    return $this->c->view->render($response, 'signup.twig');
  }

  public function postSignUp($request, $response){
    $var = $request->getParams();

    $user = User::create([
      'email'   => $var['email'],
      'name'    => $var['name'],
      'password'=> password_hash($var['password'], PASSWORD_DEFAULT),
    ]);

    return $response->withRedirect($this->c->router->pathFor('signup'));

  }
}
