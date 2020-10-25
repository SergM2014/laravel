<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\UserNotificationsController;
use App\Http\Controllers\ConversationsController;
use App\Http\Controllers\ConversationBestReplyController;
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



//Route::get('/',[PagesController::class, 'home']);

//Route::get('/', function( \App\Models\Example $example){
   //$example = resolve(\App\Models\Example::class);
//ddd($example);
//});

Route::get('/', function () {
    return view('welcome');
});

//Route::get('conversations', [ConversationsController::class,'index']);
//Route::get('conversations/{conversation}',[ConversationsController::class, 'show']);
//Route::post('best-replies/{reply}', [ConversationBestReplyController::class, 'store']);


//Route::get('/', function(){
//   $container = new \App\Models\Container();
//
 //  $container->bind('example', function(){
//      return new \App\Models\Example();
//   });
 //  $example = $container->resolve('example');

//   $example->go();
//});



//Route::get('/about', function(){
//    $articles = App\Models\Article::take(3)->latest()->get();
//    return view('about', compact('articles'));
//});
//Route::get('/articles/create', [ ArticlesController::class, 'create']);
//Route::post('/articles', [ ArticlesController::class, 'store']);
//Route::get('/articles/{article}', [ ArticlesController::class, 'show'])->name('articles.show');
//Route::get('/articles', [ ArticlesController::class, 'index'])->name('articles.index');
//Route::get('/articles/{articles}/edit', [ ArticlesController::class, 'edit']);
//Route::put('/articles/{articles}', [ ArticlesController::class, 'update']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
   return view('dashboard');
})->name('dashboard');

//Route::get('/contact',[ ContactController::class, 'show']);
//Route::post('/contact', [ContactController::class, 'store']);

//Route::get('/note', [PaymentsController::class, 'dodo'])->middleware('auth');
//Route::get('notifications',[ UserNotificationsController::class, 'show'])->middleware('auth');
