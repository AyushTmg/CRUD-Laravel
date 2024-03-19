<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get("/", [ProductController::class,"index"])->name("home");
Route::get("/products", [ProductController::class,"product_list"])->name("product-list");
Route::get("/products/create", [ProductController::class,"product_create"])->name('add-product');
Route::post("/products/create", [ProductController::class,"store_product"]);
Route::get("/products/{id}/edit", [ProductController::class,"edit_product"])->name('edit-product');
Route::put("/products/{id}/edit", [ProductController::class,"update_product"]);
Route::get("/products/{id}/delete", [ProductController::class,"delete_product"])->name('delete-product');




