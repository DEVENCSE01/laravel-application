<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\BarcodeController;
use App\Http\Controllers\DropzoneController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\DB;
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
    return view('welcome');
});

// route for first laravel program
Route::get('/first', function () {
    return view('first');
}); 

// route for form-validation and flash-messages
Route::get('/form', [FormController::class, 'index']);
Route::post('store-form', [FormController::class, 'store']);

// Routes for To-Do Application
Route::get('/new-task', [TaskController::class, 'taskform']);
Route::post('store-task', [TaskController::class, 'store']);
Route::get('/to-do', [TaskController::class, 'retrive']);
Route::get('/task/{task}', function($id){

    $result = DB::delete('delete from assignments where id=?',[$id]);

    return redirect('to-do')->with('status', 'Task Submitted Successfully');
});

// Route for importing and exporting excl sheets
Route::controller(ExcelController::class)->group(function(){
    Route::get('excel', 'index');
    Route::get('data-export', 'export')->name('data.export');
    Route::post('data-import', 'import')->name('data.import');
});

// route for generating barcode
Route::get('/barcode', [BarcodeController::class, 'index'])->name('generate.barcode');

// route for sending emails
Route::get('/mail', function() { 
    return view('mail');
}); 
Route::get('/send-email', [MailController::class, 'sendEMail']);

// Route for Image uploadation
Route::get('/upload-image', [ImageController::class, 'imageform']);
Route::post('store-image', [ImageController::class, 'store']);

// dropzone routers
Route::controller(DropzoneController::class)->group(function(){
    Route::get('/file', 'index');
    Route::post('dropzone/store', 'store')->name('dropzone.store');
    // Route::post('/upload-file', 'fileUpload')->name('fileUpload');
});

// Route::get('/file', [DropzoneController::class, 'index']);
// Route::post('/upload-file', [DropzoneController::class, 'fileUpload']);



// php artisan migrate --path=/database/migrations/20


