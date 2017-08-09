<?php

namespace App\Controllers;

use App\Models\User;

class UserController extends BaseController
{

  public function index($request, $response)
  {
    return $this->c->view->render($response, 'home.twig');

  }
}
