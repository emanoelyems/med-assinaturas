<?php
use LdapRecord\Connection;
use App\Http\Controllers\LdapController;
use App\Http\Controllers\teste2Controller;
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
    return view('layout');
});

Route::get('/layout', function () {
    return view('signatures.rmed');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/data', [LdapController::class,'data']);

// Route::get('/testar-ldap', [LdapController::class,'testar-ldap']);
Route::get('/testar-ldap', [teste2Controller::class,'teste99']);

// Route::redirect('/layout', '/signatures/rmed');