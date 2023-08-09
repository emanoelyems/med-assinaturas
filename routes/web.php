<?php
use LdapRecord\Connection;
use App\Http\Controllers\LdapController;
// use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('search-login');
});

Route::get('/layout', function () {
    return view('signatures.rmed');
});

Route::get('/form', function () {
    return view('form');
});

// Route::get('/form', [LdapController::class,'formData']);

// Route::get('/testar-ldap', [LdapController::class,'testar-ldap']);
Route::get('/search-result', [LdapController::class,'userSearch']);
// Route::redirect('/layout', '/signatures/rmed');

// Route::get('/form', [LdapController::class,'showForm']);
// Route::post('/form', [LdapController::class,'sendForm']);