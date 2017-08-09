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

//User
$app->get('/users/signup', '\App\Controllers\UserController:getSignUp')->setName('signup');
$app->post('/users/signup', '\App\Controllers\UserController:postSignUp');
