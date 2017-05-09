<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/home', function () use ($app) {
    return view('home');
});

$app->get('/nosotros', function () use ($app) {
    return view('nosotros');
});

$app->get('/contacto', function () use ($app) {
    return view('contacto');
});

$app->get('/service-desk', function () use ($app) {
    return view('service-desk');
});

$app->get('/admin-dispositivos', function () use ($app) {
    return view('admin-dispositivos');
});

$app->get('/admin-activos', function () use ($app) {
    return view('admin-activos');
});

$app->get('/antivirus', function () use ($app) {
    return view('antivirus');
});

$app->get('/workflows', function () use ($app) {
    return view('workflows');
});

$app->get('/respaldos', function () use ($app) {
    return view('respaldos');
});

$app->get('/prevencion', function () use ($app) {
    return view('prevencion');
});