<?php

use App\Http\Controllers\librarian\ViewListController as LibrarianViewListController;
use App\Http\Controllers\librarian\AddBookController as LibrarianAddBookController;
use App\Http\Controllers\librarian\ViewBorrowedController as LibrarianViewBorrowedController;


use App\Http\Controllers\admin\DashboardController as AdminDashboardController;


use App\Http\Controllers\student\ClickableController as StudentClickableController;
use App\Http\Controllers\student\ListController as StudentListController;
use App\Http\Controllers\student\AddBookController as StudentAddBookController;
use App\Http\Controllers\student\AvailableBookController as StudentAvailableController;
use App\Http\Controllers\student\BookInfoController as StudentBookInfoController;
use App\Http\Controllers\student\DashboardController as StudentDashboardController;

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;



Route::get('/library', function () {
    return view('library');
});


Route::get('/dashboard', function () {
    return view('user.dashboard');
});

Route::get('/list', function () {
    return view('list');
});

Route::get('/borrowed', function () {
    return view('borrowed');
});

Route::get('/returned', function () {
    return view('returned');
});

Route::group(['middleware' => 'guest'], function() {
    //GUEST MIDDLEWARE - This is the landing page
    Route::get('/', [LoginController::class, 'index'])->name('account.login');
});


Route::group(['prefix' => 'account'], function() {
    //Guest Middleware
    Route::group(['middleware' => 'guest'], function() {
        Route::get('register', [LoginController::class, 'register'])->name('account.register');
        Route::post('authenticate', [LoginController::class, 'authenticate'])->name('account.authenticate');
        Route::post('process-register', [LoginController::class, 'processRegister'])->name('account.processRegister');
    });
    //Authenticated Middleware
    Route::group(['middleware' => 'auth'], function() {
        Route::get('logout', [LoginController::class, 'logout'])->name('account.logout');
        Route::get('dashboard', [StudentDashboardController::class, 'index'])->name('account.dashboard');
        Route::get('list', [StudentListController::class, 'viewList'])->name('account.list');
        Route::post('book/{id}', [StudentBookInfoController::class, 'clickableCard'])->name('book.show');
        Route::get('book/{id}', [StudentBookInfoController::class, 'clickableCard'])->name('book.show');
    });
    
});

Route::get('librarian/dashboard', [LibrarianViewListController::class, 'viewList'])->name('librarian.dashboard');
Route::post('librarian/authenticate', [LibrarianLoginController::class, 'authenticate'])->name('librarian.authenticate');
Route::get('librarian/logout', [LibrarianLoginController::class, 'logout'])->name('librarian.logout');
Route::post('lbrarian/process-register', [LibrarianLoginController::class, 'processRegister'])->name('librarian.processRegister');
Route::get('librarian/add', [LibrarianAddBookController::class, 'viewAdd']);
Route::post('librarian/add', [LibrarianAddBookController::class, 'addBook'])->name('librarian.add');
Route::get('librarian/borrowed', [LibrarianViewBorrowedController::class,'viewBorrowed']);



Route::get('/add', [StudentAddBookController::class, 'viewAdd']);
Route::post('/add', [StudentAddBookController::class, 'addBook'])->name('add.books');
Route::get('/available', [StudentAvailableBookController::class,'viewAvailable']);
Route::get('/list',[StudentListController::class, 'viewList']);









