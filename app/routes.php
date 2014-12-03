<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');

Route::get('say-hello/{name}', 'HomeController@sayHello');

Route::get('roll-dice/{guess}', 'HomeController@rollDice');

// Route::get('/', function()
// {
// 	return View::make('hello');
// });

Route::get('say-hello', function()
{
    return View::make('say-hello')->with('viewName', 'Codeup');
});


//first parameter is linked to first variable, sencond to second.
//They are linked by order, not name. Variable could be named anything.
//$id is not used here, just shows what multiple parameters look like
//This route returns a string

//Route::get('say-hello/{name}/{id}', function($name, $id)

// Route::get('say-hello/{name}', function($name)
// {
//     if ($name == 'John'){
//         return Redirect::to('/');
//     } else {
//     return "Hello $name!";
//     }
// });

Route::get('resume', function()
{
    return View::make('resume');
    return "This is my resume.";
});

Route::get('portfolio', function()
{
    return View::make('resume');
    return "This is my portfolio.";
});

Route::resource('posts', 'PostsController');

