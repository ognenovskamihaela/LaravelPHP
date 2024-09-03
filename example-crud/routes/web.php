<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetshopController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    //petshops crud
Route::resource('petshops', PetshopController::class);

Route::get('/petshop',[PetshopController::class,'index'])->name('petshop.index');
Route::get('/petshop/petshops-create',[PetshopController::class,'petshops'])->name('petshop.petshops-create');
Route::post('/petshop',[PetshopController::class,'store'])->name('petshop.store');
Route::get('/petshop/{petshop}/edit', [PetshopController::class, 'edit'])->name('petshop.petshops-edit');
Route::put('/petshop/{petshop}/update',[PetshopController::class,'update'])->name('petshop.petshops-update');
Route::delete('/petshop/{petshop}/delete',[PetshopController::class,'delete'])->name('petshop.petshops-delete');
//poroducts crud
Route::resource('products', ProductController::class);

Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/products-create', [ProductController::class, 'productsCreate'])->name('product.products-create');
Route::post('/product', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.products-edit');
Route::put('/product/{product}/update', [ProductController::class, 'update'])->name('product.products-update');
Route::delete('/product/{product}/delete', [ProductController::class, 'delete'])->name('product.products-delete');

//employees crud
Route::resource('employees', EmployeeController::class);

Route::get('/employee', [EmployeeController::class, 'index'])->name('employee.index');
Route::get('/employee/employees-create', [EmployeeController::class, 'employeesCreate'])->name('employee.employees-create');
Route::post('/employee', [EmployeeController::class, 'store'])->name('employee.store');
Route::get('/employee/{employee}/edit', [EmployeeController::class, 'edit'])->name('employee.employees-edit');
Route::put('/employee/{employee}/update', [EmployeeController::class, 'update'])->name('employee.employees-update');
Route::delete('/employee/{employee}/delete', [EmployeeController::class, 'delete'])->name('employee.employees-delete');



    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
