<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use  App\Gender;

class ProductController extends Controller
{
    //

    public function add(){
        $categories = Category::select(['name'])->get();
        $genders = Gender::select(['gender'])->get();

        return view('admin.add-product')->with([
            'categories' => $categories,
            'genders' => $genders,
        ]);
    }
    public function store(Request $request){
     $this->validate($request,[
         'name' => 'required'
     ]);

        $data = $request->all();
        $product = new Product();
        $product->fill($data);

    }
}
