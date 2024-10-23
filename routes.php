<?php
/**
 * Application Route Definitions
 *
 * Filename:        routes.php
 * Location:        /
 * Project:         bm-php-mvc-jokes
 * Date Created:    06/09/2024
 *
 * Author:          Blony Maunela 20114950@tafe.wa.edu.au
 * Author:          Student Name <student_id@tafe.wa.edu.au>
 */

/* ----------------------------------------------------------------------------
 * Static Page Endpoints
 */
$router->get('/', 'StaticPageController@index');
$router->get('/about', 'StaticPageController@about');

/* ----------------------------------------------------------------------------
 * Jokes Endpoints
 */
$router->get('/jokes', 'JokeController@index');
$router->get('jokes/create', 'JokeController@create', ['auth']);
$router->get('jokes/edit/{id}', 'JokeController@edit', ['auth']);
$router->get('jokes/search', 'JokeController@search');
$router->get('jokes/{id}', 'JokeController@show');

$router->post('jokes', 'JokeController@store', ['auth']);
$router->put('jokes/{id}', 'JokeController@update', ['auth']);
$router->delete('jokes/delete/{id}', 'JokeController@destroy', ['auth']);



/* ----------------------------------------------------------------------------
 * Categories Endpoints
 */



/* ----------------------------------------------------------------------------
 * Users Endpoints
 */
$router->get('/users', 'UserController@index');
$router->get('/users/create', 'UserController@create', ['auth']);
$router->get('/users/edit/{id}', 'UserController@edit', ['auth']);
$router->get('/users/search', 'UserController@search');
$router->get('/users/{id}', 'UserController@show');

$router->post('/users', 'UserController@store', ['auth']);
$router->put('/users/{id}', 'UserController@update', ['auth']);
$router->delete('/users/{id}', 'UserController@destroy', ['auth']);


/* ----------------------------------------------------------------------------
 * User Authentication Endpoints
 */
$router->get('/auth/register', 'UserAuthController@create', ['guest']);
$router->get('/auth/login', 'UserAuthController@login', ['guest']);

$router->post('/auth/register', 'UserAuthController@store', ['guest']);
$router->post('/auth/logout', 'UserAuthController@logout', ['auth']);
$router->post('/auth/login', 'UserAuthController@authenticate', ['guest']);


$router->get('/auth/password', 'CreatePasswordController@index', ['guest']);
$router->post('/auth/password', 'CreatePasswordController@index', ['guest']);