<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//posts
//CRUD is basically
// 1. get all(GET)  /api/posts
// 2. create a post(POST)   /api/posts
// 3. get a single(GET)    /api/posts/{id}
// 4. update a single(PUT/PATCH) /api/posts/{id}
// 5. delete(DELETE) /api/posts/{id}

// A way to store different versioning of API
// Route::prefix('v1')->group(function(){
//     Route::apiResource('posts', 'PostController');
// });


Route::apiResource('posts', 'PostController');

// to create a resourse(posts) in laravel

// 1. create the database and migrations
// 2. create a model 
// 2.5 create a service? Eloqeutn ORM
// 3. create a controller to go get info from the DB
// 4. return that info




Route::get('/testing-the-api', function(){
    return['message'=>'hello'];
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
