<?php
/*
 * HomeController only for controller sample
 */

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index($request, $response)
    {
        return $this->c->view->render($response, 'home.twig');
    }
}
