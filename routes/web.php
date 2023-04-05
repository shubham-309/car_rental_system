<?php
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\FrontController;



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

Route::get('/' , [FrontController::class, 'index']);
Route::get('categoriy' , [FrontController::class, 'category']);
Route::get('view-category/{slug}' , [FrontController::class, 'viewcategory']);
Route::get('category/{cate_slug}/{cars_slug}' , [FrontController::class, 'carsview']);
Route::get('booking/{start_date}' , [BookingController::class, 'available']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function (){

    Route::get('booking' , [BookingController::class, 'book']);


});


Route::group(['middleware' => ['auth','isAdmin']], function () {



    Route::get('/dashboard', [AdminController::class,'index1']);

/*Category CRUD*/

Route::get('/category', [CategoryController::class,'index']);
Route::get('/add-category', [CategoryController::class,'add']);
Route::post('/insert-category', [CategoryController::class,'insert']);
Route::get('edit-category/{id}', [CategoryController::class ,'edit']);
Route::put('update-category/{id}', [CategoryController::class , 'update'] );
Route::get('delete-category/{id}', [CategoryController::class, 'delete' ]);

/*Cars CRUD*/


Route::get('/cars', [CarsController::class,'index']);
Route::get('/add-cars', [CarsController::class,'add']);
Route::post('/add-cars', [CarsController::class,'insert']);
Route::get('edit-cars/{id}', [CarsController::class ,'edit']);
Route::put('update-cars/{id}', [CarsController::class , 'update'] );
Route::get('delete-cars/{id}', [CarsController::class, 'delete' ]);


/* Registered Users Information */

Route::get('Users', [UserController::class,'users']);
Route::get('view-user/{id}', [UserController::class,'viewuser']);


 });
