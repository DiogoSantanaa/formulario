<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/questionnaires/create', 'QuestionnaireController@create');
Route::post('/questionnaires', 'QuestionnaireController@store');
Route::get('/questionnaires/{questionnaire}', 'QuestionnaireController@show');

Route::get('/questionnaires/{questionnaire}/questions/create', 'QuestionController@create');
Route::post('/questionnaires/{questionnaire}/questions', 'QuestionController@store');
Route::delete('/questionnaires/{questionnaire}/questions/{question}', 'QuestionController@destroy');

Route::get('/surveys/{questionnaire}-{slug}', 'SurveyController@show');
Route::post('/surveys/{questionnaire}-{slug}', 'SurveyController@store');

Route::get('/entitys', 'EntityController@index')->name('entity.index');
Route::put('/entitys/{entity}', 'EntityController@update')->name('entity.update');
Route::get('/entitys/create', 'EntityController@create')->name('entity.create');
Route::get('/entitys/{entity}', 'EntityController@show')->name('entity.show');
Route::get('/entitys/{entity}/edit', 'EntityController@edit')->name('entity.edit');
Route::post('/entitys', 'EntityController@store')->name('entity.store');
Route::delete('/entitys/{entity}', 'EntityController@destroy')->name('entity.destroy');

