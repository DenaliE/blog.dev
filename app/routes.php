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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('say-hello', function()
{
    return View::make('say-hello')->with('viewName', 'Codeup');
});

Route::get('say-hello/{urlname}', function($functionName)
{
    return View::make('say-hello')->with('viewName', $functionName);
});

// Route::get('roll-dice', function(){

//     define ('SIDES_OF_DICE', 6);
//     $rand = mt_rand(1, SIDES_OF_DICE);

//     return View::make('roll-dice')->with('rand', $rand);
// });

Route::get('roll-dice/{guess}', function($guess){

    define ('SIDES_OF_DICE', 6);
    $rand = mt_rand(1, SIDES_OF_DICE);

    $array = ['guess' => $guess, 'rand' => $rand];

    //return View::make('roll-dice')->with('rand', $rand);

    return View::make('roll-dice')->with($array);
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
    return "This is my resume.";
});

Route::get('portfolio', function()
{
    return "This is my portfolio.";
});


