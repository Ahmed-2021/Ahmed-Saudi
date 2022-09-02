<?php

use App\Http\Controllers\create\createcontroller;
use App\Http\Controllers\products\productcontroller;
use App\Http\Controllers\Edit\Product_Editcontroller;
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
    return view('Admin_dash');
});
Route::get('ALL_Products', [productcontroller::class, "get_product"])->name("ALL_Products");
Route::get('create', [createcontroller::class, "create_product"])->name("create");
Route::get('Prouduct/edit/{id}', [Product_Editcontroller::class, "Product_Edit"])->name("Prouduct.edit");
Route::post('Post/Edit/{id}', [Product_Editcontroller::class, "Change_Title"])->name("Post.Edit");
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
