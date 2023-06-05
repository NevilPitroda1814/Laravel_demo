<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::with('category')->get();
        return view('product.index')->with('product',$product);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('product.create')->with('action','insert')->with('category',$category);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'pro_name'=>'required',
            'detail'=>'required',
            'status'=>'required',
            'image' => 'required'
        ]);

        // echo "test" or die();
        // $image = $request->file('image');
        // $store = Storage::disk('public')->put('product',$request->file('image'));
        // $product = new Product();
        // $product->pro_name = $request->pro_name;
        // $product->category_id = $request->category;
        // $product->detail = $request->detail;
        // $product->status = $request->status;
        // $product->image = $request->image;
        // $product->save();

        Product::updateOrCreate([
            'pro_name' => $request->pro_name,
            'category_id' => $request->category,
            'detail' => $request->detail,
            'status' => $request->status,
            'image' => $request->image
        ]);

        // return response()->json(['success'=>'Product saved successfully.'])->redirect('product.index')->with('status','store successfully');
        // return redirect('product.index')->with('status','store successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {   
        $category = Category::all();
    
        return view('product.create')->with('product',$product)->with('action','update')->with('category',$category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'pro_name'=>'required',
            'detail'=>'required',
            'status'=>'required'
        ]);

        $product->pro_name = $request->pro_name;
        $product->detail = $request->detail;
        $product->status = $request->status;
        if (!empty($request->file('image'))) {
            if (!empty($product->image)) {
                $imagepath= public_path() .'/storage/'.$product->image;
                unlink($imagepath);
            }
            $image = $request->file('image');
            $store = Storage::disk('public')->put('product',$request->file('image'));
            $product->image = $store;
        }
        $product->save();

        return redirect('product')->with('status','Update successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($product)
    {
        $product = Product::find($product);
        if (!empty($product)) {
            $product->delete();
            return response()->json([
                'success'=> $product
            ],200);
        }
        else{
            return response()->json([
                'error'=> 'not found'
            ],404);
        }
        
    }
}
