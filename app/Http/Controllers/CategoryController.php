<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        return view('category.index')->with('category',$category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create')->with('action','insert');
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
            'cat_name' => 'required',
            'sub_cat' => 'required',
            'detail' => 'required',
            'image' => 'required'
        ]); 

        $image = $request->file('image');
        $store = Storage::disk('public')->put('category',$image);
        $category = new Category();
        $category->cat_name = $request->cat_name;
        $category->sub_cat = $request->sub_cat;
        $category->detail = $request->detail;
        $category->image = $store;
        $category->save();
        return redirect('category')->with('status','store successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('category.create')->with('category',$category)->with('action','update');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'cat_name' => 'required',
            'sub_cat' => 'required',
            'detail' => 'required'
        ]);
        $category->cat_name = $request->cat_name;
        $category->sub_cat = $request->sub_cat;
        $category->detail = $request->detail;
        if (!empty($request->image)) {
            if (!empty($category->image)) {
                $imagepath = public_path().'/storage/'.$category->image;
                unlink($imagepath);
            }
            $image = $request->file('image');
            $store = Storage::disk('public')->put('category',$image);
            $category->image = $store;
        }
        $category->save();

        return redirect('category')->with('status','Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($category)
    {
        $category = Category::find($category);
        if (!empty($category)) {
            $category->delete();
            return response()->json([
                'success'=> $category
            ],200);
        }
        else{
            return response()->json([
                'error'=> 'not found'
            ],404);
        } 
    }
}