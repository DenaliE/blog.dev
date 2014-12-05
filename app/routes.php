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

});

Route::get('portfolio', function()
{
    return View::make('portfolio');

});

Route::resource('posts', 'PostsController');

Route::get('orm-test', function ()
{
    // test code here
    $post1 = new Post();
    $post1->title = 'Eloquent is awesome!';
    $post1->body  = 'It is super easy to create a new post.';
    $post1->save();

    $post2 = new Post();
    $post2->title = 'Post number two';
    $post2->body  = 'The body for post number two.';
    $post2->save();
});
