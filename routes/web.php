<?php

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

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/addnew', [App\Http\Controllers\AddNewController::class, 'index'])->name('addnew');
Route::post('/addnew',[App\Http\Controllers\AddNewController::class, 'store'])->name('newsStore');

Route::post('/deleteEvent', [App\Http\Controllers\DestroyController::class, 'deleteEvent'])->name('deleteEvent');
Route::post('/deleteUser', [App\Http\Controllers\DestroyController::class, 'deleteUser'])->name('user.delete');
Route::post('/deleteComment', [App\Http\Controllers\DestroyController::class, 'deleteComment'])->name('deleteComment');
Route::post('/deleteTicket', [App\Http\Controllers\DestroyController::class, 'deleteTicket'])->name('deleteTicket');
Route::post('/deleteNew', [App\Http\Controllers\DestroyController::class, 'deleteNew'])->name('deleteNew');


Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog');


Route::get('/movies', function (){
    return view('movies');
})->name('movies');


Route::get('/profile',[App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::post('/profile',[App\Http\Controllers\ProfileController::class, 'store'])->name('profile.store');

Route::get('/profile/{email}',[App\Http\Controllers\ProfileController::class, 'userprofile'])->name('userprofile');
Route::get('/profile/ticket/{ticket}',[App\Http\Controllers\ProfileController::class, 'ticket'])->name('ticketPDF');

Route::get('/search/{item}',[App\Http\Controllers\SearchController::class, 'index'])->name('search');
Route::post('/search/{item}',[App\Http\Controllers\SearchController::class, 'store'])->name('search.store');

Route::get('tickets/{item}', [App\Http\Controllers\TicketController::class, 'index'])->name('tickets');
Route::post('tickets/{item}', [App\Http\Controllers\TicketController::class, 'store'])->name('tickets.store');

Route::get('details/');
