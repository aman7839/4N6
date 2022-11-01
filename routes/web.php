<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\AwardsController;
use App\Http\Controllers\UsersGuideController;
use App\Http\Controllers\HomeController;



Route::get('/', function () {
    return view('frontendviews.home');
})->middleware('login');




// Route::get('/admin/login', [DashboardController::class, 'login'])->name('login')->middleware('login');

// Route::post('/admin/login', [DashboardController::class, 'loginAdmin']);

// Route::get('/admin', [DashboardController::class, 'login'])->middleware('login');


// admin protected routes

Route::prefix('admin')->group(function () {
Route::get('/login', [DashboardController::class, 'login'])->name('login')->middleware('login');

Route::post('/login', [DashboardController::class, 'loginAdmin']);

Route::get('/', [DashboardController::class, 'login'])->middleware('login');

Route::middleware(['auth', 'admin'])->group(function () {
 
Route::get('/index', [DashboardController::class, 'index']);

Route::get('/editProfile/{id}', [DashboardController::class, 'editProfile']);
Route::put('/updateProfile/{id}', [DashboardController::class, 'updateprofile']);

Route::get('/changePassword',[DashboardController::class, 'showChangePasswordGet'])->name('changePasswordGet');

Route::post('/changePassword',[DashboardController::class, 'changePasswordPost'])->name('changePasswordPost');

Route::get('/users', [DashboardController::class, 'users']);

Route::get('/addusers', [DashboardController::class, 'addusers']);

Route::post('/saveUsers', [DashboardController::class, 'saveUsers'])->name('users.save');

Route::get('/editUsers/{id}', [DashboardController::class, 'editUsers']);

Route::put('/updateUsers/{id}', [DashboardController::class, 'updateUsers'])->name('update.users');

Route::get('deleteuser/{id}', [DashboardController::class, 'destroy']);

Route::get('/awards', [AwardsController::class,'index']);

Route::get('/editAwards/{id}', [AwardsController::class, 'editAwards']);

Route::put('/updateAwards/{id}', [AwardsController::class, 'updateAwards']);

Route::get('/deleteAwards/{id}', [AwardsController::class, 'deleteAwards']);

Route::get('/logout', [DashboardController::class, 'logout']);

Route::get('/documents', [UsersGuideController::class,'index']);

Route::get('/adddocuments', [UsersGuideController::class,'adddocuments']);

Route::post('/savedocuments', [UsersGuideController::class,'savedocuments']);

Route::get('/editdocuments/{id}', [UsersGuideController::class, 'editDocuments']);

Route::put('/updatedocuments/{id}', [UsersGuideController::class, 'updateDocuments']);

Route::get('/deletedocuments/{id}', [UsersGuideController::class, 'deleteDocuments']);

Route::get('/awards', [AwardsController::class,'index']);

Route::get('/addawards', [AwardsController::class,'addawards']);

Route::post('/saveawards', [AwardsController::class,'saveawards'])->name('awards.save');

});

});

// 

Route::get('/aboutUs', [HomeController::class,'aboutUs']);
Route::get('/contactUs', [HomeController::class,'contactUs']);
Route::get('/documents', [HomeController::class,'documents']);
Route::get('/register', [HomeController::class,'register']);
Route::get('/school', [HomeController::class,'school']);
Route::get('/tutorial', [HomeController::class,'tutorial']);
Route::get('/services', [HomeController::class,'services']);
Route::get('/login', [HomeController::class,'login']);



















