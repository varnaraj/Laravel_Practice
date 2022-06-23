<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('listings',[
        'heading'=>'It is a heading'
        
    ]);
});

Route::get('/hello', function(){
    return response('<h1>hello world</h1>');
});
// Route::get('/posts/{id}',function($id){
//     return espose('Post '.$id);
//     //return 'hii';
// });

Route::get('/search', function(Request $request){
    return $request->name . ' ' . $request->city;
});

