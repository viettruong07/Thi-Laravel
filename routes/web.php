<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibraryController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
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
    $library  = DB::table('library')->get();
    return view('/information', compact('library'));
});

Route::get('/add', function () {
    return view('/create_library');
});

Route::post('/create', function (Request $request) {
    DB::table('library')->insert([
        'authorid' => $request->input('authorid'),
        'title' => $request->input('title'),
        'ISBN' => $request->input('isbn'),
        'pub_year' => $request->input('pub_year'),
        'available' => $request->input('available'),
    ]);
    return redirect('/')->with('success');
});

Route::get('/search', function(){
    return view('/search');
});
Route::get('searchTitle', [LibraryController::class, 'search']);
