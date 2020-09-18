<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\MachinController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\EmailController;

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


/*Route::get('/', function () {
    return view('welcome');
});*/

//url "/1" retourne une page "je suis la page 1"
Route::get('1', function() {
    return 'Je suis la première page !';
});

//url "/choix/n" retourne une page "je suis la page n"
Route::get('choix/{n}', function($n) {
	return 'Je suis la page ' . $n . ' !';
});

//route nommée
Route::get('page_de_test', ['as' => 'test', function() {
    return view('page_test');
}]);

/*
    utilisation helper "response"
    return Response::make('Je suis la page ' . $n . ' !',200);
idem à
    utilisation façade
	return response('Je suis la page ' . $n . ' !',200);
*/

/*
Route::get('numeric/{n}', function($n) {
    return Response::make('Je suis la page ' . $n . ' !',200);
})->where('n', '[1-3]');
*/

/*vue paramétrée

    return view('article')->with('numero', $n);
idem à
    mèthode "magique"
    return view('article')->withNumero($n);
idem à
    passage d'un tableau en paramètre
    return view('article', ['numero' => $n]);
*/

Route::get('article/{n}', function($n) {
    return view('article')->with('numero', $n);
})->where('n', '[0-9]+');

//Route::get('/', 'WelcomeController@index');
Route::get('/', [WelcomeController::class, 'index']);


Route::get('machin/{n}', [MachinController::class, 'show'])
    ->where('n', '[0-9]+');

//formulaire
Route::get('users', [UsersController::class, 'getInfos']);
Route::post('users', [UsersController::class, 'postInfos']);

//validation
Route::get('contact', [ContactController::class, 'getForm']);
Route::post('contact', [ContactController::class, 'postForm']);

Route::get('photo', [PhotoController::class, 'getForm']);
Route::post('photo', [PhotoController::class, 'postForm']);

Route::get('email', [EmailController::class, 'getForm']);
Route::post('email', [EmailController::class, 'postForm'])->name('storeEmail');


