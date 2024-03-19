<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // ! For Index Page
    public function index(){
        return view("index");
    }

    // ! For Product List Page
    public function product_list(){
        $products = Product::get();
        return view("product/product_list",compact('products'));
    }

    // ! For Product Create Page
    public function product_create(){
        return view("product/product_create");
    }

    // ! For Storing Product
    public function store_product(Request $request){
        $request->validate(
            [
                'title'=>'required',
                'description'=>'required|max:50',
            ]
        );

        Product::create(
            [
                'title'=>$request->title,
                'description'=>$request->description,
                'is_available'=>$request->has('is_available')==true ? 1 : 0
            ]
        );
        redirect("product-list")->with('status',"The Product is successfully created");
    }

    // ! For Editing Product 
    public function edit_product($id){
        $product = Product::findOrFail($id);
        return view("product/edit_product",compact("product"));
    }

    // ! For Updating the Product
    public function update_product(Request $request, $id){
        $request->validate(
            [
                'title'=>'required',
                'description'=>'required|max:50',
            ]
        );
        Product::findOrFail($id)->update(
            [
                'title'=>$request->title,
                'description'=>$request->description,
                'is_available'=>$request->has('is_available')==true ? 1 : 0
            ]
        );
        redirect("product-list")->with('status',"The Product is successfully updated");
    }

    
    // ! For Deleting the Product 
    public function delete_product($id){
        Product::findOrFail($id)->delete();
        redirect("product-list")->with('status',"The Product is successfully deleted");
    }
}