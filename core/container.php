<?php

$container = $app->getContainer();

//Container untuk View
$container['view'] = function ($container) {
  $view = new \Slim\Views\Twig( __DIR__ . '/../app/Views', [
    'cache' => false
  ]);
  // Instantiate and add Slim specific extension
  $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
  $view->addExtension(new Slim\Views\TwigExtension($container['router'], $basePath));

  return $view;
};


// Eloquent Database
$capsule = new \Illuminate\Database\Capsule\Manager;
$capsule->addConnection($container['settings']['db']);
$capsule->setAsGlobal();
$capsule->bootEloquent();

//Container untuk database
$container['db'] = function ($container) use ($capsule){
  return $capsule;
};


// Respect Validator
//Container untuk Validator
$container['validator'] = function($container){
  return new App\Validation\Validator;
};

$app->add(new \App\Middleware\ValidationErrorsMiddleware($container));
