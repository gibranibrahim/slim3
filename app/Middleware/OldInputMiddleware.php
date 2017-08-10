<?php

namespace App\Middleware;

class OldInputMiddleware extends Middleware
{

  public function __invoke($request, $response, $next)
  {

    if(isset($_SESSION['old'])) {

      // $this->container->view->getEnvironment()->addGlobal('old', $_SESSION['old']);
      // print_r($this->container->view->getAttributes());
      // die();

    }

    $_SESSION['old'] = $request->getParams();

    $response = $next($request, $response);

    return $response;

  }

}
