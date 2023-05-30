<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class DemoApiController extends Controller
{
    public function category(){
        $category = Category::all();
        return response()->json([
            'status'=> 200,
            'message'=>'data get successfully',
            'data'=>$category
        ],200);
    }

    public function product(){
        $product = Product::all();
        return response()->json([
            'status'=>200,
            'message'=>'data get successfully',
            'data'=>$product
        ],200);
    }
}
