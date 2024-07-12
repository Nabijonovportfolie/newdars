<?php

use Illuminate\Support\Facades\Route;
use App\Elon;
use App\Navbar;
use App\Banner;
use App\Lesson;
use App\Boglanish;
use App\Kurs;
use App\Maktab;
use App\Yangilik;

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
        
    $olish = Elon::all();
    $ol = Navbar::all();
    $banner = Banner::all();
    $lesson = Lesson::all();
    $boglanish = Boglanish::all();
    $kurs = Kurs::all();
    $malumot = Maktab::all();
    $yangilik = Yangilik::all();

    return view('welcome',[
        'elon'=>$olish,
        'navbar'=>$ol,
        'banner'=>$banner,
        'lesson'=>$lesson,
        'boglanish'=>$boglanish,
        'kurs'=>$kurs,
        'malumot'=>$malumot,
        'yangilik'=>$yangilik
    ]); 


});
    
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/elon', 'HomeController@elon');
Route::get('/navbar', 'HomeController@navbar');
Route::get('/banner', 'HomeController@banner');
Route::get('/lesson', 'HomeController@lesson');
Route::get('/kurs', 'HomeController@kurs');
Route::get('/malumot', 'HomeController@malumot');
Route::get('/boglanish', 'HomeController@boglanish');
Route::get('/yangilik', 'HomeController@yangilik');

Route::get('/userAdd', 'HomeController@userAdd');
Route::post('/userSave', 'HomeController@userSave');

Route::get('/elonAdd', 'HomeController@elonAdd');
Route::post('/elonSave', 'HomeController@elonSave');

Route::get('/navbarAdd', 'HomeController@navbarAdd');
Route::post('/navbarSave', 'HomeController@navbarSave');

Route::get('/bannerAdd', 'HomeController@bannerAdd');
Route::post('/bannerSave', 'HomeController@bannerSave');

Route::get('/lessonAdd', 'HomeController@lessonAdd');
Route::post('/lessonSave', 'HomeController@lessonSave');

Route::get('/kursAdd', 'HomeController@kursAdd');
Route::post('/kursSave', 'HomeController@kursSave');

Route::get('/malumotAdd', 'HomeController@malumotAdd');
Route::post('/malumotSave', 'HomeController@malumotSave');

Route::get('/boglanishAdd', 'HomeController@boglanishAdd');
Route::post('/boglanishSave', 'HomeController@boglanishSave');

Route::get('/yangilikAdd', 'HomeController@yangilikAdd');
Route::post('/yangilikSave', 'HomeController@yangilikSave');

Route::get('/userEdit/{id}', 'HomeController@userEdit');
Route::post('/userEditSave/{id}', 'HomeController@userEditSave');

Route::get('/elonEdit/{id}', 'HomeController@elonEdit');
Route::post('/elonEditSave/{id}', 'HomeController@elonEditSave');

Route::get('/navbarEdit/{id}', 'HomeController@navbarEdit');
Route::post('/navbarEditSave/{id}', 'HomeController@navbarEditSave');

Route::get('/bannerEdit/{id}', 'HomeController@bannerEdit');
Route::post('/bannerEditSave/{id}', 'HomeController@bannerEditSave');

Route::get('/lessonEdit/{id}', 'HomeController@lessonEdit');
Route::post('/lessonEditSave/{id}', 'HomeController@lessonEditSave');

Route::get('/malumotEdit/{id}', 'HomeController@malumotEdit');
Route::post('/malumotEditSave/{id}', 'HomeController@malumotEditSave');

Route::get('/kursEdit/{id}', 'HomeController@kursEdit');
Route::post('/kursEditSave/{id}', 'HomeController@kursEditSave');

Route::get('/yangilikEdit/{id}', 'HomeController@yangilikEdit');
Route::post('/yangilikEditSave/{id}', 'HomeController@yangilikEditSave');

Route::get('/xabarEdit/{id}', 'HomeController@xabarEdit');
Route::post('/xabarEditSave/{id}', 'HomeController@xabarEditSave');


Route::get('/delete/{id}', 'HomeController@xabarDelete');
Route::post('/xabarsave', 'XabarController@xabarsave');
