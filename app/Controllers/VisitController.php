<?php

namespace App\Controllers;

use App\Models\Visit;

class VisitController extends BaseController
{

  public function index($request, $response)
  {
    $visits = Visit::all();
    return $this->c->view->render($response, 'home.twig', [
            'visits' => $visits
        ]);
  }

  public function getAdd($request, $response){
    return $this->c->view->render($response, 'visits.add.twig');
  }

  public function postAdd($request, $response){
    $var = $request->getParams();

    $visit = Visit::create([
      'data'   => $var['data'],
      'local'    => $var['local'],
      'valor'    => $var['valor'],
    ]);

    return $response->withRedirect($this->c->router->pathFor('visits.index'));
  }

  public function delete($request, $response, $args){

    if(Visit::destroy($args['id'])){
      return $response->withRedirect($this->c->router->pathFor('visits.index'));
    };

    echo 'DELETING FAILED';

  }

}
