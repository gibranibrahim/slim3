<?php
/*
 * Routing System
 */

//Visit
$app->get('/', '\App\Controllers\VisitController:index');
$app->get('/visits', '\App\Controllers\VisitController:index')->setName('visits.index');
$app->get('/visits/add', '\App\Controllers\VisitController:getAdd')->setName('visits.add');
$app->post('/visits/add', '\App\Controllers\VisitController:postAdd');
$app->get('/visits/delete/{id}', '\App\Controllers\VisitController:delete')->setName('visits.delete');

//Auth
$app->get('/signup', '\App\Controllers\AuthController:getSignUp')->setName('signup');
$app->post('/signup', '\App\Controllers\AuthController:postSignUp');
